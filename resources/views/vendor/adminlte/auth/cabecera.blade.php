<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  <meta name="description" content="Creative One Page Parallax Template">
     <meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" />
     <meta name="author" content=""> -->
    <title>ErosSolution -Proyecto salas audiencias</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]> <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script> <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<div class="preloader">
    <div class="preloder-wrap">
        <div class="preloder-inner">
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
        </div>
    </div>
</div><!--/.preloader-->
<header id="navigation">
    <div class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h1><img src="images/logonuevomini.png" alt="logo"></h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <div class="navbar-collapse collapse">
                         <ul class="nav navbar-nav"> -->
                    <li class="scroll active"><a href="#navigation">Home</a></li>
                    <!--  <li class="scroll"><a href="#about-us">About Us</a></li>
                    <li class="scroll"><a href="#services">Services</a></li>  -->
                    <li class="scroll"><a href="#our-team">Our Team</a></li>
                    <!-- <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                     <li class="scroll"><a href="#clients">Clients</a></li>  -->
                    <li class="scroll"><a href="#blog">Blog</a></li>
                    <li class="scroll"><a href="#contact">Contact</a></li>
                    <!--  </ul>  -->
                    <!-- <ul class="nav navbar-nav navbar-right">  -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div><!--/navbar-->
</header> <!--/#navigation-->



<!-- la otra parte de la barra de navegacion -->
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/home') }}"><img src="../materialkit/images/logonuevomini.png" alt="logo"></a>

            </div>

            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href="#navigation">Home</a></li>
                    <li class="scroll"><a href="#our-team">Nuestro Equipo</a></li>
                    <li class="scroll"><a href="#blog">Blog</a></li>
                    <li class="scroll"><a href="#contact">Contact</a></li>

                    <!-- <li>
                         <a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
                             <i class="material-icons">unarchive</i> Upgrade to PRO
                         </a>
                     </li>
                     <li>
                         <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                             <i class="fa fa-twitter"></i>
                         </a>
                     </li>
                     <li>
                         <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                             <i class="fa fa-facebook-square"></i>
                         </a>
                     </li>
                     <li>
                         <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                             <i class="fa fa-instagram"></i>
                         </a>
                     </li>
                     -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>