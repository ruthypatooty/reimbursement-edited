<html>
<head>
	<title>Completed Tickets</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<style>
		
		INPUT[type=submit]{
			margin:10px;
			padding:.1rem;
			
		}
		
		
		
		.container1 {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		  margin: 50 50;
		
		}
	</style>
	
</head>
<body>
<?php 
	 require("fixednavbar.inc")?>

	<div class="container1">
		<form action="/action_page.php">
		  
		  <input type="search" id="tsearch" name="tsearch" placeholder="Search ticket...">
		  <input type="submit">
		</form>
	
	<table class="table table-hover">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Date Requested</th>
		  <th scope="col">Last Update</th>
		  <th scope="col">Date Completed</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <th scope="row">1</th>
		  <td>Mark</td>
		  <td>Otto</td>
		  <td>@mdo</td>
		</tr>
		<tr>
		  <th scope="row">2</th>
		  <td>Jacob</td>
		  <td>Thornton</td>
		  <td>@fat</td>
		</tr>
		<tr>
		  <th scope="row">3</th>
		  <td colspan="2">Larry the Bird</td>
		  <td>@twitter</td>
		</tr>
	  </tbody>
	</table>
	</div>

</body>
</html>