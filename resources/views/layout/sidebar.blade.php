 <div class="col-3 ">

     <!-- ======= Sidebar ======= -->
     @php
         $dashboardColorClass = 'dashboard-color';
         $navlink = 'nav-link';
         $navLinkColor = '';
     @endphp
     @if (Request::is('search-inquiry') ||
             Request::is('Addinquiry') ||
             Request::is('Newinquiry') ||
             Request::is('ClientDetail') ||
             Request::is('proposaldetails') ||
             Request::is('pendingFollowup') ||
             Request::is('doneFollowup') ||
             Request::is('lead') ||
             Request::is('chat') ||
             Request::is('setting') ||
             Request::is('createuser')||
             Request::is('role'))
         @php
             $dashboardColorClass = '';
             $navLinkColor = '#444444';
         @endphp
     @endif

     <aside id="sidebar" class="sidebar {{ $dashboardColorClass }}">

         <div class="sidebar-logo">
             <img src="assets/img/bellway-logo.png" alt="" class="logo">
         </div>

         <h1 class="logo-heading" style="color:#3DFFC1;">Bellway Infotech</h1>

         <ul class="sidebar-nav" id="sidebar-nav">

             <li class="nav-item">
                 <a class="{{ $navlink }}" href="{{ url('/') }}/dashboard" style="color: {{ $navLinkColor }}">
                     <i class="bi bi-grid"></i>
                     <span>Dashboard</span>
                 </a>
             </li><!-- End Dashboard Nav -->

             <li class="nav-item">
                 <a class="{{ $navlink }} collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                     href="" style="color: {{ $navLinkColor }}">
                     <i class="bi bi-menu-button-wide"></i><span>Enquiry</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="components-nav" class="nav-content collapse dropdown-scroll" data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="{{ url('/') }}/search-inquiry"
                             class=" {{ $navlink }}"style="color:{{ $navLinkColor }}">
                             <i class="bi bi-circle"></i><span>Search Enquiry</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/') }}/Addinquiry" class="{{ $navlink }}"
                             style="color: {{ $navLinkColor }}">
                             <i class="bi bi-circle "></i><span>Add Enquiry</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/') }}/Newinquiry" class="{{ $navlink }}"
                             style="color: {{ $navLinkColor }}">
                             <i class="bi bi-circle  "></i><span>New Enquiry</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/') }}/ClientDetail" class="{{ $navlink }}"
                             style="color: {{ $navLinkColor }}">
                             <i class="bi bi-circle  "></i><span>Client Details</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/') }}/proposaldetails"
                             class="{{ $navlink }}"style="color: {{ $navLinkColor }}">
                             <i class="bi bi-circle "></i><span>Purposal Details</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/') }}/pendingFollowup" class="{{ $navlink }}"
                             style="color: {{ $navLinkColor }}">
                             <i class="bi bi-circle  "></i><span>Pending Follow up</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/') }}/doneFollowup" class="{{ $navlink }}"
                             style="color: {{ $navLinkColor }}">
                             <i class="bi bi-circle "></i><span>Done Follow up</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/') }}/lead"
                             class="{{ $navlink }}"style="color: {{ $navLinkColor }}">
                             <i class="bi bi-circle  "></i><span>Allocated Leads to me</span>
                         </a>
                     </li>

                 </ul>
             </li><!-- End Components Nav -->



             <li class="nav-item">
                 <a class="{{ $navlink }} collapsed" href="{{ url('/') }}/chat"
                     style="color:{{ $navLinkColor }}">
                     <i class="bi bi-chat"></i>
                     <span>Chat</span>
                 </a>
             </li><!-- End chat Page Nav -->



             <li class="nav-item">
                 <a class="{{ $navlink }} collapsed" href="{{ url('/') }}/setting"
                     style="color:{{ $navLinkColor }}">
                     <i class="bi bi-gear"></i>
                     <span>Setting</span>
                 </a>
             </li>

             <li class="nav-item">
                 <a class="{{ $navlink }} collapsed" data-bs-target="#createuser" data-bs-toggle="collapse"
                     href="" style="color: {{ $navLinkColor }}">
                     <i class="bi bi-person-add"></i><span>Create User</span><i class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="createuser" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="{{ url('/') }}/createuser"
                             class=" {{ $navlink }}"style="color:{{ $navLinkColor }}">
                             <i class="bi bi-circle"></i><span>Create Employee</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ url('/') }}/role" class="{{ $navlink }}"
                             style="color: {{ $navLinkColor }}">
                             <i class="bi bi-circle "></i><span>Employee Role</span>
                         </a>
                     </li>
                 </ul>
             </li>

             <li class="nav-item">
                 <a class="{{ $navlink }} collapsed" href="{{ url('/') }}"
                     style="color: {{ $navLinkColor }}">
                     <i class="bi bi-box-arrow-in-right"></i>
                     <span>Logout</span>
                 </a>
             </li><!-- End Logout Page Nav -->

         </ul>

     </aside><!-- End Sidebar-->
 </div>
