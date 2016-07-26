

     <h2>#1 -Fill in<span style="background:yellow">Yellow</span> boxes.   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      #2 -Click <span style="background:red"> RED </span> Btn   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    #3 - Click <span style="background:rgb(121, 187, 255)">Blue Btn</span> for Preview </h2>
        <p>
<!--            <form id="form-main" action="http://www.paycheckstubonline.com/wp-content/themes/Chameleon/pdf/payments.php" name="form1" method="post" style="margin:0">-->
            <form id="form-main" action="/pdf_render5.php" name="form1" method="post" style="margin:0" target="_blank">
              <div id="pc">
                <input type="hidden" name="start_date2" id="start_date2"/>
                <input type="hidden" name="state_tax" id="state_tax"/>
                <input type="hidden" name="cmd" value="_xclick" />
                     <table width="850px" border="0" cellpadding="0" cellspacing="0">
                      <tbody>
          <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->
          <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->	        
			
                  
                  
                  <tr>
                  <div style="clear:both"></div>

                  </tr>
		 <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->
         <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->	
					   
					   
					   <tr>
                         <td class="nettable" height="177" valign="top">  
                           <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                           <tbody>
                            <tr><td></td></tr>
                            <tr>
                             <td class="border-radius" valign="top">
                              <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <tr>
                                      <td colspan="2" class="head">Employee's Detail  --#1--</td></tr>
                                        <tr>
                                           <td><table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                              <tbody>
                                                <tr><td><input type="text" id="emp_id" placeholder="Employee ID" onKeyUp="getdata()" name="emp_id" tabindex="2" value="Employee ID" onFocus="if (this.value == 'Employee ID') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee ID';}"/></td></tr> 
                                                <tr><td><input type="text" id="emp_f_name" placeholder="Employee First Name" name="emp_f_name" tabindex="3" value="Employee First Name" onFocus="if (this.value == 'Employee First Name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee First Name';}"/></td></tr>
                                                <tr><td><input type="text" id="emp_l_name" placeholder="Employee Last Name" name="emp_l_name" tabindex="4" value="Employee Last Name" onFocus="if (this.value == 'Employee Last Name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee Last Name';}"/></td></tr>
                                                <tr><td><input type="text" id="emp_street" placeholder="Employee Street Address" name="emp_street" tabindex="5" value="Employee Street Address" onFocus="if (this.value == 'Employee Street Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee Street Address';}"/></td></tr>
                                                <tr><td><input type="text" id="emp_city" placeholder="Employee City" name="emp_city" tabindex="6" value="Employee city" onFocus="if (this.value == 'Employee City') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee City';}"/></td></tr>
                                                <tr><td><?php $states = array('Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','District Of Columbia',
																	'Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine',
																	'Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada',
																	'New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma',
																	'Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont',
																	'Virginia','Washington','West Virginia','Wisconsin','Wyoming');
														echo '<select id="emp_state" name="emp_state" onchange="getdata()" onblur="getdata()" value="Select State" tabindex="7">';
														 $i=0;
														 $state = $_REQUEST['emp_state'] ;
														     foreach($states as $c){
																$sel=''; 			// Set $sel to empty initially
																$tag = 'selected="selected"';
																	if($state == $i){ 
																		$sel = $tag; 
																	}
															  	echo '<option value="'.$i.'"'.$sel.'>'.$c.'</option>';
															  	 $i++;
															  }
														echo '</select>';	  
												?>
                                                </td></tr>
                                                <tr><td><input type="text" id="emp_zip" placeholder="Employee Zipcode" name="emp_zip" tabindex="8" value="Employee Zip" onFocus="if (this.value == 'Employee Zipcode') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Employee Zipcode';}"/></td></tr>
                                                <tr><td><input type="text" id="emp_ssn" placeholder="Social Security Number" name="emp_ssn" tabindex="9" value="Emp Social Sec" onFocus="if (this.value == 'Social Security Number') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Social Security Number';}"/></td></tr>                         
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
                        <td class="nettable" valign="top">
                          
                     	 <table class="nettable" cellspacing="0" cellpadding="0" border="0" colspan="2">
                         <tbody>
                            <tr>
                              <td class="border-radius" valign="top">
                                <table class="nettable" border="0" cellspacing="0" cellpadding="0" colspan="2">
                                 <tbody>
                                     <tr><td class="head" colspan="2">Date you HIRED ?</td></tr>
                                     <tr><td><input type="text" class='shorter_box datepicker' id="start_date" name="emp_sdate" placeholder="Start Date" tabindex="10" value="01/04/<?php echo date("Y");?>" onFocus="if (this.value == 'End of Pay Period') {this.value = '';}" onchange="if (this.value == '') {this.value = 'End of Pay Period'; getdata();}" title="  VERY IMPORTANT - When did you get hired.  Usually Mondays, or Sunday Midnight.  Whatever.  Later,  you will select your END OF PAYPERIOD and we will calculate the rest"/></td>
                                         <td>HIRED Date</td></tr>
                                     <tr>Jan. 4th is first Monday in 2016</tr>
                                     <tr>keep it as your first day - NOT Jan. 1</tr>
                                             <?PHP //echo ("XXXXXXXXXX".workingYear); ?>
                                  </tbody>
                                </table>
                              </td>
                           </tr>
                         </tbody>
                        </table>
                       
                        <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                              <tr>
                                  <td class="border-radius" valign="top" colspan="2">
                                    <table class="nettable" border="0" cellspacing="0" cellpadding="0">
                                       <tbody> 
                                        <tr><td class="head">Company Details  --#2--</td></tr>
                                        
                                         <tr><td><input type="text" id="empr_add_name" name="empr_add_name" placeholder="Company name" tabindex="11" value="Company name" onFocus="if (this.value == 'Company name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Company name';}"/></td></tr>
                                         <tr><td><input type="text" id="empr_add_street" name="empr_add_street" placeholder="Company Address" tabindex="12" value="Company Address" onFocus="if (this.value == 'Company Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Company Address';}"/></td></tr>
                                         <tr><td><input type="text" id="empr_add_city" name="empr_add_city" placeholder="Company City" tabindex="13" value="Company City" onFocus="if (this.value == 'Company City') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Company City';}"/></td></tr>
                                         <tr><td><input type="text" id="empr_add_state" placeholder="Company State" name="empr_add_state" tabindex="14" value="Company State" onFocus="if (this.value == 'Company State') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Company State';}"/><tr><td>
                                         <tr><td><input type="text" id="empr_add_zip" name="empr_add_zip" placeholder="Zip Code" tabindex="15" value="Zip Code" onFocus="if (this.value == 'Zip Code') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Zip Code';}"/></td></tr>
                                       </tbody>
                                    </table>
                                  </td>
                              </tr>
                           </tbody>
                          </table>
                        </td>
                          
                        <td class="nettable" valign="top">
                          
                               <table class="nettable" cellspacing="0" cellpadding="0" border="0">
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
                                                    <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                     <tbody>
                                                      <tr><td><input placeholder="31200" type="text" class="shorter_box currency bigger-narrow" id="input_yearly_gross" tabindex="16" onKeyUp="convert_yearly_hourly(input_yearly_gross.value)" name="input_yearly_gross" value="31200" onFocus="if (this.value == 'input_yearly_gross') {this.value = '';}" onBlur="if (this.value == '31200') {this.value = '31,200';}"/></td><td>$/Year</td></tr>
                                                      <tr><td colspan="2"><center> <h2>------  OR  ------</h2></center></td></tr>

                                                      <tr><td><input placeholder="Regular Hours:" type="text" class="shorter_box currency" id="gross_hrs"  name="gross_hrs" tabindex="17" value="40" onKeyUp="convert_hourly_yearly(gross_hrs, gross_rate, ot_hrs)" onFocus="if (this.value == 'Regular Hours:') {this.value = '';}" onBlur="if (this.value == '') {this.value = '40';}"/></td><td>Hrs/Week</td></tr>
                                                      <tr><td><input placeholder="Pay Rate per hour:" type="text" class="shorter_box" id="gross_rate"  name="gross_rate" tabindex="18" value="15" onkeyup="convert_hourly_yearly(gross_hrs, gross_rate, ot_hrs)" onFocus="if (this.value == 'Pay Rate per hour:') {this.value = '';}" onBlur="if (this.value == '') {this.value = '15';}" /></td><td>$/Hour</td></tr>
                                                      <tr><td><input placeholder="Over Time Hrs (1.5 pay)" type="text" class="shorter_box" id="ot_hrs" name="ot_hrs" tabindex="19" value= "0" onKeyUp="convert_hourly_yearly(gross_hrs, gross_rate, ot_hrs)" onBlur="if (this.value == '') {this.value = 0;}"/></td><td>Overtime</td></tr>
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




                        <td class="nettable" valign="top">
                          <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                               <tbody>
                               <tr>
                                <td></td>
                               </tr>
                               <tr>
                                <td class="border-radius">
                                  <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                   <tbody>
                                    <tr>
                                      <td>
                                        <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                         <tbody>
                                             	<tr>
                                             		<td colspan="2" class="head">PAY Date & ISSUE Date #4</td>
                                                </tr>

                                                <tr>
                                                   <td>&nbsp;</td>
                                                </tr>

                                                <tr>

                                                </tr>
                                                <tr>
                                                     <td><input type="text" class='shorter_box no_edit' readonly id="prd_start_date" name="prd_start_date" placeholder="Period Start Date" value="" title=" DO NOT EDIT -  calculated field, based on how often you get paid, i.e. weekly, monthly, etc"/></td>
                                                     <td>&nbsp;Work period Start</td>

                                                </tr>
                                                <tr>
                                                    <td><input type="text" class='shorter_box datepicker ' id="end_date" name="emp_edate" placeholder="End Date" tabindex="20" value="<?php echo date("m");?>/<?php echo date("d");?>/<?php echo date("Y");?>" onFocus="if (this.value == 'End of Pay Period') {this.value = '';}" onchange="if (this.value == '') {this.value = 'End of Pay Period'; getdata();}" title="VERY IMPORTANT - End of the latest word period - We will calculate the Start Date"/></td>
                                                    <td>&nbsp;Work Period End</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">________________________</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="text" class="shorter_box no_edit" id="num_prds" name="num_prds" value="" readonly title="AUTOMATIC - Not Editable - Calculated Number of working Periods this year - Change the # above"/></td>
                                                    <td>Periods Worked: </td>
												</tr>
                                                <tr>
                                                    <td colspan="2">________________________</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Issue check after</td>
                                                    <td><input type="text" id="issue_date_diff" name="issue_date_diff" class="short_box ref_edit" tabindex="21" value="7" onFocus="if (this.value == 'Pay date for Stub') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Pay date for Stub'; getdata();}" title="Change this to adjust PRINT paystub date below" /> days</td>
                                                </tr>
                                                <tr>
                                                     <td><input type="text" class='shorter_box no_edit' readonly id="pay_date" name="emp_pdate" placeholder="Pay Date" value="" title="AUTOMATIC - Not Editable - Change the # above"/></td>
                                                     <td>&nbsp;Paystub Print Date</td>
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
							
                           <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                       <tbody>
                                          <tr>
                                            <td class="jf">
                                               <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                  <tbody>
                                                    <tr>
                                                       <td class="border-radius">
                                                          <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                              <tr>
                                                                <td class="head">Filing Status --#5--</td>
                                                              </tr>
                                                              <tr>
                                                                <td>
                                                                  <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                     <tr>
                                                                         <td>
                                                                          <center>
                                                                            <select id="emp_mar_status" name="emp_mar_status" tabindex="22"  onchange="getdata();">
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
                            <td class="nettable" valign="top">

                             <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                   <tr>
                                     <td  class="border-radius">
                                         <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                               <tr> <td class="head">How often are you paid? --#6--</td></tr>
                                              <tr>
                                                <td>
                                                  <table style=" float: left; margin-left: 10px; " class="nettable" cellspacing="0" cellpadding="0" border="0">
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
                        <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                       <tbody>
                                          <tr>
                                            <td>
                                               <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                  <tbody>
                                                    <tr>
                                                       <td class="border-radius">
                                                          <table class="nettable" cellspacing="0" cellpadding="0" border="0">
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
                           <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                 <tbody>
                                      <tr>
                                        <td class="jf">
                                               <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                  <tbody>
                                                    <tr>
                                                       <td class="border-radius">
                                                          <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                              <tr>
                                                                <td class="head">Any Union Dues?</td>
                                                              </tr>
                                                              <tr>
                                                                <td>
                                                                  <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>

                                                                     <tr>
                                                                         <td>
                                                                          <input placeholder="Enter % here" type="text" class="shorter_box" tabindex="27" name="union_dues" onKeyUp="getdata()" id="union_dues">
                                                                         </td><td>% Percent</td>
                                                                     </tr>
                                                                     <tr>
                                                                         <td>
                                                                          <input placeholder="Union dues %" type="text" class="shorter_box no_edit" name="union_dues_prd" id="union_dues_prd" readonly="readonly" >
                                                                         </td>
																		 <td>$ Each stub</td>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                          <input placeholder="YTD" type="text" class="shorter_box no_edit" name="union_dues_ytd" id="union_dues_ytd" readonly="readonly">
                                                                        </td>
																		<td>$ YTD Total</td>
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
                               <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                   <tr>
                                      <td></td>
                                   </tr>
                                   <tr>
                                      <td class="border-radius">
                                         <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                               <tr>
                                                 <td colspan="3" class="head"> Bank Numbers (optional)</td></tr>
                                               <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="28" name="rout_num" onKeyUp="getdata()" id="rout_num" onFocus="if (this.value == 'routing #') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL - Bank Routing number, first set of digits on you checking account - If you don't want to put your real numbers on it, just make up some, and then black-out the results on the printout">
                                                             </td><td>Routing #</td></tr>
                                               <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="29" name="acc_num" onKeyUp="getdata()" id="acc_num" onFocus="if (this.value == 'account #') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" onchange="if (this.value == ' ') {this.value = '0.00';}" title=" Your Bank account number the checks are deposited into - If you don't want to put the real data in, just make up numbers, and then black-out the printed version">
                                                             </td><td>Account #</td></tr>


                                           </tbody>
                                        </table>
                                     </td>
                                  </tr>
                                </tbody>

                             </table> 
                       </td>
						   
                       <td>
						      <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                   <tr>
                                      <td class="border-radius">
                                         <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                               <tr>
                                                 <td colspan="4" class="head">Custom + or -(optional)</td></tr>
                                               <tr>
                                               	 <td></td>
                                                 <td>Name</td>
                                                 <td>Amount</td></tr>
                                               <tr>
                                                 <td>+plus+</td>
                                                 <td><input placeholder="BONUS" type="text" value="Bonus" class="shorter_box" tabindex="30" name="garnish1_name" onKeyUp="getdata()" id="garnish1_name" onFocus="if (this.value == 'Med Ins') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Option 1';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="Medical Insurance OR Dental OR Child Support OR Loan"></td>
                                                 <td><input placeholder="garnish1" type="text" value="0" class="short_box_small" tabindex="31" name="garnish1" onKeyUp="getdata()" id="garnish1" onFocus="if (this.value == 'garnish1') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL Type in the amount of your first garnishment amount for each paycheck"></td></tr>
                                               
                                               <tr>
                                                 <td>-Minus-</td>
                                                 <td><input placeholder="Medical" type="text" value="Medical" class="shorter_box" tabindex="32" name="garnish2_name" onKeyUp="getdata()" id="garnish2_name" onFocus="if (this.value == 'Dental') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Option 2';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="Medical Insurance OR Dental OR Child Support OR Loan"></td>
                                                 <td><input placeholder="garnish2" type="text" value="0" class="short_box_small" tabindex="33" name="garnish2" onKeyUp="getdata()" id="garnish2" onFocus="if (this.value == 'garnish2') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL Type in the amount of your second garnishment amount for each paycheck"></td></tr>
                                               
                                               <tr>
                                                 <td>-Minus-</td>
                                                 <td><input placeholder="Garnish" type="text" value="Garnish" class="shorter_box" tabindex="34" name="garnish3_name" onKeyUp="getdata()" id="garnish3_name" onFocus="if (this.value == 'Child Supp') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Option 3';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="Medical Insurance OR Dental OR Child Support OR Loan"></td>
                                                 <td><input placeholder="garnish3" type="text" value="0" class="short_box_small" tabindex="35" name="garnish3" onKeyUp="getdata()" id="garnish3" onFocus="if (this.value == 'garnish3') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0.00';} getdata()" onchange="if (this.value == ' ') {this.value = '0.00';}" title="OPTIONAL Type in the amount of your third garnishment amount for each paycheck"></td></tr>
                                           </tbody>
                                        </table>
                                     </td>
                                  </tr>
                                </tbody>
                             </table>
                       </td>
						 
                       <td>
						   <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                   <tr>
                                      <td></td>
                                   </tr>
                                   <tr>
                                      <td class="border-radius">
                                         <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                               <tr><td colspan="3" class="head"> Commisions  </td></tr>
                                               <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="33" name="commission_prd" id="commission_prd" onChange="getdata()" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" title="How much commissions for this pay period">
                                               </td><td>This Period</td></tr>
                                               <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="34" name="commission_ytd" id="commission_ytd" onChange="getdata()" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" title="this Year, total commissions.  This does not have to be THIS PERIOD * Payperiods, it could be anything">
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
                          <!-- <td>
                              <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                 <tbody>
                                   <tr>
                                     <td></td>
                                   </tr>
                                   <tr>
                                      <td class="border-radius">
                                        <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                             <tbody>
                                               <tr>
                                                 <td colspan="2" class="head"> Federal Income Tax Amounts  </td>
                                               </tr>
                                               <tr>
                                                 <td>
                                                      <input placeholder="This Period:" type="text" class="shorter_box no_edit" id="fed_amtincom" name="fed_amtincom" readonly="readonly" />
                                                 </td><td>This Period</td>
                                               </tr>
                                               <tr>
                                                  <td>
                                                      <input placeholder="YTD:" type="text" class="shorter_box no_edit" id="fed_amtytd" name="fed_amtytd" readonly="readonly"/>
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

                         <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                   <tr>
                                      <td></td>
                                   </tr>

                                   <tr>
                                      <td class="border-radius">
                                         <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                               <tr>
                                                  <td colspan="3" class="head"> FICA-Medicare Amounts  </td>
                                              </tr>
                                                <tr>
                                                  <td colspan="2">
                                                        <input placeholder="This Period:" type="text" class="shorter_box no_edit" id="medicare_prd"  onkeyup="getdata()" name="medicare_prd" readonly="readonly"/>
                                                  </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2">
                                                     <input placeholder="YTD:" type="text" class="shorter_box no_edit" id="medicare_ytd"  onkeyup="getdata()" name="medicare_ytd" readonly="readonly"/></td>
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

                              <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                       <tbody>
                                          <tr>
                                            <td class="jf">
                                               <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                  <tbody>
                                                    <tr>
                                                       <td class="border-radius">
                                                          <table class="nettable" cellspacing="0" cellpadding="0" border="0">
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
                                                                          <input placeholder="This Period:" type="text" class="shorter_box no_edit" id="fica_social_prd"  onkeyup="getdata()" name="fica_social_prd" readonly="readonly"/>
                                                                         </td>
                                                                     </tr>
                                                                     <tr>
                                                                        <td colspan="2">
                                                                          <input type="text" id="fica_social_ytd" class="shorter_box no_edit"  placeholder="YTD:"  onkeyup="getdata()" name="fica_social_ytd" readonly="readonly"/>
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
-->
                         
                          <td>
						   <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                   <tr>
                                      <td></td>
                                   </tr>
                                   <tr>
                                      <td class="border-radius">
                                         <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                               <tr><td colspan="3" class="head"> PROMO CODE  </td></tr>
                                               <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="34" name="promo_code" id="promo_code" onChange="getdata()" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" title="discount promo code">
                                               </td><td>enter the code</td></tr>
                                               
                                           </tbody>
                                        </table>
                                     </td>
								
									 <td class="border-radius" valign="top">
									  <table class="nettable" cellspacing="0" cellpadding="0" border="0">
										<tbody>
										 <tr>
											
										  Please select type: <br/>
										   <select name="stub_id" id="stub_id" tabindex="1"> 
											 <?php
												$stubs = paystub_get_pages();
												  foreach ( $stubs as $stubId=>$data){
													 echo "<option value='$stubId'>{$data[0]}</option>";
												  }
											 ?>
										   </select>
									  
										</tr>
									   </tbody>
									  </table>
									 <td>
									 
										  </tr>
										</tbody>
								  </table>
							   </td>
                          
                          <td>
                        <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                       <tbody>
                                          <tr>
                                            <td>
                                               <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                  <tbody>
                                                    <tr>
                                                       <td class="border-radius">
                                                          <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                              <tr>
                                                                <td class="head">NOTES -Modern stub- optional</td>
                                                              </tr>

                                                              <tr>
                                                                <td>
                                                                  <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                     <tr>
                                                                        <td colspan="4">
                                                                          <textarea placeholder="EFFECTIVE THIS PAY PERIOD - REGULAR" value="EFFECTIVE THIS PAY PERIOD - REGULAR" title="MODERN STUB ONLY - Type anything here to make this stub truly customized" name="line_1" id="line_1" cols="28" rows="2">EFFECTIVE THIS PAY PERIOD - REGULAR</textarea>
                                                                        </td>
                                                                     </tr>
                                                                     <tr>
                                                                        <td colspan="4">
                                                                          <textarea placeholder="FREE FLU SHOTS AT THE OUR CLINIC" value="FREE FLU SHOTS AT THE OUR CLINIC" title="PREVIEW your notes by clicking the red button" type="text" name="line_2" id="line_2" cols="28" rows="2">FREE FLU SHOTS AT THE OUR CLINIC </textarea>
                                                                        </td>
                                                                     </tr>
                                                                     <tr>
                                                                        <td colspan="4">
                                                                          <textarea placeholder="REMEMBER OUR UNITED WAY FUND DRIVE." value="REMEMBER OUR UNITED WAY FUND DRIVE." title="Or Leave them as-is if you like what you see" type="text"  name="line_3" id="line_3" cols="28" rows="2">REMEMBER OUR UNITED WAY FUND DRIVE.</textarea>
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
						   <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                   <tr>
                                      <td></td>
                                   </tr>
                                   <tr>
								   <td class="border-radius">
                              <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                  	<tr><td colspan="3" class="head"> Number of Stubs:  </td></tr>
                                     <tr>
                                     	<td>
                                     		<input type="number" class="stub_input" id="num_stubs" min="1" max='52' name="num_stubs" value="1" tabindex="35"/>
                                     	</td>
                                     	<td>
											<table width="10">  
                                            	<tbody>
                                                  <tr><td><input type="button" class="inc_btn_blue" value="MORE" onclick='javascript: document.getElementById("num_stubs").value++; renderPeriod(); preview_pdf();'></td></tr>
                                                  <tr><td><input type="button" class="inc_btn_blue" value="LESS" onclick='javascript: document.getElementById("num_stubs").value--; renderPeriod(); preview_pdf();'></td></tr>
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
            <table class="nettable" cellspacing="0" cellpadding="0" border="0" style="    float: left;margin-right: 10px;">
               <tbody>
                <tr>
                  <td class="border-radius" valign="top" colspan="2" >
                    <?php
                      $caption = 'FREE Email Preview';
                      if(current_user_can("access_s2member_level2") == 1)
                      {
                        $caption = 'Email/Save Stub';
                      } 
                    ?>
                    <input type="text" id="emp_email1" placeholder="Email @ Address" name="emp_email" tabindex="37" value="" onFocus="if (this.value == 'Email @ Address') {this.value = '';}" class="bigger-wide"  />
                    <input type="submit" class="blue_button" name="bankstate" value="<?php echo $caption; ?>" placeholder="Click for email Preview bt" id="add_preview" onclick="pre_pdf()" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="button" class = red_button value="UPDATE STUBS" onclick="preview_pdf()" />
                  </td>
                </tr>
              </tbody>
            </table>
          </td>




         </tr>
         </tr>



       </tbody>
        </table>


                  <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->
                   <!--  XXXXXXXXX  ROW ROW ROW  XXXXXXX    ROW ROW ROW XXXXXXXXXXXXXX      ROW ROW ROW   XXXXXXX     -->
                 



                  <!--     <div id = email_table>
				 <table class="nettable content" class="nettable" cellspacing="0" cellpadding="0" border="0">
                                       <tbody>
                                          <tr>
                                            <td class="jf">
                                               <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                  <tbody>
                                                    <tr>
                                                       <td class="border-radius">
                                                          <table class="nettable" cellspacing="0" cellpadding="0" border="0">
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
                 </div>

                 <div id = garnishments_table>
                     <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                               <tbody>
                                    <tr>
                                      <td valign="top" class="border-radius">
                                          <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                             <tbody>
                                             <tr>
                                               <td class="head">Gross Earnings - Automatic</td>
                                             </tr>
                                            <tr>
                                              <td>
                                                 <table class="nettable" cellspacing="0" cellpadding="0" border="0">
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
                 </div>

				 <div id = state_table>
					<table class="nettable" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                            <tr>
                              <td></td>
                            </tr>
                            <tr>
                              <td valign="top" class="border-radius"><table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                  <tr>
                                    <td valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0">
                                      <tbody>
                                          <tr>
                                               <td class="head" colspan="2">State Taxes - Automatic</td>
                                          </tr>
                                        <tr>
                                          <td><input  placeholder="This Period" type="text" class="shorter_box no_edit"  id="state_amtincometax_prd" name="state_amtincometax_prd" readonly="readonly"/></td>
                                        <td>This Period</td></tr>
                                        <tr>
                                          <td><input placeholder="YTD" type="text" class="shorter_box no_edit"  id="state_amtincometax_ytd" name="state_amtincometax_ytd" readonly="readonly"/></td>
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
				 </div>
				 
				 
				 <div id = state_table>
					<table class="nettable" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                <tr>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td class="border-radius">
                                  <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                      <tr>
                                        <td><table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                           <tbody>
                                            <tr>
                                              <td colspan="2" class="head">Net Amount Paid to Employee</td>
                                            </tr>
                                            <tr>
                                              <td><table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                                  <tbody>
                                                    <tr><td colspan="2"><input type="text" class="shorter_box no_edit bigger" id="net_pay_prd" placeholder="This Period" name="net_pay_prd" readonly="readonly"/></td></tr>
                                                    <tr><td><center>One pay period</center></td></tr>
                                                    <tr><td><input type="text" class="shorter_box no_edit" id="net_pay_ytd" placeholder="YTD" name="net_pay_ytd" readonly="readonly"/></td><td>YTD</td></tr>
                                                    <tr><td><input type="text" class="shorter_box no_edit" id="net_pay_w2_tot" placeholder="Last Year" name="net_pay_w2_tot" readonly="readonly"/></td><td>W-2</td></tr>
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
				 </div>-->
