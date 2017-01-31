<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('meta')
    @include('front.styles')
    @yield('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

</head>
<body>
    <div class="wrapper">
        <div class="tent"></div>
        @yield('content')

        @include('front.footer')
        @yield('footer')
    </div>
    @include('front.scripts')
    @yield('scripts')
</body>
</html>