@extends('client.layouts.default')
@section('content')

    <!--==============================
    Hero Area
    ==============================-->
    <div id="slider" class="ls-wp-container fitvidsignore hero-3 as-hero-carousel"
         style="width:1720px;height:850px;max-width:1720px;margin:0 auto;margin-bottom: 0px; background-color: rgba(0, 0, 0, 0.8)">
        <!-- Slide 1-->
        <div class="ls-slide" data-ls="duration:7000; transition2d:114; kenburnsscale:1.2;">
            <img width="1720" height="850" src="assets/halalchickenimages/banner1.jpg" class="ls-bg" alt="hero img">
            <img width="490" height="687" src="assets/halalchickenimages/banners/bannertext1.png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:110px; top:40px;"
                 data-ls="offsetxin:-100; durationin:1600; easingin:easeOutQuint; rotatein:-45deg; parallax:true; parallaxlevel:12;">
            <img width="153" height="152" src="assets/img/hero/shape_bg_1.png" class="ls-l ls-hide-phone ls-img-layer"
                 alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:748px; top:60px;"
                 data-ls="scalexin:0; scaleyin:0; transformoriginin:100% 100% 0; parallax:true; parallaxlevel:10; parallaxtype:3d;">
            <ls-layer
                style="font-size:40px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:'Lobster Two'; left:772px; top:96px;"
                class="ls-l ls-hide-phone ls-text-layer"
                data-ls="delayin:300; scalexin:0; scaleyin:0; parallax:true; parallaxlevel:10; parallaxtype:3d;">
                $250
            </ls-layer>
            <img width="126" height="50" src="assets/img/hero/curve_line_1.png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:507px; top:559px;"
                 data-ls="clipin:0 0 0 100%;">
            <a style="" class="ls-l ls-hide-phone" href="shop-details.html" target="_self"
               data-ls="offsetyin:-20; delayin:350; scalexin:0.8; scaleyin:0.8; hover:true; hoverscalex:1.1; hoverscaley:1.1;">
                <img width="99" height="58" src="assets/img/hero/button_1.png" class="ls-img-layer" alt="hero img"
                     style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:457px; top:610px;">
            </a>
            <img width="153" height="152" src="assets/img/hero/shape_bg_1.png"
                 class="ls-l ls-hide-desktop ls-hide-tablet ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:687px; top:30px; width:244px; height:243px;"
                 data-ls="scalexin:0; scaleyin:0; transformoriginin:100% 100% 0; parallax:true; parallaxlevel:10; parallaxtype:3d;">
            <ls-layer
                style="font-size:64px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:'Lobster Two'; left:725px; top:88px;"
                class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                data-ls="delayin:300; scalexin:0; scaleyin:0; parallax:true; parallaxlevel:10; parallaxtype:3d;">
                $250
            </ls-layer>
            <a style="" class="ls-l ls-hide-desktop ls-hide-tablet" href="shop-details.html" target="_self"
               data-ls="offsetyin:-20; delayin:350; scalexin:0.8; scaleyin:0.8; hover:true; hoverscalex:1.1; hoverscaley:1.1;">
                <img width="99" height="58" src="assets/img/hero/button_1.png" class="ls-img-layer" alt="hero img"
                     style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:419px; top:609px; width:178px; height:105px;">
            </a>
            <a style="" class="ls-l" href="#next" target="_self"
               data-ls="hover:true; hoverbgcolor:#eb0029; static:forever;">
                <ls-layer
                    style="font-size:26px; color:#fff; padding-top:0.6em; padding-bottom:0.6em; padding-right:0.6em; padding-left:0.6em; border-radius:10em; cursor:pointer; left:1662px; top:50%; background-color:#4d5765;"
                    class="ls-button-layer icon-btn">
                    <i class="far fa-arrow-right"></i>
                </ls-layer>
            </a>
            <a style="" class="ls-l" href="#prev" target="_self"
               data-ls="hover:true; hoverbgcolor:#EB0029; static:forever;">
                <ls-layer
                    style="color:#fff; padding-bottom:0.6em; padding-left:0.6em; border-radius:10em; cursor:pointer; top:50%; font-size:26px; padding-top:0.6em; padding-right:0.6em; left:0px; background-color:#4d5765;"
                    class="ls-button-layer icon-btn">
                    <i class="far fa-arrow-left"></i>
                </ls-layer>
            </a>
        </div>


        <!-- Slide 2-->
        <div class="ls-slide" data-ls="duration:7000; transition2d:114; kenburnsscale:1.2;">
            <img width="1720" height="850" src="assets/halalchickenimages/banners/banner2.png" class="ls-bg" alt="hero img">
            <img width="539" height="456" src="assets/img/hero/hero_shape_2.png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:205px; left:260px;"
                 data-ls="offsetyin:-300; durationin:1500; delayin:150; rotatein:40deg; parallax:true; parallaxlevel:10; parallaxdurationmove:400; position:fixed;">
            <img width="380" height="394" src="assets/halalchickenimages/banners/bannertext_2.png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:454px; top:154px;"
                 data-ls="offsetxin:-250; offsetyin:60; durationin:1600; easingin:easeOutQuint; rotatein:-45deg; parallax:true; parallaxlevel:12;">
            <img width="85" height="122" src="assets/img/hero/hero_shape_9.png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:423px; top:147px;"
                 data-ls="offsetxin:40; offsetyin:40; durationin:1300; scalexin:0.7; scaleyin:0.7; transformoriginin:100% 100% 0; loop:true; loopduration:555; loopscalex:1.2; loopscaley:1.2; looptransformorigin:100$ 100% 0; loopcount:-1; loopyoyo:true;">
            <img width="69" height="115" src="assets/img/hero/hero_shape_10.png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:400px; left:813px;"
                 data-ls="offsetxin:-40; offsetyin:-40; durationin:1300; scalexin:0.7; scaleyin:0.7; transformoriginin:0 100% 100%; bgcolorin:transparent; colorin:transparent; loop:true; loopduration:555; loopscalex:1.2; loopscaley:1.2; looptransformorigin:100$ 100% 0; loopcount:-1; loopyoyo:true;">
            <img width="265" height="178" src="assets/halalchickenimages/Pizza/GarlicCheeseBread_sm1 (1).png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:551px; top:550px;"
                 data-ls="offsetxin:230; offsetyin:130; durationin:1600; easingin:easeOutQuint; rotatein:-60;">
        </div>


        <!-- Slide 3-->
        <div class="ls-slide" data-ls="duration:7000; transition2d:114; kenburnsscale:1.2;">
            <img width="1720" height="850" src="assets/halalchickenimages/banners/banner3.png" class="ls-bg" alt="hero img">
            <a style="" class="ls-l ls-hide-phone" href="shop-details.html" target="_self"
               data-ls="offsetyin:-20; delayin:350; scalexin:0.8; scaleyin:0.8; bgcolorin:transparent; colorin:transparent; hover:true; hoverscalex:1.1; hoverscaley:1.1; hoverbgcolor:transparent; hovercolor:transparent;">
                <img width="150" height="77" src="assets/img/hero/button_2.png" class="ls-img-layer" alt="hero img"
                     style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:1029px; top:650px; width:150px; height:77px;">
            </a>
            <a style="" class="ls-l ls-hide-desktop ls-hide-tablet" href="shop-details.html" target="_self"
               data-ls="offsetyin:-20; delayin:350; scalexin:0.8; scaleyin:0.8; bgcolorin:transparent; colorin:transparent; hover:true; hoverscalex:1.1; hoverscaley:1.1; hoverbgcolor:transparent; hovercolor:transparent;">
                <img width="150" height="77" src="assets/img/hero/button_2.png" class="ls-img-layer" alt="hero img"
                     style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:981px; top:656px; width:233px; height:120px;">
            </a>
            <img width="127" height="50" src="assets/img/hero/curve_line_2.png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:606px; left:940px;"
                 data-ls="durationin:1200; clipin:0 100% 0 0;">
            <img width="589" height="489" src="assets/img/hero/hero_shape_11.png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:142px; left:1061px;"
                 data-ls="durationin:1300; scalexin:0.6; scaleyin:0.6; bgcolorin:transparent; colorin:transparent; loop:true; loopduration:555; loopscalex:1.02; loopscaley:1.02; loopcount:-1; loopyoyo:true;">
            <img width="543" height="438" src="assets/halalchickenimages/banners/bannertext3.png" class="ls-l ls-img-layer" alt="hero img"
                 style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:147px; left:1053px;"
                 data-ls="offsetxin:-250; offsetyin:60; durationin:1600; easingin:easeOutQuint; rotatein:-45deg; bgcolorin:transparent; colorin:transparent; parallax:true; parallaxlevel:12;">
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
    Category Area
    ==============================-->
    <div class="space bg-smoke2 position-relative bg-black">
        <div class="top-shape1"></div>
        <h2 class="menu-title1">MENU</h2>
        <div class="container as-container">
            <div class="row as-carousel" data-slide-show="10" data-xl-slide-show="8" data-ml-slide-show="7"
                 data-lg-slide-show="5" data-md-slide-show="5" data-sm-slide-show="4" data-xs-slide-show="3">
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/Pizza/ChickenSupreme.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name">PIZZA</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/Burgers/FilleBurger.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name">BURGER</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/Chicken/wings.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name">CHICKEN</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/Shawarma/chicken_shawarmaa.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name text-uppercase">Shawarma</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/Wraps/chicken_wrap.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name text-uppercase">Wrap</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/MiscImages/wings.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name text-uppercase">Wings</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/MiscImages/chicken-nuggets.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name text-uppercase">Nuggusts</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/MiscImages/colddrink.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name text-uppercase">DRINKS</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/MiscImages/any_two_pizzas.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name text-uppercase">Deals</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/Shawarma/chickenfajitasalad.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name text-uppercase">SALAD</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="category-list">
                        <div class="category-list_icon">
                            <img src="assets/halalchickenimages/Shawarma/tabbouleh1.png" alt="icon">
                        </div>
                        <a href="shop.html" class="category-list_name text-uppercase">tabbouleh</a>
                    </div>
                </div>
            </div>about
        </div>
    </div>
    <!--==============================
    About Area
    ==============================-->
    <div class="space" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 mb-40 mb-xl-0">
                    <div class="img-box3">
                        <img src="assets/halalchickenimages/Pizza/banner3.jpg" alt="About">
                        <div class="about-counter1">
                            <h3 class="counter-title"><span class="counter-number">24</span></h3>
                            <div class="media-body">
                                <p class="counter-info">YEARS OF</p>
                                <h5 class="counter-text">Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-10 ps-xxl-5">
                    <div class="ms-xl-4">
                        <div class="title-area mb-30">
                            <span class="sub-title">
                                <img class="icon" src="assets/img/icon/title_icon.svg" alt="icon">
                                About Us
                            </span>
                            <h2 class="sec-title">We Always Provide Quality Fast Foods For You</h2>
                        </div>
                        <p class="mt-n2 mb-4">Seamlessly conceptualize sticky functionalities after prospective data.
                            Interactively unleash customized supply chains whereas goal oriented paradigm.</p>
                        <div class="about-feature-wrap">
                            <div class="about-feature">
                                <div class="about-feature_icon">
                                    <img src="assets/img/icon/a-feature_1_1.svg" alt="icon">
                                </div>
                                <div class="about-feature_text">DELICIOUS</div>
                            </div>
                            <div class="about-feature">
                                <div class="about-feature_icon">
                                    <img src="assets/img/icon/a-feature_1_2.svg" alt="icon">
                                </div>
                                <div class="about-feature_text">FRESH</div>
                            </div>
                            <div class="about-feature">
                                <div class="about-feature_icon">
                                    <img src="assets/img/icon/a-feature_1_3.svg" alt="icon">
                                </div>
                                <div class="about-feature_text">BEST PRICE</div>
                            </div>
                        </div>
                        <a href="about.html" class="as-btn">ABOUT MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup about-shape3" data-bottom="120px" data-left="15%"><img
                src="assets/halalchickenimages/banners/decor1.png" alt="shapes"></div>
        <div class="shape-mockup leaf jump d-none d-xxl-block" data-bottom="0%" data-left="0%"><img
                src="assets/halalchickenimages/banners/redchill.png" alt="shape"></div>
        <div class="shape-mockup leaf jump-reverse d-none d-xxl-block" data-bottom="120px" data-right="0%"><img
               style="width:250px; height:400px;" src="assets/halalchickenimages/banners/cabbageleafforbanner.png" alt="shape"></div>
    </div>
    <!--==============================
    Counter Area
    ==============================-->
    <div class="space-bottom " style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="offer-card" data-bg-src="assets/halalchickenimages/discountsimage/burgerdiscount.png" >
                        <h3 class="offer-title box-title text-black">BURGER</h3>
                        <p class="offer-text text-black" >Get a 20% Discount on This Week</p>
                        <a href="shop-details.html" class="line-btn">BUY NOW</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="offer-card" data-bg-src="assets/halalchickenimages/discountsimage/pizzadiscount.png">
                        <h3 class="offer-title box-title">Pizza</h3>
                        <p class="offer-text">Get a 30% Discount on This Week</p>
                        <a href="shop-details.html" class="line-btn">BUY NOW</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="offer-card" data-bg-src="assets/halalchickenimages/discountsimage/chickendiscount.png">
                        <h3 class="offer-title box-title">Chicken</h3>
                        <p class="offer-text">Get a 25% Discount on This Week</p>
                        <a href="shop-details.html" class="line-btn">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Product Area
    ==============================-->
    <section  data-bg-src="assets/halalchickenimages/banners/foodbanner4.jpg">
        <div class="space bg-smoke2" style="background-color: rgba(0, 0, 0, 0.9) !important;">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">
                        <img class="icon" src="assets/img/icon/title_icon.svg" alt="icon">
                        Popular Menu
                    </span>
                    <h2 class="sec-title">Our Popular Delicious <span class="font-style text-theme">Foods</span></h2>
                    <p class="sec-text ms-auto me-auto">Objectively pontificate quality models before intuitive information.
                        Dramatically recaptiualize multifunctional materials.</p>
                </div>
                <div class="nav food-menu-tab" role="tablist">
                    <button class="tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button"
                            role="tab" aria-controls="nav-one" aria-selected="true">FAST FOODS
                    </button>
                    <button class="tab-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button"
                            role="tab" aria-controls="nav-two" aria-selected="false">HEALTHY FOODS
                    </button>
                </div>
                <div class="tab-content">
                    <!-- Single item -->
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        <div class="tab-menu2 filter-menu-active" style="background-color: rgba(0, 0, 0, 0.8)">
                            <button data-filter="*" class="active" type="button">
                                <img src="assets/img/icon/menu_1_1.svg" alt="Icon">
                                All Menus
                            </button>
                            <button data-filter=".cat1" type="button">
                                <img style="width: 100px; height:100px;" src="assets/halalchickenimages/Burgers/FishBurger.png" alt="Icon">
                                burger
                            </button>
                            <button data-filter=".cat2" type="button">
                                <img style="width: 100px; height:100px;" src="assets/halalchickenimages/Pizza/singlepizza.png" alt="Icon">
                                Pizza
                            </button>
                            <button data-filter=".cat3" type="button">
                                <img style="width: 100px; height:100px;" src="assets/halalchickenimages/Chicken/3646005.png" alt="Icon">
                                Chicken
                            </button>
                            <button data-filter=".cat4" type="button">
                                <img style="width: 100px; height:100px;" src="assets/halalchickenimages/Shawarma/chicken_shawarmaa.png" alt="Icon">
                                Shawarma
                            </button>
                            <button data-filter=".cat5" type="button">
                                <img  style="width: 100px; height:100px;"src="assets/halalchickenimages/Shawarma/tabbouleh1.png" alt="Icon">
                                Salad
                            </button>
                            <button data-filter=".cat6" type="button">
                                <img style="width: 100px; height:100px;" src="assets/halalchickenimages/drinks/colddrink.png" alt="Icon">
                                Drinks
                            </button>
                        </div>
                        <div class="row gy-4 filter-active">
    
                            <div class="col-lg-6 filter-item cat6 cat1">
                                <div class="as-product list-view " style="background-color: rgba(0, 0, 0, 0.8)">
                                    <div class="product-img">
                                        <img src="assets/halalchickenimages/Burgers/GourmetBurger.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Gourmet Beef Burgers</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat4 cat2">
                                <div class="as-product list-view" style="background-color: rgba(0, 0, 0, 0.8)">
                                    <div class="product-img">
                                        <img src="assets/halalchickenimages/Shawarma/chickenfajitaplatter.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Platters</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$190.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat5 cat3">
                                <div class="as-product list-view" style="background-color: rgba(0, 0, 0, 0.8)">
                                    <div class="product-img">
                                        <img src="assets/halalchickenimages/Pizza/GarlicCheeseBread_sm1.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Pizza</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$160.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat3 cat4">
                                <div class="as-product list-view" style="background-color: rgba(0, 0, 0, 0.8)">
                                    <div class="product-img">
                                        <img src="assets/halalchickenimages/Shawarma/falafel wrap.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Beef Shawarma</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$170.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat2 cat5">
                                <div class="as-product list-view" style="background-color: rgba(0, 0, 0, 0.8)">
                                    <div class="product-img">
                                        <img src="assets/halalchickenimages/Shawarma/tabbouleh1.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Salad</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$120.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat1 cat6">
                                <div class="as-product list-view" style="background-color: rgba(0, 0, 0, 0.8)">
                                    <div class="product-img">
                                        <img src="assets/halalchickenimages/TiniImages/combomix4.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Combo</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$100.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <a href="shop.html" class="as-btn">View All Menus</a>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                        <div class="tab-menu2 filter-menu-active">
                            <button data-filter="*" class="active" type="button">
                                <img src="assets/img/icon/menu_1_1.svg" alt="Icon">
                                All Menus
                            </button>
                            <button data-filter=".cat23" type="button">
                                <img src="assets/img/icon/menu_1_4.svg" alt="Icon">
                                Chicken
                            </button>
                            <button data-filter=".cat21" type="button">
                                <img src="assets/img/icon/menu_1_2.svg" alt="Icon">
                                burger
                            </button>
                            <button data-filter=".cat22" type="button">
                                <img src="assets/img/icon/menu_1_3.svg" alt="Icon">
                                Pizza
                            </button>
                            <button data-filter=".cat24" type="button">
                                <img src="assets/img/icon/menu_1_5.svg" alt="Icon">
                                Combo
                            </button>
                            <button data-filter=".cat25" type="button">
                                <img src="assets/img/icon/menu_1_6.svg" alt="Icon">
                                Sanwitch
                            </button>
                            <button data-filter=".cat26" type="button">
                                <img src="assets/img/icon/menu_1_7.svg" alt="Icon">
                                Drinks
                            </button>
                        </div>
                        <div class="row gy-4 filter-active">
    
                            <div class="col-lg-6 filter-item cat26 cat21">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/menu/menu_list_1_3.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Sicilian Pizza</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$180.85<del>$350.99</del></span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat24 cat22">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/menu/menu_list_1_1.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Daria Shevtsova</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$190.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat25 cat23">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/menu/menu_list_1_2.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Chicken Masala</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$160.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat23 cat24">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/menu/menu_list_1_4.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Beef Masala</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$170.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat22 cat25">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/menu/menu_list_1_5.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Martin Widenka</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$120.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-6 filter-item cat21 cat26">
                                <div class="as-product list-view">
                                    <div class="product-img">
                                        <img src="assets/img/menu/menu_list_1_6.png" alt="Product Image">
                                    </div>
                                    <div class="product-content">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                        </div>
                                        <h3 class="product-title"><a href="shop-details.html">Wendy Chicken</a></h3>
                                        <p class="product-text">Rapidiously repurpose customer directed markets. Rapidiously
                                            enhance extensive.</p>
                                        <span class="price">$100.85</span>
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <a href="shop.html" class="as-btn">View All Menus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Offer Area
    ==============================-->
    <section  data-bg-src="assets/halalchickenimages/banners/banner6.jpeg">
       <div class="space" style="background-color: rgba(30, 30, 30, 0.8)">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7 col-sm-8">
                    <div class="title-area mb-30">
                        <span class="sub-title mb-25">Special Combo pack</span>
                        <h2 class="sec-title text-white">GET A 20% DISCOUNT SPECIAL FOOD EVERY TIME <span
                                class="font-style text-theme"> For You!</span></h2>
                    </div>
                    <p class="mt-n2 mb-4 text-white">Completely architect worldwide strategic theme area through stand-alone
                        niches. Energistically iterate focused technology rather than granular total linkage iterate
                        focused.</p>
                    <div class="btn-wrap">
                        <a href="shop.html" class="as-btn style3">Order now</a>
                        <h5 class="price_style1 text-theme">$120 -
                            <del>$200</del>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </section>
    <!--==============================
    Menu Area
    ==============================-->
    <section class="space" style="background-color: rgba(0, 0, 0, 0.9)">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                    <img class="icon" src="assets/img/icon/title_icon.svg" alt="icon">
                    Menu Board
                </span>
                <h2 class="sec-title">See The Halal Chicken Menu <span class="font-style text-theme">Board</span></h2>
                <p class="sec-text ms-auto me-auto">Objectively pontificate quality models before intuitive information.
                    Dramatically recaptiualize multifunctional materials.</p>
            </div>
            <div class="board-wrap" data-bg-src="assets/img/bg/board_bg_1.jpgassets/halalchickenimages/banners/banner6.jpeg">
                <div class="row masonary-active">
                    <div class="col-lg-6 filter-item">
                        <div class="menu-board">
                            <h3 class="menu-board_title">Special Combo</h3>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Combo 1</h4>
                                    <h4 class="board-list_price">$42.99</h4>
                                </div>
                                <p class="board-list_text">4 Chicken Burger, 6 Chicken Tendor, 2 Reg Fries, 2 ltr Bottle of Soda</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Combo 2</h4>
                                    <h4 class="board-list_price">$47.99</h4>
                                </div>
                                <p class="board-list_text">2 Chicken Burger, 2 Any Wrap, 2 Large Fries & 2 ltr Bottle of Soda</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Combo 3</h4>
                                    <h4 class="board-list_price">$59.99</h4>
                                </div>
                                <p class="board-list_text">Any Family Size Pizza , 8 pieces Chicken, 4 Hot wings, 2 Large Fries & 2 ltr Bottle of Soda</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Combo 4</h4>
                                    <h4 class="board-list_price">$63.99</h4>
                                </div>
                                <p class="board-list_text">Any 2 Med Pizza , 2 Chicken Burger, 8 Hot wings, 2 Large Fries & 2 ltr Bottle of Soda</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 filter-item">
                        <div class="menu-board">
                            <h3 class="menu-board_title">Fast Foods</h3>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Bacon Burger</h4>
                                    <h4 class="board-list_price">$90.00</h4>
                                </div>
                                <p class="board-list_text">Chicken breast, Cheddar wrapped in a crispy</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Italian Cuisine Pasta</h4>
                                    <h4 class="board-list_price">$60.00</h4>
                                </div>
                                <p class="board-list_text">Pasta , Spaghetti With Meatballs and Tomato</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Chicken Cheese Burger</h4>
                                    <h4 class="board-list_price">$89.00</h4>
                                </div>
                                <p class="board-list_text">Chicken breast, Cheddar wrapped in a crispy</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Nutrient Breakfast</h4>
                                    <h4 class="board-list_price">$75.00</h4>
                                </div>
                                <p class="board-list_text">Hamburger, Fried Fries, Doughnut, Cupcake, Pizza</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">French Fries</h4>
                                    <h4 class="board-list_price">$25.00</h4>
                                </div>
                                <p class="board-list_text">Buffalo Wing Frying Fried Chicken</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">New York-Style Pizza</h4>
                                    <h4 class="board-list_price">$89.00</h4>
                                </div>
                                <p class="board-list_text">Barbecue Seafood Pizza, Pizza Parlors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 filter-item">
                        <div class="menu-board">
                            <h3 class="menu-board_title">Healthy Foods</h3>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Fish Curry</h4>
                                    <h4 class="board-list_price">$40.00</h4>
                                </div>
                                <p class="board-list_text">Fish, Vegetable, Soses, White Rice</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Philadelphia salmon</h4>
                                    <h4 class="board-list_price">$50.00</h4>
                                </div>
                                <p class="board-list_text">Chilli bites, Chomchom, Soft Drink</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Boiled Organic Egg</h4>
                                    <h4 class="board-list_price">$62.00</h4>
                                </div>
                                <p class="board-list_text">Sauce, Hot Burger, Soft Drink</p>
                            </div>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Antioxidant Fruits Mix</h4>
                                    <h4 class="board-list_price">$45.00</h4>
                                </div>
                                <p class="board-list_text">Dimer chop, Lau Chingri, Ruti</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 filter-item">
                        <div class="menu-board">
                            <h3 class="menu-board_title">Drinks</h3>
                            <div class="board-list">
                                <div class="board-list_info">
                                    <h4 class="board-list_title">Coke, Fanta, 7up</h4>
                                    <h4 class="board-list_price">$40.00</h4>
                                </div>
                                <p class="board-list_text">coke, Fanta, 7up</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="shop.html" class="as-btn">View All Menus</a>
            </div>
        </div>
        <div class="shape-mockup chili jump-reverse" data-left="2%" data-top="0%"><img src="assets/halalchickenimages/banners/redchill.png"
                                                                                      alt="shape"></div>
        <div class="shape-mockup jump"  data-top="12%" data-right="5%"><img style="width: 200px; height:200px" src="assets/halalchickenimages/banners/greenleaf.png" alt="shape">
        </div>
        <div class="shape-mockup jump" data-top="36%" data-left="4%"><img src="assets/halalchickenimages/banners/cabbageleafforbanner.png" alt="shape">
        </div>
        <div class="shape-mockup jump-reverse" data-bottom="15%" data-left="4%"><img src="assets/halalchickenimages/banners/cabbageleafforbanner.png"
                                                                                     alt="shape"></div>
        <div class="shape-mockup leaf jump" data-bottom="0" data-right="0"><img  style="width: 350px; height:600px" src="assets/halalchickenimages/cabbageleaf.png"
                                                                                  alt="shape"></div>
    </section>
    <!--==============================
    Booking Area
    ==============================-->
    <section class=" bg-title position-relative" data-bg-src="assets/halalchickenimages/banners/banner5.jpg">
        <div class="space" style="background-color: rgba(0, 0, 0, 0.8)">
            <div class="container as-container">
                <div class="row justify-content-between align-items-center">
                   
                        <div class="available-table mx-auto bg-black">
                            <h3 class="available-table_title">Opening Time</h3>
                            <p class="available-table_info"><span>Monday - Wednesday</span><span>09:00 - 06:00</span></p>
                            <p class="available-table_info"><span>Thursday - Friday</span><span>10:00 - 05:00</span></p>
                            <p class="available-table_info"><span>Saturday</span><span>09:00 - 04:00</span></p>
                            <p class="available-table_info"><span>Sunday</span><span>07:00 - 09:00</span></p>
                            <h3 class="available-table_title style2">Call Now</h3>
                            <a href="tel:+15365479874" class="available-table_call">+153-6547-9874</a>
                        </div>
        
                </div>
            
            </div>
        </div>
    </section>
    <!--==============================
    Testimonial Area
    ==============================-->
    <section class="space bg-black">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                    <img class="icon" src="assets/img/icon/title_icon.svg" alt="icon">
                    Testimonials
                </span>
                <h2 class="sec-title">Our Customar <span class="font-style text-theme">Feedbacks</span></h2>
                <p class="sec-text ms-auto me-auto">Objectively pontificate quality models before intuitive information.
                    Dramatically recaptiualize multifunctional materials.</p>
            </div>
            <div class="row slider-shadow as-carousel number-dots" data-slide-show="3" data-lg-slide-show="2"
                 data-md-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true">
                <div class="col-xl-4 col-lg-6">
                    <div class="testi-box bg-dark">
                        <div class="testi-box_icon">
                            <img src="assets/img/icon/quote_left.svg" alt="quote">
                        </div>
                        <p class="testi-box_text">“Synergistically strategize interdependent ROI through distinctive
                            markets. Credibly restore one-to-one through.”</p>
                        <div class="testi-box_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-box_profile">
                            <div class="testi-box_avater">
                                <img src="assets/img/testimonial/testi_1_1.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-box_name">Rayan Kook</h3>
                                <span class="testi-box_desig">NYC, USA</span>
                            </div>
                        </div>
                        <div class="testi-box_img">
                            <img style="width: 150px; height:150px;" src="assets/halalchickenimages/Pizza/pizza2.png" alt="Reveiw Image">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="testi-box bg-dark">
                        <div class="testi-box_icon">
                            <img src="assets/img/icon/quote_left.svg" alt="quote">
                        </div>
                        <p class="testi-box_text">“Synergistically strategize interdependent ROI through distinctive
                            markets. Credibly restore one-to-one through.”</p>
                        <div class="testi-box_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-box_profile">
                            <div class="testi-box_avater">
                                <img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-box_name">Michel Clark</h3>
                                <span class="testi-box_desig">DYM, USA</span>
                            </div>
                        </div>
                        <div class="testi-box_img">
                            <img style="width: 150px; height:150px;" src="assets/halalchickenimages/Burgers/FilleBurger.png" alt="Reveiw Image">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="testi-box bg-dark">
                        <div class="testi-box_icon">
                            <img src="assets/img/icon/quote_left.svg" alt="quote">
                        </div>
                        <p class="testi-box_text">“Synergistically strategize interdependent ROI through distinctive
                            markets. Credibly restore one-to-one through.”</p>
                        <div class="testi-box_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-box_profile">
                            <div class="testi-box_avater">
                                <img src="assets/img/testimonial/testi_1_3.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-box_name">Rosse Mons</h3>
                                <span class="testi-box_desig">DO, USA</span>
                            </div>
                        </div>
                        <div class="testi-box_img">
                            <img style="width: 150px; height:150px;" src="assets/halalchickenimages/Wraps/wrap.png" alt="Reveiw Image">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="testi-box bg-dark">
                        <div class="testi-box_icon">
                            <img src="assets/img/icon/quote_left.svg" alt="quote">
                        </div>
                        <p class="testi-box_text">“Synergistically strategize interdependent ROI through distinctive
                            markets. Credibly restore one-to-one through.”</p>
                        <div class="testi-box_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div class="testi-box_profile">
                            <div class="testi-box_avater">
                                <img src="assets/img/testimonial/testi_1_4.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-box_name">Naisa Carg</h3>
                                <span class="testi-box_desig">TO, USA</span>
                            </div>
                        </div>
                        <div class="testi-box_img">
                            <img style="width: 150px; height:150px;"  src="assets/halalchickenimages/Wraps/veggiewrap.png" alt="Reveiw Image">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="shape-mockup leaf jump-reverse" data-top="0%" data-left="0"><img style="width: 350px; height:300px;" src="assets/halalchickenimages/Burgers/stripburger.png"
                                                                                     alt="shape"></div>
        <div class="shape-mockup leaf jump" data-bottom="0%" data-right="0"><img style="width: 250px; height:400px;" src="assets/halalchickenimages/banners/decor1.png"
                                                                                 alt="shape"></div>
    </section>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="space" style="background-color:rgba(0, 0, 0, 0.6)">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                    <img class="icon" src="assets/img/icon/title_icon.svg" alt="icon">
                    News & Blog
                </span>
                <h2 class="sec-title">Our Latest Foods <span class="font-style text-theme">News</span></h2>
                <p class="sec-text ms-auto me-auto">Objectively pontificate quality models before intuitive information.
                    Dramatically recaptiualize multifunctional materials.</p>
            </div>
            <div class="row slider-shadow as-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2"
                 data-sm-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img style="height:260px;" src="assets/halalchickenimages/Shawarma/chickenshawarmabowl.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By HalalChicken</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>15 July, 2022</a>
                                <a href="blog.html"><i class="fa-regular fa-tag"></i>shawarma</a>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">Chicken Shawarma Bowl</a></h3>
                            <div class="blog-bottom">
                                <a href="blog-details.html" class="line-btn">Read More</a>
                                <a href="blog-details.html" class="comment"><i class="fa-regular fa-comments"></i>3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/halalchickenimages/Shawarma/cheese falafel.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By HalalChicken</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>16 July, 2022</a>
                                <a href="blog.html"><i class="fa-regular fa-tag"></i>Cheese Falafel</a>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">Cheese Falafel</a></h3>
                            <div class="blog-bottom">
                                <a href="blog-details.html" class="line-btn">Read More</a>
                                <a href="blog-details.html" class="comment"><i class="fa-regular fa-comments"></i>3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/halalchickenimages/Pizza/Front.jpg" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By HalalChicken</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>17 July, 2022</a>
                                <a href="blog.html"><i class="fa-regular fa-tag"></i>chicken Pizza</a>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">Chicken Pizza</a></h3>
                            <div class="blog-bottom">
                                <a href="blog-details.html" class="line-btn">Read More</a>
                                <a href="blog-details.html" class="comment"><i class="fa-regular fa-comments"></i>3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/halalchickenimages/MiscImages/ChickenCom_Top-2.jpg" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By HalalChicken</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>21 July, 2022</a>
                                <a href="blog.html"><i class="fa-regular fa-tag"></i>ChickenCom</a>
                            </div>
                            <h3 class="blog-title"><a href="blog-details.html">ChickenCom Top</a></h3>
                            <div class="blog-bottom">
                                <a href="blog-details.html" class="line-btn">Read More</a>
                                <a href="blog-details.html" class="comment"><i class="fa-regular fa-comments"></i>3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup leaf jump-reverse d-none d-lg-block" data-top="12%" data-left="0"><img
            style="width: 200px; height:200px" src="assets/halalchickenimages/banners/greenleaf.png" alt="shape"></div>
        <div class="shape-mockup leaf jump d-none d-xl-block" data-bottom="12%" data-right="0"><img
            src="assets/halalchickenimages/banners/decor1.png" style="width:250px; height:400px;" alt="shape"></div>
    </section>


@stop
