<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="../images/icon.png" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome <br> <?php echo $_SESSION['auth_user_faculty']['user_name']?>
                </p>
                <p class="designation">
                  Faculty
                </p>
              </div>
            </div>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fas fa-user menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fas fa-users menu-icon"></i>
              <span class="menu-title">Students</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="add_student.php">Add Student</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="view_student.php">View Student</a></li>
                <li class="nav-item"><a class="nav-link" href="view_attendance.php">View Attendance</a></li> 
                <li class="nav-item"><a class="nav-link" href="update_attendance.php">Take Attendance</a></li>   
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#uni_marks" aria-expanded="false" aria-controls="uni_marks">
              <i class="fas fa-users menu-icon"></i>
              <span class="menu-title">Add Subject</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="uni_marks">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="add_subject.php">Add Subject</a></li>
              <li class="nav-item"><a class="nav-link" href="view_subject.php">View Subject</a></li>     
              
              </ul>
            </div>
          </li>

          

        </ul>
      </nav> 