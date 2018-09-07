<?php
	session_start();
	if(!isset($_SESSION['username'])){ include 'models/controller.php'; die();}
	$session = $_SESSION['username'];
	$up = ucfirst($_SESSION['username']);
	function ToolTip($title){ echo " data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"$title\" ";}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<header>
						<ul class="list-unstyled">
							<li>
								<?php 
									if(isset($_SESSION['username'])){
										echo "<a class=\"grow\" id=\"username\" href=\"profile\"";
										ToolTip("Profile");
										echo ">$up</a>";
									}
								?>
							</li>
							<li <?php ToolTip("Profile Image"); ?>>
								<img id="imgsm" class="img-circle" src="controls/showimage.php?username=<?php echo $session;?>">
							</li>
							<li>
								<ul class="list-unstyled listof">
									<li>
										<a class="btn btn-info" href="http://localhost/dopmartial" <?php ToolTip("Home"); ?>>
											<span class="glyphicon glyphicon-home"></span>
										</a>
									</li>
									<!-- -->
									<li>
										<a class="btn btn-info" href="http://localhost/dopmartial/contact-us" <?php ToolTip("Contact-Us"); ?>>
											<span class="glyphicon glyphicon-envelope"></span>
										</a>
									</li>
									<!-- -->
									<li>
										<a class="btn btn-info" href="http://localhost/dopmartial/terms" <?php ToolTip("Terms"); ?>>
											<span class="glyphicon glyphicon-book"></span>
										</a>
									</li>
									<!-- -->
									<li>
										<a class="btn btn-info" href="http://localhost/dopmartial/about" <?php ToolTip("About"); ?>>
											<span class="glyphicon glyphicon-user"></span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<button class="btn logout grow" onclick="window.location.href='controls/logout.php'" <?php ToolTip("Logout"); ?>>
									<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
								</button>
							</li>
					</header>
				</div>
			</div>
		</div>
	</section>
	<!-- Section Main -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec1">
					<section class="price_table text-center">
						<div class="container">
							<h1>Our Awesame Prices</h1>
							<div class="row">
								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="price_box">
										<h2 class="text-primary">Hosting</h2>
										<p class="center-block"><span class="text-primary">$40</span></p>
										<ul class="list-unstyled">
											<li>Space: <span class="text-primary">30GB</span></li>
											<li>E-mails: <span class="text-primary">20</span></li>
											<li>IPs: <span class="text-primary">2 IP</span></li>
											<li>Database: <span class="text-primary">10</span></li>
											<li>FTP Accounts: <span class="text-primary">5</span></li>
										</ul>
										<a href="#" class="btn btn-primary grow" <?php ToolTip("Order it Now!"); ?>>Order Now</a>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="price_box">
										<h2 class="text-danger">Hosting</h2>
										<p class="center-block"><span class="text-danger">$40</span></p>
										<ul class="list-unstyled">
											<li>Space: <span class="text-danger">30GB</span></li>
											<li>E-mails: <span class="text-danger">20</span></li>
											<li>IPs: <span class="text-danger">2 IP</span></li>
											<li>Database: <span class="text-danger">10</span></li>
											<li>FTP Accounts: <span class="text-danger">5</span></li>
										</ul>
										<a href="#" class="btn btn-danger grow" <?php ToolTip("Order it Now!"); ?>>Order Now</a>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="price_box">
										<h2 class="text-success">Hosting</h2>
										<p class="center-block"><span class="text-success">$40</span></p>
										<ul class="list-unstyled">
											<li>Space: <span class="text-success">30GB</span></li>
											<li>E-mails: <span class="text-success">20</span></li>
											<li>IPs: <span class="text-success">2 IP</span></li>
											<li>Database: <span class="text-success">10</span></li>
											<li>FTP Accounts: <span class="text-success">5</span></li>
										</ul>
										<a href="#" class="btn btn-success grow" <?php ToolTip("Order it Now!"); ?>>Order Now</a>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="price_box">
										<h2 class="text-warning">Hosting</h2>
										<p class="center-block"><span class="text-warning">$40</span></p>
										<ul class="list-unstyled">
											<li>Space: <span class="text-warning">30GB</span></li>
											<li>E-mails: <span class="text-warning">20</span></li>
											<li>IPs: <span class="text-warning">2 IP</span></li>
											<li>Database: <span class="text-warning">10</span></li>
											<li>FTP Accounts: <span class="text-warning">5</span></li>
										</ul>
										<a href="#" class="btn btn-warning grow" <?php ToolTip("Order it Now!"); ?>>Order Now</a>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="price_box">
										<h2 class="text-warning">Hosting</h2>
										<p class="center-block"><span class="text-warning">$40</span></p>
										<ul class="list-unstyled">
											<li>Space: <span class="text-warning">30GB</span></li>
											<li>E-mails: <span class="text-warning">20</span></li>
											<li>IPs: <span class="text-warning">2 IP</span></li>
											<li>Database: <span class="text-warning">10</span></li>
											<li>FTP Accounts: <span class="text-warning">5</span></li>
										</ul>
										<a href="#" class="btn btn-warning grow" <?php ToolTip("Order it Now!"); ?>>Order Now</a>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="price_box">
										<h2 class="text-success">Vps</h2>
										<p class="center-block"><span class="text-success">$50</span></p>
										<ul class="list-unstyled">
											<li>Space: <span class="text-success">60GB</span></li>
											<li>E-mails: <span class="text-success">30</span></li>
											<li>IPs: <span class="text-success">4 IP</span></li>
											<li>Database: <span class="text-success">20</span></li>
											<li>FTP Accounts: <span class="text-success">10</span></li>
										</ul>
										<a href="#" class="btn btn-success grow" <?php ToolTip("Order it Now!"); ?>>Order Now</a>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="price_box">
										<h2 class="text-info">Dedicated</h2>
										<p class="center-block"><span class="text-info">$70</span></p>
										<ul class="list-unstyled">
											<li>Space: <span class="text-info">80GB</span></li>
											<li>E-mails: <span class="text-info">40</span></li>
											<li>IPs: <span class="text-info">8 IP</span></li>
											<li>Database: <span class="text-info">30</span></li>
											<li>FTP Accounts: <span class="text-info">20</span></li>
										</ul>
										<a href="#" class="btn btn-info grow" <?php ToolTip("Order it Now!"); ?>>Order Now</a>
									</div>
								</div>

								<div class="col-lg-3 col-sm-6 col-xs-12">
									<div class="price_box">
										<h2 class="text-danger">Cloud</h2>
										<p class="center-block"><span class="text-danger">$90</span></p>
										<ul class="list-unstyled">
											<li>Space: <span class="text-danger">100GB</span></li>
											<li>E-mails: <span class="text-danger">80</span></li>
											<li>IPs: <span class="text-danger">9 IP</span></li>
											<li>Database: <span class="text-danger">40</span></li>
											<li>FTP Accounts: <span class="text-danger">30</span></li>
										</ul>
										<a href="#" class="btn btn-danger grow" <?php ToolTip("Order it Now!"); ?>>Order Now</a>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--End of price table -->
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 foo">
					<h5>All Rights are Reserved. <span>Dopmartial</span> <?php echo "2010-".date("Y");//to print the currently date year ?></h5>
				</div>
			</div>
		</div>
	</footer>
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>