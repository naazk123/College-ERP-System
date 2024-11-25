<?php

include('authentication.php');
 ?>
<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:40 GMT -->
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
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
    .form-group2 {
          display: inline-block;
          margin-right: 10px;
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
              View University TH marks
            <br/>
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">University TH marks</a></li>
                <li class="breadcrumb-item active" aria-current="page">View University TH marks</li>
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
                  
                  // echo $_SESSION['auth_user_faculty'];
                  // echo $_GET['s_id'];
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
                  // echo $val['s_course'];
                  // echo $_GET['s_batch'];
                  $table_name = $val['s_course'] . "_th_marks";
                  $s_id = $val['s_id'];
              ?>
              <h4 class="card-title">View University TH marks</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <div class="form-group">
                        <label>Action</label>
                        <?php
                        echo '<br/><td style="font-size: 16px;">
                          <a href="edit_university_th_marks.php?s_id='.$s_id.'">
                          <i class="fas fa-edit " style="margin-right:3%;color: green" ></i>
                          
                         <!-- <a href="edit_edu_faculty.php?e_id=">
                          <i class="fas fa-eye " style="color: blue" ></i> -->
                          
                           <a href="javascript:;" class="del" data-userid = ><i class="fas fa-trash" style="color: red"></i></a> 
                        </td>'
                        ?>
                    </div>

                    <div class="form-group">
                    <table width="100%">
                    <colgroup>
                            <col style="width: 10%;">
                            <col style="width: 10%;">
                            <col style="width: 40%;">
                            <col style="width: 10%;">
                            <col style="width: 10%;">
                            <col style="width: 10%;">
                            <col style="width: 10%;">
                        </colgroup>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Seat No.</th>
                            <th>Name of Student</th>
                            <th>Insem</th>
                            <th>Endsem</th>
                            <th>Total</th>
                            <th>Target Level</th>
                        </tr>
                        <?php
                            require 'db.php';
                            $batch = $_POST['s_batch'];
                            $s_cname = $_POST['s_cname'];
                            $select = "select s_course from subject_info where s_cname='$s_cname';";
                            $val= array();
                            if ($result = $con->query($select))
                            {
                              while ($data = $result->fetch_assoc())
                              {
                                $val = $data;
                                // echo $data['s_cname'];
                              }
                            }
                            // echo $val['s_course'];
                            $table_name = $val['s_course'] . "_th_marks";
                            require 'db3.php';
                            $select = "select * from $table_name where s_batch='$batch';";
                            if ($result = $con->query($select))
                            {
                                $index = 1;
                                while ($data = $result->fetch_assoc())
                                {
                                  echo '<tr>';
                                  echo "<td style='text-align: center'>" . $index . "</td>";
                                  echo "<td>" . $data['seat_no'] . "</td>";
                                  echo "<td>" . $data['stud_name'] . "</td>";
                                  echo "<td style='text-align: center'>" . $data['insem_marks'] . "</td>";
                                  echo "<td style='text-align: center'>" . $data['endsem_marks'] . "</td>";
                                  echo "<td style='text-align: center'>" . $data['total_marks'] . "</td>";
                                  echo "<td style='text-align: center'>" . $data['target_level'] . "</td>";
                                  echo '</tr>';
                                  $index += 1;
                                  $target_value = $data["target_level_val"];
                                }

                            }
                        ?>
                    </table>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Target Value</label><br/>
                        <table class="" width="100%">
                            <colgroup>
                                <col style="width: 80%;">
                                <col style="width: 20%;">
                            </colgroup>
                            <tr>
                                <td>Target Value</td>
                                <td style="text-align: center;"><?php echo $target_value;?></td>
                            </tr>
                        </table>
                    </div>

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
 <script type="">
      $(".del").click(function () {
          var e_id = $(this).data('userid');
          var c = confirm("Do you want to delete Faculty Education and Work data");
          if(c)
          {
           $.ajax({
             type: "POST",
             data : {"s_id":s_id},
             url : "delete_co_po_mapping_data.php",
             success : function (data) {
               if(data == "1")
               {
                 alert("Faculty Education and Work Deleted !");
                 window.location.reload();
               }
             }
           })
          }
        }) 
  
  </script> 
 