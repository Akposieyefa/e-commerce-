<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Brand.php');
?>
<?php
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'brand-index.php';</script>";
    } else {
        $brandid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
    $brand = new Brand();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $brandName = $_POST['brandName'];
        
        $updatetBrand= $brand->brandUpdate($brandName, $brandid);
    }
?>    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-users"></i>Edit Brand</li>
                </ol>

                   <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-balance-scale mr-1"></i>Edit Brand</div>
                    <div class="card-body">
                    <?php 
                       if (isset($updatetBrand)) {
                           echo $updatetBrand;
                       }
                    ?>
                    <?php 
                       $getBrand = $brand->getBrandById($brandid);
                        if ($getBrand) {
                        while ($result = $getBrand->fetch_assoc()) {  
                    ?> 
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Name</label>
                                <input class="form-control py-4" id="inputEmailAddress" name="brandName" value="<?php echo $result['brandName']; ?>" type="text" />
                            </div>
                            
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary" name="submit" >Update.. <i class="fa fa-paper-plane"></i> </button>
                            </div>
                        </form>

                      <?php
                          }
                        } 
                      ?>
                    </div>
                </div>
                
            </div>
        </main>
      <?php include_once('inc/footer.php');?>