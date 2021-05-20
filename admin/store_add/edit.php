<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$add_id = $_POST['add_id'];
		$add_desc = $_POST['add_desc'];
		

		$sql = "UPDATE storeadd SET add_id = '$add_id', add_desc = '$add_desc' WHERE add_id = '$add_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Address updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating';
		}
	}
	else{
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location: index.php');

?>