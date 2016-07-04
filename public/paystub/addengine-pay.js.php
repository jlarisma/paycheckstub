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
//$input_yearly_gross = _R('input_yearly_gross');
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
 $emp_zip = _R('emp_zip');


$bankVars = array(
            array()
            );
$bankitems = _R('bankitems');
function date2andom(){
     $n = rand(1,3);
     return $n;    
}

$sumamuont = 0;   

for ($i = 0;$i <= $bankitems ; $i++){

    $bankVars[$i]["name"] = _R( "nameof".(string)$i );
    $bankVars[$i]["amount"] = _R( "amount".(string)$i );
    $bankVars[$i]["type"] = _R( "type".(string)$i );
    $bankVars[$i]["date"] = _R( "date".(string)$i );
    $bankVars[$i]["date2"] = $bankVars[$i]["date"]+ date2andom() ;
    $sumamuont += $bankVars[$i]["amount"]; 
}

$finalamount = _R('finalamount');
$digitscards = _R('digitscards');
$netpayadd = _R('netpayadd');

$INITIALBANKAMOUNT = $finalamount - $sumamuont + $netpayadd;

?>
