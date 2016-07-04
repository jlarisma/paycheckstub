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
 $emp_email= $_POST['basic_pdf_emp_email']	="XXX01";
 
 $empr_name= $_POST['basic_pdf_empr_name']     ="XXX01";                            
 $empr_street = $_POST['basic_pdf_empr_street']     ="XXX01";
 $empr_city = $_POST['basic_pdf_empr_city']     ="XXX01";
 $empr_state = $_POST['basic_pdf_empr_state']     ="XXX01";
 $empr_zip = $_POST['basic_pdf_empr_zip']     ="XXX01";  
 
  $emp_id = $_POST['basic_pdf_emp_id']     ="XXX01"; 
  $emp_f_name = $_POST['basic_pdf_emp_f_name']     ="XXX01";
  $emp_l_name = $_POST['basic_pdf_emp_l_name']     ="XXX01";  
  $emp_street = $_POST['basic_pdf_emp_street']     ="XXX01";
  $emp_city = $_POST['basic_pdf_emp_city']     ="XXX01"; 
  $emp_state = $_POST['basic_pdf_emp_state']     ="XXX01";
  $emp_zip = $_POST['basic_pdf_emp_zip']     ="XXX01";
  $emp_ssn = $_POST['basic_pdf_emp_ssn']     ="XXX01";   
  
  $basic_start_date2 = $_POST['basic_pdf_start_date2']     ="XXX01";		  
  $basic_end_date2 = $_POST['basic_pdf_end_date2']     ="XXX01";
  $basic_pay_date = $_POST['basic_pdf_pay_date']     ="XXX01";   
   
  $basic_gross_rate = $_POST['basic_pdf_gross_rate']     ="XXX01";
  $basic_gross_hrs = $_POST['basic_pdf_gross_hrs']     ="XXX01";
  $basic_ot_hrs = $_POST['basic_pdf_ot_hrs']     ="XXX01";    
  
  $basic_gross_prd = $_POST['basic_pdf_gross_prd']     ="XXX01";
  $basic_gross_ytd = $_POST['basic_pdf_gross_ytd']     ="XXX01";
  
  $basic_taxable_gross_prd = $_POST['basic_pdf_taxable_gross_prd']     ="XXX01";
  $basic_taxable_gross_ytd = $_POST['basic_pdf_taxable_gross_ytd']     ="XXX01";
  
  $basic_fed_amt_deduct_period = $_POST['basic_pdf_fed_amt_deduct_period']     ="XXX01";
  $basic_fed_amt_deduct_ytd = $_POST['basic_pdf_fed_amt_deduct_ytd']     ="XXX01";  
	 
  $basic_medicare_period = $_POST['basic_pdf_medicare_period']     ="XXX01"; 
  $basic_medicare_ytd = $_POST['basic_pdf_medicare_ytd']     ="XXX01";
  
  $basic_state_amtincomtax = $_POST['basic_pdf_state_amtincomtax']     ="XXX01";  
  $basic_state_amtincomtaxytd = $_POST['basic_pdf_state_amtincomtaxytd']     ="XXX01";
  
  $basic_fica_social_period = $_POST['basic_pdf_fica_social_period']     ="XXX01"; 
  $basic_fica_social_ytd = $_POST['basic_pdf_fica_social_ytd']     ="XXX01"; 
  
  $basic_net_pay_period = $_POST['basic_pdf_net_pay_period']     ="XXX01"; 
  $basic_net_pay_period_deposit = $_POST['basic_pdf_net_pay_period_deposit']     ="XXX01"; 
  $basic_net_pay_ytd = $_POST['basic_pdf_net_pay_ytd']     ="XXX01"; 
  
  $basic_pdf_state_abb = $_POST['basic_pdf_state_abb']     ="XXX01"; 
  
  $basic_pdf_val_401k_prd = $_POST['basic_pdf_val_401k_prd']     ="XXX01"; 
  $basic_pdf_val_401k_ytd = $_POST['basic_pdf_val_401k_ytd']     ="XXX01"; 		
  $start_date = $_POST['pdf_emp_sdate1']     ="XXX01";
  $empr_rno = $_POST['emp_rno']     ="XXX01";
	    $end_date  = $_POST['pdf_emp_edate1']     ="XXX01";
		 $empr_ac = $_POST['emp_ac']     ="XXX01";
		  $empr_pdate = $_POST['pdf_emp_pdate1']     ="XXX01"; 
		  $empr_ch = $_POST['emp_ch']     ="XXX01";
 $grossr_hrs = $_POST['pdf_gross_hrs']     ="XXX01";
