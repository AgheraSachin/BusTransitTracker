<?php
include("connection.php");
include("class.phpmailer.php");
$a=mysql_query("select * from renew_pass");

if(isset($_REQUEST['n1']))
		{
			$subject="Admin Renew Pass Aprroval:";
			$id=$_REQUEST['n1'];
			$s1=mysql_query("select * from renew_pass where Pass_id='$id'") or die(mysql_error());
			$v=mysql_fetch_array($s1);
			$email=$v[3];
			$message="Your Renew Pass is Aprroved:"."<br/>"."For Further Procedure Click On Given Link:"."<a href=\"http://localhost:1234/pra2/Admin/pdf2.php?n1={$_REQUEST['n1']}\"> For New Pass Click Here  </a>";
		
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

?>
<html>
	<head>
		<title>Generate Pass</title>
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
					<th>Bus Pass Expire</th>
					<th> Bus type</th>
					<th>Generate</th>
					<th>Message</th>	
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
						<td><img src="../User/<?php echo $b[8]; ?>" height="40px" width="40px"></td>
						<td><img src="../User/<?php echo $b[9]; ?>" height="40px" width="40px"></td>
						<td><?php echo $b[10]; ?></td>
						<td><?php echo $b[11]; ?></td>
						<td><img src="../User/<?php echo $b[12]; ?>" height="40px" width="40px"></td>
						<td><?php echo $b[13]; ?></td>
						<td><?php echo $b[14]; ?></td>
						<td><?php echo $b[15]; ?></td>
						<td><?php echo $b[16]; ?></td>
						<td><?php echo $b[17]; ?></td>
						<td><?php echo $b[18]; ?></td>
						<td><a href="pdf2.php?n1=<?php echo $b[0];?>"  target="_blank"><input type="button" name="b" value="PASS Generate"/></a></td>
						<td><a href="Admin_Renew_pas.php?n1=<?php echo $b[0];?>"><input type="button" name="b" id="Icard" value="Message"/></a></td>				
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