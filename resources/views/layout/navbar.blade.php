@php
$navbarBackground = '';
$navbarInputBackground = '#E8F5FC';
$chatNavbarHeading = '';
$displayPageName = 'none';
$dropdownIconColor = "";
$pagename = '';
$dashboardBellIcon = 'dashboard-bell-icon';
$dashboardOnlineIcon = 'dashboard-online-icon';
@endphp
@if(Request::is('chat'))
@php
$navbarBackground = '#1B2137';
$navbarInputBackground = '#FFFFFF1F';
$chatNavbarHeading = 'chat-navbar-heading';
$displayPageName = 'block';
$dropdownIconColor = "#E8F5FC";
$pagename = 'Chat';
$dashboardBellIcon = 'chat-bell-icon';
$dashboardOnlineIcon = 'chat-online-icon';
@endphp
@endif

@if(Request::is('profile'))
@php
$navbarBackground = '#1B2137';
$navbarInputBackground = '#FFFFFF1F';
$chatNavbarHeading = 'chat-navbar-heading';
$displayPageName = 'block';
$pagename = 'My Profile';
$dropdownIconColor = "#E8F5FC";
$dashboardBellIcon = 'chat-bell-icon';
$dashboardOnlineIcon = 'chat-online-icon';
@endphp
@endif
@if(Request::is('editprofile'))
@php
$navbarBackground = '#1B2137';
$navbarInputBackground = '#FFFFFF1F';
$chatNavbarHeading = 'chat-navbar-heading';
$displayPageName = 'block';
$pagename = 'Edit Profile';
$dropdownIconColor = "#E8F5FC";
$dashboardBellIcon = 'chat-bell-icon';
$dashboardOnlineIcon = 'chat-online-icon';
@endphp
@endif



@if(Request::is('search-inquiry')||Request::is('Addinquiry')||Request::is('Newinquiry')||Request::is('ClientDetail')||Request::is('proposaldetails')||Request::is('pendingFollowup')||Request::is('doneFollowup')||Request::is('lead')||Request::is('setting'))
@php
$navbarBackground = '#1B2137';
$navbarInputBackground = '#FFFFFF1F';
$chatNavbarHeading = 'chat-navbar-heading';
$displayPageName = 'block';
$pagename = 'Enquiry';
$dropdownIconColor = "#E8F5FC";
$dashboardBellIcon = 'chat-bell-icon';
$dashboardOnlineIcon = 'chat-online-icon';
@endphp

@endif




@if(Request::is('createuser')||Request::is('role'))
@php
$navbarBackground = '#1B2137';
$navbarInputBackground = '#FFFFFF1F';
$chatNavbarHeading = 'chat-navbar-heading';
$displayPageName = 'block';
$dropdownIconColor = "#E8F5FC";
$dashboardBellIcon = 'chat-bell-icon';
$dashboardOnlineIcon = 'chat-online-icon';
@endphp

@endif
    <div class="row">
      <div class="col-sm-12">

        <header id="header" class="header top-fixed d-flex align-items-center" style="background: {{$navbarBackground}}">
  

          @php
          $headerUsername = '';
          $displayUsername = 'none';
          $displayPageName = 'block';
          @endphp
          @if(Request::is('dashboard'))
<style>
  input::placeholder{
    color: black !important;
  }
</style>
@php

$displayUsername = 'block';
$displayPageName = 'none';

@endphp
@endif
      <div class="header-username {{$chatNavbarHeading}}" style="display: {{$displayUsername}}">
        <h1 style="font-size: 16px; font-weight: 600">Hey {{  auth()->user()->first_name . " " . auth()->user()->last_name }}</h1>
        <p>Welcome to Dashboard</p>
      </div>
      <div class="header-pagename" style="display: {{$displayPageName}}">
        <h1 style="font-size: 36px; font-weight: 600">{{$pagename}}</h1>
      </div>
     <div style="display: flex">
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
                  <img src="assets/icon/{{$dashboardBellIcon}}.png" alt="bell-icon" class="rounded-circle nav-icon">
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
                  <img src="assets/icon/{{$dashboardOnlineIcon}}.png" alt="online-icon" class="rounded-circle nav-icon">

                    <i class="bi bi-caret-down-fill online-dropdown-icon" style="color: {{$dropdownIconColor}}"></i>
              
                 
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
      
                <a class="nav-link nav-icon nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  @php
                             $preifix  =  (env("APP_ENV")== "local") ? 'BELLWAY-CRM' : '';
                             @endphp
                  <img src="{{ asset($preifix.'/public/uploads') . '/' .( auth()->user()->profile_photo_path) }}" alt="Profile" class="rounded-circle nav-icon">
                  <i class="bi bi-caret-down-fill online-dropdown-icon" style="color: {{$dropdownIconColor}}; margin-left: 20px"></i>
                </a><!-- End Profile Iamge Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  profile">
               
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ url('/') }}/profile">
                      <i class="bi bi-person profile-dropdown-icon"></i>
                      <span>My Profile</span>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
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
        </div>
          </header><!-- End Header -->
       </div>
  </div>
