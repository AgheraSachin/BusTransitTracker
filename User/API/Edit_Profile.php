<?php
// Include confi.php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Get data
	
    $id = isset($_POST['user_id']) ? mysql_real_escape_string($_POST['user_id']) : "";
	

		
  
// Insert data into data base
    $sql = mysql_query("select * from user_registration where user_id='$id'");
	$b=mysql_fetch_array($sql);
    if (mysql_num_rows($sql)==1) 
	{

       $json = array("msg"=>"done","id"=>$b[0],"fname"=>$b[1],"lname"=>$b[2],"email"=>$b[3],"phone"=>$b[4],"gender"=>$b[6],"city"=>$b[7],"birthdate"=>$b[8],"Address"=>$b[9]);
 
    }
    else {
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