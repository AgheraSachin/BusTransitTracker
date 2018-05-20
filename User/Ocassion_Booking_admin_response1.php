<?php
error_reporting(0);
session_start();
include("connection.php");

	$id=$_SESSION['oid'];
	$d=mysql_query("select * from occassional_booking where Order_id='$id'") or die(mysql_error());
	$s1=mysql_fetch_array($d);
	


?>

<html>
<head>
<title>Occsional Booking Response</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/multi_step_form.js"></script>
	
</head>
<body>
<?php include("mainheader.php");?>

<form  action="" method ="post" enctype="multipart/form-data">
	
	<!-- fieldsets -->
	 <fieldset class="bus_reservation_field1" >
		
		<legend style="margin-left:450px;">Admin Response</legend>
		<table style="margin-left:400px;margin-top:50px;">
			<tr>
				<th>Order Status:</th>
				<td><?php echo $s1[14];?></td>
			</tr>
			<tr>
				<th>Order Pay Amount:</th>
				<td><?php echo $s1[13];?></td>
			</tr>
		</table>
	</fieldset>
		<a href="occasion_booking_payment.php" target="_blank"><input type="button" name="submit" value="MAKE PAYMENT" class="sbtn" style="margin-top:-150px;"></a>		
	
</form>
<?php include("ftr.php");?>
</body>
</html>
