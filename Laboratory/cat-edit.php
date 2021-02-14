<?php include_once('inc/header.php');?>
<?php include '../classes/Category.php'; ?>
<?php
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'cat-index.php';</script>";
    } else {
        $catid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
    $cat = new Category();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $catName = $_POST['catName'];
        
        $updatetCat= $cat->catUpdate($catName, $catid);
    }
?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-edit"></i> Edit Category...?</li>
                </ol>
               
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-comment mr-1"></i><strong>Edit Cat</strong></div>
                    <div class="card-body">
                      <?php 
                       if (isset($updatetCat)) {
                           echo $updatetCat;
                       }
                      ?>
                      <?php 
                      $getCat = $cat->getCatById($catid);
                      if ($getCat) {
                          while ($result = $getCat->fetch_assoc()) {
                        ?> 
                        <form action="" method="post" enctype="multipart/form-data">
                          
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Name</label>
                                <input class="form-control py-4" id="inputEmailAddress"value="<?php echo $result['catName'] ?>" name="catName" type="text" />
                            </div>
                           
                                          
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary" name="submit" >Update <i class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>
                         <?php
                            }
                        } ?>
                    </div>
                </div>
                
            </div>
        </main>
      <?php include_once('inc/footer.php');?>