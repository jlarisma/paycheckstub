              <h2>--- Fill in ONLY  <span style="background:yellow">YELLOW</span> boxes ---  Then select <span style="background:green">GREEN</span> TABS above</h2>
              <p>		         
<!--              <form id="form-main" action="http://www.paycheckstubonline.com/wp-content/themes/Chameleon/pdf/payments.php" name="form1" method="post" style="margin:0">-->
              <form id="form-main" action="/pdf_render.php" name="form1" method="post" style="margin:0">
                <input type="hidden" name="stub_id" id="stub_id"/>
                <input type="hidden" name="start_date2" id="start_date2"/>
                <input type="hidden" name="state_tax" id="state_tax"/>

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
                          
                     	 <table class="nettable" width="205" cellspacing="0" cellpadding="0" border="0" colspan="2">
                         <tbody>
                            <tr>
                              <td class="border-radius" valign="top">
                                <table width="185" border="0" cellspacing="0" cellpadding="0" colspan="2">
                                 <tbody>
                                 <tr><td class="head" colspan="2">when were you HIRED ? </td></tr>
                                     <tr><td><input type="text" class='datepicker shorter_box' id="start_date" name="emp_sdate" placeholder="Start Date" tabindex="9" value="09/02/2013" onFocus="if (this.value == 'Hired Date') {this.value = '';}" onBlur="if (this.value == '') {this.value = '01/01/2013'; getdata();}" onchange="if (this.value == '') {this.value = 'End of Pay Period'; getdata();}" title="Select your HIRE DATE - When were you employed at this company - it's for YTD calculations"/></td>
                                         <td>HIRED Date</td></tr>
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
                                       <tbody> 
                                        <tr><td class="head">Company Details  --#2--</td></tr>
                                        
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
                                                      <tr><td><input placeholder="Over Time Hrs (1.5 pay)" type="text" class="shorter_box" id="ot_hrs" name="ot_hrs" tabindex="18" value= "0" onKeyUp="convert_hourly_yearly(gross_hrs, gross_rate, ot_hrs)" onBlur="if (this.value == '') {this.value = 0;}"/></td><td>Overtime</td></tr>
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
                                             		<td colspan="2" class="head">PAY Date & PRINT Date #4</td>
                                                </tr>
                                                
                                                <tr>
                                                   <td>&nbsp;</td>
                                                </tr>
                                                                     
                                                <tr>
                                                  
                                                </tr>
                                                <tr>
                                                     <td><input type="text" class='shorter_box datepicker' id="end_date" name="emp_edate" placeholder="End Date" tabindex="20" value="10/08/2013" onFocus="if (this.value == 'End of Pay Period') {this.value = '';}" onchange="if (this.value == '') {this.value = 'End of Pay Period'; getdata();}" title="  VERY IMPORTANT - This is the date of your LAST PAY PERIOD.  Usually Friday, or Sunday Midnight.  Whatever.  We will calculate backwards depending on how often you get paid, i.e. weekly, monthly, etc"/></td>
                                                     <td>PAY Date</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">________________________</td>
                                                </tr>
                                                
                                                
                                                <tr>
                                                    <td>AUTO GENERATED, should be more than 1</td>
                                                    <td><input type="text" class="short_box no_edit" id="num_prds" name="num_prds" placeholder="----" value="----" readonly="readonly" onFocus="if (this.value == '--#--') {this.value = '';}" onBlur="if (this.value == '') {this.value = '----';}" title="Do NOT fill this in - it is calculated From the Dates you entered above and below, this is how many Pay Stubs you will have this year"/></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">________________________</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                     <td><input type="text" class='shorter_box datepicker' id="pay_date" name="emp_pdate" placeholder="Pay Date" tabindex="21" value="10/08/2013" onFocus="if (this.value == 'Pay date for Stub') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Pay date for Stub'; getdata();}" title="Date the PAYSTUB is printed by your Accounting Department.  So, if you are paid on Friday, this date might be the following Friday, or the Following Monday - NEVER before Pay Date"/></td>
                                                     <td>Check PRINT Date</td>
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
              
              
              <table class="nettable" width="205" cellspacing="0" cellpadding="0" border="0">
                         <tbody>
                            <tr>
                              <td class="border-radius" valign="top" colspan="2">
                                <table width="185" border="0" cellspacing="0" cellpadding="0">
                                  <tr><td class="head">Where to send PREVIEW? </td></tr>
                                   <tbody>  
                                      <tr><td><input type="text" id="emp_email" placeholder="Email @ Address" name="emp_email" tabindex="22" value="asdf@gmail.com" onFocus="if (this.value == 'Email @ Address') {this.value = '';}" onblur="ValidateEmail()" class="bigger-wide"  /></td></tr>
                                   </tbody>
                                </table>
                              </td>
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
                                                                            <select id="emp_mar_status" name="emp_mar_status" tabindex="23"  onchange="getdata();">
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
                                               <tr> <td class="head">How often are you paid? --#6--</td></tr>
                                              <tr>
                                                <td>
                                                  <table style=" float: left; margin-left: 10px; " width="140" cellspacing="0" cellpadding="0" border="0">
                                                   <tbody>
                                                    <tr>
                                                      <td><input type="radio" name="payfreq" value="weekly" id="pfweekly" onchange="getdata()" checked="checked" tabindex="24"/></td>
                                                      <td>Weekly</td>
                                                    </tr>
          
                                                    <tr>  
                                                      <td><input type="radio" name="payfreq" value="biweekly" id="pfbiweekly" onchange="getdata()" tabindex="25" /></td>
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
                                                                          <input placeholder="This Period:" value="0.00" type="text" class="shorter_box" name="union_dues_prd" onKeyUp="getdata()" id="union_dues_prd" tabindex="27">
                                                                         </td>
                                                                     </tr>
                                                  
                                                                     <tr>
                                                                        <td>
                                                                          <input placeholder="YTD" type="text" value="0.00" class="shorter_box no_edit" readonly="readonly" name="union_dues_ytd" id="union_dues_ytd">
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
                                               <td class="head">Gross Earnings - Automatic</td>
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
                                          <td><input  placeholder="This Period" type="text" class="shorter_box no_edit"  id="state_amtincometax_prd" name="state_amtincometax_prd" /></td>
                                        <td>This Period</td></tr>
                                        <tr>
                                          <td><input placeholder="YTD" type="text" class="shorter_box no_edit"  id="state_amtincometax_ytd" name="state_amtincometax_ytd" /></td>
                                        <td>Year to date</td></tr>
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
                                               <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="28" name="commission_prd" id="commission_prd" onChange="getdata()" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" title="How much commissions for this pay period">
                                               </td><td>This Period</td></tr>
                                               <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="29" name="commission_ytd" id="commission_ytd" onChange="getdata()" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" title="this Year, total commissions.  This does not have to be THIS PERIOD * Payperiods, it could be anything">   
                                               </td>
                                               <td>Each Pay Prd (qum/pp)</td></tr>
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
            
           
                <div id = email_table>
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
                                               <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="30" name="rout_num" onKeyUp="getdata()" id="rout_num" onFocus="if (this.value == 'routing #') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL - Bank Routing number, first set of digits on you checking account - If you don't want to put your real numbers on it, just make up some, and then black-out the results on the printout">
                                                             </td><td>Routing #</td></tr>
                                               <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="31" name="acc_num" onKeyUp="getdata()" id="acc_num" onFocus="if (this.value == 'account #') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" onchange="if (this.value == ' ') {this.value = '0.00';}" title=" Your Bank account number the checks are deposited into - If you don't want to put the real data in, just make up numbers, and then black-out the printed version">   
                                                             </td><td>Account #</td></tr>
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
                 
                 
                 
         <!--        <div id = num_stubs_table>
                           <table class="nettable" width="210" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                   <tr>
                                      <td class="border-radius">
                                         <table width="180" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                               <tr>
                                                 <td colspan="3" class="head"># of Stubs</td></tr>
                                               <tr><td><input placeholder="#" type="text" value="0" class="shorter_box" tabindex="32" name="num_stub" onKeyUp="getdata()" id="num_stub" onFocus="if (this.value == '#') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';} getdata()" onchange="if (this.value == ' ') {this.value = '0';}" title="How many stubs do you need?">
                                               </td>
                                               <td>1-8</td></tr>
                                               
                                           </tbody>
                                        </table>
                                     </td>
                                  </tr>
                                </tbody>
                             </table>
                 </div>       -->
        </form> 
