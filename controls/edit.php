<?php
	session_start(); 
	$session = $_SESSION['username'];
	
	include 'database.php';
	$dbo = new Database('info.php');
	$conn = $dbo->Connect();
	
	//username, password, email, phone;

	if(isset($_POST['submit']) && $_POST['submit'] == "Edit"){
		$npassword = $_POST['npassword'];
		$nemail = $_POST['nemail'];
		$nphone = $_POST['nphone'];
		$query = "UPDATE `users` SET `password` = '$npassword', `email` = '$nemail', `phone` = '$nphone' WHERE `user` = '$session'";
		$sql = mysqli_query($conn, $query);
		header('Location: http://localhost/dopmartial/profile');
	}
?>