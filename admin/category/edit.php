<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$cat_id = $_POST['cat_id'];
		$cat_desc = $_POST['cat_desc'];
		//$cat_img = $_POST['cat_img'];
		$status = $_POST['status'];
		
		$sql = "UPDATE category SET cat_desc = '$cat_desc', status = '$status' WHERE cat_id = '$cat_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Category updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating category';
		}
	}
	else{
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location: index.php');

?>