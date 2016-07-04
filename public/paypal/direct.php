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
 $empr_name= $_POST['pdf_empr_add_name1'];                            
 $empr_street = $_POST['corp_pdf_empr_street'];
 $empr_city = $_POST['city1'];
 $empr_state = $_POST['state1'];
 $empr_zip = $_POST['empr_zip1'];  
 
  $emp_id = $_POST['pdf_emp_id']; 
  $emp_f_name = $_POST['corp_pdf_emp_f_name'];
  $emp_l_name = $_POST['corp_pdf_emp_l_name'];  
  $emp_street = $_POST['corp_pdf_emp_street'];
  $emp_city = $_POST['corp_pdf_emp_city']; 
  $emp_state = $_POST['corp_pdf_emp_state'];
  $emp_zip = $_POST['corp_pdf_emp_zip'];
  $emp_ssn = $_POST['corp_pdf_emp_ssn'];   
  
  $corp_start_date = $_POST['corp_pdf_start_date'];
  $corp_end_date = $_POST['corp_pdf_end_date'];
  $corp_pay_date = $_POST['corp_pdf_pay_date'];   
   
  $corp_gross_rate = $_POST['corp_pdf_gross_hrs'];
  $corp_gross_hrs = $_POST['corp_pdf_gross_rate'];
  $corp_ot_hrs = $_POST['corp_pdf_ot_hrs'];    
  
  $corp_this_period_tot = $_POST['corp_pdf_this_period_tot'];
  $corp_gross_ytd = $_POST['corp_pdf_gross_ytd'];
  
  $corp_this_period_tot = $_POST['corp_pdf_taxable_gross_prd'];
  $corp_gross_ytd = $_POST['corp_pdf_taxable_gross_ytd'];
  
  $corp_fed_amt_deduct_period = $_POST['corp_pdf_fed_amt_deduct_period'];
  $corp_fed_amt_deduct_ytd = $_POST['corp_pdf_fed_amt_deduct_ytd'];  
	 
  $corp_medicare_period = $_POST['corp_pdf_medicare_period']; 
  $corp_medicare_ytd = $_POST['corp_pdf_medicare_ytd'];
  
  $corp_state_amtincomtax = $_POST['corp_pdf_state_amtincomtax'];  
  $corp_state_amtincomtaxytd = $_POST['corp_pdf_state_amtincomtaxytd'];
  
  $corp_fica_social_period = $_POST['corp_pdf_fica_social_period']; 
  $corp_fica_social_ytd = $_POST['corp_pdf_fica_social_ytd']; 
  
  $corp_net_pay_period = $_POST['corp_pdf_net_pay_period']; 
  $corp_net_pay_period_deposit = $_POST['corp_pdf_net_pay_period_deposit']; 
  $corp_net_pay_ytd = $_POST['corp_pdf_net_pay_ytd']; 
  
  $corp_pdf_state_abb = $_POST['corp_pdf_state_abb']; 
  
  $corp_pdf_val_401k_prd = $_POST['corp_pdf_val_401k_prd']; 
  $corp_pdf_val_401k_ytd = $_POST['corp_pdf_val_401k_ytd']; 		
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
   // include(dirname(__FILE__).'/html2pdf/examples/res/test1.php');
  $content = ob_get_clean();
 

	  $content='
<style>
#container{
    height:970px;
    width:710px; 
    position:relative;}
#image{    
    position:relative;
    left:8;
    top:-5;}

#company_name
     {z-index:100; position:absolute; color:black; font-size:20px; font-weight:bold; left:22px; top:17px; }
#company_street
     {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:19px; } 
#company_city
     {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:29px; }
#company_state
     {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:40px; }
#company_zip
     {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:51px; }

#emp_id
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:28px; top:175px;}
#emp_f_name
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:35px; top:100px;}
#emp_l_name
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:35px; top:110px;}
#emp_street
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:102px;}
#emp_city
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:114px;}
#emp_state
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:126px;}
#emp_zip
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:138px;}
#emp_ssn
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:148px; top:175px;}

#corp_start_date
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:600px; top:102px;}
#corp_end_date
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:150px; top:216px;}
#corp_pay_date
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:25px; top:216px;}

#corp_gross_rate
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:90px; top:280px; }
#corp_gross_hrs
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:483px; top:216px;}
#corp_ot_hrs
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:203px; top:280px; }

#corp_this_period_tot
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:625px; top:216px;}
#corp_gross_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:610px; top:281px;}

#corp_fed_amt_deduct_period
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:477px; top:629px;}
#corp_fed_amt_deduct_ytd
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:88px; top:629px;}

#corp_medicare_period
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:477px; top:654px;}
#corp_medicare_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:88px; top:654px;}

#corp_state_amtincomtax
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:477px; top:666px;}
#corp_state_amtincomtaxytd
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:88px; top:666px;}

#corp_fica_social_period
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:477px; top:641px;}
#corp_fica_social_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:88px; top:641px;}

