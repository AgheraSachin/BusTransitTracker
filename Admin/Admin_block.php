<?php
include("connection.php");
if(isset($_REQUEST['n1']))
{
	$id=$_REQUEST['n1'];
	$data=mysql_query("delete from user_registration where user_id='$id'") or die(mysql_error());
	header("location:Admin_welcomepage.php");
}
?>