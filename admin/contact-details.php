<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Contact.php');
?>
<?php 
    $fm = new Format();
    $contact = new Contact();
    if (!isset($_GET['id']) || $_GET['id'] == null) {
    echo "<script>window.location = 'dashboard.php';</script>";
} else {
    $msg_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
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
                    $data = $contact->getContactData($msg_id);
                    if ($data) {
                         $result = $data->fetch_array();  
                ?>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-comment mr-1"></i><strong><?php echo strtoupper($result['subject']) ;?></strong></div>
                    <div class="card-body">
                       <p class="text-justify"> <?php echo $result['message'];?></p>
                       <hr>
                       <p class="text-justify"><strong>Sent By:</strong> <?php echo $result['name'];?></p>
                       <p class="text-justify"><strong>Email-Address: </strong> <?php echo $result['email'];?></p>
                       <p class="text-justify"><strong>Date: </strong> <?php echo $fm->formatDate($result['created_at']) ;?>
                       </p>
                       <?php
                            if ($result['status'] == NULL) {
                      ?>
                                
                        <form>
                            <label for="message"><strong>Reply</strong></label>
                            <textarea class="form-control" cols="15" rows="8"></textarea> <br>
                            <button class="btn btn-primary"><i class="fa fa-cubes"></i> Reply</button>
                        </form>

                      <?php  } else {

                      ?>
                        <p class="text-justify"><strong>Status:</strong> <br>
                            <?php echo $result['status'];?>
                        </p>
                        <p class="text-justify"><strong>Date: </strong> <?php echo $fm->formatDate($result['updated_at']) ;?>
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