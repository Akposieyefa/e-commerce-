<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Contact.php');
?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-address-card"></i> Send Mail</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-key mr-1"></i>Send Mail</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Subject</label>
                                <input class="form-control py-4" name="subject" id="inputEmailAddress" type="text" placeholder="Enter Subject" />
                            </div>
                      
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Message</label>
                                <textarea class="form-control"  name="message"cols="15" rows="8"></textarea>
                            </div>
                                          
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary" > Broadcast <i class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    <?php include_once('inc/footer.php');?>