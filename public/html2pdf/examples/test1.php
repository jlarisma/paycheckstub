<?php  ob_start();?>
<style type="text/css">
<!--
table
{
    padding: 0;
    border:  1mm;
    font-size:10px;
    background: #FFFFFF;
    text-align: center;
}

 
-->
</style>

<?php
 $empr_name= $_POST['pdf_empr_add_name1'];                            
 $empr_street = $_POST['empr_add_street'];
 $empr_id=$_POST['pdf_emp_id'];
   $empr1_name = $_POST['pdf_emp_name1'];
   $empr_city = $_POST['city1'];
    $empr1_street = $_POST['emp_street'];
	 $empr_state = $_POST['state'];
	 $empr1_city = $_POST['emp_city1'];
	   $empr_zip = $_POST['empr_zip'];
	    $empr1_state = $_POST['emp_state'];
		 $empr1_zip = $_POST['emp_zip'];
  $empr_sno = $_POST['emp_sno']; 
  $start_date = $_POST['pdf_emp_sdate1'];
  $empr_rno = $_POST['emp_rno'];
	    $end_date  = $_POST['pdf_emp_edate1'];
		 $empr_ac = $_POST['emp_ac'];
		  $empr_pdate = $_POST['emp_pdate']; 
		  $empr_ch = $_POST['emp_ch'];
 $grossr_hrs = $_POST['pdf_gross_hrs'];
$thsperiodamtr = $_POST['pdf_thsperiodamt1']; 
$grossr_rate = $_POST['pdf_gross_rate1'];
$grossr_ytd = $_POST['gross_ytd1'];
$fedr_amtincom = $_POST['pdf_fed_amtincom1'];
$stater_amtincomtax = $_POST['state_amtincomtax'];
 $fedr_amtytd = $_POST['pdf_fed_amtytd1']; 
 $stater_amtincomtaxytd = $_POST['pdf_state_amtincomtaxytd1'];
  $fica_social_periodr = $_POST['pdf_fica_social_period1'];
$paid_amtr = $_POST['paid_amt1'];
$fica_social_ytdr = $_POST['pdf_fica_social_ytd1'];
$medicare_periodr = $_POST['pdf_medicare_period1'];
$medicare_ytdr = $_POST['pdf_medicare_ytd1'];	
	
	
   // include(dirname(__FILE__).'/html2pdf/examples/res/test1.php');
  $content = ob_get_clean();
 

	  $content='	  
	  <page backcolor="#AACCFF" backleft="2mm" backright="2mm" backtop="20mm" backbottom="20mm"   >
	  
	 
	   <table border="1" cellspacing="0" style="margin:auto;  width: 100%; height:100%;  cellpadding:10mm;">
		<tr height="10">
		  <td colspan="7" align="right">Required Deductions</td>
		 </tr>
		 
		 <tr>
		    <td colspan="5">Employee Id '.$empr_id.'</td>
			<td>Period:</td>
			<td>YTD:</td>
		 </tr>
		 
		 <tr>
		   <td rowspan="3" colspan="4">Employee Name: '.$empr1_name.' </td>
		   <td>Federal Income Tax:</td>
		   <td>'.$fedr_amtincom.'&nbsp; </td>
		   <td>'.$fedr_amtytd.'&nbsp;</td>
		 </tr>
 
 			<tr>
				 <td>FICA Medicare:</td>
				 <td>'.$medicare_periodr.'&nbsp; </td>
				 <td>'.$medicare_ytdr.'&nbsp;</td>
		    </tr>
			<tr>
				 <td>State IncomeTax:</td>
				 <td>&nbsp; </td>
				 <td>&nbsp;</td>
		    </tr>
			<tr>
		   <td colspan="4">Pay Period:'.$start_date.' to '.$end_date.' </td>
		   <td>FICA Social Security:</td>
		   <td>'.$fica_social_periodr.'&nbsp; </td>
		   <td>'.$fica_social_ytdr.'&nbsp;</td>
		 </tr>
			
			<tr>
		     <td colspan="7" align="left">Earning:</td>
		   </tr>
		   <tr>
		       <td>Hours:'.$grossr_hrs.'</td>
			   <td>Rate:'.$grossr_rate.'</td>
			   <td>This Period:</td>
			   <td>YTD:</td>
			   <td>Union Dues:</td>
			   <td>:</td>
			   <td>:</td>
		   </tr>
		     <tr>
		       <td>Gross Pay:</td>
			   <td>'.$thsperiodamtr.'&nbsp;</td>
			   <td>'.$grossr_ytd.'&nbsp;</td>
			   <td>Parking</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
		   </tr>
		    <tr>
		       <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
			   <td>Net Pay :</td>
			   <td>'.$paid_amtr.'&nbsp;</td>
			   <td>&nbsp;</td>
		   </tr>
		 
			
 
</table> 
 



 
</page>
';
    // convert in PDF
    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
		 $html2pdf->pdf->SetDisplayMode('fullpage');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
		
	
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
		
        $html2pdf->Output('test1.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
