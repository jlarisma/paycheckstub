<?php
// calculation engine
include __DIR__ . "/engine-pay.js.php"; 

$baseUrl = getServerHome().'/dev/paystub/';

$backgroundImage = $is_customer_paid ? "" : "{$baseUrl}paystub/assets/mask-prev.gif";
echo $is_customer_paid;

$promo_code = $_REQUEST['promo_code'];
if ($promo_code == '234'){
	echo $_REQUEST['promo_code'];
	$backgroundImage = "";
}



  $content = ob_get_clean();
 
$content= <<<ASDF
<html>
<body>
<style>
*{
font-size: 12px;
vertical-align: middle;
}

#nt-paystub{ font-size: 12px; color: #555;}

table, tr, td,th,thead {
    margin:0;
    padding:0;
    border-spacing: 0;
    vertical-align: middle;
    border-collapse: collapse;

}
.hd-text{
    color:black;
    line-height:19px;
}
.fontsize16{
    font-size:16px;
}
.fontsize13 td, .fontsize13{
    font-size: 13px;
}
.fontsize11{
    font-size: 11px;
}
.tl-right{
    text-align: right ;
    padding-right: 3px;
}
.tl-left{
    text-align: left;
}
.tl-center{
    text-align: center;
}
.lh12{
     line-height: 12px;
}
.lh17{
    line-height: 17px;
}
.paystub{
    border-style: solid;
    !margin: 20px;
}
.paystub td{
    border-width:1px;
}
.paystub table{
    width:100%;
    border-spacing: 0;
}
.no-background{
    background-image: none;
}
/* border right & bottom */
.bd-rb{
    border-bottom-style: solid;
    border-right-style: solid;
}
.bd-right{
    border-right-style: solid;
}
.bd-bottom{
    border-bottom-style: solid;
}


    /** ----------------------------------------- styles for neat paystub section **/
#nt-paystub{
    z-index: 99;
    width: 874px;
    !position: absolute;
    font-weight: bold;

}

#nt-paystub, #nt-paystub td{
    font-size:11px;
    border-width:2px;
}
#nt-paystub .hd-text, #nt-paystub .hd-text td{
    font-size: 10px ;
    color:#828282;
}
#nt-paystub td{
    border-color:black;
}

#emp_email{
    font-size:60px;
	color:rgb(204, 155, 75);
	padding-left:70px;
}

.nt-title{
    text-align: right;
    margin-right: 12px;
    margin-top: 29px;
    font-size: 18px;
    font-weight: normal;
}

#nt-paystub{
	background-image: url($backgroundImage);
	background-repeat: repeat;
}
</style>

