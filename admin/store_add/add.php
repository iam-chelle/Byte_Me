<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$add_id = $_POST['add_id'];
		$add_desc = $_POST['add_desc'];

		$sql = "INSERT INTO storeadd (add_id, add_desc) VALUES ('$add_id', '$add_desc')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Store added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>