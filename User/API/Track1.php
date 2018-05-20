<?php

include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$lat = isset($_POST['lat']) ? mysql_real_escape_string($_POST['lat']) : "";
	$long = isset($_POST['long']) ? mysql_real_escape_string($_POST['long']) : "";
    $imei = isset($_POST['imei']) ? mysql_real_escape_string($_POST['imei']) : "";
	
	$qur=mysql_query("select * from tracking_2 where IMEI='$imei'");
	$data=mysql_fetch_array($qur);
	
	
  if($imei==$data[3])
  {
	  $update_data=mysql_query("update tracking_2 set lat='$lat',longi='$long' where IMEI='$imei'") or die(mysql_error());
	  if($update_data)
	  {
		  $a=mysql_query("select * from tracking_2 where IMEI='$imei'");
		  $b=mysql_fetch_array($a);
		 $json=array("msg"=>"Succesfully","lat"=>$b[1],"longi"=>$b[2]); 
	  }
	  else
	  {
		  $json=array("msg"=>"Not Success");
	  }
  }
  else
  {
	  $insert_data=mysql_query("insert into tracking_2 values('','$lat','$long','$imei')") or die(mysql_error());
	  if($insert_data)
	  {
		  $data=mysql_query("select * from tracking_2 where IMEI='$imei'");
		  $data1=mysql_fetch_array($data);
		  $json=array("msg"=>"Succesfully","lat"=>$data1[1],"longi"=>$data1[2]);
	  }
	  else
	  {
		  $json=array("msg"=>"Not Success");
	  }
  }

} else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

@mysql_close($conn);

/* Output header */
header('Content-type: application/json');
echo json_encode($json);