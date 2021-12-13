<!-- inside home section--- leave application interface -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="<?= base_url('js/core/jquery-3.6.0.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
	function history() {
		var xhttp = new XMLHttpRequest()
		var url = 'http://localhost:8080/ClientDashboard/leaveHistory'

		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var result = this.responseText;
				var resultText = JSON.parse(result);

				resultText.forEach(x => {
					x.leave_type = x.leave_type.toLowerCase().replace(/\b[a-z]/g, function(letter) {
						return letter.toUpperCase()
					});
					$('#history-table').append('<tr><td>' + x.leave_type + '</td><td>' + x.start_date + '</td><td>' + x.end_date + '</td><td>' + x.leave_status + '</td></tr>')
				});
			}

		}

		xhttp.open('GET', url, true);
		xhttp.send();
	}
	$(document).ready(function (){
	   history();
    });
</script>
<div class="container nav-bar">
	<br><br>
	<a href="<?= base_url('/apply'); ?>"><button type="button" class="btn btn-success">APPLY</button></a>
	<br><br>

	<div class="containerTable2">
		<h2 class="table2-title">RECENT LEAVE REQUESTS</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="th-data2" scope="col">LEAVE TYPE</th>
					<th class="th-data2" scope="col">START DATE</th>
					<th class="th-data2" scope="col">END DATE</th>
					<th class="th-data2" scope="col">LEAVE STATUS</th>
				</tr>
			</thead>
			<tbody id="history-table">
			</tbody>
		</table>
	</div>

	<script>

	</script>