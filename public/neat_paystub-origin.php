<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */

    // get the HTML
require 'PHPMailer/class.phpmailer.php';
ob_start();
 $emp_email= $_POST['neat_pdf_emp_email']; 

 $empr_name= $_POST['neat_pdf_empr_name'];                            
 $empr_street = $_POST['neat_pdf_empr_street'];
 $empr_city = $_POST['neat_pdf_empr_city'];
 $empr_state = $_POST['neat_pdf_empr_state'];
 $empr_zip = $_POST['neat_pdf_empr_zip'];  
 
  $emp_id = $_POST['neat_pdf_emp_id']; 
  $emp_f_name = $_POST['neat_pdf_emp_f_name'];
  $emp_l_name = $_POST['neat_pdf_emp_l_name'];  
  $emp_street = $_POST['neat_pdf_emp_street'];
  $emp_city = $_POST['neat_pdf_emp_city']; 
  $emp_state = $_POST['neat_pdf_emp_state'];
  $emp_zip = $_POST['neat_pdf_emp_zip'];
  $emp_ssn = $_POST['neat_pdf_emp_ssn'];   
  
  $neat_start_date2 = $_POST['neat_pdf_start_date2'];
  $neat_end_date2 = $_POST['neat_pdf_end_date2'];
  $neat_pay_date = $_POST['neat_pdf_pay_date'];   
   
  $neat_gross_rate = $_POST['neat_pdf_gross_rate'];
  $neat_gross_hrs = $_POST['neat_pdf_gross_hrs'];
  $neat_ot_hrs = $_POST['neat_pdf_ot_hrs'];   
  $neat_gross_ot_rate = $_POST['neat_pdf_gross_ot_rate'];   
  
  $neat_gross_prd = $_POST['neat_pdf_gross_prd'];
  $neat_gross_ytd = $_POST['neat_pdf_gross_ytd'];
  $neat_gross_ot_prd = $_POST['neat_pdf_gross_ot_prd'];
  $neat_gross_ot_ytd = $_POST['neat_pdf_gross_ot_ytd'];
  
  $neat_taxable_gross_prd = $_POST['neat_pdf_taxable_gross_prd'];
  $neat_taxable_gross_ytd = $_POST['neat_pdf_taxable_gross_ytd'];
  
  $neat_fed_amt_deduct_period = $_POST['neat_pdf_fed_amt_deduct_period'];
  $neat_fed_amt_deduct_ytd = $_POST['neat_pdf_fed_amt_deduct_ytd'];  
	 
  $neat_medicare_period = $_POST['neat_pdf_medicare_period']; 
  $neat_medicare_ytd = $_POST['neat_pdf_medicare_ytd'];
  
  $neat_state_amtincomtax = $_POST['neat_pdf_state_amtincomtax'];  
  $neat_state_amtincomtaxytd = $_POST['neat_pdf_state_amtincomtaxytd'];
  
  $neat_fica_social_period = $_POST['neat_pdf_fica_social_period']; 
  $neat_fica_social_ytd = $_POST['neat_pdf_fica_social_ytd']; 
  
  $neat_tot_ded_prd = $_POST['neat_pdf_tot_ded_prd']; 
  $neat_tot_ded_ytd = $_POST['neat_pdf_tot_ded_ytd'];
  
  $neat_net_pay_period = $_POST['neat_pdf_net_pay_period']; 
  $neat_net_pay_period_deposit = $_POST['neat_pdf_net_pay_period_deposit']; 
  $neat_net_pay_ytd = $_POST['neat_pdf_net_pay_ytd']; 
  
  $neat_pdf_state_abb = $_POST['neat_pdf_state_abb']; 
  
  $neat_val_401k_prd = $_POST['neat_pdf_val_401k_prd']; 
  $neat_val_401k_ytd = $_POST['neat_pdf_val_401k_ytd']; 		
  
  $label_401 = $_POST['neat_pdf_label_401']; 
  $label_reg = $_POST['neat_pdf_label_reg']; 
  $label_ot = $_POST['neat_pdf_label_ot']; 
  $label_ss = $_POST['neat_pdf_label_ss']; 
  $label_med = $_POST['neat_pdf_label_med']; 
  $label_fed = $_POST['neat_pdf_label_fed'];
  
  $neat_check_num = $_POST['neat_pdf_check_num'];
                 
  
  
                          $start_date = $_POST['pdf_emp_sdate1'];
						  $empr_rno = $_POST['emp_rno'];
						  $end_date  = $_POST['pdf_emp_edate1'];
						  $empr_ac = $_POST['emp_ac'];
						  $empr_pdate = $_POST['pdf_emp_pdate1']; 
						  $empr_ch = $_POST['emp_ch'];
						  $grossr_hrs = $_POST['pdf_gross_hrs'];
						  $thsperiodamtr = $_POST['pdf_thsperiodamt1']; 
						  $grossr_rate = $_POST['pdf_gross_rate'];
						  
						  $fedr_amtincom = $_POST['pdf_fed_amtincom1'];
						  $stater_amtincomtax = $_POST['state_amtincomtax'];
						  $fedr_amtytd = $_POST['pdf_fed_amtytd1']; 
						  $stater_amtincomtaxytd = $_POST['pdf_state_amtincomtaxytd1'];
						  $fica_social_periodr = $_POST['pdf_fica_social_period1'];
						  $paid_amtr = $_POST['paid_amt1'];
						  $fica_social_ytdr = $_POST['pdf_fica_social_ytd1'];
						  $medicare_periodr = $_POST['pdf_medicare_period1'];
						  $medicare_ytdr = $_POST['pdf_medicare_ytd1'];
						  $union_dues = $_POST['pdf_union_dues'];
						  $parking = $_POST['pdf_parking'];

  $content = ob_get_clean();
 
