<div class="col-12">
    <section class="section dashboard">


        <!-- todo -->
        <div class="card" style="width: 300px">


            <div class="card-body">
                <div id="" style="min-height: 233px;" class="calender">
                    <div class="calender">
                      <img id="calender-img" src="{{ asset('BELLWAY-CRM/public/assets/img/calendar.png') }}" alt="Calender Image">
                      <em id="dateField" class="date"></em>
                        <button type="button" class="btn btn-send-rsvp" style="background-color: #E8F5FC">
                            Send RSVP
                        </button>
                    </div>

                </div>
            </div>
        </div>

<script>
  function formatDate(date) {
    const day = date.getDate();
    let suffix = '';
    
    // Add the appropriate suffix (e.g., "th", "st", "nd", "rd")
    if (day === 1 || day === 21 || day === 31) {
        suffix = 'st';
    } else if (day === 2 || day === 22) {
        suffix = 'nd';
    } else if (day === 3 || day === 23) {
        suffix = 'rd';
    } else {
        suffix = 'th';
    }

    const month = date.toLocaleString('default', { month: 'short' });
    const year = date.getFullYear();

    return `${day}${suffix} ${month}, ${year}`;
}

document.addEventListener('DOMContentLoaded', function() {
    const dateField = document.getElementById('dateField');
    const currentDate = new Date();
    const formattedDate = formatDate(currentDate);
    dateField.textContent = formattedDate;
});

</script>





</div>
