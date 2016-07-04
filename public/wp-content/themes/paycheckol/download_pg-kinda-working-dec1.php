<?php /*Template Name: DOWNLOAD*/?>
<?php /*Called by payapal. and by email link and by logged-in-menu  => Landing page after paid.
		  - Possibly a landing page after someoen logs in also
		  - Calls a query to get the data from the DB
		  - VERIFIES that it's a 1 in the PAID column*/ 
get_header();


if (!is_user_logged_in())  // if and get not set rerout to login page
	{echo ("not logged");
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
		
		// SENDS EMAIL NOTIFICATION
   		//wp_new_user_notification($user_id, $pass); 
		}
else{
	echo ("is logged in");
/**check level s2member*/
if(current_user_is("subscriber"))
	echo 'You ARE a Free Subscriber at Level #0.';
else if(current_user_is("s2member_level1"))
	echo 'You ARE a Member at Level #1.';
else if(current_user_can("access_s2member_level2"))
	echo 'You DO have access to content protected at Level #2.';
	# But, (important) they could actually be a Level #3 or #4 Member;
	# because Membership Levels provide incremental access.
echo '<p><strong>If you paid Level 1 (3 stub x 2) you can email download Premium stub only 3 times</strong></p>';
	}

// delete ajax info
if(isset($_POST['delete'])) {
	$result = mysql_query('DELETE FROM user_transaction WHERE id = '.(int)$_POST['delete']);
}
$user = wp_get_current_user();
//$roles= $user->roles;
//print_r($user);
if(current_user_is("s2member_level1")){
	//echo 'You ARE a Member at Level #1.';
	//check total number, and set if it not set
	$sql_select="SELECT * FROM users_paid WHERE info_email = '".$user->user_email."' OR user_id = '".$user->ID."'";
	$query = $wpdb->get_results( $sql_select );
						$wpdb->show_errors();
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



//$sql_select="SELECT * FROM user_transaction WHERE user_id = '".$user->id."'";		// Gets all RECORDS for current USER
$sql_select="SELECT * FROM user_transaction WHERE info_email = '".$user->user_email."' OR user_id = '".$user->ID."'";
//$sql_select="SELECT * FROM user_transaction WHERE user_id = '".$user->ID."' ";		// Gets all RECORDS for current USER

	$my_preview_stubs = $wpdb->get_results( $sql_select );
						$wpdb->show_errors(); 
	$my_stub_details = $my_preview_stubs->options;
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

  <div id="paypal_main">
		<?php 
		if (!is_user_logged_in()){
			// echo ("not logged");
			 ?>
		<span style="font-size:22px"> $ 0.00</span><br /> 	
			<form method='post' action='http://www.paycheckstubonline.com/free-user/' target='_blank' name='paypal_mains_form1' id='paypal_mains_form1'>
			<input type="image" src ="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/images/free.gif" />
			</form>
          Free account<br />
          <span style="font-size:8px">     Manager your check stub </span> 
        <br />
		<?php } 
/**check level s2member
if(current_user_is("subscriber"))
	echo 'You ARE a Free Subscriber at Level #0.';
else if(current_user_is("s2member_level1"))
	echo 'You ARE a Member at Level #1.';
else 
	*/
if(!current_user_can("access_s2member_level2")){
	//echo 'You DO have access to content protected at Level #2.';
	# But, (important) they could actually be a Level #3 or #4 Member;
	# because Membership Levels provide incremental access.

		?>
  		 <span style="font-size:22px"> $ 14.90</span><br /> 	
			<form method='post' action='http://www.paycheckstubonline.com/paid-user-for-a-fixed-amount/' target='_blank' name='paypal_mains_form2' id='paypal_mains_form2'>
			<input type="image" src ="//content.authorize.net/images/buy-now-blue.gif" />
			</form>
          3 for Price of 2<br />
          <span style="font-size:8px">     Less than $ 5.30 Each </span> 
        <br />
        
          <span style="font-size:22px"> $ 29.90</span><br />   
          <form method='post' action='http://www.paycheckstubonline.com/unilimited-user-for-a-short-time/' target='_blank' name='paypal_mains_form3' id='paypal_mains_form3'>
                    
                      <input type="image" src ="//content.authorize.net/images/buy-now-gold.gif" />
			</form>
          UNLIMITED<br />
<?php }?>
          
  </div>
  
		<div id="dl-table">
				<div align="center" style="    vertical-align: middle;    text-align: center;    padding-bottom: 20px;">
                         <button class="btn_make_green" id="record" value="">MAKE ANOTHER ONE WITH MY INFO</button> 
                </div>   
                 <table width="100%" align="center" border="1" cellpadding="10" cellspacing="0">
                  <tbody>
				 
                  <tr>
                  		<td class="dl_title">STYLE</td>
                  		<td class="dl_title">DATE</td>
                        <td class="dl_title">STATUS</td>
                      	<td class="dl_title">DOWNLOAD PAYSTUBS</td>
                      	<td class="dl_title">DOWNLOAD BANKSTATEMENT</td>
                      	<td class="dl_title">EMAIL IT</td>
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
			/*
			$stub_detail = str_replace('":"','=',$my_stub_details);
			$stub_detail = str_replace('","','&',$stub_detail);
			$stub_detail = str_replace('"','&',$stub_detail);
			$stub_detail = str_replace('{','',$stub_detail);
			$stub_detail = str_replace('}','',$stub_detail);
			*/
			$stub_detail = $info_data->options;
			
			/*$stub_detail = json_decode(base64_decode($info_data->options), true);
			
			parse_str($stub_detail );
			*/
			//echo $stub_detail ;
			//if ($i==2){
			//parse_str($my_stub_details);
			//echo "my stub details".$my_stub_details;
			//}
			
?>			
                  <tr id= <?php echo($i)?>>
                  
                    <td align="center">  
                         <?php echo ($stub_id); echo(' '.$info_data->id); ?>  
                    </td>
                    <td align="center">  
                         <?php echo ($stub_id); echo(' '.$info_data->date); ?>  
                    </td>
                    
                  	<td align="center">
                         <?php
							if(!current_user_can("access_s2member_level2")){
								if ($info_data->payed <= 0){
									echo ("Not download or Ready to buy");}
								else if ($info_data->payed >= 1){
									echo ("Purchased, thank you");}
							}
							else{
								echo ("Purchased, thank you");
								}
							
						 ?>
                    </td>
                    <td align="center">
						<a href="http://www.paycheckstubonline.com/pdf_renderdl.php?&aaa=<?php echo $stub_detail; ?>&stubidss=<?php echo $info_data->id;?>&payed=<?php echo $info_data->payed;?>&caps=<?php echo $info_data->caps;?>" class="dlpt<?php echo($i)?>" target="_blank" >DOWNLOAD PAYSTUBS</a>
                    </td>
                    <td align="center">
						<a href="http://www.paycheckstubonline.com/pdf_renderdlbt.php?&aaa=<?php echo $stub_detail; ?>&stubidss=<?php echo $info_data->id;?>&payed=<?php echo $info_data->payed;?>&caps=<?php echo $info_data->caps;?>" class="dlbt<?php echo($i)?>"  target="_blank"  style="display:none!important;">DOWNLOAD BANKSTATEMENT</a>
						
						<a class="popup-with-form pdlbt<?php echo($i)?>" href="#test-form" onclick="changewtd('dlbt<?php echo($i)?>')">DOWNLOAD BANKSTATEMENT</a>
                    </td>
                    <td align="center">
                        <button id="record-email" name="emailfromaccount" value="<?php echo $stub_detail; ?>&stubidss=<?php echo $info_data->id;?>&payed=<?php echo $info_data->payed;?>&caps=<?php echo $info_data->caps;?>" class="email_btn_blue"  style="display:none!important;">E-MAIL</button> 
                        
                    </td>
                    <td align="center">        
                        <button class="del_btn_blue" id="record" value="<?php echo $info_data->id ?>">DELETE</button> 
                    </td>
                    <!--td align="center"><?php
                     	if ($info_data->paid == 2){
							echo ("Purchased, thank you");}
						else {
                        	echo ("<button class='edit_btn_blue' id='edit' name='edit' value='".$stub_detail."'>EDIT</button>");
						}?>
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
     <p></br></br><h1>Problems - <a href="mailto:contact@paycheckstubonline.com">contact@paycheckstubonline.com</a> -- </h1> </p>
   </div>              
  </div> 
</div>  

<script type="text/javascript">
		function changewtd(i){
		  $("#whattodo").val(i);
		};
		
		function dowhattodo(what2do){
		  console.log('dowhattodo(what2do)' + what2do);
		  w2d = what2do.replace(/\d+/g, '');
		  if ( w2d == 'dlbt'){ console.log('dlbt5');var t = '.'+ what2do; $(t).trigger( "click" );} 
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
<!-- link that opens popup -->
<a class="popup-with-form" href="#test-form">Open form</a>

<!-- form itself -->
<form action="javascript:grecaptcha.reset(widgetId2);" id="test-form" class="white-popup-block mfp-hide" style="    position: relative;    background: #FFF;    padding: 2em 3em;    width: auto;    margin:20px auto;    max-width: 400px;">   
	<p><h2>Please help verify you are a real Person<h2></p>
      <div id="html_element"></div>
      <br/>
	   <button type="submit" name="submitButton" value="getResponse">Submit</button>
</form>	

		<script>  
		
		
		$(document).ready(function() {   			//DELETE button
			  //$("input[name='buy']").removeAttr("checked");
	
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
							parent.animate({'backgroundColor':'grey'},300);
							
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
							parent.animate({'backgroundColor':'yellow'},300);
							
						},
						success: function() {
							parent.animate({'backgroundColor':'green'});
							alert ('Finished Emailing - Please go and Refresh Your Inbox');
						}
					})
			  });
			
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
			  
			  $('.edit_btn_blue').on('click', function(e){
				  e.preventDefault();
				  var parent = $(this).parent().parent();
				  var editVal = $(this).val();
					$.ajax({
						type: 'post',
						async: false,
						//url: 'http://www.paycheckstubonline.com/s2-test/?arr=' + buyVal,
						//data: buyVal,
						beforeSend: function() {
							//alert (editVal);
							parent.animate({'backgroundColor':'#yellow'},300);
						},
						success: function() {
							window.open('http://www.paycheckstubonline.com/pay-stub-generator?arr=' + editVal);
						}
					})
			  });
			  $('.btn_make_green').on('click', function(e){
				  e.preventDefault();
				  var parent = $(this).parent().parent();
				  var editVal = $(this).val();
					$.ajax({
						type: 'post',
						async: false,
						//url: 'http://www.paycheckstubonline.com/s2-test/?arr=' + buyVal,
						//data: buyVal,
						beforeSend: function() {
							//alert (editVal);
							parent.animate({'backgroundColor':'#yellow'},300);
						},
						success: function() {
							window.open('http://www.paycheckstubonline.com/pay-stub-generator?arr=' + editVal);
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