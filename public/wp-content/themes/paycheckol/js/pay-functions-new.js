// JavaScript Document - old
var state_tax = 0;
var val_fed_tax = 0;
var val_yearly = 0;
var val_multiplier = 0;
var val_fica_medicare = 0;
var val_fica_social_security = 0;
var val_fed_tax_ytd = 0;
var startdate;
var enddate = new Date();
var tempdate = 0;
var union_dues = 0;
var val_emp_state_c = "";
var val_date_minus_1_period = new Date();
var month_minus_1 = 0;
var initdate = 0;
var tempdate = 0;
var initmonth = 0;
var payperiods = 0;
var val_commissions_prd = 0;
var val_commissions_ytd = 0;
var state_abbv = "";
var val_hourly_multiplier = 0;
var startyear = 0;
var tot_garnish_prd = 0;
var tot_garnish_ytd = 0;
var val_net_pay = 0;
var status = 1;
var d_main, d_corp, d_basic, d_neat, d_tstub, d_w2;


$(function () {
    d_main = document;
    d_corp = $('#corporate-test iframe').contents()[0];
    d_basic = $('#basic_paystub iframe').contents()[0];
    d_neat = $('#neat_paystub iframe').contents()[0];
    d_tstub = $('#Tstub iframe').contents()[0];
    d_w2 = $('#w2 iframe').contents()[0];
    d_modern = document;
})


function set_custom_var1() {
    return;
    randomnumber1 = Math.floor(Math.random() * 1000000000000000);
	  document.getElementById('custom-main-pp').value = randomnumber1;
	  document.getElementById('custom-corp').value = randomnumber1;
	  document.getElementById('custom-corp-pp').value = randomnumber1;
	  document.getElementById('custom-basic').value = randomnumber1;
	  document.getElementById('custom-basic-pp').value = randomnumber1;
	  document.getElementById('custom-neat').value = randomnumber1;
	  document.getElementById('custom-neat-pp').value = randomnumber1;
	  document.getElementById('custom-tstub').value = randomnumber1;
	  document.getElementById('custom-tstub-pp').value = randomnumber1;
	  document.getElementById('custom-modern').value = randomnumber1;
	  document.getElementById('custom-modern-pp').value = randomnumber1;
}


function getdata() {
//	return;
    calcTaxes();
    return;
}// end GETDATA