#corp_net_pay_period
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:216px; top:719px;}
#corp_net_pay_period_deposit
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:400px; top:719px;}
#corp_net_pay_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:88px; top:719px;}

#corp_pdf_state_abb
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:643px; top:666px;}

#corp_pdf_val_401k_prd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:362px; top:352px;}
#corp_pdf_val_401k_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:88px; top:352px;}

</style>	  
	  
	  
<div id="container">
    <img id="image" src="http://www.paycheckstubonline.com/wp-content/uploads/2013/04/Corporate-paycheck-paystub-710.png"/>	
</div>


<div id="company_name">'.$empr_name.'</div>
<div id="company_street">'.$empr_street.'</div>
<div id="company_city">'.$empr_city.'</div>
<div id="company_state">'.$empr_state.'</div>
<div id="company_zip">'.$empr_zip.'</div>

<div id="emp_id">'.$emp_id.'</div>
<div id="emp_f_name">'.$emp_f_name.'</div>
<div id="emp_l_name">'.$emp_l_name.'</div>
<div id="emp_street">'.$emp_street.'</div>
<div id="emp_city">'.$emp_city.'</div>
<div id="emp_state">'.$emp_state.'</div>
<div id="emp_zip">'.$emp_zip.'</div>
<div id="emp_ssn">'.$emp_ssn.'</div>   

<div id="corp_start_date">'.$corp_start_date.'</div>  
<div id="corp_end_date">'.$corp_end_date.'</div>  
<div id="corp_pay_date">'.$corp_pay_date.'</div>  

<div id="corp_gross_rate">'.$corp_gross_rate.'</div>  
<div id="corp_gross_hrs">'.$corp_gross_hrs.'</div>
<div id="corp_ot_hrs">'.$corp_ot_hrs.'</div>

<div id="corp_this_period_tot">'.$corp_this_period_tot.'</div>
<div id="corp_gross_ytd">'.$corp_gross_ytd.'</div>

<div id="corp_fed_amt_deduct_period">'.$corp_fed_amt_deduct_period.'</div>
<div id="corp_fed_amt_deduct_ytd">'.$corp_fed_amt_deduct_ytd.'</div>

<div id="corp_medicare_period">'.$corp_medicare_period.'</div>
<div id="corp_medicare_ytd">'.$corp_medicare_ytd.'</div>

<div id="corp_state_amtincomtax">'.$corp_state_amtincomtax.'</div>
<div id="corp_state_amtincomtaxytd">'.$corp_state_amtincomtaxytd.'</div>

<div id="corp_fica_social_period">'.$corp_fica_social_period.'</div>
<div id="corp_fica_social_ytd">'.$corp_fica_social_ytd.'</div>

<div id="corp_net_pay_period">'.$corp_net_pay_period.'</div>
<div id="corp_net_pay_period_deposit">'.$corp_net_pay_period_deposit.'</div>
<div id="corp_net_pay_ytd">'.$corp_net_pay_ytd.'</div>

<div id="corp_pdf_state_abb">'.$corp_pdf_state_abb.'</div>

<div id="corp_pdf_val_401k_prd">'.$corp_pdf_val_401k_prd.'</div>
<div id="corp_pdf_val_401k_ytd">'.$corp_pdf_val_401k_ytd.'</div>

';
	
    // convert in PDF
    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
		$html2pdf->pdf->SetDisplayMode('real');
		$html2pdf->pdf->SetDisplayMode(90,'SinglePage','UseNone');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial','22px');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));		
        $download = $html2pdf->Output('Advanced_paystub.pdf', 'D');
	//exec('php -q mail-pdf.php');
	   $mail = new PHPMailer(true); //New instance, with exceptions enabled
	   $body = ("someone clicked corp paystub preview");
	   $mail->IsSMTP(); // tell the class to use SMTP
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->Port = 25; // set the SMTP server port
		$mail->Host = "paycheckstubonline.com"; // SMTP server
		$mail->Username = "contact@paycheckstubonline.com"; // SMTP server username
		$mail->Password = "46464646"; // SMTP server password
		$mail->IsSendmail(); // tell the class to use Sendmail
		$mail->AddReplyTo("contact@paycheckstubonline.com","First Last");
		$mail->From = "contact@paycheckstubonline.com";
		$mail->FromName = "Paycheck Stub Online";
		$to = "george.strnad@gmail.com";
		$mail->AddAddress($to);
		$mail->Subject = "First PHPMailer Message";
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap = 80; // set word wrap
		$mail->MsgHTML($body);
		//$mail-> AddAttachment ($html2pdf);
		$mail-> AddStringAttachment ($download, 'corp_paystub.pdf');
		$mail->IsHTML(true); // send as HTM
		$mail->Send();
	  
    }
	
    catch(HTML2PDF_exception $e) {
        echo $e;
		//echo("getting close");
//exec('php -q mail-pdf.php');
        exit;
    }

?>