</div>


<!--END adding by hoang-->
<div style="clear: both;"></div>
<div id="period_list"></div>
         </form>



<script type="text/u-template" id="period_u_templ">
  <div id="consecutive_stubs">
      <% for ( idx = 0; idx < numOfPeriod; idx++) { %>
          <h3>PERIOD   #  <%=idx+1%>    of    <%=numOfPeriod%> </h3>
          <div><table>
              <tr><td class="">
                      <table width="185" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                          <tr><td colspan="2" class="head">Work Hours & Hourly Rate</td></tr>
                          <tr><td><input placeholder="Regular Hours:" type="text" class="shorter_box currency c_gross_hrs" id="gross_hrs_<%=idx%>"  name="gross_hrs_[]" value="<%=g_hrs%>"  onFocus="if (this.value == 'Regular Hours:') {this.value = '';}" onBlur="if (this.value == '') {this.value = '40';}"/></td><td>Hrs/Week</td></tr>
                          <tr><td><input placeholder="Pay Rate per hour:" type="text" class="shorter_box c_gross_rate" id="gross_rate_<%=idx%>"  name="gross_rate_[]" value="<%=g_rate%>" onFocus="if (this.value == 'Pay Rate per hour:') {this.value = '';}" onBlur="if (this.value == '') {this.value = '15';}" /></td><td>$/Hour</td></tr>
                          <tr><td><input placeholder="Over Time Hrs (1.5 pay)" type="text" class="shorter_box c_ot_hrs" id="ot_hrs_<%=idx%>" name="ot_hrs_[]" value= "<%=o_hrs%>"  onBlur="if (this.value == '') {this.value = 0;}"/></td><td>Overtime</td></tr>
                          </tbody>
                      </table>
                  </td>

                  <td class="">
                      <table width="150" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                          <tr><td colspan="2" class="head"> Commisions  </td></tr>
                          <tr>
                              <td><input type="text" value="<%=c_prd%>" name="commission_prd_[]" id="commission_prd__<%=idx%>" placeholder="0" class="stub_input c_commission_prd" onChange="getdata()" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" title="How much commissions for this pay period">
                              </td></tr>
                          </tbody>
                      </table>
                  </td>
				  
                  <td class="">
                      <table width="150" cellspacing="0" cellpadding="0" border="0">
                          <tbody>
                          <tr><td class="head">Check #</td></tr>
                          <tr>
                              <td><input placeholder="check_num" type="text" value="0" class="stub_input" name="check_num_[]" onKeyUp="" id="check_num_<%=idx%>" onFocus="if (this.value == 'check_num') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';} getdata()" onchange="if (this.value == ' ') {this.value = '0';}" title="OPTIONAL Type in the check Number for your stubs">
                              </td></tr>
                          </tbody>
                      </table>
                  </td>
				  
                 <!--  <td style="vertical-align: bottom">
                      <input type="button" class = red_button value="UPDATE CHANGES to Period-<%=idx+1%>" onclick="preview_pdf(<%=idx%>)" />
                  </td> -->
              </tr>
            </table>
              <iframe src="about:blank" scrolling="no" id="ifr_prev_<%=idx%>" onload="top.calcHeight(this)"></iframe>
          </div>
      <% }; %>
  </div>
  
