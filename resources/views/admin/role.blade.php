<div class="enquiry-container">
    @include('layout.header')
    @include('layout.sidebar')

    <div class="enquiry-title">
        <h1>Role Of Employee</h1>
    </div>
    <div class="logo-head">
        <div class="inquiry-header">
            <label for="date"class="inquiry-lable"><img src="assets/img/search-enquiry.png" alt=""
                    class="inquiry-logo"></label>
            <h3 id="inquiry-header">Employee Role</h3>
        </div>
    </div>

    <div class="enquiry-container">

        <form action="{{url('/search-inquiry-data')}}" method="POST">
            @csrf
            <div class="enquiry-row row ">
                <div class="form-group col-md-6">
                    <label for="name" class="row-text">Role Name</label>
                    <div class="input-inline-inquiry"><label for="name" class="inquiry-lable"><img
                                src="assets/img/user.png" alt="" class="form-icon"></label>
                        <input type="name" class="form-control input-box-enquiry rectangle" name="rolename"
                            id="" aria-describedby="role" placeholder="Enter the role">
                    </div>

                </div>

                <div class="enquiry-title">
                    <h3 id="module-permission">Module Permission</h3>
                </div>

                <div class="form-group col-md-6">
                    <div class="submit-inquiry">
                        <label for="text" class="row-text"></label>
                        <div class="input-inline-inquiry"> <button type="submit"
                                class="submit-btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    @include('layout.footer')
</div>
