<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$store_name = $_POST['store_name'];
		$store_owner = $_POST['store_owner'];
		$sell_age = $_POST['sell_age'];
		$sell_gender = $_POST['sell_gender'];
		$add_id = $_POST['add_id'];
		$sell_contact = $_POST['sell_contact'];
		$sell_email = $_POST['sell_email'];

		$sql = "INSERT INTO store (store_name, store_owner, sell_age, sell_gender, add_id, sell_contact, sell_email) VALUES ('$store_name', '$store_owner', '$sell_age', '$sell_gender', '$add_id', '$$sell_contact', '$sell_email')";

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