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
              Edit Subject
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Subject</a></li>
                <li class="breadcrumb-item"><a href="view_faculty.php">Subject</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Subject</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Subject</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                   <?php 
                  include "db.php";
                  
                  $asd = mysqli_query($con,"select * from subject_info where s_id='".$_GET['s_id']."'") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                  <?php while($fetch=mysqli_fetch_array($asd)){
                  extract($fetch)

                  ?>

                  <form class="forms-sample" method="POST" action="" id="myForm">
                    <div class="form-group">
                      <label for="Year">Year of Study</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_year" 
                  value="<?php echo $s_year;?>" required placeholder="Enter the Year">
                    </div>
                    <div class="form-group">
                      <label for="Pattern">Pattern</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_pattern" 
                  value="<?php echo $s_pattern;?>" required placeholder="Enter the Pattern">
                    </div>
                    <div class="form-group">
                      <label for="Department">Department</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_department" 
                  value="<?php echo $s_department;?>" required placeholder="Enter the Department">
                    </div>
                    <div class="form-group">
                      <label for="Semester">Select Semester</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_semester" 
                  value="<?php echo $s_semester;?>" required placeholder="Enter the Semester No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Course Code(Subject Code)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_course" value="<?php echo $s_course;?>" required placeholder="Enter the Course Code">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Department Course Code(Department Subject Code)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_code" value="<?php echo $s_code;?>"required placeholder="Enter the Department Course Code">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Course Name(Subject Name)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_cname" 
                  value="<?php echo $s_cname;?>" required placeholder="Enter the Course Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Teaching Scheme(Hours/weeks)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_lecture" 
                  value="<?php echo $s_lecture;?>"  required placeholder="Enter the Lecture Hours">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_practical" 
                  value="<?php echo $s_practical;?>" required placeholder="Enter the Practical Hours">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_tutorial" 
                  value="<?php echo $s_tutorial;?>" required placeholder="Enter the Tutorial Hours">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Examination Scheme and Marks</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_midsem" 
                  value="<?php echo $s_midsem;?>" required placeholder="Enter the Mid Sem Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_endsem" 
                  value="<?php echo $s_endsem;?>" required placeholder="Enter the End Sem Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_termwork" 
                  value="<?php echo $s_termwork;?>" required placeholder="Enter the Term work Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_tpractical" 
                  value="<?php echo $s_tpractical;?>" required placeholder="Enter the Practical Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_oralpre" 
                  value="<?php echo $s_oralpre;?>" required placeholder="Enter the Oral\Pre Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_total" 
                  value="<?php echo $s_total;?>" required placeholder="Enter the Total Marks">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Teaching Scheme(Hours/weeks)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_clecture" 
                  value="<?php echo $s_clecture;?>" required placeholder="Enter the Lecture Credit">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_cpractical" 
                  value="<?php echo $s_cpractical;?>" required placeholder="Enter the Practical Credit">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_ctutorial" 
                  value="<?php echo $s_ctutorial;?>" required placeholder="Enter the Tutorial Credit">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_ctotal" 
                  value="<?php echo $s_ctotal;?>" required placeholder="Enter the Total Credit">
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Name of Faculty</label>
                    <input type="text" class="form-control" id="exampleInputname1" Name="f_name" 
                  value="<?php echo $f_name;?>" required placeholder="Enter the Faculty Name">
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Faculty Username</label>
                    <input type="text" class="form-control" id="exampleInputname1" Name="f_username" 
                  value="<?php echo $f_username;?>" required placeholder="Enter the Faculty Username"> 
                    </div>
   
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     <button class="btn btn-light" onclick="myFunction()">Reset</button>
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

$query="UPDATE `subject_info` SET `s_year`='$s_year',
                                  `s_pattern`='$s_pattern',
                                  `s_department`='$s_department',
                                  `s_semester`='$s_semester',
                                  `s_course`='$s_course',
                                  `s_code`='$s_code',
                                  `s_cname`='$s_cname',
                                  `s_lecture`='$s_lecture',
                                  `s_practical`='$s_practical',
                                  `s_tutorial`='$s_tutorial',
                                  `s_midsem`='$s_midsem',
                                  `s_endsem`='$s_endsem',
                                  `s_termwork`='$s_termwork',
                                  `s_tpractical`='$s_tpractical',
                                  `s_oralpre`='$s_oralpre',
                                  `s_total`='$s_total',
                                  `s_clecture`='$s_clecture',
                                  `s_cpractical`='$s_cpractical',
                                  `s_ctutorial`='$s_ctutorial',
                                  `s_ctotal`='$s_ctotal',
                                  `f_name`='$f_name',
                                  `f_username`='$f_username'
                                  WHERE `s_id`='$s_id';";


$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Subject Update Successfully');";
  echo 'window.location.href = "view_subject.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill the update form again.');";
  echo 'window.location.href = "add_subject.php";';
  echo '</script>';
}

}
?>