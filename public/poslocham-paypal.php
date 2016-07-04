<?php

//require_once ( __DIR__ . '/../wp-load.php' );
require_once ( __DIR__ . '/wp-load.php' );
require_once 'PHPMailer/class.phpmailer.php';

function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
    $_REQUEST = array_merge($_REQUEST, $trx_options);		// Functoin is called only after PAID is verifed from PP
    include __DIR__."/pdf_render.php";						//  this calls the RENDER after cust_paid=1 below
    return;
}

 //session_start();
$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);
$myPost = array();
foreach ($raw_post_array as $keyval) {
  $keyval = explode ('=', $keyval);
  if (count($keyval) == 2)
     $myPost[$keyval[0]] = urldecode($keyval[1]);
}

// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
if(function_exists('get_magic_quotes_gpc')) {
   $get_magic_quotes_exists = true;
}
foreach ($myPost as $key => $value) {
   if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
        $value = urlencode(stripslashes($value));
   } else {
        $value = urlencode($value);
   }
   $req .= "&$key=$value";
   $req_mail .= "&$key=$value                                                                                                                                       ";
}


// STEP 2: Post IPN data back to paypal to validate
$ch = curl_init('https://www.paypal.com/us/cgi-bin');
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

if( !($res = curl_exec($ch)) ) {
    // error_log("Got " . curl_error($ch) . " when processing IPN data");
    curl_close($ch);
    exit;
}
curl_close($ch);


//-----MAIL INITIALIZE
$mail = new PHPMailer(true); //New instance, with exceptions enabled  ---- Not used anymore, I think it's being sent by pdf_renderer.php
       $body = ("testing - body tag mail - $custom Corp Paystub Previewed".$custom);
	    $mail->IsSMTP();         // tell the class to use SMTP
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->Port = 25;       // set the SMTP server port
		$mail->Host = "paycheckstubonline.com"; // SMTP server
		$mail->Username = "contact@paycheckstubonline.com"; // SMTP server username
		$mail->Password = "Escalade11"; // SMTP server password
		$mail->IsSendmail();    // tell the class to use Sendmail
		$mail->AddReplyTo("contact@paycheckstubonline.com","PCSO");
		$mail->From = "contact@paycheckstubonline.com";
		$mail->FromName = "PayCheckStubOnline.com";
		

//-----DB   INITIALIZE
$trxId = $custom = $_POST['custom'];		// this should be the custom var, from the file that called this file

$dbginfo = json_encode($_POST);				// compresses all the POST VARS from PP
$sql_upd = "UPDATE user_transaction set
            options = '$dbginfo',
            user_id = '$trxId',
			first_name = '$res'
  			where id = 1";
$wpdb->query($sql_upd);


$sql_trx = "select * from user_transaction where id='$trxId'; ";	// I think this is Custom value
$results = $wpdb->get_results($sql_trx, ARRAY_A);					// gets data from user_t with $trxID - 
if ( empty($results ))
    return;

$trx = $results[0];											// this gets the first result... but.. maybe here we can get all results from the user.
$trx_options = json_decode(base64_decode($trx['options']), true);   // all the serialized data from $trx into $trx_options
unset($trx['options']);										//  clears and resets the var for next time
$trx_options['from_paypal'] = "yes";						//  adds this value to 
$trx_options['payinfo'] = $_POST;							//  adds this value to the array



//***************************PAY PAL PAID****************************************************************************
	//Inspect IPN= VERIFIED - PREMIUM = 1
	// Update DB - emp table
