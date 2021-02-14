<?php include_once('layouts/header.php');?>
<?php 
  $login = Session::get("cuslogin");
  if ($login == false) {
      header("Location:login.php");
  }
?>
<?php 
  if (isset($_GET['orderid']) && $_GET['orderid'] == 'order') {
      $cmrId = Session::get("cmrId");
      $insertOrder = $ct->orderProduct($cmrId);
      
      $delData = $ct->delCustomerCart();
      header("Location:success.php");
  }
?>
<!--================Header Menu Area =================-->
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
              <h2>Payment-Offline</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">Payment</a>
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
                  <th scope="col">No. </th>
                  <th scope="col">Product </th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>

                <?php 
                  $getPro = $ct->getCartProduct();
                  if ($getPro) {
                      $i=0;
                      $sum = 0;
                      $qty = 0;
                      while ($result = $getPro->fetch_assoc()) {
                      $i++;
                ?>
              <tbody>
                <tr>
                  <td>
                    <h5><?php echo $i; ?></h5>
                  </td>
                  <td>
                    <div class="media">
                      <div class="media-body">
                        <p><?php echo $result['productName']; ?></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>$<?php echo $result['price'].".00"; ?></h5>
                  </td>
                  <td>
                    $<?php echo $result['quantity'].".00"; ?>
                  </td>
                  <td>
                    $ <?php
                        $total =  $result['price'] * $result['quantity'];
                        echo number_format($total).".00"; 
                      ?>
                  </td>
                   <td>
                   
                  </td>
                 
                </tr>
                 <?php
                    $qty = $qty + $result['quantity'];
                       $sum = $sum + $total; ?>
                  <?php
                      }
                    } 
                  ?>
                  <br><br>
                 <tr class="shipping_area">
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Break Down</h5>
                  </td>
                  <td>
                    <div class="shipping_box">
                      <ul class="list">
                        <li>
                          <a href="#">Sub Total: $<?php echo number_format($sum).".00"; ?></a>
                        </li>
                        <li>
                          <a href="#">Vat 
                              <?php 
                                $vat = $sum * 0.1;
                            echo "$".number_format($vat).".00"; ?>
                          </a>
                        </li>
                        <li>
                          <a href="#">Grand Total: $<?php 
                                $gTotal = $sum+$vat;
                            Session::set("gTotal", $gTotal);
                            echo number_format($gTotal).".00"; ?></a>
                        </li>
                        <li>
                          <a href="#">Quentity: <?php echo $qty; ?></a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>><br/><br/>

            <h4 class="text-center">Your Profile Details</h4>
             <table class="table">

                <?php 
                    $id = Session::get("cmrId");
                    $getData = $cmr->getCustomerData($id);
                    if ($getData) {
                        while ($result = $getData->fetch_assoc()) {
                ?>
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
              <?php
                  }
              } ?>
            </table>
          </div>
              <div class="ordernow">
                  <a class="gray_btn" href="?orderid=order">Order</a>
              </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->

    <?php include_once('layouts/footer.php');?>
    <!--================ End footer Area  =================-->

    <?php include_once('layouts/scripts.php');