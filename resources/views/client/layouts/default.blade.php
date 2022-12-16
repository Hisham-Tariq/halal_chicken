<!doctype html>

<html>

<head>

        @include('client.includes.head')

</head>

<body class="home-dark">

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please<a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--********************************
       Code Start From Here
******************************** -->


<!--==============================
 Preloader
==============================-->
<div class="preloader ">
    <button class="as-btn style3 preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner">
        <span class="loader"></span>
    </div>
</div>


@yield('content')


<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-long-arrow-up"></i></a>

@include('client.components.footer')


@include('client.includes.foot')
</body>
</html>

