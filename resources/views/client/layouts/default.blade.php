<!doctype html>

<html>

<head>

        @include('client.includes.head')

</head>

<body class="home-dark">
        @include('client/components.navigation_bar')

@yield('content')


<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-long-arrow-up"></i></a>

@include('client.components.footer')


@include('client.includes.foot')
</body>
</html>

