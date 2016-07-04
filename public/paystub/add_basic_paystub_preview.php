<?php


// calculation engine
include __DIR__ . "/engine-pay.js.php"; 

  $content = ob_get_clean();

$baseUrl = getServerHome().'/dev/paystub/';
$backgroundImage = $is_customer_paid ? "" : "{$baseUrl}paystub/assets/mask-prev.gif";

$promo_code = $_REQUEST['promo_code'];
if ($promo_code == '234'){
	echo $_REQUEST['promo_code'];
	$backgroundImage = "";
}


$content= <<<ASDF
<html>
<style>
*{
font-size: 12px;
vertical-align: middle;
}

#bc-paystub{ font-size: 12px; color: #555; padding-bottom:20px; }
#bc-paystub #emp_email{
	font-size:20px;
	color:rgb(204, 155, 75);
	padding-left:20px;
}
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
/** ----------------------------------------- styles for advanced paystub section **/
.gray-bar{
    background-color:rgb(180,180,180);
    color:white;
    text-align: left;
    text-indent: 4px;
	height:25px;
}
/** ----------------------------------------- styles for basic paystub section **/
#bc-paystub{
    z-index: 99;
    width: 640px;
    position: absolute;
    font-weight: bold;
    !text-indent:4px;
    !padding-left:5px;
    padding-right:33px;
	background: url($backgroundImage) no-repeat;
}
#bc-paystub, #bc-paystub td {
    border-width:1px;
}

#bc-paystub td {
    padding-left:5px;
}

#bc-paystub div, #bc-paystub span{
    text-align: left;
}
#bc-paystub span {
    display: inline-block;
}

.bd-bottom-dash{
    border-bottom:dashed;
    border-width:1px
}

</style>



