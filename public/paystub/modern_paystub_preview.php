<?php
// calculation engine
include __DIR__ . "/engine-pay.js.php"; 
$no_comma_net_pay = str_replace(",", "", $net_pay_prd); 
$thisAmountStr = number_to_currency_eng($no_comma_net_pay);										//converts numbers to Words
//echo ($net_pay_prd);
//echo ($no_comma_net_pay);									//converts numbers to Words
$baseUrl = getServerHome();

//$backgroundImage = $is_customer_paid ? "{$baseUrl}paystub/assets/modern-back.jpg" : "{$baseUrl}paystub/assets/modern-prev.jpg";
$backgroundImage = $is_customer_paid ? "{$baseUrl}paystub/assets/modern-clear.png" : "{$baseUrl}paystub/assets/modern-clear-preview.png";
//echo $_REQUEST['line_1'];
$line_1 = $_REQUEST['line_1'];
$line_2 = $_REQUEST['line_2'];
$line_3 = $_REQUEST['line_3'];

$promo_code = $_REQUEST['promo_code'];
if ($promo_code == '777'){
	//echo $_REQUEST['promo_code'];
	//$backgroundImage = "{$baseUrl}paystub/assets/modern-back.jpg";
	$backgroundImage = "{$baseUrl}paystub/assets/modern-clear.png";
}
?>

<html><head>
<title>ADP Paystub</title>
<style type="text/css">
<!--
body { font-family: Arial; font-size: 15.5px }
.pos { position: absolute; z-index: 0; /*left: 0px; top: 0px */}

#page_content{
	/*background-image:$backgroundImage;*/
	background-color:white;
}

div.transbox {
    width: 265px;
    height: 15px;
    margin: -1px;
    background-color: #DCDCDC;
	text-align: right;
	border-bottom: 2px solid;
    border-top: 2px solid;
    opacity: 0.9;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}
div.transbox-long {
    width: 565px;
    height: 15px;
    margin: -1px;
    background-color: #DCDCDC;
	text-align: left;
	border-bottom: 2px solid;
    border-top: 2px solid;
	border-right: 2px solid;
    opacity: 0.9;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}
div.underline-long {
	width: 447px;
	text-align: left;
	border-bottom: 2px solid;
}
-->
</style>
</head>
<body style="margin-top:0px;">
<?php 

  echo <<<ASDF
<div class="wrapper" style="width: 850px; overflow:hidden; height:1150px;">
<div style="position:relative;top: 0px;left: 0px; width: 1280px;">
<div class="pos" id="page_content" style="top:0">
<img name="_1100:850" src="$backgroundImage" height="1200" width="850" border="0" usemap="#Map"></div>

<div class="pos" id="_72:38" style="top:10;left:110">
<span id="_7.1" style=" font-family:Arial; font-size:9px; color:#000000">
C O .</span>
</div>
<div class="pos" id="_311:238" style="top:10;left:151">
<span id="_7.1" style=" font-family:Arial; font-size:9px; color:#000000">
FILE</span>
</div>
<div class="pos" id="_345:238" style="top:10;left:186">
<span id="_7.1" style=" font-family:Arial; font-size:9px; color:#000000">
DEPT.</span>
</div>
<div class="pos" id="_378:238" style="top:10;left:219">
<span id="_7.1" style=" font-family:Arial; font-size:9px; color:#000000">
CLOCK</span>
</div>
<div class="pos" id="_412:238" style="top:10;left:257">
<span id="_7.1" style=" font-family:Arial; font-size:9px; color:#000000">
NUMBER</span>
</div>
<div class="pos" id="_282:248" style="top:20;left:110">
<span id="_8.2" style=" font-family:Arial; font-size:9.5px; color:#000000">
SBINC</span>
</div>
<div class="pos" id="_311:248" style="top:20;left:151">
<span id="_8.7" style=" font-family:Arial; font-size:9.5px; color:#000000">
526543  103216  92345</span>
</div>
<div class="pos" id="_412:248" style="top:20;left:257">
<span id="_8.1" style=" font-family:Arial; font-size:9.5px; color:#000000">
$check_num $prd_num</span>
</div>



