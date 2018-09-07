<?php
	include '../controls/basicinfo.php';
	if(!isset($_SESSION['username'])){
		header('Location: http://localhost/dopmartial'); 
		die();
	}
	$upper = ucfirst($session); 
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $upper; ?></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/hover.css">
	<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
	<section>
		<div class="container">
			<div class="row">
				<h1 id="accinfo">Account Information:</h1>
				<button name="home" class="btn grow" onclick="window.location.href='http://localhost/dopmartial/'">Home</button>
				<div class="profile">
					<div class="col-md-6 account">
						<img id="user-image" class="img-circle" src="../controls/showimage.php?username=<?php echo $session; ?>">
						<div class="info"><!-- &ensp; -->
							<?php echo "<h1>Username     :</h1><h2><b><span>$upper</span></b></h2>";?>
							<?php echo "<h1>Mobile Phone :</h1><h2><b><label>$phone</label></b></h2>";?>
							<?php echo "<h1>E-mail       :</h1><h2><b><span>$email</span></b></h2>";?>
						</div>
					</div>
					<button data-toggle="modal" data-target="#ImageModal" class="btn btn-info">Change Profile Image</button>
					<button data-toggle="modal" data-target="#InfoModal" class="btn btn-warning">Edit Profile Information</button>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Change Image Modal  -->
	<section>
		<div class="modal fade" id="ImageModal" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title text-info">Change Profile Image</h3>
					</div>
					<div class="modal-body">
						<form method="post" action="../controls/change.php" enctype="multipart/form-data">
							<input type="file" name="image"><br>
							<input type="submit" class="btn btn-info btn-lg" name="submit" value="Change">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Change Image Modal  -->

	<!-- Edit Info Modal  -->
	<section>
		<div class="modal fade" id="InfoModal" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title text-info">Edit Profile Information</h3>
					</div>
					<div class="modal-body update-info">
						<form method="post" action="../controls/edit.php">
						  	<!-- -->
						  	<div class="form-group">
						    	<input required="required" type="password" name="npassword" class="form-control input-lg" placeholder="Enter your Password">
						  	</div>
						  	<!-- -->
						  	<div class="form-group">
						    	<input required="required" type="email" name="nemail" class="form-control input-lg" placeholder="Enter your Email">
						  	</div>
						  	<!-- -->
						  	<div class="form-group">
						    	<input required="required" type="phone" name="nphone" class="form-control input-lg" placeholder="Enter your Phone">
						  	</div>
						  	<!-- -->
						  	<div class="form-group">
						  		<input type="submit" class="btn btn-info btn-lg" name="submit" value="Edit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Change Image Modal  -->
	
	<!-- Footer -->
	<?php include '../controls/footer.php'; ?>
	
	<!-- jQuery -->
	<script src="../js/jquery.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>