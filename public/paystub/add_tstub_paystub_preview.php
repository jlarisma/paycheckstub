<?php

// calculation engine
include __DIR__ . "/engine-pay.js.php"; 

$baseUrl = getServerHome();
$backgroundImage = $is_customer_paid ? "" : "{$baseUrl}paystub/assets/mask-prev.gif";
$promo_code = $_REQUEST['promo_code'];
if ($promo_code == '234'){
	echo $_REQUEST['promo_code'];
	$backgroundImage = "";
}


//print_r($_REQUEST); exit
$content = ob_get_clean();
 
$content=<<<ASDF
<html>
<body>
<style>
*{
font-size: 12px;
vertical-align: middle;
}

table, tr, td,th,thead {
    margin:0;
    padding:0;
    border-spacing: 0;
    vertical-align: middle;
    border-collapse: collapse;

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
    !margin: 0px;
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

.cr-blue{
    color:#32d0f7;
}
.bdcr-blue{
    border-color:#05b9e8;
}

table{
    width:100%;
}
    /** ----------------------------------------- styles for t-stub paystub section **/
.hd-text{
    color:black;
    font-size: 20px;
    font-weight: bold;
    line-height: 28px;
}
.mk-text{
    color:black;
    font-size: 13px;
    font-weight: normal;
}

#tstub-paystub{
	background-image: url($backgroundImage) ;
	background-color:white;
    width: 730px;
    font-size: 12px;
    color: #555;
    margin-left:0px;
    margin-top:0px;
    z-index: 99;
    font-weight: bold;
    border-width:0px;
    border-style: solid;
}
#tstub-paystub td{
    font-size:11px;
}

#neat_emp_email{
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
</style>

