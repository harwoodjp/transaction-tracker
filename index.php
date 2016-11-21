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
		</div> 
		
		<div id="main-section" class="flex-column">
			<div id="log-transaction">
				<? include "sections/log-transaction-form.php" ?>
			</div> 

			<div id="last-5-days-section">
				<? include "sections/last-5-days.php" ?>
			</div> 

		</div>
	</div>
</body>
</html>