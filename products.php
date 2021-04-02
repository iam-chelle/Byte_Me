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
							<li><a href="">Contacts</a></li>
							<li><a href="signin.php">Account</a></li>
						</ul>
					</nav>
					<a href="cart.php"><img src="img/bag.png" alt="" width="30px" height="30px"></a>
					
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

<!--THIS IS FOR THE PRODUCTS NA TALAGA-->

				<div class="small-container">
					<div class=" row row-2">
						<h2>All Products</h2>
					
					</div>
				</div>
				
			
				<div class="row">
					<div class="col-5">
						<a href="foods.php">
						<img src="img/FR-F(1).jpg" alt="" width="200px" height="200px">
						</a>
							<a href="foods.php">
							</a>
						<h4>FOOD CATEGORY</h4>
					</div>

					<div class="col-5">
						<a href="beverages.php">
						<img src="img/FR-B(3).jpg" alt="" width="200px" height="200px">
						</a>
							<a href="beverages.php">
							</a>
						<h4>BEVERAGES CATEGORY</h4>
					</div>

					<div class="col-5">
						<a href="crafts.php">
						<img src="img/FR-C(4).jpg" alt="" width="200px" height="200px">
						</a>
							<a href="crafts.php">
							</a>
						<h4>CRAFTS CATEGORY</h4>
					</div>

					<div class="col-5">
						<a href="accessories.php">
						<img src="img/FR-A(2).jpg" alt="" width="200px" height="200px">
						</a>
							<a href="accessories.php">
							</a>
						<h4>ACCESSORIES CATEGORY</h4>
					</div>

					<div class="col-5">
						<a href="shirts.php">
						<img src="img/FR-S(5).jpg" alt="" width="200px" height="200px">
						</a>
							<a href="shirts.php">
							</a>
						<h4>SHIRTS CATEGORY</h4>
					</div>
					</div>
					<br><br>
					<!--	
					<div class="page-btn">
					<span>1</span>
					<span>2</span>
					<span>3</span>
					<span>4</span>
					<span>5</span>
					<span>&#8594;</span>
				</div> -->
					

<!--END-->
				
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
