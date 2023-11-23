@include('layout.header')
<div class="container">
    <div class="row">
        @include('layout.sidebar')
        <div class="col-10">
            @include('layout.navbar')
        </div>
    </div>
</div>

<div class="logo-head">
    <div class="inquiry-header">
        <label for="date"class="inquiry-lable"><img src="assets/img/username-logo.png" alt=""
                class="inquiry-logo"></label>
        <h3 id="inquiry-header">Update Personal Information</h3>
    </div>
    
</div>

@if (session('status'))
    <div class="alert alert-success success" id="success" role="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session('status') }}
    </div>
@endif
@if (session('error'))
    <span class="text-danger text-center">{{ session('error') }}</span>
@endif

<div class="enquiry-container">

    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="enquiry-row row ">
            <div class="form-group col-md-6">
                <label for="name" class="row-text">First Name</label>
                <div class="input-inline-inquiry"><label for="name" class="inquiry-lable"><img
                            src="assets/img/username-logo.png" alt="" class="form-icon"></label>
                    <input type="name" class="form-control input-box-enquiry rectangle" name="first_name"
                        value="{{$user->first_name}}" id="" aria-describedby="date" placeholder="Enter the First Name" >
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
                        value="{{$user->last_name}}" id="" aria-describedby="date" placeholder="Enter the Last Name" >
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
                <label for="number" class="row-text">Mobail Number</label>
                <div class="input-inline-inquiry"><label for="number" class="inquiry-lable"><img
                            src="assets/img/call.png" alt="" class="form-icon"></label>
                    <input type="number" class="form-control input-box-enquiry rectangle" name="mobile_number"
                      value="{{$user->mobile_number}}"  id="" aria-describedby="" placeholder="Enter the Employee Mobile Number" >
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
                <label for="email" class="row-text">Email Address</label>
                <div class="input-inline-inquiry"><label for="email" class="inquiry-lable"><img
                            src="assets/img/email-logo.png" alt="" class="form-icon"></label>
                    <input type="email" class="form-control input-box-enquiry rectangle" name="email" id=""
                   value="{{$user->email}}"     aria-describedby="" placeholder="Enter the Employee Email ID" >

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
                <label for="date" class="row-text">Date of Birth</label>
                <div class="input-inline-inquiry">
                    <label for="date" class="inquiry-lable">
                        <img src="assets/img/birth.png" alt="" class="form-icon">
                    </label>
                    <input type="text" class="form-control input-box-enquiry rectangle" name="date_of_birth"
                           value="{{$user->date_of_birth}}" 
                           placeholder="Date of Birth">
                </div>
                <div class="input-inline">
                    <span class="text-danger">
                        @error('date_of_birth')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            

            <div class="form-group col-md-6">
                <label for="gender" class="row-text">Gender</label>
                <div class="input-inline-inquiry">
                    <label for="role" class="inquiry-lable">
                        <img src="assets/img/gender.png" alt="image" class="form-icon">
                    </label>
                    <select class="form-control input-box-enquiry rectangle" name="gender" aria-label="Default select example" >
                        <option value="Male" {{ $user->gender === 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $user->gender === 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ $user->gender === 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                <div class="input-inline">
                    <span class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            

            <div class="form-group col-md-6">
                <label for="address" class="row-text">Address</label>
                <div class="input-inline-inquiry"><label for="address" class="inquiry-lable"><img
                            src="assets/img/address.png" alt="" class="form-icon"></label>
                    <input type="address" class="form-control input-box-enquiry rectangle" name="address"
                      value="{{$user->address}}"  id="" aria-describedby="" placeholder="Address" >
                </div>
                <div class="input-inline">
                    <span class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="" class="row-text">Change Profile Image</label>
                <div class="input-inline-inquiry">
                    <label for="" class="inquiry-lable">
                        <img src="assets/img/city.png" alt="" class="form-icon">
                    </label>
                    <input type="file" class="form-control input-box-enquiry rectangle" name="profile_photo_path" placeholder="Upload Profile Photo" style="padding: 15px; background-image: linear-gradient(180deg, #3E4768, #1B2137); color: #ffffff !important;">
                </div>
            
                <div class="input-inline">
                    <span class="text-danger">
                        @error('profile_photo_path')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group col-md-6">
                <div class="submit-inquiry">
                    <label for="text" class="row-text"></label>
                    <div class="input-inline-inquiry"> <button type="submit" class="submit-btn"
                            onclick="message()">Save</button>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="submit-inquiry">
                    <label for="text" class="row-text"></label>
                    <div class="input-inline-inquiry"> <button type="submit"
                            class="submit-btn-cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
@include('layout.footer')
