@extends('layouts.index')
@section("content")
<div class="hero background-overlay">

    <div class="hero-text">
        <h1>Simplicity is the soul of efficiency</h1>
    </div> <!-- /.hero-text -->
    <div class="hero-arrow">
        <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    </div><!-- /.hero-arrow -->

</div><!-- /.hero -->

<main id="main" class="site-main">

    <section class="site-section section-quote text-center">

        <div class="container">

            <p class="quote">I owe my success to having listened respectfully to the very best advice, and then going away and doing the exact opposite</p>
            <p class="quote-owner yellow-text">G. K. Chesterton</p>

        </div>

    </section><!-- /.section-quote -->

    <section class="section-we-are-creative">

        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-6 hidden-xs">
                    <img class="img-carousel" src={{asset("img/we-are-creative.jpg")}} alt="We are creative">
                </div>

                <div class="col-sm-6 project yellow-bg">

                    <div class="project-content">

                        <h3 class="section-title">We Are Creative</h3>
                        <p class="small-title mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et nunc nunc. Ut consectetur felis sit amet fermentum accumsan. Vivamus ligula diam, aliquet id fringilla nec, elementum malesuada mauris. Nulla eu vehicula velit. Donec porta imperdiet luctus.</p>
                        <a href="#" class="white-text">Join Us</a>

                    </div> <!-- /.project-content-->

                </div>

            </div>

        </div>

    </section><!-- /.section-we-are-creative -->

    <section class="site-section-small section-services">

        <div class="container">

            <div class="text-center">

                <h3 class="section-title">We Are The Best</h3>
                <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            </div>

            <div class="row">

                <div class="col-sm-5 col-sm-offset-1 col-xs-6">

                    <div class="service">

                        <div class="service-icon">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">Clean Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->

                    <div class="service">

                        <div class="service-icon">
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">Customizable</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->

                </div>

                <div class="col-sm-5 col-xs-6">

                    <div class="service">

                        <div class="service-icon">
                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">Responsive Layout</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->

                    <div class="service">

                        <div class="service-icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">Multi-Purpose</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </div><!-- /.service-content -->

                    </div><!-- /.service -->

                </div>

            </div>

        </div>

    </section><!-- /.section-services -->

    <section class="site-section-small section-work-with-us yellow-bg text-center">

        <div class="container">

            <p class="section-title-small white-text mb-50">Coming together is a beginning, keeping together is progress, working together is success.</p>
            <a class="btn" href="#">Start Now</a>

        </div>

    </section><!-- /.section-work-with-us -->

    <section class="social-networks">

        <div class="container-fluid">

            <div class="row">

                <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>

            </div>

        </div>

    </section><!-- /.social-networks -->

</main><!-- /.site-main -->

@endsection
