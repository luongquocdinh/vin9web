<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VinCity</title>
	<link rel="icon" href="{{ asset('image') }}/logo.jpg">
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
    <link rel="stylesheet" href="{{ asset('css') }}/style.css">

	<!-- Modernizr JS -->
	<script src="{{ asset('client') }}/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
        <div id="colorlib-page">
			@include('home.slide')
			
			<div id="colorlib-main">
				<div class="colorlib-blog" style="width:1000px; margin:0 auto;">
					<div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">SHOPHOUSE VINPEARL PHÚ QUỐC</span>
                                <h2 class="colorlib-heading">SHOPHOUSE VINPEARL PHÚ QUỐC</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="{{ route('vinpearl.vn') }}" class="blog-img"><img src="{{ asset('image') }}/vinpearl/logo-vinpearl.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <h3><a href="{{ route('vinpearl.vn') }}">SHOPHOUSE VINPEARL PHÚ QUỐC</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">VinCity Quận 9</span>
                                <h2 class="colorlib-heading">VinCity Quận 9</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="{{ route('vincity.vn') }}" class="blog-img"><img src="{{ asset('image') }}/slider/new_6.JPG" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <h3><a href="{{ route('vincity.vn') }}">Vinhomes Central Park và Vinhomes Golden River</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5bc2234d08387933e5bb374b/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->

	</body>
</html>