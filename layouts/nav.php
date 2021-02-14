<?php  $cmrId = Session::get("cmrId");?>
<!--================Header Menu Area =================-->
<header class="header_area">
  <div class="top_menu">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="float-left">
            <p>Phone: 08100788859</p>
            <p>email: info@medicplaza.com.ng</p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="float-right">
            <ul class="right_side">
              <li>
                <a href="cart.php">
                  My Cart 
                  <?php 
                  // $getData = $ct->checkCartItem();
                  // if ($getData) {
                  //     $sum = Session::get("gTotal");
                  //     $qty = Session::get("qty");
                  //     echo "( $".number_format($sum).".00"." | Qty: $qty )";
                  // } else {
                  //     echo '(Empty)';
                  // }
                  
                ?>
                </a>
              </li>
              <li>
                <a href="order-details.php">
                  track order
                </a>
              </li>
              <li>
                  <?php 
                    // if (isset($_GET['cid'])) {
                    //     $delData = $ct->delCustomerCart();
                    //     $delComp = $pd->delCompareDara($cmrId);
                    //     Session::destroy();
                    // }
                   ?>
                  <?php 
                    $login = Session::get("cuslogin");
                    if ($login == false) {
                        ?>
                        <a href="login.php">Sign In</a>
                    <?php
                    } else {
                            ?>
                      <a href="?cid=<?php Session::get('cmrId'); ?>">Logout</a>
                    <?php
                        }
                     ?>
              
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main_menu">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light w-100">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="index.php">
         <!-- <img src="img/logo.png" alt="" />--><h3>MedicPlaza</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
          <div class="row w-100 mr-0">
            <div class="col-lg-8 pr-0">
              <ul class="nav navbar-nav center_nav pull-right">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php"> Contact Us</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="team.php">Team</a>
                </li>
               
              </ul>
            </div>

            <div class="col-lg-4 pr-0">
              <ul class="nav navbar-nav navbar-right right_nav pull-right">
                <li class="nav-item">
                  <a href="#" class="icons">
                    <i class="ti-search" aria-hidden="true"></i>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="cart.php" class="icons">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </li>
                <?php 
                  //  $checkWlist = $pd->getWlistData($cmrId);
                  //  if ($checkWlist) {
                       
                ?>
                <li class="nav-item">
                  <a href="w-list.php" class="icons">
                    <i class="ti-heart" aria-hidden="true"></i>
                  </a>
                </li>
                   <?php //}
                   ?>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>
<!--================Header Menu Area =================-->