function state_select(state) {
    var val_yearly_temp = val_yearly;
	
    var num_period = document.getElementById('num_prds').value;
    // var value1 = state.options[state.selectedIndex].value; 
    // 
    //alert ("this is state = " + state.value);
    if (state == "none") {  //
        document.getElementById('state_amtincometax_ytd').value = (0).toFixed(2);
        state_abbv = "XXXXXX";
        val_emp_state_c = "XXXXXXXX   SET YOUR STATE  XXXXXXXX";
    }

    if (state == 0) {   //Alabama             COMPLETED
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 500) {
                    state_tax = (val_yearly_temp * .02);
                    break;
                }
                if (val_yearly_temp < 3000) {
                    state_tax = (val_yearly_temp - 500) * .04 + 10;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 3000) * .06 + 110.00;
                    //alert (state_tax);
                    break;
                }

            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1000) {
                    state_tax = (val_yearly_temp * .02);
                    break;
                }
                if (val_yearly_temp < 6000) {
                    state_tax = (val_yearly_temp - 1000) * .04 + 20;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 6000) * .06 + 220.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "AL";
        val_emp_state_c = "Alabama";
    }

    if (state == 1) {   //Alaska
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1000000) {
                    state_tax = (val_yearly_temp * .00);
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1000000) {
                    state_tax = (val_yearly_temp * .01);
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "AK";
        val_emp_state_c = "Alaska";
    }

    if (state == 2) {  //Arizona
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000) {
                    state_tax = (val_yearly_temp * .0259);
                    break;
                }
                if (val_yearly_temp < 25000) {
                    state_tax = (val_yearly_temp - 10000) * .0288 + 259.00;
                    break;
                }
                if (val_yearly_temp < 50000) {
                    state_tax = (val_yearly_temp - 25000) * .0336 + 691.00;
                    break;
                }
                if (val_yearly_temp < 150000) {
                    state_tax = (val_yearly_temp - 50000) * .0424 + 1531.00;
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 150000) * .0454 + 5771.50;
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 20000) {
                    state_tax = (val_yearly_temp * .0259);
                    break;
                }
                if (val_yearly_temp < 50000) {
                    state_tax = (val_yearly_temp - 20000) * .0288 + 518.00;
                    break;
                }
                if (val_yearly_temp < 100000) {
                    state_tax = (val_yearly_temp - 50000) * .0336 + 1382.00;
                    break;
                }
                if (val_yearly_temp < 300000) {
                    state_tax = (val_yearly_temp - 100000) * .0424 + 3062.00;
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 300000) * .0454 + 11542.50;
                    break;
                }
            }
        }
        state_abbv = "AZ";
        val_emp_state_c = "Arizona";
    }

    if (state == 3) {   //Arkansas
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 3900) {
                    state_tax = (val_yearly_temp * .01);
                    break;
                }
                if (val_yearly_temp < 7800) {
                    state_tax = (val_yearly_temp - 3900) * .025 + 39.00;
                    break;
                }
                if (val_yearly_temp < 11700) {
                    state_tax = (val_yearly_temp - 7800) * .035 + 136.50;
                    break;
                }
                if (val_yearly_temp < 19600) {
                    state_tax = (val_yearly_temp - 11700) * .045 + 273.00;
                    break;
                }
                if (val_yearly_temp < 32600) {
                    state_tax = (val_yearly_temp - 19600) * .06 + 628.50;
                    break;
                }
                if (val_yearly_temp < 81650) {
                    state_tax = (val_yearly_temp - 32600) * .07 + 1408.50;
                    break;
                }
            }
        }
        if (status == 1 || 3 || 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 3900) {
                    state_tax = (val_yearly_temp * .01);
                    break;
                }
                if (val_yearly_temp < 7800) {
                    state_tax = (val_yearly_temp - 3900) * .025 + 39.00;
                    break;
                }
                if (val_yearly_temp < 11700) {
                    state_tax = (val_yearly_temp - 7800) * .035 + 136.50;
                    break;
                }
                if (val_yearly_temp < 19600) {
                    state_tax = (val_yearly_temp - 11700) * .045 + 273.00;
                    break;
                }
                if (val_yearly_temp < 32600) {
                    state_tax = (val_yearly_temp - 19600) * .06 + 628.50;
                    break;
                }
                if (val_yearly_temp < 81650) {
                    state_tax = (val_yearly_temp - 32600) * .07 + 1408.50;
                    break;
                }
            }
        }
        state_abbv = "AR";
        val_emp_state_c = "Arkansas";
    }

    if (state == 4) {   //California
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 7124) {
                    state_tax = (val_yearly_temp * .01);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 16890) {
                    state_tax = (val_yearly_temp - 7124) * .02 + 71.24;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 26657) {
                    state_tax = (val_yearly_temp - 16890) * .04 + 266.56;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 37005) {
                    state_tax = (val_yearly_temp - 26657) * .06 + 657.24;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 46766) {
                    state_tax = (val_yearly_temp - 37005) * .08 + 1278.12;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 1000000) {
                    state_tax = (val_yearly_temp - 46766) * .093 + 2059.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 1000000) * .103 + 90709.76;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 14248) {
                    state_tax = (val_yearly_temp * .01);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 33780) {
                    state_tax = (val_yearly_temp - 14248) * .02 + 142.48;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 53314) {
                    state_tax = (val_yearly_temp - 33780) * .04 + 533.12;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 74010) {
                    state_tax = (val_yearly_temp - 53314) * .06 + 1314.28;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 93532) {
                    state_tax = (val_yearly_temp - 74010) * .08 + 2556.24;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 2000000) {
                    state_tax = (val_yearly_temp - 93532) * .093 + 4118.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 2000000) * .103 + 181419.52;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "CA";
        val_emp_state_c = "California";
    }


    if (state == 5) {   //Colorado
        state_tax = (val_yearly_temp * .0463);
        state_abbv = "CO";
        val_emp_state_c = "Colorado";
    }


    if (state == 6) {   //Connecticut
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000) {
                    state_tax = (val_yearly_temp * .03);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 500000) {
                    state_tax = (val_yearly_temp - 10000) * .05 + 300.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 500000) * .065 + 24800.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 20000) {
                    state_tax = (val_yearly_temp * .03);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 1000000) {
                    state_tax = (val_yearly_temp - 10000) * .05 + 600.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 500000) * .065 + 49600.00;
                    //alert (state_tax);
                    break;
                }

            }
        }
        state_abbv = "CT";
        val_emp_state_c = "Connecticut";
    }

    if (state == 7) {   //Deleware
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000) {
                    state_tax = (val_yearly_temp * .04);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 40000) {
                    state_tax = (val_yearly_temp - 5100) * .06 + 400.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 350000) {
                    state_tax = (val_yearly_temp - 10200) * .085 + 2200.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 15350) * .0895 + 28550.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000) {
                    state_tax = (val_yearly_temp * .04);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 40000) {
                    state_tax = (val_yearly_temp - 5100) * .06 + 400.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 350000) {
                    state_tax = (val_yearly_temp - 10200) * .085 + 2200.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 15350) * .0895 + 28550.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "DE";
        val_emp_state_c = "Delaware";
    }

    if (state == 8) {   //District of Columbia
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000) {
                    state_tax = (val_yearly_temp * .04);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 40000) {
                    state_tax = (val_yearly_temp - 5100) * .06 + 400.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 350000) {
                    state_tax = (val_yearly_temp - 10200) * .085 + 2200.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 15350) * .0895 + 28550.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000) {
                    state_tax = (val_yearly_temp * .04);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 40000) {
                    state_tax = (val_yearly_temp - 5100) * .06 + 400.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 350000) {
                    state_tax = (val_yearly_temp - 10200) * .085 + 2200.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 15350) * .0895 + 28550.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "DC";
        val_emp_state_c = "District Columbia";
    }

    if (state == 9) {   //Florida
        state_tax = (val_yearly_temp * 0.0);
        state_abbv = "FL";
        val_emp_state_c = "Florida";
    }

    if (state == 10) {   //Georgia
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 750) {
                    state_tax = (val_yearly_temp * .01);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 2250) {
                    state_tax = (val_yearly_temp - 750) * .02 + 7.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 3750) {
                    state_tax = (val_yearly_temp - 2250) * .03 + 37.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5250) {
                    state_tax = (val_yearly_temp - 3750) * .04 + 82.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 7000) {
                    state_tax = (val_yearly_temp - 5250) * .05 + 142.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 7000) * .06 + 230.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1000) {
                    state_tax = (val_yearly_temp * .01);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 3000) {
                    state_tax = (val_yearly_temp - 1000) * .02 + 10.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5000) {
                    state_tax = (val_yearly_temp - 3000) * .03 + 50.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 7000) {
                    state_tax = (val_yearly_temp - 5000) * .04 + 110.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000) {
                    state_tax = (val_yearly_temp - 7000) * .05 + 190.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 10000) * .06 + 340.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "GA";
        val_emp_state_c = "Georgia";
    }

    if (state == 11) {   //Hawaii
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 2400) {
                    state_tax = (val_yearly_temp * .014);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 4800) {
                    state_tax = (val_yearly_temp - 2400) * .032 + 33.60;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 9600) {
                    state_tax = (val_yearly_temp - 4800) * .055 + 110.40;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 14400) {
                    state_tax = (val_yearly_temp - 9600) * .064 + 374.40;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 19200) {
                    state_tax = (val_yearly_temp - 14400) * .068 + 681.60;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 24000) {
                    state_tax = (val_yearly_temp - 19200) * .072 + 1008.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 36000) {
                    state_tax = (val_yearly_temp - 24000) * .076 + 1353.60;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 48000) {
                    state_tax = (val_yearly_temp - 36000) * .079 + 2265.60;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 150000) {
                    state_tax = (val_yearly_temp - 48000) * .0825 + 3213.60;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 175000) {
                    state_tax = (val_yearly_temp - 150000) * .09 + 11628.60;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 300000) {
                    state_tax = (val_yearly_temp - 175000) * .10 + 13878.60;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 300000) * .11 + 13878.60;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 4800) {
                    state_tax = (val_yearly_temp * .014);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 9600) {
                    state_tax = (val_yearly_temp - 4800) * .032 + 67.20;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 19200) {
                    state_tax = (val_yearly_temp - 9600) * .055 + 220.80;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 28800) {
                    state_tax = (val_yearly_temp - 19200) * .064 + 748.80;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 38400) {
                    state_tax = (val_yearly_temp - 28800) * .068 + 1363.20;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 48000) {
                    state_tax = (val_yearly_temp - 38400) * .072 + 2016.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 72000) {
                    state_tax = (val_yearly_temp - 48000) * .076 + 2707.20;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 96000) {
                    state_tax = (val_yearly_temp - 72000) * .079 + 4531.20;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 300000) {
                    state_tax = (val_yearly_temp - 96000) * .0825 + 6427.20;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 350000) {
                    state_tax = (val_yearly_temp - 300000) * .09 + 23257.20;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 400000) {
                    state_tax = (val_yearly_temp - 350000) * .10 + 27757.20;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 400000) * .11 + 32757.20;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "HI";
        val_emp_state_c = "Hawaii";
    }

    if (state == 12) {   //Idaho
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1323) {
                    state_tax = (val_yearly_temp * .016);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 2642) {
                    state_tax = (val_yearly_temp - 1323) * .036 + 30.09;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 3963) {
                    state_tax = (val_yearly_temp - 2642) * .042 + 89.76;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5284) {
                    state_tax = (val_yearly_temp - 3963) * .051 + 210.79;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 6604) {
                    state_tax = (val_yearly_temp - 5284) * .062 + 360.73;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 9907) {
                    state_tax = (val_yearly_temp - 6604) * .071 + 1078.81;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 26418) {
                    state_tax = (val_yearly_temp - 9907) * .074 + 2755.69;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 26418) * .078 + 3716.84;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 2646) {
                    state_tax = (val_yearly_temp * .016);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5284) {
                    state_tax = (val_yearly_temp - 2646) * .036 + 42.34;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 7926) {
                    state_tax = (val_yearly_temp - 5284) * .042 + 137.30;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10568) {
                    state_tax = (val_yearly_temp - 7926) * .051 + 248.27;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 13208) {
                    state_tax = (val_yearly_temp - 10568) * .062 + 383.01;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 19814) {
                    state_tax = (val_yearly_temp - 13208) * .071 + 546.69;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 52836) {
                    state_tax = (val_yearly_temp - 19814) * .074 + 1015.72;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 52836) * .078 + 3459.34;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "ID";
        val_emp_state_c = "Idaho";
    }

    if (state == 13) {   //Illinois
        state_tax = (val_yearly_temp * 0.05);
        state_abbv = "IL";
        val_emp_state_c = "Illinois";
    }

    if (state == 14) {   //Indiana
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp * .05);
                    //alert (state_tax);
                    break;
                }

            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp * .05);
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "IN";
        val_emp_state_c = "Indiana";
    }

    if (state == 15) {   //IOWA
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1439) {
                    state_tax = (val_yearly_temp * .0036);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 2878) {
                    state_tax = (val_yearly_temp - 1439) * .0072 + 5.18;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5756) {
                    state_tax = (val_yearly_temp - 2878) * .0243 + 15.54;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 12951) {
                    state_tax = (val_yearly_temp - 5756) * .045 + 85.48;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 21585) {
                    state_tax = (val_yearly_temp - 12951) * .0612 + 409.25;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 28780) {
                    state_tax = (val_yearly_temp - 21585) * .0648 + 937.65;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 43170) {
                    state_tax = (val_yearly_temp - 28780) * .068 + 1403.89;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 64755) {
                    state_tax = (val_yearly_temp - 43170) * .0792 + 2382.41;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 64755) * .0898 + 4091.94;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1439) {
                    state_tax = (val_yearly_temp * .0036);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 2878) {
                    state_tax = (val_yearly_temp - 1439) * .0072 + 5.18;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5756) {
                    state_tax = (val_yearly_temp - 2878) * .0243 + 15.54;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 12951) {
                    state_tax = (val_yearly_temp - 5756) * .045 + 85.48;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 21585) {
                    state_tax = (val_yearly_temp - 12951) * .0612 + 409.25;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 28780) {
                    state_tax = (val_yearly_temp - 21585) * .0648 + 937.65;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 43170) {
                    state_tax = (val_yearly_temp - 28780) * .068 + 1403.89;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 64755) {
                    state_tax = (val_yearly_temp - 43170) * .0792 + 2382.41;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 64755) * .0898 + 4091.94;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "IA";
        val_emp_state_c = "Iowa";
    }

    if (state == 16) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 15000) {
                    state_tax = (val_yearly_temp * .035);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 30000) {
                    state_tax = (val_yearly_temp - 15000) * .0625 + 525.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 30000) * .0645 + 1462.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 30000) {
                    state_tax = (val_yearly_temp * .035);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 60000) {
                    state_tax = (val_yearly_temp - 30000) * .0625 + 1050.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 60000) * .0645 + 2925.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "KS";
        val_emp_state_c = "Kansas";
    }

    if (state == 17) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 3000) {
                    state_tax = (val_yearly_temp * .02);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 4000) {
                    state_tax = (val_yearly_temp - 3000) * .03 + 60.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5000) {
                    state_tax = (val_yearly_temp - 4000) * .04 + 90.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 8000) {
                    state_tax = (val_yearly_temp - 5000) * .05 + 130.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 75000) {
                    state_tax = (val_yearly_temp - 8000) * .058 + 280.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 75000) * .06 + 4166.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 3000) {
                    state_tax = (val_yearly_temp * .02);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 4000) {
                    state_tax = (val_yearly_temp - 3000) * .03 + 60.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5000) {
                    state_tax = (val_yearly_temp - 4000) * .04 + 90.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 8000) {
                    state_tax = (val_yearly_temp - 5000) * .05 + 130.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 75000) {
                    state_tax = (val_yearly_temp - 8000) * .058 + 280.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 75000) * .06 + 4166.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "KY";
        val_emp_state_c = "Kentucky";
    }

    if (state == 18) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 12000) {
                    state_tax = (val_yearly_temp * .02);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 50000) {
                    state_tax = (val_yearly_temp - 12000) * .04 + 250.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 50000) * .06 + 1750.00;
                    //alert (state_tax);
                    break;
                }

            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 25000) {
                    state_tax = (val_yearly_temp * .02);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000) {
                    state_tax = (val_yearly_temp - 25000) * .04 + 500.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 100000) * .06 + 3500.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "LA";
        val_emp_state_c = "Louisiana";
    }

    if (state == 19) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 5000) {
                    state_tax = (val_yearly_temp * .02);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 9950) {
                    state_tax = (val_yearly_temp - 5000) * .045 + 100.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 19950) {
                    state_tax = (val_yearly_temp - 9950) * .07 + 322.75;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 19950) * .085 + 1022.75;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000) {
                    state_tax = (val_yearly_temp * .02);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 19900) {
                    state_tax = (val_yearly_temp - 10000) * .045 + 200.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 39900) {
                    state_tax = (val_yearly_temp - 19900) * .07 + 645.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 39900) * .085 + 2045.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "ME";
        val_emp_state_c = "Maine";
    }


    if (state == 20) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1000) {
                    state_tax = (val_yearly_temp * .02);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 2000) {
                    state_tax = (val_yearly_temp - 5100) * .03 + 20.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 3000) {
                    state_tax = (val_yearly_temp - 10200) * .04 + 50.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 150000) {
                    state_tax = (val_yearly_temp - 15350) * .0475 + 90.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 300000) {
                    state_tax = (val_yearly_temp - 20450) * .05 + 7072.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 500000) {
                    state_tax = (val_yearly_temp - 40850) * .0525 + 14572.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 1000000) {
                    state_tax = (val_yearly_temp - 81650) * .055 + 25072.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1000) {
                    state_tax = (val_yearly_temp * .02);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 2000) {
                    state_tax = (val_yearly_temp - 5100) * .03 + 20.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 3000) {
                    state_tax = (val_yearly_temp - 10200) * .04 + 50.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 150000) {
                    state_tax = (val_yearly_temp - 15350) * .0475 + 90.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 300000) {
                    state_tax = (val_yearly_temp - 20450) * .05 + 7072.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 500000) {
                    state_tax = (val_yearly_temp - 40850) * .0525 + 14572.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 1000000) {
                    state_tax = (val_yearly_temp - 81650) * .055 + 25072.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "MD";
        val_emp_state_c = "Maryland";
    }

    if (state == 21) {   //MA
        status = document.getElementById('emp_mar_status').value;
        state_tax = (val_yearly_temp * 0.053);
        state_abbv = "MA";
        val_emp_state_c = "Massachusettes";
    }


    if (state == 22) {   //Michigan
        state_tax = (val_yearly_temp * 0.0435);
        state_abbv = "MI";
        val_emp_state_c = "Michigan";
    }

    if (state == 23) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 23100) {
                    state_tax = (val_yearly_temp * .0535);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 75891) {
                    state_tax = (val_yearly_temp - 23100) * .0705 + 1235.85;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 75891) * .0785 + 4957.62;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 33770) {
                    state_tax = (val_yearly_temp * .0535);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 134170) {
                    state_tax = (val_yearly_temp - 33770) * .0705 + 1806.70;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 134170) * .0785 + 8884.89;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "MN";
        val_emp_state_c = "Minnesota";
    }

    if (state == 24) {   //Missispi
        while (val_yearly_temp > 0) {
            if (val_yearly_temp < 5000) {
                state_tax = (val_yearly_temp * .03);
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 10000) {
                state_tax = (val_yearly_temp - 5000) * .04 + 150.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 10000000) {
                state_tax = (val_yearly_temp - 10000) * .05 + 350.00;
                //alert (state_tax);
                break;
            }
        }
        state_abbv = "MS";
        val_emp_state_c = "Mississippi";
    }

    if (state == 25) {
        status = document.getElementById('emp_mar_status').value;
        while (val_yearly_temp > 0) {
            if (val_yearly_temp < 1000) {
                state_tax = (val_yearly_temp * .015);
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 2000) {
                state_tax = (val_yearly_temp - 1000) * .02 + 15.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 3000) {
                state_tax = (val_yearly_temp - 2000) * .025 + 35.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 4000) {
                state_tax = (val_yearly_temp - 3000) * .03 + 60.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 5000) {
                state_tax = (val_yearly_temp - 4000) * .035 + 90.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 6000) {
                state_tax = (val_yearly_temp - 5000) * .040 + 125.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 7000) {
                state_tax = (val_yearly_temp - 6000) * .045 + 165.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 8000) {
                state_tax = (val_yearly_temp - 7000) * .05 + 210.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 9000) {
                state_tax = (val_yearly_temp - 8000) * .055 + 260.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 10000000) {
                state_tax = (val_yearly_temp - 9000) * .06 + 315.00;
                //alert (state_tax);
                break;
            }
        }
        state_abbv = "MO";
        val_emp_state_c = "Missouri";
    }

    if (state == 26) {
        while (val_yearly_temp > 0) {
            if (val_yearly_temp < 2600) {
                state_tax = (val_yearly_temp * .01);
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 4600) {
                state_tax = (val_yearly_temp - 2600) * .02 + 26.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 6900) {
                state_tax = (val_yearly_temp - 4600) * .03 + 66.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 9400) {
                state_tax = (val_yearly_temp - 6900) * .04 + 135.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 12100) {
                state_tax = (val_yearly_temp - 9400) * .05 + 235.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 15600) {
                state_tax = (val_yearly_temp - 12100) * .06 + 370.00;
                //alert (state_tax);
                break;
            }
            if (val_yearly_temp < 20000000) {
                state_tax = (val_yearly_temp - 15600) * .069 + 580.00;
                //alert (state_tax);
                break;
            }
        }//end while
        state_abbv = "MT";
        val_emp_state_c = "Montana";
    }

    if (state == 27) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 2400) {
                    state_tax = (val_yearly_temp * .0256);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 17500) {
                    state_tax = (val_yearly_temp - 2400) * .0357 + 61.44;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 27000) {
                    state_tax = (val_yearly_temp - 17500) * .0512 + 600.51;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 27000) * .0684 + 1086.91;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 4800) {
                    state_tax = (val_yearly_temp * .0256);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 35000) {
                    state_tax = (val_yearly_temp - 4800) * .0357 + 122.88;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 54000) {
                    state_tax = (val_yearly_temp - 35000) * .0512 + 1201.02;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 54000) * .0684 + 2173.82;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "NB";
        val_emp_state_c = "Nebraska";
    }

    if (state == 28) {  																	//Nevada completed
        state_tax = (val_yearly_temp * 0);
        state_abbv = "NV";
        val_emp_state_c = "Nevada";
    }

    if (state == 29) {
        state_tax = (val_yearly_temp * 0.05);
        state_abbv = "NH";
        val_emp_state_c = "New Hampshire";
    }

    if (state == 30) {   //New Jersey
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 20000) {
                    state_tax = (val_yearly_temp * .014);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 35000) {
                    state_tax = (val_yearly_temp - 20000) * .0175 + 280.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 40000) {
                    state_tax = (val_yearly_temp - 35000) * .035 + 542.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 75000) {
                    state_tax = (val_yearly_temp - 40000) * .0553 + 717.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 500000) {
                    state_tax = (val_yearly_temp - 75000) * .0637 + 2653.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 500000) * .0897 + 29725.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 20000) {
                    state_tax = (val_yearly_temp * .014);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 50000) {
                    state_tax = (val_yearly_temp - 20000) * .0175 + 280.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 70000) {
                    state_tax = (val_yearly_temp - 35000) * .035 + 805.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 80000) {
                    state_tax = (val_yearly_temp - 40000) * .0553 + 1505.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 500000) {
                    state_tax = (val_yearly_temp - 75000) * .0637 + 2058.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 500000) * .0897 + 28812.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "NJ";
        val_emp_state_c = "New Jersey";
    }

    if (state == 31) {   //New Mexico
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 5500) {
                    state_tax = (val_yearly_temp * .017);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 11000) {
                    state_tax = (val_yearly_temp - 5500) * .032 + 93.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 16000) {
                    state_tax = (val_yearly_temp - 11000) * .047 + 269.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 16000) * .049 + 504.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 8000) {
                    state_tax = (val_yearly_temp * .017);
                    break;
                }
                if (val_yearly_temp < 16000) {
                    state_tax = (val_yearly_temp - 8000) * .032 + 136.00;
                    break;
                }
                if (val_yearly_temp < 24000) {
                    state_tax = (val_yearly_temp - 16000) * .047 + 392.00;
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 24000) * .049 + 768.00;
                    break;
                }
            }
        }
        state_abbv = "NM";
        val_emp_state_c = "New Mexico";
    }

    if (state == 32) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 8000) {
                    state_tax = (val_yearly_temp * .04);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 11000) {
                    state_tax = (val_yearly_temp - 8000) * .045 + 320.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 13000) {
                    state_tax = (val_yearly_temp - 11000) * .0525 + 455.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 20000) {
                    state_tax = (val_yearly_temp - 13000) * .059 + 560.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 200000) {
                    state_tax = (val_yearly_temp - 20000) * .0685 + 973.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 500000) {
                    state_tax = (val_yearly_temp - 200000) * .0785 + 13303.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 500000) * .0897 + 36853.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 8000) {
                    state_tax = (val_yearly_temp * .04);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 11000) {
                    state_tax = (val_yearly_temp - 8000) * .045 + 640.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 13000) {
                    state_tax = (val_yearly_temp - 11000) * .0525 + 955.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 20000) {
                    state_tax = (val_yearly_temp - 13000) * .059 + 1120.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 200000) {
                    state_tax = (val_yearly_temp - 20000) * .0685 + 1938.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 500000) {
                    state_tax = (val_yearly_temp - 200000) * .0785 + 19748.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 500000) * .0897 + 35448.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "NY";
        val_emp_state_c = "New York";
    }

    if (state == 33) {  																	//Nort Carolina is completed
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 12750) {
                    state_tax = (val_yearly_temp * .06);
                    break;
                }
                if (val_yearly_temp < 60000) {
                    state_tax = (val_yearly_temp - 12750) * .07 + 765;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 60000) * .075 + 4072.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 21250) {
                    state_tax = (val_yearly_temp * .06);
                    break;
                }
                if (val_yearly_temp < 100000) {
                    state_tax = (val_yearly_temp - 21250) * .07 + 1275;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 100000) * .075 + 6787.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "NC";
        val_emp_state_c = "North Carolina";
    }
    if (state == 34) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 34000) {
                    state_tax = (val_yearly_temp * .0184);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 82400) {
                    state_tax = (val_yearly_temp - 34000) * .0344 + 625.60;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 171850) {
                    state_tax = (val_yearly_temp - 82400) * .0381 + 2290.56;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 373650) {
                    state_tax = (val_yearly_temp - 171850) * .0442 + 5698.61;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 373650) * .0486 + 14618.17;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 34000) {
                    state_tax = (val_yearly_temp * .0184);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 82400) {
                    state_tax = (val_yearly_temp - 34000) * .0344 + 1061.68;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 171850) {
                    state_tax = (val_yearly_temp - 82400) * .0381 + 3870.44;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 373650) {
                    state_tax = (val_yearly_temp - 171850) * .0442 + 6649.84;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 373650) * .0486 + 14024.61;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "ND";
        val_emp_state_c = "North Dakota";
    }

    if (state == 35) {   //Ohio
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 5100) {
                    state_tax = (val_yearly_temp * .059);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10200) {
                    state_tax = (val_yearly_temp - 5100) * .0117 + 30.09;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 15350) {
                    state_tax = (val_yearly_temp - 10200) * .0235 + 89.76;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 20450) {
                    state_tax = (val_yearly_temp - 15350) * .0294 + 210.79;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 40850) {
                    state_tax = (val_yearly_temp - 20450) * .0352 + 360.73;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 81650) {
                    state_tax = (val_yearly_temp - 40850) * .0411 + 1078.81;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 102100) {
                    state_tax = (val_yearly_temp - 81650) * .047 + 2755.69;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 204200) {
                    state_tax = (val_yearly_temp - 102100) * .0545 + 3716.84;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 204200) * .0592 + 9281.29;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "OH";
        val_emp_state_c = "Ohio";
    }
    if (state == 36) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 1000) {
                    state_tax = (val_yearly_temp * .005);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 2500) {
                    state_tax = (val_yearly_temp - 1000) * .01 + 5;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 3750) {
                    state_tax = (val_yearly_temp - 2500) * .02 + 20;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 4900) {
                    state_tax = (val_yearly_temp - 3750) * .03 + 45;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 7200) {
                    state_tax = (val_yearly_temp - 4900) * .04 + 79.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 8700) {
                    state_tax = (val_yearly_temp - 7200) * .05 + 171.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 8700) * .055 + 246.50;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 2000) {
                    state_tax = (val_yearly_temp * .005);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5000) {
                    state_tax = (val_yearly_temp - 2000) * .01 + 10.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 7500) {
                    state_tax = (val_yearly_temp - 5000) * .02 + 40.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 9800) {
                    state_tax = (val_yearly_temp - 7500) * .03 + 90.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 12200) {
                    state_tax = (val_yearly_temp - 9800) * .04 + 159.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 15000) {
                    state_tax = (val_yearly_temp - 12200) * .05 + 255.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 20000000) {
                    state_tax = (val_yearly_temp - 15000) * .055 + 395.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "OK";
        val_emp_state_c = "Oklahoma";
    }
    if (state == 37) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 3100) {
                    state_tax = (val_yearly_temp * .05);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 7750) {
                    state_tax = (val_yearly_temp - 3100) * .07 + 155.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 125000) {
                    state_tax = (val_yearly_temp - 7750) * .09 + 480.50;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 250000) {
                    state_tax = (val_yearly_temp - 125000) * .108 + 11033.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 250000) * .11 + 24533.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 6200) {
                    state_tax = (val_yearly_temp * .05);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 15500) {
                    state_tax = (val_yearly_temp - 6200) * .07 + 310.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 250000) {
                    state_tax = (val_yearly_temp - 15500) * .09 + 961.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 500000) {
                    state_tax = (val_yearly_temp - 250000) * .108 + 22066.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 500000) * .11 + 49066.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "OR";
        val_emp_state_c = "Oregon";
    }

    if (state == 38) {   //
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                state_tax = (val_yearly_temp * .03);
                break;
            }
        }
        state_abbv = "PA";
        val_emp_state_c = "Pennsylvania";
    }

    if (state == 39) {
        status = document.getElementById('emp_mar_status').value;
        while (val_yearly_temp > 0) {
            if (val_yearly_temp < 55000) {
                state_tax = (val_yearly_temp * .0375);
                break;
            }
            if (val_yearly_temp < 125000) {
                state_tax = (val_yearly_temp - 55000) * .0475 + 2062.50;
                break;
            }
            if (val_yearly_temp < 10000000) {
                state_tax = (val_yearly_temp - 125000) * .0599 + 5387.50;
                break;
            }
        }
        state_abbv = "RI";
        val_emp_state_c = "Rhode Island";
    }

    if (state == 40) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 2760) {
                    state_tax = (val_yearly_temp * .00);
                    break;
                }
                if (val_yearly_temp < 5520) {
                    state_tax = (val_yearly_temp - 2760) * .03;
                    break;
                }
                if (val_yearly_temp < 8280) {
                    state_tax = (val_yearly_temp - 5520) * .04 + 82.80;
                    break;
                }
                if (val_yearly_temp < 11040) {
                    state_tax = (val_yearly_temp - 8280) * .05 + 193.20;
                    break;
                }
                if (val_yearly_temp < 13800) {
                    state_tax = (val_yearly_temp - 11040) * .06 + 331.20;
                    break;
                }
                if (val_yearly_temp < 100000000) {
                    state_tax = (val_yearly_temp - 13800) * .07 + 496.80;
                    break;
                }
            }
        }
        state_abbv = "SC";
        val_emp_state_c = "South Carolina";
    }

    if (state == 41) {
        status = document.getElementById('emp_mar_status').value;
        state_abbv = "SD";
        val_emp_state_c = "South Dakota";
    }

    if (state == 42) {  //Tennessee                       - Confirmed Finished on april 27th-2013
        state_tax = (val_yearly_temp * 0.06);
        state_abbv = "TN";
        val_emp_state_c = "Tennessee";
    }

    if (state == 43) {  //Texas
        state_tax = (val_yearly_temp * 0);
        state_abbv = "TX";
        val_emp_state_c = "Texas";
    }

    if (state == 44) {
        status = document.getElementById('emp_mar_status').value;
        while (val_yearly_temp > 0) {
            state_tax = (val_yearly_temp * .05);
            break;
        }
        state_abbv = "UT";
        val_emp_state_c = "Utah";
    }

    if (state == 45) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 34500) {
                    state_tax = (val_yearly_temp * .0355);
                    break;
                }
                if (val_yearly_temp < 83600) {
                    state_tax = (val_yearly_temp - 34500) * .068 + 1224.75;
                    break;
                }
                if (val_yearly_temp < 174400) {
                    state_tax = (val_yearly_temp - 83600) * .078 + 4563.55;
                    break;
                }
                if (val_yearly_temp < 379150) {
                    state_tax = (val_yearly_temp - 174400) * .088 + 11645.95;
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 379150) * .0895 + 29663.95;
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 57650) {
                    state_tax = (val_yearly_temp * .0355);
                    break;
                }
                if (val_yearly_temp < 139350) {
                    state_tax = (val_yearly_temp - 57650) * .068 + 2046.57;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 212300) {
                    state_tax = (val_yearly_temp - 139350) * .078 + 7602.18;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 379150) {
                    state_tax = (val_yearly_temp - 212300) * .088 + 13292.28;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 379150) * .0895 + 27975.08;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "VT";
        val_emp_state_c = "Vermont";
    }

    if (state == 46) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 3000) {
                    state_tax = (val_yearly_temp * .02);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 5000) {
                    state_tax = (val_yearly_temp - 3000) * .03 + 60.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 17000) {
                    state_tax = (val_yearly_temp - 5000) * .05 + 120.00;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 17000) * .0575 + 720.00;
                    //alert (state_tax);
                    break;
                }
            }
        }
        state_abbv = "VA";
        val_emp_state_c = "Virginia";
    }

    if (state == 47) {
        status = document.getElementById('emp_mar_status').value;
        while (val_yearly_temp > 0) {
            state_tax = (val_yearly_temp * 0);
            break;
        }
        state_abbv = "WA";
        val_emp_state_c = "Washington";
    }

    if (state == 48) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10000) {
                    state_tax = (val_yearly_temp * .03);
                    break;
                }
                if (val_yearly_temp < 25000) {
                    state_tax = (val_yearly_temp - 10000) * .04 + 300.00;
                    break;
                }
                if (val_yearly_temp < 40000) {
                    state_tax = (val_yearly_temp - 25000) * .045 + 900.00;
                    break;
                }
                if (val_yearly_temp < 60000) {
                    state_tax = (val_yearly_temp - 40000) * .06 + 1575.00;
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 60000) * .065 + 2775.00;
                    break;
                }

            }
        }
        state_abbv = "WV";
        val_emp_state_c = "West Virginia";
    }

    if (state == 49) {
        status = document.getElementById('emp_mar_status').value;
        if (status == 1 || 3) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 10180) {
                    state_tax = (val_yearly_temp * .046);
                    break;
                }
                if (val_yearly_temp < 20360) {
                    state_tax = (val_yearly_temp - 10180) * .0615 + 468.28;
                    break;
                }
                if (val_yearly_temp < 152740) {
                    state_tax = (val_yearly_temp - 20360) * .065 + 1094.35;
                    break;
                }
                if (val_yearly_temp < 224210) {
                    state_tax = (val_yearly_temp - 152740) * .0675 + 9699.05;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 224210) * .0775 + 14523.28;
                    //alert (state_tax);
                    break;
                }
            }
        }
        if (status == 2) {
            while (val_yearly_temp > 0) {
                if (val_yearly_temp < 13580) {
                    state_tax = (val_yearly_temp * .046);
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 27150) {
                    state_tax = (val_yearly_temp - 13580) * .0615 + 624.68;
                    //alert (state_tax);
                    break;
                }
                if (val_yearly_temp < 203650) {
                    state_tax = (val_yearly_temp - 27150) * .065 + 1459.24;
                    break;
                }
                if (val_yearly_temp < 298940) {
                    state_tax = (val_yearly_temp - 203650) * .0675 + 12931.74;
                    break;
                }
                if (val_yearly_temp < 10000000) {
                    state_tax = (val_yearly_temp - 298940) * .0775 + 19363.81;
                    break;
                }
            }
        }
        state_abbv = "WI";
        val_emp_state_c = "Wisconsin";
    }
    if (state == 50) {
        status = document.getElementById('emp_mar_status').value;
        while (val_yearly_temp > 0) {
            state_tax = (val_yearly_temp) * 0;
            break;
        }
        state_abbv = "WY";
        val_emp_state_c = "Wyoming";
    }

    document.getElementById('state_tax').value = (state_tax).toFixed(2);     //main_form
}


