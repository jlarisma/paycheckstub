<?php
error_reporting(E_ALL);

//$is_customer_paid = '1';
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_pages.inc');
require_once(__DIR__.'/paystub/util.php');

// ---  ADDED by GEORGE -------------------------------
require_once ( __DIR__ . '/wp-load.php' );
	
// --- added by George for S2-upgrade
		$firstName = $_REQUEST['emp_f_name'];
		$lastName = $_REQUEST['emp_l_name'];
		$email = $_REQUEST['emp_email'];

if (!is_user_logged_in()){
	 echo ("not logged");
	// CHECK EMAIL FROM THE INFO FORM, AND IF THERE IS THE SAME, THEN USE IT
		$loginName = rand(10000000,1000000000000);
		$user_datas = array(
                //'ID' => '',
                'user_pass' => $lastName,
                'user_login' => $loginName,
				//'user_email' => 'george.strnad@gmail.com', 	// CHECK INTO CHECKING THE EMAIL, IF THE USER EXISTS.. MAYBE REAL TIME?  AND LOG THEM IN
                'display_name' => $lastName,
                'first_name' => $firstName,
                'last_name' => $lastName
               // 'role' => get_option('default_role') 			// Use default role or another role, e.g. 'editor'
            );
            $user_id = wp_insert_user( $user_datas );
            //wp_set_password($lastName, $user_id);
		$creds['user_login'] = $loginName;
		$creds['user_password'] = $lastName;
		$creds['remember'] = true;
		
		$user = wp_signon( $creds, false );
			if ( is_wp_error($user) ): echo $user->get_error_message(); endif;

		//wp_set_current_user($u,$l);
		//wp_set_auth_cookie($u, true, false);
		//do_action( 'wp_login', $l);
		}
else{
		echo ("is logged LOGGED");
		$user = wp_get_current_user();
		$user_id = $user->id;
		$loginName = $user->user_login;
	}
	

	
function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
    $_REQUEST = array_merge($_REQUEST, $trx_options);
    return;
}

$trx_options['is_customer_paid'] = 1;   				//I added this to circument the PREVIEW
pdf_provide($trx_options);
//__________________________________________________________________


$pdf_pages = paystub_get_pages('');
$urlid = $_REQUEST['stub_id'];
$serverHome = getServerHome();
$baseUrl = $serverHome.'paystub/';
$pageStyle = $pdf_pages[$urlid][0];
$url = $baseUrl .$pdf_pages[$urlid][1];   // the url of the desired stubb
$num_stubs = $_REQUEST['num_stubs'];
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

$email = empty($_REQUEST['from_paypal']) ? $_REQUEST['emp_email'] : $_REQUEST['payinfo']['payer_email'];


$email_message = "<p>Enjoy your Preview of {$pageStyle} below, Please tell us how we can improve it.</p>".$num_stubs;
$email_message .= "Click here to &quot;.$link_download.&quot; , thanks. </p>";
$email_message .= "Your Login information is: </p>";
$email_message .= "Your User-Login = ".$loginName. "</p>";
$email_message .= "Your Password = ".$lastName. "</p>";
$email_message .= "Your ACCOUNT menu = ".$link_edit_profile. "</p>";
$body = $email_message;
$paramsSESe = array();


for ( $i = 0; $i < $num_stubs; $i++){
    $_REQUEST['check_num'] = "$check_num_base-$i";
    $_REQUEST['prd_num'] = $i; 							// set the current period stub
    $params = arrToParam($_REQUEST);					//  function, above, parses all the _requst vars
      $ix = $i + 1;
      echo($params);
    $pdf = new WkHtmlToPdf();
    $page = $pdf->curlGetData($url, $_REQUEST, "post");
    $pdf->addPage($page);
    $content_pdf = file_get_contents($pdf->getPdfFilename());
	$paramsSESe['files'][$ix]["filecontent"] = base64_encode($content_pdf);
	$paramsSESe['files'][$ix]["name"] = "Paycheckstub_$ix.pdf";
	$paramsSESe['files'][$ix]["mime"] = "application/pdf";
}
// to send them all in one mail ?


require_once("/home/nginx/domains/paycheckstubonline.com/public/ses/SESUtils.php");
$paramsSESe["to"] = $email;
$paramsSESe["subject"] = "Your {$pageStyle} From Paycheck Stub online";
$paramsSESe["message"] = $body;
$paramsSESe["from"] = "info@paycheckstubonline.com";
print_r($paramsSESe);
//OPTIONAL
//"replyTo" => "reply_to@gmail.com",
$res1 = SESUtils::sendMail($paramsSESe);
//print_r($paramsSESe);
//print_r($res);

if ( $res->success){
 echo 'Message SES has been sent .';
}
else{
 echo 'Sorry there was an error '; 
}
echo ("step");
/*
//echo "<script>window.location = 'http://www.paycheckstubonline.com/thanks-try-creat-pay-check-bankstatement/'</script>";

//$pdfAll->send('Paystub.pdf');
*/
?>