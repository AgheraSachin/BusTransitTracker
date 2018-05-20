<?php
session_start();
include("connection.php");

$a=$_SESSION['reservation_from'];
$b=$_SESSION['reservation_to'];
$name=$_SESSION['reservation_name'];
$age=$_SESSION['reservation_age'];
$gender=$_SESSION['reservation_gender'];
$ph=$_SESSION['reservation_mobile'];
$email=$_SESSION['reservation_email'];
$onward=$_SESSION['onward'];
$seat=$_SESSION['seat'];
$seat_count=$_SESSION['seat_count'];
$bus_name=$_SESSION['Bus_name'];
if(isset($_REQUEST['s']))
{
	$fare=$_SESSION['fare'];
	header("location:Reservation_payment.php");
	mysql_query("insert into reservation values('','$name','$age','$gender','$email','$onward','$a','$b','$fare','$bus_name','$seat')") or die(mysql_error());
	
}
?>

<html>
<head>
<title>Reservation</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	
	</head>
	<body>
	<?php include("mainheader.php");?>
	<form action="" method="post">
	<fieldset class="buspass_field1">
		<legend style="margin-left:400px">Travel Summary</legend>	
				<table style="margin-left:80px;margin-top:30px;float:left">
					<tr><th><h2>Trip Detail</h2></th></tr>
					<tr>
					<th>Date of Journey:</th>
					<td><?php echo $onward;?></td>
					</tr>
					<tr>
					<th>Passenger Start point:</th>
					<td><?php echo $a;?></td>
					</tr>
					
					<tr>
					<th>Passenger End Place:</th>
					<td><?php echo $b;?></td>
					</tr>
					<tr>
					<th>No of Seat:</th>
					<td><?php echo $seat_count;?></td>
					</tr>
					<tr>
					<th>Seat No:</th>
					<td><?php echo $seat;?></td>
					</tr>
				</table>
				<table style="padding-left:400px;margin-top:30px; ">
				<tr><th><h2>Passenger Information</h2></th></tr>
					<tr>
					<th>Name:</th>
					<td><?php echo $name;?></td>
					</tr>
					<tr>
					<th>Age:</th>
					<td><?php echo $age;?></td>
					</tr>
					<tr>
					<th>Gender:</th>
					<td><?php echo $gender;?></td>
					</tr>
				</table>
				<table  style="padding-left:100px;margin-top:150px; ">
					<tr>
					<th><h2>Fare detail</h2></th>
					</tr>
					<tr>
					<th>Basic Fee:</th>
					<td><?php echo $a=350*"$seat_count";?></td>
					</tr>
					<tr>
					<th>Reservation Charge::</th>
					<td><?php echo $b=5;?></td>
					</tr>
					<tr>
					<th>Toll Fee:</th>
					<td><?php echo $c=14;?></td>
					</tr>
					<tr>
					<th>Grand Total:</th>
					<td><?php echo $d=$a+$b+$c;
					$_SESSION['fare']=$d;?></td>
					</tr>
				</table>
	</fieldset>
		<input type="submit" name="s" value="MAKE PAYMENT" class="sbtn" style="margin-top:-150px">
	<?php include("ftr.php");?>
	</form>
	</body>
</html>