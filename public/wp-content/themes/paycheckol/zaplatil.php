<?php /*Template Name: Zaplatil*/?>
       
<?php get_header(); ?>
 <link rel="stylesheet" type="text/css" href="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/css/form-zaplatil.css">
<?php //get_template_part('includes/breadcrumbs'); ?>
<?php get_template_part('includes/top_info'); ?>
<div id="content" class="clearfix fullwidth">
<div id="left-area">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry post clearfix">			
 <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/jquery.dateFormat-1.0.js" type="text/javascript"></script>
 	       <!-- Include Styles -->


<!--  <div id="tabbed-nav" data-role="z-tabs" data-theme="red">   -->
<script>
 $(function () {
        $("#tabs").tabs({
			 select: function(event, ui) {
				 
            //beforeActivate: function (event, ui) {
				//alert("validating");
				if (!validate()){
					//alert("somethings missing on INFO page");
					return false;
				}else{
					//alert("validated");
					getdata();
				}
			//	$("#tabs").tabs('select', '#neat_paystub');
			//$( ".selector" ).tabs( "option", "active", 3 );
				
            }
        });
    });	
	
</script>

	<div id="note">
	   <span>THANK YOU FOR YOUR PURCHASE</span> <br /> - FOR YOUR SECURITY - WE DO NOT KEEP ANY RECORDS - NO PAYPAL - NO ADDRESS - NO NUMBERS - 
		THIS IS FOR YOUR SECURITY - THIS IS A TOOL FOR YOUR USE ONLY TO CREATE PAYSTUBS OF EARNED INCOME - WE DO NOT CONDONE ANY FALSE REPORTING<br />
        <span style="color:red">PLEASE RE-ENTER YOUR INFO - and PRINT</span> <br />
        FOR PROBLEMS --<span style="color:GREY">CONTACT@PAYCHECKSTUBONLINE.COM</span> 
        -- RESPONSE IN 6 HRS OR IT'S <span style="color:red">FREE</span> <br /> <br />
	</div>


