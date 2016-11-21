function fetch_submit() {
	fetch('process_transaction.php', {
		method: 'post',
		body: new FormData(document.getElementById('log-transaction-form'))
	})
		.then(function() {
			refresh_5_days_div();
		});
	document.getElementById("log-transaction-form").reset();
}

function refresh_5_days_div() {
	fetch('./sections/last-5-days.php')
		.then(function(response) {
			return response.text()
		}).then(function(body) {
			document.getElementById("last-5-days-section").innerHTML = body;
		})
}