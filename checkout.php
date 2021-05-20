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
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' /> -->
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
                        , i.item_id
                        , i.item_name
                        , i.item_img
                        , i.item_price
                        , c.qty
                        , c.user_id
                        , c.store_id
                        , c.cart_status
                        ,i.item_price * c.qty subtotal_price
                        FROM cart c
                        JOIN items as i
                        ON (c.item_id = i.item_id)
                        WHERE c.user_id = ?
                        AND c.status = 'P'
                        AND c.cart_status = 'C'; ";

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
            <div class="col-lg-12 px-4 pb-4" id="order">
              <h2 class="text-center text-info p-2">Confirm your order!</h2>
              <div class="jumbotron p-3 mb-2 text-center">
               
        <?php
            $ordernum = random_int(100000, 999999); 
            echo "<h3> Order Number:". $ordernum ."</h3>";
        ?>
          <table>
              <tr>
                <th>Items</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub Total</th>
              </tr>
          
               <?php
      if(!empty($resultData)){  
        while($row = mysqli_fetch_assoc($resultData)){ ?>
        <form action="includes/processorder.php" method="Post">
              <input hidden type="text" name="order_number" value="<?php echo $ordernum; ?>" >
              <input hidden type="text" name="cust_id" value="<?php echo $row['user_id'];?>">
              <input hidden type="text" name="store_id" value="<?php echo $row['store_id']; ?>">
              <input hidden type="text" name="item_id" value= "<?php echo $row['item_id']; ?>">
              <input hidden type="text" name="qty" value="<?php echo $row['qty'];?>">
          
      <tr>     
        <td> <p class="items"><?php echo ($row['item_name'] . "  " ) ?></p>  </td>
        <td> <p class="price"> Php <?php  echo number_format($row['item_price'],2); ?></p></td>
        <td> <p><?php echo ($row['qty'] . " pcs " ) ?></p> </td>
        <td> Php <?php  echo number_format($row['subtotal_price'],2); ?> </td>
      </tr>
      
    <?php }  
  }
      else{ ?>
              <tr>
                  <td colspan="5">No Orders Found</td>
              </tr>
          <?php }
      ?>
      </table>
          </div>
  
        </div>
    </div>

    <div class="row" align="center">
        <div class="col-8">
        <div class="col-4">
      
    <?php $summary = getCartSummary($conn, $_SESSION['userid']); 
            foreach($summary as $key => $nval){
                    echo "<p><b>Total Qty: </b>". $nval['total_qty'] . "pcs "; 
                    echo "<br>";
                    echo "<p><b>Total Amount Payable: </b> Php ". number_format($nval['total_price'],2);
                    echo "<br>";
                    echo "<p><b>Standard Delivery Method : </b> Cash On Delivery" ;
                    }               
        ?>
            <!-- <input type="submit" name="submit"  href="checkout2.php?checkout=1" value="Place Order" class="btn btn-danger btn-block"> -->
              <a class="btn btn-danger btn-block" href="checkout2.php?checkout=1"><b>Check Out</b></a>
              </div>
          </div>                                    
    </div>
</form>
</table>
</div>
</div>
     
   
      <div class="footer">
    <div class="container">
      <div class="row">     
        <div class="footer-col">
          <img src="img/logo1.png" alt="" height="120px" width="120px">
        </div>
        <div class="footer-col1">
          <h4 align="center">Pasalubong for Every Juan</h4>
            <div align="center" class="social">
              <a href="https://facebook.com/"><i class='fa fa-facebook fa-2x'>  </i></a>
              
              <a href="https://twitter.com/"><i class="fa fa-twitter fa-2x">    </i></a>
              
              <a href="https://instagram.com/"><i class="fa fa-instagram fa-2x">  </i></a>

              <a href="https://snapchat.com/"><i class="fa fa-snapchat fa-2x">  </i></a>
            </div>
        </div>
        <div class="footer-col1">
          <h3><b>Contact Us:</b></h3>
          <b>Address:</b> Centro Orriental Polangui Albay</li>
          <br>
          <b>Email:</b> sueandvenirph@bicol-u.edu.ph</li>
          <br>
          <b>Contact:</b> 09759213248 / 09156392652</li>
          


            </div>
        </div>
      </div>
      <hr>
      <p class="copyright"> Copyright &copy; 2021 - www.sueandvenir.com.ph</p>
    </div>
  </div>

    <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle(){
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        }
        else{
          MenuItems.style.maxHeight = "0px";
        }
      }

    </script>

  </body>
</html>
