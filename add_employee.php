<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="container mt-2">
		<form action="add_employee.php" method="">
		<h3>Add Employee</h3>
		<div class="row">

			<!-- column left -->
			<div class="col-sm-12 col-md-6 row">

<!-- -------------------------------- Personal Details -----------------------> 
				<div class="col-sm-12 border border-warning">
					<div class="my-3">
					<h4>Personal Details</h4>
					<hr class="bg-warning">

						<div class="row">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Name<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" class="form-control" required="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Father Name<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" class="form-control" required="">
							</div>	
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Date of Birth<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="date" name="" class="form-control" required="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Gender<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<select name="" class="form-control" required="">
									<option disabled="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Others">Others</option>
								</select>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Phone<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="number" name="" class="form-control" required="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Phone 2</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="number" name="" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Local Address<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" class="form-control" required="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Permanent Address<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" class="form-control" required="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Nationality</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Reference 1<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" class="form-control" required="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Reference 1 Phone<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="number" name="" class="form-control" required="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Reference 2</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Reference 2 Phone</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="number" name="" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Marital Status<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<select name="" class="form-control" required="">
									<option disabled="">Marital Status</option>
									<option value="Married">Married</option>
									<option value="Unmarried">Unmarried</option>
									<option value="Others">Others</option>
								</select>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Photo<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="file" name="" required="">
							</div>
						</div>
				</div>
				</div>

<!----------------------------- Documents ------------------------------------------->
				<div class="col-sm-12 border border-warning my-3">
					<div class="my-3">
					<h4>Documents</h4>
					<hr class="bg-warning">

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Resume File &nbsp<span><i title="Only .pdf file allowed" class="fas fa-info-circle"></i></span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="file" name="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Offer Letter &nbsp<span><i title="Only .pdf file allowed" class="fas fa-info-circle"></i></span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="file" name="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Joining Letter &nbsp<span><i title="Only .pdf file allowed" class="fas fa-info-circle"></i></span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="file" name="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Contract Paper &nbsp<span><i title="Only .pdf file allowed" class="fas fa-info-circle"></i></span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="file" name="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Other &nbsp<span><i title="Only .pdf file allowed" class="fas fa-info-circle"></i></span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="file" name="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Dropbox   &nbsp&nbsp</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" placeholder="Employee documents dropbox url" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Google Drive Url   &nbsp&nbsp</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" placeholder="Employee documents google drive url" class="form-control">
							</div>
						</div>

					</div>	
				</div>
	
			</div>

			<!-- column right -->
			<div class="col-sm-12 col-md-6">

<!---------------------------------- Account Login --------------------------------------->
				<div class="col-sm-12 border border-warning  py-3">
					<h4>Account Login<span class="pl-2"><i title="Employee Login" class="fas fa-info-circle"></i></span></h4>
					<hr class="bg-warning">

					    <div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Email<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="email" name="" class="form-control" required="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Password<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="password" name="" class="form-control" required="">
							</div>
						</div>
					</div>

<!------------------------------ Company Details -------------------------------------------->
				<div class="col-sm-12  border border-warning  py-3 my-3">
					<h4>Company Details</h4>
					<hr class="bg-warning">

					    <div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Employee ID</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="text" name="" class="form-control" placeholder="Auto Generated" disabled="true">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Department<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<select name="" class="form-control" required="">
									<option>Select Department</option>
									<option value="Sales">Sales</option>
									<option value="Finance">Finance</option>
									<option value="Purchase">Purchase</option>
								</select>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Designation<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<select name="" class="form-control" required="">
									<option>Select a Department First</option>
								</select>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Date of Joining<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="date" name="" class="form-control" required="">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Date of Leaving</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="date" name="" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Status</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<select name="" class="form-control">
									<option value="active">Active</option>
									<option value="inactive">Inactive</option>
								</select>
							</div>
						</div>

				</div>
<!------------------------------- Financial Details ------------------------------------------------->
				<div class="col-sm-12 border border-warning  py-3 my-3">
					<h4>Financial Details</h4>
					<hr class="bg-warning">

					    <div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Basic Salary<span class="text-danger font-weight-bold">*</span></label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="number" name="" placeholder="Amount Rs." class="form-control" required="">
							</div>
						</div>
                        
                        <hr class="bg-warning">

                        <div class="col-sm-12 col-md-12 row">
                        	
                        	<div class="col-sm-12 col-md-6">
                        		<select name="" class="form-control">
									<option value="Allowence">Allowence</option>
									<option value="House Rent">House Rent</option>
								</select>
                        	</div>

                        	<div class="col-sm-12 col-md-4">
                        		<input type="number" name="" placeholder="Rs." class="form-control">
                        	</div>

                        	<div class="col-sm-12 col-md-2">
                        		<input type="submit" name=""  class="form-control btn btn-primary" value="+">
                        	</div>
							
						</div>

						<hr class="bg-warning">

                        <div class="col-sm-12 col-md-12 row">
                        	
                        	<div class="col-sm-12 col-md-6">
                        		<select name="" class="form-control">
									<option value="Deduction">Deduction</option>
									<option value="PF">PF</option>
								</select>
                        	</div>

                        	<div class="col-sm-12 col-md-4">
                        		<input type="number" name="" placeholder="Rs." class="form-control">
                        	</div>

                        	<div class="col-sm-12 col-md-2">
                        		<input type="submit" name=""  class="form-control btn btn-primary" value="+">
                        	</div>
							
						</div>

						<hr class="bg-warning">

						<div class="row mt-2">
							<div class="col-sm-12 col-md-4">
								<label class="d-flex justify-content-end">Total Salary</label>
							</div>
							<div class="col-sm-12 col-md-8">
								<input type="number" name="" placeholder="Amount Rs." class="form-control">
							</div>
						</div>
				</div>
<!---------------------------------- Bank Account Details ----------------------------------------->
				<div class="col-sm-12 border border-warning  py-3 my-3">
					<h4>Bank Account Details</h4>
					<hr class="bg-warning">

					    <div class="row mt-2">
							<div class="col-sm-12 col-md-5">
								<label class="d-flex justify-content-end">Account Holder Name</label>
							</div>
							<div class="col-sm-12 col-md-7">
								<input type="text" name="" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-5">
								<label class="d-flex justify-content-end">Account Number</label>
							</div>
							<div class="col-sm-12 col-md-7">
								<input type="text" name="" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-5">
								<label class="d-flex justify-content-end">Bank Name</label>
							</div>
							<div class="col-sm-12 col-md-7">
								<input type="text" name="" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-5">
								<label class="d-flex justify-content-end">Branch</label>
							</div>
							<div class="col-sm-12 col-md-7">
								<input type="text" name="" class="form-control">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-sm-12 col-md-5">
								<label class="d-flex justify-content-end">Bank Code</label>
							</div>
							<div class="col-sm-12 col-md-7">
								<input type="text" name="" class="form-control">
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center my-4">
			<input type="submit" name="" value="Submit" class="btn btn-success">
		</div>
		</form>
	</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>