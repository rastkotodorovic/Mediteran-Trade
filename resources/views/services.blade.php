@extends('layout')

@section('title', 'Usluge')

@section('meta')

    <meta name="keywords" content="Usluge Mediteran Bijeljina, Racunovodstvena agencija Mediteran usluge">

    <meta name="description" content="Racunovodstvena agencija u Bijeljini. Usluge:racunovodstvo, knjigovodstvo">

@endsection

@section('content')

    <div class="page-title parallax parallax2">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="h1-title">Usluge</h1>
                        </div><!-- /.page-title-heading -->
                        <ul class="breadcrumbs">
                            <li><a href="/" title="">Početna<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li>Usluge</li>
                        </ul><!-- /.breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.page-title -->
    <section class="flat-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-services">
                        <h2>Neke od naših mnogobrojnih usluga</h2>
                        <p>Računovodstvena agencija Mediteran vam pruža veliki asortiman usluga. Ovdje su navedene neke od osnovnih.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-tab-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-services">
                        <div class="tab-list-services">
                            @foreach ($services as $service)
                            <div class="tab-item">
                                <div class="box-tab">
                                    <h4>{{ $service->title }}</h4>
                                    <p>Opcija</p>
                                </div>
                            </div><!-- /.tab-item -->
                            @endforeach
                            <div class="clearfix">
                            </div>
                        </div><!-- /.tab-list-about -->
                        <div class="content-tab">
                            @foreach($services as $service)
                            <div class="content-inner">
                                <div class="one-half">
                                    <div class="text-tabs">
                                        <div class="text-content">
                                            <h3>{{ $service->title }}</h3>
                                            <p>{{ $service->body }}</p>
                                        </div>
                                        <div class="text-content">
                                            <h3>Mi vam pružamo</h3>
                                            <div class="text-list">
                                                <div class="image">
                                                    <img src="images/services/01.jpg" alt="">
                                                </div>
                                                <ul>
                                                    <li>
                                                        Pouzdanost
                                                    </li>
                                                    <li>
                                                        Efikasnost
                                                    </li>
                                                    <li>
                                                        Povjerenje
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.text-tabs -->
                                </div><!-- /.one-half -->
                                <div class="one-half">
                                    <div class="video-content">
                                        <a class="fancybox" data-type="iframe" href="https://www.youtube.com/embed/2Ge1GGitzLw?autoplay=1">
                                        <img src="images/page/video-1.jpg" alt="video">
                                    </a>
                                    </div>
                                </div><!-- /.one-half -->
                                <div class="clearfix"></div>
                            </div><!-- /.content-inner -->
                            @endforeach
                        </div><!-- /.content-tab -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection