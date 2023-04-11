<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!--css-->
	<link rel="stylesheet" type="text/css" href="assets/plugin/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
	<!--slider-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>
<body>
	<!--info section start-->
	<section class="nav-section">
		<div class="container">
			<div class="row">
				<div class="d-flex justify-content-between">
					<div class="nav-phone">
						<small><i class="fa fa-phone"></i> +9879879877</small>
					</div>
					<div>
						<small>get 50% of on selected item  |<span class="ms-3">shop now</span></small>
					</div>
					<div>
						<small>eng <i class="fa fa-light fa-chevron-down"></i></small>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--navabr section-->
	<section class="navbar-section">
		<div class="container">
			<div class="row">
			<nav class="navbar navbar-expand-lg ">
				<div class="container-fluid">
					<a class="navbar-logo" href="#">
						<img src="https://www.lttrbxtech.com/public/images/media/1647090757Dark_png.png" class="">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarScroll">
						<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
						<li class="nav-item">
							<a class="nav-link" href="#">category</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">deals</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link " href="#">what's new</a>
						</li>
						<li class="nav-item">
							<a class="nav-link">delivery</a>
						</li>
					</ul>
					<form class="d-flex me-5" role="search">
						<input class="form-control" type="search" placeholder="Search" aria-label="Search">
					</form>
					<div class="account me-3">
						<a href="#" class=""><i class="fa fa-user"></i> account</a>
					</div>
					<div class="cart">
						<a href="#" class=""><i class="fa fa-cart-shopping"></i> cart</a>
					</div>
				</div>
			</div>
		</nav>
</div>
	</div>
</section>

<!--main swiper-->
<section class="slider">
	<div class="container-fluid">
		<!-- Swiper -->
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="https://m.media-amazon.com/images/I/61aURrton0L._SX3000_.jpg">
				</div>
				<div class="swiper-slide">
					<img src="https://m.media-amazon.com/images/I/61aURrton0L._SX3000_.jpg">
				</div>
				<div class="swiper-slide">
					<img src="https://m.media-amazon.com/images/I/61aURrton0L._SX3000_.jpg">
				</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</section>


	
 
	<!--js-->
	<script src="assets/plugin/jquery/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="../assets/js/javascript.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  

	<!-- main Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>


</body>
</html>