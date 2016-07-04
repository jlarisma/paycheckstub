<?php

require_once ('util.php');

//return;
function _R($pname){
    return $_REQUEST[$pname];
}

function _D($str){
    return DateTime::createFromFormat('m/d/Y', $str);
}

function _N2_R($pname){
    return _N2($_REQUEST[$pname]);
}

$n2Vars = array();;
function registerN2vars(){
    $args = func_get_args();

    global $n2Vars;
    if(!empty($args))
        $n2Vars = array_merge($n2Vars, $args);
    else{
        $n2Vars = array_unique($n2Vars);
        return $n2Vars;
    }
    return "";
}

function _N2($num){
    $num = floatval($num);
    return number_format($num, 2, '.',',');
}

$STATE_INFO = array();
$STATE_INFO[0] = array('AL', 'Alabama');
$STATE_INFO[1] = array('AK', 'Alaska');
$STATE_INFO[2] = array('AZ', 'Arizona');
$STATE_INFO[3] = array('AR', 'Arkansas');
$STATE_INFO[4] = array('CA', 'California');
$STATE_INFO[5] = array('CO', 'Colorado');
$STATE_INFO[6] = array('CT', 'Connecticut');
$STATE_INFO[7] = array('DE', 'Delaware');
$STATE_INFO[8] = array('DC', 'District Columbia');
$STATE_INFO[9] = array('FL', 'Florida');
$STATE_INFO[10] = array('GA', 'Georgia');
$STATE_INFO[11] = array('HI', 'Hawaii');
$STATE_INFO[12] = array('ID', 'Idaho');
$STATE_INFO[13] = array('IL', 'Illinois');
$STATE_INFO[14] = array('IN', 'Indiana');
$STATE_INFO[15] = array('IA', 'Iowa');
$STATE_INFO[16] = array('KS', 'Kansas');
$STATE_INFO[17] = array('KY', 'Kentucky');
$STATE_INFO[18] = array('LA', 'Louisiana');
$STATE_INFO[19] = array('ME', 'Maine');
$STATE_INFO[20] = array('MD', 'Maryland');
$STATE_INFO[21] = array('MA', 'Massachusettes');
$STATE_INFO[22] = array('MI', 'Michigan');
$STATE_INFO[23] = array('MN', 'Minnesota');
$STATE_INFO[24] = array('MS', 'Mississippi');
$STATE_INFO[25] = array('MO', 'Missouri');
$STATE_INFO[26] = array('MT', 'Montana');
$STATE_INFO[27] = array('NB', 'Nebraska');
$STATE_INFO[28] = array('NV', 'Nevada');
$STATE_INFO[29] = array('NH', 'New Hampshire');
$STATE_INFO[30] = array('NJ', 'New Jersey');
$STATE_INFO[31] = array('NM', 'New Mexico');
$STATE_INFO[32] = array('NY', 'New York');
$STATE_INFO[33] = array('NC', 'North Carolina');
$STATE_INFO[34] = array('ND', 'North Dakota');
$STATE_INFO[35] = array('OH', 'Ohio');
$STATE_INFO[36] = array('OK', 'Oklahoma');
$STATE_INFO[37] = array('OR', 'Oregon');
$STATE_INFO[38] = array('PA', 'Pennsylvania');
$STATE_INFO[39] = array('Ri', 'Rhode Island');
$STATE_INFO[40] = array('SC', 'South Carolina');
$STATE_INFO[41] = array('SD', 'South Dakota');
$STATE_INFO[42] = array('TN', 'Tennessee');
$STATE_INFO[43] = array('TX', 'Texas');
$STATE_INFO[44] = array('UT', 'Utah');
$STATE_INFO[45] = array('VT', 'Vermont');
$STATE_INFO[46] = array('VA', 'Virginia');
$STATE_INFO[47] = array('WA', 'Washington');
$STATE_INFO[48] = array('WV', 'West Virginia');
$STATE_INFO[49] = array('WI', 'Wisconsin');
$STATE_INFO[50] = array('WY', 'Wyoming');

