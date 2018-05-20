<?php
include("connection.php");
if(isset($_REQUEST['id1']))
{
	$a=$_REQUEST['id1'];
	mysql_query("delete from bus_info where bus_id='$a'") or die(mysql_error());
	header("location:Admin_RouteManagment.php");
}
if(isset($_REQUEST['n2']))
{
	$b=$_REQUEST['n2'];
	mysql_query("delete from Notification where Notification_id='$b'") or die(mysql_error());
	header("location:Notification_Managment.php");
}
?>
