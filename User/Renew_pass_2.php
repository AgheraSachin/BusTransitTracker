<?php
session_start();
?>

<html>
<head>
<title>Renew Pass</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<script src="js/jquery.js"></script>
	<script src="js/multi_step_form.js"></script>
	<link rel="stylesheet" href="js/jquery-ui.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script>
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
	</script>
</head>
<body>
<?php include("mainheader.php");?>
<form  action="Renew_pass_3.php" method ="post" enctype="multipart/form-data">
	
	 <fieldset class="buspass_field1" >
		
		<legend style="margin-left:450px;">Bus Pass:Renew</legend>
			
		<table class="buspass">
				
				<tr>
					<th>From:<label style="color:red;">*</label></th>
					<td><input type="text" name="frm" placeholder="Enter Your Starting Place"  id="tags"></td>
				</tr>
				<tr>
					<th>To:<label style="color:red;">*</label></th>
					<td><input type="text" name="t1" placeholder="Enter Your Ending Place" id="tags1"></td>
				</tr>
				
				<tr>
					<th>Bonofied:</th>
					<td><input type="file" name="file3"></td>
				</tr>
				<tr>
					<th>Pass Issue Date:<label style="color:red;">*</label></th>
					<td><input type="text" value="<?php echo date("d/m/Y");?>" name="todate" readonly ></td>
				</tr>
				<tr>
					<th>Pass Duration:<label style="color:red;">*</label></th>
					<td><input type="radio" name="radn" value="30">30Days
					<input type="radio" name="radn" value="60">60Days
					<input type="radio" name="radn" value="90">90Days</td>
				</tr>
				<tr>
					<th>Bus Pass Type:<label style="color:red;">*</label></th>
					<td><input type="radio" name="type" value="Local Pass" checked="check">Local Pass
					<input type="radio" name="type" value="Express Pass">Express Pass</td>

				</tr>
				</table>	
	</fieldset>
	<input type="submit" class="sbtn" value="Submit" name="submit" style="margin-top:-250px;" />
	
</form>
<?php include("ftr.php");?>
</body>
</html>
