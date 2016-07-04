<?php
function paystub_get_pages($path=''){
	return array(
	'modern'=>	array("Modern", $path.'modern_paystub_preview.php'),
	'neat'=>	array("Neat Paystub", $path.'neat_paystub_preview.php'),
    'corp'=>	array("Corporate Paystub", $path.'corp_paystub_preview.php'),
	'basic'=>	array("Basic Paystub", $path.'basic_paystub_preview.php'),
	'tstub'=>	array("T-Stub", $path.'tstub_paystub_preview.php'),
	'w2'=>		array("W-2 IRS", $path.'w2_paystub_preview.php'),
	'1099'=>	array("1099", $path.'1099_paystub_preview.php'),
	);
}
?>