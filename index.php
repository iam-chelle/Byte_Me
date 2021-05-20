	<?php
session_start();
	include_once "includes/db_conn.php";
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
		.col-4{
		flex-basis: 25%;
		padding: 10px;
		min-width: 200px;
		margin-bottom: 50px;
		transition: transform 0.5s;
	}
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
                        
                    </a>
						</ul>
					</nav>
					
					<img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
				</div>
				<br>
				<div class="row">
					<div class="col-2">
					<h2>Express it, <br>Show it OR Gift it</h2>
					<p>Right location and right gifting ideas for a lifetime memorabila<br>Featuring Albayano's souvenir prides at a low cost
					prices and convenient delivery access</p>
					<a href="products.php" class="btn">Explore Now &#8594;</a>
					</div>
					<div class="col-2">
						<img src="img/main.png">
					</div>
				</div>	
			</div>
		</div>
		
		<div class="small-container">
			<div class="categories">

				<div class="row">

					<?php
							
						  $sql = "SELECT * FROM `items` WHERE `cat_display`= 1";
									$stmt = mysqli_stmt_init($conn);
									 if (!mysqli_stmt_prepare($stmt, $sql)){
									header("location: index.php?error=stmtfailed");
										exit();
									 }
									
								
									  mysqli_stmt_execute($stmt);
									$resultData = mysqli_stmt_get_result($stmt);
									$arr = array();
									while($row = mysqli_fetch_assoc($resultData)){
									array_push($arr,$row);
								}
		                          foreach ($arr as $key => $val) {
		                          		
		                          		echo "<tr>";
		          						echo "<td><img style = 'width: 200px; height:200px'  src=".'img/'.$val['item_img']." /></td>";
		                            	echo "</tr>";
		                            	
		                            }
		                            ?>
	
	</div>
	</div>	
</div>
<br>
<div class="small-container">
		<h2 class="title">Latest Products</h2>
						<div class="row">
							<?php
							
						  $sql = "SELECT * FROM `items` WHERE `Featured`=1;";
									$stmt = mysqli_stmt_init($conn);
									 if (!mysqli_stmt_prepare($stmt, $sql)){
									header("location: index.php?error=stmtfailed");
										exit();
									 }
									
								
									  mysqli_stmt_execute($stmt);
									$resultData = mysqli_stmt_get_result($stmt);
									$arr = array();
									while($row = mysqli_fetch_assoc($resultData)){
									array_push($arr,$row);
								}
		                          foreach ($arr as $key => $val) {?>
		                          		<div class="col-4">
		                          			 <img src="img/<?php echo $val['item_img'];?>"" alt="" width="200px" height="200px">
		                          			 <h3><?php echo $val['item_name'];?></h3>
		                          			<p>Php <?php  echo number_format($val['item_price'],2); ?> </p>
		                          		</div>
		                           <?php }   ?>
								</div>	       
						<br>
					<br>
			<h2 class="title">Latest Products</h2>
						<div class="row">
							<?php
							
						  $sql = "SELECT * FROM `items` WHERE `latest_prod`>= '2021-04-12'
						  								AND status = 'A';";
									$stmt = mysqli_stmt_init($conn);
									 if (!mysqli_stmt_prepare($stmt, $sql)){
									header("location: index.php?error=stmtfailed");
										exit();
									 }
									
								
									  mysqli_stmt_execute($stmt);
									$resultData = mysqli_stmt_get_result($stmt);
									$arr = array();
									while($row = mysqli_fetch_assoc($resultData)){
									array_push($arr,$row);
								}
		                          foreach ($arr as $key => $val) {?>
		                          		<div class="col-4">
		                          			 <img src="img/<?php echo $val['item_img'];?>"" alt="" width="200px" height="200px">
		                          			 <h3><?php echo $val['item_name'];?></h3>
		                          			<p>Php <?php  echo number_format($val['item_price'],2); ?> </p>
		                          		</div>	
		                         <?php }   ?>
						</div>
					</div>	
					
<!-- 
<br>
<div class="small-container">
		<h2 class="title">Latest Products</h2>
			<div class="categories">

				<div class="row">

					<?php
							
						  $sql = "SELECT * FROM `items` WHERE `latest_prod`>= '2021-04-12';";
									$stmt = mysqli_stmt_init($conn);
									 if (!mysqli_stmt_prepare($stmt, $sql)){
									header("location: index.php?error=stmtfailed");
										exit();
									 }
									
								
									  mysqli_stmt_execute($stmt);
									$resultData = mysqli_stmt_get_result($stmt);
									$arr = array();
									while($row = mysqli_fetch_assoc($resultData)){
									array_push($arr,$row);
								}
		                          foreach ($arr as $key => $val) {
		                          		
		                          		echo "<tr>";
		          						echo "<td><img style = 'width: 200px; height:200px'  src=".'img/'.$val['item_img']." /></td>";
		                            	echo "</tr>";
		                            	
		                            }
		                            ?>
	
	</div>
	</div>	
</div>




 -->










				
				<?php
						  $sql = "SELECT * FROM `promotion` WHERE `status`= 'A';";
									$stmt = mysqli_stmt_init($conn);
									 if (!mysqli_stmt_prepare($stmt, $sql)){
									header("location: index.php?error=stmtfailed");
										exit();
									 }
									
								
									  mysqli_stmt_execute($stmt);
									$resultData = mysqli_stmt_get_result($stmt);
									$arr = array();
									while($row = mysqli_fetch_assoc($resultData)){
									array_push($arr,$row);
								}
		       						foreach ($arr as $key => $val) { ?>
				
				<div class="offer">
					<div class="small-container">
						<div class="row">
						<div class="col-2">
							<img src="img/<?php echo $val['promo_img'];?>" alt="" class="offer-img">
						</div>
						<div class="col-2">
							<p>Exclusively Available</p>
							<h1><?php echo $val['promo_name'];?></h1>
							<small>
								<p><?php echo $val['description'];?></p>
							</small>
							<a href="products.php" class="btn"><i class="fa fa-shopping-cart">  Shop Now</i></a>
						</div>
					</div>
				</div>
			</div>
			<?php }   ?>



					<div class="testimonial">
						<div class="small-container">
							<div class="row">
		
			<?php
						  $sql = "SELECT * FROM `review` WHERE `status`= 'A';";
									$stmt = mysqli_stmt_init($conn);
									 if (!mysqli_stmt_prepare($stmt, $sql)){
									header("location: index.php?error=stmtfailed");
										exit();
									 }
									
								
									  mysqli_stmt_execute($stmt);
									$resultData = mysqli_stmt_get_result($stmt);
									$arr = array();
									while($row = mysqli_fetch_assoc($resultData)){
									array_push($arr,$row);
								}
		       						foreach ($arr as $key => $val) { ?>
				
							
								<div class="col-3">
									<td><i class="fa fa-quote-left"></i>
									<p><?php echo $val['user_rev'];?></p>
								<img src="img/<?php echo $val['img'];?>" alt="" width="50px" height="50px">
								<h3><?php echo $val['user'];?></h3></td>
							</div>
							<?php }   ?>
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
