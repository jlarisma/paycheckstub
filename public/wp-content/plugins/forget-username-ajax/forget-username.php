<?php
/*
Plugin Name: Forget Username - ajax
Plugin URI: http://wordpress.arckimial.com
Version: 1.1
Description: This plugin is developed to retrive forgetted username. To display forget username form , add <strong>[forget-username-form]</strong> in page or widget or copy and paste <strong>&lt;?php echo do_shortcode('[forget-username-form]');?&gt;</strong> in your code file. For more go to <strong>Settings &gt; Forget Username Plugin Settings </strong>
Author: aRCkimial
Author URI: http://arckimial.com 
*/

add_action( 'wp_enqueue_scripts', 'add_my_asset' );
add_filter('widget_text', 'do_shortcode');
add_shortcode('forget-username-form', 'forgetusername_form_shortcode');
add_action('admin_menu', 'fu_menu_options');
add_option('fu_mail_subject','Your Username with '.get_option('blogname'));
add_option('fu_mail_header','Welcome to '.get_option('blogname').', you can access your account with following username');
add_option('fu_mail_footer','To access your account go to '.site_url());
add_option('fu_submit_val','Get Username');
add_option('fu_mail_body_lbl','Your Username');
add_option('fu_mail_success','Mail is sent to your email Id');
add_option('fu_mail_error','Mail sending fail');
add_option('fu_mail_email_not_exist','Entered email Id is not registered with us');
add_action("wp_ajax_my_username", "my_username");
add_action("wp_ajax_nopriv_my_username", "my_username");

function add_my_asset() {
	wp_register_style( 'fu-style', plugins_url('css/style.css', __FILE__) );
	wp_enqueue_style( 'fu-style' );
	wp_register_script('fu-ajax', plugins_url('js/ajax.js', __FILE__),array(),'',true);
	wp_enqueue_script('fu-ajax');
}

function forgetusername_form_shortcode() {
	?>
	<form name="lostusername" id="lostusername" action="<?php echo admin_url('admin-ajax.php?action=my_username');?>" method="post">
	<p>
	<label for="fu-email" ><?php _e('E-mail:') ?><br />
	<input type="text" name="fu_email" id="fu_email" class="input" size="20" /></label>
	</p>
	<input type="hidden" name="fu_mail_subject" value="<?php echo get_option('fu_mail_subject');?>" />
	<input type="hidden" name="fu_mail_header" value="<?php echo get_option('fu_mail_header');?>" />
	<input type="hidden" name="fu_mail_footer" value="<?php echo get_option('fu_mail_footer');?>" />
	<input type="hidden" name="fu_mail_body_lbl" value="<?php echo get_option('fu_mail_body_lbl');?>" />
    <input type="hidden" name="fu_mail_success" value="<?php echo get_option('fu_mail_success');?>" />
    <input type="hidden" name="fu_mail_error" value="<?php echo get_option('fu_mail_error');?>" />
    <input type="hidden" name="fu_mail_email_not_exist" value="<?php echo get_option('fu_mail_email_not_exist');?>" />
	<p class="submit"><input type="submit" name="fu-submit" id="fu-submit" class="button button-primary button-large" value="<?php esc_attr_e(get_option('fu_submit_val')); ?>" /></p>
	</form>
<?php }

function fu_menu_options(){
	$plugin_page=add_options_page('Forget Username', 'Forget Username', 'manage_options', 'fu-menu-options', 'fu_menu');
	add_action( 'admin_footer-'.$plugin_page,'fu_admin_footer' );
	
	if(isset($_POST['fu_update_options'])){
		update_option('fu_mail_subject',$_POST['fu_mail_subject']);
		update_option('fu_mail_header',$_POST['fu_mail_header']);
		update_option('fu_mail_footer',$_POST['fu_mail_footer']);
		update_option('fu_submit_val',$_POST['fu_submit_val']);
		update_option('fu_mail_body_lbl',$_POST['fu_mail_body_lbl']);
		update_option('fu_mail_success',$_POST['fu_mail_success']);
		update_option('fu_mail_error',$_POST['fu_mail_error']);
		update_option('fu_mail_email_not_exist',$_POST['fu_mail_email_not_exist']);
	}
}

