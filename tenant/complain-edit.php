<?php include_once('inc/header.php');?>
<?php  
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Complain.php');
?>
<?php
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'complain-index.php';</script>";
    } else {
        $msg_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
?>
<?php 
    $com = new Complain;
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['complain_update'])) {
          $create = $com->complainUpdateByUser($_POST);
      }
?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-address-card"></i> Edit Complain </li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-key mr-1"></i>Edit Complain</div>
                    <div class="card-body">
                        <?php 
                            if (isset($create)) {
                                echo $create;
                            }
                        ?>
                            <?php 
                               $getBrand = $com->getComplainData($msg_id);
                                if ($getBrand) {
                                    while ($result = $getBrand->fetch_assoc()) {  
                            ?> 
                        <form action="" method="post"> 
                            <input class="form-control py-4" name="c_id" id="inputEmailAddress" type="hidden" value="<?php echo $result['id'];?>" />
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Subject *</label>
                                <input class="form-control py-4" name="subject" id="inputEmailAddress" type="text" value="<?php echo $result['subject'];?>" />
                            </div>
                      
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Message *</label>
                                <textarea class="form-control"  name="message"cols="15" rows="8"><?php echo $result['message'];?></textarea>
                            </div>
                                          
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary" name="complain_update" type="submit" > Update <i class="fa fa-paper-plane"></i></button>
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