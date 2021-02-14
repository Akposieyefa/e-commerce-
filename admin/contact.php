<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Contact.php');
?>
<?php 
    $fm = new Format();
    $contact = new Contact();
    if (isset($_GET['del'])) {
        $msg_id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del']);
        $delDetail = $contact->delContactById($msg_id);
    }
 ?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Contact Message</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-envelope"></i> Contact Message</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Contact Messages</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <?php
                                        $getContact = $contact->getAllContact();
                                        $i = 0;
                                        if(is_array($getContact) || is_object($getContact)) {
                                            foreach($getContact as $key => $value) {
                                                $id       = htmlentities($value["id"]);
                                                $name     = htmlentities($value["name"]);
                                                $email    = htmlentities($value["email"]);
                                                $subject  = htmlentities($value["subject"]);
                                                $status   = htmlentities($value["status"]);
                                                $date     = htmlentities($value["created_at"]);
                                                $i ++;
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $i;?> </td>
                                        <td><?php echo $name;?></td>
                                        <td><?php echo $email;?></td>
                                        <td><?php echo $fm->textShorten($subject, 20);?></td>
                                        <td>
                                            <?php if ($status == NULL ) {
                                                echo '<span class="text-danger">Pending</span>';
                                            } else {
                                                echo '<span class="text-success">Attend</span>';
                                            }

                                            ?>
                                        </td>
                                        <td><?php echo $fm->formatDate($date);?></td>
                                        <td>
                                            <span>
                                              <a class="btn btn-primary btn-sm" href="contact-details.php?id=<?php echo  $id;?>"> <i class="fa fa-eye"></i></a>
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