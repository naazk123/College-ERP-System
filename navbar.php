<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images/icon.png" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome
                </p>
                <p class="designation">
                  <?php 
              if(isset($_SESSION['auth'])){
              echo $_SESSION['auth_user']['user_name'];              
              }
              else{
                  echo "Not Logged In";
              }
              ?> 
                </p>
              </div>
            </div>
          </li>     
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fas fa-user menu-icon"></i>
              <span class="menu-title">Superadmin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_superadmin.php">Add Superadmin</a></li>
                <li class="nav-item"> <a class="nav-link" href="view_superadmin.php">View Superadmin</a></li>               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fas fa-user menu-icon"></i>
              <span class="menu-title">Faculty</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="add_faculty.php">Add Faculty</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="view_faculty.php">View Faculty</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-users menu-icon"></i>
              <span class="menu-title">Student</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="add_student.php">Add Student</a></li>
              <li class="nav-item"><a class="nav-link" href="view_student.php">View Student</a></li>
              </li>
              <li class="nav-item"><a class="nav-link" href="view_attendance.php">View Attendance</a></li>               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#subject_1" aria-expanded="false" aria-controls="subject_1">
              <i class="fas fa-user menu-icon"></i>
              <span class="menu-title">Subject</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="subject_1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="add_subject.php">Add Subject</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="view_subject.php">View Subject</a></li>
              </ul>
            </div>
          </li>
          
                   ]
        </ul>
      </nav> 