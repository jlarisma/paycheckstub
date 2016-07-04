<?php 
 $empr_name=$_COOKIE['empr_add_name'];
 $empr_street=$_COOKIE['empr_add_street'];
 $empr_id=$_COOKIE['emp_id'];
 $empr1_name=$_COOKIE['emp_name'];
 $empr_city=$_COOKIE['city'];
 $empr_street=$_COOKIE['emp_street'];
 $empr_state=$_COOKIE['state'];
 $empr1_city=$_COOKIE['emp_city'];
 $empr_zip=$_COOKIE['empr_zip'];
 $empr1_state=$_COOKIE['emp_state'];
 $empr1_zip=$_COOKIE['emp_zip'];
 $empr_sno=$_COOKIE['emp_sno'];
 $empr_sdate=$_COOKIE['emp_sdate'];
 $empr_rno=$_COOKIE['emp_rno'];
 $empr_edate=$_COOKIE['emp_edate'];
 $empr_ac=$_COOKIE['emp_ac'];
 $empr_pdate=$_COOKIE['emp_pdate'];
 $empr_ch=$_COOKIE['emp_ch'];
 $grossr_hrs=$_COOKIE['gross_hrs'];
 $thsperiodamtr=$_COOKIE['thsperiodamt'];
 $grossr_rate=$_COOKIE['gross_rate'];
 $grossr_ytd=$_COOKIE['gross_ytd'];
 $fedr_amtincom=$_COOKIE['fed_amtincom'];
 $stater_amtincomtax=$_COOKIE['state_amtincomtax'];
 $fedr_amtytd=$_COOKIE['fed_amtytd'];
 $stater_amtincomtaxytd=$_COOKIE['state_amtincomtaxytd'];
 $fica_social_periodr=$_COOKIE['fica_social_period'];
    $paid_amtr=$_COOKIE['paid_amt'];
     $fica_social_ytdr=$_COOKIE['fica_social_ytd'];
      $paid_ytdr=$_COOKIE['paid_ytd'];
	  $medicare_periodr=$_COOKIE['medicare_period'];
	  $medicare_ytdr=$_COOKIE['medicare_ytd'];
	  $Voidr = $_COOKIE['Void'];
 
 $correctedr = $_COOKIE['corrected'];
 $tinr = $_COOKIE['tin'];
 $resaler = $_COOKIE['resale'];
                                    echo    $checkboxr =$_COOKIE['checkbox'];
					echo $checkbox2r =$_COOKIE['checkbox2'];
					echo $checkbox3r =$_COOKIE['checkbox3'];
					echo $checkbox5r =$_COOKIE['checkbox5'];
					echo $checkbox6r = $_COOKIE['checkbox6'];
					echo $checkbox7r = $_COOKIE['checkbox7'];
					echo $checkbox8r = $_COOKIE['checkbox8'];
                   echo  $checkbox9r = $_COOKIE['checkbox9'];
					echo $checkbox10r = $_COOKIE['checkbox10'];
					echo $checkbox11r = $_COOKIE['checkbox11'];
					echo $checkbox12r = $_COOKIE['checkbox12'];
					echo $checkbox13r = $_COOKIE['checkbox13'];
					echo $checkbox14r = $_COOKIE['checkbox14'];
					echo $checkbox15r = $_COOKIE['checkbox15'];
					echo $checkbox17r = $_COOKIE['checkbox17'];
					echo $checkbox18r = $_COOKIE['checkbox18'];
					echo $checkbox19r = $_COOKIE['checkbox19'];
					echo $checkbox21r = $_COOKIE['checkbox21'];
					echo $checkbox22r = $_COOKIE['checkbox22'];
					echo $checkbox23r = $_COOKIE['checkbox23'];
					echo $checkbox24r = $_COOKIE['checkbox24'];
					echo $checkbox25r = $_COOKIE['checkbox25'];
					echo $checkbox26r = $_COOKIE['checkbox26'];
					echo $checkbox27r = $_COOKIE['checkbox27'];
					echo $checkbox28r = $_COOKIE['checkbox28'];
					echo $checkbox29r = $_COOKIE['checkbox29'];
					echo $checkbox30r = $_COOKIE['checkbox30'];
					echo $checkbox31r = $_COOKIE['checkbox31'];
					
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment Successful</title>
</head>
<body>
<h1>Thank You</h1>

