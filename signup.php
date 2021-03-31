			<?php


			
			$servername = "localhost";
			$username = "";
			$password = "";
			$dbname = "practice";

			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$fullname= $_POST['fname'];
			$age= $_POST['age'];
			$gender= $_POST['gender'];
			$address=$_POST['add'];
			$contact=$_POST['cnumber'];
			$email=$_POST['email'];
			$username=$_POST['uname'];
			$pasword=$_POST['pass'];


			

			$sql = "INSERT INTO cust_tbl (cust_name, cust_age, cust_gender, cust_add, cust_contact, cust_email)
			VALUES ( `${fullname}`, `${age}`, `${gender}`, `${address}`, `${contact}`, `${email}` );";
			$sql .= "INSERT INTO user_tbl (username, password)
			VALUES (`${username}`, `${pasword}`);";

			if ($conn->multi_query($sql) === TRUE) {
			  echo "New records created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			?>
