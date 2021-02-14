        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboar.php"><strong><?php echo  $userStoreName;?></strong></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
             <ul class="navbar-nav">
                <li class="nav-item">
                     <a class="nav-link" href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="complain-index.php?id=<?php echo  $userID;?>"><i class="fa fa-envelope"></i>   
                        Inbox
                     </a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="change-password.php"><i class="fa fa-key"></i>   
                        Change Password
                     </a>
                </li>
            </ul>
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <div class="dropdown-divider"></div>
                         <?php 
                            if (isset($_GET['action']) && $_GET['action'] == "logout") {
                                Session::destroy();
                            }
                         ?>
                        <a class="dropdown-item" href="?action=logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Pharmacy</div>
                            <a class="nav-link" href="dashboard.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Dashboard  </a
                            >
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon">
                                    <i class="fas fa-folder-open"></i></div>
                                  Category Option
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="cat-create.php"><i class="fa fa-edit"></i> &nbsp Add Category</a>
                                    <a class="nav-link" href="cat-index.php"> <i class="fa fa-eye"></i> &nbsp  Category List</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon">
                                    <i class="fas fa-hashtag"></i></div>
                                  Orders
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayout" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="orders-index.php?id=<?php echo  $userID;?>" ><i class="fa fa-bullhorn"></i> &nbsp Today's Order  &nbsp &nbsp&nbsp
                                    <?php
                                            $f1 = "00:00:00";
                                            $from =  date('Y-m-d')." ".$f1;
                                            $t1 = "23:59:59";
                                            $to = date('Y-m-d')." ".$t1;  
                                            $result = $ct->todayOrders($from,$to,$userID);
                                          {  ?>
                                          <span class="badge badge-primary pull-right"> 
                                                <?php
                                                     if (!$result || mysqli_num_rows($result)  == 0) {
                                                        echo "0";
                                                     }else {
                                                        echo mysqli_num_rows($result);
                                                     }
                                               ?> 
                                          </span>
                                        <?php } ?>
                                    </a>
                                    <a class="nav-link" href="orders-index.php?id=<?php echo  $userID;?>"> <i class="fa fa-eye"></i> &nbsp  Pending Orders &nbsp
                                    <?php 
                                         $result = $ct->pendingOrders($userID);
                                    {  ?>
                                          <span class="badge badge-danger pull-right"> 
                                                <?php
                                                     if (!$result || mysqli_num_rows($result)  == 0) {
                                                        echo "0";
                                                     }else {
                                                        echo mysqli_num_rows($result);
                                                     }
                                               ?> 
                                          </span>
                                    <?php } ?>
                                    </a>
                                     <a class="nav-link"  href="orders-index.php?id=<?php echo  $userID;?>"> <i class="fa fa-location-arrow"></i> &nbsp  Deliverd Orders &nbsp
                                     <?php 
                                        $result = $ct->deliverdOrders($userID);
                                    {  ?>
                                            <strong class="badge badge-success pull-right">
                                                <?php
                                                     if (!$result || mysqli_num_rows($result)  == 0) {
                                                        echo "0";
                                                     }else {
                                                        echo mysqli_num_rows($result);
                                                     }
                                               ?> 
                                            </strong>
                                    <?php } ?>
                                     </a>
                                </nav>
                            </div>
                            

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutBrand" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon">
                                    <i class="fas fa-paper-plane"></i></div>
                                  Brand Option
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayoutBrand" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="brand-create.php"><i class="fa fa-edit"></i> &nbsp Add Brand</a>
                                    <a class="nav-link" href="brand-index.php"> <i class="fa fa-eye"></i> &nbsp  Brand List</a>
                                </nav>
                            </div>

                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutlab" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon">
                                    <i class="fas fa-asterisk"></i></div>
                                  Product Option
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayoutlab" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="product-create.php"><i class="fa fa-edit"></i> &nbsp Add Product</a>
                                    <a class="nav-link" href="product-index.php"> <i class="fa fa-eye"></i> &nbsp  Product List</a>
                                </nav>
                            </div>

                             <a class="nav-link" href="complain-create.php"> <i class="fa fa-comment"></i> &nbsp  Complain</a>
                        </div>
                    </div>
                </nav>
            </div>