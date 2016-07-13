<?php /*Template Name: DOWNLOAD*/?>
<?php /*Called by payapal. and by email link and by logged-in-menu  => Landing page after paid.
		  - Possibly a landing page after someoen logs in also
		  - Calls a query to get the data from the DB
		  - VERIFIES that it's a 1 in the PAID column*/ 
get_header();
global $wpdb;
if (!is_user_logged_in())  // if and get not set rerout to login page
	{echo ("not logged please contact Admin of this website at CONTACT");
/*
	//if (isset($_GET['u']) && !empty($_GET['u']))
		$u = $_GET['u'];
		$l = $_GET['l'];
		$p = $_GET['p'];
		 echo("--".$u."--");
		 echo("--".$l."--");								//  using SIGNON  NOT CREATE user
		 echo("--".$p." -- ");
		$creds['user_login'] = $l;
		$creds['user_password'] = $p;
		$creds['remember'] = true;
		
		$user = wp_signon( $creds, false );					
			if ( is_wp_error($user) ): echo $user->get_error_message(); endif;
     	 //wp_set_current_user($user->ID);

		wp_set_current_user($u,$l);
		wp_set_auth_cookie($u, true, false);
		do_action( 'wp_login', $l);
*/
		}
else{
	$user = wp_get_current_user();
}

// delete ajax info when USER clicks DELETE button on DL page
if(isset($_POST['delete'])) {
	$result = mysql_query('DELETE FROM user_transaction WHERE id = '.(int)$_POST['delete']);
}

//This checks to see if user is LEVEL one and gives them 6 PDF CREDITS when then intially join
//  I think this can be eliminated if we setup CALLBACK emails from S2member
//$user = wp_get_current_user();
//$roles= $user->roles;
//print_r($user);
if(!current_user_can("access_s2member_level2")){
//if(current_user_is("s2member_level1")){						// this is 3 for 2 guys
	//echo 'You ARE a Member at Level #1.';
	//check total number, and set if it not set
	$sql_select="SELECT * FROM users_paid WHERE info_email = '".$user->user_email."' OR user_id = '".$user->ID."'";
	$query = $wpdb->get_results( $sql_select );
			 $wpdb->show_errors();
	//$my_number_of_stub_remaining = $query->totalpdf;

	if ($wpdb->num_rows <= 0){
		$sql_select="INSERT INTO users_paid(user_id, info_email, totalpdf)  VALUES ('".$user->ID."','".$user->user_email."', 3)";
		$query = $wpdb->get_results( $sql_select );
		$wpdb->show_errors();
	}
} 
?>




 <link rel="stylesheet" type="text/css" href="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/css/form.css">
<?php //get_template_part('includes/breadcrumbs'); ?>
<?php get_template_part('includes/top_info'); ?>
<div id="content" class="clearfix fullwidth">
<div id="left-area">
<div class="entry post clearfix">			

 
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();    // this is a wp process called "the looop"

//////////////////////////////////////
// GET DATA FOR THE TABLE ON DL PAGE
//////////////////////////////////////

$sql_select="SELECT * FROM user_transaction WHERE info_email = '".$user->user_email."' OR user_id = '".$user->ID."' ORDER BY id";
//echo $sql_select;
	$my_preview_stubs = $wpdb->get_results( $sql_select );
						$wpdb->show_errors(); 
	//$my_stub_details = $my_preview_stubs->options;


//var_dump($my_preview_stubs);  // Yields full array
//var_dump($my_stub_details);  // Yields "null"




//$my_stub_details =json_decode(base64_decode($my_preview_stubs->options), true);
//	echo "my stub details".$my_stub_details->state_tax;
												
//$pdf_pages = paystub_get_pages('');
//$urlid = $_REQUEST['stub_id'];
//$pageStyle = $pdf_pages[$urlid][0];

/*
echo (" xxx inside the code user id -".$user->id."<p>");
echo ("pdf_pages = ".$pdf_pages."<p>");
echo ("urlid = ".$urlid."<p>");
echo ("pageStyle = ".$pageStyle."<p>");
echo ("test = ".$my_preview_stubs->options);
//echo $test2;
*/
?> 


