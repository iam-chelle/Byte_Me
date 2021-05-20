<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$order_id = $_POST['order_id'];
		$status = $_POST['status'];
		
		$sql = "UPDATE orders SET status = '$status'
		  WHERE order_id = '$order_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Order updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating order';
		}
	}
	else{
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location: index.php');

?>