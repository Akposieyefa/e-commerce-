<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include '../classes/Complain.php';
?>
<?php 
    $fm = new Format();
    $brand = new Complain;
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'dashboard.php';</script>";
    } else {
        $brandid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
    if (isset($_GET['del'])) {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del']);
        $delCat = $brand->delComplainById($id);
    }
?>
 <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4">My Complain List</h3>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> My Complain List</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i> My Complain List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <?php
                                        $getDetails = $brand->getUserComplain($userID);
                                        $i = 0;
                                        if(is_array($getDetails) || is_object($getDetails)) {
                                            foreach($getDetails as $key => $value) {
                                                $id       = htmlentities($value["id"]);
                                                $name     = htmlentities($value["subject"]);
                                                $date     = htmlentities($value["created_at"]);
                                                $status   = htmlentities($value["status"]);
                                                $i ++;
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $i;?> </td>
                                        <td><?php echo $name;?></td>
                                        <td><?php echo $fm->formatDate($date);?></td>
                                        <td>
                                            <?php if ($status == NULL ) {
                                                echo '<span class="text-danger">Pending</span>';
                                            } else {
                                                echo '<span class="text-success">Attend</span>';
                                            }

                                            ?>
                                        </td>
                                        <td>
                                            <?php if ($status == NULL ) {
                                                ?>
                                                <span>
                                                  <a class="btn btn-primary btn-sm" href="complain-edit.php?id=<?php echo  $id;?>"> <i class="fa fa-edit"></i>
                                                  </a>
                                                </span>
                                                <span>
                                                  <a onclick="return confirm('Are you sure you want to delete this...?')" href="?del=<?php echo $id; ?>" class="btn btn-danger btn-sm"> <i  class="fa fa-trash"></i>
                                                  </a>
                                                </span>
                                            <?php
                                            } else {
                                            ?>
                                                <span>
                                                  <a class="btn btn-primary btn-sm" href="complain-show.php?id=<?php echo  $id;?>"> <i class="fa fa-eye"></i>
                                                  </a>
                                                </span>
                                            <?php 
                                            }
                                            ?>

                                        </td>
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