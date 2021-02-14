<?php include_once('inc/header.php');?>
<?php include '../classes/ResetPassword.php' ?>
<?php 
    $al = new Resetpassword();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
       $id = $_POST['id'];
       $loginChk    = $al->resetPassword($_POST, $id);
    }
?>
<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Contact.php');
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
                    <?php 
                            if (isset($loginChk)) {
                                echo $loginChk;
                            }
                        ?>   
                        <form action="" method="post">
                            <input class="form-control py-4" id="inputEmailAddress" type="hidden"  name="id" value="<?php echo  Session::get('adminId');?>" />
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Old-Password</label>
                                <input class="form-control py-4" id="inputEmailAddress" type="text" name="oldpassword" placeholder="Enter email address"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">New Password</label>
                                <input class="form-control py-4" id="inputPassword" type="password" name="newpassword" placeholder="Enter password" />
                            </div>

                             <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Confirm New Password</label>
                                <input class="form-control py-4" id="inputPassword" type="password" name="cnewpassword" placeholder="Enter password" />
                            </div>
                                          
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary"  type="submit" name="submit">Update <i class="fa fa-paper-plane"></i> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    <?php include_once('inc/footer.php');?>