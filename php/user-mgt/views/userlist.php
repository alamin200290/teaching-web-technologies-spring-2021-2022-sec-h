<html>
<head>
	<title>Add User</title>
</head>
<body>

	<a href="home.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>
	<br><br>

	<table border="1">
		<tr>
			<td>No</td>
			<td>Name</td>
			<td>Password</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
		<?php 

			$file = fopen('../model/user.txt', 'r');
			
			while(!feof($file)){
				$user = fgets($file);
				$userArray = explode("|", $user);
			?>

				<tr>
					<td><?=$userArray[0]?></td>
					<td><?=$userArray[1]?></td>
					<td><?=$userArray[2]?></td>
					<td><?=$userArray[3]?></td>
					<td>
						<a href="edit.php?id=<?=$userArray[0]?>">Edit</a> |
						<a href="delete.php?id=<?=$userArray[0]?>">Delete</a>
					</td>
				</tr>
		
		<?php	
			}

		?>

	</table>
</body>
</html>