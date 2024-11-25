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
              View Faculty
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Faculty</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Faculty</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">View Faculty</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>#Id</th>
                          <th>Department</th>
                          <th>Name of Faculty</th>
                          <th>Gender</th>
                          <th>Date of Birth</th>
                          <th>Mother's Name</th>
                          <th>Category</th>
                          <th>Religion</th>
                          <th>Mobile no</th>
                          <th>Email Address</th>
                          <th>Address</th>
                          <th>Pan Card</th>
                          <th>Aadhar Card</th>
                          <th>Bank Account no</th>
                          <th>IFSC Code</th>
                          <th>MICR Code</th>
                          <th>PF No</th>
                          <th>Passport No</th>
                          <th>Username</th>
                          <th>Password</th>                          
                          
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                            require 'db.php';
                            $select = "select * from faculty_info  where f_status ='1'";
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
                          <a href="edit_faculty.php?f_id='.$data["f_id"].'">
                          <i class="fas fa-edit " style="margin-right:3%;color: green" ></i>
                          
                         <!-- <a href="edit_faculty.php?f_id='.$data["f_id"].'">
                          <i class="fas fa-eye " style="color: blue" ></i> -->
                          
                           <a href="javascript:;" class="del" data-userid = '.$data["f_id"].'><i class="fas fa-trash" style="color: red"></i></a> 
                           </td>

                          <td >'.$data["f_id"].'</td>
                          <td >'.$data["f_department"].'</td>
                          <td >'.$data["f_name"].'</td>
                          <td >'.$data["f_gender"].'</td>
                          <td >'.$data["f_date"].'</td>
                          <td >'.$data["f_mothername"].'</td>
                          <td >'.$data["f_category"].'</td>
                          <td >'.$data["f_religion"].'</td>
                          <td class="text-danger">'.$data["f_mobile"].'</td>
                          <td><label class="">'.$data["f_email"].'</label></td>
                          <td >'.$data["f_address"].'</td>
                          <td >'.$data["f_pancard"].'</td>
                          <td >'.$data["f_aadharcard"].'</td>
                          <td >'.$data["f_bankaccount"].'</td>
                          <td >'.$data["f_ifsc"].'</td>
                          <td >'.$data["f_micr"].'</td>
                          <td >'.$data["f_pf"].'</td>
                          <td >'.$data["f_passportno"].'</td>
                          <td><label class="">'.$data["f_username"].'</label></td>
                          <td><label class="">'.$data["f_password"].'</label></td>
                          
                                                  
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
          var f_id = $(this).data('userid');
          var c = confirm("Do you want to delete Faculty");
          if(c)
          {
           $.ajax({
             type: "POST",
             data : {"f_id":f_id},
             url : "delete_faculty.php",
             success : function (data) {
               if(data == "1")
               {
                 alert("Faculty Deleted !");
                 window.location.reload();
               }
             }
           })
          }
        }) 
  
  </script> 
 