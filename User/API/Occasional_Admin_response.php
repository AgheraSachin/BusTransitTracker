<?php

include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$id=isset($_POST['id'])? mysql_real_escape_string($_POST['id']) : "";
	$d=mysql_query("select * from occassional_booking where Order_id='$id'") or die(mysql_error());
	$s1=mysql_fetch_array($d);
	
	$json=array("msg"=>"Success","status"=>$s1[14],"Amount"=>$s1[13],"id"=>$id);
	//$_SESSION['oid']=$b[12];
	//header("location:Ocassion_Booking_admin_response1.php");
}
else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

	
	
echo json_encode($json);
?>