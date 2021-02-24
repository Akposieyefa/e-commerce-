<?php include_once('layouts/header.php');?>

  <!--================Header Menu Area =================-->
  <?php include_once('layouts/nav.php'); ?>
  <!--================END Header Menu Area =================-->
  <!--================Home Banner Area =================-->
  




<main class="main mt-lg-4">
            <div class="page-content">
                <div class="container">
                    <section class="intro-section">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="owl-carousel owl-theme row owl-dot-inner intro-slider animation-slider cols-1 mb-4"
                                    data-owl-options="{
                                    'items': 1,
                                    'dots': true,
                                    'nav': false,
                                    'loop': true,
                                    'autoplay': true,
                                    'animateOut': 'flipOutY'
                                }">
                                    <div class="banner banner-fixed intro-slide1">
                                        <figure>
                                            <img src="./layouts/images/demos/demo11/slides/2.jpg" alt="intro-banner" width="580"
                                                height="460" />
                                        </figure>
                                   
                                    </div>
                                    <div class="banner banner-fixed intro-slide2">
                                        <figure>
                                            <img src="./layouts//images/demos/demo11/slides/1.jpg" alt="intro-banner" width="580"
                                                height="460" />
                                        </figure>
                              
                                    </div>
                                     <div class="banner banner-fixed intro-slide1">
                                        <figure>
                                            <img src="./layouts/images/demos/demo11/slides/3.jpg" alt="intro-banner" width="580"
                                                height="460" />
                                        </figure>
                                    
                                    </div>

                                      <div class="banner banner-fixed intro-slide2">
                                        <figure>
                                            <img src="./layouts/images/demos/demo11/slides/4.jpg" alt="intro-banner" width="580"
                                                height="460" />
                                        </figure>
                                     
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12 col-xs-6">
                                        <div class="banner banner-fixed intro-banner1 mb-4">
                                            <figure>
                                                <img src="./layouts/images/demos/demo11/banners/1.jpg" alt="banner" width="280"
                                                    height="220" />
                                            </figure>
                                            <div class="banner-content y-50 appear-animate">
                                                <h4 class="banner-subtitle ls-s text-primary font-weight-normal">
                                                    Lifestyle</h4>
                                                <h3 class="banner-title ls-s text-white"><span
                                                        class="text-uppercase">For Women's </span><br /><span
                                                        class="font-weight-normal">Handbags</span></h3>
                                                <a href="#" class="btn btn-solid btn-sm">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-6">
                                        <div class="banner banner-fixed intro-banner2 mb-4">
                                            <figure>
                                                <img src="./layouts/images/demos/demo11/banners/2.jpg" alt="banner" width="280"
                                                    height="220" />
                                            </figure>
                                            <div class="banner-content y-50 appear-animate">
                                                <h4 class="banner-subtitle text-dark font-weight-normal">Featured</h4>
                                                <h3 class="banner-title ls-m text-white">Classic Watch <br /><span
                                                        class="font-weight-normal">Collection</span></h3>
                                                <a href="#" class="btn btn-solid btn-sm">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-list owl-carousel owl-theme row cols-lg-3 cols-md-2 cols-1"
                            data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 2,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '768': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'loop': false
                                }
                            }
                        }">
                            <div class="icon-box icon-box-tiny text-center appear-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.1s'
                            }">
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title font-weight-bold">
                                        <i class="icon-box-icon d-icon-layer"></i>Free Shipping
                                    </h4>
                                    <p>Free shipping on orders over $99.00</p>
                                </div>
                            </div>
                            <div class="icon-box icon-box-tiny text-center appear-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.4s'
                            }">
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title font-weight-bold">
                                        <i class="icon-box-icon d-icon-database"></i>Customer support
                                    </h4>
                                    <p>Contact us 24 hours a day, 7 days a week</p>
                                </div>
                            </div>
                            <div class="icon-box icon-box-tiny text-center appear-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.7s'
                            }">
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title font-weight-bold">
                                        <i class="icon-box-icon d-icon-shoppingbag"></i>Return guarantee
                                    </h4>
                                    <p>Any time back guarantee within 30 days</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="product-wrapper pt-1 mt-10 appear-animate" data-animation-options="{
                        'delay': '.5s'
                    }">
                        <div class="tab tab-nav-simple tab-nav-center">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#new-arrivals">New Arrivals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#best-sellers">Best Sellers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#featured">Our Featured</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="new-arrivals">
                                    <div class="owl-carousel owl-theme row cols-xl-5 cols-lg-4 cols-md-3 cols-2"
                                        data-owl-options="{
                                        'items': 5,
                                        'nav': false,
                                        'dots': true,
                                        'margin': 20,
                                        'loop': false,
                                        'responsive': {
                                            '0': {
                                                'items': 2
                                            },
                                            '768': {
                                                'items': 3
                                            },
                                            '992': {
                                                'items': 4
                                            },
                                            '1200': {
                                                'items': 5
                                            }
                                        }
                                    }">
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/1.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">new</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Women's Fashion Hood</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$123.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/2.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-sale">27% off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Purple Fashion Sportswear</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del
                                                        class="old-price">$210.00</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/3.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Fashion Cowboy Hat</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$111.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/4.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">New</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Roller Skate</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$223.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/5.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">New</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Water Cooler Reservoir</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$223.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="best-sellers">
                                    <div class="owl-carousel owl-theme row cols-xl-5 cols-lg-4 cols-md-3 cols-2"
                                        data-owl-options="{
                                        'items': 5,
                                        'nav': false,
                                        'dots': true,
                                        'margin': 20,
                                        'loop': false,
                                        'responsive': {
                                            '0': {
                                                'items': 2
                                            },
                                            '768': {
                                                'items': 3
                                            },
                                            '992': {
                                                'items': 4
                                            },
                                            '1200': {
                                                'items': 5
                                            }
                                        }
                                    }">
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/2.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-sale">27% off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Purple Fashion Sportswear</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del
                                                        class="old-price">$210.00</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/1.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">new</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Women's Fashion Hood</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$123.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/4.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">New</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Roller Skate</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$223.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/3.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Fashion Cowboy Hat</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$111.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/5.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">New</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Water Cooler Reservoir</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$223.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="featured">
                                    <div class="owl-carousel owl-theme row cols-xl-5 cols-lg-4 cols-md-3 cols-2"
                                        data-owl-options="{
                                        'items': 5,
                                        'nav': false,
                                        'dots': true,
                                        'margin': 20,
                                        'loop': false,
                                        'responsive': {
                                            '0': {
                                                'items': 2
                                            },
                                            '768': {
                                                'items': 3
                                            },
                                            '992': {
                                                'items': 4
                                            },
                                            '1200': {
                                                'items': 5
                                            }
                                        }
                                    }">
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/2.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-sale">27% off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Purple Fashion Sportswear</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del
                                                        class="old-price">$210.00</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/3.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Fashion Cowboy Hat</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$111.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/5.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">New</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Water Cooler Reservoir</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$223.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/1.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">new</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Women's Fashion Hood</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$123.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-classic">
                                            <figure class="product-media">
                                                <a href="demo11-product.html">
                                                    <img src="./layouts/images/demos/demo11/products/4.jpg" alt="product"
                                                        width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">New</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-grid-3col.html">categories</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="demo11-product.html">Roller Skate</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$223.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                                        data-target="#addCartModal" title="Add to cart">add to cart</a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"
                                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"
                                                        title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="banner-group mt-10">
                        <div class="row">
                            <div class="col-md-6 mb-4 appear-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.2s'
                            }">
                                <div class="banner banner-fixed banner1 overlay-zoom">
                                    <figure>
                                        <img src="./layouts/images/demos/demo11/banners/3.jpg" width="580" height="240"
                                            alt="banner" />
                                    </figure>
                                    <div class="banner-content y-50 appear-animate">
                                        <h4 class="banner-subtitle text-uppercase font-weight-bold">Mid Season Sale</h4>
                                        <h3 class="banner-title ls-m mb-1 text-primary">Up to 30% Off</h3>
                                        <p class="font-weight-semi-bold ls-m mb-3 text-dark">Free Event</p>
                                        <a href="#" class="btn btn-dark btn-md">Shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 appear-animate" data-animation-options="{
                                'name': 'fadeInLeftShorter',
                                'delay': '.2s'
                            }">
                                <div class="banner banner-fixed banner2 overlay-zoom">
                                    <figure>
                                        <img src="./layouts/images/demos/demo11/banners/4.jpg" width="580" height="240"
                                            alt="banner" />
                                    </figure>
                                    <div class="banner-content y-50 appear-animate">
                                        <h4 class="banner-subtitle text-uppercase font-weight-normal text-white">New
                                            Arrivals</h4>
                                        <h3 class="banner-title ls-m mb-1 text-white font-weight-bold">Sportswear
                                            Collection</h3>
                                        <p class="font-weight-semi-bold ls-m mb-3 text-white">Sporting Suit, Shoes,&amp;
                                            Shirts</p>
                                        <a href="#" class="btn btn-primary btn-md">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="product-wrapper mt-7 appear-animate">
                        <h2 class="title title-underline with-link"><span>Shoes Collection</span><a href="#"
                                class="font-weight-bold">View more<i class="fas fa-chevron-right"></i></a></h2>
                        <div class="row">
                            <div class="col-xl-5col col-md-3 col-sm-4 mb-4">
                                <div class="banner banner3 banner-fixed overlay-dark">
                                    <figure>
                                        <img src="./layouts/images/demos/demo11/banners/5.jpg" alt="banner" width="220"
                                            height="343" />
                                    </figure>
                                    <div class="banner-content appear-animate" data-animation-options="{
                                        'delay': '.3s'
                                    }">
                                        <h4 class="banner-subtitle text-uppercase text-primary">Athletic <span
                                                class="font-weight-normal">shoes</span></h4>
                                        <h3 class="banner-title ls-m mb-3 text-uppercase text-white">Starting <br />at
                                            <sup class="d-inline-block">$ </sup>19.<sup class="d-inline-block">99</sup>
                                        </h3>
                                        <a href="#" class="btn btn-link btn-underline btn-white btn-sm">Shop now<i
                                                class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5col4 col-md-9 col-sm-8 mb-4">
                                <div class="owl-carousel owl-theme row owl-nav-full cols-xl-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                    'items': 5,
                                    'nav': true,
                                    'dots': false,
                                    'margin': 20,
                                    'loop': false,
                                    'responsive': {
                                        '0': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3
                                        },
                                        '1200': {
                                            'items': 4
                                        }
                                    }
                                }">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="demo11-product.html">
                                                <img src="./layouts/images/demos/demo11/products/6.jpg" alt="product" width="220"
                                                    height="245">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></a>
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Shoes</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo11-product.html">Blue NIKE Training Shoes</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="demo11-product.html">
                                                <img src="./layouts/images/demos/demo11/products/7.jpg" alt="product" width="220"
                                                    height="245">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">25% off</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></a>
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Shoes</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo11-product.html">Yellow NIKE Training Shoes</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="demo11-product.html">
                                                <img src="./layouts/images/demos/demo11/products/8.jpg" alt="product" width="220"
                                                    height="245">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></a>
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Shoes</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo11-product.html">Y-3 Basketball Boots</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="demo11-product.html">
                                                <img src="./layouts/images/demos/demo11/products/9.jpg" alt="product" width="220"
                                                    height="245">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></a>
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Shoes</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo11-product.html">NIKE Suede Training Sneaker</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$123.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="product-wrapper mt-6 appear-animate">
                        <h2 class="title title-underline with-link"><span>Accessories Collection</span><a href="#"
                                class="font-weight-bold">View more<i class="fas fa-chevron-right"></i></a></h2>
                        <div class="row">
                            <div class="col-xl-5col col-md-3 col-sm-4 mb-4">
                                <div class="banner banner4 banner-fixed overlay-light">
                                    <figure>
                                        <img src="./layouts/images/demos/demo11/banners/6.jpg" alt="banner" width="220"
                                            height="343" />
                                    </figure>
                                    <div class="banner-content appear-animate" data-animation-options="{
                                        'delay': '.3s'
                                    }">
                                        <h4 class="banner-subtitle text-uppercase text-primary">Sporting <span
                                                class="font-weight-normal">Goods</span></h4>
                                        <h3 class="banner-title ls-m mb-3 text-uppercase">Starting <br />at <sup
                                                class="d-inline-block">$ </sup>19.<sup class="d-inline-block">99</sup>
                                        </h3>
                                        <a href="#" class="btn btn-link btn-underline btn-sm">Shop now<i
                                                class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5col4 col-md-9 col-sm-8 mb-4">
                                <div class="owl-carousel owl-theme row owl-nav-full cols-xl-4 cols-md-3 cols-2"
                                    data-owl-options="{
                                    'items': 5,
                                    'nav': true,
                                    'dots': false,
                                    'margin': 20,
                                    'loop': false,
                                    'responsive': {
                                        '0': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3
                                        },
                                        '1200': {
                                            'items': 4
                                        }
                                    }
                                }">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="demo11-product.html">
                                                <img src="./layouts/images/demos/demo11/products/10.jpg" alt="product" width="220"
                                                    height="245">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></a>
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Accessories</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo11-product.html">Basketball</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="demo11-product.html">
                                                <img src="./layouts/images/demos/demo11/products/11.jpg" alt="product" width="220"
                                                    height="245">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">25% off</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></a>
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Accessories</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo11-product.html">Black Green Fashionablel Gloves</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="demo11-product.html">
                                                <img src="./layouts/images/demos/demo11/products/12.jpg" alt="product" width="220"
                                                    height="245">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></a>
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Accessories</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo11-product.html">Cavin Brown Leather Ball</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="demo11-product.html">
                                                <img src="./layouts/images/demos/demo11/products/13.jpg" alt="product" width="220"
                                                    height="245">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></a>
                                            <div class="product-cat">
                                                <a href="shop-grid-3col.html">Accessories</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo11-product.html">Cavin Black Sport Dumbbell</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$123.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="mt-10">
                        <div class="banner banner-newsletter pl-lg-6 pr-lg-6" style="background-color: #f4f4f4;">
                            <div class="banner-content row align-items-center">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="icon-box icon-box-side mb-4 mb-lg-0 appear-animate"
                                        data-animation-options="{'name': 'fadeInLeftShorter'}">
                                        <div class="icon-box-icon text-primary">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="icon-box-content">
                                            <h4 class="icon-box-title">Get Special Offers and Savings</h4>
                                            <p class="text-dark">Get all the latest information on Events, Sales and
                                                Offers.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6 d-lg-block d-flex justify-content-center">
                                    <form action="#" method="get"
                                        class="input-wrapper input-wrapper-round input-wrapper-inline ml-lg-auto appear-animate"
                                        data-animation-options="{'name': 'fadeInRightShorter'}">
                                        <input type="email" class="form-control font-primary font-italic form-solid"
                                            name="email" id="email" placeholder="Enter Your E-mail Address..."
                                            required="">
                                        <button class="btn btn-dark" type="submit">Sign up</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                   
                 

                </div>
            </div>
        </main>
        <!-- End Main -->


  <!--================ start footer Area  =================-->
  <?php include_once('layouts/footer.php'); ?>
  <!--================ end footer Area  =================-->
