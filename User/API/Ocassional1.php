<?php
// Include confi.php
include_once('connection.php');
include("class.phpmailer.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Get data
			$a=isset($_POST['fname']) ? mysql_real_escape_string($_POST['fname']) : "";
			$b=isset($_POST['lname']) ? mysql_real_escape_string($_POST['lname']) : "";
			$c=isset($_POST['address']) ? mysql_real_escape_string($_POST['address']) : "";
			$d=isset($_POST['phone_num']) ? mysql_real_escape_string($_POST['phone_num']) : "";
			$email=isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
			$f=isset($_POST['t']) ? mysql_real_escape_string($_POST['t']) : "";
			$g=isset($_POST['no_of_bus']) ? mysql_real_escape_string($_POST['no_of_bus']) : "";
			$h=isset($_POST['Bus_journey']) ? mysql_real_escape_string($_POST['Bus_journey']) : "";
			$i=isset($_POST['Bus_arrival'])? mysql_real_escape_string($_POST['Bus_arrival']) : "";
			$j=isset($_POST['frm'])? mysql_real_escape_string($_POST['frm']) : "";
			$k=isset($_POST['to'])? mysql_real_escape_string($_POST['to']) : "";
			
			$oid="BTT".rand();
			
			
			
			$message="Your Order-Id is:".$oid;
		
			$subject="Your Bus Booking For Occasion Request :";
			$mail = new PHPMailer(); // create a new objects
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
				echo "Mailer Error: " . $mail->ErrorInfo;					
			}
			else
			{
				$query=mysql_query("insert into occassional_booking values('','$a','$b','$c','$d','$email','$f','$g','$h','$i','$j','$k','$oid','','')") or die(mysql_error());	
				if($query)
				{
					$json=array("msg"=>"Done");
				}
				else
				{
					$json=array("msg"=>"Not Done");
				}
			}	
		
	}
else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}


@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);