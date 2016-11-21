<?php 
	include("utils/db_calls.php");
	$conn = db_connect();
	$recent = select($conn, "select * from transaction order by id desc limit 5");
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=.8">
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.1/fetch.min.js"></script>
	<script src="js/app.js"></script>	
</head>

<body>
	<div id="app-content-area" class="flex-column">
		
		<div id="title-section">
			<p class="heading">Log transaction:</p>
		</div> <!-- /#title-area -->
		
		<div id="main-section" class="flex-column">
			<div id="log-transaction">
				<form id="log-transaction-form">
					<input type="hidden" name="user" value="justin">
					<p>
						$<input type="text" name="amount" id="amount-input" placeholder="0.00">
						<select required id="amount-spent-on" name="category">
							<option value="auto">auto</option>
							<option value="bill">bill</option>
							<option value="food">food</option>
							<option value="fun">fun</option>
							<option value="home">home</option>
						</select>
					</p>
					<button type="button" id="track-button" onclick="fetch_submit();">Log!</button>
				</form>
			</div> <!-- /#log-transaction -->

			<div id="last-5-days-section">
				<? include "sections/last-5-days.php" ?>
			</div> 

		</div> <!-- /#main-area -->
	</div> <!-- /#app-content-area -->
</body>
</html>