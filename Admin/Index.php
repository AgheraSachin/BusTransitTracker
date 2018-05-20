<?php
session_start();
include("connection.php");
if(isset($_REQUEST['submit']))
{
	$a1=$_REQUEST['ademail'];
	$b1=$_REQUEST['adpassword'];
	$a=mysql_query("select * from Admin_login");
	while($b=mysql_fetch_array($a))
	{
		
	
		if($a1==$b[1] && $b1==$b[2])
		{
			$_SESSION['Admin_email']=$a1;
			header("location:Admin_welcomepage.php");
		}
		else
		{
			echo "Email or Password Wrong";
		}
	}
	
}
?>

<html>
	<head>
		<title>Bus Transit Tracker</title>
		<link rel="stylesheet" type="text/css" href="admincss.css">
	</head>
	<body>
		<form action="" method="Post">
		
		<div class="adlogin">
			<div class="adlogin1"><h4>Admin Login</h4><hr>
				<div class="adlogin2">
				<input type="text" name="ademail" placeholder="Enter Email">
				<input type="password" name="adpassword" placeholder="Enter Password">
				<a href="Admin_Forgotpassword.php" style="margin-left:300px;text-decoration:none;">-Forgott Password</a>
				<input type="Submit" name="submit" value="Login">
			</div>
				
			</div>
			
		</div>
		
		</form>
	</body>
</html>