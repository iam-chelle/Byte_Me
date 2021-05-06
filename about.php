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
			<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			
		</head>
		<body>
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
			
	
				<div class="about-page">
				<div class="container">
					<div class="roww">
						<div class="col">
							<img src="img/logo1.png">
						</div>
						<div class="col">
					<h2>About Us:</h2>
					<h4>This website was created by Jeff Esguerra , Rochelle Balmas and Gieraldine Gallano on March 2021</h4> &nbsp;
					<p>Sue and Venir offers a variety of choices for you to choose from! 
						We offer Bicol’s best foods and beverages from best of the best in towns. 
						The shop also offers a variety of hand-made crafts and accessories that you will surely love! 
						and clothing lines in Bicol that you will love to wear with pride.</p>
						</div>
					</div>
				</div>
			</div>

				<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<h3>Vision</h3>
					<p>Sue and Venir continuously innovate to be the best online souvenir shop in Albay. </p>
					<img src="img/img vission 1.png" alt="" width="80px" height="60px">
				</div>
				<div class="col-3">
					<h3>Mission</h3>
					<p>Sue and Venir mission is to provide and satisfy customers with unique, high-quality home-coming gifts at affordable prices. </p>
					<img src="img/img mission.png" alt="" width="80px" height="60px">
				</div>
							
				<div class="col-3">
					<h3>Objective</h3>
					<p>Sue And Venir commits to bring uninterrupted smiles and memories.</p>
					<img src="img/img objective.png" alt="" width="80px" height="60px">
				</div>
			</div>
		</div>
	</div>
	<div class="about-page2">
	<h1>Our Team</h1>
	<div class="container1">
		<!--team1-->
		<div class="our-team">
			<div class="pic">
				<img src="img/user2.jpg" height="200px" width="200px" alt="">
			</div>
			<div class="team-content">
				<h3 class="title1"> Rochelle Balmas </h3>
				<span class="post"> Writer </span>
			</div>
			<ul class="social">
				<li><a href="#" class="fa fa-facebook-square"></a></li>
				<li><a href="#" class="fa fa-twitter-square"></a></li>
				<li><a href="#" class="fa fa-instagram"></a></li>
				<li><a href="#" class="fa fa-snapchat-square"></a></li>
			</ul>
		</div>

			<!--team2-->
		<div class="our-team">
			<div class="pic">
				<img src="img/user1.jpg" height="200px" width="200px" alt="">
			</div>
			<div class="team-content">
				<h3 class="title1"> Jeff Esguerra </h3>
				<span class="post"> Writer </span>
			</div>
			<ul class="social">
				<li><a href="#" class="fa fa-facebook-square"></a></li>
				<li><a href="#" class="fa fa-twitter-square"></a></li>
				<li><a href="#" class="fa fa-instagram"></a></li>
				<li><a href="#" class="fa fa-snapchat-square"></a></li>
			</ul>
		</div>

			<!--team3-->
		<div class="our-team">
			<div class="pic">
				<img src="img/user3.png" height="200px" width="200px" alt="">
			</div>
			<div class="team-content">
				<h3 class="title1"> Gieraldine Gallano </h3>
				<span class="post"> Writer </span>
			</div>
			<ul class="social">
				<li><a href="#" class="fa fa-facebook-square"></a></li>
				<li><a href="#" class="fa fa-twitter-square"></a></li>
				<li><a href="#" class="fa fa-instagram"></a></li>
				<li><a href="#" class="fa fa-snapchat-square"></a></li>
			</ul>
		</div>
	</div>
</div>
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

		<script>
			
			

			function login(){
				RegForm.style.transform ="translateX(300px)";
				LoginForm.style.transform ="translateX(300px)";
				Indicator.style.transform ="translateX(0px)";
				var Indicator= document.getElementById("Indicator");
			}


		</script>

	</body>
</html>
