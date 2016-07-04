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
 $emp_email= $_POST['tstub_pdf_emp_email']   ;// ='XX01'; 
   
 $empr_add_name= $_POST['tstub_pdf_empr_name']   ;// ='XX01';                           
 $empr_add_street = $_POST['tstub_pdf_empr_street']   ;// ='XX01';
 $empr_add_city = $_POST['tstub_pdf_empr_city']   ;// ='XX01';
 $empr_add_state = $_POST['tstub_pdf_empr_state']   ;// ='XX01';
 $empr_add_zip = $_POST['tstub_pdf_empr_zip']   ;// ='XX01';
 
  $rout_num = $_POST['tstub_pdf_emp_rout_num']   ;// ='XX01';
  $acc_num = $_POST['tstub_pdf_emp_acc_num']   ;// ='XX01';
  $emp_id = $_POST['tstub_pdf_emp_id']   ;// ='XX01';
  $emp_f_name = $_POST['tstub_pdf_emp_f_name']   ;// ='XX01';
  $emp_l_name = $_POST['tstub_pdf_emp_l_name']   ;// ='XX01'; 
  $emp_street = $_POST['tstub_pdf_emp_street']   ;// ='XX01';
  $emp_city = $_POST['tstub_pdf_emp_city']   ;// ='XX01';
  $emp_state = $_POST['tstub_pdf_emp_state']   ;// ='XX01';
  $emp_zip = $_POST['tstub_pdf_emp_zip']   ;// ='XX01';
  $emp_ssn = $_POST['tstub_pdf_emp_ssn']   ;// ='XX01';  
  $emp_mar_status = $_POST['tstub_pdf_emp_mar_status']   ;// ='XX01'; 
   
  $garnish1_prd = $_POST['tstub_pdf_garnish1_prd']   ;// ='XX01';
  $garnish1_ytd = $_POST['tstub_pdf_garnish1_ytd']   ;// ='XX01';
  $garnish2_prd = $_POST['tstub_pdf_garnish2_prd']   ;// ='XX01';
  $garnish2_ytd = $_POST['tstub_pdf_garnish2_ytd']   ;// ='XX01';
  $garnish3_prd = $_POST['tstub_pdf_garnish3_prd']   ;// ='XX01';
  $garnish3_ytd = $_POST['tstub_pdf_garnish3_ytd']   ;// ='XX01';
  $tot_garnish_prd = $_POST['tstub_pdf_tot_garnish_prd']   ;// ='XX01';
  $tot_garnish_ytd = $_POST['tstub_pdf_tot_garnish_ytd']   ;// ='XX01';
  
  
  $start_date = $_POST['tstub_pdf_start_date']   ;// ='XX01';
  $end_date = $_POST['tstub_pdf_end_date']   ;// ='XX01';
  $pay_date = $_POST['tstub_pdf_pay_date']   ;// ='XX01';  
   
  $gross_rate = $_POST['tstub_pdf_gross_rate']   ;// ='XX01';
  $gross_hrs = $_POST['tstub_pdf_gross_hrs']   ;// ='XX01';
  $ot_hrs = $_POST['tstub_pdf_ot_hrs']   ;// ='XX01';   
  
  $gross_prd = $_POST['tstub_pdf_gross_prd']   ;// ='XX01';
  $gross_ytd = $_POST['tstub_pdf_gross_ytd']   ;// ='XX01';
  
  $taxable_gross_prd = $_POST['tstub_pdf_taxable_gross_prd']   ;// ='XX01';
  $taxable_gross_ytd = $_POST['tstub_pdf_taxable_gross_ytd']   ;// ='XX01';
  
  $fed_amt_deduct_prd = $_POST['tstub_pdf_fed_amt_deduct_prd']   ;// ='XX01';
  $fed_amt_deduct_ytd = $_POST['tstub_pdf_fed_amt_deduct_ytd']   ;// ='XX01'; 
	 
  $medicare_prd = $_POST['tstub_pdf_medicare_prd']   ;// ='XX01';
  $medicare_ytd = $_POST['tstub_pdf_medicare_ytd']   ;// ='XX01';
  
  $state_amt_incomtax_prd = $_POST['tstub_pdf_state_amt_incomtax_prd']   ;// ='XX01'; 
  $state_amt_incomtax_ytd = $_POST['tstub_pdf_state_amt_incomtax_ytd']   ;// ='XX01';
  
  $fica_social_prd = $_POST['tstub_pdf_fica_social_prd']   ;// ='XX01';
  $fica_social_ytd = $_POST['tstub_pdf_fica_social_ytd']   ;// ='XX01';
  
  $net_pay_prd = $_POST['tstub_pdf_net_pay_prd']   ;// ='XX01';
  $net_pay_prd_deposit = $_POST['tstub_pdf_net_pay_prd_deposit']   ;// ='XX01';
  $net_pay_ytd = $_POST['tstub_pdf_net_pay_ytd']   ;// ='XX01';
  $net_pay_ytd_deposit = $_POST['tstub_pdf_net_pay_ytd_deposit']   ;// ='XX01';
  
  $state_abb = $_POST['tstub_pdf_state_abb']   ;// ='XX01';
  
  $val_401k_prd = $_POST['tstub_pdf_val_401k_prd']   ;// ='XX01';    
  $val_401k_ytd = $_POST['tstub_pdf_val_401k_ytd']   ;// ='XX01';
  
  
  $union_dues_prd = $_POST['tstub_pdf_union_dues_prd']   ;// ='XX01';
  $union_dues_ytd = $_POST['tstub_pdf_union_dues_ytd']   ;// ='XX01';
  
  $start_date2 = $_POST['tstub_pdf_start_date2']   ;// ='XX01'; 
  $end_date2 = $_POST['tstub_pdf_end_date2']   ;// ='XX01';
  
  $commission_prd = $_POST['tstub_pdf_commission_prd']   ;// ='XX01';
  $commission_ytd = $_POST['tstub_pdf_commission_ytd']   ;// ='XX01';
  
 
  $content = ob_get_clean();
 
