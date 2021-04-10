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


function getCatList($conn){
			$err;
			$sql = "SELECT * FROM category";
			
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("location: products.php?error=stmtfailed");
				exit();
		    }
			mysqli_stmt_execute($stmt);

			$resultData = mysqli_stmt_get_result($stmt);
            $arr = array();
			while($row = mysqli_fetch_assoc($resultData)){
					array_push($arr,$row);
			}
            return $arr;
			mysql_stmt_close($stmt);

}

function getItemListPerCat($conn,$cat_id){
			$err;
			$sql = "SELECT i.item_id
                         , i.item_name
                         , i.item_details
                         , i.item_code
                         , i.cat_id
                         , i.item_price
                         , i.item_img
                         , s.store_name
                     FROM items i
                     JOIN store s
                       on (i.store_id = s.store_id)
                    WHERE i.cat_id = ?
                      AND i.status = 'A' ";
			
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("location: products.php?error=stmtfailed");
				exit();
		    }
            mysqli_stmt_bind_param($stmt, "s" ,$cat_id);
			mysqli_stmt_execute($stmt);
    
			$resultData = mysqli_stmt_get_result($stmt);
            $arr = array();
			while($row = mysqli_fetch_assoc($resultData)){
					array_push($arr,$row);
			}
            return $arr;
			mysql_stmt_close($stmt);

}