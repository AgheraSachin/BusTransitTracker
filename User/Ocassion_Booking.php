<?php
session_start();
include("class.phpmailer.php");
include("connection.php");
if(isset($_POST['submit']))
		{
			$a=$_REQUEST['fname'];
			$b=$_REQUEST['lname'];
			$c=$_REQUEST['address'];
			$d=$_REQUEST['phone_num'];
			$email=$_REQUEST['email'];
			$f=implode(",",$_REQUEST['t']);
			$g=$_REQUEST['no_of_bus'];
			$h=$_REQUEST['Bus_journey'];
			$i=$_REQUEST['Bus_arrival'];
			$j=$_REQUEST['frm'];
			$k=$_REQUEST['to'];
			$oid="BTT".rand();
			
			
			
			$message="Your Order-Id is:".$oid;
		
			$subject="Your Bus Booking For Occasion Request :";
			$mail = new PHPMailer(); // create a new objects
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 587; // or 587
			$mail->IsHTML(true);
			$mail->Username ="r1641862@gmail.com";// sender's email id
			$mail->Password = "Sachin1234567890"; // der's gmail password
			$mail->SetFrom("r1641862@gmail.com"); // sender's email id
			$mail->Subject = "$subject"; //subject of email
			$mail->Body = "$message"; //message of email
			$mail->AddAddress($email); //receivers email
			if(!$mail->Send())
			{
				echo "Mailer Error: " . $mail->ErrorInfo;
								
			}
			else
			{
				
				mysql_query("insert into occassional_booking values('','$a','$b','$c','$d','$email','$f','$g','$h','$i','$j','$k','$oid','','')") or die(mysql_error());	
			}
		}
	
	

?>
<html>
	<head>
		<title>Ocassion Booking</title>
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<link rel="stylesheet" href="js/jquery-ui.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<!--<script src="js/jquery.min.js"></script>-->
	<script src="js/multi_step_form.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$("#datepicker").datepicker();
					minDate: "+2day";
					maxDate:"+4m";
				$( "#datepicker" ).datepicker( "option", "minDate", "+2day" );
				$( "#datepicker" ).datepicker( "option", "maxDate", "+4m" );
				$( "#datepicker" ).datepicker( "option", "dateFormat", "mm/dd/yy" );
				
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
	</script>
	</head>
	<body>
	<?php include("mainheader.php");?>
	<form  action="" method ="post" enctype="multipart/form-data">

		<fieldset class="buspass_field1" style="height:80%;" >
		<legend style="margin-left:450px;">Bus Booking For Occasion:Part1</legend>
                 <table class="buspass">
				<tr>
					<th>First Name:<label style="color:red;">*</label></th>
					<td><input type="text" name="fname" placeholder="Enter your FirstName"></td>
				</tr>
				<tr>
					<th>Last Name:<label style="color:red;">*</label></th>
					<td><input type="text" name="lname" placeholder="Enter your LastName"></td>
				</tr>
				<tr>
					<th>Address:<label style="color:red;">*</label></th>
					<td><textarea col="25" rows="5" name="address" placeholder="Enter your Address" style="resize:none;"></textarea></td>
				</tr>
				<tr>
					<th>Phone Number:<label style="color:red;">*</label></th>
					<td><input type="text" name="phone_num" placeholder="Enter your Phone num"></td>
				</tr>
				<tr>
					<th>Email:<label style="color:red;">*</label></th>
					<td><input type="email"  name="email" placeholder="Enter your Email"></td>
				</tr>
				</table>
				<input type="button" name="next" class="next_btn" value="Next" />
			</fieldset>
		<fieldset class="buspass_field">
		<legend style="margin-left:450px;">Bus Booking For Occasion:Part2 </legend>
		
				 <table class="Occasion_table">
				 <tr>
					<th>From:<label style="color:red;">*</label></th>
					<td><input type="text" name="frm" placeholder="Enter Source Place" id="tags"></td>
				</tr>
				<tr>
					<th>To:<label style="color:red;">*</label></th>
					<td><input type="text" name="to" placeholder="Enter Destination Place" id="tags1"></td>
				</tr>
                 <tr>
					<th>Number of Bus:<label style="color:red;">*</label></th>
					<td><input type="number" name="no_of_bus" placeholder="Enter no. of Bus" min="1" max="8"></td>
				</tr> 
                                  <tr>
					<th>Date of Bus Journey:<label style="color:red;">*</label></th>
					<td><input type="text" name="Bus_journey" placeholder="Enter date of journey" id="datepicker"></td>
				</tr>
                                 <tr>
					<th>Time of Bus Arrival:<label style="color:red;">*</label></th>
					<td><input type="text" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" id="24h" name=" Bus_arrival"/><label>Enter Time In 24 Hour Formate</label></td>
				</tr>
				<tr>
					<th>Bus type:<label style="color:red;">*</label></th>
					<td><?php
					$bus_type=array("VOLVO","SLEEPER AC","SITTING","SLEEPER");
						foreach($bus_type as $t)
						{
							?>
							<input type="checkbox" name="t[]" value="<?php echo $t; ?>"> <?php echo $t?>
							<?php
						}
					?>
				</tr>
				</table>
				<input type="button" class="pre_btn" value="Previous" />
				<input type="submit" class="submit" value="Submit" name="submit" />
	</fieldset >
	</form>
	<?php include("ftr.php");?>
</body>
</html>