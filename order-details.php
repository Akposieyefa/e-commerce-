<?php include_once('layouts/header.php');?>
<?php 
    $login = Session::get("cuslogin");
    if ($login == false) {
        header("Location:login.php");
    }
     ?>
     <?php 
    if (isset($_GET['customerId'])) {
        $id   = $_GET['customerId'];
        $time   = $_GET['time'];
        $price  = $_GET['price'];

        $confirm = $ct->productShiftConfirm($id, $time, $price);
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
              <h2>Your Ordered Details</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="#">Order Detail</a>
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
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Data</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <?php 
               $cmrId = Session::get("cmrId");
                $getOrder = $ct->getOrderProduct($cmrId);
                if ($getOrder) {
                    $i=0;
                    while ($result = $getOrder->fetch_assoc()) {
                        $i++;
              ?>
              <tbody>
                <tr>
                  <td>
                    <h5><?php echo $i; ?></h5>
                  </td>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="pharmacy/<?php echo $result['image']; ?>"
                          alt="" width="60px" height="60px"
                        />
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
                    $<?php echo $result['quantity'].".00"; ?>
                  </td>
                  <td>
                    <h5>
                      <?php echo $fm->formatDate($result['date']); ?>
                                
                   </h5>
                  </td>
                   <td>
                    <h5>
                      <?php
                        if ($result['status'] == '0') {
                            echo "Pending";
                        } elseif ($result['status'] == '1') {
                            echo "Shifted";
                        } else {
                            echo "Ok";
                      } ?>
                   </h5>
                  </td>
                  <?php if ($result['status'] == '1') {
                  ?>
                    <td><a href="?customerId=<?php echo $cmrId; ?>&price=<?php echo $result['price']; ?>&time=<?php echo $result['date']; ?>">Confirm</a></td>
                  <?php
                    } elseif ($result['status'] == '2') {
                  ?>
                  <td>Ok</td>
                    <?php
                        } elseif ($result['status'] == '0') {
                         echo "<td>N/A</td>";
                    } ?>
                </tr>
              </tbody>
              <?php
                  }
                } 
              ?>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->

    <?php include_once('layouts/footer.php');?>
    <!--================ End footer Area  =================-->

    <?php include_once('layouts/scripts.php');