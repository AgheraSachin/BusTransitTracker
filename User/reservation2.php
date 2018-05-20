<?php
session_start();
include("connection.php");
?>

<html>
<head>
<title>Reservation</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	
	
		
	</head>
	<body>
	<form action="" method="post">
	<?php include("mainheader.php");?>
	<fieldset class="bus_reservation_field1" style="overflow:scroll">
	<legend style="margin-left:500px">Result</legend>
	<?php
		if(isset($_REQUEST['s1']))
		{
			
			?>
				<div class="bs" >
				<table>
					<tr>
						<th>Bus Name</th>
						<th>Strating From</th>
						<th>Ending To</th>
						<th>Route</th>
						<th>Startup Station Time</th>
						<th>Endup Station Time</th>
						<th>Route Station Time</th>
						<th>Select</th>
					</tr>
	
					<tr>
						<?php
								if(isset($_REQUEST['s1']))
								{
										$a=strtoupper($_REQUEST['from']);
										$_SESSION['reservation_from']=$a;
										$b=strtoupper($_REQUEST['to']);
										$_SESSION['reservation_to']=$b;
										$day=$_REQUEST['onward'];
										$_SESSION['reservation_date']=$day;
										$dt = strtotime($_REQUEST['onward']);
										$_SESSION['onward']=$_REQUEST['onward'];
										$day = strtoupper(date("l", $dt));
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
												//echo $r[0];
												
												$select_bus=mysql_query("select * from bus_info where bus_id='".$r[0]."'");
												
												if(mysql_num_rows($select_bus)>0)
												{
													$row=mysql_fetch_array($select_bus);
													$ex=explode(",",$row['day']);
													if(in_array($day,$ex))
													{
													?>

			
				
				
					<td><?php echo $row[1]?></td>
					<td><?php echo $row[2]?></td>
					<td><?php echo $row[3]?></td>
					<td><?php echo $row[5]?></td>
					<td><?php echo $row[6]?></td>
					<td><?php echo $row[7]?></td>
					<td><?php echo $row[8]?></td>
					<td><a href="reservation3.php?n1=<?php echo $row[1];?>"><input type="submit" name="select_bus" value="VIEW BUS" ></td>
					
				</tr>
				<?php }}
				else
				{
					$msg1="no bus exist";
				}
			}
		}
}
if(isset($msg1))
{	
	echo $msg1;
}?>
					</tr>
				</table>
				</div>
			<?php
		}
	?>
	</fieldset>
	<?php include("ftr.php");?>
	</form>
	</body>
</html>