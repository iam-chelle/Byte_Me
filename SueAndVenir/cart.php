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

	<div class="small-container cart-page">
		<section id="cart-page">
    <?php $summary = getCartSummary($conn, $_SESSION['userid']); 
                            foreach($summary as $key => $nval){
                            echo "(". $nval['total_qty'] . " pcs )";    
                            }
                            
                            ?> 

    <?php
    			 $sql_cart_list = "SELECT c.id
                        , i.item_name
                        , i.item_img
                        , i.item_price
                        , c.qty
                        , c.user_id
                        ,i.item_price * c.qty subtotal_price
                        FROM cart c
                        JOIN items as i
                        ON (c.item_id = i.item_id)
                        WHERE c.user_id = ? 
                        AND c.status = 'P'; ";

                $stmt=mysqli_stmt_init($conn);
        
                if (!mysqli_stmt_prepare($stmt, $sql_cart_list)){
                    header("location: index.php?error=stmtfailed");
                    exit();
                    }
                    mysqli_stmt_bind_param($stmt, "s" ,$_SESSION['userid']);
                    mysqli_stmt_execute($stmt);

                    $resultData = mysqli_stmt_get_result($stmt);
                    
    			?>
		<table>
			<tr>
				<th>Items</th>
				
				<th>Quantity</th>
				<th>Sub Total</th>
			</tr>
			 <?php
        while($row = mysqli_fetch_assoc($resultData)){ 
            echo "<table class='table'>";
        ?>
			<tr>
				 <?php echo "<td>"  ?>
					<div class="cart-info">
						 <img src="img/<?php echo $row['item_img'];?>" alt="">
						<div>
							<p> <p ><?php echo $row['item_name']?></p>
							<small>Php <?php  echo number_format($row['item_price'],2); ?> </small>
							<br>
							
							<a href="includes/deletecartitem.php?cartid=<?php echo $row['id']; ?>">Remove</a>
						</div>
					</div>
				</td>
				  <?php echo "</td>"  ?>
       <td>
       			<!--<input type="number" class="cart-qty" name="qty" value="<?php echo $row['qty']; ?>"
       			<a href="includes/updatecart.php?cartid=<?php echo $row['id']; ?>">Update</a>-->
       			
                     <form action="includes/updatecart.php" method="post">
                            <input hidden type="text" name="cart_id" value="<?php echo $row['id']; ?>">
                           
                            <input type="number" class="cart-qty" name="item_qty"value="<?php echo $row['qty']; ?>">
                        	
                            <button> Update <i class="fa fa-check"></i> </button>
                            
                            </a>
                </form>
                           
                 
       </td>

				<td> Php <?php  echo number_format($row['subtotal_price'],2); ?> </td>
			</tr>
			
		</table>
		 <?php }
                        
    ?>

    <p class="cart-sum" align="right">
    <?php $summary = getCartSummary($conn, $_SESSION['userid']); 
            foreach($summary as $key => $nval){
                    echo "Total Qty: ". $nval['total_qty'] . " pcs "; 
                    echo "<br>";
                    echo "Total Price: Php ". number_format($nval['total_price'],2);    
                    } 
                    echo "<br>";                    
        ?> 
         <a class="cart_check_out" href="">Check Out</a>
    </p>

		</div>
	</p>
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
			if (MenuItems.style.maxHeight == "0px") 
			{
				MenuItems.style.maxHeight = "200px";
			}
			else{
					MenuItems.style.maxHeight = "0px";
				}
			}
	</script>

</body>
</html>
