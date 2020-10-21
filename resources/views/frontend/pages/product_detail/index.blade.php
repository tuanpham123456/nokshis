@extends('layouts.app_master_frontend')
@section('css')
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nokshi - Minimalist eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png')}}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/chosen.min.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/easyzoom.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bundle.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
        <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
@stop
@section('content')
<body>

    <div class="wrapper">
        <!-- header start -->
      
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
                                        <li class="active"><a href="product-details-fixed-img.html">fixed image style</a></li>
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
                                    <a href="#"><img src="{{ asset('frontend/img/cart/1.jpg')}}" alt=""></a>
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
                                    <a href="#"><img src="{{ asset('frontend/img/cart/2.jpg')}}" alt=""></a>
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
                                    <a href="#"><img src="{{ asset('frontend/img/cart/3.jpg')}}" alt=""></a>
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
                    <h2>product details</h2>
                    <ul>
                        <li>
                            <a href="#">home</a>
                        </li>
                        <li>product details </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="banner-area hm-4-padding">
            <div class="container-fluid">
                <div class="banner-img">
                    <a href="#"><img src="{{ asset('frontend/img/banner/16.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="product-details-area hm-3-padding ptb-130">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-details pr-40">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="{{ asset(pare_url_file($product->pro_avatar)) }}">
                                    <img src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content">
                            <h2>{{ $product->pro_name }}</h2>
                            <div class="product-rating">
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <span> ( 01 Customer Review )</span>
                            </div>
                            @if ($product->pro_sale)
                            @php
                                $price = ((100 - $product->pro_sale) * $product->pro_price) /100;
                            @endphp
                            <div class="product-price">
                                <span class="old">{{ number_format($product->pro_price,0,',','.')  }} đ</span>
                                <span>{{ number_format($price,0,',','.') }}đ</span>
                            </div>
                            @else
                            <div class="product-price-2">
                                <span>{{  number_format($product->pro_price,0,',','.') }} đ</span>
                            </div>
                            @endif
                            
                            <div class="product-overview">
                                <h5 class="pd-sub-title">Product Overview</h5>
                                <p>{{ $product->pro_description }}</p>
                            </div>
                            <div class="product-size">
                                <h5 class="pd-sub-title">Product size</h5>
                                <ul>
                                    <li>
                                        <a href="#">s</a>
                                    </li>
                                    <li>
                                        <a href="#">m</a>
                                    </li>
                                    <li>
                                        <a href="#">l</a>
                                    </li>
                                    <li>
                                        <a href="#">xl</a>
                                    </li>
                                    <li>
                                        <a href="#">lm</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-color">
                                <h5 class="pd-sub-title">Product color</h5>
                                <ul>
                                    <li class="red">b</li>
                                    <li class="pink">p</li>
                                    <li class="blue">b</li>
                                    <li class="sky2">b</li>
                                    <li class="green">y</li>
                                    <li class="purple2">g</li>
                                </ul>
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
                            <div class="product-categories">
                                <h5 class="pd-sub-title">Categories</h5>
                                <ul>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                    <li>
                                        <a href="#">electronics ,</a>
                                    </li>
                                    <li>
                                        <a href="#">toys ,</a>
                                    </li>
                                    <li>
                                        <a href="#">food ,</a>
                                    </li>
                                    <li>
                                        <a href="#">jewellery </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bundle-area">
                                <h3>Buy this bundle and get off to 35%</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmol tempor incidid ut labore et dolore magna aliqua.</p>
                                <div class="bundle-img">
                                    <div class="single-bundle-img">
                                        <a href="product-details.html"><img src="{{ asset('frontend/img/product-details/s1-details4.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-bundle-img">
                                        <a href="product-details.html"><img src="{{ asset('frontend/img/product-details/s2-details4.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="single-bundle-img">
                                        <a href="product-details.html"><img src="{{ asset('frontend/img/product-details/s3-details4.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="bundle-all-price">
                                    <div class="bundle-price">
                                        <ul>
                                            <li>White drone with remote  <span>$400</span> - $250</li>
                                            <li>Black drone with remote <span>$300</span> - $200</li>
                                            <li>Colorful drone with remote  <span>$600</span> - $300</li>
                                        </ul>
                                    </div>
                                    <div class="bundle-result">
                                        <h4>Price For All : <span> <span class="bundle-cross"> $1300</span> - $750</span></h4>
                                    </div>
                                </div>
                                <div class="quickview-btn-cart bundle-cart">
                                    <a class="btn-style cr-btn" href="cart.html"><span>add bundle to cart</span></a>
                                </div>
                            </div>
                            <div class="product-share">
                                <h5 class="pd-sub-title">Share</h5>
                                <ul>
                                    <li>
                                        <a href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-tumblr"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="ion-social-instagram-outline"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-logo-area hm-4-padding">
            <div class="container-fluid">
                <div class="brand-logo-active owl-carousel gray-bg ptb-130">
                    <div class="single-logo">
                        <img alt="" src="{{ asset('frontend/img/brand-logo/1.png')}}">
                    </div>
                    <div class="single-logo">
                        <img alt="" src="{{ asset('frontend/img/brand-logo/2.png')}}">
                    </div>
                    <div class="single-logo">
                        <img alt="" src="{{ asset('frontend/img/brand-logo/3.png')}}">
                    </div>
                    <div class="single-logo">
                        <img alt="" src="{{ asset('frontend/img/brand-logo/4.png')}}">
                    </div>
                    <div class="single-logo">
                        <img alt="" src="{{ asset('frontend/img/brand-logo/5.png')}}">
                    </div>
                    <div class="single-logo">
                        <img alt="" src="{{ asset('frontend/img/brand-logo/3.png')}}">
                    </div>
                </div>
            </div>
        </div>
     
    </div>   
</body>
@stop
@section('js')
<script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{ asset('frontend/js/popper.js')}}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{ asset('frontend/js/ajax-mail.js')}}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('frontend/js/plugins.js')}}"></script>
<script src="{{ asset('frontend/js/main.js')}}"></script>
@stop