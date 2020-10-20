<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nokshi - Minimalist eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/chosen.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
        <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->
            @include('frontend.components.header')
            @yield('content')
            @include('frontend.components.footer')
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
                                            <img src="{{ asset('frontend/img/quick-view/l4.jpg') }}" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="{{ asset('frontend/img/quick-view/l5.jpg') }}" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="{{ asset('frontend/img/quick-view/l6.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab">
                                        <img src="{{ asset('frontend/img/quick-view/s4.jpg') }}" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab">
                                        <img src="{{ asset('frontend/img/quick-view/s5.jpg') }}" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab">
                                        <img src="{{ asset('frontend/img/quick-view/s6.jpg') }}" alt="">
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
            <!-- modal -->
            <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog modal-compare-width" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="#">
                                <div class="table-content compare-style table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>
                                                    <a href="#">Remove <span>x</span></a>
                                                    <img src="{{ asset('frontend/img/cart/8.jpg') }}" alt="">
                                                    <p>Blush Sequin Top </p>
                                                    <span>$75.99</span>
                                                    <a class="compare-btn" href="cart.html">Add to cart</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="compare-title"><h4>Description </h4></td>
                                                <td class="compare-dec compare-common">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="compare-title"><h4>Sku </h4></td>
                                                <td class="product-none compare-common">
                                                    <p>-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="compare-title"><h4>Availability  </h4></td>
                                                <td class="compare-stock compare-common">
                                                    <p>In stock</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="compare-title"><h4>Weight   </h4></td>
                                                <td class="compare-none compare-common">
                                                    <p>-</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="compare-title"><h4>Dimensions   </h4></td>
                                                <td class="compare-stock compare-common">
                                                    <p>N/A</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="compare-title"><h4>brand   </h4></td>
                                                <td class="compare-brand compare-common">
                                                    <p>Demo</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="compare-title"><h4>color   </h4></td>
                                                <td class="compare-color compare-common">
                                                    <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="compare-title"><h4>size    </h4></td>
                                                <td class="compare-size compare-common">
                                                    <p>XS, S, M, L, XL, XXL </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="compare-title"></td>
                                                <td class="compare-price compare-common">
                                                    <p>$75.99 </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
		
		
		
		
		
		
		
		
		<!-- all js here -->
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/js/ajax-mail.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>
