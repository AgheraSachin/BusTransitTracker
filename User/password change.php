<?php
session_start();
error_reporting(0);
?>

<html>
    <head>
        <title>
            Change Password
        </title>
			<link rel="stylesheet" type="text/css" href="css/nav.css">
    </head>
    <body>
		<?php include("mainheader.php");
		$msg=$o->CPasswordchange();?>
        <form action="" method="post">
        <fieldset class="fspasschange" >
            <legend style="margin-left:450px;">Password Change</legend>
            <table class="passchange">
			<?php echo $msg;?>
                <tr>
                    <th>Current Password:<label style="color:red;">*</label></th>
                    <td><input type="password" name="olp" required></td>
                </tr>
                
                <tr>
                    <th>New Password:<label style="color:red;">*</label></th>
                    <td><input type="password" name="np" required></td>
                </tr>
				<tr>
                    <th>Confirm Password:<label style="color:red;">*</label></th>
                    <td><input type="password" name="cp"  required></td>
                </tr>
               
		
				<tr>
                    <td><input  type="submit" value="Change Password" name="s" class="sbtn"></td>
                </tr>
			
            </table>
            </fieldset>
        </form>
		<?php include("ftr.php");?>
    </body>
</html>