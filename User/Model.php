<?php
class model
{
	function model()
	{
		mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("project") or die(mysql_error());
	}
	function Msignin($a1,$a2)
	{
		$s=mysql_query("select * from user_registration where user_email='$a1' and user_password='$a2'") or die(mysql_error());
		return $s;
	}
	function Msignup1()
	{
		$a=mysql_query("select * from user_registration") or die(mysql_error());
		return $a;
	}
	function Msignup($a1,$a2,$a3,$a4,$a5,$a7,$a8,$a9,$a10)
	{
		mysql_query("insert into user_registration values('','$a1','$a2','$a3','$a4','$a5','$a7','$a8','$a9','$a10')") or die(mysql_error());
	}
	function MPasswordrecovery($email)
	{
		$s=mysql_query("select * from user_registration where user_email='$email'") or die(mysql_error());
		return $s;
	}
	function MSearchbus($a,$b)
	{
		$s=mysql_query("select * from bus_info where from_place='$a'and to_place='$b'") or die(mysql_error());	
		return $s;
	}
	function MUpdateprofile1($a)
	{
		$a1=mysql_query("select * from user_registration where user_id='$a'")or die(mysql_error());
		return $a1;
	}
	function MUpdateprofile2($a,$b,$b1,$b2,$b3,$b4,$b5,$b6,$b7)
	{
		$a2=mysql_query("update user_registration set user_fname='$b',user_lname='$b1',user_email='$b2',user_phone='$b3',user_gender='$b4',user_city='$b5',user_birthdate='$b6',user_address='$b7' where user_id='$a'") or die(mysql_error());
	}
	function MPasswordchange1($a1,$a)
	{
		$d=mysql_query("select * from user_registration where user_id='$a1' and user_password='$a'");
		return $d;
	}
	function MPasswordchange2($b,$a1)
	{
		mysql_query("update user_registration set user_password='$b' where user_id='$a1'");
	}
	
}
?>