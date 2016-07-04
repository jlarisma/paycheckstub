<?php /*Template Name: TESTING*/?>
       
<?php get_header(); ?>
<?php
session_start(); // start up your PHP session! 
?>
 <link rel="stylesheet" type="text/css" href="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/css/form.css">
<?php get_template_part('includes/breadcrumbs'); ?>
<?php get_template_part('includes/top_info'); ?>
<div id="content" class="clearfix fullwidth">
<div id="left-area">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry post clearfix">			
  <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/jquery.dateFormat-1.0.js" type="text/javascript"></script>
  <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/pay-functions_test.js" type="text/javascript"></script>
	       <!-- Include Styles -->


<!--  <div id="tabbed-nav" data-role="z-tabs" data-theme="red">   -->

    
<div id="tabs">
  <ul>
    <li><a href="#main_form">Your INFOz</a></li>
	<li><a href="#corporate-test">Advanced Paystub</a></li>
	<li><a href="#basic_paystub">Basic Paystub</a></li>                           
	<li><a href="#neat_paystub">Neat Paystub</a></li>
    <li><a href="#Tstub">T-Stub</a></li>
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
                                            <tr><td><select id="emp_state" name="emp_state" onchange="getdata()" onblur="getdata()" value="none" tabindex="6">
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
                                              <option value="13">Ilinois</option>
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
                                            <tr><td><input type="text" id="emp_email" placeholder="Email @ Address" name="emp_email" tabindex="9" value="Email @ Address" onFocus="if (this.value == 'Email @ Address') {this.value = '';}" class="bigger-wide"  /></td></tr>
                                                                     
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
                                                  <tr><td><input placeholder="31200" type="text" class="shorter_box currency bigger-narrow" id="input_yearly_gross" tabindex="15" onKeyUp="convert_yearly_hourly(input_yearly_gross.value)" name="input_yearly_gross" value="31200" onFocus="if (this.value == 'input_yearly_gross') {this.value = '';}" onBlur="if (this.value == '') {this.value = '31,200';}"/></td><td>$/Year</td></tr>
                                                  <tr><td colspan="2"><center> <h2>------  OR  ------</h2></center></td></tr>
                                                  
                                                  <tr><td><input placeholder="Regular Hours:" type="text" class="shorter_box currency" id="gross_hrs"  name="gross_hrs" tabindex="16" value="40" onKeyUp="convert_hourly_yearly(gross_hrs, gross_rate, ot_hrs)" onFocus="if (this.value == 'Regular Hours:') {this.value = '';}" onBlur="if (this.value == '') {this.value = '40';}"/></td><td>Hrs/Week</td></tr>
                                                  <tr><td><input placeholder="Pay Rate per hour:" type="text" class="shorter_box" id="gross_rate"  name="gross_rate" tabindex="17" value="15" onFocus="if (this.value == 'Pay Rate per hour:') {this.value = '';}" onBlur="if (this.value == '') {this.value = '15';}" /></td><td>$/Hour</td></tr>
                                                  <tr><td><input placeholder="Over Time Hrs (1.5 pay)" type="text" class="shorter_box" id="ot_hrs" name="ot_hrs"tabindex="18" value= "0" onKeyUp="convert_hourly_yearly(gross_hrs, gross_rate, ot_hrs)" onBlur="if (this.value == '') {this.value = 0;}"/></td><td>Overtime</td></tr>
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
                                         <tr><td colspan="2" class="head">Sart/end/pay date -#4-</td></tr>
                                         <tr><td><input type="text" class='datepicker shorter_box' id="start_date" name="emp_sdate" placeholder="Start Date" tabindex="19" value="Hire Date" onFocus="if (this.value == 'Hire Date') {this.value = '';}" onBlur="if (this.value == '') {this.value = '01/01/2013'; getdata();}" title="Select your HIRE DATE - When were you employed at this company - it's for YTD calculations"/></td>
                                         <td>Hire Date</td></tr>
                                         <tr><td><input type="text" class='shorter_box datepicker' id="end_date" name="emp_edate" placeholder="End Date" tabindex="20" value="End of Pay prd" onFocus="if (this.value == 'End of Pay prd') {this.value = '';}" onchange="if (this.value == '') {this.value = 'End of Pay prd'; getdata();}" title="  VERY IMPORTANT - This is the date of your LAST PAY prd.  Usually Friday, or Sunday Midnight.  Whatever.  We will calculate backwards depending on how often you get paid, i.e. weekly, monthly, etc"/></td>
                                         <td>Pay Date</td></tr>
                                         <tr><td><input type="text" class='shorter_box datepicker' id="pay_date" name="emp_pdate" tabindex="21" title="Arbitrary date, a few days after the end, when the Checks are printed"/></td>
                                         <td>Print Date</td></tr>
                                         <tr><td><input type="text" class="shorter_box no_edit" id="num_prds" name="num_prds" placeholder="# pay prds" value="# pay prds" readonly="readonly" onFocus="if (this.value == '# pay prds') {this.value = '';}" onBlur="if (this.value == '') {this.value = '# pay prds';}" /></td><td># pay prd</td></tr>
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
                                                                        <select id="emp_mar_status" name="emp_mar_status" tabindex="22"  onBlur="getdata()">
                                                                          <option value="">Status for Tax</option>
                                                                          <option value="Single">Single</option>
                                                                          <option value="M-Joint">Married filing Jointly</option>
                                                                          <option value="H.O.H">Head of Household</option>
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
                                                            <td class="head">401K RETIREMENT - optional</td>
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
                                                            <td class="head">Any Union Dues? </td>
                                                          </tr>
                                                          <tr>
                                                            <td>
                                                              <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                 <tr>
                                                                     <td>
                                                                      <input placeholder="This prd:" type="text" class="shorter_box" name="union_dues_prd" onKeyUp="getdata()" id="union_dues_prd" tabindex="27">
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
                                                              <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                 <tr>
                                                                     <td>
                                                                      <input type="text" id="ded_this_prd" name="ded_this_prd" placeholder="This Pay prd" class="shorter_box no_edit" readonly="readonly" />
                                                                     </td><td>This prd</td>
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
                                           <td class="head">Gross Earnings - Automatic</td>
                                         </tr>
                                        <tr>
                                          <td>
                                             <table width="185" cellspacing="0" cellpadding="0" border="0">
                                               <tbody>
                                               <tr>
                                                   <td>
                                              <input placeholder="This prd" type="text" class="shorter_box no_edit" id="main_ths_prd_amt"  onkeyup="getdata()"  name="main_ths_prd_amt" readonly title="Gross Earnings based on your hours and Payrate for this prd"/>
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
                       <td>
                       
                        <table class="nettable" width="175" cellspacing="0" cellpadding="0" border="0">
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
                                           <td class="head" colspan="2">State Taxes - Automatic</td>
                                      </tr>
                                    <tr>
                                      <td><input  placeholder="This prd" type="text" class="shorter_box no_edit"  id="state_amt_incomtax_prd"  onkeyup="getdata()" name="state_amt_incomtax_prd" /></td>
                                    <td>This Prd</td></tr>
                                    <tr>
                                      <td><input placeholder="YTD" type="text" class="shorter_box no_edit"  id="state_amt_incomtax_ytd"  onkeyup="getdata()" name="state_amt_incomtax_ytd" /></td>
                                    <td>Yr to date</td></tr>
                                  </tbody>
                                </table>
                                </td>
                              </tr>
                            </tbody>
                          </table></td>
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
                                     <table width="180" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                           <tr><td colspan="3" class="head"> Commisions  </td></tr>
                                           <tr><td><input placeholder="0.00" type="text" value="0.00" class="shorter_box" tabindex="28" name="commission_prd" onKeyUp="getdata()" id="commission_prd" onFocus="if (this.value == '0.00') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';}" onchange="if (this.value == ' ') {this.value = '0.00';}" title="How much commissions for this pay prd">
                                           </td><td>This prd</td></tr>
                                           <tr><td><input placeholder="0.00" type="text" value="0.00" class="shorter_box" tabindex="29" name="commission_ytd" onKeyUp="getdata()" id="commission_ytd" onFocus="if (this.value == '0.00') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="this Year, total commissions.  This does not have to be THIS prd * Payprds, it could be anything">   
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
                                                  <input placeholder="This prd:" type="text" class="shorter_box no_edit" id="fed_amt_incom"  onkeyup="getdata()" name="fed_amt_incom" />
                                             </td><td>This prd</td>
                                           </tr>
                                           <tr>
                                              <td>
                                                  <input placeholder="YTD:" type="text" class="shorter_box no_edit" id="fed_amt_ytd"  onkeyup="getdata()" name="fed_amt_ytd" />
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
                                                    <input placeholder="This prd:" type="text" class="shorter_box no_edit" id="medicare_prd"  onkeyup="getdata()" name="medicare_prd" />
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
                                                                      <input placeholder="This prd:" type="text" class="shorter_box no_edit" id="fica_social_prd"  onkeyup="getdata()" name="fica_social_prd" />
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
                                                <tr><td colspan="2"><input type="text" class="shorter_box no_edit bigger" id="net_pay_prd" placeholder="This prd" name="net_pay_prd" /></td></tr>
                                                <tr><td><center>One pay prd</center></td></tr>
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
          
       
            <div id=email_table>
              <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                               <tr>
                                  <td class="border-radius">
                                     <table width="180" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                           <tr>
                                             <td colspan="3" class="head"> Bank Numbers (optional)</td></tr>
                                           <tr><td><input placeholder="routing #" type="text" value="routing #" class="shorter_box" tabindex="30" name="rout_num" onKeyUp="getdata()" id="rout_num" onFocus="if (this.value == 'routing #') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';}" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL - Bank Routing number, first set of digits on you checking account - If you don't want to put your real numbers on it, just make up some, and then black-out the results on the printout">
                                           </td>
                                           <td>Route #</td></tr>
                                           <tr><td><input placeholder="account #" type="text" value="account #" class="shorter_box" tabindex="31" name="acc_num" onKeyUp="getdata()" id="acc_num" onFocus="if (this.value == 'account #') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title=" Your Bank account number the checks are deposited into - If you don't want to put the real data in, just make up numbers, and then black-out the printed version">   
                                           </td>
                                           <td>Acc #</td></tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                            </tbody>
                         </table>
             </div>
             
              <div id = qty_of_stub_table>
              <table class="nettable" width="259" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                               <tr>
                                  <td width="259" class="border-radius">
                                     <table width="242" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                           <tr>
                                             <td colspan="3" class="head"> # of Stubs:</td></tr>
                                           <tr>
                                               <td width="204">
                                                  <label for="spinner">Select How Many Payprds </label>
                                                  <input id="qty_stubs" name="qty_stubs" onchange="getdata()" />
                                               </td>
                                           <td width="38"></td></tr>
                                           <tr><td></td>
                                           <td></td></tr>
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
             
           </form>   
    </div> 
    <!-- #main_form-->  
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<div id="corporate-test" class="no-background">        <!--    POSTED BACK TO MAIN PAGE INSTANTLY --->
<div id="ad-paystub" class="paystub">
<table class="x-subtotal-1" style="text-align:right;text-align: center" cellpadding="10">
    <colgroup>
        <col  width="25%"/>
        <col  width="25%"/>
        <col  width="25%"/>
        <col  width="25%"/>
    </colgroup>
    <tr>
        <td rowspan="4" style="font-size:20px!important; vertical-align: top">Company Name</td>
        <td rowspan="4">-</td>
        <td>Company Address</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Company City</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Company State</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Zipcode</td>
        <td>-</td>
    </tr>
