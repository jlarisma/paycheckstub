<?php

// The reasong for ths file is because it inserts the values from PREVEIW into the DB
// If the User is or is not Logged in,  the files are still submitted, and found via the email used to view
// The big differentiator is the INSERT sql statement here


echo '</br>Creating PDF now.. .</br>';
function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
	$_REQUEST = array_merge($_REQUEST, $trx_options);
	return;
}

//if (isset($_POST['paycheck'])) {
# Paycheck-button was clicked
error_reporting(E_ALL);
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_pages.inc');
require_once(__DIR__.'/paystub/util.php');
require_once(__DIR__.'/wp-load.php' );
require_once(__DIR__.'/paystub/_addpages.inc');// for bankstatement

//$firstName = $_REQUEST['emp_f_name'];


$lastName = $_REQUEST['emp_l_name'];
$email = $_REQUEST['emp_email'];

$user = wp_get_current_user();
$user_id = $user->id;

$status = "pdf_render";

if(current_user_can("access_s2member_level2")){
	echo "</br></br>Unlimited User - Thank you";
	$_REQUEST['is_customer_paid'] = 1;   				//I added this to circumvent the PREVIEW
	$payed = "3";
}

  // Stub Style Num of Stubs, and Check Num
  $pdf_pages = paystub_get_pages('');		  	// returns array of paths to render files
  $urlid = $_REQUEST['stub_id'];			  	// style															
  $serverHome = getServerHome();				// Website path
  $baseUrl = $serverHome.'paystub/';			// Website path + /paystub
  $pageStyle = $pdf_pages[$urlid][0];			// gets the style of the request, and finds the path (name)
  $url = $baseUrl .$pdf_pages[$urlid][1];     // the url of the desired stubb, second value (number value)
  $num_stubs = $_REQUEST['num_stubs'];	
  $pageList = '';
  $check_num_base = $_REQUEST['check_num'];
  $check_num = $_REQUEST['check_num_'][1];


  $user_ip = $_SERVER['REMOTE_ADDR'];

// Mailing section ===============================================================================================================
	$body = "<html><a href='http://www.paycheckstubonline.com/download-my-stub/?u=".$user_id."&l=".$loginName."&p=".$lastName."'>VIEW and BUY all your Stubs</a></html><br>";
	$body .=  "<html><a href='http://www.paycheckstubonline.com/wp-admin/profile.php'>EDIT MY PROFILE page</a></html><br>";
	$body .= "<p>Enjoy your Preview of {$pageStyle} below, Please tell us how we can improve it.</p>";
		//$toEmail = empty($_REQUEST['from_paypal']) ? $_REQUEST['emp_email'] : $_REQUEST['payinfo']['payer_email'];
	echo ("</br>Building Email now");

	$paramsSES = array();

		  $check_num = $_REQUEST['check_num_'][$i];
		  $paramsI = base64_encode(json_encode($_REQUEST) );

		// IF LOGGED IN and UNLIMITED add PAYED TO A Column
		   $sql_insert2 = "INSERT INTO user_transaction(status, payed, user_ip, user_id, check_num, tx_rand_num, premium, options, info_email) VALUES ('$status', '$payed', '$user_ip', '$user_id', '$check_num', '$check_num_base', '$pageStyle', '$paramsI', '$email' )";

		   $wpdb->query($sql_insert2 );

echo ("</br><h2>".$email."</h2>");
echo ("</br>".$_REQUEST['downloadpdf']);

  for ($i = 0; $i < $num_stubs; $i++){
	  $check_num = $_REQUEST['check_num_'][$i];

	  $_REQUEST['prd_num'] = $i; 							// set the current period stub
	$ix = $i + 1;
	$pdf = new WkHtmlToPdf();

    $page = $pdf->curlGetData($url, $_REQUEST, "post");

    $pdf->addPage($page);

	    echo "<br/>-------------------Stub ".$ix." Printed-------------------------------<br/>";
		echo "</br>Calculating Stub Numbers.. .</br></br>";
//echo "this is page---------------------------".$page;
    if ($_REQUEST['downloadpdf'] === "1") {
		echo '</br></br> Sending....';
		$pdf->send('Paycheckstub_'.$ix.'.pdf');
		echo '</br></br>Sending...... .';
	}else{
	    $content_pdf = file_get_contents($pdf->getPdfFilename());
//echo "this is content_pdf---------------------------".$content_pdf;
		$paramsSES['files'][$ix]["filecontent"] = base64_encode($content_pdf);
		$paramsSES['files'][$ix]["name"] = "Paycheckstub_$ix.pdf";
		$paramsSES['files'][$ix]["mime"] = "application/pdf";
	}
  }

echo '</br></br>testing a connection now.. .';
//if (isset($_POST['downloadpdf'])) {	
if ($_REQUEST['downloadpdf'] === "1") {
	echo ("1");
	echo '<script>window.close();</script>';
	//$pdf->send('Paycheckstub_.pdf');
	echo "<script>window.location = 'http://localhost/thanks-for-download-pdf-preview/'</script>";

}else{
	echo ("2");
	//require_once("/home/nginx/domains/paycheckstubonline.com/public/ses/SESUtils.php");
	require_once("ses/SESUtils.php");
	echo ("3".$email);
	$paramsSES["to"] = $email;
	$paramsSES["subject"] = "Your {$pageStyle} PayCheck Stub From www.PayCheckStubOnline.com";
	echo ("3.5".$body);
	$paramsSES["message"] = $body;
	echo ("-3.6-");
	$paramsSES["from"] = "info@paycheckstubonline.com";
	echo ("-3.7-");
	//echo $paramsSES;
	//echo $res;
	//print_r($paramsSES);
	echo '<pre>';
	
	$res = SESUtils::sendMail($paramsSES);

	echo ("4");
	if ( $res->success){
	 echo '</br></br>Message SES has been sent .  Check Email in 2 Minutes';
	}
	else{
	 echo '</br></br>Sorry there was an error ';
	}
	//echo "<script>window.location = 'http://www.paycheckstubonline.com/thanks-try-creat-pay-check-bankstatement/'</script>";
}
echo 'Pay stubs Sent.. .';


echo "<script>window.location = 'http://www.paycheckstubonline.com/thanks-try-creat-pay-check-bankstatement/'</script>";


	
?>
