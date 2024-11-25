<?php
session_start();
include('db.php');
include('authentication.php');

if(isset($_POST['logout_btn']))
{
  //session_destroy();
  unset($_SESSION['auth']);
  unset($_SESSION['auth_user']);

  $_SESSION['auth_status']="Logged out Successfully";
    header('location:login.php');

  // $_SESSION['status']="Logged out Successfully";
  // header('location:login.php');
  exit(0);
}
?>