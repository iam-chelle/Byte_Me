				
				<?php 
				
				
				
				/*DB CONNECTION: This part can now be called thru include "includes/db_conn.php"*/
				$servername = "localhost";
				$username = "";
				$password = "";
				$dbname = "practice";

				$conn = mysqli_connect($servername, $username, $password, $dbname);
				
				if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
				}
				/*END DB CONNECTION*/
				
				
				
				/* POST VARIABLES: This part should be after the declaration of database connection*/
				$fullname= $_POST['fname'];
				$age= $_POST['age'];
				$gender= $_POST['gender'];
				$address=$_POST['add'];
				$contact=$_POST['cnumber'];
				$email=$_POST['email'];
				$username=$_POST['uname'];
				$password=$_POST['pass'];
				/*END POST VARIABLES*/
				
				$sql = "INSERT INTO `cust_tbl` (`cust_name`, `cust_age`, `cust_gender`, `cust_add`, `cust_contact`, `cust_email`)
				VALUES ( `${fullname}`, `${age}`, `${gender}`, `${address}`, `${contact}`, `${email}` );"; //<- use single quote on php variables inside an SQL. 
				$sql .= "INSERT INTO `user_tbl` (`username`, `password`)
				VALUES (`${username}`, `${password}`);"; //<- use single quote on php variables inside an SQL. 
				

		
				if (mysqli_query($conn, $sql)) {
				
				echo "New record created successfully";
				} else {
				
				echo "Error: " . $sql . mysqli_error($conn);
				}
				?>

