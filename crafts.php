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
						<img src="img/C-ceramics.jpg" alt="" width="100%" id="ProductImg">

						<div class="small-img-row">
							<div class="small-img-col">
							<img src="img/C-c2.jpg" alt="" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
							<img src="img/C-c9.jpg" alt="" width="100%" class="small-img" >
							</div>
							<div class="small-img-col">
							<img src="img/C-c5.jpg" alt="" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
							<img src="img/C-c1.jpg" alt="" width="100%" class="small-img">
							</div>

							
							</div>

					</div>
					<div class="col-2">
						<h1>Ceramics</h1>
						<h4>150 pesos</h4>
						<p>unified price for 4 pieces</p>
						<select>
							<option>Select </option>
							<option>Ceramic Pots</option>
							<option>Ceramic Mugs</option>
							<option>Ceramic Pickel jar</option>
							<option>Ceramic Tea cups</option>
						</select>
						<input type="number" value="1">
						<a href="" class="btn">Add to Cart</a>
						<a href="" class="btn">Buy Now</a>
						<h3>Product Details <i class="fa fa-indent"></i></h3>
						<p>A ceramic is any of the various hard, brittle, heat-resistant and corrosion-resistant materials made by shaping and then firing a nonmetallic mineral, such as clay.</p>
						<p align="right"><i>(Cadag's Store)</i></p>
					</div>
				</div>
				</div>

				<div class="small-container">
					<div class="row row-2">
						<h2>Bags and Baskets</h2>
						<p>View More</p>
				</div>

				<div class="small-container">
					<!--<div class="col-2">
						<img src="img/clothes.jpg" alt="" width="500px" height="500px">
					</div>-->
		
				<div class="row">
					<div class="col-4">
						<img src="img/C-buri.jpg" alt="" width="200px" height="200px">
						<h4>Buri Bag</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 100.00</p><br>
							<h3>Product Details</h3>
						<p> a sturdy native bag woven from buri palm leaves.</p>
						<p><i>(Rochelle's Accessories)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/C-Bamboo-basket.jpg" alt="" width="200px" height="200px">
						<h4>Bamboo Basket</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 350.00</p><br>
							<h3>Product Details</h3>
						<p>are constructed from bamboo and rattan. </p>
						<p><i>(Gerald's Native Products)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/C-abaca-bag.jpg" alt="" width="200px" height="200px">
						<h4>Abaca Bag</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 500.00</p><br>
							<h3>Product Details</h3>
						<p>Pure abaca round sling bag made locally in Bicol.</p>
						<p><i>(Gerald's Native Products)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/C-abaca-basket.jpg" alt="" width="200px" height="200px">
						<h4>Abaca Basket</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 150.00</p><br>
							<h3>Product Details</h3>
						<p>a woven of natural fibers of abaca in a tight-cord pattern.</p>
						<p><i>(Ica's Store)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>
					</div>
				</div>


				<div class="small-container single-product">
					<div class="row">
					<div class="col-2">
						<img src="img/C-tabak.jpg" alt="" width="100%" id="ProductImg">

						<div class="small-img-row">
							<div class="small-img-col">
							<img src="img/C-t5.jpg" alt="" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
							<img src="img/C-t7.jpg" alt="" width="100%" class="small-img" >
							</div>
							<div class="small-img-col">
							<img src="img/C-t6.jpg" alt="" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
							<img src="img/C-t8.jpg" alt="" width="100%" class="small-img">
							</div>

					</div>

					</div>
					<div class="col-2">
						<h1>Tabaco Tabak</h1>
						<h4>250 pesos</h4>
						<select>
							<option>Select </option>
							<option>1 </option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
						</select>
						<input type="number" value="1">
						<a href="" class="btn">Add to Cart</a>
						<h3>Product Details <i class="fa fa-indent"></i></h3>
						<br>
						<p>it is also known as the "jungle bolo" or "tip bolo", "sundang". This weapons were made of steel and wood as a handle. </p>
						<p align="right"><i>(Best of Tabaco)</i></p>
					</div>
				</div>
				</div>

				<div class="small-container">
					<div class="row row-2">
						<h2>Related Crafts Products</h2>
						<p>View More</p>
				</div>

				<div class="small-container">
					<!--<div class="col-2">
						<img src="img/clothes.jpg" alt="" width="500px" height="500px">
					</div>-->
		
				<div class="row">
					<div class="col-4">
						<img src="img/C-alkansya.jpg" alt="" width="200px" height="200px">
						<h4>Money Keeper</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 100.00</p><br>
							<h3>Product Details</h3>
						<p>Ceramic material, cute pig for fecoration. Banks pig, that will attract and encourage your little one to start saving money and develop a good habit.</p>
						<p><i>(Cadag's Store)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/C-abac-lamp.jpg" alt="" width="200px" height="200px">
						<h4>Abaca Lampshade</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 200.00</p><br>
							<h3>Product Details</h3>
						<p> Made from crocheted abaca, the hanging lamp from Shelmed Cottage Treasures evokes a warm and cozy ambience, reminiscent of a traditional Filipino home.</p>
						<p><i>(Ica's Store)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/C-seashell-lamp.jpg" alt="" width="200px" height="200px">
						<h4>Seashell Lamp</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 500.00</p><br>
							<h3>Product Details</h3>
						<p>TThis unique custom made lamp brings the beach into your home. The cut and pierced seashell border lampshade is complimented by the sand and sea shell.</p>
						<p><i>(Ica's Store)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/C-ref-magnet.jpg" alt="" width="200px" height="200px">
						<h4>Refrigerator Magnet</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 60.00</p><br>
							<h3>Product Details</h3>
						<p>Ceramic magnet set. This set of six magnets was made by stamping a speckled brown clay with my own handmade stamps.</p>
						<p><i>(Ica's Store)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>
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
