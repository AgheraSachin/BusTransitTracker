<?php
error_reporting(0);
session_start();
include("connection.php");

$passtype=$_REQUEST['passtype'];

if($passtype=="student pass")
{
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	$address=$_REQUEST['address'];
	$gender=$_REQUEST['gender'];
	$birthdate=$_REQUEST['birthdate'];
	$passtype=$_REQUEST['passtype'];
	
	$id_proof=$_FILES['id_proof']['name'];
	$id_proof1=$_FILES['id_proof']['tmp_name'];
	$id_proof2=$_FILES['id_proof']['type'];
	$path="API/Nid/".$id_proof;
	move_uploaded_file($id_proof1,$path);
	
	$id_pic=$_FILES['pic']['name'];
	$id_pic1=$_FILES['pic']['tmp_name'];
	$id_pic2=$_FILES['pic']['type'];
	$path1="API/Npic/".$id_pic;
	move_uploaded_file($id_pic1,$path1);

	$school_name=$_REQUEST['sname'];
	$school_address=$_REQUEST['saddress'];
	$bonofied=$_FILES['file3']['name'];
	$bonofied1=$_FILES['file3']['tmp_name'];
	$bonofied2=$_FILES['file3']['type'];
	$path2="API/Nbonofied/".$bonofied;
	move_uploaded_file($bonofied1,$path2);
	
	$from=$_REQUEST['from'];
	$to=$_REQUEST['to'];
	$date=date("d/m/Y");
	$add=$_REQUEST['duration'];
	$bus_pass_type=$_REQUEST['bus_pass_type'];
	$Icard_No= rand();
	if($add==30){
		$a=date('Y-m-d', strtotime($Date. ' + 30 days'));
	}
	else if($add==60)
	{
		$a=date('Y-m-d', strtotime($Date. ' + 60 days'));
	}
		else if($add==90)
	{
		$a=date('Y-m-d', strtotime($Date. ' + 90 days'));
	}

	mysql_query("insert into bus_pass values('','$fname','$lname','$email','$address','$gender','$birthdate','$passtype','$path','$path1','$school_name','$school_address','$path2','$from','$to','$date','$add','$a','$bus_pass_type','$Icard_No')") or die(mysql_error());
}
else
{
	$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$birthdate=$_REQUEST['birthdate'];
$passtype=$_REQUEST['passtype'];
$id_proof=$_FILES['id_proof']['name'];
	$id_proof1=$_FILES['id_proof']['tmp_name'];
	$id_proof2=$_FILES['id_proof']['type'];
	$path="API/Nid/".$id_proof;
	move_uploaded_file($id_proof1,$path);
	
	$id_pic=$_FILES['pic']['name'];
	$id_pic1=$_FILES['pic']['tmp_name'];
	$id_pic2=$_FILES['pic']['type'];
	$path1="API/Npic/".$id_pic;
	move_uploaded_file($id_pic1,$path1);

	
$from=$_REQUEST['from'];
$to=$_REQUEST['to'];
$date=date("d/m/Y");
$add=$_REQUEST['duration'];
$bus_pass_type=$_REQUEST['bus_pass_type'];
$Icard_No= rand();
if($add==30){
	 $a=date('Y-m-d', strtotime($Date. ' + 30 days'));
}
else if($add==60)
{
	 $a=date('Y-m-d', strtotime($Date. ' + 60 days'));
}
else if($add==90)
{
	 $a=date('Y-m-d', strtotime($Date. ' + 90 days'));
}

	mysql_query("insert into bus_pass_passenger values('','$fname','$lname','$email','$address','$gender','$birthdate','$passtype','$path','$path1','$from','$to','$date','$add','$a','$bus_pass_type','$Icard_No')") or die(mysql_error());
}


	

	
	
	
	
?>
<html>
<head>
<title>New Pass</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	
</head>
<body>
<?php include("mainheader.php");?>

<form  action="" method ="post" enctype="multipart/form-data">
<fieldset class="buspass_field1">
	
	<table style="margin-left:80px;margin-top:30px;float:left">
		<tr>
			<th><h2>Personal Information</h2></th>
		</tr>
		<tr></tr>
		<tr>
			<td>First Name:</td>
			<td><?php echo $fname;?></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><?php echo $lname;?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><?php echo $email;?></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><?php echo $address;?></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><?php echo $gender;?></td>
		</tr>
		<tr>
			<td>Birthdate:</td>
			<td><?php echo $birthdate;?></td>
		</tr>
		<tr>
			<td>Pass Type:</td>
			<td><?php echo $passtype;?></td>
		</tr>
	</table>
	<table style="padding-left:100px;margin-top:30px; ">
		<tr>
			<th><h2>School Information</h2></th>
		</tr>
		<tr></tr>
		<tr>
			<td>School Name:</td>
			<td><?php echo $school_name;?></td>
		</tr>
		
		<tr>
			<td>School Address:</td>
			<td><?php echo $school_address;?></td>
		</tr>
	</table>
	<table  style="padding-left:100px;margin-top:30px; ">
		<tr>
			<th><h2>Route Information</h2></th>
		</tr>
		<tr></tr>
		<tr>
			<td>From:</td>
			<td><?php echo $from;?></td>
		</tr>
		
		<tr>
			<td>To:</td>
			<td><?php echo $to;?></td>
		</tr>
		<tr>
			<td>Pass Issue Date:</td>
			<td><?php echo $date;?></td>
		</tr>
		
		<tr>
			<td>Pass Duration:</td>
			<td><?php echo $add;?></td>
		</tr>
		<tr>
			<td>Pass Type:</td>
			<td><?php echo $bus_pass_type;?></td>
		</tr>
	</table>
	</fieldset>
	<a href="New_Pass_Payment.php" target="_blank"><input type="button" name="submit_pay" value="Make A Payment" class="sbtn" style="margin-top:-250px;"></a>
</form>
<?php include("ftr.php");?>
</body>
</html>
