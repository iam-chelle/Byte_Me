				
				<?php 
				$fullname= $_POST['fname'];
				$age= $_POST['age'];
				$gender= $_POST['gender'];
				$address=$_POST['add'];
				$contact=$_POST['cnumber'];
				$email=$_POST['email'];
				$username=$_POST['uname'];
				$password=$_POST['pass'];
				
				$servername = "localhost";
				$username = "";
				$password = "";
				$dbname = "practice";

				$conn = mysqli_connect($servername, $username, $password, $dbname);
				
				if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
				
				$sql = "INSERT INTO `cust_tbl` (`cust_name`, `cust_age`, `cust_gender`, `cust_add`, `cust_contact`, `cust_email`)
				VALUES ( `${fullname}`, `${age}`, `${gender}`, `${address}`, `${contact}`, `${email}` );";
				$sql .= "INSERT INTO `user_tbl` (`username`, `password`)
				VALUES (`${username}`, `${password}`);";

				
				if (mysqli_query($conn, $sql)) {
				
				echo "New record created successfully";
				} else {
				
				echo "Error: " . $sql . mysqli_error($conn);
				}
				?>

