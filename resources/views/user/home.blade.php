@extends('layouts.template')

@section('content')
<section class="home-slider style-2 position-relative mb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="home-slide-cover">
                    <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url(assets/imgs/ramengrilledsalmon.jpg);">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40">Ramen<br> Grill Salmon</h1>
                                <p class="mb-65">Ramen, seasoned fresh grill salmon, homemade creamy sauce </p>
                                    <a href="https://www.foodpanda.my/restaurant/ya3r/west-alley" class="btn btn-xs">Buy Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url(assets/imgs/foodpanda.png);">
                            <div class="slider-content">
                                <h1 class="display-3 mb-40">Get delivered to your door by</h1>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <a href="https://www.foodpanda.my/restaurant/ya3r/west-alley" class="btn btn-xs">Get Now <i class="fi-rs-arrow-small-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-xl-block">
                <div class="banner-img style-3 wow fadeIn animated animated animated" style="background-image: url(assets/imgs/logo.jpg);">
                    <div class="banner-text mt-50">
                        <h3 class="mb-50"><span class="text-brand">Know <br> more <br>about<br> us</span></h3>
                        <a href="shop-grid-right.html" class="btn btn-xs">More <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End hero slider-->
<!--End banners-->
<section class="product-tabs section-padding position-relative wow fadeIn animated">
    <div class="container">
        <div class="section-title style-2">
            <h3>Popular Choice</h3>
            <ul class="nav nav-tabs links" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Ramen</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Sandwich</button>
                </li>
            </ul>
        </div>
        <!--End nav-tabs-->
        <div class="tab-content wow fadeIn animated" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                    @foreach( $foods as $key=> $food)    
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img" src="{{ asset('/storage/image/'.$food->image) }}" alt="" height="200px" weight="50x">
                                        <img class="hover-img" src="{{ asset('/storage/image/'.$food->image) }}" alt="" height="200px" weight="50x">
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">{{ $food->category()->value('type') ?? NULL}}</a>
                                </div>
                                <h2><a href="shop-product-right.html">{{ $food->name }}</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width:90%">
                                        </div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">500g</span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>RM{{ $food->price_promotion }}</span>
                                        <span class="old-price">RM{{ $food->price }}</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Buy Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <!--end product card-->
                </div>
                <!--End product-grid-4-->
            </div>
        </div>
        <!--End tab-content-->
    </div>
</section>
<!--Products Tabs-->
<section class="section-padding pb-5">
    <div class="container">
        <div class="section-title">
            <h3 class="">Recommended</h3>
            <ul class="nav nav-tabs links" id="myTab-2" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="banner-img style-2 wow fadeIn animated">
                    <div class="banner-text">
                        <h2 class="mb-100">Bring food into your home </h2>
                        <a href="https://www.foodpanda.my/restaurant/ya3r/west-alley" class="btn btn-xs">Get now <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                @foreach( $foods as $key=> $food)    
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="{{ asset('/storage/image/'.$food->image) }}" alt="" height="200px" weight="50x">
                                                <img class="hover-img" src="{{ asset('/storage/image/'.$food->image) }}" alt="" height="200px" weight="50x">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">{{ $food->category()->value('type') ?? NULL}}</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">{{ $food->name }} </a></h2>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:80%">
                                            </div>
                                        </div>
                                        <div class="product-price mt-10">
                                            <span>RM{{ $food->price_promotion }}</span>
                                            <span class="old-price">RM{{ $food->price }}/span>
                                        </div>
                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">
                                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-xs text-heading"> Sold: 90/120</span>
                                        </div>
                                        <a href="shop-cart.html" class="btn w-100 hover-up"><i class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>
<!--End Best Sales-->

<!--End Deals-->
<!--End 4 columns-->
<!--End category slider-->
@endsection