@$is_customer_paid = _R('is_customer_paid');
//-- function getdata() {
//___________________________ from selectState() __________

$state_tax = _R('state_tax');

$state = _R('emp_state');

$state_abb = $STATE_INFO[$state][0];
 $emp_state = $STATE_INFO[$state][1]; // at this moment the state code number

$val_tot_pay_ytd = 0;
 $input_yearly_gross = _R('input_yearly_gross');
//employer info

 $empr_add_name = _R('empr_add_name');
 $empr_add_street = _R('empr_add_street');
 $empr_add_city = _R('empr_add_city');
 $empr_add_state = _R('empr_add_state');
 $empr_add_zip = _R('empr_add_zip');
//_____________________________________________________________________________________________________________________________________
//employee info

 $emp_email = _R('emp_email');                                               //EMPLOYEE ID
 $emp_rout_num = $rout_num = _R('rout_num');                                             //EMPLOYEE ID
 $emp_acc_num = $acc_num = _R('acc_num');                                               //EMPLOYEE ID
 $emp_id = _R('emp_id');
 $emp_f_name = _R('emp_f_name');
 $emp_l_name = _R('emp_l_name');
 $emp_street = _R('emp_street');
 $emp_city = _R('emp_city');


//var val_emp_state_c = document.getElementById('emp_state').value;
//    $emp_state = $val_emp_state_c;

 $emp_zip =  _R('emp_zip');
 $emp_ssn = _R('emp_ssn');
 $emp_mar_status = _R('emp_mar_status');
//____________________________________________________________________________________________
//   DATE AREA
// new parameters
 $num_stubs = _R('num_stubs');
 $prd_num = _R('prd_num');
 $num_prds = _R('num_prds'); //

 $payfreq = _R('payfreq');
 $payprds_completed = $num_prds - $prd_num;

 $start_date =  $emp_hiredate = _R('emp_sdate');

 $end_date_base = _R('emp_edate');

$end_date = $end_date2 = '';
$start_date2 = '';

 $pfd = array("weekly"=>1, "biweekly"=>2, "monthly"=>4, "bimonthly"=> 8); 	//weeks
 $pay_date_base = _R('emp_pdate');             								//DATE pay date

function _add_date($givendate,$day=0,$mth=0,$yr=0) {
    $dateformat = "m/d/Y";
    $cd = date_create_from_format($dateformat, $givendate)->getTimestamp();
    $newdate = date($dateformat, mktime(0,0,0, date('m',$cd)+$mth,
        date('d',$cd)+$day, date('Y',$cd)+$yr));
    return $newdate;
}


$pay_date_diff = $issue_date_diff = _R('issue_date_diff');
$prdDays = $pfd[$payfreq] * 7; // days in a period

 $end_date = $end_date2 = _add_date($end_date_base, - $prd_num * $prdDays );   ;
 $start_date2 = _add_date($end_date2 , -$prdDays);

 $pay_date = _add_date($end_date , $pay_date_diff);

$val_startweek = date("W",_D($start_date)->getTimestamp());
$val_startyear = date("Y",_D($start_date)->getTimestamp());
$val_endweek = date("W", _D($end_date)->getTimestamp());

$val_week_diff = ($val_endweek - $val_startweek);


if ("weekly" == $payfreq) {
    $payperiods = 52;
    $val_hourly_multiplier = 1;
}else if ("biweekly" == $payfreq){
    $payperiods = 26;
    $val_hourly_multiplier = 2;

}else if ("monthly" == $payfreq){
    $payperiods = 12;
    $val_hourly_multiplier = 52/12;
}
//_____________________________________________________________________________________________________________________
// HOURS AND PAY AREA

 $gross_rate = _R('gross_rate') . "/hr";

 $neat_gross_ot_rate = number_format(1.5 * $gross_rate + 0, 2);

 $ot_hrs_base =  _R('ot_hrs');                        //GROSS OVERTIME
