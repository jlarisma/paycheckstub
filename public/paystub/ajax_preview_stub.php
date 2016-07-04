<?php

require_once(__DIR__.'/_pages.inc');

$pdf_pages = paystub_get_pages('');

$urlid = $_REQUEST['stub_id'];//


include __DIR__."/".$pdf_pages[$urlid][1];


return;
///========= mailing section
/*
require 'PHPMailer/class.phpmailer.php';
$content_pdf = file_get_contents($pdf->getPdfFilename());

$mail = new PHPMailer(true);                                        //New instance, with exceptions enabled
$body = ("Please enjoy your Basic Paystub, Please tell us how we can improve");
$mail->IsSMTP();                                                    // tell the class to use SMTP
$mail->SMTPAuth = true;                                             // enable SMTP authentication
$mail->Port = 25;                                                   // set the SMTP server port
$mail->Host = "paycheckstubonline.com";                             // SMTP server
$mail->Username = "contact@paycheckstubonline.com";                 // SMTP server username
$mail->Password = "46464646";                                       // SMTP server password
$mail->IsSendmail();                                                // tell the class to use Sendmail
$mail->AddReplyTo("contact@paycheckstubonline.com","PCSO");
$mail->From = "contact@paycheckstubonline.com";
$mail->FromName = "PCSO";
$to = $emp_email;
$mail->AddAddress($to);
$mail->Subject = $emp_email;
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->WordWrap = 80;                                               // set word wrap
$mail->MsgHTML($body);
$mail-> AddStringAttachment ($content_pdf, 'Paystub.pdf', 'base64', 'application/pdf');
$mail->IsHTML(true); // send as HTM
$mail->Send();
*/