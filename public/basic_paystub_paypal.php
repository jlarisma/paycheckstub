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
 $emp_email= $_POST['basic_pdf_emp_email'];
 
 $empr_name= $_POST['basic_pdf_empr_name'];                            
 $empr_street = $_POST['basic_pdf_empr_street'];
 $empr_city = $_POST['basic_pdf_empr_city'];
 $empr_state = $_POST['basic_pdf_empr_state'];
 $empr_zip = $_POST['basic_pdf_empr_zip'];  
 
  $emp_id = $_POST['basic_pdf_emp_id']; 
  $emp_f_name = $_POST['basic_pdf_emp_f_name'];
  $emp_l_name = $_POST['basic_pdf_emp_l_name'];  
  $emp_street = $_POST['basic_pdf_emp_street'];
  $emp_city = $_POST['basic_pdf_emp_city']; 
  $emp_state = $_POST['basic_pdf_emp_state'];
  $emp_zip = $_POST['basic_pdf_emp_zip'];
  $emp_ssn = $_POST['basic_pdf_emp_ssn'];   
  
  $basic_start_date2 = $_POST['basic_pdf_start_date2'];
  $basic_end_date2 = $_POST['basic_pdf_end_date2'];
  $basic_pay_date = $_POST['basic_pdf_pay_date'];   
   
  $basic_gross_rate = $_POST['basic_pdf_gross_rate'];
  $basic_gross_hrs = $_POST['basic_pdf_gross_hrs'];
  $basic_ot_hrs = $_POST['basic_pdf_ot_hrs'];    
  
  $basic_gross_prd = $_POST['basic_pdf_gross_prd'];
  $basic_gross_ytd = $_POST['basic_pdf_gross_ytd'];
  
  $basic_taxable_gross_prd = $_POST['basic_pdf_taxable_gross_prd'];
  $basic_taxable_gross_ytd = $_POST['basic_pdf_taxable_gross_ytd'];
  
  $basic_fed_amt_deduct_period = $_POST['basic_pdf_fed_amt_deduct_period'];
  $basic_fed_amt_deduct_ytd = $_POST['basic_pdf_fed_amt_deduct_ytd'];  
	 
  $basic_medicare_period = $_POST['basic_pdf_medicare_period']; 
  $basic_medicare_ytd = $_POST['basic_pdf_medicare_ytd'];
  
  $basic_state_amtincomtax = $_POST['basic_pdf_state_amtincomtax'];  
  $basic_state_amtincomtaxytd = $_POST['basic_pdf_state_amtincomtaxytd'];
  
  $basic_fica_social_period = $_POST['basic_pdf_fica_social_period']; 
  $basic_fica_social_ytd = $_POST['basic_pdf_fica_social_ytd']; 
  
  $basic_net_pay_period = $_POST['basic_pdf_net_pay_period']; 
  $basic_net_pay_period_deposit = $_POST['basic_pdf_net_pay_period_deposit']; 
  $basic_net_pay_ytd = $_POST['basic_pdf_net_pay_ytd']; 
  
  $basic_pdf_state_abb = $_POST['basic_pdf_state_abb']; 
  
  $basic_pdf_val_401k_prd = $_POST['basic_pdf_val_401k_prd']; 
  $basic_pdf_val_401k_ytd = $_POST['basic_pdf_val_401k_ytd']; 		
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

#basic_company_name
     {z-index:100; position:absolute; color:black; font-size:20px; font-weight:bold; left:22px; top:17px; }
#basic_company_street
     {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:19px; } 
#basic_company_city
     {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:29px; }
#basic_company_state
     {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:40px; }
#basic_company_zip
     {z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:340px; top:51px; }


#basic_emp_id
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:109px; top:3px;}
#basic_emp_f_name
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:215px; top:28px;}
#basic_emp_l_name
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:115px; top:28px;}
#basic_emp_street
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:42px; top:243px;}
#basic_emp_city
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:42px; top:253px;}
#basic_emp_state
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:42px; top:263px;}
#basic_emp_zip
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:42px; top:273px;}
#basic_emp_ssn
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:200px; top:3px;}

#basic_start_date2
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:90px; top:54px;}
#basic_end_date2
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:177px; top:54px;}
#basic_pay_date
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:25px; top:216px;}

#basic_gross_rate
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:90px; top:119px;}
#basic_gross_hrs
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:20px; top:119px; }
#basic_ot_hrs
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:203px; top:119px; }

#basic_gross_prd
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:178px; top:144px;}
#basic_gross_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:250px; top:144px;}

#basic_taxable_gross_prd
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:360px; top:429px;}
#basic_taxable_gross_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; left:621px; top:429px;}

#basic_fed_amt_deduct_period
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:220px; top:31px;}
#basic_fed_amt_deduct_ytd
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:157px; top:31px;}

#basic_medicare_period
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:220px; top:44px;}
#basic_medicare_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:157px; top:44px;}

#basic_state_amtincomtax
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:220px; top:57px;}
#basic_state_amtincomtaxytd
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:157px; top:57px;}

#basic_fica_social_period
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:220px; top:70px;}
#basic_fica_social_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:157px; top:70px;}

#basic_net_pay_prd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:220px; top:169px;}
#basic_net_pay_prd_deposit
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:600px; top:306px;}
#basic_net_pay_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:156px; top:169px;}

