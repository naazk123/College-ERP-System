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
  
  <link rel="stylesheet" href="css/mystyle.css">

  <!-- <link rel="stylesheet" href="css/style2.css"> -->
  <style>   
    .form-group {
        display: inline-block;
        margin-right: 10px;
    }
    </style>
</head>

<body>
<!-- <div class="square-box-loader">
        <div class="square-box-loader-container">
            <div class="square-box-loader-corner-top"></div>
            <div class="square-box-loader-corner-bottom"></div>
        </div>
        <div class="square-box-loader-square"></div>
    </div> -->
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
              View CO-PO
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">CO-PO</a></li>
                <li class="breadcrumb-item active" aria-current="page">View CO-PO</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">View CO-PO</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                
                  <?php 
                //   include 'another_temp.php';
                //   require 'db.php';
                //   $select = "select s_course from subject_info;";
                //     if ($result = $con->query($select))
                //     {
                //         while ($data = $result->fetch_assoc())
                //         {
                //             $temp = implode(" ",$data);
                //             myfunc($temp);
                //         }
                //     }
                  ?>
                    <!-- <select name="department" id="department">
                        <option value="computer">computer</option>
                        <option value="it">it</option>
                        <option value="civil">civil</option>
                        <option value="mech">mech</option>
                    </select> -->
                    <form class="forms-sample" method="POST" action="" id="myForm">
                    
                    <div class="form-group">
                      <label for="Department" style="text-align:center;">Department</label>
                        <select class="form-control show-tick" name="s_branch">
                            <option>Select</option>
                            <option value="computer">computer</option>
                            <option value="it">it</option>
                            <option value="civil">civil</option>
                            <option value="mech">mech</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="Year">Year of Study</label>
                        <select class="form-control show-tick" name="s_year">
                            <option >Select</option>
                            <option value="FE">FE</option> 
                            <option value="SE">SE</option> 
                            <option value="TE">TE</option>
                            <option value="BE">BE</option> 
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="Pattern">Pattern</label>
                        <select class="form-control show-tick" name="s_pattern">
                            <option >Select</option>
                            <option value="2015">2015</option> 
                            <option value="2019">2019</option> 
                            <option value="2023">2023</option> 
                        </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="Semester">Select Semester</label>
                        <select class="form-control show-tick" name="s_semester">
                            <option >Select</option>
                            <option value="I">I</option> 
                            <option value="II">II</option> 
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                        </select>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2"  style="display: inline-block; margin-right: 10px;">Submit</button>
                    <button class="btn btn-light" onclick="myFunction()">Reset</button>
                  </form>

                  
                    <?php
                    include'db.php';
                    if($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        extract($_POST);
                        echo $s_branch;
                        // echo $s_year;
                        // echo $s_pattern;
                        // echo $s_semester;
                        // $query = "SELECT * FROM `stud_info` WHERE ;";
                        
                            require 'db.php';
                            $select = "select * from stud_info where s_branch=$s_branch AND s_year=$s_year AND s_pattern=$s_pattern AND s_semester=$s_semester;";
                             $i=1;
                              if ($result = $con->query($select))
                                 {
                                       while ($data = $result->fetch_assoc())
                                       {
                                          echo'
                        <tr>
                          <td style="font-size: 16px;">
                          <a href="add_co_po_mapping_data.php?s_id='.$data["s_id"].'">
                          <i class="fas fa-edit " style="margin-right:3%;color: green" ></i>
                          
                          <a href="view_co_po_mapping_data.php?s_id='.$data["s_id"].'" class="" data-userid = '.$data["s_id"].'><i class="fas fa-street-view" style="color: blue"></i></a>
                          
                          <br/>
                          <br/>
                          
                          <a href="javascript:;" class="del" data-userid = '.$data["s_id"].'><i class="fas fa-trash" style="color: red"></i></a> 
                           
                          <a href="print_subject.php?s_id='.$data["s_id"].'" class="" data-userid = '.$data["s_id"].'><i class="fas fa-print" style="color: blue"></i></a>



                          </td>
                           
                          <td >'.$data["s_id"].'</td>
                          <td >'.$data["s_year"].'</td>
                          <td >'.$data["s_pattern"].'</td>
                          <td >'.$data["s_branch"].'</td>
                          <td >'.$data["s_semester"].'</td>
                                             
                        </tr>
                        ';}}
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
 