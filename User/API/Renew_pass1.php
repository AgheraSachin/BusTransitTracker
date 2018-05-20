<?php
include("connection.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$email1=isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
	$Icard_no1=isset($_POST['icode'])? mysql_real_escape_string($_POST['icode']) : "";
	$bdate1=isset($_POST['bday'])? mysql_real_escape_string($_POST['bday']) : "";
	$type=isset($_POST['pt'])? mysql_real_escape_string($_POST['pt']) : "";
	if($type=="student pass")
	{
		$query=mysql_query("select * from bus_pass where email='$email1' and Icard_Id='$Icard_no1'");
		$a=mysql_fetch_array($query);
		if($Icard_no1==$a[19])
		{
			if($email1==$a[3])
			{
				if($bdate1==$a[6])
				{
					$json=array("msg"=>"Success","id"=>$a[0],"type"=>$a[7]);
				}
				else
				{
					$json=array("msg"=>"NotSuccess");
				}
			}
			else
			{
				$json=array("msg"=>"NotSuccess");
			}
		}
		else
		{
			$json=array("msg"=>"NotSuccess");
		}
	}
	else
	{
		$query=mysql_query("select * from bus_pass_passenger where email='$email1' and Icard_Id='$Icard_no1'");
		$a=mysql_fetch_array($query);
		if($Icard_no1==$a[16])
		{
			if($email1==$a[3])
			{
				if($bdate1==$a[6])
				{
					$json=array("msg"=>"Success","id"=>$a[0],"type"=>$a[7]);
				}
				else
				{
					$json=array("msg"=>"NotSuccess");
				}
			}
			else
			{
				$json=array("msg"=>"NotSuccess");
			}
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
		
?>