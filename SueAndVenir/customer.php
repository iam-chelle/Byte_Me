    <?php
        session_start();
        if(isset($_SESSION['usertype']) && isset($_SESSION['userid'])) {
            switch($_SESSION['usertype']){
                case 'A' : header("location: admin_page.php");
                           break;
                case 'C' : break;
            }
        }
        else{
            header("location: index.php");
        }
  

include_once "includes/db_conn.php";
include_once "includes/function.inc.php";
?>
    <!DOCTYPE html>
        <html lang="en">
        <head>
           
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <meta charset="UTF-8">
       
        <title>Sue and Venir</title>
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link rel="stylesheet" href="css/bootstrap.min.css"/>
         
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="js/jquery2.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/main.js"></script>
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
                </div>
            </div>
        </div>
        
        <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
                 <br><br>
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
               
                   <li>

                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       My Account
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <?php
                   
                   if (isset($_GET['cust_order'])){
                       include("cust_order.php");
                   }
                   
                   ?>
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   

            
                  </div>
                </div>
                
                <p><br><br></p>
                <p><br><br></p>
                <p><br><br></p>
                
                <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-1">
                            <h3>Download our App</h3>
                            <p> Download App for Android</p>
                        </div>
                        <div class="footer-cl-2">
                            <img src="img/logo1.png" width="100px" height="100px">
                        
                            </div>
                        <div class="footer-col-3">
                            <h3>Useful Links</h3>
                            <ul>
                                <li>Coupons</li>
                                <li>Blog Post</li>
                                <li>Return Policy</li>
                                <li>Join Affiliates</li>
                            </ul>
                        </div>
                        <div class="footer-col-4">
                            <h3>Follow Us</h3>
                            <ul>
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Instagram</li>
                                <li>Youtube</li>
                            </ul>
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
