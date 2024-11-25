_<?php

include('authentication.php');
 ?>
 ?>

 <!DOCTYPE html>

<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:40 GMT -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
  <link rel="shortcut icon" href="images/favicon.png" />
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
              View Student
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Student</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Student</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">View Student</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>#Id</th>
                          <th>Name</th>
                          <th>Name of Institute</th>
                          <th>Branch</th>
                          <th>Class Year</th>
                          <th>Mobile Number</th>
                          <th>Email</th>
                          <th>Blood group</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>State</th>
                          <th>Pin</th>
                          <th>Parent's Mobile Number</th>
                          <th>Parent's Email id</th>
                          <th>PRN No</th>
                          <th>Date of Birth</th>
                          <th>Mother Name</th>
                          <th>Student Batch</th>
                          <th>Student Admission Batch</th>
                          <th>Student Passout Batch</th>
                          <th>DSY</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Active Status</th>

                        </tr>
                      </thead>
                      <tbody>
                    <?php
                            require 'db.php';
                            $select = "select * from stud_info where s_status ='1'";
//                            mysqli_query($con,"SET CHARACTER SET 'utf8'");
  //                          mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
                                                          //echo $select;
                             $i=1;
                              if ($result = $con->query($select))
                                 {
                                       while ($data = $result->fetch_assoc())
                                       {
                                          echo'
                        <tr>
                          <td style="font-size: 16px;">
                          <a href="edit_student.php?s_id='.$data["s_id"].'">
                          <i class="fas fa-edit " style="margin-right:3%;color: green" ></i>
                          
                         <!-- <a href="edit_student.php?f_id='.$data["s_id"].'">
                          <i class="fas fa-eye " style="color: blue" ></i> -->
                          
                           <a href="javascript:;" class="del" data-userid = '.$data["s_id"].'><i class="fas fa-trash" style="color: red"></i></a> 
                           </td>

                          <td >'.$data["s_id"].'</td>
                          <td >'.$data["s_name"].'</td>
                          <td >'.$data["s_institute"].'</td>
                          <td >'.$data["s_branch"].'</td>
                          <td >'.$data["s_class_year"].'</td>
                          <td >'.$data["s_mb_no"].'</td>
                          <td >'.$data["s_email"].'</td>
                          <td >'.$data["s_blood_grp"].'</td>
                          <td class="">'.$data["s_address"].'</td>
                          <td><label class="">'.$data["s_city"].'</label></td>
                          <td >'.$data["s_state"].'</td>
                          <td >'.$data["s_pin"].'</td>
                          <td >'.$data["s_parent_mb_no"].'</td>
                          <td >'.$data["s_parent_email"].'</td>
                          <td >'.$data["s_prn"].'</td>
                          <td >'.$data["s_dob"].'</td>
                          <td >'.$data["s_mother_name"].'</td>
                          <td >'.$data["s_batch"].'</td>
                          <td >'.$data["s_admit_year"].'</td>
                          <td >'.$data["s_passout_year"].'</td>
                          <td >'.$data["s_dsy"].'</td>
                          <td >'.$data["s_username"].'</td>
                          <td >'.$data["s_password"].'</td>
                          <td >'.$data["s_active_status"].'</td>
                                                  
                        </tr>
                        ';}}?>
                      </tbody>
                    </table>
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
          var s_id = $(this).data('userid');
          var c = confirm("Do you want to delete Student");
          if(c)
          {
           $.ajax({
             type: "POST",
             data : {"s_id":s_id},
             url : "delete_student.php",
             success : function (data) {
               if(data == "1")
               {
                 alert("Student Deleted !");
                 window.location.reload();
               }
             }
           })
          }
        }) 
  
  </script> 
 