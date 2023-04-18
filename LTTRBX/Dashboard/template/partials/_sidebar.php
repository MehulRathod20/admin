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