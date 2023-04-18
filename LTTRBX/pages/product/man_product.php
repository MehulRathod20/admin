<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product</title>

	<!--css-->
	<link rel="stylesheet" type="text/css" href="../../assets/plugin/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../../assets/fontawesome/css/all.css">
	<!--slider-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>
	<!--info section start-->

	<!--php code for header info-->
	<?php
	include "config.php";

	$sql = "SELECT * FROM header_info";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)) {

		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<section class="nav-section">
				<div class="container">
					<div class="row">
						<div class="d-flex justify-content-between">
							<div class="nav-phone">
								<small><i class="fa fa-phone"></i>
									<?php echo $row['phone']; ?>
								</small>
							</div>
							<div>
								<small>
									<?php echo $row['header_text']; ?><span class="ms-3">| <span class="ms-3">
											<?php echo $row['header_text_2']; ?>
										</span>
								</small>
							</div>
							<div>
								<small>eng <i class="fa fa-light fa-chevron-down"></i></small>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
		}
	}
	?>

	<!--navabr section-->
	<section class="navbar-section">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg ">
					<div class="container-fluid">

						<!-- start php code for logo image-->
						<?php

						include "config.php";

						$sql = "SELECT * FROM logo_image";

						$result = mysqli_query($conn, $sql) or die("sql query failed");

						if (mysqli_num_rows($result) > 0) {
							?>

							<a class="navbar-logo" href="../../index.php">

								<!-- start php code for logo image-->
								<?php

								while ($row = mysqli_fetch_assoc($result)) {

									?>
									<img src="../../Dashboard/template/pages/upload/<?php echo $row['image']; ?>" class="" alt="demo"
										width="150px" height="50px">

									<?php
								}
								?>
							</a>
							<?php
						}
						?>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
							aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarScroll">

							<!--start php code for headermenu-->

							<?php

							include "config.php";

							$sql = "SELECT * FROM header_menu";

							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {

								?>

								<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

									<!--start php code for headermenu-->

									<?php

									while ($row = mysqli_fetch_assoc($result)) {
										?>

										<li class="nav-item">
											<a class="nav-link" href="#">
												<?php echo $row['menu']; ?>
											</a>
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

	<!--product page start-->
	<section class="product my-4" id="">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<h3>filter</h3>
					<div class="row mt-2">
						<div class="col-md-12">
							<div class="filter">
								<div class="checkbox" id="check">
									<ul>
										<li><input type="radio" id="gender" name="gender">
											<label for="" class="fs-6">Man</label>
										</li>
										<li><input type="radio" id="gender" name="gender">
											<label for="" class="fs-6">Female</label>
										</li>
										<li><input type="radio" id="gender" name="gender">
											<label for="" class="fs-6">Kinds</label>
										</li>
									</ul>
								</div>
							</div>
							<div class="filter">
								<h5>Categories</h5>
								<div class="checkbox" id="check">
									<ul>
										<li><input type="checkbox" id="check">
											<label for="" class="fs-6">shirt</label>
										</li>
										<li><input type="checkbox" id="check">
											<label for="" class="fs-6">shirt</label>
										</li>
										<li><input type="checkbox" id="check">
											<label for="" class="fs-6">shirt</label>
										</li>
									</ul>
								</div>
							</div>
							<div class="filter">
								<h5>Brand</h5>
								<div class="checkbox" id="check">
									<ul>
										<li><input type="checkbox" id="check">
											<label for="" class="fs-6">Brand 1</label>
										</li>
										<li><input type="checkbox" id="check">
											<label for="" class="fs-6">Brand 2</label>
										</li>
										<li><input type="checkbox" id="check">
											<label for="" class="fs-6">Brand 3</label>
										</li>
									</ul>
								</div>
							</div>
							<div class="filter">
								<h5>Price</h5>
								<div class="checkbox" id="check">
									<ul>
										<li><input type="checkbox" id="check">
											<label for="" class="fs-6"> Rs. 79 to Rs. 10935</label>
										</li>
										<li><input type="checkbox" id="check">
											<label for="" class="fs-6"> Rs. 79 to Rs. 10935</label>
										</li>
										<li><input type="checkbox" id="check">
											<label for="" class="fs-6"> Rs. 79 to Rs. 10935</label>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				include "config.php";

				$sql = "SELECT * FROM product";

				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {

					?>
					<div class="col-md-9">
						<div class="row">
							<!--php code start-->
							<?php
							while ($row = mysqli_fetch_assoc($result)) {
								?>
								<div class="col-md-3">
									<div class="card">
										<div class="card-body">
											<img src="../../Dashboard/template/pages/upload/<?php echo $row['image'];?>" class="img-fluid" alt="demo">
											<!-- <p class="d-flex justify-content-end mb-2">+3more</p> -->
											<h6 class="mb-2 text-muted">
												<?php echo $row['name'] ?>
											</h6>
											<small class="text-muted">
												<?php echo $row['price'] ?>
												<h5 class="fw-bold mb-2">
													<?php echo $row['sprice'] ?> 
												</h5>
											</small>
											<small class="mb-5">free delivery</small>
											<p class="rating">4.0 <i class="fa-sharp fa-solid fa-star"></i></p>
										</div>
									</div>
								</div>
								<?php
							}

							?>
						</div>
					</div>
					<?php
				}

				?>
			</div>
		</div>
	</section>

	<!--footer section-->
	<section class="footer mt-5">
		<div class="container">
			<div class="row">
				<!-- start php code for logo image-->
				<?php

				include "../../config.php";

				$sql = "SELECT * FROM footer_image";

				$result = mysqli_query($conn, $sql) or die("sql query failed");

				if (mysqli_num_rows($result) > 0) {

					?>
					<div class="col-md-12 mb-3 text-center">
						<?php
						while ($row = mysqli_fetch_assoc($result)) {
							?>
							<img src="../../Dashboard/template/pages/upload/<?php echo $row['image']; ?>" class="" width="150px"
								height="50px">
							<?php
						}
						?>
					</div>
					<?php
				}
				?>
			</div>
			<div class="row">
				<?phP
				include "../../config.php";

				$sql = "SELECT * FROM header_menu";

				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						?>
						<div class="col-md-1">
							<a href="#" class="text-dark text-decoration-none">
								<h6>
									<?php echo $row['menu']; ?>
								</h6>
							</a>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
	</section>
	<!--js-->
	<script src="../../assets/plugin/jquery/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
		integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
		crossorigin="anonymous"></script>
	<script src="../../assets/js/javascript.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>

</html>