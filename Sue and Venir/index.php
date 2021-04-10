<?php
session_start();


if(isset($_SESSION['usertype']) && isset($_SESSION['userid'])){
    switch($_SESSION['usertype']){
        case 'A' : header("location: admin_page.php");
                   break;
        case 'C' : header("location: customer.php");
                   break;
    }
}

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
						</ul>
					</nav>
					<a href="cart.html"><img src="img/bag.png" alt="" width="30px" height="30px"></a>
					
					<div class="search-box">
						<input class="search-txt" type="text" name="" placeholder="Type to search">
						<a class="search-btn" href="#">
							<i class="fa fa-search"></i>
						</a>
					</div>

					<img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
				</div>
				<br>
				<div class="row">
					<div class="col-2">
					<h2>Express it, <br>Show it OR Gift it</h2>
					<p>Right location and right gifting ideas for a lifetime memorabila<br>Featuring Albayano's souvenir prides at a low cost
					prices and convenient delivery access</p>
					<a href="" class="btn">Explore Now &#8594;</a>
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
					<div class="col-3">
						<img src="img/bicol.jpg" alt="" width="200px" height="200px">
					 </div>
					<div class="col-3">
						<img src="img/abaca.jpg" alt="" width="200px" height="200px">
					 </div>
					<div class="col-3">
						<img src="img/Lambanog.jpg" alt="" width="200px" height="200px">
					 </div>
					<div class="col-3">
						<img src="img/clothes.jpg" alt="" width="200px" height="200px">
					 </div>
					<div class="col-3">
						<img src="img/sea.jpg" alt="" width="200px" height="200px">
					 </div>
				</div>
			</div>
		</div>

		<div class="small-container">
			<h2 class="title">Featured Products</h2>
				<div class="row">
					<div class="col-4">
						<a href="">
						<img src="img/f1.png" alt="" width="200px" height="200px">
						</a>
						<a href="product-details.html">

						</a>
						<h4>Guinobatan Longganisa</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
							<p>Php 50.00</p>
						</div>
						<div class="col-4">
						<img src="img/f2.jpg" alt="" width="200px" height="200px">
						<h4>Tiwi Ceramics</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
							<p>Php 350.00</p>
						</div>
						<div class="col-4">
						<img src="img/f4.jpg" alt="" width="200px" height="200px">
						<h4>Abaca Bag</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
							<p>Php 599.00</p>
						</div>
						<div class="col-4">
						<img src="img/f5.jpg" alt="" width="200px" height="200px">
						<h4>Camalig Pinangat</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</div>
							<p>Php 80.00</p>
						</div>
					</div>
					<h2 class="title">Latest Products</h2>
						<div class="row">
					<div class="col-4">
						<img src="img/l1.jpg" alt="" width="200px" height="200px">
						<h4>Raw Pilinuts</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
							<p>Php 100.00</p>
						</div>
						<div class="col-4">
						<img src="img/foods.jpg" alt="" width="200px" height="200px">
						<h4>Bicol Express</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
							<p>Php 300.00</p>
						</div>
						<div class="col-4">
						<img src="img/l3.jpg" alt="" width="200px" height="200px">
						<h4>Puto Macapuno</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</div>
							<p>Php 30.00</p>
						</div>
						<div class="col-4">
						<img src="img/l5.jpg" alt="" width="200px" height="200px">
						<h4>Pure Tuba</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
							<p>Php 130.00</p>
						</div>

						<div class="col-4">
						<img src="img/l4.jpg" alt="" width="200px" height="200px">
						<h4>Puto Rice</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</div>
							<p>Php 30.00</p>
						</div>
						<div class="col-4">
						<img src="img/l6.jpg" alt="" width="200px" height="200px">
						<h4>Bicol Shirt</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
							<p>Php 250.00</p>
						</div>
						<div class="col-4">
						<img src="img/l7.png" alt="" width="200px" height="200px">
						<h4>Bamboo Basket</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
							<p>Php 350.00</p>
						</div>
						<div class="col-4">
						<img src="img/l8.jpg" alt="" width="200px" height="200px">
						<h4>Sili Keychain</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</div>
							<p>Php 25.00</p>
						</div>
					</div>
				</div>
				<div class="offer">
					<div class="small-container">
						<div class="row">
						<div class="col-2">
							<img src="img/sueimg.png" alt="" class="offer-img">
						</div>
						<div class="col-2">
							<p>Exclusively Available</p>
							<h1> Customized Abaca Bag</h1>
							<small>
								<p>These Woven bag is made of abaca. Straight from Bicol Perfect for any occasion Sling type/Shoulder </p>
							</small>
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="#" class="btn">Buy Now &#8594;</a>
						</div>
					</div>
				</div>
			</div>

	<!--INAYOS KO'COPY MO YUNG MGA LAMAN NG <p></p> for blog-->
					<div class="testimonial">
						<div class="small-container">
							<div class="row">
								<div class="col-3">
									<i class="fa fa-quote-left"></i>
									<p>A fantastic shop for all your souvenir needs. Friendly delivery staffs. Excellent prices and plenty of choice. One of the best souvenir website.</p>
									<div class="rating">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
								</div>
								<img src="img/user1.jpg" alt="" width="50px" height="50px">
								<h3>Rowan Atkinson</h3>
							</div>
							<div class="col-3">
									<i class="fa fa-quote-left"></i>
									<p>Very amazing e-commerce site. Tons of variety of bicol souvenirs at really good prices. I bought t-shirts, dishes etc and got a good deal. Recommended.</p>
									<div class="rating">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<img src="img/user2.jpg" alt="" width="50px" height="50px">
								<h3>Sue Ramirez</h3>
							</div>
							<div class="col-3">
									<i class="fa fa-quote-left"></i>
									<p>This is one of the best site to buy souvenirs. There are plenty in internet but I found nice souvenirs gifts here. Surely buy again here during my visit in Albay.</p>
									<div class="rating">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
								<img src="img/user3.png" alt="" width="50px" height="50px">
								<h3>Roseanne Park</h3>
							</div>
						</div>
					</div>
				</div>
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="footer-col-1">
							<h3>Contact Us</h3>
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
