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
				.error{
					background: #f2DEDE;
					color: #A94442;
					padding: 10px;
					width: 100%;
					border-radius: 5px;
					text-align: left;
				}
			</style>
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
                        
                    </a>
						</ul>
					</nav>
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
								<span><a href="signin.php"> Login<a/></span>
								<span onclick="register()">Sign Up</span>
								<hr id="Indicator1">
						</div>
						<?php
										if (isset($_GET['error'])) {?>
										<p class="error"><?php echo $_GET['error']; ?></p>
									<?php } ?>
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
								<span class="details">CompleteAddress</span>
								<input type="text" placeholder="Enter your COMPLETE address" required id="add" name="add">
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
								<input type="password" placeholder="Enter your password" required id="pass" name="pass" >
							</div>
							<div class="input-box">
								<span class="details">ConfirmPassword </span>
								<input type="password" placeholder="Confirm your password" required id="re_pass" name="re_pass">
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
								<input type="submit" value="Register" name="submit">
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
