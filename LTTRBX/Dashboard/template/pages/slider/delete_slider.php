<?php 
	
	$id = $_POST['aid'];
	include "../config.php";

	$sql = "DELETE FROM slider WHERE id = {$id}";
	// $result = mysqli_query($conn,$sql) or die("SQL Query Failed");
	if(mysqli_query($conn, $sql)){
		echo 1;
	}
	else{

		echo 0;
	}

 ?>