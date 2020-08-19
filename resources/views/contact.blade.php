@extends('layout')

@section('title', 'Kontakt')

@section('meta')

    <meta name="keywords" content="Kontakt Mediteran Bijeljina, Racunovodstvena Agencija Mediteran kontakt">

    <meta name="description" content="Racunovodstvena agencija u Bijeljini. Usluge:racunovodstvo, knjigovodstvo">

@endsection

@section('content')

    <div class="page-title parallax parallax2">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="h1-title">Kontakt</h1>
                        </div><!-- /.page-title-heading -->
                        <ul class="breadcrumbs">
                            <li><a href="/" title="">Početna<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li>Kontakt</li>
                        </ul><!-- /.breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.page-title -->
    <section class="flat-row flat-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-title style1 center">
                        <h2>Kontaktiraj nas</h2>
                    </div>
                    <div class="flat-contact-form">
                        <form class="form-info" method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="field-row">
                                <div class="one-three">
                                    <p class="input-info"><input type="text" name="name" id="name" value="" placeholder="Ime" required autocomplete="off"></p>
                                </div>
                                <div class="one-three">
                                    <p class="input-info"><input type="email" name="email" id="email" value="" placeholder="E-mail" required autocomplete="off"></p>
                                </div>
                                <div class="one-three">
                                    <p class="input-info"><input type="text" name="subject" id="phone" value="" placeholder="Tema" required autocomplete="off"></p>
                                </div>
                            </div>
                            <div class="input-text">
                                <textarea id="message-contact" name="message" placeholder="Poruka" required autocomplete="off"></textarea>
                            </div>
                            <div class="btn-submit">
                                <button>Posalji</button>
                            </div>
                        </form> <!-- /.flat-form-info -->
                    </div>
                </div> <!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row-iconbox -->

    <!-- map -->
    <section class="flat-row pdmap">
        <div class="flat-maps" data-address="Cornwall, Vermont, Hoa Kỳ" data-height="500" data-images="images/map/map-1.png" data-name="Themesflat Map"></div>
        <div class="gm-map">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d708.207753134186!2d19.176833829265462!3d44.763860998693666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDQ1JzQ5LjkiTiAxOcKwMTAnMzguNiJF!5e0!3m2!1sbs!2sba!4v1593699792372!5m2!1sbs!2sba" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>

@endsection