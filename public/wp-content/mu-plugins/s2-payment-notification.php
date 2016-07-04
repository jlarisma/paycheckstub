<?php
//http://www.paycheckstubonline.com?s2_payment_notification=yes&user_id=%%user_id%%&item_number=%%item_number%%
//http://www.paycheckstubonline.com?s2_payment_notification=yes&payer_=%%item_number%%
//print_r($_GET); exit;
 add_action('init', 's2_payment_notification');
function s2_payment_notification(){
    if (!empty($_GET['s2_payment_notification']) && $_GET['s2_payment_notification'] === 'yes'){
        global $wpdb;

        $user_id = "-1";
        $payer_email = "-";
        $user_email = "-";
        $user_ip =  "-1";

        if (!empty($_GET['user_id'])){
            $user_id = $_GET['user_id'];
        }

        if (!empty($_GET['payer_email'])){
            $payer_email = $_GET['payer_email'];
        }

        if (!empty($_GET['user_email'])){
            $user_email = $_GET['user_email'];
        }

       // if (!empty($_GET['user_ip'])){
       //     $user_ip = $_GET['user_ip'];
       // }

        if (!empty($_GET['purchase_item'])){
            $purchase_item = $_GET['purchase_item'];
        }

       // echo ($user_id);
        error_reporting(E_ALL);

//$is_customer_paid = '1';
        require_once('/home/nginx/domains/paycheckstubonline.com/public/wkhtmltox/wkhtmltopdf.php');
        require_once('/home/nginx/domains/paycheckstubonline.com/public/paystub/_pages.inc');
        require_once('/home/nginx/domains/paycheckstubonline.com/public/paystub/util.php');
        require_once ('/home/nginx/domains/paycheckstubonline.com/public/wp-load.php' );


// ******************* CREATE USER IN USERS_PAID ****************************************************************************************
        $stub_limit = 0;
        switch ($purchase_item) {
            case "1::1 M":
                $stub_limit = 3;
                break;

            case "1":
                $stub_limit = 1;
                break;

            case "2::1 M":
                $stub_limit = 200;
                break;
            
            default:
                $stub_limit = -1;
        }


        $sql_select="INSERT INTO users_paid(user_id, purchase_item, info_email, payer_email, totalpdf)  VALUES ('".$user_id."','".$purchase_item."','".$user_email."','".$payer_email."', '".$stub_limit."')";
        $query = $wpdb->get_results( $sql_select );
        $wpdb->show_errors();

// **************************************************************************************************************************************




    	//this query gets the last transaction made by the user_id, payer_email, user_email?
        //$sql_get_params = "SELECT options FROM user_transaction WHERE id = '127438'";
        $sql_get_params = "SELECT * FROM user_transaction WHERE
                user_id = '".$user_id."' OR
                info_email = '".$payer_email."' OR
                info_email = '".$user_email."' ORDER BY id DESC LIMIT 1";

        
        $ccc1 = $wpdb->get_results($sql_get_params);                // array of rows of user_transaction
        $ccc3 = $ccc1[0]->options;
 	
	print_r($ccc1); exit;

        /*$wpdb->show_errors();
        $tot_stubs = $wpdb->num_rows;
        $last_stub = (($wpdb->num_rows)-1);
        $ccc3 = $ccc1[$last_stub]->options;*/


        $_REQUESTAR = json_decode(base64_decode($ccc3), true);
//var_dump($_REQUESTAR)."</br>";

        $lastName = $_REQUESTAR['emp_l_name'];
        //$email = 'george.strnad@gmail.com';
        $email = $user_email;
        $user = wp_get_current_user();
        $loginName = $user->user_login;

        function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
            $_REQUESTAR = array_merge($_REQUESTAR, $trx_options);
            return;
        }

        /**check level s2member*/
        $is_customer_paid = 1;
        $_REQUESTAR['is_customer_paid'] = $is_customer_paid ;

        $pdf_pages = paystub_get_pages('');
        $urlid = $_REQUESTAR['stub_id'];
        $serverHome = getServerHome();
        $baseUrl = $serverHome.'paystub/';
        $pageStyle = $pdf_pages[$urlid][0];

        $url = $baseUrl .$pdf_pages[$urlid][1];   // the url of the desired stubb

        $num_stubs = $_REQUESTAR['num_stubs'];
        $pageList = '';

// filter POST params
        if ( !function_exists('arrToParam')){
            function arrToParam($arr){
                $paramStr= '';
                foreach ( $arr as $key=>$value){
                    if ( is_array($value)){
                        foreach ($value as $k => $v){
                            $paramStr .= "&{$key}[$k]=$v";
                        }
                    }else{
                        $paramStr .= "&$key=$value";
                    }
                }
                return $paramStr;
            }
        }
//_________________________________________________

        $paramsSESe = array();

        for ( $i = 0; $i < $num_stubs; $i++){
           // $_REQUESTAR['check_num'] = "$check_num_base-$i";
            $_REQUESTAR['prd_num'] = $i; 							// set the current period stub
            $params = arrToParam($_REQUESTAR);					//  function, above, parses all the _requst vars  //  I DON'T think $params is used anywhere
            $ix = $i + 1;

            $pdf = new WkHtmlToPdf();
            $page = $pdf->curlGetData($url, $_REQUESTAR, "post");
            $pdf->addPage($page);
            //$pdf->send('sdfds.pdf');

         //   echo"<pre>";
            //print_r($_REQUEST);
         //   echo 'Prepaire PDF';
            // print_r($_REQUESTAR);
         //   echo"</pre>";
            $content_pdf = file_get_contents($pdf->getPdfFilename());
            //echo $content_pdf;
            $paramsSESe['files'][$ix]["filecontent"] = base64_encode($content_pdf);
            $paramsSESe['files'][$ix]["name"] = "Paycheckstub_$ix.pdf";
            $paramsSESe['files'][$ix]["mime"] = "application/pdf";
        }

// to send them all in one mail
            $email_message = "<p>Pagestyle = {$pageStyle} </p>";
            $email_message .= "number of stubs =".$num_stubs. "</p>";
            $email_message .= "USER ID = ".$user_id. "</p>";
            $email_message .= "LOGIN NAME = ".$loginName. "</p>";
            $email_message .= "User Last Name = ".$lastName. "</p>";
            $email_message .= "Users IP ADDRESS = ".$user_ip. "</p>";
            //$email_message .= "REQUESTAR = ".$_REQUESTAR. "</p>";
               // foreach($_REQUESTAR as $key => $value){
               //     $email_message .= "array item = ".$key." --> ".$value. "</p>";
               // }
       // $body = $email_message;
        $body = "Thank you, Enjoy Your Stub";

        require_once("/home/nginx/domains/paycheckstubonline.com/public/ses/SESUtils.php");
        $paramsSESe["to"] = $email;
        $paramsSESe["subject"] = "Your {$pageStyle} From Paycheck Stub online";
        $paramsSESe["message"] = $body;
        $paramsSESe["from"] = "info@paycheckstubonline.com";
//print_r($paramsSESe);

        $res = SESUtils::sendMail($paramsSESe);


        if ($res->success) {
            $status_msg = "success paid";
            
            
            //global $wpdb;
         //   $sql_insert9 = "INSERT INTO user_transaction(status, user_id, user_ip, options, info_email) VALUES ('$status_msg', '$user_id', '$user_ip', 'yayy', 'yessssss' )";
         //   $wpdb->query($sql_insert9);
          //  echo 'Message SES has been sent. ';

            /*$new_current_user_id = 0;
            $user = wp_get_current_user();
            $new_current_user_id = $user->id;

            $sql_update	= "UPDATE user_transaction SET status = payed_cc, payed = 1, premium = stubname, user_id = '".$new_current_user_id."' WHERE id = '".$ccc1[$last_stub]->id."'";
            echo $sql_update; exit;
            $query = $wpdb->query($sql_update);
            $wpdb->show_errors();*/
		
	    $sql_update_paid = "UPDATE user_transaction SET status='$status_msg', payed=$is_customer_paid WHERE id = " . $ccc1[0]->id;
            $wpdb->query($sql_update_paid);
        }
    }
}
?>
