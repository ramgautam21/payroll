<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style type="text/css">
		.tab button{
			background-color: gray;
			width: 100%;
		}
		.tab button:hover{
			background-color: #3a4191;
		}
		.tab button.active{
			background-color: #091be3;
		}
		.tab button{
			color: white;
		}

	</style>
</head>
<body>

	<div class="container my-3">
		<div class="row">

			<div class="col-sm-6 col-md-4 col-lg-3 p-3 mr-3 border border-warning">

				<h4>HARI SHRESTHA</h4>

				<div class="d-flex justify-content-center border border-warning p-1 mt-3">
					<img src="employee.png" alt="Employee Photo" style="width: 100%; height: 25vh;">
				</div>

				<div class="mt-3">
					<i class="fas fa-phone-alt">  Ph: 980000000</i>
					<i class="fas fa-envelope">  Email: hari_stha@gmail.com</i>
				</div>
				<hr style="border: 2px solid; border-color: #ffc107;">

				<div class="tab">
				  <button class="tablinks btn" onclick="openCity(event, 'Personal')" id="defaultOpen">Personal Details</button>
				  <button class="tablinks mt-1 btn" onclick="openCity(event, 'Company')">Company Details</button>
				  <button class="tablinks mt-1 btn" onclick="openCity(event, 'Financial')">Financial Details</button>
				  <button class="tablinks mt-1 btn" onclick="openCity(event, 'Bank_Account')">Bank Account Details</button>
				  <button class="tablinks mt-1 btn" onclick="openCity(event, 'Documents')">Documents</button>
				</div>

			</div>

			<div class="col-sm-12 col-md-7 col-lg-8 border border-warning p-3" >

<!-- -----------------------Personal Details----------------------------- -->
				<div id="Personal" class="tabcontent">
				  <h5>Personal Details</h5>
				  <hr class="bg-warning">
				  	<table class="table table-striped table-bordered">
				  		<tbody>
						      <tr>
						        <td>Name</td>
						        <td>Hari Shrestha</td>
						      </tr>
						      <tr>
						        <td>Email</td>
						        <td>hari_stha@gmail.com</td>
						      </tr>
						      <tr>
						        <td>Father Name</td>
						        <td>Shyam Shrestha</td>
						      </tr>
						      <tr>
						        <td>Date of Birth</td>
						        <td>19/03/1998</td>
						      </tr>
						      <tr>
						        <td>Gender</td>
						        <td>Male</td>
						      </tr>
						      <tr>
						        <td>Phone 1</td>
						        <td>980000000</td>
						      </tr>
						      <tr>
						        <td>Phone 2</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Local Address</td>
						        <td>Kathmandu, Nepal</td>
						      </tr>
						      <tr>
						        <td>Permanent Address</td>
						        <td>Kavre, Nepal</td>
						      </tr>
						      <tr>
						        <td>Nationality</td>
						        <td>Nepali</td>
						      </tr>
						      <tr>
						        <td>Referance 1</td>
						        <td>Harka Bahadur</td>
						      </tr>
						      <tr>
						        <td>Reference 1 Phone</td>
						        <td>9800000000</td>
						      </tr>
						      <tr>
						        <td>Referance 2</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Reference 2 Phone</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Marital Status</td>
						        <td>Unmarried</td>
						      </tr>
						      <tr>
						      	<td colspan="2"><i>Created by Administrator On Wed, 14 2020 4:24 PM</i></td>
						      </tr>
					    </tbody>							  		
				  	</table>
				</div>

<!-- --------------------------Company Details------------------------------ -->
				<div id="Company" class="tabcontent">
				  <h5>Company Details</h5>
				  <hr class="bg-warning">
				  	<table class="table table-striped table-bordered">
				  		<tbody>
						      <tr>
						        <td>Employee ID</td>
						        <td>017289</td>
						      </tr>
						      <tr>
						        <td>Department</td>
						        <td>Account</td>
						      </tr>
						      <tr>
						        <td>Designation</td>
						        <td>Department Manager</td>
						      </tr>
						      <tr>
						        <td>Date of Joining</td>
						        <td>19/03/2018</td>
						      </tr>
						      <tr>
						        <td>Date of Leaving</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Status</td>
						        <td>Active</td>
						      </tr>
						      <tr>
						      	<td colspan="2"><i>Created by Administrator On Wed, 14 2020 4:24 PM</i></td>
						      </tr>
					    </tbody>							  		
				  	</table>
				</div>


<!-- --------------------------Financial Details------------------------------ -->
				<div id="Financial" class="tabcontent">
				  <h5>Financial Details</h5>
				  <hr class="bg-warning">
				  	<table class="table table-striped table-bordered">
				  		<tbody>
						      <tr>
						        <td>Basic Salary</td>
						        <td>Rs. 80,000</td>
						      </tr>
						      <tr>
						        <td>Allowence</td>
						        <td>Rs. 7,000</td>
						      </tr>
						      <tr>
						        <td>House Rent</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Deduction</td>
						        <td>Rs. 2,000</td>
						      </tr>
						      <tr>
						        <td>PF</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Total Salary</td>
						        <td>Rs. 85,000</td>
						      </tr>
						      <tr>
						      	<td colspan="2"><i>Created by Administrator On Wed, 14 2020 4:24 PM</i></td>
						      </tr>
					    </tbody>							  		
				  	</table>
				</div>

<!-- --------------------------Bank Account Details------------------------------ -->
				<div id="Bank_Account" class="tabcontent">
				  <h5>Bank Account Details</h5>
				  <hr class="bg-warning">
				  	<table class="table table-striped table-bordered">
				  		<tbody>
						      <tr>
						        <td>Account Holder Name</td>
						        <td>Hari Shrestha</td>
						      </tr>
						      <tr>
						        <td>Account Number</td>
						        <td>01298764523898</td>
						      </tr>
						      <tr>
						        <td>Bank Name</td>
						        <td>Everest Bank Pvt. Ltd.</td>
						      </tr>
						      <tr>
						        <td>Branch</td>
						        <td>New Baneshwor</td>
						      </tr>
						      <tr>
						        <td>Bank Code</td>
						        <td></td>
						      </tr>
						      <tr>
						      	<td colspan="2"><i>Created by Administrator On Wed, 14 2020 4:24 PM</i></td>
						      </tr>
					    </tbody>
					 </table>
				</div>

<!-- --------------------------Document Details------------------------------ -->
				<div id="Documents" class="tabcontent">
				  <h5>Documents</h5>
				  <hr class="bg-warning">
				  	<table class="table table-striped table-bordered">
				  		<tbody>
						      <tr>
						        <td>Resume File</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Offer Letter</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Joining Letter</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Contract Paper</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Others</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Dropbox</td>
						        <td></td>
						      </tr>
						      <tr>
						        <td>Google Drive Url</td>
						        <td></td>
						      </tr>
						      <tr>
						      	<td colspan="2"><i>Created by Administrator On Wed, 14 2020 4:24 PM</i></td>
						      </tr>
					    </tbody>
					 </table>
				</div>		
			</div>				
		</div>		
	</div>
	


<script>
	function openCity(evt, doc_Name) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(doc_Name).style.display = "block";
	  evt.currentTarget.className += " active";
	}
	document.getElementById("defaultOpen").click();
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>