<div id="bc-paystub" style="border: solid 1px;" >
    <table class="x-subtotal-1" style="width:100%; border: solid 1px;" cellpadding="10">
        <tbody>
		<tr class="hd-text"  class="hd-text" style="">
			<td width="74px"  class="bd-right"></td>
			<td width="74px"  class="bd-right"></td>
			<td width="103px"  class="bd-right"></td>
            <td width="96px"  class="bd-right"></td>
			<td width="120px"  class="bd-right"></td>
			<td width="62px"  class="bd-right"></td>
			<td width="60px"  class=""></td>
		</tr>
        <tr class="x-input" style="height:24px">
            <td colspan="2" class="bd-bottom">Employee ID:</td>
            <td class="bd-bottom">$emp_id</td>
            <td class="bd-rb">$emp_ssn</td>
            <td class="bd-rb" style="vertical-align: text-bottom;">Required Deductions</td>
            <td class="bd-rb" style="position:relative">Period</td>
            <td class="bd-bottom" style="position:relative">YTD</td>
        </tr>
        <tr class="x-input" style="height:24px">
            <td colspan="2" class="bd-bottom">Employee Name:</td>
            <td colspan="2" class="bd-rb">$emp_l_name &nbsp; $emp_f_name </td>
            <td class="bd-right">Federal Income Tax</td>
            <td class="bd-right tl-right">$fed_amt_deduct_prd </td>
            <td class="tl-right">$fed_amt_deduct_ytd</td>
        </tr>																			
        <tr class="x-input" style="height:24px">
            <td class="bd-bottom">Pay Period:</td>
            <td class="bd-rb">$start_date2</td>
            <td colspan="2" class="bd-rb">to &nbsp;&nbsp; &nbsp;&nbsp; $end_date2
                &nbsp;&nbsp; &nbsp;&nbsp;<span id="state_abb">$state_abb</span></td>
            <td class="bd-right">FICA-Medicare</td>
            <td class="bd-right tl-right">$medicare_prd</td>
            <td class="tl-right">$medicare_ytd</td>
        </tr>
        <tr class="x-input" style="height:24px">
            <td rowspan=2 colspan="4" class="bd-rb">Earnings</td>
            <td class="bd-right">State Income Tax</td>
            <td class="bd-right tl-right">$state_amtincometax_prd</td>
            <td class=" tl-right">$state_amtincometax_ytd</td>
        </tr>
        <tr class="x-input" style="height:24px">
            <td class="bd-rb">FICA-Social Security</td>
            <td class="bd-rb tl-right">$fica_social_prd</td>
            <td class="bd-bottom tl-right">$fica_social_ytd</td>
        </tr>
        <tr class="x-input" style="height:10px">
            <td class="bd-right">Hours</td>
            <td class="bd-right">Rate</td>
            <td class="">This Period</td>
            <td class="bd-right">YTD</td>
            <td class="bd-rb">Other Deductions</td>
            <td class="bd-rb tl-right">$val_401k_prd</td>
            <td class="bd-bottom tl-right">$val_401k_ytd</td>
        </tr>
        <tr class="x-input" style="height:28px">
            <td class="bd-rb">$gross_hrs</td>
            <td class="bd-rb">$gross_rate</td>
            <td class="bd-bottom">$ot_hrs</td>
            <td class="bd-rb">-</td>
            <td class="bd-right">-</td>
            <td class="bd-right">-</td>
            <td class="">-</td>
        </tr>
        <tr class="x-input" style="height:28px">
            <td class="bd-rb">GROSS PAY</td>
            <td class="bd-rb">-</td>
            <td class="bd-bottom">$gross_prd</td>
            <td class="bd-rb">$gross_ytd</td>
            <td class="bd-rb">-</td>
            <td class="bd-rb">-</td>
            <td class="bd-bottom">-</td>
        </tr>
        <tr class="x-input" style="height:28px">
            <td rowspan="2" colspan="4" class="bd-right bd-bottom-dash"></td>
            <td class="bd-rb">NET PAY</td>
            <td class="bd-rb tl-right">$net_pay_prd</td>
            <td class="bd-bottom tl-right">$net_pay_ytd</td>
        </tr>
        <tr class="x-input" style="height:17px">
            <td class="bd-bottom-dash">&nbsp;</td>
            <td class="bd-bottom-dash"></td>
            <td class="bd-bottom-dash"></td>
        </tr>
        <tr class="x-input" style="height:24px;">
            <td colspan="7" class="" style="padding:9px 20px">
                <div style="position:relative; border:solid 1px;padding-left:5px;">
                    <div id="pay_date" style="position:absolute;width:200px;height:70px;top:5px;left:5px">
                        <span id="pay_date">$pay_date</span>
                        <div style="margin-left: 20px;">
                            <div>$emp_street</div>
                            <div>$emp_city</div>
                            <div>$emp_state</div>
                            <div>$emp_zip</div>
                        </div>
                    </div>
                    <div class="x-chknum" style="width:185px;position: absolute;top: 15px;right: 10px; height:40px">
                        <div style="height:14px"><span style="width:95px;">Check Number:</span>
                            <span>$check_num</span>
                        </div>
                        <div><span style="width:95px">Pay Date:</span>
                            <span>$pay_date</span>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div class="x-pay" style="margin-top: 80px;width:400px;">
                        <div style="width:90px;display:inline">PAY</div>
                        <div style="display:inline">$net_pay_prd_deposit</div>
                    </div>
                    <div style="height:40px;margin-bottom:20px;width:600px;">
                        <div style="width:90px;display:inline">To the Order of</div>
                        <div id="union_dues_prd" style="width:200px;display:inline">-</div>
                        <div id="union_dues_ytd" style="width:200px;display:inline">-</div>
                    </div>
                    <div class="x-num" style="position: absolute; bottom:0px;left:275px">
                        1234567
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>

    

    <!-- <div style="display:none;visibility:hidden;">
        <p id="taxable_gross_prd">asdf</p>
        <p id="taxable_gross_ytd">asdf</p>
        <p id="emp_city">asdf</p>
        <p id="emp_street">asdf</p>
        <p id="emp_state">asdf</p>
        <p id="emp_zip">asdf</p>

        <p id="lbl_other_ded_thisperiod2">asdf</p>
        <p id="lbl_other_ded_ytd2">asdf</p>
    </div> -->
</div>

</body>
</html>
ASDF;
	
echo $content;
?>