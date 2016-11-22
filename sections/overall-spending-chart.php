<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>	


<canvas id="myChart" width="200" height="200"></canvas>

<script>
var ctx = document.getElementById("myChart");
var options = { 
    responsive: true,
    maintainAspectRatio: true
}
var myPieChart = new Chart(ctx,{
    type: 'pie',
    data: {
        labels: [
            "auto",
            "bill",
            "food",
            "fun",
            "home"
        ],
        datasets: [
            {
                data: [300, 50, 100,50,50],
                backgroundColor: [
                    "red",
                    "orange",
                    "blue",
                    "green",
                    "yellow"
                ],
                hoverBackgroundColor: [
                    "red",
                    "orange",
                    "blue",
                    "green",
                    "yellow"
                ]
            }]
    },
    options: options
});
</script>
