
<?php
  //nclude("db.php");
  session_start();
?>   




<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              
              <h4>Student Login</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="s_username" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="s_password" id="exampleInputPassword1" placeholder="Password"onkeyup ="return verifyPassword()">
                </div>
                <span id = "err_msg" style="color:red"> </span> <br><br>  
                <div class="mt-3">
                  <input type="submit" name="Login" value="Login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href=""></div>
                </div>
                
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/misc.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
</html>
<script>
  function verifyPassword() {
  var pw = document.getElementById("exampleInputPassword1").value;
  //check empty password field
  if(pw == "") {
     document.getElementById("err_msg").innerHTML = "**Fill the password please!";
     return false;
  }
 
 //minimum password length validation


//maximum length of password validation
  if(pw.length > 15) {
     document.getElementById("err_msg").innerHTML = "**Password length must not exceed 15 characters";
     return false;
  } else {
     document.getElementById("err_msg").innerHTML = "<span style='color: green;'>Ok!</span>";
  }
}
</script>
<?php
include'C:\xampp\htdocs\project\Student\db.php';
if(isset($_POST['Login']))
{
 echo $query="select * from stud_login where username='".$_POST['username']." ' and password='".$_POST['password']."'";
 $res=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
      {
            $row=mysqli_fetch_array($res);
            extract($row);

            $_SESSION['s_id']=$row['s_id'];
            $_SESSION['name']=$row['name'];
            $_SESSION['username']=$row['username'];
               
            echo "<script>";
            echo "alert('Login Successfully');";
            echo "window.location.href='student_page.php';";
            echo "</script>";
        
        
      }
     else
     {
          echo "<script>";
          echo "alert('Email or Password is Invalid');";        
          echo "</script>";
    }
}
?>