$val_hrs_base =  $gross_hrs_base = _R('gross_hrs');                               //Calculations
$val_rate_base = $gross_rate_base = _R('gross_rate');                             //Calculations
$commission_prd_base = $val_commission_prd_base = _R('commission_prd');

$val_ot_hrs = _R('ot_hrs_');                 $ot_hrs = $val_ot_hrs[$prd_num];       //GROSS OVERTIME
$val_hrs =   _R('gross_hrs_');               $gross_hrs = $val_hrs[$prd_num] ;   //Calculations

$gross_hrs = $gross_hrs * $val_hourly_multiplier;
$val_rate = _R('gross_rate_');               $gross_rate = $val_rate [$prd_num];  //Calculations
$val_commission_prd = _R('commission_prd_'); $commission_prd =$val_commission_prd[$prd_num]; $val_commission_prd = $commission_prd;

registerN2vars("ot_hrs", 'gross_hrs', 'gross_rate','commission_prd', "gross_prd", "main_ths_prd_amt");


//_____________________________________________________________________________________________________________________
// NOTES AND MISCELANOUES AREA
$line_1 = _R('line_1'); 
$line_2 = _R('line_2'); 
$line_3 = _R('line_3'); 

$line_1 = $_REQUEST['line_1'];

registerN2vars('line_1', 'line_2', 'line_3');



// GARNISHMENT DEDUCTIONS
$val_garnish1 = _R('garnish1');
$garnish1_name = _R('garnish1_name');
$garnish1_prd = $val_garnish1;
$garnish1_ytd = $val_garnish1 * $payprds_completed;

$val_garnish2 = _R('garnish2');
$garnish2_name = _R('garnish2_name');
$garnish2_prd = $val_garnish2;
$garnish2_ytd = $val_garnish2 * $payprds_completed;

$val_garnish3 = _R('garnish3');
$garnish3_name = _R('garnish3_name');
$garnish3_prd = $val_garnish3;
$garnish3_ytd = $val_garnish3 * $payprds_completed;


$tot_garnish_prd = $val_garnish2 + $val_garnish3;
$tot_garnish_ytd = $tot_garnish_prd * $payprds_completed;



