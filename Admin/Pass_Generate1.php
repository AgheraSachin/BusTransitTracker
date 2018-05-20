<?php
error_reporting(0);
include("connection.php");
include("class.phpmailer.php");
$a=mysql_query("select * from bus_pass") or die(mysql_error());
$p=mysql_query("select * from bus_pass_passenger")or die(mysql_error());

if(isset($_REQUEST['n1']))
		{
			$subject="Admin Pass Aprroval:";
			$id=$_REQUEST['n1'];
			$s1=mysql_query("select * from bus_pass where Pass_id='$id'") or die(mysql_error());
			$v=mysql_fetch_array($s1);
			$email=$v[3];
			$message="Your Pass is Aprroved:"."<br/>"."For Further Procedure Click On Given Link:"."<a href=\"http://localhost:1234/pra2/Admin/pdf1.php?n1={$_REQUEST['n1']}\"> For New Pass Click Here  </a>"."<br/>".
			"<a href=\"http://localhost:1234/pra2/Admin/Icard_generate.php?n1=={$_REQUEST['n1']}\"> For New Icard Click Here </a>";
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
				
					mysql_query("delete from bus_pass where Pass_id='$id'") or die(mysql_error());
					header("location:Pass_Generate.php");
			}
		}

		if(isset($_REQUEST['n2']))
		{
			$id=$_REQUEST['n2'];
			$subject="Your Pass Aprroved :";
			$s1=mysql_query("select * from Bus_pass_passenger where Pass_id='$id'") or die(mysql_error());
			$v=mysql_fetch_array($s1);
			$email=$v[3];
			$message="Your Pass is Aprroved:"."<br/>"."For Further Procedure Click On Given Link:"."<a href=\"http://localhost:1234/pra2/Admin/pdf3.php?n2={$_REQUEST['n2']}\"> For New Pass Click Here For </a>"."<br/>".
			"<a href=\"http://localhost:1234/pra2/Admin/Icard_generate1.php?n2={$_REQUEST['n2']}\"> For New Icard Click Here For </a>";
			
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
		<title>Generate Pass</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../Admin/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-ui.js"></script>
		<style type="text/css">
		a:visited {
    color: green;
}

		
		</style>
		
		
	</head>
	<body >
		<?php include("Admin_header.php");?>
		<form action="" method="post">
		
		<div class="Routeresult" style="overflow:scroll;">
			<table border="2" class="sasa">
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
					<th>Expire</th>
					<th>Bus Type For Pass</th>
					<th>Icard Id No:</th>
					<th>Generate Pass</th>
					<th>Generate Icard</th>
					<th>Send Message</th>	
					
					
					
				</tr>
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
						<td><img src="../<?php echo $b[8]; ?>" height="40px" width="40px"></td>
						<td><img src="../<?php echo $b[9]; ?>" height="40px" width="40px"></td>
						<td><?php echo $b[10]; ?></td>
						<td><?php echo $b[11]; ?></td>
						<td><img src="../<?php echo $b[12]; ?>" height="40px" width="40px"></td>
						<td><?php echo $b[13]; ?></td>
						<td><?php echo $b[14]; ?></td>
						<td><?php echo $b[15]; ?></td>
						<td><?php echo $b[16]; ?></td>
						<td><?php echo $b[17]; ?></td>
						<td><?php echo $b[18]; ?></td>
						<td><?php echo $b[19]; ?></td>
						<td><a href="pdf1.php?n1=<?php echo $b[0];?>"   target="_blank"><input type="button" name="b" value="PASS Generate"/></a></td>
						<td><a href="Icard_generate.php?n1=<?php echo $b[0];?>" target="_blank" id="Icard1"><input type="button" name="b" id="Icard" value="Icard Generate"/></a></td>				
						<td><a href="Pass_Generate.php?n1=<?php echo $b[0];?>" target="_blank"><input type="button"  name="msg" id="b" value="Message" /></a></td>				
						
					</tr>
					<?php
					
				}
				?>
				<?php
				while($b1=mysql_fetch_array($p))
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
						<td><img src="../<?php echo $b1[8]?>" height="40px" width="40px"></td>
						<td><img src="../<?php echo $b1[9]?>" height="40px" width="40px"></td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td><?php echo $b1[10]; ?></td>
						<td><?php echo $b1[11]; ?></td>
						<td><?php echo $b1[12]; ?></td>
						<td><?php echo $b1[13]; ?></td>
						<td><?php echo $b1[14]; ?></td>
						<td><?php echo $b1[15]; ?></td>
						<td><?php echo $b1[16]; ?></td>
						<td><a href="pdf3.php?n2=<?php echo $b1[0];?>"target="_blank"><input type="button" name="b" value="PASS Generate"/></a></td>
						<td><a href="Icard_generate1.php?n2=<?php echo $b1[0];?>" target="_blank" id="Icard1"><input type="button" name="b" id="Icard" value="Icard Generate" onclick="hide1()"/></a></td>				
						<td><a href="Pass_Generate.php?n2=<?php echo $b1[0];?>" target="_blank" id="Icard1"><input type="button"  name="b" id="Icard" value="Message"/></a></td>				
						</tr>
					<?php
					
				}
				?>
			</table>
			</div>

		</form>
	</body>
</html>