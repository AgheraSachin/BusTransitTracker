<?php
session_start();
include("connection.php");
$a=$_SESSION['id'];

$b=mysql_query("select * from user_registration where user_id='$a' ") or die(mysql_error());
$c=mysql_fetch_array($b);



?>

<html>
<head>
<title>New Pass</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<!--<script src="js/jquery.min.js"></script>-->
	<script src="js/multi_step_form.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$("#datepicker").datepicker();
				$( "#datepicker" ).datepicker( "option", "dateFormat", "dd/mm/yy" );
				
			});
			 $( function() {
    var availableTags = [
	"Ahmedabad","Amreli","Anand","Ankleshwar","Bharuch","Bhavnagar","Bhuj","Cambay","Dahod","Deesa",
	"Dholka","Gandhinagar","Godhra","Himatnagar","Idar","Jamnagar","Junagadh","Kadi","Kalavad","Kalol",
	"Kapadvanj","Karjan","Keshod","Khambhalia","Khambhat","Kheda","Khedbrahma","Kheralu","Kodinar",
	"Lathi","Limbdi","Lunawada","Mahesana","Mahuva","Manavadar","Mandvi","Mangrol","Mansa","Mehmedabad","Modasa"
	,"Morvi","Nadiad","Navsari","Padra","Palanpur","Palitana","Pardi","Patan","Petlad","Porbandar",
	"Radhanpur","Rajkot","Rajpipla","Rajula","Ranavav","Rapar","Salaya","Sanand","Savarkundla","Sidhpur","Sihor","Songadh",
	"Surat","Talaja","Thangadh","Tharad","Umbergaon","Umreth","Una","Unjha","Upleta","Vadnagar","Vadodara","Valsad",
	"Vapi","Veraval","Vijapur","Viramgam","Visnagar","Vyara","Wadhwan","Wankaner"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
	$( "#tags1" ).autocomplete({
      source: availableTags
    });
  } );
	function hide()
	{
			document.getElementById("buspass_edu").style.visibility="hidden";
	}
	function show()
	{
			document.getElementById("buspass_edu").style.visibility="visible";
	}
	
	</script>
</head>
<body>
<?php include("mainheader.php");?>

<form  action="New_Pass_2.php" method ="post" enctype="multipart/form-data">
	
	
	 <fieldset class="buspass_field1" >
		
		<legend style="margin-left:450px;">Bus Pass:Personal Details</legend>
			
		<table class="buspass">
				<tr>
					<th>First Name:<label style="color:red;">*</label></th>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<th>Last Name:<label style="color:red;">*</label></th>
					<td><input type="text" name="lname"  ></td>
				</tr>
				<tr>
					<th>Email:<label style="color:red;">*</label></th>
					<td><input type="text" name="email"  ></td>
				</tr>
				<tr>
					<th>Address:<label style="color:red;">*</label></th>
					<td><textarea col="10" rows="5" name="address"  style="resize:none;" required=></textarea></td>
				</tr>
				<tr>
					<th>Gender:<label style="color:red;">*</label></th>
					<td><input type="radio" name="gender" value="Male" checked="checked">Male
						<input type="radio" name="gender" value="Female">Female</td>
				</tr>
				<tr>
					<th>Birthdate:<label style="color:red;">*</label></th>
					<td><input type="date"  name="birthdate" required= ></td>
				</tr>
				<tr>
					<th>Pass Type:<label style="color:red;">*</label></th>
					<td><input type="radio" name="passtype" value="student pass" checked="checked" onclick="show()">Student Pass
						<input type="radio" name="passtype" value="passenger pass" onclick="hide()" >Passenger Pass</td>
				</tr>
				<tr>
					<th>Enter Your Identity Proof:<label style="color:red;">*</label></th>
					<td><input type="file" name="id_proof" accept=""required=></td>
				</tr>
				<tr>
					<th>Enter Your Photo:<label style="color:red;">*</label></th>
					<td><input type="file" name="pic" required=></td>
				</tr>
				</table>
			<input type="button" name="next" class="next_btn" value="Next" />
	</fieldset >
	<fieldset class="buspass_field">
		<legend style="margin-left:450px;">Bus Pass::Educational</legend>
		<table class="buspass_edu" id="buspass_edu">
				<tr>
					<th>School Name:/College Name:<label style="color:red;">*</label></th>
					<td><input type="text" name="sname" placeholder="Enter Your First Name" ></td>
				</tr>
				
				<tr>
					<th>School Address:/College Address:<label style="color:red;">*</label></th>
					<td><textarea col="10" rows="5" name="saddress" style="resize:none;" ></textarea></td>
				</tr>
				<tr>
					<th>Enter Your Bonofied Certificate:<label style="color:red;">*</label></th>
					<td><input type="file" name="file3" ></td>
				</tr>
				</table>
		<input type="button" class="pre_btn" value="Previous" />
		<input type="button" name="next" class="next_btn" value="Next" />
	</fieldset>
	<fieldset class="buspass_field">
		<legend style="margin-left:450px;">Bus Pass:Route Details</legend>
		<table class="buspass_route">
				<tr>
					<th>From:<label style="color:red;">*</label></th>
					<td><input type="text" name="from" placeholder="Enter Your Ending Place" id="tags" required=></td>
				</tr>
				<tr>
					<th>To:<label style="color:red;">*</label></th>
					<td><input type="text" name="to" placeholder="Enter Your Ending Place" id="tags1" required=></td>
				</tr>
				<tr>
					<th>Pass Issue Date:<label style="color:red;">*</label></th>
					<td><input type="text" value="<?php echo date("d/m/Y");?>" name="todate" readonly ></td>
				</tr>
				<tr>
					<th>Pass Duration:<label style="color:red;">*</label></th>
					<td><input type="radio" name="duration" value="30" checked="checked">30 Days
						<input type="radio" name="duration" value="60">60 Days
						<input type="radio" name="duration" value="90">90 Days</td>
				</tr>
				<tr>
					<th>Bus Pass Type:<label style="color:red;">*</label></th>
					<td><input type="radio" name="bus_pass_type" value="Local pass" checked="checked">Local Pass
						<input type="radio" name="bus_pass_type" value="Express pass">Express Pass</td>
				</tr>
				</table>
			<input type="button" class="pre_btn" value="Previous" />
		<input type="submit" class="submit" value="Submit" name="submit" />
	</fieldset>
	
	
	
</form>
<?php include("ftr.php");?>
</body>
</html>
