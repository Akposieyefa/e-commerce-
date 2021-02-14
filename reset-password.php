<?php include_once('layouts/header.php');?>
<?php 
  $login = Session::get("cuslogin");
  if ($login == true) {
      header("Location:order.php");
  }
?>
<?php 

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
      $custLogin = $cmr->customerLogin($_POST);
  }
?> <!--================Header Menu Area =================-->
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
              <h2>Password Recovery</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">Password Recovery</a>
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
        <div class="col-md-6 mb-4 mb-lg-0 offset-md-3">
             <?php 
                if (isset($custLogin)) {
                    echo $custLogin;
                }
             ?>
            <div class="col-12">
              <h2 class="contact-title text-center">Recover Password</h2>
            </div>
            <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input class="form-control" name="email" type="email" placeholder="Enter email address">
                  </div>
                </div>
              </div>
              <div class="form-group mt-lg-3">
                <button type="submit" class="main_btn" name="login_submit">Password recovery link</button>
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