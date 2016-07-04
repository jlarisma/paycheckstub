<?php /*Template Name: Welcome To Our Members Area*/?>
<?php /*Called by payapal. and by email link and by logged-in-menu  => Landing page after paid.
		  - Possibly a landing page after someoen logs in also
		  - Calls a query to get the data from the DB
		  - VERIFIES that it's a 1 in the PAID column*/ 
get_header();
?>

<?php get_template_part('includes/breadcrumbs'); ?>
<?php get_template_part('includes/top_info'); ?>
<?php
$user = wp_get_current_user();
if(current_user_is("s2member_level1")){
	//echo 'You ARE a Member at Level #1.';
	//check total number
	$sql_select="SELECT * FROM users_paid WHERE info_email = '".$user->user_email."' OR user_id = '".$user->ID."'";
//$sql_select="SELECT * FROM user_transaction WHERE user_id = '".$user->ID."' ";		// Gets all RECORDS for current USER
	$query = $wpdb->get_results( $sql_select );
						$wpdb->show_errors();
	if ($wpdb->num_rows <= 0){
		$sql_select="INSERT INTO users_paid(user_id, info_email, totalpdf)  VALUES ('".$user->ID."','".$user->user_email."', 3)";
//$sql_select="SELECT * FROM user_transaction WHERE user_id = '".$user->ID."' ";		// Gets all RECORDS for current USER
	$query = $wpdb->get_results( $sql_select );
						$wpdb->show_errors();

	}
}
 
?>
<div id="content" class="clearfix">

	<div id="left-area">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry post clearfix">
		<div id="main_form">
<div id="paypal_main" style="
    background: none repeat scroll 0 0 #FFFFFF;      color: #000000;      font-size: 17px;      font-weight: bold;      padding: 10px 10px 5px 0;      position: fixed;      right: 0px;      text-align: right;      top: 100px;      width: 160px;      z-index: 100;      border-top-left-radius: 15px;
">
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
  
  <?php the_content(); ?>
  </div>
			
			

	<?php endwhile; endif; ?>
	</div> 	<!-- end #left-area -->

</div> <!-- end #content -->

<?php get_footer(); ?>