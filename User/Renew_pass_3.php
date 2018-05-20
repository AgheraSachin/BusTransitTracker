<?php
error_reporting(0);
session_start();
include("connection.php");
$type=$_SESSION['renew_type'];
if($type=="student pass")
{
	$id=$_SESSION['renew_id'];
	$b=mysql_query("select * from bus_pass where pass_id='$id'") or die(mysql_error());
	$c=mysql_fetch_array($b);
	$fname=$c[1];
	$lname=$c[2];
	$email=$c[3];
	$address=$c[4];
	$gender=$c[5];
	$birthdate=$c[6];
	$passtype=$c[7];
	$path=$c[8];
	$path1=$c[9];
	$school_name=$c[10];
	$school_address=$c[11];
	
	$bonofied=$_FILES['file3']['name'];
	$bonofied1=$_FILES['file3']['tmp_name'];
	$bonofied2=$_FILES['file3']['type'];
	$path2="API/Rbonofied/".$bonofied;
	move_uploaded_file($bonofied1,$path2);
	
	$frm=$_REQUEST['frm'];
	$t1=$_REQUEST['t1'];
	$date=date("d/m/Y");
	$add1=$_REQUEST['radn'];
	$bus_pass_type=$_REQUEST['type'];
	if($add1==30){
	 $a=date('Y-m-d', strtotime($Date. ' + 30 days'));}
	else if($add1==60)
	{
		$a=date('Y-m-d', strtotime($Date. ' + 60 days'));
	}
	else if($add1==90)
	{
	 $a=date('Y-m-d', strtotime($Date. ' + 90 days'));
	}
	
	mysql_query("insert into renew_pass values('','$fname','$lname','$email','$address','$gender','$birthdate','$passtype','$path','$path1','$school_name','$school_address','$path2','$frm','$t1','$date','$add1','$a','$bus_pass_type')") or die(mysql_error());
}
else if($type=="passenger pass")
{
	
	$id=$_SESSION['renew_id'];
	$d=mysql_query("select * from bus_pass_passenger where pass_id='$id'") or die(mysql_error());
	$e=mysql_fetch_array($d);
	$fname1=$e[1];
	$lname1=$e[2];
	$email1=$e[3];
	$address1=$e[4];
	$gender1=$e[5];
	$birthdate1=$e[6];
	$passtype1=$e[7];
	$path1=$e[8];
	$path11=$e[9];
	
	$frm1=$_REQUEST['frm'];
	$t11=$_REQUEST['t1'];
	$date1=date("d/m/Y");
	$add11=$_REQUEST['radn'];
	$bus_pass_type1=$_REQUEST['type'];
	if($add11==30){
	 $a=date('Y-m-d', strtotime($Date1. ' + 30 days'));}
	else if($add11==60)
	{
		$a=date('Y-m-d', strtotime($Date1. ' + 60 days'));
	}
	else if($add11==90)
	{
	 $a=date('Y-m-d', strtotime($Date1. ' + 90 days'));
	}
	
	mysql_query("insert into renew_pass values('','$fname1','$lname1','$email1','$address1','$gender1','$birthdate1','$passtype1','$path1','$path11','--','--','--','$frm1','$t11','$date1','$add11','$a','$bus_pass_type1')") or die(mysql_error());
	
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
	<?php
		if($type=="student pass")
		{
			?>	
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
			<td><?php echo $frm;?></td>
		</tr>
		
		<tr>
			<td>To:</td>
			<td><?php echo $t1;?></td>
		</tr>
		<tr>
			<td>Pass Issue Date:</td>
			<td><?php echo $date;?></td>
		</tr>
		
		<tr>
			<td>Pass Duration:</td>
			<td><?php echo $add1;?></td>
		</tr>
		<tr>
			<td>Pass Type:</td>
			<td><?php echo $bus_pass_type;?></td>
		</tr>
	</table>
	<?php }
		else if($type="passenger pass")
		{
			?>
			
			<table style="margin-left:80px;margin-top:30px;float:left">
		<tr>
			<th><h2>Personal Information</h2></th>
		</tr>
		<tr></tr>
			<tr>
			<td>First Name:</td>
			<td><?php echo $fname1;?></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><?php echo $lname1;?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><?php echo $email1;?></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><?php echo $address1;?></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><?php echo $gender1;?></td>
		</tr>
		<tr>
			<td>Birthdate:</td>
			<td><?php echo $birthdate1;?></td>
		</tr>
		<tr>
			<td>Pass Type:</td>
			<td><?php echo $passtype1;?></td>
		</tr>
	</table>
	<table style="padding-left:100px;margin-top:30px; ">
		<tr>
			<th><h2>School Information</h2></th>
		</tr>
		<tr></tr>
		<tr>
			<td>School Name:</td>
			<td></td>
		</tr>
		
		<tr>
			<td>School Address:</td>
			<td></td>
		</tr>
	</table>
	<table  style="padding-left:100px;margin-top:30px; ">
		<tr>
			<th><h2>Route Information</h2></th>
		</tr>
		<tr></tr>
		<tr>
			<td>From:</td>
			<td><?php echo $frm1;?></td>
		</tr>
		
		<tr>
			<td>To:</td>
			<td><?php echo $t11;?></td>
		</tr>
		<tr>
			<td>Pass Issue Date:</td>
			<td><?php echo $date1;?></td>
		</tr>
		
		<tr>
			<td>Pass Duration:</td>
			<td><?php echo $add11;?></td>
		</tr>
		<tr>
			<td>Pass Type:</td>
			<td><?php echo $bus_pass_type1;?></td>
		</tr>
	</table>
	
		<?php } ?>
	</fieldset>
	<a href="New_Pass_Payment.php" target="_blank"><input type="button" name="submit_pay" value="Make A Payment" class="sbtn" style="margin-top:-250px;"></a>
		</form>
<?php include("ftr.php");?>
</body>
</html>
