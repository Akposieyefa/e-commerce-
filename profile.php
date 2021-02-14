<?php include_once('layouts/header.php');?>

<?php 
    $login = Session::get("cuslogin");
    if ($login == false) {
        header("Location:login.php");
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
                $id = Session::get("cmrId");
                $getData = $cmr->getCustomerData($id);
                if ($getData) {
                    while ($result = $getData->fetch_assoc()) {
              ?>

               <div class="table-responsive">
                <table class="table">
                  <tbody>
                      <tr>
                        <td width="20%">Name</td>
                        <td width="5%">:</td>
                        <td><?php echo $result['name']; ?></td>
                      </tr>
                      <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td><?php echo $result['phone']; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $result['email']; ?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td><?php echo $result['address']; ?></td>
                      </tr>
                      <tr>
                        <td>City</td>
                        <td>:</td>
                        <td><?php echo $result['city']; ?></td>
                      </tr>
                      <tr>
                        <td>Zip Code</td>
                        <td>:</td>
                        <td><?php echo $result['zip']; ?></td>
                      </tr>
                      <tr>
                        <td>Country</td>
                        <td>:</td>
                        <td><?php echo $result['country']; ?></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="text-align: center; font-size: 22px;"><a style="color: green;" href="edit-profile.php">Update Details</a></td>
                      </tr>
                  </tbody>
                </table>>
              </div>

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