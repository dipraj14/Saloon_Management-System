<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Online Booking | Beautify | Salon Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Instyle Fashion HTML Template">
	<meta name="keywords" content="instyle, fashion, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.css">
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark site-navbar">
			<a class="navbar-brand site-logo" href="index.html">
				<h2><span>Beautify </span></h2>
				<span> Salon Management System</span>
			</a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavId">
				<!-- Main menu -->
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="service.html">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="offers.html">Special Offers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="book.php">Book Online</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact Us</a>
					</li>                                                                
				</ul>
				<div class="social-links my-2 my-lg-0">
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</nav>
	</header>
	<!-- Header section end-->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/Banner.jpg">
		<h2>Booking Online</h2>
		
	</section>
	<!-- Page top section end-->


	<!-- Contact page -->
	<section class="page-warp contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						
						<h2>Book Now</h2>
					</div>
					<form action="display.php" method="GET" class="comment-form" >
						<div class="row">
							<div class="col-md-6">
							<p>Enter Your Full name</p> 
								<input type="text" placeholder="Your Name" name="name" required>
							</div>
							<div class="col-md-6">
							<p>Your Token Number</p> 
								<input type="text" placeholder="Token Number" name="TokenNumber" id="TokenNumber" required>
							</div>
							<div class="col-md-6">
							<p>Please Select you slot Date</p> 
								<div class="form-group">
									<div class='input-group date' id='datetimepicker1'>
										<input type='text' class="form-control" name="datepicker" id="datepicker" />
										
									</div>
								</div>
								
							</div>
							<div class="col-md-6">
							<p>Please Select you slot time</p> 
								<div class="dropdown">
								  <select class="custom-select" id="inputGroupSelect01" name="SlotTime" required>
									
									<option value="9:00AM">9:00AM</option>
									<option value="10:00AM">10:00AM</option>
									<option value="11:00AM">11:00AM</option>
									<option value="12:00PM">12:00PM</option>
									<option value="1:00PM">1:00PM</option>
									<option value="3:00PM">3:00PM</option>
									<option value="4:00PM">4:00PM</option>
									<option value="5:00PM">5:00PM</option>
									<option value="6:00PM">6:00PM</option>
								  </select>
								</div>
								
							</div>
							<div class="col-md-12">
							<br/>
								<button value="Submit" class="site-btn sb-dark">SEND <i class="fa fa-angle-double-right"></i></button>
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Contact page end-->
	
	<!-- Back to top -->
	<div class="container">
		<div class="backtotop">
			<div class="up-btn" id="backTotop">UP</div>
		</div>
	</div>

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			

			
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Your name

		</div>
	</footer>
	<!-- Footer section end -->
	
	
	<!--====== Javascripts & Jquery ======-->
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	

	</body>
</html>