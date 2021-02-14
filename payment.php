<?php include_once('layouts/header.php');?>
<?php 
    $login = Session::get("cuslogin");
    if ($login == false) {
       header("Location:login.php");
   }
?><!--================Header Menu Area =================-->
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
              <h2>Payment Option</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">Payment Option</a>
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
             
            <div class="col-12">
              <h2 class="contact-title text-center">Choose Payment Option</h2>
            </div>
            <div class="card col-md-10 offset-md-1">
              <div class="card-body">
                <a class="main_btn" href="paymentoffline.php">Cash On Delivery</a> | 
                <a class="main_btn" href="paymentonline.php">Online Payment</a>
              </div>
            </div>
           
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

    <!--================ start footer Area  =================-->
    <?php include_once('layouts/footer.php'); ?>
    <!--================ End footer Area  =================-->

    <?php include_once('layouts/scripts.php');?>