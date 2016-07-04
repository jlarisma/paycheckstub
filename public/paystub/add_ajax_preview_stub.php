<?php

require_once(__DIR__.'/_addpages.inc');			// gets function 'paystub_get_pages'  which get's the path for the previes, Modern, Neat, etc

$pdf_pages = add_paystub_get_pages('');

$urlid = $_REQUEST['stub_id'];//


include __DIR__."/".$pdf_pages[$urlid][1];		// calls the page that the person selected for preivew.  the pages themselves decide if there is a watermark or not
												// by default, the watermark is included, unless 'is_customer_paid' equal to 1 when that page is called

return;
?>