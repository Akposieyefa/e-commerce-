<?php include_once('inc/header.php');?>
<?php include '../classes/Product.php'; ?>
<?php include '../classes/Brand.php'; ?>
<?php include '../classes/Category.php'; ?>
<?php
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'product-index.php';</script>";
    } else {
        $proid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
    $pd = new Product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $updateProduct = $pd->productUpdate($_POST, $_FILES, $proid);
    }
?>

 <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Edit Your Product</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-balance-scale mr-1"></i>Edit Your Product</div>
                    <div class="card-body"> 
                        <?php 
                            if (isset($updateProduct)) {
                                echo $updateProduct;
                            }
                        ?>  
                        <?php 
                             $getPro = $pd->getProById($proid);
                              if ($getPro) {
                            while ($value = $getPro->fetch_assoc()) {  
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Name</label>
                                <input class="form-control py-4" id="inputEmailAddress" value="<?php echo $value['productName'];?>"  name="productName" type="text" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Category</label>
                                     <select class="form-control form-control-lg" id="select" name="catId">
                                    <option>Select Category</option> 
                                     <?php 
                                            $cat = new Category();
                                             $getCat = $cat->getAllCat($userId);
                                             if ($getCat) {
                                                 while ($result = $getCat->fetch_assoc()) {
                                        ?>
                                        <option 
                                        <?php 
                                        if ($value['catId'] == $result['catId']) {
                                            ?>
                                            selected = "selected"
                                        <?php
                                        } ?>
                                        value="<?php echo $result['catId']; ?>"><?php echo $result['catName']; ?></option>
                                        <?php
                                        }
                                    } ?>                                           
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Brand</label>
                                    <select class="form-control form-control-lg" name="brandId">
                                        <option>Select Brand</option>
                                       <?php 
                                            $brand = new Brand();
                                            $getBrand = $brand->getAllByBrandPharmacy($userId);
                                             if ($getBrand) {
                                                 while ($result = $getBrand->fetch_assoc()) {
                                                     ?>
                                                        <option 
                                                        <?php 
                                                        if ($value['brandId'] == $result['brandId']) {
                                                            ?>
                                                            selected = "selected"
                                                        <?php
                                                        } ?>
                                                        value="<?php echo $result['brandId']; ?>"><?php echo $result['brandName']; ?></option>
                                                        <?php
                                                 }
                                        } ?>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Description</label>
                                <textarea class="form-control tinymce"  name="body"cols="15" rows="8"><?php echo $value['body'] ?></textarea>
                            </div>

                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Price *</label>
                                <input class="form-control py-4" id="inputEmailAddress"  name="price" type="text" value="<?php echo $value['price'] ?>" />
                            </div>
                             
                             <div class="form-group">
                                <label class="small mb-1" for="file">Upload Image</label><br>
                                <img src="<?php echo $value['image']; ?>" height="80px" width="200px" class="img img-responsive"><br>
                                <input class="form-control form-control-lg " name="image"  id="file" type="file" />
                            </div>

                              <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Brand</label>
                                    <select class="form-control form-control-lg"  name="type">
                                        <option>Select Product Type</option>
                                        <?php 
                                            if ($value['type'] == 0) {
                                                ?>
                                            <option selected="selected" value="0">Featured</option>
                                            <option value="1">General</option>
                                        <?php
                                            } else {
                                        ?>
                                            <option selected="selected" value="1">General</option>
                                            <option value="0">Featured</option>
                                        <?php
                                        } ?>
                                    </select>
                            </div>
                            
                                         
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary" name="submit" >Update <i class="fa fa-paper-plane"></i></button>
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