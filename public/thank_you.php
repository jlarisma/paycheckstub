<?php
//gets all the posted values, submits them into DB.
//and then sedns and email to me letting me know.  - can be removed
//this is a prep, before the paypal approves it
//when PAID at paypal, the listener will update to PAID

 require 'PHPMailer/class.phpmailer.php';
   ob_start();
 $custom = $_POST['custom'];  
 $type = $_POST['type'];
   
 $emp_email= $_POST['corp_pdf_emp_email'];  
   

  $content = ob_get_clean();

$content='';   

  $con = mysql_connect("localhost", "paycheck_admin", "46464646");
  if(! $con){die('Could not connect: '. mysql_error());}
	mysql_select_db('paycheck_db', $con);
	
    $sql = "INSERT INTO emp_table (emp_email, premium, paystub_type) 
	                       VALUES ('$emp_email', '1', 'PAID')";
for ($x=1; $x<=4; $x++){
   mysql_query($sql,$con);
}

    // convert to PDF
    //require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    try
    { //exec('php -q mail-pdf.php');
	   $mail = new PHPMailer(true); //New instance, with exceptions enabled
	   $body = ("Thank you for your Paystub Purchase");
	   $mail->IsSMTP(); // tell the class to use SMTP
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->Port = 25; // set the SMTP server port
		$mail->Host = "paycheckstubonline.com"; // SMTP server
		$mail->Username = "contact@paycheckstubonline.com"; // SMTP server username
		$mail->Password = "46464646"; // SMTP server password
		$mail->IsSendmail(); // tell the class to use Sendmail
		$mail->AddReplyTo("contact@paycheckstubonline.com","PCSO");
		$mail->From = "contact@paycheckstubonline.com";
		$mail->FromName = "PCSO";
		$to = $emp_email;
		$mail->AddAddress($to);
		$mail->Subject = "PaycheckStubOnline - Thank You - ";
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap = 80; // set word wrap
		$mail->MsgHTML("<p>Thank you so much for your Purchase.  I aim to keep you coming back with Great customer service
						</p>
						<p>PAYPAL should have redirected you to a page where you were to fill in your info and download or email your stubs</p>
						<p>If Paypad did NOT redirect you.. then just <a href='http://www.paycheckstubonline.com/jasemzaplatilpenizeatetnemamzadni' target='_blank'>click here</a>, and fill your info in again.</p>
						<p> If you get stuck,  then:</p>
						<p>  1) turn your browser ON and OFF</p>
						<p>  2) Make sure you use Chrome, not IExplorer</p>
						<p>  3) Put in your dates and smile. :-)</p>
						<p>If you see an error, or a change, just email me.  I usually get back to you within an hour..  but. I do sleep sometimes.. </p>
						<p><a href='mailto:contact@paycheckstubonline.com'>contact@paycheckstubonline.com</a></p>
						<p><a href='mailto:george.strnad@gmail.com'>george.strnad@gmail.com</a></p>
						<p> I take real pride in my customer service.  I never advertise, I depend on you telling your friends, or suggestions for other opportunities. My customers are everything to me. </p>
						<p> I take this VERY SERIOUSLY..</p>
						<p> Plus, my product keeps getting better because of your suggestions.  It's not perfect, but, it's better than anything else out there.. and it's still improving. </p>
						<p>Best Regards</p>
						<p>&nbsp;</p>");
		//$mail-> AddAttachment ($html2pdf);
		//$mail-> AddStringAttachment ($content_pdf, 'YourPaystub-q.pdf', 'base64', 'application/pdf');
		$mail->IsHTML(true); // send as HTM
		$mail->Send();
	}
    catch(HTML2PDF_exception $e) { 
    }

?>