      <style>
        .collapsible {
          background-color: #777;
          color: white;
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 15px;
        }

        .active, .collapsible:hover {
          background-color: #555;
        }

        .content {
          padding: 0 18px;
          display: none;
          overflow: hidden;
          background-color: #f1f1f1;
        }
        </style>
     

       <?php
  include_once "includes/db_conn.php";
  session_start();
  if(isset($_GET['checkout'])){
  $err = NULL;
  $res = NULL;
      $order_num = random_int(10000,99999) . uniqid();
      
      $sql1 = "UPDATE `cart`
                  SET order_number = ? 
                    , status = 'C'
                WHERE user_id = ?
                  AND status = 'P'
                  AND cart_status = 'C'
                  AND checkout_status = 'X';
                  ";
      
      $stmt=mysqli_stmt_init($conn);
      //check if statement is valid
       if (!mysqli_stmt_prepare($stmt, $sql1)){
          $err = "Statement Failed";
       }
          mysqli_stmt_bind_param($stmt, "ss" ,$order_num , $_SESSION['userid']);
          mysqli_stmt_execute($stmt);
          $res = "Order Number Updated";
      
      $sql2 = "INSERT INTO `orders`
             (`order_number`,`cust_id`,`total_qty`,`total_amount`,`status`)
                SELECT c.order_number
                     , c.user_id 
                     , sum(c.qty)
                     , sum(c.qty * i.item_price)
                     , c.cart_status
                  FROM `cart` c
                  JOIN `items` i
                    ON (c.item_id = i.item_id)
                  WHERE c.user_id = ?
                    AND c.cart_status = 'C'
                    AND c.status = 'C'
                    AND c.checkout_status != 'I'
                 group by c.order_number
                     , c.user_id 
                     , c.cart_status;";
      
      $stmt=mysqli_stmt_init($conn);
      //check if statement is valid
       if (!mysqli_stmt_prepare($stmt, $sql2)){
          $err = "Statement Failed";
       }
          mysqli_stmt_bind_param($stmt, "s" ,$_SESSION['userid']);
          mysqli_stmt_execute($stmt);
          $res = "Orders inserted";
      
      $sql3 = "UPDATE `cart`
                  SET checkout_status = 'I'
                WHERE user_id = ?
                  AND status = 'C'
                  AND order_number = ?
                  AND cart_status = 'C'
                  AND checkout_status != 'I';
                  ";
      
      $stmt3=mysqli_stmt_init($conn);
      //check if statement is valid
       if (!mysqli_stmt_prepare($stmt3, $sql3)){
          $err = "Statement Failed";
       }
          mysqli_stmt_bind_param($stmt3, "ss" , $_SESSION['userid'], $order_num);
          mysqli_stmt_execute($stmt3);

  }
  ?>



        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <title>Sue and Venir</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">

   
            <style>
                    input[type=number]{
                    width: 70px;
                } 
                table{
                    table-layout: fixed;
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
  
 <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 px-4 pb-4" id="order">
              <h1 class="text-center text-info p-2">Order Summary</h1>
              <div class="jumbotron p-5 mb-2 text-center">
               
 <table>
      <thead>
          <th>Order Number</th>
          <th>Total Qty</th>
          <th>Total Amount</th>
          <th>Date Ordered</th>
          <th>Status</th>
      </thead>

<?php
       $get_orders = "SELECT * FROM `orders` WHERE cust_id = ? AND status = 'C';";
      $stmt=mysqli_stmt_init($conn);
      //check if statement is valid
       if (!mysqli_stmt_prepare($stmt, $get_orders)){
          $err = "Statement Failed";
          echo $err;
       }
          mysqli_stmt_bind_param($stmt, "s" ,$_SESSION['userid']);
          mysqli_stmt_execute($stmt);
      
          $resultData = mysqli_stmt_get_result($stmt);
          if(!empty($resultData)){
              while($row = mysqli_fetch_assoc($resultData)){ ?>      
                          <td><?php echo $row['order_number'];?></td>
                          <td><?php echo $row['total_qty'];?> pc(s)</td>
                          <td>Php <?php echo number_format ($row['total_amount'],2);?></td>
                          <td><?php echo $row['order_date'];?></td>
                          <td><?php echo $row['status'] = 'C' ? 'Pending for Delivery' : 'Delivered' ;?></td>                        
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
