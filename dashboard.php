<?php

include('authentication.php');
 ?>

<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Attendance Management System</title>
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
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
  <style>
  .heading{
  font-size:20px;
  }
  .heading:hover {
  color: red;
  }
  </style>
</head>
<body>
  <div class="container-scroller">

<!-- Message Box -->
      
    <!-- partial:partials/_navbar.html -->
   <?php include "header.php"; ?>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      

      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
  
      <?php include "navbar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">

            <h3 class="page-title">
              Dashboard
            </h3>
          </div>
         <div class="col-md-12">
        <?php include "message.php"; ?>
      </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card gradient-1">
                <div class="card-body">

                  <h4 class="card-title">
                    <i class="fas fa-user"></i>
                    <a href="view_superadmin.php" style="color:black;">Superadmin Count</a>
                  </h4>
                  <?php 
                  include "db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from superadmin") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                  <h2 class="mb-5"><?php echo $Total;?> </a><span class="text-muted h4 font-weight-normal"></span></h2>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">
                    <i class="fas fa-user"></i>
                    <a href="view_faculty.php" style="color:black;">Faculty Count</a>
                    
                  </h4>
                   <?php 
                   include "db.php";
                        $count = 1;
                        $asd = mysqli_query($con,"select * from faculty_info") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    
                  <h2 class="mb-5"><?php echo $Total; ?><span class="text-muted h4 font-weight-normal"></span></h2>
                  
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">
                    <i class="fas fa-users"></i>
                    <a href="view_student.php" style="color:black;">Student Count</a>
                  </h4>
                   <?php 
                   include "db.php";
                        $count = 1;
                        $asd = mysqli_query($con,"select * from stud_info") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    
                  <h2 class="mb-5"><?php echo $Total; ?><span class="text-muted h4 font-weight-normal"></span></h2>
                  
                  
                </div>
              </div>
            </div> 


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       <?php include "footer.php";?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
