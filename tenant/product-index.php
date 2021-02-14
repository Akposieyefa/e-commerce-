<?php include_once('inc/header.php');?>
<?php include '../classes/Product.php'; ?>
<?php include_once '../helpers/Format.php'; ?>
<?php 
$pd = new Product();
$fm = new Format();
 ?>
 <?php 
if (isset($_GET['del'])) {
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del']);
    $delPro = $pd->delProById($id);
}
 ?>
 ?> <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">My Product List</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> My Product List</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i> My Product List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <?php
                                        $getDetails = $pd->getAllProductByPharmacy($userID);
                                        $i = 0;
                                        if(is_array($getDetails) || is_object($getDetails)) {
                                            foreach($getDetails as $key => $value) {
                                                $id                 = htmlentities($value["productId"]);
                                                $productName        = htmlentities($value["productName"]);
                                                $catName            = htmlentities($value["catName"]);
                                                $brandName          = htmlentities($value["brandName"]);
                                                $body               = htmlentities($value["body"]);
                                                $price              = htmlentities($value["price"]);
                                                $img                = htmlentities($value["image"]);
                                                $type               = htmlentities($value["type"]);
                                                $i ++;
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $i;?> </td>
                                        <td><?php echo $productName; ?></td>
                                        <td><?php echo $catName; ?></td>
                                        <td><?php echo $brandName; ?></td>
                                        <td><?php echo $fm->textShorten($body, 50); ?></td>
                                        <td>$<?php echo $price; ?></td>
                                        <td>
                                            <img src="<?php echo $img; ?>" height="40px" width="60px">
                                        </td>
                                        <td>
                                            <?php 
                                            
                                            if ($type == 0) {
                                                echo "Featured";
                                            } else {
                                                echo "General";
                                            } ?>   
                                        </td>
                                        <td>
                                            <span>
                                              <a class="btn btn-primary btn-sm" href="product-edit.php?id=<?php echo  $id;?>"> <i class="fa fa-edit"></i></a>
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