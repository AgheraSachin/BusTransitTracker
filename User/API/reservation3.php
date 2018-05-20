<?php
// Include confi.php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// Get data
	
	$bus_name = isset($_POST['bname']) ? mysql_real_escape_string($_POST['bname']) : "";
    $name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";
    $age= isset($_POST['age']) ? mysql_real_escape_string($_POST['age']) : "";
    $gender= isset($_POST['gender']) ? mysql_real_escape_string($_POST['gender']) : "";
    $email= isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
    $sp= isset($_POST['sp']) ? mysql_real_escape_string($_POST['sp']) : "";
    $ep= isset($_POST['ep']) ? mysql_real_escape_string($_POST['ep']) : "";
	$date=isset($_POST['date']) ? mysql_real_escape_string($_POST['date']) : "";
	$no=isset($_POST['no']) ? mysql_real_escape_string($_POST['no']) : "";
	$fare=isset($_POST['fare']) ? mysql_real_escape_string($_POST['fare']) : "";
	
  
// Insert data into data base
    $select_bus=mysql_query("select * from reservation where Bus_Name='$bus_name' and Date_of_Journey='$date' and Seta_No='$no'");
	
	if(mysql_num_rows($select_bus)>0)
	{
		$json = array( "msg" => "al");	
	}
	else{
		$sql = "INSERT INTO reservation (`id`, `Name`,`Age` ,`Gender`,`Email`, `Date_of_Journey`,`Start_point`,`End_point`,`Fare`,`Bus_Name`,`Seta_No`) VALUES
			('' ,'$name', '$age','$gender' ,'$email', '$date','$sp','$ep','$fare','$bus_name','$no');";
			
		 $qur = mysql_query($sql) or die(mysql_error());
		if ($qur) {
					$json = array("msg"=>"successfully");
					} else {
        $json = array("msg"=>"notsuccessfully");
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