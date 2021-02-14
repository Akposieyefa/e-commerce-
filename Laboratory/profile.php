<?php include_once('inc/header.php');?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-user"></i> My Profile</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-key mr-1"></i>My Profile</div>
                    <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td><?php echo $userName;?></td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td><?php echo $userEmail;?></td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number</td>
                                        <td><?php echo $userPhone;?></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td><?php echo $userAddress;?></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td><?php echo  $userStatus;?></td>
                                    </tr>
                                    <tr>
                                        <td>Store Name</td>
                                        <td><?php echo  $userStoreName;?></td>
                                    </tr>
                                    <tr>
                                        <td>Rege Date</td>
                                        <td><?php echo  $fm->formatDate($userDate);?></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </main>
    <?php include_once('inc/footer.php');?>