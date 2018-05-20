<?php

include("Controller.php");
$o=new Controller();
$msg=$o->Csignin();
?>


<html>
<head>
<title> Sign In</title>
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>
				   
</head>
<body>
		
			
<div class="main-content">
	<div class="sap_tabs">	
		 
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
		 
			  <ul>
			  	  <li class="resp-tab-item"><span>Sign In</span></li>
				  
				  
			  </ul>		

			<div class=" resp-tab-content" >
				<div class="facts">
	
					<div class="login">
						<form action="" method="post">	
							<?php echo $msg; ?>
							<input placeholder="Email" name="email" type="text" required="">
							<input placeholder="Password" name="password" type="password" required="">
							
							
								<div class="button">
									<input type="submit" name="s" value="Sign In"/>
								</div>
								
						</form>
							<h3><a href="password recovery.php"> Forgot Password??</a></h3>
							<h3><a href="Sign Up.php"> New User</a></h3>
					</div>
				</div>
			</div>				        					            	      
			 	
		</div>	
		
	</div>
</div>
</body>
</html>