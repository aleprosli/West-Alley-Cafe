<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>West Alley Cafe</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{!!asset('assets/imgs/logo.jpg') !!}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{!!asset('assets/css/main.css?v=1.2') !!}">
</head>

<body>
    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">              
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>       
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-2.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-1.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-3.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-4.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-5.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-6.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-7.jpg" alt="product image">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="assets/imgs/shop/thumbnail-3.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-4.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-5.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-6.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-7.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-8.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-9.jpg" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock">
                                    Sale Off
                                </span>
                                <h3 class="title-detail"><a href="shop-product-right.html" class="text-heading">Seeds of Change Organic Quinoa, Brown</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">$38</span>
                                        <span>
                                            <span class="save-price  font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">$52</span>
                                        </span>
                                    </div>
                                </div>                               
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2021</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <header class="header-area header-style-1 header-height-2">
        {{-- <div class="mobile-promotion"><span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span></div> --}}
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        {{-- <a href="#"><img src="assets/imgs/theme/logo.svg" alt="logo"></a> --}}
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    <option>Milks and Dairies</option>
                                    <option>Wines & Alcohol</option>
                                    <option>Clothing & Beauty</option>
                                    <option>Pet Foods & Toy</option>
                                    <option>Fast food</option>
                                    <option>Baking material</option>
                                    <option>Vegetables</option>
                                    <option>Fresh Seafood</option>
                                    <option>Noodles & Rice </option>
                                    <option>Ice cream</option>
                                </select>
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                @guest
                                <div class="header-action-icon-2">
                                    <a href="{{ route('login') }}">
                                        <img class="svgInject" alt="Nest" src="{!!asset('assets/imgs/theme/icons/icon-user.svg')!!}">
                                    </a>
                                    <span class="lable ml-0">Account</span>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Nest" src="{!!asset('assets/imgs/theme/icons/icon-cart.svg')!!}">
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <span class="lable">Cart</span>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest" src="{!!asset('assets/imgs/shop/thumbnail-3.jpg')!!}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest" src="{!!asset('assets/imgs/shop/thumbnail-2.jpg')!!}"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="shop-cart.html" class="outline">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img class="svgInject" alt="Nest" src="{!!asset('assets/imgs/theme/icons/icon-user.svg')!!}">
                                    </a>
                                    <span class="lable">{{ Auth::user()->name }}</span>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active " href="#">
                                <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                                <i class="fi-rs-angle-down"></i>
                            </a>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>
                                    <li class="hot-deals"><img src="{!! asset('assets/imgs/theme/icons/icon-hot.svg') !!}" alt="hot deals"><a href="shop-grid-right.html">Hot Deals</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-flex">
                        <img src="{!! asset('assets/imgs/theme/icons/phone-call.svg') !!}" height="40px" width="40px" alt="hotline">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <p>60 13-609 0205<span>West Alley Cafe H/P</span></p>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            @guest
                            <div class="header-action-icon-2">
                                <a href="{{ route('login') }}">
                                    <img class="svgInject" alt="Nest" src="{!!asset('assets/imgs/theme/icons/icon-user.svg')!!}">
                                </a>
                                <span class="lable ml-0">Account</span>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html">
                                    <img alt="Nest" src="{!!asset('assets/imgs/theme/icons/icon-cart.svg')!!}">
                                    <span class="pro-count blue">2</span>
                                </a>
                                <span class="lable">Cart</span>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest" src="{!!asset('assets/imgs/shop/thumbnail-3.jpg')!!}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                <h4><span>1 × </span>$800.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest" src="{!!asset('assets/imgs/shop/thumbnail-2.jpg')!!}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                <h4><span>1 × </span>$3200.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$4000.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html" class="outline">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html">
                                    <img class="svgInject" alt="Nest" src="{!!asset('assets/imgs/theme/icons/icon-user.svg')!!}">
                                </a>
                                <span class="lable">{{ Auth::user()->name }}</span>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href="page-contact.html"><i class="fi-rs-marker"></i> About Us </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="{{ route('login') }}"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#"><i class="fi-rs-headphones"></i>+60 13-609 0205</a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img src="{!! asset('assets/imgs/theme/icons/icon-facebook-white.svg') !!}" alt=""></a>
                    <a href="#"><img src="{!! asset('assets/imgs/theme/icons/icon-instagram-white.svg') !!}" alt=""></a>
                </div>
                <div class="site-copyright"> Copyright 2021 © West Alley Cafe</div>
            </div>
        </div>
    </div>
    <!--End header-->
    <main class="main">
        @yield('content')
    </main>
    {{-- <footer class="main">
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0">
                            <div class="logo wow fadeIn animated mb-30">
                                <a href="index.html" class="mb-15"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
                                <p class="font-lg text-heading">Awesome grocery store website template</p>
                            </div>
                            <ul class="contact-infor">
                                <li><img src="assets/imgs/theme/icons/icon-location.svg" alt=""><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt=""><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                <li><img src="assets/imgs/theme/icons/icon-email-2.svg" alt=""><strong>Email:</strong><span>sale@Nest.com</span></li>
                                <li><img src="assets/imgs/theme/icons/icon-clock.svg" alt=""><strong>Hours:</strong><span>10:00 - 18:00, Mon - Sat</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-widget col">
                        <h4 class="widget-title wow fadeIn animated">Company</h4>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col">
                        <h4 class="widget-title wow fadeIn animated">Account</h4>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help Ticket</a></li>
                            <li><a href="#">Shipping Details</a></li>
                            <li><a href="#">Compare products</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col">
                        <h4 class="widget-title wow fadeIn animated">Corporate</h4>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">Become a Vendor</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Farm Business</a></li>
                            <li><a href="#">Farm Careers</a></li>
                            <li><a href="#">Our Suppliers</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Promotions</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col">
                        <h4 class="widget-title wow fadeIn animated">Popular</h4>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">Milk & Flavoured Milk</a></li>
                            <li><a href="#">Butter and Margarine</a></li>
                            <li><a href="#">Eggs Substitutes</a></li>
                            <li><a href="#">Marmalades</a></li>
                            <li><a href="#">Sour Cream and Dips</a></li>
                            <li><a href="#">Tea & Kombucha</a></li>
                            <li><a href="#">Cheese</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget widget-install-app col">
                        <h4 class="widget-title wow fadeIn animated">Install App</h4>
                        <p class="wow fadeIn animated">From App Store or Google Play</p>
                        <div class="download-app wow fadeIn animated">
                            <a href="#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt=""></a>
                            <a href="#" class="hover-up mb-sm-2"><img src="assets/imgs/theme/google-play.jpg" alt=""></a>
                        </div>
                        <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                        <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-30 wow fadeIn animated">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; 2021, <strong class="text-brand">Nest</strong> - HTML Ecommerce Template
                        <br>All rights reserved</p>
                </div>
                <div class="col-xl-4  col-lg-6 text-center d-none d-xl-block">
                    <div class="hotline d-lg-inline-flex mr-30">
                        <img src="assets/imgs/theme/icons/phone-call.svg" alt="hotline">
                        <p>1900 - 6666<span>Working 8:00 - 22:00</span></p>
                    </div>
                    <div class="hotline d-lg-inline-flex">
                        <img src="assets/imgs/theme/icons/phone-call.svg" alt="hotline">
                        <p>1900 - 8888<span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4  col-lg-6  col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                        <h6>Follow Us </h6>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt=""></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt=""></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt=""></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt=""></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt=""></a>
                    </div>
                    <p class="font-sm">Up to 15% discount on your first subscribe</p>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{!!asset('assets/imgs/theme/loading.gif') !!}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{!!asset('assets/js/vendor/modernizr-3.6.0.min.js') !!}"></script>
    <script src="{!!asset('assets/js/vendor/jquery-3.6.0.min.js') !!}"></script>
    <script src="{!!asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') !!}"></script>
    <script src="{!!asset('assets/js/vendor/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/slick.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/jquery.syotimer.min.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/wow.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/jquery-ui.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/perfect-scrollbar.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/magnific-popup.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/select2.min.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/waypoints.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/counterup.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/jquery.countdown.min.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/images-loaded.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/isotope.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/scrollup.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/jquery.vticker-min.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/jquery.theia.sticky.js') !!}"></script>
    <script src="{!!asset('assets/js/plugins/jquery.elevatezoom.js') !!}"></script>
    <!-- Template  JS -->
    <script src="{!!asset('assets/js/main.js') !!}"></script>
    <script src="{!!asset('assets/js/shop.js') !!}"></script>
</body>

</html>