</table>

<div class="gray-bar fontsize16">Summary</div>
<table>
    <colgroup>
        <col  width="33%"/>
        <col  width="33%"/>
        <col  width="34%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Name</td>
        <td>Address</td>
        <td class="tl-right">Emp Since</td>
    </tr>
    <tr class="fontsize11">
        <td>Sasha</td>
        <td>Newyork</td>
        <td class="tl-right">-</td>
    </tr>
    <tr class="fontsize11">
        <td>Karpin</td>
        <td>-</td>
        <td class="tl-right">-</td>
    </tr>
    <tr class="fontsize11">
        <td>-</td>
        <td>-</td>
        <td class="tl-right">-</td>
    </tr>
    <tr class="fontsize11">
        <td>-</td>
        <td>-</td>
        <td class="tl-right">-</td>
    </tr>
</table>

<table>
    <colgroup>
        <col  width="20%"/>
        <col  width="20%"/>
        <col  width="20%"/>
        <col  width="20%"/>
        <col  width="20%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Employee ID</td>
        <td>SSN</td>
        <td>Additional W/h</td>
        <td>Marital Status</td>
        <td>Tax Exemption</td>
    </tr>
    <tr class="fontsize11">
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
</table>
<table>
    <colgroup>
        <col  width="20%"/>
        <col  width="20%"/>
        <col  width="20%"/>
        <col  width="10%"/>
        <col  width="10%"/>
        <col  width="20%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Pay Date</td>
        <td>Period End Date</td>
        <td>Title</td>
        <td>Asgn</td>
        <td>Rate</td>
        <td class="tl-right">Salary/mo</td>
    </tr>
    <tr class="fontsize11">
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
</table>

<div class="gray-bar fontsize16">Total Gross</div>
<table>
    <colgroup>
        <col  width="12.5%"/>
        <col  width="12.5%"/>
        <col  width="25%"/>
        <col  width="25%"/>
        <col  width="25%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Qual</td>
        <td>Hours</td>
        <td>O/T</td>
        <td>Salary/Period</td>
        <td  class="tl-right">Amount(YTD)</td>
    </tr>
    <tr class="fontsize11">
        <td>KD 63201</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
</table>

<div class="gray-bar fontsize16">Deductions</div>
<table>
    <colgroup>
        <col  width="50%"/>
        <col  width="25%"/>
        <col  width="25%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Type</td>
        <td>Amount</td>
        <td  class="tl-right">Amount(YTD)</td>
    </tr>
    <tr class="fontsize11">
        <td>Credit Union</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
    <tr class="fontsize11">
        <td>401K</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
    <tr class="fontsize11">
        <td>Other</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
</table>

