<?php
error_reporting(0);
include("connection.php");
include("class.phpmailer.php");
$a=mysql_query("select * from  occassional_booking") or die(mysql_error());


?>
<html>
	<head>
		<title>Occasional Booking</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../Admin/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="js/jquery.dataTables.css">
		
	</head>
	<body >
		<?php include("Admin_header.php");?>
		<form action="" method="post">
		<div class="Routeresult" style="overflow:scroll;margin-top:25px;">
			<table id="example">
			
				<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Address</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Bus Type</th>
					<th>No Of Bus</th>
					<th>Date Of Journey</th>
					<th>Timing</th>
					<th>From</th>
					<th>To</th>
					<th>Order Id</th>
					<th>Amount To Pay</th>
					<th> Order Status</th>
					<th>Set Response</th>
				</tr>
				</thead>
				<tbody>
				<?php
				while($b=mysql_fetch_array($a))
				{
					?>
					<tr>
						<td><?php echo $b[1]; ?></td>
						<td><?php echo $b[2]; ?></td>
						<td><?php echo $b[3]; ?></td>
						<td><?php echo $b[4]; ?></td>
						<td><?php echo $b[5]; ?></td>
						<td><?php echo $b[6]; ?></td>
						<td><?php echo $b[7]; ?></td>
						<td><?php echo $b[8]; ?></td>
						<td><?php echo $b[9]; ?></td>
						<td><?php echo $b[10]; ?></td>
						<td><?php echo $b[11]; ?></td>
						<td><?php echo $b[12]; ?></td>
						<td><?php echo $b[13]; ?></td>
						<td><?php echo $b[14]; ?></td>
						<td><a href="Admin_occasional_response.php?n1=<?php echo $b[0];?>"><input type="button" name="b" value="SET RESPONSE"/></a></td>
						
					</tr>
					<?php	
				}
				?>
				</tbody>
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