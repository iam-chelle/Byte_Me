<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$store_id = $_POST['store_id'];
		$store_name = $_POST['store_name'];
		$store_owner = $_POST['store_owner'];
		$sell_age = $_POST['sell_age'];
		$sell_gender = $_POST['sell_gender'];
		$sell_contact = $_POST['sell_contact'];
		$sell_email = $_POST['sell_email'];
		$status = $_POST['status'];
		
		$sql = "UPDATE store SET store_name = '$store_name', store_owner = '$store_owner', sell_age = '$sell_age', sell_gender = '$sell_gender', sell_contact = '$sell_contact', sell_email = '$sell_email',  status = '$status'  WHERE store_id = '$store_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Store updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating store';
		}
	}
	else{
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location: index.php');

?>