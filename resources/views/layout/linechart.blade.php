
     <div class="col-12 line-chart-padding">
     <section class="section dashboard">
        <!-- Customers Card -->
 
             <!-- Reports -->
       
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
 
                 <div class="card-body">
                   <h5 class="card-title">1299</h5>
                   <h5 class="card-heading">Total Leads</h5>
                   
 
             
                   <canvas id="myChart" style="width:100%;max-width:600px; height: 100px"></canvas>

                   <script>
                   const xValues = ["MON", "TUE", "WED", "THU", "FRI", "SAT"];
                   const ylineValues = ["Facebook", "Freelancer", "Upwork", "Fiver", " Cold Calling"];
                   new Chart("myChart", {
                     type: "line",
                     data: {
                       labels: xValues,
                       datasets: [{ 
                         data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                         borderColor: "#3CFFC2",
                         fill: false
                       }, { 
                         data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                         borderColor: "#E2EC76",
                         fill: false
                       },]
                     },
                     options: {
                       legend: {display: false}         
                     }
                   });
                   </script>
                 </div>
 
              
             </div><!-- End Reports -->
           </section>
         </div>
 