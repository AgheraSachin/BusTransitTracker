<?php
session_start();
error_reporting(0);
include("connection.php");

$a=$_SESSION['reservation_from'];
$b=$_SESSION['reservation_to'];
$date=$_SESSION['onward'];

if(isset($_REQUEST['n1']))
{
	
	$_SESSION['Bus_name']=$_REQUEST['n1'];
	$bus_name=$_SESSION['Bus_name'];
}

if(isset($_REQUEST['s']))
{
	$_SESSION['reservation_name']=$_REQUEST['name'];
	$_SESSION['reservation_age']=$_REQUEST['age'];
	$_SESSION['reservation_gender']=$_REQUEST['gender'];
	$_SESSION['reservation_mobile']=$_REQUEST['ph'];
	$_SESSION['reservation_email']=$_REQUEST['email'];
	$_SESSION['seat_count']=count($_REQUEST['cb']);
	$_SESSION['seat']=implode(",",$_REQUEST['cb']);
	
	header("location:reservation4.php");
	
}

$data=mysql_query("select * from reservation where Bus_Name='$bus_name' and Date_of_Journey='$date'") or die(mysql_error());
//$data1=mysql_fetch_array($data);


$rows = [];
while($data1 = mysql_fetch_array($data)) {
    $rows[] = $data1[10];
}






?>

<html>
<head>
<title>Reservation</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
    $('#submit').click(function() {
      checked = $("input[type=checkbox]:checked").length;
		
		}
      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
	});

</script>
	</head>
	<body>
		<?php include("mainheader.php");?>
	<form action="" method="post">

	<fieldset class="buspass_field1" >
		<legend style="margin-left:400px">Seat Layout & Passenger Detail</legend>
		<fieldset style="width:165px;height:auto;margin-left:50px;margin-top:100px;">
		
				<?php
				$seat_array=array("1","2","3","4","5","6","7","8","9","10","11","12","13",
									"14","15","16","17","18","19","20","21","22","23","24",
									"25","26","27","28","29","30","31","32","33","34","35",
									"36","37","38","39","40","41","42","43","44","45","46");
								
				$vb=implode(",",$rows);
				$ex=explode(",",$vb);
				
				$i=0;
				foreach($seat_array as $v)
				{
					
					if($ex[$i]==$v)
					{
						$i++;
						?>
					<input type="checkbox" checked="checked" name="cb[]" value="<?php echo $v;?>" disabled><?php echo $v;?>
					<?php 
					}
					else
					{
					?>
					<input type="checkbox" name="cb[]" value="<?php echo $v;?>"><?php echo $v;?>
					<?php 
					}
					}
			?>
			
		
		</fieldset>
		<table class="buspass" style="margin-top:-280px;margin-left:250px">
			<tr>
				<th>Name:<label style="color:red;">*</label></th>
				<td><input type="text" name="name" required=></td>
			</tr>
			<tr>
				<th>Age:<label style="color:red;">*</label></th>
				<td><input type="text" name="age" required=></td>
			</tr>
			<tr>
				<th>Gender:<label style="color:red;">*</label></th>
				<td><select name="gender" required=>
					<option value="Male">Male
					<option value="Female">Female
				</select></td>
			</tr>
			<tr>
				<th>PickUp Point:</th>
				<td><?php echo $a;?></td>
			</tr>
			<tr>
				<th>Dropoff Point:</th>
				<td><?php echo $b;?></td>
			</tr>
			<tr>
				<th>Mobile Number:<label style="color:red;">*</label></th>
				<td><input type="text" name="ph" required=></td>
			</tr>
			<tr>
				<th>Email:<label style="color:red;">*</label></th>
				<td><input type="email" name="email" required=></td>
			</tr>
		</table>
	</fieldset>
	<input type="submit" name="s" value="Submit" class="sbtn" id="submit" style="margin-top:-250px;" >
	<?php include("ftr.php");?>
	</form>
	</body>
</html>