<div class="gray-bar fontsize16">Taxable Gross</div>
<table>
    <colgroup>
        <col  width="25%"/>
        <col  width="25%"/>
        <col  width="25%"/>
        <col  width="25%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Type</td>
        <td>Pre-Tax</td>
        <td>Amount</td>
        <td  class="tl-right">Amount(YTD)</td>
    </tr>
    <tr class="fontsize11">
        <td>Hourly</td>
        <td>--</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
    <tr class="fontsize11">
        <td>Salary</td>
        <td>--</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
    <tr class="fontsize11">
        <td>Commission</td>
        <td>--</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
</table>

<div class="gray-bar fontsize16">Leave Data Info</div>
<table>
    <colgroup>
        <col  width="33%"/>
        <col  width="33%"/>
        <col  width="33%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Balance Date</td>
        <td>Date From</td>
        <td  class="">Date To</td>
    </tr>
    <tr class="fontsize11">
        <td>--</td>
        <td>--</td>
        <td>--</td>
    </tr>
</table>

<table>
    <colgroup>
        <col  width="25%"/>
        <col  width="25%"/>
        <col  width="25%"/>
        <col  width="25%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Type</td>
        <td>Hours Used</td>
        <td>Balance(hrs)</td>
        <td  class="">Balance(day)</td>
    </tr>
    <tr>
        <td class="">Vocation Leave</td>
        <td class="tl-right">--</td>
        <td class="tl-right">--</td>
        <td class="tl-right">--</td>
    </tr>
    <tr>
        <td class="">Stick Leave</td>
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
        <td class="">Compenstory Time</td>
        <td class="tl-right">--</td>
        <td class="tl-right">--</td>
        <td class="tl-right">--</td>
    </tr>
</table>

<div class="gray-bar fontsize16">Taxes</div>
<table>
    <colgroup>
        <col  width="25%"/>
        <col  width="50%"/>
        <col  width="25%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Type</td>
        <td>Amount</td>
        <td  class="tl-right">Amount(YTD)</td>
    </tr>
    <tr class="fontsize11">
        <td>Federal Witholding</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
    <tr class="fontsize11">
        <td>Social Security</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
    <tr class="fontsize11">
        <td>Medicare</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
    <tr class="fontsize11">
        <td>State</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
</table>

<div class="gray-bar fontsize16">Net Pay - Direct Deposit</div>
<table>
    <colgroup>
        <col  width="17%"/>
        <col  width="17%"/>
        <col  width="32%"/>
        <col  width="17%"/>
        <col  width="17%"/>
    </colgroup>
    <tr class="hd-text fontsize13">
        <td>Bank ABA#</td>
        <td>Account#</td>
        <td>Deposited Amount</td>
        <td>Net Pay</td>
        <td class="tl-right">Net Pay(YTD)</td>
    </tr>
    <tr class="fontsize11">
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td class="tl-right">--</td>
    </tr>
</table>

