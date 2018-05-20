<?php
error_reporting(0);
include("connection.php");
if(isset($_REQUEST['id']))
{
	$a=$_REQUEST['id'];
	$b=mysql_query("select * from bus_info where bus_id='$a'") or die(mysql_error());

	if(isset($_REQUEST['Update_route']))
	{
	
		$a1=strtoupper($_REQUEST['nm']);
		$a2=strtoupper($_REQUEST['from']);
		$a3=strtoupper($_REQUEST['to']);
		$a4=strtoupper(implode(",",$_REQUEST['day']));
		$a5=strtoupper($_REQUEST['route']);
	
		mysql_query("update bus_info set bus_name='$a1',from_place='$a2',to_place='$a3',day='$a4',via='$a5' where bus_id='$a'") or die(mysql_error());
		header("location:Admin_RouteManagment.php");
	}
}

?>
<html>
	<head>
		<title>Update Route</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
	</head>
	<body>
		<form action="" method="post">
		<?php include("Admin_header.php");?>
		
		<div class="Routeresult" style="overflow:scroll">
			<table  class="dataenter">
			<?php 
						while($c=mysql_fetch_array($b))
							{
								?>
						<table class="dataenter">
							<tr>
								<th><label class="inputLabel"><h4>Enter Name of Bus:</h4></label></th>
								<td><input type="text" name="nm" Placeholder="Bus Name" required="" value="<?php echo $c[1];?>"></td>
							</tr>
							
							<tr>
								<th><label class="inputLabel"><h4>Enter From:</h4></label></th>
								<td><input type="text" name="from" Placeholder="Enter From Place" required="" value="<?php echo $c[2];?>"></td>
							</tr>
							<tr>
								<th><label class="inputLabel"><h4>Enter To:</h4></label></th>
								<td><input type="text" name="to" Placeholder="Enter To Place" required="" value="<?php echo $c[3];?>"></td>
							</tr>
							<tr>
								<th><label class="inputLabel"><h4>Select Days:</h4></label></th>
								<td><?php $h=array("SUNDAY","MONDAY","TUESDAY","WEDNESDAY","THRUSDAY","FRIDAY","SATURDAY");
									$ex=explode(",",$c[4]);
									$i=0;
									foreach($h as $v)
									{
										if($ex[$i]==$v)
										{
											$i++;
											?>
											<input type="checkbox" checked="checked" name="day[]" value="<?php echo $v;?>"><?php echo $v;?>
											<?php 
										}
										else
										{
										
										?>
											<input type="checkbox" name="day[]" value="<?php echo $v;?>"><?php echo $v;?>
										<?php 
										}
									}
								?>
								
								</td>
							</tr>
							<tr>
								<th><label class="inputLabel"><h4>Enter Route:</h4></label></th>
								<td><input type="text" name="route" Placeholder="Enter Route" required="" value="<?php echo $c[5];?>"></td>
							</tr>
							<tr>
								
								<td><input type="submit" name="Update_route" Value="Update Data"></td>
							</tr>
						</table>
					<?php
							}
							?>
			</div>
		</form>
	</body>
</html>