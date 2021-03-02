<html>
<head>
	<title>User Panel</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<style>
		h4{	
			align-self:flex-end;
			color:red;
			
		}
		
		label.form-check-label{
			
			display:inline;
			
		}
		.form-check {
		flex-wrap: nowrap;
	
		}

		.form-check-input{

			margin:15px;
		}

		tbody>tr>td>INPUT[type=text]{
			
			height: 30px;
		}

		.col-md-4>INPUT[type=text]INPUT[type=text],.col-6>INPUT[type=text],#amountWords,#remarks{
			
			height: 40px;
		}


		 {
		  box-sizing: border-box;
		}

		input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  resize: vertical;
		}

		label {
		  padding: 12px 12px 12px 0;
		  display: inline-block;
		}

		input[type=submit] {
		 
		  color: white;
		  padding: 12px 20px;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		  float: right;
		}

		

		.container1 {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		  margin-left:50px;
		  margin-right:50px;
		}


		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		  .col-25, .col-75, input[type=submit] {
			width: 25%;
			margin-top: 0;
		  }
		}
		.btn-primary{
			margin-top:20px;
			width:12%;
			margin-left:50px;
		}
	
	</style>
	
</head>
<body>
	<?php 
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
								  
								<div class=" form-check ">
								  <input class="form-check-input" type="checkbox"  value="option2" checked>
								  <label class="form-check-label" >Reimbursement </label>
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
		
			<a href="userpaneltest-createticketpage2.php" class="btn btn-primary" input type="submit" value="Submit">Submit</a>
		
		
	  </div>
 
</body>
</html>