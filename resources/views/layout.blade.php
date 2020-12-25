<!DOCTYPE html>
<html lang="sr">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175875501-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-175875501-1');
    </script>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>@yield('title') | Racunovodstvena Agencija Mediteran Cvijeta Panic</title>

	@yield('meta')
    <meta name="keywords" content="Racunovodstvo, Knjigovodstvo, Mediteran Cvijeta Panic, Racunovodstvena agencija Mediteran, Bijeljina">

    <meta name="description" content="Racunovodstvena agencija, Bijeljina. Usluge:racunovodstvo, knjigovodstvo">

	<meta name="author" content="Rastko Todorovic">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="canonical" href="@yield('canonical')"/>

	<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">

	<link rel="preload" as="style" href="{{ asset('stylesheet/font-awesome.css') }}">

    <link rel="preload" as="style" href="{{ asset('stylesheet/ionicons.css') }}">

    <link rel="preload" as="style" href="{{ asset('stylesheet/themify-icons.css') }}">

    <link rel="preload" as="style" href="{{ asset('stylesheet/flexslider.css') }}">

    <link rel="preload" as="style" href="{{ asset('stylesheet/owl.carousel.css') }}">

    <link rel="preload" as="style" href="{{ asset('stylesheet/et-line.css') }}">

    <link rel="preload" as="style" href="{{ asset('stylesheet/shortcodes.css') }}">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">

	<!-- Theme style -->
	<link rel="preload" href="stylesheet/style.css" as="style">
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css">

	<!-- Colors -->
	<link rel="preload" href="stylesheet/colors/color1.css" as="style">
    <link rel="stylesheet" type="text/css" href="stylesheet/colors/color1.css" id="colors">

	<!-- Reponsive -->
	<link rel="preload" href="stylesheet/responsive.css" as="style">
	<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css">

	<!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
	<link href="icon/favicon.png" rel="shortcut icon">
	<link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@yield('head')
</head>
<body>
	<div class="boxed blog" id="app">
		<header id="header" class="header bg-color">
			<div class="container">
				<div class="row">
					<div class="header-wrap">
						<div class="logo">
							<a href="/" title="">
								<img src="{{ asset('images/m-logo.svg') }}" alt="logo">
							</a>
						</div><!-- /#logo -->
						<div class="flat-show-search">
							<div class="top-search">
							</div> <!-- /.top-search -->
						</div>	<!-- /.flat-show-search -->
						<div class="nav-wrap">
							<div class="btn-menu">
								<span></span>
							</div><!-- //mobile menu button -->
							<nav id="mainnav" class="mainnav">
								<ul class="menu">
									<li
										@if (request()->is('/'))
											class="active"
										@endif
									>
										<a href="/" title="">Početna</a>
									</li>
									<li
										@if (request()->is('about'))
											class="active"
										@endif
									>
										<a href="about" title="">O nama</a>
									</li>
									<li
										@if (request()->is('services'))
											class="active"
										@endif
									>
										<a href="services" title="">Usluge</a>
									</li>
									<li
										@if (request()->is('news'))
											class="active"
										@endif
									>
										<a href="news" title="">Vijesti</a>
									</li>
									<li
										@if (request()->is('contact-v1'))
											class="active"
										@endif
									>
										<a href="contact-v1" title="">Kontakt</a>
									</li>
								</ul><!-- /.menu -->
							</nav><!-- /#mainnav -->
						</div><!-- /.nav-wrap -->
					</div><!-- /.header-wrap -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</header><!-- /header -->
		@yield ('content')
		<footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-about">
                            <div id="logo-ft">
                                <a href="/" title="">
                                    <img src="{{ asset('images/m-logo.svg') }}" alt="logo">
                                </a>
                            </div>
                            <p>Prvi mjesec naših knjigovodstvenih usluga je besplatan.
                            </p>
                            <ul class="social">
                                <li>
                                    <a href="#" title="">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
								</li>
								<li>
									<a href="#" title="">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
                            </ul>
                        </div><!-- /.widget-text -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-services">
                            <h3 class="title" style="font-family: 'Alegreya Sans', sans-serif;">Brzi linkovi</h3>
                            <ul class="one-half first">
                                <li><a href="/" title="">Početna</a></li>
                                <li><a href="about" title="">O nama</a></li>
                                <li><a href="services" title="">Usluge</a></li>
                            </ul><!-- /.one-half -->
                            <ul class="one-half">
                                <li><a href="contact-v1" title="">Kontakt</a></li>
                                <li><a href="news" title="">Vijesti</a></li>
                                <li><a href="about" title="">Naš tim</a></li>
                            </ul><!-- /.one-half -->
                            <div class="clearfix"></div>
                        </div><!-- /.widget-services -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-lastest">
                            <h3 class="title" style="font-family: 'Alegreya Sans', sans-serif;">Kontakt</h3>
                            <ul>
                                <li>
									Naša knjigovodstevana agencija se nalazi na Agrotržnom centru, Lamela II Bijeljina.
									Broj telefona za kontakt: 055/425-933 ili direktnim dolaskom u našu kancelariju. Pozive za saradnju primamo radnim danima od 8 do 16h.
                                </li>
                            </ul>
                        </div><!-- /.widget-services -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-subscribe">
                            <h3 class="title" style="font-family: 'Alegreya Sans', sans-serif;">Kontakt putem mail-a</h3>
                            <form id="subscribe-form" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                                <div id="subscribe-content">
									<a href="contact-v1">
										<button type="button" id="subscribe-button" class="button-subscribe">Kontaktiraj nas</button>
									</a>
                                </div>
                                <div id="subscribe-msg"></div>
                            </form>
                        </div><!-- /.widget-subscribe -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                </div><!-- /.row .widget-box -->
            </div><!-- /.container -->
        </footer><!-- /#footer -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							<p>© Copyright <a href="/" title="">Mediteran</a>. Sva prava zadržana.</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.footer-bottom -->

		<div class="button-go-top">
			<a href="#" title="" class="go-top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div>
	</div> <!-- /.boxed -->

	<!-- Javascript -->
	<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('javascript/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ ('javascript/tether.min.js') }}"></script>
	<script type="text/javascript" src="{{ ('javascript/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ ('javascript/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript" src="{{ ('javascript/owl.carousel.js') }}"></script>
	<script type="text/javascript" src="{{ ('javascript/jquery.easing.js') }}"></script>
	<script type="text/javascript" src="{{ ('javascript/parallax.js') }}"></script>

	<script type="text/javascript" src="{{ ('javascript/jquery.cookie.js') }}"></script>
	<script type="text/javascript" src="j{{ ('avascript/waypoints.min.js') }}"></script>
	<script type="text/javascript" src="{{ ('javascript/main.js') }}"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
		toastr.options = {
			"closeButton": true,
			"debug": false,
			"newestOnTop": false,
			"progressBar": true,
			"positionClass": "toast-bottom-left",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
	</script>


	@if (Session::has('success'))
		<script>
			toastr.success("{{ session("success") }}");
		</script>
	@endif

	@if (Session::has('info'))
		<script>
			toastr.info("{{ session("info") }}");
		</script>
	@endif

	@if (Session::has('warning'))
		<script>
			toastr.warning("{{ session("warning") }}");
		</script>
	@endif

	@if (Session::has('error'))
		<script>
			toastr.error("{{ session("error") }}");
		</script>
	@endif

</body>
</html>