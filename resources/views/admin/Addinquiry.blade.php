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
                        <input type="name" class="form-control input-box-enquiry rectangle" name="company_name"
                            id="" aria-describedby="date" placeholder="Enter the Company Name">
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
                    <label for="number" class="row-text">Contact Number</label>
                    <div class="input-inline-inquiry"><label for="number" class="inquiry-lable"><img
                                src="assets/img/call.png" alt="" class="form-icon"></label>
                        <input type="number" class="form-control input-box-enquiry rectangle" name="contact_number"
                            id="" aria-describedby="date" placeholder="Contact Number">
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
                    <label for="number" class="row-text">Alternative Number</label>
                    <div class="input-inline-inquiry"><label for="number" class="inquiry-lable"><img
                                src="assets/img/state.png" alt="" class="form-icon"></label>
                        <input type="number" class="form-control input-box-enquiry rectangle" name="alternativenumber"
                            id="" aria-describedby="" placeholder="Alternative Number">
                    </div>

                </div>

                <div class="form-group col-md-6">
                    <label for="date" class="row-text">Enquiry Date</label>
                    <div class="input-inline-inquiry"><label for="date" class="inquiry-lable"><img
                                src="assets/img/date-logo.png" alt="" class="form-icon"></label>
                        <input type="date" class="form-control input-box-enquiry rectangle" name="enquirydate"
                            id="" aria-describedby="" placeholder="Enquiry Date">
                    </div>

                </div>

                <div class="form-group col-md-6">
                    <label for="email" class="row-text">Alternative Email ID</label>
                    <div class="input-inline-inquiry"><label for="email" class="inquiry-lable"><img
                                src="assets/img/alternativemail.png" alt="" class="form-icon"></label>
                        <input type="email" class="form-control input-box-enquiry rectangle" name="alternativeemail"
                            id="" aria-describedby="" placeholder="Alternative Email ID ">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="text" class="row-text">Publicity Medium</label>
                    <div class="input-inline-inquiry"><label for="text" class="inquiry-lable"><img
                                src="assets/img/publicity.png" alt="" class="form-icon"></label>
                        <input type="text" class="form-control input-box-enquiry rectangle" name="publicity_medium"
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
                        <input type="text" class="form-control input-box-enquiry rectangle" name="remarks"
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

        <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
            <thead >
              <tr>
                <th scope="col">SNo.</th>
                <th scope="col">CompanyName</th>
                <th scope="col">City</th>
                <th scope="col">ContactNumber</th>
                <th scope="col">Domain</th>
                <th scope="col">EmailID</th>
                <th scope="col">Sector</th>
                <th scope="col">AlternativeNumber</th>
                <th scope="col">EnquiryDate</th>
                <th scope="col">AlternativeEmailID</th>
                <th scope="col">PublicMedium</th>
                <th scope="col">Address</th>
                <th scope="col">CustomerAnswers</th>
                <th scope="col">State</th>
                <th scope="col">Remarks</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($inquiryData as $data)
              <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->company_name}}</td>
                <td>{{$data->city}}</td>
                <td>{{$data->contact_number}}</td>
                <td>{{$data->domain}}</td>
                <td>{{ $data->email}}</td>
                <td>{{ $data->sector}}</td>
                <td>{{$data->alternativenumber}}</td>
                <td>{{$data->enquirydate}}</td>
                <td>{{$data->alternativeemail}}</td>
                <td>{{$data->publicity_medium}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->customer_answere}}</td>
                <td>{{$data->state }}</td>
                <td>{{$data->remarks}}</td>
              </tr>
                @endforeach
              
            </tbody>
          </table>

    </div>
    @include('layout.footer')

