<?php

include('authentication.php');
 ?><!DOCTYPE html>
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

  <link rel="stylesheet" href="css/mystyle.css">
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
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
     <?php include"navbar.php";?>
      <!-- partial -->
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Subject Details
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="view_subject.php">Subject</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="view_subject.php">View Details</a></li>
              </ol>
            </nav>
          </div>
          




          <div class="row" >
              <div class="col-lg-12">
                  <div class="card px-2">
                      <div class="card-body">
                        <div id="printableArea">
                                                <?php
                            require 'db.php';
                            $select = "select * from subject_info where s_id='".$_GET['s_id']."';";
                            extract($_GET);
                             $i=1;
                              if ($result = $con->query($select))
                                 {
                                       while ($data = $result->fetch_assoc())
                                       {
                                          echo'
                          <div class="container-fluid">
                            <img src="images/FINAL_Letter_head.jpg" width="1150" height="300">
                            <h3 class="text-center my-5" style="color: green;">'.$data["s_cname"].'</h3>
                            <hr>
                          </div>
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 pl-0">
                            <h5 class="text-left my-5" style="color: red;">1. Course Information</h5>
                            </div>
                            <div class="col-lg-3 pr-0">
                              
                              
                            </div>
                          </div>
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-4 pl-0" ">
                            <div style="display:table; width:100%; border:1px solid black; width:100%;">
  <div style="display:table-row; ">
    <div style="display:table-cell; width:55%; border:1px solid black;">Pattern/Course</div>
    <div style="display:table-cell; width:55%; border:1px solid black;">'.$data["s_pattern"].'</div>
  </div>
  <div style="display:table-row;">
    <div style="display:table-cell; width:55%; border:1px solid black;">Year & Branch</div>
    <div style="display:table-cell; width:55%; border:1px solid black;">'.$data["s_year"].' & '.$data["s_department"].'</div>
  </div>
  <div style="display:table-row;">
    <div style="display:table-cell; width:55%; border:1px solid black;">Semester</div>
    <div style="display:table-cell; width:55%; border:1px solid black;">'.$data["s_semester"].'</div>
  </div>
  <div style="display:table-row;">
    <div style="display:table-cell; width:55%; border:1px solid black;">Course Code</div>
    <div style="display:table-cell; width:55%; border:1px solid black;">'.$data["s_course"].'</div>
  </div>
  <div style="display:table-row;">
    <div style="display:table-cell; width:55%; border:1px solid black;">Course Title</div>
    <div style="display:table-cell; width:55%; border:1px solid black;">'.$data["s_cname"].'</div>
  </div>
  <div style="display:table-row;">
    <div style="display:table-cell; width:55%; border:1px solid black;">Teaching Scheme</div>
    <div style="display:table-cell; width:55%; border:1px solid black;">'.$data["s_lecture"].' Hrs/week</div>
  </div>
  <div style="display:table-row;">
    <div style="display:table-cell; width:55%; border:1px solid black;">Examination Scheme</div>
    <div style="display:table-cell; width:55%; border:1px solid black;">In Semester Assessment :'.$data["s_midsem"].' <br> End Semester Assessment :'.$data["s_endsem"].' <br> Total Marks :'.$data["s_total"].'</div>
  </div>
</div>



                             
                            </div>
                          </div>';}}?>


                          <div class="container-fluid mt-5 w-100">
                            <?php
                                require 'db.php';
                                //$select = "select * from user_info";
                                extract($_GET);
                               // $select="SELECT user_info.*,payment_info.remaining_amt,payment_info.date_pay_amt,payment_info.pay_amt, payment_info.p_id FROM user_info LEFT OUTER JOIN payment_info ON user_info.user_id = payment_info.user_id where user_info.user_id='$user_id' ORDER BY payment_info.p_id DESC Limit 1";
                               
                                 $i=1;
                                  if ($result = $con->query($select))
                                     {
                                           while ($data = $result->fetch_assoc())
                                           {
                                              echo'
                            
                                  '; }}?>

                            <hr>

                          </div>

                        </div>
       
                      </div>
                      <div class="container-fluid w-100">
                            <button class="btn btn-primary float-right mt-4 ml-2" onclick="printDiv('printableArea')"><i class="fa fa-print mr-1"  ></i>Print</button>

                            
                          </div>
                  </div>
              </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include"footer.php";?>
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
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:10:26 GMT -->
</html>
<script type="">
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>