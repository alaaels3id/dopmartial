<?php
	session_start();
	$session = $_SESSION['username'];
	
	include 'database.php';
	$obj = new Database('info.php');
	$conn = $obj->Connect(); 
	
	if(isset($_POST['submit']) && $_POST['submit'] == "Change"){
		$img     = mysqli_real_escape_string($conn, file_get_contents($_FILES["image"]["tmp_name"]));
		$imgType = mysqli_real_escape_string($conn, $_FILES["image"]["type"]);
		
		if(substr($imgType, 0, 5) == "image"){
			mysqli_query($conn, "UPDATE `users` SET `image` = '$img' WHERE `user` = '$session'");
			header('Location: http://localhost/dopmartial/profile');
		}
	}
?>