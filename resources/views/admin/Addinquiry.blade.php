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
            <h3 id="inquiry-header">Add Enquiry</h3>
        </div>
    </div>

    <div class="enquiry-container">

        <form action="{{url('/')}}/Addinquiry" method="POST">
            @csrf
            <div class="enquiry-row row ">
                <div class="form-group col-md-6">
                    <label for="text" class="row-text">Company Name</label>
                    <div class="input-inline-inquiry"><label for="text" class="inquiry-lable"><img
                                src="assets/img/company.png" alt="" class="form-icon"></label>
                        <input type="name" class="form-control input-box-enquiry rectangle" name="company"
                            id="" aria-describedby="date" placeholder="Enter the Company Name">
                    </div>

                </div>

                <div class="form-group col-md-6">
                    <label for="name" class="row-text">City</label>
                    <div class="input-inline-inquiry"><label for="name" class="inquiry-lable"><img
                                src="assets/img/city.png" alt="" class="form-icon"></label>
                        <input type="name" class="form-control input-box-enquiry rectangle" name="city"
                            id="" aria-describedby="" placeholder="Indore">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="number" class="row-text">Contact Number</label>
                    <div class="input-inline-inquiry"><label for="number" class="inquiry-lable"><img
                                src="assets/img/call.png" alt="" class="form-icon"></label>
                        <input type="number" class="form-control input-box-enquiry rectangle" name="contact_Number"
                            id="" aria-describedby="date" placeholder="Contact Number">
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
                    <label for="email" class="row-text">Email ID</label>
                    <div class="input-inline-inquiry"><label for="email" class="inquiry-lable"><img
                                src="assets/img/email-logo.png" alt="" class="form-icon"></label>
                        <input type="email" class="form-control input-box-enquiry rectangle" name="email"
                            id="" aria-describedby="" placeholder="Email ID ">
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
                    <label for="number" class="row-text">Alternative Number</label>
                    <div class="input-inline-inquiry"><label for="number" class="inquiry-lable"><img
                                src="assets/img/state.png" alt="" class="form-icon"></label>
                        <input type="number" class="form-control input-box-enquiry rectangle" name="number"
                            id="" aria-describedby="" placeholder="Alternative Number">
                    </div>

                </div>

                <div class="form-group col-md-6">
                    <label for="date" class="row-text">Enquiry Date</label>
                    <div class="input-inline-inquiry"><label for="date" class="inquiry-lable"><img
                                src="assets/img/date-logo.png" alt="" class="form-icon"></label>
                        <input type="date" class="form-control input-box-enquiry rectangle" name="date"
                            id="" aria-describedby="" placeholder="Enquiry Date">
                    </div>

                </div>

                <div class="form-group col-md-6">
                    <label for="email" class="row-text">Alternative Email ID</label>
                    <div class="input-inline-inquiry"><label for="email" class="inquiry-lable"><img
                                src="assets/img/alternativemail.png" alt="" class="form-icon"></label>
                        <input type="email" class="form-control input-box-enquiry rectangle" name="email"
                            id="" aria-describedby="" placeholder="Alternative Email ID ">
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
                    <label for="address" class="row-text">Address</label>
                    <div class="input-inline-inquiry"><label for="address" class="inquiry-lable"><img
                                src="assets/img/address.png" alt="" class="form-icon"></label>
                        <input type="address" class="form-control input-box-enquiry rectangle" name="address"
                            id="" aria-describedby="" placeholder="Address">
                    </div>

                </div>
                <div class="form-group col-md-6">
                    <label for="text" class="row-text">Customer Answere</label>
                    <div class="input-inline-inquiry"><label for="text" class="inquiry-lable"><img
                                src="assets/img/customerAnswere.png" alt="" class="form-icon"></label>
                        <input type="text" class="form-control input-box-enquiry rectangle" name="customer_answere"
                            id="" aria-describedby="" placeholder="Customer Answere">
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
                    <label for="text" class="row-text">Remarks</label>
                    <div class="input-inline-inquiry"><label for="text" class="inquiry-lable"><img
                                src="assets/img/remarks.png" alt="" class="form-icon"></label>
                        <input type="text" class="form-control input-box-enquiry rectangle" name="text"
                            id="" aria-describedby="" placeholder="Remarks">
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
</div>
