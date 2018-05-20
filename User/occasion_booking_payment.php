<?php
session_start();
$id=$_SESSION['oid'];
//Include db configuration file
include 'connection.php';

//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'i3infotech10@gmail.com'; //Business Email

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PayPal Standard Payment Gateway Integration by CodexWorld</title>
</head>
<body>
<?php
	//Fetch products from the database
	$results =mysql_query("select * from occassional_booking where Order_id='$id'");
	$row = mysql_fetch_array($results);
?>
    
		
	
    <form action="<?php echo $paypalURL; ?>" method="post">
	<table>
		<tr>
			<td>Bus Order for Ocassonal Charge:</td>
			<td>5</td>
		</tr>
		<tr>
			<td>Service  Charge:</td>
			<td>500</td>
		</tr>
		<tr>
			<td>Total Amount : </td>
			<td><?php echo $total=$row['Pay_Amount']+500+5; ?></td>
		</tr>
		
		</table>
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
		<input type="hidden" name="item_name" value="Bus Booking For Occasion Charge">
       <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="amount" value="<?php echo $total=$row['Pay_Amount']+500+5; ?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
		<input type='hidden' name='return' value='http://localhost/paypal_integration_php/success.php'>
        
        <!-- Display the payment button. -->
       <!--  <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >-->
		<input type="submit" name="s" value="Make Payment">
    </form>
    
</body>
</html>
