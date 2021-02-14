    <?php include_once('layouts/header.php');?>
    <!--================Header Menu Area =================-->
    <?php include_once('layouts/nav.php');?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Our Product</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">Products</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-12">
              <div class="main_title">
                <h2><span> Our Products</span></h2>
                <p>Bring called seed first of third give itself now ment</p>
              </div>
            <div class="latest_product_inner">
              <div class="row">

                <?php 
                  $getAllProduct = $pd->getAllProduct();
                  if ($getAllProduct) {
                    while ($result = $getAllProduct->fetch_assoc()) {
                  ?>
                      <div class="col-lg-3 col-md-3">
                        <div class="single-product">
                          <div class="product-img">
                            <img
                              class="card-img"
                              src="pharmacy/<?php echo $result['image']; ?>"
                              alt=""
                            />
                            <div class="p_icon">
                              <a href="single-product.php?proId=<?php echo $result['productId']; ?>">
                                <i class="ti-eye"></i>
                              </a>
                              <a href="#">
                                <i class="ti-heart"></i>
                              </a>
                              <a href="#">
                                <i class="ti-shopping-cart"></i>
                              </a>
                            </div>
                          </div>
                          <div class="product-btm">
                            <a href="single-product.php?proId=<?php echo $result['productId']; ?>" class="d-block">
                              <h4><?php echo $result['productName']; ?></h4>
                            </a>
                            <div class="mt-3">
                              <span class="mr-4">$<?php echo $result['price']; ?></span>
                              <del>$35.00</del>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php
                      }
                    } 
                  ?>    

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->

    <!--================ start footer Area  =================-->
    <?php include_once('layouts/footer.php');?>
    <!--================ End footer Area  =================-->

    <?php include_once('layouts/scripts.php');?>