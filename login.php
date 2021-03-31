			<?php
				if(isset($_POST['Login'])){
				include_once "db_conn.php";
				include_once "function.inc.php";


				$username = htmlentities($_POST['username']);
				$password = htmlentities($_POST['password']);

				if(uidExists($conn, $username, $password)!==false){
					header("location: ../index.php?logged=yes");
					exit();
				}else{
					header("location: ../signup.php?logged=no");
					exit();
				}

				}