</div>
                    
         
        <div id="paypal_corp">    <!--  BUY IT NOW - AND - send to DB   (paypal_db_prep.php)   -->
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="corp_pp_buy" id="corp_pp_buy" target="_blank">  
                    <input type="hidden" name="type" id="type" value="CORP1"/>      
                          
                    <input type="hidden" name="corp_pdf_empr_name" id="corp_p_empr_add_name" />
                    <input type="hidden" name="corp_pdf_empr_street" id="corp_p_empr_add_street"  />
                    <input type="hidden" name="corp_pdf_empr_city" id="corp_p_empr_add_city" />
                    <input type="hidden" name="corp_pdf_empr_state" id="corp_p_empr_add_state" />
                    <input type="hidden" name="corp_pdf_empr_zip" id="corp_p_empr_add_zip"/>
                    
                    <input type="hidden" name="corp_pdf_emp_rout_num" id="corp_p_rout_num" />
                    <input type="hidden" name="corp_pdf_emp_acc_num" id="corp_p_acc_num" />
                    <input type="hidden" name="corp_pdf_emp_id" id="corp_p_emp_id"/>
                    <input type="hidden" name="corp_pdf_emp_email" id="corp_p_emp_email" />
                    <input type="hidden" name="corp_pdf_emp_f_name" id="corp_p_emp_f_name" />
                    <input type="hidden" name="corp_pdf_emp_l_name" id="corp_p_emp_l_name" />
                    <input type="hidden" name="corp_pdf_emp_street" id="corp_p_emp_street" />
                    <input type="hidden" name="corp_pdf_emp_city" id="corp_p_emp_city" />
                    <input type="hidden" name="corp_pdf_emp_state" id="corp_p_emp_state" />
                    <input type="hidden" name="corp_pdf_emp_zip" id="corp_p_emp_zip" />                  
                    <input type="hidden" name="corp_pdf_emp_ssn" id="corp_p_emp_ssn" />		        
                    <input type="hidden" name="corp_pdf_emp_mar_status" id="corp_p_emp_mar_status" />	
                                                                                            
                    <input type="hidden" name="corp_pdf_start_date" id="corp_p_start_date" />
                    <input type="hidden" name="corp_pdf_end_date" id="corp_p_end_date" />
                    <input type="hidden" name="corp_pdf_pay_date" id="corp_p_pay_date" />
                    
                    <input type="hidden" name="corp_pdf_gross_hrs" id="corp_p_gross_hrs" />
                    <input type="hidden" name="corp_pdf_gross_rate" id="corp_p_gross_rate" />
                    <input type="hidden" name="corp_pdf_ot_hrs" id="corp_p_ot_hrs" />
                    
                    <input type="hidden" name="corp_pdf_gross_prd" id="corp_p_gross_prd" />
                    <input type="hidden" name="corp_pdf_gross_ytd" id="corp_p_gross_ytd" />
                    
                    <input type="hidden" name="corp_pdf_taxable_gross_prd" id="corp_p_taxable_gross_prd" />
                    <input type="hidden" name="corp_pdf_taxable_gross_ytd" id="corp_p_taxable_gross_ytd" />
                 
                    <input type="hidden" name="corp_pdf_fed_amt_deduct_prd" id="corp_p_fed_amt_deduct_prd" />                    
                    <input type="hidden" name="corp_pdf_fed_amt_deduct_ytd" id="corp_p_fed_amt_deduct_ytd" />
                    
                    <input type="hidden" name="corp_pdf_medicare_prd" id="corp_p_medicare_prd" />
                    <input type="hidden" name="corp_pdf_medicare_ytd" id="corp_p_medicare_ytd" />
                  
                    <input type="hidden" name="corp_pdf_state_amt_incomtax_prd" id="corp_p_state_amt_incomtax_prd" />
                    <input type="hidden" name="corp_pdf_state_amt_incomtax_ytd" id="corp_p_state_amt_incomtax_ytd" />
                    
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
                 
                    <input type="hidden" name="cmd" value="_s-xclick"> 
                    <input type="hidden" name="hosted_button_id" value="SXNNG6LC7LDWW">
                    <input type="hidden" name="return" value="http://www.paycheckstubonline.com/download-my-stub" /> <!-- USER SUCCESS PAGE)  -->
                    <input type="hidden" name="notify_url" value="http://www.paycheckstubonline.com/listener.php" /> <!-- IPN - find and update record to pay-->
                    <input type="hidden" id="custom" name="custom" />
                    <input type="hidden" name="rm" value="2" >
                    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" id="submit_db_btn" border="0" name="submit_db_btn" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"> 
              </form>
        </div>
        <div id="corp-preview">    
          <form action="http://www.paycheckstubonline.com/corp_paystub_preview.php" name="form1" method="POST" target="_blank">                    
                <input type="hidden" name="type" id="type" value="CORP1"/>      
                          											   
                    <input type="hidden" name="corp_pdf_empr_name" id="corp_p_preview_empr_add_name" />
                    <input type="hidden" name="corp_pdf_empr_street" id="corp_p_preview_empr_add_street"  />
                    <input type="hidden" name="corp_pdf_empr_city" id="corp_p_preview_empr_add_city" />
                    <input type="hidden" name="corp_pdf_empr_state" id="corp_p_preview_empr_add_state" />
                    <input type="hidden" name="corp_pdf_empr_zip" id="corp_p_preview_empr_add_zip"/>
                    
                    <input type="hidden" name="corp_pdf_emp_rout_num" id="corp_p_preview_rout_num" />
                    <input type="hidden" name="corp_pdf_emp_acc_num" id="corp_p_preview_acc_num" />
                    <input type="hidden" name="corp_pdf_emp_email" id="corp_p_preview_emp_email" />
                    <input type="hidden" name="corp_pdf_emp_id" id="corp_p_preview_emp_id"/>
                    <input type="hidden" name="corp_pdf_emp_f_name" id="corp_p_preview_emp_f_name" />
                    <input type="hidden" name="corp_pdf_emp_l_name" id="corp_p_preview_emp_l_name" />
                    <input type="hidden" name="corp_pdf_emp_street" id="corp_p_preview_emp_street" />
                    <input type="hidden" name="corp_pdf_emp_city" id="corp_p_preview_emp_city" />
                    <input type="hidden" name="corp_pdf_emp_state" id="corp_p_preview_emp_state" />
                    <input type="hidden" name="corp_pdf_emp_zip" id="corp_p_preview_emp_zip" />                  
                    <input type="hidden" name="corp_pdf_emp_ssn" id="corp_p_preview_emp_ssn" />		        
                    <input type="hidden" name="corp_pdf_emp_mar_status" id="corp_p_preview_emp_mar_status" />	
                                                                                            
                    <input type="hidden" name="corp_pdf_start_date" id="corp_p_preview_start_date" />
                    <input type="hidden" name="corp_pdf_end_date" id="corp_p_preview_end_date" />
                    <input type="hidden" name="corp_pdf_pay_date" id="corp_p_preview_pay_date" />
                    
                    <input type="hidden" name="corp_pdf_gross_hrs" id="corp_p_preview_gross_hrs" />
                    <input type="hidden" name="corp_pdf_gross_rate" id="corp_p_preview_gross_rate" />
                    <input type="hidden" name="corp_pdf_ot_hrs" id="corp_p_preview_ot_hrs" />
                    
                    <input type="hidden" name="corp_pdf_gross_prd" id="corp_p_preview_gross_prd" />
                    <input type="hidden" name="corp_pdf_gross_ytd" id="corp_p_preview_gross_ytd" />
                    
                    <input type="hidden" name="corp_pdf_taxable_gross_prd" id="corp_p_preview_taxable_gross_prd" />
                    <input type="hidden" name="corp_pdf_taxable_gross_ytd" id="corp_p_preview_taxable_gross_ytd" />
                 
                    <input type="hidden" name="corp_pdf_fed_amt_deduct_prd" id="corp_p_preview_fed_amt_deduct_prd" />                    
                    <input type="hidden" name="corp_pdf_fed_amt_deduct_ytd" id="corp_p_preview_fed_amt_deduct_ytd" />
                    
                    <input type="hidden" name="corp_pdf_medicare_prd" id="corp_p_preview_medicare_prd" />
                    <input type="hidden" name="corp_pdf_medicare_ytd" id="corp_p_preview_medicare_ytd" />
                  
                    <input type="hidden" name="corp_pdf_state_amt_incomtax_prd" id="corp_p_preview_state_amt_incomtax_prd" />
                    <input type="hidden" name="corp_pdf_state_amt_incomtax_ytd" id="corp_p_preview_state_amt_incomtax_ytd" />
                    
                    <input type="hidden" name="corp_pdf_fica_social_prd" id="corp_p_preview_fica_social_prd" />
                    <input type="hidden" name="corp_pdf_fica_social_ytd" id="corp_p_preview_fica_social_ytd" />
                     
                    <input type="hidden" name="corp_pdf_tot_ded_prd" id="corp_p_preview_tot_ded_prd" />
                    <input type="hidden" name="corp_pdf_tot_ded_ytd" id="corp_p_preview_tot_ded_ytd" />   
                     
                    <input type="hidden" name="corp_pdf_net_pay_prd" id="corp_p_preview_net_pay_prd" />
                    <input type="hidden" name="corp_pdf_net_pay_prd_deposit" id="corp_p_preview_net_pay_prd_deposit" />
                    <input type="hidden" name="corp_pdf_net_pay_ytd" id="corp_p_preview_net_pay_ytd" />
                    <input type="hidden" name="corp_pdf_net_pay_ytd_deposit" id="corp_p_preview_net_pay_ytd_deposit" />
                                                                                          
                    <input type="hidden" name="corp_pdf_state_abb" id="corp_p_preview_state_abb" />                                                                         
                     
                    <input type="hidden" name="corp_pdf_val_401k_prd" id="corp_p_preview_val_401k_prd" />
                    <input type="hidden" name="corp_pdf_val_401k_ytd" id="corp_p_preview_val_401k_ytd" />
                    
                    <input type="hidden" name="corp_pdf_union_dues_prd" id="corp_p_preview_union_dues_prd" />
                    <input type="hidden" name="corp_pdf_union_dues_ytd" id="corp_p_preview_union_dues_ytd" />
                    
                    <input type="hidden" name="corp_pdf_start_date2" id="corp_p_preview_start_date2" />
                    <input type="hidden" name="corp_pdf_end_date2" id="corp_p_preview_end_date2" />
                  
                    <input type="hidden" name="corp_pdf_commission_prd" id="corp_p_preview_commission_prd" />
                    <input type="hidden" name="corp_pdf_commission_ytd" id="corp_p_preview_commission_ytd" />   
                <input class="btn2" type="submit" value=""   name="submit"  style="cursor:pointer" />    
          </form>  
      </div> <!-- end corp=preview -->     

        
<script type="text/javascript">
 var randomnumber = 0;
 $("#corp_pp_buy").on("submit",function() {
	  set_custom_var();   // function to get rand num
	 $.ajax({
      type: 'POST',
      async: false,
      url: "paypal_db_prep.php",
      data: $("#corp_pp_buy").serialize(),
      success: function(data, status, xhr){
      },
      error: function(xhr, status, err) {
        alert(status + ": " + err);
      }
    }); 
 });

 function set_custom_var() {
   randomnumber=Math.floor(Math.random()*1000000000);	                                      
   document.getElementById("custom").value = randomnumber;
 }