<?php

$email = $_POST['email'];  
 
  
$to      = $email;  
$subject = 'Download Area | Login Credentials';  
$message = ' 
  
Thank you for your purchase 
 
Your account information 
------------------------- 
Email: '.$email.' 

------------------------- 
 
You can now login at http://yourdomain.com/PayPal/';  
$headers = 'From:me@yourdomain.com' . "\r\n";  
  
mail($to, $subject, $message, $headers);  




##########################################################################################

?>

<p>Your payment was successful. Thank you.</p>
<form action="https://a1professionals.net/payform/pdf.php" method="post">
<input type="hidden" name="empr_add_name" value="<?php echo $empr_name ?>" />
<input type="hidden" name="empr_add_street" value="<?php echo $empr_street ?>" />
<input type="hidden" name="emp_id" value="<?php echo $empr_id ?>" />
<input type="hidden" name="emp_name" value="<?php echo $empr1_name ?>" />
<input type="hidden" name="city" value="<?php echo $empr_city ?>" />
<input type="hidden" name="emp_street" value="<?php echo $empr1_street ?>" />
<input type="hidden" name="state" value="<?php echo $empr_state ?>" />
<input type="hidden" name="emp_city" value="<?php echo $empr1_city ?>" />
<input type="hidden" name="empr_zip" value="<?php echo $empr_zip ?>" />
<input type="hidden" name="emp_state" value="<?php echo $empr1_state ?>" />
<input type="hidden" name="emp_zip" value="<?php echo $empr1_zip ?>" />
<input type="hidden" name="emp_sno" value="<?php echo $empr_sno ?>" />
<input type="hidden" name="emp_sdate" value="<?php echo $empr_sdate ?>" />
<input type="hidden" name="emp_rno" value="<?php echo $empr_rno ?>" />
<input type="hidden" name="emp_edate" value="<?php echo $empr_edate ?>" />
<input type="hidden" name="emp_ac" value="<?php echo $empr_ac ?>" />
<input type="hidden" name="emp_pdate" value="<?php echo $empr_pdate ?>" />
<input type="hidden" name="emp_ch" value="<?php echo $empr_ch ?>" />
<input type="hidden" name="gross_hrs" value="<?php echo $grossr_hrs ?>" />
<input type="hidden" name="thsperiodamt" value="<?php echo $thsperiodamtr ?>" />
<input type="hidden" name="gross_rate" value="<?php echo $grossr_rate ?>" />
<input type="hidden" name="gross_ytd" value="<?php echo $grossr_ytd ?>" />
<input type="hidden" name="fed_amtincom" value="<?php echo $fedr_amtincom ?>" />
<input type="hidden" name="state_amtincomtax" value="<?php echo $stater_amtincomtax ?>" />
<input type="hidden" name="fed_amtytd" value="<?php echo $fedr_amtytd ?>" />
<input type="hidden" name="state_amtincomtaxytd" value="<?php echo $stater_amtincomtaxytd ?>" />
<input type="hidden" name="fica_social_period" value="<?php echo $fica_social_periodr ?>" />
<input type="hidden" name="paid_amt" value="<?php echo $paid_amtr ?>" />
<input type="hidden" name="fica_social_ytd" value="<?php echo $fica_social_ytdr ?>" />
<input type="hidden" name="paid_ytd" value="<?php echo $paid_ytdr ?>" />
<input type="hidden" name="medicare_period" value="<?php echo $medicare_periodr ?>" />
<input type="hidden" name="medicare_ytd" value="<?php echo $medicare_ytdr ?>" />




