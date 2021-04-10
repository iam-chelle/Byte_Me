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
				<img src="img/bag.png" alt="" width="30px" height="30px">
				<img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
			</div>
		</div>
	</div>

	<div class="small-container cart-page">
		<table>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Sub Total</th>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="img/f1.png">
						<div>
							<p>Guinobatan Longganisa</p>
							<small>Php 50.00</small>
							<br>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="1"></td>
				<td>Php 50.00</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="img/l4.jpg">
						<div>
							<p>Puto Rice</p>
							<small>Php 30.00</small>
							<br>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="1"></td>
				<td>Php 30.00</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="img/l3.jpg">
						<div>
							<p>Puto Macapuno</p>
							<small>Php 30.00</small>
							<br>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="1"></td>
				<td>Php 30.00</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="img/l7.png">
						<div>
							<p>Bamboo Basket</p>
							<small>Php 350.00</small>
							<br>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="1"></td>
				<td>Php 350.00</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="img/f4.jpg">
						<div>
							<p>Abaca Bag</p>
							<small>Php 599.00</small>
							<br>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="1"></td>
				<td>Php 599.00</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="img/l6.jpg">
						<div>
							<p>Bicol Shirt</p>
							<small>Php 250.00</small>
							<br>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="1"></td>
				<td>Php 250.00</td>
			</tr>
		</table>

		<div class="total-price">
			<table>
				<tr>
					<td>Sub Total</td>
					<td>Php 1309.00</td>
				</tr>
				<tr>
					<td>Tax</td>
					<td>Php 73.00</td>
				</tr>
				<tr>
					<td>Grand Total</td>
					<td>Php 1382.00</td>
				</tr>
			</table>
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
			if (MenuItems.style.maxHeight == "0px") 
			{
				MenuItems.style.maxHeight = "200px";
			}
			else{
					MenuItems.style.maxHeight = "0px";
				}
			}
	</script>

</body>
</html>
