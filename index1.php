		<?php
		include_once "includes/db_conn.php";
		include_once "includes/function.inc.php";

		$username = 'jef';
		$password = '1234';
		$records = uidExists($conn, $username, $password);
		if($records !==false){
			echo "record exist";
		}else{
			echo "record not found";
		}
		?>