<page>  
<div id="nt-paystub" class="paystub" style="border-width:2px">
    <div class="x-title bd-bottom" style="height:82px; border-width: 2px;">
        <table style="line-height: 14px;">
            <tr>
                <td style="width:33%;text-align: left;padding-left: 10px; height:25px; font-size: 18px;">$empr_add_name</td>
                <td style="width:33%"></td>
                <td rowspan="6" style="text-align:center; width:33%" class="nt-title" >Earnings Statement</td>
            </tr>
            <tr style="height: 10px">
                <td style="text-align: left;padding-left: 10px">$empr_add_street</td>
                <td>$emp_street</td>
            </tr>
            <tr>
                <td style="text-align: left;padding-left: 10px">$empr_add_city</td>
                <td>$emp_city</td>
            </tr>
            <tr>
                <td style="text-align: left;padding-left: 10px">$empr_add_state</td>
                <td>$emp_state</td>
            </tr>
            <tr>
                <td style="text-align: left;padding-left: 10px">$empr_add_zip</td>
                <td>$emp_zip</td>
            </tr>
            <tr>
                <td style="text-align: left;padding-left: 10px">&nbsp;</td>
                <td></td>
            </tr>
        </table>
   </div>

    <table class="x-subtotal-1" cellpadding="0" cellspacing="" style="text-align:right;text-align: center">

            <tr class="hd-text" style="height:17px">
                <td class="bd-right" style="width:130px"> EMPLOYEE NO.</td>
                <td class="bd-right" style="width:295px">EMPLOYEE NAME</td>
                <td class="bd-right" style="width:142px">SOCIAL SECURITY NO</td>
                <td class="bd-right" style="width:98px">PERIOD BIG.</td>
                <td class="bd-right" style="width:100px">PERIOD END</td>
                <td class="" style="width:103px">CHECK DATE</td>
            </tr>
            <tr style="height:27px">
                <td class="bd-rb x-input">$emp_id</td>
                <td class="bd-rb x-input">$emp_l_name $emp_f_name</td>
                <td class="bd-rb x-input">$emp_ssn</td>
                <td class="bd-rb x-input">$start_date2 </td>
                <td class="bd-rb x-input">$end_date2 </td>
                <td class="bd-bottom x-input">$pay_date</td>
            </tr>
    </table>

    <table class="x-subtotal-1" style="text-align:right;text-align: center">
        <tbody>
        <tr class="hd-text"  class="hd-text" style="height:17px">
            <td class="bd-rb" style="width:130px"> EMPLOYEE NO.</td>
            <td class="bd-rb" style="width:105px">HOURS</td>
            <td class="bd-rb" style="width:98px">RATE</td>
            <td class="bd-rb" style="width:112px">CURRENT AMOUNT</td>
            <td class="bd-rb" style="width:152px">WITHOLDINGS/DEDUCTIONS</td>
            <td class="bd-rb" style="width:146px">CURRENT AMOUNT</td>
            <td class="bd-bottom" style="width:118px">YEAR TO DATE</td>
        </tr>
        <!-- <tr class="x-empty">
            <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
        </tr> -->
        <tr class="x-input" style="height:24px">
            <td class="bd-right">REGULAR</td>
            <td class="bd-right">$gross_hrs</td>
            <td class="bd-right tl-right">$gross_rate</td>
            <td class="bd-right tl-right">$gross_prd</td>
            <td class="bd-right">-</td>
            <td class="bd-right tl-right">-</td>
            <td class=" tl-right">$gross_ytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right">OVERTIME</td>
            <td class="bd-right ">$ot_hrs</td>
            <td class="bd-right tl-right">$neat_gross_ot_rate</td>
            <td class="bd-right tl-right">$gross_ot_prd</td>
            <td class="bd-right">-</td>
            <td class="bd-right tl-right">-</td>
            <td class=" tl-right">$gross_ot_ytd</td>
        </tr>
        <tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">RET 401K</td>
            <td class="bd-right tl-right">$val_401k_prd</td>
            <td class=" tl-right">$val_401k_ytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">$state_abb</td>
            <td class="bd-right tl-right">$state_amtincometax_prd</td>
            <td class=" tl-right">$state_amtincometax_ytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">FEDERAL</td>
            <td class="bd-right tl-right">$fed_amt_deduct_prd</td>
            <td class=" tl-right">$fed_amt_deduct_ytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">SOCIAL SEC</td>
            <td class="bd-right tl-right">$fica_social_prd</td>
            <td class=" tl-right">$fica_social_ytd</td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right"></td>
            <td class="bd-right">MEDICARE</td>
            <td class="bd-right tl-right">$medicare_prd</td>
            <td class=" tl-right">$medicare_ytd</td>
        </tr>
		<tr class="x-empty">
            <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
        </tr>
		<tr class="x-empty">
            <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
        </tr>
		<tr class="x-empty">
            <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
        </tr>
		<tr class="x-input" style="height:24px">
            <td class="bd-rb"></td>
            <td class="bd-rb"></td>
            <td class="bd-rb"></td>
            <td class="bd-rb"></td>
            <td class="bd-rb"></td>
            <td class="bd-rb">$net_pay_prd</td>
            <td class="bd-bottom"></td>
        </tr>


        </tbody>
    </table>

    <table class="x-subtotal-2" cellpadding="0" cellspacing="" style="text-align:right;text-align: center">
       <tr class="hd-text" style="height:17px">
            <td class="bd-right" style="width:130px">CURRENT AMOUNT</td>
            <td class="bd-right" style="width:140px">CURRENT DEDUCTIONS</td>
            <td class="bd-right" style="width:112px">NET PAY</td>
            <td class="bd-right" style="width:130px">YTD EARNINGS</td>
            <td class="bd-right" style="width:149px">YTD DEDUCTIONS</td>
            <td class="bd-right" style="width:100px">YTD NET PAY</td>
            <td class="" style="width:98px">CHECK NO.</td>
        </tr>
        <tr style="height:27px">
			<td class="bd-right x-input">$taxable_gross_prd</td>
            <td class="bd-right x-input">$tot_ded_prd</td>
            <td class="bd-right x-input">$net_pay_prd_deposit</td>
            <td class="bd-right x-input">$taxable_gross_ytd</td>
            <td class="bd-right x-input">$tot_ded_ytd</td>
            <td class="bd-right x-input">$net_pay_ytd</td>
            <td class="x-input">$check_num</td>
        </tr>
    </table>
</div>
<div style="clear:both"></div>

</page>

</body>
</html>

ASDF;



	echo $content;
?>