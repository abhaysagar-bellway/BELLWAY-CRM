@include('layout.header')
<div class="container">
<div class="row">
@include('layout.sidebar')
<div class="col-10">
@include('layout.navbar')
</div>
</div>

</div>
    @if (session('status'))
        <div class="alert alert-success text-center success" id="success" role="alert">
            {{ session('status') }}
        </div>
    @endif
   <div class="logo-head">
        <div class="inquiry-header">
            <label for="date"class="inquiry-lable"><img src="assets/img/username-logo.png" alt=""
                    class="inquiry-logo"></label>
            <h3 id="inquiry-header">Create Employee</h3>
        </div>
    </div>
    @if (session('error'))
        <span class="text-danger text-center">{{ session('error') }}</span>
    @endif
    <div class="enquiry-container">

        <form action="{{ url('/') }}/create-user" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="enquiry-row row ">
                <div class="form-group col-md-6">
                    <label for="name" class="row-text">First Name</label>
                    <div class="input-inline-inquiry"><label for="name" class="inquiry-lable"><img
                                src="assets/img/username-logo.png" alt="" class="form-icon"></label>
                        <input type="name" class="form-control input-box-enquiry rectangle" name="first_name"
                            id="" aria-describedby="date" placeholder="Enter the First Name">
                    </div>


                    <div class="input-inline">
                        <span class="text-danger">
                            @error('first_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="row-text">Last Name</label>
                    <div class="input-inline-inquiry"><label for="name" class="inquiry-lable"><img
                                src="assets/img/user.png" alt="" class="form-icon"></label>
                        <input type="name" class="form-control input-box-enquiry rectangle" name="last_name"
                            id="" aria-describedby="date" placeholder="Enter the Last Name">
                    </div>


                    <div class="input-inline">
                        <span class="text-danger">
                            @error('last_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="role" class="row-text">Role</label>
                    <div class="input-inline-inquiry"><label for="role" class="inquiry-lable"><img
                                src="assets/img/setting.png" alt="image" class="form-icon"></label>
                                <select class="form-control input-box-enquiry rectangle" name="role" aria-label="Default select example">
                                    <option selected>choose option</option>
                                    <option value="Laravel_Developer">Laravel_Developer</option>
                                      <option value="Flutter_Developer">Flutter_Developer</option>
                                      <option value="Digital_Marketing">Digital_Marketing</option>
                                      <option value="Graphic_Designer">Graphic_Designer</option>
                                      <option value="Business_Development_Executive">Business_Development_Executive</option>
                                      <option value="Project_Coordinator">Project_Coordinator</option>
                                  </select> 
                    </div>



                    <div class="input-inline">
                        <span class="text-danger">
                            @error('role')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="number" class="row-text">Mobail Number</label>
                    <div class="input-inline-inquiry"><label for="number" class="inquiry-lable"><img
                                src="assets/img/call.png" alt="" class="form-icon"></label>
                        <input type="number" class="form-control input-box-enquiry rectangle" name="number"
                            id="" aria-describedby="" placeholder="Enter the Employee Mobile Number">
                    </div>

                    <div class="input-inline">
                        <span class="text-danger">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="email" class="row-text">Email</label>
                    <div class="input-inline-inquiry"><label for="email" class="inquiry-lable"><img
                                src="assets/img/email-logo.png" alt="" class="form-icon"></label>
                        <input type="email" class="form-control input-box-enquiry rectangle" name="email"
                            id="" aria-describedby="" placeholder="Enter the Employee Email ID">

                    </div>


                    <div class="input-inline">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="password" class="row-text">Password</label>
                    <div class="input-inline-inquiry"><label for="password" class="inquiry-lable"><img
                                src="assets/img/padlock.png" alt="" class="form-icon"></label>
                        <input type="password" class="form-control input-box-enquiry rectangle" name="password"
                            id="" aria-describedby="" placeholder="Enter the Password">
                    </div>


                    <div class="input-inline">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="" class="row-text">upload Image</label>
                    <div class="input-inline-inquiry"><label for="" class="inquiry-lable"><img
                                src="assets/img/city.png" alt="" class="form-icon"></label>
                        <input type="file" class="form-control input-box-enquiry rectangle" name="upload_image"
                            id="" aria-describedby="" placeholder="Upload Image"
                            style="padding: 15px;
                               background-image: linear-gradient(180deg, #3E4768, #1B2137);
                                 color: #ffffff !important;">
                    </div>

                    <div class="input-inline">
                        <span class="text-danger">
                            @error('upload_image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="submit-inquiry">
                        <label for="text" class="row-text"></label>
                        <div class="input-inline-inquiry"> <button type="submit" class="submit-btn" onclick="message()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

        <div class="container scrollmenu">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">SNO.</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Role</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        {{-- <th scope="col">Password</th> --}}
                        <th scope="col">Profile</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employeeData as $employees)
                        <tr>
                            <th scope="row">{{ $employees->id }}</th>
                            <td>{{ $employees->first_name }}</td>
                            <td>{{ $employees->last_name }}</td>
                            <td>{{ $employees->role }}</td>
                            <td>{{ $employees->number }}</td>
                            <td>{{ $employees->email }}</td>
                            {{-- <td>{{ $employees->password }}</td> --}}
                            <td>
                                <img src="{{ asset('/uploads/') . '/' . $employees->upload_image }}" width="50px"
                                    height="50px" alt="image">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('layout.footer')
