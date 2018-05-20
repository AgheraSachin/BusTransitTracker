<?php
session_start();
include("connection.php");
?>

<html>
<head>
<title>Bus Search</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/multi_step_form.js"></script>
	<script type="text/javascript">
		
			
			
			$( function() {
    var availableTags = [
	"Ahmedabad","Amreli","Anand","Ankleshwar","Bharuch","Bhavnagar","Bhuj","Cambay","Dahod","Deesa",
	"Dholka","Gandhinagar","Godhra","Himatnagar","Idar","Jamnagar","Junagadh","Kadi","Kalavad","Kalol",
	"Kapadvanj","Karjan","Keshod","Khambhalia","Khambhat","Kheda","Khedbrahma","Kheralu","Kodinar",
	"Lathi","Limbdi","Lunawada","Mahesana","Mahuva","Manavadar","Mandvi","Mangrol","Mansa","Mehmedabad","Modasa"
	,"Morvi","Nadiad","Navsari","Padra","Palanpur","Palitana","Pardi","Patan","Petlad","Porbandar",
	"Radhanpur","Rajkot","Rajpipla","Rajula","Ranavav","Rapar","Salaya","Sanand","Savarkundla","Sidhpur","Sihor","Songadh",
	"Surat","Talaja","Thangadh","Tharad","Umbergaon","Umreth","Una","Unjha","Upleta","Vadnagar","Vadodara","Valsad",
	"Vapi","Veraval","Vijapur","Viramgam","Visnagar","Vyara","Wadhwan","Wankaner"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
	$( "#tags1" ).autocomplete({
      source: availableTags
    });
  } );          
</script>
</head>
	<body>
	<form action="" method="post">
		
		<?php include("firstheader.php");?>
		<div class="searchmain1">
			<i class="fa fa-columns fa-5x" aria-hidden="true"  style="margin-left:140px;margin-top:50px;"  ></i>
			<h3 style="margin-top:-55px;">GUJARAT'S MOST TRAVEL BRAND</h3>
		
		<div class="searchbus1">
			<label>From:</label>
			<input type="text" id="tags" name="from" >
			<label>To:</label>
			<input type="text" id="tags1" name="to" >
		</div>
			<input type="submit" name="s" class="sbtn" value="SEARCH" style="margin-top:50px;">
		
		</div>	
			<?php
		if(isset($_REQUEST['s']))
		{
			?>
				<div class="bs">
				<table >
					<tr>
						<th>Bus Name</th>
						<th>Strating From</th>
						<th>Ending To</th>
						<th>Route</th>
						<th>Startup Station Time</th>
						<th>Endup Station Time</th>
						<th>Route Station Time</th>
						
					</tr>
	
					<tr>
						<?php
								if(isset($_REQUEST['s']))
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
													
													?>				
					<td><?php echo $row[1]?></td>
					<td><?php echo $row[2]?></td>
					<td><?php echo $row[3]?></td>
					<td><?php echo $row[5]?></td>
					<td><?php echo $row[6]?></td>
					<td><?php echo $row[7]?></td>
					<td><?php echo $row[8]?></td>
					
					
				</tr>
				
				<?php }
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
		
		
			<?php include("ftr.php"); ?>
	</form>
	</body>
</html>
			
	</form>
	</body>
</html>