<?php 
	include("utils/db_calls.php");
	$conn = db_connect();
	$recent = select($conn, "select * from transaction order by date desc");
?>

<html>
<head>
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<script src="js/app.js"></script>	
</head>

<body>
	<div id="app-content-area" class="flex-column">
		
		<div id="title-section">
			<p class="heading">Log transaction:</p>
		</div> <!-- /#title-area -->
		
		<div id="main-section" class="flex-column">
			<div id="today-i-spent">
				<form method="get" action="process_transaction.php">
					<input type="hidden" name="user" value="justin">
					<p>
						I spent $<input required type="text" name="amount" id="amount-input" placeholder="0.00">
					</p>
					<p> on 
						<select required id="amount-spent-on" name="category">
							<option value="auto">auto.</option>
							<option value="bill">bill.</option>
							<option value="food">food.</option>
							<option value="fun">fun.</option>
							<option value="home">home.</option>
						</select>
					</p>
					<button id="track-button">Log!</button>

				</form>
			</div> <!-- /#today-i-spent -->

			<div id="last-5-days-section">
				<p class="heading">Recent transactions:</p>
				<ul>
					<?php while ($row = $recent->fetch_assoc()) { ?>
						<li>
							$<?=$row["amount"] ?> on 
							<?=$row["type"] ?>.
						</li>
					<?php } ?>
				</ul>
			</div>

		</div> <!-- /#main-area -->
	</div> <!-- /#app-content-area -->
</body>
</html>