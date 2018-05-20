<?php
include("connection.php");
include("class.phpmailer.php");
$date1=date("Y-m-d");
$a=mysql_query("select * from bus_pass where Expire='$date1'") or die("mysql_error()");
$a1=mysql_query("select * from bus_pass_passenger where Expire='$date1'") or die("mysql_error()");
$a2=mysql_query("select * from renew_pass where Expire='$date1'") or die("mysql_error()");

if(isset($_REQUEST['n1']))
		{
			$subject="Your Pass Renew Notification :";
			$id=$_REQUEST['n1'];
			$s1=mysql_query("select * from bus_pass where Pass_id='$id'") or die(mysql_error());
			$v=mysql_fetch_array($s1);
			$email=$v[3];
			$message="Your Pass is Expired today Soon So request to renew as sson as possible";
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
				
					
			}
		}

		if(isset($_REQUEST['n2']))
		{
			$id=$_REQUEST['n2'];
			$subject="Your Pass Renew Notification :";
			$s1=mysql_query("select * from Bus_pass_passenger where Pass_id='$id'") or die(mysql_error());
			$v=mysql_fetch_array($s1);
			$email=$v[3];
			$message="Your Pass is Expired today Soon So request to renew as sson as possible";
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
			}
		}
		if(isset($_REQUEST['n3']))
		{
			$id=$_REQUEST['n3'];
			$subject="Your Pass Renew Notification :";
			$s1=mysql_query("select * from Bus_pass_passenger where Pass_id='$id'") or die(mysql_error());
			$v=mysql_fetch_array($s1);
			$email=$v[3];
			$message="Your Pass is Expired today Soon So request to renew as sson as possible";
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
			}
		}


?>
<html>
	<head>
		<title>Alert To Renew Pass</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="js/jquery.dataTables.css">
	</head>
	<body>
		<?php include("Admin_header.php");?>
		<form action="" method="post">
			<div class="Routeresult" style="overflow:scroll;margin-top:25px">
			<table id="example">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Gender</th>
					<th>Birthday Date</th>
					<th>Pass Type</th>
					<th>Id Proof</th>
					<th>Photo</th>
					<th>School Name</th>
					<th>School Address</th>
					<th>Bonofied Certificate</th>
					<th>From</th>
					<th>To</th>
					<th>Pass Issue Date</th>
					<th>Pass Duration</th>
					<th>Bus Type For Pass</th>
					<th>Icard Id No:</th>
					<th>Send Message</th>	
				</tr>
				</thead>
				<tbody>
				<?php
				while($b=mysql_fetch_array($a))
				{
					?>
					<tr>
					
						<td><?php echo $b[1]; ?></td>
						<td><?php echo $b[2]; ?></td>
						<td><?php echo $b[3]; ?></td>
						<td><?php echo $b[4]; ?></td>
						<td><?php echo $b[5]; ?></td>
						<td><?php echo $b[6]; ?></td>
						<td><?php echo $b[7]; ?></td>
						<td><?php echo $b[8]; ?></td>
						<td><?php echo $b[9]; ?></td>
						<td><?php echo $b[10]; ?></td>
						<td><?php echo $b[11]; ?></td>
						<td><?php echo $b[12]; ?></td>
						<td><?php echo $b[13]; ?></td>
						<td><?php echo $b[14]; ?></td>
						<td><?php echo $b[15]; ?></td>
						<td><?php echo $b[16]; ?></td>
						<td><?php echo $b[18]; ?></td>
						<td><?php echo $b[19]; ?></td>
						<td><a href="Admin_pass_alert.php?n1=<?php echo $b[0];?>"><input type="button" name="b" value="Send Mail"/></a></td>
					
					</tr>
					<?php
				}
				?>
				<?php
				while($b1=mysql_fetch_array($a1))
				{
					?>
					<tr>
					
						<td><?php echo $b1[1]; ?></td>
						<td><?php echo $b1[2]; ?></td>
						<td><?php echo $b1[3]; ?></td>
						<td><?php echo $b1[4]; ?></td>
						<td><?php echo $b1[5]; ?></td>
						<td><?php echo $b1[6]; ?></td>
						<td><?php echo $b1[7]; ?></td>
						<td><?php echo $b1[8]; ?></td>
						<td><?php echo $b1[9]; ?></td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td><?php echo $b1[10]; ?></td>
						<td><?php echo $b1[11]; ?></td>
						<td><?php echo $b1[12]; ?></td>
						<td><?php echo $b1[13]; ?></td>
						<td><?php echo $b1[15]; ?></td>
						<td><?php echo $b1[16]; ?></td>
						
						<td><a href="Admin_pass_alert.php?n2=<?php echo $b1[0];?>"><input type="button" name="b" value="Send Mail"/></a></td>
					
					</tr>
					<?php
				}
				?>
				<?php
				while($b2=mysql_fetch_array($a2))
				{
					?>
					<tr>
					
						<td><?php echo $b2[1]; ?></td>
						<td><?php echo $b2[2]; ?></td>
						<td><?php echo $b2[3]; ?></td>
						<td><?php echo $b2[4]; ?></td>
						<td><?php echo $b2[5]; ?></td>
						<td><?php echo $b2[6]; ?></td>
						<td><?php echo $b2[7]; ?></td>
						<td><?php echo $b2[8]; ?></td>
						<td><?php echo $b2[9]; ?></td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td><?php echo $b2[10]; ?></td>
						<td><?php echo $b2[11]; ?></td>
						<td><?php echo $b2[12]; ?></td>
						<td><?php echo $b2[13]; ?></td>
						<td><?php echo $b2[15]; ?></td>
						<td><?php echo $b2[16]; ?></td>
						
						<td><a href="Admin_pass_alert.php?n3=<?php echo $b2[0];?>"><input type="button" name="b" value="Send Mail"/></a></td>
					
					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
			<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
			<script type="text/javascript" src="js/jquery.dataTables.js"></script>
			<script>
               $(function(){
                   $("#example").dataTable();
                     })
           </script>
			</div>
		</form>
	</body>
</html>