@extends ('layout')

@section ('content')

<div class="page-title parallax parallax2">
    <div class="title-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="h1-title">Vijesti</h1>
                    </div><!-- /.page-title-heading -->
                    <ul class="breadcrumbs">
                        <li><a href="#" title="">Pocetna<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
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
            @foreach ($news as $new)
                <div class="col-md-4 col-sm-6">
                    <article class="main-post">
                        <div class="featured-post">
                            <a href="{{ $new->link }}" title="">
                                <img src="{{ $new->image }}" alt="" />
                            </a>
                        </div><!-- /.featured-post -->
                        <div class="entry-content">
                            <div class="date">
                                {{ $new->created_at }}
                            </div>
                            <h3>
                                <a href="#" title="">{{ $new->title }}</a>
                            </h3>
                            <p>
                                {{ $new->body }}
                            </p>
                        </div><!-- /.entry-content -->
                    </article>
                </div>
            @endforeach
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="blog-pagination">
                <ul class="flat-pagination">
                    <li><a href="#" title="" class="active">1</a></li>
                    <li><a href="#" title="">2</a></li>
                    <li><a href="#" title="">Next <i class="fa fa-angle-double-right"></i></a></li>
                </ul><!-- /.flat-pagination -->
            </div><!-- /.blog-pagination -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.main-content -->
@endsection