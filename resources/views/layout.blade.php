<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>@yield('title') | Racunovodstvena Agencija Mediteran Cvijeta Panic</title>

	@yield('meta')
    <meta name="keywords" content="Racunovodstvo Bijeljina, Knjigovodstvo Bijeljina, Mediteran Bijeljina, Cvijeta Panic, Racunovodstvena agencija Mediteran">

    <meta name="description" content="Racunovodstvena agencija u Bijeljini. Usluge:racunovodstvo, knjigovodstvo">

	<meta name="author" content="themsflat.com">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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

</head>
<body>
	<div class="boxed blog" id="app">
		<!-- Preloader -->
		<div id="loading-overlay">
			<div class="loader"></div>
		</div>

		<header id="header" class="header bg-color">
			<div class="container">
				<div class="row">
					<div class="header-wrap">
						<div id="logo" class="logo">
							<a href="/" title="">
								<h1>Mediteran</h1>
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
                                <a href="#" title="">
                                    <h2 style="color:#1c4675;">Mediteran</h2>
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
                            </ul>
                        </div><!-- /.widget-text -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-services">
                            <h3 class="title">Brzi linkovi</h3>
                            <ul class="one-half first">
                                <li><a href="/" title="">Pocetna</a></li>
                                <li><a href="about" title="">O nama</a></li>
                                <li><a href="services" title="">Usluge</a></li>
                            </ul><!-- /.one-half -->
                            <ul class="one-half">
                                <li><a href="contact-v1" title="">Kontakt</a></li>
                                <li><a href="news" title="">Vijesti</a></li>
                                <li><a href="about" title="">Nas tim</a></li>
                            </ul><!-- /.one-half -->
                            <div class="clearfix"></div>
                        </div><!-- /.widget-services -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-lastest">
                            <h3 class="title">Kontakt</h3>
                            <ul>
                                <li>
									Naša knjigovodstevan agencija se nalazi na Agrotržnom centru, Lamela II Bijeljina.
									Broj telefona za kontakt: 055/425-933 ili direktnim dolaskom u nasu kancelariju. Pozive za saradnju primamo radnim danima od 8 do 16h.
                                </li>
                            </ul>
                        </div><!-- /.widget-services -->
                    </div><!-- /.col-md-3 col-sm-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="widget-ft widget-subscribe">
                            <h3 class="title">Kontakt putem mail-a</h3>
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
		<component-flash message="{{ session('flash') }}"></component-flash>
	</div> <!-- /.boxed -->
	<script src="{{ asset('js/app.js') }}"></script>

	<!-- Javascript -->
	<script type="text/javascript" src="javascript/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/tether.min.js"></script>
	<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
	<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="javascript/owl.carousel.js"></script>
	<script type="text/javascript" src="javascript/jquery.easing.js"></script>
	<script type="text/javascript" src="javascript/parallax.js"></script>

	<script type="text/javascript" src="javascript/jquery.cookie.js"></script>
	<script type="text/javascript" src="javascript/waypoints.min.js"></script>
	<script type="text/javascript" src="javascript/main.js"></script>
</body>
</html>