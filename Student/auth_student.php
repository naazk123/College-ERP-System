<?php
session_start();
if(!isset($_SESSION['auth'])){
	$_SESSION['auth_status']="Login to Access Student page";
	header("Location:student_login.php");
}
?>