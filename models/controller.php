<?php
	if($_POST){
		//login
		if(isset($_POST['submit']) && $_POST['submit'] == "Login"){
			$username = $_POST['username'];
			$password = $_POST['password'];
			try{
				include 'login.php';
				$login_model = new Login($username, $password);
				if($login_model == TRUE){
					session_start();
					$_SESSION['username'] = $username;
					header('Location: http://localhost/dopmartial/');
				}
			}catch (Exception $e){
				echo $e->getMessage();
				header('Refresh:0.00000001; URL=http://localhost/dopmartial');
			}
		}
		//register
		if(isset($_POST['submit']) && $_POST['submit'] == "SignUp"){
			$data['username'] = $_POST['username'];
			$data['password'] = $_POST['password'];
			$data['email']    = $_POST['email'];
			$data['phone']    = $_POST['phone'];

			try{
				include 'register.php';
				new Register($data);
				header('Location: http://localhost/dopmartial/');
			}catch (Exception $e){
				echo $e->getMessage();
			}

		}
	}else include 'views/login.htm';
?>