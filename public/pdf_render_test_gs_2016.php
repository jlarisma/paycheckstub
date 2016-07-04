<?php
echo "zzzzzbbbbbzzzs99111ozzzz";
//      error_reporting(E_ALL);
	//global $wpdb;
error_reporting(E_ALL);
$email = 'contact@paycheckstubonline.com';
echo ("sending-");





//$is_customer_paid = '1';
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_pages.inc');
require_once(__DIR__.'/paystub/util.php');

echo "yayy2";

// ---  ADDED by GEORGE -------------------------------
require_once ( __DIR__ . '/wp-load.php' );


$sql_get_params = "SELECT * FROM user_transaction WHERE id = '127438'";
//$ccc = $wpdb->query($sql_get_params);
$ccc1 = $wpdb->get_results($sql_get_params);
		$wpdb->show_errors();
		$ccc = $ccc1->option;
echo "this is ccc ->".$ccc;
var_dump($ccc1);






//$sql_insert = "INSERT INTO user_transaction(user_id, options, info_email) VALUES ('test1', 'test1', 'test1' )";
//$wpdb->query($sql_insert );

//$sql_insert2 = "INSERT INTO user_transaction(user_id, options, info_email) VALUES ('1', '2', 'george.strnad@gmail.com' )";
//$wpdb->query($sql_insert2 );

// Mailing section ===============================================================================================================
	$body = "1111222teststetsetsetsett";
//	$body .=  "<html><a href='http://www.paycheckstubonline.com/wp-admin/profile.php'>EDIT MY PROFILE page</a></html><br>";
//	$body .= "<p>Enjoy your Preview of {$pageStyle} below, Please tell us how we can improve it.</p>";
if (!empty($_GET['s2_payment_notification']) && $_GET['s2_payment_notification'] === 'yes') {
	global $wpdb;


	echo("sending - 2");

	$paramsSES = array();
//	$pdf = new WkHtmlToPdf();
//    $page = $pdf->curlGetData($url, $_REQUEST, "post");
//    $pdf->addPage($page);
	echo 'Sending0...';
//		echo ($_REQUEST['downloadpdf']);
//		echo ("<-- request download");
	require_once("/home/nginx/domains/paycheckstubonline.com/public/ses/SESUtils.php");
	$paramsSES["to"] = $email;
	$paramsSES["subject"] = "Your From PayCheckStubOnline.com";
	$paramsSES["message"] = $body;
	$paramsSES["from"] = "info@paycheckstubonline.com";
	$res = SESUtils::sendMail($paramsSES);
	echo 'Sending...';
	if ($res->success) {
		//global $wpdb;
		$sql_insert9 = "INSERT INTO user_transaction(user_id, options, info_email) VALUES ('1', 'testmail', 'testmail' )";
	//	$wpdb->query($sql_insert9);
		echo 'Message SES has been sent. ';
	} else {
		echo 'Sorry there was an error ';
	}
	echo 'Sent3.. .';
}