//
//------ now calculate
{
    //$val_tot_reg_pay_prd =  (str_replace(',', '', (($val_hrs[$prd_num] * $val_rate[$prd_num]) * $val_hourly_multiplier))) ;
    $val_tot_reg_pay_prd_pre =  (($val_hrs[$prd_num] * $val_rate[$prd_num]) * $val_hourly_multiplier) ;
    $val_tot_reg_pay_prd = _N2($val_tot_reg_pay_prd_pre);
	$val_tot_ot_pay_prd = $val_ot_hrs[$prd_num] * $val_rate[$prd_num]*1.5 * $val_hourly_multiplier ; //*($val_hourly_multiplier / $val_hourly_multiplier);
    $val_tot_pay_prd =  ($val_tot_ot_pay_prd + str_replace(',', '',$val_tot_reg_pay_prd) + $val_commission_prd + $val_garnish2);                                                      //Calculations- sum of pay including overtime

    $val_tot_reg_pay_prd_base = $val_hrs_base * $val_rate_base * $val_hourly_multiplier;
    $val_tot_ot_pay_prd_base = $ot_hrs_base * $val_rate_base*1.5 * $val_hourly_multiplier ; //*($val_hourly_multiplier / $val_hourly_multiplier);
    $val_tot_pay_prd_base = $val_tot_ot_pay_prd_base + $val_tot_reg_pay_prd_base + $val_commission_prd_base;
    $val_reg_pay_prd_base = $val_tot_ot_pay_prd_base + $val_tot_reg_pay_prd_base;

     $main_ths_prd_amt = $val_tot_pay_prd;
    // sent to main_form  (GROSS EARNINGS - YTD)
     $gross_prd = ($val_tot_pay_prd);
//________________________________

// commisions
    $commission_this = _R('commission_prd');                        //added by gs

    // commisions
    $val_commission_prd = _R('commission_prd');                        //GROSS HOURS from form
    $val_commission_ytd = _R('commission_ytd');                        //GROSS HOURS from form

    $commission_ytd = ($val_commission_ytd * $payprds_completed);            //to Corp Screen preview




    // calculate YTD values
    {
        //base calc
        $val_tot_pay_ytd_0 = $val_tot_pay_prd_base * ($num_prds - $num_stubs) ;                                               //Calculations- Delta # of weeks * the gross pay amount
        $val_reg_pay_ytd_0 = $val_reg_pay_prd_base * ($num_prds - $num_stubs) ;  // added by gs
		$gross_ot_ytd_0 = $val_tot_ot_pay_prd_base * ($num_prds - $num_stubs);
		

        $currentPrdNum = $prd_num; // current pay stub
        $delta_tot_pay_ytd = 0;
		$delta_reg_pay_ytd = 0;
        $delta_gross_ot_ytd = 0;
        for ( $i = ($num_stubs-1); $i >= $currentPrdNum; $i--){
            $x = $val_hrs[$i] * $val_rate[$i] * $val_hourly_multiplier;
            $y = $val_ot_hrs[$i] * $val_rate[$i]*1.5 * $val_hourly_multiplier ; //*($val_hourly_multiplier / $val_hourly_multiplier);

            $delta_tot_pay_ytd += ($x + $y);
			$delta_reg_pay_ytd += ($x + $y);
            $delta_gross_ot_ytd += $y;
        }
         $gross_ytd = $val_tot_pay_ytd_0 + $delta_tot_pay_ytd + $commission_this;
	     //$val_tot_reg_pay_ytd = $val_reg_pay_ytd_0 + $delta_reg_pay_ytd + $commission_ytd ;      // added by gs
		$val_tot_reg_pay_ytd_pre = $val_reg_pay_ytd_0 + $delta_reg_pay_ytd + $commission_ytd ;      // added by gs sept 4,2014
		 $val_tot_reg_pay_ytd = _N2($val_tot_reg_pay_ytd_pre);              // added by gs sept 4,2014
		 $val_tot_pay_ytd = $val_tot_pay_ytd_0 + $delta_tot_pay_ytd  ;      // added by gs sept 4,2014
		 

         $gross_ot_ytd = $gross_ot_ytd_0 + $delta_gross_ot_ytd ;
    }



     $gross_ot_prd = $val_tot_ot_pay_prd;

    $val_yearly = $val_tot_pay_prd * $payperiods;
    $val_multiplier = (1 / $payperiods);
     $gross_w2 = $val_yearly;

    registerN2vars("gross_ot_prd",  "gross_w2", "gross_ot_ytd", "gross_ytd", "state_amtincometax_prd", "state_amtincometax_ytd");
}

$state_amtincometax_prd = $state_tax * $val_multiplier ;
$state_amtincometax_ytd = $state_tax * $val_multiplier * ($num_prds - $prd_num);


//	 taxes
$val_yearly_temp = $val_yearly;
 $status = _R('emp_mar_status');
//alert ("status = "+status);
$val_fed_tax = 0;
if($status == 1){
    while ($val_yearly_temp > 0){
        if($val_yearly_temp < 8700){
//            $val_fed_tax =  ($val_fed_tax * 0.1);
            $val_fed_tax =  ($val_yearly_temp * 0.1);
            break;
        }
        if($val_yearly_temp < 35350){
            $val_fed_tax = ($val_yearly_temp - 8700)*.15 + 870;
            break;
        }
        if($val_yearly_temp < 85650){
            $val_fed_tax = ($val_yearly_temp - 35350)*.25 + 4867.50;
            break;
        }
        if($val_yearly_temp < 178650){
            $val_fed_tax = ($val_yearly_temp - 85650)*.28 + 17442.50;
            break;
        }
        if($val_yearly_temp < 388350){
            $val_fed_tax = ($val_yearly_temp - 178650)*.33 + 43482.50;
            break;
        }
		if($val_yearly_temp < 100000000){
            $val_fed_tax = ($val_yearly_temp - 178650)*.396 + 116163.75;
            break;
        }
    }
}

