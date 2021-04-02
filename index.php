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
						<img src="img/long-1.jpg" alt="" width="100%" id="ProductImg">

						<div class="small-img-row">
							<div class="small-img-col">
							<img src="img/long-8.jpg" alt="" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
							<img src="img/long-3.jpg" alt="" width="100%" class="small-img" >
							</div>
							<div class="small-img-col">
							<img src="img/long-2.jpg" alt="" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
							<img src="img/long-5.jpg" alt="" width="100%" class="small-img">
							</div>

							
							</div>

					</div>
					<div class="col-2">
						<h1>Guinobatan Longanisa</h1>
						<h4>50 pesos</h4>
						<p>6 pieces</p>
						<select>
							<option>Select </option>
							<option>Long</option>
							<option>Short</option>
							<option>Skin-less</option>
							<option>Garlic-smoky</option>
						</select>
						<input type="number" value="1">
							<a href="" class="btn">Add to Cart</a>
							<a href="" class="btn">Buy Now</a>
						<h3>Product Details <i class="fa fa-indent"></i></h3>
						<p>Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan in Albay, Philippines. It is a type of de recado longganisa.</p>
						<p align="right"><i>(D'Juan Dela Cruz Specials)</i></p>
					</div>
				</div>
				</div>

				<div class="small-container">
					<div class="row row-2">
						<h2>Related Bicol Dishes</h2>
						
				</div>

				<div class="small-container">
					<!--<div class="col-2">
						<img src="img/clothes.jpg" alt="" width="500px" height="500px">
					</div>-->
		
				<div class="row">
					<div class="col-4">
						<img src="img/F-bicol express.jpg" alt="" width="200px" height="200px">
						<h4>Special Bicol Express</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 300.00</p> <br>
							<h3>Product Details</h3>
						<p>Pork Bicol Express is a type of Filipino spicy pork dish. Its main source of flavor is derived from shrimp paste, which is locally known as bagoong. </p>
						<p><i>(Tan's Store)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/F-laing.jpg" alt="" width="200px" height="200px">
						<h4>Special Laing</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 300.00</p><br>
							<h3>Product Details</h3>
						<p>Laing na Gabi or simply Laing is a type of Filipino vegetable dish. Taro leaves are sliced and dried for a few days before being cooked in coconut milk. </p>
						<p><i>(Tan's Store)</i></p>
						<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/F-tilmok.png" alt="" width="200px" height="200px">
						<h4>Tilmok</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 50.00</p><br>
							<h3>Product Details</h3>
						<p>Tilmok is a staple food in the Philippines' Bicol region due to abundance of crab and coconut. It is steamed crab meat with coconut. </p>
						<p><i>(D'Juan Dela Cruz Specials)</i></p>
						<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/F-pinangat.jpg" alt="" width="200px" height="200px">
						<h4>Camalig Special Pinangat</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 100.00</p><br>
							<h3>Product Details</h3>
						<p>Pinangat is a famous native chili-hot delicacy of the town of Camalig. A vegetable dish cooked in coconut milk mixed with select spices and gabi.</p>
						<p><i>(Aling Gelay Special Pinangat)</i></p>
						<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>
					</div>
				</div>


				<div class="small-container single-product">
					<div class="row">
					<div class="col-2">
						<img src="img/F-pili-jam.jpg" alt="" width="100%" id="ProductImg">

					</div>
					<div class="col-2">
						<h1>Pili Jam</h1>
						<h4>100 pesos</h4>
						<select>
							<option>Select </option>
							<option>Large</option>
							<option>Medium</option>
							<option>Small</option>
						</select>
						<input type="number" value="1">
							<a href="" class="btn">Add to Cart</a>
							<a href="" class="btn">Buy Now</a>
						<h3>Product Details <i class="fa fa-indent"></i></h3>
						<br>
						<p>A sweet recipe that came from the province of Bicol Region. This recipe is a perfect dessert on its own, or as a spread on rice-based snacks (kakanin) or just plain bread. Made from rich coconut milk and raw sugar (Kalamay or Panutsa) reduced through a slow simmer.</p>
						<p align="right"><i>(Aling Gelay Special Pinangat)</i></p>
					</div>
				</div>
							<div class="small-container">
					<div class="row row-2">
						<h2>Related Products</h2>
						</div>
					</div>
				</div>

				<div class="small-container">
				<div class="row">
					<div class="col-4">
						<img src="img/F-pili-candy.jpg" alt="" width="200px" height="200px">
						<h4>Pili Candy</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 30.00</p><br>
							<p><i>(Gerald's Native Products)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/F-pili-brownies.jpg" alt="" width="200px" height="200px">
						<h4>Pilinut Brownies</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 200.00</p><br>
							<p><i>(Jenny's Special Puto)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						
						</div>

						<div class="col-4">
						<img src="img/F-pili-cake.jpg" alt="" width="200px" height="200px">
						<h4>Pili Cake</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 130.00</p><br>
							<p><i>(Jenny's Special Puto)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						
						</div>

						<div class="col-4">
						<img src="img/F-pilinuts.jpg" alt="" width="200px" height="200px">
						<h4>Pilinuts</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 100.00</p><br>
							<p><i>(Gomez's Store)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						
						</div>
					</div>
				</div>
				
	</div>
				</div>
				</div>

				<div class="small-container">
					<div class="row row-2">
						<h2>Bread-like Desserts</h2>
				</div>

				<div class="small-container">
		
				<div class="row">
					<div class="col-4">
						<img src="img/F-puto-macapuno.jpg" alt="" width="200px" height="200px">
						<h4>Puto Macapuno</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div><br>
							<p>Php 30.00</p><br>
							<h3>Product Details</h3>
						<p>steamed rice cakes, traditionally made from slightly fermented rice dough (galapong) and is stuffed with coconut caramelized filling.</p>
						<p><i>(Jenny's Special Puto)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/Sale-biko.jpg" alt="" width="200px" height="200px">
						<h4>Special Biko</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 80.00</p><br>
							<h3>Product Details</h3>
						<p> is a sweet rice cake from the Bicol (a type of kalamay dish). It is made of coconut milk, brown sugar, and glutinous rice. It is usually topped with latik.</p>
						<p><i>(Jenny's Special Puto)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/F-suman1.jpg" alt="" width="200px" height="200px">
						<h4>Suman Malagkit</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 10.00</p><br>
							<h3>Product Details</h3>
						<p>The Suman Malagkit Recipe is a famous delicacy in the Bicol. The ingredients consist of sweet glutinous rice wrapped in banana leaves and served as meryenda.</p>
						<p><i>(Gerald's Native Products)</i></p>
							<input type="number" value="1">
							<a href="" class="btn"><i class="fa fa-shopping-cart"></i></a>
							<a href="" class="btn">Buy Now</a>
						</div>

						<div class="col-4">
						<img src="img/F-suman-ibos.jpg" alt="" width="200px" height="200px">
						<h4>Suman Ibos</h4>
						<div class="rating">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</div><br>
							<p>Php 10.00</p><br>
							<h3>Product Details</h3>
						<p>Suman sa ibos is a simple kakanin recipe.  This recipe requires glutinous rice and coconut milk and the wrap is made from buri or palm leaves.</p>
						<p><i>(Gerald's Native Products)</i></p>
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
