@php
$sidebarClass = '';
$sidebarWidth = '';
$sidebarLogo = '';
$sidebarPadding = '';
$backgroundColor = '#E8F5FC';
$sidebarBackground = 'sidebar-background';
$sidebarHeading = '#000000';
@endphp
@if(Request::is('chat'))
@php
$sidebarClass = 'none';
$sidebarWidth = '50px';
$sidebarLogo = '20px';
$sidebarPadding = '50px';
$sidebarBackground = '';
$backgroundColor = '';
@endphp
@endif


@if(Request::is('dashboard'))
<style>
  .dropdown-hover:hover{
    color: #000000 !important;
  }
</style>
@php
$backgroundColor = '#1B2137';
$sidebarHeading = '#3DFFC1';

@endphp
@endif

    <div class="col-2" style="width: 15%; ">
      @php
          $dashboardColorClass = 'dashboard-color';
          $navlink = 'nav-link';
          $navLinkColor = '';
       @endphp
     @if(Request::is('search-inquiry')||Request::is('Addinquiry')||Request::is('Newinquiry')||Request::is('ClientDetail')||Request::is('proposaldetails')||Request::is('pendingFollowup')||Request::is('doneFollowup')||Request::is('lead')||Request::is('chat')||Request::is('setting')||Request::is('createuser')||Request::is('role')||Request::is('profile')||Request::is('editprofile'))
        @php
          $dashboardColorClass = '';
          $navLinkColor = '#444444';
        @endphp
      @endif
        

        <!-- ======= Sidebar ======= -->
      <aside id="sidebar" class="sidebar {{$sidebarBackground}}" style="width: {{$sidebarWidth}}; background: {{$backgroundColor}}">
      
         <div class="sidebar-logo">
           <img src="assets/img/bellway-logo.png" alt="" class="logo" style="width: {{$sidebarLogo}}; padding-bottom : {{$sidebarPadding}}">
         </div>
       
           <h1 class="logo-heading" id="logoHeading" style="color: {{$sidebarHeading}}; display: {{$sidebarClass}}">Bellway CRM</h1>
       
         <ul class="sidebar-nav" id="sidebar-nav">
       
           <li class="nav-item">
            <a class="{{$navlink}}" href="{{url('/')}}/dashboard" style="color: {{$navLinkColor}}">
               <i class="bi bi-grid"></i>
               <span style="font-weight: 600; display: {{$sidebarClass}}">Dashboard</span>
             </a>
           </li><!-- End Dashboard Nav -->
       
           <li class="nav-item">
            <a class="{{$navlink}} collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="" style="color: {{$navLinkColor}}">
              <i class="bi bi-search"></i><span  style="display: {{$sidebarClass}}">Enquiry</span><i style="display: {{$sidebarClass}}" class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content collapse dropdown-scroll" data-bs-parent="#sidebar-nav">
               <li>
                <a href="{{url('/')}}/search-inquiry" class=" {{$navlink}} dropdown-hover"style="color:{{$navLinkColor}}">
                   <i class="bi bi-circle"></i><span>Search Enquiry</span>
                 </a>
               </li>
               <li>
                <a href="{{url('/')}}/Addinquiry" class="{{$navlink}} dropdown-hover" style="color: {{$navLinkColor}}">
                   <i class="bi bi-circle"></i><span>Add Enquiry</span>
                 </a>
               </li>
               <li>
                <a href="{{url('/')}}/Newinquiry" class="{{$navlink}} dropdown-hover" style="color: {{$navLinkColor}}" >
                   <i class="bi bi-circle"></i><span>New Enquiry</span>
                 </a>
               </li>
               <li>
                <a href="{{url('/')}}/ClientDetail" class="{{$navlink}} dropdown-hover" style="color: {{$navLinkColor}}">
                   <i class="bi bi-circle"></i><span>Client Details</span>
                 </a>
               </li>
               <li>
                <a href="{{url('/')}}/proposaldetails" class="{{$navlink}} dropdown-hover"style="color: {{$navLinkColor}}">
                  <i class="bi bi-circle " ></i><span>Purposal Details</span>
                </a>
              </li>
              <li>
                <a href="{{url('/')}}/pendingFollowup" class="{{$navlink}} dropdown-hover" style="color: {{$navLinkColor}}" >
                  <i class="bi bi-circle  "></i><span>Pending Follow up</span>
                </a>
              </li>
              <li>
                <a href="{{url('/')}}/doneFollowup" class="{{$navlink}} dropdown-hover" style="color: {{$navLinkColor}}" >
                  <i class="bi bi-circle " ></i><span>Done Follow up</span>
                </a>
              </li>
              <li>
                <a href="{{url('/')}}/lead" class="{{$navlink}} dropdown-hover"style="color: {{$navLinkColor}}">
                  <i class="bi bi-circle  " ></i><span>Allocated Leads to me</span>
                </a>
              </li>
            
             </ul>
           </li><!-- End Components Nav -->
       
          
       
           <li class="nav-item">
            <a class="{{$navlink}} collapsed" href="{{url('/')}}/chat" style="color:{{$navLinkColor}}">
               <i class="bi bi-chat"></i>
               <span  style="display: {{$sidebarClass}}">Chat</span>
             </a>
           </li><!-- End chat Page Nav -->
       


           <li class="nav-item">
            <a class="{{$navlink}} collapsed" href="{{url('/')}}/setting"  style="color:{{$navLinkColor}}">
              <i class="bi bi-gear"></i>
              <span  style="display: {{$sidebarClass}}">Setting</span>
            </a>
          </li>

         
        <li class="nav-item">
         

          <a class="{{$navlink}} collapsed" data-bs-target="#createuser" data-bs-toggle="collapse" href="" style="color: {{$navLinkColor}}">
            <i class="bi bi-person-add"></i><span  style="display: {{$sidebarClass}}">Create User</span><i  style="display: {{$sidebarClass}}" class="bi bi-chevron-down ms-auto"></i>
          </a>
            <ul id="createuser" class="nav-content collapse dropdown-scroll" data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{ url('/') }}/createuser"
                             class=" {{ $navlink }} dropdown-hover"style="color:{{ $navLinkColor }}">
                             <i class="bi bi-circle"></i><span>Create Employee</span>
                         </a>
              </li>
              <li>
               <a href="{{ url('/') }}/role" class="{{ $navlink }} dropdown-hover"
                             style="color: {{ $navLinkColor }}">
                             <i class="bi bi-circle "></i><span>Employee Role</span>
                         </a>
              </li>
          </ul>
        </li>
           
        <li class="nav-item">
          <a class="{{$navlink}} collapsed"  onclick="logout({{auth()->user()->role_id}})" style="color: {{$navLinkColor}}" id="logoutButton">
            <i class="bi bi-box-arrow-in-right"></i>
            <span  style="display: {{$sidebarClass}}" id="logoutButton" style="cursor: pointer">Logout</span>
          </a>
        </li>
       
         </ul>

     </aside><!-- End Sidebar-->
 </div>
 {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
