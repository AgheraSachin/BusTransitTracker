<?php
include("class.phpmailer.php");
include("connection.php");

		if(isset($_POST['submit']))
		{
			$subject="Your Password :";
			$email=$_REQUEST['ademail'];
			$s1=mysql_query("select * from Admin_Login where Admin_email='$email'") or die(mysql_error());
		
			$v=mysql_fetch_array($s1);
			$s2=$v[2];
			$message="Your Admin Password is:".$s2;
			

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
				$msg="Message has been sent to subscribers email";
				return $msg;
				header("location:Index.php");
			}
		}
	
?>
<html>
	<head>
		<title>Bus Transit Tracker</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
	</head>
	<body>
		<form action="" method="Post">
		
		<div class="adlogin">
			<div class="adlogin1"><h4>Forgot Password</h4><hr>
				<div class="adlogin2">
				<input type="text" name="ademail" placeholder="Enter Email">
				
				<a href="Admin_Login.php" style="margin-left:300px;text-decoration:none;">-Back to login</a>
				<input type="Submit" name="submit" value="Submit">
			</div>
				
			</div>
			
		</div>
		
		</form>
	</body>