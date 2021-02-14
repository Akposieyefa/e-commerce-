        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboar.php">MedicPlaza</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
             <ul class="navbar-nav">
                <li class="nav-item">
                     <a class="nav-link" href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="contact.php"><i class="fa fa-envelope"></i>   
                        Inbox
                     </a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="customers-index.php"><i class="fa fa-users"></i>   
                        Customers List
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
                            <div class="sb-sidenav-menu-heading">Admin</div>
                            <a class="nav-link" href="dashboard.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Dashboard</a
                            >
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon">
                                    <i class="fas fa-folder-open"></i></div>
                                  Pharmacy
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="create-pharmacy.php"><i class="fa fa-edit"></i> &nbsp Add Pharmacy</a>
                                    <a class="nav-link" href="pharmacy-index.php"> <i class="fa fa-eye"></i> &nbsp  Pharmacy List</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="order-index.php"> 
                                <i class="fas fa-hashtag"></i> &nbsp 
                                Orders
                            </a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutlab" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon">
                                    <i class="fas fa-paper-plane"></i></div>
                                  Laboratory
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayoutlab" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="lab-create.php"><i class="fa fa-edit"></i> &nbsp Add Laboratory</a>
                                    <a class="nav-link" href="lab-index.php"> <i class="fa fa-eye"></i> &nbsp  Laboratory List</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="mail-index.php"> <i class="fa fa-book"></i> &nbsp  Mailling List</a>

                            <a class="nav-link" href="mail-create.php"> <i class="fa fa-bell"></i> &nbsp  Send Email</a>

                            <a class="nav-link" href="complain-index.php"> <i class="fa fa-comment"></i> &nbsp  Complain</a>
                        </div>
                    </div>
                </nav>
            </div>