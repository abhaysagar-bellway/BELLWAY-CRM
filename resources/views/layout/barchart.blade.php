<link rel="stylesheet" href="path-to/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />

<div class="col-6">
    <section class="section dashboard">

        <div class="card" >

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
                <h5 class="card-title">299</h5>
                <h5 class="card-heading">Total Follow up</h5>

                <!-- ... Previous HTML code ... -->

                <!-- bar chart -->
                <canvas id="barChart" style="width:100%;max-width:600px"></canvas>
               

                <script>
                    var bar_ctx = document.getElementById('barChart').getContext('2d');

                    var background_1 = bar_ctx.createLinearGradient(0, 0, 0, 600);
                    background_1.addColorStop(0, '#3CFFC2');
                    background_1.addColorStop(1, '#E2EC76');

                    var background_2 = bar_ctx.createLinearGradient(0, 0, 0, 600);
                    background_2.addColorStop(0, '#3CFFC2');
                    background_2.addColorStop(1, '#E2EC76');

                    var background_3 = bar_ctx.createLinearGradient(0, 0, 0, 600);
                    background_3.addColorStop(0, '#3CFFC2');
                    background_3.addColorStop(1, '#E2EC76');

                    var background_4 = bar_ctx.createLinearGradient(0, 0, 0, 600);
                    background_4.addColorStop(0, '#3CFFC2');
                    background_4.addColorStop(1, '#E2EC76');

                    var background_5 = bar_ctx.createLinearGradient(0, 0, 0, 600);
                    background_5.addColorStop(0, '#3CFFC2');
                    background_5.addColorStop(1, '#E2EC76');

                    var background_6 = bar_ctx.createLinearGradient(0, 0, 0, 600);
                    background_6.addColorStop(0, '#3CFFC2');
                    background_6.addColorStop(1, '#E2EC76');

                    var xbarValues = [22, 33, 44, 55, 66, 77]; // New x-axis values
                    var yValues = [55, 49, 44, 24, 15, 30, 40];
                    var barColors = [background_1, background_2, background_3, background_4, background_5,
                    background_6]; // Set white color for xbarValues
                    var yaxisLabels = ['Deal Done', 'Pending', 'Interested', 'Technical Call', 'Not Interested', 'Fake', 'NPC'];

                    new Chart("barChart", {
                        type: "bar",
                        data: {
                            labels: xbarValues.map(String),
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues,
                                barPercentage: 0.6, // Adjust the column width percentage
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        fontColor: '#FFFFFF', // Change y-axis labels color to white
                                        callback: function(value, index, values) {
                                            // Customize the y-axis labels here
                                            return yaxisLabels[index];
                                        }
                                    }
                                }],
                                xAxes: [{
                                    ticks: {
                                        fontColor: '#FFFFFF',
                                        // Change x-axis labels color to white
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                // text: "World Wine Production 2018"
                            }
                        }
                    });
                </script>
               
                <!-- ... Remaining HTML code ... -->

            </div>
            <script src="path-to/node_modules/chart.js/dist/Chart.min.js"></script>

        </div>
    </section>
</div>
