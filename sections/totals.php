<?php 
	include("../utils/db_calls.php");
	$conn = db_connect();
	$total = select($conn, "select sum(amount) as total from transaction where user='justin'");
?>
<p class="heading">Spending distribution:</p>
<?php while ($row = $total->fetch_assoc()) { ?>
	<p id="total-spent">
		Total spent: <?=money_format('%(#10n', $row["total"]) ?> 
	</p>
<?php } ?>