<!--            <div id="paypal_main">-->
<!--                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" name="paypal_mains_form" id="paypal_mains_form">-->
<!--                    <input type="hidden" name="cmd" value="_s-xclick">-->
<!--                    <input type="hidden" name="hosted_button_id" value="9XJTNQ4K2FBRW">-->
<!--                    <table>-->
<!--                    <tr><td><input type="hidden" name="on0" value="Options">Options</td></tr><tr><td><select name="os0">-->
<!--                        <option value="PDF Download - You Print">PDF Download - You Print $7.00 USD</option>-->
<!--                        <option value="3 for price of 2">3 for price of 2 $14.00 USD</option>-->
<!--                        <option value="Unlimited Download">Unlimited Download $30.00 USD</option>-->
<!--                        <option value="We print on real Check paper">We print on real Check paper $40.00 USD</option>-->
<!--                    </select> </td></tr>-->
<!--                    </table>-->
<!--                    <input type="hidden" name="currency_code" value="USD">-->
<!--                    <input type="hidden" id="custom-main-pp" name="custom" />-->
<!--                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
<!--                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
<!--                    </form>-->
<!--            </div>-->
<!--              -->
<!--			  <script type="text/javascript">-->
<!--				   var randomnumber1 = 0;-->
<!--				   $("#paypal_mains_form").on("submit",function() {-->
<!--						set_custom_var1();   // function to get rand num-->
<!--					   $.ajax({-->
<!--						type: 'POST',-->
<!--						async: false,-->
<!--						url: "paypal_db_prep.php",-->
<!--						data: $("#corp_pp_buy").serialize(),-->
<!--						success: function(data, status, xhr){-->
<!--						},-->
<!--						error: function(xhr, status, err) {-->
<!--						//  alert(status + ": " + err);-->
<!--						}-->
<!--					  }); -->
<!--				   });-->
<!--              </script>-->