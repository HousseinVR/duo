<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Home | BusinessPerfect</title>

        <meta name="description" content="BusinessPerfect - Freebie HTML/CSS template based on Bootstrap">
        <meta name="author" content="Milan Savov">
        <meta name="keywords" content="html, css, twitter bootstrap, javascript, jquery, responsive">

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- Favicon
        ================================================== -->
        <link rel="apple-touch-icon" sizes="180x180" href={{asset('/img/apple-touch-icon.png')}}>
        <link rel="icon" type="image/png" sizes="16x16" href={{asset("/img/favicon.png")}}>

        <!-- Stylesheets
        ================================================== -->
        <!-- Bootstrap core CSS -->
        <link href= {{asset('css/bootstrap.min.css')}} rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href={{asset('css/style.css')}} rel="stylesheet">
        <link href={{asset('css/responsive.css')}} rel="stylesheet">
        <link href= {{asset('css/colors.css')}} rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

        <nav id="primary-navigation" class="site-navigation">

            <div class="container-fluid">

                <div class="navbar-header">

                    <a href="index.html" class="site-title yellow-text">Business Perfect</a>

                </div><!-- /.navbar-header -->

                <div class="main-menu" id="perfect-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="/"">Home</a></li>
                        <li>
                            <a href="/blog">Blog </a>
                        </li>
                        <li>
                            <a href="/portefolio">Portfolio</a>
                        </li>
                        <li>
                            <a href="contact">Contact</a>
                        </li>
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->

            </div>

        </nav><!-- /.site-navigation -->

    </header><!-- /#masthead -->

    @yield('content')

    <footer id="colophon" class="site-footer">

        <div class="container">

            <div class="email">
                <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a>
            </div><!-- /.email -->

            <div class="row">

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <a href="index.html" class="site-title yellow-text">Business<span>Perfect</span></a>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Get in touch</h4>
                        <ul class="list-unstyled">
                            <li>Phone: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                            <li>Email: <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a></li>
                            <li>Fax: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Location</h4>
                        <ul class="list-unstyled">
                            <li>BusinessPerfect</li>
                            <li>848 My Street,</li>
                            <li>CA 94544</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

        <div class="copyright">
            <p>&copy; 2017 BusinessPerfect | Made by <a href="http://milansavov.com/" class="yellow-text">Milan Savov</a></p>
        </div><!-- /.copyright -->

    </footer><!-- /.site-footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src={{asset("/js/bootstrap.min.js")}}></script>
    <script src={{asset("/js/jquery.slicknav.min.js")}}></script>
    <script src={{asset("/js/slick.min.js")}}></script>
    <script src={{asset("/js/touchswipe.min.js")}}></script>
    <script src={{asset("/js/skrollr.min.js")}}></script>
    <script src={{asset("/js/jquery.countTo.min.js")}}></script>
    <script src={{asset("/js/script.js")}}></script>

</body>
</html>
