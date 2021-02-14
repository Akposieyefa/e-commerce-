<?php include_once('inc/header.php');?>
<?php include '../classes/States.php'; ?>
<?php include '../classes/Lab.php'; ?>
<?php 
    $fm = new Lab();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $createLab= $fm -> labRegistration($_POST, $_FILES);
    }
?>
    <?php include_once('inc/nav.php');?>
    <div id="layoutSidenav_content">
        <script type="text/javascript">
            function getLga(val) {
                $.ajax({
                    type: "POST",
                    url: "get-lga.php",
                    data:'state_id='+val,
                    success: function(data){
                        $("#lga").html(data);
                    },
                });
            }
        </script>
        <main>
            <div class="container-fluid"><br>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><i class="fa fa-plus-circle"></i> Create Lab</li>
                </ol>
                
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-balance-scale mr-1"></i>Create Lab Account</div>
                    <div class="card-body">
                         <?php 
                            if (isset($createLab)) {
                                echo $createLab;
                            }
                        ?>     
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Name</label>
                                <input class="form-control py-4" id="inputEmailAddress" name="name" type="text" placeholder="Enter Name" />
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control py-4" id="inputEmailAddress"  name="email" type="email" placeholder="Enter Email-Address" />
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Phone</label>
                                <input class="form-control py-4" id="inputEmailAddress" name="phone"accept=" " type="text" placeholder="Phone Number" />
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">State</label>
                                <select class="form-control form-control-lg" id="select" name="state" onChange="getLga(this.value)";>
                                    <option>Select State</option>
                                        <?php 
                                            $state = new States();
                                            $getState = $state->getAllState();
                                            if ($getState) {
                                                while ($result = $getState->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                                        <?php
                                            }
                                        } ?>                          
                                </select>
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">LGA</label>
                                 <select id="lga" class="form-control form-control-lg" name="lgas">           
                                 </select>
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Address</label>
                                <input class="form-control py-4" id="inputEmailAddress" name="address" type="text" placeholder="Enter Address" />
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Laboratory Name</label>
                                <input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Enter Name" name="pname" />
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="file">Registration Document</label>
                                <input class="form-control form-control-lg" id="file"  name="docs" type="file"/>
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="file">Logo</label>
                                <input class="form-control form-control-lg " name="logo"  id="file" type="file" />
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Description</label>
                                <textarea class="form-control"  name="desc"cols="15" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input class="form-control py-4" name="password"  id="inputPassword" type="password" placeholder="Enter password" />
                            </div>

                             <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Confirm Password</label>
                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Confirm password"  name="cpassword" />
                            </div>
                                          
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary" name="submit" >Create.. <i class="fa fa-paper-plane"></i> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    <?php include_once('inc/footer.php');?>