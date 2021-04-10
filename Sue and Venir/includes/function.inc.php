		<?php
		function createUser($conn, $username, $password){
			$err;
			$sql = "INSERT INTO user(username, password)
					VALUES (?,?);";
			
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)){
				return false;
				exit();
		}
			mysqli_stmt_bind_param($stmt, "ss", $username, $password);
			mysqli_stmt_execute($stmt);

			mysqli_stmt_close($stmt);
			return true;
		}

		function uidExists($conn, $username, $password){
			$err;
			$sql = "SELECT * FROM user
					WHERE username = ?
					  AND password =?;";
			
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("location: index1.php?error=stmtfailed");
				exit();
		}
			mysqli_stmt_bind_param($stmt, "ss" ,$username, $password);
			mysqli_stmt_execute($stmt);

			$resultData = mysqli_stmt_get_result($stmt);

			if($row = mysqli_fetch_assoc($resultData)){
					return $row;
			}
			else{
				$err=false;
				return $err;
			}
			mysql_stmt_close($stmt);

		}