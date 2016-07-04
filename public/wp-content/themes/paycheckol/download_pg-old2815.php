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
	}

// delete ajax info
if(isset($_POST['delete'])) {
	$result = mysql_query('DELETE FROM user_transaction WHERE id = '.(int)$_POST['delete']);
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


$user = wp_get_current_user();
$sql_select="SELECT * FROM tbl_paystubs WHERE user_id = '".$user->id."'";		// Gets all RECORDS for current USER
	$my_preview_stubs = $wpdb->get_results( $sql_select );
						$wpdb->show_errors(); 
//	$my_stub_details = $my_preview_stubs->options;
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
  <p></p></br></br>
		<div id="dl-table">
        	
                 <table width="100%" align="center" border="1" cellpadding="10" cellspacing="0">
                  <tbody>
                  <tr>
                  		<td class="dl_title">STYLE</td>
                        <td class="dl_title">START DATE</td>
                  		<td class="dl_title">END DATE</td>
                        <td class="dl_title">NET PRD</td>
                        <td class="dl_title">NET YTD</td>
                        <td class="dl_title">STATUS</td>
                      	<td class="dl_title">EMAIL IT</td>
                      	<td class="dl_title">DELETE</td>
                        <td class="dl_title">OPTION</td>
                        <td class="dl_title">BUY</td>
                  </tr>
                  <tr>
                  		<td align="center" colspan="10">
                         <button class="btn_make_green" id="record" value="<?php echo $info_data->id ?>">MAKE ANOTHER ONE WITH MY INFO</button> 
                        	
                        </td>    
                  </tr>
                  
<?php
	if ($wpdb->num_rows > 0)
	$i=0;
		foreach($my_preview_stubs as $info_data){	
			$i++;
			$my_stub_details = $info_data->options;	
			parse_str($my_stub_details);
			//echo "my stub details".$my_stub_details;
			
?>			
                  <tr id= <?php echo($i)?>>
                  
                    <td align="center">  
                         <?php echo ($stub_id); echo(' '.$info_data->id); ?>  
                    </td>
                    <td align="center">
                    	 <?php echo ($prd_start_date); ?>
                    </td>
                    <td align="center">
                    	 <?php echo ($emp_edate); ?>
                    </td>
                    <td align="center">  
                         <?php echo ("$".$net_pay_prd); ?>  
                    </td>
                    <td align="center">  
                         <?php echo ("$".$net_pay_ytd); ?>  
                    </td>
                  	<td align="center">
                         <?php
							if ($info_data->paid == 1){
								echo ("ERROR - Delete me");}
							else if ($info_data->paid == NULL){
								echo ("Ready to buy");}
							else if ($info_data->paid == 2){
								echo ("Purchased, thank you");}
						 ?>
                    </td>
                    <td align="center">
                        <button id="record-email" value="<?php echo $info_data->options ?>" class="email_btn_blue">E-MAIL</button> 
                    </td>
                    <td align="center">        
                        <button class="del_btn_blue" id="record" value="<?php echo $info_data->id ?>">DELETE</button> 
                    </td>
                    <td align="center"><?php
                     	if ($info_data->paid == 2){
							echo ("Purchased, thank you");}
						else {
                        	echo ("<button class='edit_btn_blue' id='edit' name='edit' value='".$info_data->options."'>EDIT</button>");
						}?>
                    </td>
                   <td>
					 	
					 <?php
                     	if ($info_data->paid == 2){
							echo ("Purchased, thank you");
						}elseif($info_data->paid == 0) {
                         	echo ("<input type='checkbox' value='".$info_data->id."' id='buy' name='buy' class='buy_chk_box') >");
						}elseif($info_data->paid == 1) {
                         	echo ("<input type='checkbox' value='".$info_data->id."' id='buy' name='buy' checked='checked' class='buy_chk_box') >");
						}
						?>
					 </td>
                  </tr>         
<?php }	?>
			</tbody>
         </table>
     </div>
    
     <div><input type="button" name="tot_chek" id="tot_chek" class="tot_chek" value='0' /></div>
     
<?php
	//unset($info_data);
	$temp = $info_data->options;
	$temp_email = 5;
?>	
     <p></br></br><h1>Problems - <a href="mailto:contact@paycheckstubonline.com">contact@paycheckstubonline.com</a> -- </h1> </p>
   </div>              
  </div> 
</div>  

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
	
			
			  $('.email_btn_blue').on('click', function(e){
				  e.preventDefault();
				  var parent = $(this).parent().parent();
				  var child = $(this);
				  var dlVal = $(this).val();	
					console.log(dlVal)	;
				  // Apparantley .val knows it's value, doesn't need to hve value=id in button			
				  //var dlVal = 'start_date2=12/30/2014';
					$.ajax({
						type: 'post',
						url: 'http://www.paycheckstubonline.com/pdf_renderemail.php?'+dlVal,
						data: dlVal,
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