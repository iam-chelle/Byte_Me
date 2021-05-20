	<?php
	session_start();
	include_once "includes/db_conn.php";
	include_once "includes/function.inc.php";

	$searchkey="";
	if (isset($_GET['searchkey'])){
	    $searchkey=htmlentities($_GET['searchkey']);  
		echo $searchkey;
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
			<style>
				.container .search-txt{
					border: 0;
					outline: none;
					color: #7690da;
				}
				.search_wrap{
					width: 400px;
					margin: 1px auto;	
				}
				.search_wrap .search_box{
					position: relative;
					width: 400px;
					height: 30px;
				}

				.search_wrap .search_box .search-txt{
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					padding: 1px 20px;
					font-size: 18px;
				}

				.search_wrap .search_box .btn{
					position: absolute;
					top: 0;
					right: 0;
					width: 60px;
					height: 100%;
					background: #7690da;
					z-index: 2;
					cursor: pointer;
				}
				.search_wrap .search_box .btn:hover{
					background: #708bd2;
				}
				.search_wrap .search_box .btn.btn_common .fa{
					position: absolute;
					top: 50%;
					left: 50%;
					transform: translate(-50%, -50%);
					color: #fff;
					font-size: 20px;
				}
			</style>
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
		</div>
		<div class="search_wrap">
				<form action="search.php" method="GET" >
            		<div class="search_box">	
            			<input class="search-txt" name="searchkey" type="text" placeholder="search">
            			<button class="btn btn_common"><i class="fa fa-search"></i> </button>
           			</div>
        		</form>
        		</div>



				<div class="small-container">
					<div class=" row row-2">
						<h2>All Products</h2>
					</div>
				</div>
				
			
				<div class="row">

<?php
    $categories = getCatList($conn);
    foreach($categories as $key => $val ){ ?>
        <div class="col-5">
		<a href="itemlist.php?category=<?php echo $val['cat_id']; ?>&catname=<?php echo $val['cat_desc']; ?>">
		<img src="img/<?php echo $val['cat_img'];?>" alt="" width="200px" height="200px">
		</a>
		<h4><?php echo $val['cat_desc'];?></h4>
	</div>
        
<?php }  ?>
					

				</div>
					
				<p><br><br></p>
				<p><br><br></p>
				<p><br><br></p>
				
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
