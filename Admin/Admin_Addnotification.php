<?php
include("connection.php");
if(isset($_REQUEST['new_notification']))
{
	$a=$_REQUEST['msg'];
	mysql_query("insert into Notification values('','$a')") or die(mysql_error());
	header("location:Notification_Managment.php");
}
?>
<html>
	<head>
		<title>Notification Managment</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
	</head>
	<body>
		<?php include("Admin_header.php");?>
		<form action="" method="post">
			<div class="Admin_add_notification" style="margin-left:250px;">
			<table class="dataenter1">
				<tr><th>Write Your New Notification</th></tr>
				<tr><td><textarea cols="40" rows="8"  name="msg"></textarea></td></tr>
				<tr><td><input type="submit" name="new_notification" value="Add New Notification"></td></tr>
			</table>
			</div>
		</form>
	</body>
</html>