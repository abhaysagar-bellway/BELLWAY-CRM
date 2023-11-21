@php
$leftSide = '';
$sidebarSearch = '';
@endphp
@if(Request::is('chat'))
@php
$leftSide = '60px';
$sidebarSearch = '#191F33';
@endphp
@endif



<div class="col-3" style="width: 20%;">

    <!-- ======= Sidebar ======= -->
     <aside id="sidebar" class="sidebar sidebar-background" style="left: {{$leftSide}}">
   
     <div class="sidebar-image">
       <img src="assets/img/profile-img.png" alt="" class="logo">
       <h1 class="sidebar-username">Maaz</h1>
     </div>
   
     <div class="search-bar sidebar-search">
        <form class="search-form d-flex align-items-center" method="POST" action="">
            <button type="submit" title="Search" style="background: #191F33; border: 0px"><i class="bi bi-search" style="color: white"></i></button>
          <input class="sidebar-search-input" type="text" name="query"  placeholder="Search People, Group, Message" title="Enter search keyword">
        
        </form>
      </div>

      <div class="sidebar-icon-container">
        <a class="nav-link sidebar-icon" href="#">
            <i class="bi bi-chat-dots"></i>
            <p class="sidebar-icon-name">Chat</p>
          </a>

          <a class="nav-link sidebar-icon" href="#">
            <i class="bi bi-telephone"></i>
            <p class="sidebar-icon-name">Call</p>
          </a>
          <a class="nav-link sidebar-icon" href="#">
            <i class="bi bi-person-add"></i>
            <p class="sidebar-icon-name">Contact</p>
          </a>

          
        
      </div>
   
     <ul class="sidebar-nav" id="sidebar-chat">
   

   
       <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#components-chat" data-bs-toggle="collapse" href="#">
            <h1 class="sidebar-chat-heading">chat</h1><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         {{-- <ul id="components-chat" class="nav-content-chat-list collapse dropdown-chat-scroll" data-bs-parent="#sidebar-chat">
          @foreach ($employeeData as $employe)
          <li>
             <a href="components-alerts.html">
                <div class="sidebar-chat-list">
                   @php
                    if($employe->upload_image != '' && $employe->upload_image != null ){
                      $image = asset('/uploads/') . '/' . $employe->upload_image;

                    }else{
                      $image = 'assets/icon/profile-icon.png';
                    }
                  @endphp
                    <img src="{{$image}}" alt="" class="chat-list-image">
                    <h1 class="sidebar-chat-list-username">{{ $employe->first_name }}
                      {{$employe->last_name}}</h1>
                  </div>
                  <div>
                      <img src="assets/icon/online-icon.png" alt="" class="rounded-circle chat-list-status-icon">

                </div>
 
              
             </a>
           </li>
           @endforeach
  
        
         </ul> --}}
       </li><!-- End Components Nav -->
   
      
   

   
     </ul>
   
      </aside><!-- End Sidebar-->

   </div>