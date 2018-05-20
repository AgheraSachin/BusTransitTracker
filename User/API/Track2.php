<?php
// Include confi.php
include_once('connection.php');
$cname=$_POST['cname'];
$qur=mysql_query("select * from tracking_1 where city_name='$cname'");
$qur1=mysql_fetch_array($qur);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Get data
	
   echo $from_lang=$qur1[2];
   echo $from_lat=$qur1[3];
   $to_lang=$_POST['tlang'];
   $to_lat=$_POST['tlat'];
}
 else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}


@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);