<div id="main_form">



   <?php
		if(!current_user_can("access_s2member_level2")){                                // NOT UNLIMITED
			$sql_select_test="SELECT totalpdf FROM users_paid WHERE user_id = '".$user->ID."'";
			  $query_test = $wpdb->get_row( $sql_select_test);
				if($query_test <=0 ){
				  echo '</br>NO Remaining credit, Please Purchase';
				  echo '</br>';
   ?>
					<div id="paypal_main">
					  1 Paystub<br />
								<form method='post' action='http://www.paycheckstubonline.com/buy-one-paystub?<?php echo ('test=aaaaaaa'); ?>' target='_blank' name='paypal_mains_form4' id='paypal_mains_form4'>
								<input type="hidden" name="custom" value="www.paycheckstubonline.com|<?php echo ('Xxxxxxxxxxxx'); ?>" /><br />
								<input type="image" src ="//content.authorize.net/images/buy-now-blue.gif" />
								</form>
							  <span style="font-size:22px"> $ 7.95</span><br />
							  <span style="font-size:8px">     Quick and Easy </span>
							<br /><br /><br />


					  3 for Price of 2<br />
								<form method='post' action='http://www.paycheckstubonline.com/paid-user-for-a-fixed-amount?<?php echo ('test=bbbbbbbbb'); ?>'  target='_blank' name='paypal_mains_form2' id='paypal_mains_form2'>
								<input type="hidden" name="custom" value="www.paycheckstubonline.com|<?php echo ('xxxxxxxxxxx'); ?>" /><br />
								<input type="image" src ="//content.authorize.net/images/buy-now-blue.gif" />
								</form>
							  <span style="font-size:22px"> $ 14.95</span><br />
							  <span style="font-size:8px">     Less than $ 5.30 Each </span>
							<br /><br /><br />

					  UNLIMITED<br />
								<form method='post' action='http://www.paycheckstubonline.com/unilimited-user-for-a-short-time/' target='_blank' name='paypal_mains_form3' id='paypal_mains_form3'>
								<input type="hidden" name="custom" value="www.paycheckstubonline.com|<?php echo ('xxxxxxxxxxx'); ?>" /><br />
								<input type="image" src ="//content.authorize.net/images/buy-now-gold.gif" />
								</form>
							  <span style="font-size:22px"> $ 29.90</span>
					 </div>
   <?php
   		 }
				else {
				echo "<div id=\"qty_of_stub_legend\">";
					//echo ("</br>");
					echo ("".$query_test->totalpdf." </br> credits \n remaining. ");
				echo "</div>";
						}
				//else if(current_user_can("access_s2member_level2")){
				//	echo '</br>You are an UNLIMITED User';}


   }?>





<div id="dl-table2">
  <table width="100%" align="center" border="0" cellpadding="10" cellspacing="0">
    <tbody>
      <tr>
       <td>
 			 To make more (unlimited -only).
		  <ol>
			<li>  Select MY STUBS menu</li>
			<li>  Fill in your information on this <a href="<?php echo get_home_url() ?>/paycheck-stub-generator/" target="_blank">form</a></li>
			<li>  Select how many Pay Periods</li>
			<li>  On that page you will see two small BLUE BUTTONs</li>
		  </ol>
		  <ol>
			<li>You get Emailed or Downloaded</li>
			<li>That stub will be saved on this page for future</li>
		  </ol>
       </td>

       <td>
		   <?php
			  $sql_select_test="SELECT totalpdf FROM users_paid WHERE user_id = '".$user->ID."'";
			  $query_test = $wpdb->get_row( $sql_select_test);
				if(current_user_is("subscriber")){
				  echo '</br>You have NO Credits Available Please Purchase credits ';}
				else if(current_user_is("s2member_level1")){
					echo '</br>3 For Price of 2 - You have';
					echo ("</br>");
					echo ("      <h3>".$query_test->totalpdf."</h3> remaining. ");
					}
				else if(current_user_can("access_s2member_level2")){
					echo '</br>You are an UNLIMITED User';}
		    ?>
         </td>
       </tr>
     </tbody>
  </table>
