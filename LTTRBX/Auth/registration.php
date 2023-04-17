<?php
include "../header.php";
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow">
        <div class="card-body">
          <div class="register-head mb-5">
            <h3 class="text-center">Registration</h3>
          </div>
          <form action="savedata.php" method="POST">
            <div class="row">
              <div class="col-md-7 mb-3">
                <label for="First Name" class="form-label">First Name *</label>
                <input type="text" class="form-control" name="fname" id="" aria-describedby="Fname"
                  placeholder="Enter Your Name">
              </div>
              <div class="col-md-6 mb-3">
                <label for="Last Name" class="form-label">Last Name *</label>
                <input type="text" class="form-control" name="lname" id="" aria-describedby="Lname"
                  placeholder="Enter Your LastName">
              </div>
              <div class="col-md-12 mb-3">
                <label for="Email" class="form-label">Email *</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="Lname"
                  Placeholder="Enter Your Email">
              </div>
              <div class="col-md-6 mb-3">
                <label for="Email" class="form-label">Phone*</label>
                <input type="" class="form-control" name="mobile" id="phone" aria-describedby="Lname"
                  Placeholder="Enter Your Number">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Gender*</label>
                <div class="row mt-2">
                  <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="gender" value="male" id="">
                    <label class="form-check-label" for="">Male
                    </label>
                  </div>
                  <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="gender" value="female" id="">
                    <label class="form-check-label" for="">Female
                    </label>
                  </div>
                  <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="gender" value="other" id="">
                    <label class="form-check-label" for="">Other
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="First Name" class="form-label">Password *</label>
                <input type="text" class="form-control" name="password" id="" aria-describedby="Fname"
                  placeholder="Enter Your password">
              </div>
              <div class="col-md-6 mb-3">
                <label for="Last Name" class="form-label">Confirm Password *</label>
                <input type="text" class="form-control" name="cpassword" id="" aria-describedby="Lname"
                  placeholder="Enter Your confirm Password">
              </div>
              <div class="col-md-12 mb-3">
                <input type="submit" name="submit" class="btn btn-primary">
              </div>
              <div class="col-md-12  text-center">
                <span href="#" class="">Already have a account <a href="login.php" class="text-decoration-none">login</a></soan>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

