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

		function addtocart($conn, $user_id, $item_id, $store_id, $item_qty){
			$err;
			$sql = "INSERT INTO cart(item_id, user_id, store_id, qty)
					VALUES (?,?,?,?);";
			
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)){
				return false;
				exit();
		}
			mysqli_stmt_bind_param($stmt, "ssss", $item_id, $user_id, $store_id, $item_qty);
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

function getCartItemsPerUser($conn,$user_id){
    		$err;
    		$sql = "SELECT   i.item_name
    						,i.item_price
    						,i.item_img
    						,c.qty 
    			FROM items i 
    			JOIN cart c
				ON  (i.item_id = c.item_id)
				WHERE c.user_id = ?
				AND c.status = 'P' ";

			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("location: products.php?error=stmtfailed");
				exit();
		    }
            mysqli_stmt_bind_param($stmt, "s" ,$user_id); 
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
                         , i.store_id
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
			


	function getCartSummary($conn, $user_id){
    $sql_cart_list = "SELECT c.user_id

                           , sum(i.item_price * c.qty) total_price
                           , sum(c.qty) total_qty
                        FROM cart c
                        JOIN items i
                          ON c.item_id = i.item_id
                       WHERE c.user_id = ? 
                          AND c.status = 'P'
                    GROUP BY c.user_id; ";
                      $stmt=mysqli_stmt_init($conn);
    
                    if (!mysqli_stmt_prepare($stmt, $sql_cart_list)){
                        header("location: index.php?error=stmtfailed");
                        exit();
                    }
        mysqli_stmt_bind_param($stmt, "s" ,$user_id);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        $arr = array();            //initialize an empty array
        if($row = mysqli_fetch_assoc($resultData)){
            array_push($arr,$row);            
        }
        return $arr;               //this is the return value
        mysqli_stmt_close($stmt);  //close the mysqli_statement
}
	

	