<div class="pos" id="_546:244" style="top:44;left:546">
<span id="_16.0" style=" font-family:Arial; font-size:18.0px; font-weight:bold; color:#000000">
Earning Statement</span>
</div>
<div class="pos" id="_283:268" style="top:68;left:110">
<span id="_9.8" style="font-style:italic; font-family:Arial; font-size:10px; color:#000000">
$empr_add_name</span>
</div>
<div class="pos" id="_546:269" style="top:69;left:546">
<span id="_9.8" style=" font-family:Arial; font-size:10px; color:#000000">
Period ending:</span>
</div>
<div class="pos" id="_652:267" style="top:67;left:652">
<span id="_9.5" style=" font-family:Arial; font-size:10px; color:#000000">
$end_date</span>
</div>
<div class="pos" id="_283:281" style="top:81;left:110">
<span id="_9.5" style="font-style:italic; font-family:Arial; font-size:10px; color:#000000">
$empr_add_street</span>
</div>
<div class="pos" id="_546:282" style="top:82;left:546">
<span id="_9.5" style=" font-family:Arial; font-size:10px; color:#000000">
Pay date:</span>
</div>
<div class="pos" id="_652:279" style="top:79;left:652">
<span id="_9.5" style=" font-family:Arial; font-size:10px; color:#000000">
$pay_date</span>
</div>
<div class="pos" id="_283:293" style="top:93;left:110">
<span id="_9.8" style="font-style:italic; font-family:Arial; font-size:10px; color:#000000">
$empr_add_city   $empr_add_state  $empr_add_zip</span>
</div>
<div class="pos" id="_282:327" style="top:127;left:110">
<span id="_8.7" style=" font-family:Arial; font-size:9px; color:#000000">
Taxable Marital Status: $emp_mar_status</span>
</div>
<div class="pos" id="_282:337" style="top:137;left:110">
<span id="_8.7" style=" font-family:Arial; font-size:9px; color:#000000">
Exemptions/Allowances:</span>
</div>
<div class="pos" id="_546:332" style="top:132;left:546">
<span id="_10.9" style="font-weight:bold; font-family:Arial; font-size:12px; color:#000000">
$emp_l_name $emp_f_name </span>
</div>
<div class="pos" id="_295:346" style="top:146;left:120">
<span id="_8.7" style=" font-family:Arial; font-size:8.7px; color:#000000">
Federal: 3, $25 Additional Tax</span>
</div>
<div class="pos" id="_546:343" style="top:143;left:546">
<span id="_10.6" style="font-weight:bold; font-family:Arial; font-size:12px; color:#000000">
$emp_street </span>
</div>

<div class="pos" id="_295:355" style="top:155;left:120">
<span id="_8.2" style=" font-family:Arial; font-size:8.2px; color:#000000">
State:</span>
</div>
<div class="pos" id="_330:355" style="top:155;left:155">
<span id="_8.2" style=" font-family:Arial; font-size:8.2px; color:#000000">
2</span>
</div>
<div class="pos" id="_546:355" style="top:155;left:546">
<span id="_10.8" style="font-weight:bold; font-family:Arial; font-size:12px; color:#000000">
$emp_city, &nbsp; $state_abb. &nbsp;$emp_zip </span>
</div>
<div class="pos" id="_295:365" style="top:165;left:120">
<span id="_8.2" style=" font-family:Arial; font-size:8.2px; color:#000000">
Local:</span>
</div>
<div class="pos" id="_330:365" style="top:165;left:155">
<span id="_8.2" style=" font-family:Arial; font-size:8.2px; color:#000000">
1</span>
</div>

<div class="pos" id="_546:355" style="top:168;left:546">
<span id="_10.8" style="font-weight:bold; font-family:Arial; font-size:12px; color:#000000">
$emp_ssn </span>
</div>







<div class="pos" id="_70:393" style="top:393;left:70">

</div>
<div class="pos" id="_207:405" style="top:338;left:10"><div class="underline-long">
<span id="_10.2" style="font-weight:bold; font-family:Arial; font-size:12px; color:#000000">
Earnings</span></div>
</div>
<div class="pos" id="_282:405" style="top:340;left:110">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:10px; color:#000000">
rate</span>
</div>
<div class="pos" id="_332:405" style="top:340;right:1055">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:10px; color:#000000">
hours</span>
</div>
<div class="pos" id="_397:405" style="top:340;left:300">
<span id="_10.0" style="font-weight:bold; font-family:Arial; font-size:10.0px; color:#000000">
this period</span>
</div>
<div class="pos" id="_461:405" style="top:340;left:400">
<span id="_10.0" style="font-weight:bold; font-family:Arial; font-size:10.0px; color:#000000">
year to date</span>
</div>
<div class="pos" id="_545:405" style="top:340;left:545">
<span id="_10.3" style="font-weight:bold; font-family:Arial; font-size:10.3px; color:#000000">
Important Notes</span>
</div>


