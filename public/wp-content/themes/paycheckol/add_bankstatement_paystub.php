<?php 
/*Template Name: Add Bank statement SAF-Paystub*/ 
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
if ( current_user_can( 'administrator' ) ) {
  // your code goes here

//if (is_user_logged_in())
//	{echo $firstName." logged in id = ".$temp_user->ID ;}


//import tabl ka
//echo get_template_directory_uri();
//echo get_stylesheet_directory();
//global $wpdb;
                    //$myrows = $wpdb->get_results("SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";SET time_zone = "+00:00";/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;/*!40101 SET NAMES utf8 */;CREATE TABLE IF NOT EXISTS `ka_bankstatement` (`id` int(11) NOT NULL,  `name` varchar(255) NOT NULL,  `amount` int(11) DEFAULT NULL,  `code` varchar(30) NOT NULL,  `type` varchar(50) NOT NULL) ENGINE=InnoDB AUTO_INCREMENT=9822 DEFAULT CHARSET=latin1;INSERT INTO `ka_bankstatement` (`id`, `name`, `amount`, `code`, `type`) VALUES(1126, '601   Rogell DR ', 200, 'NV26W35T92U69C30N24', 'ATM Withdrawal'),(1178, ' EI Tiempo  Meat Market ', 130, 'SP42X28C50Z54U22F25', 'Card Purchase'),(1473, ' Diamond 2148 Shamrock  ', 81, 'WU18H80R39G17B87G61', 'Card Purchase'),(2136, ' The Tasting Room 4 ', 33, 'GM93R60P60D60Q28Q31', 'Card Purchase'),(2278, 'Kroger #312 ', 98, 'XI18C73R97I32I30B23', 'Card Purchase'),(2368, ' Premier Parking Enforc ', 115, 'BW54A49N58Q56F33H54', 'Card Purchase'),(2612, ' La­', 7, 'VN18T28G13D27F99H11', 'Card Purchase'),(2622, ' Barnaby''s Cafe - West ', 21, 'PB99V50F44T14Y18L14', 'Card Purchase'),(2650, ' Lake Interests Llc ', 18, 'CO46K19P17K42T61V88', 'Card Purchase'),(2957, ' LA Tapatia # 2 ', 36, 'PP43Q12S32N24O18S93', 'Card Purchase'),(3030, ' Ninfa''s  ', 18, 'QL76H94H90U64R50O21', 'Card Purchase'),(3330, ' Ihop 1478 ', 15, 'EP14Y28L39F26X61B37', 'Card Purchase'),(3452, ' Bush Int Arpt Ab   096  ', 7, 'UQ98O78M14G87Z10N62', 'Card Purchase'),(3955, ' Lexington Law 800341 800-3418441  UT ', 40, 'NL38J38B30R82Q84I48', 'Recurring Card Purchase'),(4086, ' Middlebelt & Wick Bp ', 15, 'QK17B32F40V89A83J26', 'Card Purchase'),(4173, ' Sign Lot #6257     096  ', 7, 'XK48E91N10Z89D78K12', 'Card Purchase'),(4555, 'Walmart #312 ', 17, 'RV34K21Y26R12D75Y93', 'Card Purchase'),(4749, ' Houston Passport ', 170, 'UZ57D49C98Q40V89M98', 'Card Purchase'),(5241, ' Bank of America TX5186 " ', 500, 'KE35K33V61Q52Z74M20', 'Card Purchase'),(5255, ' LA Fendee Mediterran ', 16, 'TM18P36T99Q14W80F84', 'Card Purchase'),(5331, ' Brasil - Dunlavy ', 27, 'EP85R90Y74A80W51E56', 'Card Purchase'),(6908, ' Wholefds Mts 10346 ', 32, 'FH64D72B67N16C10U86', 'Card Purchase'),(7083, ' Kroger #312 ', 15, 'OV67D18S41B33L12W56', 'Card Purchase'),(7382, ' Lake Interests Llc ', 10, 'KG47L52E25N64X58Y10', 'Card Purchase'),(7878, ' Consulate General of Ch ', 160, 'CG16U18V15L37O35R31', 'Card Purchase'),(7938, ' Metro Mart ', 31, 'AI44W58G70F45L77Z80', 'Card Purchase'),(8310, ' Bush Int Arpt Ab   096  ', 17, 'WZ47X95D10R32U85W16', 'Card Purchase'),(8643, ' Sign Lot #6257     096  ', 10, 'TE87G13H88I95R90L36', 'Card Purchase'),(8669, ' Kroger #312 ', 29, 'KE74P32M68J97Y49Z17', 'Card Purchase'),(9645, ' Marshalls #878 ', 67, 'YZ71R81S55O64G73H25', 'Card Purchase'),(9680, 'Dacapos Pastry Cafe ', 19, 'RG29T66T98X53Q98E96', 'Card Purchase'),(9688, ' Walgreens #3735 ', 38, 'ZW15O97Q22Y35G11T19', 'Card Purchase'),(9821, 'Chevron  Fuel Ctr #7312  ', 75, 'NQ11C24T72Z73M78I77', 'Card Purchase');ALTER TABLE `ka_bankstatement` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `code` (`code`);ALTER TABLE `ka_bankstatement`MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9822;/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;');
//end import tabl ka

?>
<?  ?>
    <link rel="stylesheet" type="text/css" href="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/css/form.css">
    <style>
        iframe {
            width:100%;
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
<?php get_template_part('includes/top_info'); ?>

<?php
	  $baseDir =str_replace('/wp-content/themes', '', get_theme_root()) . "/"; // wordpress home dir;
	    require_once($baseDir.'paystub/_pages.inc');
        
	    require_once($baseDir.'paystub/util.php');
	  $paystubPath = $baseDir. 'paystub/';	  
	  $pdf_pagesInclude = paystub_get_pages($paystubPath);
//	  $baseUrl = getServerHome();
//	  $pdf_pagesUrl = paystub_get_pages($baseUrl);
//	  $prevUrl = $baseUrl. "paystub/ajax_preview_stub.php";
//      
      $baseUrl = site_url();
	  $pdf_pagesUrl = paystub_get_pages($baseUrl);
	  $prevUrl = $baseUrl. "/paystub/ajax_preview_stub.php";
?>

<div id="content" class="clearfix fullwidth">
 <div id="left-area">

    <?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="entry post clearfix">
  <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/underscore-min.js" type="text/javascript"></script>
 
    <script src="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/js/pay-functions-new.js" type="text/javascript"></script>
    <!-- Include Styles -->
    <!--  <div id="tabbed-nav" data-role="z-tabs" data-theme="red">   -->
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
        <li><a href="#corporate-test" data-tab="corp">Corporate Paystub</a></li>
        <li><a href="#basic_paystub" data-tab="basic">Basic Paystub</a></li>
        <li><a href="#neat_paystub" data-tab="neat">Neat Paystub</a></li>
        <li><a href="#Tstub" data-tab="tstub">T-Stub</a></li>
        <li><a href="#Modern" data-tab="modern">Modern</a></li>
        <li><a href="#w2" data-tab="w2">W-2 IRS</a></li>
        <li><a href="#1099" data-tab="1099">1099</a></li>        
    </ul>

    <div id="main_form">
        <?php include "/home/nginx/domains/paycheckstubonline.com/public/wp-content/themes/paycheckol/inc/main_form1.inc"?>
        
    </div>

    <!-- #main_form-->

    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <div id="corporate-test">
        <h4>CORPORATE PAYSTUB template</h4>
        <div id="preview_side">
        	<input type="button" class="blue_button" value="Click for email Preview" onclick="pre_pdf()">
        </div>
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
  
  <div id="paypal_main">
      <span style="font-size:22px"> $ 4.50</span><br />  
        <?php
			$LiveLoginId = "9Haz6Ebqg2J";
			$LiveTransactionKey = "9uj7FpKD2Y2m5s5S";
			$TestLoginId = "62Be4NuS";
			$TestTransactionKey = "2qWLV55XKJ95tt8N";
		 	$UseTestAccount = false;
			$LiveGatewayUrl = "https://secure.authorize.net/gateway/transact.dll";
			$TestGatewayUrl = "https://test.authorize.net/gateway/transact.dll";
			if ($UseTestAccount) {
				$loginid = $TestLoginId;
				$x_tran_key = $TestTransactionKey;
				$gateway_url = $TestGatewayUrl;
			} else {
				$loginid = $LiveLoginId;
				$x_tran_key = $LiveTransactionKey;
				$gateway_url = $LiveGatewayUrl;
			}
			
			srand(time());
    		$sequence = rand(1, 1000);
			require_once 'anet_php_sdk/AuthorizeNet.php'; // Include the SDK you downloaded in Step 2
			$amount = (4.50);
			$timestamp = time();
			$fingerprint = hash_hmac("md5", $loginid."^".$sequence."^".$timestamp."^".$amount."^", $x_tran_key);
		  
         		echo "<form method='post' action='$gateway_url' target='_blank' name='paypal_mains_form' id='paypal_mains_form'>" ;	
				echo "<input type='hidden' name='x_login' value='$loginid' />";
				echo "<input type='hidden' name='x_fp_hash' value='$fingerprint' />";
				echo "<input type='hidden' name='x_amount' value='$amount' />";
                //<!--x_description.val-->
                //echo "<input type='hidden' name='x_description' value='By One Bank Statement' />";
                //<!--x_invoice_num.val-->
                //echo "<input type='hidden' name='x_invoice_num' value='$fingerprint' />";
				echo "<input type='hidden' name='x_fp_timestamp' value='$timestamp' />";
				echo "<input type='hidden' name='x_fp_sequence' value='$sequence' />";
		?>	
                      <input type='hidden' name="x_version" value="3.1">
                      <input type='hidden' name="x_show_form" value="payment_form">
                      <input type='hidden' name="x_test_request" value="false" />
                      <input type='hidden' name="x_method" value="cc">
                      <input type='hidden' name="x_subscription_id" value="1"> 
                      <input type='hidden' name="gs_custom" id="paypal-v-custom">
                      <input type="image" src ="//content.authorize.net/images/buy-now-blue.gif" />
			</form>
            
         By One Bank Statement<br />
        <br /><br /><br /><br />
        
  		
              <span style="font-size:22px"> $ 7.95</span><br />  
        <?php
			$LiveLoginId = "9Haz6Ebqg2J";
			$LiveTransactionKey = "9uj7FpKD2Y2m5s5S";
			$TestLoginId = "62Be4NuS";
			$TestTransactionKey = "2qWLV55XKJ95tt8N";
		 	$UseTestAccount = false;
			$LiveGatewayUrl = "https://secure.authorize.net/gateway/transact.dll";
			$TestGatewayUrl = "https://test.authorize.net/gateway/transact.dll";
			if ($UseTestAccount) {
				$loginid = $TestLoginId;
				$x_tran_key = $TestTransactionKey;
				$gateway_url = $TestGatewayUrl;
			} else {
				$loginid = $LiveLoginId;
				$x_tran_key = $LiveTransactionKey;
				$gateway_url = $LiveGatewayUrl;
			}
			
			srand(time());
    		$sequence = rand(1, 1000);
			require_once 'anet_php_sdk/AuthorizeNet.php'; // Include the SDK you downloaded in Step 2
			$amount = (7.95);
			$timestamp = time();
			$fingerprint = hash_hmac("md5", $loginid."^".$sequence."^".$timestamp."^".$amount."^", $x_tran_key);
		  
         		echo "<form method='post' action='$gateway_url' target='_blank' name='paypal_mains_form' id='paypal_mains_form'>" ;	
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
		  
         		echo "<form method='post' action='$gateway_url' target='_blank' name='paypal_mains_form2' id='paypal_mains_form2'>" ;	
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
			$amount3 = (29.95);
			$timestamp3 = time();
			$fingerprint3 = hash_hmac("md5", $loginid."^".$sequence3."^".$timestamp3."^".$amount3."^", $x_tran_key);
		  
         		echo "<form method='post' action='$gateway_url' target='_blank' name='paypal_mains_form2' id='paypal_mains_form3'>" ;	
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
               if (validate_email() == true){
			   
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
         
         
         <!--  DUPLICATE OF ABOVE FOR 2 for 3 option  -->
         <script type="text/javascript">
            var randomnumber1 = 0;
            $("#paypal_mains_form2").on("submit",function() {
			   if (validate_email() == true){
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
         
         
         <!--  DUPLICATE OF ABOVE UNLIMITED option  -->
         <script type="text/javascript">
            var randomnumber1 = 0;
            $("#paypal_mains_form3").on("submit",function() {
				if (validate_email() == true){
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


          <script type="text/javascript">
            var randomnumber1 = 0;
            $("#paypal_mains_form").on("submit",function() {
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
							//alert('testing paypal');
                            $db_prepared = true;
                        }
                    },
                    error: function(xhr, status, err) {
                        alert('transaction not allowed');
                        return false;
                    }
                });
                return $db_prepared;
            });

            function previewPDF(){
                $("#form-main").submit();
            }
         </script>
    </div>
    <!-- #tabbed-nav-->


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
			if (validate_email() == true){
				//alert ("good validate");
                $param = $('#form-main').serialize();            
                //console.log($param);
				previewPDF();
                
			}
		}


        function validate_email() {
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
            }*/
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
<? } //end if isadmin ?>
<?php get_footer(); ?>