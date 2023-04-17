<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lttrbx </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/fontawesome/css/all.css">

  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <?php
    include "partials/_navbar.php"
    ?>
    <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.php"> Login </a></li>
              </ul>
            </div>
          </li>
          <!-- Settings -->
          <li class="nav-item nav-category">Setting</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Frontend Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="setting">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/header_info/header_info.php">Header Info</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/header/header_menu.php">Header</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/image/image_upload.php">image</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/slider/slider.php">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/image/image_upload.php">Footer</a></li>
              </ul>
            </div>
          </li>
          <!-- end Setting -->
          <!-- Product -->
          <li class="nav-item nav-category">Product</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
              <i class="fa fa-box-open"></i>
              <span class="menu-title ms-4">Product</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/categories/categories.php">Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/offer/offer.php">Offer</a></li>
              </ul>
            </div>
          </li>
          <!-- end Product -->


        </ul>
      </nav>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  <!-- </div> -->
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <!-- pages js  -->
  <script src="../template/js/pages_js/pages.js"></script>
  <script src="../template/js/pages_js/header_info.js"></script>
  <!--  -->
</body>

</html>