if (strcmp ($res, "VERIFIED") == 0){						// string compare $res and VERIFIED, $res is returned from PAYPAL
    $trx_options['is_customer_paid'] = 1;					//  adds this value to the array

  $sql_upd = "UPDATE user_transaction
               SET   is_paid=1,
              first_name = '".$_POST['first_name']."',
              last_name = '".$_POST['last_name']."',
              address_city = '".$_POST['address_city']."',
              address_state = '".$_POST['address_state']."',
              address_street = '".$_POST['address_street']."',
              address_zip = '".$_POST['address_zip']."',
              pay_email = '".$_POST['payer_email']."',
              pp_tx_id = '".$_POST['txn_id']."',
              mc_gross = '".$_POST['mc_gross']."',
              status = '".$res."',
              premium = '1'
         WHERE id='$trxId';" ;
   $wpdb->query($sql_upd);             // wordpress shortcode, very cool, easy interface with DB

    $to = $_POST['payer_email'];	   // post var, used in pdf_render.php	
	                                   //    	// Mail to BUYER  --
		/*$mail->AddAddress($to);
		$mail->Subject = "Thank You - Read if Paystub not Recieved";
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap = 80; // set word wrap
		$mail->MsgHTML("<p>Hi ".$_POST['first_name'].",  I WILL RESPOND TO ALL PROBLEMS - Just give me a few hrs.</p>
						  <p>&nbsp;</p>
						  <p>If you did  <a href='http://www.paycheckstubonline.com/jasemzaplatilpenizeatetnemamzadni' target='_blank'><strong style = 'color: #F00;'>NOT RECEIVE</strong></a> the stubs, then click on the red link, and fill your info in again.
						  <p>&nbsp; </p>
						  <p>If you have PROBLEMS WITH THE WEBSITE,  then:</p>
						<blockquote>
						  <p>  1) turn your browser ON and OFF</p>
						  <p>  2) Make sure you use Chrome, not IExplorer</p>
						  <p>  3) Confirm you have STATE, EMAIL and DATE boxes filled in</p>
						  <p>&nbsp;</p>
						</blockquote>
						<p>Want to See and example, then just watch a <a href='http://www.paycheckstubonline.com/how-to-make-a-paystub-preview' target='_blank' style = 'color: #F00;'><strong>Demo VIDEO</strong></a>, of how it's done</p>
						<p>&nbsp;</p>
						<p>Consecutive Paystubs? <a href='http://www.paycheckstubonline.com/consecutive-pay-stubs' target='_blank' style = 'color: #F00;'><strong>SEE how to make consecutive stubs</strong></a>, of how it's done</p>
						<p>&nbsp;</p>
						<p>If you see an error, or a change, just email me.  I usually get back to you within an hour..  but. I do sleep sometimes.. </p>
						<p><a href='mailto:contact@paycheckstubonline.com'>contact@paycheckstubonline.com</a></p>
						<p><a href='mailto:george.strnad@gmail.com'>george.strnad@gmail.com</a></p>
						<p>NOTE:</p>
						<p> I take real pride in my customer service.  I never advertise, I depend on you telling your friends, or suggestions for other opportunities. My customers are everything to me. </p>
						<p> I take this VERY SERIOUSLY..</p>
						<p> Plus, my product keeps getting better because of your suggestions.  It's not perfect, but, it's better than anything else out there.. and it's still improving. </p>
						<p>Best Regards</p>
						<p>&nbsp;</p>");
		$mail->IsHTML(true); 
		$mail->Send();  */
    pdf_provide($trx_options);		   // function merges the array, of data in $trx_options and $_REQUEST basically, it adds "is_customer_paid" and payinfo and frompaypal
}										// and THEN IT calls PDF_RENDER  to print out the file, without the watermark

