				<?php
								

				$servername="localhost";
				$dbusername="root";
				$dbpassword="";
				$dbname="byteme";

				$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

				// Check connection
				if (!$conn){
				    die("Maintenance Mode.");
				}

	
