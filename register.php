					<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/account.css">
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
							<li><a href="">Contacts</a></li>
							<li><a href="login.php">Account</a></li>
						</ul>
					</nav>
							<img src="img/bag.png" alt="" width="30px" height="30px">
							<img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
				</div>	
			</div>
			<div class="account-page">
				<div class="container">

					<div class="row">
						<div class="col-2">
							<img src="img/sign.png" alt="" width="400px" height="530px" >
						</div>
							<form action="includes/signup.php" method="POST">
						<div class="col-2">
						<div class="form-container1">

							<div class="form-btn">
								<span><a href="login.php"> Login<a/></span>
								<span onclick="register()">Sign Up</span>
								<hr id="Indicator1">
						</div>
							<div class="user-details">
							<div class="input-box">
								<span class="details">Fullname </span>
								<input type="text" placeholder="Enter your name" required id="fname" name="fname">
							</div>
							<div class="input-box">
								<span class="details">Age </span>
								<input type="number" placeholder="Enter your age" required id="age" name="age">
							</div>
							<div class="input-box">
								<span class="details">Address</span>
								<input type="text" placeholder="Enter your address" required id="add" name="add">
							</div>
							<div class="input-box">
								<span class="details">Username</span>
								<input type="text" placeholder="Enter your username" required id="uname" name="uname">
							</div>
							<div class="input-box">
								<span class="details">Email </span>
								<input type="text" placeholder="Enter your email" required id="email" name="email">
							</div>
							<div class="input-box">
								<span class="details">PhoneNumber</span>
								<input type="text" placeholder="Enter your number" required id="cnumber" name="cnumber">
							</div>
							<div class="input-box">
								<span class="details">Password</span>
								<input type="password" placeholder="Enter your password" required >
							</div>
							<div class="input-box">
								<span class="details">ConfirmPassword </span>
								<input type="password" placeholder="Confirm your password" required id="pass" name="pass">
							</div>
						</div>
							<div class="gender-details" id="gender">
								<input type="radio" name="gender" id="dot-1" value="M"> 
								<input type="radio" name="gender" id="dot-2" value="F"> 
								<input type="radio" name="gender" id="dot-3" value="X"> 
								<span class="gender-title">Gender</span>
								<div class="category">
									<label for="dot-1">
										<span class="dot one"></span>
										<span class="gender">Male</span>
									</label>
									<label for="dot-2">
										<span class="dot two"></span>
										<span class="gender">Female</span>
									</label>
									<label for="dot-3">
										<span class="dot three"></span>
										<span class="gender">Prefer not to say</span>
									</label>
								</div>
							</div>
							<div class="button">
								<input type="submit" value="Register" name="submit_reg">
							</div>
						
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>



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
			var Indicator1= document.getElementById("Indicator1");

			function register(){
				RegForm.style.transform ="translateX(0px)";
				LoginForm.style.transform ="translateX(0px)";
				Indicator1.style.transform ="translateX(100px)";

			}
			
			}


		</script>

	</body>
</html>
