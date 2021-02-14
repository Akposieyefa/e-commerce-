<?php include_once('inc/header.php');?>
<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/../classes/Customer.php');
?>
<?php
if (!isset($_GET['custId']) || $_GET['custId'] == null) {
    echo "<script>window.location = 'orders-index.php';</script>";
} else {
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['custId']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<script>window.location = 'orders-index.php';</script>";
}
?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-user"></i> Customers Details</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-key mr-1"></i>Customers Details</div>
                    <div class="card-body">
                    <?php
                        $cus = new Customer();
                        $getCust = $cus->getCustomerData($id);
                        if ($getCust) {
                            while ($result = $getCust->fetch_assoc()) {
                                ?> 
                        <form action="" method="post">
                            <table class="table">                    
                                <tr><td>Name</td>
                                    <td>
                                        <input type="text" readonly="readonly" value="<?php echo $result['name'] ?>" class="form-control" />
                                    </td>
                                </tr>
                                <tr><td>Address</td>
                                    <td>
                                        <input type="text" readonly="readonly" value="<?php echo $result['address'] ?>" class="form-control" />
                                    </td>
                                </tr>
                                <tr><td>City</td>
                                    <td>
                                        <input type="text" readonly="readonly" value="<?php echo $result['city'] ?>" class="form-control" />
                                    </td>
                                </tr>
                                <tr><td>Zip</td>
                                    <td>
                                        <input type="text" readonly="readonly" value="<?php echo $result['zip'] ?>" class="form-control" />
                                    </td>
                                </tr>
                                <tr><td>Phone</td>
                                    <td>
                                        <input type="text" readonly="readonly" value="<?php echo $result['phone'] ?>" class="form-control" />
                                    </td>
                                </tr>
                                <tr><td>Email</td>
                                    <td>
                                        <input type="text" readonly="readonly" value="<?php echo $result['email'] ?>" class="form-control" />
                                    </td>
                                </tr>
                                <tr> 
                                    <td>
                                        <input type="submit" name="submit" Value="Ok" class="btn btn-success"  />
                                    </td>
                                </tr>
                            </table>
                            </form>
                            <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </main>
    <?php include_once('inc/footer.php');?>