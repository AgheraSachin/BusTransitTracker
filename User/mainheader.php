<?php
include("Controller.php");
$o=new Controller();
$o->CMainheader();

?>
<html>
	<head>
		<title>Welcome Page</title>
		<link rel="stylesheet" type="text/css" href="css/nav.css">
	</head>
	<body>
		<form action="" method="post">
		<div class="ma1"></div>
		<div class="ma2">
			<a href="welcome.php"><img src="images/logo.png" alt="Bus Transit Tracker Logo"></a>
				<h1>Bus Transit Tracker</h1>
				
		</div>
		<div class="ma21">
					<h1>Welcome <?php echo strtoupper($_SESSION['name']); ?></h1>
					
				</div>
		<hr>
		<div class="ma4">
			<ol>
			
				<li><a href="welcome.php">HOME</a></li>
				<li><a href="#">BUS PASS
					<ol>
						<li><a href="New_pass.php">NEW PASS</a></li>
						<li><a href="Renew_pass.php">RENEW PASS</a></li>
					</ol></a></li>
				<li><a href="reservation.php">RESERVATION</a></li>
				<li><a href="Ocassion_Booking.php">OCASSIONAL BOOKING</a>
					<ol>
						<li style="margin-top:12px;margin-left:-20px"><a href="Ocassion_Booking_admin_response.php">ADMIN RESPONSE</a></li></ol>
				</li>
					
				<li><a href="#">MY ACCOUNT
					<ol>
						<li><a href="password change.php">CHANGE PASSWORD</a></li>
						<li><a href="update_profile.php">UPDATE PROFILE</a></li>
					</ol></a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ol>
		</div>
		</form>
	</body>
</html>