function fu_menu(){

	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	?>

	<div class="wrap" style="width:65%">
	 <div id="icon-options-general" class="icon32"></div>
      <h2>Forget Username Plugin Settings</h2>
		<form method="post" action="options.php">
            <?php wp_nonce_field('update-options');?>
			<div id="poststuff" class="metabox-holder has-right-sidebar" >
				<div class="postbox" style="width: 100%">
				<h3>Form Settings</h3>
				<table width="100%" border="0" cellspacing="8" cellpadding="0" class="form-table">		  
				  <tr>
					<td width="25%" valign="top">Button Text</td>
					<td width="75%">
						<input type="text" name="fu_submit_val" value="<?php echo get_option('fu_submit_val');?>" />
					</td>
				  </tr>
                  <tr>
                  	<td width="25%" valign="top">Success Message</td>
					<td width="75%">
						<input type="text" name="fu_mail_success" size="53" value="<?php echo get_option('fu_mail_success');?>" />
					</td>
                  </tr>
                  <tr>
                  	<td width="25%" valign="top">Error Message</td>
					<td width="75%">
						<input type="text" name="fu_mail_error" size="53" value="<?php echo get_option('fu_mail_error');?>" />
					</td>
                  </tr>
                  <tr>
                  	<td width="25%" valign="top">Message If email not registered</td>
					<td width="75%">
						<input type="text" name="fu_mail_email_not_exist" size="53" value="<?php echo get_option('fu_mail_email_not_exist');?>" />
					</td>
                  </tr>
				 </table>
				</div>
			</div>

			<div id="poststuff" class="metabox-holder has-right-sidebar" >
				<div class="postbox" style="width: 100%">
				<h3>Mail Settings</h3>
				<table width="100%" border="0" cellspacing="8" cellpadding="0" class="form-table">		  
				  <tr>
					<td width="25%" valign="top">Mail Subject</td>
					<td width="75%">
						<input type="text"  name="fu_mail_subject" value="<?php echo get_option('fu_mail_subject');?>" size="53"/>
					</td>
				  </tr>
				  <tr>
					<td width="25%" valign="top">Mail Header</td>
					<td width="75%">
						<textarea name="fu_mail_header" rows="8" cols="50"><?php echo get_option('fu_mail_header');?></textarea>
					</td>
				  </tr>
				  <tr>
					<td width="25%" valign="top">Mail Body label</td>
					<td width="75%">
						<input type="text"  name="fu_mail_body_lbl" value="<?php echo get_option('fu_mail_body_lbl');?>"/><br  />
						<label>Will Display - <span><?php echo get_option('fu_mail_body_lbl');?></span> : {username}</label>
					</td>
				  </tr>
				  <tr>
					<td width="25%" valign="top">Mail Footer</td>
					<td width="75%">
						<textarea name="fu_mail_footer" rows="8" cols="50"><?php echo get_option('fu_mail_footer');?></textarea>
					</td>
				  </tr>
                 
			  </table>
		  	</div>
		  </div>
		  	<input type="submit" class="button-primary" value="<?php _e('Update Option')?>" name="fu_update_options" />
			<input type="hidden" name="action" value="update" />
        </form>
       </div>    
	<?php
}
function my_username(){
	global $wpdb,$wp;
	if(!isset($_POST))
		return;

	if($_POST['fu_email']!=''){

		if(is_email($_POST['fu_email'])){

			$r=$wpdb->get_row($wpdb->prepare("select `user_login`,`user_email`,`ID` from `{$wpdb->prefix}users` where `user_email`='%s'",$_POST['fu_email']));
			
			if(!empty($r) && $r->user_login!=''){

				$subject=$_POST['fu_mail_subject']!=''?$_POST['fu_mail_subject']:'Your Username with '.get_option('blogname');

				$message_h=$_POST['fu_mail_header']!=''?$_POST['fu_mail_header']:'Welcome to '.get_option('blogname').', you can access your account with following username';

				$message_b_lbl=$_POST['fu_mail_body_lbl']!=''?$_POST['fu_mail_body_lbl']:'Your Username';

				$message_f=$_POST['fu_mail_footer']!=''?$_POST['fu_mail_footer']:'To access your account go to '.site_url();

				$message="<p>$message_h</p><p>$message_b_lbl : {$r->user_login}</p><p>$message_f</p>";


				function set_html_content_type(){return 'text/html';}

				add_filter( 'wp_mail_content_type','set_html_content_type' );

				if(@wp_mail($r->user_email,$subject,$message))
					echo '<p class="success">'.get_option('fu_mail_success').'</p>';

				else
					echo '<p class="error">'.get_option('fu_mail_success').'</p>';

				remove_filter( 'wp_mail_content_type','set_html_content_type' );

			}else{
				echo '<p class="warning">'.get_option('fu_mail_email_not_exist').'</p>';
			}
			
		}else{
			echo '<p class="error">Please Enter valid E-mail address</p>';
		}
	}else{
		echo '<p class="error">Please Enter E-mail address</p>';
	}
	die();
}
function fu_admin_footer(){
	echo '<style type="text/css">#wpfooter { display: none; }</style>';
	echo '<p class="alignright" id="footer-left" style="margin-right:5%"><span id="footer-thankyou">Creation of <a href="http://arckimial.com/" target="_blank">aRCkimial [we make IT perfect]</a>.</span></p>';
}
?>