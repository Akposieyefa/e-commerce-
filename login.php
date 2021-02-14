<?php include_once('layouts/header.php');?>
<?php 
  $login = $session::get("cuslogin");
  if ($login == true) {
      header("Location:order.php");
  }
?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login_submit'])) {
        $custLogin = $cmr->customerLogin($_POST);
    }
?>
    <!--================Header Menu Area =================-->
      <?php include_once('layouts/nav.php'); ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>SignIn</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">SignIn</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
      <div class="row">
          <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
                $customerReg = $cmr->customerRegistration($_POST);
            }
          ?>
        <div class="col-md-7 mb-4 mb-lg-0">
            <div class="col-12">
              <h2 class="contact-title text-center">Create Account</h2>
            </div>
              <?php 
                if (isset($customerReg)) {
                    echo $customerReg;
                }
              ?>
            <form class="form-contact" action="" method="post" autocomplete="off">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="fname"  type="text" placeholder="Enter first name" autocomplete="off">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="lname" type="text" placeholder="Enter last name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="email" type="email" placeholder="Email Address">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="phone" type="
                    text" placeholder="Phone Number">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="password" type="password" placeholder="Enter a strong password">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="cpassword" type="password" placeholder="Enter confirm password">
                  </div>
                </div>
              </div>
              <div class="form-group mt-lg-3">
                <button type="submit" class="main_btn" name="register">Create Account</button>
              </div>
            </form>
        </div>


        <!---LOGIN PANEL-->

        <div class="col-md-5 mb-4 mb-lg-0">
            <div class="col-12">
              <h2 class="contact-title text-center">Sign In</h2>
            </div>
            <?php 
                if (isset($custLogin)) {
                    echo $custLogin;
                }
            ?>
          <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <input class="form-control" name="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="password" type="password" placeholder="Enter your password">
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="main_btn" name="login_submit">Sign In</button>
               <a href="reset-password.php" > &nbsp &nbsp &nbsp &nbsp Forget Password</button>
            </div>
            <div class="form-group mt-lg-3">
             
            </div>
          </form>


        </div>
      </div>
    </div>
  </section>
	  <!-- ================ contact section end ================= -->
    <!--================ start footer Area  =================-->
    <?php include_once('layouts/footer.php'); ?>
    <!--================ End footer Area  =================-->

    <?php include_once('layouts/scripts.php');?>