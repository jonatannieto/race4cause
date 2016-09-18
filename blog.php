<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

	<!-- Title -->
	<title>Mountain Bike - Extreme Sport Club Template</title>

	<!-- Meta Data -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Mountain Bike Club Template">
	<meta name="author" content="CodePassenger">

	<!-- Favicon -->
	<link rel="icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- Stylesheet -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">

	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Responsive Stylesheet -->
	<link rel="stylesheet" href="assets/css/responsive.css">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- JavaScripts -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>

</head>
<body>

<?php
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_tTyL4fH2P7x2dRYHXjm66tBe");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create a charge: this will charge the user's card
try {
$charge = \Stripe\Charge::create(array(
"amount" => 2000, // Amount in cents
"currency" => "eur",
"source" => $token,
"description" => "Example charge"
));
} catch(\Stripe\Error\Card $e) {
// The card has been declined
}
?>

	<!-- HEADER -->
	<header id="HOME" class="header-one">
		<div class="">
			<!-- NAVIGATION -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- TEMPLATE LOGO -->
						<div class="navbar-brand">
							<a href="index.html"><img src="images/logo.png" alt="img"></a>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="my-navbar-collapse">
						<ul id="nav" class="nav navbar-nav navbar-right">
							<li>
								<a href="index.html#HOME">HOME</a>
							</li>
							<li><a href="index.html#ABOUT">ABOUT</a></li>
							<li><a href="index.html#GALLERY">GALLERY</a></li>
							<li><a href="index.html#SERVICES">SERVICES</a></li>
							<li class="has-sub-menu">
								<a href="#">BLOG</a>
								<ul class="sub-menu">
									<li><a href="blog.html">BLOG LIST</a></li>
									<li class="has-sub-menu"><a href="#">SINGLE</a>
										<ul class="sub-menu">
											<li><a href="single-right-sidebar.html">RIGHT SIDEBAR</a></li>
											<li><a href="single-left-sidebar.html">LEFT SIDEBAR</a></li>
											<li><a href="single-full-width.html">FULL WIDTH</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#">SPECIALS</a></li>
							<li><a href="#">SPONSORSHIP</a></li>
							<li class="last"><a href="#FOOTER">CONTACT</a></li>
						</ul>
					</div>
					
				</div>
			</nav>
		</div>
	</header>
	<div class="sub-header">
		<div class="container">
			<div class="breadcrumb">
				<h2>BLOG</h2>
				<span>
					<a href="#">Home / </a>
					Blog
				</span>
			</div>
		</div>
	</div>
	<div class="section-padding">
		<!-- MAIN WRAPPER -->
		<div class="content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<!-- MAIN CONTENT -->
						<div class="main-content">
							<!-- SINGLE POST -->
							<article class="post-single style-two">
								<div class="blog-thumb ps-rel">
									<img src="images/blog/1.jpg" alt="img" class="img-responsive">
									<div class="overlay-common"></div>
									<a class="icon-positiond" href="single-right-sidebar.html"><img src="images/misc/9.png" alt="img"></a> 
								</div>
								<div class="blog-content">
									<h3 class="post-title">
										<a href="#">
											Shoot the trails was awesome last night.
										</a>
									</h3>
									<div class="post-meta-data">
										<span class="post-author"><a href="#">ADMIN</a></span>
										<span class="post-time">5 MAY 2016</span>
										<span class="post-catagory last"><a href="#">Mountain</a></span>
										
									</div>
									<p class="mrg-b-20">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies egestas diam, at dictum ligula tristique sed. Nulla facilisi. Nullam molestie dolor orci, bibendum aliquet mi elementum a. Maecenas pulvinar nibh eu leo vestibulum, vel ornare eros dictum.
									</p>
									<h6 class="more-btn"><a href="#">READ MORE</a></h6>
								</div><!-- /.blog-content -->
							</article>
							<article class="post-single style-two">
								<div class="blog-thumb ps-rel">
									<iframe frameborder="0" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/214722395&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
								</div>
								<div class="blog-content">
									<h3 class="post-title">
										<a href="#">
											Shoot the trails was awesome last night.
										</a>
									</h3>
									<div class="post-meta-data">
										<span class="post-author"><a href="#">ADMIN</a></span>
										<span class="post-time">5 MAY 2016</span>
										<span class="post-catagory last"><a href="#">Mountain</a></span>
										
									</div>
									<p class="mrg-b-20">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies egestas diam, at dictum ligula tristique sed. Nulla facilisi. Nullam molestie dolor orci, bibendum aliquet mi elementum a. Maecenas pulvinar nibh eu leo vestibulum, vel ornare eros dictum.
									</p>
									<h6 class="more-btn"><a href="#">READ MORE</a></h6>
									
								</div><!-- /.blog-content -->
							</article>
							<article class="post-single style-two">
								<div class="blog-thumb ps-rel">
									<img src="images/blog/3.jpg" alt="img" class="img-responsive">
									<div class="overlay-common"></div>
									<a class="icon-positiond" href="single-right-sidebar.html"><img src="images/misc/9.png" alt="img"></a> 
								</div>
								<div class="blog-content">
									<h3 class="post-title">
										<a href="#">
											Shoot the trails was awesome last night.
										</a>
									</h3>
									<div class="post-meta-data">
										<span class="post-author"><a href="#">ADMIN</a></span>
										<span class="post-time">5 MAY 2016</span>
										<span class="post-catagory last"><a href="#">Mountain</a></span>
										
									</div>
									<p class="mrg-b-20">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies egestas diam, at dictum ligula tristique sed. Nulla facilisi. Nullam molestie dolor orci, bibendum aliquet mi elementum a. Maecenas pulvinar nibh eu leo vestibulum, vel ornare eros dictum.
									</p>
									<h6 class="more-btn"><a href="#">READ MORE</a></h6>
									
								</div><!-- /.blog-content -->
							</article>
							<article class="post-single style-two">
								<div class="blog-thumb ps-rel">
									<img src="images/blog/4.jpg" alt="img" class="img-responsive">
									<div class="overlay-common"></div>
									<a class="icon-positiond" href="single-right-sidebar.html"><img src="images/misc/9.png" alt="img"></a> 
								</div>
								<div class="blog-content">
									<h3 class="post-title">
										<a href="#">
											Shoot the trails was awesome last night.
										</a>
									</h3>
									<div class="post-meta-data">
										<span class="post-author"><a href="#">ADMIN</a></span>
										<span class="post-time">5 MAY 2016</span>
										<span class="post-catagory last"><a href="#">Mountain</a></span>
										
									</div>
									<p class="mrg-b-20">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies egestas diam, at dictum ligula tristique sed. Nulla facilisi. Nullam molestie dolor orci, bibendum aliquet mi elementum a. Maecenas pulvinar nibh eu leo vestibulum, vel ornare eros dictum.
									</p>
									<h6 class="more-btn"><a href="#">READ MORE</a></h6>
									
								</div><!-- /.blog-content -->
							</article>
							<!-- PAGINATION -->
							<div class="text-center pagination-area ps-rel">
								<nav class="navigation pagination">
									<div class="nav-links">
										<a class="prev page-numbers" href="#"><span>P</span>REV</a>
										<span class="page-numbers current">1</span>
										<a class="page-numbers" href="#">2</a>
										<a class="page-numbers" href="#">3</a>
										<a class="page-numbers" href="#">4</a>
										<a class="page-numbers" href="#">5</a>
										<a class="page-numbers" href="#">6</a>
										<a class="next page-numbers" href="#">NEX<span>T</span></a>
									</div>
								</nav>
							</div>
						</div>
					</div>
					<!-- SIDEBAR -->
					<div class="col-md-offset-1 col-md-3 col-sm-12">
						<div class="sidebar">
							<!-- WIDGET SEARCH -->
							<div class="widget custom_widget_search">
								<div class="widget-title">
									<h5>SEARCH</h5>
								</div>
								<form action="#" method="get" class="search-form">
									<input type="text" required name="s" placeholder="Type & Hit Enter">
									<input type="submit" value=" " class="search-btn">
								</form> 
							</div>
							<!-- WIDGET CATEGORY -->
							<div class="widget widget_categories">
								<div class="widget-title">
									<h5>Categories</h5>
								</div>
								<ul>
									<li class="cat-item">
										<a href="#">Mountain</a> 
										<span>5</span>
										<div class="clearfix"></div>
									</li>
									<li class="cat-item">
										<a href="#">Riding</a> 
										<span>7</span>
										<div class="clearfix"></div>
									</li>
									<li class="cat-item">
										<a href="#">Jump</a> 
										<span>8</span>
										<div class="clearfix"></div>
									</li>
									<li class="cat-item">
										<a href="#">Road </a> 
										<span>12</span>
										<div class="clearfix"></div>
									</li>
									<li class="cat-item">
										<a href="#">Tips</a> 
										<span>1235</span>
										<div class="clearfix"></div>
									</li>
								</ul>
							</div>
							<!-- LATEST TWEETS -->
							<div class="widget widget_latest_tweets">
								<div class="widget-title">
									<h5>LATEST TWEETS</h5>
								</div>
								<a class="twitter-timeline" href="https://twitter.com/themeton" data-tweet-limit="2">Tweets by Themeton</a> <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
							</div>
							<!-- WIDGET RECENT POST -->
							<div class="widget widget_recent_post">
								<div class="widget-title">
									<h5>RECENT POST</h5>
								</div>
								<ul>
									<li>
										<div class="widget-img">
											<a href="#"><img src="images/blog/thumb/1.jpg" alt="image" /></a>
										</div>
										<div class="clearfix"></div>
										<div class="widget-content">
											<h5><a href="#">Standart image post</a></h5>
											<span>5 May 2016</span>
										</div>
										
									</li>
									<li>
										<div class="widget-img">
											<a href="#"><img src="images/blog/thumb/2.jpg" alt="image" /></a>
										</div>
										<div class="widget-content">
											<h5><a href="#">Standart image post</a></h5>
											<span>5 May 2016</span>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<div class="widget-img">
											<a href="#"><img src="images/blog/thumb/3.jpg" alt="image" /></a>
										</div>
										<div class="widget-content">
											<h5><a href="#">Standart image post</a></h5>
											<span>5 May 2016</span>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</div>
							<!-- WIDGET FACEBOOK FOLLOW FEED -->
							<div class="widget widget_popular_tag last">
								<div class="widget-title">
									<h5>POPULAR TAGS</h5>
									<ul>
										<li>
											<a href="#">Wordpress</a>
										</li>
										<li>
											<a href="#">ENVATO</a>
										</li>
										<li>
											<a href="#">BLOG</a>
										</li>
										<li>
											<a href="#">BLOG</a>
										</li>
										<li>
											<a href="#">ENVATO</a>
										</li>
										<li>
											<a href="#">Wordpress</a>
										</li>
									</ul>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer  id="FOOTER" class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="row">
					<div class="col-md-2 col-sm-2">
						<div class="footer-widget">
							<div class="widget-title footer-wdget-title">
								<h5>SPECIALIZED</h5>
							</div>
							<ul>
								<li><a href="#">S-works</a></li>
								<li><a href="#">Rider Gear</a></li>
								<li><a href="#">Bike Equipment</a></li>
								<li><a href="#">Riders</a></li>
								<li><a href="#">Innovation</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2">
						<div class="footer-widget">
							<div class="widget-title footer-wdget-title">
								<h5>COMPANY</h5>
							</div>
							<ul>
								<li><a href="#">Latest News</a></li>
								<li><a href="#">Newsletter</a></li>
								<li><a href="#">Careers</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-2">
						<div class="footer-widget footer-wdget-title">
							<div class="widget-title">
								<h5>SUPPORT</h5>
							</div>
							<ul>
								<li><a href="#">Bike Registration</a></li>
								<li><a href="#">Bike Archive</a></li>
								<li><a href="#">Manuals</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2">
						<div class="footer-widget footer-wdget-title">
							<div class="widget-title">
								<h5>SHOP</h5>
							</div>
							<ul>
								<li><a href="#">Dealer Locator</a></li>
								<li><a href="#">Contack us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-middle">
				<div class="row">
					<div class="col-md-6">
						<form class="subscribe-form">
							<input type="email" name="emal" placeholder="E-mail address">
							<input type="submit" class="btn-common contact-btn" value="SUBSCRIBE">
						</form>
					</div>
					<div class="col-md-offset-3 col-md-3">
						<div class="footer-social">
							<h6>SOCIAL NETWORKS</h6>
							<ul>
								<li><a class="facebook" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
								<li><a class="dribble" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-sub-middle">
				<div class="row">
					<div class="col-md-3">
						<div class="address-text">
							<i class="fa fa-map-marker" aria-hidden="true"></i> 
							<p>
								Sydney road, Billboard Street 2219-11C. Apple Town, Your country.
							</p>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="address-text">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<p>
								(305)533-1122
							</p>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-2">
						<div class="address-text">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
							<p>
								info@Example.com
							</p>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-3">
						<div class="footer-logo">
							<a href="#"><img src="images/logo.png" alt="img"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="copyright">
							<p>&copy; 2016. All right reserved. Mountain bike made with by <a href="#">CodePassenger</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- JavaScripts -->
	<script src="assets/js/jquery-1.11.2.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/matchMedia.js"></script>
	<script src="assets/js/SmoothScroll.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/isotope.pkgd.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.nav.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- Custom JS -->
	<script src="assets/js/custom.js"></script>

</body>
</html>
