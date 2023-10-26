<div class="enquiry-container">
    @include('layout.header')
    @include('layout.sidebar')

    <div class="enquiry-title">
        <h1>Enquiry</h1>
    </div>
    <div class="logo-head">
        <div class="inquiry-header">
            <label for="date"class="inquiry-lable"><img src="assets/img/search-enquiry.png" alt=""
                    class="inquiry-logo"></label>
            <h3 id="inquiry-header">New Enquiry</h3>
         <a href="{{url('/')}}/Addinquiry"> <i class="bi bi-plus-circle" id="add-icon"></i><p class="small-text">Add Proposal</p> </a>
        </div>
    </div>

    <div class="enquiry-container">

        <form action="{{url('/')}}/Newinquiry" method="POST">
            @csrf
            <div class="enquiry-row row ">
                <div class="form-group col-md-6">
                    <label for="text" class="row-text">Start Date</label>
                    <div class="input-inline-inquiry"><label for="date" class="inquiry-lable"><img
                                src="assets/img/date-logo.png" alt="" class="form-icon"></label>
                        <input type="date" class="form-control input-box-enquiry rectangle" name="start"
                            id="" aria-describedby="date" placeholder="start Date">
                    </div>

                </div>
                <div class="form-group col-md-6">
                    <label for="text" class="row-text">End Date</label>
                    <div class="input-inline-inquiry"><label for="date" class="inquiry-lable"><img
                                src="assets/img/date-logo.png" alt="" class="form-icon"></label>
                        <input type="date" class="form-control input-box-enquiry rectangle" name="end"
                            id="" aria-describedby="date" placeholder="End Date">
                    </div>

                </div>

                <div class="form-group col-md-6">
                    <label for="text" class="row-text">Publicity Medium</label>
                    <div class="input-inline-inquiry"><label for="text" class="inquiry-lable"><img
                                src="assets/img/publicity.png" alt="" class="form-icon"></label>
                        <input type="text" class="form-control input-box-enquiry rectangle" name="publicity"
                            id="" aria-describedby="" placeholder="Publicity Medium">
                    </div>

                </div>
                <div class="form-group col-md-6">
                    <label for="text" class="row-text">Sector</label>
                    <div class="input-inline-inquiry"><label for="sector" class="inquiry-lable"><img
                                src="assets/img/sector.png" alt="" class="form-icon"></label>
                        <input type="sector" class="form-control input-box-enquiry rectangle" name="sector"
                            id="" aria-describedby="" placeholder="Sector">
                    </div>

                </div>
               
               
                <div class="form-group col-md-6">
                    <label for="text" class="row-text">Domain</label>
                    <div class="input-inline-inquiry"><label for="domain" class="inquiry-lable"><img
                                src="assets/img/domain.png" alt="" class="form-icon"></label>
                        <input type="domain" class="form-control input-box-enquiry rectangle" name="domain"
                            id="" aria-describedby="" placeholder="Domain">
                    </div>

                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="row-text">City</label>
                    <div class="input-inline-inquiry"><label for="name" class="inquiry-lable"><img
                                src="assets/img/city.png" alt="" class="form-icon"></label>
                        <input type="name" class="form-control input-box-enquiry rectangle" name="city"
                            id="" aria-describedby="" placeholder="City">
                    </div>

                </div>
                <div class="form-group col-md-6">
                    <label for="state" class="row-text">State</label>
                    <div class="input-inline-inquiry"><label for="state" class="inquiry-lable"><img
                                src="assets/img/state.png" alt="" class="form-icon"></label>
                        <input type="state" class="form-control input-box-enquiry rectangle" name="state"
                            id="" aria-describedby="" placeholder="State">
                    </div>

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
