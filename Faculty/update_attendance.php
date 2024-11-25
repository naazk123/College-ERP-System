<?php
error_reporting(0);
include('authentication.php'); 
include 'db.php';

    require 'db.php';
    $select = "select * from stud_attend where s_status ='1'";
    $rs = $con->query($select);
    $num = $rs->num_rows;
    $rrw = $rs->fetch_assoc();


//session and Term
        $querey=mysqli_query($con,"select * from stud_attend where s_status ='1'");
        $rwws=mysqli_fetch_array($querey);
        $sessionTermId = $rwws['s_id'];

        $dateTaken = date("d-m-Y");

        $qurty=mysqli_query($con,"select * from stud_attend  where s_class_year = '$_SESSION[s_class_year]' and s_generated_time='$dateTaken'");
        $count = mysqli_num_rows($qurty);

        if($count == 0){ //if Record does not exsit, insert the new record

          //insert the students record into the attendance table on page load
          $qus=mysqli_query($con,"select * from stud_attend  where s_class_year = '$_SESSION[s_class_year]'");
          while ($ros = $qus->fetch_assoc())
          {
              $qquery=mysqli_query($con,"insert into stud_attend(`s_id`, `s_name`, `s_class_year`,`s_status`, `s_generated_time`) 
              value('$ros[s_id]','$_SESSION[s_name]','$_SESSION[s_class_year]','$s_status','0','$dateTaken')");

          }
        }


if(isset($_POST['save'])){
    
    $s_id=$_POST['s_id'];

    $check=$_POST['check'];
    $N = count($s_id);
    $status = "";


//check if the attendance has not been taken i.e if no record has a status of 1
  $qurty=mysqli_query($con,"select * from stud_attend  where s_class_year = '$_SESSION[s_class_year]' and s_generated_time='$dateTaken and s_status = '1'");
  $count = mysqli_num_rows($qurty);

  if($count > 0){

      $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>Attendance has been taken for today!</div>";

  }

    else //update the status to 1 for the checkboxes checked
    {

        for($i = 0; $i < $N; $i++)
        {
                $admissionNo[$i]; //admission Number

                if(isset($check[$i])) //the checked checkboxes
                {
                      $qquery=mysqli_query($con,"update stud_attend set s_status='1' where s_id = '$check[$i]'");

                      if ($qquery) {

                          $statusMsg = "<div class='alert alert-success'  style='margin-right:700px;'>Attendance Taken Successfully!</div>";
                      }
                      else
                      {
                          $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
                      }
                  
                }
          }
      }

   

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  

   <script>
    function classArmDropdown(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxClassArms2.php?cid="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

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
              View Attendance
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Attendance</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Attendance</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">View Attendance</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
        <form method="post">
            <div class="row">
              <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Student in SE Class</h6>
                  <h6 class="m-0 font-weight-bold text-danger">Note: <i>Click on the checkboxes besides each student to take attendance!</i></h6>
                </div>
                <div class="table-responsive p-3">
                <?php echo $statusMsg; ?>
                  <table class="table align-items-center table-flush table-hover">
                    <thead class="thead-light">
                      <tr>
                          <th>Action</th>
                          <th>#Id</th>
                          <th>Name</th>
                          <th>Student Email</th>
                          <th>Branch</th>
                          <th>Class Year</th>
                      </tr>
                    </thead>
                    
                    <tbody>

                  <?php
                      require 'db.php';
                      $select = "select * from stud_attend where s_status ='1'";
                      $rs = $con->query($select);
                      $num = $rs->num_rows;
                      $sn=0;
                      $status="";
                      if($num > 0)
                      { 
                        while ($data = $rs->fetch_assoc())
                          {
                            $sn = $sn + 1;
                            echo'
                              <tr>
                                <td style="font-size: 16px;">
                                <a href="update_attendance.php?s_id='.$data["s_id"].'">
                                <i class="fas fa-edit " style="margin-right:3%;color: green" ></i>
                                
                                <!-- <a href="edit_student.php?f_id='.$data["s_id"].'">
                                <i class="fas fa-eye " style="color: blue" ></i> -->
                                
                                <a href="javascript:;" class="del" data-userid = '.$data["s_id"].'><i class="fas fa-trash" style="color: red"></i></a> 
                                </td>
      
                            
                                <td >'.$data["s_id"].'</td>
                                <td >'.$data["s_name"].'</td>
                                <td >'.$data["s_email"].'</td>
                                <td >'.$data["s_branch"].'</td>
                                <td >'.$data["s_class_year"].'</td>
                                <td><input name="check[]" type="checkbox" value=".$data[s_class_year]." class="form-control"></td>
                              </tr>';
                              echo "<input name='s_id[]' value=".$data['s_class_year']." type='hidden' class='form-control'>";
                          }
                      }
                      else
                      {
                           echo   
                           "<div class='alert alert-danger' role='alert'>
                            No Record Found!
                            </div>";
                      }
                      
                      ?>
                      </tbody>
                    </table>
                    <br>
                    <button type="submit" name="save" class="btn btn-primary">Take Attendance</button>
                    </form>
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
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>

</html>
 <script type="">
      $(".del").click(function () {
          var s_id = $(this).data('userid');
          var c = confirm("Do you want to delete Attendance");
          if(c)
          {
           $.ajax({
             type: "POST",
             data : {"s_id":s_id},
             url : "delete_Attendance.php",
             success : function (data) {
               if(data == "1")
               {
                 alert("Attendance Deleted !");
                 window.location.reload();
               }
             }
           })
          }
        }) 
  
  </script> 