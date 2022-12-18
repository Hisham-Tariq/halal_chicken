<!--Sidemenu
============================== -->
<div class="sidemenu-wrapper d-none d-lg-block " style="background-color: rgba(0, 0, 0, 0.6)">
    <div class="sidemenu-content" style="background-color: rgba(0, 0, 0, 1)">
        <button class="closeButton sideMenuCls" style="background-color:white;"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_1.png" alt="Cart Image">Daria Shevtsova</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>40.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_2.png" alt="Cart Image">Chicken Masala</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>99.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_3.png" alt="Cart Image">Sicilian Pizza</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>56.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_4.png" alt="Cart Image">Beef Masala</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>23.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/menu/menu_thumb_1_5.png" alt="Cart Image">Martin Widenka</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>100.00</span>
                        </span>
                    </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>318.00</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="cart.html" class="as-btn wc-forward">View cart</a>
                    <a href="checkout.html" class="as-btn checkout wc-forward">Checkout</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block" style="background-color: rgba(0, 0, 0, 0.9)">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>
<!--==============================
Mobile Menu
============================== -->
<div class="as-menu-wrapper" style="background-color: rgba(0, 0, 0, 0.6)">
    <div class="as-menu-area text-center" style="background-color: rgba(0, 0, 0, 0.9)">
        <button class="as-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.html"><img  src="assets/halalchickenimages/logo.webp" alt="Pizzer"></a>
        </div>
        <div class="as-mobile-menu" style="background-color: rgba(0, 0, 0, 0.9)">
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                
                <li class="menu-item-has-children">
                    <a href="#">Menu</a>
                    <ul class="sub-menu">
                        <li><a href="menu-fast.html">Fast Food Menu</a></li>
                        <li><a href="menu-rest.html">Restaurant Food Menu</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-details.html">Shop Details</a></li>
                    </ul>
                </li>
                
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/about-us')}}">About Us</a></li>
                <li>
                    <a href="{{url('/contact-us')}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Header Area
==============================-->
<header class="as-header header-layout1" >
    <div class="header-top" style="background-color: rgba(0, 0, 0, 1)">
        <div class="container as-container" >
            <div class="header-top-inner" >
                <div class="row justify-content-center justify-content-md-between align-items-center gy-2">
                    <div class="col-auto d-none d-md-block">
                        <p class="header-notice">Welcome to Halal Chicken Fast Foods & Restaurant</p>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="header-social">
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{url('/contact-us')}}"><i class="far fa-user"></i> Login/Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu Area -->
    <div class="menu-area" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="container as-container">
            <div class="row align-items-center justify-content-between" >
                <div class="col-xl-auto" >
                    <div class="d-flex align-items-center justify-content-between" >
                        <div class="logo-style1">
                            <a href="index.html"><img style="width:210px; width:200px; margin:0px" src="assets/halalchickenimages/logo.webp" alt="Pizzer"></a>
                        </div>
                        <nav class="main-menu d-none d-lg-inline-block" >
                            <ul>
                                <li><a href="/">Home</a></li>
                                
                                <li class="menu-item-has-children">
                                    <a href="#">Menu</a>
                                    <ul class="sub-menu">
                                        <li><a href="menu-fast.html">Fast Food Menu</a></li>
                                        <li><a href="menu-rest.html">Restaurant Food Menu</a></li>
                                    </ul>
                                </li>
                                
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-details.html">Shop Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/about-us')}}">About Us</a></li>
                                <li>
                                    <a href="{{url('/contact-us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                </div>
                <div class="col-auto d-none d-xl-block">
                    <div class="header-button">
                        <button type="button" class="icon-btn searchBoxToggler " style="background-color: white; color: black;"><i class="far fa-search"></i></button>
                        <button type="button" style="background-color: white; color: black;" class="icon-btn sideMenuToggler" >
                            <i class="far fa-cart-shopping"></i>
                            <span class="badge">5</span>
                        </button>
                        <a href="{{url('/contact-us')}}" class="as-btn">Order Now</a>
                        <div class="link-box">
                            <div class="link-box_icon">
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div>
                                <p class="link-box_text">Call Anytime 24/7</p>
                                <a href="+15048998221" class="link-box_link">(+150) 4899 8221</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--==============================