</script>


<script>

    //multiple stub update
    function preview_pdf() {
      labelPeriods();
       if (!validate_state()) {
            return false;
        } else {
            $('#consecutive_stubs iframe').each(function(g, el) {
                var idx = $(el).attr('id').split('_')[2];

                // set the form parameter for stub identity
                $param = $('#form-main').serialize();
                $param += "&prd_num=" + idx;
                 $.post("<?php echo $prevUrl?>",
                    $param,
                    function(data){
                        $(el).css('height', '100px');
                        $doc = el.contentWindow.document;
                        $($doc.body).html(data);
                        $height = calcHeight(el);
                        $(el).parent().css('height', ($height * 1 + 100) + 'px' );
                    }
                )
            });
        }
    }

    //single stub update
    function _preview_pdf(pnum){   //this is the ONSCREEN PREVIEW  it's not the "previePDF" that emails

        if (!validate_state()) {
            //alert("somethings missing on INFO page");
            return false;
        } else { //validates okay
            //alert ("ok");
            $ifr = $("#ifr_prev_" + pnum)[0];
            // set the form parameter for stub identity
            $param = $('#form-main').serialize();
            $param += "&prd_num=" + pnum;
            $.post("<?php echo $prevUrl?>",
                $param,
                function(data){
                    $($ifr).css('height', '100px');

                    $doc = $ifr.contentWindow.document;

                    $($doc.body).html(data);
//                               $doc.write(data);
                    $height = calcHeight($ifr);
                    $($ifr).parent().css('height', ($height * 1 + 100) + 'px' )
                }
            )
            }

    }

    function labelPeriods()
    {
      //console.log($('#end_date').val() + $('#issue_date_diff').val());
      endDate = new Date($('#end_date').val());
      dt = new Date(endDate);
      dt.setDate(endDate.getDate() + parseInt($('#issue_date_diff').val()));
      result = (dt.getMonth() + 1) + '/' + dt.getDate() + '/' + dt.getFullYear();
      console.log(result);
    }

    function renderPeriod(){
        templ = $("#period_u_templ").html();
        options = {"numOfPeriod": $("#num_stubs").val() *1 ,
            g_hrs: $("#gross_hrs").val(),
            g_rate:$("#gross_rate").val(),
            o_hrs:$("#ot_hrs").val(),
            c_prd:$("#commission_prd").val(),
            c_ytd:$("#commission_ytd").val()
        };
        renderHtml = _.template(templ, options);
        $("#period_list").empty();
        $("#period_list").html(renderHtml);
        $("#consecutive_stubs").accordion({collapsible:true});
        //console.log($("#consecutive_stubs"));
    }


    //$pfd = {weekly:1, biweekly:2, monthly:-1; bi_monthly: -2};  // -1 = one month, 1 = one week
    $pfd = {weekly:1, biweekly:2, monthly:4, bimonthly: 8};
    ///handler on payment frequent changes
    function on_prd_change(){
        return on_dateref_change();
    }

    var payfreq = $pfd[$("input[name=payfreq]:checked").val()] * 7;
    function on_dateref_change(){
        //payfreq = $pfd [$(this).val()] * 7;

        endDate = $("#end_date").datepicker('getDate');
        prdStartDate = endDate.clone().addDays(payfreq * -1);
        $("#prd_start_date").val(prdStartDate.toString('MM/dd/yyyy'));

        payAfter = $("#issue_date_diff").val();
        $("#pay_date").datepicker('setDate', endDate.clone().addDays(payAfter));
    }

    //======== set handlers
    $("input[name=payfreq]").click( function(){
        payfreq = $pfd [$(this).val()] * 7;
        $("#issue_date_diff").val(payfreq);
        on_dateref_change();
    });


    $("#issue_date_diff").change(on_dateref_change)


    $("#num_stubs").change(function(){
        // change cost
        //costOpts = ["PDF Download - You Print", "3 for price of 2", "Unlimited Download", "We print on real Check paper"];
        //$op = 0;
        $numStubs = $("#num_stubs").val() * 1
        if ( $numStubs <2){
            $op = 0;
        }else if ( $numStubs <= 3){
            $op = 1;
        }else if ( $numStubs > 3){
            $op = 2;
        }
        //$("#os0").val(costOpts[$op]);

        $("#num_stubs").attr('max', $("#num_prds").val());
        renderPeriod();

    });



    function on_stub_change(){
        var active = $("#consecutive_stubs").accordion( "option", "active" );
        preview_pdf(active);
    }

    $("#stub_id").change(function(){
        on_stub_change();
    })
    // initial
    $(function(){
        renderPeriod();
    })
	
	$(".content").click(function(){
    	$(this).toggleClass('active');
	});
	$("#pre_downloadpdf").click(function(){
                 $("#downloadpdf").val("1") ;
    });


	$("#pre_emaildownloadpdf").click(function(){
                 $("#downloadpdf").val("0") ;
    });
