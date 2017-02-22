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
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92397757-1', 'auto');
        ga('send', 'pageview');

    </script>
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