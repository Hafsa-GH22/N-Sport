<!DOCTYPE html>
<html>

<head>
    <title>N-Sport</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/li-scroller.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <!-- Logo -->
        <header id="header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="header_bottom" style="padding-top: 30px;">
                        <div class="logo_area"><img src="/images/logo61.png" alt="logo" style="height: 90px; width: 220px;"></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- La bare de navigation -->
        <section id="navArea">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav main_nav">
                        <li class="active"><a href="/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                        <!-- Catégories -->
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Catégorie</a>
                            <ul class="dropdown-menu" role="menu">
                            @foreach ($categories as $cat)
                                <li><a href="/category/{{ $cat->name }}">{{ $cat->name }}</a></li>
                            @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <!-- Contenu de chaque page -->
        @yield('content')
        <!-- ---------------------- -->

        <!-- Footer -->
        <footer id="footer">
            <div class="footer_top">
                <div class="row">
                    <!-- Encadré par -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInLeftBig">
                            <h2>Encadré par</h2>
                            <ul class="tag_nav">
                                <li>Mr. A. A. BOUDHIR</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Réalisé par -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInDown">
                            <h2>Réalisé par</h2>
                            <ul class="tag_nav">
                                <li>AKKAR Ferdaous</li>
                                <li>AYMANE Boujellaba</li>
                                <li>KHCHICH Mouad</li>
                                <li>ZEROUALI Hajar</li>
                                <li>GHARBI Hafsa</li>
                                <li>CHERKAOUI Rabab</li>
                                <li>ACHATIBI Hajar</li>
                                <li>DAROUY Chaimae</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInRightBig">
                            <h2>Contact</h2>
                            <p>
                            <ul>
                                <li>akkar88889@gmail.com</li>
                                <li>aymane.boujellaba@gmail.com</li>
                                <li>mouad.khchich@gmail.com</li>
                                <li>hajarzerouali8@gmail.com</li>
                                <li>hafsa.gh19@gmail.com</li>
                                <li>cherkaouirabab@gmail.com</li>
                                <li>achatibihajar@gmail.com</li>
                                <li>chaimae.darouy@etu.uae.ac.ma</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p class="copyright">Copyright &copy; FSTT-Département génie informatique - LSI S3 2020-2021</p>
                
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.li-scroller.1.0.js') }}"></script>
    <script src="{{ asset('js/jquery.newsTicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
