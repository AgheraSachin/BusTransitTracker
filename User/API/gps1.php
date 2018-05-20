<?php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
	$from =isset($_POST['from']) ? mysql_real_escape_string($_POST['from']) : "";
	
	$b=mysql_query("select * from tracking_1 where city_name='$from'") or die (mysql_error());
	$a=mysql_fetch_array($b);
	$json=array("lat"=>$a[2],"long"=>$a[3]);
	
}
else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

@mysql_close($conn);
		

/* Output header */
header('Content-type: application/json');
echo json_encode($json);
?>