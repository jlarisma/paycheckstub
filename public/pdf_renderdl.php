<?php
error_reporting(E_ALL);

//$is_customer_paid = '1';
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_pages.inc');
require_once(__DIR__.'/paystub/util.php');

// ---  ADDED by GEORGE -------------------------------
require_once ( __DIR__ . '/wp-load.php' );
	$_REQUESTAR = json_decode(base64_decode($_REQUEST['aaa']), true);
	
	
// --- added by George for S2-upgrade
		$firstName = $_REQUESTAR['emp_f_name'];
		$lastName = $_REQUESTAR['emp_l_name'];
		$email = $_REQUESTAR['emp_email'];
		$user = wp_get_current_user();
		$user_id = $user->id;// The ID of the user to remove the capability from.

		$payed = $_REQUEST['payed'];

function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
    $_REQUESTAR = array_merge($_REQUESTAR, $trx_options);
    return;
}

/** Incread */
$sql_select	= "UPDATE users_paid SET stubs_made = stubs_made +1 WHERE user_id = '".$user->ID."'";
$query = $wpdb->query($sql_select);


/**check level s2member*/
$is_customer_paid = 0;

if(current_user_is("subscriber")){
	//echo 'You ARE a Free Subscriber at Level #0.';
	$is_customer_paid =  0;
	//$sql_select="SELECT totalpdf FROM users_paid WHERE user_id = '".$user->ID."'";
	//$totalpdf = $wpdb->get_var( $sql_select );
	//  if ($totalpdf >1){$is_customer_paid =  1; }
}

else if(current_user_is("s2member_level1")){
	$sql_select="SELECT totalpdf FROM users_paid WHERE user_id = '".$user->ID."'";
	$totalpdf = $wpdb->get_var( $sql_select );
	//$sql_select="UPDATE users_paid SET totalpdf = totalpdf -1, info_email = '".$totalpdf."'";
	//$query = $wpdb->query( $sql_select );

	if ($totalpdf > 0){
		$is_customer_paid = 1;   				//I added this to circument the PREVIEW
			if ($payed <= 0) {
				$sql_select	= "UPDATE users_paid SET totalpdf = totalpdf -1 WHERE user_id = '".$user->ID."'";
				$query = $wpdb->query($sql_select);
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
	$sql_select	= "UPDATE users_paid SET totalpdf = totalpdf -1 WHERE user_id = '".$user->ID."'";
	$query = $wpdb->query($sql_select);
}

$payed = $_REQUEST['stubidss'];
//$trx_options['is_customer_paid'] = 1; 
//pdf_provide($trx_options);
if ($payed > 0) { $is_customer_paid =  1;  }
//$is_customer_paid = 1;//add premium PDF for all users
$_REQUESTAR['is_customer_paid'] = $is_customer_paid ; 

//__________________________________________________________________


$pdf_pages = paystub_get_pages('');
$urlid = $_REQUESTAR['stub_id'];
$serverHome = getServerHome();
$baseUrl = $serverHome.'paystub/';
$pageStyle = $pdf_pages[$urlid][0];
$url = $baseUrl .$pdf_pages[$urlid][1];   // the url of the desired stubb
$num_stubs = $_REQUESTAR['num_stubs'];
$pageList = '';


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


$pdfError = false;
$html = [];
$head = '';
for ( $i = 0; $i < $num_stubs; $i++){
    $_REQUESTAR['check_num'] = "$check_num_base-$i";
    $_REQUESTAR['prd_num'] = $i; 							// set the current period stub
    $params = arrToParam($_REQUESTAR);					//  function, above, parses all the _requst vars
	$ix = $i + 1;

    $pdf = new WkHtmlToPdf();
    $page = $pdf->curlGetData($url, $_REQUESTAR, "post");

    if(stripos(strtolower($page), 'error') !== false)
    {
    	$pdfError = true;
    	break;
    }

    //get contents of every paystub
    if($num_stubs > 1)
    {
    	preg_match("/<body[^>]*>(.*?)<\/body>/is", $page, $matches);
		if(empty($head))
		{
		  	preg_match("/(.*?)<body[^>]*>/is", $page, $mhead);
		   	$head = $mhead[1];
		}
	    $html[] =  $matches[1];

    } else {
    	$pdf->addPage($page);
		$pdf->send('Paycheckstub_'.$ix.'.pdf');
    }
}


if($num_stubs > 1 && !$pdfError)
{
	$printStub = $head . '<body><ul><li>' . implode('</li><li>', $html) . '</li></ul></body></html>';

	$test = new WkHtmlToPdf();
	$test->addPage($printStub);
	$test->send('Paycheckstub_all.pdf');
}


if($pdfError)
{
	require_once("ses/SESUtils.php");
	//$email = 'george.strnad@gmail.com';
	//$email = 'joe.larisma@supportingcareers.com.au';
	//$email = 'despisedtruth@gmail.com';
	$paramsSESe["to"] = $email;
	$paramsSESe["subject"] = "Paystub Error";
	$paramsSESe["message"] = 'There was an error in creating your paystubs. Please double check your entry.';
	$paramsSESe["from"] = "info@paycheckstubonline.com";

	$res1 = SESUtils::sendMail($paramsSESe);
}

echo "<script>window.location = 'http://www.paycheckstubonline.com/thanks-try-creat-pay-check-bankstatement/'</script>";

?>