<?php 

if (isset($_POST["submit"])) {

	$fullname= $_POST['fname'];
	$age= $_POST['age'];
	$gender= $_POST['gender'];
	$address=$_POST['add'];
	$contact=$_POST['cnumber'];
	$email=$_POST['email'];
	$usname=$_POST['uname'];
	$pasword=$_POST['pass'];
	$confirmPassword=$_POST['re_pass'];
	$user_ref_number = random_int(1000, 9999999999) . rand(1000, 999999) . hex2bin($usname);

	include_once "function.inc.php";

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "byteme";

					
	$conn = mysqli_connect($servername, $username, $password, $dbname);
				
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	if (pwdmatch($pasword, $confirmPassword) !== false) {
		header("location: ../register.php?error=Password does not match");
	    exit();
	} 

	if (cidExists($conn, $usname) !== false) {
		header("location: ../register.php?error=Username already taken");
		exit();
	}

	if (cmailExists($conn, $email) !== false) {
		header("location: ../register.php?error=Email already used");
		exit();
	}
	if (phoneExists($conn, $contact) !== false) {
		header("location: ../register.php?error=Phone number already used");
		exit();
	}
	else{
	
				
	$sql = "INSERT INTO `customer` ( user_ref_num, cust_name, cust_age, cust_gender, cust_add, cust_contact, cust_email)
	VALUES ('${user_ref_number}', '${fullname}', '${age}', '${gender}', '${address}', '${contact}', '${email}');"; //<- use single quote on php variables inside an SQL. 
	$sql2 = "INSERT INTO `user` ( user_ref_num,username, password)
	VALUES ('${user_ref_number}','${usname}', '${pasword}');"; 

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
	
	}
}


?>