<input type="submit" name="paychecksubmit"  value="Download your paycheck Form"/>

</form>


<form action="https://a1professionals.net/payform/pdfw2.php" method="post">

<input type="hidden" name="empr_add_name" value="<?php echo $empr_name ?>" />
<input type="hidden" name="empr_add_street" value="<?php echo $empr_street ?>" />
<input type="hidden" name="emp_id" value="<?php echo $empr_id ?>" />
<input type="hidden" name="emp_name" value="<?php echo $empr1_name ?>" />
<input type="hidden" name="city" value="<?php echo $empr_city ?>" />
<input type="hidden" name="emp_street" value="<?php echo $empr_street ?>" />
<input type="hidden" name="state" value="<?php echo $empr_state ?>" />
<input type="hidden" name="emp_city" value="<?php echo $empr1_city ?>" />
<input type="hidden" name="empr_zip" value="<?php echo $empr_zip ?>" />
<input type="hidden" name="emp_state" value="<?php echo $empr1_state ?>" />
<input type="hidden" name="emp_zip" value="<?php echo $empr1_zip ?>" />
<input type="hidden" name="emp_sno" value="<?php echo $empr_sno ?>" />
<input type="hidden" name="emp_sdate" value="<?php echo $empr_sdate ?>" />
<input type="hidden" name="emp_rno" value="<?php echo $empr_rno ?>" />
<input type="hidden" name="emp_edate" value="<?php echo $empr_edate ?>" />
<input type="hidden" name="emp_ac" value="<?php echo $empr_ac ?>" />
<input type="hidden" name="emp_pdate" value="<?php echo $empr_pdate ?>" />
<input type="hidden" name="emp_ch" value="<?php echo $empr_ch ?>" />
<input type="hidden" name="gross_hrs" value="<?php echo $grossr_hrs ?>" />
<input type="hidden" name="thsperiodamt" value="<?php echo $thsperiodamtr ?>" />
<input type="hidden" name="gross_rate" value="<?php echo $grossr_rate ?>" />
<input type="hidden" name="gross_ytd" value="<?php echo $grossr_ytd ?>" />
<input type="hidden" name="fed_amtincom" value="<?php echo $fedr_amtincom ?>" />
<input type="hidden" name="state_amtincomtax" value="<?php echo $stater_amtincomtax ?>" />
<input type="hidden" name="fed_amtytd" value="<?php echo $fedr_amtytd ?>" />
<input type="hidden" name="state_amtincomtaxytd" value="<?php echo $stater_amtincomtaxytd ?>" />
<input type="hidden" name="fica_social_period" value="<?php echo $fica_social_periodr ?>" />
<input type="hidden" name="paid_amt" value="<?php echo $paid_amtr ?>" />
<input type="hidden" name="fica_social_ytd" value="<?php echo $fica_social_ytdr ?>" />
<input type="hidden" name="paid_ytd" value="<?php echo $paid_ytdr ?>" />
<input type="hidden" name="medicare_period" value="<?php echo $medicare_periodr ?>" />
<input type="hidden" name="medicare_ytd" value="<?php echo $medicare_ytdr ?>" />
<input type="submit" name="paycheckbutton"  value="Download your paycheck W2"/>
</form>

<form action="https://a1professionals.net/payform/pdf1099.php" method="post">

