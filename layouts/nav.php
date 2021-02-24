<?php  $cmrId = $session::get("cmrId");?>


 <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
            <div class="bounce4"></div>
        </div>
    </div>
    <div class="page-wrapper">
        <h1 class="d-none">Donald - Responsive eCommerce HTML Template</h1>
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Sendme naija | No'1 Online Shop !!</p>
                    </div>
                    <div class="header-right">
                      
                 
                        <!-- End DropDown Menu -->
                        <div class="dropdown dropdown-expanded d-lg-show">
                            <a href="#dropdown">Links</a>
                            <ul class="dropdown-box">
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </div>
                        <!-- End DropDownExpanded Menu -->
                    </div>
                </div>
            </div>
            <!-- End HeaderTop -->
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="demo11.html" class="logo d-lg-block d-none mr-4">
                            <img src="images/demos/demo11/logo.png" alt="logo" width="163" height="39" />
                        </a>
                    </div>
                    <div class="header-center">
                        <a href="demo11.html" class="logo d-lg-none d-block">
                            <img src="images/demos/demo11/logo.png" alt="logo" width="163" height="39" />
                        </a>
                        <!-- End Logo -->
                        <div class="header-search hs-expanded">
                            <form action="#" method="get" class="input-wrapper">
                                <div class="select-box">
                                    <select id="category" name="category">
                                        <option value="">All Categories</option>
                                        <option value="4">Fashion</option>
                                        <option value="12">- Women</option>
                                        <option value="13">- Men</option>
                                        <option value="66">- Jewellery</option>
                                        <option value="67">- Kids Fashion</option>
                                        <option value="5">Electronics</option>
                                        <option value="21">- Smart TVs</option>
                                        <option value="22">- Cameras</option>
                                        <option value="63">- Games</option>
                                        <option value="7">Home &amp; Garden</option>
                                        <option value="11">Motors</option>
                                        <option value="31">- Cars and Trucks</option>
                                        <option value="32">- Motorcycles &amp; Powersports</option>
                                        <option value="33">- Parts &amp; Accessories</option>
                                        <option value="34">- Boats</option>
                                        <option value="57">- Auto Tools &amp; Supplies</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" name="search" id="search"
                                    placeholder="Search your keyword..." required="">
                                <button class="btn btn-sm btn-search" type="submit"><i
                                        class="d-icon-search"></i></button>
                            </form>
                        </div>
                        <!-- End Header Search -->
                    </div>
                    <div class="header-right">
                        <a class="login" href="ajax/login.html">
                            <i class="d-icon-user"></i>
                            <span>Login</span>
                        </a>
                        <!-- End Login -->
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="cart-toggle">
                                <span class="cart-label">
                                    <span class="cart-name">My Cart</span>
                                    <span class="cart-price">$42.00</span>
                                </span>
                                <i class="minicart-icon">
                                    <span class="cart-count">2</span>
                                </i>
                            </a>
                            <!-- End Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="product product-cart-header">
                                    <span class="product-cart-counts">2 items</span>
                                    <span><a href="cart.html">View cart</a></span>
                                </div>
                                <div class="products scrollable">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Solid Pattern In Fashion Summer
                                                Dress</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$129.00</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="images/cart/product-1.jpg" alt="product" width="90"
                                                    height="90" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </figure>
                                    </div>
                                    <!-- End of Cart Product -->
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Mackintosh Poket Backpack</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$98.00</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="images/cart/product-2.jpg" alt="product" width="90"
                                                    height="90" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </figure>
                                    </div>
                                    <!-- End of Cart Product -->
                                </div>
                                <!-- End of Products  -->
                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$42.00</span>
                                </div>
                                <!-- End of Cart Total -->
                                <div class="cart-action">
                                    <a href="checkout.html" class="btn btn-dark"><span>Checkout</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End Dropdown Box -->
                        </div>

                        <div class="header-search hs-toggle mobile-search">
                            <a href="#" class="search-toggle">
                                <i class="d-icon-search"></i>
                            </a>
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search your keyword..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End of Header Search -->
                    </div>
                </div>

            </div>

            <div class="header-bottom sticky-header fix-top sticky-content has-dropdown">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown menu-fixed">
                                <a href="#" class="text-white category-toggle"><i class="d-icon-bars"></i></a>
                                <!-- <div class="dropdown-overlay"></div> -->
                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                        <li><a href="demo11-shop.html" class="menu-title">Browse Our Categories</a></li>
                                        <li>
                                            <a href="demo11-shop.html"><i class="d-icon-camera1"></i>Electronics</a>
                                        </li>
                                        <li>
                                            <a href="demo11-shop.html"><i class="d-icon-desktop"></i>Computer
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo11-shop.html"><i class="d-icon-gamepad1"></i>Gaming &amp;
                                                Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo11-shop.html"><i class="d-icon-cook"></i>Home &amp; Kitchen</a>
                                        </li>
                                        <li>
                                            <a href="demo11-shop.html">
                                                <i class="d-icon-bed"></i>Furniture
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo11-shop.html"><i class="d-icon-shoes"></i>Walking &amp;
                                                Shoes</a>
                                        </li>
                                        <li>
                                            <a href="demo11-shop.html">
                                                <i class="d-icon-t-shirt1"></i>Travel &amp; Clothing</a>
                                        </li>
                                        <li>
                                            <a href="demo11-shop.html">
                                                <i class="d-icon-card"></i>Backpacks &amp; Fashion bags
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo11-shop.html">
                                                <i class="d-icon-basketball1"></i>Sporting Goods
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu">
                                    <li class="active">
                                        <a href="demo11.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="demo11-shop.html">Computers</a>
                                      
                                    </li>
                                    <li>
                                        <a href="demo11-product.html">Phones</a>
                                    
                                    </li>

                                     <li>
                                        <a href="demo11-product.html">Fashion</a>
                                    
                                    </li>

                                    <li>
                                        <a href="#">Home and Kitchen</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Categories</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul class="menu">
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-primary btn-md">Sendme Portal!!</a>
                                </li>
                                <li>
 <?php 
                    // if (isset($_GET['cid'])) {
                    //     $delData = $ct->delCustomerCart();
                    //     $delComp = $pd->delCompareDara($cmrId);
                    //     Session::destroy();
                    // }
                   ?>
                  <?php 
                    $login = $session::get("cuslogin");
                    if ($login == false) {
                        ?>
                        <a href="login.php">Sign In</a>
                    <?php
                    } else {
                            ?>
                      <a href="?cid=<?php Session::get('cmrId'); ?>">Logout</a>
                    <?php
                        }
                     ?>
              

                                 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>




