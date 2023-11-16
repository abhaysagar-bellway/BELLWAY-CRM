<div class="col-12 line-chart-padding">
    <section class="section dashboard">
        <!-- Customers Card -->

        <!-- Reports -->

        <div class="card">

            <div class="filter">
                <button type="button" class="btn icon" style="background-color: #1B2137" data-bs-toggle="dropdown">
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

                <div id="datasetTable"></div>
                <script src="{{ asset('js/main.js') }}" defer></script>
                <script>
                    const xValues = ["MON", "TUE", "WED", "THU", "FRI", "SAT"];
                    const ylineValues = ["Facebook", "Freelancer", "Upwork", "Fiver", " Cold Calling"];
                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                    data: [3000, 3140, 4060, 4460, 1070, 5110, 1330, 2210, 7830, 2478],
                                    borderColor: "#3CFFC2",
                                    fill: false
                                },
                                {
                                    data: [2000, 1700, 3800, 2900, 2000, 2700, 4000, 5000, 3900, 4800],
                                    borderColor: "#E2EC76",
                                    fill: false
                                }
                            ]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        callback: function(value, index, values) {
                                            // Customize the y-axis labels here
                                            return ylineValues[index];
                                        }
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            }
                        }
                    });
                </script>
            </div>
            <script>
                //  <!-- Add this inside the <script> tag in chart.blade.php -->
                document.addEventListener('DOMContentLoaded', function() {
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart;

                    function updateChart() {
                        fetch('/chart/data')
                            .then(response => response.json())
                            .then(data => {
                                if (myChart) {
                                    myChart.destroy();
                                }

                                myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: data.labels,
                                        datasets: data.datasets.map(dataset => ({
                                            data: dataset.data,
                                            borderColor: dataset.borderColor,
                                            fill: dataset.fill,
                                        })),
                                    },
                                });

                                // Display datasets in a table
                                var tableHtml = '<table><tr><th>Data</th><th>BorderColor</th><th>Fill</th></tr>';
                                data.datasets.forEach(dataset => {
                                    tableHtml +=
                                        `<tr><td>${JSON.stringify(dataset.data)}</td><td>${dataset.borderColor}</td><td>${dataset.fill}</td></tr>`;
                                });
                                tableHtml += '</table>';
                                document.getElementById('datasetTable').innerHTML = tableHtml;
                           
                    }

                    updateChart();
                 });
            </script>

        </div><!-- End Reports -->
    </section>
</div>
