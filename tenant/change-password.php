<?php include_once('inc/header.php');?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../../classes/Contact.php');
?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-lock"></i> Reset Your Password</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-key mr-1"></i>Change Password</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Old-Password</label>
                                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">New Password</label>
                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                            </div>

                             <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Confirm New Password</label>
                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                            </div>
                                          
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary" > <i class="fa fa-paper-plane"></i> Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    <?php include_once('inc/footer.php');?>