
</div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@yield('content')

<script src="{{ asset('js/main.js') }}"></script>
<script>
  // Function to get current date in format "DD MMM YYYY"
  function getCurrentDate() {
      var months = [
          "Jan", "Feb", "Mar", "Apr", "May", "Jun",
          "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
      ];
      var currentDate = new Date();
      var day = currentDate.getDate();
      var monthIndex = currentDate.getMonth();
      var year = currentDate.getFullYear();

      return ('0' + day).slice(-2) + ' ' + months[monthIndex] + ' ' + year;
  }

  // Set current date as the default value
  window.onload = function() {
      document.getElementById('dateField').value = getCurrentDate();
  };
</script>

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

<script>
  // alert message show using settimeout function
//   document.getElementById('success') ="<div class='alert alert-success success' id='success' role='alert'> {{ session('status') }}</div>"; 
// setTimeout(function() {document.getElementById('success');},5000);

$("document").ready( function (){
  setTimeout(() => {
    $("div.success").remove();
  }, 3000);
})
</script>
{{--!! flatpickr Calander !!--}}
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#datepicker', {
            dateFormat: 'Y-m-d',
            allowInput: true,
        });
    </script>

<script>
    $(document).ready(function () {
  $('#dtHorizontalExample').DataTable({
    "scrollX": true
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>