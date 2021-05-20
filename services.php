	<?php
	session_start();
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
			<style>
				
	.services{
		padding: 10px 0;
		background: linear-gradient(to right, #a1d3b0, #f6f1d3) !important;
	}
	.services-title{
		color: #777;
		font-family: 'Raleway';
		font-size: 3em;
		width: 1200px;
		margin: 10px auto;
		text-align: center;
	}
	.services1{
		display: flex;
		padding-left: 30px;
		justify-content: center;
		align-items: center;
		min-height: 600px;	}
	.card1{
		height: 300px;
		width: 300px;
		padding: 20px 35px;
		border-radius: 10px;
		background: #dff9fb;
		margin: 10px;
		overflow: hidden;
		position: relative;
		transition: all 0.3s cubic-bezier(0.02,0.01,0.47,1);
	}
	.card1 .icon{
		font-size: 64px;
		display: block;
		text-align: center;
		color: #7ed6df;
		margin-top: 18px;
	}
	.card1 h1{
		font-family: 'Raleway';
		text-align: center;
		color: #22a6b3;
		font-size: 22px;
	}
	.card1 a{
		text-decoration: none;
	}
	.card1 .content p{
		font-size: 14px;
		color: #535c68;
		line-height: 20px;
		font-family: 'century gothic';
	}
	.card1:hover{
		color:#fff;
		border: none;
		box-shadow: 0 0 10px rgba(0,0,0,0.3);
		animation: rotate 0.7s ease-in-out both;
	}
	.card1:before,
	.card1:after{
		content: "";
		background: #22a6b3;
		width: 180px;
		height: 180px;
		border-radius: 50%;
		opacity: 0;
		position: absolute;
		right: 0;
		bottom: -80px;
		z-index: -1;
		transform: translate(100%,-25%) translate3d(0,0,0);
		transition: all 0.3s cubic-bezier(0.02,0.01,0.47,1);
	}
	.card1:before,
	.card1:after{
		opacity: 0.15;
	}
	.card1:hover:before{
		transform: translate3d(50%,0,0)scale(0.9);
	}
	.card1:hover:after{
		transform: translate3d(50%,0)scale(1.1);
	}
	/*animation*/
	@keyframes rotate{
		0%{transform: rotate(0deg);}
		25%{transform: rotate(3deg);}
		50%{transform: rotate(-3deg);}
		75%{transform: rotate(1deg);}
		100%{transform: rotate(0deg);}
	}
	/*Responsive*/
	@media(max-width: 900px){
		.services-title{
			width: 100%;
		}
		.services-title h1{
		font-size: 20px;

	}.services{
		flex-direction: column;
	}


	.card{
		width: 10%;
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
						</ul>
					</nav>
							<img src="img/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
				</div>	
			</div>
			
	
				<body class="services">
				<h1 class="services-title">Our Services</h1>
			</div>	
			<div class="service-content" align="center" >
			<p class="center"> From our authentic products, our winning strategy is a combination of bicol's cost-efficient, timely fashionable and trendy items, bicol's best foods and beverages and the high-quality crafts value. To ensure our customers satisfaction.</p>
			</div>
			<div class="services1">
				<div class="card1">
					<i class="icon fa fa-money"></i>
					<h1 class="services-title1">Affordability</h1>
					<div class="content">
						<p> Sue and Venir shop is dedicated to give you cost-efficient and affordable home gift.</p>
					</div>
				</div>

				<div class="card1">
					<i class="icon fa fa-truck"></i>
					<h1 class="services-title1">Fast</h1>
					<div class="content">
						<p> We deliver fast and cash on delivery straight to your doorsteps.</p>
					</div>
				</div>

				<div class="card1">
					<i class="icon fa fa-check-circle-o"></i>
					<h1 class="services-title1">Authentic</h1>
					<div class="content">
						<p> Sue and Venir shop offers real and raw products for better consumer satisfaction.</p>
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

	</body>
</html>