
 <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="images/Fearless.png" width="295" height="343" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
      
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/icon.png" alt="profile"/>
              <?php 
              if(isset($_SESSION['auth'])){
              echo $_SESSION['auth_user']['user_name'];              
              }
              else{
                  echo "Not Logged In";
              }
              ?>

            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <div class="dropdown-divider"></div>
              <!-- <a class="dropdown-item" href= "index.php">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a> -->
              
              <form action="code.php" method="POST">
                
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
              </form>
            </div>
          </li>
         
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>