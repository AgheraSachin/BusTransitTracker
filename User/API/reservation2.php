<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$id=$_REQUEST['id'];
	$select_bus=mysql_query("select * from bus_info where bus_id='".$id."'");
	if(mysql_num_rows($select_bus)>0)
	{
		$row=mysql_fetch_array($select_bus);
		$json=array("name"=>$row[1],"starting_point"=>$row[2],"ending_point"=>$row[3],"route"=>$row[5],"starting_point_time"=>$row[6],"Ending_point_time"=>$row[7],"route_time"=>$row[8]);
		
		
	}
	
}
else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}


@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);