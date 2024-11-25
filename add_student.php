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
              Add Student
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Student</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Student</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Student</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                  <!-- Form Enter Starts Here -->
                  <form class="forms-sample" method="POST" action="" id="myForm">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_name" required placeholder="Enter the Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name of Institute</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_institute" required placeholder="Enter Name of Institute">
                    </div>
                   
                      <div class="form-group">
                      <label for="Department"> Select Department</label>
         
                            <select class="form-control show-tick" name="s_branch">
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
                      <label for="Class Year"> Select Class Year</label>
         
                            <select class="form-control show-tick" name="s_class_year">
                                          <option >Select</option>
                                          <option value="FE">FE</option> 
                                          <option value="SE">SE</option>
                                          <option value="TE">TE</option>
                                          <option value="BE">BE</option>
                                          
                                          
                                    </select>
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile No.</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_mb_no" required placeholder="Enter Mobile Number" onKeyPress="if(this.value.length==10) return false;"s>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" class="form-control" id="examplecategory" Name="s_email" required placeholder="Enter Email">
                    </div>
                       <div class="form-group">
                      <label for="Blood Group"> Select Blood Group</label>
         
                            <select class="form-control show-tick" name="s_blood_grp">
                                          <option>Select</option>
                                          <option value="A+">A+</option> 
                                          <option value="A−">A-</option> 
                                          <option value="B+">B+</option>
                                          <option value="B-">B-</option>
                                          <option value="AB+">AB+</option>
                                          <option value="AB-">AB-</option>
                                          <option value="O+">O+</option>
                                          <option value="O-">O-</option>
                                          
                                    </select>
                     
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputUsername1">Address</label>
                      <input type="textarea" class="form-control" id="exampleInputmobilenumber" Name="s_address" required placeholder="Address" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" Name="s_city" required placeholder="City">
                    </div>
                    <div class="form-group">
                      <label for="State"> Select State</label>
                     <select class="form-control show-tick" name="s_state">
                        <option >Select</option>
                        <option value="AN">Andaman and Nicobar Islands</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="AR">Arunachal Pradesh</option>
                        <option value="AS">Assam</option>
                        <option value="BR">Bihar</option>
                        <option value="CH">Chandigarh</option>
                        <option value="CT">Chhattisgarh</option>
                        <option value="DN">Dadra and Nagar Haveli</option>
                        <option value="DD">Daman and Diu</option>
                        <option value="DL">Delhi</option>
                        <option value="GA">Goa</option>
                        <option value="GJ">Gujarat</option>
                        <option value="HR">Haryana</option>
                        <option value="HP">Himachal Pradesh</option>
                        <option value="JK">Jammu and Kashmir</option>
                        <option value="JH">Jharkhand</option>
                        <option value="KA">Karnataka</option>
                        <option value="KL">Kerala</option>
                        <option value="LA">Ladakh</option>
                        <option value="LD">Lakshadweep</option>
                        <option value="MP">Madhya Pradesh</option>
                        <option value="MH">Maharashtra</option>
                        <option value="MN">Manipur</option>
                        <option value="ML">Meghalaya</option>
                        <option value="MZ">Mizoram</option>
                        <option value="NL">Nagaland</option>
                        <option value="OR">Odisha</option>
                        <option value="PY">Puducherry</option>
                        <option value="PB">Punjab</option>
                        <option value="RJ">Rajasthan</option>
                        <option value="SK">Sikkim</option>
                        <option value="TN">Tamil Nadu</option>
                        <option value="TG">Telangana</option>
                        <option value="TR">Tripura</option>
                        <option value="UP">Uttar Pradesh</option>
                        <option value="UT">Uttarakhand</option>
                        <option value="WB">West Bengal</option>
                    </select>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Pin</label>
                      <input type="text" class="form-control" id="examplepancard" Name="s_pin" required placeholder="Enter Pin">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Parent's Mobile No.</label>
                      <input type="text" class="form-control" id="exampleaadhar" Name="s_parent_mb_no" required placeholder="Enter Parent's Mobile Number"   onKeyPress="if(this.value.length==10) return false;"s>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Parent's Email id</label>
                      <input type="email" class="form-control" id="exampleaccount" Name="s_parent_email" required placeholder="Enter Parent's Email id">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Roll no</label>
                      <input type="text" class="form-control" id="examplepancard" Name="s_roll_no" required placeholder="Enter Roll No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">PRN NO(University)</label>
                      <input type="text" class="form-control" id="examplepancard" Name="s_prn" required placeholder="Enter PRN No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Enter Date of Birth</label>
                      <input type="date" class="form-control" id="ft_datefrom" Name="s_dob" required placeholder="Date of Birth">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Mother Name</label>
                      <input type="text" class="form-control" id="examplepancard" Name="s_mother_name" required placeholder="Enter the Mother Name">
                    </div>
                  
                    <div class="form-group">
                      <label for="exampleInputUsername1">Enter the Student Batch</label>
                      <input type="text" class="form-control" id="examplepancard" Name="s_batch" required placeholder="Enter the Student Batch (Eg 2019_2020)">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Enter the Admission Year Batch</label>
                      <input type="text" class="form-control" id="examplepancard" Name="s_admit_year" required placeholder="Enter the Student Admit Batch (Eg 2019_2020)">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Enter the Passout Year of Student</label>
                      <input type="text" class="form-control" id="examplepancard" Name="s_passout_year" required placeholder="Enter the Passout Year of Student (Eg 2022-2023)">
                    </div>
                    <div class="form-group">
                      <label for=""> Student Active Status (If regular Yes or if backlog no)</label>
         
                            <select class="form-control show-tick" name="s_active_status">
                                          <option >Select</option>
                                          <option value="Yes">Yes</option> 
                                          <option value="NO">No</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="">Is Admission Direct Second Year 
                      </label>
         
                            <select class="form-control show-tick" name="s_dsy">
                                          <option >Select</option>
                                          <option value="Yes">Yes</option> 
                                          <option value="NO">No</option>
                                    </select>
                     
                    
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" Name="s_username" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" Name="s_password" required placeholder="Password">
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

