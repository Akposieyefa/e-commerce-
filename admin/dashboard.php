<?php include_once('inc/header.php');?>
<?php 
    include_once('../classes/Customer.php');
    include_once('../classes/Pharmacy.php');
    include_once('../classes/Lab.php');
    $ct = new Customer();
    $ph = new Pharmacy();
    $lb = new Lab();
?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Admin Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-home"></i> Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><strong class="text-center">Customers
                            </strong>
                            <?php 
                                        $result = $ct->getAllCustomers();
                                    {  ?>
                                            <strong class="badge badge-primary pull-right">
                                                <?php
                                                     if (!$result || mysqli_num_rows($result)  == 0) {
                                                        echo "0";
                                                     }else {
                                                        echo mysqli_num_rows($result);
                                                     }
                                               ?> 
                                            </strong>
                                    <?php } ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body"><strong class="text-center">Registerd Lab</strong>
                            <?php 
                                        $result = $lb->getAllLab();
                                    {  ?>
                                            <strong class="badge badge-primary pull-right">
                                                <?php
                                                     if (!$result || mysqli_num_rows($result)  == 0) {
                                                        echo "0";
                                                     }else {
                                                        echo mysqli_num_rows($result);
                                                     }
                                               ?> 
                                            </strong>
                                    <?php } ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                            

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body"><strong class="text-center">Mailling List</strong></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body"><strong class="text-center">Pharmacy</strong>
                            <?php 
                                        $result = $ph->getAllPharmacy();
                                    {  ?>
                                            <strong class="badge badge-primary pull-right">
                                                <?php
                                                     if (!$result || mysqli_num_rows($result)  == 0) {
                                                        echo "0";
                                                     }else {
                                                        echo mysqli_num_rows($result);
                                                     }
                                               ?> 
                                            </strong>
                                    <?php } ?>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                               
                            </div>
                        </div>
                    </div>
                </div>
                
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Charts</h1>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Order Chat</div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>
                    </div>
                </main>
            </div>
        </main>
      <?php include_once('inc/footer.php');?>