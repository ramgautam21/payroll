<!DOCTYPE html>
<html>
<head>
	<title>Manage Employee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<style type="text/css">
		.dot{
			height: 10px;
			width: 10px;
			border-radius: 50%;
			display: inline-block;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>Manage Employee</h3>
		<hr class="bg-warning">

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


<!-- -------------------------------Table starts here------------------------------ -->
			<div>
				<table class="table table-bordered table-striped">
					<thead class="bg-primary">
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Department</th>
							<th>Designation</th>
							<th>Status</th>
							<th>Action</th>	
						</tr>
					</thead>
					<tbody>

						<!-- Data 1 -->
						<tr>
							<td>1</td>
							<td><span class="dot bg-success"></span> Hari Shrestha</td>
							<td>hari_stha@gmail.com</td>
							<td>Account</td>
							<td>Account Manager</td>
							<td>
								<input type="checkbox" name=""> Active/Inactive
							</td>
							<td>
								<div>
									<a href="" class="btn btn-success"><i class="far fa-eye"> View Details</i></a>
									<a href="" class="btn btn-primary"><i class="fas fa-pencil-alt"> Edit</i></a>
									<button type="submit" class="btn btn-danger"><i class="fas fa-times"> Delete</i></button>
								</div>
							</td>
						</tr>

						<!-- Data 2 -->
						<tr>
							<td>2</td>
							<td><span class="dot bg-success"></span> Hari Shrestha</td>
							<td>hari_stha@gmail.com</td>
							<td>Account</td>
							<td>Account Manager</td>
							<td>
								<input type="checkbox" name=""> Active/Inactive
							</td>
							<td>
								<div>
									<a href="" class="btn btn-success"><i class="far fa-eye"> View Details</i></a>
									<a href="" class="btn btn-primary"><i class="fas fa-pencil-alt"> Edit</i></a>
									<button type="submit" class="btn btn-danger"><i class="fas fa-times"> Delete</i></button>
								</div>
							</td>
						</tr>

		                <!-- Data 3 -->
						<tr>
							<td>3</td>
							<td><span class="dot bg-dark"></span> Hari Shrestha</td>
							<td>hari_stha@gmail.com</td>
							<td>Account</td>
							<td>Account Manager</td>
							<td>
								<input type="checkbox" name=""> Active/Inactive
							</td>
							<td>
								<div>
									<a href="" class="btn btn-success"><i class="far fa-eye"> View Details</i></a>
									<a href="" class="btn btn-primary"><i class="fas fa-pencil-alt"> Edit</i></a>
									<button type="submit" class="btn btn-danger"><i class="fas fa-times"> Delete</i></button>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
<!-- ------------------------table ends here--------------------------------- -->
		</div>
		<div>
			<p>Showing 1 to 3 of 3 entries.</p>
		</div>
	</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>