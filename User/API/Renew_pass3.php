<?php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$type=$_POST['type'];
	if($type=="student pass")
{
	$id=$_POST['renew_id'];
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
	$path12="API/Rbonofied/".$bonofied;
	move_uploaded_file($bonofied1,$path12);
	
	
	$frm=$_POST['frm'];
	$t1=$_POST['t1'];
	$date=date("d/m/Y");
	$add1=$_POST['radn'];
	//$bus_pass_type=$_POST['type1'];
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
	
	$qur=mysql_query("insert into renew_pass values('','$fname','$lname','$email','$address','$gender','$birthdate','$passtype','$path','$path1','$school_name','$school_address','$path12','$frm','$t1','$date','$add1','$a','')") or die(mysql_error());
if($qur)
	{
		$json=array("msg"=>"Success");
	}
	else{
		$json=array("msg"=>"Not Success");
	}
}
else if($type=="passenger pass")
{
	
	$id=$_POST['renew_id'];
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
	
	$frm1=$_POST['frm'];
	$t11=$_POST['t1'];
	$date1=date("d/m/Y");
	$add11=$_POST['radn'];
	//$bus_pass_type1=$_POST['type1'];
	if($add11==30){
	 $a=date('Y-m-d', strtotime($Date. ' + 30 days'));}
	else if($add11==60)
	{
		$a=date('Y-m-d', strtotime($Date. ' + 60 days'));
	}
	else if($add11==90)
	{
	 $a=date('Y-m-d', strtotime($Date. ' + 90 days'));
	}
	
	$qur=mysql_query("insert into renew_pass values('','$fname1','$lname1','$email1','$address1','$gender1','$birthdate1','$passtype1','$path1','$path11','--','--','--','$frm1','$t11','$date1','$add11','$a','')") or die(mysql_error());
	if($qur)
	{
		$json=array("msg"=>"Success");
	}
	else{
		$json=array("msg"=>"Not Success");
	}
}
}
else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

	
	
echo json_encode($json);
?>