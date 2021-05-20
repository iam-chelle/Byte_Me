<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$item_id = $_POST['item_id'];
		$item_name = $_POST['item_name'];
		$item_details = $_POST['item_details'];
		$item_price = $_POST['item_price'];
		$cat_display = $_POST['cat_display'];
		$Featured = $_POST['Featured'];
		$status = $_POST['status'];
		
		
		$sql = "UPDATE items SET item_name = '$item_name', item_details = '$item_details', item_price = '$item_price', cat_display = '$cat_display', Featured = '$Featured', status = '$status' WHERE item_id = '$item_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Item updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating item';
		}
	}
	else{
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location: index.php');

?>