<input type="hidden" name="empr_add_name" value="<?php echo $empr_name ?>" />
<input type="hidden" name="empr_add_street" value="<?php echo $empr_street ?>" />
<input type="hidden" name="emp_id" value="<?php echo $empr_id ?>" />
<input type="hidden" name="emp_name" value="<?php echo $empr1_name ?>" />
<input type="hidden" name="city" value="<?php echo $empr_city ?>" />
<input type="hidden" name="emp_street" value="<?php echo $empr_street ?>" />
<input type="hidden" name="state" value="<?php echo $empr_state ?>" />
<input type="hidden" name="emp_city" value="<?php echo $empr1_city ?>" />
<input type="hidden" name="empr_zip" value="<?php echo $empr_zip ?>" />
<input type="hidden" name="emp_state" value="<?php echo $empr1_state ?>" />
<input type="hidden" name="emp_zip" value="<?php echo $empr1_zip ?>" />
<input type="hidden" name="emp_sno" value="<?php echo $empr_sno ?>" />
<input type="hidden" name="emp_sdate" value="<?php echo $empr_sdate ?>" />
<input type="hidden" name="emp_rno" value="<?php echo $empr_rno ?>" />
<input type="hidden" name="emp_edate" value="<?php echo $empr_edate ?>" />
<input type="hidden" name="emp_ac" value="<?php echo $empr_ac ?>" />
<input type="hidden" name="emp_pdate" value="<?php echo $empr_pdate ?>" />
<input type="hidden" name="emp_ch" value="<?php echo $empr_ch ?>" />
<input type="hidden" name="gross_hrs" value="<?php echo $grossr_hrs ?>" />
<input type="hidden" name="thsperiodamt" value="<?php echo $thsperiodamtr ?>" />
<input type="hidden" name="gross_rate" value="<?php echo $grossr_rate ?>" />
<input type="hidden" name="gross_ytd" value="<?php echo $grossr_ytd ?>" />
<input type="hidden" name="fed_amtincom" value="<?php echo $fedr_amtincom ?>" />
<input type="hidden" name="state_amtincomtax" value="<?php echo $stater_amtincomtax ?>" />
<input type="hidden" name="fed_amtytd" value="<?php echo $fedr_amtytd ?>" />
<input type="hidden" name="state_amtincomtaxytd" value="<?php echo $stater_amtincomtaxytd ?>" />
<input type="hidden" name="fica_social_period" value="<?php echo $fica_social_periodr ?>" />
<input type="hidden" name="paid_amt" value="<?php echo $paid_amtr ?>" />
<input type="hidden" name="fica_social_ytd" value="<?php echo $fica_social_ytdr ?>" />
<input type="hidden" name="paid_ytd" value="<?php echo $paid_ytdr ?>" />
<input type="hidden" name="medicare_period" value="<?php echo $medicare_periodr ?>" />
<input type="hidden" name="medicare_ytd" value="<?php echo $medicare_ytdr ?>" />
         <input type="hidden" name="Void" value="<?php echo $Voidr ?>" />
              <input type="hidden" name="corrected" value="<?php echo $correctedr ?>" />
          <input type="hidden" name="tin" value="<?php echo $tinr ?>" />
          <input type="hidden" name="resale" value="<?php echo $resaler ?>" />

<input type="submit" name="paycheckbutton1"  value="Download your paycheck 1099MISC"/>
</form>

<form action="https://a1professionals.net/payform/pdfw3.php" method="post">