</div>


		<div id="dl-table">
			<!--	<div align="center" style="    vertical-align: middle;    text-align: center;    padding-bottom: 20px;">
                         <button class="btn_make_green" id="record" value="">Another stub - Click EMAIL/DOWNLOAD bottom of YOUR INFO tab</button>
                </div>  -->
                 <table width="100%" align="center" border="1" cellpadding="10" cellspacing="0">
                  <tbody>
				 
                  <tr>
                  		<td class="dl_title">PAYSTUB<br />ID</td>
                  		<td class="dl_title">DATE</td>
                        <td class="dl_title">STATUS</td>
                      	<td class="dl_title">DOWNLOAD<br />PAYSTUB</td>
                   <!--   	<td class="dl_title">BANK</br>STATEMENT</td>  -->
                      	<td class="dl_title">SEND to EMAIL</td>
                      	<td class="dl_title">DELETE</td>
                        <!--td class="dl_title">OPTION</td-->
                  </tr>

			<?php
				if ($wpdb->num_rows > 0)
				$i=0;
				echo '<input  type="hidden"  id="whattodo" value=""/>';
					foreach($my_preview_stubs as $info_data){
						$i++;
						$my_stub_details = base64_decode($info_data->options);
						$stub_detail = $info_data->options;
			?>
                  <tr id= <?php echo($i)?>>
                    <td align="center">  
                         <?php echo(' '.$info_data->id); ?>
                    </td>
                    <td align="center">
                    	<!--change date format to something more readable-->
                         <?php echo(' '.$info_data->date); ?>
                    </td>
                    
                  	<td align="center">
                         <?php
							if(!current_user_can("access_s2member_level2")){
								if ($info_data->payed <= 0){				// gets from tbl_transaction set by ...
									echo nl2br("Preview only \n Click E-MAIL to redeem credit");}
								else if ($info_data->payed >= 1){
									echo ("PAID - THANK YOU");}
							}
							else{
								echo ("PAID - THANK YOU");
								}
							
						 ?>
                    </td>
                    -<td align="center">
						<a href="http://www.paycheckstubonline.com/pdf_renderdl.php?&aaa=<?php echo $stub_detail; ?>&stubidss=<?php echo $info_data->id;?>&payed=<?php echo $info_data->payed;?>&caps=<?php echo $info_data->caps;?>" class="dlpt<?php echo($i)?>" target="_blank"   style="display:none!important;" >DOWNLOAD PAYSTUBS</a>
						<input  type="hidden"  id="datadlpt<?php echo($i)?>" value="&aaa=<?php echo $stub_detail; ?>&stubidss=<?php echo $info_data->id;?>&payed=<?php echo $info_data->payed;?>&caps=<?php echo $info_data->caps;?>"/>
						<a class="pdlpt<?php echo($i)?>" href="#test-form" onclick="dowhattodo('dlpt<?php echo($i)?>')">To BROWSER WINDOW</a>
                    </td>
             <!--       <td align="center">
						<a href="http://www.paycheckstubonline.com/pdf_renderdlbt.php?&aaa=<?php  echo $stub_detail; ?>&stubidss=<?php echo $info_data->id;?>&payed=<?php echo $info_data->payed;?>&caps=<?php echo $info_data->caps;?>" class="dlbt<?php echo($i)?>"  target="_blank"  style="display:none!important;">DOWNLOAD BANKSTATEMENT</a>
						<input  type="hidden"  id="datadlbt<?php echo($i)?>" value="&aaa=<?php echo $stub_detail; ?>&stubidss=<?php echo $info_data->id;?>&payed=<?php echo $info_data->payed;?>&caps=<?php echo $info_data->caps;?>"/>
						<a class="pdlbt<?php echo($i)?>" href="#test-form" onclick="dowhattodo('dlbt<?php echo($i)?>')">coming Soon</a>
                
                    </td>
             -->
                    <td align="center">
                  <!--      <a href="http://www.paycheckstubonline.com/pdf_renderdlbt.php?&aaa=<?php echo $stub_detail; ?>&stubidss=<?php echo $info_data->id;?>&payed=<?php echo $info_data->payed;?>&caps=<?php echo $info_data->caps;?>" class="dlbt<?php echo($i)?>"  target="_blank"  style="display:none!important;">EMAIL</a>
					-->	<input  type="hidden"  id="datadlemail<?php echo($i)?>" value="&aaa=<?php echo $stub_detail; ?>&stubidss=<?php echo $info_data->id;?>&payed=<?php echo $info_data->payed;?>&caps=<?php echo $info_data->caps;?>"/>
					<a class="pdlemail<?php echo($i)?>" href="#test-form" onclick="dowhattodo('dlemail<?php echo($i)?>')" style="background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5) );background: -moz-linear-gradient( centertop, #79bbff 5%, #378de5 100% ); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5');background-color: #79bbff;-webkit-border-top-left-radius: 10px;-moz-border-radius-topleft: 10px;border-top-left-radius: 10px;-webkit-border-top-right-radius: 10px;-moz-border-radius-topright: 10px;border-top-right-radius: 10px;-webkit-border-bottom-right-radius: 10px;-moz-border-radius-bottomright: 10px;border-bottom-right-radius: 10px;-webkit-border-bottom-left-radius: 10px;-moz-border-radius-bottomleft: 10px;border-bottom-left-radius: 10px;text-indent: 0px;border: 1px solid #84bbf3;display: inline-block;color: #ffffff;font-family: Arial;font-size: 13px;font-weight: normal;font-style: normal;height: 25px;width: 80px;text-decoration: none;text-align: center;">E-MAIL</a>
		         		<!--took out "popup-with-form" on class    &   changed click from changewtd to dowhattodo	-->

                    </td>
                    <td align="center">        
                        <button class="del_btn_blue" id="record" value="<?php echo $info_data->id ?>">DELETE</button> 
                    </td>



                    <!--td align="center"><?php

					
					//	if ($info_data->paid == 2){																						// THERE IS NOT PAID ONLY PAYED
					//		echo ("Purchased, thank you");}
					//	else {
                      //  	echo ("<button class='edit_btn_blue' id='edit' name='edit' value='".$stub_detail."'>EDIT</button>");   // THIS DOESN'T WORK AT THIS TIME
					//	}?>
                    </td-->
               
					 	
					  <?php
					    /*
                     	if ($info_data->paid == 2){
							echo ("Purchased, thank you");
						}elseif($info_data->paid == 0) {
                         	echo ("<input type='checkbox' value='".$info_data->id."' id='buy' name='buy' class='buy_chk_box') >");
						}elseif($info_data->paid == 1) {
                         	echo ("<input type='checkbox' value='".$info_data->id."' id='buy' name='buy' checked='checked' class='buy_chk_box') >");
						}
						*/
					    ?>
                  </tr>         
            <?php }	?>
			</tbody>
         </table>
     </div>
    
    <div><input type="button" name="tot_chek" id="tot_chek" class="tot_chek" value='0' /></div>
     
