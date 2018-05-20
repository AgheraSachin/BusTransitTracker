<?php
// Include confi.php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$passtype=$_POST['pass_type']? mysql_real_escape_string($_POST['pass_type']) : "";

if($passtype=="student pass")
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$birthdate=$_POST['birthdate'];
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
	

	$school_name=$_POST['sname'];
	$school_address=$_POST['saddress'];
	$bonofied=$_FILES['bonofied']['name'];
	$bonofied1=$_FILES['bonofied']['tmp_name'];
	$bonofied2=$_FILES['bonofied']['type'];
	$path12="API/Nbonofied/".$bonofied;
	move_uploaded_file($bonofied1,$path12);
	
	
	$from=$_POST['from'];
	$to=$_POST['to'];
	$date=date("d/m/Y");
	$add=$_POST['duration'];
	$bus_pass_type=$_POST['bus_pass_type'];
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

	$qur=mysql_query("insert into bus_pass values('','$fname','$lname','$email','$address','$gender','$birthdate','$passtype','$path','$path1','$school_name','$school_address','$path12','$from','$to','$date','$add','$a','$bus_pass_type','$Icard_No')") or die(mysql_error());
	if($qur)
	{
		$json=array("msg"=>"Success");
	}
	else
	{
		$json=array("msg"=>"NotSuccess");
	}
}
else
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$birthdate=$_POST['birthdate'];
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



	
$from=$_POST['from'];
$to=$_POST['to'];
$date=date("d/m/Y");
$add=$_POST['duration'];
$bus_pass_type=$_POST['bus_pass_type'];
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

	$qur1=mysql_query("insert into bus_pass_passenger values('','$fname','$lname','$email','$address','$gender','$birthdate','$passtype','$path','$path1','$from','$to','$date','$add','$a','$bus_pass_type','$Icard_No')") or die(mysql_error());
	if($qur1)
	{
		$json=array("msg"=>"Success");
	}
	else
	{
		$json=array("msg"=>"NotSuccess");
	}
}

}
 else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}


@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);