#basic_state_abb
{ z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:280px; top:58px;}

#basic_val_401k_prd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:220px; top:100px;}
#basic_val_401k_ytd
{z-index:100; position:absolute; color:black; font-size:11px; font-weight:bold; right:157px; top:100px;}

</style>	  
	  
	  
<div id="container">
   <img id="image" src="http://www.paycheckstubonline.com/wp-content/uploads/2013/04/PaycheckStubSimple.gif"/>	 
	<!-- <img id="image" src="http://www.paycheckstubonline.com/wp-content/uploads/2013/04/PaycheckStubSimple-sample.gif"/>	 -->
	
</div>


<div id="basic_company_name">'.$empr_name.'</div>
<div id="basic_company_street">'.$empr_street.'</div>
<div id="basic_company_city">'.$empr_city.'</div>
<div id="basic_company_state">'.$empr_state.'</div>
<div id="basic_company_zip">'.$empr_zip.'</div>

<div id="basic_emp_email">'.$emp_email.'</div>
<div id="basic_emp_id">'.$emp_id.'</div>
<div id="basic_emp_f_name">'.$emp_f_name.'</div>
<div id="basic_emp_l_name">'.$emp_l_name.'</div>
<div id="basic_emp_street">'.$emp_street.'</div>
<div id="basic_emp_city">'.$emp_city.'</div>
<div id="basic_emp_state">'.$emp_state.'</div>
<div id="basic_emp_zip">'.$emp_zip.'</div>
<div id="basic_emp_ssn">'.$emp_ssn.'</div>   

<div id="basic_start_date2">'.$basic_start_date2.'</div>  
<div id="basic_end_date2">'.$basic_end_date2.'</div>  
<div id="basic_pay_date">'.$basic_pay_date.'</div>  

<div id="basic_gross_rate">'.$basic_gross_rate.'</div>  
<div id="basic_gross_hrs">'.$basic_gross_hrs.'</div>
<div id="basic_ot_hrs">'.$basic_ot_hrs.'</div>

<div id="basic_gross_prd">'.$basic_gross_prd.'</div>
<div id="basic_gross_ytd">'.$basic_gross_ytd.'</div>

<div id="basic_fed_amt_deduct_period">'.$basic_fed_amt_deduct_period.'</div>
<div id="basic_fed_amt_deduct_ytd">'.$basic_fed_amt_deduct_ytd.'</div>

<div id="basic_medicare_period">'.$basic_medicare_period.'</div>
<div id="basic_medicare_ytd">'.$basic_medicare_ytd.'</div>

<div id="basic_state_amtincomtax">'.$basic_state_amtincomtax.'</div>
<div id="basic_state_amtincomtaxytd">'.$basic_state_amtincomtaxytd.'</div>

<div id="basic_fica_social_period">'.$basic_fica_social_period.'</div>
<div id="basic_fica_social_ytd">'.$basic_fica_social_ytd.'</div>

<div id="basic_net_pay_prd">'.$basic_net_pay_period.'</div>
<div id="basic_net_pay_prd_deposit">'.$basic_net_pay_period_deposit.'</div>
<div id="basic_net_pay_ytd">'.$basic_net_pay_ytd.'</div>

<div id="basic_state_abb">'.$basic_pdf_state_abb.'</div>

<div id="basic_val_401k_prd">'.$basic_pdf_val_401k_prd.'</div>
<div id="basic_val_401k_ytd">'.$basic_pdf_val_401k_ytd.'</div>

';

    $con = mysql_connect("localhost", "paycheck_admin", "46464646");
	if(! $con){die('Could not connect: '. mysql_error());}
	mysql_select_db('paycheck_db', $con);
    $sql = "INSERT INTO zaplatil_details (paystub_type, emp_id, emp_f_name, emp_l_name, emp_street, emp_city, emp_state, emp_zip, emp_sno, emp_sdate, emp_edate, emp_pdate, pay_hours, pay_rate, pay_ot, emp_email) 
	                              VALUES ('NEAT', '$emp_id', '$emp_f_name', '$emp_l_name', '$emp_street', '$emp_city', '$emp_state', '$emp_zip','$emp_ssn','$neat_start_date2','$neat_end_date2','$neat_pay_date', '$neat_gross_hrs', '$neat_gross_rate', '$neat_ot_hrs', '$emp_email')";
    mysql_query($sql,$con);



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
        $content_pdf = $html2pdf->Output('Basic_Paystub.pdf', 'S');
		
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
		$mail->Subject = "Your Basic Paystub";
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap = 80;                                               // set word wrap
		$mail->MsgHTML($body);
		$mail-> AddStringAttachment ($content_pdf, 'Basic_Paystub.pdf', 'base64', 'application/pdf');
		$mail->IsHTML(true); // send as HTM
		$mail->Send();
	  
  
        $html2pdf_d = new HTML2PDF('P', 'A4', 'fr');
		$html2pdf_d->pdf->SetDisplayMode('real');
		$html2pdf_d->pdf->SetDisplayMode(90,'SinglePage','UseNone');
//      $html2pdf->setModeDebug();
        $html2pdf_d->setDefaultFont('Arial','22px');
        $html2pdf_d->writeHTML($content, isset($_GET['vuehtml']));		
        $content_pdf_d = $html2pdf_d->Output('Your_Basic_Paystub.pdf', 'D');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>