<?php include_once('inc/header.php');?>
<?php include '../classes/Brand.php'; ?>
<?php 
    $brand = new Brand();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $brandName = $_POST['brandName'];
        $phaID = $_POST['phaID'];
        $insertBrand = $brand->brandInsert($brandName,$phaID);
    }
?>
 <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Add New Brand</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-balance-scale mr-1"></i>Add New Brand</div>
                    <div class="card-body">
                        <?php 
                            if (isset($insertBrand)) {
                               echo $insertBrand;
                            }
                        ?>   
                        <form action="" method="post" enctype="multipart/form-data">
                            <input class="form-control py-4" value="<?php echo $userID; ?>" name="phaID" type="hidden" />
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Name</label>
                                <input class="form-control py-4" id="inputEmailAddress" name="brandName" type="text" placeholder="Enter Brand Name..." />
                            </div>
                            
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary" name="submit" >Create.. <i class="fa fa-paper-plane"></i> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    <?php include_once('inc/footer.php');?>