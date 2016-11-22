function fetch_submit() {
	fetch('process_transaction.php', {
		method: 'post',
		body: new FormData(document.getElementById('log-transaction-form'))
	})
		.then(function() {
			refresh_5_days_div();
		}).then(function() {
			refresh_totals_div();
		}).then(function() {
			refresh_pie_chart();
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
function refresh_totals_div() {
	fetch('./sections/totals.php')
		.then(function(response) {
			return response.text()
		}).then(function(body) {
			document.getElementById("text-total").innerHTML = body;
		})
}
function refresh_pie_chart() {
	fetch('./sections/overall-spending-chart.php')
		.then(function(response) {
			return response.text()
		}).then(function(body) {
			alert(body);
			document.getElementById("pie-chart").innerHTML = body;
		})
}