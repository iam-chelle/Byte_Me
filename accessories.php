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


				<div class="small-container single-product">
					<div class="row">
					<div class="col-2">
						<img src="img/A-keychain.jpg" alt="" width="100%" id="ProductImg">

						<div class="small-img-row">
							<div class="small-img-col">
							<img src="img/A-a1.jpg" alt="" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
							<img src="img/A-a3.jpg" alt="" width="100%" class="small-img" >
							</div>
							<div class="small-img-col">
							<img src="img/A-a4.jpg" alt="" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
							<img src="img/A-a5.jpg" alt="" width="100%" class="small-img">
							</div>

							
							</div>


					</div>
					<div class="col-2">
						<h1>Bicol Keychains</h1>
						<p>20 pesos</p>
						<select>
							<option>Select </option>
							<option>Fan keychain</option>
							<option>Pili keychain</option>
							<option>Sili keychain</option>
							<option>Sili with leaves keychain</option>
						</select>
						<input type="number" value="1">
						<a href="" class="btn">Add to Cart</a>
						<a href="" class="btn">Buy Now</a>
						<h3>Product Details <i class="fa fa-indent"></i></h3>
						<p> Bicol Keychains made by ceramics and the raw pili,oftenly used as a signature souvenir from Bicol.</p>
						<p align="right"><i>(Rochelle's Accessories)</i></p>
					</div>
				</div>
				</div>

				<div class="small-container">
					<div class="row row-2">
						<h2>Related Products</h2>
						
				</div>

				<div class="small-container">
					<!--<div class="col-2">
						<img src="img/clothes.jpg" alt="" width="500px" height="500px">
					</div>-->
		
				<div class="row">
					<div class="col-4">
						<img src="img/A-sea-necklace.jpg" alt="" width="200px" height="200px">
						<h4>Seashell Necklace</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 130.00</p><br>
							<h3>Product Details</h3>
						<p>This choker necklace is made with natural, bicol seashell beads, hand-picked from the seashore. </p>
						<p><i>(Rochelle's Accessories)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/A-sea-bracelet.jpg" alt="" width="200px" height="200px">
						<h4>Seashell Bracelet</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 100.00</p><br>
							<h3>Product Details</h3>
						<p>This cute seashell bracelet is made with natural, bicol seashell beads, hand-picked from the seashore.</p>
						<p><i>(Rochelle's Accessories)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/A-wallet.jpg" alt="" width="200px" height="200px">
						<h4>Bicol Wallet</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 50.00</p><br>
							<h3>Product Details</h3>
						<p>Native wallets to organize your banknotes and coins with these beautiful native wallet and purse from Bicol, Philippines.  </p>
						<p><i>(Rochelle's Accessories)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/A-local-bracelet.jpg" alt="" width="200px" height="200px">
						<h4>Local Bracelet</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 100.00</p><br>
							<h3>Product Details</h3>
						<p>Check out our local bracelet selection for the very best in unique or custom, handmade pieces made of wood beads.</p>
						<p><i>(Rochelle's Accessories)</i></p>
						<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
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
			varProductImg = document.getElementById("ProductImg");
			varSmallImg = document.getElementsByClassName("small-img");

			SmallImg[0].onclick = function()
			{
				ProductImg.src = SmallImg[0].src;
			}
			SmallImg[1].onclick = function
			{
				ProductImg.src = SmallImg[1].src;
			}
			SmallImg[2].onclick = function()
			{
				ProductImg.src = SmallImg[2].src;
			}
			SmallImg[3].onclick = function
			{
				ProductImg.src = SmallImg[3].src;
			}
			
		</script>



		</body>
		</html>
