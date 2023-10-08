<?= $header ?> 
<canvas id="line-chart" height="70"></canvas>
<?= $footer ?>
<script>
    var ctx = document.getElementById('line-chart').getContext("2d");
    var gradientStroke = ctx.createLinearGradient(0, 0, 0, 500);
    gradientStroke.addColorStop(0, '#4495FA');

    var gradientFill = ctx.createLinearGradient(0, 0, 0, 225);
    gradientFill.addColorStop(0, "rgba(68, 149, 250, 0.5)");
    gradientFill.addColorStop(1, "rgba(255, 255, 255, 0.5)");

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL"],
            datasets: [{
                label: "Total Students",
                borderColor: gradientStroke,
                pointBorderColor: gradientStroke,
                pointBackgroundColor: gradientStroke,
                pointHoverBackgroundColor: gradientStroke,
                pointHoverBorderColor: gradientStroke,
                pointBorderWidth: 6,
                pointHoverRadius: 6,
                pointHoverBorderWidth: 6,
                pointRadius: 3,
                fill: true,
                backgroundColor: gradientFill,
                borderWidth: 3,
                data: [20, 30, 27, 54, 85, 22, 37]
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "#668899",
                        fontStyle: "bold",
                        beginAtZero: true,
                        maxTicksLimit: 10,
                        padding: 20
                    },
                    gridLines: {
                        drawTicks: false,
                        display: true,
                        zeroLineColor: "transparent"
                    }
                }],
                xAxes: [{
                    gridLines: {
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "#668899",
                        fontStyle: "bold"
                    }
                }]
            }
        }
    });
</script>