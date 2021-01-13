<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <!-- <link href="{{url('../storage/sbAdmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('../storage/assets_home/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('../storage/assets_home/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('../storage/assets_home/css/responsive.css')}}">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="{{url('../storage/assets_home/css/colors/orange.css')}}" />
    <!-- Slick -->
    <link rel="stylesheet" href="{{url('../storage/slick.css')}}">
    <link rel="stylesheet" href="{{url('../storage/slick-theme.css')}}">


    <!--Link Script-->


    <!-- Modernizer -->
    <script src="{{url('../storage/assets_home/js/modernizer.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Test -->
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="{{asset('../storage/assets_home/images/logo02.png')}}" width="60" height="60" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">Tentang Kami</a></li>
                                    <li><a href="#rekomendasi">Rekomendasi</a></li>
                                    <li><a href="#promo">Promo</a></li>
                                    <li><a href="#gallery">Menu Favorit</a></li>
                                    <li><a href="#blog">Artikel</a></li>
                                    @guest
                                    <li><a href="/login"> Login</a></li>
                                    @endguest
                                    @auth
                                    <li><a href="/account">Hi, {{auth()->user()->name}}</a></li>
                                    @endauth
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>

    <!-- Banner -->
    @yield('container')
    <!-- end banner -->
    <!-- End Banner -->







    <!-- ALL JS FILES -->
    <script src="{{url('../storage/assets_home/js/all.js')}}"></script>
    <script src="{{url('../storage/assets_home/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{url('../storage/assets_home/js/custom.js')}}"></script>

    <script type="text/javascript" src="{{url('../storage/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{url('../storage/slickCarousel.js')}}"></script>
</body>

</html>