<?php 
	session_start();
	require('../model/userModel.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
		
			$status = login($username, $password);
			if($status){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../views/home.php');
			}else{
				header('location: ../views/login.php?msg=error');
			}


			/*if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
			}*/

			/*$file = fopen('../model/user.txt', 'r');
			$user = fread($file, filesize('../model/user.txt'));
			//fgets()

			fclose($file);
			$abc = explode('|', $user);
			//print_r($abc);
				
			if(trim($abc[1]) == $username && trim($abc[2]) == $password){
				$_SESSION['status'] = 'true';
				setcookie('status', 'true', time()+3600, '/');
				
				header('location: ../views/home.php');
			}else{
				echo "invalid username/password";
			}*/

		}else{
			echo "null submission..";
		}
	}	
?>