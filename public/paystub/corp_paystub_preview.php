<?php

include __DIR__ . "/engine-pay.js.php";
$content = ob_get_clean();


//$baseUrl = getServerHome().'/dev/paystub/';
$baseUrl = getServerHome().'';



//$backgroundImage = $is_customer_paid ? "{$baseUrl}paystub/assets/modern-clear.png" : "";
//$backgroundImage = $is_customer_paid ? "{$baseUrl}paystub/assets/modern-clear.png" : "{$baseUrl}paystub/assets/mask-prev.gif";
$backgroundImage = $is_customer_paid ? "--" : "{$baseUrl}paystub/assets/mask-prev.gif";


$content= <<<ASDF
<html>
	  <body>

<style>
*{
font-size: 10px;
vertical-align: middle;
}


#ad-paystub{ line-height: 25px; font-size: 12px; color: #202020; padding-top: 15px; padding-bottom:20px; }



table, tr, td,th,thead {
    margin:0;
    padding:0;
    border-spacing: 0;
    vertical-align: middle;
    border-collapse: collapse;
	text-align:left;
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
	//background-image:url('wp-content/uploads/2013/04/Corporate-paycheck-paystub-710-sample.gif');
}
.paystub td{
    border-width:1px;
}
.paystub table{
!    width:100%;
    border-spacing: 0;
}
.no-background{
    background-image: none;
	//background-image: url('http://www.paycheckstubonline.com/wp-content/uploads/2013/04/Corporate-paycheck-paystub-710-sample.gif');

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
#ad-paystub{
    z-index: 99;
    width:645px;
    position: absolute;

    !text-indent: 7px;
	padding-left: 7px;
	!margin-left:60px;
	
	background-image: url($backgroundImage);
	
/**	background-image: url("http://www.paycheckstubonline.com/paystub/assets/mask-prev.gif");
	background-image: url(http://www.paycheckstubonline.com/wp-content/uploads/2013/04/PREVIEW-paycheck-paystub-710.gif);  **/
}
#ad-paystub table {
	text-align:center;
	width:100%
}

#ad-paystub, #ad-paystub td {
    border-width:0px;
	padding-left: 7px;
}
#ad-paystub tr{
    line-height: 12px;
}
#ad-paystub .hd-text td{
    background-color: #dfdfdf;
    font-size: 13px;
	height:18px;
    !text-indent: 4px;
	padding-left: 4px;
}

.gray-bar{
    background-color:rgb(180,180,180);
    color:white;
    text-align: left;
    !text-indent: 4px;
	padding-left: 4px;
	height:25px;
}
/** ----------------------------------------- styles for basic paystub section **/


</style>



