<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @loadLocalCSS(/css/common/bootstrap.min.css)
    @loadLocalCSS(/css/common/flexslider.css)
    @loadLocalCSS(/css/common/fancySelect.css)
    @loadLocalCSS(/css/common/animate.css)
    @loadLocalCSS(/css/common/style.css)

    <!-- FONTS -->
    @loadLocalCSS(/css/common/ggapifonts.css)
    @loadLocalCSS(/css/common/font-awesome/css/font-awesome.min.css)
    @yield('custom_styles')
    @loadLocalJS(/js/common/jquery.min.js)
    @loadLocalJS(/js/common/bootstrap.min.js)
    @loadLocalJS(/js/common/jquery.sticky.js)
    @loadLocalJS(/js/common/parallax.js)
    @loadLocalJS(/js/common/jquery.flexslider-min.js)
    @loadLocalJS(/js/common/jquery.jcarousel.js)
    @loadLocalJS(/js/common/fancySelect.js)
    @loadLocalJS(/js/common/animate.js)
    @loadLocalJS(/js/common/myscript.js)
    <script>
        if (top != self) top.location.replace(self.location.href);
    </script>

    <title>@yield('title')</title>
</head>

<body>
    <div id="preloader"><img src="{{ asset('images/preloader.gif') }}" alt="" /></div>
    @include('layouts.header')
    <div class="contents">
        @yield('content')
    </div>
    @include('layouts.footer')
    @yield('custom_scripts')
</body>

</html>
