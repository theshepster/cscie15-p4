<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>

    @include('includes.header-landing')

    @yield('content')

    @include('includes.footer')

    @include('includes.javascript')
</body>
</html>