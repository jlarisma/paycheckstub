<?php
error_reporting(E_ALL);

//$is_customer_paid = '1';
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_addpages.inc');
require_once(__DIR__.'/paystub/util.php');
require_once(__DIR__.'/wp-load.php' );

// ---  ADDED by GEORGE -------------------------------

	$_REQUESTAR = json_decode(base64_decode($_REQUEST['aaa']), true);
print_r($_REQUESTAR);
echo "---------------------------------------------------------------------------";
//print_r($_REQUEST);
	
// --- added by George for S2-upgrade
		$firstName = $_REQUESTAR['emp_f_name'];
		$lastName = $_REQUESTAR['emp_l_name'];
		$email = $_REQUESTAR['emp_email'];
		$user = wp_get_current_user();
		$user_id = $user->id;// The ID of the user to remove the capability from.

echo ("testing lbt 1 </br>");

function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
    $_REQUESTAR = array_merge($_REQUESTAR, $trx_options);
    return;
}

/**check level s2member*/
$is_customer_paid = 0;
if(current_user_is("subscriber")){
	//echo 'You ARE a Free Subscriber at Level #0.';
	$is_customer_paid =  0; 
	$sql_select="SELECT totalpdf FROM users_paid WHERE user_id = '".$user->ID."'";
	$totalpdf = $wpdb->get_var( $sql_select );
	if ($totalpdf >1){$is_customer_paid =  1; }
}	
else if(current_user_is("s2member_level1")){
	//check total number
	$sql_select="SELECT totalpdf FROM users_paid WHERE user_id = '".$user->ID."'";
	$totalpdf = $wpdb->get_var( $sql_select );
	//$sql_select="UPDATE users_paid SET totalpdf = totalpdf -1, info_email = '".$totalpdf."'";
	//$query = $wpdb->query( $sql_select );
	

	if ($totalpdf > 0){
		$is_customer_paid = 1;   				//I added this to circument the PREVIEW    WHAT DOES THIS DO??  REALLY???
		if ($totalpdf >= 1){

			if ($info_data->payed <= 0) {				// GS added this dec 28-2015 to stop using credits if they already paid for specific stub
				$sql_select = "UPDATE users_paid SET totalpdf = totalpdf -1 WHERE user_id = '".$user->ID."'";
				//$query = $wpdb->query($sql_select);
			}
		}
		//echo'<script>console.log($query)</script>';	
		//$wpdb->show_errors();		
		//$stubids = $_REQUEST['stubidss'];
		//$sql_select="UPDATE users_paid SET totalpdf = totalpdf -1, info_email = '".$stubids."'";		
		//set payed for the stub
		$stubids = $_REQUEST['stubidss'];
		$sql="UPDATE user_transaction SET payed = 1 WHERE id = $stubids ;";
		$query = $wpdb->query( $sql);
	}else{
		$is_customer_paid =  0; 
	}
}
if(current_user_can("access_s2member_level2")){
	//you are UNLIMIT
	$is_customer_paid =  1;   				//I added this to circument the PREVIEW
}

$payed = $_REQUEST['stubidss'];           // GS dec28-2015 this is incorrect I think.. changed to below
//$payed = $_REQUEST['payed'];
//$trx_options['is_customer_paid'] = 1; 
//pdf_provide($trx_options);
if ($payed > 0) { $is_customer_paid =  1;  }
//$is_customer_paid = 1;//add premium PDF for all users
$_REQUESTAR['is_customer_paid'] = $is_customer_paid ; 

//__________________________________________________________________

// filter POST params
if ( !function_exists('arrToParam')){
    function arrToParam($arr){
        $paramStr= '';
        foreach ( $arr as $key=>$value){
            if ( is_array($value)){
                foreach ($value as $k => $v){
                    $paramStr .= "&{$key}[$k]=$v";
                }
            }else{
                $paramStr .= "&$key=$value";
            }
        }
        return $paramStr;
    }
}


//==============================================
///========= mailing section ===================
//==============================================
//echo "<script>window.location = 'http://www.paycheckstubonline.com/thanks-try-creat-pay-check-bankstatement/'</script>";
// Stub Style Num of Stubs, and Check Num
$pdf_pages = add_paystub_get_pages('');		  	// returns array of paths to render files
$urlid = $_REQUESTAR['stub_id'];			  	// style															
$serverHome = getServerHome();				// Website path
$baseUrl = $serverHome.'paystub/';			// Website path + /paystub
$pageStyle = $pdf_pages[$urlid][0];			// gets the style of the request, and finds the path (name)
$url = $baseUrl .$pdf_pages[$urlid][1];     // the url of the desired stubb, second value (number value)
$num_stubs = $_REQUESTAR['num_stubs'];	
$pageList = '';
$check_num_base = $_REQUESTAR['check_num'];

// Mailing section ===============================================================================================================
echo ("testing lbt4</br>");
$paramsSES2 = array();

for ($i = 0; $i < $num_stubs; $i++){
    $_REQUESTAR['check_num'] = "$check_num_base-$i";
    $_REQUESTAR['prd_num'] = $i; 							// set the current period stub
    $params = arrToParam($_REQUESTAR);					//  function, above, parses all the _requst vars
    $ix = $i + 1;
    $pdf = new WkHtmlToPdf();
	//echo "_________________________________";
    $page = $pdf->curlGetData($url, $_REQUESTAR, "post");
echo "this is page---------------------------".$page;
	//$page = $pdf->curlGetData($url, $_REQUEST, "post");
    $pdf->addPage($page);
	//$pdf->send('BankStatement_'.$ix.'.pdf');

	$content_pdf = file_get_contents($pdf->getPdfFilename());

echo "this is content_pdf--->".$content_pdf."<--";

	//$paramsSES2['files'][$ix]["filecontent"] = base64_encode($page);
	$paramsSES2['files'][$ix]["filecontent"] = base64_encode($content_pdf);
	$paramsSES2['files'][$ix]["name"] = "BankStatement_$ix.pdf";
	$paramsSES2['files'][$ix]["mime"] = "application/pdf";
}

echo ("testing lbt 4.5</br>");

require_once("/home/nginx/domains/paycheckstubonline.com/public/ses/SESUtils.php");
$paramsSES2["to"] = $email;
$paramsSES2["subject"] = "Your BankStatement From www.PayCheckStubOnline.com";
$paramsSES2["message"] = "THIS IS UNDER CONSTRUCTION- NOT OPERATIONAL - finished sometime in Feb";
$paramsSES2["from"] = "info@paycheckstubonline.com";


echo ("testing lbt 4.6</br>");
$res = SESUtils::sendMail($paramsSES2);
echo ("testing lbt 4.5</br>");
echo "_________________________________";
print_r($paramsSES2);
echo "_________________________________";
print_r($res);

if ( $res->success){
	echo '</br></br>Message SES has been sent .  Check Email in 2 Minutes';
} else {
	echo '</br></br>Sorry there was an error ';
}
//echo "<script>window.location = 'http://www.paycheckstubonline.com/thanks-try-creat-pay-check-bankstatement/'</script>";

echo 'Sent.. .';

?>