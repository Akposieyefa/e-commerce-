<?php include_once('inc/header.php');?>
<?php  
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Complain.php');
?>
<?php
    $com = new Complain;
    $fm = new Format();
    if (!isset($_GET['id']) || $_GET['id'] == null) {
        echo "<script>window.location = 'complain-index.php';</script>";
    } else {
        $msg_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
    }
?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-eye"></i> Complain Show</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-key mr-1"></i>Complain Show</div>
                    <div class="card-body">
                            <?php 
                               $getBrand = $com->getComplainData($msg_id);
                                if ($getBrand) {
                                    while ($result = $getBrand->fetch_assoc()) {  
                            ?>
                            <p class="text-center h3"><?php echo $result['subject'];?></p> 
                            <p class="text-justify"> <strong>Message</strong> <br> <?php echo $result['message'];?></p>
                            <p class="text-justify"> <strong>Sent Date</strong> <br> <?php echo $fm->formatDate($result['created_at']);?></p>
                            <p class="text-justify"><strong>Response</strong> <br><?php echo $result['status'];?></p> 
                             <p class="text-justify"> <strong>Response Date</strong> <br> <?php echo $fm->formatDate($result['updated_at']);?></p>
                            
                        <?php
                              }
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </main>
    <?php include_once('inc/footer.php');?>