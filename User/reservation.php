<?php
session_start();
include("connection.php");
?>

<html>
<head>
<title>Reservation</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/multi_step_form.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$("#datepicker").datepicker();
					minDate: "null";
					maxDate:"+4m";
				$( "#datepicker" ).datepicker( "option", "minDate", "null" );
				$( "#datepicker" ).datepicker( "option", "maxDate", "+4m" );
				$( "#datepicker" ).datepicker( "option", "dateFormat", "mm/dd/yy" );
				
			});
			
			$(document).ready(function(){
				$("#datepicker1").datepicker();
					minDate: "null";
					maxDate:"+4m";
				$( "#datepicker1" ).datepicker( "option", "minDate", "null" );
				$( "#datepicker1" ).datepicker( "option", "maxDate", "+4m" );
				$( "#datepicker1" ).datepicker( "option", "dateFormat", "mm/dd/yy" );
				
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
			function tbl_hd()
                {
                     document.getElementById("t1").style.visibility="hidden";
					
				}
				function display_return()
				{
					
						document.getElementById("t1").style.visibility="visible";	
							
						
				}
				function display_return1()
				{
					
						document.getElementById("t1").style.visibility="hidden";
						
				}
				
            
			
	</script>
</head>
<body onload="tbl_hd()">
<?php include("mainheader.php");?>

<form  action="reservation2.php" method ="post" enctype="multipart/form-data">
	
	<!-- fieldsets -->
	 <fieldset class="bus_reservation_field1" >
		
		<legend style="margin-left:450px;">Bus Reservation</legend>
		<table class="buspass">
				<!--<tr>
					<td><input type="radio" name="trip" value="one_way" checked="checked" id="oneway"  onclick="display_return1()">One way</td>
					<td><input type="radio" name="trip" value="round_way" id="roundtrip"  onclick="display_return()">Round Trip</td>
				</tr>-->
				<tr>
					<th>From:<label style="color:red;">*</label></th>
					<td><input type="text" name="from" placeholder="Enter Your From" id="tags" required=></td>
				</tr>
				<tr>
					<th>To:<label style="color:red;">*</label></th>
					<td><input type="text" name="to" placeholder="Enter Your To" id="tags1" required=></td>
				</tr>
				<tr>
					<th>Onward:<label style="color:red;">*</label></th>
					<td><input type="text" id="datepicker" name="onward" required= ></td>
				</tr>
				
				<tr id="t1">
					<th >Return:</th>
					<td><input type="text" id="datepicker1" name="return" ></td>
				</tr>
				
				</table>
				</fieldset>
				<input type="submit" name="s1" value="SEARCH" id="b1" class="sbtn" style="margin-top:-150px" />
	
</form>
<?php include("ftr.php");?>
</body>
</html>