<div id="ad-paystub" class="paystub">
    <table class="x-subtotal-1" cellpadding="10">
        <tr>
            <td  style="width:50%"/>
            <td  style="width:50%"/>
        </tr>
        <tr>
            <td id="empr_add_name" rowspan="4" style="font-size:20px; vertical-align: top">$empr_add_name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td id="empr_add_street">$empr_add_street</td>
        </tr>
        <tr>
            <td id="empr_add_city">$empr_add_city</td>
        </tr>
        <tr>
            <td id="empr_add_state">$empr_add_state</td>
        </tr>
        <tr>
            <td id="empr_add_zip" >$empr_add_zip</td>
        </tr>
    </table>

    <div class="gray-bar fontsize16">Summary</div>
    <table>
        <tr>
            <td  style="width:33%"/>
            <td  style="width:33%"/>
            <td  style="width:34%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td>Name</td>
            <td>Address</td>
            <td class="tl-right">Emp Since</td>
        </tr>
        <tr class="fontsize11">
            <td id="emp_f_name">$emp_f_name</td>
            <td id="emp_street">$emp_street</td>
            <td id="start_date" class="tl-right">$start_date</td>
        </tr>
        <tr class="fontsize11">
            <td id="emp_l_name">$emp_l_name</td>
            <td id="emp_city">$emp_city</td>
            <td class="tl-right"></td>
        </tr>
        <tr class="fontsize11">
            <td>-</td>
            <td id="emp_state">$emp_state</td>
            <td class="tl-right">-</td>
        </tr>
        <tr class="fontsize11">
            <td>-</td>
            <td id="emp_zip">$emp_zip</td>
            <td class="tl-right">-</td>
        </tr>
    </table>

    <table>
        <tr>
            <td  style="width:20%"/>
            <td  style="width:20%"/>
            <td  style="width:20%"/>
            <td  style="width:20%"/>
            <td  style="width:20%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td>Employee ID</td>
            <td>SSN</td>
            <td>Additional W/h</td>
            <td>Marital Status</td>
            <td>Tax Exemption</td>
        </tr>
        <tr class="fontsize11">
            <td id="emp_id">$emp_id</td>
            <td id="emp_ssn">$emp_ssn</td>
            <td>--</td>
            <td id="emp_mar_status">$emp_mar_status</td>
            <td class="tl-right">--</td>
        </tr>
    </table>
    <table>
        <tr>
            <td  style="width:20%"/>
            <td  style="width:20%"/>
            <td  style="width:20%"/>
            <td  style="width:10%"/>
            <td  style="width:10%"/>
            <td  style="width:20%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td>Pay Date</td>
            <td>Period End Date</td>
            <td>Title</td>
            <td>Asgn</td>
            <td>Rate</td>
            <td class="tl-right">Salary/mo</td>
        </tr>
        <tr class="fontsize11">
            <td id="pay_date">$pay_date</td>
            <td id="end_date">$end_date</td>
            <td>--</td>
            <td>--</td>
            <td id="gross_rate">$gross_rate</td>
            <td id="gross_prd" class="tl-right">$gross_prd</td>
        </tr>
    </table>

    <div class="gray-bar fontsize16">Total Gross</div>
    <table>
        <tr>
            <td  style="width:12.5%"/>
            <td  style="width:12.5%"/>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td>Qual</td>
            <td>Hours</td>
            <td>O/T</td>
            <td>Salary/Period</td>
            <td  class="tl-right">Amount(YTD)</td>
        </tr>
        <tr class="fontsize11">
            <td>KD 63201</td>
            <td id="gross_hrs">$gross_hrs</td>
            <td id="ot_hrs">$ot_hrs</td>
            <td>--</td>
            <td id="gross_ytd" class="tl-right">$gross_ytd</td>
        </tr>
    </table>

    <div class="gray-bar fontsize16">Deductions</div>
    <table>
        <tr>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td>Type</td>
            <td>Pre-Tax</td>
            <td class="tl-right">Amount</td>
            <td  class="tl-right">Amount(YTD)</td>
        </tr>
        <tr class="fontsize11">
            <td>Credit Union</td>
            <td>YES</td>
            <td id="union_dues_prd" class="tl-right">$union_dues_prd</td>
            <td id="union_dues_ytd" class="tl-right">$union_dues_ytd</td>
        </tr>
        <tr class="fontsize11">
            <td>401K</td>
            <td>YES</td>
            <td id="val_401k_prd" class="tl-right">$val_401k_prd</td>
            <td id="val_401k_ytd" class="tl-right">$val_401k_ytd</td>
        </tr>
        <tr class="fontsize11">
            <td>Other</td>
            <td>N/A</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
        </tr>
    </table>

    <div class="gray-bar fontsize16">Taxable Gross</div>
    <table>
        <tr>
            <td  style="width:50%"/>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td>Type</td>
            <td class="tl-right">Amount</td>
            <td  class="tl-right">Amount(YTD)</td>
        </tr>
        <tr class="fontsize11">
            <td>Hourly</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
        </tr>
        <tr class="fontsize11">
            <td>Salary</td>
            <td id="taxable_gross_prd" class="tl-right">$taxable_gross_prd</td>
            <td id="taxable_gross_ytd" class="tl-right">$taxable_gross_ytd</td>
        </tr>
        <tr class="fontsize11">
            <td>Commission</td>
            <td id="commission_prd" class="tl-right">$commission_prd</td>
            <td id="commission_ytd" class="tl-right">$commission_ytd</td>
        </tr>
    </table>

    <div class="gray-bar fontsize16">Leave Data Info</div>
    <table>
        <tr>
            <td  style="width:33%"/>
            <td  style="width:33%"/>
            <td  style="width:33%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td>Balance Date</td>
            <td>Date From</td>
            <td  class="">Date To</td>
        </tr>
        <tr class="fontsize11">
            <td>--</td>
			<td id="start_date2">$start_date2</td>
            <td id="end_date2">$end_date2</td>
        </tr>
    </table>

    <table>
        <tr>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td class="">Type</td>
            <td class="tl-right">Hours Used</td>
            <td class="tl-right">Balance(hrs)</td>
            <td class="tl-right">Balance(day)</td>
        </tr>
        <tr>
            <td class="">Vacation Leave</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
        </tr>
        <tr>
            <td class="">Sick Leave</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
        </tr>
        <tr>
            <td class="">Personal Leave</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
        </tr>
        <tr>
            <td class="">Flex Day</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
        </tr>
        <tr>
            <td class="">Compensatory Time</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
            <td class="tl-right">--</td>
        </tr>
    </table>

    <div class="gray-bar fontsize16">Taxes</div>
    <table>
        <tr>
            <td  style="width:25%"/>
            <td  style="width:25%"/>
            <td  style="width:50%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td>Type</td>
            <td  class="tl-right">Amount</td>
            <td  class="tl-right">Amount(YTD)</td>
        </tr>
        <tr class="fontsize11">
            <td>Federal Witholding</td>
            <td id="fed_amt_deduct_prd"  class="tl-right">$fed_amt_deduct_prd</td>
            <td align=right id="fed_amt_deduct_ytd" class="tl-right">$fed_amt_deduct_ytd</td>
        </tr>
        <tr class="fontsize11">
            <td>Social Security</td>
            <td id="fica_social_prd" class="tl-right">$fica_social_prd</td>
            <td align=right id="fica_social_ytd" class="tl-right">$fica_social_ytd</td>
        </tr>
        <tr class="fontsize11">
            <td>Medicare</td>
            <td id="medicare_prd" class="tl-right">$medicare_prd</td>
            <td align=right id="medicare_ytd" class="tl-right">$medicare_ytd</td>
        </tr>
        <tr class="fontsize11">
            <td>State &nbsp;&nbsp;&nbsp; <span id="state_abb">$state_abb</span></td>
            <td id="state_amtincometax_prd" class="tl-right">$state_amtincometax_prd</td>
            <td align=right id="state_amtincometax_ytd" class="tl-right">$state_amtincometax_ytd</td>
        </tr>
    </table>

    <div class="gray-bar fontsize16">Net Pay - Direct Deposit</div>
    <table>
        <tr>
            <td  style="width:17%"/>
            <td  style="width:20%"/>
            <td  style="width:7%"/>
            <td  style="width:22%"/>
            <td  style="width:17%"/>
            <td  style="width:17%"/>
        </tr>
        <tr class="hd-text fontsize13">
            <td>Bank ABA#</td>
            <td>Account#</td>
            <td>Check #</td>
            <td  class="tl-right">Deposited Amount</td>
            <td  class="tl-right"> Net Pay</td>
            <td class="tl-right">Net Pay(YTD)</td>
        </tr>
        <tr class="fontsize11">
            <td id="emp_rout_num">$emp_rout_num</td>
            <td id="emp_acc_num">$emp_acc_num</td>
            <td id="check_num">$check_num</td>
            <td id="net_pay_prd_deposit" class="tl-right">$net_pay_prd_deposit</td>
            <td id="net_pay_prd" class="tl-right">$net_pay_prd</td>
            <td id="net_pay_ytd" class="tl-right">$net_pay_ytd</td>
        </tr>
    </table>
</div>

</body>
</html>

ASDF;

echo $content;
?>