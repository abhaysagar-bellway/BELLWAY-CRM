<div class="enquiry-container">
    @include('layout.header')
    @include('layout.sidebar')
    <div class="col-10">
        @include('layout.navbar')
        </div>
   
    <div class="logo-head">
        <div class="inquiry-header">
            <label for="date"class="inquiry-lable"><img src="assets/img/search-enquiry.png" alt=""
                    class="inquiry-logo"></label>
            <h3 id="inquiry-header">Done Follow Up</h3>
        </div>
    </div>

    <div class="enquiry-container">

        <form action="{{ url('/') }}/doneFollowup" method="POST">
            @csrf
            <div class="enquiry-row row ">
                <div class="form-group col-md-6">
                    <label for="date" class="row-text">Start Date</label>
                    <div class="input-inline-inquiry" id="date">
                        <div class="inquiry-label">
                            <img id="dateIcon" src="assets/img/date-logo.png" alt="" class="form-icon">
                        </div>
                        <input type="text" class="form-control input-box-enquiry rectangle" name="start_date"
                            id="datepicker" placeholder="Select a start date : YYYY-MM-DD">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="date" class="row-text">End Date</label>
                    <div class="input-inline-inquiry" id="date">
                        <div class="inquiry-label">
                            <img id="dateIcon" src="assets/img/date-logo.png" alt="" class="form-icon">
                        </div>
                        <input type="text" class="form-control input-box-enquiry rectangle" name="end_date"
                            id="datepicker" placeholder="Select a end date : YYYY-MM-DD">
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
                            <select class="form-control input-box-enquiry rectangle" name="sector" aria-label="Default select example">
                                <option selected>choose option</option>
                                <option value="E-Commerce web">E-Commerce web</option>
                                  <option value="Property">Property</option>
                                  <option value="Mobile App">Mobile App</option>
                                  <option value="grocery">grocery</option>
                                  <option value="Food">Food</option>
                                  <option value="Transport">Transport</option>
                                  <option value="Hotel">Hotel</option>
                                  <option value="Toor and Travels">Toor and Travels</option>
                                  <option value="Milk Production /Dairy">Milk Production /Dairy</option>
                              </select>           
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="text" class="row-text">Domain</label>
                    <div class="input-inline-inquiry"><label for="domain" class="inquiry-lable"><img
                                src="assets/img/domain.png" alt="" class="form-icon"></label>
                                <select class="form-control input-box-enquiry rectangle" name="domain" aria-label="Default select example">
                                    <option selected>choose option</option>
                                    <option value="Web Application">Web Application</option>
                                      <option value="Mobile Application">Mobile Application</option>
                                  </select>  
                               
                    </div>

                </div> 

                <div class="form-group col-md-6">
                    <label for="text" class="row-text">Assigned</label>
                    <div class="input-inline-inquiry"><label for="assign" class="inquiry-lable"><img
                                src="assets/img/assigned.png" alt="" class="form-icon"></label>
                        <input type="name" class="form-control input-box-enquiry rectangle" name="assigned"
                            id="" aria-describedby="" placeholder="Assigned">
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
                        <div class="input-inline-inquiry"> <button type="submit" class="submit-btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    @include('layout.footer')
</div>