</script>


   <script type="text/javascript">
		var verifyCallback = function(response) {
			//console.log(response);
			//console.log('verifyed');
			//pre_pdf();
			$(".mfp-close").click();
			
			if ($("#downloadpdf").val() === "1" ){
                //alert ("good validate 1");
				previewPDF();
			}else{
			
				if (validate_email() == true){
							//alert ("good validate 2");
							previewPDF();
						}
				}		
		  };

	  var widgetId2;
      var onloadCallback = function() {
		  widgetId2 = grecaptcha.render('html_element', {
          'sitekey' : '6Ld8rwwTAAAAAKzyr2NNbmJpZcolpLncH2NFouEI',
          'callback' : verifyCallback
        });
        grecaptcha.render('html_element', {
          'sitekey' : '6Ld8rwwTAAAAAKzyr2NNbmJpZcolpLncH2NFouEI',
		  'callback' : verifyCallback
        });
      };  
    </script>



        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=en"	async defer>

        </script>

<script>


$(document).ready(function() {

  //preview_pdf(0);

	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',
            //alert ("TEST");
		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});
</script>
<!-- link that opens popup -->
<!--a class="popup-with-form" href="#test-form">Open form</a        -->

<!-- form itself -->
<form action="javascript:grecaptcha.reset(widgetId2);" id="test-form" class="white-popup-block mfp-hide" style="    position: relative;    background: #FFF;    padding: 2em 3em;    width: auto;    margin:20px auto;    max-width: 400px;">
	<p><h2>Please help verify you are a real Person<h2></p>
      <div id="html_element"></div>
      <br/>
	   <button type="submit" name="submitButton" value="getResponse">Submitt</button>
</form>

<script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/jquery.dateFormat-1.0.js" type="text/javascript"></script>
<script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/underscore-min.js" type="text/javascript"></script>
<script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/date.js" type="text/javascript"></script>
<script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/pay-functions-new.js" type="text/javascript"></script>

