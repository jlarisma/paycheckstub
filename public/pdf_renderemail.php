<?php
error_reporting(E_ALL);

//$is_customer_paid = '1';
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_pages.inc');
require_once(__DIR__.'/paystub/util.php');

// ---  ADDED by GEORGE -------------------------------
require_once ( __DIR__ . '/wp-load.php' );
	$_REQUESTAR = json_decode(base64_decode($_REQUEST['aaa']), true);
	
	
// --- added by George for S2-upgrade
		$firstName = $_REQUESTAR['emp_f_name'];
		$lastName = $_REQUESTAR['emp_l_name'];
		$email = $_REQUESTAR['emp_email'];
		$user = wp_get_current_user();
		$user_id = $user->id;// The ID of the user to remove the capability from.$user = wp_get_current_user();
		$loginName = $user->user_login;
		$payed = $_REQUEST['payed'];



function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
	$_REQUESTAR = array_merge($_REQUESTAR, $trx_options);
    return;
}

/**check level s2member*/
$is_customer_paid = 0;
if(current_user_is("subscriber")){
	$is_customer_paid =  0; 
	//$sql_select="SELECT totalpdf FROM users_paid WHERE user_id = '".$user->ID."'";
	//$totalpdf = $wpdb->get_var( $sql_select );
	//if ($totalpdf >1){$is_customer_paid =  1; }
}

else if(current_user_is("s2member_level1")){
	$sql_select="SELECT totalpdf FROM users_paid WHERE user_id = '".$user->ID."'";
	$totalpdf = $wpdb->get_var( $sql_select );
	//$sql_select="UPDATE users_paid SET totalpdf = totalpdf -1, info_email = '".$totalpdf."'";
	//$query = $wpdb->query( $sql_select );
	
/*	if ($totalpdf <=1){
			$sql_select="DELETE users_paid SET user_id = '".$user->ID."'";
			$query = $wpdb->query( $sql_select );			
			//$caps = $_REQUEST['caps'];
			// Remove a capability from a specific user.
			$user1 = new WP_User( $user_id );
			$caps = 'access_s2member_level1';//$user->caps;
			$user1->remove_cap($caps);
			$user1->add_cap('access_s2member_level0');
			$user1->add_cap('subscriber');
			$user1->remove_role("s2member_level1");
			$user1->set_role("s2member_level0");
			$user1->set_role("subscriber");
		}
*/
	//echo ("this is info_data->payed ".$payed);
	if ($totalpdf > 0){
		$is_customer_paid = 1;   			  //I added this to circumvent the PREVIEW
			if ($payed <= 0) {                // GS added this dec 28-2015 to stop using credits if they already paid for specific stub
				$sql_select = "UPDATE users_paid SET totalpdf = totalpdf -1 WHERE user_id = '".$user->ID."'";
				$query = $wpdb->query($sql_select);
			}
		//}
		//echo'<script>console.log($query)</script>';	
		//$wpdb->show_errors();		
		//$stubids = $_REQUEST['stubidss'];
		//$sql_select="UPDATE users_paid SET totalpdf = totalpdf -1, info_email = '".$stubids."'";		
		//set payed for the stub
		$stubids = $_REQUEST['stubidss'];
		$sql="UPDATE user_transaction SET payed = 1 WHERE id = $stubids ;";
		$query = $wpdb->query( $sql);
	}else{
		$is_customer_paid =  0; 
	}
}



if(current_user_can("access_s2member_level2")){               //you are UNLIMITITED
	$is_customer_paid =  1;   				                 //I added this to circument the PREVIEW
}
//$payed = $_REQUEST['stubidss'];                 // i think this was a type, should be below
//$trx_options['is_customer_paid'] = 1; 
//pdf_provide($trx_options);
if ($payed > 0) { $is_customer_paid =  1;  }
//$is_customer_paid = 1;//add premium PDF for all users
$_REQUESTAR['is_customer_paid'] = $is_customer_paid ; 


//__________________________________________________________________
//$_REQUEST['stub_id']=$_REQUESTAR['stub_id'];
$pdf_pages = paystub_get_pages('');
$urlid = $_REQUESTAR['stub_id'];
$serverHome = getServerHome();
$baseUrl = $serverHome.'paystub/';
$pageStyle = $pdf_pages[$urlid][0];
//if ($pageStyle ==''){ $pageStyle= 'Modern';}
$url = $baseUrl .$pdf_pages[$urlid][1];   // the url of the desired stubb

//if ($url == $baseUrl){ $url = $baseUrl.'modern_paystub_preview.php';}
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


//==============================================
///========= mailing section ===================
//==============================================
$link_download = "<html><a href='http://www.paycheckstubonline.com/download-my-stub/?u=".$user_id."&l=".$loginName."&p=".$lastName."'>VIEW and BUY all your Stubs</a></html>";
$link_edit_profile = "<html><a href='http://www.paycheckstubonline.com/wp-admin/profile.php'>EDIT MY PROFILE page</a></html>";



$email_message = "<p>Enjoy your Preview of {$pageStyle} below, Please tell us how we can improve it.</p>".$num_stubs;
$email_message .= "Click here to &quot;.$link_download.&quot; , thanks. </p>";
$email_message .= "Your Login information is: </p>";
$email_message .= "Your User-Login = ".$loginName. "</p>";
$email_message .= "Your ACCOUNT menu = ".$link_edit_profile. "</p>";
$body = $email_message;
$paramsSESe = array();

echo ("sending email to ".$email);

