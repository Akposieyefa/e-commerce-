<?php include_once('inc/header.php');?>
<?php include '../classes/Category.php'; ?>
<?php 
    $cat = new Category();
    if (isset($_GET['del'])) {
        $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del']);
        $delCat = $cat->delCatById($id);
    }

?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Pharmacy List</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i>Pharmacy Index</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Pharmacy List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <?php
                                        $getDetails =   $getCat = $cat->getAllCat($userID);
                                        $i = 0;
                                        if(is_array($getDetails) || is_object($getDetails)) {
                                            foreach($getDetails as $key => $value) {
                                                $id       = htmlentities($value["catId"]);
                                                $name     = htmlentities($value["catName"]);
                                                $i ++;
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $i;?> </td>
                                        <td><?php echo $name;?></td>
                                        <td>
                                            <span>
                                              <a class="btn btn-primary btn-sm" href="cat-edit.php?id=<?php echo  $id;?>"> <i class="fa fa-edit"></i></a>
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