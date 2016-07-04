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

 $empr_name= $_POST['pdf_empr_name'];                            
 $empr_street = $_POST['pdf_empr_street'];
 $empr_city = $_POST['pdf_empr_city'];
 $empr_state = $_POST['pdf_empr_state'];
 $empr_zip = $_POST['pdf_empr_zip'];  
 
  $emp_id = $_POST['pdf_emp_id']; 
  $emp_email= $_POST['pdf_emp_email']; 
  $emp_f_name = $_POST['pdf_emp_f_name'];
  $emp_l_name = $_POST['pdf_emp_l_name'];  
  $emp_street = $_POST['pdf_emp_street'];
  $emp_city = $_POST['pdf_emp_city']; 
  $emp_state = $_POST['pdf_emp_state'];
  $emp_zip = $_POST['pdf_emp_zip'];
  $emp_ssn = $_POST['pdf_emp_ssn'];   
  
  $start_date2 = $_POST['pdf_start_date2'];
  $end_date2 = $_POST['pdf_end_date2'];
  $pay_date = $_POST['pdf_pay_date'];   
   
  $gross_rate = $_POST['pdf_gross_rate'];
  $gross_hrs = $_POST['pdf_gross_hrs'];
  $ot_hrs = $_POST['pdf_ot_hrs'];   
  $gross_ot_rate = $_POST['pdf_gross_ot_rate'];   
  
  $gross_prd = $_POST['pdf_gross_prd'];
  $gross_ytd = $_POST['pdf_gross_ytd'];
  $gross_ot_prd = $_POST['pdf_gross_ot_prd'];
  $gross_ot_ytd = $_POST['pdf_gross_ot_ytd'];
  
  $taxable_gross_prd = $_POST['pdf_taxable_gross_prd'];
  $taxable_gross_ytd = $_POST['pdf_taxable_gross_ytd'];
  
  $fed_amt_deduct_period = $_POST['pdf_fed_amt_deduct_period'];
  $fed_amt_deduct_ytd = $_POST['pdf_fed_amt_deduct_ytd'];  
	 
  $medicare_period = $_POST['pdf_medicare_period']; 
  $medicare_ytd = $_POST['pdf_medicare_ytd'];
  
  $state_amtincomtax = $_POST['pdf_state_amtincomtax'];  
  $state_amtincomtaxytd = $_POST['pdf_state_amtincomtaxytd'];
  
  $fica_social_period = $_POST['pdf_fica_social_period']; 
  $fica_social_ytd = $_POST['pdf_fica_social_ytd']; 
  
  $tot_ded_prd = $_POST['pdf_tot_ded_prd']; 
  $tot_ded_ytd = $_POST['pdf_tot_ded_ytd'];
  
  $net_pay_period = $_POST['pdf_net_pay_period']; 
  $net_pay_period_deposit = $_POST['pdf_net_pay_period_deposit']; 
  $net_pay_ytd = $_POST['pdf_net_pay_ytd']; 
  
  $pdf_state_abb = $_POST['pdf_state_abb']; 
  
  $val_401k_prd = $_POST['pdf_val_401k_prd']; 
  $val_401k_ytd = $_POST['pdf_val_401k_ytd']; 		
  
  $val_401k_prd = $_POST['pdf_union_dues_prd']; 
  $val_401k_ytd = $_POST['pdf_union_dues_ytd']; 
  
  $label_401 = $_POST['pdf_label_401']; 
  $label_reg = $_POST['pdf_label_reg']; 
  $label_ot = $_POST['pdf_label_ot']; 
  $label_ss = $_POST['pdf_label_ss']; 
  $label_med = $_POST['pdf_label_med']; 
  $label_fed = $_POST['pdf_label_fed'];
  
  $check_num = $_POST['pdf_check_num'];

  $content = ob_get_clean();
 
$content= <<<ASDF
<style>
*{
font-size: 12px;
vertical-align: middle;
}

#nt-paystub{ font-size: 12px; color: #555;margin-left:70px;}

table, tr, td,th,thead {
    margin:0;
    padding:0;
    border-spacing: 0;
    vertical-align: middle;
    border-collapse: collapse;

}
.hd-text{
    color:black;
    line-height:19px;
}
.fontsize16{
    font-size:16px;
}
.fontsize13 td, .fontsize13{
    font-size: 13px;
}
.fontsize11{
    font-size: 11px;
}
.tl-right{
    text-align: right ;
    padding-right: 3px;
}
.tl-left{
    text-align: left;
}
.tl-center{
    text-align: center;
}
.lh12{
     line-height: 12px;
}
.lh17{
    line-height: 17px;
}
.paystub{
    border-style: solid;
    !margin: 20px;
}
.paystub td{
    border-width:1px;
}
.paystub table{
    width:100%;
    border-spacing: 0;
}
.no-background{
    background-image: none;
}
/* border right & bottom */
.bd-rb{
    border-bottom-style: solid;
    border-right-style: solid;
}
.bd-right{
    border-right-style: solid;
}
.bd-bottom{
    border-bottom-style: solid;
}


    /** ----------------------------------------- styles for neat paystub section **/
