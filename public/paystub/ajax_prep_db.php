<?php
// activated by the buy it now button
// FILE IS DESIGNED TO INSERT THE INITIAL INFO INTO user_transaction
//  also generate a user if not logged in
// 2 scenarios:
require_once ( __DIR__ . '/../wp-load.php' );

$user = wp_get_current_user();						// get's the logged in user id for WP
  if ( $user ){
	  $userId = $user->ID;
	  $emp_email = $user->user_email;
  }
  else{
	  // run sequence to generate a Subscriber - into PREViews
	  $userId = '-2';        // guest user  OR   create user, and send email with a  link
  }
//console.log("asfsdfsdf");


$emp_email = $_REQUEST['emp_email'];
$num_stubs = $_POST[num_stubs];
$check_num_base = $_POST[check_num];

//$check_num_base = 1;


//for ($i = 0; $i < $num_stubs; $i++) {
  //$_POST['check_num'] = ($check_num_base-$i);
  //$_POST['prd_num'] = $i;

//  $check_num = $_REQUEST['check_num_'][$i];
  $check_num = 1;

  //var_dump($_POST);
  //$params = base64_encode(json_encode($_POST));       //serialized INFO data from post-vars, compressed into jencode
  $status = "pay-attempt";
  //$status = $_POST[num_stubs];

  //$params =implode("&", $_POST);
  //echo json_encode($params);
  //echo (base64_encode(json_encode($_POST) ));

 // $sql_insert = "INSERT INTO user_transaction(status, user_id, options, info_email) VALUES ('$status', '$userId', '$params', '$emp_email' )";
 // $wpdb->query($sql_insert );				// inserts data into user_transaction

   $urlid = $_REQUEST['stub_id'];			  	// style

  $paramsI = base64_encode(json_encode($_REQUEST) );
  $pageStyle = $pdf_pages[$urlid][0];
  $user_ip = $_SERVER['REMOTE_ADDR'];
  // IF LOGGED IN and UNLIMITED add PAYED TO A Column
 // $sql_insert2 = "INSERT INTO user_transaction(status, user_id, check_num, tx_rand_num, options, info_email) VALUES ('$status', '$user_id', '$check_num', '$i', '$paramsI', '$emp_email' )";
 // $wpdb->query($sql_insert2 );

  // IF LOGGED IN and UNLIMITED add PAYED TO A Column

$sql_insert2 = "INSERT INTO user_transaction(status, payed, user_ip, user_id, check_num, tx_rand_num, premium, options, info_email) VALUES ('$status', '$payed', '$user_ip', '$user_id', '$check_num', '$check_num_base', '$pageStyle', '$paramsI', '$emp_email' )";

//$sql_insert2 = "INSERT INTO user_transaction(status, user_id, check_num, tx_rand_num, info_email, options) VALUES ('$status', '$user_id', '$check_num', '$i', '$emp_email', '$paramsI')";
  echo $sql_insert2;





   $wpdb->query($sql_insert2 );


  //var_dump($params);



if (isset($_POST['emp_email'])) {
$emp_email = $_POST['emp_email'];
}

//if ($emp_email==''){$emp_email = 'george.strnad@gmail.com';}



$trxId =  $wpdb->insert_id;				// AUTO GENERATED id from the query above
										// so, trx_id is the line itemm, not the user_id
$result = array("trxId" =>$trxId,"dsf" =>$paramsI);		// uses the AUTO GENERATED id to create an array called $result[
//echo json_encode($result);				// compresses result sent back to Ajax .get request, i think sent to "param"  value or "data"
exit;

?>