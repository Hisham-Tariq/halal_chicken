@extends('client/layouts.default')

@section('content')

 <!--==============================
    Breadcumb
============================== -->

<div class=" " data-bg-src="assets/halalchickenimages/banners/banner1.jpg">
    <div class="breadcumb-wrapper" style="background-color: rgba(0,0,0,0.6)">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-white">Sh<span class="font-style text-theme2">op</span></h1>
                <ul class="breadcumb-menu">
                    <li ><a class="text-white" href="index.html">Home</a></li>
                    <li class="text-white">Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
Product Area
==============================-->
<section class="as-product-wrapper space-top space-extra-bottom" style="background-color: rgba(0,0,0,0.8)">
    <div class="container">
        <div class="as-sort-bar bg-dark">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <p class="woocommerce-result-count">Showing 1–12 of 16 results</p>
                </div>

                <div class="col-md-auto">
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" selected="selected">Default Sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="row gy-40">

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/halalchickenimages/banners/menu_page/menu_1_4.png" alt="Product Image">
                    </div>
                    <div class="product-content bg-dark">
                        <a href="shop.html" class="category">Beaf Masala</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Daria Shevtsova</a></h3>
                        <span class="price">$80.85<del>$99.99</del></span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/halalchickenimages/banners/menu_page/pizzamenu1.png" alt="Product Image">
                    </div>
                    <div class="product-content bg-dark">
                        <a href="shop.html" class="category">Chicken</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Chicken Masala</a></h3>
                        <span class="price">$90.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/halalchickenimages/banners/menu_page/pizzamenu1.png" alt="Product Image">
                    </div>
                    <div class="product-content bg-dark">
                        <a href="shop.html" class="category">FilleBurger</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Sicilian Pizza</a></h3>
                        <span class="price">$60.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/halalchickenimages/banners/menu_page/pizzamenu1.png" alt="Product Image">
                    </div>
                    <div class="product-content bg-dark">
                        <a href="shop.html" class="category">Mutton</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Beef Masala</a></h3>
                        <span class="price">$70.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/halalchickenimages/banners/menu_page/pizzamenu1.png" alt="Product Image">
                    </div>
                    <div class="product-content bg-dark">
                        <a href="shop.html" class="category">Breakfast</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Martin Widenka</a></h3>
                        <span class="price">$20.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
{{-- 
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/img/menu/menu_1_6.png" alt="Product Image">
                    </div>
                    <div class="product-content bg-dark">
                        <a href="shop.html" class="category">Nodles</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Wendy Chicken</a></h3>
                        <span class="price">$10.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/img/menu/menu_1_7.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="shop.html" class="category">Kabab</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">BBQ Chicken</a></h3>
                        <span class="price">$20.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/img/menu/menu_1_8.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="shop.html" class="category">Ice Cream</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Cheese Butter</a></h3>
                        <span class="price">$12.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/img/menu/menu_1_9.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="shop.html" class="category">Biriyani</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Hydrabadi Biriany</a></h3>
                        <span class="price">$20.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/img/menu/menu_1_10.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="shop.html" class="category">Vagetable</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Chicken Pokora</a></h3>
                        <span class="price">$12.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/img/menu/menu_1_11.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="shop.html" class="category">Fried Rice</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Mutton Fried Rice</a></h3>
                        <span class="price">$12.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="as-product">
                    <div class="product-img">
                        <img src="assets/img/menu/menu_1_12.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <a href="shop.html" class="category">Vagetable</a>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                <span style="width:75%">Rated <strong class="rating">4.00</strong> out of 5</span>
                            </div>
                            (4.00)
                        </div>
                        <h3 class="product-title"><a href="shop-details.html">Vegetable Salad</a></h3>
                        <span class="price">$10.85</span>
                        <div class="actions">
                            <a href="#QuickView" class="icon-btn popup-content"><i class="fal fa-eye"></i></a>
                            <a href="cart.html" class="icon-btn"><i class="fal fa-cart-plus"></i></a>
                            <a href="wishlist.html" class="icon-btn"><i class="fal fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="as-pagination text-center pt-50">
            <ul>
                <li class="bg-dark"><a href="blog.html" >1</a></li>
                <li class="bg-dark"><a href="blog.html">2</a></li>
                <li class="bg-dark"><a href="blog.html">3</a></li>
                <li class="bg-dark"><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>


@stop








