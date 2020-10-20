@extends('layouts.app_master_frontend')
@section('css')
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nokshi - Minimalist eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/}img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
@stop
@section('content')
<div class="wrapper">
   
    @include('frontend.components.slider')

    <div class="header-height"></div>
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
                            <li><a href="index-2.html">home version 2</a></li>
                            <li><a href="index-3.html">home version 3</a></li>
                            <li><a href="index-4.html">home version 4</a></li>
                        </ul>
                    </li>
                    <li class="cr-dropdown"><a href="#">shop <i class="ion-ios-arrow-down"></i></a>
                        <ul>
                            <li class="cr-sub-dropdown sub-style"><a href="#">shop grid<i class="ion-ios-arrow-down"></i></a>
                                <ul>
                                    <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                    <li class="active"><a href="shop-grid-3-col.html"> grid 3 column</a></li>
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
                                <a href=""><img src="{{ asset('frontend/img/cart/1.jpg') }}" alt=""></a>
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
    <div class="breadcrumb-area mt-37 hm-4-padding">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center border-top-2">
                <h2>Shop Grid 3 Column</h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>Shop Grid 3 Column</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="banner-area hm-4-padding">
        <div class="container-fluid">
            <div class="banner-img">
                <a href="#"><img src="{{ asset('frontend/img/banner/16.jpg') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="shop-wrapper hm-3-padding pt-120 pb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop-topbar-wrapper">
                        <div class="grid-list-options">
                            <ul class="view-mode">
                                <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ion-grid"></i></a></li>
                                <li><a href="#product-list" data-view="product-list"><i class="ion-navicon"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-filter">
                            <button class="product-filter-toggle">filter</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-filter-wrapper">
                        <div class="row">
                            <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                <h5>Sort by</h5>
                                <ul class="sort-by">
                                    <li><a href="#">Default</a></li>
                                    <li><a href="#">Popularity</a></li>
                                    <li><a href="#">Average rating</a></li>
                                    <li><a href="#">Newness</a></li>
                                    <li><a href="#">Price: Low to High</a></li>
                                    <li><a href="#">Price: High to Low</a></li>
                                </ul>
                            </div>
                            <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                <h5>color filters</h5>
                                <ul class="color-filter">
                                    <li><a href="#"><i style="background-color: #000000;"></i>Black</a></li>
                                    <li><a href="#"><i style="background-color: #663300;"></i>Brown</a></li>
                                    <li><a href="#"><i style="background-color: #FF6801;"></i>Orange</a></li>
                                    <li><a href="#"><i style="background-color: #ff0000;"></i>red</a></li>
                                    <li><a href="#"><i style="background-color: #FFEE00;"></i>Yellow</a></li>
                                </ul>
                            </div>
                            <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                <h5>product tags</h5>
                                <div class="product-tags">
                                    <a href="#">New ,</a>
                                    <a href="#">brand ,</a>
                                    <a href="#">black ,</a>
                                    <a href="#">white ,</a>
                                    <a href="#">chire ,</a>
                                    <a href="#">table ,</a>
                                    <a href="#">Lorem ,</a>
                                    <a href="#">ipsum ,</a>
                                    <a href="#">dolor ,</a>
                                    <a href="#">sit ,</a>
                                    <a href="#">amet ,</a>
                                </div>
                            </div>
                            <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                                <h5>Filter by price</h5>
                                <div id="price-range"></div>
                                <div class="price-values">
                                    <span>Price:</span>
                                    <input type="text" class="price-amount">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @include('frontend.components.product-item')
        </div>
    </div>
    <div class="brand-logo-area hm-4-padding">
        <div class="container-fluid">
            <div class="brand-logo-active owl-carousel gray-bg ptb-130">
                <div class="single-logo">
                    <img alt="" src="{{ asset('frontend/img/brand-logo/1.png') }}">
                </div>
                <div class="single-logo">
                    <img alt="" src="{{ asset('frontend/img/brand-logo/2.png') }}">
                </div>
                <div class="single-logo">
                    <img alt="" src="{{ asset('frontend/img/brand-logo/3.png') }}">
                </div>
                <div class="single-logo">
                    <img alt="" src="{{ asset('frontend/img/brand-logo/4.png') }}">
                </div>
                <div class="single-logo">
                    <img alt="" src="{{ asset('frontend/img/brand-logo/5.png') }}">
                </div>
                <div class="single-logo">
                    <img alt="" src="{{ asset('frontend/') }}img/brand-logo/3.png">
                </div>
            </div>
        </div>
    </div>
  
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="ion-android-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="{{ asset('frontend/img/quick-view/l1.jpg') }}" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="{{ asset('frontend/img/quick-view/l2.jpg') }}" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="{{ asset('frontend/img/quick-view/l3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab">
                                <img src="{{ asset('frontend/img/quick-view/s1.jpg') }}" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab">
                                <img src="{{ asset('frontend/img/quick-view/s2.jpg') }}" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab">
                                <img src="{{ asset('frontend/img/quick-view/s3.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Handcrafted Supper Mug</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00  </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="ion-ios-star red-star"></i>
                                    <i class="ion-ios-star red-star"></i>
                                    <i class="ion-ios-star red-star"></i>
                                    <i class="ion-ios-star red-star"></i>
                                    <i class="ion-ios-star red-star"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-style cr-btn" href="#"><span>add to cart</span></a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover cr-btn" href="#"><span><i class="ion-ios-heart-outline"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('js')
<script src="{{ 'frontend/js/vendor/jquery-1.12.0.min.js' }}"></script>
<script src="{{ 'frontend/js/popper.js' }}"></script>
<script src="{{ 'frontend/s/bootstrap.min.js' }}j"></script>
<script src="{{ 'frontend/js/isotope.pkgd.min.js' }}"></script>
<script src="{{ 'frontend/js/imagesloaded.pkgd.min.js' }}"></script>
<script src="{{ 'frontend/js/jquery.counterup.min.js' }}"></script>
<script src="{{ 'frontend/js/waypoints.min.js' }}"></script>
<script src="{{ 'frontend/js/ajax-mail.js' }}"></script>
<script src="{{ 'frontend/js/owl.carousel.min.js' }}"></script>
<script src="{{ 'frontend/js/plugins.js' }}"></script>
<script src="{{ 'frontend/js/main.js' }}"></script>
@stop