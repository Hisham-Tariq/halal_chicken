<!doctype html>

<html>

<head>

    @include('includes.head')

</head>

<body>

@include('components.navigation_bar',['active' => $active, 'settings' => $settings])

@yield('content')

@include('components.footer')

</div>

@include('includes.foot')
</body>
</html>