#nt-paystub{
    z-index: 99;
    width: 874px;
    !position: absolute;
    font-weight: bold;

}

#nt-paystub, #nt-paystub td{
    font-size:11px;
    border-width:2px;
}
#nt-paystub .hd-text, #nt-paystub .hd-text td{
    font-size: 10px ;
    color:#828282;
}
#nt-paystub td{
    border-color:black;
}

#emp_email{
    font-size:60px;
	color:rgb(204, 155, 75);
	padding-left:70px;
}

.nt-title{
    text-align: right;
    margin-right: 12px;
    margin-top: 29px;
    font-size: 18px;
    font-weight: normal;
}

#nt-paystub{
	background-image: url(http://www.paycheckstubonline.com/wp-content/uploads/2013/04/PREVIEW-paycheck-paystub-710.gif);
	background-repeat: repeat;
}
</style>

<page>  
<div id="nt-paystub" class="paystub" style="border-width:2px">
    <div class="x-title bd-bottom" style="height:82px; border-width: 2px;">
        <table style="line-height: 14px;">
            <tr>
                <td style="width:33%;text-align: left;padding-left: 10px; height:25px; font-size: 18px;">$empr_name</td>
                <td style="width:33%"></td>
                <td rowspan="6" style="text-align:center; width:33%" class="nt-title" >Earnings Statement</td>
            </tr>
            <tr style="height: 10px">
                <td style="text-align: left;padding-left: 10px">$empr_street</td>
                <td>$emp_street</td>
            </tr>
            <tr>
                <td style="text-align: left;padding-left: 10px">$empr_city</td>
                <td>$emp_city</td>
            </tr>
            <tr>
                <td style="text-align: left;padding-left: 10px">$empr_state</td>
                <td>$emp_state</td>
            </tr>
            <tr>
                <td style="text-align: left;padding-left: 10px">$empr_zip</td>
                <td>$emp_zip</td>
            </tr>
            <tr>
                <td style="text-align: left;padding-left: 10px">&nbsp;</td>
                <td></td>
            </tr>
        </table>
   </div>

    <table class="x-subtotal-1" cellpadding="0" cellspacing="" style="text-align:right;text-align: center">

            <tr class="hd-text" style="height:17px">
                <td class="bd-right" style="width:130px"> EMPLOYEE NO.</td>
                <td class="bd-right" style="width:295px">EMPLOYEE NAME</td>
                <td class="bd-right" style="width:142px">SOCIAL SECURITY NO</td>
                <td class="bd-right" style="width:98px">PERIOD BIG.</td>
                <td class="bd-right" style="width:100px">PERIOD END</td>
                <td class="" style="width:103px">CHECK DATE</td>
            </tr>
            <tr style="height:27px">
                <td class="bd-rb x-input">$emp_id</td>
                <td class="bd-rb x-input">$emp_l_name $emp_f_name</td>
                <td class="bd-rb x-input">$emp_ssn</td>
                <td class="bd-rb x-input">$start_date2 </td>
                <td class="bd-rb x-input">$end_date2 </td>
                <td class="bd-bottom x-input">$pay_date</td>
            </tr>
    </table>

    <table class="x-subtotal-1" style="text-align:right;text-align: center">
        <tbody>
        <tr class="hd-text"  class="hd-text" style="height:17px">
            <td class="bd-rb" style="width:130px"> EMPLOYEE NO.</td>
            <td class="bd-rb" style="width:105px">HOURS</td>
            <td class="bd-rb" style="width:98px">RATE</td>
            <td class="bd-rb" style="width:112px">CURRENT AMOUNT</td>
            <td class="bd-rb" style="width:152px">WITHOLDINGS/DEDUCTIONS</td>
            <td class="bd-rb" style="width:146px">CURRENT AMOUNT</td>
            <td class="bd-bottom" style="width:118px">YEAR TO DATE</td>
        </tr>
        <!-- <tr class="x-empty">
            <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
        </tr> -->
        <tr class="x-input" style="height:24px">
            <td class="bd-right">$label_reg</td>
            <td class="bd-right">$gross_hrs</td>
            <td class="bd-right tl-right">$gross_rate</td>
            <td class="bd-right tl-right">$gross_prd</td>
            <td class="bd-right">-</td>
            <td class="bd-right tl-right">-</td>
            <td class=" tl-right">$gross_ytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right">$label_ot</td>
            <td class="bd-right ">$ot_hrs</td>
            <td class="bd-right tl-right">$gross_ot_rate</td>
            <td class="bd-right tl-right">$gross_ot_prd</td>
            <td class="bd-right">-</td>
            <td class="bd-right tl-right">-</td>
            <td class=" tl-right">$gross_ot_ytd</td>
        </tr>
        <tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">$label_401</td>
            <td class="bd-right tl-right">$val_401k_prd</td>
            <td class=" tl-right">$val_401k_ytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">$pdf_state_abb</td>
            <td class="bd-right tl-right">$state_amtincomtax</td>
            <td class=" tl-right">$state_amtincomtaxytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">$label_fed</td>
            <td class="bd-right tl-right">$fed_amt_deduct_period</td>
            <td class=" tl-right">$fed_amt_deduct_ytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">$label_ss</td>
            <td class="bd-right tl-right">$fica_social_period</td>
            <td class=" tl-right">$fica_social_ytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">$label_med</td>
            <td class="bd-right tl-right">$medicare_period</td>
            <td class=" tl-right">$medicare_ytd</td>
        </tr>
		<tr class="x-empty">
            <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
        </tr>
		<tr class="x-empty">
            <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
        </tr>
		<tr class="x-empty">
            <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-rb"></td>
            <td class="bd-rb"></td>
            <td class="bd-rb"></td>
            <td class="bd-rb"></td>
            <td class="bd-rb"></td>
            <td class="bd-rb">$net_pay_period</td>
            <td class="bd-bottom"></td>
        </tr>


        </tbody>
    </table>

    <table class="x-subtotal-2" cellpadding="0" cellspacing="" style="text-align:right;text-align: center">
       <tr class="hd-text" style="height:17px">
            <td class="bd-right" style="width:130px">CURRENT AMOUNT</td>
            <td class="bd-right" style="width:140px">CURRENT DEDUCTIONS</td>
            <td class="bd-right" style="width:112px">NET PAY</td>
            <td class="bd-right" style="width:130px">YTD EARNINGS</td>
            <td class="bd-right" style="width:149px">YTD DEDUCTIONS</td>
            <td class="bd-right" style="width:100px">YTD NET PAY</td>
            <td class="" style="width:98px">CHECK NO.</td>
        </tr>
        <tr style="height:27px">
			<td class="bd-right x-input">$taxable_gross_prd</td>
            <td class="bd-right x-input">$tot_ded_prd</td>
            <td class="bd-right x-input">$net_pay_period_deposit</td>
            <td class="bd-right x-input">$taxable_gross_ytd</td>
            <td class="bd-right x-input">$tot_ded_ytd</td>
            <td class="bd-right x-input">$net_pay_ytd</td>
            <td class="x-input">$check_num</td>
        </tr>
    </table>
