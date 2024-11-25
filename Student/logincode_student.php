<?php
session_start();

include'db.php';
//include'code.php';
if(isset($_POST['Login']))
{
      $username=$_POST['username'];
      $password=$_POST['password'];

      $log_query="select * from stud_login where username='".$_POST['username']."' and password='".$_POST['password']."'";

      $log_query_run=mysqli_query($con,$log_query) or die(mysqli_error($con));
      if(mysqli_num_rows($log_query_run)>0){

      foreach($log_query_run as $row){
            $user_id=$row['id'];
            $user_name=$row['name'];

      }

      $_SESSION['auth']=true;
      $_SESSION['auth_user']=[
      
            'user_id'=>$user_id,
            'user_name'=>$user_name,

      ];

      $_SESSION['status']="Logged in Successfully";
    header('location:student_page.php');
        
        
      }
     else
      {
          //  echo "<script>";
          // echo "alert('Email  or Password is Invalid');";
          // echo "window.location.href='login.php';";
          // echo "</script>";
           $_SESSION['auth_status']="Invalid Username or Password";
            header('location:student_login.php');
      }

}
else
{
    $_SESSION['status']="Access Denied";
    header('location:student_login.php');
}
?>