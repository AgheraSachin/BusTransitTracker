<?php
error_reporting(0);
session_start();
include("connection.php");

if(isset($_REQUEST['s']))
{
	$id=$_REQUEST['id'];
	$a=mysql_query("select * from occassional_booking where Order_id='$id'") or die(mysql_error());
	$b=mysql_fetch_array($a);
	$_SESSION['oid']=$b[12];
	header("location:Ocassion_Booking_admin_response1.php");
}



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
				<th>Order Id:</th>
				<td><input type="text" name="id" required=></td>
			</tr>
		</table>
		<input type="submit" name="s" value="Check" class="sbtn"style="margin-top:50px;" >
		
	</fieldset>
				
	
</form>
<?php include("ftr.php");?>
</body>
</html>
