<?php






require_once ( __DIR__ . '/../wp-load.php' );

//$sql_trx = "select * from user_transaction where id=5; ";
//$results = $wpdb->get_results($sql_trx, ARRAY_A);
//print_r($results);
//exit;

$user = wp_get_current_user();						// get's the logged in user id for WP
if ( $user )
	$userId = $user->id;
else{
	$userId = '0'; // guest user
}


$params = base64_encode(json_encode($_POST) );       //serialized INFO data from post-vars, compressed into jencode
//echo $params; 


$sql_insert = "INSERT INTO user_transaction(user_id, tx_rand_num, options, info_email) 
	                 VALUES ('$userId', '3', '$params', '$emp_email' )";
$wpdb->query($sql_insert );							// inserts data into user_t

$trxId =  $wpdb->insert_id;				// AUTO GENERATED id

$result = array("trxId" =>$trxId);		// uses the AUTO GENERATED id to create an array called $result[
echo json_encode($result);				// compresses result
exit;

?>