$thsperiodamtr = $_POST['pdf_thsperiodamt1']     ="XXX01"; 
$grossr_rate = $_POST['pdf_gross_rate']     ="XXX01";

$fedr_amtincom = $_POST['pdf_fed_amtincom1']     ="XXX01";
$stater_amtincomtax = $_POST['state_amtincomtax']     ="XXX01";
 $fedr_amtytd = $_POST['pdf_fed_amtytd1']     ="XXX01"; 
 $stater_amtincomtaxytd = $_POST['pdf_state_amtincomtaxytd1']     ="XXX01";
  $fica_social_periodr = $_POST['pdf_fica_social_period1']     ="XXX01";
$paid_amtr = $_POST['paid_amt1']     ="XXX01";
$fica_social_ytdr = $_POST['pdf_fica_social_ytd1']     ="XXX01";
$medicare_periodr = $_POST['pdf_medicare_period1']     ="XXX01";
$medicare_ytdr = $_POST['pdf_medicare_ytd1']     ="XXX01";
$union_dues = $_POST['pdf_union_dues']     ="XXX01";
$parking = $_POST['pdf_parking']     ="XXX01";
   // include(dirname(__FILE__).'/html2pdf/examples/res/test1.php');
  $content = ob_get_clean();


$content= <<<ASDF
<style>
*{
font-size: 12px;
vertical-align: middle;
}

#ad-paystub{ line-height: 25px; font-size: 12px; color: #929292; padding-top: 15px; padding-bottom:20px; }

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
    font-size: 13px!important;
}
.fontsize11{
    font-size: 11px!important;
}
.tl-right{
    text-align: right !important;
    padding-right: 3px;
}
.tl-left{
    text-align: left!important;
}
.tl-center{
    text-align: center!important;
}
.lh12{
     line-height: 12px!important;
}
.lh17{
    line-height: 17px!important;
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
    background-image: none!important;
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
/** ----------------------------------------- styles for advanced paystub section **/
#ad-paystub{
    z-index: 99;
    width:645px;
    position: relative;
    font-weight: bold;
    !text-indent: 7px;
    padding-left: 7px;
	margin-left:60px;

}
#ad-paystub table {
    text-align:right;text-align: center;width:100%
}

#ad-paystub, #ad-paystub td {
    border-width:0px;
    text-align: left;
}
#ad-paystub tr{
    line-height: 12px;
}
#ad-paystub .hd-text td{
    background-color: #dfdfdf;
    font-size: 13px!important;
	height:18px;
    !text-indent: 4px;
    padding-left: 4px;
}

.gray-bar{
    background-color:rgb(180,180,180);
    color:white;
    text-align: left;
    text-indent: 4px;
	height:25px;
}
/** ----------------------------------------- styles for basic paystub section **/
#bc-paystub{
    z-index: 99;
    width: 640px;
    position: relative;
    font-weight: bold;
    !text-indent:4px;
    !padding-left:5px;
    padding-right:33px;
}
#bc-paystub, #bc-paystub td {
    border-width:1px;
    text-align: left;
}

#bc-paystub td {
    padding-left:5px;
}

#bc-paystub div, #bc-paystub span{
    text-align: left;
}
#bc-paystub span {
    display: inline-block;
}

.bd-bottom-dash{
    border-bottom:dashed;
    border-width:1px
}

    /** ----------------------------------------- styles for neat paystub section **/
#nt-paystub{
    z-index: 99;
    width: 874px;
    position: relative;
    font-weight: bold;
}

