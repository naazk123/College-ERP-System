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
              Add Faculty
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Faculty</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Faculty</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Faculty</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                  <!-- Form Enter Starts Here -->
                  <form class="forms-sample" method="POST" action="" id="myForm">
                    <div class="form-group">
                      <label for="Department"> Select Department</label>
				 
                            <select class="form-control show-tick" name="f_department">
                                          <option >Select</option>
                                          <option value="Computer">Computer</option> 
                                          <option value="Information Technology ">Information Technology</option> 
                                          <option value="Civil">Civil</option>
                                          <option value="Mechanical">Mechanial</option>
                                          <option value="E&TC">E&TC</option>
                                          <option value="Instrumentation">Instrumentation</option>
                                          
                                    </select>
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name of Faculty</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="f_name" required placeholder="Enter Name of Faculty">
                    </div> 
                    
                    
                    <div class="form-group">
                      <label for="Gender">Gender</label>
                                    <select class="form-control show-tick" name="f_gender">
                                         <option value="Male">Male</option> 
                                          <option value="Female">Female</option> 
                                           <option value="Prefer No to Say">Prefer Not to Say</option> 
                                    </select>
                      <!-- <input type="text" class="form-control" id="examplegender" Name="f_gender" required placeholder="Enter Gender"> -->
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
                      <label for="Category"> Select Category</label>
         
                            <select class="form-control show-tick" name="f_category">
                                          <option >Select</option>
                                          <option value="Open">Open</option> 
                                          <option value="OBC">OBC</option> 
                                          <option value="SBC">SBC</option>
                                          <option value="SC">SC</option>
                                          <option value="ST">ST</option>
                                          <option value="SEBC">SEBC</option>
                            </select>
                     
                    </div>
                    
                     <div class="form-group">
                      <label for="Religion/Caste"> Select Religion/Caste</label>
         
                            <select class="form-control show-tick" name="f_religion">
                                          <option >Select</option>
                                          <option value="Hinduism">Hinduism</option> 
                                          <option value="Islam">Islam</option> 
                                          <option value="Christianity">Christianity</option>
                                          <option value="Judaism">Judaism</option>
                                          <option value="Buddhism">Buddhism</option>
                                          <option value="Jainism">Jainism</option>
                                          <option value="Sikhism">Sikhism</option>
                                          <option value="Zoroastrianism">Zoroastrianism</option>
                                          <option value="Other">Other</option>
                                          
                                          
                                    </select>
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile Number</label>
                      <input type="text" class="form-control" id="exampleInputmobilenumber" Name="f_mobile" required placeholder="Mobile Number"  onKeyPress="if(this.value.length==10) return false;"s>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" Name="f_email" required placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUseraddress1">Address</label>
                      <input type="textarea" class="form-control"  Name="f_address" required placeholder="Enter Address">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputUsername1">Pan Card</label>
                      <input type="text" class="form-control" id="exampleInputmobilenumber" Name="f_pancard" required placeholder="Pan Card"  onKeyPress="if(this.value.length==/^[a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}$/ return false;"s>
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputUsername1">Aadhar Card</label>
                      <input type="text" class="form-control" id="exampleInputmobilenumber" Name="f_aadharcard" required placeholder="Aadhar card"  onKeyPress="if(this.value.length==12) return false;"s>
                    </div>
                  
                    <div class="form-group">
                      <label for="exampleInputUsername1">Bank Account no</label>
                      <input type="text" class="form-control" id="exampleaccount" Name="f_bankaccount" required placeholder="Enter Bank Account no">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">IFSC Code</label>
                      <input type="text" class="form-control" id="exampleifsc" Name="f_ifsc" required placeholder="Enter IFSC code ">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">MICR Code</label>
                      <input type="text" class="form-control" id="examplemicrcode" Name="f_micr" required placeholder="Enter MICR code">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">PF No</label>
                      <input type="text" class="form-control" id="examplepfno" Name="f_pf" required placeholder="Enter PF no">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Passport No</label>
                      <input type="text" class="form-control" id="examplepassportno" Name="f_passportno" required placeholder="Enter Passport no">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" Name="f_username" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" Name="f_password" required placeholder="Password">
                    </div>
                    
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     <button class="btn btn-light" onclick="myFunction()">Reset</button>
                  </form>
                </div>
              </div>
            </div>
          
          </div>
        </div>
       <?php include "footer.php";?>
        <!-- partial -->
      </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


<script>
function myFunction() {
  document.getElementById("myForm").reset();
}

</script>
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

$query="INSERT INTO `faculty_info`(`f_department`, `f_name`, `f_gender`, `f_date`, `f_mothername`, `f_category`,`f_religion`, `f_mobile`, `f_email`, `f_address`, `f_pancard`, `f_aadharcard`, `f_bankaccount`, `f_ifsc`, `f_micr`,`f_pf`, `f_passportno`, `f_username`, `f_password`, `f_status`) VALUES ('$f_department','$f_name','$f_gender','$f_date','$f_mothername','$f_category','$f_religion','$f_mobile','$f_email','$f_address','$f_pancard','$f_aadharcard','$f_bankaccount','$f_ifsc','$f_micr','$f_pf','$f_passportno','$f_username','$f_password','1')";

$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Faculty Added Successfully');";
  echo 'window.location.href = "view_faculty.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill Again The Registration Form.');";
  echo 'window.location.href = "add_faculty.php";';
  echo '</script>';
}

}
?>