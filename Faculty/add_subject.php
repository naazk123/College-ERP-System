<?php
include('db.php');
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
  <script>
var subjectObject = {
  "FE": {
    "I":[],
    "II":[]
  },
  "SE": {
    "III": [],
    "IV": []
  },
  "TE": {
    "V": [],
    "VI": []  
  },
  "BE": {
    "VII": [],
    "VIII": []
  }
}

window.onload = function() {
  var subjectSel = document.getElementById("yearOfStudy");
  var topicSel = document.getElementById("semester");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }

  subjectSel.onchange = function() {
   topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
}
</script>
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
              Add Subject
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Subject</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Subject</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Subject</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                  <!-- Form Enter Starts Here -->
                  <form class="forms-sample" method="POST" action="" id="myForm">
                    <div class="form-group">
                      <label for="Year">Year of Study</label>
                                    <select class="form-control show-tick" name="s_year" id="yearOfStudy">
                                    <option value="" selected="selected">Select Year</option>     
                                    <!-- <option >Select</option>
                                         <option value="FE">FE</option> 
                                          <option value="SE">SE</option> 
                                          <option value="TE">TE</option>
                                          <option value="BE">BE</option>  -->
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="Pattern">Pattern</label>
                                    <select class="form-control show-tick" name="s_pattern">
                                         <option >Select</option>
                                         <option value="2019">2019</option> 
                                          <option value="2023">2023</option> 
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="Department">Department</label>
                                    <select class="form-control show-tick" name="s_department">
                                         <option>Select</option>
                                         <option value="Computer">Computer</option> 
                                          <option value="Information Technology">Information Technology</option> 
                                    </select>
                    </div>
                    <div class="form-group">
                      <label for="Semester">Select Semester</label>
                           <select class="form-control show-tick" name="s_semester" id="semester">
                              <option value="" selected="selected">Select Semester</option>
                                 <!-- <option >Select</option>
                                 <option value="I">I</option> 
                                 <option value="II">II</option> 
                                 <option value="III">III</option>
                                 <option value="IV">IV</option>
                                 <option value="V">V</option>
                                 <option value="VI">VI</option>
                                 <option value="VII">VII</option>
                                 <option value="VIII">VIII</option> -->
                           </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Course Code(Subject Code)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_course" required placeholder="Enter the Course Code">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Department Course Code(Department Subject Code)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_code" required placeholder="Enter the Department Course Code">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Course Name(Subject Name)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_cname" required placeholder="Enter the Course Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Teaching Scheme(Hours/weeks)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_lecture" required placeholder="Enter the Lecture Hours">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_practical" required placeholder="Enter the Practical Hours">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_tutorial" required placeholder="Enter the Tutorial Hours">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Examination Scheme and Marks</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_midsem" required placeholder="Enter the Mid Sem Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_endsem" required placeholder="Enter the End Sem Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_termwork" required placeholder="Enter the Term work Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_tpractical" required placeholder="Enter the Practical Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_oralpre" required placeholder="Enter the Oral\Pre Marks">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_total" required placeholder="Enter the Total Marks">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Teaching Scheme(Hours/weeks)</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_clecture" required placeholder="Enter the Lecture Credit">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_cpractical" required placeholder="Enter the Practical Credit">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_ctutorial" required placeholder="Enter the Tutorial Credit">
                      <input type="text" class="form-control" id="exampleInputname1" Name="s_ctotal" required placeholder="Enter the Total Credit">
                    </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Name of Faculty</label>
                    <select class="browser-default custom-select" name="f_name">
                      <option>Select</option>
                      <?php

                      $query="select f_name from faculty_info";
                      $run=mysqli_query($con,$query);
                      while($row=mysqli_fetch_array($run)) {
                      echo  '<option value="'.$row['f_name'].'">'.$row['f_name'].'</option>';
                      // echo '<option value="'.$name.'">'.$name.'</option>';
                      }
                    ?>
                    </select>
                    </div>
                    
                    <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Faculty Username</label>
                    <select class="browser-default custom-select" name="f_username">
                      <option>Select</option>
                      
                    </select>
                    </div> -->

                    
                    
                    
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

$select="select f_username from faculty_info where f_name='$f_name';";

$val= array();
if ($result = $con->query($select))
{
    while ($data = $result->fetch_assoc())
    {
        $val = $data;
    }
}

$value = $val['f_username'];


$query="INSERT INTO `subject_info`(`s_year`, `s_pattern`, `s_department`, `s_semester`, `s_course`,`s_code`, `s_cname`, `s_lecture`, `s_practical`, `s_tutorial`, `s_midsem`, `s_endsem`, `s_termwork`, `s_tpractical`, `s_oralpre`, `s_total`, `s_clecture`, `s_cpractical`, `s_ctutorial`, `s_ctotal`, `f_name`, `f_username`, `s_status`) VALUES ('$s_year', '$s_pattern', '$s_department', '$s_semester', '$s_course','$s_code', '$s_cname', '$s_lecture', '$s_practical', '$s_tutorial', '$s_midsem', '$s_endsem', '$s_termwork', '$s_tpractical', '$s_oralpre', '$s_total', '$s_clecture', '$s_cpractical', '$s_ctutorial', '$s_ctotal', '$f_name', '$value', '1')";

$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Subject Added Successfully');";
  echo 'window.location.href = "view_subject.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill Again The Registration Form.');";
  echo 'window.location.href = "add_subject.php";';
  echo '</script>';
}

}
?>