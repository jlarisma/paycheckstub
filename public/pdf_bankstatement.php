<?php

// The reasong for ths file is because it inserts the values from PREVEIW into the DB
// If the User is or is not Logged in,  the files are still submitted, and found via the email used to view
// The big differentiator is the INSERT sql statement here


echo '</br>Creating PDF now.. .</br>';
function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
	$_REQUEST = array_merge($_REQUEST, $trx_options);
	return;
}



//______________________________Banks statement_____________________

error_reporting(E_ALL);
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_addpages.inc');
require_once(__DIR__.'/paystub/util.php');
require_once(__DIR__.'/wp-load.php' );

$lastName = $_REQUEST['emp_l_name'];
$email = $_REQUEST['emp_email'];

$user = wp_get_current_user();
$user_id = $user->id;


if(current_user_can("access_s2member_level2")){
	echo "</br></br>Unlimited User - Thank you";
	$_REQUEST['is_customer_paid'] = 1;
}

// Stub Style Num of Stubs, and Check Num
$pdf_pages = add_paystub_get_pages('');		  	// returns array of paths to render files
// $urlid = $_REQUESTAR['add_stub_id'];//add_stub_id = modern style															
$urlid = 'modern';		
$serverHome = getServerHome();				// Website path
$baseUrl = $serverHome.'/paystub/';			// Website path + /paystub
$pageStyle = $pdf_pages[$urlid][0];			// gets the style of the request, and finds the path (name)
$url = $baseUrl .$pdf_pages[$urlid][1];     // the url of the desired stubb, second value (number value)
$num_stubs = $_REQUEST['num_stubs'];	


$pageList = '';
$check_num_base = $_REQUEST['check_num'];

// Mailing section ===============================================================================================================
$body .= "<html><a href='http://www.paycheckstubonline.com/download-my-stub/?u=".$user_id."&l=".$loginName."&p=".$lastName."'>VIEW and BUY all your Stubs</a></html><br>";
$body .= "<html><a href='http://www.paycheckstubonline.com/wp-admin/profile.php'>EDIT MY PROFILE page</a></html><br>";

$toEmail = empty($_REQUEST['from_paypal']) ? $_REQUEST['emp_email'] : $_REQUEST['payinfo']['payer_email'];

$body = "<p>Enjoy your Preview of {$pageStyle} below, Please tell us how we can improve it.</p>";

$paramsSES2 = array();
for ($i = 0; $i < $num_stubs; $i++){
    //$_REQUEST['check_num'] = "$check_num_base-$i";
    $_REQUEST['period_no'] = $i + 1; 							// set the current period stub
    $params = arrToParam($_REQUEST);					//  function, above, parses all the _requst vars
      $ix = $i + 1;
       //$sql_insert2 = "INSERT INTO tbl_paystubs(user_id, options, info_email) VALUES ('$user_id', '$params', '$email' )";  
	 //$wpdb->query($sql_insert2 );
	   //echo "<br/>-----------------------------Stub ".$ix." Printed-----------------------------------------------------<br/>";
    $pdf = new WkHtmlToPdf();

    $page = $pdf->curlGetData($url, $_REQUEST, "post");

    $pdf->addPage($page);
    $content_pdf = file_get_contents($pdf->getPdfFilename());

	
	$paramsSES2['files'][$ix]["filecontent"] = base64_encode($content_pdf);
	$paramsSES2['files'][$ix]["name"] = "BankStatement_$ix.pdf";
	$paramsSES2['files'][$ix]["mime"] = "application/pdf";
}


//require_once("/home/nginx/domains/paycheckstubonline.com/public/ses/SESUtils.php");
require_once("ses/SESUtils.php");

$paramsSES2["to"] = $email;
$paramsSES2["subject"] = "Your {$pageStyle} Bank Statement From Paycheck Stub online";
$paramsSES2["message"] = $body;
$paramsSES2["from"] = "info@paycheckstubonline.com";

//OPTIONAL
//"replyTo" => "reply_to@gmail.com",
$res2 = SESUtils::sendMail($paramsSES2);
//print_r($paramsSES);
//print('<script>'.$res2.'</script>');
	if ( $res2->success){
	 echo 'Message SES has been sent BT .';
	}
	else{
	 echo 'Sorry there was an error BT'; 
	}


echo "<script>window.location = 'http://localhost/thanks-try-creat-pay-check-bankstatement/'</script>";

	
?>