//include '/home/nginx/domains/paycheckstubonline.com/public/pdf_render-email_test.php&aaa=eyJzdGFydF9kYXRlMiI6IjEyXC8yN1wvMjAxNiIsInN0YXRlX3RheCI6IjE4MDIuMDAiLCJjbWQiOiJfeGNsaWNrIiwiZW1wX2lkIjoiRW1wbG95ZWUgSUQiLCJlbXBfZl9uYW1lIjoiRW1wbG95ZWUgRmlyc3QgTmFtZSIsImVtcF9sX25hbWUiOiJFbXBsb3llZSBMYXN0IE5hbWUiLCJlbXBfc3RyZWV0IjoiRW1wbG95ZWUgU3RyZWV0IEFkZHJlc3MiLCJlbXBfY2l0eSI6IkVtcGxveWVlIGNpdHkiLCJlbXBfc3RhdGUiOiIwIiwiZW1wX3ppcCI6IkVtcGxveWVlIFppcCIsImVtcF9zc24iOiJFbXAgU29jaWFsIFNlYyIsImVtcF9zZGF0ZSI6IjAxXC8wMVwvMjAxNiIsImVtcHJfYWRkX25hbWUiOiJDb21wYW55IG5hbWUiLCJlbXByX2FkZF9zdHJlZXQiOiJDb21wYW55IEFkZHJlc3MiLCJlbXByX2FkZF9jaXR5IjoiQ29tcGFueSBDaXR5IiwiZW1wcl9hZGRfc3RhdGUiOiJDb21wYW55IFN0YXRlIiwiZW1wcl9hZGRfemlwIjoiWmlwIENvZGUiLCJpbnB1dF95ZWFybHlfZ3Jvc3MiOiIzMTIwMCIsImdyb3NzX2hycyI6IjQwIiwiZ3Jvc3NfcmF0ZSI6IjE1Iiwib3RfaHJzIjoiMCIsInByZF9zdGFydF9kYXRlIjoiIiwiZW1wX2VkYXRlIjoiMDFcLzAyXC8yMDE2IiwibnVtX3ByZHMiOiIwIiwiaXNzdWVfZGF0ZV9kaWZmIjoiNyIsImVtcF9wZGF0ZSI6IiIsImVtcF9tYXJfc3RhdHVzIjoiMSIsInBheWZyZXEiOiJ3ZWVrbHkiLCJ2YWxfNDAxayI6IjEiLCJ2YWxfNDEwa19wcmQiOiI2LjAwIiwidmFsXzQxMGtfeXRkIjoiMC4wMCIsInVuaW9uX2R1ZXMiOiIyIiwidW5pb25fZHVlc19wcmQiOiIxMi4wMCIsInVuaW9uX2R1ZXNfeXRkIjoiMC4wMCIsInJvdXRfbnVtIjoiMCIsImFjY19udW0iOiIwIiwiZ2FybmlzaDFfbmFtZSI6IkJvbnVzIiwiZ2FybmlzaDEiOiIzMCIsImdhcm5pc2gyX25hbWUiOiJNZWRpY2FsIiwiZ2FybmlzaDIiOiIyMCIsImdhcm5pc2gzX25hbWUiOiJHYXJuaXNoIiwiZ2FybmlzaDMiOiIxIiwiY29tbWlzc2lvbl9wcmQiOiIyIiwiY29tbWlzc2lvbl95dGQiOiIzIiwicHJvbW9fY29kZSI6IjAiLCJzdHViX2lkIjoiY29ycCIsImxpbmVfMSI6IkVGRkVDVElWRSBUSElTIFBBWSBQRVJJT0QgLSBSRUdVTEFSIiwibGluZV8yIjoiRlJFRSBGTFUgU0hPVFMgQVQgVEhFIE9VUiBDTElOSUMgIiwibGluZV8zIjoiUkVNRU1CRVIgT1VSIFVOSVRFRCBXQVkgRlVORCBEUklWRS4iLCJudW1fc3R1YnMiOiIzIiwiZW1wX2VtYWlsIjoiZ2VvcmdlLnN0cm5hZEBnbWFpbC5jb20iLCJncm9zc19ocnNfIjpbIjQwIiwiNDAiLCI0MCJdLCJncm9zc19yYXRlXyI6WyIxNSIsIjE1IiwiMTUiXSwib3RfaHJzXyI6WyIwIiwiMCIsIjAiXSwiY29tbWlzc2lvbl9wcmRfIjpbIjAiLCIwIiwiMCJdLCJjaGVja19udW1fIjpbIjAiLCIwIiwiMCJdLCJpc19jdXN0b21lcl9wYWlkIjoxLCJjaGVja19udW0iOiItMiIsInByZF9udW0iOjJ9';
//exec('/home/nginx/domains/paycheckstubonline.com/public/pdf_render-email_test.php&aaa=eyJzdGFydF9kYXRlMiI6IjEyXC8yN1wvMjAxNiIsInN0YXRlX3RheCI6IjE4MDIuMDAiLCJjbWQiOiJfeGNsaWNrIiwiZW1wX2lkIjoiRW1wbG95ZWUgSUQiLCJlbXBfZl9uYW1lIjoiRW1wbG95ZWUgRmlyc3QgTmFtZSIsImVtcF9sX25hbWUiOiJFbXBsb3llZSBMYXN0IE5hbWUiLCJlbXBfc3RyZWV0IjoiRW1wbG95ZWUgU3RyZWV0IEFkZHJlc3MiLCJlbXBfY2l0eSI6IkVtcGxveWVlIGNpdHkiLCJlbXBfc3RhdGUiOiIwIiwiZW1wX3ppcCI6IkVtcGxveWVlIFppcCIsImVtcF9zc24iOiJFbXAgU29jaWFsIFNlYyIsImVtcF9zZGF0ZSI6IjAxXC8wMVwvMjAxNiIsImVtcHJfYWRkX25hbWUiOiJDb21wYW55IG5hbWUiLCJlbXByX2FkZF9zdHJlZXQiOiJDb21wYW55IEFkZHJlc3MiLCJlbXByX2FkZF9jaXR5IjoiQ29tcGFueSBDaXR5IiwiZW1wcl9hZGRfc3RhdGUiOiJDb21wYW55IFN0YXRlIiwiZW1wcl9hZGRfemlwIjoiWmlwIENvZGUiLCJpbnB1dF95ZWFybHlfZ3Jvc3MiOiIzMTIwMCIsImdyb3NzX2hycyI6IjQwIiwiZ3Jvc3NfcmF0ZSI6IjE1Iiwib3RfaHJzIjoiMCIsInByZF9zdGFydF9kYXRlIjoiIiwiZW1wX2VkYXRlIjoiMDFcLzAyXC8yMDE2IiwibnVtX3ByZHMiOiIwIiwiaXNzdWVfZGF0ZV9kaWZmIjoiNyIsImVtcF9wZGF0ZSI6IiIsImVtcF9tYXJfc3RhdHVzIjoiMSIsInBheWZyZXEiOiJ3ZWVrbHkiLCJ2YWxfNDAxayI6IjEiLCJ2YWxfNDEwa19wcmQiOiI2LjAwIiwidmFsXzQxMGtfeXRkIjoiMC4wMCIsInVuaW9uX2R1ZXMiOiIyIiwidW5pb25fZHVlc19wcmQiOiIxMi4wMCIsInVuaW9uX2R1ZXNfeXRkIjoiMC4wMCIsInJvdXRfbnVtIjoiMCIsImFjY19udW0iOiIwIiwiZ2FybmlzaDFfbmFtZSI6IkJvbnVzIiwiZ2FybmlzaDEiOiIzMCIsImdhcm5pc2gyX25hbWUiOiJNZWRpY2FsIiwiZ2FybmlzaDIiOiIyMCIsImdhcm5pc2gzX25hbWUiOiJHYXJuaXNoIiwiZ2FybmlzaDMiOiIxIiwiY29tbWlzc2lvbl9wcmQiOiIyIiwiY29tbWlzc2lvbl95dGQiOiIzIiwicHJvbW9fY29kZSI6IjAiLCJzdHViX2lkIjoiY29ycCIsImxpbmVfMSI6IkVGRkVDVElWRSBUSElTIFBBWSBQRVJJT0QgLSBSRUdVTEFSIiwibGluZV8yIjoiRlJFRSBGTFUgU0hPVFMgQVQgVEhFIE9VUiBDTElOSUMgIiwibGluZV8zIjoiUkVNRU1CRVIgT1VSIFVOSVRFRCBXQVkgRlVORCBEUklWRS4iLCJudW1fc3R1YnMiOiIzIiwiZW1wX2VtYWlsIjoiZ2VvcmdlLnN0cm5hZEBnbWFpbC5jb20iLCJncm9zc19ocnNfIjpbIjQwIiwiNDAiLCI0MCJdLCJncm9zc19yYXRlXyI6WyIxNSIsIjE1IiwiMTUiXSwib3RfaHJzXyI6WyIwIiwiMCIsIjAiXSwiY29tbWlzc2lvbl9wcmRfIjpbIjAiLCIwIiwiMCJdLCJjaGVja19udW1fIjpbIjAiLCIwIiwiMCJdLCJpc19jdXN0b21lcl9wYWlkIjoxLCJjaGVja19udW0iOiItMiIsInByZF9udW0iOjJ9');

echo "finished5";
?>