<?php
	//unset($info_data);
	$temp = $stub_detail;
	$temp_email = 5;
?>	
     </br></br><h1>Problems - <a href="mailto:contact@paycheckstubonline.com">contact@paycheckstubonline.com</a> -- </h1>
   </div>              
  </div> 
</div>  

<script type="text/javascript">
		function changewtd(i){
		  $("#whattodo").val(i);
		};
		
		function dowhattodo(what2do){
			//what2do = $("#whattodo").val();
		  console.log('dowhattodo(what2do)' + what2do);
		  w2d = what2do.replace(/\d+/g, '');
		  if ( w2d == 'dlbt'){ 
		    console.log('dlbt5');
			var parent = $("." + what2do).parent().parent();
		    var dlVal =  $("#data" + what2do).val();
			downloadUrl ='http://www.paycheckstubonline.com/pdf_renderdlbt.php?&aaa='+dlVal;
			//alert ("Making your Stub - Click OK and wait 3-4 minutes for email");
			window.location = downloadUrl;
			parent.animate({'backgroundColor':'red'},100);
		  }

		  if ( w2d == 'dlpt'){ 
		    console.log('dlpt5');
			var parent = $("." + what2do).parent().parent();
		    var dlVal =  $("#data" + what2do).val();
			downloadUrl ='http://www.paycheckstubonline.com/pdf_renderdl.php?&aaa='+dlVal;
			//alert ("Making your Stub - Click OK and wait 2-3 minutes for email");
			window.location = downloadUrl;
			parent.animate({'backgroundColor':'yellow'},100);

		  }

		  if ( w2d == 'dlemail'){ 
		    console.log('dlemail5');
			var parent = $("." + what2do).parent().parent();
		    var dlVal =  $("#data" + what2do).val();
			downloadUrl ='http://www.paycheckstubonline.com/pdf_renderemail.php?'+dlVal;
			  //setTimeout("alert ('Making your Stub - Click OK and wait 1-2 minutes for email')",1000;    // when E--Mail is clicked
			  //$.notify("Hello World");

			  window.location = downloadUrl;
			parent.animate({'backgroundColor':'blue'},100);
		  }
					
		};
		var verifyCallback = function(response) {
			console.log(response);
			console.log('verifyed');
			//pre_pdf();
			$(".mfp-close").click();	
			var what2do = $("#whattodo").val();
			dowhattodo(what2do);
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
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=en"
														async defer>
	</script>


<script>
$(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

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


<!-- link that opens popup
<a class="popup-with-form" href="#test-form">Open form</a>  -->

<!-- form itself -->
<form action="javascript:grecaptcha.reset(widgetId2);" id="test-form" class="white-popup-block mfp-hide" style="    position: relative;    background: #FFF;    padding: 2em 3em;    width: auto;    margin:20px auto;    max-width: 400px;">
	<p><h2>Please help verify you are a real Persons<h2></p>
      <div id="html_element"></div>
      <br/>
	   <button type="submit" name="submitButton" value="getResponse">Submit</button>
</form>

		<script>


		$(document).ready(function() {   			//DELETE button
			  //$("input[name='buy']").removeAttr("checked");
	      /*
			  $('.buy_chk_box').click(function() {
				  var checked = $('.buy_chk_box:checked').length;
				  var input = $('#tot_chek');	// this is the box with the number of checked items in it
					  input.val("Click to Buy "+checked+" Stubs");
				  var chkID = $(this).val();
				  $.ajax({
					  	 type: "POST",
           				 url: "/paystub/ajax_prep_db-s2.php",
            			data: {chkID:chkID},
					  success: function(data) {
						  //alert(chkID);
						  // UPDATE DB with a checkbox, and then get payapal to approve all checked with USERID
						  // if checked, concantenate it
					  },
					  error: function() {
						 alert('it broke');
					  },
					  complete: function() {
						  //alert('it completed');
					  }
				   });
			  });


			  $('.dl_btn_blue').on('click', function(e){
				  e.preventDefault();
				  var parent = $(this).parent().parent();
				  var child = $(this);
				  var dlVal = $(this).val();
					//$param = $('#form-main').serialize();
					console.log(dlVal)	;
				  // Apparantley .val knows it's value, doesn't need to hve value=id in button
				  //var dlVal = 'start_date2=12/30/2014';
					$.ajax({
						type: 'post',
						url: 'http://www.paycheckstubonline.com/pdf_renderdl.php?&aaa='+dlVal,
						//url: 'http://www.paycheckstubonline.com/pdf_render.php?stubidss=<?php echo $info_data->id;?>&aaa='+dlVal,
						data: dlVal,
						dataType:"json",
						beforeSend: function() {
							alert ("In the process of render your Stub - Wait until line turns blue");
							parent.animate({'backgroundColor':'#fb6c6c'},300);

						},
						success: function() {
							parent.animate({'backgroundColor':'blue'});
							alert ('Finished ');
						}
					})
			  });

			  $('.email_btn_blue').on('click', function(e){
				  e.preventDefault();
				  var parent = $(this).parent().parent();
				  var child = $(this);
				  var dlVal = $(this).val();
					//$param = $('#form-main').serialize();
					console.log(dlVal)	;
				  // Apparantley .val knows it's value, doesn't need to hve value=id in button
				  //var dlVal = 'start_date2=12/30/2014';
					$.ajax({
						type: 'post',
						url: 'http://www.paycheckstubonline.com/pdf_renderemail.php?&aaa='+dlVal,
						//url: 'http://www.paycheckstubonline.com/pdf_render.php?stubidss=<?php echo $info_data->id;?>&aaa='+dlVal,
						data: dlVal,
						dataType:"json",
						beforeSend: function() {
							alert ("In the process of Emailing your Stub - Wait until line turns green");
							parent.animate({'backgroundColor':'yellow'},100);

						},
						success: function() {
							parent.animate({'backgroundColor':'green'});
							alert ('Finished Emailing - Please go and Refresh Your Inbox');
						}
					})
			  });
			*/
			  $('.del_btn_blue').on('click', function(e){
				  e.preventDefault();
				  var parent = $(this).parent("td").parent("tr");
				  var child = $(this);
				  var idVal = $(this).val();
					$.ajax({
						type: 'post',
						url: 'http://www.paycheckstubonline.com/download-my-stub/?delete=' +idVal,
						data: 'delete=' +idVal,

						beforeSend: function() {
							//alert (idVal);
							parent.animate({'backgroundColor':'#fb6c6c'},300);
						},
						success: function() {
							//alert ("success");
							parent.fadeOut("slow",function() {
							parent.remove();
							});
						}
					})
			  });



			});
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