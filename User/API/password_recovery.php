<?php
// Include confi.php
include_once('connection.php');
include("class.phpmailer.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Get data
	
  //  $id = isset($_POST['user_id']) ? mysql_real_escape_string($_POST['user_id']) : "";
	$subject="Your Password :";
	$email = isset($_POST['user_email']) ? mysql_real_escape_string($_POST['user_email']) : "";
	$s=mysql_query("select * from user_registration where user_email='$email'") or die(mysql_error());
	$v=mysql_fetch_array($s);
	$s2=$v['5'];
	$message="Your Password is:".$s2."<br/>"."<a href=\"http://localhost:1234/pra2/User/Sign in.php\">Click Here For Login</a>";
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; // or 587
	$mail->IsHTML(true);
	$mail->Username ="r1641862@gmail.com";// sender's email id
	$mail->Password = "Sachin1234567890"; // der's gmail password
	$mail->SetFrom("r1641862@gmail.com"); // sender's email id
	$mail->Subject = "$subject"; //subject of email
	$mail->Body = "$message"; //message of email
	$mail->AddAddress($email); //receivers email
			if(!$mail->Send())
			{
				$json=array("msg"=>"Not Success");
				
			}
			else
			{
				
				$json = array("msg"=>"done");
			}
		}
		else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}
@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);