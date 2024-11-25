<?php

include('authentication.php');
 ?>
 <!DOCTYPE html>
<html lang="en"> 

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Accreditation Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mystyle.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
  <style>
        table, th, td {
            border:1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 20px;
        }
        th {
            text-align: center;
        }
        /* form {
          overflow: auto;
        }
        div.card {

        } */
        .tbMap{
          margin-top: 0px;
        }
        .form-group2 {
          display: inline-block;
          margin-right: 10px;
        }
    </style>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
              Add University TH marks
            <br/>
            <?php
                // // echo $_SESSION['auth_user_faculty'];
                // // echo $_GET['s_id'];
                // require 'db.php';
                // $select = "select s_cname,s_course from subject_info where s_id ='".$_GET['s_id']."';";
                // $val= array();
                // if ($result = $con->query($select))
                // {
                //    while ($data = $result->fetch_assoc())
                //    {
                //         $val = $data;
                //       // echo $data['s_cname'];
                //     }
                // }
                // // echo $val['s_cname'];
                // // echo ' ';
                // // echo $val['s_course'];
            ?>
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">University TH marks</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add University TH marks</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                  <form class="forms-sample" method="POST" action="" id="myForm">
                    
                    <div class="form-group form-group2">
                      <label for="Subjects" style="text-align:center;">Subject</label>
                        <select class="form-control show-tick" name="s_cname" id="course_name">
                          <option>Select</option>
                        <?php
                        require 'db.php';
                        $select = "select s_cname from subject_info where f_username ='".$_SESSION['auth_user_faculty']['login_user']."';";
                          $i=1;
                          if ($result = $con->query($select))
                              {
                                    while ($data = $result->fetch_assoc())
                                    {
                        
                        echo '<option value="'.$data['s_cname'].'">'.$data['s_cname'].'</option>';
                        
                      }}
                        ?>
                        
                        </select>
                    </div>

                    <div class="form-group form-group2">
                      <label for="batch">Batch</label>
                        <select class="form-control show-tick" name="s_batch" id="batch">
                            <option>Select</option>
                            <?php
                        require 'db.php';
                        $select = "select distinct s_batch from stud_info;";
                          $i=1;
                          if ($result = $con->query($select))
                              {
                                    while ($data = $result->fetch_assoc())
                                    {
                        if ($data['s_batch'] != "")
                          echo '<option value="'.$data['s_batch'].'">'.$data['s_batch'].'</option>';
                        
                      }}
                        ?>
                        </select>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2"  style="display: inline-block; margin-right: 10px;">Submit</button>
                    <button class="btn btn-light" onclick="myFunction()">Reset</button>
                  </form>

              
              <?php
              if(isset($_POST['s_cname']) && isset($_POST['s_batch']) && isset($_POST['submit'])){
                  require 'db.php';
                  $select = "select s_id,s_cname,s_course from subject_info where s_cname ='".$_POST['s_cname']."';";
                  $val= array();
                  if ($result = $con->query($select))
                  {
                    while ($data = $result->fetch_assoc())
                    {
                          $val = $data;
                        // echo $data['s_cname'];
                      }
                  }
                  // echo $val['s_cname'];
                  // echo ' ';
                  echo $val['s_course'];
                  // echo $_GET['s_batch'];
                  $table_name = $val['s_course'] . "_th_marks";
                  $s_id = $val['s_id'];
              ?>
              <h4 class="card-title">Add University TH marks</h4>
              <?php
                echo '<h4>';
                echo $_POST['s_cname'];
                echo '   ';
                echo $_POST['s_batch'];
                echo '<br/>';
                echo '</h4>';
                $batch = $_POST['s_batch'];
                $_SESSION['s_batch'] = $batch;
                $_SESSION['s_id'] = $s_id;
              ?>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                  <?php
                    /// edit data
                    // if(isset($_POST['s_cname']) && isset($_POST['s_batch']) && isset($_POST['submit'])){
                    //     $s_cname= $_POST['s_cname'];
                    //     $s_batch= $_POST['s_batch'];
                        
                    //     // $query ="SELECT fullName, emailAddress FROM students WHERE courseId='$courseId'";
                    //     $select = "select s_name, s_id from stud_info where s_cname='$course_name' and s_batch='$batch'";

                    //     $result = $conn->query($query);
                    //     if($result->num_rows> 0){
                    //       $students= mysqli_fetch_all($result, MYSQLI_ASSOC);
                    //     }else{
                    //     $students=[];
                    //     }
                    // }
                  ?>
                  <form class="forms-sample" method="POST" name="th_data" action="" id="myForm">
                    <table width="100%">
                        <colgroup>
                            <col style="width: 10%;">
                            <col style="width: 20%;">
                            <col style="width: 40%;">
                            <col style="width: 10%;">
                            <col style="width: 10%;">
                            <!-- <col style="width: 10%;">
                            <col style="width: 10%;"> -->
                        </colgroup>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Seat No.</th>
                            <th>Name of Student</th>
                            <th>Insem</th>
                            <th>Endsem</th>
                            <!-- <th>Total</th>
                            <th>Target Level</th> -->
                        </tr>
                        <!-- <script>
                          var course_name = document.getElementById("course_name").innerHtml;
                          var batch = document.getElementById("batch").innerHtml;
                          <?php
                            // $variable='a';
                            // $course_name = 'course_name';
                            // $batch = 'batch';
                          ?>
                        </script> -->
                        <?php
                        // extract($_POST);
                            // $course_name = document.getElementById("course_name");
                            // $batch = document.getElementById("batch");
                            // $course_name = "<script>course_name</script>";
                            $batch= $_POST['s_batch'];
                            $course_name= $_POST['s_cname'];
                            // echo $course_name;
                            // $batch = "<script>batch</script>";
                            // echo $batch;
                            require 'db.php';
                            $select = "select s_name, s_id from stud_info where s_batch='$batch'";
                            if ($result = $con->query($select))
                            {
                                $index = 1;
                                while ($data = $result->fetch_assoc())
                                {
                                  echo '<tr>';
                                  echo "<td style='text-align: center'>" . $index . "</td>";
                                  echo "<td>" . $data['s_id'] . "</td>";
                                  echo "<td>" . $data['s_name'] . "</td>";
                                  echo "<td>" . '<input type="number" name="insem[]" style="height: 35px; width:44px;" id="num1" min="0" max="30" >' . "</td>";
                                  echo "<td>" . '<input type="number" name="endsem[]" style="height: 35px; width:44px;" id="num2" min="0" max="70" >' . "</td>";
                                  echo '</tr>';
                                  $index += 1;
                                }

                            }
                        ?>
                    </table>
                    <br/>
                    <div class="form-group">
                      <label for="Gender">Target Value</label>
                      <input type="number" min="0" max="100" class="form-control" id="examplegender" Name="s_target" required placeholder="Enter target value">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light" onclick="myFunction()">Reset</button>
                  </form>
                  <?php
                    }
                  ?>
                  </div>
                </div>
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
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>


