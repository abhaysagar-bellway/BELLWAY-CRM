
     <div class="col-12">
     <section class="section dashboard">
        <!-- Customers Card -->
 
             <!-- Reports -->
       
               <div class="card" >
 
                 <div class="filter">
                   <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
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
                   <h5 class="card-title">Reports <span>/Today</span></h5>
 
                   <!-- Line Chart -->
                   <div id="reportsChart"></div>
 
                   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                   <body>
                   <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                   
                   <script>
                   const xValues = [100,200,300,400,500,600,700,800,900,1000];
                   
                   new Chart("myChart", {
                     type: "line",
                     data: {
                       labels: xValues,
                       datasets: [{ 
                         data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                         borderColor: "red",
                         fill: false
                       }, { 
                         data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                         borderColor: "green",
                         fill: false
                       }, { 
                         data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                         borderColor: "blue",
                         fill: false
                       }]
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
 