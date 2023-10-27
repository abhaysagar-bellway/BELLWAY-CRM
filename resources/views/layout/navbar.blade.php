@php
$navbarBackground = '';
$navbarInputBackground = '#E8F5FC'
@endphp
@if(Request::is('chat'))
@php
$navbarBackground = '#1B2137';
$navbarInputBackground = '#FFFFFF1F'
@endphp
@endif

    <div class="row">
      <div class="col-sm-12">

        <header id="header" class="header top-fixed d-flex align-items-center" style="background: {{$navbarBackground}}">
  
          {{-- <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
          </div><!-- End Logo --> --}}
          @if(Request::is('dashboard'))
<style>
  input::placeholder{
    color: black !important;
  }
</style>
@endif
      <div class="header-username">
        <h1 style="font-size: 16px; font-weight: 600">Hey Maaz</h1>
        <p>Here is your sales forecast dashboard </p>
      </div>
          <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="">
              
              <input type="text" name="query" placeholder="Search your query" title="Enter search keyword" style="background-color: {{$navbarInputBackground}}; height: 30px; font-size: 12px">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
          </div><!-- End Search Bar -->
      
          <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
      
              <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                  <i class="bi bi-search"></i>
                </a>
              </li><!-- End Search Icon-->
      
              <li class="nav-item dropdown">
      
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                  <i class="bi bi-bell-fill"></i>
            <i class="bi bi-dot badge-number"></i>
                </a><!-- End Notification Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="background: #E8F5FC">
                 
      
                  <li class="notification-item">
                    <img src="assets/img/profile-img.png" alt="" class="chat-box-message-image">
                    <div style="margin-left: 10px">
                      <h4>Lorem Ipsum</h4>
                      <p>30 min. ago</p>
                    </div>
                    <h4 style="margin-left: 80px; font-weight: 900;">view</h4>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
           
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
               
                  <li class="notification-item">
                    <img src="assets/img/profile-img.png" alt="" class="chat-box-message-image">
                    <div style="margin-left: 10px">
                      <h4>Lorem Ipsum</h4>
                      <p>30 min. ago</p>
                    </div>
                    <h4 style="margin-left: 80px; font-weight: 900;">view</h4>
                  </li>
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
             
      
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li class="dropdown-footer">
                    <a href="#">Show all notifications</a>
                  </li>
      
                </ul><!-- End Notification Dropdown Items -->
      
              </li><!-- End Notification Nav -->
      
              <li class="nav-item dropdown">
      
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                      <i class="bi bi-circle-fill"></i>
                      <i class="bi bi-dot online-icon"></i>
                    <i class="bi bi-caret-down-fill online-dropdown-icon"></i>
              
                 
                </a><!-- End Messages Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                
              
      
                  <li class="status-item">
                    <a href="#">
                      <img src="assets/icon/online-icon.png" alt="" class="rounded-circle">
                      <div>
                        <h4>Online</h4>
      
                      </div>
                    </a>
                  </li>
              
                  <li class="status-item">
                    <a href="#">
                      <img src="assets/icon/meeting-icon.png" alt="" class="rounded-circle">
                      <div>
                        <h4>Meeting</h4>
      
                      </div>
                    </a>
                  </li>
                
           
      
                  <li class="status-item">
                    <a href="#">
                      <img src="assets/icon/oncall-icon.png" alt="" class="rounded-circle">
                      <div>
                        <h4>On Call</h4>
      
                      </div>
                    </a>
                  </li>
                  
                  <li class="status-item">
                    <a href="#">
                      <img src="assets/icon/break-icon.png" alt="" class="rounded-circle">
                      <div>
                        <h4>Break</h4>
      
                      </div>
                    </a>
                  </li>
                  
                  <li class="status-item">
                    <a href="#">
                      <img src="assets/icon/lunch-icon.png" alt="" class="rounded-circle">
                      <div>
                        <h4>Lunch</h4>
      
                      </div>
                    </a>
                  </li>
                </ul><!-- End Messages Dropdown Items -->
      
              </li><!-- End Messages Nav -->
      
              <li class="nav-item dropdown pe-3">
      
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="assets/icon/profile-icon.png" alt="Profile" class="rounded-circle" style="height: 30px; width: 30px">
                  <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                </a><!-- End Profile Iamge Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  profile">
               
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                      <i class="bi bi-person profile-dropdown-icon"></i>
                      <span>My Profile</span>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                      <i class="bi bi-person-gear profile-dropdown-icon"></i>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                
                
                 
      
                </ul><!-- End Profile Dropdown Items -->
              </li><!-- End Profile Nav -->
      
            </ul>
          </nav><!-- End Icons Navigation -->
      
          </header><!-- End Header -->
       </div>
  </div>
