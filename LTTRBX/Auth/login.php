
<?php
if(isset($_POST['login'])){
	include "config.php";
	
	$email =($_POST['email']);

	$password  =($_POST['password']);

	$sql = "SELECT id,email FROM register WHERE email  ='{$email}' AND password  = '{$password}'";

	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)){

		while($row = mysqli_fetch_assoc($result)){

			session_start();

				$_SESSION["email"] = $row['email'];
				$_SESSION["id"] = $row['id'];

				header("Location:http://localhost/project/LTTRBX/Dashboard/template/index.php");
				
			}
		}else{
			echo '<div class="alert alert-danger">username and password don\'t match</div>';
		}
	}
	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- .. -->
  <!-- jquery Link -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" 
                integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"crossorigin="anonymous"></script>
    <!-- .. -->

	<link rel="stylesheet" type="text/css" href="../assets/css/style_p.css">
</head>
<body class="back-img">


		<div class="container">
		<form method="POST">
		 <h2 class="text-center">Login</h2>

		  <div class="mb-3">
		    <label for="Email1" class="form-label">Email</label>
		    <input type="email" class="form-control" id="email" name="email" value="">
		  </div>
		  <div class="mb-3">
		    <label for="Password1" class="form-label">Password</label>
		    <input type="password" class="form-control" id="Password" name="password" >
		  </div>

		  <button type="submit" class="btn btn-primary" name="login">Login</button>
		  <div class="text-center mt-4 font-weight-light">
                 Create new account <a href="registration.php" class="text-decoration-none">Register</a>
                </div>
            <div class="text-center mt-4 font-weight-light">
				<a href="#" class="text-decoration-none">Term & Condition</a>   
				<a href="#" class="text-decoration-none">Privecy Policy</a>
			</div>

		</form>

</body>
</html>