<page>
<div id="tstub-paystub" class="paystub" style="border-width:1px">
    <table>
        <tr>
            <td style="width:235px;vertical-align: top;">
             <table>
              <tr>
                <td style="font-size: 24px;font-weight: bold;">$empr_add_name</td>
              </tr>
              <tr>
                <td class="mk-text">$empr_add_street</td>
              </tr>
              <tr>
                <td class="mk-text">$empr_add_city</td>
              </tr>
              <tr>
                <td class="mk-text">$empr_add_state</td>
              </tr>
              <tr>
                <td class="mk-text">$empr_add_zip</td>
              </tr>
            </table>
           </td>
            <td style="font-size: 26px;width:495px">
              <p>NOTE ** THIS IS NOT A CHECK ** NOTE
              <br/>
          <span style="font-size: 13px">PAYROLL ADVICE ONLY</span></p>
			</td>
			
        </tr>
        <tr style="height:55px">
            <td></td><td></td>
        </tr>

        <tr>
            <td colspan="2" style="color:#32d0f7;font-size: 8px;font-weight: bold;border-bottom: solid #05b9e8 2px;" class="tl-right">FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE       FOLD AND REMOVE</td>
        </tr>

        <tr>
            <td id="left-col" style="width:235px;vertical-align: top;border-right: solid #05b9e8 2px;border-bottom: solid  #05b9e8 2px;">
                 <table>
                     <tr>
                         <td style="width:30%;"></td>
                         <td style="width:70%"></td>
                     </tr>

                     <tr>
                        <td class="hd-text" colspan="2">PERSONAL AND CHECK INFORMATION</td>
                     </tr>

                     <tr>
                         <td class="mk-text">Emp ID</td>
                         <td>$emp_id</td>
                     </tr>
                     <tr>
                         <td></td>
                         <td> $emp_f_name </td>
                     </tr>
                     <tr>
                         <td></td>
                         <td> $emp_l_name </td>
                     </tr>
                     <tr>
                         <td></td>
                         <td>$emp_street</td>
                     </tr>
                     <tr>
                         <td></td>
                         <td>$emp_city</td>
                     </tr>
                     <tr>
                         <td></td>
                         <td>$emp_state</td>
                     </tr>
                     <tr>
                         <td></td>
                         <td>$emp_zip</td>
                     </tr>
                     <tr>
                         <td class="mk-text">Soc Sec#:</td>
                         <td>$emp_ssn</td>
                     </tr>
                     <tr>
                         <td class="mk-text">Hiring Date:</td>
                         <td>$start_date</td>
                     </tr>
                     <tr>
                         <td class="mk-text">Filling Status:</td>
                         <td>$emp_mar_status</td>
                     </tr>
                </table>

                <table style="margin-top: 50px">
                    <tr>
                        <td class="mk-text" style="width:30%">Pay Period</td>
                        <td style="width:35%">$start_date2</td>
                        <td style="width:10%"> To </td>
                        <td style="width:25%">$end_date2<!--$end_date--></td>
                    </tr>
                    <tr>
                        <td class="mk-text">Check Date</td>
                        <td colspan="3">$pay_date</td>
                    </tr>

                    <tr class="x-empty">
                        <td  colspan="4" style="height:50px">&nbsp;</td>
                    </tr>

                    <tr>
                        <td class="mk-text">Check#:</td>
                        <td colspan="3">$check_num</td>
                    </tr>
                    <tr>
                        <td class="mk-text">Route#:</td>
                        <td colspan="3">$rout_num</td>
                    </tr>
                    <tr>
                        <td class="mk-text">Acc#:</td>
                        <td colspan="3">$acc_num</td>
                    </tr>

                </table>

                <table>
                    <tr>
                        <td style="width:34%"></td>
                        <td style="width:33%"></td>
                        <td style="width:33%"></td>
                    </tr>
    `               <tr>
                        <td colspan="3" style="border-bottom: solid 1px;" >&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hd-text" colspan="3" style="border-top: solid 1px;">NET PAY ALLOCATIONS</td>
                    </tr>
                    <tr>
                        <td class="mk-text">DESCRIPTION</td>
                        <td class="mk-text tl-right">CURRENT($)</td>
                        <td class="mk-text tl-right">YTD($)</td>
                    </tr>
                    <tr>
                        <td class="mk-text">NET PAY</td>
                        <td class="mk-text tl-right">$net_pay_prd_deposit</td>
                        <td class="mk-text tl-right">$net_pay_ytd_deposit</td>
                    </tr>
                </table>
            </td>

            <td id="right-col" style="width:495px;vertical-align: top;border-bottom: solid #05b9e8 2px;">
                  <table><tr>
                      <td style="width:14%"></td>
                      <td style="width:25%"></td>
                      <td style="width:14%"></td>
                      <td style="width:15%"></td>
                      <td style="width:19%"></td>
                      <td style="width:13%"></td></tr>
                      <!-- ******* -->
					  <tr>
                          <td>
                        	<p>&nbsp;</p>
                            <p>&nbsp;</p>
                          </td>
                      </tr>
                      <tr>
                          <td colspan="6" class="hd-text">EARNINGS</td>
                      </tr>

                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">DESCRIPTION</td>
                          <td class="mk-text tl-right">HRS/<br/>UNITS</td>
                          <td class="mk-text tl-right">RATE</td>
                          <td class="mk-text tl-right">CURRENT($)</td>
                          <td class="mk-text tl-right">YTD($)</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">REGULAR EARNINGS</td>
                          <td class="tl-right">$gross_hrs</td>
                          <td class="tl-right">$gross_rate</td>
                          <td class="tl-right">$gross_prd</td>
                          <td class="tl-right">$gross_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">O/T EARNINGS(1.5)</td>
                          <td class="tl-right">$ot_hrs</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">COMMISSIONS</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right">$commission_prd</td>
                          <td class="tl-right">$commission_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">PRETAX INS</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right">$union_dues_prd</td>
                          <td class="tl-right">$union_dues_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">401K</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right">$val_401k_prd</td>
                          <td class="tl-right">$val_401k_ytd</td>
                      </tr>
                      <tr class="x-empty">
                          <td colspan="6">&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td colspan="5" class="mk-text">HOURS WORKED</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td colspan="5" class="mk-text">ADJUSTED GROSS</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text">EARNINGS</td>
                          <td class="tl-right"></td>
                          <td class="tl-right"></td>
                          <td class="tl-right">$taxable_gross_prd</td>
                          <td class="tl-right">$taxable_gross_ytd</td>
                      </tr>
					  <tr>
                          <td>
                        	<p>&nbsp;</p>
                            <p>&nbsp;</p>
                          </td>
                      </tr>
                      <!-- ******* -->
                      <tr>
                          <td colspan="6" class="hd-text" style="border-top: solid 1px;">DEDUCTIONS</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">DESCRIPTIONS</td>
                          <td class="mk-text tl-right">CURRENT($)</td>
                          <td class="mk-text tl-right">YTD($)</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">GARNISHMENTS</td>
                          <td class="tl-right">$garnish1_prd</td>
                          <td class="tl-right">$garnish1_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3"></td>
                          <td class="tl-right">$garnish2_prd</td>
                          <td class="tl-right">$garnish2_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3"></td>
                          <td class="tl-right">$garnish3_prd</td>
                          <td class="tl-right">$garnish3_ytd</td>
                      </tr>
                      <tr class="x-empty">
                          <td colspan="6">&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text " colspan="3" >TOTAL</td>
                          <td class="tl-right">$tot_garnish_prd</td>
                          <td class="tl-right">$tot_garnish_ytd</td>
                      </tr>
                      <!-- ******* -->
                      <tr>
                          <td colspan="6" class="hd-text" style="border-top: solid 1px;">WITHHOLDINGS</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">DESCRIPTIONS</td>
                          <td class="mk-text tl-right">CURRENT($)</td>
                          <td class="mk-text tl-right">YTD($)</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">FEDERAL W/H</td>
                          <td class="tl-right">$fed_amt_deduct_prd</td>
                          <td class="tl-right">$fed_amt_deduct_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">FICA MEDICARE</td>
                          <td class="tl-right">$medicare_prd</td>
                          <td class="tl-right">$medicare_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="3">FICA SOC SEC(OASDI)</td>
                          <td class="tl-right">$fica_social_prd</td>
                          <td class="tl-right">$fica_social_ytd</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                          <td class="mk-text" colspan="1">STATE W/H</td>
                          <td >$state_abb</td>
                          <td class="tl-right">&nbsp;</td>
                          <td class="tl-right">$state_amtincometax_prd</td>
                          <td class="tl-right">$state_amtincometax_ytd</td>
                      </tr>

                      <tr class="x-empty" style="height:50px">
                          <td colspan="6">&nbsp;
						  <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p></td>
                      </tr>
                      <tr class="x-empty" >
                          <td colspan="3">&nbsp;</td>
                          <td colspan="3" style="border-bottom: solid 1px;">&nbsp;</td>
                      </tr>
                      <tr>
                          <td colspan="4"></td>
                          <td class="mk-text tl-right">CURRENT($)</td>
                          <td class="mk-text tl-right">YTD($)</td>
                      </tr>

                      <!-- ******* -->
                      <tr>
                          <td colspan="4" class="hd-text">NETPAY</td>
                          <td class="tl-right">$net_pay_prd</td>
                          <td class="tl-right">$net_pay_ytd</td>
                      </tr>
                  </table>
            </td>
        </tr>

        <tr>
            <td style="border-right: solid #05b9e8 2px;height:30px">
                <span style="margin-left: 10px;font-size:6;color:#32d0f7">PayRolls by Simple-Pay</span><br/>
                <span style="margin-left: 10px;font-size:6;">0446-P485 GRUVILLE INC</span>
            </td>
            <td></td>
        </tr>
    </table>

<div style="clear:both"></div>
</div>
</page>

</body>
</html>

ASDF;
echo $content;   
?>