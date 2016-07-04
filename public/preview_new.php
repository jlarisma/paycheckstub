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
 $grossr_ytd = $_POST['gross_ytd'];
 $fedr_amtincom = $_POST['pdf_fed_amtincom1'];
 $stater_amtincomtax = $_POST['state_amtincomtax'];
 $fedr_amtytd = $_POST['pdf_fed_amtytd1']; 
 $stater_amtincomtaxytd = $_POST['pdf_state_amtincomtaxytd1'];
 $fica_social_periodr = $_POST['pdf_fica_social_period1'];
 $paid_amtr = $_POST['paid_amt'];
 $fica_social_ytdr = $_POST['pdf_fica_social_ytd1'];
 $medicare_periodr = $_POST['pdf_medicare_period1'];
 $medicare_ytdr = $_POST['pdf_medicare_ytd1'];
				
require('html_table.php');
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$html='<table border="1">
 <tr>
      <td colspan="7" align="right">Required Deductions</td>
    </tr>
	<tr>
				<td colspan="4">Employee ID:  $empr_id </td>
				<td>&nbsp;</td>
				<td>Period:</td>
				<td>YTD:</td>
  </tr>

              <tr>
	            <td colspan="4" rowspan="3">Employee Name:   $empr1_name </td>
				<td height="24">Federal Income Tax:  </td>
				<td height="24"> $fedr_amtincom</td>
				<td height="24"> $fedr_amtytd</td>
			  </tr>	
			  		  
<tr>
<td>FICA Medicare:<br /></td>
<td>$medicare_periodr</td>
<td> $medicare_ytdr</td>
</tr>	
		<tr>
			<td>State IncomeTax</td>
			<td></td>
			<td>$stater_amtincomtaxytd</td>
		 </tr>
 

 
			  <tr class="top right">
				<td colspan="4">Pay Period:  $start_date to  $end_date </td>
				<td> FICA Social Security  </td>
				<td> $fica_social_periodr</td>
				<td>$fica_social_ytdr</td>
			  </tr>

<tr>
	<td colspan="4">Earning:</td>
	<td colspan="3"> </td>
</tr>  
		
<tr>
<td rowspan="2">Hours  <br />$grossr_hrs </td>
<td rowspan="2">Rate: <br />$grossr_rate</td>
<td rowspan="2">This Period: <br />$thsperiodamtr</td>
<td rowspan="2">YTD:<br />$grossr_ytd </td>

<td rowspan="2">Union Dues: <br /></td>
<td>:</td>
<td>:</td>
</tr>		
	<tr>
	<td rowspan="2"></td>
	<td rowspan="2"></td></tr>	

 <tr>
 <td>Gross Pay:</td>
  <td> </td>
  <td></td>
  <td> </td>
  <td>Parking</td>
    
 </tr>
		

 <tr>
 <td></td>
  <td> </td>
  <td></td>
  <td> </td>
  <td>Net Pay :</td>
   <td> </td>
  <td></td>
    
 </tr>
		
			  
			  
			  
	
	
     
  </table>
MYTABLE;

$html1 = <<<MYTABLE1
  <table>
  <tr>
 <td colspan="6"> Company Name: $empr_name</td>
   
   <td>Check Number : </td>
  
    
 </tr>
 
  <tr>
 
   
   <td colspan="5" align="right">Pay Date : </td>
  <td></td>
    
 </tr>
 
 
 
 
 
 
 
  </table>';
  $pdf->WriteHTML($html);
$pdf->Output();
?>
				





