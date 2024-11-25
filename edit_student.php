<?php

include('authentication.php');
 ?>
 <!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Attendance Management System</title>
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include "header.php";?>
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
  
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include "navbar.php";?>
      <!-- partial -->
     <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Edit Student
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Student</a></li>
                <li class="breadcrumb-item"><a href="view_faculty.php">Student</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Student</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                   <?php 
                  include "db.php";
                  
                  $asd = mysqli_query($con,"select * from stud_info where s_id='".$_GET['s_id']."'") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                  <?php while($fetch=mysqli_fetch_array($asd)){
                  extract($fetch)

                  ?>

                  <form class="forms-sample" method="POST" action="" id="">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $s_name;?>" Name="s_name" required placeholder="Enter the Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name of Institute</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $s_institute;?>"Name="s_institute" required placeholder="Enter Name of Institute">
                    </div>
                    <div class="form-group">
                      <label for="Gender">Branch</label>
                      <input type="text" class="form-control" id="examplegender" value="<?php echo $s_branch;?>" Name="s_branch" required placeholder="Enter Branch">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUserdate1">Class Year</label>
                      <input type="text" class="form-control" value="<?php echo $s_class_year;?>" Name="s_class_year" required placeholder="Enter Class Year">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile Number</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $s_mb_no;?>" Name="s_mb_no" required placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" class="form-control" id="examplecategory" value="<?php echo $s_email;?>" Name="s_email" required placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Blood group</label>
                      <input type="text" class="form-control" id="examplecategory" value="<?php echo $s_blood_grp;?>"Name="s_blood_grp" required placeholder="Enter Blood group">
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <input type="textarea" class="form-control" id="exampleInputEmail1" value="<?php echo $s_address;?>"  Name="s_address" required placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUseraddress1">City</label>
                      <input type="text" class="form-control" value="<?php echo $s_city;?>" Name="s_city" required placeholder="Enter City">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">State</label>
                      <input type="text" class="form-control" id="examplepancard" value="<?php echo $s_state;?>"  Name="s_state" required placeholder="Enter State">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Pin</label>
                      <input type="text" class="form-control" id="exampleaadhar" value="<?php echo $s_pin;?>"  Name="s_pin" required placeholder="Enter Pin">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Parent's Mobile Number</label>
                      <input type="text" class="form-control" id="exampleaccount" value="<?php echo $s_parent_mb_no;?>" Name="s_parent_mb_no" required placeholder="Enter Parent's Mobile Number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Parent's Email id</label>
                      <input type="email" class="form-control" id="exampleifsc" value="<?php echo $s_parent_email;?>"  Name="s_parent_email" required placeholder="Parent's Email id">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $s_username;?>" Name="s_username" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $s_password;?>" Name="s_password" required placeholder="Password">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Update</button>
                    <a href="view_student.php" class="btn btn-light">Cancel</a>
                    
                  </form>
                <?php }?>
                </div>
              </div>
            </div>
          
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <?php include "footer.php";?>
        <!-- partial -->
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

<?php
include'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
extract($_POST);

// $query="UPDATE `faculty_info` SET `f_department`='$f_department',
//                                   `f_name`='$f_name',
//                                   `f_gender`='$f_gender',
//                                   `f_date`='$f_date',
//                                   `f_mothername`='$f_mothername',
//                                   `f_category`='$f_category',
//                                   `f_religion`='$f_religion',
//                                   `f_mobile`='$f_mobile',
//                                   `f_email`='$f_email',
//                                   `f_address`='$f_address',
//                                   `f_pancard`='$f_pancard',
//                                   `f_aadharcard`='$f_aadharcard',
//                                   `f_bankaccount`='$f_bankaccount',
//                                   `f_ifsc`='$f_ifsc',
//                                   `f_micr`='$f_micr',
//                                   `f_pf`='$f_pf',
//                                   `f_passportno`='$f_passportno',
//                                   `f_username`='$f_username',
//                                   `f_password`='$f_password'
//                                    WHERE `f_id`='$f_id';";

$query = "UPDATE `stud_info` SET `s_name`='$s_name',
                                `s_institute`='$s_institute',
                                `s_branch`='$s_branch',
                                `s_class_year`='$s_class_year',
                                `s_mb_no`='$s_mb_no',
                                `s_email`='$s_email',
                                `s_blood_grp`='$s_blood_grp',
                                `s_address`='$s_address',
                                `s_city`='$s_city',
                                `s_state`='$s_state',
                                `s_pin`='$s_pin',
                                `s_parent_mb_no`='$s_parent_mb_no',
                                `s_parent_email`='$s_parent_email',
                                `s_username`='$s_username',
                                `s_password`='$s_password'
                                WHERE `s_id`='$s_id';";


$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Student Updated Successfully');";
  echo 'window.location.href = "view_student.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill the update form again.');";
  echo 'window.location.href = "add_student.php";';
  echo '</script>';
}

}
?>