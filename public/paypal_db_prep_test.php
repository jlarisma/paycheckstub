<?php
//gets all the posted values, submits them into DB.
//and then sedns and email to me letting me know.  - can be removed
//this is a prep, before the paypal approves it
//when PAID at paypal, the listener will update to PAID

 require 'PHPMailer/class.phpmailer.php';
 ob_start();
   $custom = $_POST['custom'];  
   $type = $_POST['type'];
	 
   $emp_email= $_POST['pdf_emp_email'];  
	 
   $empr_name= $_POST['pdf_empr_name'];                            
   $empr_street = $_POST['pdf_empr_street'];
   $empr_city = $_POST['pdf_empr_city'];
   $empr_state = $_POST['pdf_empr_state'];
   $empr_zip = $_POST['pdf_empr_zip']; 
 
 
  $emp_rout_num = $_POST['pdf_emp_rout_num']; 
  $emp_acc_num = $_POST['pdf_emp_acc_num'];
  $emp_id = $_POST['pdf_emp_id']; 
  $emp_f_name = $_POST['pdf_emp_f_name'];
  $emp_l_name = $_POST['pdf_emp_l_name'];  
  $emp_street = $_POST['pdf_emp_street'];
  $emp_city = $_POST['pdf_emp_city']; 
  $emp_state = $_POST['pdf_emp_state'];
  $emp_zip = $_POST['pdf_emp_zip'];
  $emp_ssn = $_POST['pdf_emp_ssn'];  
  $emp_mar_status = $_POST['pdf_emp_mar_status'];  
  
  $start_date = $_POST['pdf_start_date'];
  $end_date = $_POST['pdf_end_date'];
  $pay_date = $_POST['pdf_pay_date'];   
   
  $gross_hrs = $_POST['pdf_gross_rate']; 
  $gross_rate = $_POST['pdf_gross_hrs'];
  $ot_hrs = $_POST['pdf_ot_hrs'];    
  
  $gross_prd= $_POST['pdf_gross_prd']; 
  $gross_ytd = $_POST['pdf_gross_ytd'];
  
  $taxable_gross_prd = $_POST['pdf_taxable_gross_prd']; 
  $taxable_gross_ytd = $_POST['pdf_taxable_gross_ytd'];
  
  $fed_amt_deduct_prd = $_POST['pdf_fed_amt_deduct_prd'];
  $fed_amt_deduct_ytd = $_POST['pdf_fed_amt_deduct_ytd']; 
	 
  $medicare_prd = $_POST['pdf_medicare_period']; 
  $medicare_ytd = $_POST['pdf_medicare_ytd'];
  
  $state_amtincomtax = $_POST['pdf_state_amtincomtax'];  
  $state_amtincomtaxytd = $_POST['pdf_state_amtincomtaxytd'];
  
  $fica_social_prd = $_POST['pdf_fica_social_period']; 
  $fica_social_ytd = $_POST['pdf_fica_social_ytd']; 
  
  $net_pay_prd = $_POST['pdf_net_pay_period']; 
  $net_pay_prd_deposit = $_POST['pdf_net_pay_period_deposit']; 
  $net_pay_ytd = $_POST['pdf_net_pay_ytd']; 
  
  $pdf_state_abb = $_POST['pdf_state_abb']; 
  
  $val_401k_prd = $_POST['pdf_val_401k_prd']; 
  $val_401k_ytd = $_POST['pdf_val_401k_ytd']; 		
   
  $union_dues_prd = $_POST['pdf_union_dues_prd']; 
  $union_dues_ytd = $_POST['pdf_union_dues_ytd'];  
   
  $start_date2 = $_POST['pdf_start_date2']; 
  $end_date2 = $_POST['pdf_end_date2']; 
  
  $commission_prd = $_POST['pdf_commission']; 
  $commission_ytd = $_POST['pdf_commission_ytd'];     
        		 
  $content = ob_get_clean();

$content='';   

  $con = mysql_connect("localhost", "paycheck_admin", "46464646");
  if(! $con){die('Could not connect: '. mysql_error());}
	mysql_select_db('paycheck_db', $con);

for ($x=1; $x<=2; $x++){	
    $sql = "INSERT INTO paystub_details (stub_order, tx_rand_num, emp_email, paystub_type, empr_name, empr_street, empr_city, empr_state, empr_zip, emp_rout_num, emp_acc_num, emp_id, emp_f_name, emp_l_name, emp_street, emp_city, emp_state, emp_zip, emp_sno, emp_mar_status, emp_sdate, emp_edate, emp_pdate, pay_hours, pay_rate, pay_ot, gross_prd, gross_ytd, taxable_gross_prd, taxable_gross_ytd, fed_amt_deduct_prd, fed_amt_deduct_ytd, medicare_prd, medicare_ytd, state_amtincomtax_prd, state_amtincomtax_ytd, fica_social_prd, fica_social_ytd, net_pay_prd, net_pay_prd_deposit, net_pay_ytd, pdf_state_abb, pdf_val_401k_prd, pdf_val_401k_ytd, commission_prd, commission_ytd, union_dues_prd, union_dues_ytd, start_date2, end_date2) 
	VALUES ('$x', '$custom', '$emp_email', '$type', '$empr_name', '$empr_street', '$empr_city', '$empr_state', '$empr_zip', '$emp_rout_num', '$emp_acc_num', '$emp_id', '$emp_f_name', '$emp_l_name', '$emp_street', '$emp_city', '$emp_state', '$emp_zip', '$emp_ssn', '$emp_mar_status', '$start_date', '$end_date', '$pay_date', '$gross_hrs', '$gross_rate', '$ot_hrs', '$gross_prd', '$gross_ytd', '$taxable_gross_prd', '$taxable_gross_ytd', '$fed_amt_deduct_prd', '$fed_amt_deduct_ytd', '$medicare_prd', '$medicare_ytd', '$state_amtincomtax', '$state_amtincomtaxytd', '$fica_social_prd', '$fica_social_ytd', '$net_pay_prd', '$net_pay_prd_deposit', '$net_pay_ytd', '$pdf_state_abb', '$val_401k_prd', '$val_401k_ytd', '$commission_prd', '$commission_ytd', '$union_dues_prd', '$union_dues_ytd', '$start_date2', '$end_date2')";
    mysql_query($sql,$con);
}	
	
    $sql_2 = "INSERT INTO emp (emp_email, tx_rand_num, paystub_type) 
	                 VALUES ('$emp_email', '$custom' , '$type')";
    mysql_query($sql_2,$con);


//for ($x=1; $x<=4; $x++){
  // mysql_query($sql,$con);
//}

    // convert to PDF
    //require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    try
    { //exec('php -q mail-pdf.php');
	   $mail = new PHPMailer(true); //New instance, with exceptions enabled
	   $body = ("Corp Paystub Previewed");
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
		$mail->Subject = "Thanks for PaystubsOnline purchase - Read if Paypal doesn't Redirect you";
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap = 80; // set word wrap
		$mail->MsgHTML("<p>*** NOTE-  I WILL RESPOND TO PROBLEMS - Just give me a few hrs</p>
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
						<p>If you see an error, or a change, just email me.  I usually get back to you within an hour..  but. I do sleep sometimes.. </p>
<p><a href='mailto:contact@paycheckstubonline.com'>contact@paycheckstubonline.com</a></p>
						<p><a href='mailto:george.strnad@gmail.com'>george.strnad@gmail.com</a></p>
						<p>NOTE:</p>
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