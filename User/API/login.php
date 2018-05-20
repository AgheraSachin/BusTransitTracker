<?php
// Include confi.php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Get data
	
    $email = isset($_POST['user_email']) ? mysql_real_escape_string($_POST['user_email']) : "";
	$password=isset($_POST['user_password']) ? mysql_real_escape_string($_POST['user_password']) : "";
	
  
// Insert data into data base
    $sql = "select * from user_registration where user_email='$email' and user_password='$password'";
    $qur = mysql_query($sql);
	$b=mysql_fetch_array($qur);
    if (mysql_num_rows($qur)==1) 
{

       $json = array("msg"=>"done","id"=>$b[0]);
 
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