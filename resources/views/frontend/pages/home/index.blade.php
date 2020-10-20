@extends('layouts.app_master_frontend')
@section('content')
          <!-- menu-style start -->
            <div class="sidebarmenu-wrapper">
                <div class="menu-close">
                    <button><i class="ion-android-close"></i></button>
                </div>
                <div class="sidebarmenu-style">
                    <nav class="menu">
                        <ul>
                            <li class="cr-dropdown"><a href="#">home <i class="ion-ios-arrow-down"></i></a>
                                <ul>
                                    <li><a href="index.html">home version 1</a></li>
                                    <li class="active"><a href="index-2.html">home version 2</a></li>
                                    <li><a href="index-3.html">home version 3</a></li>
                                    <li><a href="index-4.html">home version 4</a></li>
                                </ul>
                            </li>
                            <li class="cr-dropdown"><a href="#">shop <i class="ion-ios-arrow-down"></i></a>
                                <ul>
                                    <li class="cr-sub-dropdown sub-style"><a href="#">shop grid<i class="ion-ios-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                            <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                            <li><a href="shop.html"> grid 4 column</a></li>
                                            <li><a href="shop-grid-6-col.html"> grid 6 column</a></li>
                                            <li><a href="shop-grid-box.html"> grid box style</a></li>
                                        </ul>
                                    </li>
                                    <li class="cr-sub-dropdown sub-style"><a href="#">shop list<i class="ion-ios-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="shop-list.html"> list 1 column</a></li>
                                            <li><a href="shop-list-2-col.html"> list 2 column</a></li>
                                            <li><a href="shop-list-3-col.html"> list 3 column</a></li>
                                            <li><a href="shop-list-box.html"> list box style</a></li>
                                        </ul>
                                    </li>
                                    <li class="cr-sub-dropdown sub-style"><a href="#">product details<i class="ion-ios-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="product-details.html">tab style</a></li>
                                            <li><a href="product-details-sticky.html">sticky style</a></li>
                                            <li><a href="product-details-gallery.html">gallery style</a></li>
                                            <li><a href="product-details-fixed-img.html">fixed image style</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="cr-dropdown"><a href="#">pages <i class="ion-ios-arrow-down"></i></a>
                                <ul>
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="login-register.html">login</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">about us</a></li>
                            <li class="cr-dropdown"><a href="#">blog <i class="ion-ios-arrow-down"></i></a>
                                <ul>
                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                    <li class="cr-sub-dropdown sub-style"><a href="#">Blog Standard <i class="ion-ios-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                            <li><a href="blog-no-sidebar.html">no sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="cr-sub-dropdown sub-style"><a href="#">Post Types <i class="ion-ios-arrow-down"></i></a>
                                        <ul>
                                            <li><a href="blog-details-standerd.html">Standard post</a></li>
                                            <li><a href="blog-details-audio.html">audio post</a></li>
                                            <li><a href="blog-details-video.html">video post</a></li>
                                            <li><a href="blog-details-gallery.html">gallery post</a></li>
                                            <li><a href="blog-details-link.html">link post</a></li>
                                            <li><a href="blog-details-quote.html">quote post</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="login-register.html">login</a></li>
                            <li><a href="contact.html">contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="newsletter-area">
                    <h4 class="newsletter-title">Newsletter</h4>
                    <p>Send us your mail or next updates.</p>
                    <div id="mc_embed_signup" class="subscribe-form">
                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" value="" name="EMAIL" class="email" placeholder="Your Mail :" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="follow-area mt-60">
                    <h4 class="newsletter-title">Follow Us</h4>
                    <div class="follow-icon">
                        <ul>
                            <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li class="instagram"><a href="#"><i class="ion-social-instagram"></i></a></li>
                            <li class="tumblr"><a href="#"><i class="ion-social-tumblr"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- sidebar-cart start -->
            <div class="sidebar-cart onepage-sidebar-area">
                <div class="wrap-sidebar">
                    <div class="sidebar-cart-all">
                        <div class="sidebar-cart-icon">
                            <button class="op-sidebar-close"><span class="ti-close"></span></button>
                        </div>
                        <div class="cart-content">
                            <h3>Shopping Cart</h3>
                            <ul>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="{{ asset('frontend/img/cart/1.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> Trucker Chair</a></h3>
                                        <span>1 x $140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ti-trash"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="{{ asset('frontend/img/cart/2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> Reclining Sofa</a></h3>
                                        <span>1 x $140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ti-trash"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="{{ asset('frontend/img/cart/3.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#">Handmade Pot</a></h3>
                                        <span>1 x $140.00</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ti-trash"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-total">
                                        <h4>Total : <span>$ 120</span></h4>
                                    </div>
                                </li>
                            </ul>
                            <div class="cart-checkout-btn">
                                <a class="cr-btn btn-style cart-btn-style" href="#"><span>view cart</span></a>
                                <a class="no-mrg cr-btn btn-style cart-btn-style" href="#"><span>checkout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-search start -->
            <div class="main-search-active">
                <div class="sidebar-search-icon">
                    <button class="search-close"><span class="ti-close"></span></button>
                </div>
                <div class="sidebar-search-input">
                    <form>
                        <div class="form-search">
                            <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                            <button>
                                <i class="ti-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @include('frontend.components.slider')
            @include('frontend.pages.home.include.flash_sale')
            <div class="product-area pb-90 product-padding">
                <div class="container-fluid">
                    <div class="section-title-2 text-center mb-25">
                        <h2 class="m-0">Our Collection</h2>
                    </div>
                    <div class="product-tab-list text-center mb-60 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home4" data-toggle="tab">
                            <h4>Featured </h4>
                        </a>
                        <a href="#home5" data-toggle="tab">
                            <h4> Latest </h4>
                        </a>
                        <a href="#home6" data-toggle="tab">
                            <h4>Best Seller</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home4" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/12.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Ptttery Tea Mug</a></h4>
                                            <div class="product-price-2">
                                                <span>$30.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/13.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Showpiece</a></h4>
                                            <div class="product-price-2">
                                                <span>$40.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/14.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Water Jug</a></h4>
                                            <div class="product-price-2">
                                                <span>$50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/15.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Flower Vase</a></h4>
                                            <div class="product-price-2">
                                                <span>$60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/16.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Flower Vase</a></h4>
                                            <div class="product-price-2">
                                                <span>$70.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/17.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Ptttery Tea Mug</a></h4>
                                            <div class="product-price-2">
                                                <span>$80.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="home5" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/17.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Water Mug</a></h4>
                                            <div class="product-price-2">
                                                <span>$30.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/16.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Flower Vase</a></h4>
                                            <div class="product-price-2">
                                                <span>$40.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/15.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Flower Vase</a></h4>
                                            <div class="product-price-2">
                                                <span>$50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/14.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Water Jug</a></h4>
                                            <div class="product-price-2">
                                                <span>$60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/13.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Showpiece</a></h4>
                                            <div class="product-price-2">
                                                <span>$70.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/12.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Ptttery Tea Mug</a></h4>
                                            <div class="product-price-2">
                                                <span>$80.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="home6" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/14.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Water Jug</a></h4>
                                            <div class="product-price-2">
                                                <span>$30.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/12.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Showpiece</a></h4>
                                            <div class="product-price-2">
                                                <span>$40.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/13.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Showpiece</a></h4>
                                            <div class="product-price-2">
                                                <span>$50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/17.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Flower Vase</a></h4>
                                            <div class="product-price-2">
                                                <span>$60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/15.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Pottery Flower Vase</a></h4>
                                            <div class="product-price-2">
                                                <span>$70.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend/img/product/16.jpg') }}" alt="">
                                            </a>
                                            <div class="product-wishlist">
                                                <a href="#"><i class="ti-heart"></i></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="ti-plus"></i>
                                                </a>
                                                <a class="action-cart-2" title="Add To Cart" href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                                    <i class="ti-reload"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h4><a href="product-details.html">Ptttery Tea Mug</a></h4>
                                            <div class="product-price-2">
                                                <span>$80.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-area pb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-wrapper overflow mb-30">
                                <div class="banner-img">
                                    <a href="product-details.html">
                                        <img alt="image" src="{{ asset('frontend/img/banner/9.jpg') }}">
                                    </a>
                                </div>
                                <div class="banner-content-7">
                                    <img alt="image" src="{{ asset('frontend/img/icon-img/2.png') }}">
                                    <h2>Lovely Gift</h2>
                                    <a href="product-details.html" class="banner-btn-2 cr-btn"><span>Shop Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-wrapper overflow mb-30">
                                <div class="banner-img">
                                    <a href="product-details.html">
                                        <img alt="image" src="{{ asset('frontend/img/banner/10.jpg') }}">
                                    </a>
                                </div>
                                <div class="banner-content-7">
                                    <img alt="image" src="{{ asset('frontend/img/icon-img/2.png') }}">
                                    <h2>Winter Gift </h2>
                                    <a href="product-details.html" class="banner-btn-2 cr-btn"><span>Shop Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-area pb-125 product-padding">
                <div class="container-fluid">
                    <div class="section-title-2 text-center mb-55">
                        <h2 class="mb-12">New Collection</h2>
                        <p>There are many variations of passages of Lorem Ipsum. </p>
                    </div>
                    <div class="collection-product-active owl-carousel">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('frontend/img/product/18.jpg') }}" alt="">
                                </a>
                                <div class="product-wishlist">
                                    <a href="#"><i class="ti-heart"></i></a>
                                </div>
                                <div class="product-action-2">
                                    <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a class="action-cart-2" title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                        <i class="ti-reload"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="product-details.html">Ptttery Tea Mug</a></h4>
                                <div class="product-price-2">
                                    <span>$30.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('frontend/img/product/19.jpg') }}" alt="">
                                </a>
                                <div class="product-wishlist">
                                    <a href="#"><i class="ti-heart"></i></a>
                                </div>
                                <div class="product-action-2">
                                    <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a class="action-cart-2" title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                        <i class="ti-reload"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="product-details.html">Pottery Water Jug</a></h4>
                                <div class="product-price-2">
                                    <span>$30.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('frontend/img/product/20.jpg') }}" alt="">
                                </a>
                                <div class="product-wishlist">
                                    <a href="#"><i class="ti-heart"></i></a>
                                </div>
                                <div class="product-action-2">
                                    <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="ti-plus"></i>
                                    </a>
                                    <a class="action-cart-2" title="Add To Cart" href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                    <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                        <i class="ti-reload"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="product-details.html"> Hand made Pot</a></h4>
                                <div class="product-price-2">
                                    <span>$30.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-area">
                <div class="container-fluid">
                    <div class="testimonial-active owl-carousel pt-130 pb-125 theme-bg">
                        <div class="single-testimonial text-center">
                            <img alt="" src="{{ asset('frontend/img/team/1.png') }}">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                            <div class="testimonial-icon">
                                <i class="ti-direction-alt"></i>
                            </div>
                            <h4>Sara Austin </h4>
                            <span>Customer</span>
                        </div>
                        <div class="single-testimonial text-center">
                            <img alt="" src="{{ asset('frontend/img/team/1.png') }}">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                            <div class="testimonial-icon">
                                <i class="ti-direction-alt"></i>
                            </div>
                            <h4>Roy Lane</h4>
                            <span>Customer</span>
                        </div>
                        <div class="single-testimonial text-center">
                            <img alt="" src="{{ asset('frontend/img/team/1.png') }}">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat</p>
                            <div class="testimonial-icon">
                                <i class="ti-direction-alt"></i>
                            </div>
                            <h4>Ruth Wells </h4>
                            <span>Customer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area pt-130 pb-85 blog-padding hm-blog">
                <div class="container-fluid">
                    <div class="section-title-2 text-center mb-55">
                        <h2 class="mb-12">Latest Blog</h2>
                        <p>There are many variations of passages of Lorem Ipsum. </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="blog-hm-wrapper mb-40">
                                <div class="blog-img">
                                    <a href="blog-details-standerd.html"><img src="{{ asset('frontend/img/blog/1.jpg') }}" alt="image"></a>
                                </div>
                                <div class="blog-hm-content">
                                    <h3><a href="blog-details-standerd.html">Lorem ipsum dolor sit amet consectetu to adipisicing elit sed do eius</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><span>by:</span><a href="#">Admin</a></li>
                                            <li><span>On</span> 14 Oct, 2018</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetl adipisicing elit, sed do eiusmod tempor incididul ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="blog-hm-wrapper mb-40">
                                <div class="blog-img">
                                    <a href="blog-details-standerd.html"><img src="{{ asset('frontend/img/blog/2.jpg') }}" alt="image"></a>
                                </div>
                                <div class="blog-hm-content">
                                    <h3><a href="blog-details-standerd.html">Lorem ipsum dolor sit amet consectetu to adipisicing elit sed do eius</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><span>by:</span><a href="#">Admin</a></li>
                                            <li><span>On</span> 14 Oct, 2018</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetl adipisicing elit, sed do eiusmod tempor incididul ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="blog-hm-wrapper mb-40">
                                <div class="blog-img">
                                    <a href="blog-details-standerd.html"><img src="{{ asset('frontend/img/blog/3.jpg') }}" alt="image"></a>
                                </div>
                                <div class="blog-hm-content">
                                    <h3><a href="blog-details-standerd.html">Lorem ipsum dolor sit amet consectetu to adipisicing elit sed do eius</a></h3>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><span>by:</span><a href="#">Admin</a></li>
                                            <li><span>On</span> 14 Oct, 2018</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetl adipisicing elit, sed do eiusmod tempor incididul ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-area services-padding pb-100">
                <div class="container-fluid">
                    <div class="services-wrapper">
                        <div class="single-services mb-30">
                            <div class="services-icon">
                                <img alt="" src="{{ asset('frontend/img/icon-img/3.png') }}">
                            </div>
                            <div class="services-text">
                                <h5>FREE SHIPPING</h5>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                        <div class="single-services mb-30">
                            <div class="services-icon">
                                <img alt="" src="{{ asset('frontend/img/icon-img/4.png') }}">
                            </div>
                            <div class="services-text">
                                <h5>ONLINE SUPPORT</h5>
                                <p>Online support 24 hours a day</p>
                            </div>
                        </div>
                        <div class="single-services mb-30">
                            <div class="services-icon">
                                <img alt="" src="{{ asset('frontend/img/icon-img/5.png') }}">
                            </div>
                            <div class="services-text">
                                <h5>MONEY RETURN</h5>
                                <p>Back guarantee under 5 days</p>
                            </div>
                        </div>
                        <div class="single-services mb-30">
                            <div class="services-icon">
                                <img alt="" src="{{ asset('frontend/img/icon-img/6.png') }}">
                            </div>
                            <div class="services-text">
                                <h5>MEMBER DISCOUNT</h5>
                                <p>Onevery order over $150</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop