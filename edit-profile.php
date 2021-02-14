<?php include_once('layouts/header.php');?>

<?php 
  $login = Session::get("cuslogin");
    if ($login == false) {
        header("Location:login.php");
    }
?>
<?php 
  $cmrId = Session::get("cmrId");
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
      $updateCmr = $cmr->customerUpdate($_POST, $cmrId);
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
         
        <div class="col-md-7 mb-4 mb-lg-0">
            <div class="col-12">
              <h2 class="contact-title text-center">Create Account</h2>
            </div>
              <?php 
                if (isset($customerReg)) {
                    echo $customerReg;
                }
              ?>
              <?php 
                  $id = Session::get("cmrId");
                  $getData = $cmr->getCustomerData($id);
                  if ($getData) {
                      while ($result = $getData->fetch_assoc()) {
              ?>

              <?php if (isset($updateCmr)) {
                    echo "<tr><td colspan='3' style='text-align: center;''>".$updateCmr."</td></tr>";
              } ?>
            <form class="form-contact" action="" method="post" autocomplete="off">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="fname"  type="text" value="<?php echo $result['name']; ?>"  autocomplete="off">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="lname" type="text" placeholder="Enter last name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="email" type="email" value="<?php echo $result['email']; ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="phone" type="
                    text"  value="<?php echo $result['phone']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group mt-lg-3">
                <button type="submit" class="main_btn" name="users_submit">UpdateAccount</button>
              </div>
            </form>
            <?php
                }
            } ?>  
        </div>



      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

    <!--================ start footer Area  =================-->
    <?php include_once('layouts/footer.php'); ?>
    <!--================ End footer Area  =================-->

    <?php include_once('layouts/scripts.php');?>