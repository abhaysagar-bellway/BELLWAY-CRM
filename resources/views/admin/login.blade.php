<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bellway Infotech - CRM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<div class="sidebar-logo">
    <img src="assets/img/bellway-logo.png" alt="" class="logo">
  </div>


        <h1 class="logo-heading">Bellway Infotech</h1>

    <div class="login-page-image">
      <img src="assets/img/login-page-img.png" alt="" class="login-page-img">
    </div>

  </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Login</h1>
    
        </div><!-- End Page Title -->

        <div class="login-container">
            <div class="login-header">
                <img src="assets/img/bellway-logo.png" alt="" class="logo-header">
            </div>
            @if (session('error'))
                <span class="text-danger text-center">{{session('error')}}</span>
            @endif
            <div class="login-form">
                <form action="{{url('/')}}/login" method="POST">
                    @csrf
                  <div class="form-group input-inline">
                        <label for="email"><img src="assets/img/email-logo.png" alt=""
                                class="form-icon"></label>

                         @php
                              if(isset($cookieData['email']) && !empty($cookieData['email'])){
                                 $email = $cookieData['email'];
                              } else {
                                 $email = old('email');
                              }
                             
                         @endphp       
                        <input type="email" class="form-control input-box rectangle" name="email" id=""
                            aria-describedby="emailHelpId" placeholder="Email Address" value="{{$email}}">

                  </div>     
                       <div class="input-inline">
                              <span class="text-danger"> 
                                  @error('email')
                                      {{ $message }}
                                  @enderror 
                              </span>
                          </div>
                    
                    {{-- <div class="form-group input-inline">
                        <label for="name"><img src="assets/img/username-logo.png" alt=""
                                class="form-icon"></label>
                                @php
                              if(isset($cookieData['name']) && !empty($cookieData['name'])){
                                 $name = $cookieData['name'];
                              } else {
                                 $name = old('name');
                              }
                             
                         @endphp 
                        <input type="name" class="form-control input-box rectangle" name="name" id=""
                            aria-describedby="emailHelpId" placeholder="Username" 
                           value="{{$name}}" >
                        </div> --}}
                    {{-- <div class="input-inline">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror </span>
                    </div> --}}
                    <div class="form-group input-inline">
                        <label for="password"><img src="assets/img/password-logo.png" alt=""
                                class="form-icon"></label>

                                @php
                              if(isset($cookieData['password']) && !empty($cookieData['password'])){
                                 $password = $cookieData['password'];
                              } else {
                                 $password = old('password');
                              }
                             
                         @endphp 
                        <input type="password" class="form-control input-box rectangle" name="password" id=""
                            aria-describedby="" placeholder="Password" value="{{$password}}" >
                       </div> 
                       <div class="input-inline">
                        <span class="text-danger"> 
                            @error('password')
                                {{ $message }}
                            @enderror </span>
                    </div>
 
                    
                    <div class="input-inline">
                        @php
                        if(isset($cookieData['remember_me']) && !empty($cookieData['remember_me'])){
                           $checked =  "checked";
                        } else {
                           $checked = '';
                        }
                       
                   @endphp 
                        <input type="checkbox" id="rememberMe" name="checkbox" value="" class="checkbox" <?=$checked?>>
                        <label for="rememberMe" class="checkbox"> Remember me</label><br>
                    </div>
                    <button type="submit" class="login-btn">Login</button>
                </form>
            </div>
        </div>


        </div>
     <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


</body>

</html>
