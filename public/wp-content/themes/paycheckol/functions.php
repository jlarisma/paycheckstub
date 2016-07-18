<?php
   /* add_filter( 'wp_nav_menu_items', 'wti_loginout_menu_link', 10, 2 );
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
   */

function deleteUserTransactions($userId)
{
    global $wpdb;

    $wpdb->query('DELETE FROM user_transaction WHERE user_id = ' . $userId);
    $wpdb->query('DELETE FROM users_paid WHERE user_id = ' . $userId);
    //UPDATE  `paycheck_db`.`user_transaction` SET  `user_id` =  '64138' WHERE  `user_transaction`.`id` = ?;
    //DELETE FROM user_transaction WHERE user_id = ?
}

add_action( 'delete_user', 'deleteUserTransactions' );

function test_modify_user_table( $column ) {
    $column['_bypass'] = 'ByPassFUNC';
    //alert("qwert");
    return $column;
}
add_filter( 'manage_users_columns', 'test_modify_user_table' );



function test_modify_user_table_row( $val, $column_name, $user_id ) {
    $treturn = null;
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



add_filter('wp_nav_menu_items', 'add_login_logout_link', 10, 2);
function add_login_logout_link($items, $args) {

    ob_start();
    wp_loginout('index.php');
    $loginoutlink = ob_get_contents();
    ob_end_clean();

    $items .= '<li>'. $loginoutlink .'</li>';

    return $items;
}


add_action( 'show_user_profile', 'my_view_users_table' );
add_action( 'edit_user_profile', 'my_view_users_table' );
function my_view_users_table($user){
    global $wpdb;
    echo "<h3>Stub Credits </h3>";
    echo "<table class='form-table'>";
    echo "<tr><th><label for='tot_pdf'>Available stub credits</label></th>";
                $userid_temp = $user->ID;
                $sql_get_user_data = "SELECT * FROM users_paid WHERE user_id = '$userid_temp'";
                $results_gs = $wpdb->get_results($sql_get_user_data);
                $wpdb->show_errors();
                    $total_pdf = $results_gs[0]->totalpdf;
            //echo " Stub Credits";
            echo "<td><input type='text' name='tot_pdf' id='tot_pdf' value=".$total_pdf." ></td>";
    echo "</tr>";
    echo "</table>";
}


add_action( 'personal_options_update', 'my_save_users_table' );
add_action( 'edit_user_profile_update', 'my_save_users_table' );
function my_save_users_table($user_id){
    global $wpdb;
    global $current_user;

    $tst = $_POST['tot_pdf'];
       // echo $tst;

    //alert("dd");

    if( !empty($current_user->roles) ){
        foreach ($current_user->roles as $key => $value) {
            if( $value == 'administrator' ){

                $sql_update_user_data = "UPDATE users_paid SET totalpdf = ".$tst." WHERE user_id = ".$user_id;
                $wpdb->query($sql_update_user_data);


            //    update_usermeta( $user_id, 'stubscount', $_POST['stubscount'] );
            }
        }
    }
}



//   add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
//	add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );
function my_show_extra_profile_fields( $user ) {
    echo "<h3>Stub Credits </h3>";
    echo "<table class='form-table'>";
    echo "<tr><th><label for='stubscount'>Available Stub Credit</label></th>";
    echo "<td><input type='text' name='stubscount' id='stubscount' value='".get_the_author_meta( 'stubscount', $user->ID )."' class='regular-text' ></td><br />";
    //    esc_attr( get_the_author_meta( 'stubscount', $user->ID ) );

    echo "<span class='description'>Please enter number stubs.</span>";
    echo "<script>";
    echo "jQuery('#stubscount').keyup(function () {";
    echo " this.value = this.value.replace(/[^0-9]/g,'');";
    echo "});";

    echo "</script></td>";
    echo "</tr>";
    echo "</table>";
}


//	add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
//	add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
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









