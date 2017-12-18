<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
<!-- CSS -->
	<link href="css/Common/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/Common/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/Common/fancySelect.css" rel="stylesheet" media="screen, projection" />
	<link href="css/Common/animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/Common/style.css" rel="stylesheet" type="text/css" />
	
	<!-- FONTS -->
	<link href="css/Common/ggapifonts.css" type='text/css' rel="stylesheet" >
	<link href="css/Common/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">

	<script src="js/Common/jquery.min.js" type="text/javascript"></script>
	<script src="js/Common/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/Common/jquery.sticky.js" type="text/javascript"></script>
	<script src="js/Common/parallax.js" type="text/javascript"></script>
	<script src="js/Common/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/Common/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/Common/fancySelect.js"></script>
	<script src="js/Common/animate.js" type="text/javascript"></script>
	<script src="js/Common/myscript.js" type="text/javascript"></script>
	<script>
		if (top != self) top.location.replace(self.location.href);
	</script>

	<title>@yield('title')</title>
</head>

<body>
	@include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>

</html>