if($status == 2){
    while ($val_yearly_temp >0){
        if($val_yearly_temp < 17400){
            $val_fed_tax =  ($val_yearly_temp * 0.1);
            break;
        }
        if($val_yearly_temp < 70700){
            $val_fed_tax = ($val_yearly_temp - 17400)*.15 + 1740.00;
            break;
        }
        if($val_yearly_temp < 142700){
            $val_fed_tax = ($val_yearly_temp - 70700)*.25 + 9735.00;
            break;
        }
        if($val_yearly_temp < 217450){
            $val_fed_tax = ($val_yearly_temp - 142700)*.28 + 27350.00;
            break;
        }
        if($val_yearly_temp < 388350){
            $val_fed_tax = ($val_yearly_temp - 217450)*.33 + 48665.00;
            break;
        }
        if($val_yearly_temp < 10000000){
            $val_fed_tax = ($val_yearly_temp - 388350)*.35 + 105062.00;
            break;
        }
    }
}

if($status == 3){
    while ($val_yearly_temp >0){
        if($val_yearly_temp < 12400){
            $val_fed_tax =  ($val_yearly_temp * 0.1);
            break;
        }
        if($val_yearly_temp < 47350){
            $val_fed_tax = ($val_yearly_temp - 12400)*.15 + 1240;
            break;
        }
        if($val_yearly_temp < 122300){
            $val_fed_tax = ($val_yearly_temp - 47350)*.25 + 6482.00;
            break;
        }
        if($val_yearly_temp < 198050){
            $val_fed_tax = ($val_yearly_temp - 122300)*.28 + 25220.00;
            break;
        }
        if($val_yearly_temp < 388350){
            $val_fed_tax = ($val_yearly_temp - 198050)*.33 + 46430.00;
            break;
        }
        if($val_yearly_temp < 100000000){
            $val_fed_tax = ($val_yearly_temp - 388350)*.35 + 109229.00;
            break;
        }
    }
}




 //$fed_amtincom = _R('fed_amtincom');

$val_fed_tax_prd = ($val_commission_prd * 1.25)+($val_multiplier * $val_fed_tax); //= $fed_amtincom
 $fed_amt_deduct_prd = ($val_fed_tax_prd);


$val_fed_tax_ytd= ($val_fed_tax)*($val_multiplier)*($payprds_completed)+(.25 * $val_commission_ytd);                           //calculations      (calculated-fedtax)  * (weeks)

// $fed_amtytd = (_R('fed_amtytd')); // =$val_fed_tax_ytd,      'fed_amtytd',  from line below
 $fedr_with_held_ytd = ($val_fed_tax_ytd);
 $fed_amt_deduct_ytd = ($val_fed_tax_ytd);

registerN2vars("commission_ytd", 'fed_amt_deduct_prd', 'fedr_with_held_ytd', 'fed_amt_deduct_ytd',
'medicare_prd', 'medicare_ytd', 'fica_social_prd', 'fica_social_ytd' );
// _________________________________________________MEDICARE deductions____________________________________________________________


$val_fica_medicare = ($val_tot_pay_prd + $val_commission_prd) * 0.0145;
 $medicare_prd =  $val_fica_medicare;                         // Main_form sent to

$val_fica_medicare_ytd= ($val_tot_pay_ytd + $val_commission_ytd) * 0.0145;

 $medicare_ytd =  $val_fica_medicare_ytd;

// _________________________________________________and SS deductions____________________________________________________________

$val_fica_social_security = ($val_tot_pay_prd + $val_commission_prd)*0.062;
 $fica_social_prd = $val_fica_social_security;           // master form screen

$val_fica_social_security_ytd= ($val_tot_pay_ytd + $val_commission_ytd)*0.062;
//val_fica_social_security_ytd= (val_fica_social_security)*(payprds_completed);
 $fica_social_ytd = $val_fica_social_security_ytd;
