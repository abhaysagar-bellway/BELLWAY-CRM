@php
$sidebarClass = '';
$sidebarWidth = '';
$sidebarLogo = '';
$sidebarPadding = '';
$backgroundColor = '#E8F5FC';
$sidebarBackground = 'sidebar-background'
@endphp
@if(Request::is('chat'))
@php
$sidebarClass = 'none';
$sidebarWidth = '50px';
$sidebarLogo = '20px';
$sidebarPadding = '50px';
$sidebarBackground = '';
$backgroundColor = ''
@endphp
@endif


@if(Request::is('dashboard'))
@php
$backgroundColor = '#1B2137'
@endphp
@endif

    <div class="col-2" style="width: 20%; ">

        <!-- ======= Sidebar ======= -->
      <aside id="sidebar" class="sidebar {{$sidebarBackground}}" style="width: {{$sidebarWidth}}; background: {{$backgroundColor}}">
      
         <div class="sidebar-logo">
           <img src="assets/img/bellway-logo.png" alt="" class="logo" style="width: {{$sidebarLogo}}; padding-bottom : {{$sidebarPadding}}">
         </div>
       
           <h1 class="logo-heading" id="logoHeading" style="color:  #3DFFC1; display: {{$sidebarClass}}">Bellway CRM</h1>
       
         <ul class="sidebar-nav" id="sidebar-nav">
       
           <li class="nav-item">
             <a class="nav-link " href="">
               <i class="bi bi-grid"></i>
               <span style="font-weight: 600; display: {{$sidebarClass}}">Dashboard</span>
             </a>
           </li><!-- End Dashboard Nav -->
       
           <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
               <i class="bi bi-menu-button-wide"></i><span  style="display: {{$sidebarClass}}">Enquiry</span><i style="display: {{$sidebarClass}}" class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content collapse dropdown-scroll" data-bs-parent="#sidebar-nav">
               <li>
                 <a href="components-alerts.html">
                   <i class="bi bi-circle"></i><span>Search Enquiry</span>
                 </a>
               </li>
               <li>
                 <a href="components-accordion.html">
                   <i class="bi bi-circle"></i><span>Add Enquiry</span>
                 </a>
               </li>
               <li>
                 <a href="components-badges.html">
                   <i class="bi bi-circle"></i><span>New Enquiry</span>
                 </a>
               </li>
               <li>
                 <a href="components-breadcrumbs.html">
                   <i class="bi bi-circle"></i><span>Client Details</span>
                 </a>
               </li>
               <li>
                 <a href="components-buttons.html">
                   <i class="bi bi-circle"></i><span>Purposal Details</span>
                 </a>
               </li>
               <li>
                 <a href="components-cards.html">
                   <i class="bi bi-circle"></i><span>Pending Follow up</span>
                 </a>
               </li>
               <li>
                 <a href="components-carousel.html">
                   <i class="bi bi-circle"></i><span>Done Follow up</span>
                 </a>
               </li>
               <li>
                 <a href="components-list-group.html">
                   <i class="bi bi-circle"></i><span>Allocated Leads to me</span>
                 </a>
               </li>
            
             </ul>
           </li><!-- End Components Nav -->
       
          
       
           <li class="nav-item">
             <a class="nav-link collapsed" href="{{url('/')}}/chat" >
               <i class="bi bi-chat"></i>
               <span  style="display: {{$sidebarClass}}">Chat</span>
             </a>
           </li><!-- End chat Page Nav -->
       


           <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
              <i class="bi bi-gear"></i>
              <span  style="display: {{$sidebarClass}}">Setting</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
              <i class="bi bi-person-add"></i>
              <span  style="display: {{$sidebarClass}}">Create User</span>
            </a>
          </li>

       
           <li class="nav-item">
             <a class="nav-link collapsed" href="">
               <i class="bi bi-box-arrow-in-right"></i>
               <span  style="display: {{$sidebarClass}}">Logout</span>
             </a>
           </li>
       
         </ul>
       
          </aside>

       </div>