$content=<<<ASDF
<style>
*{
font-size: 12px;
vertical-align: middle;
}

table, tr, td,th,thead {
    margin:0;
    padding:0;
    border-spacing: 0;
    vertical-align: middle;
    border-collapse: collapse;

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
    !margin: 0px;
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

.cr-blue{
    color:#32d0f7;
}
.bdcr-blue{
    border-color:#05b9e8;
}

table{
    width:100%;
}
    /** ----------------------------------------- styles for t-stub paystub section **/
.hd-text{
    color:black;
    font-size: 20px;
    font-weight: bold;
    line-height: 28px;
}
.mk-text{
    color:black;
    font-size: 13px;
    font-weight: normal;
}

#tstub-paystub{
    width: 730px;
    font-size: 12px;
    color: #555;
    margin-left:0px;
    margin-top:0px;
    z-index: 99;
    font-weight: bold;
    border-width:0px;
    border-style: solid;
}
#tstub-paystub td{
    font-size:11px;
}

#neat_emp_email{
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

#page-container{
	//background-image: url(http://www.paycheckstubonline.com/wp-content/uploads/2013/04/PREVIEW-paycheck-paystub-710.gif);
	background-repeat: repeat;
	width:100%;
	//height:80%;
	vertical-align: top;
}
</style>

<page>
<div id="page-container">

