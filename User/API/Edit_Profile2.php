<?php
include("connection.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$id = isset($_POST['user_id']) ? mysql_real_escape_string($_POST['user_id']) : "";
	$fname = isset($_POST['user_fname']) ? mysql_real_escape_string($_POST['user_fname']) : "";
	$lname = isset($_POST['user_lname']) ? mysql_real_escape_string($_POST['user_lname']) : "";
    $email = isset($_POST['user_email']) ? mysql_real_escape_string($_POST['user_email']) : "";
	$phone = isset($_POST['user_phone']) ? mysql_real_escape_string($_POST['user_phone']) : "";
	$city=isset($_POST['user_city']) ? mysql_real_escape_string($_POST['user_city']) : "";
	$birth=isset($_POST['day']) ? mysql_real_escape_string($_POST['day']) : "";
	$address=isset($_POST['user_address']) ? mysql_real_escape_string($_POST['user_address']) : "";
	
	$a=mysql_query("update user_registration set user_fname='$fname',user_lname='$lname',user_email='$email',user_phone='$phone',user_city='$city',user_birthdate='$birth',user_address='$address' where user_id='$id'");
	if ($a)
		{
			$json = array("msg"=>"successfully");
		}
		else 
		{
        $json = array("msg"=>"notsuccessfully");
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
		