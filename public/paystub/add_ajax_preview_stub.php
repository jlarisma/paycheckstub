<?php

require_once(__DIR__.'/_addpages.inc');			// gets function 'paystub_get_pages'  which get's the path for the previes, Modern, Neat, etc
require_once($_SERVER['DOCUMENT_ROOT'] .'/wkhtmltox/wkhtmltopdf.php');
require_once(__DIR__.'/util.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );

$pdf_pages = add_paystub_get_pages('');


$urlid = $_REQUEST['stub_id'];//


if(current_user_can("access_s2member_level2")){
	$_REQUEST['is_customer_paid'] = 1;
}

for($i=0; $i < $_REQUEST['num_stubs']; $i++)
{
	//include __DIR__."/".$pdf_pages[$urlid][1];

	$_REQUEST['period_no'] = $i + 1;
	$pdf = new WkHtmlToPdf();
    $page = $pdf->curlGetData(getServerHome() . 'paystub/' . $pdf_pages[$urlid][1], $_REQUEST, "post");

    echo $page;
	
	// calls the page that the person selected for preivew.  the pages themselves decide if there is a watermark or not
	// by default, the watermark is included, unless 'is_customer_paid' equal to 1 when that page is called
}

return;
?>