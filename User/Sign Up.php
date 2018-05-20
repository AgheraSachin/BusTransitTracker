<?php
	include("Controller.php");
	
	$O=new Controller();
	$msg=$O->Csignup();
	
?>
<html>
<head>
<title> Sign Up</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
 <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jqv.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
						
						$('#signup').validate({
							rules:
							{
								fname:
								{
									 required:true,maxlength:15, 
								},
								lname:
								{
									 required:true,maxlength:15, 
								},
								email:
								{
									required:true,
									 email: true
								},
								phone:
								{
									required:true,
									digits:true,

								},
								password:
								{
									required:true,maxlength:15,minlength:6, 
								},
								cpassword:
								{
									required:true,maxlength:15,minlength:6, 
								},
								city:
								{
									required:true,
								},
								address:
								{
									required:true,
								}
								
							},
							messages:
							{
								fname:{
									required:"Enter First Name",maxlength:"Allowed Maximum 15 char only",
								},
								lname:{
									required:"Enter Last Name",maxlength:"Allowed Maximum 15 char only",
								},
								email:{
									required:"Enter Email",
								},
								phone:{
									required:"Enter Phone Number",	
								},
								password:{
									required:"Enter Password",maxlength:"Allowed Maximum 15 char only",minlength:"Enter Minimum 5 char ",
								},
								cpassword:{
									required:"Enter Confirm Password",maxlength:"Allowed Maximum 15 char only",minlength:"Enter Minimum 5 char ",
								},
								city:
								{
									required:"Select City",
								},
								address:
								{
									required:"Enter Address",
								}	  
								
							},
							showErrors: function(errorMap, errorList) {
        if(errorList.length) {
            $("span").html(errorList[0].message);
        }
    }
						});
						
					});
					
				   </script>
				 

</head>
<body onload="disable_btn">

	
	

			
<div class="main-content">
	<div class="sap_tabs">	
		
		<div id="horizontalTab" >
		 
			  <ul>
			  	  <li class="resp-tab-item">Sign up</li>  
			  </ul>	
			 </div>
			<div class=" resp-tab-content" style="display: block; width: 100%; margin: 0px;" >
			<span></span>
			<?php echo $msg;?>
			
				<div class="facts">
	
					<div class="register">
					 
						<form action="" method="post" id="signup" enctype="multipart/form-data" >	
							<input placeholder="FirstName" type="text" name="fname" ><label id="msg1"></label>
							<input placeholder="LastName" type="text"  name="lname">
							<input placeholder="Email Address" type="text" name="email" >
							<input placeholder="Phone Number" type="text" name="phone" >
						    <input placeholder="Password" type="password" name="password" >	
							<input placeholder="Confirm Password" type="password" name="cpassword">
							<input placeholder="City" type="text" name="city" class="city" id="city" >	
							

								<select name="Gender" >
								<optgroup label="Gender"></optgroup>
								<option name="male" value="Male">Male</option>
								<option name="female" value="Feale">Female</option>
							</select>
					
					
							
							
					<div class="datearea">
							<select name="day" >
							<option value="">Day</option>
								<optgroup label="Day"></optgroup>
								<?php
						
								for($i=0;$i<=31;$i++)
								{
									?>
									<option value="<?php echo $i?>"><?php echo $i?></option>
									<?php
								}
								?>
									
								
							</select>
							<select name="Month" >
								<optgroup label="Month"></optgroup>
								<option value="">Month</option>
								<?php
						
								for($j=0;$j<=12;$j++)
								{
									?>
									<option value="<?php echo $j?>"><?php echo $j?></option>
									<?php
								}
								?>
									
								
							</select>
							<select name="Year" >
							<option value="">Year</option>
								<optgroup label="Year"></optgroup>
								<?php
						
								for($k=1947;$k<=2016;$k++)
								{
									?>
									<option value="<?php echo $k?>"><?php echo $k?></option>
									<?php
								}
								?>
									
								
							</select>
							</div>

							<textarea placeholder="Address" cols="10" rows="5" name="address" class="address" style="resize:none"></textarea>
							<!--<table style="margin-left:90px;">
								<tr>
									<td><input type="checkbox" name="accept" id="accepet"></td>
									<td style="color:white;">Accept Terms & Conditions</td>
								</tr>
							</table>
							-->
								<div class="button">
									<input type="submit" name="s" value="Create Account" onclick="return validate()" id="btn"/>
								</div>
								</div>
						</form>
					
				</div>
			</div>				        					            	      
			 	
			
		
	</div>
</div>
</body>
</html>