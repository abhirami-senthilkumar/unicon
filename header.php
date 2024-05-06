<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Ayman Fikry" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="Unicon" />
	<title>Unicon</title>
	<link href="assets/images/favicon/favicon.png" rel="icon" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link
		href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
		rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<?php
	$path = $_SERVER['REQUEST_URI'];
	$path = $_SERVER['PHP_SELF'];
	?>
</head>

<body>
	<!-- Document Wrapper-->
	<div class="wrapper clearfix" id="wrapperParallax">
		<header class="header header-light header-topbar" id="navbar-spy">
			<!-- Start .top-bar-->
			<div class="top-bar">
				<div class="block-left">
					<div class="top-contact">
						<div class="contact-infos"><i class="fas fa-phone-alt"></i>
							<div class="contact-body"> <a href="tel:+91 94426 44463">Phone: +91 94426 44463</a></div>
						</div>
						<div class="contact-infos"><i class="fas fa-envelope"></i>
							<div class="contact-body"> <a href="mailto:info@uniconinter.com">Email:
									info@uniconinter.com</a>
							</div>
						</div>
						<div class="contact-infos"><i class="fas fa-fax"></i>
							<div class="contact-body">
								<p>Fax: + 91-422-2667309 </p>
							</div>
						</div>
					</div>
				</div>
				<div class="block-right">
					<!-- Start .module-social-->
					<div class="module module-social"><a class="share-facebook" href="#"><i class="fab fa-facebook-f">
							</i></a><a class="share-instagram" href="#"><i class="fab fa-instagram"></i></a><a
							class="share-twitter" href="#"><i class="fab fa-twitter"></i></a></div>
					<!-- End .module-social-->
				</div>
			</div>
			<!-- End .top-bar-->
			<nav class="navbar navbar-expand-xl navbar-sticky" id="primary-menu">
				<a class="navbar-brand" href="index.php">
					<img class="logo logo-dark" src="assets/images/logo/logo.png" alt="Medisch Logo" /><img
						class="logo logo-mobile" src="assets/images/logo/logo.png" alt="Medisch Logo" />
				</a>
				<div class="module-holder module-holder-phone">
					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
						aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				</div>
				<div class="collapse navbar-collapse" id="navbarContent">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item current <?php if (basename($path) == 'index.php') { ?> active <?php } ?>"
							id="home" data-hover=""><a href="index.php"><span>Home</span></a></li>
						<li class="nav-item <?php if (basename($path) == 'profile.php') { ?> active <?php } ?>"
							data-hover=""><a href="javascript:;"><span>Profile</span></a></li>
						<li class="nav-item <?php if (basename($path) == 'design.php') { ?> active <?php } ?>"
							data-hover=""><a href="design.php"><span>Design</span></a></li>
						<li class="nav-item has-dropdown mega-dropdown <?php if (basename($path) == 'products.php' || basename($path) == 'low-nox-burners.php') { ?> active <?php } ?>"
							data-hover=""><a class="dropdown-toggle" href="javascript:;"
								data-toggle="dropdown"><span>Products</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="row">
										<div class="col-12 col-md-4">
											<h5 class="menu-head">Air Pollution Control Equipments</h5>
											<ul>
												<li class="nav-item"><a href="low-nox-burners.php"><span>Low NOx
															Burners</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Electrostatic
															Precipitator</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Bag House</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Ammonia Flue Gas
															Conditioning</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Mist Separators –
															Candle Filters</span></a></li>
											</ul>
										</div>
										<div class="col-12 col-md-4">
											<h5 class="menu-head">Material Handling Systems</h5>
											<ul>
												<li class="nav-item"><a href="javascript:;"><span>Pneumatic Conveying
															Systems</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Rotary Airlock
															Valve</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Slide Gate</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Double Cone
															Valve</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Double Flap
															Valve</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Clam Shell
															Gate</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Dome Valve</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Drag Chain
															Conveyor</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Belt
															Conveyor</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Screw
															Conveyor</span></a></li>
											</ul>
										</div>
										<div class="col-12 col-md-4">
											<h5 class="menu-head">Process Equipments</h5>
											<ul>
												<li class="nav-item"><a href="javascript:;"><span>Silencers</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Defence</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Storage
															Tank</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Agitators</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Decomposers</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Pressure
															Vessels</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Jacketted
															Vessels</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Catalogues</span></a>
												</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="nav-item has-dropdown mega-dropdown <?php if (basename($path) == 'services.php') { ?> active <?php } ?>"
							data-hover=""><a class="dropdown-toggle" href="javascript:;"
								data-toggle="dropdown"><span>Services</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="row">
										<div class="col-12 col-md-4">
											<h5 class="menu-head">Inspection & Testing Services</h5>
											<ul>
												<li class="nav-item"><a href="javascript:;"><span>Computational Fluid
															Dynamics</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>GD Testing</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Emission
															Testing</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Supervisory
															Services</span></a></li>
											</ul>
										</div>
										<div class="col-12 col-md-4">
											<h5 class="menu-head">Project Management & Plant Maintenance</h5>
											<ul>
												<li class="nav-item"><a href="javascript:;"><span>Erection &
															Commissioning</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Retrofits</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Upgrades</span></a>
												</li>
												<li class="nav-item"><a href="javascript:;"><span>Residual Life
															Assessment</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Shut Down
															Maintenance</span></a></li>
												<li class="nav-item"><a href="javascript:;"><span>Annual
															Maintenance</span></a></li>
											</ul>
										</div>
										<div class="col-12 col-md-4">
											<h5 class="menu-head">Spares and Support</h5>
											<ul>
												<li class="nav-item"><a href="javascript:;"><span>Spares for
															ESP</span></a>
												<li class="nav-item"><a href="javascript:;"><span>Spares for
															Baghouse</span></a>
												<li class="nav-item"><a href="javascript:;"><span>Spares for Cement
															Plant</span></a>
												</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="nav-item <?php if (basename($path) == 'job.php') { ?> active <?php } ?>"
							data-hover=""><a href="job.php"><span>Job</span></a></li>
						<li class="nav-item <?php if (basename($path) == 'blog.php' || basename($path) == 'blog-detail.php') { ?> active <?php } ?>"
							data-hover=""><a href="blog.php"><span>blog</span></a></li>
						<li class="nav-item <?php if (basename($path) == 'get-a-quote.php') { ?> active <?php } ?>"
							data-hover=""><a href="javascript:;"><span>Get a Quote</span></a>
						</li>
						<li class="nav-item <?php if (basename($path) == 'contact.php') { ?> active <?php } ?>"
							id="contact" data-hover=""><a href="contact.php"><span>Connect to
									Us</span></a>
						</li>
					</ul>
					<!-- <div class="module-holder">
						<div class="module-contact">
							<a class="btn btn--secondary" href="javascript:;">request an estimate</a>
						</div>
					</div> -->
				</div>
			</nav>
		</header>