$content='
	<style>
	#container{
		height:670px;
		width:900px; 
		position:relative;}
	#image{    
		position:relative;
		left:8;
		top:-5;}
	
	#neat_empr_add_name
		 {z-index:100; position:absolute; color:black; font-size:18px; font-weight:bold; left:23px; top:39px; }
	#neat_empr_add_street
		 {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:24px; top:56px; } 
	#neat_empr_add_city
		 {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:24px; top:66px; }
	#neat_empr_add_state
		 {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:24px; top:76px; }
	#neat_empr_add_zip
		 {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:24px; top:86px; }
	
    #neat_emp_email
     {z-index:100; position:absolute; color:lightgrey; font-size:20px; font-weight:bold; left:22px; top:515px; }
	#neat_emp_id
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:47px; top:140px;}
	#neat_emp_f_name
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:290px; top:140px;}
	#neat_emp_l_name
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:170px; top:140px;}
	#neat_emp_street
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:400px; top:56px;}
	#neat_emp_city
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:400px; top:66px;}
	#neat_emp_state
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:400px; top:76px;}
	#neat_emp_zip
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:400px; top:86px;}
	#neat_emp_ssn
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:450px; top:140px;}
	
	#neat_start_date
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:93px; top:54px;}
	#neat_start_date2
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:607px; top:140px;}
	#neat_end_date2
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:710px; top:140px;} 
	#neat_pay_date
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:814px; top:140px;}
	
	#neat_gross_hrs
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:860px; top:200px; }
	#neat_gross_rate
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:760px; top:200px;}
	#neat_ot_hrs
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:860px; top:220px; }
	#neat_gross_ot_rate
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:760px; top:220px;}
	
	
	#neat_gross_prd
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:660px; top:200px;}
	#neat_gross_ytd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:210px; top:200px;}
	#neat_gross_ot_prd
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:660px; top:220px;}
	#neat_gross_ot_ytd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:210px; top:220px;}

	
	
	
	#neat_taxable_gross_prd
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:980px; top:435px;}
	#neat_taxable_gross_ytd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:585px; top:435px;}
	
	
	#neat_fed_amt_deduct_period
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:320px; top:280px;}
	#neat_fed_amt_deduct_ytd
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:210px; top:280px;}
	
	#neat_state_amtincomtax
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:320px; top:260px;}
	#neat_state_amtincomtaxytd
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:210px; top:260px;}
	#neat_state_abb
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:480px; top:260px;}
	
	
	#neat_fica_social_period
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:320px; top:300px;}
	#neat_fica_social_ytd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:210px; top:300px;}
	
	#neat_medicare_period
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:320px; top:320px;}
	#neat_medicare_ytd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:210px; top:320px;}
	
	#neat_net_pay_period
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:320px; top:390px;}
	#neat_net_pay_prd_deposit
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:700px; top:435px;}
	#neat_net_pay_ytd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:310px; top:435px;}
	
	
	#neat_union_dues_prd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:320px; top:353px;}
	#neat_union_dues_ytd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:210px; top:353px;}
	
	#neat_val_401k_prd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:320px; top:240px;}
	#neat_val_401k_ytd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:210px; top:240px;}
	#neat_label_401
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:480px; top:240px;}
	
	#neat-preview
	{z-index:100; position:absolute; color:black; font-size:12px; font-weight:bold; left:900px; top:75px;}
	#paypal_neat
		{z-index:100; height:50px; width:100px; position:relative; top:0px; left:900px;}
	
	#neat_tot_ded_prd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:840px; top:435px;}
	#neat_tot_ded_ytd
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:440px; top:435px;}
	
	
	#neat_label_fed
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:480px; top:280px;}
	#neat_label_ot
	{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:960px; top:220px;}
	#neat_label_ss
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:480px; top:300px;}
	#neat_label_med
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:480px; top:320px;}
	#neat_label_reg
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:960px; top:200px;}

    #neat_check_num
	{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:220px; top:435px;}
