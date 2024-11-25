<?php
session_start();
if(!isset($_SESSION['auth_faculty'])){
	$_SESSION['auth_status_faculty']="Login to Access Dashboard";
	header("Location:login.php");
}
?>