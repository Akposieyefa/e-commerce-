<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Complain.php');
?>
<?php 
    $fm = new Format();
    $contact = new Complain();
    if (!isset($_GET['id']) || $_GET['id'] == null) {
    echo "<script>window.location = 'complain-index.php';</script>";
  } else {
      $msg_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
  }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           $status = $_POST['status'];
          $up = $contact->complainUpdate( $status, $msg_id);
      }
 ?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-envelope"></i> Message Details...?</li>
                </ol>
                <?php 
                    $data = $contact->adminGetComplainData($msg_id);
                    if ($data) {
                         $result = mysqli_fetch_array($data);  
                ?>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-comment mr-1"></i><strong><?php echo strtoupper($result['subject']) ;?></strong></div>
                    <div class="card-body">
                       <p class="text-justify"> <?php echo $result['message'];?></p>
                       <hr>
                       <p class="text-justify"><strong>Sent By:</strong> <?php echo $result['pname'];?></p>
                       <p class="text-justify"><strong>Email-Address: </strong> <?php echo $result['email'];?></p>
                       <p class="text-justify"><strong>Date: </strong> <?php echo $fm->formatDate($result[4]) ;?>
                       </p>
                       <?php
                            if ($result['status'] != NULL) {
                      ?>
                                
                        <form action="" method="post">
                            <label for="message"><strong>Reply</strong></label>
                            <textarea class="form-control" cols="15" rows="8" name="status"></textarea> <br>
                            <button class="btn btn-primary"><i class="fa fa-cubes"></i> Reply</button>
                        </form>

                      <?php  }else {

                      ?>
                        <p class="text-justify"><strong>Status:</strong> <br>
                            <?php echo $result[6];?>
                        </p>
                        <p class="text-justify">
                          <strong>Date: </strong> <?php echo $fm->formatDate($result[5]) ;?>
                        </p>
                      <?php

                      } ?>
                      
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </main>
      <?php include_once('inc/footer.php');?>