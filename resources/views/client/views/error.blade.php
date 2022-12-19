@extends('client/layouts.default')

@section('content')


   <!--==============================
    Breadcumb
============================== -->
<div  data-bg-src="assets/halalchickenimages/banners/banner1.jpg">
   <div class="breadcumb-wrapper " style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title text-white">404 - <span class="font-style text-theme2">Error</span></h1>
            <ul class="breadcumb-menu" style="color: white !important;">
                <li><a href="index.html" class="text-white">Home</a></li>
                <li class="text-white">404 - Error</li>
            </ul>
        </div>
    </div>
   </div>
</div>
<!--==============================
Error Area 
==============================-->
<section class="bg-auto space" style="background-color: rgba(0, 0, 0, 0.8)">
    <div class="container">
        <div class="error-img">
            <img src="assets/halalchickenimages/error_img.png" alt="404 image">
        </div>
        <div class="error-content">
            <h2 class="error-title">Page Not Found</h2>
            <p class="error-text">We're sorry, The page you are looking for on longer exists.</p>
            <a href="index.html" class="as-btn"><i class="far fa-home me-2"></i>Back To Home</a>
        </div>
    </div>
</section>

@stop








