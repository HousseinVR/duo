@extends('layouts.index')
@section('content')

<main id="main" class="site-main">

    <section class="site-section-small portfolio">

        <div class="container">
            <h1 class="section-title-big text-center">Portfolio</h1>
        </div>
        <div>
            <a href={{route("portefolio_form")}}>DASHBOARD PORTEFOLIO</a>
        </div>

        <div class="container-fluid">
            <div class="row" id="grid">
                @forelse ( $table as $item )
                <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                    <a class="portfolio-link" href="#">
                        <img src={{asset('/img/portfolio-1.jpg')}} alt="" class="img-carousel">
                        <div class="portfolio-info">
                            <div class="portfolio-info-top">
                                <h3>{{ $item-->titre }}</h3>
                            </div><!-- /.portfolio-info-top -->
                            <div class="portfolio-info-bottom">
                                <p>{{ $item --> description }}</p>
                            </div><!-- /.portfolio-info-bottom -->
                        </div><!-- /.portfolio-info  -->
                    </a>
                </div><!-- /.col-lg-fifth  -->

                @empty

                <h1>il n' ya rien ici</h1>


                @endforelse


            </div><!-- /#grid -->

        </div>

    </section><!-- /.portfolio -->
