<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php if($this->uri->segment(1)!='home'){ echo $controller_name.' - '; } echo $function_name; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?php echo base_url() ?>">
        <link rel="icon" href="assets/frontend_assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
		
		
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="assets/frontend_assets/css/bootstrap.min.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="assets/frontend_assets/css/font-awesome.min.css">		
		<!-- animate.css -->
        <link rel="stylesheet" href="assets/frontend_assets/css/animate.css">			
		<!--normalizecss -->
        <link rel="stylesheet" href="assets/frontend_assets/css/normalize.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="assets/frontend_assets/css/owl.carousel.css">
		<!-- owl.theme css -->
        <link rel="stylesheet" href="assets/frontend_assets/css/owl.theme.css">
		<!-- owl.transitions css -->
        <link rel="stylesheet" href="assets/frontend_assets/css/owl.transitions.css">
		<!-- jquery-ui.min.css -->
        <link rel="stylesheet" href="assets/frontend_assets/css/jquery-ui.min.css">		
		<!-- main css -->
        <link rel="stylesheet" href="assets/frontend_assets/css/main.css">		
        <link rel="stylesheet" href="assets/frontend_assets/css/meanmenu.min.css">		
		<!-- nivo-slider -->
        <link rel="stylesheet" href="assets/frontend_assets/css/default.css">			
        <link rel="stylesheet" href="assets/frontend_assets/css/nivo-slider.css">		
		<!-- style css -->
		<link rel="stylesheet" href="assets/frontend_assets/style.css">
		<link rel="stylesheet" href="assets/frontend_assets/css/responsive.css">
		<!-- modernizr css -->
        <script src="assets/frontend_assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

  	<body>
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="header-left">
						<div class="header-account hidden-xs">
						<?php if($this->session->userdata('validated')) { ?>
							<h3>My Account</h3>
							<ul>
								<li><a href="dashboard">Hello, <?php echo $this->session->userdata('nama_depan');?></a></li>
								<li><a href="wishlist">My Wishlist</a></li>
								<li><a href="cart">My Cart</a></li>
								<li><a href="checkout">Checkout</a></li>
								<li><a href="login/logout">Logout</a></li>
							</ul>
						<?php }else{ ?>
							<h3><a href="login">Login</a></h3>
						<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="header-last">
						<div class="header-right hidden-xs">
							<a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
							<span>0</span>
						</div>
						<div class="my-cart">
							<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
							<span>2</span>
							<a class="cart" href="#">My Cart <span>$0.00</span></a>
							<ul>
								<li>
									<h3>2 items in the shopping bag.</h3>
								</li>
								<li>
									<div class="cart-img">
										<a href="#"><img src="assets/frontend_assets/img/topsell/2.jpg" alt="" /></a>
									</div>
									<div class="cart-info">
										<h5><a href="#">Simple Product With Thier Price</a></h5>
										<span><strong>1</strong> x $ 510.00 Details</span>
									</div>
									<div class="del-icon">
										<i class="fa fa-trash-o" aria-hidden="true"></i>
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
								</li>
								<li>
									<div class="cart-img">
										<a href="#"><img src="assets/frontend_assets/img/topsell/11.jpg" alt="" /></a>
									</div>
									<div class="cart-info">
										<h5><a href="#">Simple Product</a></h5>
										<span><strong>1</strong> x $ 170.00</span>
									</div>
									<div class="del-icon">
										<i class="fa fa-trash-o" aria-hidden="true"></i>
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
								</li>
								<li>
									<div class="cart-total">
										<h4>Cart Subtotal: <span>$680.00</span></h4>
									</div>
									<div class="checkout">
										<a href="cart">view cart</a>
										<a class="check" href="checkout">Checkout</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="header-search hidden-xs hidden-sm">
						<form action="#">
							<input type="text" placeholder="" value="Search entire store here" 
							onblur="if (this.value == '') {this.value = 'Search entire store here';}" 
							onfocus="if (this.value == 'Search entire store here') {this.value = '';}"/>
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header-bottom-area -->
	<div class="header-bottom-area hidden-xs hidden-sm" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-2">
					<div class="logo">
						<a href="#"><img src="assets/frontend_assets/img/logo/logo.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-9 col-md-10">
					<div class="menu-list">
						<nav>
							<ul>
								<li><a class="drop" href="home">home</a>
									<ul class="megamenu4">
										<li><a href="home">Home-1</a></li>
										<li><a href="index2">Home-2</a></li>
										<li><a href="index3">Home-3</a></li>
										<li><a href="index4">Home-4</a></li>
										<li><a href="index5">Home-5</a></li>
										<li><a href="index6">Home-6</a></li>
										<li><a href="index7">Home-7</a></li>
										
									</ul>
								</li>
								<li><a class="drop" href="#">women's</a>
									<div class="megamenu">
										<span>
											<a class="mega-title" href="#">Dresses</a>
											<a href="#">Casual Dresses</a>
											<a href="#">Evening</a>
											<a href="#">Designer</a>
											<a href="#">Party</a>
										</span>
										<span>
											<a class="mega-title" href="#">Jackets</a>
											<a href="#">Coats</a>
											<a href="#">Jackets</a>
											<a href="#">Lather Jackets</a>
											<a href="#">Blazers</a>
										</span>
										<span>
											<a class="mega-title" href="#">Jewellery</a>
											<a href="#">Bracelets</a>
											<a href="#">Necklaces & Pandants</a>
											<a href="#">Pins 7 and Brooches</a>
											<a href="#">Pandants</a>
										</span>	
										<span>
											<a class="mega-title" href="#">Shoes</a>
											<a href="#">Flate Shoes</a>
											<a href="#">Flate sandels</a>
											<a href="#">Boots</a>
											<a href="#">Heels</a>
										</span>
										<div class="megamenu-bottom">
											<div class="fashion-left">
												<h3>NEW FASHION</h3>
												<a href="#">Dress</a>
												<a href="#">Shoes</a>
												<a href="#">Jackets</a>
												<a href="#">Jewellery</a>
											</div>
											<div class="fashion-right">
												<a href="#">Add</a>
												<a href="#">More</a>
												<a href="#">Custom</a>
												<a href="#">Links</a>
											</div>
										</div>
									</div>
								</li>
								<li><a class="drop" href="fashion">fashion</a><span class="new">new</span>
									<div class="megamenu2">
										<div class="featured">
											<a class="first" href="#">FEATURED CATEGORIES :</a>
											<a class="second" href="#">Evening Tops</a>
											<a class="third" href="#">Dresses</a>
											<a href="#">Shirt & Blouses</a>
										</div>
										<div class="fashion">
											<div class="fashion-bottom">
												<img src="assets/frontend_assets/img/menu/1.jpg" alt="" />
											</div>
											<h4>New Fashion Design</h4>
											<p>This is a custom block. You can add any images or links here.</p>
										</div>
										<div class="megamenu2-left">
											<span>
												<a class="mega-title" href="#">Tops</a>
												<a href="#">Casual Dresses</a>
												<a href="#">Evening</a>
												<a href="#">Designer</a>
												<a href="#">Party</a>
											</span>
											<span class="second">
												<a class="mega-title" href="#">Bags <span>SALE</span></a>
												<a href="#">Coats</a>
												<a href="#">Jackets</a>
												<a href="#">Lather Jackets</a>
												<a href="#">Blazers</a>
											</span>
											<span>
												<a class="mega-title" href="#">Lingerie</a>
												<a href="#">Bracelets</a>
												<a href="#">Necklaces & Pandants</a>
												<a href="#">Pins 7 and Brooches</a>
												<a href="#">Pandants</a>
											</span>	
											<span>
												<a class="mega-title" href="#">Swimwear</a>
												<a href="#">Flate Shoes</a>
												<a href="#">Flate sandels</a>
												<a href="#">Boots</a>
												<a href="#">Heels</a>
											</span>
											<span>
												<a class="mega-title" href="#">Dresses</a>
												<a href="#">Flate Shoes</a>
												<a href="#">Flate sandels</a>
												<a href="#">Boots</a>
												<a href="#">Heels</a>
											</span>
	
											<span>
												<a class="mega-title" href="#">Shoes</a>
												<a href="#">Flate Shoes</a>
												<a href="#">Flate sandels</a>
												<a href="#">Boots</a>
												<a href="#">Heels</a>
											</span>
										</div>
									</div>
								</li>
								<li><a href="shop">shop</a></li>
								<li><a class="drop" href="#">electtronics</a>
									<div class="megamenu3">
										<div class="megamenu3-left">
											<span>
												<a class="mega-title" href="#">Smartphones</a>
												<a href="#">Apple</a>
												<a class="little-padding" href="#">iPhone 6</a>
												<a class="little-padding" href="#">iPhone 6+</a>
												<a href="#">Samsung</a>
											</span>	
											<span>
												<a class="mega-title" href="#">Accessories</a>
												<a href="#">Headsets</a>
												<a href="#">Blutooth Wireless</a>
												<a href="#">Batteries</a>
												<a href="#">Memory Cards</a>
											</span>
											<span>
												<a class="mega-title" href="#">Cameras</a>
												<a href="#">Digital Cameras</a>
												<a href="#">Camcorders</a>
												<a href="#">Lenses</a>
												<a href="#">Filters</a>
											</span>	
											<span>
												<a class="mega-title" href="#">Computers</a>
												<a href="#">Laptops</a>
												<a href="#">Hard Drives</a>
												<a href="#">Monitors</a>
												<a href="#">Processors</a>
											</span>
										</div>
										<div class="megamenu3-right">
											<img src="assets/frontend_assets/img/menu/2.jpg" alt="" />
										</div>
									</div>
								</li>
								<li><a class="drop" href="#">jewellery</a>
									<ul class="megamenu4">
										<li class="brace"><a href="#">Bracelets</a>
										 	<ul>
												<li><a href="#">girls</a></li>
												<li><a href="#">baby</a></li>
											</ul>
										</li>	
										<li class="necklace"><a href="#">Necklaces & pandant</a>
											<span>Hot</span>
										</li>
										<li><a href="#">Pins & Brooches</a></li>
										<li><a href="#">Pandants</a></li>
									</ul>
								</li>
								<li><a class="drop" href="#">Pages</a>
									<ul class="megamenu4">
										<li><a href="about">About Us Page</a></li>
										<li class="brace"><a href="#">Shop</a>
											<ul>
												<li><a href="shop">Shop Page</a></li>
												<li><a href="fashion">Fashion Page</a></li>
												<li><a href="product-details">Product Details Page</a></li>
												<li><a href="cart">Cart Page</a></li>
												<li><a href="checkout">Checkout Page</a></li>
												<li><a href="wishlist">Wishlist Page</a></li>
												<li><a href="dashboard">My Account Page</a></li>
												<li><a href="login">Login Page</a></li>
												<li><a href="order-return">Order Return Page</a></li>
											</ul>
										</li>
										<li class="brace"><a href="#">Blog</a>
											<ul>
												<li><a href="blog">Blog Page</a></li>
												<li><a href="blog-details">Blog Details Page</a></li>
											</ul>
										</li>
										<li><a href="contact">Contact Page</a></li>
										<li><a href="faq">Faq Page</a></li>
										<li><a href="404">404 Page</a></li>
									</ul>
								</li>
								<li><a href="contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header-bottom-area end-->
	<!-- mobile-menu-area start-->
	<div class="mobile-menu-area visible-xs visible-sm">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="mobile-menu">
						<nav id="mobile-menu-active">
							<ul>
								<li><a class="drop" href="#">home</a>
									<ul>
										<li><a href="index">Home-1</a></li>
										<li><a href="index2">Home-2</a></li>
										<li><a href="index3">Home-3</a></li>
										<li><a href="index4">Home-4</a></li>
										<li><a href="index5">Home-5</a></li>
										<li><a href="index6">Home-6</a></li>
										<li><a href="index7">Home-7</a></li>
									</ul>
								</li>
								<li><a class="drop" href="#">women's</a>
									<ul>
										<li><a class="mega-title" href="#">Dresses</a>
											<ul>
												<li><a href="#">Casual Dresses</a></li>
												<li><a href="#">Evening</a></li>
												<li><a href="#">Designer</a></li>
												<li><a href="#">Party</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Jackets</a>
											<ul>
												<li><a href="#">Coats</a></li>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Lather Jackets</a></li>
												<li><a href="#">Blazers</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Jewellery</a>
											<ul>
												<li><a href="#">Bracelets</a></li>
												<li><a href="#">Necklaces & Pandants</a></li>
												<li><a href="#">Pins 7 and Brooches</a></li>
												<li><a href="#">Pandants</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Shoes</a>
											<ul>
												<li><a href="#">Flate Shoes</a></li>
												<li><a href="#">Flate sandels</a></li>
												<li><a href="#">Boots</a></li>
												<li><a href="#">Heels</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">NEW FASHION</a>
											<ul>
												<li><a href="#">Dress</a></li>
												<li><a href="#">Shoes</a></li>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Jewellery</a></li>
												<li><a href="#">Add</a></li>
												<li><a href="#">More</a></li>
												<li><a href="#">Custom</a></li>
												<li><a href="#">Links</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a class="drop" href="fashion">fashion</a>
									 <ul>
										<li><a href="#">FEATURED CATEGORIES :</a>
											<ul>
												<li><a href="#">Evening Tops</a></li>
												<li><a href="#">Dresses</a></li>
												<li><a href="#">Shirt & Blouses</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Tops</a>
											<ul>
												<li><a href="#">Casual Dresses</a></li>
												<li><a href="#">Evening</a></li>
												<li><a href="#">Designer</a></li>
												<li><a href="#">Party</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Bags</a>
											<ul>
												<li><a href="#">Coats</a></li>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Lather Jackets</a></li>
												<li><a href="#">Blazers</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Lingerie</a>
											<ul>
												<li><a href="#">Bracelets</a></li>
												<li><a href="#">Necklaces & Pandants</a></li>
												<li><a href="#">Pins 7 and Brooches</a></li>
												<li><a href="#">Pandants</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Swimwear</a>
											<ul>
												<li><a href="#">Flate Shoes</a></li>
												<li><a href="#">Flate sandels</a></li>
												<li><a href="#">Boots</a></li>
												<li><a href="#">Heels</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Shoes</a>
											<ul>
												<li><a href="#">Flate Shoes</a></li>
												<li><a href="#">Flate sandels</a></li>
												<li><a href="#">Boots</a></li>
												<li><a href="#">Heels</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Shoes</a>
											<ul>
												<li><a href="#">Flate Shoes</a></li>
												<li><a href="#">Flate sandels</a></li>
												<li><a href="#">Boots</a></li>
												<li><a href="#">Heels</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="shop">shop</a></li>
								<li><a class="drop" href="#">electtronics</a>
									<ul>
										<li><a class="mega-title" href="#">Smartphones</a>
											<ul>
												<li><a href="#">Apple</a></li>
												<li><a href="#">iPhone 6</a></li>
												<li><a href="#">iPhone 6</a></li>
												<li><a href="#">Samsung</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Accessories</a>
											<ul>
												<li><a href="#">Headsets</a></li>
												<li><a href="#">Blutooth Wireless</a></li>
												<li><a href="#">Batteries</a></li>
												<li><a href="#">Memory Cards</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Cameras</a>
											<ul>
												<li><a href="#">Digital Cameras</a></li>
												<li><a href="#">Camcorders</a></li>
												<li><a href="#">Lenses</a></li>
												<li><a href="#">Filters</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Computers</a>
											<ul>
												<li><a href="#">Laptops</a></li>
												<li><a href="#">Hard Drives</a></li>
												<li><a href="#">Monitors</a></li>
												<li><a href="#">Processors</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a class="drop" href="#">jewellery</a>
									<ul>
										<li><a href="#">Bracelets</a>
											<ul>
												<li><a href="#">girls</a></li>
												<li><a href="#">baby</a></li>
											</ul>
										</li>
										<li><a href="#">Necklaces & pandant</a>
											<ul>
												<li><a href="#">Pins & Brooches</a></li>
												<li><a href="#">Pandants</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a class="drop" href="#">Pages</a>
									<ul>
										<li><a href="about">About Us Page</a></li>
										<li><a href="#">Shop</a>
										 	<ul>
												<li><a href="shop">Shop Page</a></li>
												<li><a href="fashion">Fashion Page</a></li>
												<li><a href="product-details">Product Details Page</a></li>
												<li><a href="cart">Cart Page</a></li>
												<li><a href="checkout">Checkout Page</a></li>
												<li><a href="wishlist">Wishlist Page</a></li>
												<li><a href="dashboard">My Account Page</a></li>
												<li><a href="order-return">Order Return Page</a></li>
											</ul>
										</li>
										<li><a href="#">Blog</a>
										 	<ul>
												<li><a href="blog">Blog Page</a></li>
												<li><a href="blog-details">Blog Details Page</a></li>
											</ul>
										</li>
										<li><a href="contact">Contact Page</a></li>
										<li><a href="404">404 Page</a></li>
									</ul>
								</li>
								<li><a href="contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- slider-area start -->
	<?php echo $page; ?>
<!-- footer -->
<footer>
	<div class="footer-top-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
					<div class="footer-about">
						<h4>About Us</h4>
					</div>
					<div class="footer-logo">
						<a href="index"><img src="assets/frontend_assets/img/logo/logo.png" alt="" /></a>
					</div>
					<div class="footer-p">
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed doet eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Uts enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo.
						</p>
					</div>
					<div class="social-link">
						<ul>
							<li><a data-toggle="tooltip" title="facebook" class="f" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a data-toggle="tooltip" title="google plus" class="g" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a data-toggle="tooltip" title="twitter" class="t" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a data-toggle="tooltip" title="pinterest" class="p" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a data-toggle="tooltip" title="instagram" class="i" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-xs-12 col-sm-12 col-md-5 rmbt-30">
					<div class="footer-about">
						<h4>Latest Tweet</h4>
					</div>
					<div class="peer-content">
						<div class="t-icon">
							<span><i class="fa fa-twitter" aria-hidden="true"></i></span>
						</div>	
						<div class="t-details">
							<p><a href="#"><strong>@ Peerforest</strong></a> we focus on quality magento themes development.
								Our main strength, to develop pixel perfect magento themes with most advanced functionalities.
							</p>
							<h5>14 hour ago</h5>
						</div>
					</div>
					<div class="peer-content level">
						<div class="t-icon">
							<span><i class="fa fa-twitter" aria-hidden="true"></i></span>
						</div>	
						<div class="t-details">
							<p><a href="#"><strong>@ Peerforest</strong></a> we focus on quality magento themes development.
								Our main strength, to develop pixel perfect magento themes with most advanced functionalities.
							</p>
							<h5>14 hour ago</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 col-xs-12 col-md-3">
					<div class="footer-about">
						<h4>Our Newsletter</h4>
					</div>
					<div class="letter">
						<h4>Consectetur adipisicing elit se do eiusm od tempor incididunt ut labore et dolore magnas aliqua.</h4>
						<div class="footer-search">
							<form action="#">
								<input type="text" placeholder="Enter your email address"/>	
								<div class="button">
									<button>subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer-middle -->
	<div class="footer-middle">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-xs-12 col-sm-5 col-md-4">
					<div class="info">
						<h4>Contact-Info</h4>
					</div>
					<div class="contact-info">
						<div class="info-first">
							<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						</div>
						<div class="info-d">
							<h5>868 Bechole Road, Victory Lorem </h5>
							<h5>Ispuse, New York</h5>
						</div>
					</div>
					<div class="contact-info">
						<div class="info-first">
							<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						</div>
						<div class="info-d">
							<h5>Phone: (084) 888 - 6789</h5>
							<h5>Fax: (084) 888 - 6789</h5>
						</div>
					</div>
					<div class="contact-info">
						<div class="info-first">
							<span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
						</div>
						<div class="info-d">
							<h5>Email: <a href="#">bootexperts@gmail.com</a> </h5>
							<h5>Website: <a href="#">www.bootexperts.com</a></h5>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-xs-12 col-sm-7 col-md-8">
					<div class="whole-info">
						<div class="info">
							<h4>Information</h4>
						</div>
						<div class="information">
							<ul>
								<li><a href="about">About us</a></li>
								<li><a href="#">Customer Service</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms $ Conditions</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div>	
					<div class="whole-info">
						<div class="info">
							<h4>My Account</h4>
						</div>
						<div class="information">
							<ul>
								<li><a href="dashboard">My account</a></li>
								<li><a href="login">Login</a></li>
								<li><a href="cart">MyCart</a></li>
								<li><a href="wishlist">Wishlist</a></li>
								<li><a href="checkout">Checkout</a></li>
							</ul>
						</div>
					</div>	
					<div class="whole-info hidden-xs hidden-sm">
						<div class="info">
							<h4>Help</h4>
						</div>
						<div class="information">
							<ul>
								<li><a href="#">Orders & Returns</a></li>
								<li><a href="#">Search Terms</a></li>
								<li><a href="#">Advance Search</a></li>
								<li><a href="faq">Faq</a></li>
								<li><a href="#">Site Map</a></li>
							</ul>
						</div>
					</div>	
				</div>
				<div class="col-lg-3 col-xs-12 hidden-sm hidden-md">
					<div class="info">
						<h4>Openning Time</h4>
					</div>
					<div class="info-left">
						<div class="information size">
							<ul>
								<li><a href="#">Monday to Friday</a></li>
								<li><a href="#">Saturday</a></li>
								<li><a href="#">Sunday</a></li>
							</ul>
						</div>
						<div class="info-time">
							<ul>
								<li>8.00 - 20.00</li>
								<li>9.00 - 21.00</li>
								<li>13.00 - 22.00</li>
							</ul>
						</div>
					</div>	
					<div class="card">
						<ul>
							<li><a href="#"><img src="assets/frontend_assets/img/card/visa.png" alt="" /></a></li>
							<li><a href="#"><img src="assets/frontend_assets/img/card/master_card.png" alt="" /></a></li>
							<li><a href="#"><img src="assets/frontend_assets/img/card/discover.png" alt="" /></a></li>
							<li><a href="#"><img src="assets/frontend_assets/img/card/american.png" alt="" /></a></li>
							<li><a href="#"><img src="assets/frontend_assets/img/card/paypal.png" alt="" /></a></li>
						</ul>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<!-- footer-last -->
	<div class="footer-last">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-xs-12 col-sm-12">
					<div class="footer-end">
						<h4>Created With <span><i class="fa fa-heart" aria-hidden="true"></i></span> By <a href="http://bootexperts.com/" target="_blank"> BootExperts</a> &copy; 2016 All rights reserved.</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>	
	

		
		<!-- vendor jquery-1.12.4.min.js -->
		<script src="assets/frontend_assets/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap.min.js -->
		<script src="assets/frontend_assets/js/bootstrap.min.js"></script>
		<!-- wow.min.js -->
		<script src="assets/frontend_assets/js/wow.min.js"></script>
		<!-- owl.carousel.min.js -->
		<script src="assets/frontend_assets/js/owl.carousel.min.js"></script>
		<!-- jquery.nivo.slider.pack.js -->
		<script src="assets/frontend_assets/js/jquery.nivo.slider.pack.js"></script>
		<!-- jquery-ui.min.js -->
		<script src="assets/frontend_assets/js/jquery-ui.min.js"></script>	
		<!-- jquery-meanmenujs -->
		<script src="assets/frontend_assets/js/jquery.meanmenu.js"></script>
		<!-- elevatezoom js -->
		<script src="assets/frontend_assets/js/jquery.elevateZoom-3.0.8.min.js"></script>
		<!-- waypoints js -->
		<script src="assets/frontend_assets/js/jquery.waypoints.min.js"></script>		
		<!-- jquery.scrollUp.js -->
		<script src="assets/frontend_assets/js/jquery.scrollUp.js"></script>
		<!-- plugins.js -->
		<script src="assets/frontend_assets/js/plugins.js"></script>
		<!-- main.js -->
		<script src="assets/frontend_assets/js/main.js"></script>	
		
	</body>	
</html>	