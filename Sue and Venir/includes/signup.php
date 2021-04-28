<?php 

	$fullname= $_POST['fname'];
	$age= $_POST['age'];
	$gender= $_POST['gender'];
	$address=$_POST['add'];
	$contact=$_POST['cnumber'];
	$email=$_POST['email'];
	$usname=$_POST['uname'];
	$pasword=$_POST['pass'];

					
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "byteme";

					
	$conn = mysqli_connect($servername, $username, $password, $dbname);
				
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

				
	$sql = "INSERT INTO `customer` (cust_name, cust_age, cust_gender, cust_add, cust_contact, cust_email)
	VALUES ( '${fullname}', '${age}', '${gender}', '${address}', '${contact}', '${email}' );"; //<- use single quote on php variables inside an SQL. 
	$sql2 = "INSERT INTO `user` (username, password)
	VALUES ('${usname}', '${pasword}');"; 

	if (mysqli_query($conn, $sql)) {
	// if no error. Then new record created.
		 header("location: ../signin.php");
	} else {
	// else then error will show up.
	echo "Error: " . $sql . mysqli_error($conn);
	}

	if (mysqli_query($conn, $sql2)) {
	// if no error. Then new record created.
	} else {
	// else then error will show up.
	echo "Error: " . $sql2 . mysqli_error($conn);
	}
?>
