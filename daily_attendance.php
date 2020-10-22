<!DOCTYPE html>
<html>
<head>
	<title>Daily Attendance</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

	<div class="container mt-5">

<!-- -----------------------------Input Group Starts here------------------------------- -->
		<div class="border border-warning p-3">		
			<h3>Daily Attendance</h3>
			<hr class="bg-warning">
			<form action="daily_attendance.php">
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
					<div class="col-sm-12 col-md-4 p-2">
						<label>Date<span class="text-danger">*</span></label>
						<input type="date" name="" required="true" class="form-control">
					</div>
					<div class="col-sm-12 col-md-4 p-4">
						<button class="btn btn-success mt-3">Get Employee List</button>
					</div>
				</div>
			</form>
		</div>

<!-- ---------------------------------------List of employee starts here------------------------------ -->
		<div class="border border-warning my-3 p-3">
			<div>
				<div class="my-2 row">
					<div class="col-md-8 col-sm-12 form-inline">
						<label>Show &nbsp</label>
						<select>
							<option value="5">5</option>
							<option value="10">10</option>
						</select>
						<label>&nbsp entries.</label>
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
								<th>#</th>
								<th>Employee Name</th>
								<th>Attendance Type</th>
								<th>Attendance By</th>
								<th>Date</th>
								<th>In Time</th>
								<th>Out Time</th>
								<th>Status</th>	
							</tr>
						</thead>
						<tbody>

							<!-- Data 1 -->
							<tr>
								<td>1</td>
								<td>Hari Shrestha</td>
								<td>Manual</td>
								<td>Administator</td>
								<td>15/05/2020</td>
								<td>
									<input type="time" name="" class="form-control">
								</td>
								<td>
									<input type="time" name="" class="form-control">
								</td>
								<td>
									<select class="form-control">
										<option value="">Present</option>
										<option value="">Absent</option>
										<option value="">On Leave</option>
									</select>
								</td>
							</tr>

							<!-- Data 2 -->
							<tr>
								<td>2</td>
								<td>Shyam Shrestha</td>
								<td>Manual</td>
								<td>Administator</td>
								<td>15/05/2020</td>
								<td>
									<input type="time" name="" class="form-control">
								</td>
								<td>
									<input type="time" name="" class="form-control">
								</td>
								<td>
									<select class="form-control">
										<option value="">Present</option>
										<option value="">Absent</option>
										<option value="">On Leave</option>
									</select>
								</td>
							</tr>

			                <!-- Data 3 -->
							<tr>
								<td>3</td>
								<td>Ram Shrestha</td>
								<td>Manual</td>
								<td>Administator</td>
								<td>15/05/2020</td>
								<td>
									<input type="time" name="" class="form-control">
								</td>
								<td>
									<input type="time" name="" class="form-control">
								</td>
								<td>
									<select class="form-control">
										<option value="">Present</option>
										<option value="">Absent</option>
										<option value="">On Leave</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
	          <!-- ---------table ends here----------- -->
			</div>
			<div>
				<p>Showing 1 to 3 of 3 entries.</p>
			</div>
			<form action="daily_attendance.php">
				<div class="mt-3 d-flex justify-content-center">
					<input type="submit" name="" value="Save" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>