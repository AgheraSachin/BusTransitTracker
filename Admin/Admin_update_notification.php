<?php
include("connection.php");
if(isset($_REQUEST['n1']))
{
	$b=$_REQUEST['n1'];
	$a=mysql_query("select * from Notification where Notification_id='$b'") or die(mysql_error());
	
	if(isset($_REQUEST['update_notification']))
	{
		$msg=$_REQUEST['msg'];
		mysql_query("update Notification set Notification_content='$msg' where Notification_id='$b'") or die(mysql_error());
		header("location:Notification_Managment.php");
	}
	
}

?>
<html>
	<head>
		<title>Update Notification</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
		<link href="../font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet">
	</head>
	<body>
	<?php include("Admin_header.php");?>
		<form action="" method="post">
		<?php
			while($c=mysql_fetch_array($a))
			{
				?>
				<table style="margin-left:500px;margin-top:50px;">
					<tr><th>Update Your New Notification</th></tr>
					<tr><td><textarea cols="30" rows="5"  name="msg"><?php echo $c[1]; ?></textarea></td></tr>
					<tr><td><input type="submit" name="update_notification" class="sbtn" value="Update Notification"></td></tr>
			</table>
				<?php
			}
		?>
		
		</form>
	</body>
</html>
		