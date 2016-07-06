<?php /*Template Name: SAF-Bankstatement*/

error_reporting(E_ALL);
error_reporting(0);

get_header(); 

$template_uri =  get_template_directory_uri();
preg_match('%(.*)/%', $template_uri, $current_uri);
$current_uri = $current_uri[0] . 'paycheckol/';

?>

<form action="http://domain.com/submit-search">
</form>

<link rel="stylesheet" type="text/css" href="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/css/form.css">


<script type="text/javascript">
function calcHeight(ifr)
{
    //find the height of the internal page
    //alert(1);

    var the_height= ifr.contentWindow.document.body.scrollHeight;
    //change the height of the iframe
    $(ifr).css('height',the_height+"px");
    return the_height;
}

$(function () {
            // tab settings
            $("#tabs").tabs({
                select: function (event, ui) {
                    //beforeActivate: function (event, ui) {
                    if ( $(ui.tab).data('tab') == "info" ) {
                        on_stub_change();
                        return;
                    }
                    if (!validate_state()) {
					//if (1=2) {
                        alert("somethings missing on INFO page");
                        return false;
                    } else { //validates okay
                        //alert("All Good on INFO page");
                        // feed data to preview page
                        $ifr = $($(ui.tab).attr('href')).find('iframe')[0];

                        // set the form parameter for stub identity
                        $("#main_form #stub_id").val( $(ui.tab).data('tab'));

                        $param = $('#form-main').serialize();
                        $param += "&prd_num=0";
                        $.post("<?php echo $prevUrl?>",
                            $param,
                           function(data){
                               $doc = $ifr.contentWindow.document;

                               $($doc.body).html(data);
//                               $doc.write(data);
                               calcHeight($ifr);
                           }
                        )
                    }
                }
            });
        });
</script>
<?php

$baseDir = str_replace('/wp-content/themes', '', get_theme_root()) . "/"; // wordpress home dir;
      
	    require_once($baseDir.'paystub/_pages.inc');
	    require_once($baseDir.'paystub/util.php');

	  $paystubPath = $baseDir. 'paystub/';

	  $pdf_pagesInclude = paystub_get_pages($paystubPath);

	  $baseUrl = getServerHome();

	  $pdf_pagesUrl = paystub_get_pages($baseUrl);

	  $prevUrl = $baseUrl. "paystub/ajax_preview_stub.php";

?>
<div id="content" class="clearfix fullwidth">
 <div id="left-area">
<div id="tabs">
    <ul>
        <li><a href="#main_form" data-tab="info">Your INFOz</a></li>
        <li><a href="#basic_paystub" data-tab="basic">Basic Paystub</a></li>
        <li><a href="#neat_paystub" data-tab="neat">Neat Paystub</a></li>
        <li><a href="#Tstub" data-tab="tstub">T-Stub</a></li>
        <li><a href="#Modern" data-tab="modern">Modern</a></li>
        <li><a href="#corporate-test" data-tab="corp">Corporate Paystub</a></li>
        <li><a href="#w2" data-tab="w2">W-2 IRS</a></li>
        <li><a href="#1099" data-tab="1099">1099s</a></li>
    </ul>
<div id="main_form">
  <h2>#1 -Fill in<span style="background:yellow">Yellow</span> boxes.   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      #2 -Click <span style="background:red"> RED </span> Btn   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    #3 - Click <span style="background:rgb(121, 187, 255)">Blue Btn</span> for Preview </h2>
        <p>
<!--            <form id="form-main" action="http://www.paycheckstubonline.com/wp-content/themes/Chameleon/pdf/payments.php" name="form1" method="post" style="margin:0">-->
            <form id="form-main" action="/pdf_bankstatement.php" name="form1" method="post" style="margin:0" target="_blank">
              <div id="pc">
                <input type="hidden" name="start_date2" id="start_date2"/>
                <input type="hidden" name="state_tax" id="state_tax"/>
                <input type="hidden" name="stub_id" value="modern"/>
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="stub_id" value="modern" />
                     <table class="bankstatement-form" width="850px" border="0" cellpadding="0" cellspacing="0">
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
                                         <tr><td><input type="hidden" id="company-logo" name="company_logo" value=""><div class="head" style="padding-top:3px;margin-left:5px;text-transform:inherit; font-size:">Upload Logo</div><input id="fileInput" type="file" name="file"></td></tr>
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
                                           <tr><td colspan="3" class="head"> PROMO CODE  </td></tr>
                                           <tr><td><input placeholder="0" type="text" value="0" class="shorter_box" tabindex="34" name="promo_code" id="promo_code" onChange="getdata()" onFocus="if (this.value == '0') {this.value = '';}" onBlur="if (this.value == '') {this.value = '0';}" title="discount promo code">
                                           </td><td>enter the code</td></tr>
                                           
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
         		 <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                   <tr>
                                   
								   <td stlye="clear:left;" class="border-radius">
                              <table class="nettable" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                  	<tr><td colspan="3" class="head"> Number of Periods:  </td></tr>
                                     <tr>
                                     	<td>
                                     		<input type="number" class="stub_input" id="num_periods" min="1" max='52' name="num_stubs" value="1" tabindex="35"/>
                                     	</td>
                                     	<td>
											<table width="10">  
                                            	<tbody>
                                                  <tr><td><input type="button" class="inc_btn_blue" value="MORE" id="period_add"></td></tr>
                                                  <tr><td><input type="button" class="inc_btn_blue" value="LESS" id="period_sub"></td></tr>
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
                      $caption = 'Email Preview Bankstate';
                      if(current_user_can("access_s2member_level2") == 1)
                      {
                        $caption = 'Email Me Bankstatement';
                      } 
                    ?>
                    <input type="text" id="emp_email1" placeholder="Email @ Address" name="emp_email" tabindex="37" value="" onFocus="if (this.value == 'Email @ Address') {this.value = '';}" class="bigger-wide"  />
                    <input type="submit" class="blue_button" name="bankstate" value="<?php echo $caption; ?>" placeholder="Click for email Preview bt" id="add_preview" onclick="pre_pdf()" />
                  </td>
                </tr>
              </tbody>
            </table>
         	</td>
         </tr>


       </tbody>
        </table>


</div>

<?php include 'inc/bankstatement_period.inc'; ?>

<!--BEGIN adding by hoang-->
</div>
</div>
</div>
</div>


<?php get_footer(); ?>