<div id="tabs">
  <ul>
   <!-- <li><a>Your INFO</a></li>   -->
    <li><a href="#main_form">Your INFO</a></li>
	<li><a href="#corporate-test">Corporate Paystub</a></li>
	<li><a href="#basic_paystub">Basic Paystub</a></li>                           
	<li><a href="#neat_paystub">Neat Paystub</a></li>
    <li><a href="#Tstub">T-Stub</a></li>
    <li><a href="#Modern">Modern</a></li>
   	<li><a href="#stub3">Contemporary</a></li>
	<li><a href="#w2">W-2 IRS</a></li>                           
	<li><a href="#1099">1099</a></li>
  </ul>

	
    <div id="main_form">
          <h2>--- Fill in ONLY  <span style="background:yellow">YELLOW</span></span> boxes ---</h2>
          <p>		         
          <form action="http://www.paycheckstubonline.com/wp-content/themes/Chameleon/pdf/payments.php" name="form1" method="post" style="margin:0">
               <input type="hidden" name="cmd" value="_xclick" />         
                 <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                   <tr>
                     <td width="205" height="177" valign="top">  
                       <table class="nettable" width="205" cellspacing="0" cellpadding="0" border="0">
                       <tbody>
                        <tr><td></td></tr>
                        <tr>
                         <td class="border-radius" valign="top">
                          <table width="200" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <tr>
                                  <td colspan="2" class="head">Employee's Detail  --#1--</td></tr>
                                    <tr>
                                       <td><table width="210" cellspacing="0" cellpadding="0" border="0">
                                          <tbody>
                                            <tr><td><input type="text" id="emp_id" placeholder="Employee ID" onKeyUp="getdata()" name="emp_id" tabindex="1" value="Employee ID" onFocus="if (this.value == 'Employee ID') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee ID';}"/></td></tr> 
                                            <tr><td><input type="text" id="emp_f_name" placeholder="Employee First Name" name="emp_f_name" tabindex="2" value="Employee First Name" onFocus="if (this.value == 'Employee First Name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee First Name';}"/></td></tr>
                                            <tr><td><input type="text" id="emp_l_name" placeholder="Employee Last Name" name="emp_l_name" tabindex="3" value="Employee Last Name" onFocus="if (this.value == 'Employee Last Name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee Last Name';}"/></td></tr>
                                            <tr><td><input type="text" id="emp_street" placeholder="Employee Street Address" name="emp_street" tabindex="4" value="Employee Street Address" onFocus="if (this.value == 'Employee Street Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee Street Address';}"/></td></tr>
                                            <tr><td><input type="text" id="emp_city" placeholder="Employee City" name="emp_city" tabindex="5" value="Employee City" onFocus="if (this.value == 'Employee City') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee City';}"/></td></tr>
                                            <tr><td><select id="emp_state" name="emp_state" onchange="getdata()" onblur="getdata()" style="width:170px" value="none" tabindex="6">
                                              <option value="">Select State</option>
                                              <option value="0">Alabama</option>
                                              <option value="1">Alaska</option>
                                              <option value="2">Arizona</option>
                                              <option value="3">Arkansas</option>
                                              <option value="4">California</option>
                                              <option value="5">Colorado</option>
                                              <option value="6">Connecticut</option>
                                              <option value="7">Delaware</option>
                                              <option value="8">District Of Columbia</option>
                                              <option value="9">Florida</option>
                                              <option value="10">Georgia</option>
                                              <option value="11">Hawaii</option>
                                              <option value="12">Idaho</option>
                                              <option value="13">Illinois</option>
                                              <option value="14">Indiana</option>
                                              <option value="15">Iowa</option>
                                              <option value="16">Kansas</option>
                                              <option value="17">Kentucky</option>
                                              <option value="18">Louisiana</option>
                                              <option value="19">Maine</option>
                                              <option value="20">Maryland</option>
                                              <option value="21">Massachusetts</option>
                                              <option value="22">Michigan</option>
                                              <option value="23">Minnesota</option>
                                              <option value="24">Mississippi</option>
                                              <option value="25">Missouri</option>
                                              <option value="26">Montana</option>
                                              <option value="27">Nebraska</option>
                                              <option value="28">Nevada</option>
                                              <option value="29">New Hampshire</option>
                                              <option value="30">New Jersey</option>
                                              <option value="31">New Mexico</option>
                                              <option value="32">New York</option>
                                              <option value="33">North Carolina</option>
                                              <option value="34">North Dakota</option>
                                              <option value="35">Ohio</option>
                                              <option value="36">Oklahoma</option>
                                              <option value="37">Oregon</option>
                                              <option value="38">Pennsylvania</option>
                                              <option value="39">Rhode Island</option>
                                              <option value="40">South Carolina</option>
                                              <option value="41">South Dakota</option>
                                              <option value="42">Tennessee</option>
                                              <option value="43">Texas</option>
                                              <option value="44">Utah</option>
                                              <option value="45">Vermont</option>
                                              <option value="46">Virginia</option>
                                              <option value="47">Washington</option>
                                              <option value="48">West Virginia</option>
                                              <option value="49">Wisconsin</option>
                                              <option value="50">Wyoming</option>
                                     </select></td></tr>
                                            <tr><td><input type="text" id="emp_zip" placeholder="Employee Zipcode" name="emp_zip" tabindex="7" value="Employee Zipcode" onFocus="if (this.value == 'Employee Zipcode') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee Zipcode';}"/></td></tr>
                                            <tr><td><input type="text" id="emp_ssn" placeholder="Social Security Number" name="emp_ssn" tabindex="8" value="Social Security Number" onFocus="if (this.value == 'Social Security Number') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Social Security Number';}"/></td></tr>
                                             
                                          </tbody>
                                         </table>
                                       </td>
                                    </tr>
                                    <tr>
                                  <td></td>
                                </tr>
                             </tbody>
                           </table>
                         </td>
                        </tr>
                      </tbody>
                     </table>
                    
                    </td>
                    
                    <td width="213" valign="top">
                      <table class="nettable" width="205" cellspacing="0" cellpadding="0" border="0">
                         <tbody>
                            <tr>
                              <td class="border-radius" valign="top" colspan="2">
                                <table width="185" border="0" cellspacing="0" cellpadding="0">
                                  <td class="head">Where to send PREVIEW? </td>
                                   <tbody>  
                                      <tr><td><input type="text" id="emp_email" placeholder="Email @ Address" name="emp_email" tabindex="9" value="Email @ Address" onFocus="if (this.value == 'Email @ Address') {this.value = '';}" onblur="ValidateEmail()" class="bigger-wide"  /></td></tr>
                                   </tbody>
                                </table>
                              </td>
                           </tr>
                         </tbody>
                        </table>
                 
                      <table class="nettable" width="205" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                          <tr>
                              <td class="border-radius" valign="top" colspan="2">
                                <table width="185" border="0" cellspacing="0" cellpadding="0">
                                    <td class="head">Company Details  --#2--</td>
                                   <tbody>  
                                     <tr><td><input type="text" id="empr_add_name" name="empr_add_name" placeholder="Company name" tabindex="10" value="Company name" onFocus="if (this.value == 'Company name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Company name';}"/></td></tr>
                                     <tr><td><input type="text" id="empr_add_street" name="empr_add_street" placeholder="Company Address" tabindex="11" value="Company Address" onFocus="if (this.value == 'Company Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Company Address';}"/></td></tr>
                                     <tr><td><input type="text" id="empr_add_city" name="empr_add_city" placeholder="Company City" tabindex="12" value="Company City" onFocus="if (this.value == 'Company City') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Company City';}"/></td></tr>
                                     <tr><td><input type="text" id="empr_add_state" placeholder="Company State" name="empr_add_state" tabindex="13" value="Company State" onFocus="if (this.value == 'Company State') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Company State';}"/><tr><td>
                              <!--       <tr><td><input type="text" id="empr_add_state" name=" " placeholder="State" tabindex="13" value="State" onFocus="if (this.value == 'State') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'State';}"/></td></tr>
                               -->      <tr><td><input type="text" id="empr_add_zip" name="empr_add_zip" placeholder="Zip Code" tabindex="14" value="Zip Code" onFocus="if (this.value == 'Zip Code') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Zip Code';}"/></td></tr>
                                   </tbody>
                                </table>
                              </td>
                          </tr>
                       </tbody>
                      </table>
                    </td>
                      
                    <td width="214" valign="top">
                      
        		           <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                            <td class="border-radius">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                   <tbody>
                                    <tr>
                                      <td>
                                        <table width="2" cellspacing="0" cellpadding="0" border="0">
                                          <tbody>
                                             <tr>
                                              <td colspan="2" class="head">Work Hours & Hourly Rate -#3-</td></tr>
                                               <tr>
                                               <td>
                                                <table width="185" cellspacing="0" cellpadding="0" border="0">
                                                 <tbody>
                                                  <tr><td><input placeholder="31200" type="text" class="shorter_box currency bigger-narrow" id="input_yearly_gross" onKeyUp="convert_yearly_hourly(input_yearly_gross.value)" name="input_yearly_gross" tabindex="15" value="31200" onFocus="if (this.value == 'input_yearly_gross') {this.value = '';}" onBlur="if (this.value == '') {this.value = '31,200';}"/></td><td>$/Year</td></tr>
                                                  <tr><td colspan="2"><center> <h2>------  OR  ------</h2></center></td></tr>
                                                 
                                                  <tr><td><input placeholder="Regular Hours:" type="text" class="shorter_box currency" id="gross_hrs"  name="gross_hrs" tabindex="16" value="40" onKeyUp="convert_hourly_yearly(gross_hrs, gross_rate, ot_hrs)" onFocus="if (this.value == 'Regular Hours:') {this.value = '';}" onBlur="if (this.value == '') {this.value = '40';}"/></td><td>Hrs/Week</td></tr>
                                                  <tr><td><input placeholder="Pay Rate per hour:" type="text" class="shorter_box" id="gross_rate"  name="gross_rate" tabindex="17" value="15" onFocus="if (this.value == 'Pay Rate per hour:') {this.value = '';}" onBlur="if (this.value == '') {this.value = '15';}" /></td><td>$/Hour</td></tr>
                                                  <tr><td><input placeholder="Over Time Hrs (1.5 pay)" type="text" class="shorter_box" id="ot_hrs" name="ot_hrs" onKeyUp="convert_hourly_yearly(gross_hrs, gross_rate, ot_hrs)"  tabindex="18" value= "0" onBlur="if (this.value == '') {this.value = 0;}"/></td><td>Overtime</td></tr>
                                                 </tbody>
                                                </table>
                                               </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                     </td>
                                     <td>&nbsp;</td>
                                   </tr>
                                </tbody>
                              </table>
                            </td>
                           </tr>
                          </tbody>
                         </table>
                      
                      
                      </td> 
                      
                      
              	
                   
                    <td width="260" valign="top">
                      <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                           <tbody>
                           <tr>
                            <td></td>
                           </tr>
                           <tr>
                            <td class="border-radius">
                              <table width="205" cellspacing="0" cellpadding="0" border="0">
                               <tbody>
                                <tr>
                                  <td>
                                    <table width="185" cellspacing="0" cellpadding="0" border="0">
                                     <tbody>
                                         <tr>
                                             <td colspan="2" class="head">HIRED -PAYED - PRINT Date #4</td>
                                                </tr>
                                                <tr>
                                                	<td>.</td>
                                                </tr>
                                                <tr>
                                                   <td>&nbsp;</td>
                                                </tr>
                                                                     
                                                <tr>
                                                    <td><input type="text" class='datepicker shorter_box' id="start_date" name="emp_sdate" placeholder="Start Date" tabindex="19" value="Hire Date" onFocus="if (this.value == 'Hire Date') {this.value = '';}" onchange="if (this.value == '') {this.value = '01/01/2013'; getdata();}" title="Select your HIRE DATE - When were you employed at this company - it's for YTD calculations"/></td>
                                                    <td>HIRED Date</td>
                                                </tr>
                                                <tr>
                                                     <td><input type="text" class='shorter_box datepicker' id="end_date" name="emp_edate" placeholder="End Date" tabindex="20" value="End of Pay Period" onFocus="if (this.value == 'End of Pay Period') {this.value = '';}" onchange="if (this.value == '') {this.value = 'End of Pay Period'; getdata();}" title="  VERY IMPORTANT - This is the date of your LAST PAY PERIOD.  Usually Friday, or Sunday Midnight.  Whatever.  We will calculate backwards depending on how often you get paid, i.e. weekly, monthly, etc"/></td>
                                                     <td>PAYED Date</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">________________________</td>
                                                </tr>
                                                
                                                
                                                <tr>
                                                    <td># pay period (auto)</td>
                                                    <td><input type="text" class="short_box no_edit" id="num_prds" name="num_prds" placeholder="----" value="----" readonly="readonly" onFocus="if (this.value == '--#--') {this.value = '';}" onBlur="if (this.value == '') {this.value = '----';}" title="Do NOT fill this in - it is calculated From the Dates you entered above and below, this is how many Pay Stubs you will have this year"/></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">________________________</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                     <td><input type="text" class='shorter_box datepicker' id="pay_date" name="emp_pdate" placeholder="Pay Date" tabindex="21" value="Pay date for Stub" onFocus="if (this.value == 'Pay date for Stub') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Pay date for Stub'; getdata();}" title="Date Check is printed by the Accounting Department.  So, if you are paid on Friday, this date might be the following Friday, or the Following Monday - NEVER before Pay Date"/></td>
                                                     <td>PRINT Date</td>
                                                </tr>
                                             </tr>
                                      </tbody>
                                  </table>
                                  </td>
                                </tr>
                               </tbody>
                              </table>
                             </td>
                           </tr>
                           <tr>
                            <td></td>
                           </tr>
                         </tbody>
                      </table>
          
      				</td>

                    <tr>
                       <td>
                      
                       <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                                   <tbody>  
                                      <tr>
                                        <td class="jf">
                                           <table width="205" cellspacing="0" cellpadding="0" border="0">
                                              <tbody>
                                                <tr>
                                                   <td class="border-radius">
                                                      <table width="170" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                          <tr>
                                                            <td class="head">Filing Status --#5--</td>
                                                          </tr>
                                                          <tr>
                                                            <td>
                                                              <table width="200" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                 <tr>
                                                                     <td>
                                                                      <center>
                                                                        <select id="emp_mar_status" name="emp_mar_status" tabindex="22" onblur="getdata()" value="0">
                                                                          <option value="1">Status for Tax</option>
                                                                          <option value="1">Single</option>
                                                                          <option value="2">Married filing Jointly</option>
                                                                          <option value="3">Head of Household</option>
                                                                        </select>
                                                                      </center>
                                                                   </td>
                                                                 </tr>
                                                                 
                                                               </tbody>
                                                             </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                  </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                      </td>
                                  </tr>    
                              </tbody>
                          </table>
                      
                       </td>
      
                       <td>
                        
                        <table cellpadding="2" cellspacing="2" border="0">
                       <tr>
                        <td width="207" valign="top">
                         
                         <table class="nettable" width="185" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                               <tr>
                                 <td  class="border-radius"> 
                                     <table width="185" cellspacing="0" cellpadding="0" border="0">
                                            <td class="head">How often are you paid? --#6--</td>
                                          <tr>
                                            <td>
                                              <table style=" float: left; margin-left: 10px; " width="140" cellspacing="0" cellpadding="0" border="0">
                                               <tbody>
                                                <tr>
                                                  <td><input type="radio" name="payfreq" value="weekly" id="pfweekly" onchange="getdata()" checked="checked" tabindex="23"/></td>
                                                  <td>Weekly</td>
                                                </tr>
      
                                                <tr>  
                                                  <td><input type="radio" name="payfreq" value="biweekly" id="pfbiweekly" onchange="getdata()" tabindex="24" /></td>
                                                  <td>Bi-Weekly </td>
                                                </tr>  
      
                                                <tr>
                                                  <td><input type="radio" name="payfreq" value="monthly" id="pfmonthly" onchange="getdata()" tabindex="25"/></td>
                                                  <td>Monthly </td>
                                                </tr>
                                               </tbody>
                                            </table>
                                           </td>
                                         </tr>
                                   </table>
                                 </td>
                               </tr>
                            </tbody>
                      </table>
                         
                        </td>
                      </tr>
                      <tr>
                        <td>
                         
                          
                         
                        </td>	
                      </tr>
                    </table>
                        
                       </td>
      
                       <td>
                    <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                                   <tbody>  
                                      <tr>
                                        <td>
                                           <table width="205" cellspacing="0" cellpadding="0" border="0">
                                              <tbody>
                                                <tr>
                                                   <td class="border-radius">
                                                      <table width="180" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                          <tr>
                                                            <td class="head">401K RETIREMENT (optional)</td>
                                                          </tr>
      
                                                          <tr>
                                                            <td>
                                                              <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                 <tr>
                                                                     <td>
                                                                      <input placeholder="Enter % here" type="text" class="shorter_box" tabindex="26" name="val_401k" onKeyUp="getdata()" id="val_401k">
                                                                     </td><td>% Percent</td>
                                                                 </tr>
                                                                 <tr>
                                                                    <td>
                                                                      <input placeholder="AUTOMATIC" type="text" class="shorter_box no_edit" name="val_410k_prd" onKeyUp="getdata()" id="val_401k_prd" readonly="readonly">
                                                                    </td><td>$ W/hld each stub</td>
                                                                 </tr>
                                                                 <tr>
                                                                    <td>
                                                                      <input placeholder="AUTOMATIC" type="text" class="shorter_box no_edit" name="val_410k_ytd" onKeyUp="getdata()" id="val_401k_ytd" readonly="readonly">
                                                                    </td><td>$ YTD total</td>
                                                                 </tr>
                                                               </tbody>
                                                             </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                  </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                      </td>
                                  </tr>    
                              </tbody>
                          </table>
                             
                      </td>
                      <td>
                       <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                             <tbody>  
                                  <tr>
                                    <td class="jf">
                                           <table width="205" cellspacing="0" cellpadding="0" border="0">
                                              <tbody>
                                                <tr>
                                                   <td class="border-radius">
                                                      <table width="210" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                          <tr>
                                                            <td class="head">Union Dues (optional)</td>
                                                          </tr>
                                                          <tr>
                                                            <td>
                                                              <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                 <tr>
                                                                     <td>
                                                                      <input placeholder="This Period:" type="text" class="shorter_box" name="union_dues_prd" onKeyUp="getdata()" id="union_dues_prd" tabindex="27">
                                                                     </td>
                                                                 </tr>
                                              
                                                                 <tr>
                                                                    <td>
                                                                      <input placeholder="YTD" type="text" class="shorter_box no_edit" readonly="readonly" name="union_dues_ytd" id="union_dues_ytd">
                                                                    </td>
                                                                 </tr>
                                                               </tbody>
                                                             </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                  </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                    </td>
                                  </tr>    
                            </tbody>
                         </table>
                        </td>     
                 </tr>     
      <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->         
      <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->
                    <tr>
                       <td>
                            <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                                   <tbody>  
                                      <tr>
                                        <td class="jf">
                                           <table width="205" cellspacing="0" cellpadding="0" border="0">
                                              <tbody>
                                                <tr>
                                                   <td class="border-radius">
                                                      <table width="180" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                          <tr>
                                                            <td class="head">Total Deductions - Automatic</td>
                                                          </tr>
                                                          <tr>
                                                            <td>
                                                              <table width="185" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                 <tr>
                                                                     <td>
                                                                      <input type="text" id="ded_this_prd" name="ded_this_prd" placeholder="This Pay Period" class="shorter_box no_edit" readonly="readonly" />
                                                                     </td><td>This Period</td>
                                                                 </tr>
                                                                 <tr>
                                                                    <td>
                                                                      <input type="text" id="ded_ytd" name="ded_ytd" placeholder="YTD" class="shorter_box no_edit" readonly="readonly"/>
                                                                    </td><td>Year to Date</td>
                                                                 </tr>
                                                               </tbody>
                                                             </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                  </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                      </td>
                                  </tr>    
                              </tbody>
                          </table>
            
                                      
                       </td>
                       <td>
                     
                                <table class="nettable" width="130" cellspacing="0" cellpadding="0" border="0">
                           <tbody>
                                <tr>
                                  <td valign="top" class="border-radius"> 
                                      <table width="180" cellspacing="0" cellpadding="0" border="0">
                                         <tbody>
                                         <tr>
                                           <td class="head">Gross Earnings - Automatic</td>id
                                         </tr>
                                        <tr>
                                          <td>
                                             <table width="185" cellspacing="0" cellpadding="0" border="0">
                                               <tbody>
                                               <tr>
                                                   <td>
                                              <input placeholder="This Period" type="text" class="shorter_box no_edit" id="main_ths_prd_amt"  onkeyup="getdata()"  name="main_ths_prd_amt" readonly title="Gross Earnings based on your hours and Payrate for this period"/>
                                                  </td><td>Gross Pay in Prd</td>
                                              </tr>
                                              <tr>
                                                   <td>
                                              <input placeholder="YTD" type="text" class="shorter_box no_edit" id="gross_ytd"  onkeyup="getdata()" name="gross_ytd" title="Gross Earnings based on Total this year or YEAR TO DATE - starts on jan 1, or your hire date" />
                                                </td><td>Gross total YTD</td>
                                                </tr>
                                                <tr>
                                                <td>
                                              <input placeholder="365 days" type="text" class="shorter_box no_edit" id="gross_w2"  onkeyup="getdata()" name="gross_w2" title="This number is used for Tax calculations and W2 for last year" />
                                                </td><td>w2-Gross Last yr</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                       </td>
                                     </tr>
                                   </tbody>
                                 </table>
                                  </td>
                               </tr>
                              <tr>
                            <td>
                            </td>
                          </tr>
                               
                               
                         </tbody>
                      </table>

                     
                       </td>
                       <td><table class="nettable" width="175" cellspacing="0" cellpadding="0" border="0">
                         <tbody>
                           <tr>
                             <td></td>
                           </tr>
                           <tr>
                             <td valign="top" class="border-radius"><table width="170" cellspacing="0" cellpadding="0" border="0">
                               <tbody>
                                 <tr>
                                   <td valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0">
                                     <tbody>
                                       <tr>
                                         <td class="head" colspan="2" >State Taxes - Automatic</td>
                                       </tr>
                                       <tr>
                                         <td><input  placeholder="This Period" type="text" class="shorter_box no_edit"  id="state_amtincometax_prd"  onkeyup="getdata()" name="state_amtincometax_prd" /></td>
                                         <td>This Prd</td>
                                       </tr>
                                       <tr>
                                         <td><input placeholder="YTD" type="text" class="shorter_box no_edit"  id="state_amtincometax_ytd"  onkeyup="getdata()" name="state_amtincometax_ytd" /></td>
                                         <td>Yr to date</td>
                                       </tr>
                                     </tbody>
                                   </table></td>
                                 </tr>
                               </tbody>
                             </table></td>
                           </tr>
                         </tbody>
                       </table></td>
                       <td>
                          <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                               <tr>
                                  <td></td>
                               </tr>
                               <tr>
                                  <td class="border-radius">
                                     <table width="180" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                           <tr>
                                             <td colspan="3" class="head"> Commisions (optional </td></tr>
                                           <tr><td><input placeholder="0.00" type="text" value="0.00" class="shorter_box" tabindex="28" name="commission_prd" onKeyUp="getdata()" id="commission_prd" onFocus="if (this.value == '0.00') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';}" onchange="if (this.value == '') {this.value = '0.00';} getdata();" title="How much commissions for this pay period">
                                           </td><td>This Period</td></tr>
                                           <tr><td><input placeholder="0.00" type="text" value="0.00" class="shorter_box" tabindex="29" name="commission_ytd" onKeyUp="getdata()" id="commission_ytd" onFocus="if (this.value == '0.00') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == '') {this.value = '0.00';}" title="this Year, total commissions.  This does not have to be THIS PERIOD * Payperiods, it could be anything">   
                                           </td><td>YTD</td></tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                            </tbody>
      
                         </table>
                      </td>                   
                   </tr>
      <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->         
 ____________________________________________________________________________________________________________

      <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->
                    <tr>
                       <td>
   <table class="nettable" width="195" cellspacing="0" cellpadding="0" border="0">
                             <tbody>
                               <tr>
                                 <td></td>
                               </tr>
                               <tr>
                                  <td class="border-radius">
                                    <table width="190" cellspacing="0" cellpadding="0" border="0">
                                         <tbody>
                                           <tr>
                                             <td colspan="2" class="head"> Federal Income Tax Amounts  </td>
                                           </tr>
                                           <tr>
                                             <td>
                                                  <input placeholder="This Period:" type="text" class="shorter_box no_edit" id="fed_amtincom"  onkeyup="getdata()" name="fed_amtincom" />
                                             </td><td>This Period</td>
                                           </tr>
                                           <tr>
                                              <td>
                                                  <input placeholder="YTD:" type="text" class="shorter_box no_edit" id="fed_amtytd"  onkeyup="getdata()" name="fed_amtytd" />
                                              </td><td>Year to date</td>
                                           </tr>
                                         </tbody>
                                    </table>
                                  </td>
                               </tr>
      
                                <tr>
                                  <td>
                                  </td>
                                </tr>
                            </tbody>
                         </table>
                         

                      </td>
      				  <td>
                          
                     <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                               <tr>
                                  <td></td>
                               </tr>
      
                               <tr>
                                  <td class="border-radius">
                                     <table width="205" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                           <tr>
                                              <td colspan="3" class="head"> FICA-Medicare Amounts  </td>
                                          </tr>
                                            <tr>
                                              <td colspan="2">
                                                    <input placeholder="This Period:" type="text" class="shorter_box no_edit" id="medicare_prd"  onkeyup="getdata()" name="medicare_prd" />
                                              </td>
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="2">
                                                 <input placeholder="YTD:" type="text" class="shorter_box no_edit" id="medicare_ytd"  onkeyup="getdata()" name="medicare_ytd" /></td>
                                            </tr>
                                       </tbody>
                                    </table>
                                  </td>
                               </tr>
                                        
                                <tr>
                                   <td>
                                   </td>	
                                
                                </tr>
                            </tbody>
      
                         </table>
                      </td>
      
                       <td>
                              
                          <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                                   <tbody>  
                                      <tr>
                                        <td class="jf">
                                           <table width="205" cellspacing="0" cellpadding="0" border="0">
                                              <tbody>
                                                <tr>
                                                   <td class="border-radius">
                                                      <table width="210" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                          <tr>
                                                            <td class="head">FICA-Social Security Amounts</td>
                                                          </tr>
                                                          <tr>
                                                            <td>
                                                              <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                 <tr>
                                                                     <td colspan="2">
                                                                      <input placeholder="This Period:" type="text" class="shorter_box no_edit" id="fica_social_prd"  onkeyup="getdata()" name="fica_social_prd" />
                                                                     </td>
                                                                 </tr>
                                                                 <tr>
                                                                    <td colspan="2">
                                                                      <input type="text" id="fica_social_ytd" class="shorter_box no_edit"  placeholder="YTD:"  onkeyup="getdata()" name="fica_social_ytd" />
                                                                    </td>
                                                                 </tr>
                                                               </tbody>
                                                             </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                  </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                      </td>
                                  </tr>    
                              </tbody>
                         </table>
                      </td>
            
                       <td>
                        <table class="nettable" width="200" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                            <tr>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="border-radius">
                              <table width="210" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                  <tr>
                                    <td><table width="205" cellspacing="0" cellpadding="0" border="0">
                                       <tbody>
                                        <tr>
                                          <td colspan="2" class="head">Net Amount Paid to Employee</td>
                                        </tr>
                                        <tr>
                                          <td><table width="185" cellspacing="0" cellpadding="0" border="0">
                                              <tbody>
                                                <tr><td colspan="2"><input type="text" class="shorter_box no_edit bigger" id="net_pay_prd" placeholder="This Period" name="net_pay_prd" /></td></tr>
                                                <tr><td><center>One pay period</center></td></tr>
                                                <tr><td><input type="text" class="shorter_box no_edit" id="net_pay_ytd" placeholder="YTD" name="net_pay_ytd" /></td><td>YTD</td></tr>
                                                <tr><td><input type="text" class="shorter_box no_edit" id="net_pay_w2_tot" placeholder="Last Year" name="net_pay_w2_tot" /></td><td>W-2</td></tr>
                                             </tbody>
                                           </table></td>
                                        </tr>
                                       </tbody>
                                     </table></td>
                                  </tr>
                               </tbody>
                              </table></td>
                            </tr>
                            <tr>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>                   
                   </tr>             
                   
                   <tr>
                 
                   
         
                  <tr>				 	
                   <td> <!--<input class="butn" onClick="validateForm1()" type="submit" value=""  name="submit"  style="cursor:pointer"/>    --> </td>
                  </tr>
                 </tbody>
              </table>
          </form>
       
            <div id=email_table>
                 <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                               <tr>
                                  <td></td>
                               </tr>
                               <tr>
                                  <td class="border-radius">
                                     <table width="180" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                           <tr>
                                             <td colspan="3" class="head"> Bank Numbers (optional)</td></tr>
                                           <tr><td><input placeholder="routing #" type="text" value="routing #" class="shorter_box" tabindex="30" name="rout_num" onKeyUp="getdata()" id="rout_num" onFocus="if (this.value == 'rout #') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';}" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL - Bank Routing number, first set of digits on you checking account - If you don't want to put your real numbers on it, just make up some, and then black-out the results on the printout">
                                                             </td><td>Route #</td></tr>
                                           <tr><td><input placeholder="account #" type="text" value="account #" class="shorter_box" tabindex="31" name="acc_num" onKeyUp="getdata()" id="acc_num" onFocus="if (this.value == 'account #') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title=" Your Bank account number the checks are deposited into - If you don't want to put the real data in, just make up numbers, and then black-out the printed version">   
                                                             </td><td>Acc #</td></tr>
                                           <tr><td><input placeholder="check_num" type="text" value="0" class="shorter_box" tabindex="32" name="check_num" onKeyUp="getdata()" id="check_num" onFocus="if (this.value == 'check_num') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';} getdata()" onchange="if (this.value == ' ') {this.value = '0';}" title="OPTIONAL Type in the check Number for your stubs">
                                                             </td><td>Check #</td></tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                            </tbody>
      
                         </table>
             </div>
             
             <div id = garnishments_table>
                <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                               <tr>
                                  <td class="border-radius">
                                     <table width="180" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                           <tr>
                                             <td colspan="3" class="head"> Garnishments (optional)</td></tr>
                                           <tr><td><input placeholder="garnish1" type="text" value="0" class="shorter_box" tabindex="32" name="garnish1" onKeyUp="getdata()" id="garnish1" onFocus="if (this.value == 'garnish1') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL Type in the amount of your first garnishment amount for each paycheck">
                                           </td>
                                           <td>Garnish #1</td></tr>
                                           <tr><td><input placeholder="garnish2" type="text" value="0" class="shorter_box" tabindex="33" name="garnish2" onKeyUp="getdata()" id="garnish2" onFocus="if (this.value == 'garnish2') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL Type in the amount of your second garnishment amount for each paycheck">   
                                           </td>
                                           <td>Garnish #2</td></tr>
                                           <tr><td><input placeholder="garnish3" type="text" value="0" class="shorter_box" tabindex="34" name="garnish3" onKeyUp="getdata()" id="garnish3" onFocus="if (this.value == 'garnish3') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL Type in the amount of your third garnishment amount for each paycheck">   
                                           </td>
                                           <td>Garnish #3</td></tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                            </tbody>
                         </table>
             </div>
            
              
    </div> 
    <!-- #main_form-->  
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
     <div id="corporate-test">
              <p id="corp_empr_add_name"></p>      
              <p id="corp_empr_add_street"></p>
              <p id="corp_empr_add_city"></p>
              <p id="corp_empr_add_state"></p>
              <p id="corp_empr_add_zip"></p>
              
              <p id="corp_rout_num"></p> 
              <p id="corp_acc_num"></p> 
              <p id="corp_emp_email"></p> 
              <p id="corp_emp_id"></p> 
              <p id="corp_emp_f_name"></p>
              <p id="corp_emp_l_name"></p>
              <p id="corp_emp_street"></p>
              <p id="corp_emp_city"></p>
              <p id="corp_emp_state"></p>		<!--  This edits the preview on the Screen  -->
              <p id="corp_emp_zip"></p>         <!--  Names coming from pay_functions.js  -->
              <p id="corp_emp_ssn"></p>
              <p id="corp_emp_mar_status"></p>
              
             
              <p id="corp_start_date"></p>
              <p id="corp_end_date"></p>
              <p id="corp_pay_date"></p>
              
              <p id="corp_gross_hrs"></p>
              <p id="corp_gross_rate"></p>
              <p id="corp_ot_hrs"></p>
              
              <p id="corp_gross_prd"></p>
              <p id="corp_gross_ytd"></p>
              
              <p id="corp_tot_ded_prd"></p>
              <p id="corp_tot_ded_ytd"></p>
              
              <p id="corp_taxable_gross_prd"></p>
              <p id="corp_taxable_gross_ytd"></p>
              
              <p id="corp_fed_amt_deduct_prd"></p> 
              <p id="corp_fed_amt_deduct_ytd"></p>
                  
              <p id="corp_medicare_prd"></p>
              <p id="corp_medicare_ytd"></p>
            
              <p id="corp_state_amtincometax_prd"></p>
              <p id="corp_state_amtincometax_ytd"></p>
             
              <p id="corp_fica_social_prd"></p>
              <p id="corp_fica_social_ytd"></p>
              
              <p id="corp_net_pay_prd"></p>
              <p id="corp_net_pay_prd_deposit"></p>
              <p id="corp_net_pay_ytd"></p>
              <p id="corp_net_pay_ytd_deposit"></p>
              
              <p id="corp_state_abb"></p>
              
              <p id="corp_val_401k_prd"></p>
              <p id="corp_val_401k_ytd"></p>
              
              <p id="corp_union_dues_prd"></p>
              <p id="corp_union_dues_ytd"></p>
             
              <p id="corp_start_date2"></p>
              <p id="corp_end_date2"></p>
              
              <p id="corp_commission_prd"></p>
              <p id="corp_commission_ytd"></p>  
              
              <p id="corp_check_num"></p> 
              
              
            <div id="corp-preview">
              <form action="http://www.paycheckstubonline.com/corp_paystub_paypal.php" name="form1" method="POST" target="_blank">                    
                    <input type="hidden" name="corp_pdf_emp_email" id="corp_p_emp_email" />
                    
                    <input type="hidden" name="corp_pdf_empr_name" id="corp_p_empr_add_name" />
                    <input type="hidden" name="corp_pdf_empr_street" id="corp_p_empr_add_street"  />
                    <input type="hidden" name="corp_pdf_empr_city" id="corp_p_empr_add_city" />
                    <input type="hidden" name="corp_pdf_empr_state" id="corp_p_empr_add_state" />
                    <input type="hidden" name="corp_pdf_empr_zip" id="corp_p_empr_add_zip"/>
                    
                    <input type="hidden" name="corp_pdf_emp_rout_num" id="corp_p_rout_num" />
                    <input type="hidden" name="corp_pdf_emp_acc_num" id="corp_p_acc_num" />
                    <input type="hidden" name="corp_pdf_emp_id" id="corp_p_emp_id" />
                    <input type="hidden" name="corp_pdf_emp_f_name" id="corp_p_emp_f_name" />
                    <input type="hidden" name="corp_pdf_emp_l_name" id="corp_p_emp_l_name" />
                    <input type="hidden" name="corp_pdf_emp_street" id="corp_p_emp_street" />
                    <input type="hidden" name="corp_pdf_emp_city" id="corp_p_emp_city" />
                    <input type="hidden" name="corp_pdf_emp_state" id="corp_p_emp_state" />
                    <input type="hidden" name="corp_pdf_emp_zip" id="corp_p_emp_zip" />                   <!--  This edits the preview on the PDF   -->
                    <input type="hidden" name="corp_pdf_emp_ssn" id="corp_p_emp_ssn" />		       <!--  From pay-function.js to corp_paystub.php  -->
                    <input type="hidden" name="corp_pdf_emp_mar_status" id="corp_p_emp_mar_status" />	
                                                                                            
                    <input type="hidden" name="corp_pdf_start_date" id="corp_p_start_date" />
                    <input type="hidden" name="corp_pdf_end_date" id="corp_p_end_date" />
                    <input type="hidden" name="corp_pdf_pay_date" id="corp_p_pay_date" />
                    
                    <input type="hidden" name="corp_pdf_gross_hrs" id="corp_p_gross_hrs" />
                    <input type="hidden" name="corp_pdf_gross_rate" id="corp_p_gross_rate" />
                    <input type="hidden" name="corp_pdf_ot_hrs" id="corp_p_ot_hrs" />
                    
                    <input type="hidden" name="corp_pdf_gross_prd" id="corp_p_gross_prd" />
                    <input type="hidden" name="corp_pdf_gross_ytd" id="corp_p_gross_ytd" />
                    
                    <input type="hidden" name="corp_pdf_tot_ded_prd" id="corp_p_tot_ded_prd" />
                    <input type="hidden" name="corp_pdf_tot_ded_ytd" id="corp_p_tot_ded_ytd" />
                    
                    <input type="hidden" name="corp_pdf_taxable_gross_prd" id="corp_p_taxable_gross_prd" />
                    <input type="hidden" name="corp_pdf_taxable_gross_ytd" id="corp_p_taxable_gross_ytd" />
                  
                    <input type="hidden" name="corp_pdf_fed_amt_deduct_prd" id="corp_p_fed_amt_deduct_prd" />                   <!--  This edits the preview on the PDF   -->
                    <input type="hidden" name="corp_pdf_fed_amt_deduct_ytd" id="corp_p_fed_amt_deduct_ytd" />
                    
                    <input type="hidden" name="corp_pdf_medicare_prd" id="corp_p_medicare_prd" />
                    <input type="hidden" name="corp_pdf_medicare_ytd" id="corp_p_medicare_ytd" />

                    <input type="hidden" name="corp_pdf_state_amtincometax_prd" id="corp_p_state_amtincometax_prd" />
                    <input type="hidden" name="corp_pdf_state_amtincometax_ytd" id="corp_p_state_amtincometax_ytd" />
                    
                    <input type="hidden" name="corp_pdf_fica_social_prd" id="corp_p_fica_social_prd" />
                    <input type="hidden" name="corp_pdf_fica_social_ytd" id="corp_p_fica_social_ytd" />
                     
       				<input type="hidden" name="corp_pdf_tot_ded_prd" id="corp_p_tot_ded_prd" />
                    <input type="hidden" name="corp_pdf_tot_ded_ytd" id="corp_p_tot_ded_ytd" />
                    
                    <input type="hidden" name="corp_pdf_net_pay_prd" id="corp_p_net_pay_prd" />
                    <input type="hidden" name="corp_pdf_net_pay_prd_deposit" id="corp_p_net_pay_prd_deposit" />
                    <input type="hidden" name="corp_pdf_net_pay_ytd" id="corp_p_net_pay_ytd" />
                    <input type="hidden" name="corp_pdf_net_pay_ytd_deposit" id="corp_p_net_pay_ytd_deposit" />
                                                                                          
                    <input type="hidden" name="corp_pdf_state_abb" id="corp_p_state_abb" />                                                                         
                     
                    <input type="hidden" name="corp_pdf_val_401k_prd" id="corp_p_val_401k_prd" />
                    <input type="hidden" name="corp_pdf_val_401k_ytd" id="corp_p_val_401k_ytd" />
                    
                    <input type="hidden" name="corp_pdf_union_dues_prd" id="corp_p_union_dues_prd" />
                    <input type="hidden" name="corp_pdf_union_dues_ytd" id="corp_p_union_dues_ytd" />
                    
                    <input type="hidden" name="corp_pdf_start_date2" id="corp_p_start_date2" />
                    <input type="hidden" name="corp_pdf_end_date2" id="corp_p_end_date2" />
                    
                    <input type="hidden" name="corp_pdf_commission_prd" id="corp_p_commission_prd" />
                    <input type="hidden" name="corp_pdf_commission_ytd" id="corp_p_commission_ytd" />
                        
                    <input type="hidden" name="corp_pdf_check_num" id="corp_p_check_num" />
                                                                                          
                    <input class="btn_download" type="submit" value=""   name="submit"  style="cursor:pointer" />  
              </form>
            </div>
            
   
     </div> 
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
      <div id="basic_paystub">   
       <div id="basic-background">  
          <p id="basic_empr_add_name"></p>      
          <p id="basic_empr_add_street"></p>
          <p id="basic_empr_add_city"></p>
          <p id="basic_empr_add_state"></p>
          <p id="basic_empr_add_zip"></p>
       
          <p id="basic_emp_email"></p>  
          
          <p id="basic_rout_num"></p> 
          <p id="basic_acc_num"></p>
          <p id="basic_emp_id"></p> 
          <p id="basic_emp_f_name"></p>
          <p id="basic_emp_l_name"></p>
          <p id="basic_emp_street"></p>
          <p id="basic_emp_city"></p>
          <p id="basic_emp_state"></p>		<!--  This edits the preview on the Screen  -->
          <p id="basic_emp_zip"></p>         <!--  Names coming from pay_functions.js  -->
          <p id="basic_emp_ssn"></p>
          <p id="basic_emp_mar_status"></p>
          
          <p id="basic_start_date2"></p>
          <p id="basic_end_date2"></p>
          <p id="basic_pay_date"></p>
          
          <p id="basic_gross_hrs"></p>
          <p id="basic_gross_rate"></p>
          <p id="basic_ot_hrs"></p>
         
          <p id="basic_gross_prd"></p>
          <p id="basic_gross_ytd"></p>
          
          <p id="basic_taxable_gross_prd"></p>
          <p id="basic_taxable_gross_ytd"></p>
          
          <p id="basic_fed_amt_deduct_prd"></p> 
          <p id="basic_fed_amt_deduct_ytd"></p>
              
          <p id="basic_medicare_prd"></p>
          <p id="basic_medicare_ytd"></p>
        
          <p id="basic_state_amtincometax_prd"></p>
          <p id="basic_state_amtincometax_ytd"></p>
         
          <p id="basic_fica_social_prd"></p>
          <p id="basic_fica_social_ytd"></p>
          
          <p id="basic_net_pay_prd"></p>
          <p id="basic_net_pay_prd_deposit"></p>
          <p id="basic_net_pay_ytd"></p>
          
          <p id="basic_state_abb"></p>
          
          <p id="basic_val_401k_prd"></p>
          <p id="basic_val_401k_ytd"></p>
          
          <p id="basic_union_dues_prd"></p>
          <p id="basic_union_dues_ytd"></p>
         
          
          
          <p id="lbl_other_ded_thisperiod2"></p>
          <p id="lbl_other_ded_ytd2"></p>   
          </div>
                
        <div id="basic-preview">
          <form action="http://www.paycheckstubonline.com/basic_paystub_paypal.php" name="form1" method="POST" target="_blank">                    
				<input type="hidden" name="pdf_empr_name" id="basic_p_empr_add_name" />
                <input type="hidden" name="pdf_empr_street" id="basic_p_empr_add_street"  />
                <input type="hidden" name="pdf_empr_city" id="basic_p_empr_add_city" />
                <input type="hidden" name="pdf_empr_state" id="basic_p_empr_add_state" />
                <input type="hidden" name="pdf_empr_zip" id="basic_p_empr_add_zip"/>
                
                <input type="hidden" name="basic_pdf_emp_email" id="basic_p_emp_email" />

                <input type="hidden" name="pdf_emp_rout_num" id="basic_p_rout_num" />
                <input type="hidden" name="pdf_emp_acc_num" id="basic_p_acc_num" />
                <input type="hidden" name="basic_pdf_emp_id" id="basic_p_emp_id" /> 
                <input type="hidden" name="basic_pdf_emp_f_name" id="basic_p_emp_f_name" />
                <input type="hidden" name="basic_pdf_emp_l_name" id="basic_p_emp_l_name" />
                <input type="hidden" name="basic_pdf_emp_street" id="basic_p_emp_street" />
                <input type="hidden" name="basic_pdf_emp_city" id="basic_p_emp_city" />
                <input type="hidden" name="basic_pdf_emp_state" id="basic_p_emp_state" />
                <input type="hidden" name="basic_pdf_emp_zip" id="basic_p_emp_zip" />                   <!--  This edits the preview on the PDF   -->
                <input type="hidden" name="basic_pdf_emp_ssn" id="basic_p_emp_ssn" />		       <!--  From pay-function.js to basic_paystub.php  -->
                <input type="hidden" name="pdf_emp_mar_status" id="basic_p_emp_mar_status" />
                                                                                        
                <input type="hidden" name="basic_pdf_start_date2" id="basic_p_start_date2" />
                <input type="hidden" name="basic_pdf_end_date2" id="basic_p_end_date2" />
                <input type="hidden" name="basic_pdf_pay_date" id="basic_p_pay_date" />
                
                <input type="hidden" name="basic_pdf_gross_hrs" id="basic_p_gross_hrs" />
                <input type="hidden" name="basic_pdf_gross_rate" id="basic_p_gross_rate" />
                <input type="hidden" name="basic_pdf_ot_hrs" id="basic_p_ot_hrs" />
                
                <input type="hidden" name="basic_pdf_gross_prd" id="basic_p_gross_prd" />
                <input type="hidden" name="basic_pdf_gross_ytd" id="basic_p_gross_ytd" />
                
                <input type="hidden" name="basic_pdf_taxable_gross_prd" id="basic_p_taxable_gross_prd" />
                <input type="hidden" name="basic_pdf_taxable_gross_ytd" id="basic_p_taxable_gross_ytd" />
              
                <input type="hidden" name="basic_pdf_fed_amt_deduct_prd" id="basic_p_fed_amt_deduct_prd" />                   <!--  This edits the preview on the PDF   -->
                <input type="hidden" name="basic_pdf_fed_amt_deduct_ytd" id="basic_p_fed_amt_deduct_ytd" />
                
                <input type="hidden" name="basic_pdf_medicare_prd" id="basic_p_medicare_prd" />
                <input type="hidden" name="basic_pdf_medicare_ytd" id="basic_p_medicare_ytd" />
                
                
                <input type="hidden" name="basic_pdf_state_amtincometax_prd" id="basic_p_state_amtincometax_prd" />
                <input type="hidden" name="basic_pdf_state_amtincometax_ytd" id="basic_p_state_amtincometax_ytd" />
                
                <input type="hidden" name="basic_pdf_fica_social_prd" id="basic_p_fica_social_prd" />
                <input type="hidden" name="basic_pdf_fica_social_ytd" id="basic_p_fica_social_ytd" />
                 
                <input type="hidden" name="basic_pdf_net_pay_prd" id="basic_p_net_pay_prd" />
                <input type="hidden" name="basic_pdf_net_pay_prd_deposit" id="basic_p_net_pay_prd_deposit" />
                <input type="hidden" name="basic_pdf_net_pay_ytd" id="basic_p_net_pay_ytd" />
                                                                                      
                <input type="hidden" name="basic_pdf_state_abb" id="basic_p_state_abb" />                                                                         
                 
                <input type="hidden" name="basic_pdf_val_401k_prd" id="basic_p_val_401k_prd" />
                <input type="hidden" name="basic_pdf_val_401k_ytd" id="basic_p_val_401k_ytd" />
                                                                                      
                <input class="btn_download" type="submit" value=""   name="submit"  style="cursor:pointer" />  
          </form>
         </div>
      
    </div> 
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
	<div id="neat_paystub">
           <div id="neat-background"> 
              <p id="neat_empr_add_name"></p>      
              <p id="neat_empr_add_street"></p>
              <p id="neat_empr_add_city"></p>
              <p id="neat_empr_add_state"></p>
              <p id="neat_empr_add_zip"></p> 
                 
              <p id="neat_emp_email"></p>    
              <p id="neat_emp_id"></p> 
              <p id="neat_emp_f_name"></p>
              <p id="neat_emp_l_name"></p>
              <p id="neat_emp_street"></p>
              <p id="neat_emp_city"></p>
              <p id="neat_emp_state"></p>		<!--  This edits the preview on the Screen  -->
              <p id="neat_emp_zip"></p>         <!--  Names coming from pay_functions.js  -->
              <p id="neat_emp_ssn"></p>
              
              <p id="neat_start_date2"></p>
              <p id="neat_end_date2"></p>
              <p id="neat_pay_date"></p>
              
              <p id="neat_gross_hrs"></p>
              <p id="neat_gross_rate"></p>
              <p id="neat_ot_hrs"></p>
              <p id="neat_gross_ot_rate"></p>
              
             
              <p id="neat_gross_prd"></p>
              <p id="neat_gross_ytd"></p>
              <p id="neat_gross_ot_prd"></p>
              <p id="neat_gross_ot_ytd"></p>
              
              
              <p id="neat_taxable_gross_prd"></p>
              <p id="neat_taxable_gross_ytd"></p>
              
              <p id="neat_fed_amt_deduct_prd"></p> 
              <p id="neat_fed_amt_deduct_ytd"></p>
                  
              <p id="neat_medicare_prd"></p>
              <p id="neat_medicare_ytd"></p>
            
              <p id="neat_state_amtincometax_prd"></p>
              <p id="neat_state_amtincometax_ytd"></p>
             
              <p id="neat_fica_social_prd"></p>
              <p id="neat_fica_social_ytd"></p>
              
              <p id="neat_net_pay_prd"></p>
              <p id="neat_net_pay_prd_deposit"></p>
              <p id="neat_net_pay_ytd"></p>
              
              <p id="neat_state_abb"></p>
              
              <p id="neat_val_401k_prd"></p>
              <p id="neat_val_401k_ytd"></p>
              
              <p id="neat_union_dues_prd"></p>
              <p id="neat_union_dues_ytd"></p>
              
              <p id="neat_tot_ded_prd"></p>
              <p id="neat_tot_ded_ytd"></p>
              
              
              <p id="lbl_other_ded_thisperiod2"></p>
              <p id="lbl_other_ded_ytd2"></p> 
              
              <p id="neat_label_401"></p>
              <p id="neat_label_reg"></p>
              <p id="neat_label_ot"></p>
              <p id="neat_label_ss"></p>
              <p id="neat_label_med"></p>
              <p id="neat_label_fed"></p>
              
              <p id="neat_check_num"></p>        
            </div>
            
            <div id="neat-preview">
              <form action="http://www.paycheckstubonline.com/neat_paystub_paypal.php" name="form1" method="POST" target="_blank">               
					<input type="hidden" name="neat_pdf_emp_email" id="neat_p_emp_email" />
                    
                    <input type="hidden" name="neat_pdf_empr_name" id="neat_p_empr_add_name" />
                    <input type="hidden" name="neat_pdf_empr_street" id="neat_p_empr_add_street"  />
                    <input type="hidden" name="neat_pdf_empr_city" id="neat_p_empr_add_city" />
                    <input type="hidden" name="neat_pdf_empr_state" id="neat_p_empr_add_state" />
                    <input type="hidden" name="neat_pdf_empr_zip" id="neat_p_empr_add_zip"/>

                    <input type="hidden" name="neat_pdf_emp_id" id="neat_p_emp_id" /> 
                    <input type="hidden" name="neat_pdf_emp_f_name" id="neat_p_emp_f_name" />
                    <input type="hidden" name="neat_pdf_emp_l_name" id="neat_p_emp_l_name" />
                    <input type="hidden" name="neat_pdf_emp_street" id="neat_p_emp_street" />
                    <input type="hidden" name="neat_pdf_emp_city" id="neat_p_emp_city" />
                    <input type="hidden" name="neat_pdf_emp_state" id="neat_p_emp_state" />
                    <input type="hidden" name="neat_pdf_emp_zip" id="neat_p_emp_zip" />                   <!--  This edits the preview on the PDF   -->
                    <input type="hidden" name="neat_pdf_emp_ssn" id="neat_p_emp_ssn" />		       <!--  From pay-function.js to neat_paystub.php  -->
                                                                                            
                    <input type="hidden" name="neat_pdf_start_date2" id="neat_p_start_date2" />
                    <input type="hidden" name="neat_pdf_end_date2" id="neat_p_end_date2" />
                    <input type="hidden" name="neat_pdf_pay_date" id="neat_p_pay_date" />
                    
                    <input type="hidden" name="neat_pdf_gross_hrs" id="neat_p_gross_hrs" />
                    <input type="hidden" name="neat_pdf_gross_rate" id="neat_p_gross_rate" />
                    <input type="hidden" name="neat_pdf_ot_hrs" id="neat_p_ot_hrs" />
                    <input type="hidden" name="neat_pdf_gross_ot_rate" id="neat_p_gross_ot_rate" />
                
                    <input type="hidden" name="neat_pdf_gross_prd" id="neat_p_gross_prd" />
                    <input type="hidden" name="neat_pdf_gross_ytd" id="neat_p_gross_ytd" />
                    <input type="hidden" name="neat_pdf_gross_ot_prd" id="neat_p_gross_ot_prd" />
                    <input type="hidden" name="neat_pdf_gross_ot_ytd" id="neat_p_gross_ot_ytd" />

                    
                    <input type="hidden" name="neat_pdf_taxable_gross_prd" id="neat_p_taxable_gross_prd" />
                    <input type="hidden" name="neat_pdf_taxable_gross_ytd" id="neat_p_taxable_gross_ytd" />
                  
                    <input type="hidden" name="neat_pdf_fed_amt_deduct_prd" id="neat_p_fed_amt_deduct_prd" />                   <!--  This edits the preview on the PDF   -->
                    <input type="hidden" name="neat_pdf_fed_amt_deduct_ytd" id="neat_p_fed_amt_deduct_ytd" />
                    
                    <input type="hidden" name="neat_pdf_medicare_prd" id="neat_p_medicare_prd" />
                    <input type="hidden" name="neat_pdf_medicare_ytd" id="neat_p_medicare_ytd" />
                    
                    
                    <input type="hidden" name="neat_pdf_state_amtincometax_prd" id="neat_p_state_amtincometax_prd" />
                    <input type="hidden" name="neat_pdf_state_amtincometax_ytd" id="neat_p_state_amtincometax_ytd" />
                    
                    <input type="hidden" name="neat_pdf_fica_social_prd" id="neat_p_fica_social_prd" />
                    <input type="hidden" name="neat_pdf_fica_social_ytd" id="neat_p_fica_social_ytd" />
                     
       				<input type="hidden" name="neat_pdf_net_pay_prd" id="neat_p_net_pay_prd" />
                    <input type="hidden" name="neat_pdf_net_pay_prd_deposit" id="neat_p_net_pay_prd_deposit" />
                    <input type="hidden" name="neat_pdf_net_pay_ytd" id="neat_p_net_pay_ytd" />
                                                                                          
                    <input type="hidden" name="neat_pdf_state_abb" id="neat_p_state_abb" />                                                                         
                     
                    <input type="hidden" name="neat_pdf_val_401k_prd" id="neat_p_val_401k_prd" />
                    <input type="hidden" name="neat_pdf_val_401k_ytd" id="neat_p_val_401k_ytd" />
                    
                    <input type="hidden" name="neat_pdf_union_dues_prd" id="neat_p_union_dues_prd" />
                    <input type="hidden" name="neat_pdf_union_dues_ytd" id="neat_p_union_dues_ytd" />
                                  
                    <input type="hidden" name="neat_pdf_tot_ded_prd" id="neat_p_tot_ded_prd" />
                    <input type="hidden" name="neat_pdf_tot_ded_ytd" id="neat_p_tot_ded_ytd" />
                    
                    <input type="hidden" name="neat_pdf_label_401" id="neat_p_label_401" />                                                                    
                    <input type="hidden" name="neat_pdf_label_reg" id="neat_p_label_reg" />     
                    <input type="hidden" name="neat_pdf_label_ot" id="neat_p_label_ot" />
                    <input type="hidden" name="neat_pdf_label_ss" id="neat_p_label_ss" />
                    <input type="hidden" name="neat_pdf_label_med" id="neat_p_label_med" />
                    <input type="hidden" name="neat_pdf_label_fed" id="neat_p_label_fed" />
                    
                     <input type="hidden" name="neat_pdf_check_num" id="neat_p_check_num" />
                    <input class="btn_download" type="submit" value=""   name="submit"  style="cursor:pointer" />  
              </form>
             </div>
            
    
    </div> 
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->     
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->   
	  <div id="Tstub"><h4>T-STUB Latest Most updated PAYSTUB template</h4>
         <div id="tstub_paystub"> 
              <p id="tstub_empr_add_name"></p>    
              <p id="tstub_empr_add_street"></p>
             
             <div id="wrapper"> 
              <p id="tstub_empr_add_city"></p>
              <p id="tstub_empr_add_state"></p> 
             </div>
             
              
              <p id="tstub_empr_add_zip"></p>
              
              <p id="tstub_rout_num"></p> 
              <p id="tstub_acc_num"></p> 
              <p id="tstub_emp_email"></p> 
              <p id="tstub_emp_id"></p> 
              <p id="tstub_emp_f_name"></p>
              <p id="tstub_emp_l_name"></p>
              <p id="tstub_emp_street"></p>
             
             <div id="wrapper2"> 
              <p id="tstub_emp_city"></p>
              <p id="tstub_emp_state"></p>
             </div> 
              		
              <p id="tstub_emp_zip"></p>         
              <p id="tstub_emp_ssn"></p>
              <p id="tstub_emp_mar_status"></p>
              
              <p id="tstub_garnish1_prd"></p>
              <p id="tstub_garnish1_ytd"></p>
              <p id="tstub_garnish2_prd"></p>
              <p id="tstub_garnish2_ytd"></p>
              <p id="tstub_garnish3_prd"></p>
              <p id="tstub_garnish3_ytd"></p>
              <p id="tstub_tot_garnish_prd"></p>
              <p id="tstub_tot_garnish_ytd"></p>
              
              <p id="tstub_start_date"></p>
              <p id="tstub_end_date"></p>
              <p id="tstub_pay_date"></p>
              
              <p id="tstub_gross_hrs"></p>
              <p id="tstub_gross_rate"></p>
              <p id="tstub_ot_hrs"></p>
              
              <p id="tstub_gross_prd"></p>
              <p id="tstub_gross_ytd"></p>
              
              <p id="tstub_taxable_gross_prd"></p>
              <p id="tstub_taxable_gross_ytd"></p>
              
              <p id="tstub_fed_amt_deduct_prd"></p> 
              <p id="tstub_fed_amt_deduct_ytd"></p>
                  
              <p id="tstub_medicare_prd"></p>
              <p id="tstub_medicare_ytd"></p>
            
              <p id="tstub_state_amtincometax_prd"></p>
              <p id="tstub_state_amtincometax_ytd"></p>
             
              <p id="tstub_fica_social_prd"></p>
              <p id="tstub_fica_social_ytd"></p>
              
              <p id="tstub_tot_ded_prd"></p>
              <p id="tstub_tot_ded_ytd"></p>
              
              <p id="tstub_net_pay_prd"></p>
              <p id="tstub_net_pay_prd_deposit"></p>
              <p id="tstub_net_pay_ytd"></p>
              <p id="tstub_net_pay_ytd_deposit"></p>
              
              <p id="tstub_state_abb"></p>
              
              <p id="tstub_val_401k_prd"></p>
              <p id="tstub_val_401k_ytd"></p>
              
              <p id="tstub_union_dues_prd"></p>
              <p id="tstub_union_dues_ytd"></p>
             
              <p id="tstub_start_date2"></p>
              <p id="tstub_end_date2"></p>
              
              <p id="tstub_commission_prd"></p>
              <p id="tstub_commission_ytd"></p>  
              
              <p id="tstub_check_num"></p>
         </div>
         
         <div id="tstub-preview">
              <form action="http://www.paycheckstubonline.com/tstub_paystub_paypal.php" name="form1" method="POST" target="_blank">     													  
                  <input type="hidden" name="tstub_pdf_empr_name" id="tstub_p_empr_add_name" />
                  <input type="hidden" name="tstub_pdf_empr_street" id="tstub_p_empr_add_street"  />
                  <input type="hidden" name="tstub_pdf_empr_city" id="tstub_p_empr_add_city" />
                  <input type="hidden" name="tstub_pdf_empr_state" id="tstub_p_empr_add_state" />
                  <input type="hidden" name="tstub_pdf_empr_zip" id="tstub_p_empr_add_zip"/>
                  
                  <input type="hidden" name="tstub_pdf_emp_rout_num" id="tstub_p_rout_num" />
                  <input type="hidden" name="tstub_pdf_emp_acc_num" id="tstub_p_acc_num" />
                  <input type="hidden" name="tstub_pdf_emp_id" id="tstub_p_emp_id"/>
                  <input type="hidden" name="tstub_pdf_emp_email" id="tstub_p_emp_email" />
                  <input type="hidden" name="tstub_pdf_emp_f_name" id="tstub_p_emp_f_name" />
                  <input type="hidden" name="tstub_pdf_emp_l_name" id="tstub_p_emp_l_name" />
                  <input type="hidden" name="tstub_pdf_emp_street" id="tstub_p_emp_street" />
                  <input type="hidden" name="tstub_pdf_emp_city" id="tstub_p_emp_city" />
                  <input type="hidden" name="tstub_pdf_emp_state" id="tstub_p_emp_state" />
                  <input type="hidden" name="tstub_pdf_emp_zip" id="tstub_p_emp_zip" />                  
                  <input type="hidden" name="tstub_pdf_emp_ssn" id="tstub_p_emp_ssn" />		        
                  <input type="hidden" name="tstub_pdf_emp_mar_status" id="tstub_p_emp_mar_status" />	
                  
                  <input type="hidden" name="tstub_pdf_garnish1_prd" id="tstub_p_garnish1_prd" />
                  <input type="hidden" name="tstub_pdf_garnish1_ytd" id="tstub_p_garnish1_ytd" />
                  <input type="hidden" name="tstub_pdf_garnish2_prd" id="tstub_p_garnish2_prd" />
                  <input type="hidden" name="tstub_pdf_garnish2_ytd" id="tstub_p_garnish2_ytd" />
                  <input type="hidden" name="tstub_pdf_garnish3_prd" id="tstub_p_garnish3_prd" />
                  <input type="hidden" name="tstub_pdf_garnish3_ytd" id="tstub_p_garnish3_ytd" />                        
                  <input type="hidden" name="tstub_pdf_tot_garnish_prd" id="tstub_p_tot_garnish_prd" />
                  <input type="hidden" name="tstub_pdf_tot_garnish_ytd" id="tstub_p_tot_garnish_ytd" />       
                       
                                                                 
                  <input type="hidden" name="tstub_pdf_start_date" id="tstub_p_start_date" />
                  <input type="hidden" name="tstub_pdf_end_date" id="tstub_p_end_date" />
                  <input type="hidden" name="tstub_pdf_pay_date" id="tstub_p_pay_date" />
                  
                  <input type="hidden" name="tstub_pdf_gross_hrs" id="tstub_p_gross_hrs" />
                  <input type="hidden" name="tstub_pdf_gross_rate" id="tstub_p_gross_rate" />
                  <input type="hidden" name="tstub_pdf_ot_hrs" id="tstub_p_ot_hrs" />
                  
                  <input type="hidden" name="tstub_pdf_gross_prd" id="tstub_p_gross_prd" />
                  <input type="hidden" name="tstub_pdf_gross_ytd" id="tstub_p_gross_ytd" />
                  
                  <input type="hidden" name="tstub_pdf_taxable_gross_prd" id="tstub_p_taxable_gross_prd" />
                  <input type="hidden" name="tstub_pdf_taxable_gross_ytd" id="tstub_p_taxable_gross_ytd" />
               
                  <input type="hidden" name="tstub_pdf_fed_amt_deduct_prd" id="tstub_p_fed_amt_deduct_prd" />                    
                  <input type="hidden" name="tstub_pdf_fed_amt_deduct_ytd" id="tstub_p_fed_amt_deduct_ytd" />
                  
                  <input type="hidden" name="tstub_pdf_medicare_prd" id="tstub_p_medicare_prd" />
                  <input type="hidden" name="tstub_pdf_medicare_ytd" id="tstub_p_medicare_ytd" />
                
                  <input type="hidden" name="tstub_pdf_state_amtincometax_prd" id="tstub_p_state_amtincometax_prd" />
                  <input type="hidden" name="tstub_pdf_state_amtincometax_ytd" id="tstub_p_state_amtincometax_ytd" />
                  
                  <input type="hidden" name="tstub_pdf_fica_social_prd" id="tstub_p_fica_social_prd" />
                  <input type="hidden" name="tstub_pdf_fica_social_ytd" id="tstub_p_fica_social_ytd" />
                   
                  <input type="hidden" name="tstub_pdf_tot_ded_prd" id="tstub_p_tot_ded_prd" />
                  <input type="hidden" name="tstub_pdf_tot_ded_ytd" id="tstub_p_tot_ded_ytd" />
                       
                  <input type="hidden" name="tstub_pdf_net_pay_prd" id="tstub_p_net_pay_prd" />
                  <input type="hidden" name="tstub_pdf_net_pay_prd_deposit" id="tstub_p_net_pay_prd_deposit" />
                  <input type="hidden" name="tstub_pdf_net_pay_ytd" id="tstub_p_net_pay_ytd" />
                  <input type="hidden" name="tstub_pdf_net_pay_ytd_deposit" id="tstub_p_net_pay_ytd_deposit" />
                                                                                        
                  <input type="hidden" name="tstub_pdf_state_abb" id="tstub_p_state_abb" />                                                                         
                   
                  <input type="hidden" name="tstub_pdf_val_401k_prd" id="tstub_p_val_401k_prd" />
                  <input type="hidden" name="tstub_pdf_val_401k_ytd" id="tstub_p_val_401k_ytd" />
                  
                  <input type="hidden" name="tstub_pdf_union_dues_prd" id="tstub_p_union_dues_prd" />
                  <input type="hidden" name="tstub_pdf_union_dues_ytd" id="tstub_p_union_dues_ytd" />
                  
                  <input type="hidden" name="tstub_pdf_start_date2" id="tstub_p_start_date2" />
                  <input type="hidden" name="tstub_pdf_end_date2" id="tstub_p_end_date2" />
                
                  <input type="hidden" name="tstub_pdf_commission_prd" id="tstub_p_commission_prd" />
                  <input type="hidden" name="tstub_pdf_commission_ytd" id="tstub_p_commission_ytd" />
                  
                  <input type="hidden" name="tstub_pdf_check_num" id="tstub_p_check_num" />
                                                  
                  <input class="btn_download" type="submit" value="" name="submit"  style="cursor:pointer" /> 
              </form>
         </div>  
      </div> 
    
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->  
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->  


<div id="Modern">
		<h4>Modern is UNDER CONSTRUCTION AND TESTING ask us about it</h4>
        
        <div id="modern_paystub"> 
              <p id="modern_empr_add_name"></p>    
              <p id="modern_empr_add_street"></p>
              
             <div id="wrapper"> 
              <p id="modern_empr_add_city"></p>
              <p id="modern_empr_add_state"></p> 
             </div>
             
              <p id="modern_empr_add_zip"></p>
              
              <p id="modern_rout_num"></p> 
              <p id="modern_acc_num"></p> 
              <p id="modern_emp_email"></p> 
              <p id="modern_emp_id"></p> 
              <p id="modern_emp_f_name"></p>
              <p id="modern_emp_l_name"></p>
              <p id="modern_emp_street"></p>
              <p id="modern_emp_city"></p>
              <p id="modern_emp_state"></p>		<!--  This edits the preview on the Screen  -->
              <p id="modern_emp_zip"></p>         <!--  Names coming from pay_functions.js  -->
              <p id="modern_emp_ssn"></p>
              <p id="modern_emp_mar_status"></p>
              
              <p id="modern_garnish1_prd"></p>
              <p id="modern_garnish1_ytd"></p>
              <p id="modern_garnish2_prd"></p>
              <p id="modern_garnish2_ytd"></p>
              <p id="modern_garnish3_prd"></p>
              <p id="modern_garnish3_ytd"></p>
              <p id="modern_tot_garnish_prd"></p>
              <p id="modern_tot_garnish_ytd"></p>
              
              <p id="modern_start_date"></p>
              <p id="modern_end_date"></p>
              <p id="modern_pay_date"></p>
              
              <p id="modern_gross_hrs"></p>
              <p id="modern_gross_rate"></p>
              <p id="modern_ot_hrs"></p>
              
              <p id="modern_gross_prd"></p>
              <p id="modern_gross_ytd"></p>
              
              <p id="modern_taxable_gross_prd"></p>
              <p id="modern_taxable_gross_ytd"></p>
              
              <p id="modern_fed_amt_deduct_prd"></p> 
              <p id="modern_fed_amt_deduct_ytd"></p>
                  
              <p id="modern_medicare_prd"></p>
              <p id="modern_medicare_ytd"></p>
            
              <p id="modern_state_amtincometax_prd"></p>
              <p id="modern_state_amtincometax_ytd"></p>
             
              <p id="modern_fica_social_prd"></p>
              <p id="modern_fica_social_ytd"></p>
              
              <p id="modern_tot_ded_prd"></p>
              <p id="modern_tot_ded_ytd"></p>
              
              <p id="modern_net_pay_prd"></p>
              <p id="modern_net_pay_prd_deposit"></p>
              <p id="modern_net_pay_ytd"></p>
              <p id="modern_net_pay_ytd_deposit"></p>
              
              <p id="modern_state_abb"></p>
              
              <p id="modern_val_401k_prd"></p>
              <p id="modern_val_401k_ytd"></p>
              
              <p id="modern_union_dues_prd"></p>
              <p id="modern_union_dues_ytd"></p>
             
              <p id="modern_start_date2"></p>
              <p id="modern_end_date2"></p>
              
              <p id="modern_commission_prd"></p>
              <p id="modern_commission_ytd"></p>  
              
              <p id="modern_check_num"></p>
         </div>
        
         <?php 

  echo <<<ASDF
<div class="wrapper" style="width: 634px; overflow:hidden;height:775px;outline: 1px solid;">
<div style="position:relative;top: -220px;left: -180px;width: 1280px;">
<div class="pos" id="_0:0" style="top:0">
<img name="_1100:850" src="http://www.paycheckstubonline.com/page_001.jpg" height="1100" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_282:238" style="top:238;left:282">
<span id="_7.1" style=" font-family:Arial; font-size:7.1px; color:#000000">
C O .</span>
</div>
<div class="pos" id="_311:238" style="top:238;left:311">
<span id="_7.1" style=" font-family:Arial; font-size:7.1px; color:#000000">
FILE</span>
</div>
<div class="pos" id="_345:238" style="top:238;left:345">
<span id="_7.1" style=" font-family:Arial; font-size:7.1px; color:#000000">
DEPT.</span>
</div>
<div class="pos" id="_378:238" style="top:238;left:378">
<span id="_7.1" style=" font-family:Arial; font-size:7.1px; color:#000000">
CLOCK</span>
</div>
<div class="pos" id="_412:238" style="top:238;left:412">
<span id="_7.1" style=" font-family:Arial; font-size:7.1px; color:#000000">
NUMBER</span>
</div>
<div class="pos" id="_282:248" style="top:248;left:282">
<span id="_8.2" style=" font-family:Arial; font-size:8.2px; color:#000000">
ABC</span>
</div>
<div class="pos" id="_311:248" style="top:248;left:311">
<span id="_8.7" style=" font-family:Arial; font-size:8.7px; color:#000000">
126543 123456 12345</span>
</div>
<div class="pos" id="_412:248" style="top:248;left:412">
<span id="_8.1" style=" font-family:Arial; font-size:8.1px; color:#000000">
001379</span>
</div>
<div class="pos" id="_546:244" style="top:244;left:546">
<span id="_16.0" style=" font-family:Arial; font-size:16.0px; color:#000000">
Earnings Statement</span>
</div>
<div class="pos" id="_283:268" style="top:268;left:283">
<span id="_9.8" style="font-style:italic; font-family:Arial; font-size:9.8px; color:#000000">
$modern_empr_name</span>
</div>
<div class="pos" id="_546:269" style="top:269;left:546">
<span id="_9.8" style=" font-family:Arial; font-size:9.8px; color:#000000">
Period ending:</span>
</div>
<div class="pos" id="_652:267" style="top:267;left:652">
<span id="_9.5" style=" font-family:Arial; font-size:9.5px; color:#000000">
$end_date</span>
</div>
<div class="pos" id="_283:281" style="top:281;left:283">
<span id="_9.5" style="font-style:italic; font-family:Arial; font-size:9.5px; color:#000000">
$empr_street</span>
</div>
<div class="pos" id="_546:282" style="top:282;left:546">
<span id="_9.5" style=" font-family:Arial; font-size:9.5px; color:#000000">
Pay date:</span>
</div>
<div class="pos" id="_652:279" style="top:279;left:652">
<span id="_9.5" style=" font-family:Arial; font-size:9.5px; color:#000000">
$pay_date</span>
</div>
<div class="pos" id="_283:293" style="top:293;left:283">
<span id="_9.8" style="font-style:italic; font-family:Arial; font-size:9.8px; color:#000000">
$empr_city   $empr_zip</span>
</div>
<div class="pos" id="_282:327" style="top:327;left:282">
<span id="_8.7" style=" font-family:Arial; font-size:8.7px; color:#000000">
Taxable Marital Status: Married</span>
</div>
<div class="pos" id="_282:337" style="top:337;left:282">
<span id="_8.7" style=" font-family:Arial; font-size:8.7px; color:#000000">
Exemptions/Allowances:</span>
</div>
<div class="pos" id="_546:332" style="top:332;left:546">
<span id="_10.9" style="font-weight:bold; font-family:Arial; font-size:10.9px; color:#000000">
$emp_l_name $emp_f_name </span>
</div>
<div class="pos" id="_295:346" style="top:346;left:295">
<span id="_8.7" style=" font-family:Arial; font-size:8.7px; color:#000000">
Federal: 3, $25 Additional Tax</span>
</div>
<div class="pos" id="_546:343" style="top:343;left:546">
<span id="_10.6" style="font-weight:bold; font-family:Arial; font-size:10.6px; color:#000000">
$emp_street </span>
</div>

<div class="pos" id="_295:355" style="top:355;left:295">
<span id="_8.2" style=" font-family:Arial; font-size:8.2px; color:#000000">
State:</span>
</div>
<div class="pos" id="_330:355" style="top:355;left:330">
<span id="_8.2" style=" font-family:Arial; font-size:8.2px; color:#000000">
2</span>
</div>
<div class="pos" id="_546:355" style="top:355;left:546">
<span id="_10.8" style="font-weight:bold; font-family:Arial; font-size:10.8px; color:#000000">
$emp_city &nbsp; $emp_zip </span>
</div>
<div class="pos" id="_295:365" style="top:365;left:295">
<span id="_8.2" style=" font-family:Arial; font-size:8.2px; color:#000000">
Local:</span>
</div>
<div class="pos" id="_330:365" style="top:365;left:330">
<span id="_8.2" style=" font-family:Arial; font-size:8.2px; color:#000000">
2</span>
</div>

<div class="pos" id="_70:393" style="top:393;left:70">

</div>
<div class="pos" id="_207:405" style="top:405;left:207">
<span id="_10.2" style="font-weight:bold; font-family:Arial; font-size:10.2px; color:#000000">
Earnings</span>
</div>
<div class="pos" id="_282:405" style="top:405;left:282">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:9.2px; color:#000000">
rate</span>
</div>
<div class="pos" id="_332:405" style="top:405;left:332">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:9.2px; color:#000000">
hours</span>
</div>
<div class="pos" id="_397:405" style="top:405;left:397">
<span id="_10.0" style="font-weight:bold; font-family:Arial; font-size:10.0px; color:#000000">
this period</span>
</div>
<div class="pos" id="_461:405" style="top:405;left:461">
<span id="_10.0" style="font-weight:bold; font-family:Arial; font-size:10.0px; color:#000000">
year to date</span>
</div>
<div class="pos" id="_545:405" style="top:405;left:545">
<span id="_10.3" style="font-weight:bold; font-family:Arial; font-size:10.3px; color:#000000">
Important Notes</span>
</div>

<div class="pos" id="_207:418" style="top:418;left:207">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
Regular</span>
</div>
<div class="pos" id="_282:418" style="top:418;left:282">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
15.192</span>
</div>
<div class="pos" id="_334:418" style="top:418;right: 923">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
40.00</span>
</div>
<div class="pos" id="_416:418" style="top:418;right: 835;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
607.68</span>
</div>
<div class="pos" id="_473:418" style="top:418;right:766">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
17,324.54</span>
</div>
<div class="pos" id="_545:420" style="top:420;left:545">
<span id="_9.0" style=" font-family:Arial; font-size:9.0px; color:#000000">
EFFECTIVE THIS PAY PERIOD YOUR REGULAR</span>
</div>
<div class="pos" id="_207:430" style="top:430;left:207">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
Overtime</span>
</div>
<div class="pos" id="_282:430" style="top:430;left:282">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
22.788</span>
</div>
<div class="pos" id="_339:430" style="top:430;right: 923">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
1.50</span>
</div>
<div class="pos" id="_422:430" style="top:430;right: 835;">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
34.18</span>
</div>
<div class="pos" id="_486:430" style="top:430;right:766">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
649.09</span>
</div>


<div class="pos" id="_207:443" style="top:443;left:207">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
Holiday</span>
</div>
<div class="pos" id="_282:443" style="top:443;left:282">
<span id="_10.7" style=" font-family:Arial; font-size:10.7px; color:#000000">
--</span>
</div>
<div class="pos" id="_348:443" style="top:443;right: 923">
<span id="_10.7" style=" font-family:Arial; font-size:10.7px; color:#000000">
--</span>
</div>
<div class="pos" id="_436:443" style="top:443;right: 835;">
<span id="_10.7" style=" font-family:Arial; font-size:10.7px; color:#000000">
--</span>
</div>
<div class="pos" id="_486:443" style="top:443;right:766">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
478.50</span>
</div>
<div class="pos" id="_545:448" style="top:448;left:545">
<span id="_9.0" style=" font-family:Arial; font-size:9.0px; color:#000000">
TO $15.192 PER HOUR.</span>
</div>
<div class="pos" id="_207:455" style="top:455;left:207">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
Vacation</span>
</div>
<div class="pos" id="_282:455" style="top:455;left:282">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
15.192</span>
</div>
<div class="pos" id="_334:455" style="top:455;right: 923">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
40.00</span>
</div>
<div class="pos" id="_416:455" style="top:455;right: 835;">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
607.68</span>
</div>
<div class="pos" id="_486:455" style="top:455;right:766">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
945.22</span>
</div>
<div class="pos" id="_207:468" style="top:468;left:207">
<span id="_9.3" style=" font-family:Arial; font-size:9.3px; color:#000000">
Bonus</span>
</div>
<div class="pos" id="_282:468" style="top:468;left:282">
<span id="_10.7" style=" font-family:Arial; font-size:10.7px; color:#000000">
--</span>
</div>
<div class="pos" id="_348:468" style="top:468;right: 923">
<span id="_10.7" style=" font-family:Arial; font-size:10.7px; color:#000000">
--</span>
</div>
<div class="pos" id="_436:468" style="top:468;right: 835;">
<span id="_10.7" style=" font-family:Arial; font-size:10.7px; color:#000000">
--</span>
</div>
<div class="pos" id="_491:468" style="top:468;right:766">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
20.00</span>
</div>
<div class="pos" id="_545:475" style="top:475;left:545">
<span id="_9.0" style=" font-family:Arial; font-size:9.0px; color:#000000">
WE WILL BE STARTING OUR UNITED WAY FUND</span>
</div>
<div class="pos" id="_207:480" style="top:480;left:207">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
Float</span>
</div>
<div class="pos" id="_282:480" style="top:480;left:282">
<span id="_10.7" style=" font-family:Arial; font-size:10.7px; color:#000000">
--</span>
</div>
<div class="pos" id="_348:480" style="top:480;right: 923">
<span id="_10.7" style=" font-family:Arial; font-size:10.7px; color:#000000">
--</span>
</div>
<div class="pos" id="_436:480" style="top:480;right: 835;">
<span id="_10.7" style=" font-family:Arial; font-size:10.7px; color:#000000">
--</span>
</div>
<div class="pos" id="_486:480" style="top:480;right:766">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
544.54</span>
</div>
<div class="pos" id="_545:488" style="top:488;left:545">
<span id="_8.8" style=" font-family:Arial; font-size:8.8px; color:#000000">
DRIVE SOON AND LOOK FORWARD TO YOUR</span>
</div>

<div class="pos" id="_283:493" style="top:493;left:283">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:9.2px; color:#000000">
Gross Pay</span>
</div>
<div class="pos" id="_403:493" style="top:493;left:403">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:9.2px; color:#000000">
$1,249.54</span>
</div>
<div class="pos" id="_473:493" style="top:493;right:766">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
19,961.89</span>
</div>
<div class="pos" id="_545:502" style="top:502;left:545">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
PARTICIPATION.</span>
</div>

<div class="pos" id="_207:518" style="top:518;left:207">
<span id="_10.1" style="font-weight:bold; font-family:Arial; font-size:10.1px; color:#000000">
Deductions</span>
</div>
<div class="pos" id="_282:519" style="top:519;left:282">
<span id="_9.5" style="font-weight:bold; font-family:Arial; font-size:9.5px; color:#000000">
Statutory</span>
</div>
<div class="pos" id="_461:519" style="top:519;left:461">
<span id="_9.9" style="font-weight:bold; font-family:Arial; font-size:9.9px; color:#000000">
year to date</span>
</div>
<div class="pos" id="_282:531" style="top:531;left:282">
<span id="_9.7" style=" font-family:Arial; font-size:9.7px; color:#000000">
Federal Income Tax</span>
</div>
<div class="pos" id="_415:531" style="top:531;right: 831;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $fed_amt_deduct_prd</span>
</div>
<div class="pos" id="_478:531" style="top:531;left:478">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$fed_amt_deduct_ytd</span>
</div>

<div class="pos" id="_282:544" style="top:544;left:282">
<span id="_9.9" style=" font-family:Arial; font-size:9.9px; color:#000000">
Social Security Tax</span>
</div>
<div class="pos" id="_415:544" style="top:544;right: 831;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $fica_social_prd	</span>
</div>
<div class="pos" id="_478:544" style="top:544;left:478">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$fica_social_ytd</span>
</div>

<div class="pos" id="_282:556" style="top:556;left:282">
<span id="_9.9" style=" font-family:Arial; font-size:9.9px; color:#000000">
Medicare Tax</span>
</div>
<div class="pos" id="_415:556" style="top:556;right: 831;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $medicare_prd</span>
</div>
<div class="pos" id="_486:556" style="top:556;left:486">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$medicare_ytd</span>
</div>
<div class="pos" id="_282:569" style="top:569;left:282">
<span id="_10.0" style=" font-family:Arial; font-size:10.0px; color:#000000">
Anytown State Income Tax</span>
</div>
<div class="pos" id="_415:569" style="top:569;right: 831;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $state_amt_incometax_prd</span>
</div>
<div class="pos" id="_486:569" style="top:569;left:486">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$state_amt_incometax_ytd</span>
</div>
<div class="pos" id="_282:581" style="top:581;left:282">
<span id="_10.0" style=" font-family:Arial; font-size:10.0px; color:#000000">
Anytown Local Tax</span>
</div>
<div class="pos" id="_415:581" style="top:581;right: 831;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- ###.##</span>
</div>
<div class="pos" id="_486:581" style="top:581;right: 766;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
###.##</span>
</div>
<div class="pos" id="_282:600" style="top:600;left:282">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:9.2px; color:#000000">
Other</span>
</div>

<div class="pos" id="_282:613" style="top:613;left:282">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
401(k)</span>
</div>
<div class="pos" id="_412:613" style="top:613;right: 831;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- $pdf_val_401k_prd*</span>
</div>
<div class="pos" id="_486:613" style="top:613;right: 766;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$pdf_val_401k_ytd</span>
</div>
<div class="pos" id="_282:625" style="top:625;left:282">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
FSA</span>
</div>
<div class="pos" id="_417:625" style="top:625;right: 831;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
- ##.##*</span>
</div>
<div class="pos" id="_491:625" style="top:625;right: 766;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
##.##</span>
</div>

<div class="pos" id="_282:638" style="top:638;left:282">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
Commuter Trip</span>
</div>
<div class="pos" id="_420:638" style="top:638;right: 831;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
-7.00*</span>
</div>
<div class="pos" id="_482:638" style="top:638;right: 766;">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
-##.##</span>
</div>

<div class="pos" id="_282:657" style="top:657;left:282">
<span id="_9.5" style="font-weight:bold; font-family:Arial; font-size:9.5px; color:#000000">
Net Pay</span>
</div>
<div class="pos" id="_408:657" style="top:657;right: 832;">
<span id="_9.1" style="font-weight:bold; font-family:Arial; font-size:9.1px; color:#000000">
$ 979.49</span>
</div>

<div class="pos" id="_285:684" style="top:684;left:285">
<span id="_9.8" style="font-weight:bold; font-family:Arial; font-size:9.8px; color:#000000">
* Excluded from federal taxable wages</span>
</div>


<div class="pos" id="_291:710" style="top:710;left:291">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
Your federal wages this period are $1,225.04</span>
</div>




<div class="pos" id="_276:811" style="top:811;left:276">
<span id="_9.5" style=" font-family:Arial; font-size:9.5px; color:#000000">
$empr_name</span>
</div>
<div class="pos" id="_545:811" style="top:811;left:545">
<span id="_9.9" style="font-weight:bold; font-family:Arial; font-size:9.9px; color:#000000">
Payroll check number:</span>
</div>
<div class="pos" id="_661:811" style="top:811;left:661">
<span id="_9.2" style="font-weight:bold; font-family:Arial; font-size:9.2px; color:#000000">
001379</span>
</div>
<div class="pos" id="_676:795" style="top:795;left:676">
<span id="_18.4" style=" font-family:Arial Narrow; font-size:18.4px; color:#ff6d65">
3 2 7 2 8 3 1 0 E</span>
</div>
<div class="pos" id="_276:824" style="top:824;left:276">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
$empr_street</span>
</div>
<div class="pos" id="_545:824" style="top:824;left:545">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
Pay date:</span>
</div>
<div class="pos" id="_661:822" style="top:822;left:661">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
$pay_date</span>
</div>

<div class="pos" id="_276:836" style="top:836;left:276">
<span id="_9.6" style=" font-family:Arial; font-size:9.6px; color:#000000">
$empr_city   $empr_zip</span>
</div>


<div class="pos" id="_211:870" style="top:870;left:211">
<span id="_9.0" style=" font-family:Arial; font-size:9.0px; color:#000000">
Pay to the</span>
</div>
<div class="pos" id="_211:880" style="top:880;left:211">
<span id="_8.3" style=" font-family:Arial; font-size:8.3px; color:#000000">
order of:</span>
</div>
<div class="pos" id="_276:878" style="top:878;left:276">
<span id="_10.4" style="font-weight:bold; font-family:Arial; font-size:10.4px; color:#000000">
$emp_f_name $emp_l_name</span>
</div>

<div class="pos" id="_211:894" style="top:894;left:211">
<span id="_9.1" style=" font-family:Arial; font-size:9.1px; color:#000000">
This amount:</span>
</div>
<div class="pos" id="_276:896" style="top:896;left:276">
<span id="_9.8" style=" font-family:Arial; font-size:9.8px; color:#000000">
NINE HUNDRED SEVENTY-NINE AND 49/100 DOLLARS</span>
</div>
<div class="pos" id="_748:896" style="top:896;left:748">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
$979.49</span>
</div>


<div class="pos" id="_296:931" style="top:931;left:296">
<span id="_9.5" style=" font-family:Arial; font-size:9.5px; color:#000000">
SAMPLE</span>
</div>

<div class="pos" id="_296:912" style="top:912;left:296">
<span id="_9.2" style=" font-family:Arial; font-size:9.2px; color:#000000">
NON-NEGOTIABLE<span id="_61.2" style="font-weight:bold; font-size:61.2px; color:#e0e0e0"> SAMPLE</span></span>
</div>
<div class="pos" id="_211:952" style="top:952;left:211">
<span id="_6.3" style=" font-family:Arial; font-size:6.3px; color:#000000">
BANK NAME</span>
</div>
<div class="pos" id="_520:954" style="top:954;left:520">
<span id="_6.3" style=" font-family:Arial; font-size:6.3px; color:#000000">
AUTHORIZED SIGNATURE</span>
</div>
<div class="pos" id="_211:958" style="top:958;left:211">
<span id="_6.3" style=" font-family:Arial; font-size:6.3px; color:#000000">
STREET ADDRESS</span>
</div>
<div class="pos" id="_296:951" style="top:951;left:296">
<span id="_10.0" style=" font-family:Arial; font-size:10.0px; color:#000000">
VOID VOID VOID</span>
</div>
<div class="pos" id="_211:965" style="top:965;left:211">
<span id="_6.7" style=" font-family:Arial; font-size:6.7px; color:#000000">
CITY STATE ZIP</span>
</div>
<div class="pos" id="_520:962" style="top:962;left:520">
<span id="_6.7" style=" font-family:Arial; font-size:6.7px; color:#000000">
VOID AFTER 90 DAYS</span>
</div>
<div class="pos" id="_323:997" style="top:997;left:323">
<span id="_14.6" style=" font-family:Arial; font-size:14.6px; color:#000000">
<li type="square">001379 1220004964040110157
</li></span></div>
<div class="pos" id="_208:1016" style="top:1016;left:208">
<span id="_7.8" style="font-weight:bold; font-family:Arial; font-size:7.8px; color:#ffffff">
THE ORIGINAL DOCUMENT HAS A REFLECTIVE WATERMARK ON THE BACK.</span>
</div>
<div class="pos" id="_517:1016" style="top:1016;left:517">
<span id="_7.8" style="font-weight:bold; font-family:Arial; font-size:7.8px; color:#ffffff">
HOLD AT AN ANGLE TO VIEW WHEN CHECKING THE ENDORSEMENT.</span>
</div>
<div class="pos" id="_782:1070" style="top:1070;left:782">
<span id="_8.1" style=" font-family:Arial; font-size:8.1px; color:#000000">
04-1903</span>
</div>
ASDF;
?>

      </div> 
      
       <div id="paypal_tstub">    <!--  BUY IT NOW - AND - send to DB   (tstub_paypal_db_prep.php)   -->
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="paypal_tstub_form">           
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="9XJTNQ4K2FBRW">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="Options">Options</td></tr><tr><td><select name="os0">
                        <option value="PDF Download - You Print">PDF Download - You Print $7.00 USD</option>
                        <option value="3 for price of 2">3 for price of 2 $14.00 USD</option>
                        <option value="Unlimited Download">Unlimited Download $30.00 USD</option>
                        <option value="We print on real Check paper">We print on real Check paper $40.00 USD</option>
                    </select> </td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" id="custom-tstub-pp" name="custom" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
         </div>


<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --> 
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --> 
    
    
      
	<div id="stub3">
    <tbody><tr>
            <td bordercolor="#FFFFFF" colspan="3"><h2>County Office of Education Earnings and Leave Statement<br></h2></td>
        </tr>
        <tr bordercolor="#FFFFFF">
            <td colspan="3">.</td>
        </tr>
        <tr>
            <td colspan="3">
            <table border="2" width="928">
                <tbody><tr bgcolor="#CCCCCC">
                    <td align="left" colspan="2"><b>EMPLOYEE NAME/ID NUMBER</b></td>
                    <td align="center"><b>FED</b></td>
                    <td align="center"><b>STATE</b></td>
                    <td align="center" colspan="2"><b>PAY CALENDER</b></td>
                    <td align="center"><b>PERIOD END</b></td>
                    <td align="center"><b>ISSUE DATE</b></td>
                    <td align="center"><b>WARRANT NUMBER</b></td>
                </tr>
                <tr>
                    <td align="left" colspan="2"><label id="lbl_emp_name_1096"></label><br><label id="lbl_emp_idno_1096"></label></td>
                    <td align="center">M4</td>
                    <td align="center">M4</td>
                    <td align="center" colspan="2">CECONT</td>
                    <td align="center"><label id="lbl_emp_sdate_1096"></label></td>
                    <td align="center"><label id="lbl_emp_issudate_1096"></label></td>
                    <td align="center">378961</td>
                </tr>
                <tr bgcolor="#CCCCCC">
                    <td align="left" colspan="2"><b>DISTRICT/PAY LOCATION</b></td>
                    <td align="center" colspan="2"><b>CONTACT:</b></td>
                    <td align="center" colspan="5"><b>LEAVE BALANCE</b></td>
                </tr>
                <tr>
                    <td align="left" colspan="2">99-MY SCHOOL DISTRICT<br>09-SCHOOL SITE</td>
                    <td align="left" colspan="2">PAYROLL<br>(831) 555-1234</td>
                    <td align="center">SICK<br>10.00</td>
                    <td align="center"> PER BUS<br>.</td>
                    <td align="center">PER NECES<br>.</td>
                    <td align="center">VAC<br>.</td>
                    <td align="center">AS OF<br>10/31/08</td>
                </tr>
            </tbody></table>
            </td>
        </tr>
        <tr bordercolor="#FFFFFF">
            <td colspan="3">.</td>
        </tr>
        <tr>
            <td>
            <table border="2" width="400">
                <tbody><tr bgcolor="#CCCCCC">
                    <td align="center" colspan="5"><b>GROSS EARNINGS</b></td>
                </tr>
                <tr bgcolor="#CCCCCC">
                    <td align="center">TYPE</td>
                    <td align="center">UNIT</td>
                    <td align="center">NO UNITS</td>
                    <td align="center">RATE</td>
                    <td align="center">EARNINGS</td>
                </tr>
                <tr>
                    <td align="left">NML<br>BILN<br>DOCT<br>MAST<br>CASH<br>.<br>.<br>.<br>.<br>.<br>.</td>
                    <td align="left">.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.</td>
                    <td align="left">.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.</td>
                    <td align="left">.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.</td>
                    <td align="right">8,581.03<br>100.00<br>83.33<br>83.33<br>36.10<br>.<br>.<br>.<br>.<br>.<br>.</td>
                </tr>
                <tr>
                    <td align="left" colspan="5">TOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8883.79</td>
                </tr>
            </tbody></table>
            </td>
            
            <td>
            <table border="2" width="517">
                <tbody><tr bgcolor="#CCCCCC">
                    <td align="center" colspan="2"><b>DESCRIPTION</b></td>
                    <td align="center"><b>CURRENT</b></td>
                    <td align="center"><b>YEAR TO DATE</b></td>
                </tr>
                <tr>
                    <td align="left" colspan="2">*GROSS PAY<br>TAX SHELTER<br>SECTION 125/CAFETERIA PLAN<br>STRS RETIREMENT<br>TAXABLE   												GROSS<br>	FEDERAL INCOME TAX<br>ADD'L FEDERAL INCOME TAX<br>STATE INCOME TAX<br>MEDICARE TAX 												<br>**NETPAY**<br>.</td>
<td align="right"><label id="lbl_grosspay_1096"></label><br>0.00<br>100.00<br>826.87<br>7,956.92<br><label id="lbl_federal_incm1096"></label><br>150.00<br>0.00<br> <label id="lbl_medicare_incom1096"></label><br><br>.</td>
                    <td align="right"><label id="lbl_grosspay_ytd_1096"></label><br>1,400.00<br>800.00<br>6,665.36<br>62,834.96<br><label id="lbl_federal_incmytd1096"></label><br>0.00<br><label id="lbl_gross_ytd1096"></label><br><label id="lbl_medicare_incomytd1096"></label><br><br>.</td>
                </tr>
                <tr>
                    <td align="center" colspan="2"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                </tr>
            </tbody></table>
            </td>
        </tr>
        
        <tr>
            <td>
            <table border="2" width="402">
                <tbody><tr bgcolor="#CCCCCC">
                    <td align="center" colspan="5"><b>WARNINGS</b></td>
                </tr>
                <tr>
                    <td colspan="5">TB Test Expires 10/30/2010. Contract your District HR immedaitely.<br>.</td>
                </tr>
            </tbody></table>
            <table border="2" width="402">
                <tbody><tr>
                    <td align="center" colspan="5">.</td>
                </tr>
            </tbody></table>
            <table border="2" width="402">
                <tbody><tr bgcolor="#CCCCCC">
                    <td align="center" colspan="5"><b>MESSAGES AND NOTES</b></td>
                </tr>
                <tr>
                    <td colspan="5">Credential(s) to expire within 90 days Renew online at WWW.CTC.CA.GOV<br>
                            Please check your address and contact yourHR dept to correct.<br>
                            FOR HELP READING THE NEW PAYSTUB GO TO www.infotech.santacruz.k12.ca.us/readpaystub</td>
                </tr>
            </tbody></table>
            </td>
            
            <td>
            <table border="2" width="517">
                <tbody><tr bgcolor="#CCCCCC">
                    <td align="center" colspan="2"><b>DEDUCTIONS/CONTRIBUTIONS</b></td>
                    <td align="center"><b>EMPLOYEE</b></td>
                    <td align="center"><b>EMPLOYER</b></td>
                </tr>
                <tr>
                    <td align="left" colspan="2">AM FID s125 MEDICAL REIMB ACCT MEDICAL INSURANCE<br> ADDITIONAL STRS - PU REPAYMENT												                                            <br>.<br>.<br>.<br>.<br>.<br>.<br>. </td>
                    <td align="right">100.00<br>.<br>116.17
                                         <br>.<br>.<br>.<br>.<br>.<br>.<br>.	</td>
                    <td align="right">0.38<br>975.74<br>0.38
                                         <br>.<br>.<br>.<br>.<br>.<br>.<br>.	</td>
                </tr>
                <tr>
                    <td align="left" colspan="2">TOTAL</td>
                    <td align="right">216.17</td>
                    <td align="right">975.74</td>
                </tr>
            </tbody></table>
            </td>
        </tr>
        
</tbody></table>
    </p>
    </div> 
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --> 
    <div id="w2"><h4>Fully Functional IRS W-2 Form Generator</h4>
         <div id="w2-background"> 
          <p id="w2_empr_add_name"></p>      
          <p id="w2_empr_add_street"></p>
          <p id="w2_empr_add_city"></p>
          <p id="w2_empr_add_state"></p>
          <p id="w2_empr_add_zip"></p>
        
          <p id="w2_emp_id"></p> 
          <p id="w2_emp_f_name"></p>					<!--  This edits the preview on the Screen of W-2  -->
          <p id="w2_emp_l_name"></p>
          <p id="w2_emp_street"></p>
          <p id="w2_emp_city"></p>
          <p id="w2_emp_state"></p>
          <p id="w2_emp_zip"></p>
          <p id="w2_emp_ssn"></p>
              
          <p id="w2_fed_gross"></p>    
          <p id="w2_fed_amtytd"></p>
          
          <p id="w2_medicare_ytd"></p>
          <p id="w2_fica_social_ytd"></p>
          
          <p id="w2_state_amtincometax"></p>
          
          <p id="w2_state_abb"></p>
          
         </div> 
          
          
       
              
          <h4>W-2 Form</h4>
               <form action="http://www.paycheckstubonline.com/w2.php" name="form1" method="POST" target="_blank">
                    <input type="hidden" name="w2_pdf_empr_add_name" id="w2_p_empr_add_name" />
                    <input type="hidden" name="w2_pdf_empr_add_street" id="w2_p_empr_street" />
                    <input type="hidden" name="w2_pdf_empr_add_city" id="w2_p_empr_add_city" />
                    <input type="hidden" name="w2_pdf_empr_add_state" id="w2_p_empr_add_state" />
                    <input type="hidden" name="w2_pdf_empr_zip" id="w2_p_empr_zip"/>
                    
                    
                    <input type="hidden" name="w2_pdf_emp_id" id="w2_p_emp_id" />
                    <input type="hidden" name="w2_pdf_emp_f_name" id="w2_p_emp_f_name" />
                    <input type="hidden" name="w2_pdf_emp_l_name" id="w2_p_emp_l_name" />				<!--  This edits the PDF on the Screen  -->
                    <input type="hidden" name="w2_pdf_emp_street" id="w2_p_emp_street" />
                    <input type="hidden" name="w2_pdf_emp_city" id="w2_p_emp_city" />
                    <input type="hidden" name="w2_pdf_emp_state" id="w2_p_emp_state" />
                    <input type="hidden" name="w2_pdf_emp_zip" id="w2_p_emp_zip" />
                    <input type="hidden" name="w2_pdf_emp_ssn" id="w2_p_emp_ssn" value="<?php echo $empr_ssn ?>" />
                   
                   
                    <input type="hidden" name="w2_pdf_gross_ytd" id="w2_p_gross_ytd" />
                    <input type="hidden" name="w2_pdf_fed__with_held_ytd" id="w2_p_fed_with_held_ytd" />
                    
                    <input type="hidden" name="w2_pdf_medicare_ytd" id="w2_p_medicare_ytd" />
                    <input type="hidden" name="w2_pdf_fica_social_ytd" id="w2_p_fica_social_ytd" />
                    
                    <input type="hidden" name="w2_pdf_state_amtincometax" id="w2_p_state_amtincometax" />
                    
                    <input type="hidden" name="w2_pdf_state_abb" id="w2_p_state_abb" />
          
                    <input class="btn2" type="submit" value=""   name="submit"  style="cursor:pointer" />  
              </form>
              
                   
                    <label id="page11"></label></td>
                    
                    <label id="lbl_fed_amtytd"></label></td>
                 
                    <label id="page2"></label>
                    <label id="page12"></label></td>
                    <label id="lbl_medicare_period"></label></td>
                    <label id="lbl_medicare_ytd"></label></td>
                  
                    <label id="page2"></label>
                    <label id="page13"></label>
                    <label id="lbl_state_amtincometax"></label>
                    <label id="lbl_state_amtincometaxytd"></label>
                 
                    <label id="page2"></label>
                    <label id="page13"> </label>
                    <label id="lbl_fica_social_period"></label>
                    <label id="lbl_fica_social_ytd"></label>
               
                      <label id="page3"></label>
                      
                      <label id="page4"></label>
                   
                    <label id="lbl_gross_rate"></label>
                   <label id="lbl_thisperiod"></label>
                    <label id="lbl_gross_ytd"></label><label id="page8"></label>
                    <label id="lbl_other_ded_thisperiod"></label>
                    <label id="lbl_other_ded_ytd"></label>
                  
                    <label id="lbl_other_ded_thisperiod1"></label>
                    <label id="lbl_other_ded_ytd1"></label>
                  
                   <label id="page10"></label>
                 
                    <td><label id="lbl_gross_thisytd"></label></td>
                   
                    <td><label id="lbl_other_ded_thisperiod2"></label></td>
                    <td><label id="lbl_other_ded_ytd2"></label></td>
                        <label id="lbl_empr_add_street"></label>
                     
                      <label id="lbl_empr_add_city"></label>
                      <label id="lbl_empr_add_state"></label>
                      <label id="lbl_empr_add_zip"></label>
                      <label id="lbl_empr_add_name"></label>
                     
                      <label id="lbl_empr_addorder_street"></label>
                   
                      <label id="lbl_empr_addorder_city"></label>
                      <label id="lbl_empr_addorder_state"></label>
                      <label id="lbl_empr_addorder_zip"></label>
                      

              
    	</div><!-- end w2-->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->   
	<div id="1099"><h4>1099 - Coming soon</h4>
	

<table bordercolor="#000000" border="2" class="w1096">
		
			<tbody><tr>
				<td bordercolor="#FFFFFF" colspan="5">Form <strong>1099-MISC </strong>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;						 									 					CORRECTED(if checked) 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;(keep for your records)</td>
			</tr>
			<tr>
				<td rowspan="3" colspan="2"><h5>PAYER'S name,street address,city,state,ZIP code, and telephone no.</h5><br>
								<h3><label id="lbl_company_name"></label><br>.<br><label id="lbl_company_add"></label>, <label id="lbl_company_city"></label>
								<label id="lbl_company_zip"></label><br>.<br>.<br>.</h3></td>
				<td>1. Rents<br>.<br>$</td>
				<td rowspan="2">DMB No. 1545-0115<br>.<br><strong>2011</strong><br>.<br>Form 1099-MISC</td>
				<td align="center" rowspan="2"><br>.<br><strong>Miscellaneous<br>Income</strong><br>.<br>38-2099803<br>Department of the  									Treasury -- IRS  </td>
			</tr>
			<tr>
				<td>2. Royalities<br>.<br>$</td>
			</tr>
			<tr>
				<td>3. Other income<br>$<br>.</td>
				<td bordercolor="#000033"><strong>4. Fed. Inc. tax withheld<br>$</strong><br>.</td>
				<td align="center" rowspan="2"><strong>Copy B<br>For Recipent</strong></td>
			</tr>
			<tr bordercolor="#000000">
				<td>PAYER'S federal identification number<br>.<br>12-1234567</td>
				<td>RECIPIENT'S identification number<br>.<br>444-44-4444</td>
				<td>5. Fishing boat procedes<br>.<br>$</td>
				<td>6. Medical and health care payments<br>.<br>$</td>
			</tr>
			<tr>
				<td rowspan="3" colspan="2"><h5>RECIPIENT'S name,address,and ZIP code.</h5><br>
								<h3><label id="lbl_recipent_name"></label><br>.<br>.<br><label id="lbl_recipent_add"></label><br><label id="lbl_recipent_city"></label>
								<label id="lbl_recipent_state"></label> <label id="lbl_recipent_zip"></label></h3></td>
				<td>7. Nonemployee compensation<br>.<br>&nbsp;650.00</td>
				<td>8. Substitute payments in or interest<br>.<br>$</td>
				<td align="center" rowspan="4">This is important tax <br>information and is being <br>furnished to the Internal<br> Revenue  	 							Service. If you<br> are required ti file a return, <br>a negligence panelty or <br>other sanction may be <br>    						imposed on you if this <br>income is taxable and the IRS<br> determines that it has not<br> been reported.</td>
			</tr>
			<tr>
				<td>9. Payer made direct sale of $5000 or more of consumer products to a buyer(recipients) for resale.&nbsp;&nbsp;»<br>$
							<br>.</td>
				<td>10. Crop insurance proceeds<br>.<br>$</td>
			</tr>
			<tr>
				<td>11. <br>.</td>
				<td>10. <br>.</td>
			</tr>
			<tr>
				<td colspan="2">Account number (see instructions)<br>.</td>
				<td>13. Excess golden parachute payments<br>.<br>$</td>
				<td>14. Gross proceeds paid to an attorney<br>.<br>$</td>
			</tr>
			<tr>
				<td>15a. Section 409a deferrals<br>.<br>$</td>
				<td>15b. Section 409b income<br>.<br>$</td>
				<td>16. State tax withheld<br>$<br>$</td>
				<td>17. State/Payer's state no.<br>12-1234567<br>.</td>
				<td>18. State income<br>$<br>$</td>
			</tr>
	</tbody></table>
    </div> 
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --> 

  </div> <!-- block -->
  
</div> <!-- #tabbed-nav-->    
 <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/pay-functions.js" type="text/javascript"></script>


  <script>
 
  var startweek = 0;
  var endweek = 0;
  var startmonth = 0;
  var endmonth = 0;
  
	$(document).ready(function() {
		$( "#start_date" ).datepicker({showWeek: true,
		    maxDate: "+1D",
			//minDate: new Date(2000, 1 - 1, 01),
		    changeMonth: true,
            changeYear: true,
			//firstday: 3,
			numberOfMonths: 3,
			onSelect: function(dateText, inst) {
  				startdate = $(this).datepicker('getDate');
			    startweek = ($.datepicker.iso8601Week(startdate));
				startyear = $("#start_date").datepicker('getDate').getFullYear();
				getdata();
		}});
		$("#end_date").datepicker({clickInput:true,
		    //	maxDate: "+0D",
			minDate: new Date(2000, 1 - 1, 01),
		    changeMonth: true,
            changeYear: true,
			onSelect: function(dateText, inst) {
  				enddate = $(this).datepicker('getDate');
			    endweek = ($.datepicker.iso8601Week(enddate));
				getdata();
		}});
		$('#pay_date').datepicker({clickInput:true}
		  
		);
		
	});
</script>
   
   
    
<script>
$(function() {
$( document ).tooltip();
});
    $( '#start_date' ).tooltip({
    position: {
      my: 'left bottom',
      at: 'right+10 center'
    }
  });
  
  $( '#end_date' ).tooltip({
    position: {
      my: 'left bottom',
      at: 'right+10 center'
    }
  });
  
  $( '#pay_date' ).tooltip({
    position: {
      my: 'left bottom',
      at: 'right+10 center'
    }
  });
  
    $( '#commission_prd' ).tooltip({
    position: {
      my: 'left bottom',
      at: 'right+10 center'
    }
  });
  
    $( '#commission_ytd' ).tooltip({
    position: {
      my: 'left bottom',
      at: 'right+10 center'
    }
  });
  
</script>



<script>
$(function() {
$( "#tabs" ).tabs();
});
</script> 

<script>
function Cur_format(amount)
{
    var i = parseFloat(amount);
    if(isNaN(i)) { i = 0.00; }
    var minus = '';
    if(i < 0) { minus = '-'; }
    i = Math.abs(i);
    i = parseInt((i + .005) * 100);
    i = i / 100;
    s = new String(i);
    if(s.indexOf('.') < 0) { s += '.00'; }
    if(s.indexOf('.') == (s.length - 2)) { s += '0'; }
    s = minus + s;
    return s;
}
</script>


<script>
   function validate() {
//	  alert (document.forms["form1"]["empr_add_state"].value);
//	  var xstate=document.forms["form1"]["empr_add_state"].value;
	  //var xstartdate=document.forms["form1"]["start"].value;
	  //var xenddate=document.forms["form1"]["end_date"].value;
	  if (document.getElementById('emp_state').value ==null || document.getElementById('emp_state').value==""){
		  alert("What State does the Employee live in.\nWe need this for State Tax calculations");
		  return false;
		  //break;
	  }
	  if (document.getElementById('emp_email').value =='Email @ Address' || document.getElementById('emp_email').value==""){
		  alert("  I need your email  \nTo know where to send your paystbub");
		  document.getElementById('emp_email').focus();
		  return false;
		  
	  }
	  if (document.getElementById('start_date').value ==null || document.getElementById('start_date').value=="Hire Date"){
		  document.getElementById('start_date').value = "01/01/2013";
		  alert("   You didn't enter a HIRE DATE, so, I am setting your hire date as Jan 1 of this year, to get accurate YTD numbers");
		  //return false;
		  
	  }
	  if (document.getElementById('end_date').value ==null || document.getElementById('end_date').value=="End of Pay Period"){
		  //var temptodaydate = Date();
		  //document.getElementById('end_date').value = jQuery.format.date(temptodaydate, "MM/dd/yyyy");
		  
		  alert("    You must enter a PAY PERIOD END DATE, \n\nThis is VERY IMPORTANT\n\nNone of these calculations will work without this date");
		   
	  }
	  

/*	 if (xstartdate==null || xstartdatee=="")
		{
		alert("Please select a Start / Hire Date.\n  We need this for State Tax calculations");
		return false;
		}
	  if (xenddate==null || xenddate=="")
		{
		alert("Please select a End Date.\n  We need this for State Tax calculations");
		return false;
		}
	 */  
	 
	 // else{
	  //alert("\n Got your info\n Calculated\n and now Ready!!\n Now Click a Green Paystub Tabs to View your Results");
	  return true;
	 // getdata();
	 // }
   };
   
   
   
function ValidateEmail(){
    //prep
    var email = document.getElementById('emp_email'), error;
//alert("checking email");
    //validate
    if (!email.value || !/^[\w\.%\+\-]+@[a-z0-9.-]+\.(com|gov|in|jo|org|net)$/i.test(email.value))
        error = 'Please enter a valid e-mail, with the domain .com, .in, .org, .jo or .gov';

    //feedback
    if (error) {
        //email.focus();
		alert("Please enter an email, so we can send you a PDF");
        return false;
    } else {
        //OK - do something here
    }
}   
</script>  
  
	
			
	    </body>
	</html>
    
	<?php the_content(); ?>

    </div> <!-- end .entry post clearfix -->
    <?php // if (get_option('chameleon_show_pagescomments') == 'on') comments_template('', true); ?>
	<?php endwhile; endif; ?>
  </div> 	<!-- end #left-area -->
</div> <!-- end #content .clearfix fullwidth-->
<?php get_footer(); ?>