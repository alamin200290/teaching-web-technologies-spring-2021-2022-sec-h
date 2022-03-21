<?php 

	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


	function login($username, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	function signup($username, $password, $email){
		$conn = getConnection();
		$sql = "insert into users values('', '{$username}', '{$password}', '{$email}', 'user')";

		echo $sql;

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
	}

	function getUserById($id){
		$conn = getConnection();
	}

	function updateUser($user){
		$conn = getConnection();
	}

?>