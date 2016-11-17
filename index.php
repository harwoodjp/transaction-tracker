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
			<p id="heading">Transaction Tracker</p>
		</div> <!-- /#title-area -->
		<div id="main-section" class="flex-column">
			<div id="today-i-spent">
				<form method="get" action="process_transaction.php">
					<input type="hidden" name="user" value="justin">
					<p>
						I've just spent $<input type="number" pattern="(d{3})([.])(d{2})" name="amount" id="amount-input" placeholder="0.00">
					</p>
					<p style> on 
						<select id="amount-spent-on" name="category">
							<option value="auto">auto.</option>
							<option value="bill">bill.</option>
							<option value="food">food.</option>
							<option value="fun">fun.</option>
							<option value="home">home.</option>
						</select>
				  		<button  id="track-button">Save!</button>
					</p>
				</form>
			</div> <!-- /#today-i-spent -->
		</div> <!-- /#main-area -->
	</div> <!-- /#app-content-area -->
</body>
</html>