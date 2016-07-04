<?php

error_reporting(E_ALL);

//$is_customer_paid = '1';
require_once(__DIR__.'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/paystub/_pages.inc');
require_once(__DIR__.'/paystub/util.php');
require_once ( __DIR__ . '/wp-load.php' );


$sql_get_params = "SELECT options FROM user_transaction WHERE id = '127438'";
$ccc1 = $wpdb->get_results($sql_get_params);
$wpdb->show_errors();

echo $ccc1[0]->options;
$ccc3 = $ccc1[0]->options;

$_REQUESTAR = json_decode(base64_decode($ccc3), true);
//var_dump($_REQUESTAR);

$firstName = $_REQUESTAR['info_email'];
$lastName = $_REQUESTAR['emp_l_name'];
$email = 'george.strnad@gmail.com';
$user = wp_get_current_user();
$user_id = $user->id;// The ID of the user to remove the capability from.$user = wp_get_current_user();
$loginName = $user->user_login;

$payed = $_REQUEST['payed'];
function pdf_provide($trx_options){							// Used to add values to INFO values, such as 'is_cust_paid =1'
    $_REQUESTAR = array_merge($_REQUESTAR, $trx_options);
    return;
}

/**check level s2member*/
$is_customer_paid = 1;
$_REQUESTAR['is_customer_paid'] = $is_customer_paid ;

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
//_________________________________________________
$link_download = "<html><a href='http://www.paycheckstubonline.com/download-my-stub/?u=".$user_id."&l=".$loginName."&p=".$lastName."'>VIEW and BUY all your Stubs</a></html>";
$link_edit_profile = "<html><a href='http://www.paycheckstubonline.com/wp-admin/profile.php'>EDIT MY PROFILE page</a></html>";


$email_message = "<p>Enjoy your Preview of {$pageStyle} below, Please tell us how we can improve it.</p>".$num_stubs;
$email_message .= "Click here to &quot;.$link_download.&quot; , thanks. </p>";
$email_message .= "Your Login information is: </p>";
$email_message .= "Your User-Login = ".$loginName. "</p>";
$email_message .= "Your ACCOUNT menu = ".$link_edit_profile. "</p>";
$body = $email_message;
$paramsSESe = array();

for ( $i = 0; $i < $num_stubs; $i++){
    $_REQUESTAR['check_num'] = "$check_num_base-$i";
    $_REQUESTAR['prd_num'] = $i; 							// set the current period stub
    $params = arrToParam($_REQUESTAR);					//  function, above, parses all the _requst vars
    $ix = $i + 1;

    $pdf = new WkHtmlToPdf();
    $page = $pdf->curlGetData($url, $_REQUESTAR, "post");
    $pdf->addPage($page);
    //$pdf->send('sdfds.pdf');

    echo"<pre>";
    //print_r($_REQUEST);
    echo 'Prepaire PDF';
    // print_r($_REQUESTAR);
    echo"</pre>";
    $content_pdf = file_get_contents($pdf->getPdfFilename());
    //echo $content_pdf;
    $paramsSESe['files'][$ix]["filecontent"] = base64_encode($content_pdf);
    $paramsSESe['files'][$ix]["name"] = "Paycheckstub_$ix.pdf";
    $paramsSESe['files'][$ix]["mime"] = "application/pdf";
}
// to send them all in one mail ?

//$email = 'hoanganhhung.vp@gmail.com';
require_once("/home/nginx/domains/paycheckstubonline.com/public/ses/SESUtils.php");
$paramsSESe["to"] = $email;
$paramsSESe["subject"] = "Your {$pageStyle} From Paycheck Stub online";
$paramsSESe["message"] = $body;
$paramsSESe["from"] = "info@paycheckstubonline.com";
//print_r($paramsSESe);
//OPTIONAL
//"replyTo" => "reply_to@gmail.com",
$res1 = SESUtils::sendMail($paramsSESe);

?>