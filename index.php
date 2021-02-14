<?php include_once('layouts/header.php')?>

  <!--================Header Menu Area =================-->
  <?php include_once('layouts/nav.php'); ?>
  <!--================END Header Menu Area =================-->
  <!--================Home Banner Area =================-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="img/banner/banner-1.jpg"
            alt="First slide"
          />
          <div class="container">
            <div class="carousel-caption">
              <h1>MedicPlaza </h1>
              <p class="lead">
                Automated Vechile Rental System
              </p>
              <p>
              <a class="btn btn-md btn-success" href="#" role="button">Read More</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/banner/banner-2.jpg" alt="Second slide" />
          <div class="container">
            <div class="carousel-caption">
                <h1>More About Our System</h1>
                <p class="lead">
                  The Nigerian Army Institute of Technology and Environmental Studies
                  was extablished under the Nigerina Army in other to promote civil and military relationship
                  the instituion has all it takes too promote Technology
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
                </p>
              </div>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/banner/banner-3.jpg" alt="Third slide" />
            <div class="carousel-caption">
              <h1>More About Our System</h1>
              <p class="lead">
                The Nigerian Army Institute of Technology and Environmental Studies
                was extablished under the Nigerina Army in other to promote civil and military relationship
                the instituion has all it takes too promote Technology
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
              </p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>



  <!--================End Home Banner Area =================-->

  <!-- Start feature Area -->
  <section class="feature-area section_gap_bottom_custom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-money"></i>
              <h3>Money back gurantee</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-truck"></i>
              <h3>Free Delivery</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-support"></i>
              <h3>Alway support</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-blockchain"></i>
              <h3>Secure payment</h3>
            </a>
            <p>Shall open divide a one</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature Area -->

  <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Featured Medical product</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">

        <?php 
          $getFpd = $pd->getFeaturedProduct();
          if ($getFpd) {
            while ($result = $getFpd->fetch_assoc()) {
        ?>
        
           <div class="col-lg-3 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img class="img-fluid w-100" src="pharmacy/<?php echo $result['image']; ?>" alt="" />
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
                <a href="#" class="d-block">
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
  </section>
  <!--================ End Feature Product Area =================-->

  <!--================ Offer Area =================-->
  <section class="offer_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="offset-lg-4 col-lg-6 text-center">
          <div class="offer_content">
            <h3 class="text-uppercase mb-40">All Medical Collections</h3>
            <h2 class="text-uppercase">50% off</h2>
            <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
            <p>Access your health product anytime anywhere</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Offer Area =================-->

  <!--================ New Product Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Registerd Pharmacy</span></h2>
            <p>View of all pharmacy registed with medicstore</p>
          </div>
        </div>
      </div>

      <div class="row">
        
        <div class="col-lg-12 mt-5 mt-lg-0">
          <div class="row">
            <?php 
              $getPh = $ph->getAllPharmacy();
              if ($getPh) {
                while ($result = $getPh->fetch_assoc()) {
            ?>

            <div class="col-lg-3 col-md-3">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="admin/<?php echo $result['logo']; ?>" alt="" />
                  <div class="p_icon">
                    <a href="#">
                    </a>
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4><?php echo $result['pname']; ?></h4>
                  </a>
                  <div class="mt-3">
                    <small><?php echo $result['phone']; ?></small>
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
  </section>
  <!--================ End New Product Area =================-->

  <!--================ Inspired Product Area =================-->
  <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Inspired Medical products</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">

          <?php 
              $getNpd = $pd->getNewProduct();
              if ($getNpd) {
                  while ($result = $getNpd->fetch_assoc()) {
          ?>

             <div class="col-lg-3 col-md-6">
                <div class="single-product">
                  <div class="product-img">
                    <img class="img-fluid w-100" src="pharmacy/<?php echo $result['image']; ?>" alt="" />
                    <div class="p_icon">

                      <a href="single-product.php?proId=<?php echo $result['productId']; ?>">
                        <i class="ti-eye"></i>
                      </a>
                      <a href="#">
                        <i class="ti-heart"></i>

                      </a>
                      <a href="single-product.php?proId=<?php echo $result['productId']; ?>">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-btm">
                    <a href="#" class="d-block">
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
  </section>
  <!--================ End Inspired Product Area =================-->

  <!--================ Start Blog Area =================-->
  <section class="blog-area section-gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>latest blog</span></h2>
            <p>Bring called seed first of third give itself now ment</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b1.jpg" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">By Admin</a>
                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Ford clever bed stops your sleeping
                  partner hogging the whole</h4>
              </a>
              <div class="text-wrap">
                <p>
                  Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                  Forth.
                </p>
              </div>
              <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b2.jpg" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">By Admin</a>
                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Ford clever bed stops your sleeping
                  partner hogging the whole</h4>
              </a>
              <div class="text-wrap">
                <p>
                  Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                  Forth.
                </p>
              </div>
              <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b3.jpg" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">By Admin</a>
                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Ford clever bed stops your sleeping
                  partner hogging the whole</h4>
              </a>
              <div class="text-wrap">
                <p>
                  Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                  Forth.
                </p>
              </div>
              <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Blog Area =================-->

  <!--================ start footer Area  =================-->
  <?php include_once('layouts/footer.php'); ?>
  <!--================ end footer Area  =================-->
  <?php include_once('layouts/scripts.php');?>
