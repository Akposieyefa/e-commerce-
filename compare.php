<?php include_once('layouts/header.php');?>
<!--================Header Menu Area =================-->
<?php 
  $login = Session::get("cuslogin");
  if ($login == false) {
      header("Location:login.php");
  }
 ?>
    <?php include_once('layouts/nav.php');?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Product Compare</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">Compare</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Cart Area =================-->
    <section class="cart_area">
      <div class="container">
        <div class="cart_inner">
          


          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <?php
                  $cmrId = Session::get("cmrId");
                  $getPd = $pd->getCompareData($cmrId);
                  if ($getPd) {
                      $i=0;
                      while ($result = $getPd->fetch_assoc()) {
                          $i++; 
              ?>
              <tbody>
                  <td><?php echo $i; ?></td>
                  <td><img src="admin/<?php echo $result['image']; ?>" alt=""/></td>
                  <td><?php echo $result['productName']; ?></td>
                  <td>$<?php echo $result['price']; ?></td>
                  <td><a href="details.php?proId=<?php echo $result['productId']; ?>">View</a></td>
                
              </tbody>
             <?php
                  }
              } ?>
            </table>
          </div>
          <div class="checkout_btn_inner">
            <a class="gray_btn" href="product.php">Continue Shopping</a>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->

    <?php include_once('layouts/footer.php');?>
    <!--================ End footer Area  =================-->

    <?php include_once('layouts/scripts.php');