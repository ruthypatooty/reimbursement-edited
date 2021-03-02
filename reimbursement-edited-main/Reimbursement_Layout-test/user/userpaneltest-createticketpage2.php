<html>
<head>
	<title>User Panel</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<style>
	#signatures{
		margin-top:50px;
		border-color:#999990;
		border-style:solid;
		border-radius:10px;
		 margin-left:50px;
		  margin-right:50px;
	}
	.col-12{
		 margin-left:50px;
		  margin-right:50px;
		
	}

	</style>
	
</head>
<body>
<?php 
	 require("fixednavbar.inc")?>
this page is sent to the admin

			<div class="container-fluid">
					<label for="remarks" class="form-label">Remarks: </label>	
				  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
				
			  
				 <div class="row" id="signatures">
					<div class="row ">
						<div class="col-sm-4">
						Prepared by:
						</div>
						<div class="col-sm-4">
						Noted by:
						</div>
						<div class="col-sm-4">
						Reviewed by:
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4"><br><hr>
						NAPOLEON R. MALONZO<br>
						<p>(Signature over printed name)</p>
						</div>
						<div class="col-md-4"><br><hr>
						J.C. MANTOLINO / J.C. MUYARGAS<br>
						<p>Director/Signature Director<br>
						(Signature over printed name)</p>
						</div>
						<div class="col-md-4"><br><hr>
						EDNA M. ANICETE<br>
						<p>Senior Director for Finance<br>
						(Signature over printed name)</p>
						</div>
					</div>
				</div>
				
				


</body>
</html>