<?php 
	include("../utils/db_calls.php");
	$conn = db_connect();
	$recent = select($conn, "select * from transaction order by id desc limit 5");
?>

<ul>
	<?php while ($row = $recent->fetch_assoc()) { ?>
		<li>
			<?=money_format('%(#10n', $row["amount"]) ?> on 
			<?=$row["type"] ?>.
		</li>
	<?php } ?>
</ul>
