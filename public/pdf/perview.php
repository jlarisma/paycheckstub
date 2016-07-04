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
		  <td width="600">Required Deductions</td>
		 </tr>
		</table>';
		$html1='<table border="1">
		 <tr>
		    <td width="400">Employee Id '.$empr_id.'</td>
			<td width="100">Period:</td>
			<td width="100">YTD:</td>
		 </tr>
		 
		 </table>';
		 


 		
$pdf->WriteHTML($html);
 		$pdf->Ln(1);
$pdf->WriteHTML($html1);

 
$pdf->Output();
?>


?>

