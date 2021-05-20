   


<div class="panel panel-default sidebar-menu"><!--  panel panel-default sidebar-menu Begin  -->
    
    <div class="panel-heading"><!--  panel-heading  Begin  -->
        
        <center><!--  center  Begin  -->
            
            <img src="img/icon.png" height="150px" width="150px">
            
        </center><!--  center  Finish  -->
        
        <br/>
        
        <h3 align="center" class="panel-title"><!--  panel-title  Begin  -->
     
              <?php
            $sql =  "SELECT     u.user_id
                              , u.username
                              , c.cust_add
                              , c.cust_email
                              , c.cust_contact
                              FROM `user` u
                              JOIN customer c
                              ON(c.user_ref_num = u.user_ref_num)
                              WHERE u.user_id = ?";
                               $stmt=mysqli_stmt_init($conn);
                        //check if statement is valid
                         if (!mysqli_stmt_prepare($stmt, $sql)){
                            $err = "Statement Failed";
                            echo $err;


                        }mysqli_stmt_bind_param($stmt, "s" , $_SESSION['userid']);   
                        mysqli_stmt_execute($stmt);
                             
                            
                            $resultData = mysqli_stmt_get_result($stmt);
                            if(!empty($resultData)){
                                while($row = mysqli_fetch_assoc($resultData)){ ?>
                                     <h4 align="center"><b> Hi <?php echo $row['username'];?> </b></h4>
                                  
                                      <p><b>Address: </b><?php echo $row['cust_add'];?> </p>
                                      <p><b>Email:</b> <?php echo $row['cust_email'];?> </p>
                                      <p><b>Contact #:</b> <?php echo $row['cust_contact'];?> </p>
<?php }  ?>
                               <?php }  ?>

            
       
            
        </h3><!--  panel-title  Finish -->
        
    </div><!--  panel-heading Finish  -->
    
    <div class="panel-body"><!--  panel-body Begin  -->
        
        <ul class="nav-pills nav-stacked nav"><!--  nav-pills nav-stacked nav Begin  -->
            
            <li class="<?php if(isset($_GET['cust_order']))?>">
                
                <a href="customer.php?cust_order">
                    
                    <i class="fa fa-list"></i> Current Orders
                    
                </a>
                
          
            </li>
              <li class="<?php if(isset($_GET['order_history']))?>">
                
                 <a href="customer.php?order_history">
                    
                    <i class="fa fa-list"></i> Received Orders
                    
                </a>
                
            </li>
        
            <li>
                
                <a href="includes/logout.php">
                    
                    <i class="fa fa-sign-out"></i> Log Out
                    
                </a>
                
            </li>
            
        </ul><!--  nav-pills nav-stacked nav Begin  -->
        
    </div><!--  panel-body Finish  -->
    
</div><!--  panel panel-default sidebar-menu Finish  -->