<div class="pos" id="_207:418" style="top:356;left:10">
<span id="_9.2" style=" font-family:Arial; font-size:11px; color:#000000">
Regular</span>
</div>
<div class="pos" id="_282:418" style="top:356;right:1146">
<span id="_9.2" style=" font-family:Arial; font-size:10px; color:#000000">
$gross_rate</span>
</div>
<div class="pos" id="_334:418" style="top:356;right: 1055">
<span id="_9.2" style=" font-family:Arial; font-size:10px; color:#000000">
$gross_hrs</span>
</div>
<div class="pos" id="_416:418" style="top:356;right: 929;">
<span id="_9.2" style=" font-family:Arial; font-size:10px; color:#000000">
$val_tot_reg_pay_prd</span>
</div>
<div class="pos" id="_473:418" style="top:356;right:824">
<span id="_9.2" style=" font-family:Arial; font-size:10px; color:#000000">
$val_tot_reg_pay_ytd</span>
</div>
<div class="pos" id="_545:420" style="top:359;left:545">
<span id="_9.0" style=" font-family:Arial; font-size:9.0px; color:#000000">
$line_1</span>
</div>


<div class="pos" id="_207:430" style="top:371;left:10">
<span id="_9.3" style=" font-family:Arial; font-size:11px; color:#000000">
Overtime</span>
</div>
<div class="pos" id="_282:430" style="top:371;right:1146">
<span id="_9.3" style=" font-family:Arial; font-size:10px; color:#000000">
$neat_gross_ot_rate</span>
</div>
<div class="pos" id="_339:430" style="top:371;right:1055">
<span id="_9.3" style=" font-family:Arial; font-size:10px; color:#000000">
$ot_hrs</span>
</div>
<div class="pos" id="_422:430" style="top:371;right:929;">
<span id="_9.3" style=" font-family:Arial; font-size:10px; color:#000000">
$gross_ot_prd</span>
</div>
<div class="pos" id="_486:430" style="top:371;right:824">
<span id="_9.3" style=" font-family:Arial; font-size:10px; color:#000000">
$gross_ot_ytd</span>
</div>



<div class="pos" id="_207:443" style="top:386;left:10">
<span id="_9.2" style=" font-family:Arial; font-size:11px; color:#000000">
$garnish1_name</span>
</div>
<div class="pos" id="_282:443" style="top:386;right:1146">
<span id="_10.7" style=" font-family:Arial; font-size:10px; color:#000000">
--</span>
</div>
<div class="pos" id="_348:443" style="top:386;right:1055">
<span id="_10.7" style=" font-family:Arial; font-size:10px; color:#000000">
--</span>
</div>
<div class="pos" id="_436:443" style="top:386;right:929;">
<span id="_10.7" style=" font-family:Arial; font-size:10px; color:#000000">
$garnish1_prd</span>
</div>
<div class="pos" id="_486:443" style="top:386;right:824">
<span id="_9.2" style=" font-family:Arial; font-size:10px; color:#000000">
$garnish1_ytd</span>
</div>

<div class="pos" id="_545:448" style="top:410;left:545">
<span id="_9.0" style=" font-family:Arial; font-size:9.0px; color:#000000">
CURRENT PAY RATE IS: \$$gross_rate PER HOUR.</span>
</div>



<div class="pos" id="_207:455" style="top:401;right:10">
<span id="_9.3" style=" font-family:Arial; font-size:11px; color:#000000">
--</span>
</div>
<div class="pos" id="_282:455" style="top:401;right:1146">
<span id="_9.3" style=" font-family:Arial; font-size:10px; color:#000000">
--</span>
</div>
<div class="pos" id="_334:455" style="top:401;right:1055">
<span id="_9.3" style=" font-family:Arial; font-size:10px; color:#000000">
--</span>
</div>
<div class="pos" id="_416:455" style="top:401;right:929;">
<span id="_9.3" style=" font-family:Arial; font-size:10px; color:#000000">
0.00</span>
</div>
<div class="pos" id="_486:455" style="top:401;right:824">
<span id="_9.3" style=" font-family:Arial; font-size:10px; color:#000000">
0.00</span>
</div>

