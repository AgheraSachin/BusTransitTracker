<?php
session_start();
unset($_SESSION['Admin_email']);
header("location:Index.php");
?>
