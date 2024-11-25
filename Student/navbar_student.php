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
                
      </nav> 