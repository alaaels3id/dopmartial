<?php
	session_start();
	$session = $_SESSION['username'];

	include '../models/database.php';
	$dbo = new Database('../models/info.php');
	$conn = $dbo->Connect();
	
	if(isset($_GET['username'])){
		$username = mysqli_real_escape_string($conn, $_GET['username']);
		$query = "SELECT `image` FROM `users` WHERE `user` = '$session'";
		$sql = mysqli_query($conn, $query);
		
		$row = mysqli_fetch_assoc($sql);
		
		if($row['image']){
			header("content-type: image/jpeg");
			echo $row['image'];
		}
	}
?>