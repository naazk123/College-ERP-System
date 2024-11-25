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
              Edit Faculty
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Faculty</a></li>
                <li class="breadcrumb-item"><a href="view_faculty.php">Faculty</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Faculty</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Faculty</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                   <?php 
                  include "db.php";
                  
                  $asd = mysqli_query($con,"select * from faculty_info where f_id='".$_GET['f_id']."'") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                  <?php while($fetch=mysqli_fetch_array($asd)){
                  extract($fetch)

                  ?>

                  <form class="forms-sample" method="POST" action="" id="">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Department</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $f_department;?>" Name="f_department" required placeholder="Enter the Department name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name of Faculty</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $f_name;?>"Name="f_name" required placeholder="Enter Name of Faculty">
                    </div>
                    <div class="form-group">
                      <label for="Gender">Gender</label>
                      <input type="text" class="form-control" id="examplegender" value="<?php echo $f_gender;?>" Name="f_gender" required placeholder="Enter Gender">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUserdate1">Date of Birth</label>
                      <input type="date" class="form-control" value="<?php echo $f_date;?>" Name="f_date" required placeholder="Enter Date on Birth">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mother's Name</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $f_mothername;?>" Name="f_mothername" required placeholder="Enter Name of Mother">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Category</label>
                      <input type="text" class="form-control" id="examplecategory" value="<?php echo $f_category;?>" Name="f_category" required placeholder="Enter Category eg open">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Religion/Caste</label>
                      <input type="text" class="form-control" id="examplecategory" value="<?php echo $f_religion;?>"Name="f_religion" required placeholder="Enter Religion">
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile Number</label>
                      <input type="text" class="form-control" id="exampleInputmobilenumber" value="<?php echo $f_mobile;?>" Name="f_mobile" required placeholder="Mobile Number"  onKeyPress="if(this.value.length==10) return false;"s>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $f_email;?>"  Name="f_email" required placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUseraddress1">Address</label>
                      <input type="textarea" class="form-control" value="<?php echo $f_address;?>" Name="f_address" required placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Pan Card</label>
                      <input type="text" class="form-control" id="examplepancard" value="<?php echo $f_pancard;?>"  Name="f_pancard" required placeholder="Enter Pan Card No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Aadhar Card</label>
                      <input type="text" class="form-control" id="exampleaadhar" value="<?php echo $f_aadharcard;?>"  Name="f_aadharcard" required placeholder="Enter Aadhar Card No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Bank Account no</label>
                      <input type="text" class="form-control" id="exampleaccount" value="<?php echo $f_bankaccount;?>" Name="f_bankaccount" required placeholder="Enter Bank Account no">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">IFSC Code</label>
                      <input type="text" class="form-control" id="exampleifsc" value="<?php echo $f_ifsc;?>"  Name="f_ifsc" required placeholder="Enter IFSC code ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">MICR Code</label>
                      <input type="text" class="form-control" id="examplemicrcode" value="<?php echo $f_micr;?>"  Name="f_micr" required placeholder="Enter MICR code">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">PF No</label>
                      <input type="text" class="form-control" id="examplepfno" value="<?php echo $f_pf;?>"  Name="f_pf" required placeholder="Enter PF no">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Passport No</label>
                      <input type="text" class="form-control" id="examplepassportno" value="<?php echo $f_passportno;?>"  Name="f_passportno" required placeholder="Enter Passport no">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $f_username;?>" Name="f_username" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $f_password;?>" Name="f_password" required placeholder="Password">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Update</button>
                    <a href="view_faculty.php" class="btn btn-light">Cancel</a>
                    
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
// $query="UPDATE `collector_info` SET `c_name`='$name1',
//                                     `c_mobile`='$mobilenumber',
//                                     `c_email`='$email',
//                                     `c_username`='$username',
//                                     `c_password`='$password'
//                                      WHERE `c_id`='$c_id';";

$query="UPDATE `faculty_info` SET `f_department`='$f_department',
                                  `f_name`='$f_name',
                                  `f_gender`='$f_gender',
                                  `f_date`='$f_date',
                                  `f_mothername`='$f_mothername',
                                  `f_category`='$f_category',
                                  `f_religion`='$f_religion',
                                  `f_mobile`='$f_mobile',
                                  `f_email`='$f_email',
                                  `f_address`='$f_address',
                                  `f_pancard`='$f_pancard',
                                  `f_aadharcard`='$f_aadharcard',
                                  `f_bankaccount`='$f_bankaccount',
                                  `f_ifsc`='$f_ifsc',
                                  `f_micr`='$f_micr',
                                  `f_pf`='$f_pf',
                                  `f_passportno`='$f_passportno',
                                  `f_username`='$f_username',
                                  `f_password`='$f_password'
                                   WHERE `f_id`='$f_id';";


$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Faculty Update Successfully');";
  echo 'window.location.href = "view_faculty.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill the update form again.');";
  echo 'window.location.href = "add_faculty.php";';
  echo '</script>';
}

}
?>