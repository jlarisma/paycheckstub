<?php

add_filter( 'wp_nav_menu_items', 'wti_loginout_menu_link', 10, 2 );

function wti_loginout_menu_link( $items, $args ) {
    if ($args->theme_location == 'top_menu') {
        if (is_user_logged_in()) {
            $items .= '<li class="right"><a href="'. wp_logout_url() .'">Log Out</a></li>';
        } else {
            $items .= '<li class="right"><a href="'. wp_login_url(get_permalink()) .'">Log In</a></li>';
        }
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);
function add_login_logout_link($items, $args) {

    ob_start();
    wp_loginout('index.php');
    $loginoutlink = ob_get_contents();
    ob_end_clean();

    $items .= '<li>'. $loginoutlink .'</li>';

    return $items;
}






function test_modify_user_table( $column ) {
    $column['_bypass'] = 'ByPassFUNC';
    //alert("qwert");
    return $column;
} 
add_filter( 'manage_users_columns', 'test_modify_user_table' );




function test_modify_user_table_row( $val, $column_name, $user_id ) {
    $user = get_userdata( $user_id ); 
    switch ($column_name) {
        case '_bypass' :
            $treturn = '<a href="http://www.paycheckstubonline.com/bypass/?username='.$user->user_login.'">Bypass</a>';
            //return "test";
            break;
        default:
    }
    return $treturn;
}
add_filter( 'manage_users_custom_column', 'test_modify_user_table_row', 9, 3 );





     //echo "You are viewing the WordPress Administration Panels";		 
	add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {
	 global $current_user;
	  if( !empty($current_user->roles) ){
		foreach ($current_user->roles as $key => $value) {
		  if( $value == 'administrator' ){	   
			update_usermeta( $user_id, 'stubscount', $_POST['stubscount'] );
		   }
		}
  }
}


function my_show_extra_profile_fields( $user ) {
?>
	<h3>Stub Credits </h3>
	<table class="form-table">
		<tr>
			<th><label for="stubscount">Available Stub Credit</label></th>
			<td>
				<input type="text" name="stubscount" id="stubscount" value="<?php echo esc_attr( get_the_author_meta( 'stubscount', $user->ID ) ); ?>" class="regular-text" /><br />
				<!--<span class="description">Please enter number stubs.</span>  -->
				<script>
				jQuery('#stubscount').keyup(function () { 
					this.value = this.value.replace(/[^0-9]/g,'');
				});
				</script>
			</td>
		</tr>
	</table>
<?php}

?>       