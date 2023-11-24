<div class="col-12">
    <section class="section dashboard">


        <!-- todo -->
        <div class="card" style="width: 300px">


            <div class="card-body">
                <div id="" style="min-height: 233px;" class="calender">
                    <div class="calender">
                        @php
                        $preifix  =  (env("APP_ENV")== "local") ? 'BELLWAY-CRM' : '';
                        @endphp
                      <img id="calender-img" src="{{ asset($preifix.'/public/assets/img/calendar.png') }}" alt="Calender Image">
                      <em id="dateField" class="date"></em>
                        <button type="button" class="btn btn-send-rsvp" style="background-color: #E8F5FC">
                            Send RSVP
                        </button>
                    </div>

                </div>
            </div>
        </div>
@include('layout.footer')
</div>
