<?php include_once('layouts/header.php');?>
<?php 
  if (isset($_GET['delpro'])) {
      $delProId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delpro']);
      $delProduct = $ct->delProductByCart($delProId);
  }
?>
<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $cartId = $_POST['cartId'];
      $quantity = $_POST['quantity'];
      $updateCart = $ct->updateCartQuantity($cartId, $quantity);
      if ($quantity <= 0) {
          $delProduct = $ct->delProductByCart($cartId);
      }
  }
?>
 <?php 
  if (!isset($_GET['id'])) {
      echo "<meta http-equiv='refresh' content='0;URL=?id=live'/>";
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
              <h2>Cart</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">Cart</a>
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
          <?php 
            if (isset($updateCart)) {
                echo $updateCart;
            }
            if (isset($delProduct)) {
                echo $delProduct;
            }
          ?>


          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
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
                    <div class="media">
                      <div class="d-flex">
                        <a href="pharmacy/<?php echo $result['image']; ?>">
                          <img
                            src="pharmacy/<?php echo $result['image']; ?>"
                            alt="" width="60px" height="60px"
                          />
                        </a>
                      </div>
                      <div class="media-body">
                        <p><?php echo $result['productName']; ?></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>$<?php echo $result['price'].".00"; ?></h5>
                  </td>
                  <td>
                    <form action="" method="post">
                      <div class="product_count">
                        <input type="hidden" name="cartId" value="<?php echo $result['cartId']; ?>"/>
                        <input
                          type="text"
                          name="quantity"
                          id="sst"
                          maxlength="12"
                          value="1"
                          title="Quantity:"
                          class="input-text qty"
                        />
                        <button
                          onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                          class="increase items-count"
                          type="button"
                        >
                          <i class="lnr lnr-chevron-up"></i>
                        </button>
                        <button
                          onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                          class="reduced items-count"
                          type="button"
                        >
                          <i class="lnr lnr-chevron-down"></i>
                        </button>
                      </div>
                      <input type="submit" class="gray_btn" name="submit" value="Update"/>
                    </form>
                  </td>
                  <td>
                    <h5>$<?php
                          $total =  $result['price'] * $result['quantity'];
                              echo number_format($total).".00"; ?>
                                
                   </h5>
                  </td>
                   <td>
                    <h5>
                      <a onclick="return confirm('Are you sure to delete?');" href="?delpro=<?php echo $result['cartId']; ?>">X</a>
                                
                   </h5>
                  </td>
                </tr>

                  <?php
                    $qty = $qty + $result['quantity'];
                      $sum = $sum + $total;
                      Session::set("qty", $qty); ?>
                  <?php
                      }
                    } 
                  ?>


                <?php 
                  $getData = $ct->checkCartItem();
                  if ($getData) {
                ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Subtotal</h5>
                  </td>
                  <td>
                    <h5>$<?php echo number_format($sum).".00"; ?></h5>
                  </td>
                </tr>
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
                          <a href="#">Total: $<?php echo number_format($sum).".00"; ?></a>
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
                      </ul>
                    </div>
                  </td>
                </tr>
                <?php
                  }  ?>
                <tr class="out_button_area">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="checkout_btn_inner">
                      <a class="gray_btn" href="index.php">Continue Shopping</a>
                      <a class="main_btn" href="payment.php">Proceed to checkout</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->

    <?php include_once('layouts/footer.php');?>
    <!--================ End footer Area  =================-->

    <?php include_once('layouts/scripts.php');