var timerconvert
function convert_yearly_hourly(yearly) {
    //saf: ignore yearly
    clearTimeout(timerconvert);
    timerconvert = setTimeout(function() {
        yearly = $("#input_yearly_gross").val();

        document.getElementById('gross_hrs').value = (40);
        document.getElementById('gross_rate').value = (yearly / 2080).toFixed(2);
        document.getElementById('ot_hrs').value = 0;

        //console.log($('#consecutive_stubs input[name*="gross_hrs"]'));

        $('#consecutive_stubs input[name*="gross_hrs"]').each(function() {
            $(this).val($('#gross_hrs').val());
        });

        $('#consecutive_stubs input[name*="gross_rate"]').each(function() {
            $(this).val($('#gross_rate').val());
        });

        $('#consecutive_stubs input[name*="ot_hrs"]').each(function() {
            $(this).val($('#ot_hrs').val());
        });

        getdata();
    }, 100);

}

var timerHourlyYearly
function convert_hourly_yearly(hours, rate, ot_hr) {
    //saf: ignore parameters
    clearTimeout(timerHourlyYearly);
    timerHourlyYearly = setTimeout(function() {
        hours = $("#gross_hrs").val() * 1;
        rate = $("#gross_rate").val() * 1;
        ot_hr = $("#ot_hrs").val() * 1;

        $('#consecutive_stubs input[name*="gross_rate"]').val(rate);

        document.getElementById('input_yearly_gross').value = ((hours * rate * 52) + (ot_hr * rate * 1.5 * 52)).toFixed(2);

        getdata();
      }, 100);
}


