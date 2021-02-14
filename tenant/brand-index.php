<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include '../classes/Brand.php';

?>
<?php 
    $brand = new Brand();
    if (isset($_GET['del'])) {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del']);
        $delCat = $brand->delBrandById($id);
    }
 ?> <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Brand List</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Brand List</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i> Brand List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <?php
                                        $getDetails = $brand->getAllByBrandPharmacy($userID);
                                        $i = 0;
                                        if(is_array($getDetails) || is_object($getDetails)) {
                                            foreach($getDetails as $key => $value) {
                                                $id       = htmlentities($value["brandId"]);
                                                $name     = htmlentities($value["brandName"]);
                                                $i ++;
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $i;?> </td>
                                        <td><?php echo $name;?></td>
                                        <td>
                                            <span>
                                              <a class="btn btn-primary btn-sm" href="brand-edit.php?id=<?php echo  $id;?>"> <i class="fa fa-edit"></i></a>
                                            </span>
                                            <span>
                                              <a onclick="return confirm('Are you sure you want to delete this...?')" href="?del=<?php echo $id; ?>" class="btn btn-danger btn-sm"> <i  class="fa fa-trash"></i></a>
                                            </span>
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