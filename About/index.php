<?php 
	function mylink($link){
		echo "\"http://localhost/dopmartial/$link\"";	
	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
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
							<li><?php include '../controls/header.php';?></li>
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
										<a class="btn btn-info" href=<?php mylink('contact-us');?> <?php ToolTip("Contact-Us"); ?>>
											<span class="glyphicon glyphicon-envelope"></span>
										</a>
									</li>
									<!-- -->
									<li>
										<a class="btn btn-info" href=<?php mylink("terms");?> <?php ToolTip("Terms"); ?>>
											<span class="glyphicon glyphicon-book"></span>
										</a>
									</li>
									<!-- -->
									<li>
										<a class="btn btn-info" href=<?php mylink("about");?> <?php ToolTip("About"); ?>>
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
	<!-- -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec1">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2>About Us:</h2>
								<div id="about" class="text-center">
									<p class="lead about-parag">
										This Website is created By Alaa Elsaid and he is the only one that can control it and add some containts
										in it.
										This Website is created By Alaa Elsaid and he is the only one that can control it and add some containts
										in it.
										This Website is created By Alaa Elsaid and he is the only one that can control it and add some containts
										in it.
										This Website is created By Alaa Elsaid and he is the only one that can control it and add some containts
										in it.
										This Website is created By Alaa Elsaid and he is the only one that can control it and add some containts
										in it.
										This Website is created By Alaa Elsaid and he is the only one that can control it and add some containts
										in it.
										This Website is created By Alaa Elsaid and he is the only one that can control it and add some containts
										in it.
										This Website is created By Alaa Elsaid and he is the only one that can control it and add some containts
										in it.
										This Website is created By Alaa Elsaid and he is the only one that can control it and add some containts
										in it.
									</p>
								</div>
								<div class="about_image">
									<!-- <img id="about-image" class="img-circle" src="http://placehold.it/500x500" width="500px" height="500px"> -->
									<img id="about-image" class="img-circle" width="500px" height="500px" src="../controls/showimage.php?username=<?php echo $session;?>">
								</div><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<?php include '../controls/footer.php'; ?>
	
	<!-- jQuery -->
	<script src="../js/jquery.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>