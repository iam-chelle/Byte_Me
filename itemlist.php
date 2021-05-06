	<?php
session_start();
if(isset($_SESSION['usertype']) && isset($_SESSION['userid'])){
    switch($_SESSION['usertype']){
        case 'A' : header("location: admin_page.php");
                   break;
        case 'C' : break;
    }
}
else{
    header("location: signin.php");
}


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
			<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<style>
				input[type=number]{
    				width: 60px;
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
					<div class="search-box">
						<input class="search-txt" type="text" name="" placeholder="Type to search">
						<a class="search-btn" href="#">
							<i class="fa fa-search"></i>
						</a>
					</div>
					<img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
				</div>
			</div>
</div>

<div class="small-container">
                
                <div class="row">
                    
                    
                </div>
                	<br><br>
					<?php
                    if(isset($_GET['category'])){ ?>
                    <h1><?php echo $_GET['catname'];?></h1>
				   
				    <div class="row">
                    <?php
                            $cat_id = htmlentities($_GET['category']);
                            $items = getItemListPerCat($conn,$cat_id);
                            foreach($items as $key => $val ){ ?>
                            
                            <div class="col-4">
                                <img src="img/<?php echo $val['item_img'];?>" alt="" width="200px" height="200px">
                                <h4><?php echo $val['item_name'];?></h4>
                                <h4>PHP <?php echo $val['item_price'];?> .00 </h4><br>
                                <h3>Product Details</h3>
                                <p><?php echo $val['item_details'];?></p>
                                <p><i>(<?php echo $val['store_name'];?>)</i></p>
                                <form action="includes/processcart.php" method="post">
                                    <input hidden type="text" name="user_id" value="<?php echo $_SESSION['userid']; ?>">
                                    <input hidden type="text" name="item_id" value="<?php echo $val['item_id']; ?>">
                                 	<input hidden type="text" name="store_id" value="<?php echo $val['store_id']; ?>">
                                    Quantity <input class="boton" type="number" name="item_qty" value="1"> 
                                    <button type="submit" name="addcart" class="btn">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                                </form>
                             </div>

                        <?php  } ?>
					
				    </div>
				    
				    <?php } ?>
				</div>
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