<input type="hidden" name="empr_add_name" value="<?php echo $empr_name ?>" />
<input type="hidden" name="empr_add_street" value="<?php echo $empr_street ?>" />
<input type="hidden" name="emp_id" value="<?php echo $empr_id ?>" />
<input type="hidden" name="emp_name" value="<?php echo $empr1_name ?>" />
<input type="hidden" name="city" value="<?php echo $empr_city ?>" />
<input type="hidden" name="emp_street" value="<?php echo $empr_street ?>" />
<input type="hidden" name="state" value="<?php echo $empr_state ?>" />
<input type="hidden" name="emp_city" value="<?php echo $empr1_city ?>" />
<input type="hidden" name="empr_zip" value="<?php echo $empr_zip ?>" />
<input type="hidden" name="emp_state" value="<?php echo $empr1_state ?>" />
<input type="hidden" name="emp_zip" value="<?php echo $empr1_zip ?>" />
<input type="hidden" name="emp_sno" value="<?php echo $empr_sno ?>" />
<input type="hidden" name="emp_sdate" value="<?php echo $empr_sdate ?>" />
<input type="hidden" name="emp_rno" value="<?php echo $empr_rno ?>" />
<input type="hidden" name="emp_edate" value="<?php echo $empr_edate ?>" />
<input type="hidden" name="emp_ac" value="<?php echo $empr_ac ?>" />
<input type="hidden" name="emp_pdate" value="<?php echo $empr_pdate ?>" />
<input type="hidden" name="emp_ch" value="<?php echo $empr_ch ?>" />
<input type="hidden" name="gross_hrs" value="<?php echo $grossr_hrs ?>" />
<input type="hidden" name="thsperiodamt" value="<?php echo $thsperiodamtr ?>" />
<input type="hidden" name="gross_rate" value="<?php echo $grossr_rate ?>" />
<input type="hidden" name="gross_ytd" value="<?php echo $grossr_ytd ?>" />
<input type="hidden" name="fed_amtincom" value="<?php echo $fedr_amtincom ?>" />
<input type="hidden" name="state_amtincomtax" value="<?php echo $stater_amtincomtax ?>" />
<input type="hidden" name="fed_amtytd" value="<?php echo $fedr_amtytd ?>" />
<input type="hidden" name="state_amtincomtaxytd" value="<?php echo $stater_amtincomtaxytd ?>" />
<input type="hidden" name="fica_social_period" value="<?php echo $fica_social_periodr ?>" />
<input type="hidden" name="paid_amt" value="<?php echo $paid_amtr ?>" />
<input type="hidden" name="fica_social_ytd" value="<?php echo $fica_social_ytdr ?>" />
<input type="hidden" name="paid_ytd" value="<?php echo $paid_ytdr ?>" />
<input type="hidden" name="medicare_period" value="<?php echo $medicare_periodr ?>" />
<input type="hidden" name="medicare_ytd" value="<?php echo $medicare_ytdr ?>" />
         

<input type="submit" name="paycheckbutton2"  value="Download your paycheck W3"/>
</form>

<form action="https://a1professionals.net/payform/pdf1096.php" method="post">

