<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$id=$_POST['id'];
	$select_bus=mysql_query("select * from notification where Notification_id='".$id."'");
	if(mysql_num_rows($select_bus)>0)
	{
		$row=mysql_fetch_array($select_bus);
		$json=array("name"=>$row[1]);
		
		
	}
	
}
else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}


@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);