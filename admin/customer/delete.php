<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE 
				FROM customer c 
				JOIN user as u 
				ON(c.user_ref_num = u.user_ref_num) 
				WHERE cust_id = '".$_GET['id']."'";

 

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Customer deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting customer';
		}
	}
	else{
		$_SESSION['error'] = 'Select to delete first';
	}

	header('location: index.php');
?>