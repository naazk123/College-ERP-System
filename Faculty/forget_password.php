<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Forget Password</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">

    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              
              <h4>Forget Password</h4>
              <h6 class="font-weight-light">Enter your registered email to reset your password.</h6>
              <!-- Message Box -->
              <?php

            if(isset($_SESSION['auth_status']))
            {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?php echo $_SESSION['auth_status']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <?php
            unset($_SESSION['auth_status']);
            }
            ?>
      
            <form class="pt-3" action="forget_password_code.php" method="POST">
            <!-- <div class="form-group">
                <input type="email" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
            </div> -->
            <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="text" class="form-control" id="examplecategory" Name="f_username" required placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="exampleInputUserdate1">Date of Birth</label>
                <input type="date" class="form-control"  Name="f_date" required placeholder="Enter Date on Birth">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Mother Name</label>
                <input type="text" class="form-control" id="exampleInputname1" Name="f_mothername" required placeholder="Enter Name of Mother">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Enter Password</label>
                <input type="password" class="form-control form-control-lg" name="password1" id="exampleInputPassword1" placeholder="Password" onkeyup ="return verifyPassword()">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Reenter Your Password</label>
                <input type="password" class="form-control form-control-lg" name="password2" id="exampleInputPassword1" placeholder="Password" onkeyup ="return verifyPassword()">
            </div>
            <span id = "err_msg" style="color:red"> </span> <br><br>  
            <div class="mt-3">
                <input type="submit" name="Reset" value="Reset" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href=""></div>
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
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
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
  if(pw.length < 8) {
     document.getElementById("err_msg").innerHTML = "**Password length must be atleast 8 characters";
     return false;
  }

//maximum length of password validation
  if(pw.length > 15) {
     document.getElementById("err_msg").innerHTML = "**Password length must not exceed 15 characters";
     return false;
  } else {
     document.getElementById("err_msg").innerHTML = "<span style='color: green;'>Ok!</span>";
  }
}
</script>
