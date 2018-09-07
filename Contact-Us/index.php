<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact-Us</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/hover.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<header>
						<ul class="list-unstyled">
							<li>
								<?php include '../controls/header.php';?>
							</li>
							<li <?php ToolTip("Profile Image"); ?>>
								<img id="imgsm" class="img-circle" src="../controls/showimage.php?username=<?php echo $session;?>">
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
								<button class="btn logout grow" onclick="window.location.href='../controls/logout.php'" <?php ToolTip("Logout"); ?>>
									<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
								</button>
							</li>
						</ul>
					</header>
				</div>
			</div>
		</div>
	</section>
	<!-- Section Contact-us -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="container">
						<div class="row">
							<div class="col-md-12 sec1">
								<div class="contact">
									<h1>Contact Us:</h1>
									<form method="post" action="../controls/contact-us.php">
										<div class="form-group">
											<input required="required" type="text" name="username" class="input-lg" placeholder="Enter Your Name:">
										</div>
										<!-- -->
										<div class="form-group">
											<input required="required" type="email" name="email" class="input-lg" placeholder="Enter Your Email:">
										</div>
										<!-- -->
										<div class="form-group">
											<textarea rows="4" cols="50" name="message" class="input-lg" required="required"></textarea>
										</div>
										<!-- -->
										<div class="form-group">
											<input type="submit" name="submit" class="btn-info btn-lg" value="Send">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>