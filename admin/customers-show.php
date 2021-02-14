<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Customer.php');
?>
<?php
    $fm = new Format();
if (!isset($_GET['id']) || $_GET['id'] == null) {
    echo "<script>window.location = 'inbox.php';</script>";
} else {
    $cid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
}

?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-users"></i> Customers Details...?</li>
                </ol>
                <?php 
                    $pha = new Customer();
                    $data = $pha->getCustomerData($cid);
                    if ($data) {
                         $result = $data->fetch_array();  
                ?>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-comment mr-1"></i><strong>Users Profile</strong></div>
                    <div class="card-body">
                       <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td>Name </td>
                                     <td><?php echo  $result['name'] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>Email-Address </td>
                                     <td><?php echo  $result['email'] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>Phone Number</td>
                                    <td><?php echo  $result['phone'] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>Address</td>
                                    <td><?php echo  $result['address'] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>City</td>
                                    <td><?php echo  $result['city'] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>Zip Code</td>
                                    <td><?php echo  $result['zip'] ?> </td>
                                  </tr>
                                  <tr> 
                                    <td>
                                        <a href="customers-index.php">Back to List</a>
                                    </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </main>
      <?php include_once('inc/footer.php');?>