</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['s_target']))
{
extract($_POST);
  // if(isset($_POST['sub']))  
  // {  
      require 'db.php';
      $select = "select s_cname,s_course from subject_info where s_id ='".$_SESSION['s_id']."';";
      $val= array();
      if ($result = $con->query($select))
      {
        while ($data = $result->fetch_assoc())
        {
              $val = $data;
            // echo $data['s_cname'];
          }
      }
      $s_course = $val['s_course'];
      $s_course .= "_th_marks";


      $select = "select s_name, s_id from stud_info;";
      $val= array();
      $index =0;
      if ($result = $con->query($select))
      {
          while ($data = $result->fetch_assoc())
          {
            // echo implode($data);
            $innerarr = array($data['s_name'], $data['s_id']);
            $val[$index] = $innerarr;
            $index = $index + 1;
            // echo $data['s_cname'];
          }
      }
      // echo $val[0][1];

      require 'db3.php';
      $query = "CREATE TABLE if not exists $s_course (
        `table_id` INT NOT NULL AUTO_INCREMENT,
        `seat_no` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `stud_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `insem_marks` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `endsem_marks` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `total_marks` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `target_level` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `target_level_val` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `s_batch` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        PRIMARY KEY (`table_id`));";

      $asd = mysqli_query($con,$query)or die(mysqli_error($con));
      if($asd)
      {
          // echo'<script>alert("table created successfully")</script>';
      }
      else
      {
          echo'<script>alert("Failed To create table")</script>';  
      }

      $insem=$_POST['insem'];
      $endsem=$_POST['endsem'];
      $ind = 0;
      // echo implode(" ",$t);
      // echo $s_target;
      // $batch = $_POST['s_batch'];
      $batch = $_SESSION['s_batch'];

      foreach($insem as $t2)  
      {
          // echo $insem[$ind];
          // echo '   ';
          // echo $endsem[$ind];
          // echo '<br/>';
          $i = (int)$insem[$ind];
          $e = (int)$endsem[$ind];
          $t = $i + $e;
          $target = "";
          if ($t >= $s_target && $e >= 28) {
            $target = "Y";
          } else {
            $target = "N";
          }
          
          $seat_no = $val[$ind][1];
          $stud_name = $val[$ind][0];


          $query = "INSERT INTO $s_course (`seat_no`, `stud_name`, `insem_marks`, `endsem_marks`, `total_marks`, `target_level`, `target_level_val`, `s_batch`) VALUES ('$seat_no','$stud_name','$i','$e','$t','$target', '$s_target', '$batch')";

          $asd = mysqli_query($con,$query)or die(mysqli_error($con));
              
          if($asd)  
          {  
          //   echo'<script>alert("Inserted Successfully")</script>';  
          }  
          else  
          {  
            echo'<script>alert("Failed To Insert")</script>';  
          }  

          $ind = $ind + 1;
      }

      // $asd = mysqli_query($con,$query)or die(mysqli_error($con));

      if ($asd)
      {
          echo '<script type="text/javascript">';
          echo " alert('Information Added Successfully');";
          echo 'window.location.href = "view_university_th_marks.php?s_id='.$_SESSION['s_id'].'";';
          echo '</script>';
      }
      else
      {
          echo '<script type="text/javascript">';
          echo 'window.location.href = "add_university_th_marks.php?s_id='.$_SESSION['s_id'].'";';
          echo '</script>';
      }
  }
?>