<div class="pos" id="_207:468" style="top:468;left:207">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
</span>



</div>
<div class="pos" id="_282:468" style="top:416;left:1146">
<span id="_10.7" style=" font-family:Arial; font-size:10px; color:#000000">
--</span>
</div>
<div class="pos" id="_348:468" style="top:416;right: 1055">
<span id="_10.7" style=" font-family:Arial; font-size:10px; color:#000000">
--</span>
</div>
<div class="pos" id="_436:468" style="top:416;right:929">
<span id="_10.7" style=" font-family:Arial; font-size:10px; color:#000000">
0.00</span>
</div>
<div class="pos" id="_491:468" style="top:416;right:824">
<span id="_9.2" style=" font-family:Arial; font-size:10px; color:#000000">
0.00</span>
</div>
<div class="pos" id="_545:475" style="top:455;left:545">
<span id="_9.0" style=" font-family:Arial; font-size:9.0px; color:#000000">
$line_2</span>
</div>



<div class="pos" id="_207:480" style="top:431;left:10">
<span id="_9.2" style=" font-family:Arial; font-size:11px; color:#000000">
Commission</span>
</div>
<div class="pos" id="_282:480" style="top:431;right: 1146">
<span id="_10.7" style=" font-family:Arial; font-size:10px; color:#000000">
--</span>
</div>
<div class="pos" id="_348:480" style="top:431;right:1055">
<span id="_10.7" style=" font-family:Arial; font-size:10px; color:#000000">
--</span>
</div>
<div class="pos" id="_436:480" style="top:431;right: 929;">
<span id="_10.7" style=" font-family:Arial; font-size:10px; color:#000000">
$commission_prd</span>
</div>
<div class="pos" id="_486:480" style="top:431;right:824">
<span id="_9.2" style=" font-family:Arial; font-size:10px; color:#000000">
$commission_ytd</span>
</div>
<div class="pos" id="_545:488" style="top:470;left:545">
<span id="_8.8" style=" font-family:Arial; font-size:8.8px; color:#000000">
$line_3</span>
</div>



<div class="pos" id="_283:493" style="top:447;left:110;z-index: 10;">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:11px; color:#000000">
Gross Pay</span>
</div>
<div class="pos" id="_403:493" style="top:446;right:929;z-index:1;" ><div class="transbox">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:10px; color:#000000">
\$$gross_prd</span></div>
</div>
<div class="pos" id="_473:493" style="top:446;right:824">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:10px; color:#000000">
$gross_ytd</span>
</div>

<div class="pos" id="_545:502" style="top:502;left:545">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
</span>
</div>



<div class="pos underline-long" id="_207:518" style="top:513;left:10">
<span id="_10.1" style="font-weight:bold; font-family:Arial; font-size:12px; color:#000000">
Deductions</span>
</div>
<div class="pos" id="_282:519" style="top:515;left:110">
<span id="_9.5" style="font-weight:bold; font-family:Arial; font-size:10px; color:#000000">
Statutory</span>
</div>
<div class="pos" id="_461:519" style="top:519;left:461">
<span id="_9.9" style="font-weight:bold; font-family:Arial; font-size:9.9px; color:#000000">
</span>
</div>



<div class="pos" id="_282:531" style="top:531;left:110">
<span id="_9.7" style=" font-family:Arial; font-size:9.7px; color:#000000">
Federal Income Tax</span>
</div>
<div class="pos" id="_415:531" style="top:531;right: 929;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $fed_amt_deduct_prd</span>
</div>
<div class="pos" id="_478:531" style="top:531;right:824">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$fed_amt_deduct_ytd</span>
</div>



<div class="pos" id="_282:544" style="top:544;left:110">
<span id="_9.9" style=" font-family:Arial; font-size:9.9px; color:#000000">
Social Security Tax</span>
</div>
<div class="pos" id="_415:544" style="top:544;right:929;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $fica_social_prd	</span>
</div>
<div class="pos" id="_478:544" style="top:544;right:824">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$fica_social_ytd</span>
</div>