</div>
<div style="clear:both"></div>
<p id="emp_email">$emp_email</p>
</page>
ASDF;



	if ( $_REQUEST['xx']==1){
       echo $content; exit;
     }

    $con = mysql_connect("localhost", "paycheck_admin", "46464646");
    if(! $con){die('Could not connect: '. mysql_error());}
    mysql_select_db('paycheck_db', $con);
    $sql = "INSERT INTO previews (paystub_type, emp_id, emp_f_name, emp_l_name, emp_street, emp_city, emp_state, emp_zip, emp_sno, emp_sdate, emp_edate, emp_pdate, pay_hours, pay_rate, pay_ot, emp_email)
                                      VALUES ('NEAT', '$emp_id', '$emp_f_name', '$emp_l_name', '$emp_street', '$emp_city', '$emp_state', '$emp_zip','$emp_ssn','$start_date2','$end_date2','$pay_date', '$gross_hrs', '$gross_rate', '$ot_hrs', '$emp_email')";
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
        $content_pdf = $html2pdf->Output('NEAT_paycheckstubonline.com.pdf', 'S');

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
        $mail-> AddStringAttachment ($content_pdf, 'Neat_Paystub.pdf', 'base64', 'application/pdf');
        $mail->IsHTML(true); // send as HTM
        $mail->Send();
        

        $html2pdf_d = new HTML2PDF('L', 'A4', 'fr');
        $html2pdf_d->pdf->SetDisplayMode('real');
        $html2pdf_d->pdf->SetDisplayMode(90,'SinglePage','UseNone');
    //      $html2pdf->setModeDebug();
        $html2pdf_d->setDefaultFont('Arial','22px');
        $html2pdf_d->writeHTML($content, isset($_GET['vuehtml']));
        $content_pdf_d = $html2pdf_d->Output('Neat-paycheckstubonline-com.pdf', 'D');
    }
	
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>