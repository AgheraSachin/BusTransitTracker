<?php
session_start();
include("connection.php");


if(isset($_REQUEST['Submit']))
{
	$email1=$_REQUEST['email'];
	$Icard_no1=$_REQUEST['icode'];
	$bdate1=$_REQUEST['bday'];
	$type=$_REQUEST['pt'];
	if($type=="student pass")
	{
	
		$query=mysql_query("select * from bus_pass where email='$email1' and Icard_Id='$Icard_no1'") or die(mysql_error());
		$a=mysql_fetch_array($query);
		if($a[3]==$email1 && $a[19]==$Icard_no1)
		{
			if($a[6]==$bdate1)
			{
				$_SESSION['renew_id']=$a[0];
				$_SESSION['renew_type']=$a[7];
				header("location:Renew_pass_2.php");
			}
			else
			{
				echo "Your Birthdate is not found1";
			}
		}
	}
		else if($type=="passenger pass")
		{
			
		$query=mysql_query("select * from bus_pass_passenger where email='$email1' and Icard_Id='$Icard_no1'") or die(mysql_error());
		$a=mysql_fetch_array($query);
		if($a[3]==$email1 && $a[16]==$Icard_no1)
		{
			if($a[6]==$bdate1)
			{
				$_SESSION['renew_id']=$a[0];
				$_SESSION['renew_type']=$a[7];
				header("location:Renew_pass_2.php");
			}
			else
			{
				echo "Your Birthdate is not found";
			}
		}
		else
		{
			echo "Email Id or Icard Not found";
		}		
	}
		
	
	
	
}
?>
<html>
	<head>
		<title>Renew Pass</title>
		<link rel="stylesheet" type="text/css" href="css/nav.css">
	</head>
	<body>
		<?php include("mainheader.php");?>
		<form action="" method="post" enctype="multipart/form-data">
		
		 <fieldset class="fspasschange" >
			<legend style="margin-left:440px;">Bus Pass:Renew</legend>
			<table class="Renew_pass_table">
				<tr>
					<th>Email-id:<label style="color:red;">*</label></th>
					<td><input type="text" name="email" required></td>
				</tr>
				<tr>
					<th>ICard Code:<label style="color:red;">*</label></th>
					<td><input type="text" name="icode"  required></td>
				</tr>
				<tr>
					<th>Birthdate:<label style="color:red;">*</label></th>
					<td><input type="date" name="bday"  required></td>
				</tr>
				<tr>
					<th>Pass Type:<label style="color:red;">*</label></th>
					<td><input type="radio" name="pt" value="student pass">Student Pass
					<input type="radio" name="pt" value="passenger pass">Passenger Pass</td>
				</tr>
				<tr>
					<th></th>
					<td><input type="submit" name="Submit" value="Submit" class="sbtn" style="margin-left:-80px;margin-top:20px;"></td>
				</tr>
			</table>
		</fieldset>
		</form>
		<?php include("ftr.php");?>
	</body>
</html>