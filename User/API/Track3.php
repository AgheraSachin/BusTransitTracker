<?php

include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	 $imei = isset($_POST['imei']) ? mysql_real_escape_string($_POST['imei']) : "";
	 $qur=mysql_query("select * from tracking_2 where IMEI='$imei'");
	$data=mysql_fetch_array($qur);
		
	 if($qur)
	 {
		  $json=array("msg"=>"Succesfully","lat"=>$data[1],"longi"=>$data[2]); 
	 }
	 else
	 {
		 $json=array("msg"=>"Not Success");
	 }
}
 else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);
?>