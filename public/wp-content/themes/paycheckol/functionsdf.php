<?php
function test_modify_user_table( $column ) {
    $column['_bypass'] = 'ByPass'; 
    return $column;
} 
add_filter( 'manage_users_columns', 'test_modify_user_table' ); 
function test_modify_user_table_row( $val, $column_name, $user_id ) {
    $user = get_userdata( $user_id ); 
    switch ($column_name) {
        case '_bypass' :
            return '<a href="http://www.paycheckstubonline.com/bypass/?username='.$user->user_login.'">BypassFUNCDF</a>';
            break; 
        default:
    } 
    return $return;
} 
add_filter( 'manage_users_custom_column', 'test_modify_user_table_row', 10, 3 );
?>
<?php
if ( !is_admin() ) {
     echo "You are viewing the theme";
} else {
     echo "You are viewing the WordPress Administration Panels";
	add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
}


function my_save_extra_profile_fields( $user_id ) {

	if ( !is_admin() )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'stubscount' to the field ID. */
	if ( is_admin() ){update_usermeta( $user_id, 'stubscount', $_POST['stubscount'] );}
}
function my_show_extra_profile_fields( $user ) { 
if ( is_admin() ){?>

	<h3>User prepaid stub </h3>

	<table class="form-table">

		<tr>
			<th><label for="stubscount">Stub prepair</label></th>

			<td>
				<input type="text" name="stubscount" id="stubscount" value="<?php echo esc_attr( get_user_meta($user->ID,'stubscount' ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter number stubs.....</span>
				<script>
				jQuery('#stubscount').keyup(function () { 
					this.value = this.value.replace(/[^0-9\.]/g,'');
				});
				</script>
			</td>
		</tr>

	</table>
<?php }
}

?>