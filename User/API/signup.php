<?php
// Include confi.php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Get data
	$fname = isset($_POST['user_fname']) ? mysql_real_escape_string($_POST['user_fname']) : "";
	$lname = isset($_POST['user_lname']) ? mysql_real_escape_string($_POST['user_lname']) : "";
    $email = isset($_POST['user_email']) ? mysql_real_escape_string($_POST['user_email']) : "";
	$phone = isset($_POST['user_phone']) ? mysql_real_escape_string($_POST['user_phone']) : "";
	$password=isset($_POST['user_password']) ? mysql_real_escape_string($_POST['user_password']) : "";
	$city=isset($_POST['user_city']) ? mysql_real_escape_string($_POST['user_city']) : "";
	$gender=isset($_POST['user_gender']) ? mysql_real_escape_string($_POST['user_gender']) : "";
	$birth=isset($_POST['day']) ? mysql_real_escape_string($_POST['day']) : "";
	$address=isset($_POST['user_address']) ? mysql_real_escape_string($_POST['user_address']) : "";
  
// Insert data into data base
    $sql = "INSERT INTO user_registration (`user_id`, `user_fname`,`user_lname` ,`user_email`, `user_phone`,`user_password`,`user_gender`,`user_city`,`user_birthdate`,`user_address`) VALUES (NULL ,'$fname', '$lname', '$email', '$phone','$password','$gender','$city','$birth','$address');";
    $qur = mysql_query($sql);
    if ($qur) {
        $json = array("msg"=>"successfully");
    } else {
        $json = array("msg"=>"notsuccessfully");
    }
} else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);