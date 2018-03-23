<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSS -->
	<link href="{{ asset('css/Common/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/Common/flexslider.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/Common/fancySelect.css') }}" rel="stylesheet" media="screen, projection" />
	<link href="{{ asset('css/Common/animate.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('css/Common/style.css') }}" rel="stylesheet" type="text/css" />

	<!-- FONTS -->
	<link href="{{ asset('css/Common/ggapifonts.css') }}" type='text/css' rel="stylesheet" >
	<link href="{{ asset('css/Common/font-awesome/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet">

	<script src="{{ asset('js/Common/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/Common/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/Common/jquery.sticky.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/Common/parallax.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/Common/jquery.flexslider-min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/Common/jquery.jcarousel.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/Common/fancySelect.js') }}"></script>
	<script src="{{ asset('js/Common/animate.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/Common/myscript.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/Common/handleShoppingBag.js') }}" type="text/javascript"></script>
	<script>
		if (top != self) top.location.replace(self.location.href);
	</script>

	<title>@yield('title')</title>
</head>

<body>
	<div id="preloader"><img src="{{ asset('images/preloader.gif') }}" alt="" /></div>
		@include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>

</html>
