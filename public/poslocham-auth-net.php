<?php
// Retrieving and defining Form Data from Post command body from Authorize.Net
error_reporting(E_ALL);
//require_once ( __DIR__ . '/../wp-load.php' );
require_once ( __DIR__ . '/wp-load.php' );
require_once 'PHPMailer/class.phpmailer.php';
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_pages.inc');
require_once(__DIR__.'/paystub/util.php');

function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
    $_REQUEST = array_merge($_REQUEST, $trx_options);
    include __DIR__."/pdf_render-s2.php";
    return;
}

$ResponseCode       = trim($_POST["x_response_code"]);
$ResponseReasonText = trim($_POST["x_response_reason_text"]);
$ResponseReasonCode = trim($_POST["x_response_reason_code"]);
$AVS                = trim($_POST["x_avs_code"]);
$TransID            = trim($_POST["x_trans_id"]);
$AuthCode           = trim($_POST["x_auth_code"]);
$Amount             = trim($_POST["x_amount"]);
$trxId              = trim($_POST["gs_custom"]);			
?>

	<html>
	<head>
	<title>Transaction Receipt Page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
	<body bgcolor="#FFFFFF">

<?php
    // Test to see if this is a test transaction.
    if ($TransID === 0 && $ResponseCode === 1)
    {
	    // If so, print it to the screen, so we know that the transaction will not be processed.
?>

	<table align="center">
		<tr>
			<th><font size="5" color="red" face="arial">TEST MODE</font></th>
		<tr>
			<th valign="top"><font size="1" color="black" face="arial">This transaction will <u>NOT</u> be processed because your account is in Test Mode.</font></th>
	  </tr>
    </table>

<?php
    }
?>

	<br>
	<br>

<?php
    // Test to see if the transaction resulted in Approvavl, Decline or Error
    if ($ResponseCode === 1)
    {
?>

	<table align="center">
		<tr>
			<th><font size="3" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">This transaction has been approved.</font></th>
	  </tr>
      <tr>
			<th><font size="3" color="#000000" face="Verdana, Arial, Helvetica, sans-serif"></font></th>
	  </tr>
      
      
	</table>

<?php
    }
    else if ($ResponseCode === 2)
    {
?>

	<table align="center">
	<tr>
		<th width="312"><font size="3" color="#000000" face="Verdana, Arial, Helvetica, sans-serif">This transaction has been declined.</font></th>
	</tr>
	</table>

<?php
    }
    else if ($ResponseCode === 3)
    {
?>

	<table align="center">
	<tr>
		<th colspan="2"><font size="3" color="Red" face="Verdana, Arial, Helvetica, sans-serif">There was an error processing this transaction.</font></th>
	</tr>
	</table>

<?php
    }
?>

	<br>
	<br>
	<table align="center" width="60%">
	<tr>
		<td align="right" width=175 valign=top><font size="2" color="black" face="arial"><b>Amount:</b></font></td>
		<td align="left"><font size="2" color="black" face="arial">$<?php echo $Amount; ?></td>
	</tr>

	<tr>
		<td align="right" width=175 valign=top><font size="2" color="black" face="arial"><b>Transaction ID:</b></font></td><td align="left"><font size="2" color="black" face="arial">

<?php
    if ($TransID === 0)
    {
        echo 'Not Applicable.';
    }
    else
    {
        echo $TransID;
    }
?>

	</td></tr>

	<tr>
		<td align="right" width=175 valign=top><font size="2" color="black" face="arial"><b>Authorization Code:</b></font></td><td align="left"><font size="2" color="black" face="arial">

<?php
    if ($AuthCode === "000000")
    {
        echo 'Not Applicable.';
    }
    else
    {
        echo $AuthCode;
    }
?>

		</td></tr>
	<tr>
		<td align="right" width=175 valign=top><font size="2" color="black" face="arial"><b>Response Reason:</b></font></td><td align="left"><font size="2" color="black" face="arial">(<?php echo $ResponseReasonCode; ?>)&nbsp;<?php echo $ResponseReasonText; ?></font><font size="1" color="black" face="arial"></td></tr>
	<tr>

		<td align="right" width=175 valign=top><font size="2" color="black" face="arial"><b>Address Verification:</b></font></td><td align="left"><font size="2" color="black" face="arial">

<?php
    // Turn the AVS code into the corresponding text string.
    switch ($AVS)
    {
    	case "A":
    		echo "Address (Street) matches, ZIP does not.";
    		break;
    	case "B":
    		echo "Address Information Not Provided for AVS Check.";
    		break;
    	case "C":
    		echo "Street address and Postal Code not verified for international transaction due to incompatible formats. (Acquirer sent both street address and Postal Code.)";
    		break;
    	case "D":
    		echo "International Transaction:  Street address and Postal Code match.";
    		break;
    	case "E":
    		echo "AVS Error.";
    		break;
    	case "G":
    		echo "Non U.S. Card Issuing Bank.";
    		break;
    	case "N":
    		echo "No Match on Address (Street) or ZIP.";
    		break;
    	case "P":
    		echo "AVS not applicable for this transaction.";
    		break;
    	case "R":
    		echo "Retry. System unavailable or timed out.";
    		break;
    	case "S":
    		echo "Service not supported by issuer.";
    		break;
    	case "U":
    		echo "Address information is unavailable.";
    		break;
    	case "W":
    		echo "9 digit ZIP matches, Address (Street) does not.";
    		break;
    	case "X":
    		echo "Address (Street) and 9 digit ZIP match.";
    		break;
    	case "Y":
    		echo "Address (Street) and 5 digit ZIP match.";
    		break;
    	case "Z":
    		echo "5 digit ZIP matches, Address (Street) does not.";
    		break;
    	default:
    		echo "The address verification system returned an unknown value.";
    		break;
        }

													
		$sql_trx = "select * from user_transaction where id='$trxId'; ";	// I think this is Custom value
		$results = $wpdb->get_results($sql_trx, ARRAY_A);					// gets data from user_t with $trxID - 
		if ( empty($results ))
			return;
		$trx = $results[0];													// this gets the first result... but.. maybe here we can get all results from the user.
		$trx_options = json_decode(base64_decode($trx['options']), true);   // all the serialized data from $trx into $trx_options
		unset($trx['options']);												//  clears and resets the var for next time
		$trx_options['from_paypal'] = "yes";								//  adds this value to 
		//$trx_options['payinfo'] = $_POST;									//  adds this value to the array
//_____________________________________________________________________________________________________________________________________

$pdf_pages = paystub_get_pages('');		  	// returns array of paths to render files
$urlid = $_REQUEST['stub_id'];			  	// style
$serverHome = getServerHome();				// path
$baseUrl = $serverHome.'paystub/';			
$pageStyle = $pdf_pages[$urlid][0];			// gets the style of the request, and finds the path (name)
$url = $baseUrl .$pdf_pages[$urlid][1];     // the url of the desired stubb, second value (number value)
$num_stubs = $_REQUEST['num_stubs'];
$pageList = '';

$trx_options['is_customer_paid'] = 1;   	// I added this to circument the PREVIEW
pdf_provide($trx_options);
?>

		</td>
	</tr>
	</table>
	</body>
</html>