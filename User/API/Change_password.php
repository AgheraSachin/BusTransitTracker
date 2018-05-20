<?php
// Include confi.php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Get data
	$id = isset($_POST['id']) ? mysql_real_escape_string($_POST['id']) : "";
    $olp1 = isset($_POST['olp']) ? mysql_real_escape_string($_POST['olp']) : "";
	$nwcp1 = isset($_POST['nwcp']) ? mysql_real_escape_string($_POST['nwcp']) : "";
	$sql = mysql_query("select * from user_registration where user_id='$id' and user_password='$olp1'");

    
		if(mysql_num_rows($sql)==1)
		{
		$b=mysql_query("update user_registration set user_password='$nwcp1' where user_id='$id'");
		
		// Insert data into data base
    
	if($b)
	{
		
		$json = array("msg"=>"s");		
	}
	else {
        $json = array("msg"=>"notsuccessfully");
    }
		
		}
		else
		{
			 $json = array("msg"=>"w");
		}
	
	
	

} 
else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

	
	
echo json_encode($json);