<input type="hidden" name="empr_add_name" value="<?php echo $empr_name ?>" />
<input type="hidden" name="empr_add_street" value="<?php echo $empr_street ?>" />
<input type="hidden" name="emp_id" value="<?php echo $empr_id ?>" />
<input type="hidden" name="emp_name" value="<?php echo $empr1_name ?>" />
<input type="hidden" name="city" value="<?php echo $empr_city ?>" />
<input type="hidden" name="emp_street" value="<?php echo $empr_street ?>" />
<input type="hidden" name="state" value="<?php echo $empr_state ?>" />
<input type="hidden" name="emp_city" value="<?php echo $empr1_city ?>" />
<input type="hidden" name="empr_zip" value="<?php echo $empr_zip ?>" />
<input type="hidden" name="emp_state" value="<?php echo $empr1_state ?>" />
<input type="hidden" name="emp_zip" value="<?php echo $empr1_zip ?>" />
<input type="hidden" name="emp_sno" value="<?php echo $empr_sno ?>" />
<input type="hidden" name="emp_sdate" value="<?php echo $empr_sdate ?>" />
<input type="hidden" name="emp_rno" value="<?php echo $empr_rno ?>" />
<input type="hidden" name="emp_edate" value="<?php echo $empr_edate ?>" />
<input type="hidden" name="emp_ac" value="<?php echo $empr_ac ?>" />
<input type="hidden" name="emp_pdate" value="<?php echo $empr_pdate ?>" />
<input type="hidden" name="emp_ch" value="<?php echo $empr_ch ?>" />
<input type="hidden" name="gross_hrs" value="<?php echo $grossr_hrs ?>" />
<input type="hidden" name="thsperiodamt" value="<?php echo $thsperiodamtr ?>" />
<input type="hidden" name="gross_rate" value="<?php echo $grossr_rate ?>" />
<input type="hidden" name="gross_ytd" value="<?php echo $grossr_ytd ?>" />
<input type="hidden" name="fed_amtincom" value="<?php echo $fedr_amtincom ?>" />
<input type="hidden" name="state_amtincomtax" value="<?php echo $stater_amtincomtax ?>" />
<input type="hidden" name="fed_amtytd" value="<?php echo $fedr_amtytd ?>" />
<input type="hidden" name="state_amtincomtaxytd" value="<?php echo $stater_amtincomtaxytd ?>" />
<input type="hidden" name="fica_social_period" value="<?php echo $fica_social_periodr ?>" />
<input type="hidden" name="paid_amt" value="<?php echo $paid_amtr ?>" />
<input type="hidden" name="fica_social_ytd" value="<?php echo $fica_social_ytdr ?>" />
<input type="hidden" name="paid_ytd" value="<?php echo $paid_ytdr ?>" />
<input type="hidden" name="medicare_period" value="<?php echo $medicare_periodr ?>" />
<input type="hidden" name="medicare_ytd" value="<?php echo $medicare_ytdr ?>" />
                              <input type="hidden" name="checkbox" value="<?php echo $checkboxr ?>" />
							  <input type="hidden" name="checkbox2" value="<?php echo $checkbox2r ?>" />
							  <input type="hidden" name="checkbox3" value="<?php echo $checkbox3r ?>" />
							  <input type="hidden" name="checkbox5" value="<?php echo $checkbox5r ?>" />
							  <input type="hidden" name="checkbox6" value="<?php echo $checkbox6r ?>" />
							  <input type="hidden" name="checkbox7" value="<?php echo $checkbox7r ?>" />
							  <input type="hidden" name="checkbox8" value="<?php echo $checkbox8r ?>" />
							  <input type="hidden" name="checkbox9" value="<?php echo $checkbox9r ?>" />
							  <input type="hidden" name="checkbox10" value="<?php echo $checkbox10r ?>" />
							  <input type="hidden" name="checkbox11" value="<?php echo $checkbox11r ?>" />
							  <input type="hidden" name="checkbox12" value="<?php echo $checkbox12r ?>" />
							  <input type="hidden" name="checkbox13" value="<?php echo $checkbox13r ?>" />
							  <input type="hidden" name="checkbox14" value="<?php echo $checkbox14r ?>" />
							  <input type="hidden" name="checkbox15" value="<?php echo $checkbox15r ?>" />
							  <input type="hidden" name="checkbox17" value="<?php echo $checkbox17r ?>" />
							  <input type="hidden" name="checkbox18" value="<?php echo $checkbox18r ?>" />
							  <input type="hidden" name="checkbox19" value="<?php echo $checkbox19r ?>" />
							  <input type="hidden" name="checkbox19" value="<?php echo $checkbox19r ?>" />
							  <input type="hidden" name="checkbox21" value="<?php echo $checkbox21r ?>" />
							  <input type="hidden" name="checkbox22" value="<?php echo $checkbox22r ?>" />
							  <input type="hidden" name="checkbox23" value="<?php echo $checkbox23r ?>" />
							  <input type="hidden" name="checkbox24" value="<?php echo $checkbox24r ?>" />
							  <input type="hidden" name="checkbox25" value="<?php echo $checkbox25r ?>" />
							  <input type="hidden" name="checkbox26" value="<?php echo $checkbox26r ?>" />
							  <input type="hidden" name="checkbox27" value="<?php echo $checkbox27r ?>" />
							  <input type="hidden" name="checkbox28" value="<?php echo $checkbox28r ?>" />
							  <input type="hidden" name="checkbox29" value="<?php echo $checkbox29r ?>" />
							  <input type="hidden" name="checkbox30" value="<?php echo $checkbox30r ?>" />
				               <input type="hidden" name="checkbox31" value="<?php echo $checkbox31r ?>" />
							   

<input type="submit" name="paycheckbutton3"  value="Download your paycheck 1099"/>
</form>
</body>
</html>

<?php
//session_destroy();
?>

