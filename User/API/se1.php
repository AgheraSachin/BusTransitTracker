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
		if($r>0)

		$routes=$r[2].",".$r[5].",".$r[3];
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
			
			
				$u=$r[0].",";
				$ex=explode(",",$u);
				$hg=array("a","b","c");
				print_r($ex);
				print_r($hg);
				//$fa=array_combine($hg,$ex);
				//print_r($fa);
				//$ki[]=$fa;
				//$json=array("msg"=>"Success","id"=>$u);
			
		}
		
		else
		{
			 $json=array("msg"=>"Not Success");
		}
			
	}
}

 else {
    $json = array("status" => 0, "msg" => "Request method not accepted");
}

exit();
@mysql_close($conn);
		

/* Output header */
header('Content-type: application/json');
echo json_encode($er=array('jjjj'=>$ki));
//echo json_encode($json);