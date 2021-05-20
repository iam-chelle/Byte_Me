		<?php
		session_start();
		include_once ('../includes/db_conn.php');
		include_once  ('../includes/function.inc.php');
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
		  <li><a href="index.php">Home</a></li>
		  <li><a href="items/index.php">Products</a></li>
		  <li><a href="category/index.php">Category</a></li>
		   <li><a href="store_add/index.php">Store Location</a></li>
		  <li><a href="store/index.php">Store Owners</a></li>
		  <li><a href="customer/index.php">Customers</a></li>
		  <li><a href="orders/index.php">Orders</a></li>
		  <li><a href="report.php">Sales Report</a></li>
				</ul>

		<div class="container">
		 <h2 class="page-header text-center">Sales Report</h2>
			 <div class="row" id="contentPanel">
		                <div class="col-12">
		                						<table class="table">
                                            		<thead>
                                            			<th>Store id 			</th>
                                            			<th>Store Name 			</th>
                                            			<th>Store Owner 		</th>
                                            			<th>Total Qty Sold			</th>
                                            			<th>Total Sale  		</th>
                                            		</thead>
                                            
		               	     <?php
                					 $sql = "SELECT     s.store_id
													,	s.store_name
												    ,	s.store_owner
												    
												    ,	SUM(c.qty)totalqty
												    ,	SUM(i.item_price*c.qty)total2
												    
												    	
												    FROM `cart` c
												    JOIN `store` s
												    ON(s.store_id =c.store_id)
												    JOIN `items` i
												    ON(i.item_id = c.item_id)
												    JOIN `orders` o
												    ON(o.order_number = c.order_number)
												    WHERE o.status = 'D' 
												    Group By store_id
												    ;";	   
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
                                                            <td><?php echo $row['store_name'];?></td>
                                                            <td><?php echo $row['store_owner'];?></td>
                                                          	<td><?php echo $row['totalqty'];?></td>
                                                            <td>Php <?php echo number_format ($row['total2'],2);?></td>                      
                                                        </tr>   
						      					<?php }  ?>
						                   <?php }  ?>
                                     </table>
                                    </div>
                                   </div>      
                  				
                 <br><br><br>
                 <h1 class="page-header text-center">Category Inventory</h1>
                 <h2 class="page-header text-center">Foods</h2>
			 <div class="row" id="contentPanel">
		                <div class="col-12">
		                						<table class="table">
                                            		<thead>
                                            			<th>Item id </th>
                                            			<th>Item Name </th>
                                            			<th>Store Name</th>
                                            			<th>Total Qty Sold</th>
                                            			<th>Net Sale </th>
                                            		</thead>
                                         
						             <?php
                					 $sql = "SELECT  	s.store_id
													,	s.store_name
													,	i.item_name	
												    ,	SUM(c.qty)totalqty
												 	,	SUM(i.item_price*c.qty)total2
												 	,   o.status 
												    FROM `cart` c
												    JOIN `store` s
												    ON(s.store_id =c.store_id)
												    JOIN `items` i
												    ON(i.item_id = c.item_id)
												    JOIN `orders` o
												    ON(o.order_number = c.order_number)
												    JOIN `category` ct
												    ON(ct.cat_id = i.cat_id)
												    WHERE ct.cat_id = 1
												    AND o.status = 'D'
												    Group By i.item_id;";	 
												      

												    
						               $stmt=mysqli_stmt_init($conn);
									      //check if statement is valid
									       if (!mysqli_stmt_prepare($stmt, $sql)){
									          $err = "Statement Failed";
									          echo $err;
									      }	  mysqli_stmt_execute($stmt);
									          $resultData = mysqli_stmt_get_result($stmt);
									          if(!empty($resultData)){
									              while($row = mysqli_fetch_assoc($resultData)){ ?>
									                  
 
                                                        <tr>
                                                            <td><?php echo $row['store_id'];?></td>
                                                            <td><?php echo $row['item_name'];?></td>
                                                            <td><?php echo $row['store_name'];?></td>
                                                          	<td><?php echo $row['totalqty'];?></td>
                                                            <td>Php <?php echo number_format ($row['total2'],2);?></td>                      
                                                        </tr>   
						      					<?php }  ?>
						                   <?php }  ?>
                                     </table>
                                      </div>
                                  </div>
 
                 <br><br><br>
                 <h2 class="page-header text-center">Beverages</h2>
			 <div class="row" id="contentPanel">
		                <div class="col-12">
		                						<table class="table">
                                            		<thead>
                                            			<th>Item id </th>
                                            			<th>Item Name </th>
                                            			<th>Store Name</th>
                                            			<th>Total Qty Sold</th>
                                            			<th>Net Sale </th>
                                            		</thead>
                                         
						             <?php
                					 $sql = "SELECT  	s.store_id
													,	s.store_name
													,	i.item_name	
												    ,	SUM(c.qty)totalqty
												 	,	SUM(i.item_price*c.qty)total2 
												 	,	o.status
												    FROM `cart` c
												    JOIN `store` s
												    ON(s.store_id =c.store_id)
												    JOIN `items` i
												    ON(i.item_id = c.item_id)
												    JOIN `orders` o
												    ON(o.order_number = c.order_number)
												    JOIN `category` ct
												    ON(ct.cat_id = i.cat_id)
												    WHERE ct.cat_id = 2
												    AND o.status = 'D'
												    Group By i.item_id;";	 
												      

												    
						               $stmt=mysqli_stmt_init($conn);
									      //check if statement is valid
									       if (!mysqli_stmt_prepare($stmt, $sql)){
									          $err = "Statement Failed";
									          echo $err;
									      }	  mysqli_stmt_execute($stmt);
									          $resultData = mysqli_stmt_get_result($stmt);
									          if(!empty($resultData)){
									              while($row = mysqli_fetch_assoc($resultData)){ ?>
									                  
 
                                                        <tr>
                                                            <td><?php echo $row['store_id'];?></td>
                                                            <td><?php echo $row['item_name'];?></td>
                                                            <td><?php echo $row['store_name'];?></td>
                                                          	<td><?php echo $row['totalqty'];?></td>
                                                            <td>Php <?php echo number_format ($row['total2'],2);?></td>                      
                                                        </tr>   
						      					<?php }  ?>
						                   <?php }  ?>
                                     </table> 
                                      </div>
                                  </div>
 
                 <br><br><br>
                 <h2 class="page-header text-center">Crafts</h2>
			 <div class="row" id="contentPanel">
		                <div class="col-12">
		                						<table class="table">
                                            		<thead>
                                            			<th>Item id </th>
                                            			<th>Item Name </th>
                                            			<th>Store Name</th>
                                            			<th>Total Qty Sold</th>
                                            			<th>Net Sale </th>
                                            		</thead>
                                         
						             <?php
                					 $sql = "SELECT  	s.store_id
													,	s.store_name
													,	i.item_name	
												    ,	SUM(c.qty)totalqty
												 	,	SUM(i.item_price*c.qty)total2 
												 	,	o.status
												    FROM `cart` c
												    JOIN `store` s
												    ON(s.store_id =c.store_id)
												    JOIN `items` i
												    ON(i.item_id = c.item_id)
												    JOIN `orders` o
												    ON(o.order_number = c.order_number)
												    JOIN `category` ct
												    ON(ct.cat_id = i.cat_id)
												    WHERE ct.cat_id = 3
												    AND o.status = 'D'
												    Group By i.item_id;"; 
												      

												    
						               $stmt=mysqli_stmt_init($conn);
									      //check if statement is valid
									       if (!mysqli_stmt_prepare($stmt, $sql)){
									          $err = "Statement Failed";
									          echo $err;
									      }	  mysqli_stmt_execute($stmt);
									          $resultData = mysqli_stmt_get_result($stmt);
									          if(!empty($resultData)){
									              while($row = mysqli_fetch_assoc($resultData)){ ?>
									                  
 
                                                        <tr>
                                                            <td><?php echo $row['store_id'];?></td>
                                                            <td><?php echo $row['item_name'];?></td>
                                                            <td><?php echo $row['store_name'];?></td>
                                                          	<td><?php echo $row['totalqty'];?></td>
                                                            <td>Php <?php echo number_format ($row['total2'],2);?></td>                      
                                                        </tr>   
						      					<?php }  ?>
						                   <?php }  ?>
                                     </table>
                                 </div>
                              </div>
                                      


                
                <br><br><br>
                <h2 class="page-header text-center">Accessories</h2>
			 	<div class="row" id="contentPanel">
		                <div class="col-12">
		                						<table class="table">
                                            		<thead>
                                            			<th>Item id </th>
                                            			<th>Item Name </th>
                                            			<th>Store Name</th>
                                            			<th>Total Qty Sold</th>
                                            			<th>Net Sale </th>
                                            		</thead>
                                         
						             <?php
                					 $sql = "SELECT 	s.store_id
													,	s.store_name
													,	i.item_name	
												    ,	SUM(c.qty)totalqty
												 	,	SUM(i.item_price*c.qty)total2 
												 	,	o.status
												    FROM `cart` c
												    JOIN `store` s
												    ON(s.store_id =c.store_id)
												    JOIN `items` i
												    ON(i.item_id = c.item_id)
												    JOIN `orders` o
												    ON(o.order_number = c.order_number)
												    JOIN `category` ct
												    ON(ct.cat_id = i.cat_id)
												    WHERE ct.cat_id = 4
												    AND o.status = 'D'
												    Group By i.item_id;";
												      

												    
						               $stmt=mysqli_stmt_init($conn);
									      //check if statement is valid
									       if (!mysqli_stmt_prepare($stmt, $sql)){
									          $err = "Statement Failed";
									          echo $err;
									      }	  mysqli_stmt_execute($stmt);
									          $resultData = mysqli_stmt_get_result($stmt);
									          if(!empty($resultData)){
									              while($row = mysqli_fetch_assoc($resultData)){ ?>
									                  
 
                                                        <tr>
                                                            <td><?php echo $row['store_id'];?></td>
                                                            <td><?php echo $row['item_name'];?></td>
                                                            <td><?php echo $row['store_name'];?></td>
                                                          	<td><?php echo $row['totalqty'];?></td>
                                                            <td>Php <?php echo number_format ($row['total2'],2);?></td>                      
                                                        </tr>   
						      					<?php }  ?>
						                   <?php }  ?>
                                     </table> 
                                      </div>
                                  </div>
                                        
                                 
                                     <br><br><br>
					                <h2 class="page-header text-center">Shirts</h2>
								 	<div class="row" id="contentPanel">
							                <div class="col-12">
		                						<table class="table">
                                            		<thead>
                                            			<th>Item id </th>
                                            			<th>Item Name </th>
                                            			<th>Store Name</th>
                                            			<th>Total Qty Sold</th>
                                            			<th>Net Sale </th>
                                            		</thead>
                                         
						             <?php
                					 $sql = "SELECT   	s.store_id
													,	s.store_name
													,	i.item_name	
												    ,	SUM(c.qty)totalqty
												 	,	SUM(i.item_price*c.qty)total2 
												 	,	o.status
												    FROM `cart` c
												    JOIN `store` s
												    ON(s.store_id =c.store_id)
												    JOIN `items` i
												    ON(i.item_id = c.item_id)
												    JOIN `orders` o
												    ON(o.order_number = c.order_number)
												    JOIN `category` ct
												    ON(ct.cat_id = i.cat_id)
												    WHERE ct.cat_id = 5
												    AND o.status = 'D'
												    Group By i.item_id;"; 
												      

												    
						               $stmt=mysqli_stmt_init($conn);
									      //check if statement is valid
									       if (!mysqli_stmt_prepare($stmt, $sql)){
									          $err = "Statement Failed";
									          echo $err;
									      }	  mysqli_stmt_execute($stmt);
									          $resultData = mysqli_stmt_get_result($stmt);
									          if(!empty($resultData)){
									              while($row = mysqli_fetch_assoc($resultData)){ ?>
									                  
 
                                                        <tr>
                                                            <td><?php echo $row['store_id'];?></td>
                                                            <td><?php echo $row['item_name'];?></td>
                                                            <td><?php echo $row['store_name'];?></td>
                                                          	<td><?php echo $row['totalqty'];?></td>
                                                            <td>Php <?php echo number_format ($row['total2'],2);?></td>                      
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

