<?php

include('authentication.php');
 ?><!DOCTYPE html>
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

                          <div class="form-group">
                        <h5 class="text-left my-5" style="color: red;">2. Course Objectives</h5>
                        <table class="" width="100%">
                            <colgroup>
                                <col style="width: 20%;">
                                <col style="width: 80%;">
                            </colgroup>
                                <?php

        require 'db.php';
                $select = "select s_cname,s_course,s_code from subject_info where s_id ='".$_GET['s_id']."';";
                $val= array();
                $val2 = "";
                $scode = "";
                if ($result = $con->query($select))
                {
                   while ($data = $result->fetch_assoc())
                   {
                        $val = $data;
                      // echo $data['s_cname'];
                    }
                }
                $val2 .= $val['s_course'];
                $scode = $val['s_code'];
                                    require 'db2.php';
                                    $table_name = "";
                                    $table_name .= $val2;
                                    $val2 .= "_1";
                                    $select = "select * from $val2";
                                    $i=1;
                                    echo '<br/>';
                                    $val = array();
                                    if ($result = $con->query($select))
                                    {
                                        while ($data = $result->fetch_assoc())
                                        {
                                            $val = $data;
                                        }
                                    }
                                // echo $val["c_objs"];
                                // echo $table_name;
                                // echo "<br/>";
                                // echo $val2;
                                $select = "select c_objs from $val2;";
                                $arr2 = array();
                                if ($result = $con->query($select))
                                {
                                    while ($data = $result->fetch_assoc())
                                    {
                                        // echo $data;
                                        // echo json_decode($data, true);
                                        $arr2 = json_decode($data['c_objs'], TRUE);
                                        // echo $arr[0];
                                    }
                                }
                                $index = 1;
                                foreach ($arr2 as $value) {
                                    // echo "$value <br>";
                                    echo "
                                    <tr>
                                        <td style='text-align: center;'>$index</td>
                                        <td>$value</td>
                                    </tr>
                                    ";

                                    $index = $index + 1;
                                }
                                ?>
                            <!-- <tr>
                                <td style="text-align: center;">1</td>
                                <td><?php echo $val["c_obj_1"];?></td>
                            </tr> -->
                        </table>
                    </div>
                    <?php 
                  include "db.php";
                  
                  $asd = mysqli_query($con,"select * from po_info") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                  <?php while($fetch=mysqli_fetch_array($asd)){
                  extract($fetch)

                  ?>
                    <div class="form-group">
                      <h5 class="text-left my-5" style="color: red;">4.Program Outcomes (PO's)</h5>
                        
                        <table class="" width="100%">
                            <colgroup>
                                <col style="width: 20%;">
                                <col style="width: 80%;">
                            </colgroup>
                            <tr>
                                <td style="text-align: center;">PO1</td>
                                <td><?php echo $po1;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO2</td>
                                <td><?php echo $po2;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO3</td>
                                <td><?php echo $po3;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO4</td>
                                <td><?php echo $po4;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO5</td>
                                <td><?php echo $po5;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO6</td>
                                <td><?php echo $po6;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO7</td>
                                <td><?php echo $po7;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO8</td>
                                <td><?php echo $po8;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO9</td>
                                <td><?php echo $po9;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO10</td>
                                <td><?php echo $po10;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO11</td>
                                <td><?php echo $po11;?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">PO12</td>
                                <td><?php echo $po12;?></td>
                            </tr>
                        </table>
                    </div>
                    <?php }?>

                    <?php

                        require 'db2.php';
                        $table_1 = $table_name . "_co_po_1";
                        $select = "select data_val from $table_1;";
                        
                        $ta = array();
                        if ($result = $con->query($select))
                        {
                            // echo $result;
                            $i = 0;
                            while ($data = $result->fetch_assoc())
                            {
                                // echo $data;
                                // echo implode(" ", $data);
                            $ta[$i]=array(implode(" ", $data));
                                // $val = $data;
                                // echo $data['s_cname'];
                            $i = $i+1;
                            }
                        } 
                        // for ($i = 1; $i <= 6; $i++)
                        // {
                        //     $a = str_split($ta[$i-1][0]);
                        //     echo $a[3];
                        //     echo "<br/>";
                        // }
                        // $temp = str_split($ta[1][0]);
                        // echo $temp[0];
                        // echo $temp[0][1];
                        $pos = array("PO1", "PO2", "PO3", "PO4", "PO5", "PO6", "PO7", "PO8", 
                                    "PO9", "PO10", "PO11", "PO12");
                        $cos = array("C". $scode .".1", "C". $scode .".2", "C". $scode .".3", "C". $scode .".4", "C". $scode .".5", "C". $scode .".6", "C". $scode);

                    ?>
                    <div class="form-group">
                        <h5 class="text-left my-5" style="color: red;">5.CO/PO Mapping</h5>
                        
                        <table class="tbMap">
                                <tr>
                                    <th>CO/PO</th>
                            <?php
                                
                                for ($j = 1; $j <= 12; $j++)
                                {
                            ?>
                                    
                                    <th>
                                        <?php echo $pos[$j-1]; ?>
                                    </th> 
                            <?php
                                }
                            ?>
                                </tr>
                            <?php
                                for ($i = 1; $i <= 7; $i++)
                                {
                            ?>
                                    <tr>
                                        <th>
                                            <?php echo $cos[$i-1]; ?>
                                        </th>
                            <?php
                                    if ($i == 7) continue;
                                    $temp = str_split($ta[$i-1][0]);
                                    $index = 0;
                                    for ($x = 1; $x <= 12; $x++)
                                    {
                                        // $val = $pos[$x-1];
                            ?>
                                <td>
                                <!-- <input type="number" style="height: 35px; width:40px;" name="chkbox[]" 
                                    value="" min="0" max="3"> -->
                                    <?php echo $temp[$index]; 
                                        $index = $index + 2;
                                     ?>
                                </td>
                            <?php
                                    }
                            ?>
                                </tr>
                            <br />
                            <?php
                                }
                                $index = 0;
                                for ($j = 1; $j <= 12; $j++)
                                {
                                    $sum = 0;
                                    for ($i = 1; $i <= 6; $i++)
                                    {
                                        $temp = str_split($ta[$i-1][0]);
                                        $sum = $sum + (int)$temp[$index];
                                    }
                                    echo '
                                    <td>
                                    
                                    <h5>';
                                    echo round($sum/6, 2);
                                    $index = $index +2;
                                    echo '</h5>
                                        
                                    </td>';
                                }
                                echo '</tr>';
                            ?>
                        </table>
                    </div>

                    <div class="form-group">
                      <h5 class="text-left my-5" style="color: red;">6.PSO</h5>
                        
                        <table class="" width="100%">
                            <colgroup>
                                <col style="width: 20%;">
                                <col style="width: 80%;">
                            </colgroup>
                            <tr>
                                <td style="text-align: center;">1</td>
                                <td><?php echo $val["pso1"];?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">2</td>
                                <td><?php echo $val["pso2"];?></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">3</td>
                                <td><?php echo $val["pso3"];?></td>
                            </tr>
                        </table>
                    </div>

                    <div class="form-group">
                      <h5 class="text-left my-5" style="color: red;">7.CO/PSO Mapping</h5>
                        
                        <?php
                            require 'db2.php';
                            $table_1 = $table_name . "_co_pso_2";
                            $select = "select data_val from $table_1;";

                            $ta = array();
                            if ($result = $con->query($select))
                            {
                                // echo $result;
                                $i = 0;
                               while ($data = $result->fetch_assoc())
                               {
                                    // echo $data;
                                    // echo implode(" ", $data);
                                $ta[$i]=array(implode(" ", $data));
                                    // $val = $data;
                                  // echo $data['s_cname'];
                                $i = $i+1;
                                }
                            }
                        ?>
                        <table class="tbMap">
                                <tr>
                                    <th>Course Outcomes</th>
                            <?php
                                $pso = array("PSO1", "PSO2", "PSO3");
                                $cos = array("C". $scode .".1", "C". $scode .".2", "C". $scode .".3", "C". $scode .".4", "C". $scode .".5", "C". $scode .".6", "C". $scode);

                                for ($j = 1; $j <= 3; $j++)
                                {
                            ?>
                                    
                                    <th>
                                        <?php echo $pso[$j-1]; ?>
                                    </th> 
                            <?php
                                }
                            ?>
                                </tr>
                            <?php
                                for ($i = 1; $i <= 7; $i++)
                                {
                            ?>
                                    <tr>
                                        <th>
                                            <?php echo $cos[$i-1]; ?>
                                        </th>
                                        <?php if ($i == 7) continue;?>
                            <?php
                                    $temp = str_split($ta[$i-1][0]);
                                    $index = 0;
                                    for ($x = 1; $x <= 3; $x++)
                                    {
                                        $val = $pso[$x-1];
                            ?>
                                <td>
                                    <!-- <input type="text" style="transform: scale(2.5);" name="chkbox[]" 
                                    value=""> -->
                                    <!-- <input type="number" style="height: 35px; width:40px;" name="chkbox2[]" 
                                    value="" min="0" max="3"> -->
                                    <?php echo $temp[$index]; 
                                        $index = $index + 2;
                                     ?>
                                </td>
                            <?php
                                    }
                            ?>
                                </tr>
                            <br />
                            <?php
                                }
                            ?>
                        </table>
                    </div><br/>

                    <div class="">
                      <h5 class="text-left my-5" style="color: red;">8.Course contents (Syllabus)</h5>
                        
                        <?php
                            require 'db2.php';
                            $select = "select syllabus from $val2;";
                            $arr = array();
                            if ($result = $con->query($select))
                            {
                                while ($data = $result->fetch_assoc())
                                {
                                    // echo $data;
                                    // echo json_decode($data, true);
                                    $arr = json_decode($data['syllabus'], TRUE);
                                    // echo $arr[0];
                                }
                            }
                        ?>
                        <table width="100%">
                            <colgroup>
                                <col style="width: 20%;">
                                <col style="width: 60%;">
                                <col style="width: 10%;">
                            </colgroup>
                            <tr>
                                <td style="text-align: center;">Unit</td>
                                <td>Content</td>
                                <td style="text-align: center;">Hrs</td>
                            </tr>

                            <tr>
                                <td rowspan="2" style="text-align: center;">&#8544;</td>
                                <td><?php echo $arr["unit1"][0];?></td>
                                <td style="text-align: center;"><?php echo $arr["unit1"][2];?></td>
                            </tr>
                            <tr>
                                <td><?php echo $arr["unit1"][1];?></td>
                            </tr>

                            <tr>
                                <td rowspan="2" style="text-align: center;">&#8545;</td>
                                <td><?php echo $arr["unit2"][0];?></td>
                                <td style="text-align: center;"><?php echo $arr["unit2"][2];?></td>
                            </tr>
                            <tr>
                                <td><?php echo $arr["unit2"][1];?></td>
                            </tr>

                            <tr>
                                <td rowspan="2" style="text-align: center;">&#8546;</td>
                                <td><?php echo $arr["unit3"][0];?></td>
                                <td style="text-align: center;"><?php echo $arr["unit3"][2];?></td>
                            </tr>
                            <tr>
                                <td><?php echo $arr["unit3"][1];?></td>
                            </tr>

                            <tr>
                                <td rowspan="2" style="text-align: center;">&#8547;</td>
                                <td><?php echo $arr["unit4"][0];?></td>
                                <td style="text-align: center;"><?php echo $arr["unit4"][2];?></td>
                            </tr>
                            <tr>
                                <td><?php echo $arr["unit4"][1];?></td>
                            </tr>

                            <tr>
                                <td rowspan="2" style="text-align: center;">&#8548;</td>
                                <td><?php echo $arr["unit5"][0];?></td>
                                <td style="text-align: center;"><?php echo $arr["unit5"][2];?></td>
                            </tr>
                            <tr>
                                <td><?php echo $arr["unit5"][1];?></td>
                            </tr>

                            <tr>
                                <td rowspan="2" style="text-align: center;">&#8549;</td>
                                <td><?php echo $arr["unit6"][0];?></td>
                                <td style="text-align: center;"><?php echo $arr["unit6"][2];?></td>
                            </tr>
                            <tr>
                                <td><?php echo $arr["unit6"][1];?></td>
                            </tr>
                        </table>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>








                                </table>
                              </div>
                          </div>
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
                            
                            <h4 class="text-right mb-5">Total Remaining Amount : '.$data["remaining_amt"].'</h4>'; }}?>

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