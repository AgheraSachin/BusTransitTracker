<?php
include("connection.php");

	
		$id=$_REQUEST['n1'];
		$data=mysql_query("select * from occassional_booking where id='$id'");
		$data1=mysql_fetch_array($data);
	
	if(isset($_REQUEST['s']))
	{
	
		$amnt=$_REQUEST['pa'];
		$msg=$_REQUEST['rp'];
		
		mysql_query("update occassional_booking set pay_Amount='$amnt',Response='$msg' where id='$id'") or die(mysql_error());
		header("location:Admin_occasional.php");
	}
?>
<html>
	<head>
		<title>Occasional Booking Response</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../Admin/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
		
	</head>
	<body >
		<?php include("Admin_header.php");?>
		<form action="" method="post">
		<div class="Routeresult" style="overflow:scroll;">
		<table class="dataenter">
							
							<tr>
								<th><label class="inputLabel"><h4>Pay Amount:</h4></label></th>
								<td><input type="text" name="pa" placeholder="Enter Amount"></td>
							</tr>
							<tr>
								<th><label class="inputLabel"><h4>Response:</h4></label></th>
								<td><select name="rp"><option value="Confirm">Confirm</option>
														<option value="Not Confirm">Not Confirm</option>
								</select></td>
								
							</tr>
								
								<td><input type="submit" name="s" Value="Set Response"></td>
							</tr>
						</table>
		
		</div>

		</form>
	</body>
</html>