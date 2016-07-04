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
var union_dues_prd = 0;
var val_emp_state_c = "";
var val_date_minus_1_period = new Date();
var month_minus_1 = 0;
var initdate = 0;
var tempdate = 0;
var initmonth = 0;
var payperiods = 0;
var	val_commissions_prd = 0;
var	val_commissions_ytd = 0;
var state_abbv = "";
var val_hourly_multiplier = 0;
var startyear = 0;
var tot_garnish_prd = 0;
var tot_garnish_ytd = 0;
var val_net_pay = 0;
var status = 1;


function calcTaxes(){
    var val_tot_pay_ytd = 0;

    var val_tot_pay_ytd = 0;
//_____________________________________________________________________________________________________________________________________
//   DATE AREA
    var val_strtdate = $('#start_date').value; 				    //DATE START DATE
    if (startyear < 2013){
        val_strtdate = '01/01/2013';
        //alert ("startyear = " + startyear);
        startweek = -1;
    }

    var val_hiredate = $('#start_date').val();
    var val_strtdate_one = $('#start_date').val();			        // Start date Month
    var val_enddate_one= $('#end_date').val();					// End Date Month
    var val_week_diff = (endweek - startweek);
        //Calculations - From script on main_form
    var val_month_diff = (endmonth - startmonth);
    var	  val_pay_rate = $('#gross_rate').val();
      document.getElementById('gross_ot_rate').value  = ((1.5 * val_pay_rate).toFixed(2))+" /hr";
    						//GROSS RATE from form
    var   val_overtime_hrs= $('#ot_hrs').val();

    var	 val_hrs= $('#gross_hrs').val();								//Calculations
    var	 val_rate= $('#gross_rate').val();								//Calculations

    var   val_overtime_hrs= $('#ot_hrs').value;						//GROSS OVERTIME


    var	 val_hrs= $('#gross_hrs').value;								//Calculations
    var	 val_rate= $('#gross_rate').value;								//Calculations
    val_hrs=(val_hrs);															//Calculations
    val_rate=(val_rate);														//Calculations

    var payPeriond = $("#main_form input:radio[name=payfreq]:checked").val();

    if ( "weekly" == payPeriond){ // if PAID WEEKLY
        payperiods = 52;
        val_hourly_multiplier = 1;
        var payprds_completed = val_week_diff;

        var  val_tot_reg_pay_prd = val_hrs * val_rate;
        var  val_tot_ot_pay_prd = val_overtime_hrs * val_rate*1.5;
        val_tot_pay_prd = val_tot_ot_pay_prd + val_tot_reg_pay_prd;		    											//Calculations- sum of pay including overtime
        val_tot_pay_ytd = payprds_completed * val_tot_pay_prd;

        $('#main_ths_prd_amt').val( (val_tot_pay_prd).toFixed(2) );
        $('#gross_ytd').val(val_tot_pay_ytd.toFixed(2));
        $('#num_prds').val(payprds_completed);

        val_yearly= (val_tot_pay_prd * payperiods);
        val_multiplier = 1/payperiods;
        $('#gross_w2').value= val_yearly;

        initdate = enddate.getDate();           //the day of the ENDDATE
        initmonth= enddate.getMonth();
        inityear = enddate.getFullYear();
        tempdate = (initdate - 6);

        if (tempdate<=0){
            month_minus_1 = (enddate.getMonth());
            //alert ("endmonth get month = " + enddate.getMonth());
            //alert (month_minus_1);
            val_date_minus_1_period.setMonth(month_minus_1,tempdate);
            val_date_minus_1_period.setYear(inityear);
        }else{
            //alert ("endYEAR = " + enddate.getFullYear());
            //alert (month_minus_1);
            // alert ("valdate = "+val_date_minus_1_period);
            // alert ("tempdate = "+tempdate);
            val_date_minus_1_period.setDate(tempdate);
            val_date_minus_1_period.setMonth(initmonth);
            val_date_minus_1_period.setYear(inityear);
        }

        var dtStart2 = jQuery.format.date(val_date_minus_1_period, "MM/dd/yyyy");
        /// $('#corp_start_date2').html(dtStart2);


    }else if("biweekly" == payPeriond){
        payperiods = 26;
        payprds_completed = (Math.floor(val_week_diff*0.5));
        val_hourly_multiplier = 2;

        var  val_tot_reg_pay_prd = val_hrs * val_rate  * 2;
        var  val_tot_ot_pay_prd = val_overtime_hrs * val_rate*1.5  * 2;
        val_tot_pay_prd = val_tot_ot_pay_prd + val_tot_reg_pay_prd;		    											//Calculations- sum of pay including overtime
        val_tot_pay_ytd = payprds_completed * val_tot_pay_prd;

        document.getElementById('main_ths_prd_amt').value= (val_tot_pay_prd).toFixed(2);							// Sending calculated gross rate to MAIN FORM
        document.getElementById('gross_ytd').value= (val_tot_pay_ytd.toFixed(2));
        document.getElementById('num_prds').value =  payprds_completed;		    // displays how many weeks(pay periods) are being calculater

        val_yearly= (val_tot_pay_prd*payperiods);
        val_multiplier = (1/payperiods);
        document.getElementById('gross_w2').value= val_yearly;

        initdate = enddate.getDate();
        initmonth= enddate.getMonth();
        tempdate = (initdate - 13);

        if (tempdate<=0){
            month_minus_1 = (enddate.getMonth()) ;
            val_date_minus_1_period.setMonth(month_minus_1,tempdate);
            val_date_minus_1_period.setYear(inityear);
        }else{
            val_date_minus_1_period.setDate(tempdate);
            val_date_minus_1_period.setMonth(initmonth);
            val_date_minus_1_period.setYear(inityear);
        }

        var dtStart2 = jQuery.format.date(val_date_minus_1_period, "MM/dd/yyyy");
        /// $('#corp_start_date2').html(dtStart2);

    }else if("monthly" == payPeriond){
        payperiods = 12;
        payprds_completed = (val_week_diff*.23).toFixed(0);
        val_hourly_multiplier = 4;
        var  val_tot_reg_pay_prd = val_hrs * val_rate * 4;
        var  val_tot_ot_pay_prd = val_overtime_hrs * val_rate*1.5;
        val_tot_pay_prd = val_tot_ot_pay_prd + val_tot_reg_pay_prd;		    											//Calculations- sum of pay including overtime
        val_tot_pay_ytd = payprds_completed * val_tot_pay_prd;

        document.getElementById('main_ths_prd_amt').value= (val_tot_pay_prd).toFixed(2);
        document.getElementById('gross_ytd').value= ((val_tot_pay_prd).toFixed(2));
        document.getElementById('num_prds').value =  payprds_completed;							// displays how many weeks(pay periods) are being calculater

        val_yearly= (val_tot_pay_prd * payperiods);
        val_multiplier = (1 / payperiods);
        document.getElementById('gross_w2').value= Cur_format(val_yearly);

        initdate = enddate.getDate();
        initmonth= enddate.getMonth();
        tempdate = (initdate - (daysInMonth(enddate.getMonth(), enddate.getFullYear())));

        if (tempdate<=0){
            //alert("it is minus");
            month_minus_1 = (enddate.getMonth()) ;
            val_date_minus_1_period.setMonth(month_minus_1,tempdate);
            val_date_minus_1_period.setYear(inityear);
        }else{
            // alert("it is plus");
            val_date_minus_1_period.setDate(tempdate);
            val_date_minus_1_period.setMonth(initmonth);
            val_date_minus_1_period.setYear(inityear);
        }

        var dtStart2 = jQuery.format.date(val_date_minus_1_period, "MM/dd/yyyy");
        /// $('#corp_start_date2').html(dtStart2);
    }

    var	  val_gross_hrs = val_hourly_multiplier * document.getElementById('gross_hrs').value;						//GROSS HOURS from form

    //federal taxes
    var val_yearly_temp = val_yearly;
    status = document.getElementById('emp_mar_status').value;

    if(status == 1){
        while (val_yearly_temp > 0){
            if(val_yearly_temp < 8700){
                val_fed_tax =  (val_fed_tax * 0.1);
                break;
            }
            if(val_yearly_temp < 35350){
                val_fed_tax = (val_yearly_temp - 8700)*.15 + 870;
                break;
            }
            if(val_yearly_temp < 85650){
                val_fed_tax = (val_yearly_temp - 35350)*.25 + 4867.50;
                break;
            }
            if(val_yearly_temp < 178650){
                val_fed_tax = (val_yearly_temp - 85650)*.28 + 17442.50;
                break;
            }
            if(val_yearly_temp < 388350){
                val_fed_tax = (val_yearly_temp - 178650)*.33 + 43482.50;
                break;
            }
        }
    }

    if(status == 2){
        while (val_yearly_temp >0){
            if(val_yearly_temp < 17400){
                val_fed_tax =  (val_fed_tax * 0.1);
                break;
            }
            if(val_yearly_temp < 70700){
                val_fed_tax = (val_yearly_temp - 17400)*.15 + 1740.00;
                break;
            }
            if(val_yearly_temp < 142700){
                val_fed_tax = (val_yearly_temp - 70700)*.25 + 9735.00;
                break;
            }
            if(val_yearly_temp < 217450){
                val_fed_tax = (val_yearly_temp - 142700)*.28 + 27350.00;
                break;
            }
            if(val_yearly_temp < 388350){
                val_fed_tax = (val_yearly_temp - 217450)*.33 + 48665.00;
                break;
            }
            if(val_yearly_temp < 10000000){
                val_fed_tax = (val_yearly_temp - 388350)*.35 + 105062.00;
                break;
            }
        }
    }

    if(status == 3){
        while (val_yearly_temp >0){
            if(val_yearly_temp < 12400){
                val_fed_tax =  (val_fed_tax * 0.1);
                break;
            }
            if(val_yearly_temp < 47350){
                val_fed_tax = (val_yearly_temp - 12400)*.15 + 1240;
                break;
            }
            if(val_yearly_temp < 122300){
                val_fed_tax = (val_yearly_temp - 47350)*.25 + 6482.00;
                break;
            }
            if(val_yearly_temp < 198050){
                val_fed_tax = (val_yearly_temp - 122300)*.28 + 25220.00;
                break;
            }
            if(val_yearly_temp < 388350){
                val_fed_tax = (val_yearly_temp - 198050)*.33 + 46430.00;
                break;
            }
            if(val_yearly_temp < 100000000){
                val_fed_tax = (val_yearly_temp - 388350)*.35 + 109229.00;
                break;
            }
        }
    }

    val_fed_tax_prd = (val_commissions_prd * .25)+(val_multiplier*val_fed_tax);
    document.getElementById('fed_amtincom').value= (val_fed_tax_prd.toFixed(2));						// YTD to form (BOX - federal income tax - PERIOD)

    val_fed_tax_ytd= (val_fed_tax)*(val_multiplier)*(payprds_completed)+(.25 * val_commissions_ytd);							//calculations      (calculated-fedtax)  * (weeks)
    document.getElementById('fed_amtytd').value= (val_fed_tax_ytd.toFixed(2));   	//  to form   (BOX - Federal Income tax aomunt YTD)

    val_fica_medicare= (val_tot_pay_prd+val_commissions_prd)*0.0145;
    document.getElementById('medicare_prd').value= (val_fica_medicare.toFixed(2));  						// Main_form sent to

    val_fica_medicare_ytd= (val_tot_pay_ytd+val_commissions_ytd)*0.0145;
    //val_fica_medicare_ytd= (val_fica_medicare)*(payprds_completed);
    // document.getElementById('medicare_ytd').value= (val_fica_medicare_ytd.toFixed(2));

    val_fica_social_security= (val_tot_pay_prd+val_commissions_prd)*0.062;
    document.getElementById('fica_social_prd').value= (val_fica_social_security.toFixed(2));			// master form screen

    val_fica_social_security_ytd= (val_tot_pay_ytd+val_commissions_ytd)*0.062;
    document.getElementById('fica_social_ytd').value= (val_fica_social_security_ytd.toFixed(2));

    var val_401k = document.getElementById('val_401k').value;
    if (val_401k >= 0){
        temp_401k=((val_401k*0.01)*(val_tot_pay_prd)).toFixed(2);;
        document.getElementById('val_401k_prd').value = temp_401k;					                                //main form
        document.getElementById('val_401k_ytd').value = (temp_401k*payprds_completed).toFixed(2);					//main form
    }

    // UNion deductions
    var union_dues = document.getElementById('union_dues_prd').value;
    if (union_dues > 0){
        temp_dues=((union_dues*0.01)*(val_tot_pay_prd)).toFixed(2);;
        document.getElementById('union_dues_prd').value = temp_dues;					                                //main form
        document.getElementById('union_dues_ytd').value = (temp_dues*payprds_completed).toFixed(2);					//main form
    }

    // commisions
    val_commissions_prd = parseFloat(document.getElementById('commission_prd').value);						//GROSS HOURS from form

    val_commissions_ytd = parseFloat(document.getElementById('commission_ytd').value);						//GROSS HOURS from form

    // GARNISHMENT DEDUCTIONS
    var val_garnish1 = document.getElementById('garnish1').value;
    var val_garnish2 = document.getElementById('garnish2').value;
    var val_garnish3 = document.getElementById('garnish3').value;

      tot_garnish_prd = (parseInt(val_garnish1) + parseInt(val_garnish2) + parseInt(val_garnish3));
      tot_garnish_ytd = (parseInt(tot_garnish_prd*payprds_completed));

    val_total_deduct = (((val_multiplier*val_fed_tax)))+(val_fica_medicare)+(val_fica_social_security) + (state_tax*val_multiplier);
      document.getElementById('ded_this_prd').value =  (val_total_deduct).toFixed(2);									//sent to main form

    val_total_deduct_ytd = (val_multiplier*val_fed_tax*payprds_completed)+ (val_fica_medicare_ytd)+(val_fica_social_security_ytd) + (state_tax*val_multiplier*payprds_completed);
      document.getElementById('ded_ytd').value=  val_total_deduct_ytd.toFixed(2);										//sent to main form

    //net pay PRD
    val_net_pay=(val_tot_pay_prd)+(val_commissions_prd)-(val_total_deduct)-(tot_garnish_prd);
      document.getElementById('net_pay_prd').value=  (val_net_pay.toFixed(2));

    val_net_pay1=(((val_tot_pay_prd + val_commissions_ytd)-(val_total_deduct)-(tot_garnish_prd))*payprds_completed).toFixed(2);
      document.getElementById('net_pay_ytd').value= val_net_pay1;							//needs to be multiplied by time at work, not 12 CORRECTION   #### only works for week_diff  maybe change to prds?

    val_net_pay2=(val_yearly)-(val_total_deduct_ytd);
      document.getElementById('net_pay_w2_tot').value = ((val_net_pay2).toFixed(2));

    var	 val_check_num = document.getElementById('check_num').value;
} // end of calcTaxes()