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
						<li><a href="index.html">Home</a></li>
						<li><a href="">Products</a></li>
						<li><a href="">About us</a></li>
						<li><a href="">Contacts</a></li>
						<li><a href="">Account</a></li>
					</ul>
				</nav>
				<img src="img/bag.png" alt="" width="30px" height="30px">
				<img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
			</div>
		</div>
	</div>

	<!-----------------------------about---------------------------->
	<div class="about-section">
  		<h1>About Us</h1>
  		<p>Some text about who we are and what we do.</p>
  		<p>Resize the browser window to see that this page is responsive by the way.</p>
	</div>

	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<h3>Mission</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus sem vitae augue imperdiet, in facilisis odio tempus. Nulla bibendum mauris lobortis orci pulvinar.</p>
					<img src="img/img mission.png" alt="" width="80px" height="60px">
				</div>

				<div class="col-3">
					<h3>Vision</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus sem vitae augue imperdiet, in facilisis odio tempus. Nulla bibendum mauris lobortis orci pulvinar.</p>
					<img src="img/img vission 1.png" alt="" width="80px" height="60px">
				</div>
							
				<div class="col-3">
					<h3>Objective</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus sem vitae augue imperdiet, in facilisis odio tempus. Nulla bibendum mauris lobortis orci pulvinar.</p>
					<img src="img/img objective.png" alt="" width="80px" height="60px">
				</div>
			</div>
		</div>
	</div>

	<div>
	<h2 style="text-align:center">Our Team</h2>

	<div class="row">
 		<div class="column">
    		<div class="card">
      			<img src="img/team1.jpg" alt="Jane" style="width:100%">
      			<div class="cont">
        			<h2>Jane Doe</h2>
        			<p class="profession">CEO & Founder</p>
        			<p>Some text that describes me lorem ipsum ipsum lorem.</p>
        			<p>jane@example.com</p>
        			<p><button class="button">Contact</button></p>
      			</div>
    		</div>
  		</div>

  		<div class="column">
    		<div class="card">
      			<img src="img/team2.jpg" alt="Mike" style="width:100%">
      			<div class="cont">
        			<h2>Mike Ross</h2>
        			<p class="profession">Art Director</p>
        			<p>Some text that describes me lorem ipsum ipsum lorem.</p>
        			<p>mike@example.com</p>
        			<p><button class="button">Contact</button></p>
      			</div>
    		</div>
  		</div>

  		<div class="column">
    		<div class="card">
      			<img src="img/team3.jpg" alt="John" style="width:100%">
      			<div class="cont">
        			<h2>John Doe</h2>
        			<p class="profession">Designer</p>
        			<p>Some text that describes me lorem ipsum ipsum lorem.</p>
        			<p>john@example.com</p>
        			<p><button class="button">Contact</button></p>
      			</div>
    		</div>
  		</div>
	</div>


	<!------------------------------end---------------------------->

	
				
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