//*******************************Paypal Invalid action*********************************************************
//Inspect IPN= INVALID - PREMIUM = 3   , preview download
elseif (strcmp ($res, "INVALID") == 0) {
    $sql_upd = "UPDATE user_transaction
          SET   is_paid=0,
                first_name = '".$_POST['first_name']."',
              last_name = '".$_POST['last_name']."',
              address_city = '".$_POST['address_city']."',
              address_state = '".$_POST['address_state']."',
              address_street = '".$_POST['address_street']."',
              address_zip = '".$_POST['address_zip']."',
              pay_email = '".$_POST['payer_email']."',
              pp_tx_id = '".$_POST['txn_id']."',
              mc_gross = '".$_POST['mc_gross']."',
              status = '".$res."',
              premium = '3'
         WHERE id='$trxId';" ;
    $wpdb->query($sql_upd);

//-------------------------------		 
		 $to = 'george.strnad@gmail.com';
		$mail->AddAddress($to);
		$mail->Subject = "INVALID ON PAYPAL - Intended for BUYER - no attach";
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap = 80; // set word wrap
		$mail->MsgHTML("<p>Hi ".$_POST['first_name']." Here are your stubs I WILL RESPOND TO ALL PROBLEMS - Just give me a few hrs - custom var = ".$custom."</p>
						  <p>&nbsp;</p>
						  <p>If you did  <a href='http://www.paycheckstubonline.com/jasemzaplatilpenizeatetnemamzadni' target='_blank'><strong style = 'color: #F00;'>NOT RECEIVE</strong></a> the stubs, then click on the red link, and fill your info in again.
						  <p>&nbsp; </p>
						  <p>If you have PROBLEMS WITH THE WEBSITE,  then:</p>
						<blockquote>
						  <p>  1) turn your browser ON and OFF</p>
						  <p>  2) Make sure you use Chrome, not IExplorer</p>
						  <p>  3) Confirm you have STATE, EMAIL and DATE boxes filled in</p>
						  <p>&nbsp;</p>
						</blockquote>
						<p>Want to See and example, then just watch a <a href='http://www.paycheckstubonline.com/how-to-make-a-paystub-preview' target='_blank' style = 'color: #F00;'><strong>Demo VIDEO</strong></a>, of how it's done</p>
						<p>&nbsp;</p>
						<p>Consecutive Paystubs? <a href='http://www.paycheckstubonline.com/consecutive-pay-stubs' target='_blank' style = 'color: #F00;'><strong>SEE how to make consecutive stubs</strong></a>, of how it's done</p>
						<p>&nbsp;</p>
						<p>If you see an error, or a change, just email me.  I usually get back to you within an hour..  but. I do sleep sometimes.. </p>
						<p><a href='mailto:contact@paycheckstubonline.com'>contact@paycheckstubonline.com</a></p>
						<p><a href='mailto:george.strnad@gmail.com'>george.strnad@gmail.com</a></p>
						<p>NOTE:</p>
						<p> I take real pride in my customer service.  I never advertise, I depend on you telling your friends, or suggestions for other opportunities. My customers are everything to me. </p>
						<p> I take this VERY SERIOUSLY..</p>
						<p> Plus, my product keeps getting better because of your suggestions.  It's not perfect, but, it's better than anything else out there.. and it's still improving. </p>
						<p>Best Regards</p>
						<p>&nbsp;</p>");
		$mail->IsHTML(true); // send as HTM
		$mail->Send();
//-------------------------------	
		 

//******************************* Unknow User transaction
		//exec ("paystub_email_session.php");
}else{
    $sql_upd = "UPDATE user_transaction
          SET   is_paid=0,
                first_name = '".$_POST['first_name']."',
              last_name = '".$_POST['last_name']."',
              address_city = '".$_POST['address_city']."',
              address_state = '".$_POST['address_state']."',
              address_street = '".$_POST['address_street']."',
              address_zip = '".$_POST['address_zip']."',
              pay_email = '".$_POST['payer_email']."',
              pp_tx_id = '".$_POST['txn_id']."',
              mc_gross = '".$_POST['mc_gross']."',
              status = '".$res."',
              premium = '2'
         WHERE id='$trxId';" ;
        $wpdb->query($sql_upd);
		
		$to = 'george.strnad@gmail.com';
		$mail->AddAddress($to);
		$mail->Subject = "Neither Invalid or valid PAYPAL -else- premium =2";
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap = 80; // set word wrap
		$mail->MsgHTML("Listener just fired and updated the DB to NEITHER VALID OR INVALID.  Their email is = '".$_POST['payer_email']."'  and the custom var = ".$custom." <--");
		//$mail-> AddAttachment ($html2pdf);
		//$mail-> AddStringAttachment ($content_pdf, 'YourPaystub-q.pdf', 'base64', 'application/pdf');
		$mail->IsHTML(true); // send as HTM
		$mail->Send();
} 
  
?>