		<?php
		session_start();
			include_once "includes/db_conn.php";

	
		include_once "includes/function.inc.php";
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>Admin Panel</title>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
			<style>
				.height10{
					height:10px;
				}
				.mtop10{
					margin-top:10px;
				}
				.modal-label{
					position:relative;
					top:7px
				}
			</style>

				<style>
					ul {
					  list-style-type: none;
					  margin: 0;
					  padding: 0;
					  overflow: hidden;
					  background-color: #98FB98;
					}

					li {
					  float: left;
					}

					li a {
					  display: block;
					  padding: 8px;
					}

					</style>
		</head>
		<body>


				<ul>
				  <li><a href="http://localhost/SueandVenirAdmin/">Home</a></li>
				  <li><a href="http://localhost/SueandVenirAdmin/products/index.php">Products</a></li>
				  <li><a href="#">Category</a></li>
				  <li><a href="#">Store Owners</a></li>
				  <li><a href="#">Customers</a></li>
				  <li><a href="#">Orders</a></li>
				  <li><a href="#">Logout</a></li>
				</ul>

		<div class="container">
			<h1 class="page-header text-center">Sales Report</h1>
			 <div class="row" id="contentPanel">
		                <div class="col-12">
		               	     <?php
                					 $sql = "SELECT     s.store_id
													,	s.store_name
												    ,	s.store_owner
												    ,	i.item_name
												    ,	c.qty
												    ,	i.item_price
												    ,	i.item_price*c.qty subtotal
												    ,	ct.cust_id
												    FROM `cart` c
												    JOIN `store` s
												    ON(s.store_id =c.store_id)
												    JOIN `items` i
												    ON(i.item_id = c.item_id)
												    JOIN `orders` o
												    ON(o.order_number = c.order_number)
												    JOIN `customer` ct
												    ON(ct.cust_id = o.cust_id)
												   WHERE c.store_id =?;";
									
                		$stmt=mysqli_stmt_init($conn);
   
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "Statement Failed. Record Not Found.";
                        exit();
                    }
                        mysqli_stmt_bind_param($stmt, "s" ,$store_id);
                        mysqli_stmt_execute($stmt);

                        $resultData = mysqli_stmt_get_result($stmt);

                        if($row = mysqli_fetch_assoc($resultData));
                
                ?>

                <?php
                if(!empty($arr)){
                    echo "<table class='table'>";
                    echo "<thead>";
                    echo "<th> User Id </th>";
                    echo "<th> User </th>";
                    echo "<th> Total Items Sold</th>";
                    echo "<th> Total Sale </th>";
                   
                    echo "</thead>";
                    foreach($arr as $key => $val){
                    echo "<tr>";
                    echo "<td>" . $val ['user_id']         . "</td>";
                    echo "<td>" . $val ['user_fullname']         . "</td>";
                    echo "<td>" . $val ['total_item_qty']   . "</td>";
                    echo "<td>" . $val ['Total_Sale']          .  " </td> ";
                    echo "<td>";
                  
                    echo "</tr>";
                    }
                    echo "<tr >";

                  ?>
                   <div class="sum" style=" text-align-last: left; 
                                        margin-top:-1rem; 
                                        margin-bottom: 
                                        1rem; 
                                        font-weight:bold;
                                        font-size:2rem;
                                        color:green;" > 
                       
                    </div>   

                    <?php
                    echo "</tr>";
                    echo "</table>";
                    }
                    else{
                    echo "<h4> Empty .</h4>";
                    }
                ?>

               

                    <div
                    class='text-center'><em>End of report</em>
                    </div>


                
                                        
                
                  
                </div>
                </div>
          </div>

          
      </main>





    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/jquery.js"></script> 
    <script src="js/main.js"></script>
    
</body>
</html>

