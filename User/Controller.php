<?php
include("model.php");
class Controller
{
	function Csignin()
	{
		session_start();
		if(isset($_REQUEST['s']))
		{
			$a1=$_REQUEST['email'];
			$a2=$_REQUEST['password'];
	
			  $o= new model();
			  $y=$o->Msignin($a1,$a2);
			  $s1=mysql_fetch_array($y);
	
				if(mysql_num_rows($y)==1)
				{
						$_SESSION['id']=$s1[0];
						$_SESSION['name']=$s1[1];
						$_SESSION['email']=$s1[3];
						$_SESSION['password']=$s1[2];
						header("location:welcome.php");
				}
				else
				{
						$msg="Enter Valid Username or Password";
						return $msg;
		
				}
		}
		
	}
	function Csignup()
	{
		if(isset($_REQUEST['s']))
		{
			$a1=$_REQUEST['fname'];
			$a2=$_REQUEST['lname'];
			$a3=$_REQUEST['email'];
			$a4=$_REQUEST['phone'];
			$a5=$_REQUEST['password'];
			$a6=$_REQUEST['cpassword'];		
			$a7=$_REQUEST['Gender'];
			$a8=$_REQUEST['city'];
			$a9=$_REQUEST['day']."/".$_REQUEST['Month']."/".$_REQUEST['Year'];
			$a10=$_REQUEST['address'];
				if($a5==$a6)
				{
					$v=new model();
					$v1=$v->Msignup1();
					$v2=mysql_fetch_array($v1);
					if($v2[3]==$a3)
					{
						$Email_used="Email is Already Used";
						return $Email_used;
					}
					else
					{
						$o=new model();
						$o->Msignup($a1,$a2,$a3,$a4,$a5,$a7,$a8,$a9,$a10);
						header("location:Sign in.php");
					}
				}
				else
				{
					$password_mismatch_msg="Password And Confirm Password Mismatch";
					return $password_mismatch_msg;
				}
		}
	}
	
	function CMainheader()
	{
		$a=$_SESSION['id'];
		if(!$_SESSION['id'])
		{
			header("location:Sign in.php");
		}
		
	}
	function Clogout()
	{
		session_start();
		unset($_SESION['name']);
		unset($_SESSION['id']);
		unset($_SESSION['password']);
		header("location:Index.php");
	}
	function CPasswordrecovery()
	{
		
		include("class.phpmailer.php");
		include("connection.php");

		if(isset($_POST['s']))
		{
			$subject="Your Password :";
			$email=$_REQUEST['email'];
			$o=new model();
			$s1=$o->MPasswordrecovery($email);
		
			
			$v=mysql_fetch_array($s1);
			$s2=$v['5'];
			$message="Your Password is:".$s2."<br/>"."<a href=\"http://localhost:1234/pra2/User/Sign in.php\">Click Here For Login</a>";
			$mail = new PHPMailer(); // create a new object
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
				$msg="Message has been sent to subscribers email";
				return $msg;
			}
		}
	}
	
	function CSearchbus()
	{
		if(isset($_REQUEST['s']))
		{
				$a=$_REQUEST['from'];
				$b=$_REQUEST['to'];
				$o=new model();
				$s=$o->MSearchbus($a,$b);
				$f=mysql_fetch_array($s);
				return$f;
		}
	}
	
	function CWelcomepage()
	{
		session_start();
		$a1=$_SESSION['id'];
	}
	function CUpdateprofile1()
	{
		//session_start();
		$a=$_SESSION['id'];
		$o=new model();
		$a1=$o->MUpdateprofile1($a);
		$a2=mysql_fetch_array($a1);
		return $a2;
	}
	function CUpdateprofile2()
	{	
		//session_start();
		$a=$_SESSION['id'];
		$o=new model();
	
		if(isset($_REQUEST['s']))
		{
			$b=$_REQUEST['fname'];
			$b1=$_REQUEST['lname'];
			$b2=$_REQUEST['email'];
			$b3=$_REQUEST['contactno'];
			$b4=$_REQUEST['g'];
			$b5=$_REQUEST['city'];
			$b6=$_REQUEST['birthdate'];
			$b7=$_REQUEST['address'];
			$o->MUpdateprofile2($a,$b,$b1,$b2,$b3,$b4,$b5,$b6,$b7);
		}
	}
	function CPasswordchange()
	{
		$o=new model();
		$a1=$_SESSION['id'];
		if(isset($_REQUEST['s']))
		{
				$a=$_REQUEST['olp'];
				$b=$_REQUEST['np'];
				$c=$_REQUEST['cp'];
			if($b==$c)
			{
				$d=$o->MPasswordchange1($a1,$a);
				
				$d1=mysql_fetch_array($d);
	
				if(mysql_num_rows($d) >0)
				{
						$o1=new model();
						$o1->MPasswordchange2($b,$a1);		
				}
			else
			{
				$msg= "Your old password not found";
				return $msg;
			}
			}
			else
			{
				$msg= "Your  New Password and Confirm Password Not Matched";
				return $msg;
			}
		}
	}	
}
?>
	