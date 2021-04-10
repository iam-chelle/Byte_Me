<?php
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
			<?php
			if(isset($_GET['logged'])){
				echo ($_GET['logged']);
			}
			?>
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
			<div class="account-page">
				<div class="container">
					<div class="row">
						<div class="col-2">
							<img src="img/sign.png" alt="" width="400px" height="530px" >
						</div>
						<div class="col-2">

						<div class="form-container">
							<div class="form-btn">
								<span onclick="login()">Login</span>
								<span><a href="register.php"> Sign Up</a></span>
								<hr id="Indicator">
						</div>
								<form action="includes/login.php" method="POST" id="LoginForm">
								<input type="text" placeholder="Username" required id="usname" name="usname">
								<input type="password" placeholder="Password" required id="pword" name="pword">
								<button type="submit" class="btn" name="Login"> Login </button>
								<a href="">Forgot Password?</a>
							</form>	
						</div>
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
