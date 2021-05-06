      <?php
        session_start();   	
        include_once "includes/db_conn.php";
        include_once "includes/function.inc.php";

      ?>        
      <!DOCTYPE html>
      <html lang="en">
      <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <title>Sue and Venir</title>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
      <style>
    table{
      table-layout: fixed;
    }
      .btn{

      }
    </style>
     </head>
<body>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="img/logo1.png" alt="" height="125px" width="125px">
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="signin.php">Account</a></li>
                        <li class="nav-item">
                        <a href="cart.php" class="nav-link no-border-orange"
                               data-bs-toggle="collapse" 
                               role="button"  
                               aria-expanded="false"  
                               aria-controls="cartList"
                      >
                        <i class="fa fa-cart-plus"></i> Cart  
                        <?php 
                        $sql_cart_count = "SELECT COUNT(*) cartcount FROM `cart` WHERE status = 'P' AND user_id = ?;";
                        $stmt=mysqli_stmt_init($conn);
    
                    if (!mysqli_stmt_prepare($stmt, $sql_cart_count)){
                        header("location: index.php?error=stmtfailed");
                        exit();
                    }
                        mysqli_stmt_bind_param($stmt, "s" ,$_SESSION['userid']);
                        mysqli_stmt_execute($stmt);

                        $resultData = mysqli_stmt_get_result($stmt);

                        if($row = mysqli_fetch_assoc($resultData)){ ?>
                            <span class="badge bg-danger"><?php echo $row['cartcount']; ?></span>
                        <?php }
                       
                        ?>
                        
                    </a>
          </ul>
        </nav>
        <img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
      </div>
    </div>
  </div>

      <?php
           $sql = "SELECT c.id
                        , i.item_name
                        , i.item_img
                        , i.item_price
                        , c.qty
                        , c.user_id
                        , c.store_id
                        ,i.item_price * c.qty subtotal_price
                        FROM cart c
                        JOIN items as i
                        ON (c.item_id = i.item_id)
                        WHERE c.user_id = ? 
                        AND c.status = 'P'; ";

                $stmt=mysqli_stmt_init($conn);
        
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("location: index.php?error=stmtfailed");
                    exit();
                    }
                    mysqli_stmt_bind_param($stmt, "s" ,$_SESSION['userid']);
                    mysqli_stmt_execute($stmt);
                    $resultData = mysqli_stmt_get_result($stmt);
                ?>


                 

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 px-4 pb-4" id="order">
              <h4 class="text-center text-info p-2">Confirm your order!</h4>
              <div class="jumbotron p-3 mb-2 text-center">
               
               <table>
              <tr>
                <th>Order #</th>
                <th>Items</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub Total</th>
              </tr>
          
               <?php
        while($row = mysqli_fetch_assoc($resultData)){ 
            echo "<table class='table'>";
        ?>

        <?php
       if($ordernum = random_int(0, 500)){
        echo "";
        ?>
             
           <form action="includes/processorder.php" method="Post">
                                    <input hidden type="text" name="order_number" value="<?php echo $ordernum['order_number'];?>">
                                    <input hidden type="text" name="cust_id" value="<?php echo $row['cust_id'];?>">
                                    <input hidden type="text" name="store_id" value="<?php echo $row['store_id'];?>">
                                    <input hidden type="text" name="item_id" value= "<?php echo $row['item_id']; ?>">
                                    <input hidden type="text" name="qty" value="<?php echo $row['qty'];?>">

      <tr>
         <?php echo "<td>"  ?>
        
        <?php
         echo rand(1, 100);
        ?>


           
        </td>
          <?php echo "</td>"  ?>
       <td>
              <p class="lead"><b><?php echo ($row['item_name'] . "  " ) ?></b></p>    
       </td>
       
            
        <td> Php <?php  echo number_format($row['item_price'],2); ?> </td>
       
       <td>
              <p class="lead"><b><?php echo ($row['qty'] . " pcs " ) ?> </b></p>    
       </td>

        <td> Php <?php  echo number_format($row['subtotal_price'],2); ?> </td>
      </tr>
  
   <?php }
                     
    ?> 
    <?php }
                     
    ?> 


      </div>
  
</div>
</div>
</div>
</table>


     <p class="cart-sum" align="right">
    <?php $summary = getCartSummary($conn, $_SESSION['userid']); 
            foreach($summary as $key => $nval){
                    echo "<h5><b>Total Qty:</b> ". $nval['total_qty'] . " pcs "; 
                    echo "<br>";
                    echo "<h5><b>Total Amount Payable: </b> Php ". number_format($nval['total_price'],2);
                    echo "<h6><b>Standard Delivery Method : </b> Cash On Delivery" ;
                    } 
                    echo "<br>";                    
        ?> 

   
            <br>
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
          </form>
     
      


</body>
</html>