//    $fica_social_ytd = _R('fica_social_ytd') * 0.062; // only if w2-stub
// _________________________________________________fica and SS deductions____________________________________________________________


// 401 K
 $val_401k = _R('val_401k');
 $val_401k_prd = $temp_401k = $val_401k * 0.01 * $val_tot_pay_prd;
 $val_401k_ytd = $val_401k_prd * $payprds_completed;



registerN2vars('val_401k', 'val_401k_prd', 'val_401k_ytd',
     'union_dues', 'union_dues_prd', 'union_dues_ytd', 'garnish1_prd', 'garnish1_ytd',
     'garnish2_prd', 'garnish2_ytd', 'garnish3_prd', 'garnish3_ytd',
    'tot_garnish_ytd', 'tot_garnish_prd');
// UNion deductions
 $union_dues = _N2_R('union_dues_prd');
 $union_dues_prd = _N2($union_dues * 0.01 * $val_tot_pay_prd);
 $union_dues_ytd = _N2($union_dues_prd * $payprds_completed);




//*********taxable gross wages ***************************************

registerN2vars('taxable_gross_prd', 'taxable_gross_ytd', 'ded_this_prd', 'tot_ded_prd', 'ded_ytd', 'tot_ded_ytd');

$taxable_gross_prd = $val_tot_pay_prd + $val_commission_prd - $temp_401k;
$taxable_gross_ytd = ($val_tot_pay_prd + $val_commission_ytd - $temp_401k) * $payprds_completed ;

$val_total_deduct = $val_multiplier * $val_fed_tax + $val_fica_medicare + $val_fica_social_security  + ($state_tax * $val_multiplier);
//alert("state_tax*val_multiplier = "+state_tax*val_multiplier);

//$ded_this_prd = _R('ded_this_prd'); // = $val_total_deduct
$ded_this_prd = $val_total_deduct + $tot_garnish_prd;


//$tot_ded_prd = _N2($val_total_deduct);
$tot_ded_prd = $val_total_deduct;

$val_total_deduct_ytd = ($val_multiplier * $val_fed_tax * $payprds_completed) + $val_fica_medicare_ytd
    + $val_fica_social_security_ytd + $state_tax * $val_multiplier * $payprds_completed;

$ded_ytd = $val_total_deduct_ytd;// = $val_total_deduct_ytd   ; sent to main form
$tot_ded_ytd = ($val_total_deduct_ytd);

//net pay PRD
registerN2vars('net_pay_ytd', 'net_pay_prd', 'net_pay_prd_deposit', 'net_pay_ytd_deposit', 'net_pay_w2_tot');

$val_net_pay = $val_tot_pay_prd + $val_commission_prd - $val_total_deduct -$tot_garnish_prd;
$net_pay_prd = $val_net_pay;
//$net_pay_prd = $val_401k_prd;
//$net_pay_prd_deposit = _N2($val_net_pay);  // changed on march 13 due to 1 dollar issue
$net_pay_prd_deposit = $val_net_pay;


//net pay YTD

$val_net_pay1 =(($val_tot_pay_prd + $val_commission_ytd - $val_total_deduct -$tot_garnish_prd) * $payprds_completed);
 //$net_pay_ytd = _N2($val_net_pay1); //_R('net_pay_ytd'); // = val_net_pay1   //needs to be multiplied by time at work, not 12 CORRECTION   #### only works for week_diff  maybe change to prds?
 $net_pay_ytd = $val_net_pay1;
 $net_pay_ytd_deposit = _N2($val_net_pay1);


$val_net_pay2 = $val_yearly - $val_total_deduct_ytd;
 $net_pay_w2_tot = $val_net_pay2;

$val_check_num = _R('check_num_');
$check_num =$val_check_num[$prd_num];


// now format N2 style (#,###.##) parameters
foreach ($n2Vars as $vname ){
    $GLOBALS[$vname] = _N2($GLOBALS[$vname]);
}

//-- }// end GETDATA

