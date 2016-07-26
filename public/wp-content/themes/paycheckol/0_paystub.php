<?php /*Template Name: SAF-Paystub*/
error_reporting(E_ALL);
error_reporting(0);

get_header(); 

$lastName = $_REQUEST['emp_l_name'];
//echo $firstName;
//echo $lastName;

$temp_user = wp_get_current_user();
?>

    <link rel="stylesheet" type="text/css" href="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/css/form.css">
    <style>
        iframe {
            width:100%;
            /*height:1px;*/
            overflow:hidden;
        }
        #tabs>div.ui-tabs-panel{
            background-image: none;
            width:98%;
        }
    </style>

    <script>
        // auto height
        function calcHeight(ifr)
        {
            //find the height of the internal page
            //alert(1);

            var the_height= ifr.contentWindow.document.body.scrollHeight;
            //change the height of the iframe
            $(ifr).css('height',the_height+"px");
            return the_height;
        }
    </script>
<?php //get_template_part('includes/breadcrumbs'); ?>

<?php get_template_part('includes/top_info');?>

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

    <?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="entry post clearfix">

    <script>
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

  <div id="tabs">
    <ul>
        <li><a href="#main_form" data-tab="info">Your INFO</a></li>
        <li><a href="#basic_paystub" data-tab="basic">Basic Paystub</a></li>
        <li><a href="#neat_paystub" data-tab="neat">Neat Paystub</a></li>
        <li><a href="#Tstub" data-tab="tstub">T-Stub</a></li>
        <li><a href="#Modern" data-tab="modern">Modern</a></li>
        <li><a href="#corporate-test" data-tab="corp">Corporate Paystub</a></li>
        <li><a href="#w2" data-tab="w2">W-2 IRS</a></li>
        <li><a href="#1099" data-tab="1099">1099s</a></li>
    </ul>

    <div id="main_form">
        <?php include "inc/main_form1.inc"?>
    </div>
    <!-- #main_form-->

    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div id="corporate-test">
        <h4>CORPORATE PAYSTUB template</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div id="basic_paystub">
        <h4>BASIC PAYSTUB template</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div id="neat_paystub">
        <h4>NEAT and simple PAYSTUB template</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div id="Tstub">
        <h4>T-STUB Latest Most updated PAYSTUB template</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div id="Modern">
        <h4>MODERN Paystub template - Most Realistic PAYSTUB TEMPLATE available</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div id="w2">
        <h4>Fully Functional IRS W-2 Form Generator</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
    </div>
    <!-- end w2-->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div id="1099">
        <h4>1099 - Coming soon</h4>
        <iframe src="about:blank" scrolling="no" onload="top.calcHeight(this)"></iframe>
   </div>
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

  </div>
  
  




        <?php
          if (!is_user_logged_in() ){
        ?>
         <div id="paypal_main">
                    1 Paystub<br />
                    <form method='post' action='<?php echo $baseUrl; ?>buy-one-paystub?' target='_blank' name='paypal_mains_form4' id='paypal_mains_form4'>
                    <input type="hidden" name="custom" value="www.paycheckstubonline.com|<?php echo ('Xxxxxxxxxxxx'); ?>" /><br />
                    <input type="hidden" name="user_email" value="" /><br />
                    <input type="image" src ="//content.authorize.net/images/buy-now-blue.gif" />
                    </form>
                  <span style="font-size:22px"> $ 7.95</span><br />
                  <span style="font-size:8px">     Quick and Easy </span>
                     <br /><br /><br />

                    3 for Price of 2<br />
                    <form method='post' action='<?php echo $baseUrl; ?>paid-user-for-a-fixed-amount?'  target='_blank' name='paypal_mains_form2' id='paypal_mains_form2'>
                    <input type="hidden" name="custom" value="www.paycheckstubonline.com|<?php echo ('xxxxxxxxxxx'); ?>" /><br />
                    <input type="hidden" name="user_email" value="" /><br />
                    <input type="image" src ="//content.authorize.net/images/buy-now-blue.gif" />
                    </form>
                  <span style="font-size:22px"> $ 14.95</span><br />
                  <span style="font-size:8px">     Less than $ 5.30 Each </span>
                      <br /><br /><br />

                    UNLIMITED<br />
                    <form method='post' action='<?php echo $baseUrl; ?>unilimited-user-for-a-short-time/' target='_blank' name='paypal_mains_form3' id='paypal_mains_form3'>
                   <input type="hidden" name="custom" value="www.paycheckstubonline.com|<?php echo ('xxxxxxxxxxx'); ?>" /><br />
                   <input type="hidden" name="user_email" value="" /><br />
                    <input type="image" src ="//content.authorize.net/images/buy-now-gold.gif" />
                    </form>
                    <span style="font-size:22px"> $ 29.90</span>
          </div>

        <?php }


            if(is_user_logged_in() AND (!current_user_can("access_s2member_level2"))){
                   $sql_get_credit_remaining="SELECT totalpdf FROM users_paid WHERE user_id = '".$temp_user->ID."'";
			         $query_credits = $wpdb->get_row( $sql_get_credit_remaining);
                        $remaining_credits = $query_credits->totalpdf;
                    ?>
                      <div id="paypal_main">
                    <?php

                    echo ("You have </br></br><div id=\"cr\" style='text-align: center; font-size: 35px'>".$remaining_credits."</div></br> <div style='font-size: 10px'>Credits Remaining </div> </br></br>");

                    if ($remaining_credits <= 0){
                        echo ("Please re-purchase</br></br></br>");
                    ?>


                            1 Paystub<br />
                            <form method='post' action='<?php echo $baseUrl; ?>buy-one-paystub?' target='_blank' name='paypal_mains_form4' id='paypal_mains_form4'>
                            <input type="hidden" name="custom" value="www.paycheckstubonline.com| " /><br />
                            <input type="image" src ="//content.authorize.net/images/buy-now-blue.gif" />
                            <input type="hidden" name="user_email" value="" /><br />
                            </form>
                              <span style="font-size:22px"> $ 7.95</span><br />
                              <span style="font-size:8px">     Quick and Easy </span>
                                 <br /><br /><br />

                            3 for Price of 2<br />
                            <form method='post' action='<?php echo $baseUrl; ?>paid-user-for-a-fixed-amount?'  target='_blank' name='paypal_mains_form2' id='paypal_mains_form2'>
                            <input type="hidden" name="custom" value="www.paycheckstubonline.com|" /><br />
                            <input type="image" src ="//content.authorize.net/images/buy-now-blue.gif" />
                            <input type="hidden" name="user_email" value="" /><br />
                            </form>
                              <span style="font-size:22px"> $ 14.96</span><br />
                              <span style="font-size:8px">     Less than $ 5.30 Each </span>
                                  <br /><br /><br />

                            UNLIMITED<br />
                            <form method='post' action='<?php echo $baseUrl; ?>unilimited-user-for-a-short-time/' target='_blank' name='paypal_mains_form3' id='paypal_mains_form3'>
                            <input type="hidden" name="custom" value="www.paycheckstubonline.com|" /><br />
                            <input type="image" src ="//content.authorize.net/images/buy-now-gold.gif" />
                            <input type="hidden" name="user_email" value="" /><br />
                            </form>
                               <span style="font-size:22px"> $ 29.90</span>



                    <?php }

            }

                    ?>
                    </div>
                    <?php

                 if(current_user_can("access_s2member_level2")){
                            echo ('<div id="qty_of_stub_legend">');
                            echo '</br>UNLIMITED</br>USER</br></br>';
                            echo ('</div>');
                    }
            /*
        */
        ?>
          

       </div>

