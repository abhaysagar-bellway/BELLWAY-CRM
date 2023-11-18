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
            <h3 id="inquiry-header">Proposal Details</h3>
            <a href="{{ url('/') }}/proposaldetails"> <i class="bi bi-plus-circle" id="add-icon"></i>
                <p class="small-text">ProposalAdd</p>
            </a>
        </div>
    </div>

    <div class="enquiry-container">

        <form action="{{ url('/') }}/proposaldetails" method="POST">
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
                    <label for="text" class="row-text">Customer Answere</label>
                    <div class="input-inline-inquiry"><label for="text" class="inquiry-lable"><img
                                src="assets/img/customerAnswere.png" alt="" class="form-icon"></label>
                        <input type="text" class="form-control input-box-enquiry rectangle" name="customer_answere"
                            id="" aria-describedby="" placeholder="Customer Answere">
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

