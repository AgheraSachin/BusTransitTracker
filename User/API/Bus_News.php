<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$a=mysql_query("select * from Notification");
	if($a)
	{
		
			while($row=mysql_fetch_array($a))
			{
				$json[]=$row[0];
				
			}
			
	}
		
	else
	{
		$json=array("msg"=>"NotSuccess");
	}
	
}
else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}


@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode(array('id'=>$json));
		
?>