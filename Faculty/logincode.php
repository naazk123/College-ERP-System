<?php
session_start();

include'db.php';
//include'code.php';
if(isset($_POST['Login']))
{
      $username=$_POST['f_username'];
      $password=$_POST['f_password'];

      $log_query="select * from faculty_info where f_username='".$_POST['f_username']."' and f_password='".$_POST['f_password']."'";

      $log_query_run=mysqli_query($con,$log_query) or die(mysqli_error($con));
      if(mysqli_num_rows($log_query_run)>0){

      foreach($log_query_run as $row){
            $user_id=$row['f_id'];
            $user_name=$row['f_name'];
            $login_user=$row['f_username'];
            $user_designation=$row['f_designation'];

      }

      $_SESSION['auth_faculty']=true;
      $_SESSION['auth_user_faculty']=[
      
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'login_user'=>$login_user,     
            'user_designation'=>$user_designation

      ];
      $_SESSION['t_username']=$row['f_username'];
      $_SESSION['status_faculty']="Logged in Successfully";
    header('location:dashboard.php');
        
        
      }
     else
      {
          //  echo "<script>";
          // echo "alert('Email  or Password is Invalid');";
          // echo "window.location.href='login.php';";
          // echo "</script>";
           $_SESSION['auth_status_faculty']="Invalid Username or Password";
            header('location:login.php');
      }

}
else
{
    $_SESSION['status_faculty']="Access Denied";
    header('location:login.php');
}
?>