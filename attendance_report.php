<!DOCTYPE html>
<html>
<head>
	<title>Attendance Report</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

	<div class="container mt-5">

<!-- -----------------------------Input Group Starts here------------------------------- -->
		<div class="border border-warning p-3">		
			<h3>Attendance Report</h3>
			<hr class="bg-warning">
			<form action="attendance_report.php">
				<div class="row p-3">
					<div class="col-sm-12 col-md-4 p-2">
						<label>Employees By Department<span class="text-danger">*</span></label>
						<select class="form-control">
							<option value="">All Department</option>
							<option value="">Account</option>
							<option value="">Sales</option>
							<option value="">Research and Development</option>
						</select>
					</div>
					<div class="col-sm-12 col-md-3 p-2">
						<label>Year</label>
						<select class="form-control">
							<option></option>
							<option value="">2000</option>
							<option value="">2001</option>
							<option value="">2002</option>
						</select>
					</div>
					<div class="col-sm-12 col-md-3 p-2">
						<label>Month</label>
						<select class="form-control">
							<option></option>
							<option value="">January</option>
							<option value="">February</option>
							<option value="">March</option>
							<option value="">April</option>
							<option value="">May</option>
							<option value="">June</option>
							<option value="">July</option>
							<option value="">August</option>
							<option value="">September</option>
							<option value="">October</option>
							<option value="">November</option>
							<option value="">December</option>
						</select>
					</div>
					<div class="col-sm-12 col-md-2 p-4">
						<button class="btn btn-success mt-3">Show Report</button>
					</div>
				</div>
			</form>
		</div>

<!-- ---------------------------------------List of employee starts here------------------------------ -->
		<div class="border border-warning my-3 p-3">
			<div>
				<div class="my-2 row">
					<div class="col-md-8 col-sm-12 form-inline">
						<button class="btn btn-dark m-1">Copy</button>
						<button class="btn btn-dark">CSV</button>
						<button class="btn btn-dark m-1">Print</button>
					</div>
					<div class="col-md-4 col-sm-12">
						<input type="text" name="" placeholder="Search..." class="form-control">
					</div>
				</div>


	          <!-- -----------Table starts here------------- -->
				<div>
					<table class="table table-bordered table-striped">
						<thead class="bg-primary">
							<tr>
								<th>Serial</th>
								<th>Employee</th>
								<th>Summary</th>
								<th>1</th>
								<th>2</th>
								<th>3</th>
								<th>4</th>
								<th>5</th>	
								<th>6</th>
								<th>7</th>
								<th>8</th>
								<th>9</th>
								<th>10</th>	
							</tr>
						</thead>
						<tbody>

							<!-- Data 1 -->
							<tr>
								<td>1</td>
								<td>Hari Shrestha</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>

							<!-- Data 2 -->
							<tr>
								<td>2</td>
								<td>Shyam Shrestha</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

			                <!-- Data 3 -->
							<tr>
								<td>3</td>
								<td>Ram Shrestha</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
	          <!-- ---------table ends here----------- -->
			</div>
			<div>
				<p>Showing 1 to 3 of 3 entries.</p>
			</div>
		</div>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>