</div>





<script type="text/javascript">
            var randomnumber1 = 0;
       /*     $("#paypal_mains_form1").on("submit",function() {
			   if (validate_email() == true){
                set_custom_var1();   						// function to get rand num
                $param = $('#form-main').serialize();  		// gets data from INFO tab
				console.log($param);
                $db_prepared = false;						
                $.ajax({
                    type: 'POST',
                    async: false,
                    dataType:"json",
                    url: "/paystub/ajax_prep_db.php",
                    data: $param,							// sends all the INFO data to ajax_prep_db
                    success: function(data, status, xhr){
                         console.log(data);
                    },   // end of 'success'
                    error: function(xhr, status, err) {
                        //alert('transaction not allowed');
                        return false;
                    }    // end of errer
                });  // end of $.ajax
                return true;  // true or false
			   }else{return false};
            });
        */

            $("#paypal_mains_form2").on("submit",function() {
			   if (validate_email() == true){
                  //if (document.getElementById("num_stubs").value == 1){    // I think this is set by the INFO selector
                    //document.getElementById("num_stubs").value = 3;        // this makes 3 of same - not good
                  //}
			      //else{alert ('above 1');
			      //  alert (document.getElementById("num_stubs").value);}
                set_custom_var1();   						// function to get rand num
                $param = $('#form-main').serialize();  		// gets data from INFO tab
				$(this).find('input[name="user_email"]').val($('#emp_email1').val());
                $db_prepared = false;						
                $.ajax({
                    type: 'POST',
                    async: true,
                    dataType:"json",
                    url: "/paystub/ajax_prep_db.php",
                    data: $param,							// sends all the INFO data to ajax_prep_db
                    success: function(data, status, xhr){
                         //console.log(data);
                    },   // end of 'success'
                    error: function(xhr, status, err) {
                        //alert('transaction not allowed');
                        return false;
                    }    // end of errer
                });  // end of $.ajax
                return true;  // true or false

			   }else{return false};
			   //alert ("it worked..");
            });

			$("#paypal_mains_form3").on("submit",function() {
			   if (validate_email() == true){
                set_custom_var1();   						// function to get rand num
                $param = $('#form-main').serialize();  		// gets data from INFO tab
				$(this).find('input[name="user_email"]').val($('#emp_email1').val());
                $db_prepared = false;						
                $.ajax({
                    type: 'POST',
                    async: true,
                    dataType:"json",
                    url: "/paystub/ajax_prep_db.php",
                    data: $param,							// sends all the INFO data to ajax_prep_db
                    success: function(data, status, xhr){
                        //console.log(data);
                    },   // end of 'success'
                    error: function(xhr, status, err) {
                        //alert('transaction not allowed');
                        return false;
                    }    // end of errer
                });  // end of $.ajax
                return true;  // true or false
			   }else{return false};
            });

            $("#paypal_mains_form4").on("submit",function() {
			   if (validate_email() == true){
                set_custom_var1();   						// Buy only 1 stub
                $param = $('#form-main').serialize();  		// Copy of
                $(this).find('input[name="user_email"]').val($('#emp_email1').val());
                $db_prepared = false;
                $.ajax({
                    type: 'POST',
                    async: true,
                    dataType:"json",
                    url: "/paystub/ajax_prep_db.php",
                    data: $param,							// sends all the INFO data to ajax_prep_db
                    success: function(data, status, xhr){
                         alert('transaction allowed');
                         //console.log(data);
                    },   // end of 'success'
                    error: function(xhr, status, err) {
                        //alert('transaction not allowed');
                        return false;
                        //console.log(err);
                    }    // end of errer
                });  // end of $.ajax
                return true;  // true or false
			   }else{return false};
            });

            function previewPDF(){
                alert ("Sending PREVIEW now.\n\nIf you like it, click MY STUBS menu item.\n\nOn that page, click E-MAIL button next to desired stub\nfor non-Watermark version");
                
                $("#form-main").unbind().submit();
            }




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
                }}).attr('readonly','readonly');    
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
                }}).attr('readonly','readonly');

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

            preview_pdf();
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
			if (validate_email() == true){
				
                previewPDF();
			} else {
                  $("#form-main").submit(function(e) {
                    e.preventDefault()
                  });
            }
		}


        function validate_email() {
			var email = document.getElementById('emp_email1');
            if (document.getElementById('emp_email1').value == 'Email @ Address' || document.getElementById('emp_email1').value == "") {
                  alert("    What E-mail address  \nWhere To send your paystub");
				document.getElementById('emp_email1').focus();
				return false;
			}
				
			if (!email.value || !/^[\w\.%\+\-]+@[a-z0-9.-]+\.(com|gov|in|jo|org|net|edu|ca)$/i.test(email.value))
            	     {alert("Please enter a valid email that ends in com, gov, org, net, edu, ca");
				   document.getElementById('emp_email1').focus();
				   return false;}
            return true;
        };


  /*      function ValidateEmail() {
            var email = document.getElementById('emp_email');
            alert("checking email");
            //validate
            if (!email.value || !/^[\w\.%\+\-]+@[a-z0-9.-]+\.(com|gov|in|jo|org|net|edu|ca)$/i.test(email.value))
            	{alert("Please enter a valid email that ends in com, gov, org, net, edu, ca");
				return false;}
			//alert ("good");
			return true;
			
        }
  */

		function validate_state() {
			//alert ("run validate");
            if (document.getElementById('emp_state').value == null || document.getElementById('emp_state').value == "") {
                alert("What State does the Employee live in.\nWe need this for State Tax calculations");
                return false;
                //break;
            }
   				return true;
        };
    </script>

    <?php the_content(); ?>

    <!-- end .entry post clearfix -->
    <?php // if (get_option('chameleon_show_pagescomments') == 'on') comments_template('', true); ?>
    <?php endwhile;
    endif; ?>
 </div><!-- end #left-area -->
</div> <!-- end #content .clearfix fullwidth-->
<?php get_footer(); ?>