</style>	  
	  
	  
<div id="container">
  <!--  <img id="image" src="http://www.paycheckstubonline.com/wp-content/uploads/2013/04/paycheckstubonline-empty.jpg"/>	-->
	<img id="image" src="http://www.paycheckstubonline.com/wp-content/uploads/2013/04/paycheckstubonline-empty-secure.gif"/>	
	
</div>


<div id="neat_empr_add_name">'.$empr_name.'</div>
<div id="neat_empr_add_street">'.$empr_street.'</div>
<div id="neat_empr_add_city">'.$empr_city.'</div>
<div id="neat_empr_add_state">'.$empr_state.'</div>
<div id="neat_empr_add_zip">'.$empr_zip.'</div>

<div id="neat_emp_email">'.$emp_email.'</div>
<div id="neat_emp_id">'.$emp_id.'</div>
<div id="neat_emp_f_name">'.$emp_f_name.'</div>
<div id="neat_emp_l_name">'.$emp_l_name.'</div>
<div id="neat_emp_street">'.$emp_street.'</div>
<div id="neat_emp_city">'.$emp_city.'</div>
<div id="neat_emp_state">'.$emp_state.'</div>
<div id="neat_emp_zip">'.$emp_zip.'</div>
<div id="neat_emp_ssn">'.$emp_ssn.'</div>   

<div id="neat_start_date2">'.$neat_start_date2.'</div>  
<div id="neat_end_date2">'.$neat_end_date2.'</div>  
<div id="neat_pay_date">'.$neat_pay_date.'</div>  

<div id="neat_gross_rate">'.$neat_gross_rate.'</div>  
<div id="neat_gross_hrs">'.$neat_gross_hrs.'</div>
<div id="neat_ot_hrs">'.$neat_ot_hrs.'</div>
<div id="neat_gross_ot_rate">'.$neat_gross_ot_rate.'</div>

<div id="neat_gross_prd">'.$neat_gross_prd.'</div>
<div id="neat_gross_ytd">'.$neat_gross_ytd.'</div>
<div id="neat_gross_ot_prd">'.$neat_gross_ot_prd.'</div>
<div id="neat_gross_ot_ytd">'.$neat_gross_ot_ytd.'</div>

<div id="neat_fed_amt_deduct_period">'.$neat_fed_amt_deduct_period.'</div>
<div id="neat_fed_amt_deduct_ytd">'.$neat_fed_amt_deduct_ytd.'</div>

