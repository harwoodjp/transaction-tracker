<?php 
	include("../utils/db_calls.php");
	$conn = db_connect();
	$recent = select($conn, "select * from transaction order by id desc limit 5");	
?>
<p class="heading">Recent transactions:</p>
<ul>
	<?php while ($row = $recent->fetch_assoc()) { ?>
		<li>
			<?=money_format('%(#10n', $row["amount"]) ?> on 
			<?=$row["type"] ?>
		</li>
	<?php } ?>
</ul>
