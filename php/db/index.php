<?php 
	
	$con = mysqli_connect('localhost', 'root', '', 'webtech');

	/*if($con){
		echo "done!";
	}else{
		echo "Error";
	}*/

	//$sql = "select * from users";
	$sql = "update users set username='xyz' where id=8";

	if(mysqli_query($con, $sql)){
		echo "done";
	}else{
		echo "error";
	}
	//$result = mysqli_query($con, $sql);

	/*while ($row = mysqli_fetch_assoc($result)) {
		print_r($row);
		echo "<br>";
	}*/


?>