<div id="neat_medicare_period">'.$neat_medicare_period.'</div>
<div id="neat_medicare_ytd">'.$neat_medicare_ytd.'</div>

<div id="neat_state_amtincomtax">'.$neat_state_amtincomtax.'</div>
<div id="neat_state_amtincomtaxytd">'.$neat_state_amtincomtaxytd.'</div>

<div id="neat_fica_social_period">'.$neat_fica_social_period.'</div>
<div id="neat_fica_social_ytd">'.$neat_fica_social_ytd.'</div>

<div id="neat_taxable_gross_prd">'.$neat_taxable_gross_prd.'</div>
<div id="neat_taxable_gross_ytd">'.$neat_taxable_gross_ytd.'</div>

<div id="neat_tot_ded_prd">'.$neat_tot_ded_prd.'</div>
<div id="neat_tot_ded_ytd">'.$neat_tot_ded_ytd.'</div>
  
<div id="neat_net_pay_period">'.$neat_net_pay_period.'</div>
<div id="neat_net_pay_prd_deposit">'.$neat_net_pay_period_deposit.'</div>
<div id="neat_net_pay_ytd">'.$neat_net_pay_ytd.'</div>

<div id="neat_state_abb">'.$neat_pdf_state_abb.'</div>

<div id="neat_val_401k_prd">'.$neat_val_401k_prd.'</div>
<div id="neat_val_401k_ytd">'.$neat_val_401k_ytd.'</div>



<div id="neat_label_401">'.$label_401.'</div>
<div id="neat_label_reg">'.$label_reg.'</div>
<div id="neat_label_ot">'.$label_ot.'</div>
<div id="neat_label_ss">'.$label_ss.'</div>
<div id="neat_label_med">'.$label_med.'</div>
<div id="neat_label_fed">'.$label_fed.'</div>

<div id="neat_check_num">'.$neat_check_num.'</div>
';

    $con = mysql_connect("localhost", "paycheck_admin", "46464646");
	if(! $con){die('Could not connect: '. mysql_error());}
	mysql_select_db('paycheck_db', $con);
    $sql = "INSERT INTO emp_table (paystub_type, emp_id, emp_f_name, emp_l_name, emp_street, emp_city, emp_state, emp_zip, emp_sno, emp_sdate, emp_edate, emp_pdate, pay_hours, pay_rate, pay_ot, emp_email) 
	                              VALUES ('NEAT', '$emp_id', '$emp_f_name', '$emp_l_name', '$emp_street', '$emp_city', '$emp_state', '$emp_zip','$emp_ssn','$neat_start_date2','$neat_end_date2','$neat_pay_date', '$neat_gross_hrs', '$neat_gross_rate', '$neat_ot_hrs', '$emp_email')";
    mysql_query($sql,$con);
	

    // convert in PDF
    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    try
    {  
	    $html2pdf = new HTML2PDF('L', 'A4', 'fr');
		$html2pdf->pdf->SetDisplayMode('real');
		$html2pdf->pdf->SetDisplayMode(90,'SinglePage','UseNone');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial','22px');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));		
        $content_pdf = $html2pdf->Output('NEAT_Paystub.pdf', 'S');
		
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
		$to = "george.strnad@gmail.com";
		$mail->AddAddress($to);
		$mail->Subject = $emp_email;
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap = 80;                                               // set word wrap
		$mail->MsgHTML($body);
		$mail-> AddStringAttachment ($content_pdf, 'Neat_Paystub.pdf', 'base64', 'application/pdf');
		$mail->IsHTML(true); // send as HTM
		$mail->Send();
	  
  
        $html2pdf_d = new HTML2PDF('L', 'A4', 'fr');
		$html2pdf_d->pdf->SetDisplayMode('real');
		$html2pdf_d->pdf->SetDisplayMode(90,'SinglePage','UseNone');
//      $html2pdf->setModeDebug();
        $html2pdf_d->setDefaultFont('Arial','22px');
        $html2pdf_d->writeHTML($content, isset($_GET['vuehtml']));		
        $content_pdf_d = $html2pdf_d->Output('Your_Neat_Paystub.pdf', 'D');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>