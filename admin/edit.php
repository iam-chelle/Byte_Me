<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$user_id = $_POST['user_id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$usertype = $_POST['usertype'];
		$sql = "UPDATE user SET username = '$username', password = '$password', usertype = '$usertype' WHERE user_id = '$user_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: admin.php');

?>