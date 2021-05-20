	<?php
	$searchkey="";
		if (isset($_GET['searchkey'])){
    	$searchkey=htmlentities($_GET['searchkey']);  
		}
	?>
		<?php
session_start();
if(isset($_SESSION['usertype']) && isset($_SESSION['userid'])){
    switch($_SESSION['usertype']){
        case 'A' : header("location: admin/index.php");
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
					<img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
				</div>
			</div>
</div>

<div class="small-container">
	<div class="row">		
	</div>
        <?php
        if($searchkey == ""){
           $sql = "SELECT i.item_id
                     , i.item_name
                     , i.item_details
                     , i.item_price
                     , i.item_img
                     , s.store_name
                  FROM `items` i
                  JOIN `store` s
                    ON i.store_id = s.store_id
                  JOIN `category` c 
                    ON i.cat_id = c.cat_id
                 WHERE c.status = 'Active'
                   AND i.status = 'A'
                   AND s.status = 'Active';";

        
        $stmt=mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "Statement Failed.";
        exit();
         }
        }
        else{
            $sql = "SELECT i.item_id
                     , i.item_name
                     , i.item_details
                     , i.item_price
                     , i.item_img
                     , s.store_name
                     , s.store_id
                  FROM `items` i
                  JOIN `store` s
                    ON i.store_id = s.store_id
                  JOIN `category` c 
                    ON i.cat_id = c.cat_id
                 WHERE c.status = 'Active'
                 AND s.status = 'Active'
                   AND i.status = 'A'
                   AND i.item_name LIKE ?
                    OR i.item_price = ?;";
        
        $stmt=mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "Something went wrong.";
        exit();
         }
        $itemname="%{$searchkey}%";
        mysqli_stmt_bind_param($stmt, "ss" , $itemname, $searchkey);
        }
        
        
         mysqli_stmt_execute($stmt);
                     $resultData = mysqli_stmt_get_result($stmt);
         $arr=array();
         while($row = mysqli_fetch_assoc($resultData)){
             array_push($arr,$row);
         } 
         if(!empty($arr)){ ?>

			<br><br>

		<div class="row"> 
			<?php
         	foreach($arr as $key => $val ){ ?>
                <div class="col-4">
                    <img src="img/<?php echo $val['item_img'];?>" alt="" width="200px" height="200px">
                    <h3><?php echo $val['item_name'];?></h3>
                    <h4>PHP <?php echo $val['item_price'];?> .00 </h4><br>

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

            <?php }

             }
         else{
             echo "<br><br><br><br>";
             echo "<h4><center> No Records Found.</center></h4>";
             echo "<br><br><br><br>";
         }
        ?>
       </div>
</div>

			<div class="footer">
		<div class="container">
			<div class="row">			
				<div class="footer-col">
					<img src="img/logo1.png" alt="" height="120px" width="120px">
				</div>
				<div class="footer-col1">
					<h2 align="center">Pasalubong for Every Juan</h2>
						<div align="center" class="social">
							<a href="https://facebook.com/"><i class='fa fa-facebook fa-2x'>  </i></a>
							
							<a href="https://twitter.com/"><i class="fa fa-twitter fa-2x">		</i></a>
							
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
