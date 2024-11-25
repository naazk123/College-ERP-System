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
  <!-- <link rel="stylesheet" href="css/mystyle.css"> -->
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
        /* form {
          overflow: auto;
        }
        div.card {

        } */
        .tbMap{
          margin-top: 0px;
        }
    </style>
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
              Edit University TH marks
              <br/>
              <?php
                // echo $_SESSION['auth_user_faculty'];
                // echo $_GET['s_id'];
                require 'db.php';
                $select = "select s_cname,s_course from subject_info where s_id ='".$_GET['s_id']."';";
                $val= array();
                if ($result = $con->query($select))
                {
                   while ($data = $result->fetch_assoc())
                   {
                        $val = $data;
                      // echo $data['s_cname'];
                    }
                }
                echo $val['s_cname'];
                echo ' ';
                echo $val['s_course'];
                $table_name = $val['s_course'] . "_th_marks";
            ?>
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">University TH marks</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit University TH marks</li>
                </ol>
            </nav>
          </div>
          <!-- <div class="row">
            <div class="col-md-6 grid-margin stretch-card"> -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit University TH marks</h4>
                  <!-- <p class="card-description">
                    Please Fill the Details
                  </p> -->
                  
                  <!-- Form Enter Starts Here -->
                  <form class="forms-sample" method="POST" action="" id="myForm">
                    <div class="form-group">
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
                        <?php
                            require 'db3.php';
                            $select = "select * from $table_name;";
                            if ($result = $con->query($select))
                            {
                                $index = 1;
                                while ($data = $result->fetch_assoc())
                                {
                                  echo '<tr>';
                                  echo "<td style='text-align: center'>" . $index . "</td>";
                                  echo "<td>" . $data['seat_no'] . "</td>";
                                  echo "<td>" . $data['stud_name'] . "</td>";
                                //   echo "<td style='text-align: center'>" . $data['insem_marks'] . "</td>";
                                //   echo "<td style='text-align: center'>" . $data['endsem_marks'] . "</td>";
                                  echo "<td>" . '<input type="number" name="insem[]" style="height: 35px; width:44px;" value="'. $data['insem_marks'] . '" id="num1" min="0" max="30" >' . "</td>";
                                  echo "<td>" . '<input type="number" name="endsem[]" style="height: 35px; width:44px;" value="'. $data['endsem_marks'] . '" id="num2" min="0" max="70" >' . "</td>";
                                  echo '</tr>';
                                  $index += 1;
                                  $target_value = $data["target_level_val"];
                                }

                            }
                        ?>
                    </table>
                    </div>

                    <div class="form-group">
                      <label for="Gender">Target Value</label>
                      <input type="number" min="0" max="100" value="<?php echo $target_value ?>" class="form-control" id="examplegender" Name="s_target" required placeholder="Enter target value">
                    </div>


                        <button type="submit" name="submit"  value="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light" onclick="myFunction()">Reset</button>
                    </form>
                </div>
              </div>
            <!-- </div>
          
          </div> -->
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
if($_SERVER["REQUEST_METHOD"] == "POST")
{
extract($_POST);
  // if(isset($_POST['sub']))  
  // {  

    require 'db.php';
      $select = "select s_cname,s_course from subject_info where s_id ='".$_GET['s_id']."';";
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

      require 'db3.php';
      $insem=$_POST['insem'];
      $endsem=$_POST['endsem'];
      $ind = 0;
      // echo implode(" ",$t);
      // echo $s_target;

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

          // $query = "INSERT INTO $s_course (`seat_no`, `stud_name`, `insem_marks`, `endsem_marks`, `total_marks`, `target_level`, `target_level_val`) VALUES ('$seat_no','$stud_name','$i','$e','$t','$target', '$s_target')";

          $query = "UPDATE $s_course SET `insem_marks`='$i',
                                    `endsem_marks`='$e',
                                    `total_marks`='$t',
                                    `target_level`='$target',
                                    `target_level_val`='$s_target' 
                                    WHERE `seat_no`='$seat_no'";

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
      
      $asd = mysqli_query($con,$query)or die(mysqli_error($con));

      if ($asd)
      {
          echo '<script type="text/javascript">';
          echo " alert('Information Updated Successfully');";
          echo 'window.location.href = "view_university_th_marks.php?s_id='.$_GET['s_id'].'";';
          echo '</script>';
      }
      else
      {
          echo '<script type="text/javascript">';
          echo 'window.location.href = "edit_university_th_marks.php?s_id='.$_GET['s_id'].'";';
          echo '</script>';
      }
  }
?>