<?php
// Include confi.php
include_once('connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
// Get data
	
    $from =isset($_POST['from']) ? mysql_real_escape_string($_POST['from']) : "";
	$a=strtoupper($from);
	
	$to=isset($_POST['to']) ? mysql_real_escape_string($_POST['to']) : "";
	$b=strtoupper($to);
	
	$sel=mysql_query("select * from bus_info");
	while($r=mysql_fetch_array($sel))
	{
		echo $r[0];
		
		echo $routes=$r[2].",".$r[5].",".$r[3];
		exit();
		$array=explode(",",$routes);
		$c=count($array);
		$r1=array();
		for($i=1;$i<=$c;$i++)
		{
			foreach($array as $v)
			{
				if($v==$a)
				{
					$ans=array_shift($array);
					array_push($r1,$ans);
				
				}
				
			}	
		}
		if(in_array($b,$array) && in_array($a,$r1))
		{
			
			$select_bus=mysql_query($select_bus1);
			if(mysql_num_rows($select_bus)>0)
			{
				$row=mysql_fetch_array($select_bus);
				$json[]=$row[0];
			}
			else
			{
			 $json=array("msg"=>"Not Success");
			}
			
		}
		
	}
}

 else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

@mysql_close($conn);
		

/* Output header */
header('Content-type: application/json');
echo json_encode(array('myk'=>$json));