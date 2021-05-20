             


              <center><!--  center Begin  -->
                  
                  <h1> Received Orders</h1>
                  
                  <p class="lead"> Your orders on one place</p>
                  
                  <p class="text-muted">
                      
                      If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                      
                  </p>
                  
              </center><!--  center Finish  -->


              <hr>


              <div class="table-responsive"><!--  table-responsive Begin  -->
                  
                  <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->


                    <thead>
                        <th>Order Number</th>
                        <th>Total Qty</th>
                        <th>Total Amount</th>
                        <th>Date Ordered</th>
                        <th>Status</th>
                    </thead>
        
             <?php
       $get_orders = "SELECT                        i.item_name
                                                         , s.store_name
                                                         , s.store_owner
                                                         , s.sell_contact
                                                         , s.sell_email
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
                                                     WHERE 
                                                        c.user_id = ?
                                                       AND c.status = 'C'
                                                       AND c.cart_status = 'C'
                                                       AND o.status = 'D'
                                                       GROUP by i.item_id
                                                       ORDER By o.order_date ;";
      $stmt=mysqli_stmt_init($conn);
      //check if statement is valid
       if (!mysqli_stmt_prepare($stmt, $get_orders)){
          $err = "Statement Failed";
          echo $err;
       }
          mysqli_stmt_bind_param($stmt, "s" , $_SESSION['userid']);
          mysqli_stmt_execute($stmt);
      
          $resultData = mysqli_stmt_get_result($stmt);
          if(!empty($resultData)){
              while($row = mysqli_fetch_assoc($resultData)){ ?>
                   <tr>
                           <td><?php echo $row['item_name'];?></td>
                                  <td><?php echo $row['qty'];?> pc(s)</td>
                                  <td>Php <?php echo number_format ($row['sub_total'],2);?></td>
                                  <td><?php echo $row['order_date'];?></td>
                                  <td><?php echo $row['status'] == 'C' ? 'Pending for Delivery' :  'Delivered' ;?></td>                        
                              </tr>
                        <?php }   ?>
                              <?php }   ?>
                                   
                                     





                                      
                     
                           
                              
                          </tr><!--  tr Finish  -->
                          
                      </tbody><!--  tbody Finish  -->
                      
                  </table><!--  table table-bordered table-hover Finish  -->
                  
              </div><!--  table-responsive Finish  -->