// $query = "INSERT INTO `stud_info`(`s_name`, `s_institute`, `s_branch`, `s_class_year`, `s_mb_no`, `s_email`, `s_blood_grp`, `s_address`, `s_city`, `s_state`, `s_pin`, `s_parent_mb_no`, `s_parent_email`,`s_username`,`s_password`, `s_status`) VALUES ('$s_name','$s_institute','$s_branch','$s_class_year','$s_mb_no','$s_email','$s_blood_grp','$s_address','$s_city','$s_state','$s_pin','$s_parent_mb_no','$s_parent_email','$s_username','$s_password','1')";
$query="INSERT INTO `stud_info`(`s_name`, `s_institute`, `s_branch`, `s_class_year`, `s_mb_no`, `s_email`, `s_blood_grp`, `s_address`, `s_city`, `s_state`, `s_pin`, `s_parent_mb_no`, `s_parent_email`, `s_roll_no`, `s_prn`, `s_dob`, `s_mother_name`, `s_batch`, `s_admit_year`, `s_passout_year`, `s_active_status`, `s_dsy`,  `s_username`, `s_password`, `s_status`) VALUES ('$s_name', '$s_institute', '$s_branch', '$s_class_year', '$s_mb_no', '$s_email', '$s_blood_grp', '$s_address', '$s_city', '$s_state', '$s_pin', '$s_parent_mb_no', '$s_parent_email', '$s_roll_no', '$s_prn', '$s_dob', '$s_mother_name', '$s_batch', '$s_admit_year', '$s_passout_year', '$s_active_status', '$s_dsy', '$s_username', '$s_password','1')";

$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Student Added Successfully');";
  echo 'window.location.href = "view_student.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill Again The Registration Form.');";
  echo 'window.location.href = "add_student.php";';
  echo '</script>';
}

}
?>