</script>
</div>  <!-- END corporate-test --> 

    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
      <div id="basic_paystub" class="no-background">
          <div id="bc-paystub" class="paystub">
              <table class="x-subtotal-1" style="text-align:right;text-align: center" cellpadding="10">
                  <tbody>
                  <tr class="hd-text"  class="hd-text" style="">
                      <td width="74px"  class="bd-right"></td>
                      <td width="74px"  class="bd-right"></td>
                      <td width="103px"  class="bd-right"></td>
                      <td width="96px"  class="bd-right"></td>
                      <td width="124px"  class="bd-right"></td>
                      <td width="62px"  class="bd-right"></td>
                      <td width="60px"  class=""></td>
                  </tr>
                  <tr class="x-input" style="height:24px">
                      <td colspan="4" class="bd-rb">Employee ID:</td>
                      <td class="bd-rb" style="vertical-align: text-bottom">Required Deductions</td>
                      <td class="bd-rb" style="position:relative"><span style="position:absolute; bottom: -6px;">Period</span></td>
                      <td class="bd-bottom" style="position:relative"><span style="position:absolute; bottom: -6px;">YTD</span></td>
                  </tr>
                  <tr class="x-input" style="height:24px">
                      <td colspan="4" class="bd-rb">Employee Name:</td>
                      <td class="bd-right">Federal Income Tax</td>
                      <td class="bd-right">--</td>
                      <td class="">--</td>
                  </tr>
                  <tr class="x-input" style="height:24px">
                      <td colspan="2" class="bd-bottom">Pay Period:</td>
                      <td colspan="2" class="bd-rb">to</td>
                      <td class="bd-right">FICA-Medicare</td>
                      <td class="bd-right">--</td>
                      <td class="">--</td>
                  </tr>
                  <tr class="x-input" style="height:24px">
                      <td rowspan=2 colspan="4" class="bd-rb">Earnings</td>
                      <td class="bd-right">State Income Tax</td>
                      <td class="bd-right">--</td>
                      <td class="">--</td>
                  </tr>
                  <tr class="x-input" style="height:24px">
                      <td class="bd-rb">FICA-Social Security</td>
                      <td class="bd-rb">--</td>
                      <td class="bd-bottom">--</td>
                  </tr>
                  <tr class="x-input" style="height:10px">
                      <td class="bd-right">Hours</td>
                      <td class="bd-right">Rate</td>
                      <td class="">This Period</td>
                      <td class="bd-right">YTD</td>
                      <td class="bd-rb">Other Deductions</td>
                      <td class="bd-rb">--</td>
                      <td class="bd-bottom">--</td>
                  </tr>
                  <tr class="x-input" style="height:28px">
                      <td class="bd-rb">-</td>
                      <td class="bd-rb">-</td>
                      <td class="bd-bottom">-</td>
                      <td class="bd-rb">-</td>
                      <td class="bd-right">-</td>
                      <td class="bd-right">-</td>
                      <td class="">-</td>
                  </tr>
                  <tr class="x-input" style="height:28px">
                      <td class="bd-rb">GROSS PAY</td>
                      <td class="bd-rb">-</td>
                      <td class="bd-bottom">-</td>
                      <td class="bd-rb">-</td>
                      <td class="bd-rb">-</td>
                      <td class="bd-rb">-</td>
                      <td class="bd-bottom">-</td>
                  </tr>
                  <tr class="x-input" style="height:28px">
                      <td rowspan="2" colspan="4" class="bd-right"></td>
                      <td class="bd-rb">NET PAY</td>
                      <td class="bd-rb">-</td>
                      <td class="bd-bottom">-</td>
                  </tr>
                  <tr class="x-input" style="height:17px">
                      <td class="" ></td>
                      <td class=""></td>
                      <td class=""></td>
                  </tr>
                  <tr class="x-input" style="height:24px;border-top:dashed;border-width:1px">
                      <td colspan="7" class="" style="padding:9px 20px">
                          <div style="position:relative; border:solid 1px;height:225px">
                              <div class="x-chknum" style="width:185px;;margin-top: 10px;margin-left: 375px">
                                  <div style="height:14px"><span style="width:95px;">Check Number:</span>
                                      <span>-</span>
                                  </div>
                                  <div><span style="width:95px">Pay Date:</span>
                                      <span>-</span>
                                  </div>
                              </div>
                              <div class="x-pay" style="margin-top: 50px">
                                  <span style="width:90px">PAY</span> <span>-</span>
                              </div>
                              <div class="x-order" style="margin-top: 20px">
                                  <span style="width:90px">To the Order of</span> <span>-</span>
                              </div>
                              <div class="x-num" style="position: absolute; bottom:0px;left:275px">
                                  1234567
                              </div>
                          </div>
                      </td>
                  </tr>
                  </tbody>
              </table>
          </div>

       <div id="basic-preview">
          <form action="http://www.paycheckstubonline.com/basic_paystub.php" name="form1" method="POST" target="_blank">                    
				<input type="hidden" name="basic_pdf_emp_email" id="basic_p_emp_email" />

                <input type="hidden" name="basic_pdf_emp_id" id="basic_p_emp_id" /> 
                <input type="hidden" name="basic_pdf_emp_f_name" id="basic_p_emp_f_name" />
                <input type="hidden" name="basic_pdf_emp_l_name" id="basic_p_emp_l_name" />
                <input type="hidden" name="basic_pdf_emp_street" id="basic_p_emp_street" />
                <input type="hidden" name="basic_pdf_emp_city" id="basic_p_emp_city" />
                <input type="hidden" name="basic_pdf_emp_state" id="basic_p_emp_state" />
                <input type="hidden" name="basic_pdf_emp_zip" id="basic_p_emp_zip" />                   <!--  This edits the preview on the PDF   -->
                <input type="hidden" name="basic_pdf_emp_ssn" id="basic_p_emp_ssn" />		       <!--  From pay-function.js to basic_paystub.php  -->
                                                                                        
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
                
                
                <input type="hidden" name="basic_pdf_state_amt_incomtax_prd" id="basic_p_state_amt_incomtax_prd" />
                <input type="hidden" name="basic_pdf_state_amt_incomtax_ytd" id="basic_p_state_amt_incomtax_ytd" />
                
                <input type="hidden" name="basic_pdf_fica_social_prd" id="basic_p_fica_social_prd" />
                <input type="hidden" name="basic_pdf_fica_social_ytd" id="basic_p_fica_social_ytd" />
                 
                <input type="hidden" name="basic_pdf_net_pay_prd" id="basic_p_net_pay_prd" />
                <input type="hidden" name="basic_pdf_net_pay_prd_deposit" id="basic_p_net_pay_prd_deposit" />
                <input type="hidden" name="basic_pdf_net_pay_ytd" id="basic_p_net_pay_ytd" />
                                                                                      
                <input type="hidden" name="basic_pdf_state_abb" id="basic_p_state_abb" />                                                                         
                 
                <input type="hidden" name="basic_pdf_val_401k_prd" id="basic_p_val_401k_prd" />
                <input type="hidden" name="basic_pdf_val_401k_ytd" id="basic_p_val_401k_ytd" />
                                                                                      
                <input class="btn2" type="submit" value=""   name="submit"  style="cursor:pointer" />  
          </form>
       </div>
       <div id="paypal_basic">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="9XJTNQ4K2FBRW">
          <table>
          <tr><td><input type="hidden" name="on0" value="Options">Options</td></tr><tr><td><select name="os0">
              <option value="PDF Download - You Print">PDF Download - You Print $7.00 USD</option>
              <option value="We Print on Authentic Check paper">We Print on Authentic Check paper $30.00 USD</option>
              <option value="3 for price of 2">3 for price of 2 $14.00 USD</option>
          </select> </td></tr>
          </table>
          <input type="hidden" name="currency_code" value="USD">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

          
       </div>
    </div> 
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->


