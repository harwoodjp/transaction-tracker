<p class="heading">Log transaction:</p>	
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