<div class="pos" id="_282:556" style="top:556;left:110">
<span id="_9.9" style=" font-family:Arial; font-size:9.9px; color:#000000">
Medicare Tax</span>
</div>
<div class="pos" id="_415:556" style="top:556;right:929;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $medicare_prd</span>
</div>
<div class="pos" id="_486:556" style="top:556;right:824">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$medicare_ytd</span>
</div>



<div class="pos" id="_282:569" style="top:569;left:110">
<span id="_10.0" style=" font-family:Arial; font-size:10.0px; color:#000000">
State Income Tax</span>
</div>
<div class="pos" id="_415:569" style="top:569;right:929;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $state_amtincometax_prd</span>
</div>
<div class="pos" id="_486:569" style="top:569;right:824">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$state_amtincometax_ytd</span>
</div>



<div class="pos" id="_282:581" style="top:581;left:110">
<span id="_10.0" style=" font-family:Arial; font-size:10.0px; color:#000000">
Local Tax / SDI</span>
</div>
<div class="pos" id="_415:581" style="top:581;right:929;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- 0.00</span>
</div>
<div class="pos" id="_486:581" style="top:581;right:824;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
0.00</span>
</div>



<div class="pos" id="_282:600" style="top:600;left:110">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:9.2px; color:#000000">
Other</span>
</div>


<div class="pos" id="_282:613" style="top:613;left:110">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
401(k)</span>
</div>
<div class="pos" id="_412:613" style="top:613;right:929;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $val_401k_prd</span>
</div>
<div class="pos" id="_486:613" style="top:613;right:824;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$val_401k_ytd</span>
</div>



<div class="pos" id="_282:625" style="top:625;left:110">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$garnish2_name</span>
</div>
<div class="pos" id="_417:625" style="top:625;right:929;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $garnish2_prd</span>
</div>
<div class="pos" id="_491:625" style="top:625;right:824;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$garnish2_ytd</span>
</div>




<div class="pos" id="_282:638" style="top:635;left:110">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
$garnish3_name</span>
</div>
<div class="pos" id="_420:638" style="top:635;right:929;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
-$garnish3_prd</span>
</div>
<div class="pos" id="_482:638" style="top:635;right:824;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$garnish3_ytd</span>
</div>


// total deduction this perio
<div class="pos" id="_282:638" style="top:646;left:110">
<span id="_9.6" style=" font-family:Arial; font-size:10px; color:#000000">
Total Deductions</span>
</div>
<div class="pos" id="_420:638" style="top:646;right:929;">
<span id="_9.2" style=" font-family:Arial; font-size:10px; color:#000000">
-$ded_this_prd</span>
</div>
<div class="pos" id="_482:638" style="top:646;right:824;">
<span id="_9.2" style=" font-family:Arial; font-size:10px; color:#000000">
-$tot_ded_ytd</span>
</div>



<div class="pos" id="_282:657" style="top:659;left:110;z-index: 1;">
<span id="_9.5" style="font-weight:bold; font-family:Arial; font-size:11px; color:#000000">
Net Pay</span>
</div>
<div class="pos" id="_408:657" style="top:658;right:929;"><div class="transbox">
<span id="_9.1" style="font-weight:bold; font-family:Arial; font-size:10px; color:#000000">
\$$net_pay_prd</span></div>
</div>
<div class="pos" id="_482:638" style="top:658;right:824;">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:10px; color:#000000">
$net_pay_ytd</span>
</div>



<div class="pos" id="_285:684" style="top:684;left:285">
<span id="_9.8" style="font-weight:bold; font-family:Arial; font-size:9.8px; color:#000000">
* Excluded from federal taxable wages</span>
</div>







<div class="pos" id="_276:811" style="top:900;left:110">
<span id="_9.5" style=" font-family:Arial; font-size:9.5px; color:#000000">
$empr_add_name</span>
</div>
<div class="pos" id="_545:811" style="top:900;left:545">
<span id="_9.9" style="font-weight:bold; font-family:Arial; font-size:9.9px; color:#000000">
Payroll check number:</span>
</div>
<div class="pos" id="_661:811" style="top:900;left:661">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:9.2px; color:#000000">
$check_num</span>
</div>


<div class="pos" id="_676:795" style="top:895;left:696">
<span id="_18.4" style=" font-family:Arial Narrow; font-size:18.4px; color:#ff6d65">
3 2 7 2 8 3 1 0 E</span>
</div>



