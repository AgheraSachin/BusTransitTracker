<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
								{
										$a=strtoupper($_REQUEST['from']);
										$b=strtoupper($_REQUEST['to']);
										$sel=mysql_query("select * from bus_info");
										//$i=0;
										while($r=mysql_fetch_array($sel))
										{
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
												//$msg="bus exist";
									
												$select_bus=mysql_query("select * from bus_info where bus_id='".$r[0]."'");
												
												if(mysql_num_rows($select_bus)>0)
												{
													
													$row=mysql_fetch_array($select_bus);
													
													$id[]=$row[0];
													//$name[]=$row[1];
													//$starplace[]=$row[2];
													
													?>				
									
				<?php }
				else
				{
					$msg1="no bus exist";
				}
			}
		}

}

  echo json_encode(array('id'=>$id));
?>
		