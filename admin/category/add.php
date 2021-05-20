<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$cat_desc= $_POST['cat_desc'];
		//$cat_img= $_POST['cat_img'];
		$status = $_POST['status'];
		$sql = "INSERT INTO category (cat_desc, status) VALUES ('$cat_desc', '$status')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Category added successfully';
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