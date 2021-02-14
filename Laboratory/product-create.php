<?php include_once('inc/header.php');?>
<?php include '../classes/Brand.php'; ?>
<?php include '../classes/Product.php'; ?>
<?php include '../classes/Category.php'; ?>
<?php 
    $pd = new Product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertProduct = $pd->productInsert($_POST, $_FILES);
    }
?>

 <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Add New Product</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-balance-scale mr-1"></i>Add New Product</div>
                    <div class="card-body">  
                        <?php 
                            if (isset($insertProduct)) {
                                echo $insertProduct;
                            }
                        ?>      
                        <form action="" method="post" enctype="multipart/form-data">
                            <input class="form-control py-4" id="inputEmailAddress" name="phamID" type="hidden"  value="<?php echo $userId;?> " />
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Name</label>
                                <input class="form-control py-4" id="inputEmailAddress" name="productName" type="text" placeholder="Enter Product Name" />
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
                                    <option value="<?php echo $result['catId']; ?>"><?php echo $result['catName']; ?></option>
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
                                        <option value="<?php echo $result['brandId']; ?>"><?php echo $result['brandName']; ?></option>
                                        <?php
                                            }
                                        } ?>
                                       
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Description</label>
                                <textarea class="form-control tinymce"  name="body"cols="15" rows="8"></textarea>
                            </div>

                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Price *</label>
                                <input class="form-control py-4" id="inputEmailAddress"  name="price" type="text" placeholder="Enter Email-Address" />
                            </div>
                             
                             <div class="form-group">
                                <label class="small mb-1" for="file">Upload Image</label>
                                <input class="form-control form-control-lg " name="image"  id="file" type="file" />
                            </div>

                              <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Brand</label>
                                    <select class="form-control form-control-lg"  name="type">
                                        <option>Select Product Type</option>
                                        <option value="0">Featured</option>
                                        <option value="1">General</option>
                                    </select>
                            </div>
                            
                                         
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary" name="submit" >Create <i class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    <?php include_once('inc/footer.php');?>