<div class="pos" id="_276:824" style="top:910;left:110">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
$empr_add_street</span>
</div>
<div class="pos" id="_545:824" style="top:910;left:545">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
Pay date:</span>
</div>
<div class="pos" id="_661:822" style="top:910;left:661">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
$pay_date</span>
</div>



<div class="pos" id="_276:836" style="top:920;left:110">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
$empr_add_city   $empr_add_zip</span>
</div>



<div class="pos" id="_211:870" style="top:975;left:10">
<span id="_9.0" style=" font-family:Arial; font-size:10px; color:#000000">
Pay to the</span>
</div>
<div class="pos" id="_211:880" style="top:985;left:10">
<span id="_8.3" style=" font-family:Arial; font-size:10px; color:#000000">
order of:</span>
</div>
<div class="pos" id="_276:878" style="top:980;left:110">
<span id="_10.4" style="font-weight:bold; font-family:Arial; font-size:12px; color:#000000">
$emp_f_name $emp_l_name</span>
</div>

<div class="pos" id="_211:894" style="top:1000;left:10">
<span id="_9.1" style=" font-family:Arial; font-size:10px; color:#000000">
This amount:</span>
</div>
<div class="pos" id="_276:896" style="top:1000;left:110"><div class="transbox-long">
<span id="_9.8" style=" font-family:Arial; font-size:12px; color:#000000">
$thisAmountStr</span></div>
</div>
<div class="pos" id="_770:940" style="top:1000;left:800">
<span id="_9.2" style=" font-family:Arial; font-size:12px; color:#000000">
$net_pay_prd</span>
</div>


<!-- <div class="pos" id="_296:931" style="top:831;left:296">
<span id="_9.5" style=" font-family:Arial; font-size:9.5px; color:#000000">
SAMPLE</span>
</div>

<div class="pos" id="_296:912" style="top:812;left:296">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
NON-NEGOTIABLE<span id="_61.2" style="font-weight:bold; font-size:61.2px; color:#e0e0e0"> SAMPLE</span></span>
</div>
-->
<div class="pos" id="_211:952" style="top:1100;left:10">
<span id="_6.3" style=" font-family:Arial; font-size:6.3px; color:#000000">
NATIONAL BANK </span>
</div>
<div class="pos" id="_520:954" style="top:1052;left:620">
<span id="_6.3" style=" font-family:Arial; font-size:6.3px; color:#000000">
AUTHORIZED SIGNATURE</span>
</div>
<div class="pos" id="_211:958" style="top:1106;left:10">
<span id="_6.3" style=" font-family:Arial; font-size:6.3px; color:#000000">
DO NOT CASH</span>
</div>
<div class="pos" id="_296:951" style="top:1051;left:296">
<span id="_10.0" style=" font-family:Arial; font-size:10.0px; color:#000000">
VOID VOID VOID</span>
</div>
<div class="pos" id="_211:965" style="top:1112;left:10">
<span id="_6.7" style=" font-family:Arial; font-size:6.7px; color:#000000">
RECORD ONLY</span>
</div>
<div class="pos" id="_520:962" style="top:1060;left:620">
<span id="_6.7" style=" font-family:Arial; font-size:6.7px; color:#000000">
VOID AFTER 90 DAYS</span>
</div>
<div class="pos" id="_323:997" style="top:1100;left:323">
<span id="_14.6" style=" font-family:Arial; font-size:14.6px; color:#000000">
<ul style="float:left">
<li type="square">001379 1220004964040110157
</li></ul></span></div>
<div class="pos" id="_208:1016" style="top:1070;left:125">
<span id="_7.8" style="font-weight:bold; font-family:Arial; font-size:20px; color:black">
DIRECT DEPOSIT - DO NOT CASH - THIS IS NOT A CHECK</span>
</div>

<div class="pos" id="_517:1016" style="top:1115;left:554">
<span id="_7.8" style="font-weight:bold; font-family:Arial; font-size:7.8px; color:blue">
HOLD AT AN ANGLE TO VIEW WHEN CHECKING THE ENDORSEMENT.</span>
</div>
<div class="pos" id="_782:1070" style="top:1050;left:882">
<span id="_8.1" style=" font-family:Arial; font-size:8.1px; color:#000000">
04-1903</span>
</div>
ASDF;
?>
</div>
</div>
<div style="clear:both">
</div>
</body></html>