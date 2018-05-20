<?php
include("connection.php");
if(isset($_REQUEST['add1']))
{
	 $a=strtoupper($_REQUEST['nm']);
	 $b=strtoupper($_REQUEST['from']);
	 $c=strtoupper($_REQUEST['to']);
	 $d=strtoupper(implode(",",$_REQUEST['day']));
	 $e=strtoupper($_REQUEST['route']);
	 $f=$_REQUEST['t1'];
	 $f1=$_REQUEST['t2'];
	 $f2=$_REQUEST['t3'];
	mysql_query("insert into bus_info values('','$a','$b','$c','$d','$e','$f','$f1','$f2')") or die(mysql_error());
	header("location:Admin_RouteManagment.php");

}
?>
<html>
	<head>
		<title>Rotue Manage</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
	</head>
	<body>
		<form action="" method="post">
		<?php include("Admin_header.php");?>
		<table class="dataenter">
							<tr>
								<th><label class="inputLabel"><h4>Enter Name of Bus:</h4></label></th>
								<td><input type="text" name="nm" Placeholder="Bus Name" required=""></td>
							</tr>
							
							<tr>
								<th><label class="inputLabel"><h4>Enter From:</h4></label></th>
								<td><input type="text" name="from" Placeholder="Enter From Place" required=""></td>
							</tr>
							<tr>
								<th><label class="inputLabel"><h4>Enter To:</h4></label></th>
								<td><input type="text" name="to" Placeholder="Enter To Place" required=""></td>
							</tr>
							<tr>
								<th><label class="inputLabel"><h4>Select Days:</h4></label></th>
								<td><input type="checkbox" name="day[]" Value="SUNDAY"> SUNDAY
									<input type="checkbox" name="day[]" Value="MONDAY"> MONDAY
									<input type="checkbox" name="day[]" Value="TUESDAY"> TUESDAY
									<input type="checkbox" name="day[]" Value="WEDNESDAY"> WEDNESDAY
									<input type="checkbox" name="day[]" Value="THRUSDAY"> THRUSDAY
									<input type="checkbox" name="day[]" Value="FRIDAY"> FRIDAY
									<input type="checkbox" name="day[]" Value="SATURDAY"> SATURDAY</th>
							</tr>
							<tr>
								<th><label class="inputLabel"><h4>Enter Route:</h4></label></th>
								<td><input type="text" name="route" Placeholder="Enter Route" required="" ></td>
							<tr>
							<tr>
								<th><label class="inputLabel"><h4>Enter StartUp Place Time:</h4></label></th>
								<td><input type="text" name="t1" Placeholder="Enter Time" required="" ></td>
							<tr>
							<tr>
								<th><label class="inputLabel"><h4>Enter Ending Place Time:</h4></label></th>
								<td><input type="text" name="t2" Placeholder="Enter Time " required="" ></td>
							<tr>
							<tr>
								<th><label class="inputLabel"><h4>Enter Via Time:</h4></label></th>
								<td><input type="text" name="t3" Placeholder="Enter Time" required="" ></td>
							<tr>
								
								<td><input type="submit" name="add1" Value="Enter Data"></td>
							</tr>
						</table>
		</form>
	</body>
</html>