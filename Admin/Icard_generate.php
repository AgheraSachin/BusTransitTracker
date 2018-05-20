<?php
include("connection.php");
if(isset($_REQUEST['n1']))
{
	$b=$_REQUEST['n1'];
	$a=mysql_query("select * from bus_pass where Pass_id='$b'") or die(mysql_error());
	$p=mysql_fetch_array($a);
	$s=mysql_query("select * from admin_login");
	$p1=mysql_fetch_array($s);
}


?>

<html>
	<head>
		<title>Generate Icard</title>
		
	</head>
	<body>
		
		<form action="" method="post" enctype="multipart/form-data">
		
			<table align="center">
				<tr>
					<td><img src="../Admin/images/logo.png" height="60px" width="60px"></td>
					<td><h1><p>Bus Transit Tracker</p></h1></td>
				
				</tr>
			</table>
			<hr></hr>
			<table align="center">
				<tr>
					<td><h2>Identity Card</h2></td>
				</tr>
				<tr>
					<th>Icard No:</th>
					
					<td><?php echo  $p[19];?></td>
					<th>Icard Amount:</th>
					<td>5 RS.</td>
				</tr>
			</table>
			<hr></hr>
			
			<table align="center">
					<tr>
				<td rowspan=8><img src="../User/<?php echo $p[9];?>" height="150px" width="120px"></td>
			</tr>
			<tr>
				<td>Student Name: </td>
				<td><?php echo $p[1]." ".$p[2];?></td>
			</tr>
			<tr>
				<td>Student Address:</td>
				<td><?php echo $p[4];?></td>	
			</tr>
			<tr>
				<td>School/College Name:</td>
				<td><?php echo $p[10];?></td>
			</tr>
			<tr>
					<td>School Address:</td>
					<td><?php echo $p[11];?></td>
				</tr>
				<tr>
					<td>Pass From:</td>
					<td><?php echo $p[13];?></td>
					<td>Pass To:</td>
					<td><?php echo $p[14];?></td>
				</tr>
				<tr>
					<td>First Term From:</td>
					<td><?php echo date("d-m-Y")?></td>
					<td>End Term To:</td>
					<td><?php
							$Date1 = date("d-m-Y");
							echo $Date2 = date('d-m-Y', strtotime($Date1 . " + 180 day"));?></td>
				</tr>
				<tr>
					<td>Student's Sign:</td>
					<td></td>
					<td>Officer's Sign:</td>
					<td><img src="<?php echo $p1[3];?>" height="40px" width="140px" alt="sign"></td>
				</tr>
			</table>
			<hr></hr>
			<a href="javascript:window.print()"><input type="button" value="CREATE PDF" name="ICARD_PDF"></a>
		</form>
	</body>
</html>