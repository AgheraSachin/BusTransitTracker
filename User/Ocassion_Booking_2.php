<?php
error_reporting(0);
session_start();
include("class.phpmailer.php");
include("connection.php");

	$a=$_REQUEST['fname'];
			$b=$_REQUEST['lname'];
			$c=$_REQUEST['address'];
			$d=$_REQUEST['phone_num'];
			$email=$_REQUEST['email'];
			$f=implode(",",$_REQUEST['t']);
			$g=$_REQUEST['no_of_bus'];
			$h=$_REQUEST['Bus_journey'];
			$i=$_REQUEST['Bus_arrival'];
			$j=$_REQUEST['frm'];
			$k=$_REQUEST['to'];
			echo $oid="BTT".rand();
	if(isset($_POST['Submit']))
		{
			
			
			echo$email=$_REQUEST['email'];
			$message="Your Order-Id is:".$oid;
			echo  $oid;

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
				
				$query=mysql_query("insert into occassional_booking values('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$oid',Null,Null)") or die(mysql_error());
				header("location:welcome.php");
				
			}
		}
	
	
	
	
	
	
	

?>
<html>
	<head>
		<title>Ocassion Booking</title>
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		
	</head>
	<body>
	<?php include("mainheader.php");?>
	<form action="" method ="post" enctype="multipart/form-data">

	<fieldset class="buspass_field1" style="height:60%;" >
		<legend style="margin-left:420px;">Confirmation Of Bus Booking For Occasion</legend>
                <table style="margin-left:400px;margin-top:30px;">
				<tr>
					<th>First Name:</th>
					<td><?php echo $a;?></td>
				</tr>
				<tr>
					<th>Last Name:</th>
					<td><?php echo $b;?></td>
				</tr>
				<tr>
					<th>Address:</th>
					<td><?php echo $c;?></textarea></td>
				</tr>
				<tr>
					<th>Phone Number:</th>
					<td><?php echo $d;?></td>
				</tr>
				<tr>
					<th>Email:</th>
					<td><?php echo $e;?></td>
				</tr>
				<tr>
					<th>From:</th>
					<td><?php echo $j;?></td>
				</tr>
				<tr>
					<th>To:</th>
					<td><?php echo $k;?></td>
				</tr>
                 <tr>
					<th>Number of Bus:</th>
					<td><?php echo $g;?></td>
				</tr> 
                                  <tr>
					<th>Date of Bus Journey:</th>
					<td><?php echo $h;?></td>
				</tr>
                                 <tr>
					<th>Time of Bus Arrival:</th>
					<td><?php echo $i;?></td>
				</tr>
				<tr>
					<th>Bus Type:</th>
					<td><?php echo $f;?></td>
				</tr>
				</table>
			</fieldset>
			<input type="submit" name="Submit" value="Submit" class="sbtn" style="margin-top:-130px;">
	
	</form>
	<?php include("ftr.php");?>
</body>
</html>