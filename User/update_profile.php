<?php

session_start();
//error_reporting(0);



?>

<html>
    <head>
        <title>
            Update Profile
        </title>
			<link rel="stylesheet" type="text/css" href="css/nav.css">
    </head>
    <body>
		<?php include("mainheader.php");
		
		$a2=$o->CUpdateprofile1();
		$o->CUpdateprofile2();
		?>
        <form action="" method="post">
        <fieldset class="updateprofile" >
            <legend style="margin-left:450px;">Update Profile</legend>
            <table class="passchange">
			
				
					
					<tr>
                    <th>First Name</th>
                    <td><input type="text" name="fname" value="<?php echo $a2[1]; ?>"></td>
                </tr>
                
                <tr>
                    <th>Last Name:</th>
                    <td><input type="text" name="lname" value="<?php echo $a2[2]; ?>"></td>
                </tr>
				<tr>
                    <th>Email:</th>
                    <td><input type="text" name="email" value="<?php echo $a2[3]; ?>"></td>
                </tr>
				<tr>
                    <th>Contact No:</th>
                    <td><input type="text" name="contactno" value="<?php echo $a2[4]; ?>"></td>
                </tr>
				<tr>
                    <th>Gender:</th>
                    <td>
						<?php
                            if($a2[6]=="Male")
                            {
                            ?>
                            <input type="radio" name="g" value="Male" checked="checked">Male
                            <input type="radio" name="g" value="Female">Female
                            <?php 

                            }
                            else if($a2[6]=="Female")
                                {
                                ?>
                                <input type="radio" name="g" value="Male">Male
                                <input type="radio" name="g" value="Female" checked="checked">Female
                                <?php 

                                }
                                else
                                {
                                ?>
                                <input type="radio" name="g" value="Male">Male
                                <input type="radio" name="g" value="Female">Female
                                <?php 
                            }
                        ?>
					<td>
                </tr>
				<tr>
                    <th>City:</th>
                    <td><input type="text" name="city" value="<?php echo $a2[7]; ?>"></td>
                </tr>
				<tr>
                    <th>Birth Date:</th>
                    <td><input type="text" name="birthdate" value="<?php echo $a2[8]; ?>"></td>
                </tr>
				<tr>
                    <th>Address:</th>
                    <td><textarea  cols="20" rows="5" name="address"style="resize:none;"><?php echo $a2[9]; ?></textarea></td>
                </tr>
                
				<tr>
                    <td><input  type="submit" value="Update Profile" name="s" class="sbtn"></td>
                </tr>
			
            </table>
            </fieldset>
        </form>
		<?php include("ftr.php");?>
    </body>
</html>