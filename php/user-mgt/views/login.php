<?php 

	$error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "invalid username/password";
		}
	}


?>

<html>
<head>
	<title>Login page</title>
</head>
<body>

	<form method="POST" action="../controller/loginCheck.php">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
						<a href="reg.php">Signup </a>
						<br>
						<?=$error?>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>