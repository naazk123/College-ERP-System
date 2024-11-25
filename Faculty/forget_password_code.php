<?php
session_start();

include'db.php';
//include'code.php';
if(isset($_POST['Reset']))
{
      $email = $_POST['f_username'];
      $dob = $_POST['f_date'];
      $mothername = $_POST['f_mothername'];
      $password1 = $_POST['password1'];
      $password2 = $_POST['password2'];
      
      $log_query="select f_username,f_date,f_mothername from faculty_info where f_username='".$_POST['f_username']."";

      $log_query_run=mysqli_query($con,$log_query) or die(mysqli_error($con));
      if(mysqli_num_rows($log_query_run)>0){

      foreach($log_query_run as $row){
            $user_email=$row['f_username'];
            $user_mothername=$row['f_mothername'];
            $user_dob=$row['f_date'];
      }

      if ($password1 != $password2)
      {
        $_SESSION['auth_status']="Passwords not matching!!!";
        header('location:login.php');
      }
      if ($dob != $user_dob)
      {
        $_SESSION['auth_status']="DOB not matching!!!";
        header('location:login.php');
      }if ($mothername != $user_mothername)
      {
        $_SESSION['auth_status']="Mothername not matching!!!";
        header('location:login.php');
      }
      
      $query = "UPDATE `faculty_info` SET `f_password`='$password1'";
      $asd = mysqli_query($con,$query)or die(mysqli_error($con));

        if($asd)
        {

        }

        
    //   $_SESSION['auth']=true;
    //   $_SESSION['auth_user']=[
      
    //         'user_id'=>$user_id,
    //         'user_name'=>$user_name,
    //         'user_designation'=>$user_designation

    //   ];

    //   $_SESSION['status']="Logged in Successfully";
    // header('location:dashboard.php');
        
        
      }
     else
      {
          //  echo "<script>";
          // echo "alert('Email  or Password is Invalid');";
          // echo "window.location.href='login.php';";
          // echo "</script>";
           $_SESSION['auth_status']="Invalid Username or Password";
            header('location:login.php');
      }

}
else
{
    $_SESSION['status']="Access Denied";
    header('location:login.php');
}
?>