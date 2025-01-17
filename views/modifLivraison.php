<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
	<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../styles/checkout.css">
	<link rel="stylesheet" type="text/css" href="../styles/checkout_responsive.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<form class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#">omega G.</a></div>
							<nav class="main_nav">
								<ul>
									<li class="hassubs active">
										<a href="index.html">Home</a>
										<ul>
											<li><a href="categories.html">Categories</a></li>
											<li><a href="product.html">Product</a></li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Check out</a></li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="categories.html">Categories</a>
										<ul>
											<li><a href="categories.html">Category</a></li>
											<li><a href="categories.html">Category</a></li>
											<li><a href="categories.html">Category</a></li>
											<li><a href="categories.html">Category</a></li>
											<li><a href="categories.html">Category</a></li>
										</ul>
									</li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Offers</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<div class="shopping_cart">
									<a href="cart.html">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											<g>
												<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
											</g>
										</svg>
										<div>Cart <span>(0)</span></div>
									</a>
								</div>
								<div class="search">
									<div class="search_icon">
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;"
											 xml:space="preserve">
										<g>
											<path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												"/>
										</g>
									</svg>
									</div>
								</div>
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="#">
								<input type="text" class="search_input" placeholder="Search" required="required">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="header_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">

				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="index.html">Home<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
					<li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" ></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" ></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" ></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" ></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" ></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(../images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li>Checkout</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->

	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
			</div>

				<!-- Order Info -->

				<div>
                        <?PHP
                        include"../core/LivraisonC.php";
                        if(isset($_GET['id']))
                        {
                            $LivraisonCvar= new LivraisonC();
                            $result=$LivraisonCvar->recupererLivraison($_GET['id']);
                            foreach($result as $row)
                            {
                                $first_name=$row['first_name'];
                                $last_name=$row['last_name'];
                                $adresse=$row['adresse'];
                                $zipcode=$row['zipcode'];
                                $state=$row['state'];
                                $city=$row['city'];
                                $phone_no=$row['phone_no'];
                                $email=$row['email'];
                                $id=$row['id'];
                        ?>
                        <form method="POST">
                            	<div class="checkout">
                                <div class="container">
                                <div>
                                <div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<tr>
											<td><input style="color:grey;" value=" First Name"></td>
											<td ><input type="text" name="first_name" id="checkout_name" class ="checkout_input"  required="required" value="<?PHP echo $first_name ?>"></td>
										</tr>
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
											<tr>
												<td> <input style="color:grey;" value="Last Name"></td>
												<td><input type="text" id="checkout_last_name" class="checkout_input" name="last_name" required="required" value="<?PHP echo $last_name ?>"></td>
											</tr>
									</div>
								</div>
								<br></br>
								<div>
									<!-- Address -->
									<tr>
										<td><input style="color:grey;" value="Address"></td>
										<td><input  type="text" id="checkout_address" class="checkout_input" name="adresse" required="required" value="<?PHP echo $adresse ?>"></td>
									</tr>
								</div>
								<div>
									<!-- Zipcode -->
									<tr>
										<td><input style="color:grey;" value="Zipcode"></td>
										<td><input type="number" id="checkout_zipcode" class="checkout_input" name="zipcode" required="required" value="<?PHP echo $zipcode ?>" ></td>
									</tr>
								</div>
								<div>
									<!-- City / Town -->
									<tr>
										<td><input style="color:grey;" value="State"></td>
										<!-- <td><input type="text" id="checkout_last_name" class="checkout_input" name="last_name" required="required" value="<?PHP echo $state ?>"></td> -->
										<select name="state" id="checkout_city" class="dropdown_item_select checkout_input" require="required">
											<option></option>
											<option>Ariana</option>
											<option>Béja</option>
											<option>Ben Arous</option>
											<option>Bizerte</option>
											<option>Gabès</option>
											<option>Gafsa</option>
											<option>Jendouba</option>
											<option>Kairouan</option>
											<option>Kasserine</option>
											<option>Kebili</option>
											<option>Kef</option>
											<option>Mahdia</option>
											<option>Manouba</option>
											<option>Medenine</option>
											<option>Monastir</option>
											<option>Nabeul</option>
											<option>Sfax</option>
											<option>Sidi Bouzid</option>
											<option>Siliana</option>
											<option>Sousse</option>
											<option>Tataouine</option>
											<option>Tozeur</option>
											<option>Tunis</option>
											<option>Zaghouan</option>
										</select>
									</tr>
								</div>
								<div>

									<!-- Address -->
									<tr>
										<td><input style="color:grey;" value="City"></td>
										<td><input type="text" id="Province" class="checkout_input" name="city" required="required" value="<?PHP echo $city ?>"></td>

									</tr>
                                    <br></br>
								</div>
								<div>
									<!-- Phone no -->
									<tr>
										<td><input style="color:grey;" value="Phone Number"></td>
										<td><input type="number" id="checkout_phone" class="checkout_input" name="phone_no" required="required" value="<?PHP echo $phone_no ?>"></td>
									</tr>
								</div>
								<div>
									<!-- Email -->
									<tr>
										<td><input style="color:grey;" value="Email Address"></td>
										<td><input type="text" id="checkout_email" class="checkout_input" name="email" required="required" value="<?PHP echo $email ?>"></td>
									</tr>
							   </div>

                                <tr class="button">
                                     <br></br>
                                     <td ><input class="button" type="submit" name="modifier" value="Edit"></td>
                                     <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
                                </tr>

                                <div class="button"><a href="affichage.php">Return</a></div>
                            </div>
                            </div>
                            </div>
                            </div>
                        </form>

                        <?PHP
                        }
                        }
                            if(isset($_POST['modifier']))
                            {
                                $Livraisonvar=new Livraison($_POST['first_name'],$_POST['last_name'],$_POST['adresse'],$_POST['zipcode'],$_POST['state'],$_POST['city'],$_POST['phone_no'],$_POST['email'],$_POST['id']);
                                $LivraisonCvar->modifierLivraison($Livraisonvar,$_POST['id_ini']);
                                echo $_POST['id_ini'];
                                echo "<script type='text/javascript'>document.location.replace('affichage.php');</script>";
                            }
                        ?>
				</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../styles/bootstrap4/popper.js"></script>
	<script src="../styles/bootstrap4/bootstrap.min.js"></script>
	<script src="../plugins/greensock/TweenMax.min.js"></script>
	<script src="../plugins/greensock/TimelineMax.min.js"></script>
	<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="../plugins/greensock/animation.gsap.min.js"></script>
	<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="../plugins/easing/easing.js"></script>
	<script src="../plugins/parallax-js-master/parallax.min.js"></script>
	<script src="../js/checkout.js"></script>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
