<?php
error_reporting(E_ALL);
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_pages.inc');
require_once(__DIR__.'/paystub/util.php');
require_once(__DIR__.'/wp-load.php' );
	
  $firstName = $_REQUEST['emp_f_name'];
  $lastName = $_REQUEST['emp_l_name'];
  $email = $_REQUEST['emp_email'];
		
  // filter POST params function arrToParam
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
				
  // Logged in or NOT
  if (!is_user_logged_in()){
	  // echo ("not logged");
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
		  echo ("finished 1");
		  }
  else{
		  $user = wp_get_current_user();
		  $user_id = $user->id;
		  $loginName = $user->user_login;
		  echo ("finished A");
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

  // Mailing section ===============================================================================================================
//$link_download = "<html><a href='http://www.paycheckstubonline.com/download-my-stub/?u=".$user_id."&l=".$loginName."&p=".$lastName."'>VIEW and BUY all your Stubs</a></html>";
$link_edit_profile = "<html><a href='http://www.paycheckstubonline.com/wp-admin/profile.php'>EDIT MY PROFILE page</a></html>";

$toEmail = empty($_REQUEST['from_paypal']) ? $_REQUEST['emp_email'] : $_REQUEST['payinfo']['payer_email'];

require_once __DIR__.'/PHPMailer/class.phpmailer.php';

$email_message = "<p>Enjoy your Preview of {$pageStyle} below, Please tell us how we can improve it.</p>";
//$email_message .= "Click here to &quot;.$link_download.&quot; , thanks. </p>";
//$email_message .= "Your Login information is: </p>";
//$email_message .= "Your User-Login = ".$loginName. "</p>";
//$email_message .= "Your Password = ".$lastName. "</p>";
//$email_message .= "Your ACCOUNT menu = ".$link_edit_profile. "</p>";

$mail = new PHPMailer(true);                                        //New instance, with exceptions enabled
$body = $email_message;
$mail->IsSMTP();                                                    // tell the class to use SMTP
$mail->SMTPAuth = true;                                             // enable SMTP authentication
$mail->Port = 25;                                                   // set the SMTP server port
$mail->Host = "paycheckstubonline.com";                             // SMTP server
$mail->Username = "contact@paycheckstubonline.com";                 // SMTP server username
$mail->Password = "46464646";                                       // SMTP server password
$mail->IsSendmail();                                                // tell the class to use Sendmail
$mail->AddReplyTo("contact@paycheckstubonline.com","PCSO");
$mail->From = "contact@paycheckstubonline.com";
$mail->FromName = "PayCheckStubOnline";
$to = $email;
$mail->AddAddress($to);
$mail->Subject = "Your {$pageStyle} From Paycheck Stub online";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->WordWrap = 80;                                               // set word wrap
$mail->MsgHTML($body);
$mail->IsHTML(true); // send as HTM


//Echo on Completion Screen
echo "<br/>---------------------------------------------------------------------------------------------------<br/>";
echo "<br/>---------------------------------------------------------------------------------------------------<br/>";
echo "<br/>---------------------------------------------------------------------------------------------------<br/>";
echo "<br/>-------------THIS PROCESS CAN TAKE UP TO 5 minutes      ---------------------------<br/>";
echo "<br/>---------------------------------------------------------------------------------------------------<br/>";
echo "<br/>---------------------------------------------------------------------------------------------------<br/>";
echo "<br/>-------PLEASE CHECK THE EMAIL SPAM FOLDER of ----------------------------<br/>";
echo "<br/><br/>";
echo "<br/>--------------------->  ".$email." <br/>";
echo "<br/><br/>";
echo "<br/>------------------------in 5 MINUTES--------------------------------------------------------<br/>";
echo "<br/>---------------------------------------------------------------------------------------------------<br/>";
		
													

for ($i = 0; $i < $num_stubs; $i++){
    $_REQUEST['check_num'] = "$check_num_base-$i";
    $_REQUEST['prd_num'] = $i; 							// set the current period stub
    $params = arrToParam($_REQUEST);					//  function, above, parses all the _requst vars
      $ix = $i + 1;
       //$sql_insert2 = "INSERT INTO tbl_paystubs(user_id, options, info_email) VALUES ('$user_id', '$params', '$email' )";  
		//	$wpdb->query($sql_insert2 );
	   echo "<br/>-----------------------------Stub ".$ix." Printed-----------------------------------------------------<br/>";
    $pdf = new WkHtmlToPdf();
    $page = $pdf->curlGetData($url, $_REQUEST, "post");
	
echo"<pre>";
  //print_r($_REQUEST);
echo"</pre>";

    $pdf->addPage($page);
    $content_pdf = file_get_contents($pdf->getPdfFilename());
//echo ($content_pdf);
	$mail-> AddStringAttachment ($content_pdf, "Paystub_$ix.pdf", 'base64', 'application/pdf');
}

if ($mail->Send())
 echo 'Message has been sent.';
else
 echo 'Sorry there was an error '.$mail->ErrorInfo;
 echo "<script>window.location = 'http://www.paycheckstubonline.com/thanks-try-creat-pay-check-bankstatement/'</script>";
?>