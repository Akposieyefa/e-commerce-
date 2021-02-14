    <?php include_once('layouts/header.php');?>
<?php 
$login = Session::get("cuslogin");
  if ($login == false) {
      header("Location:login.php");
  }
?>
    <?php include_once('layouts/nav.php');?>

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Order Tracking</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">Order Tracking</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Tracking Box Area =================-->
    <section class="tracking_box_area section_gap">
        <div class="container">
          <div class="col-md-10 offset-md-1">
            <div class="col-md-12">
              <h3 class="text-center">Success</h3>
               <p>
                </p>
            </div>
            <div class="tracking_box_inner col-md-8 offset-md-2">
                <?php 
                    $cmrId = Session::get("cmrId");
                    $amount = $ct->payableAmount($cmrId);
                    if ($amount) {
                        $sum = 0;
                        while ($result = $amount->fetch_assoc()) {
                            $price = $result['price'];
                            $sum = $sum + $price;
                        }
                    }
                ?>
                <p>Total Payable Amount (Including VAT) : $
                  <?php 
                    $vat = $sum * 0.1;
                    $total = $sum + $vat;
                    echo $total;
                  ?>
                </p>      
                <p>Thanks for Purchage. Receive Your Order Successfully. We will contact you ASAP with delivery details. Here is your order details....<a href="order-details.php">Visit Here....</a></p>      
             </div> 
          </div>
        </div>
    </section>
    <!--================End Tracking Box Area =================-->

    <?php include_once('layouts/footer.php');?>
    <!--================ End footer Area  =================-->

    <?php include_once('layouts/scripts.php');?>