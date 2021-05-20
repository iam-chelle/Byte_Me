<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$cust_id = $_POST['cust_id'];
		$cust_name = $_POST['cust_name'];
		$cust_age = $_POST['cust_age'];
		$cust_gender = $_POST['cust_gender'];
		$cust_add = $_POST['cust_add'];
		$cust_contact = $_POST['cust_contact'];
		$cust_email = $_POST['cust_email'];
		$status = $_POST['status'];

		$sql = "UPDATE customer SET cust_name = '$cust_name', cust_age = '$cust_age', cust_gender = '$cust_gender', cust_add = '$cust_add', cust_contact = '$cust_contact', cust_email = '$cust_email', status = '$status'WHERE cust_id = '$cust_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Customer updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating customer';
		}
	}
	else{
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location: index.php');

?>