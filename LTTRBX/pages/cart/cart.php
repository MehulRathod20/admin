<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<!--css-->
	<link rel="stylesheet" type="text/css" href="assets/plugin/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
	<!--slider-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>
	
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

							<a class="navbar-logo" href="#">

								<!-- start php code for logo image-->
								<?php

								while ($row = mysqli_fetch_assoc($result)) {

									?>
									<img src="Dashboard/template/pages/upload/<?php echo $row['image']; ?>" class="" alt="logo" width="150px"
										height="50px">

									<?php
								}
								?>
							</a>
							<?php
						}
						?>
						
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
								<a href="pages/cart/cart.php" class=""><i class="fa fa-cart-shopping"></i> cart</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</section>

	<!--main swiper-->
	<section class="slider mb-4">
		<div class="container-fluid">
			<!-- Swiper -->

			<!--php code for slider-->
			<?php

			include "config.php";

			$sql = "SELECT * FROM slider";

			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result)) {

				?>
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">

						<!--php code for slider-->
						<?php

						while ($row = mysqli_fetch_assoc($result)) {
							?>
							<div class="swiper-slide">
								<img src="Dashboard/template/pages/upload/<?php echo $row['image']; ?>" class="" alt="demo">
							</div>
							<?php
						}
						?>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
					<?php
			}
			?>
			</div>
	</section>

	<!--category  start-->
	<?php
	include "config.php";

	$sql = "SELECT * FROM header_menu";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {

		?>
		<div class="container mt-5 mb-5">
			<div class="row">
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
					?>
					<div class="col-md-6 col-lg-3">
						<div class="card mb-3">
							<h4>
								<?php echo $row['menu']; ?>
							</h4>
							<a href="pages/product/man_product.php">
								<img src="Dashboard/template/pages/upload/<?php echo $row['image']; ?>" class="img-top" alt="category_img">
							</a>
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
	<!--offer start-->
	<section class="category mb-3">
		<div class="container-fluid">
			<div class="row">
				<!--php code for offer-->
				<?php
				include "config.php";

				$sql = "SELECT * FROM offer";

				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {

					while ($row = mysqli_fetch_assoc($result)) {

						?>
						<div class="col-md-4">
							<div class="card mb-2" height="100px">
								<img src="Dashboard/template/pages/upload/<?php echo $row['image']; ?>" class="#" alt="demo" width="auto"
									height="230px">
							</div>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
	</section>


	


	<?php
	include "footer.php";
	?>