<div class="col-6">
<section class="section dashboard">
    <div class="card">
      <div class="filter">
        <button type="button" class="btn icon" style="background-color: #1B2137" data-bs-toggle="dropdown" >
          This Week <i class="bi bi-caret-down-fill"></i>
          </button>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body pb-20">
        <h5 class="card-title">599</h5>
        <h5 class="card-heading">Total Deal Done</h5>
             <canvas id="doughnutChart" style="width:100%;max-width:600px"></canvas>

             <script>
             var xDoughnutValues = ["Italy", "France", "Spain", "USA", "Argentina"];
             var yValues = [55, 49, 44, 24, 15];
             var barColors = [
               "#b91d47",
               "#00aba9",
               "#2b5797",
               "#e8c3b9",
               "#1e7145"
             ];
             
             new Chart("doughnutChart", {
               type: "doughnut",
               data: {
                //  labels: xDoughnutValues,
                 datasets: [{
                   backgroundColor: barColors,
                   data: yValues
                 }]
  
               },
               options: {
                 title: {
                   display: false,
                   text: "World Wide Wine Production 2018"
                 },
               }
             });
             </script> 

            

      </div>
    </div>


  </section>
</div>