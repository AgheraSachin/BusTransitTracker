<?php
include("connection.php");

	$a=mysql_query("select * from bus_info");
						


?>
<html>
	<head>
		<title>Rotue Manage</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="js/jquery.dataTables.css">
		
	</head>
	<body>
		
		<form action="" method="post">
		<?php include("Admin_header.php");?>

		
		<div class="Routeresult" style="overflow:scroll; margin-top:25px">
			<table id="example">
				<thead>
					<tr>
						<th>Bus Name</th>
						<th>From Place</th>
						<th>Ending Place</th>
						<th>Days</th>
						<th>Route</th>
						<th>Starting Point Time</th>
						<th>Ending Point Time</th>
						<th>Rote Time</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					</thead>
					<tbody>
				
						<?php if(mysql_num_rows($a)>0)
						{
							while($b=mysql_fetch_array($a))
							{
								?>
								<tr>
								<td><?php echo $b[1];?></td>
								<td><?php echo $b[2];?></td>
								<td><?php echo $b[3];?></td>
								<td><?php echo $b[4];?></td>
								<td><?php echo $b[5];?></td>
								<td><?php echo $b[6];?></td>
								<td><?php echo $b[7];?></td>
								<td><?php echo $b[8];?></td>
								<td><a href="Admin_update_Route.php?id=<?php echo $b[0];?>"><img src="images/edit.png" height="40px" width="40px" alt="Edit"></td>
								<td><a href="Admin_delete.php?id1=<?php echo $b[0];?>" name="delete"><img src="images/d.png" height="40px" width="40px" alt="Delete"></td>
								</tr>
								<?php
							}
						}
						?>
				<tbody>
			</table>	
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
			<script type="text/javascript" src="js/jquery.dataTables.js"></script>
			<script>
               $(function(){
                   $("#example").dataTable();
                     })
           </script>				
		</div>
		</form>
	</body>
</html>