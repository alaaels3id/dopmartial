<?php
	session_start();
	$session = $_SESSION['username'];
	
	include '../models/database.php';
	$dbo = new Database('../models/info.php');
	$conn = $dbo->Connect();
	
	$query = "SELECT * FROM `users` WHERE `user` = '$session'";

	$sql = mysqli_query($conn, $query);
	$info = mysqli_fetch_array($sql);

	$username = $info[1];
	$phone    = "+20".$info[4];
	$email    = $info[3];
?>