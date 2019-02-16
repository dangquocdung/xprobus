<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Xpro Bussiness - Corporate, Agency Business HTML5 Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- Favicone Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- CSS -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">
		<link href="/xpro/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="/xpro/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="/xpro/assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<!-- carousel -->
		<link href="/xpro/assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
		<!--Light box-->
		<link href="/xpro/assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
		<!-- Revolution Style-sheet -->
		<link rel="stylesheet" type="text/css" href="/xpro/assets/rs-slider/rs-plugin/css/settings.css">
		<link rel="stylesheet" type="text/css" href="/xpro/assets/css/rev-style.css">
		<!--Main Style-->
		<link href="/xpro/assets/css/navigation.css" rel="stylesheet" type="text/css">
		<link href="/xpro/assets/css/style.css" rel="stylesheet" type="text/css">

	</head>
	<body class="full-intro inner-header">
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
		<!--loader-->
		<!-- Site Wraper -->
		<div class="wrapper">
			<!-- HEADER -->
			@include('xpro.includes.header')
			<!-- END HEADER -->
			<!-- CONTENT -->
            
            @yield('content')

			<!-- FOOTER -->
            @include('xpro.includes.footer')
			<!-- END FOOTER -->
		</div>
		<!-- Site Wraper End -->

		<script src="/xpro/assets/js/jquery-1.12.4.min.js" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="/xpro/assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="/xpro/assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="/xpro/assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="/xpro/assets/js/jquery.appear.js" type="text/javascript"></script>
		<!-- bootstrap Js -->
		<script src="/xpro/assets/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="/xpro/assets/js/plugin/owl.carousel.js" type="text/javascript"></script>
		<!-- fancybox Js -->
		<script src="/xpro/assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="/xpro/assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="/xpro/assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
		<!-- Navigation Js -->
		<script src="/xpro/assets/js/navigation.js" type="text/javascript"></script>
		<!-- revolution Js -->
		<script type="text/javascript" src="/xpro/assets/rs-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="/xpro/assets/rs-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="/xpro/assets/js/revolution-custom.js"></script>
		<!-- Map api Js -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&.js"></script>
		<!-- custom Js -->
		<script src="/xpro/assets/js/mail.js" type="text/javascript"></script>
		<script src="/xpro/assets/js/custom.js" type="text/javascript"></script>
	</body>
</html>
