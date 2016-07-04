<style type="text/Css">
<!--
.test1
{
    border: solid 1px #FF0000;
    background: #FFFFFF;
    border-collapse: collapse;
}
-->
</style>
<page style="font-size: 14px">
 
 
 <?php 
 
 $empr_name= $_POST['pdf_emp_id'];                            
 $empr_street = $_POST['pdf_emp_name1'];

 
 ?>
 <table>
 <tbody>  
									<tr>
										<td>
											First Last Name:<?php echo $empr_name ?>
										</td>
								   </tr>
		
								   <tr>
									   <td>
											Address: <?php echo $empr_street ?>
									   </td>
								   </tr>
									
								   <tr>
										<td>
											City: <?php echo $empr_id ?>
										</td>
								  </tr>
				   
								  <tr>
									  <td>
									State: <?php $empr1_name ?>
									   </td>
								  </tr>
								  
								
							 </tbody> </table>
 
    <table border="1">
		<tr>
		  <td colspan="7" align="right">Required Deductions</td>
		 </tr>
		 
		 <tr>
		    <td colspan="5">Employee Id <?php echo $empr_id ?></td>
			<td>Period:</td>
			<td>YTD:</td>
		 </tr>
		 
		 <tr>
		   <td rowspan="3" colspan="4">Employee Name:  </td>
		   <td>Federal Income Tax:</td>
		   <td> &nbsp;</td>
		   <td>&nbsp;</td>
		 </tr>
 
 			<tr>
				 <td>FICA Medicare:</td>
				 <td> &nbsp;</td>
				 <td>&nbsp;</td>
		    </tr>
			<tr>
				 <td>State IncomeTax:</td>
				 <td> &nbsp;</td>
				 <td>&nbsp;</td>
		    </tr>
			<tr>
		   <td colspan="4">Pay Period: to</td>
		   <td>FICA Social Security:</td>
		   <td> &nbsp;</td>
		   <td>&nbsp;</td>
		 </tr>
			
			<tr>
		     <td colspan="7" align="left">Earning:</td>
		   </tr>
		   <tr>
		       <td>Hours</td>
			   <td>Rate:</td>
			   <td>This Period:</td>
			   <td>YTD:</td>
			   <td>Union Dues:</td>
			   <td>:</td>
			   <td>:</td>
		   </tr>
		     <tr>
		       <td>Gross Pay:</td>
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
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
			   <td>&nbsp;</td>
			   <td>&nbsp;</td>
		   </tr>
		 
			
 
</table>
</page>