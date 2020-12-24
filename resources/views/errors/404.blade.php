@extends('layout')

@section('title', '404')

@section('meta')

    <meta name="keywords" content="Mediteran Bijeljina o nama">

    <meta name="description" content="Mediteran je dugogodisnja racunovodstvena firma u Bijeljini sa preko 100 zadovoljnjih klijenata">

@endsection

@section('content')

<section class="flat-error">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="wrap-error center">
							<div class="header-error">
								<img src="images/page/error.png" alt="">
							</div>
							<div class="content-error">
								<h1>Stranica nije pronađena</h1>
								<p>Stranica kojoj želite da pristupite nije pronađena. </p>
								<div class="btn-submit">
									<a href="/" title="">Vratite se na početnu</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</section>

@endsection