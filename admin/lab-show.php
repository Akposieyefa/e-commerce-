<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Lab.php');
?>
<?php
    $fm = new Format();
if (!isset($_GET['id']) || $_GET['id'] == null) {
    echo "<script>window.location = 'inbox.php';</script>";
} else {
    $pid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
}

?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-users"></i> Lab Details...?</li>
                </ol>
                <?php 
                    $pha = new Lab();
                    $data = $pha->getLabData($pid);
                    if ($data) {
                         $result = $data->fetch_array();  
                ?>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-comment mr-1"></i><strong><?php echo strtoupper($result['pname']) ;?></strong></div>
                    <div class="card-body">
                      <div class="col-md-6 offset-md-6">
                        <a href="<?php echo $result['logo']; ?>">
                                     <img src="<?php echo $result['logo']; ?>" height="60px" width="80px" class="img img-thumbnail img-fluid">
                                    </a>
                      </div>
                       <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td>Name </td>
                                     <td><?php echo  $result[1] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>Email-Address </td>
                                     <td><?php echo  $result[2] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>Phone Number</td>
                                    <td><?php echo  $result[3] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>Address</td>
                                    <td><?php echo  $result[6] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>Pharmacy Name</td>
                                    <td><?php echo  $result[7] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>State</td>
                                    <td><?php echo  $result[16] ?> </td>
                                  </tr>
                                  <tr>
                                    <td>LGA</td>
                                    <td><?php echo  $result['name'] ?> </td>
                                  </tr>
                                  <tr><td>Document</td>
                                      <td>
                                        <a href="<?php echo $result['docs']; ?>" > View </a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Status</td>
                                      <td>
                                          <?php 
                                          
                                          if ($result['status'] == NULL) {
                                              echo "<p class='text-danger'>Pending </p>";
                                          } else {
                                              echo "Confirmed";
                                          } ?>
                                              
                                      </td>       
                                  </tr>
                                  <tr> 
                                    <td>
                                        <a href="lab-index.php">Back to List</a>
                                    </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </main>
      <?php include_once('inc/footer.php');?>