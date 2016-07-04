<?php
// activated by the buy it now button
// FILE IS DESIGNER TO INSERT THE INITIAL INFO INTO user_transaction
//  also generate a user if not logged in
// 2 scenarios:

require_once ( __DIR__ . '/../wp-load.php' );

global $wpdb;

$stub_id = $_POST['chkID'];
 
$sel_sql="SELECT * FROM tbl_paystubs WHERE id=".$stub_id;
$result = $wpdb->get_var($sel_sql,5);
 
if ($result=='1'){
	 $upd_sql1="UPDATE tbl_paystubs SET paid =0 WHERE id=".$stub_id;
	  $wpdb->query($upd_sql1);
	  return;
 }else if($result=='0') {
	 $upd_sql1="UPDATE tbl_paystubs SET paid =1 WHERE id=".$stub_id;
	  $wpdb->query($upd_sql1);
	  return;  
 }else if($result=='NULL') {
	 $upd_sql1="UPDATE tbl_paystubs SET paid =5, options= ".$result." WHERE id=".$stub_id;
	  $wpdb->query($upd_sql1);
	  return; 
 }
				

?>