<?php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$type=$_POST['type'];
	$id=$_POST['id'];
	if($type=="student pass")
	{
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
		$school_name=$c[10];
		$school_address=$c[11];
		
		$json=array("id"=>$id,"fname"=>$fname,"lname"=>$lname,"email"=>$email,"address"=>$address,"gender"=>$gender,"birthdate"=>$birthdate,
					"type"=>$passtype,"school_name"=>$school_name,"school_address"=>$school_address);
	}
	else if($type=="passenger pass")
{
	
	
	$d=mysql_query("select * from bus_pass_passenger where pass_id='$id'") or die(mysql_error());
	$e=mysql_fetch_array($d);
	$fname1=$e[1];
	$lname1=$e[2];
	$email1=$e[3];
	$address1=$e[4];
	$gender1=$e[5];
	$birthdate1=$e[6];
	$passtype1=$e[7];
	
	$json=array("id"=>$id,"fname"=>$fname1,"lname"=>$lname1,"email"=>$email1,"address"=>$address1,"gender"=>$gender1,"birthdate"=>$birthdate1,
					"type"=>$passtype1);
	
	
}
}

else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

	
	
echo json_encode($json);
?>