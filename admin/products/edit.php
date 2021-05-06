<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$item_id = $_POST['item_id'];
		$item_name = $_POST['item_name'];
		$item_details = $_POST['item_details'];
		$item_code = $_POST['item_code'];
		$cat_id = $_POST['cat_id'];
		$store_id = $_POST['store_id'];
		$item_price = $_POST['item_price'];
		$status = $_POST['status'];
		$cat_display = $_POST['cat_display'];
		$Featured = $_POST['Featured'];
		$latest_prod = $_POST['latest_prod'];
		$sql = "UPDATE items SET item_id = '$item_id', 
				item_name = 'item_name' ,
				item_details = '$item_details',
				item_code = '$item_code', 
				icat_id = '$cat_id', , 
				store_id = '$store_id' ,
				item_price = '$item_price' ,
				status = '$status' ,
				cat_display = '$cat_display' , 
				Featured = '$Featured' ,
				latest_prod = '$latest_prod' 
				 WHERE item_id = '$item_id'";

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

	header('location: products.php');

?>