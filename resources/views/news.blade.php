@extends('layout')

@section('title', 'Vijesti')

@section('meta')

    <meta name="keywords" content="Vijesti Mediteran Bijeljina, Racunovodstvena agencija Mediteran vijesti">

    <meta name="description" content="Najnovije vijesti u racunovodstvu">

@endsection

@section('content')
    <div class="page-title parallax parallax2">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="h1-title">Vijesti</h1>
                        </div><!-- /.page-title-heading -->
                        <ul class="breadcrumbs">
                            <li><a href="/" title="">Pocetna<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li>Vijesti</li>
                        </ul><!-- /.breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.page-title -->
    <section class="main-content">
        <div class="container">
                <div class="row">
                    @foreach ($news as $article)
                        <div class="col-md-4 col-sm-6">
                            <article class="main-post">
                                <div class="featured-post">
                                    <a
                                        href="https://{{ $article->link }}/"
                                        title=""
                                        target="_blank"
                                    >
                                        <img src="{{ asset('storage/'. $article->image) }}" alt="Vijesti" />
                                    </a>
                                </div><!-- /.featured-post -->
                                <div class="entry-content">
                                    <div class="date">
                                        {{ $article->created_at }}
                                    </div>
                                    <h3>
                                        <a href="#" title="">{{ $article->title }}</a>
                                    </h3>
                                    <p>
                                        {{ $article->body }}
                                    </p>
                                </div><!-- /.entry-content -->
                            </article>
                        </div>
                    @endforeach
                </div><!-- /.row -->
            <div  class="d-flex justify-content-center">
                <div class="flat-pagination">
                    {{ $news->links() }}
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.main-content -->
@endsection