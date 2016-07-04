<?php
session_start(); // start up your PHP session! 

$q=$_GET["q"];

$con = mysql_connect("localhost", "paycheck_admin", "46464646");
if(! $con){die('Could not connect: '. mysql_error());}
mysql_select_db('paycheck_db', $con);
$sql="SELECT * FROM emp_table WHERE tx_rand_num = '".$q."'";
$result = mysql_query($sql);

echo "<table width='510' cellspacing='0' cellpadding='0' border='0'>
	<tr>
	  <th>SELECT E-Mail?</th>
	  <th>OPTIONS</th>
	  <th>RECIEVED FROM</th>
	</tr>";

while($row = mysql_fetch_array($result)){
  echo "<tr>";
  echo "<td><input type='radio' name='sel_email' value='". $row['emp_email'] ."' id='rad1'/></td>";
  echo "<td>" . $row['emp_email'] . "</td>";
  echo "<td>from your Stub</td>";
  echo "</tr>";
  
  echo "<tr>";
  echo "<td><input type='radio' name='sel_email' value='". $row['pay_email'] ."' id='rad2' checked='checked'/></td>";
  echo "<td>" . $row['pay_email'] . "</td>";
  echo "<td>from your PayPal</td>";
  echo "</tr>"; 
  
//  echo "<tr>";     
//  echo "<td><input type='radio' name='sel_email' value= document.getElementById(other_email).value  onchange='' /></td>";                                                
//  echo "<td><input placeholder='some other E-mail' type='text' name='other_email' onKeyUp='' id='other_email'></td>";
//  echo "<td>Type in an E-mail</td>";
//  echo "</tr>"; 
}
  

echo "</table>";
mysql_close($con);
?>
 