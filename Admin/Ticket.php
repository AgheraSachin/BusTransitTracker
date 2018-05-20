<?php
include("connection.php");
if(isset($_REQUEST['n1']))
{
	$b=$_REQUEST['n1'];
	$a=mysql_query("select * from reservation where id='$b'") or die(mysql_error());
	$p=mysql_fetch_array($a);
	
}

?>

<html>
	<head>
		<title>Generate Ticket</title>
		
	</head>
	<body>
		
		<form action="" method="post" enctype="multipart/form-data">
		
			<table align="center" border="2">
				<tr>
					<td><img src="../Admin/images/logo.png" height="60px" width="60px"></td>
					<td><h1><p>Bus Transit Tracker</p></h1></td>
				
				</tr>
				<hr></hr>
				<tr>
					<th>PNR NUMBER:</th>
					<td><?php echo "G".rand(0,9).rand(0,9).rand(0,9);?></td>
				</tr>
				<tr>
					<th>Jorney Date:</th>
					<td><?php echo $p[5];?></td>
				</tr>
				<tr>
					<th>Jorney From:</th>
					<td><?php echo $p[6];?></td>
				</tr>
				<tr>
					<th>Jorney To:</th>
					<td><?php echo $p[7];?></td>
				</tr>
				<tr>
					<th>Bus Name:</th>
					<td><?php echo $p[9];?></td>
				</tr>
				<tr>
					<th>Seat No:</th>
					<td><?php echo $p[10];?></td>
				</tr>
				<tr>
					<th>Passenger Name:</th>
					<td><?php echo $p[1];?></td>
				</tr>
				<tr>
					<th>Fair:</th>
					<td><?php echo $p[8];?></td>
				</tr>
				
				</table>
			
			<a href="javascript:window.print()"><input type="button" value="CREATE PDF"></a>
		</form>
	</body>
</html>