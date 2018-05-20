<?php

?>

<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="css\nav.css">
		<link rel="stylesheet" type="text/css" href="css\style.css">
		
		
	</head>
	<body>
	
		<div class="hede1">
		<?php include("firstheader.php"); ?>
		</div>
		<div class="firstdiv"  >
			<div class="mainheading"><h1>Bus Transit Tracker</h1></div>
			
		</div>	

		
	<div id="services" class="services">
		<div class="container1">
		
			<div><h3>Services</h3></div>
			<div class="firc">
		<a href="New_Pass.php"><img src="images/1.png" alt=""></a>
				<h1>Online Pass</h1>
				<p>-Create Your Daily Bus Pass With Our System...</p>
			</div>
			<div class="srcc">
				<a href="reservation.php"><img src="images/1.png" alt="" ></a>
				<h1>Online Reservation</h1>
				<p>-Now It's Become To Book Your Seat With Us...</p>
				<p>-Multi Payment Option</p>
			</div>
			<div class="srcc">
					<a href="Ocassion_Booking.php"><img src="images/1.png" alt="" ></a>
				<h1>Booking for occession</h1>
				<p>-Book Whole Bus For Your Occasions...</p>
			</div>
			
		</div>
	</div>
	<?php include("ftr.php"); ?>
	
	
	</body>
</html>