<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    @yield('meta')
    @include('front.styles')
    @yield('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/gif" href="/img/FAV.gif">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

</head>
<body>
    <div class="wrapper">
        @yield('content')
        @include('front.footer')
        @yield('footer')
    </div>
    @include('front.scripts')
    @yield('scripts')
    @include('front.popups.discuss')
    @include('front.popups.discuss_type')
    @include('front.popups.thank')
    <div class="hide">
        @yield('discuss')
        @yield('discuss_type')
        @yield('thank')
    </div>
    <div class="hide">
        <a href="#thanks" class="thank"></a>
    </div>
</body>
</html>