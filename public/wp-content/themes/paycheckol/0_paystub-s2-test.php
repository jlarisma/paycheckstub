<?php /*Template Name: s2-SAF-Paystub*/ 
error_reporting(E_ALL);
error_reporting(0);

get_header();
	if (isset($_REQUEST['input_yearly_gross'])){
		$input_yearly_gross = $_REQUEST['input_yearly_gross'];
		}
		else { $input_yearly_gross = 31200;
		}
	$lastName = $_REQUEST['emp_l_name'];
echo $firstName;
echo $lastName;

$temp_user = wp_get_current_user();
if (is_user_logged_in())
	{echo "user ".$result." logged in from 0_pay = ".$temp_user->ID ;}
?>

    <link rel="stylesheet" type="text/css" href="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/css/form.css">
    <style>
        iframe {
            width:98%;
            height:1px;
            overflow:hidden;
        }
        #tabs>div.ui-tabs-panel{
            background-image: none;
            width:98%;
        }
    </style>

    <script>
        // auto height
        function calcHeight(ifr){                                              //find the height of the internal page
            var the_height= ifr.contentWindow.document.body.scrollHeight;
            $(ifr).css('height',the_height+"px");							   //change the height of the iframe
            return the_height;
        }
    </script>
    
<?php get_template_part('includes/breadcrumbs'); ?>
<?php get_template_part('includes/top_info'); ?>

<?php
	  $baseDir = str_replace('/wp-content/themes', '', get_theme_root()) . "/"; // wordpress home dir;
	    require_once($baseDir.'paystub/_pages.inc');							// loads function for finding links
	    require_once($baseDir.'paystub/util.php');								// convert numbers to words
	  $paystubPath = $baseDir. 'paystub/';	  
	  $pdf_pagesInclude = paystub_get_pages($paystubPath);
	  $baseUrl = getServerHome();
	  $pdf_pagesUrl = paystub_get_pages($baseUrl);
	  $prevUrl = $baseUrl. "paystub/ajax_preview_stub-s2-test.php";      // controls the RED button. Preview.
?>