<div id="tstub-paystub" class="paystub" style="border-width:1px">
    <table>
        <tr>
            <td style="width:235px;vertical-align: top;">
             <table>
              <tr>
                <td style="font-size: 24px;font-weight: bold;">$empr_add_name</td>
              </tr>
              <tr>
                <td class="mk-text">$empr_add_street</td>
              </tr>
              <tr>
                <td class="mk-text">$empr_add_city</td>
              </tr>
              <tr>
                <td class="mk-text">$empr_add_state</td>
              </tr>
              <tr>
                <td class="mk-text">$empr_add_zip</td>
              </tr>
            </table>
           </td>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
            <td style="font-size: 26px;width:495px"><p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>NOTE ** THIS IS NOT A CHECK ** NOTE
              <br/>
          <span style="font-size: 13px">PAYROLL ADVICE ONLY</span></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
        </tr>
        <tr style="height:55px">
            <td></td><td></td>
        </tr>

        <tr>
            <td colspan="2" style="color:#32d0f7;font-size: 8px;font-weight: bold;border-bottom: solid #05b9e8 2px;" class="tl-right">FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE</td>
        </tr>

        <tr>
            <td id="left-col" style="width:235px;vertical-align: top;border-right: solid #05b9e8 2px;border-bottom: solid  #05b9e8 2px;">
                 <table>
                     <tr>
                         <td style="width:30%;"></td>
                         <td style="width:70%"></td>
                     </tr>

                     <tr>
                        <td class="hd-text" colspan="2">PERSONAL AND CHECK INFORMATION</td>
                     </tr>

                     <tr>
                         <td class="mk-text">Emp ID</td>
                         <td>$emp_id</td>
                     </tr>
                     <tr>
                         <td></td>
                         <td> $emp_f_name </td>
                     </tr>
                     <tr>
                         <td></td>
                         <td> $emp_l_name </td>
                     </tr>
                     <tr>
                         <td></td>
                         <td>$emp_street</td>
                     </tr>
                     <tr>
                         <td></td>
                         <td>$emp_city</td>
                     </tr>
                     <tr>
                         <td></td>
                         <td>$emp_state</td>
                     </tr>
                     <tr>
                         <td></td>
                         <td>$emp_zip</td>
                     </tr>
                     <tr>
                         <td class="mk-text">Soc Sec#:</td>
                         <td>$emp_ssn</td>
                     </tr>
                     <tr>
                         <td class="mk-text">Hiring Date:</td>
                         <td>$start_date</td>
                     </tr>
                     <tr>
                         <td class="mk-text">Filling Status:</td>
                         <td>$emp_mar_status</td>
                     </tr>
                </table>

                <table style="margin-top: 50px">
                    <tr>
                        <td class="mk-text" style="width:30%">Pay Period</td>
                        <td style="width:35%">$start_date2</td>
                        <td style="width:10%"> To </td>
                        <td style="width:25%">$end_date</td>
                    </tr>
                    <tr>
                        <td class="mk-text">Check Date</td>
                        <td colspan="3">$pay_date</td>
                    </tr>

                    <tr class="x-empty">
                        <td  colspan="4" style="height:50px">&nbsp;</td>
                    </tr>

                    <tr>
                        <td class="mk-text">Check#:</td>
                        <td colspan="3">-</td>
                    </tr>
                    <tr>
                        <td class="mk-text">Route#:</td>
                        <td colspan="3">$rout_num</td>
                    </tr>
                    <tr>
                        <td class="mk-text">Acc#:</td>
                        <td colspan="3">$acc_num</td>
                    </tr>

                </table>

                <table>
                    <tr>
                        <td style="width:34%"></td>
                        <td style="width:33%"></td>
                        <td style="width:33%"></td>
                    </tr>
    `               <tr>
                        <td colspan="3" style="border-bottom: solid 1px;" >&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hd-text" colspan="3" style="border-top: solid 1px;">NET PAY ALLOCATIONS</td>
                    </tr>
                    <tr>
                        <td class="mk-text">DESCRIPTION</td>
                        <td class="mk-text tl-right">CURRENT($)</td>
                        <td class="mk-text tl-right">YTD($)</td>
                    </tr>
                    <tr>
                        <td class="mk-text">NET PAY</td>
                        <td class="mk-text tl-right">$net_pay_prd_deposit</td>
                        <td class="mk-text tl-right">$net_pay_ytd_deposit</td>
                    </tr>
                </table>
            </td>

            <td id="right-col" style="width:495px;vertical-align: top;border-bottom: solid #05b9e8 2px;">
                  <table><tr>
                      <td style="width:14%"></td>
                      <td style="width:25%"></td>
                      <td style="width:14%"></td>
                      <td style="width:15%"></td>
                      <td style="width:19%"></td>
                      <td style="width:13%"></td></tr>
                      <!-- ******* -->
					  <tr>
                          <td>
                        	<p>&nbsp;</p>
                            <p>&nbsp;</p>
                          </td>
                      </tr>
                      <tr>
                          <td colspan="6" class="hd-text">EARNINGS</td>
                      </tr>

                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">DESCRIPTION</td>
                          <td class="mk-text tl-right">HRS/<br/>UNITS</td>
                          <td class="mk-text tl-right">RATE</td>
                          <td class="mk-text tl-right">CURRENT($)</td>
                          <td class="mk-text tl-right">YTD($)</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">REGULAR EARNINGS</td>
                          <td class="tl-right">$gross_hrs</td>
                          <td class="tl-right">$gross_rate</td>
                          <td class="tl-right">$gross_prd</td>
                          <td class="tl-right">$gross_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">O/T EARNINGS(1.5)</td>
                          <td class="tl-right">$ot_hrs</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">COMMISSIONS</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right">$commission_prd</td>
                          <td class="tl-right">$commission_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">PRETAX INS</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right">$union_dues_prd</td>
                          <td class="tl-right">$union_dues_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">401K</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right">$val_401k_prd</td>
                          <td class="tl-right">$val_401k_ytd</td>
                      </tr>
                      <tr class="x-empty">
                          <td colspan="6">&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td colspan="5" class="mk-text">HOURS WORKED</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td colspan="5" class="mk-text">ADJUSTED GROSS</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">EARNINGS</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right">$taxable_gross_prd</td>
                          <td class="tl-right">$taxable_gross_ytd</td>
                      </tr>
					  <tr>
                          <td>
                        	<p>&nbsp;</p>
                            <p>&nbsp;</p>
                          </td>
                      </tr>
                      <!-- ******* -->
                      <tr>
                          <td colspan="6" class="hd-text" style="border-top: solid 1px;">DEDUCTIONS</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">DESCRIPTIONS</td>
                          <td class="mk-text tl-right">CURRENT($)</td>
                          <td class="mk-text tl-right">YTD($)</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">GARNISHMENTS</td>
                          <td class="tl-right">$garnish1_prd</td>
                          <td class="tl-right">$garnish1_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3"></td>
                          <td class="tl-right">$garnish2_prd</td>
                          <td class="tl-right">$garnish2_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3"></td>
                          <td class="tl-right">$garnish3_prd</td>
                          <td class="tl-right">$garnish3_ytd</td>
                      </tr>
                      <tr class="x-empty">
                          <td colspan="6">&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text " colspan="3" >TOTAL</td>
                          <td class="tl-right">$tot_garnish_prd</td>
                          <td class="tl-right">$tot_garnish_ytd</td>
                      </tr>
                      <!-- ******* -->
                      <tr>
                          <td colspan="6" class="hd-text" style="border-top: solid 1px;">WITHHOLDINGS</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">DESCRIPTIONS</td>
                          <td class="mk-text tl-right">CURRENT($)</td>
                          <td class="mk-text tl-right">YTD($)</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">FEDERAL W/H</td>
                          <td class="tl-right">$fed_amt_deduct_prd</td>
                          <td class="tl-right">$fed_amt_deduct_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">FICA MEDICARE</td>
                          <td class="tl-right">$medicare_prd</td>
                          <td class="tl-right">$medicare_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">FICA SOC SEC(OASDI)</td>
                          <td class="tl-right">$fica_social_prd</td>
                          <td class="tl-right">$fica_social_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="1">STATE W/H</td>
                          <td >$state_abb</td>
                          <td class="tl-right">&nbsp;</td>
                          <td class="tl-right">$state_amt_incomtax_prd</td>
                          <td class="tl-right">$state_amt_incomtax_ytd</td>
                      </tr>

                      <tr class="x-empty" style="height:50px">
                          <td colspan="6">&nbsp;
						  <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p></td>
                      </tr>
                      <tr class="x-empty" >
                          <td colspan="3">&nbsp;</td>
                          <td colspan="3" style="border-bottom: solid 1px;">&nbsp;</td>
                      </tr>
                      <tr>
                          <td colspan="4"></td>
                          <td class="mk-text tl-right">CURRENT($)</td>
                          <td class="mk-text tl-right">YTD($)</td>
                      </tr>

                      <!-- ******* -->
                      <tr>
                          <td colspan="4" class="hd-text">NETPAY</td>
                          <td class="tl-right">$net_pay_prd</td>
                          <td class="tl-right">$net_pay_ytd</td>
                      </tr>
                  </table>
            </td>
        </tr>

        <tr>
            <td style="border-right: solid #05b9e8 2px;height:30px">
                <span style="margin-left: 10px;font-size:6;color:#32d0f7">PayRolls by Simple-Pay</span><br/>
                <span style="margin-left: 10px;font-size:6;">0446-P485 GRUVILLE INC</span>
            </td>
            <td></td>
        </tr>
    </table>


</div>
<div style="clear:both"></div>
</div>
</page>
ASDF;

	  if ( $_REQUEST['xx']==1){
       echo $content; exit;
     }


    $con = mysql_connect("localhost", "paycheck_admin", "46464646");
	  if(! $con){die('Could not connect: '. mysql_error());}
    	mysql_select_db('paycheck_db', $con);
     $sql = "INSERT INTO zaplatil_details (paystub_type, emp_id, emp_f_name, emp_l_name, emp_street, emp_city, emp_state, emp_zip, emp_sno, emp_sdate, emp_edate, emp_pdate, pay_hours, pay_rate, pay_ot, emp_email) 
 	                              VALUES ('tstub', '$emp_id', '$emp_f_name', '$emp_l_name', '$emp_street', '$emp_city', '$emp_state', '$emp_zip','$emp_ssn','$neat_start_date2','$neat_end_date2','$neat_pay_date', '$neat_gross_hrs', '$neat_gross_rate', '$neat_ot_hrs', '$emp_email')";
    mysql_query($sql,$con);
	

    // convert to PDF
    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
		$html2pdf->pdf->SetDisplayMode('real');
		$html2pdf->pdf->SetDisplayMode(90,'SinglePage','UseNone');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial','22px');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));		
        $content_pdf = $html2pdf->Output('YourPaystub.pdf', 'S');

	    $mail = new PHPMailer(true); //New instance, with exceptions enabled
	    $body = ("tstub Paystub ");
	    $mail->IsSMTP(); // tell the class to use SMTP
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->Port = 25; // set the SMTP server port
		$mail->Host = "paycheckstubonline.com"; // SMTP server
		$mail->Username = "contact@paycheckstubonline.com"; // SMTP server username
		$mail->Password = "Escalade11"; // SMTP server password
		$mail->IsSendmail(); // tell the class to use Sendmail
		$mail->AddReplyTo("contact@paycheckstubonline.com","PCSO");
		$mail->From = "contact@paycheckstubonline.com";
		$mail->FromName = "PCSO";
		$to = $emp_email;
		$mail->AddAddress($to);
		$mail->Subject = "T - Paystub from www.PayCheckStubOnline.com";
		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap = 80; // set word wrap
		$mail->MsgHTML($body);
		$mail-> AddStringAttachment ($content_pdf, 'Your-T-Paystub.pdf', 'base64', 'application/pdf');
		$mail->IsHTML(true); // send as HTM
		$mail->Send();
	  
  
        $html2pdf_d = new HTML2PDF('P', 'A4', 'fr');
		$html2pdf_d->pdf->SetDisplayMode('real');
        $html2pdf_d->pdf->SetDisplayMode(90,'SinglePage','UseNone');
		//$html2pdf_d->pdf->SetImageScale(1.53);  
		//$html2pdf_d->Image('www.paycheckstubonline.com/wp-content/uploads/2013/04/tstub-photoshop-2100-2800.png', 0, 0, 210, 295);
        //$html2pdf->setModeDebug();
        $html2pdf_d->setDefaultFont('Arial','22px');
        $html2pdf_d->writeHTML($content, isset($_GET['vuehtml']));		
        $html2pdf_d->Output('Your-T-Paystub.pdf', 'D');
		//$content_pdf_d = $html2pdf_d->Output('Your-T-Paystub.pdf', 'D');    // used if you want an attachement
	}
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>