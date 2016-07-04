<?php
//gets all the posted values, submits them into DB.
//and then sedns and email to me letting me know.  - can be removed
//this is a prep, before the paypal approves it
//when PAID at paypal, the listener will update to PAID

 require 'PHPMailer/class.phpmailer.php';
 ob_start();
   $custom = $_POST['custom'];  
   $type = $_POST['type'];
	 
   $emp_email= $_POST['pdf_emp_email'];  
	 
   $empr_name= $_POST['pdf_empr_name'];                            
   $empr_street = $_POST['pdf_empr_street'];
   $empr_city = $_POST['pdf_empr_city'];
   $empr_state = $_POST['pdf_empr_state'];
   $empr_zip = $_POST['pdf_empr_zip']; 
 
 
  $emp_rout_num = $_POST['pdf_emp_rout_num']; 
  $emp_acc_num = $_POST['pdf_emp_acc_num'];
  $emp_id = $_POST['pdf_emp_id']; 
  $emp_f_name = $_POST['pdf_emp_f_name'];
  $emp_l_name = $_POST['pdf_emp_l_name'];  
  $emp_street = $_POST['pdf_emp_street'];
  $emp_city = $_POST['pdf_emp_city']; 
  $emp_state = $_POST['pdf_emp_state'];
  $emp_zip = $_POST['pdf_emp_zip'];
  $emp_ssn = $_POST['pdf_emp_ssn'];  
  $emp_mar_status = $_POST['pdf_emp_mar_status'];  
  
  $start_date = $_POST['pdf_start_date'];
  $start_date2 = $_POST['pdf_start_date2']; 
  $end_date2 = $_POST['pdf_end_date2']; 
  $end_date = $_POST['pdf_end_date'];
  $pay_date = $_POST['pdf_pay_date'];   
   
  $gross_hrs = $_POST['pdf_gross_hrs'];
  $gross_rate = $_POST['pdf_gross_rate']; 
  $ot_hrs = $_POST['pdf_ot_hrs']; 
        $gross_ot_rate  = $_POST['pdf_gross_ot_rate'];
    
  $gross_prd = $_POST['pdf_gross_prd']; 
  $gross_ytd = $_POST['pdf_gross_ytd'];
  		$gross_ot_prd = $_POST['pdf_gross_ot_prd']; 
        $gross_ot_ytd = $_POST['pdf_gross_ot_ytd'];
  
  $taxable_gross_prd = $_POST['pdf_taxable_gross_prd']; 
  $taxable_gross_ytd = $_POST['pdf_taxable_gross_ytd'];
  
  $fed_amt_deduct_prd = $_POST['pdf_fed_amt_deduct_prd'];
  $fed_amt_deduct_ytd = $_POST['pdf_fed_amt_deduct_ytd']; 
	 
  $medicare_prd = $_POST['pdf_medicare_prd']; 
  $medicare_ytd = $_POST['pdf_medicare_ytd'];
  
  $state_amtincometax_prd = $_POST['pdf_state_amtincometax_prd'];  
  $state_amtincometax_ytd = $_POST['pdf_state_amtincometax_ytd'];
  
  $fica_social_prd = $_POST['pdf_fica_social_prd']; 
  $fica_social_ytd = $_POST['pdf_fica_social_ytd']; 
  
  $tot_ded_prd = $_POST['pdf_tot_ded_prd']; 
  $tot_ded_ytd = $_POST['pdf_tot_ded_ytd'];
  
  $net_pay_prd = $_POST['pdf_net_pay_prd']; 
  $net_pay_prd_deposit = $_POST['pdf_net_pay_prd_deposit']; 
  $net_pay_ytd = $_POST['pdf_net_pay_ytd']; 
  
  $pdf_state_abb = $_POST['pdf_state_abb']; 
  
  $val_401k_prd = $_POST['pdf_val_401k_prd']; 
  $val_401k_ytd = $_POST['pdf_val_401k_ytd']; 		
   
  $union_dues_prd = $_POST['pdf_union_dues_prd']; 
  $union_dues_ytd = $_POST['pdf_union_dues_ytd'];  
   
  $commission_prd = $_POST['pdf_commission_prd']; 
  $commission_ytd = $_POST['pdf_commission_ytd'];     
        		 
  $check_num = $_POST['pdf_check_num']; 				 
				 
  $content = ob_get_clean();

$content='';   

  $con = mysql_connect("localhost", "paycheck_admin", "46464646");
  if(! $con){die('Could not connect: '. mysql_error());}
	mysql_select_db('paycheck_db', $con);

//for ($x=1; $x<=2; $x++){	
    $sql = "INSERT INTO paystub_details (stub_order, tx_rand_num, emp_email, paystub_type, empr_name, empr_street, empr_city, empr_state, empr_zip, emp_rout_num, emp_acc_num, emp_id, emp_f_name, emp_l_name, emp_street, emp_city, emp_state, emp_zip, emp_sno, emp_mar_status, emp_sdate, emp_edate, emp_pdate, pay_hours, pay_rate, pay_ot, gross_ot_rate, gross_prd, gross_ytd, gross_ot_prd, gross_ot_ytd, taxable_gross_prd, taxable_gross_ytd, fed_amt_deduct_prd, fed_amt_deduct_ytd, medicare_prd, medicare_ytd, state_amtincometax_prd, state_amtincometax_ytd, fica_social_prd, fica_social_ytd, tot_ded_prd, tot_ded_ytd, net_pay_prd, net_pay_prd_deposit, net_pay_ytd, pdf_state_abb, pdf_val_401k_prd, pdf_val_401k_ytd, commission_prd, commission_ytd, union_dues_prd, union_dues_ytd, start_date2, end_date2, check_num) 
	VALUES ('$x', '$custom', '$emp_email', '$type', '$empr_name', '$empr_street', '$empr_city', '$empr_state', '$empr_zip', '$emp_rout_num', '$emp_acc_num', '$emp_id', '$emp_f_name', '$emp_l_name', '$emp_street', '$emp_city', '$emp_state', '$emp_zip', '$emp_ssn', '$emp_mar_status', '$start_date', '$end_date', '$pay_date', '$gross_hrs', '$gross_rate', '$ot_hrs', '$gross_ot_rate', '$gross_prd', '$gross_ytd', '$gross_ot_prd', '$gross_ot_ytd', '$taxable_gross_prd', '$taxable_gross_ytd', '$fed_amt_deduct_prd', '$fed_amt_deduct_ytd', '$medicare_prd', '$medicare_ytd', '$state_amtincometax_prd', '$state_amtincometax_ytd', '$fica_social_prd', '$fica_social_ytd', '$tot_ded_prd', '$tot_ded_ytd', '$net_pay_prd', '$net_pay_prd_deposit', '$net_pay_ytd', '$pdf_state_abb', '$val_401k_prd', '$val_401k_ytd', '$commission_prd', '$commission_ytd', '$union_dues_prd', '$union_dues_ytd', '$start_date2', '$end_date2', '$check_num')";
    mysql_query($sql,$con);
//}	
	
    $sql_2 = "INSERT INTO emp (emp_email, tx_rand_num, paystub_type) 
	                 VALUES ('$emp_email', '$custom' , '$type')";
    mysql_query($sql_2,$con);


//for ($x=1; $x<=4; $x++){
  // mysql_query($sql,$con);
//}

    // convert to PDF
    //require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');


?>