<?php
include("connection.php");
include("class.phpmailer.php");

	$a=mysql_query("select * from reservation");
	if(isset($_REQUEST['n1']))
		{
			$subject="Admin Bus Ticket:";
			$id=$_REQUEST['n1'];
			$s1=mysql_query("select * from reservation where id='$id'") or die(mysql_error());
			$v=mysql_fetch_array($s1);
			$email=$v[4];
			$message="Your Ticket is Aprroved:"."<br/>"."For Further Procedure Click On Given Link:"."<a href=\"http://localhost:1234/pra2/Admin/Ticket.php?n1={$_REQUEST['n1']}\"> For Ticket Click Here </a>";
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
				
					
					header("location:Admin_Reservation_Managment.php");
			}
		}
						


?>
<html>
	<head>
		<title>Rotue Manage</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="js/jquery.dataTables.css">
	</head>
	<body>
		
		<form action="" method="post">
		<?php include("Admin_header.php");?>
		
		
		<div class="Routeresult" style="overflow:scroll;margin-top:25px">
			<table id="example">
			<thead>
					<tr>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Email</th>
						<th>Date_of_Journey</th>
						<th>Start_point</th>
						<th>End_point</th>
						<th>Fare</th>
						<th>Bus_Name</th>
						<th>Seta_No</th>
						<th>See Ticket</th>
						<th>Send Message</th>
					</tr>
					</thead>
					<tbody>
				
						<?php if(mysql_num_rows($a)>0)
						{
							while($b=mysql_fetch_array($a))
							{
								?>
								<tr>
								<td><?php echo $b[1];?></td>
								<td><?php echo $b[2];?></td>
								<td><?php echo $b[3];?></td>
								<td><?php echo $b[4];?></td>
								<td><?php echo $b[5];?></td>
								<td><?php echo $b[6];?></td>
								<td><?php echo $b[7];?></td>
								<td><?php echo $b[8];?></td>
								<td><?php echo $b[9];?></td>
								<td><?php echo $b[10];?></td>
								<td><a href="Ticket.php?n1=<?php echo $b[0];?>"><input type="button" name="b" value="SEE TICKET"/></a></td>
								<td><a href="Admin_Reservation_Managment.php?n1=<?php echo $b[0];?>" target="_blank"><input type="button" name="msg" id="b" value="Message" /></a></td>				
									</tr>
								<?php
							}
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