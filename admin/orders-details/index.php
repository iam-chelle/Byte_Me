		<?php
		session_start();
		include_once('connection.php');
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
				   table{
                    table-layout: fixed;
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
		  <li><a href="../index.php">Home</a></li>
		  <li><a href="../items/index.php">Products</a></li>
		  <li><a href="../category/index.php">Category</a></li>
		   <li><a href="../store_add/index.php">Store Location</a></li>
		  <li><a href="../store/index.php">Store Owners</a></li>
		  <li><a href="../customer/index.php">Customers</a></li>
		  <li><a href="../orders/index.php">Orders</a></li>
		   <li><a href="../report.php">Sales Report</a></li>
		
		</ul>

		<div class="container">
		 <h2 class="page-header text-center">Order Details</h2>
		 <h4><a href="../orders/index.php">Show Pending Orders</a></h4>
	<h4><a href="../order-history/index.php">Show Orders History</a></h4>
			 <div class="row" id="contentPanel">
		                <div class="col-12">
		                						<table class="table">
                                            		<thead>
														<th>Transaction Number</th>
														
														<th>Customer ID</th>
														<th>Item Name</th>
														<th>Store Name</th>
														<th>Qty</th>
														<th>Sub Total</th>
														<th>Order Date</th>
														<th>Status</th>
														


					</thead>
                                            
		               	     <?php
                					$sql = "SELECT   i.item_name
                										 , c.user_id
                                                         , s.store_name
                                                         , s.store_id
                                                         , c.qty
                                                         , i.item_price
                                                         , o.order_date
                                                         , o.status
                                                         , c.qty * i.item_price sub_total
                                                      FROM `cart` c
                                                      Join `customer` ct
                                                      JOIN `items` i
                                                        ON (c.item_id = i.item_id)
                                                      JOIN `store` s
                                                        ON (c.store_id = s.store_id)
                                                        JOIN `orders` o
                                                        ON (c.order_number = o.order_number)      
                                                      WHERE   o.status = 'C'
                                                       
                                                       GROUP by i.item_id
                                                       ORDER By o.order_date";
											
											 $stmt=mysqli_stmt_init($conn);
									      //check if statement is valid
									       if (!mysqli_stmt_prepare($stmt, $sql)){
									          $err = "Statement Failed";
									          echo $err;
									       }
									 		  
									          mysqli_stmt_execute($stmt);
									      
									          $resultData = mysqli_stmt_get_result($stmt);
									          if(!empty($resultData)){
									              while($row = mysqli_fetch_assoc($resultData)){ ?>
									                  
 
                                                        <tr>
                                                            <td><?php echo $row['store_id'];?></td>
                                                          	 <td><?php echo $row['user_id'];?></td>
                                                          	  <td><?php echo $row['item_name'];?></td>
                                                          	   <td><?php echo $row['store_name'];?></td>
                                                          	    <td><?php echo $row['qty'];?></td>
                                                            <td>Php <?php echo number_format ($row['sub_total'],2);?></td>
                                                             <td><?php echo $row['order_date'];?></td>
                                                              <td><?php echo $row['status'];?></td>                      
                                                        </tr>   
						      					<?php }  ?>
						                   <?php }  ?>
                                     </table>
                                    </div>
                                   </div>      
                  				
                 
						       <br><br><br> 


                  <div  class='text-center'><em>End of report</em>
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

