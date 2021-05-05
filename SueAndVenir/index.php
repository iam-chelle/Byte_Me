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
	<?php
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

					<?php
							
						  $sql = "SELECT * FROM `items` WHERE `cat_display`= 1;";
									$stmt = mysqli_stmt_init($conn);
									 if (!mysqli_stmt_prepare($stmt, $sql)){
									header("location: index.php?error=stmtfailed");
										exit();
									 }
									
								
									  mysqli_stmt_execute($stmt);
									$resultData = mysqli_stmt_get_result($stmt);
									$arr = array();
									while($row = mysqli_fetch_assoc($resultData)){
									array_push($arr,$row);
								}
		                          foreach ($arr as $key => $val) {
		                          		echo "<tr>";
		          						echo "<td><img style = 'width: 200px; height:200px'  src=".'img/'.$val['item_img']." /></td>";
		                            	echo "</tr>";
		                            }
		                            ?>
	
	</div>
	</div>


		<div class="small-container">
			<br><br>
			<h2 class="title">Featured Products</h2>
				<div class="row">
					<?php
							
						  $sql = "SELECT * FROM `items` WHERE `Featured`= 1;";
									$stmt = mysqli_stmt_init($conn);
									 if (!mysqli_stmt_prepare($stmt, $sql)){
									header("location: index.php?error=stmtfailed");
										exit();
									 }
									
								
									  mysqli_stmt_execute($stmt);
									$resultData = mysqli_stmt_get_result($stmt);
									$arr = array();
									while($row = mysqli_fetch_assoc($resultData)){
									array_push($arr,$row);
								}
		                          foreach ($arr as $key => $val) {
		                          		echo "<tr>";
		          						echo "<td><img style = 'width: 200px; height:200px'  src=".'img/'.$val['item_img']." /> </td>";
		          						echo "</tr>";
		          						echo "<br><br>";
		          					}
		                          foreach ($arr as $key => $val) {
		                            echo "<br>";
		                          	echo "<header>";
		                            echo  "<td><br>"	.	$val['item_name']	.  "</td>";
		                            echo  "<td><br>"	.	$val['item_price']	.  "</td>";
		                            echo "</header>";

		                           }
		                           	echo "<br><br>";
		                            ?>

				</div>
			</div>


					<h2 class="title">Latest Products</h2>
						<div class="row">
							<?php
							
						 $sql = "SELECT * FROM `items` WHERE `latest_prod`>= '2021-04-12';";
									$stmt = mysqli_stmt_init($conn);
									 if (!mysqli_stmt_prepare($stmt, $sql)){
									header("location: index.php?error=stmtfailed");
										exit();
									 }
									
								
									  mysqli_stmt_execute($stmt);
									$resultData = mysqli_stmt_get_result($stmt);
									$arr = array();
									while($row = mysqli_fetch_assoc($resultData)){
									array_push($arr,$row);
								}
		                          foreach ($arr as $key => $val) {
		                          	
		          						echo "<img style = 'width: 200px; height:200px'  src=".'img/'.$val['item_img']." />";
		          						 echo "<br>";
		          					}
		                          foreach ($arr as $key => $val) {
		                           
		                          	echo "<header>";
		                            echo  "<td>"	.	$val['item_name']	.  "</td>";
		                            echo  "<td><br>"	.	$val['item_price']	.  "</td>";
		                            echo "</header>";

		                           }
		                           	echo "<br><br>";
		                            ?>
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