<div style="clear:both; padding-top:30px;"></div>
 

	<div id="neat_paystub" class="no-background">

    <div id="nt-paystub" class="paystub" style="border-width:2px">
        <div class="x-title bd-bottom" style="height:82px; border-width: 2px;">
            <div style="width:66%;float:left;line-height: 14px;">
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="50%" style="text-align: left;text-indent: 10px; height:25px; font-size: 18px !important;">Company Name</td>
                        <td width="50%"></td>
                    </tr>
                    <tr style="height: 10px">
                        <td style="text-align: left;text-indent: 10px">Company Address</td>
                        <td>Newyork</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;text-indent: 10px">Company City</td>
                        <td>Huston</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;text-indent: 10px">Company State</td>
                        <td>asdfasdf</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;text-indent: 10px">Zip Code</td>
                        <td>asdfasdf</td>
                    </tr>
                </table>
            </div>
            <div style="width:33%;float:left;">
                <p class="nt-title">Earnings Statement</p>
            </div>
        </div>

        <table class="x-subtotal-1" cellpadding="0" cellspacing="" style="text-align:right;text-align: center">

            <tr class="hd-text" style="height:17px">
                <td class="bd-right" width="130px"> EMPLOYEE NO.</td>
                <td class="bd-right" width="295px">EMPLOYEE NAME</td>
                <td class="bd-right" width="142px">SOCIAL SECURITY NO</td>
                <td class="bd-right" width="98px">PERIOD BIG.</td>
                <td class="bd-right" width="100px">PERIOD END</td>
                <td class="bd-bottom" width="98px">CHECK DATE</td>
            </tr>
            <tr style="height:27px">
                <td class="bd-rb x-input">123</td>
                <td class="bd-rb x-input">Sasha Karpin</td>
                <td class="bd-rb x-input">12345</td>
                <td class="bd-rb x-input">05/31/2013</td>
                <td class="bd-rb x-input">05/31/2013</td>
                <td class="bd-bottom x-input">05/31/2013</td>
            </tr>
        </table>

        <table class="x-subtotal-1" style="text-align:right;text-align: center">
            <tbody>
            <tr class="hd-text"  class="hd-text" style="height:17px">
                <td class="bd-rb" width="130px"> EMPLOYEE NO.</td>
                <td class="bd-rb" width="105px">HOURS</td>
                <td class="bd-rb" width="98px">RATE</td>
                <td class="bd-rb" width="112px">CURRENT AMOUNT</td>
                <td class="bd-rb" width="152px">WITHOLDINGS/DEDUCTIONS</td>
                <td class="bd-rb" width="146px">CURRENT AMOUNT</td>
                <td class="bd-bottom" width="118px">YEAR TO DATE</td>
            </tr>
            <tr class="x-empty">
                <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
            </tr>
            <tr class="x-input" style="height:24px">
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="">123</td>
            </tr>
            <tr class="x-input" style="height:24px">
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="">123</td>
            </tr>

            <tr class="x-empty">
                <td class="bd-right">&nbsp;</td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class="bd-right"></td><td class=""></td>
            </tr>
            <tr class="x-input" style="height:24px">
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="bd-right">123</td>
                <td class="">123</td>
            </tr>

            <tr class="x-input x-last" style="height:24px">
                <td class="bd-rb">123</td>
                <td class="bd-rb">123</td>
                <td class="bd-rb">123</td>
                <td class="bd-rb">123</td>
                <td class="bd-rb">123</td>
                <td class="bd-rb">123</td>
                <td class="bd-bottom">123</td>
            </tr>
            </tbody>
        </table>

        <table class="x-subtotal-2" cellpadding="0" cellspacing="" style="text-align:right;text-align: center">
            <tr class="hd-text" style="height:17px">
                <td class="bd-right" width="130px">CURRENT AMOUNT</td>
                <td class="bd-right" width="140px">CURRENT DEDUCTIONS</td>
                <td class="bd-right" width="112px">NET PAY</td>
                <td class="bd-right" width="130px">YTD EARNINGS</td>
                <td class="bd-right" width="149px">YTD DEDUCTIONS</td>
                <td class="bd-right" width="100px">YTD NET PAY</td>
                <td class="" width="98px">CHECK NO.</td>
            </tr>
            <tr style="height:27px">
                <td class="bd-right x-input">123</td>
                <td class="bd-right x-input">Sasha Karpin</td>
                <td class="bd-right x-input">12345</td>
                <td class="bd-right x-input">05/31/2013</td>
                <td class="bd-right x-input">05/31/2013</td>
                <td class="bd-right x-input">05/31/2013</td>
                <td class="x-input">05/31/2013</td>
            </tr>
        </table>
    </div>

            <div id="neat-preview">
              <form action="http://www.paycheckstubonline.com/neat_paystub.php" name="form1" method="POST" target="_blank">                    
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
                    
                    
                    <input type="hidden" name="neat_pdf_state_amt_incomtax_prd" id="neat_p_state_amt_incomtax_prd" />
                    <input type="hidden" name="neat_pdf_state_amt_incomtax_ytd" id="neat_p_state_amt_incomtax_ytd" />
                    
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
                                                  
                    <input class="btn2" type="submit" value=""   name="submit"  style="cursor:pointer" />  
              </form>
             </div>
            
            <div id="paypal_neat">
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="9XJTNQ4K2FBRW">
                  <table>
                  <tr><td><input type="hidden" name="on0" value="Options">Options</td></tr><tr><td><select name="os0">
                      <option value="PDF Download - You Print">PDF Download - You Print $7.00 USD</option>
                      <option value="We Print on Authentic Check paper">We Print on Authentic Check paper $30.00 USD</option>
                      <option value="3 for price of 2">3 for price of 2 $14.00 USD</option>
                  </select> </td></tr>
                  </table>
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
    </div> 
    
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->   
	  <div id="Tstub"><h4>Coming soon</h4>
         <div id="tstub_paystub"> 
              <p id="tstub_empr_add_name"></p>    
              <p id="tstub_empr_add_street"></p>
              <p id="tstub_empr_add_city"></p>
              <p id="tstub_empr_add_state"></p> 
              <p id="tstub_empr_add_zip"></p>
              
              <p id="tstub_rout_num"></p> 
              <p id="tstub_acc_num"></p> 
              <p id="tstub_emp_email"></p> 
              <p id="tstub_emp_id"></p> 
              <p id="tstub_emp_f_name"></p>
              <p id="tstub_emp_l_name"></p>
              <p id="tstub_emp_street"></p>
              <p id="tstub_emp_city"></p>
              <p id="tstub_emp_state"></p>		<!--  This edits the preview on the Screen  -->
              <p id="tstub_emp_zip"></p>         <!--  Names coming from pay_functions.js  -->
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
            
              <p id="tstub_state_amt_incomtax_prd"></p>
              <p id="tstub_state_amt_incomtax_ytd"></p>
             
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
         </div>
         
         
         <div id="tstub_preview">
              <form action="http://www.paycheckstubonline.com/tstub_paystub.php" name="form1" method="POST" target="_blank">                    
				 															  
                  <input type="hidden" name="tstub_preview_pdf_empr_name" id="tstub_preview_p_empr_add_name" />
                  <input type="hidden" name="tstub_preview_pdf_empr_street" id="tstub_preview_p_empr_add_street"  />
                  <input type="hidden" name="tstub_preview_pdf_empr_city" id="tstub_preview_p_empr_add_city" />
                  <input type="hidden" name="tstub_preview_pdf_empr_state" id="tstub_preview_p_empr_add_state" />
                  <input type="hidden" name="tstub_preview_pdf_empr_zip" id="tstub_preview_p_empr_add_zip"/>
                  
                  <input type="hidden" name="tstub_preview_pdf_emp_rout_num" id="tstub_preview_p_rout_num" />
                  <input type="hidden" name="tstub_preview_pdf_emp_acc_num" id="tstub_preview_p_acc_num" />
                  <input type="hidden" name="tstub_preview_pdf_emp_email" id="tstub_preview_p_emp_email" />
                  <input type="hidden" name="tstub_preview_pdf_emp_id" id="tstub_preview_p_emp_id"/>
                  <input type="hidden" name="tstub_preview_pdf_emp_f_name" id="tstub_preview_p_emp_f_name" />
                  <input type="hidden" name="tstub_preview_pdf_emp_l_name" id="tstub_preview_p_emp_l_name" />
                  <input type="hidden" name="tstub_preview_pdf_emp_street" id="tstub_preview_p_emp_street" />
                  <input type="hidden" name="tstub_preview_pdf_emp_city" id="tstub_preview_p_emp_city" />
                  <input type="hidden" name="tstub_preview_pdf_emp_state" id="tstub_preview_p_emp_state" />
                  <input type="hidden" name="tstub_preview_pdf_emp_zip" id="tstub_preview_p_emp_zip" />                  
                  <input type="hidden" name="tstub_preview_pdf_emp_ssn" id="tstub_preview_p_emp_ssn" />		        
                  <input type="hidden" name="tstub_preview_pdf_emp_mar_status" id="tstub_preview_p_emp_mar_status" />	
                  
                  <input type="hidden" name="tstub_preview_pdf_garnish1_prd" id="tstub_preview_p_garnish1_prd" />
                  <input type="hidden" name="tstub_preview_pdf_garnish1_ytd" id="tstub_preview_p_garnish1_ytd" />
                  <input type="hidden" name="tstub_preview_pdf_garnish2_prd" id="tstub_preview_p_garnish2_prd" />
                  <input type="hidden" name="tstub_preview_pdf_garnish2_ytd" id="tstub_preview_p_garnish2_ytd" />
                  <input type="hidden" name="tstub_preview_pdf_garnish3_prd" id="tstub_preview_p_garnish3_prd" />
                  <input type="hidden" name="tstub_preview_pdf_garnish3_ytd" id="tstub_preview_p_garnish3_ytd" />                        
                  <input type="hidden" name="tstub_preview_pdf_tot_garnish_prd" id="tstub_preview_p_tot_garnish_prd" />
                  <input type="hidden" name="tstub_preview_pdf_tot_garnish_ytd" id="tstub_preview_p_tot_garnish_ytd" />       
                                                                
                  <input type="hidden" name="tstub_preview_pdf_start_date" id="tstub_preview_p_start_date" />
                  <input type="hidden" name="tstub_preview_pdf_end_date" id="tstub_preview_p_end_date" />
                  <input type="hidden" name="tstub_preview_pdf_pay_date" id="tstub_preview_p_pay_date" />
                  
                  <input type="hidden" name="tstub_preview_pdf_gross_hrs" id="tstub_preview_p_gross_hrs" />
                  <input type="hidden" name="tstub_preview_pdf_gross_rate" id="tstub_preview_p_gross_rate" />
                  <input type="hidden" name="tstub_preview_pdf_ot_hrs" id="tstub_preview_p_ot_hrs" />
                  
                  <input type="hidden" name="tstub_preview_pdf_gross_prd" id="tstub_preview_p_gross_prd" />
                  <input type="hidden" name="tstub_preview_pdf_gross_ytd" id="tstub_preview_p_gross_ytd" />
                  
                  <input type="hidden" name="tstub_preview_pdf_taxable_gross_prd" id="tstub_preview_p_taxable_gross_prd" />
                  <input type="hidden" name="tstub_preview_pdf_taxable_gross_ytd" id="tstub_preview_p_taxable_gross_ytd" />
               
                  <input type="hidden" name="tstub_preview_pdf_fed_amt_deduct_prd" id="tstub_preview_p_fed_amt_deduct_prd" />                    
                  <input type="hidden" name="tstub_preview_pdf_fed_amt_deduct_ytd" id="tstub_preview_p_fed_amt_deduct_ytd" />
                  
                  <input type="hidden" name="tstub_preview_pdf_medicare_prd" id="tstub_preview_p_medicare_prd" />
                  <input type="hidden" name="tstub_preview_pdf_medicare_ytd" id="tstub_preview_p_medicare_ytd" />
                
                  <input type="hidden" name="tstub_preview_pdf_state_amt_incomtax_prd" id="tstub_preview_p_state_amt_incomtax_prd" />
                  <input type="hidden" name="tstub_preview_pdf_state_amt_incomtax_ytd" id="tstub_preview_p_state_amt_incomtax_ytd" />
                  
                  <input type="hidden" name="tstub_preview_pdf_fica_social_prd" id="tstub_preview_p_fica_social_prd" />
                  <input type="hidden" name="tstub_preview_pdf_fica_social_ytd" id="tstub_preview_p_fica_social_ytd" />
                  
                  <input type="hidden" name="tstub_preview_pdf_tot_ded_prd" id="tstub_preview_p_tot_ded_prd" />
                  <input type="hidden" name="tstub_preview_pdf_tot_ded_ytd" id="tstub_preview_p_tot_ded_ytd" />
                   
                  <input type="hidden" name="tstub_preview_pdf_net_pay_prd" id="tstub_preview_p_net_pay_prd" />
                  <input type="hidden" name="tstub_preview_pdf_net_pay_prd_deposit" id="tstub_preview_p_net_pay_prd_deposit" />
                  <input type="hidden" name="tstub_preview_pdf_net_pay_ytd" id="tstub_preview_p_net_pay_ytd" />
                  <input type="hidden" name="tstub_preview_pdf_net_pay_ytd_deposit" id="tstub_preview_p_net_pay_ytd_deposit" />
                                                                                        
                  <input type="hidden" name="tstub_preview_pdf_state_abb" id="tstub_preview_p_state_abb" />                                                                         
                   
                  <input type="hidden" name="tstub_preview_pdf_val_401k_prd" id="tstub_preview_p_val_401k_prd" />
                  <input type="hidden" name="tstub_preview_pdf_val_401k_ytd" id="tstub_preview_p_val_401k_ytd" />
                  
                  <input type="hidden" name="tstub_preview_pdf_union_dues_prd" id="tstub_preview_p_union_dues_prd" />
                  <input type="hidden" name="tstub_preview_pdf_union_dues_ytd" id="tstub_preview_p_union_dues_ytd" />
                  
                  <input type="hidden" name="tstub_preview_pdf_start_date2" id="tstub_preview_p_start_date2" />
                  <input type="hidden" name="tstub_preview_pdf_end_date2" id="tstub_preview_p_end_date2" />
                
                  <input type="hidden" name="tstub_preview_pdf_commission_prd" id="tstub_preview_p_commission_prd" />
                  <input type="hidden" name="tstub_preview_pdf_commission_ytd" id="tstub_preview_p_commission_ytd" />
                                                      
                  <input class="btn2" type="submit" value=""   name="submit"  style="cursor:pointer" />  
              </form>
         </div>
             
             
         <div id="paypal_tstub">    <!--  BUY IT NOW - AND - send to DB   (tstub_paypal_db_prep.php)   -->
          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="tstub_pp_buy" id="stub_pp_buy" target="_blank">          
              <input type="hidden" name="type" id="type" value="TSTUB"/>      
                    
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
                
                  <input type="hidden" name="tstub_pdf_state_amt_incomtax_prd" id="tstub_p_state_amt_incomtax_prd" />
                  <input type="hidden" name="tstub_pdf_state_amt_incomtax_ytd" id="tstub_p_state_amt_incomtax_ytd" />
                  
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
           
              <input type="hidden" name="cmd" value="_s-xclick"> 
              <input type="hidden" name="hosted_button_id" value="SXNNG6LC7LDWW">
              <input type="hidden" name="return" value="http://www.paycheckstubonline.com/download-my-stub" /> <!-- USER SUCCESS PAGE)  -->
              <input type="hidden" name="notify_url" value="http://www.paycheckstubonline.com/listener.php" /> <!-- IPN - find and update record to pay-->
              <input type="hidden" id="custom" name="custom" />
              <input type="hidden" name="rm" value="2" >
              <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" id="submit_db_btn" border="0" name="submit_db_btn" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"> 
          </form>
         </div>
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
                    <td align="center"><b>prd END</b></td>
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
          <p id="w2_fed_amt_ytd"></p>
          
          <p id="w2_medicare_ytd"></p>
          <p id="w2_fica_social_ytd"></p>
          
          <p id="w2_state_amt_incomtax_ytd"></p>
          
          <p id="w2_state_abb"></p>
          
         </div> 
          
              <div id="paypal_w2">
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="9XJTNQ4K2FBRW">
                      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form> 
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
                    <input type="hidden" name="w2_pdf_emp_ssn" id="w2_p_emp_ssn" value="<?php echo $emp_ssn ?>" />
                   
                   
                    <input type="hidden" name="w2_pdf_gross_ytd" id="w2_p_gross_ytd" />
                    <input type="hidden" name="w2_pdf_fed__with_held_ytd" id="w2_p_fed_with_held_ytd" />
                    
                    <input type="hidden" name="w2_pdf_medicare_ytd" id="w2_p_medicare_ytd" />
                    <input type="hidden" name="w2_pdf_fica_social_ytd" id="w2_p_fica_social_ytd" />
                    
                    <input type="hidden" name="w2_pdf_state_amt_incomtax_ytd" id="w2_p_state_amt_incomtax_ytd" />
                    
                    <input type="hidden" name="w2_pdf_state_abb" id="w2_p_state_abb" />
          
                    <input class="btn2" type="submit" value=""   name="submit"  style="cursor:pointer" />  
              </form>
              
                   
                    <label id="page11"></label></td>
                    
                    <label id="lbl_fed_amt_ytd"></label></td>
                 
                    <label id="page2"></label>
                    <label id="page12"></label></td>
                    <label id="lbl_medicare_prd"></label></td>
                    <label id="lbl_medicare_ytd"></label></td>
                  
                    <label id="page2"></label>
                    <label id="page13"></label>
                    <label id="lbl_state_amt_incomtax_prd"></label>
                    <label id="lbl_state_amt_incomtax_ytd"></label>
                 
                    <label id="page2"></label>
                    <label id="page13"> </label>
                    <label id="lbl_fica_social_prd"></label>
                    <label id="lbl_fica_social_ytd"></label>
               
                      <label id="page3"></label>
                      
                      <label id="page4"></label>
                   
                    <label id="lbl_gross_rate"></label>
                   <label id="lbl_thisprd"></label>
                    <label id="lbl_gross_ytd"></label><label id="page8"></label>
                    <label id="lbl_other_ded_thisprd"></label>
                    <label id="lbl_other_ded_ytd"></label>
                  
                    <label id="lbl_other_ded_thisprd1"></label>
                    <label id="lbl_other_ded_ytd1"></label>
                  
                   <label id="page10"></label>
                 
                   
                    <td><label id="lbl_other_ded_thisprd2"></label></td>
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






