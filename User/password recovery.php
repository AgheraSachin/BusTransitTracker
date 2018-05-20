 <?php
include("Controller.php");
$o=new Controller();
$msg=$o->CPasswordrecovery();
?>     
<html>
<head>
<title> Sign In</title>
<link href="css/style1.css" rel='stylesheet' type='text/css' />
</head>
<body>

	<h1>  Forgot Password </h1>
	<div class="main-content">
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<h3>Reset Your Password??</h3>
				
				<p>We will send you an email that will allow you to reset your Password</p>
				<div class="login">
						<?php echo $msg; ?>
						<form action="" method="post">	
							<input placeholder="Email" name="email" type="text" required="">
							<div class="button">
									<input type="submit" name="s" value="Send Verification Email"/>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>