function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}


function IsNumeric(strString) //  check for valid numeric strings	
{
    var strValidChars = "0123456789.-";
    var strChar;
    var blnResult = true;

    if (strString.length == 0) return false;
    //  test strString consists of valid characters listed above
    for (i = 0; i < strString.length && blnResult == true; i++) {
        strChar = strString.charAt(i);
        if (strValidChars.indexOf(strChar) == -1) {
            blnResult = false;
        }
    }
    return blnResult;
}


function checkDec(xElement) {
    theNum = xElement.value.toString();
    var regExp = /^\d{0,}\.\d{2}$/;    //format  .## required  
    //var regExp = /^\d{1,}\.\d{2}$/;  //format #.## required  
    var formatLine = theNum.match(regExp);
    if (!formatLine) { //Test if there was no match  
        alert("ERROR:\n\nThe amount entered: " + theNum + " is not in the correct format of .##"); //Display Error  
        xElement.focus();  //Force User To Enter Correct Amount  
    }
}


function daysInMonth(month, year) {
    return new Date(year, month + 1, 0).getDate();
}


function calcTaxes() {
    //global workingYear;
    debugger;
    var val_tot_pay_ytd = 0;
    var val_tot_pay_ytd = 0;
//_____________________________________________________________________________________________________________________________________
//   DATE AREA
    var val_strtdate = $('#start_date').val(); 				    //DATE START DATE
    //if (startyear < 2013) {
    var workingYear = enddate.getFullYear();
    //    echo ("XXXXXXXXXX".workingYear);  //enddate.getFullYear());
    if (startyear < workingYear) {
        if (workingYear = 2016){
            val_strtdate = '01/04/'+ workingYear;
            startweek = 1;
        }
        else {
            val_strtdate = '01/01/' + workingYear;
            //alert ("startyear = " + startyear);
            startweek = -1;
        }
    }

    var val_hiredate = $('#start_date').val();
    var val_strtdate_one = $('#start_date').val();			        // Start date Month
    var val_enddate_one = $('#end_date').val();					// End Date Month
    var val_week_diff = (endweek - startweek);
    //Calculations - From script on main_form
    var val_month_diff = (endmonth - startmonth);
    var val_pay_rate = $('#gross_rate').val();						//GROSS RATE from form
    var val_overtime_hrs = $('#ot_hrs').val();

    var val_hrs = $('#gross_hrs').val();								//Calculations
    var val_rate = $('#gross_rate').val();								//Calculations

    var val_overtime_hrs = $('#ot_hrs').val();						//GROSS OVERTIME


    var val_hrs = $('#gross_hrs').val();								//Calculations
    var val_rate = $('#gross_rate').val();								//Calculations
    val_hrs = (val_hrs);															//Calculations
    val_rate = (val_rate);														//Calculations

    var payPeriond = $("#main_form input:radio[name=payfreq]:checked").val();

    if ("weekly" == payPeriond) { // if PAID WEEKLY
        payperiods = 52;
        val_hourly_multiplier = 1;
        var payprds_completed = val_week_diff;

        var val_tot_reg_pay_prd = val_hrs * val_rate;
        var val_tot_ot_pay_prd = val_overtime_hrs * val_rate * 1.5;
        val_tot_pay_prd = val_tot_ot_pay_prd + val_tot_reg_pay_prd;		    											//Calculations- sum of pay including overtime
        val_tot_pay_ytd = payprds_completed * val_tot_pay_prd;

        $('#main_ths_prd_amt').val((val_tot_pay_prd).toFixed(2));
        $('#gross_ytd').val(val_tot_pay_ytd.toFixed(2));
        $('#num_prds').val(payprds_completed);

        val_yearly = (val_tot_pay_prd * payperiods);
        val_multiplier = 1 / payperiods;
        $('#gross_w2').val(val_yearly);

        initdate = enddate.getDate();           //the day of the ENDDATE
        initmonth = enddate.getMonth();
        inityear = enddate.getFullYear();
        tempdate = (initdate - 6);

        if (tempdate <= 0) {
            month_minus_1 = (enddate.getMonth());
            //alert ("endmonth get month = " + enddate.getMonth());
            //alert (month_minus_1);
            val_date_minus_1_period.setMonth(month_minus_1, tempdate);
            val_date_minus_1_period.setYear(inityear);
        } else {
            //alert ("endYEAR = " + enddate.getFullYear());
            //alert (month_minus_1);
            // alert ("valdate = "+val_date_minus_1_period);
            // alert ("tempdate = "+tempdate);
            val_date_minus_1_period.setDate(tempdate);
            val_date_minus_1_period.setMonth(initmonth);
            val_date_minus_1_period.setYear(inityear);
        }

        var dtStart2 = jQuery.format.date(val_date_minus_1_period, "MM/dd/yyyy");
        $('#start_date2').val(dtStart2);


    } else if ("biweekly" == payPeriond) {
        payperiods = 26;
        payprds_completed = (Math.floor(val_week_diff * 0.5));
        val_hourly_multiplier = 2;

        var val_tot_reg_pay_prd = val_hrs * val_rate * 2;
        var val_tot_ot_pay_prd = val_overtime_hrs * val_rate * 1.5 * 2;
        val_tot_pay_prd = val_tot_ot_pay_prd + val_tot_reg_pay_prd;		    											//Calculations- sum of pay including overtime
        val_tot_pay_ytd = payprds_completed * val_tot_pay_prd;

//        document.getElementById('main_ths_prd_amt').value = (val_tot_pay_prd).toFixed(2);							// Sending calculated gross rate to MAIN FORM
//        document.getElementById('gross_ytd').value = (val_tot_pay_ytd.toFixed(2));
        document.getElementById('num_prds').value = payprds_completed;		    // displays how many weeks(pay periods) are being calculater  num_prds =

        val_yearly = (val_tot_pay_prd * payperiods);
        val_multiplier = (1 / payperiods);
//        document.getElementById('gross_w2').value = val_yearly;

        initdate = enddate.getDate();
        initmonth = enddate.getMonth();
		inityear = enddate.getFullYear();
        tempdate = (initdate - 13);

        if (tempdate <= 0) {
            month_minus_1 = (enddate.getMonth());
            val_date_minus_1_period.setMonth(month_minus_1, tempdate);
            val_date_minus_1_period.setYear(inityear);
        } else {
            val_date_minus_1_period.setDate(tempdate);
            val_date_minus_1_period.setMonth(initmonth);
            val_date_minus_1_period.setYear(inityear);
        }

        var dtStart2 = jQuery.format.date(val_date_minus_1_period, "MM/dd/yyyy");
        $('#start_date2').val(dtStart2);

    } else if ("monthly" == payPeriond) {
        payperiods = 12;
        payprds_completed = (val_week_diff * .23).toFixed(0);
        val_hourly_multiplier = 4;
        var val_tot_reg_pay_prd = val_hrs * val_rate * 4;
        var val_tot_ot_pay_prd = val_overtime_hrs * val_rate * 1.5;
        val_tot_pay_prd = val_tot_ot_pay_prd + val_tot_reg_pay_prd;		    											//Calculations- sum of pay including overtime
        val_tot_pay_ytd = payprds_completed * val_tot_pay_prd;

//        document.getElementById('main_ths_prd_amt').value = (val_tot_pay_prd).toFixed(2);
//        document.getElementById('gross_ytd').value = ((val_tot_pay_prd).toFixed(2));
        document.getElementById('num_prds').value = payprds_completed;							// displays how many weeks(pay periods) are being calculater

        val_yearly = (val_tot_pay_prd * payperiods);
        val_multiplier = (1 / payperiods);
//        document.getElementById('gross_w2').value = Cur_format(val_yearly);

        initdate = enddate.getDate();
        initmonth = enddate.getMonth();
        tempdate = (initdate - (daysInMonth(enddate.getMonth(), enddate.getFullYear())));

        if (tempdate <= 0) {
            //alert("it is minus");
            month_minus_1 = (enddate.getMonth());
            val_date_minus_1_period.setMonth(month_minus_1, tempdate);
            val_date_minus_1_period.setYear(inityear);
        } else {
            // alert("it is plus");
            val_date_minus_1_period.setDate(tempdate);
            val_date_minus_1_period.setMonth(initmonth);
            val_date_minus_1_period.setYear(inityear);
        }

        var dtStart2 = jQuery.format.date(val_date_minus_1_period, "MM/dd/yyyy");

        $('#start_date2').val(dtStart2);
    }

    var val_gross_hrs = val_hourly_multiplier * document.getElementById('gross_hrs').value;						//GROSS HOURS from form

    //federal taxes
    var val_yearly_temp = val_yearly;
    status = document.getElementById('emp_mar_status').value;

    if (status == 1) {
        while (val_yearly_temp > 0) {
            if (val_yearly_temp < 8700) {
                val_fed_tax = (val_yearly_temp * 0.1);
                break;
            }
            if (val_yearly_temp < 35350) {
                val_fed_tax = (val_yearly_temp - 8700) * .15 + 870;
                break;
            }
            if (val_yearly_temp < 85650) {
                val_fed_tax = (val_yearly_temp - 35350) * .25 + 4867.50;
                break;
            }
            if (val_yearly_temp < 178650) {
                val_fed_tax = (val_yearly_temp - 85650) * .28 + 17442.50;
                break;
            }
            if (val_yearly_temp < 388350) {
                val_fed_tax = (val_yearly_temp - 178650) * .33 + 43482.50;
                break;
            }
        }
    }

    if (status == 2) {
        while (val_yearly_temp > 0) {
            if (val_yearly_temp < 17400) {
                val_fed_tax = (val_yearly_temp * 0.1);
                break;
            }
            if (val_yearly_temp < 70700) {
                val_fed_tax = (val_yearly_temp - 17400) * .15 + 1740.00;
                break;
            }
            if (val_yearly_temp < 142700) {
                val_fed_tax = (val_yearly_temp - 70700) * .25 + 9735.00;
                break;
            }
            if (val_yearly_temp < 217450) {
                val_fed_tax = (val_yearly_temp - 142700) * .28 + 27350.00;
                break;
            }
            if (val_yearly_temp < 388350) {
                val_fed_tax = (val_yearly_temp - 217450) * .33 + 48665.00;
                break;
            }
            if (val_yearly_temp < 10000000) {
                val_fed_tax = (val_yearly_temp - 388350) * .35 + 105062.00;
                break;
            }
        }
    }

    if (status == 3) {
        while (val_yearly_temp > 0) {
            if (val_yearly_temp < 12400) {
                val_fed_tax = (val_yearly_temp * 0.1);
                break;
            }
            if (val_yearly_temp < 47350) {
                val_fed_tax = (val_yearly_temp - 12400) * .15 + 1240;
                break;
            }
            if (val_yearly_temp < 122300) {
                val_fed_tax = (val_yearly_temp - 47350) * .25 + 6482.00;
                break;
            }
            if (val_yearly_temp < 198050) {
                val_fed_tax = (val_yearly_temp - 122300) * .28 + 25220.00;
                break;
            }
            if (val_yearly_temp < 388350) {
                val_fed_tax = (val_yearly_temp - 198050) * .33 + 46430.00;
                break;
            }
            if (val_yearly_temp < 100000000) {
                val_fed_tax = (val_yearly_temp - 388350) * .35 + 109229.00;
                break;
            }
        }
    }

    val_fed_tax_prd = (val_commissions_prd * .25) + (val_multiplier * val_fed_tax);
//    document.getElementById('fed_amtincom').value = (val_fed_tax_prd.toFixed(2));						// YTD to form (BOX - federal income tax - PERIOD)

    val_fed_tax_ytd = (val_fed_tax) * (val_multiplier) * (payprds_completed) + (.25 * val_commissions_ytd);							//calculations      (calculated-fedtax)  * (weeks)
//    document.getElementById('fed_amtytd').value = (val_fed_tax_ytd.toFixed(2));   	//  to form   (BOX - Federal Income tax aomunt YTD)

    val_fica_medicare = (val_tot_pay_prd + val_commissions_prd) * 0.0145;
//    document.getElementById('medicare_prd').value = (val_fica_medicare.toFixed(2));  						// Main_form sent to

    val_fica_medicare_ytd = (val_tot_pay_ytd + val_commissions_ytd) * 0.0145;
    //val_fica_medicare_ytd= (val_fica_medicare)*(payprds_completed);
//    document.getElementById('medicare_ytd').value = (val_fica_medicare_ytd.toFixed(2));

    val_fica_social_security = (val_tot_pay_prd + val_commissions_prd) * 0.062;
//    document.getElementById('fica_social_prd').value = (val_fica_social_security.toFixed(2));			// master form screen

    val_fica_social_security_ytd = (val_tot_pay_ytd + val_commissions_ytd) * 0.062;
//    document.getElementById('fica_social_ytd').value = (val_fica_social_security_ytd.toFixed(2));

    var val_401k = document.getElementById('val_401k').value;
    if (val_401k >= 0) {
        temp_401k = ((val_401k * 0.01) * (val_tot_pay_prd)).toFixed(2);
        ;
        document.getElementById('val_401k_prd').value = temp_401k;					                                //main form
      // document.getElementById('val_401k_prd').value = 33333;
	    document.getElementById('val_401k_ytd').value = (temp_401k * payprds_completed).toFixed(2);					//main form
    }

    // UNion deductions
     union_dues = document.getElementById('union_dues').value;
	;
    if (union_dues > 0) {
        temp_dues = ((union_dues * 0.01) * (val_tot_pay_prd)).toFixed(2);
        ;
        document.getElementById('union_dues_prd').value = temp_dues;					                                
		//document.getElementById('union_dues_prd').value = 555;	
        document.getElementById('union_dues_ytd').value = (temp_dues * payprds_completed).toFixed(2);					//main form
    }

    // commisions
    val_commissions_prd = parseFloat(document.getElementById('commission_prd').value);						//GROSS HOURS from form
    val_commissions_ytd = parseFloat(document.getElementById('commission_ytd').value);						//GROSS HOURS from form

    // GARNISHMENT DEDUCTIONS
    var val_garnish1 = document.getElementById('garnish1').value;
    var val_garnish2 = document.getElementById('garnish2').value;
    var val_garnish3 = document.getElementById('garnish3').value;

    tot_garnish_prd = (parseInt(val_garnish1) + parseInt(val_garnish2) + parseInt(val_garnish3));
    tot_garnish_ytd = (parseInt(tot_garnish_prd * payprds_completed));

    val_total_deduct = (((val_multiplier * val_fed_tax))) + (val_fica_medicare) + (val_fica_social_security) + (state_tax * val_multiplier);
//    document.getElementById('ded_this_prd').value = (val_total_deduct).toFixed(2);									//sent to main form

    val_total_deduct_ytd = (val_multiplier * val_fed_tax * payprds_completed) + (val_fica_medicare_ytd) + (val_fica_social_security_ytd) + (state_tax * val_multiplier * payprds_completed);
//    document.getElementById('ded_ytd').value = val_total_deduct_ytd.toFixed(2);										//sent to main form

    //net pay PRD
    val_net_pay = (val_tot_pay_prd) + (val_commissions_prd) - (val_total_deduct) - (tot_garnish_prd);
//	document.getElementById('net_pay_prd').value = (val_net_pay.toFixed(2));											//sent to main form
	
    val_net_pay1 = (((val_tot_pay_prd + val_commissions_ytd) - (val_total_deduct) - (tot_garnish_prd)) * payprds_completed).toFixed(2);
//    document.getElementById('net_pay_ytd').value = val_net_pay1;							//needs to be multiplied by time at work, not 12 CORRECTION   #### only works for week_diff  maybe change to prds?	
    
	val_net_pay2 = (val_yearly) - (val_total_deduct_ytd);
//    document.getElementById('net_pay_w2_tot').value = ((val_net_pay2).toFixed(2));

    state_select(document.getElementById('emp_state').value);

	//var val_check_num = document.getElementById('check_num').value;
} // end of calcTaxes()