<script>  
  var startweek = 0;
  var endweek = 0;
  var startmonth = 0;
  var endmonth = 0;
  
	$(document).ready(function() 
	 {
		 $( "#start_date" ).datepicker({showWeek: true,
									maxDate: "+1D",
									//minDate: new Date(2013, 1 - 1, 01),
									changeMonth: true,
									changeYear: true,
									numberOfMonths: 3,
									//onclose,
									onSelect: function(dateText, inst) {
										startdate = $(this).datepicker('getDate');
										startweek = ($.datepicker.iso8601Week(startdate));
										startyear = startdate.getFullYear();
										//alert ("date shit"+startyear);
										//alert($.datepicker.iso8601Week(date));
										//alert("Difference in weeks = ".endweek - startweek);
									}
								   });
		  //$('#end_date').datepicker();
		  //$('#end_date').datepicker("setDate", "-2d");						   
		  $('#end_date').datepicker({clickInput:true,
		  							  setDate: "-2d",
									  //maxDate: "+0D",
									  //minDate: new Date(2013, 1 - 1, 01),
									  changeMonth: true,
									  changeYear: true,
									  onSelect: function(dateText, inst) {
										  enddate = $(this).datepicker('getDate');
										  endweek = ($.datepicker.iso8601Week(enddate));
										  getdata();}
									  //beforeShow: function(input, inst) { 
           							  //    $(input).datepicker('setDate', new Date());
        							  //}
										  //alert("end date selected on start");
										  //alert($.datepicker.iso8601Week(date));
										  //alert("Difference in weeks = ".endweek - startweek);
		});
		
		$('#pay_date').datepicker();
		$('#pay_date').datepicker({setDate: "+1d"});
	});



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


$(function() {
$( "#tabs" ).tabs();
});


$(function() {
var spinner = $( "#qty_stubs" ).spinner({          
    stop:function(e,ui){
       // alert($(this).spinner('value') );
    }
});

});
</script> 


<script>
function Cur_format(amount){
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

			
	    </body>
	</html>
    
	<?php the_content(); ?>

    </div> <!-- end .entry post clearfix -->
    <?php // if (get_option('chameleon_show_pagescomments') == 'on') comments_template('', true); ?>
	<?php endwhile; endif; ?>
  </div> 	<!-- end #left-area -->
</div> <!-- end #content .clearfix fullwidth-->
<?php get_footer(); ?>