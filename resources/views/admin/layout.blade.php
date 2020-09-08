<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{ config('app.name') }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <meta name="robots" content="noindex, nofollow">
    <!--     Fonts and icons     -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
    <script href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="">
    <div id="app">
        <div class="wrapper ">
            <div class="sidebar" data-color="blue">
                <div class="logo">
                    <a
                        href="http://www.creative-tim.com"
                        class="simple-text logo-normal"
                        style="margin-left:70px;"
                    >
                        Mediteran
                    </a>
                </div>
                <div class="sidebar-wrapper" id="sidebar-wrapper">
                    <ul class="nav">
                        <li
                            @if(request()->is('admin'))
                                class="active"
                            @endif
                        >
                            <a href="{{ route('task.index') }}">
                                <i class="now-ui-icons design_app"></i>
                                <p>Pocetna</p>
                            </a>
                        </li>
                        <li
                            @if (request()->is('admin/news'))
                                class="active"
                            @endif
                        >
                            <a href="{{ route('news.index') }}">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>Vijesti</p>
                            </a>
                        </li>
                        <li
                            @if (request()->is('admin/services'))
                                class="active"
                            @endif
                        >
                            <a href="/admin/services">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>Usluge</p>
                            </a>
                        </li>
                        <li
                            @if (request()->is('admin/profile'))
                                class="active"
                            @endif
                        >
                            <a href="/admin/profile">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>Profil</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel" id="main-panel">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @yield ('content')
                <footer class="footer">
                    <div class=" container-fluid ">
                        <nav>
                            <ul>
                                <li>
                                    {{ config('app.name') }}
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright" id="copyright">
                            &copy; {{ now()->year }}, Designed by <a href="#" target="_blank">Rastko</a>.
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
		toastr.options = {
			"closeButton": true,
			"debug": false,
			"newestOnTop": false,
			"progressBar": true,
			"positionClass": "toast-bottom-right",
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
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
    <script src="../assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            demo.initDashboardPageCharts();
        });
    </script>
</body>
</html>