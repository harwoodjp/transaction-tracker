<?php 
    include("../utils/db_calls.php");
    $conn = db_connect();
    $auto = select($conn, "select sum(amount) as auto from transaction where user='justin' and type='auto'");
    $bill = select($conn, "select sum(amount) as bill from transaction where user='justin' and type='bill'");
    $food = select($conn, "select sum(amount) as food from transaction where user='justin' and type='food'");
    $fun = select($conn, "select sum(amount) as fun from transaction where user='justin' and type='fun'");
    $home = select($conn, "select sum(amount) as home from transaction where user='justin' and type='home'");
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>	

<canvas id="myChart" width="200" height="200"></canvas>

<script>
var ctx = document.getElementById("myChart");
Chart.defaults.global.defaultFontColor = "white";
var options = { 
    responsive: true,
    maintainAspectRatio: true,
    animation: false
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
                data: [
                    <? while ($row = $auto->fetch_assoc()) { 
                            echo round($row["auto"],2);
                        } 
                    ?>,
                    <? while ($row = $bill->fetch_assoc()) { 
                            echo round($row["bill"],2);
                        } 
                    ?>,
                    <? while ($row = $food->fetch_assoc()) { 
                            echo round($row["food"],2);
                        } 
                    ?>,
                    <? while ($row = $fun->fetch_assoc()) { 
                            echo round($row["fun"],2);
                        } 
                    ?>,
                    <? while ($row = $home->fetch_assoc()) { 
                            echo round($row["home"],2);
                        } 
                    ?>,
                        
                ],
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
    options: options,
    legend: {
        fontColor: "white",
    }
});
</script>
