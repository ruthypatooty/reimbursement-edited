<html>
<head>
	<title>User Panel</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<?php require("fixedfeulogo.inc");
	 require("fixednavbar.inc")?>
	<div class="card-body card ">
		<h5 class="card-title">Check Request Form</h5>
		<!--form code-->
		<h4>CRF No.---</h4>
			
			<div class="container1">
			  <form action="/action_page.php" class="row">
				 <div class="col-md-4">
					<label for="payeefirst" class="form-label">First Name</label>
					<input type="text" class="form-control" id="firstName">
				  </div>
				   <div class="col-md-4">
					<label for="payeelast" class="form-label">Last Name</label>
					<input type="text" class="form-control" id="lasttName">
				  </div>
				  <div class="col-md-4">
					<label for="date" class="form-label">Date</label>
					<input type="date" class="form-control" id="date">
				  </div>
				<div class="col-6">
					<label for="purpose" class="form-label">Purpose</label>
					<input type="text" class="form-control" id="purpose">
				  </div>
				  <div class="col-6">
					<label for="office" class="form-label">Office</label>
					<input type="text" class="form-control" id="office">
				  </div>
				  <div class="row-12" >
						<div class="row">
							<div class="col-sm-6">
							<label for="request" class="form-label">Nature Of Request:</label>
							
							</div>
							<div class="col-sm-6">
						  <label for="dateReq" class="form-label">Date Required:</label>
						  </div>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<div class="row-12" >
								  <div class="form-check " >
								  <input class="form-check-input" type="checkbox" value="option1">
								  <label class="form-check-label" >Direct Payment </label>
								</div>
								<div class=" form-check ">
								  <input class="form-check-input" type="checkbox"  value="option2">
								  <label class="form-check-label" >Reimbursement </label>
								</div>
								<div class="form-check ">
								  <input class="form-check-input" type="checkbox"  value="option2">
								  <label class="form-check-label" >Cash Advance</label>
								</div>
								  </div>
							</div>
							<div class="col-sm-6">
								<input type="date" class="form-control" id="date">
							</div>
						</div>
				  </div>
				  
				  
				<table class="table">
				  <thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Activity Date</th>
					  <th scope="col">Nature of Expenditure</th>
					  <th scope="col">Amount</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <th scope="row">1</th>
					  <td>
						<INPUT TYPE="date" NAME="datePrescription" SIZE="20">
					  </td>
					  <td>
						<INPUT TYPE="TEXT" NAME="name" SIZE="20">
					  </td>
					  <td>
						<INPUT TYPE="number" NAME="pesos" SIZE="20">
					  </td>
					</tr>
					<tr>
					  <th scope="row">2</th>
					  <td>Jacob</td>
					  <td>Thornton</td>
					  <td>@fat</td>
					</tr>
					<tr>
					  
					  <td></td>
					  <td></td>
					  <td></td>
					  <td>
						Total here: _
					  </td>
					</tr>
					
				  </tbody>
				</table>
				
				<div class="col-12">
					<label for="amount" class="form-label">Pesos </label>
					<input type="text" class="form-control" id="amountWords" placeholder="(Amount in words)">
				  </div>

				  
			  </form>
			</div>
					
		<!---->
		<a href="userpaneltest-createticketpage2.php" class="btn btn-outline-primary" input type="submit" value="Submit">Submit</a>
		
		
	  </div>
 
</body>
</html>