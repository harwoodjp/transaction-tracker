<html>
<head>
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<script src="js/app.js"></script>	
</head>

<body>
	<div id="app-content-area" class="flex-column">
		<div id="title-area">
			<p id="heading">Transaction Tracker</p>
		</div>
		<div id="main-area" class="flex-column">
			<div id="today-i-spent">
				<p>
					I've just spent $<input id="amount-input" placeholder="0.00">
				</p>
				<p> 
					on 
					<select id="amount-spent-on">
						<option>auto</option>
						<option>bill</option>
						<option>food</option>
						<option>fun</option>
						<option>home</option>
					</select>
					.
				</p>
			</div>		
		</div>
	</div>
</body>
</html>