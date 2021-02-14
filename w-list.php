<?php include_once('layouts/header.php');?>
<!--================Header Menu Area =================-->
<?php 
 $cmrId = Session::get('cmrId'); 
  if (isset($_GET['delwlistid'])) {
      $productId = $_GET['delwlistid'];
      $delwlist = $pd->delWlistData($productId, $cmrId);
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
              <h2>Wish List</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">Wish List</a>
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
                  <th scope="col">Product</th>
                  <th scope="col">Image</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <?php 
                $getPd = $pd->getWlistData($cmrId);
                if ($getPd) {
                    $i=0;
                }{

                    while ($result = $getPd->fetch_assoc()) {
                        $i++; ?>
              <tbody>
                  <td><?php echo $i; ?></td>
                  <td>
                    <a href="pharmacy/<?php echo $result['image']; ?>">
                      <img src="pharmacy/<?php echo $result['image']; ?>" alt="" width="60px" height="60px"/>
                    </a>
                  </td>
                  <td><?php echo $result['productName']; ?></td>
                  <td>$<?php echo $result['price']; ?></td>
                  <td>
                    <a class="gray_btn" href="single-product.php?proId=<?php echo $result['productId']; ?>">Buy Now</a> || 
                    <a class="gray_btn" href="?delwlistid=<?php echo $result['productId']; ?>">Remove</a>
                </td>
                
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