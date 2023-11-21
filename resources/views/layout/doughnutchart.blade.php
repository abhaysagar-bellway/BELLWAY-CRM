<div class="col-6">
    <section class="section dashboard">
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

            <div class="card-body pb-20">
                <h5 class="card-title">599</h5>
                <h5 class="card-heading">Total Deal Done</h5>
                <canvas id="doughnutChart"
                    style=" width: 250px;
             max-width: 601px;
             display: block;
             height: 180px;  cursor: pointer;"></canvas>
                <script>
                    var xDoughnutValues = ["Good", "Bed", "Average"];
                    var yValues = [55, 49, 44];
                    var barColors = ["green", "red", "orange"];

                    var doughnutChart = new Chart("doughnutChart", {
                        type: "doughnut",
                        data: {
                            labels: xDoughnutValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            title: {
                                display: false,
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var label = data.labels[tooltipItem.index] || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        label += data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                        return label;
                                    }
                                }
                            }
                        }
                    });
                </script>


            </div>
        </div>


    </section>
</div>
