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
    <header class="header-area header-style-1 header-height-2">
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
                                    @php $total = 0 @endphp
                                    @php $totalquantity = 0 @endphp
                                    @foreach((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        @php $totalquantity += $details['quantity'] @endphp
                                    @endforeach
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Nest" src="{!!asset('assets/imgs/theme/icons/icon-cart.svg')!!}">
                                        <span class="pro-count blue">{{ $totalquantity }}</span>
                                    </a>
                                    <span class="lable">Cart</span>
                                    
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <ul>
                                                    <li>
                                                        <div class="shopping-cart-img">
                                                            <a href="shop-product-right.html"><img alt="Nest" src="{{ asset('/storage/image/'.$details['image']) }}"></a>
                                                        </div>
                                                        <div class="shopping-cart-title">
                                                            <h4><a href="shop-product-right.html">{{ $details['name'] }}</a></h4>
                                                            <h4><span>{{ $details['quantity'] }} × </span>{{ $details['price_promotion'] }}</h4>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @endforeach
                                        @endif
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total RM:<span>{{ $total }}</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="{{ route('cart') }}" class="outline">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{ route('admin.home') }}">
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
        <div class="header-bottom header-bottom-bg-color sticky-bar;" style="background-image: url(assets/imgs/logo.jpg);">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top" style="background-image: url(assets/imgs/logo.jpg);">
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
                        <a href="tel:+60136090205"><i class="fi-rs-headphones"></i>+60 13-609 0205</a>
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
            @if(session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div> 
        @endif
        @yield('content')
    </main>
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