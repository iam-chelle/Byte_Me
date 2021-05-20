<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$item_name = $_POST['item_name'];
		$item_details = $_POST['item_details'];
		$item_code = $_POST['item_code'];
		$cat_id = $_POST['cat_id'];
		$store_id = $_POST['store_id'];
		$item_price = $_POST['item_price'];
		$cat_display = $_POST['cat_display'];
		$Featured = $_POST['Featured'];
		$status = $_POST['status'];

		$sql = "INSERT INTO `items` (item_name, item_details, item_code, cat_id, store_id, item_price, cat_display, Featured, status) VALUES ('${item_name}', '${item_details}', '${item_code}', '${cat_id}', '${store_id}', '${item_price}', '${cat_display}', '${Featured}', '${status}')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'item added successfully';
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