#nt-paystub, #nt-paystub td{
    font-size:11px;
    border-width:2px!important;
}
#nt-paystub .hd-text, #nt-paystub .hd-text td{
    font-size: 10px !important;
    color:#828282;
}

.nt-title{
    text-align: right;
    margin-right: 12px;
    margin-top: 29px;
    font-size: 18px;
    font-weight: normal;
}

</style>
<page>
<div id="bc-paystub" style="border: solid 1px;" >
    <table class="x-subtotal-1" style="width:100%; text-align:right;text-align: center; border: solid 1px;" cellpadding="10">
        <tbody>
		<tr class="hd-text"  class="hd-text" style="">
			<td width="74px"  class="bd-right"></td>
			<td width="74px"  class="bd-right"></td>
			<td width="103px"  class="bd-right"></td>
            <td width="96px"  class="bd-right"></td>
			<td width="120px"  class="bd-right"></td>
			<td width="62px"  class="bd-right"></td>
			<td width="60px"  class=""></td>
		</tr>
        <tr class="x-input" style="height:24px">
            <td colspan="2" class="bd-bottom">Employee ID:</td>
            <td class="bd-bottom">$emp_id</td>
            <td class="bd-rb">$emp_ssn</td>
            <td class="bd-rb" style="vertical-align: text-bottom">Required Deductions</td>
            <td class="bd-rb" style="position:relative">Period</td>
            <td class="bd-bottom" style="position:relative">YTD</td>
        </tr>
        <tr class="x-input" style="height:24px">
            <td colspan="2" class="bd-bottom">Employee Name:</td>
            <td colspan="2" class="bd-rb">$emp_l_name &nbsp; $emp_f_name </td>
            <td class="bd-right">Federal Income Tax</td>
            <td class="bd-right">$basic_fed_amt_deduct_period </td>
            <td class="">$basic_fed_amt_deduct_ytd</td>
        </tr>
        <tr class="x-input" style="height:24px">
            <td class="bd-bottom">Pay Period:</td>
            <td class="bd-rb">$basic_start_date2</td>
            <td colspan="2" class="bd-rb">to &nbsp;&nbsp; &nbsp;&nbsp; $basic_end_date2
                &nbsp;&nbsp; &nbsp;&nbsp;<span id="basic_state_abb">$basic_pdf_state_abb</span></td>
            <td class="bd-right">FICA-Medicare</td>
            <td class="bd-right">$basic_medicare_period </td>
            <td class="">$basic_medicare_ytd</td>
        </tr>
        <tr class="x-input" style="height:24px">
            <td rowspan=2 colspan="4" class="bd-rb">Earnings</td>
            <td class="bd-right">State Income Tax</td>
            <td class="bd-right">$basic_state_amtincomtaxytd</td>
            <td class="">$basic_state_amtincomtax</td>
        </tr>
        <tr class="x-input" style="height:24px">
            <td class="bd-rb">FICA-Social Security</td>
            <td class="bd-rb">$basic_fica_social_period </td>
            <td class="bd-bottom">$basic_fica_social_ytd</td>
        </tr>
        <tr class="x-input" style="height:10px">
            <td class="bd-right">Hours</td>
            <td class="bd-right">Rate</td>
            <td class="">This Period</td>
            <td class="bd-right">YTD</td>
            <td class="bd-rb">Other Deductions</td>
            <td class="bd-rb">$basic_pdf_val_401k_prd </td>
            <td class="bd-bottom">$basic_pdf_val_401k_ytd</td>
        </tr>
        <tr class="x-input" style="height:28px">
            <td class="bd-rb">$basic_gross_hrs</td>
            <td class="bd-rb">$basic_gross_rate</td>
            <td class="bd-bottom">$basic_ot_hrs</td>
            <td class="bd-rb">-</td>
            <td class="bd-right">-</td>
            <td class="bd-right">-</td>
            <td class="">-</td>
        </tr>
        <tr class="x-input" style="height:28px">
            <td class="bd-rb">GROSS PAY</td>
            <td class="bd-rb">-</td>
            <td class="bd-bottom">$basic_gross_prd </td>
            <td class="bd-rb">$basic_gross_ytd</td>
            <td class="bd-rb">-</td>
            <td class="bd-rb">-</td>
            <td class="bd-bottom">-</td>
        </tr>
        <tr class="x-input" style="height:28px">
            <td rowspan="2" colspan="4" class="bd-right bd-bottom-dash"></td>
            <td class="bd-rb">NET PAY</td>
            <td class="bd-rb">$basic_net_pay_period</td>
            <td class="bd-bottom">$basic_net_pay_ytd</td>
        </tr>
        <tr class="x-input" style="height:17px">
            <td class="bd-bottom-dash">&nbsp;</td>
            <td class="bd-bottom-dash"></td>
            <td class="bd-bottom-dash"></td>
        </tr>
        <tr class="x-input" style="height:24px;">
            <td colspan="7" class="" style="padding:9px 20px">
                <div style="position:relative; border:solid 1px;padding-left:5px;">
                    <div id="basic_pay_date" style="position:absolute;width:200px;height:70px;top:5px;left:5px">
                        <span id="basic_pay_date">$basic_pay_date</span>
                        <div style="margin-left: 20px;">
                            <div>$emp_street</div>
                            <div>$emp_city</div>
                            <div>$emp_state</div>
                            <div>$emp_zip</div>
                        </div>
                    </div>
                    <div class="x-chknum" style="width:185px;position: absolute;top: 15px;right: 10px; height:40px">
                        <div style="height:14px"><span style="width:95px;">Check Number:</span>
                            <span>-</span>
                        </div>
                        <div><span style="width:95px">Pay Date:</span>
                            <span>-</span>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="x-pay" style="margin-top: 80px">
                        <span style="width:90px">PAY</span>
                        <span>$basic_net_pay_period_deposit</span>
                    </div>
                    <div style="height:40px;margin-bottom:20px;">
                        <span style="width:90px">To the Order of</span>
                        <span id="basic_union_dues_prd" style="width:200px">-</span>
                        <span id="basic_union_dues_ytd" style="width:200px">-</span>
                    </div>
                    <div class="x-num" style="position: absolute; bottom:0px;left:275px">
                        1234567
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>

    <p id="basic_emp_email">asdf</p>

    <!-- <div style="display:none;visibility:hidden;">
        <p id="basic_taxable_gross_prd">asdf</p>
        <p id="basic_taxable_gross_ytd">asdf</p>
        <p id="basic_emp_city">asdf</p>
        <p id="basic_emp_street">asdf</p>
        <p id="basic_emp_state">asdf</p>
        <p id="basic_emp_zip">asdf</p>

        <p id="lbl_other_ded_thisperiod2">asdf</p>
        <p id="lbl_other_ded_ytd2">asdf</p>
    </div> -->
</div>
</page>
ASDF;
	if ( $_REQUEST['xx']==1){
       echo $content; exit;
     }

    $con = mysql_connect("localhost", "paycheck_admin", "46464646");
	if(! $con){die('Could not connect: '. mysql_error());}
	mysql_select_db('paycheck_db', $con);
    $sql = "INSERT INTO emp_table (paystub_type, emp_id, emp_f_name, emp_l_name, emp_street, emp_city, emp_state, emp_zip, emp_sno, emp_sdate, emp_edate, emp_pdate, pay_hours, pay_rate, pay_ot, emp_email) 
	                              VALUES ('BASIC', '$emp_id', '$emp_f_name', '$emp_l_name', '$emp_street', '$emp_city', '$emp_state', '$emp_zip','$emp_ssn','$neat_start_date2','$neat_end_date2','$neat_pay_date', '$neat_gross_hrs', '$neat_gross_rate', '$neat_ot_hrs', '$emp_email')";
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
/*		
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
		$mail-> AddStringAttachment ($content_pdf, 'Basic_Paystub.pdf', 'base64', 'application/pdf');
		$mail->IsHTML(true); // send as HTM
		$mail->Send();
	  
*/  
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