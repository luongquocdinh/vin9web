<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vincity</title>
	<link rel="icon" href="{{ asset('image') }}/logo-vincity.png"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('client') }}/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('client') }}/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('client') }}/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('client') }}/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset('client') }}/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('client') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('client') }}/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('client') }}/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{ asset('client') }}/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
        <div id="colorlib-page">
			@include('client.vn.partials.slide')
			
			<div id="colorlib-main">
				@yield('content')
			</div>
        </div>
    <!-- jQuery -->
	<script src="{{ asset('client') }}/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('client') }}/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('client') }}/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{ asset('client') }}/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="{{ asset('client') }}/js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="{{ asset('client') }}/js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('client') }}/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="{{ asset('client') }}/js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="{{ asset('client') }}/js/main.js"></script>
	<script src="{{ asset('js') }}/script.js"></script>

	</body>
</html>