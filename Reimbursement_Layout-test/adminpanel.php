<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/rrnv_logo.PNG"/>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<style>
		 .counter>a{
			text-decoration:none;
			color: white;
			
		}
	
	
	</style>
</head>


<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
	
		<!-- nav left -->
		<ul class="navbar-nav">
			
			<li class="nav-item">
				<img src="assets/rrnv.PNG" alt="ATPro logo" class="logo logo-light">
				<img src="assets/rrnv_white.PNG" alt="ATPro logo" class="logo logo-dark">
			</li>
		</ul>
		
			<img class="banner" src="https://www.feutech.edu.ph/assets/img/banner.png">
		<!-- end nav left -->
		<!-- form -->
<!-- 		<form class="navbar-search">
			<input type="text" name="Search" class="navbar-search-input" placeholder="Search">
			<i class="fas fa-search"></i>
		</form> -->
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link">
					<i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i>
					<span class="navbar-badge">15</span>
				</a>
				<ul id="notification-menu" class="dropdown-menu notification-menu">
					<div class="dropdown-menu-header">
						<span>
							Notifications
						</span>
					</div>
					<div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Notification sample1.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Notification sample2.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Notification sample3.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Notification sample4.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Notification sample5.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Notification sample6.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Notification sample7.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Notification sample8.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Notification sample9.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Notification sample10.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Notification sample11.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Notification sample12.
									<br>
									<span>
										01/14/2021
									</span>
								</span>
							</a>
						</li>
					</div>
					<div class="dropdown-menu-footer">
						<span>
							View all notifications
						</span>
					</div>
				</ul>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="assets/avatar.svg" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a class="dropdown-menu-link">
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span>Profile</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-cog"></i>
								</div>
								<span>Settings</span>
							</a>
						</li>						
						<li  class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>	
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<?php
									if(isset($_SESSION["userid"])){
									echo "<span><a href='logout.php'>Logout</a></span>";
									}
								?>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="adminpanel.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<span>
						Dashboard
					</span>
				</a>
			</li>
			
			
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="far fa-folder"></i>
					</div>
					<span>Data</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-chart-line"></i>
					</div>
					<span>Analytics</span>
				</a>
			</li>
			<li  class="sidebar-nav-item">
				<a href="#" class="sidebar-nav-link">
					<div>
						<i class="fas fa-inbox"></i>
					</div>
					<span>Inbox</span>
				</a>
			</li>
			
		</ul>
	</div>

	<!-- main content -->
	<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3>100+</h3>
					<a href="admin-newticket.php"input type="submit" value="new">New</a> 
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3>100+</h3>
					<a href="admin-pending.html"input type="submit" value="inProgress">In Progress</a> 
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3>100+</h3>
					<a href="admin-completeticket.html"input type="submit" value="complete">Completed</a> 
				</div>
			</div>
			
		</div>
		
		
		
		
		
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Forecasting Results
						</h3>
					</div>
					<div class="card-content">
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="js/index.js"></script>
	<!-- end import script -->
</body>
</html>