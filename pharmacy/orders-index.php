<?php include_once('inc/header.php');?>
<?php 
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'dashboard.php';</script>";
    } else {
        $brandid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
?>
<?php 
    if (isset($_GET['shiftid'])) {
        $id 	= $_GET['shiftid'];
        $time 	= $_GET['time'];
        $price 	= $_GET['price'];

        $shift = $ct->productShifted($id, $time, $price);
    }

    if (isset($_GET['delproid'])) {
        $id 	= $_GET['delproid'];
        $time 	= $_GET['time'];
        $price 	= $_GET['price'];

        $delOrder = $ct->delProductShifted($id, $time, $price);
    }
 ?>
 <div class="grid_10">
    <div class="box round first grid">
        <h2>Inbox</h2>
        <?php
            if (isset($shift)) {
                echo $shift;
            }
            if (isset($delOrder)) {
                echo $delOrder;
            }
        ?>
    </div>
</div>
<?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4">Order List</h3>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> My Orders</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i> My Ordrs List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Order Time</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Cust Name</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <?php
                                        $getDetails = $ct->getAllPharmacyOrderProduct($userID);
                                        $i = 0;
                                        if(is_array($getDetails) || is_object($getDetails)) {
                                            foreach($getDetails as $key => $value) {
                                                $i ++;
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo  $i; ?></td>
                                        <td><?php echo $fm->formatDate($value['date']); ?></td>
                                        <td><?php echo $value['productName']; ?></td>
                                        <td><?php echo $value['quantity']; ?></td>
                                        <td><?php echo $value['price']; ?></td>
                                        <td><?php echo $value['name']; ?></td>
                                        <td><a href="customer.php?custId=<?php echo $value['cmrId']; ?>">View Details</a></td>
                                        <?php if ($value['status'] == '0') {
                                                ?>
                                        <td><a href="?shiftid=<?php echo $value['cmrId']; ?>&price=<?php echo $value['price']; ?>&time=<?php echo $result['date']; ?>">Shifted</a></td>
                                            <?php
                                            } elseif ($value['status'] == '1') {
                                                ?> 
                                            <td>Pending</td>
                                            <?php
                                            } else {
                                                ?>							
                                            <td><a href="?delproid=<?php echo $value['cmrId']; ?>&price=<?php echo $value['price']; ?>&time=<?php echo $result['date']; ?>">Remove</a></td>
                                        <?php
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
            </div>
        </main>
      <?php include_once('inc/footer.php');?>