for ( $i = 0; $i < $num_stubs; $i++){
    $_REQUESTAR['check_num'] = "$check_num_base-$i";
    $_REQUESTAR['prd_num'] = $i; 							// set the current period stub
    $params = arrToParam($_REQUESTAR);					    //  function, above, parses all the _requst vars
      $ix = $i + 1;
     
    $pdf = new WkHtmlToPdf();
    $page = $pdf->curlGetData($url, $_REQUESTAR, "post");
    $pdf->addPage($page);
    //$pdf->send('sdfds.pdf');


echo"<pre>";
	  //print_r($_REQUEST);
	 echo 'Prepaire PDF';
   // print_r($_REQUESTAR);
echo"</pre>";
    $content_pdf = file_get_contents($pdf->getPdfFilename());
    //echo $content_pdf;
	$paramsSESe['files'][$ix]["filecontent"] = base64_encode($content_pdf);
	$paramsSESe['files'][$ix]["name"] = "Paycheckstub_$ix.pdf";
	$paramsSESe['files'][$ix]["mime"] = "application/pdf";
}
// to send them all in one mail ?

	//$email = 'hoanganhhung.vp@gmail.com';
require_once("/home/nginx/domains/paycheckstubonline.com/public/ses/SESUtils.php");
$paramsSESe["to"] = $email;
$paramsSESe["subject"] = "Your {$pageStyle} From Paycheck Stub online";
$paramsSESe["message"] = $body;
$paramsSESe["from"] = "info@paycheckstubonline.com";
//print_r($paramsSESe);
//OPTIONAL
//"replyTo" => "reply_to@gmail.com",
$res1 = SESUtils::sendMail($paramsSESe);
//print_r($paramsSESe);
//print_r($res);

if ( $res1->success){
 echo 'Message SES has been sent PT.';
}
else{
 echo 'Sorry there was an error PT '; 
}
echo ("step1");

//echo "<script>window.location = 'http://www.paycheckstubonline.com/thanks-try-creat-pay-check-bankstatement/'</script>";

//$pdfAll->send('Paystub.pdf');
/*
error_reporting(E_ALL);
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_addpages.inc');
require_once(__DIR__.'/paystub/util.php');
require_once(__DIR__.'/wp-load.php' );
	

// Stub Style Num of Stubs, and Check Num
$pdf_pages = add_paystub_get_pages('');		  	// returns array of paths to render files
$urlid = $_REQUESTAR['add_stub_id'];			  	// style															
$serverHome = getServerHome();				// Website path
$baseUrl = $serverHome.'paystub/';			// Website path + /paystub
$pageStyle = $pdf_pages[$urlid][0];			// gets the style of the request, and finds the path (name)
$url = $baseUrl .$pdf_pages[$urlid][1];     // the url of the desired stubb, second value (number value)
$num_stubs = $_REQUESTAR['num_stubs'];	
$pageList = '';
$check_num_base = $_REQUESTAR['check_num'];

// Mailing section ===============================================================================================================
$body .= "<html><a href='http://www.paycheckstubonline.com/download-my-stub/?u=".$user_id."&l=".$loginName."&p=".$lastName."'>VIEW and BUY all your Stubs</a></html><br>";
$body .= "<html><a href='http://www.paycheckstubonline.com/wp-admin/profile.php'>EDIT MY PROFILE page</a></html><br>";

$toEmail = empty($_REQUESTAR['from_paypal']) ? $_REQUESTAR['emp_email'] : $_REQUESTAR['payinfo']['payer_email'];

$body = "<p>Enjoy your Preview of {$pageStyle} below, Please tell us how we can improve it.</p>";

$paramsSES2 = array();

for ($i = 0; $i < $num_stubs; $i++){
    $_REQUESTAR['check_num'] = "$check_num_base-$i";
    $_REQUESTAR['prd_num'] = $i; 							// set the current period stub
    $params = arrToParam($_REQUESTAR);					//  function, above, parses all the _requst vars
      $ix = $i + 1;
       //$sql_insert2 = "INSERT INTO tbl_paystubs(user_id, options, info_email) VALUES ('$user_id', '$params', '$email' )";  
	 //$wpdb->query($sql_insert2 );
	   echo "<br/>-----------------------------Stub ".$ix." Printed-----------------------------------------------------<br/>";
    $pdf = new WkHtmlToPdf();
    
    $page = $pdf->curlGetData($url, $_REQUESTAR, "post");
	
	echo"<pre>";
	echo $url;
	echo 'request arr';
	  print_r($_REQUESTAR);
	echo"</pre>";

    $pdf->addPage($page);
    $content_pdf = file_get_contents($pdf->getPdfFilename());

	
	$paramsSES2['files'][$ix]["filecontent"] = base64_encode($content_pdf);
	$paramsSES2['files'][$ix]["name"] = "BankStatement_$ix.pdf";
	$paramsSES2['files'][$ix]["mime"] = "application/pdf";
}
require_once("/home/nginx/domains/paycheckstubonline.com/public/ses/SESUtils.php");
$paramsSES2["to"] = $email;
$paramsSES2["subject"] = "Your {$pageStyle} Bank Statement From Paycheck Stub online";
$paramsSES2["message"] = $body;
$paramsSES2["from"] = "info@paycheckstubonline.com";
//OPTIONAL
//"replyTo" => "reply_to@gmail.com",
$res2 = SESUtils::sendMail($paramsSES2);
//print_r($paramsSES);
print('<script>'.$res2.'</script>');
	if ( $res2->success){
	 echo 'Message SES has been sent BT .';
	}
	else{
	 echo 'Sorry there was an error BT'; 
	}
	
	*/
	
echo "<script>window.location = 'http://www.paycheckstubonline.com/download-my-stub/'</script>";

//    }

?>