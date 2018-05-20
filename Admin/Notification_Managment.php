<?php
include("connection.php");
$a=mysql_query("select * from Notification");
?>
<html>
	<head>
		<title>Notification Managment</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="js/jquery.dataTables.css">
	</head>
	<body>
		<?php include("Admin_header.php");?>
		<div class="notificationclass">
				<a style="text-decoration:none; color:black;" href="Admin_Addnotification.php"><h3 style="margin-left:80%;" >Add New Notification</h3><i class="fa fa-bell fa-5x" style="margin-left:80%;"></i></a>
		</div>
		<div class="routeresult">
		<table id="example"  >
		<thead>
			<tr>
				<th>Content</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(mysql_num_rows($a)>0)
			{
				while($b=mysql_fetch_array($a))
				{
					?>
			<tr>
				<td><?php echo $b[1]; ?></td>
				<td><a href="Admin_update_notification.php?n1=<?php echo $b[0];?>"><img src="images/edit.png" alt="Edit" height="40px" width="40px"></td>
				<td><a href="Admin_delete.php?n2=<?php echo $b[0];?>"><img src="images/d.png" alt="Edit" height="40px" width="40px"></td>
			</tr>
			<?php
				}
			}?>
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