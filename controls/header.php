<?php 

	session_start();
	$session = $_SESSION['username'];
	$up = ucfirst($_SESSION['username']);
	function ToolTip($title){ echo " data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"$title\" ";} 
	if(isset($_SESSION['username'])){
		echo "<a class=\"grow\" id=\"username\" href=\"../profile\"";
		ToolTip("Profile");
		echo ">$up</a>";
	}else header('Location: http://localhost/dopmartial');

?>