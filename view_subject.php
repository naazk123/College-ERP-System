<?php

include('authentication.php');
 ?>
 ?><!DOCTYPE html>

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
              View Subject
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Subject</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Subject</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">View Subject</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>#Id</th>
                          <th>Year</th>
                          <th>Pattern</th>
                          <th>Department</th>
                          <th>Semester No</th>
                          <th>Course Code</th>
                          <th>Departmenr Course Code</th>
                          <th>Course Name</th>
                          <th>Lecture Hour</th>
                          <th>Practical Hour</th>
                          <th>Tutorial Hour</th>
                          <th>Midesem Marks</th>
                          <th>Endsem Marks</th>
                          <th>Termwork</th>
                          <th>Practical</th>
                          <th>Oral Pre</th>
                          <th>Total</th>
                          <th>Credit Lecture</th>
                          <th>Credit Practical</th>
                          <th>Credit Tutorial</th>
                          <th>Credit Total</th>
                          <th>Name of Faculty</th>
                          <th>Username</th>                          
                          
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                            require 'db.php';
                            $select = "select * from subject_info  where s_status ='1'";
                             $i=1;
                              if ($result = $con->query($select))
                                 {
                                       while ($data = $result->fetch_assoc())
                                       {
                                          echo'
                        <tr>
                          <td style="font-size: 16px;">
                          <a href="edit_subject.php?s_id='.$data["s_id"].'">
                          <i class="fas fa-edit " style="margin-right:3%;color: green" ></i>
                          
                          <a href="javascript:;" class="del" data-userid = '.$data["s_id"].'><i class="fas fa-trash" style="color: red"></i></a> 
                           
                          <a href="print_subject.php?s_id='.$data["s_id"].'" class="" data-userid = '.$data["s_id"].'><i class="fas fa-print" style="color: blue"></i></a>

                          </td>
                           
                          <td >'.$data["s_id"].'</td>
                          <td >'.$data["s_year"].'</td>
                          <td >'.$data["s_pattern"].'</td>
                          <td >'.$data["s_department"].'</td>
                          <td >'.$data["s_semester"].'</td>
                          <td >'.$data["s_course"].'</td>
                          <td >'.$data["s_code"].'</td>
                          <td >'.$data["s_cname"].'</td>
                          <td >'.$data["s_lecture"].'</td>
                          <td >'.$data["s_practical"].'</td>
                          <td >'.$data["s_tutorial"].'</td>
                          <td >'.$data["s_midsem"].'</td>
                          <td >'.$data["s_endsem"].'</td>
                          <td >'.$data["s_termwork"].'</td>
                          <td >'.$data["s_practical"].'</td>
                          <td >'.$data["s_oralpre"].'</td>
                          <td >'.$data["s_total"].'</td>
                          <td >'.$data["s_clecture"].'</td>
                          <td >'.$data["s_cpractical"].'</td>
                          <td >'.$data["s_ctutorial"].'</td>
                          <td >'.$data["s_ctotal"].'</td>
                          <td >'.$data["f_name"].'</td>
                          <td><label class="">'.$data["f_username"].'</label></td>
                          
                          
                                                  
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
          var c = confirm("Do you want to delete Subject");
          if(c)
          {
           $.ajax({
             type: "POST",
             data : {"s_id":s_id},
             url : "delete_subject.php",
             success : function (data) {
               if(data == "1")
               {
                 alert("Subject Deleted !");
                 window.location.reload();
               }
             }
           })
          }
        }) 
  
  </script> 
 