<?php 
    include_once('inc/header.php');
?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Pharmacy Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-home"></i> Dashboard</li>
                </ol>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Charts
                        </h1>
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