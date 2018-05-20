<?php
session_start();
include("connection.php");

$a=mysql_query("select * from user_registration");
if($_SESSION['Admin_email']!="")
{

$user1=mysql_query("select * from user_registration");
$user=mysql_num_rows($user1);


$userpass1=mysql_query("select * from bus_pass");
$userpass=mysql_num_rows($userpass1);

$userpass2=mysql_query("select * from bus_pass_passenger");
$up2=mysql_num_rows($userpass2);

$total_pass=$userpass+$up2;

$reservation=mysql_query("select * from reservation");
$reservation1=mysql_num_rows($reservation);
}
else
{
	header("location:Index.php");
}

?>
<html>
	<head>
		<title>Welcome Admin</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link rel="stylesheet" type="text/css" href="js/jquery.dataTables.css">
		<link href="font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
	</head>
	<body>
		<div>
		<?php include("Admin_header.php"); ?>
		<div class="user_count">
			<h5>User:</h5><?php echo $user;?>
		</div>
		<div class="user_pass_request">
		<h5>Number of Pass Generate:</h5><?php echo $total_pass;?>
		</div>
		<div class="user_reservation_generate">
		<h5>Number of Reservation Occures:</h5><?php echo $reservation1;?>
		</div>
		</div>
		
		<div class="Routeresult" style="margin-top:280px;" >
		
			<table  id="example">
			<thead>
					<tr>
						<th>User FirstName</th>
						<th>User LastName</th>
						<th>User Email</th>
						<th>User Phone</th>
						<th>User Password</th>
						<th>User Gender</th>
						<th>User City</th>
						<th>User Birthdate</th>
						<th>User Address</th>
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
								<td><?php echo $b[9];?></td>
								
																
									</tr>
								<?php
							}
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
		
	</body>
</html>