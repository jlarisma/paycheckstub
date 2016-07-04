<?php

if(isset($_POST['submit']))
{
	        $empr_email = $_POST['emp_email'];
			
			$empr_name = $_POST['empr_name'];
			$empr_street = $_POST['empr_street'];
			$empr_city = $_POST['empr_city'];
			$empr_state = $_POST['empr_state'];
			$empr_zip = $_POST['empr_zip'];
   
   
   
   
	 $empr_state = $_POST['state'];
	  $empr1_city = $_POST['emp_city'];
	   $empr_zip = $_POST['empr_zip'];
	    $empr1_state = $_POST['emp_state'];
		 $empr1_zip = $_POST['emp_zip'];
		  $empr_sno = $_POST['emp_sno']; 
		  $empr_sdate = $_POST['emp_sdate'];
		  $empr_rno = $_POST['emp_rno'];
	    $empr_edate = $_POST['emp_edate'];
		 $empr_ac = $_POST['emp_ac'];
		  $empr_pdate = $_POST['emp_pdate']; 
		  $empr_ch = $_POST['emp_ch'];
		  $grossr_hrs = $_POST['gross_hrs'];
		  $thsperiodamtr = $_POST['thsperiodamt']; 
		  $grossr_rate = $_POST['gross_rate'];
		  $grossr_ytd = $_POST['gross_ytd'];
	    $fedr_amtincom = $_POST['fed_amtincom'];
		 $stater_amtincomtax = $_POST['state_amtincomtax'];
		  $fedr_amtytd = $_POST['fed_amtytd']; 
		  $stater_amtincomtaxytd = $_POST['state_amtincomtaxytd'];
 
setcookie("empr_add_name",$empr_name);
setcookie("empr_add_street",$empr_street);
setcookie("emp_id",$empr_id);
setcookie("emp_name",$empr1_name);
setcookie("city",$empr_city);
setcookie("emp_street",$empr_street);
setcookie("state",$empr_state);
setcookie("emp_city",$empr1_city);
setcookie("empr_zip",$empr_zip);
setcookie("emp_state",$empr1_state);
setcookie("emp_zip",$empr1_zip);
setcookie("emp_sno",$empr_sno);
setcookie("emp_sdate",$empr_sdate);
setcookie("emp_rno",$empr_rno);
setcookie("emp_edate",$empr_edate);
setcookie("emp_ac",$empr_ac);
setcookie("emp_pdate",$empr_pdate);
setcookie("emp_ch",$empr_ch);
setcookie("gross_hrs",$grossr_hrs);
setcookie("thsperiodamt",$thsperiodamtr);
setcookie("gross_rate",$grossr_rate);
setcookie("fed_amtincom",$fedr_amtincom);
setcookie("state_amtincomtax",$stater_amtincomtax);
setcookie("fed_amtytd",$fedr_amtytd);
setcookie("state_amtincomtaxytd",$stater_amtincomtaxytd);


 
}
// Database variables
$host = "localhost"; //database location
$user = "paycheck_admin"; //database username
$pass = "46464646"; //database password
$db_name = "paycheck_db"; //database name

// PayPal settings
/*$paypal_email = 'provider@a1professionals.com';
$return_url = 'https://a1professionals.net/payform/wp-content/themes/twentyeleven/pdf/payment-successful.php';
$cancel_url = 'https://a1professionals.net/payform/wp-content/themes/twentyeleven/pdf/payment-cancelled.htm';
$notify_url = 'https://a1professionals.net/payform/wp-content/themes/twentyeleven/pdf/payments.php';*/

//http://www.paycheckstubonline.com/paycheck-stub-generator
$paypal_email = 'george.strnad-facilitator@gmail.com';
$return_url = 'http://www.paycheckstubonline.com/wp-content/themes/Chameleon/pdf/payment-successful.php';
$cancel_url = 'http://www.paycheckstubonline.com/paycheck-stub-generator';
$notify_url = 'http://www.paycheckstubonline.com/wp-content/themes/Chameleon/pdf/payments.php';

$item_name = $_POST['item'];
$item_amount = $_POST['gross_ytd'];

// Include Functions
include("functions.php");

//Database Connection
$link = mysql_connect($host, $user, $pass);
mysql_select_db($db_name);





if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){



	// Firstly Append paypal account to querystring
	$querystring .= "?business=".urlencode($paypal_email)."&";	
	
	// Append amount& currency (£) to quersytring so it cannot be edited in html
	
	//The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
	$querystring .= "item_name=".urlencode($item_name)."&";
	$querystring .= "amount=".urlencode($item_amount)."&";
	
	//loop for posted values and append to querystring
	foreach($_POST as $key => $value){
		$value = urlencode(stripslashes($value));
		$querystring .= "$key=$value&";
	}
	
	// Append paypal return addresses
	$querystring .= "return=".urlencode(stripslashes($return_url))."&";
	
	
	
	
	
	$querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
	
	
	
	
	$querystring .= "notify_url=".urlencode($notify_url);
	
	// Append querystring with custom field
	//$querystring .= "&custom=".USERID;
	
	// Redirect to paypal IPN
	header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
	
	
	
	
	
	
	exit();

}else{
	
	// Response from Paypal

	// read the post from PayPal system and add 'cmd'
	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value) {
		$value = urlencode(stripslashes($value));
		$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
		$req .= "&$key=$value";
	}
	
	// assign posted variables to local variables
	$data['item_name']			= $_POST['item_name'];
	$data['item_number'] 		= $_POST['item_number'];
	$data['payment_status'] 	= $_POST['payment_status'];
	$data['payment_amount'] 	= $_POST['mc_gross'];
	$data['payment_currency']	= $_POST['mc_currency'];
	$data['txn_id']				= $_POST['txn_id'];
	$data['receiver_email'] 	= $_POST['receiver_email'];
	$data['payer_email'] 		= $_POST['payer_email'];
	$data['custom'] 			= $_POST['custom'];
		
	// post back to PayPal system to validate
	$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
	
	$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);	
	
	if (!$fp) {
		// HTTP ERROR
	} else {	

		fputs ($fp, $header . $req);
		while (!feof($fp)) {
			$res = fgets ($fp, 1024);
			if (strcmp($res, "VERIFIED") == 0) {
			
				// Used for debugging
				//@mail("you@youremail.com", "PAYPAL DEBUGGING", "Verified Response<br />data = <pre>".print_r($post, true)."</pre>");
						
				// Validate payment (Check unique txnid & correct price)
				$valid_txnid = check_txnid($data['txn_id']);
				$valid_price = check_price($data['payment_amount'], $data['item_number']);
				// PAYMENT VALIDATED & VERIFIED!
				if($valid_txnid && $valid_price){				
					$orderid = updatePayments($data);		
					if($orderid){					
						// Payment has been made & successfully inserted into the Database								
					}else{								
						// Error inserting into DB
						// E-mail admin or alert user
					}
				}else{					
					// Payment made but data has been changed
					// E-mail admin or alert user
				}						
			
			}else if (strcmp ($res, "INVALID") == 0) {
			
				// PAYMENT INVALID & INVESTIGATE MANUALY! 
				// E-mail admin or alert user
				
				// Used for debugging
				//@mail("you@youremail.com", "PAYPAL DEBUGGING", "Invalid Response<br />data = <pre>".print_r($post, true)."</pre>");
			}		
		}		
	fclose ($fp);
	}	
}



?>




