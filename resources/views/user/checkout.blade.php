@extends('layouts.template')

@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('/') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Shop
                <span></span> Checkout
            </div>
        </div>
    </div>
    @php $total = 0 @endphp
    @php $totalquantity = 0 @endphp
    @foreach((array) session('cart') as $id => $details)
        @php $total += $details['price'] * $details['quantity'] @endphp
        @php $totalquantity += $details['quantity'] @endphp
    @endforeach
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Checkout</h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">There are <span class="text-brand">{{ $totalquantity }}</span> products in your cart</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <h4 class="mb-30">Billing Details</h4>
                    <form method="post">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" required="" name="fname" placeholder="First name *">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" required="" name="lname" placeholder="Last name *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="text" name="billing_address" required="" placeholder="Address *">
                            </div>
                        </div>
                        <div class="form-group mb-30">
                            <textarea rows="5" placeholder="Additional information"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="border p-40 cart-totals ml-30 mb-50">
                    <div class="d-flex align-items-end justify-content-between mb-30">
                        <h4>Your Order</h4>
                        <h6 class="text-muted">Subtotal</h6>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="table-responsive order_table checkout">
                        <table class="table no-border">
                            @php $total = 0 @endphp
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            <tbody>
                                <tr>
                                    <td class="image product-thumbnail"><img src="{{ asset('/storage/image/'.$details['image']) }}" alt="#"></td>
                                    <td>
                                        <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">{{ $details['name'] }}</a></h6></span>
                                    </td>
                                    <td>
                                        <h6 class="text-muted pl-20 pr-20">x {{ $details['quantity'] }}</h6>
                                    </td>
                                    <td>
                                        <h4 class="text-brand">RM {{ $details['price_promotion'] * $details['quantity'] }}</h4>
                                    </td>
                                </tr>
                                    @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="d-flex align-items-end justify-content-between mb-30">
                        <h4>Total Price</h4>
                        <h6 class="text-brand">RM {{ $total }}</h6>
                    </div>
                </div>
                <div class="payment ml-30">
                    <h4 class="mb-30">Payment</h4>
                    <div class="payment_option">
                        <div class="custome-radio">
                            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="">
                            <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Bank Transfer</label>
                        </div>
                        <div class="custome-radio">
                            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="">
                            <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Cash on delivery</label>
                        </div>
                        <div class="custome-radio">
                            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                            <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Card</label>
                        </div>
                    </div>
                    <div class="payment-logo d-flex">
                        <img class="mr-15" src="{!! asset('assets/imgs/theme/icons/payment-paypal.svg') !!}" alt="">
                        <img class="mr-15" src="{!! asset('assets/imgs/theme/icons/payment-visa.svg') !!}" alt="">
                        <img class="mr-15" src="{!! asset('assets/imgs/theme/icons/payment-master.svg') !!}" alt="">
                        <img src="{!! asset('assets/imgs/theme/icons/payment-zapper.svg') !!}" alt="">
                    </div>
                    <a href="#" class="btn btn-fill-out btn-block mt-30">Place an Order<i class="fi-rs-sign-out ml-15"></i></a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection