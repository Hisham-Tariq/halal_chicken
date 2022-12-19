@extends('client/layouts.default')

@section('content')


 <!---Breadcumb
============================== -->
<div  data-bg-src="assets/halalchickenimages/banners/banner1.jpg">
    <div class="breadcumb-wrapper " style="background-color: rgba(0, 0, 0, 0.8)">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-white">CHECK-<span class="font-style text-theme2">OUT</span></h1>
                <ul class="breadcumb-menu" >
                    <li><a href="index.html" style="color:white">Home</a></li>
                    <li style="color:white">Check-out</li>
                </ul>
            </div>
        </div>
    </div>
</div>

  <!--==============================
Checkout Arae
==============================-->
<div class="as-checkout-wrapper space-top space-extra-bottom " style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="container">
        <div class="woocommerce-form-login-toggle">
            <div class="woocommerce-info text-white">Returning customer? <a href="#" class="showlogin">Click here to login</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="#" class="woocommerce-form-login mb-30">
                    <div class="form-group ">
                        <label>Username or email *</label>
                        <input type="text" class="form-control bg-dark" placeholder="Username or email">
                    </div>
                    <div class="form-group">
                        <label>Password *</label>
                        <input type="text" class="form-control bg-dark" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-checkbox">
                            <input type="checkbox" id="remembermylogin">
                            <label for="remembermylogin">Remember Me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="as-btn">Login</button>
                        <p class="fs-xs mt-2 mb-0"><a class="text-reset" href="#">Lost your password?</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="woocommerce-form-coupon-toggle">
            <div class="woocommerce-info bg-dark">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a> </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="#" class="woocommerce-form-coupon">
                    <div class="form-group">
                        <label>Coupon code</label>
                        <input type="text" class="form-control bg-dark" placeholder="Write your coupon code">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="as-btn">Apply coupon</button>
                    </div>
                </form>
            </div>
        </div>
        <form action="#" class="woocommerce-checkout mt-40">
            <div class="row ">
                <div class="col-lg-6">
                    <h2 class="h4">Billing Details</h2>
                    <div class="row">
                        <div class="col-12 form-group">
                            <select class="form-select">
                                <option>United Kingdom (UK)</option>
                                <option>United State (US)</option>
                                <option>Equatorial Guinea (GQ)</option>
                                <option>Australia (AU)</option>
                                <option>Germany (DE)</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" class="form-control" placeholder="Your Company Name">
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" class="form-control" placeholder="Street Address">
                            <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" class="form-control" placeholder="Town / City">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Country">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Postcode / Zip">
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            <input type="text" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="col-12 form-group">
                            <input type="checkbox" id="accountNewCreate">
                            <label for="accountNewCreate">Creat An Account?</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p id="ship-to-different-address">
                        <input id="ship-to-different-address-checkbox" type="checkbox" name="ship_to_different_address" value="1" checked>
                        <label for="ship-to-different-address-checkbox">
                            Ship to a different address?
                            <span class="checkmark"></span>
                        </label>
                    </p>
                    <div class="shipping_address">
                        <div class="row">
                            <div class="col-12 form-group">
                                <select class="form-select">
                                    <option>United Kingdom (UK)</option>
                                    <option>United State (US)</option>
                                    <option>Equatorial Guinea (GQ)</option>
                                    <option>Australia (AU)</option>
                                    <option>Germany (DE)</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Your Company Name">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Street Address">
                                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Town / City">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Country">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Postcode / Zip">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <input type="text" class="form-control" placeholder="Phone number">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 form-group">
                        <textarea cols="20" rows="5" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                    </div>
                </div>
            </div>
        </form>
        <h4 class="mt-4 pt-lg-2">Your Order</h4>
        <form action="#" class="woocommerce-cart-form">
            <table class="cart_table mb-20">
                <thead>
                    <tr class="bg-dark">
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">Product Name</th>
                        <th class="cart-col-price">Price</th>
                        <th class="cart-col-quantity">Quantity</th>
                        <th class="cart-col-total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item">
                        <td data-title="Product">
                            <a class="cart-productimage" href="shop-details.html"><img width="91" height="91" src="assets/img/menu/menu_thumb_1_1.png" alt="Image"></a>
                        </td>
                        <td data-title="Name">
                            <a class="cart-productname" href="shop-details.html">Chicken Vagetable</a>
                        </td>
                        <td data-title="Price">
                            <span class="amount"><bdi><span>$</span>18</bdi></span>
                        </td>
                        <td data-title="Quantity">
                            <strong class="product-quantity">01</strong>
                        </td>
                        <td data-title="Total">
                            <span class="amount"><bdi><span>$</span>18</bdi></span>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="checkout-ordertable">
                    <tr class="cart-subtotal">
                        <th class="text-white bg-dark">Subtotal</th>
                        <td data-title="Subtotal" colspan="4"><span class="woocommerce-Price-amount amount text-white"><bdi><span class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></td>
                    </tr>
                    <tr class="woocommerce-shipping-totals shipping">
                        <th class="text-white bg-dark">Shipping</th>
                        <td data-title="Shipping" class="text-white" colspan="4"> Enter your address to view shipping options.
                        </td>
                    </tr>
                    <tr class="order-total">
                        <th class="text-white bg-dark">Total</th>
                        <td data-title="Total" colspan="4"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></strong>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
        <div class="mt-lg-3 mb-30">
            <div class="woocommerce-checkout-payment">
                <ul class="wc_payment_methods payment_methods methods">
                    <li class="wc_payment_method payment_method_bacs">
                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
                        <label for="payment_method_bacs">Direct bank transfer</label>
                        <div class="payment_box payment_method_bacs bg-dark">
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                            </p>
                        </div>
                    </li>
                    <li class="wc_payment_method payment_method_cheque">
                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
                        <label for="payment_method_cheque">Cheque Payment</label>
                        <div class="payment_box payment_method_cheque bg-dark">
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                        </div>
                    </li>
                    <li class="wc_payment_method payment_method_cod">
                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method">
                        <label for="payment_method_cod">Credit Cart</label>
                        <div class="payment_box payment_method_cod bg-dark">
                            <p>Pay with cash upon delivery.</p>
                        </div>
                    </li>
                    <li class="wc_payment_method payment_method_paypal">
                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal">
                        <label for="payment_method_paypal">Paypal</label>
                        <div class="payment_box payment_method_paypal bg-dark">
                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                        </div>
                    </li>
                </ul>
                <div class="form-row place-order">
                    <button type="submit" class="as-btn">Place order</button>
                </div>
            </div>
        </div>
    </div>
</div>

@stop








