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
				<?php
				include "config.php";
				
				$sql="SELECT * FROM logo_image";
				
				$result=mysqli_query($conn,$sql)or die("sql query failed");
				
				if (mysqli_num_rows($result)>0) {

				?>
					<a class="navbar-logo" href="#">
						<?php
						while($row=mysqli_fetch_assoc($result)){
						?>
						<img src="Dashboard/template/pages/upload/<?php echo $row['image'];?>" class="" alt="demo" width="150px" height="50px">
						<?php
						}
						?>
					</a>
					<?php
				}
					?>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarScroll">
					<?php
					
					include "config.php";
					
					$sql="SELECT * FROM header_menu";

					$result=mysqli_query($conn,$sql);

					if(mysqli_num_rows($result) > 0){

					?>
						<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
						<?php
						while($row=mysqli_fetch_assoc($result)){
						?>
						<li class="nav-item">
							<a class="nav-link" href="#"><?php echo $row['menu'];?></a>
						</li>
						<?php
						}
						?>
					</ul>
					<?php
					}
					?>
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
<section class="slider mb-5">
	<div class="container-fluid">
		<!-- Swiper -->
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="https://m.media-amazon.com/images/I/61aURrton0L._SX3000_.jpg" class="" >
				</div>
				<div class="swiper-slide">
					<img src="https://m.media-amazon.com/images/I/71BztIvmlfL._SX3000_.jpg">
				</div>
				<div class="swiper-slide">
					<img src="https://images-eu.ssl-images-amazon.com/images/G/31/Biss_2023/BISS_GW/Spring_tools/3000._CB591433808_.jpg">
				</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</section>

<!--product page start-->
<section class="product my-4" id="">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<h2 class="">Products For You<h2>
				<div>
					<select class="form-select" aria-label="Default select example">
						<option selected><small class="text-muted">sort by:</small>relevance</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
				</div>
				<div class="row mt-2">
					<div class="col-md-12">
						<div class="filter">
							<h5>filter</h5>
							<div class="my-3">
								<select class="form-select" aria-label="Default select example">
									<option selected>category</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<div class="my-3">
								<select class="form-select" aria-label="Default select example">
									<option selected>category</option>
									<option value="1"></option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<img src="https://images.meesho.com/images/products/195488385/5yjty_400.webp" class="img-fluid" alt="...">
							<div class="card-body">
								<p class="d-flex justify-content-end mb-2">+3more</p>
								<h6 class="mb-2 text-muted">Realme 6 cases & covers</h6>
								<h5 class="fw-bold mb-2">212<small class="text-muted"> onwards</small></h5>
								<small class="mb-5">free delivery</small>
								<p class="rating">4.0 <i class="fa-sharp fa-solid fa-star"></i></p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="https://images.meesho.com/images/products/195488385/5yjty_400.webp" class="img-fluid" alt="...">
							<div class="card-body">
								<p class="d-flex justify-content-end mb-2">+3more</p>
								<h6 class="mb-2 text-muted">Realme 6 cases & covers</h6>
								<h5 class="fw-bold mb-2">212<small class="text-muted"> onwards</small></h5>
								<small class="mb-5">free delivery</small>
								<p class="rating">4.0 <i class="fa-sharp fa-solid fa-star"></i></p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="https://images.meesho.com/images/products/195488385/5yjty_400.webp" class="img-fluid" alt="...">
							<div class="card-body">
								<p class="d-flex justify-content-end mb-2">+3more</p>
								<h6 class="mb-2 text-muted">Realme 6 cases & covers</h6>
								<h5 class="fw-bold mb-2">212<small class="text-muted"> onwards</small></h5>
								<small class="mb-5">free delivery</small>
								<p class="rating">4.0 <i class="fa-sharp fa-solid fa-star"></i></p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="https://images.meesho.com/images/products/195488385/5yjty_400.webp" class="img-fluid" alt="...">
							<div class="card-body">
								<p class="d-flex justify-content-end mb-2">+3more</p>
								<h6 class="mb-2 text-muted">Realme 6 cases & covers</h6>
								<h5 class="fw-bold mb-2">212<small class="text-muted"> onwards</small></h5>
								<small class="mb-5">free delivery</small>
								<p class="rating">4.0 <i class="fa-sharp fa-solid fa-star"></i></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

 include "footer.php";
?>