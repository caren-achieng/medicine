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
	<button type="button" class="btn btn-success">History</button>
	<br><br>
	<!-- <div class="containerTable">
		<h2 class="table-title">LEAVE APPLICATION</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="th-data" scope="col">LEAVE ID</th>
					<th class="th-data" scope="col">LEAVE TYPE</th>
					<th class="th-data" scope="col">START DATE</th>
					<th class="th-data" scope="col">END DATE</th>
					<th class="th-data" scope="col">STATUS</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<th class="data" scope="row">001</th>
					<td class="data">Sick Leave</td>
					<td class="data">30</td>
					<td class="data">12</td>
					<td class="data"><a href="<?= base_url('/leaveapplication'); ?>"><button type="button" class="btn btn-success">APPLY</button></a></td>
				</tr>
				<tr>
					<th class="data" scope="row">002</th>
					<td class="data">Maternity Leave</td>
					<td class="data">30</td>
					<td class="data">12</td>
					<td class="data"><a href="<?= base_url('/leaveapplication'); ?>"><button type="button" class="btn btn-success">APPLY</button></a></td>
				</tr>
				<tr>
					<th class="data" scope="row">003</th>
					<td class="data">Paternity Leave</td>
					<td class="data">3</td>
					<td class="data">3</td>
					<td class="data"><a href="<?= base_url('/leaveapplication'); ?>"><button type="button" class="btn btn-success">APPLY</button></a></td>
				</tr>
				<tr>
					<th class="data" scope="row">004</th>
					<td class="data">Annual leave</td>
					<td class="data">27</td>
					<td class="data">27</td>
					<td class="data"><a href="<?= base_url('/leaveapplication'); ?>"><button type="button" class="btn btn-success">APPLY</button></a></td>
				</tr>
				<tr>
					<th class="data" scope="row">005</th>
					<td class="data">Compassionate Leave</td>
					<td class="data">1</td>
					<td class="data">0</td>
					<td class="data"><a href="<?= base_url('/leaveapplication'); ?>"><button type="button" class="btn btn-success disabled">APPLY</button></a></td>
				</tr>

			</tbody>
		</table>

	</div> -->


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
				<!-- <tr>
					<th class="data2" scope="row">00123</th>
					<td class="data2">Peter Maina</td>
					<td class="data2">Toil Leave</td>
					<td class="data2">3 days</td>
					<td class="data2">12/Oct/2021 13:25hrs</td>
					<td class="data2"> <button type="button" class="btn btn-warning disabled "> Pending </button> </td>
				</tr>

				<tr>
					<th class="data2" scope="row">00123</th>
					<td class="data2">Peter Maina</td>
					<td class="data2">Toil Leave</td>
					<td class="data2">3 days</td>
					<td class="data2">12/Jan/2021 13:25hrs</td>
					<td class="data2"> <button type="button" class="btn btn-success ">Approved</button> </a> </td>
				</tr>
				<tr>
					<th class="data2" scope="row">00123</th>
					<td class="data2">Peter Maina</td>
					<td class="data2">Emergency Leave</td>
					<td class="data2">3 days</td>
					<td class="data2">16/Apr/2020 00:25hrs</td>
					<td class="data2"> <button type="button" class="btn btn-danger "> Rejected </button> </td>
				</tr> -->
			</tbody>
		</table>
	</div>

	<script>

	</script>