<div id="content" class="clearfix fullwidth">
 <div id="left-area">

    <?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="entry post clearfix">
    <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/jquery.dateFormat-1.0.js" type="text/javascript"></script>
    <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/underscore-min.js" type="text/javascript"></script>
    <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/date.js" type="text/javascript"></script>
    <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/pay-functions-new.js" type="text/javascript"></script>
    <!-- Include Styles -->
    <!--  <div id="tabbed-nav" data-role="z-tabs" data-theme="red">   -->
    <script>
        $(function () {
            // tab settings
            $("#tabs").tabs({
                select: function (event, ui) {
                    //beforeActivate: function (event, ui) {
//                    if ( $(ui.tab).data('tab') == "info" ) {
//                        on_stub_change();
//                        return;
//                    }
                    if (!validate()) {
                        alert("somethings missing on INFO page");
                        return false;
                    } else { //validates okay
                        // feed data to preview page
                        $ifr = $($(ui.tab).attr('href')).find('iframe')[0];

                        // set the form parameter for stub identity
//                        $("#main_form #stub_id").val( $(ui.tab).data('tab'));

                        $param = $('#form-main').serialize();
                        $param += "&prd_num=0";
                        $.post("<?php echo $prevUrl?>",			// get's the url from ajax_preview_stub,  = $prevUrl = $baseUrl. "paystub/ajax_preview_stub-s2-test.php";
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

  <div id="tabs">
    <ul>
        <li><a href="#main_form" data-tab="info">Your INFO</a></li>
        <li><a href="#help" data-tab="help">HELP</a></li>
        <li><a href="#videos" data-tab="videos">VIDEOS</a></li>

<!--        <li><a href="#corporate-test" data-tab="corp">Corp Paystub</a></li>
        <li><a href="#basic_paystub" data-tab="basic">Basic Paystub</a></li>
        <li><a href="#neat_paystub" data-tab="neat">Neat Paystub</a></li>
        <li><a href="#Tstub" data-tab="tstub">T-Stub</a></li>
        <li><a href="#Modern" data-tab="modern">Modern</a></li>
        <li><a href="#w2" data-tab="w2">W-2 IRS</a></li>
        <li><a href="#1099" data-tab="1099">1099</a></li>
-->
    </ul>

    <div id="main_form">
        <?php include "/home/nginx/domains/paycheckstubonline.com/public/wp-content/themes/paycheckol/inc/main_form-s2-test.inc"?>    
    </div>
    <!-- #main_form-->

    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div id="help">
        <h4>HELP and FAQ's</h4>
        <div id="FAQs">
        	This is all the FAQ's
        </div>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>


    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!--    <div id="corporate-test">
        <h4>CORPORATE PAYSTUB template</h4>
        <div id="preview_side">
        	<input type="button" class="blue_button" value="Click for email Preview" onclick="pre_pdf()">
        </div>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!--    <div id="basic_paystub">
        <h4>BASIC PAYSTUB template</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!--    <div id="neat_paystub">
        <h4>NEAT and simple PAYSTUB template</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!--    <div id="Tstub">
        <h4>T-STUB Latest Most updated PAYSTUB template</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!--    <div id="Modern">
        <h4>MODERN Paystub template - Most Realistic PAYSTUB TEMPLATE available</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!--    <div id="w2">
        <h4>Fully Functional IRS W-2 Form Generator</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- end w2-->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!--    <div id="1099">
        <h4>1099 - Fully Functional IRS 1099 Form Generator</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
   </div>

    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

  </div><!-- block -->
  
  
  <div id="paypal_main">
      <span style="font-size:22px"> $ 7.95</span><br />  
        <?php
			$LiveLoginId = "";
			$LiveTransactionKey = "";
			$TestLoginId = "62Be4NuS";
			$TestTransactionKey = "2qWLV55XKJ95tt8N";
		 	$UseTestAccount = true;
			$LiveGatewayUrl = "https://secure.authorize.net/gateway/transact.dll";
			$TestGatewayUrl = "https://test.authorize.net/gateway/transact.dll";
			if ($UseTestAccount) {
				$loginid = $TestLoginId;
				$x_tran_key = $TestTransactionKey;
				$gateway_url = $TestGatewayUrl;
			} else {
				$loginid = $LiveLoginId;
				$x_tran_key = $TestTransactionKey;
				$gateway_url = $LiveGatewayUrl;
			}
			
			srand(time());
    		$sequence = rand(1, 1000);
			require_once 'anet_php_sdk/AuthorizeNet.php'; // Include the SDK you downloaded in Step 2
			$amount = (7.95);
			$timestamp = time();
			$fingerprint = hash_hmac("md5", $loginid."^".$sequence."^".$timestamp."^".$amount."^", $x_tran_key);
		  
         		echo "<form method='post' action='$TestGatewayUrl' target='_blank' name='paypal_mains_form' id='paypal_mains_form'>" ;	
				echo "<input type='hidden' name='x_login' value='$loginid' />";
				echo "<input type='hidden' name='x_fp_hash' value='$fingerprint' />";
				echo "<input type='hidden' name='x_amount' value='$amount' />";
				echo "<input type='hidden' name='x_fp_timestamp' value='$timestamp' />";
				echo "<input type='hidden' name='x_fp_sequence' value='$sequence' />";
		?>	
                      <input type='hidden' name="x_version" value="3.1">
                      <input type='hidden' name="x_show_form" value="payment_form">
                      <input type='hidden' name="x_test_request" value="false" />
                      <input type='hidden' name="x_method" value="cc">
                      <input type='hidden' name="x_subscription_id" value="1"> 
                      <input type='hidden' name="gs_custom" id="paypal-v-custom">
                      <input type='hidden' name="form_email" id='javascript: document.getElementById('emp_email').value;'>
                      <input type="image" src ="//content.authorize.net/images/buy-now-blue.gif" />
			</form>
            
         One Pay Stub<br />
        <br /><br /><br /><br />
        
  		 <span style="font-size:22px"> $ 14.90</span><br /> 	
         <?php 
		 	srand(time());
    		$sequence2 = rand(1, 1000);
			$amount2 = (14.95);
			$timestamp2 = time();
			$fingerprint2 = hash_hmac("md5", $loginid."^".$sequence2."^".$timestamp2."^".$amount2."^", $x_tran_key);
		  
         		echo "<form method='post' action='$TestGatewayUrl' target='_blank' name='paypal_mains_form2' id='paypal_mains_form2'>" ;	
				echo "<input type='hidden' name='x_login' value='$loginid' />";
				echo "<input type='hidden' name='x_fp_hash' value='$fingerprint2' />";
				echo "<input type='hidden' name='x_amount' value='$amount2' />";
				echo "<input type='hidden' name='x_fp_timestamp' value='$timestamp2' />";
				echo "<input type='hidden' name='x_fp_sequence' value='$sequence2' />";
		?>	
                      <input type='hidden' name="x_version" value="3.1">
                      <input type='hidden' name="x_show_form" value="payment_form">
                      <input type='hidden' name="x_test_request" value="false" />
                      <input type='hidden' name="x_method" value="cc">
                      <input type='hidden' name="x_subscription_id" value="3"> 
                      <input type='hidden' name="gs_custom" id="paypal-v-custom2">
                      <input type="image" src ="//content.authorize.net/images/buy-now-gold.gif" />
			</form>
          3 for Price of 2<br />
          <span style="font-size:8px">     Less than $ 5.30 Each </span> 
        <br /><br /><br /><br />
        
          <span style="font-size:22px"> $ 29.90</span><br />   
          <?php 
		 	srand(time());
    		$sequence3 = rand(1, 1000);
			$amount3 = (14.95);
			$timestamp3 = time();
			$fingerprint3 = hash_hmac("md5", $loginid."^".$sequence3."^".$timestamp3."^".$amount3."^", $x_tran_key);
		  
         		echo "<form method='post' action='$TestGatewayUrl' target='_blank' name='paypal_mains_form2' id='paypal_mains_form3'>" ;	
				echo "<input type='hidden' name='x_login' value='$loginid' />";
				echo "<input type='hidden' name='x_fp_hash' value='$fingerprint3' />";
				echo "<input type='hidden' name='x_amount' value='$amount3' />";
				echo "<input type='hidden' name='x_fp_timestamp' value='$timestamp3' />";
				echo "<input type='hidden' name='x_fp_sequence' value='$sequence3' />";
		?>	
                      <input type='hidden' name="x_version" value="3.1">
                      <input type='hidden' name="x_show_form" value="payment_form">
                      <input type='hidden' name="x_test_request" value="false" />
                      <input type='hidden' name="x_method" value="cc">
                      <input type='hidden' name="x_subscription_id" value="5"> 
                      <input type='hidden' name="gs_custom" id="paypal-v-custom3">
                      <input type="image" src ="//content.authorize.net/images/buy-now-gold.gif" />
			</form>
          UNLIMITED<br />
          <span style="font-size:8px">     Less than $ 1.00 Each </span>
  </div>
 
          <script type="text/javascript">
            var randomnumber1 = 0;
            $("#paypal_mains_form").on("submit",function() {
               if (validate() == true){
			    set_custom_var1();   						// function to get rand num
                $param = $('#form-main').serialize();  		// gets data from INFO tab
                $db_prepared = false;						
                $.ajax({
                    type: 'POST',
                    async: false,
                    dataType:"json",
                    url: "/paystub/ajax_prep_db.php",
                    data: $param,							// sends all the INFO data to ajax_prep_db
                    success: function(data, status, xhr){
                        $trxId = data.trxId;
                        if ( $trxId > 0)					//this comes from ajax_prep_db.php
                        {
                            $("#paypal-v-custom").val($trxId);  //gs update 01/15/14
							alert('testing paypal' + $trxId);
                            $db_prepared = true;
                        }
                    },   // end of 'success'
                    error: function(xhr, status, err) {
                        alert('transaction not allowed');
                        return false;
                    }    // end of errer
                });  // end of $.ajax
                return $db_prepared;  // true or false
				}else{return false};
            });

            function previewPDF(){
                $("#form-main").submit();
            }
         </script>
         
         
         <!--  DUPLICATE OF ABOVE FOR 2 for 3 option  -->
         <script type="text/javascript">
            var randomnumber1 = 0;
            $("#paypal_mains_form2").on("submit",function() {
			   if (validate() == true){
                set_custom_var1();   						// function to get rand num
                $param = $('#form-main').serialize();  		// gets data from INFO tab
                $db_prepared = false;						
                $.ajax({
                    type: 'POST',
                    async: false,
                    dataType:"json",
                    url: "/paystub/ajax_prep_db.php",
                    data: $param,							// sends all the INFO data to ajax_prep_db
                    success: function(data, status, xhr){
                        $trxId = data.trxId;
                        if ( $trxId > 0)					//this comes from ajax_prep_db.php
                        {
                            $("#paypal-v-custom2").val($trxId);  //gs update 01/15/14
							alert('testing paypal' + $trxId);
                            $db_prepared = true;
                        }
                    },   // end of 'success'
                    error: function(xhr, status, err) {
                        alert('transaction not allowed');
                        return false;
                    }    // end of errer
                });  // end of $.ajax
                return $db_prepared;  // true or false
			   }else{return false};
            });

            function previewPDF(){
                $("#form-main").submit();
            }
         </script>
         
         
         <!--  DUPLICATE OF ABOVE UNLIMITED option  -->
         <script type="text/javascript">
            var randomnumber1 = 0;
            $("#paypal_mains_form3").on("submit",function() {
				if (validate() == true){
					//alert('you should not see thigs');
				  set_custom_var1();   						// function to get rand num
				  $param = $('#form-main').serialize();  		// gets data from INFO tab
				  $db_prepared = false;						
				  $.ajax({
					  type: 'POST',
					  async: false,
					  dataType:"json",
					  url: "/paystub/ajax_prep_db.php",
					  data: $param,							// sends all the INFO data to ajax_prep_db
					  success: function(data, status, xhr){
						  $trxId = data.trxId;
						  if ( $trxId > 0)					//this comes from ajax_prep_db.php
						  {
							  $("#paypal-v-custom3").val($trxId);  //gs update 01/15/14
							  //alert('testing paypal' + $trxId);
							  $db_prepared = true;
						  }
					  },   // end of 'success'
					  error: function(xhr, status, err) {
						  alert('transaction not allowed');
						  return false;
					  }    // end of errer
				  });  // end of $.ajax
                return $db_prepared;  // true or false
				}else{return false};
            });

            function previewPDF(){
                $("#form-main").submit();
            }
         </script>
         
    </div>
    


    <script>
        var startweek = 0;
        var endweek = 0;
        var startmonth = 0;
        var endmonth = 0;

        $(document).ready(function () {

            $("#tabs").tabs();

            //$("#emp_hiredate").datepicker({showWeek: true,
            $("#start_date").datepicker({showWeek: true,
                maxDate: "+1D",
                //minDate: new Date(2013, 1 - 1, 01),
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 1,
				defaultDate: +1,
                onSelect: function (dateText, inst) {
                    startdate = $(this).datepicker('getDate');
                    startweek = ($.datepicker.iso8601Week(startdate));
                    startyear = $("#start_date").datepicker('getDate').getFullYear();
                    getdata();

                    //alert($.datepicker.iso8601Week(date));
                    //alert("Difference in weeks = ".endweek - startweek);
                }});
            $("#end_date").datepicker({clickInput: true,
                //maxDate: "+30D",
                minDate: new Date(2000, 1 - 1, 01),
                changeMonth: true,
                changeYear: true,
                
                onSelect: function (dateText, inst) {
                    enddate = $(this).datepicker('getDate');
                    on_dateref_change();
                    endweek = ($.datepicker.iso8601Week(enddate));
                    getdata();
                    //alert("end date selected on start");
                    //alert($.datepicker.iso8601Week(date));
                    //alert("Difference in weeks = ".endweek - startweek);
                }});

            $('#pay_date').datepicker({clickInput: true,
                    onSelect: function (dateText, inst) {
                        endDate = $("#end_date").datepicker('getDate');
                        payDate = $("#pay_date").datepicker('getDate');
                        payAfter =  -endDate.getDayOfYear() + payDate.getDayOfYear();
                        $("#issue_date_diff").val(payAfter);
                    }
                }
            );

            try{
                startdate = $('#start_date').datepicker('getDate');
                startweek = ($.datepicker.iso8601Week(startdate));
                startyear = $("#start_date").datepicker('getDate').getFullYear();

                enddate = $('#end_date').datepicker('getDate');
                endweek = ($.datepicker.iso8601Week(enddate));

                calcTaxes();
            }catch(e){}


        });


        $(function () {
            $(document).tooltip();

            $('#start_date').tooltip({
                position: {
                    my: 'left bottom',
                    at: 'right+10 center'
                }
            });

            $('#end_date').tooltip({
                position: {
                    my: 'left bottom',
                    at: 'right+10 center'
                }
            });

            $('#pay_date').tooltip({
                position: {
                    my: 'left bottom',
                    at: 'right+10 center'
                }
            });

            $('#commission_prd').tooltip({
                position: {
                    my: 'left bottom',
                    at: 'right+10 center'
                }
            });

            $('#commission_ytd').tooltip({
                position: {
                    my: 'left bottom',
                    at: 'right+10 center'
                }
            });
        });


        //======= utilities
        function Cur_format(amount) {
            var i = parseFloat(amount);
            if (isNaN(i)) {
                i = 0.00;
            }
            var minus = '';
            if (i < 0) {
                minus = '-';
            }
            i = Math.abs(i);
            i = parseInt((i + .005) * 100);
            i = i / 100;
            s = new String(i);
            if (s.indexOf('.') < 0) {
                s += '.00';
            }
            if (s.indexOf('.') == (s.length - 2)) {
                s += '0';
            }
            s = minus + s;
            return s;
        }


        function pre_pdf(){
			//alert("checking validate");
			if (validate() == true){
				//alert ("good validate");
				previewPDF();
			}
		}


        function validate() {
			//alert ("run validate");
            if (document.getElementById('emp_state').value == null || document.getElementById('emp_state').value == "") {
                alert("What State does the Employee live in.\nWe need this for State Tax calculations");
                return false;
                //break;
            }
            if (document.getElementById('emp_email').value == 'Email @ Address' || document.getElementById('emp_email').value == "") {
                  alert("    I need your email  \nTo know where to send your paystbub");
				document.getElementById('emp_email').focus();
				return false;
				
				if (!email.value || !/^[\w\.%\+\-]+@[a-z0-9.-]+\.(com|gov|in|jo|org|net|edu|ca)$/i.test(email.value))
            	     {alert("Please enter a valid email that ends in com, gov, org, net, edu, ca");
				   document.getElementById('emp_email').focus();
				   return false;}
            }
      /*      if (document.getElementById('start_date').value == null || document.getElementById('start_date').value == "Hire Date") {
                document.getElementById('start_date').value = "01/01/2013";
                alert("   You didn't enter a HIRE DATE, so, I am setting your hire date as Jan 1 of this year, to get accurate YTD numbers");
                //return false;

            }
            if (document.getElementById('end_date').value == null || document.getElementById('end_date').value == "End of Pay Period") {
                //var temptodaydate = Date();
                //document.getElementById('end_date').value = jQuery.format.date(temptodaydate, "MM/dd/yyyy");
                alert("    You must enter a PAY PERIOD END DATE, \n\nThis is VERY IMPORTANT\n\nNone of these calculations will work without this date");
            }
*/
            return true;
        };

		function validate_state() {
			//alert ("run validate");
            if (document.getElementById('emp_state').value == null || document.getElementById('emp_state').value == "") {
                alert("What State does the Employee live in.\nWe need this for State Tax calculations");
                return false;
                //break;
            }
   				return true;
        };


        function ValidateEmail() {
            var email = document.getElementById('emp_email');
            alert("checking email");
            //validate
            if (!email.value || !/^[\w\.%\+\-]+@[a-z0-9.-]+\.(com|gov|in|jo|org|net|edu|ca)$/i.test(email.value))
            	{alert("Please enter a valid email that ends in com, gov, org, net, edu, ca");
				return false;}
			//alert ("good");
			return true;	
        }
    </script>

    <?php the_content(); ?>

    <!-- end .entry post clearfix -->
    <?php // if (get_option('chameleon_show_pagescomments') == 'on') comments_template('', true); ?>
    <?php endwhile;
    endif; ?>
 </div><!-- end #left-area -->
</div> <!-- end #content .clearfix fullwidth-->
<?php get_footer(); ?>