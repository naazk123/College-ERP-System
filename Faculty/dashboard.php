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
</head>
<body>
  <div class="container-scroller">
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
          <?php include "message.php"; ?>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card gradient-1" >
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-users"></i>
                    Student Count
                  </h4>
                  <?php 
                  include "db.php";
                  $count = 0;
                  $asd = mysqli_query($con,"select * from stud_info") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                  <h3 class="mb-5"><?php echo $Total; ?> <span class="text-muted h4 font-weight-normal"></span></h3>
                                    
                </div>
              </div>
            </div>
            
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card gradient-1" >
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-users"></i>
                    SE Class Count
                  </h4>
                  <?php 
                  include "db.php";
                  $count = 0;
                  $se = mysqli_query($con,"select * from stud_info where s_class_year='SE'") or die (mysqli_error($con));
                  $Totalse = mysqli_num_rows($se);
                  ?>
                  <h6 class="mb-5">SE:<a href=""><?php echo $Totalse; ?></a> <span class="text-muted h4 font-weight-normal"></span></h6>
                </div>
              </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
              <div class="card gradient-1" >
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-users"></i>
                    Assigned Subject
                  </h4>
                  <?php
                  require 'db.php';
                            $select = "select * from subject_info where f_username ='".$_SESSION['auth_user_faculty']['login_user']."';";
                             $i=1;
                              if ($result = $con->query($select))
                                 {
                                       while ($data = $result->fetch_assoc())
                                       {
                  echo '<a href="view_subject.php?f_username='.$data["f_username"].'">
                          <i class="fas fa-edit" style="margin-right:3%;color: green" >'.$data["s_cname"].'</i><br/>'

                  ;}}
                  ?>

                  
                  

                                   
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
