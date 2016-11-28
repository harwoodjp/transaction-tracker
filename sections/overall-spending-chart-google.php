<?php 
    include("../utils/db_calls.php");
    $conn = db_connect();
    $auto = select($conn, "select sum(amount) as auto from transaction where user='justin' and type='auto'");
    $bill = select($conn, "select sum(amount) as bill from transaction where user='justin' and type='bill'");
    $food = select($conn, "select sum(amount) as food from transaction where user='justin' and type='food'");
    $fun = select($conn, "select sum(amount) as fun from transaction where user='justin' and type='fun'");
    $home = select($conn, "select sum(amount) as home from transaction where user='justin' and type='home'");
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['category', 'amount spent'],
    ['auto', <? while ($row = $auto->fetch_assoc()) { echo round($row["auto"],2); } ?> ],
    ['bill', <? while ($row = $bill->fetch_assoc()) { echo round($row["bill"],2); } ?> ],
    ['food', <? while ($row = $food->fetch_assoc()) { echo round($row["food"],2); } ?>],
    ['fun',  <? while ($row = $fun->fetch_assoc()) { echo round($row["fun"],2); } ?>],
    ['home', <? while ($row = $home->fetch_assoc()) { echo round($row["home"],2); } ?>]
    ]);

  var options = {
    backgroundColor: { fill:'transparent' },
    legend: {textStyle: {color: 'white'}, position:'bottom'}

  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}
</script>
<div id="piechart" style="width: 500px; height: 500px; margin-top:-110px;padding:0px;"></div>
