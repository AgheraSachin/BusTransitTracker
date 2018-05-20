<?php
include("connection.php");
if(isset($_REQUEST['n1']))
{
	$b=$_REQUEST['n1'];
	$a=mysql_query("select * from renew_pass where Pass_id='$b'") or die(mysql_error());
	$p=mysql_fetch_array($a);
	$s=mysql_query("select * from admin_login");
	$p1=mysql_fetch_array($s);
}

?>

<html>
	<head>
		<title>Generate Pass</title>
		
	</head>
	<body>
		
		<form action="" method="post" enctype="multipart/form-data">
		
			<table align="center">
				<tr>
					<td><img src="../Admin/images/logo.png" height="60px" width="60px"></td>
					<td><h1><p>Bus Transit Tracker</p></h1></td>
				
				</tr>
				<tr>
					<td></td>
					
					<td><h4>Monthly <?php echo $p['7'];?></h4></td>
				</tr>
				<tr>
					<td>Pass No:</td>
					<td><?php echo rand();?></td>
					<td>Pass Type:</td>
					<td><?php echo $p[16];?></td>
				</tr>
				<tr>
					<td>Pass From:</td>
					<td><?php echo date("d/m/Y");?></td>
					<td>Pass To:</td>
					<td>*****</td>
				</tr>
			</table>
			<hr></hr>
			<table align="center">
				<tr>
					<td>Passenger Name: </td>
					<td><?php echo $p[1]." ".$p[2];?></td>
				
				</tr>
				<tr>
					<td>Passenger Address:</td>
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
					<td>Pass Amount:</td>
					<td>305 RS</td>
				</tr>
				<tr>
					<td>Passenger's Sign:</td>
					<td></td>
					<td>Officer's Sign:</td>
					<td><img src="<?php echo $p1[3];?>" height="40px" width="140px" alt="sign"></td>
				</tr>
			</table>
			<td><img src="images/1to30.jpg"height="100px" width="700px" style="margin-left:90px;"></td>
			<hr></hr>
			<a href="javascript:window.print()"><input type="button" value="CREATE PDF"></a>
		</form>
	</body>
</html>