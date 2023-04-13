	<!--footer section-->
	<section class="footer mt-5">
		<div class="container">
			<div class="row">
				<!-- start php code for logo image-->
				<?php
				
				include "config.php";
				
				$sql = "SELECT * FROM footer_image";
				
				$result = mysqli_query($conn, $sql) or die("sql query failed");
				
				if (mysqli_num_rows($result) > 0) {
					
					?>
				<div class="col-md-12 mb-3 text-center">
					<?php
					while($row=mysqli_fetch_assoc($result)){
					?>
					<img src="Dashboard/template/pages/upload/<?php echo $row['image']; ?>" class="" width="150px" height="50px">
					<?php
					}
					?>
				</div>
				<?php
				}
				?>
			</div>
			<div class="row">
				<div class="col-md-1">
					<h6>category</h6>
				</div>
				<div class="col-md-1">
					<h6>category</h6>
				</div>
				<div class="col-md-1">
					<h6>category</h6>
				</div>
				<div class="col-md-1">
					<h6>category</h6>
				</div>
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
      autoHeight: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
			autoplay: {
        delay:3000,
        disableOnInteraction: false,
      },
    });
  </script>


</body>
</html>