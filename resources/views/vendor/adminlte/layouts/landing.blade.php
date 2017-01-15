<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  <meta name="description" content="Creative One Page Parallax Template">
     <meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" />
     <meta name="author" content=""> -->
    <title>ErosSolution -Proyecto salas audiencias</title>
    <link href="../materialkit/css/bootstrap.min.css" rel="stylesheet">
    <link href="../materialkit/css/prettyPhoto.css" rel="stylesheet">
    <link href="../materialkit/css/font-awesome.min.css" rel="stylesheet">
    <link href="../materialkit/css/animate.css" rel="stylesheet">
    <link href="../materialkit/css/main1.css" rel="stylesheet">
    <link href="../materialkit/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]> <script src="../materialkit/js/html5shiv.js"></script>
    <script src="../materialkit/js/respond.min.js"></script> <![endif]-->
    <link rel="shortcut icon" href="../materialkit/images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../materialkit/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../materialkit/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../materialkit/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../materialkit/images/ico/apple-touch-icon-57-precomposed.png">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="../materialkit/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../materialkit/css/material-kit.css" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../materialkit/css/demo.css" rel="stylesheet" />




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
                <a class="navbar-brand" href="#navigation"><h1><img src="../materialkit/images/logonuevomini.png" alt="logo"></h1></a>
             </div>
             <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href="#navigation">Inicio</a></li>
                    <!--  <li class="scroll"><a href="#about-us">About Us</a></li>
                    <li class="scroll"><a href="#services">Services</a></li>  -->
                    <li class="scroll"><a href="#our-team">Nuestro Equipo</a></li>
                    <!-- <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                    <li class="scroll"><a href="#clients">Clients</a></li>  -->
                    <li class="scroll"><a href="#blog">Blog</a></li>
                   <li class="scroll"><a href="#contact">Contactanos</a></li>

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

<section id="home">
    <div class="home-pattern"></div>
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>

        </ol><!--/.carousel-indicators-->
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(../materialkit/images/slider/palacio2.jpeg)">
                <div class="carousel-caption">
                    <div>
                        <h3 class="heading animated bounceInDown">01800-MESA DE AYUDA</h3>
                        <h3 class="heading animated bounceInUp"><p>Puedes marcar desde tu celular</p></h3>
                        <!--<a class="btn btn-default slider-btn animated fadeIn" href="#">Linea gratuita</a> -->
                        <button class="btn btn-info">Linea gratuita</button>

                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(../materialkit/images/slider/sliderpalacio.jpeg)">
                <div class="carousel-caption"> <div>
                        <h3 class="heading animated bounceInDown">01800-MESA DE AYUDA</h3>
                        <h3 class="heading animated bounceInUp"><p>Puedes marcar desde tu celular</p></h3>
                      <!--  <a class="btn btn-default slider-btn animated fadeIn" href="#">Linea gratuita</a> -->
                        <button class="btn btn-info">Linea gratuita</button>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(../materialkit/images/slider/redes-man.jpeg)">
                <div class="carousel-caption">
                    <div>
                        <h3 class="heading animated bounceInDown">01800-MESA DE AYUDA</h3>
                        <h3 class="heading animated bounceInUp"><p>Puedes marcar desde tu celular</p></h3>
                       <!--  <a class="btn btn-default slider-btn animated fadeIn" href="#">Linea gratuita</a> -->
                        <button class="btn btn-info">Linea gratuita</button>
                    </div>
                </div>
            </div>

        </div><!--/.carousel-inner-->

        <a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
    </div>

</section><!--/#home-->

<!--<section id="about-us">
    <div class="container">
        <div class="text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">Why With Us?</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="about-us">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Why with us?</h3>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-chain-broken"></i> About</a></li>
                        <li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> Mission</a></li>
                        <li><a href="#community" data-toggle="tab"><i class="fa fa-users"></i> Community</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="about">
                            <div class="media">
                                <img class="pull-left media-object" src="../materialkit/images/about-us/about.jpg" alt="about us">
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mission">
                            <div class="media">
                                <img class="pull-left media-object" src="../materialkit/images/about-us/mission.jpg" alt="Mission">
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="community">
                            <div class="media">
                                <img class="pull-left media-object" src="../materialkit/images/about-us/community.jpg" alt="Community">
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3>Our Skills</h3>
                    <div class="skill-bar">
                        <div class="skillbar clearfix " data-percent="90%">
                            <div class="skillbar-title">
                                <span>HTML5 &amp; CSS3</span>
                            </div>
                            <div class="skillbar-bar"></div>
                            <div class="skill-bar-percent">90%</div>
                        </div> <!-- End Skill Bar -->
<!--   <div class="skillbar clearfix" data-percent="85%">
       <div class="skillbar-title"><span>UI Design</span></div>
       <div class="skillbar-bar"></div>
       <div class="skill-bar-percent">85%</div>
   </div> <!-- End Skill Bar -->
<!--         <div class="skillbar clearfix " data-percent="70%">
             <div class="skillbar-title"><span>jQuery</span></div>
             <div class="skillbar-bar"></div>
             <div class="skill-bar-percent">70%</div>
         </div> <!-- End Skill Bar -->
<!--    <div class="skillbar clearfix " data-percent="60%">
        <div class="skillbar-title"><span>PHP</span></div>
        <div class="skillbar-bar"></div>
        <div class="skill-bar-percent">60%</div>
    </div> <!-- End Skill Bar -->
<!--       <div class="skillbar clearfix " data-percent="75%">
           <div class="skillbar-title"><span>Wordpress</span></div>
           <div class="skillbar-bar"></div>
           <div class="skill-bar-percent">75%</div>
       </div> <!-- End Skill Bar --></div>
<!--          </div>
      </div>
  </div>
</div>
</section><!--/#about-us-->

<!-- Inicio Servicio-->
<!--<section id="services" class="parallax-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="our-service">
                    <div class="services row">
                        <div class="col-sm-4">
                            <div class="single-service">
                                <i class="fa fa-th"></i>
                                <h2>Modern Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-service">
                                <i class="fa fa-html5"></i>
                                <h2>Web Development</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-service">
                                <i class="fa fa-users"></i>
                                <h2>Online Marketing</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                            </div>
                        </div></div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#service-->

<!-- Inicio Nuestro Equipo-->
<section id="our-team">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">Conozca nuestro Equipo</h2>
                <p>El departamento de sistemas del palacio de justicia de Bucaramanga cuenta con profesionales expertos en cada una de sus areas.</p>
            </div>
        </div>
        <div id="team-carousel" class="carousel slide" data-interval="true">
            <a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            <div class="carousel-inner team-members">
                <div class="row item active">
                    <div class="col-sm-6 col-md-3">
                        <div class="single-member">
                            <img src="../materialkit/images/our-team/member1.jpg" alt="team member" />
                            <h4>Manuel fernando Lizarazo</h4>
                            <h5>Ing. Seccional</h5>
                            <p></p>

                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-member">
                            <img src="../materialkit/images/our-team/member2.jpg" alt="team member" />
                            <h4>Freddy Rogert Mount</h4>
                            <h5>Ing. Bases de Datos</h5>
                            <p></p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-member">
                            <img src="../materialkit/images/our-team/member3.jpg" alt="team member" />
                            <h4>Paul Johnson</h4>
                            <h5>Skilled Programmer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-member">
                            <img src="../materialkit/images/our-team/member4.jpg" alt="team member" />
                            <h4>John Richerds</h4>
                            <h5>Marketing Officer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row item">
                    <div class="col-sm-6 col-md-3">
                        <div class="single-member">
                            <img src="../materialkit/images/our-team/member1.jpg" alt="team member" />
                            <h4>William Hurt</h4>
                            <h5>Sr. Web Developer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-member">
                            <img src="../materialkit/images/our-team/member3.jpg" alt="team member" />
                            <h4>Paul Johnson</h4>
                            <h5>Skilled Programmer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-member">
                            <img src="../materialkit/images/our-team/member2.jpg" alt="team member" />
                            <h4>Alekjandra Jony</h4>
                            <h5>Creative Designer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-member">
                            <img src="../materialkit/images/our-team/member4.jpg" alt="team member" />
                            <h4>John Richerds</h4>
                            <h5>Marketing Officer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Final #Our-Team-->


<!-- Inicio Portafolio -->
<!--<section id="portfolio">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">Portfolio</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
            </div>
        </div>
        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".html">Html</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".joomla">Joomla</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".megento">Megento</a></li>
        </ul><!--/#portfolio-filter-->
<!--<div class="portfolio-items">
    <div class="col-sm-3 col-xs-12 portfolio-item html">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/1.jpg" alt=""></div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item jooma">
        <div class="view efffect" >
            <div class="portfolio-image">
                <img src="images/portfolio/2.jpg" alt="">
            </div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/3.jpg" alt="">
            </div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item megento">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/4.jpg" alt="">
            </div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item html">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="images/portfolio/5.jpg" alt="">
            </div> <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/6.jpg" alt="">
            </div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item html">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/7.jpg" alt="">
            </div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item joomla">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/8.jpg" alt=""></div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item html">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/9.jpg" alt="">
            </div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item wordpress">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/10.jpg" alt=""></div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item joomla">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/11.jpg" alt=""></div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item3.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-xs-12 portfolio-item megento">
        <div class="view efffect">
            <div class="portfolio-image">
                <img src="../materialkit/images/portfolio/12.jpg" alt=""></div>
            <div class="mask text-center">
                <h3>Novel</h3>
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
                <a href="#"><i class="fa fa-link"></i></a>
                <a href="../materialkit/images/portfolio/big-item4.jpg" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

</section> <!--/#portfolio-->

<!--  <section id="clients" class="parallax-section">
    <div class="container">
        <div class="clients-wrapper">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2 class="title-one">Clients Say About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                </div>
            </div>
            <div id="clients-carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
<!-- <ol class="carousel-indicators">
     <li data-target="#clients-carousel" data-slide-to="0" class="active"></li>
     <li data-target="#clients-carousel" data-slide-to="1"></li>
     <li data-target="#clients-carousel" data-slide-to="2"></li>
 </ol> <!-- Wrapper for slides -->
<!-- <div class="carousel-inner">
     <div class="item active">
         <div class="single-client">
             <div class="media">
                 <img class="pull-left" src="../materialkit/images/clients/client1.jpg" alt="">
                 <div class="media-body">
                     <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
                 </div>
             </div>
         </div>
     </div>
     <div class="item">
         <div class="single-client">
             <div class="media">
                 <img class="pull-left" src="../materialkit/images/clients/client3.jpg" alt="">
                 <div class="media-body">
                     <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
                 </div>
             </div>
         </div>
     </div>
     <div class="item">
         <div class="single-client">
             <div class="media">
                 <img class="pull-left" src="../materialkit/images/clients/client2.jpg" alt="">
                 <div class="media-body">
                     <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><small>Someone famous in Source Title</small><a href="">www.yourwebsite.com</a></blockquote>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
</div>
</section><!--/#clients-->
<!-- Inicio del /#blog-->
<section id="blog">
    <div class="container">
        <div class="row text-center clearfix">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="title-one">Blog</h2>
                <p class="blog-heading"> Compartimos con la comunidad de la Rama Judicial, noticias de interes nacional.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="../materialkit/images/blog/primera demanda.jpg" alt="" />
                    <h2>El Polo Democrático radicará una acción argumentando que afecta directamente la canasta familiar.</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> Victor Mantilla</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Enero 2 2017</li>
                    </ul>
                    <div class="blog-content">
                        <p>El Polo Democrático radicará ante la Corte Constitucional una demanda en contra de la Reforma Tributaria avalada en el Congreso de la República. El senador Alexander López Maya explicó que en la acción se manifestará que con lo aprobado se están afectando los derechos fundamentales de los colombianos de bajos recursos.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-detail">Leer más</a>
                </div>
                <div class="modal fade" id="blog-detail" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="../materialkit/images/blog/primera demanda.jpg" alt="" />
                                <h2>El Polo Democrático radicará una acción argumentando que afecta directamente la canasta familiar.</h2>
                                <p>El Polo Democrático radicará ante la Corte Constitucional una demanda en contra de la Reforma Tributaria avalada en el Congreso de la República. El senador Alexander López Maya explicó que en la acción se manifestará que con lo aprobado se están afectando los derechos fundamentales de los colombianos de bajos recursos.</p><p>López Maya aseguró que se sustentará que la Reforma es inconstitucional puesto que el aumento del IVA afecta directamente la canasta familiar “al colocarle el IVA del 5% a alimentos de primera necesidad como el aceite de cocina, la vivienda, los arriendos, las mesadas, las remesas, el transporte, las motocicletas, los alimentos, los combustibles, los teléfonos celulares, el internet, las gaseosas, la cerveza, el chocolate, la harina”</p>
                                <p>Estas medidas afectan a los asalariados que devengan salarios hasta de 2.7 millones de pesos, “ampliado la población de empleados sometidos a declaración de renta que tenía el tope de contribución de 3.4 millones de pesos de ingresos mensuales. También incrementa el número de contribuyentes en el Régimen Simplificado”. (Ver Por fin se destapó la reforma tributaria)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="../materialkit/images/slider/palacio2.jpeg" alt="" />
                    <h2>Informe de Gestión Judicial de Enero a Septiembre de 2016</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> Victor Mantilla</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Enero 2 2017</li>
                    </ul>
                    <div class="blog-content">
                        <p>El Consejo Superior de la Judicatura presenta los resultados de los tres primeros trimestres de 2016 de todos los despachos judiciales del país, en sus diferentes jurisdicciones y especialidades.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-two">Leer más</a>
                </div>
                <div class="modal fade" id="blog-two" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="../materialkit/images/blog/2.jpg" alt="" />
                                <h2>Informe de Gestión Judicial de Enero a Septiembre de 2016</h2>
                                <p>GESTIÓN JUDICIAL
                                    A continuación se presenta la gestión judicial de los despachos permanentes y de
                                    descongestión de enero a septiembre de 2016. También se realiza una proyección para
                                    los ingresos y egresos efectivos para todo el año 2016, basada en el comportamiento de
                                    los tres trimestres del año.
                                    Respecto a los ingresos efectivos para los tres primeros trimestres del año 2016 la cifra va
                                    en 2.052.482. De presentarse un comportamiento similar a los tres trimestre del 2016, los
                                    ingresos serían del orden de 2.736.643 para todo el año 2016 y el decrecimiento de los
                                    ingresos efectivos del año 2016 frente al año 2015 sería del 13%.
                                    De otra parte, el egreso efectivo para los tres primeros trimestres del año es de 1.566.150.
                                    Realizando una estimación del nivel de egresos efectivos para todo el año 2016, la cifra
                                    sería de 2.088.200. Si se compara la estimación del año 2016 con el año anterior, el nivel
                                    de egresos efectivos presentaría un decrecimiento del 20%.</p>
                                <p>Especialidad Civil
                                    En el periodo de enero a septiembre el nivel de ingresos fue de 457.424 y de presentarse
                                    la misma tendencia, se estima que en todo el año la especialidad recibiría 609.899
                                    asuntos, lo que representaría un descenso en el nivel de ingresos del 28% respecto al
                                    año 2015.
                                    Los egresos efectivos para la especialidad de enero a septiembre de 2016 fueron de
                                    365.491 y proyectando la cifra para todo el año se espera un nivel de evacuación total de
                                    487.321 procesos, lo que significaría una reducción del 32% respecto al año 2015. Esta
                                    cifra debe corroborarse con el comportamiento final del año según reporten los despachos
                                    en el Sistema SIERJU.
                                    El inventario final a septiembre de 2016 fue de 443.017, lo que significa una reducción del
                                    41% frente al año anterior. De tenerse en cuenta que en buena parte se debe a la
                                    depuración de inventarios que se adelantó por las figuras de desistimiento tácito y
                                    exclusión de inventarios consagradas en el Código General del Proceso.
                                    Los ingresos efectivos de la especialidad civil, están conformados en el 45% por procesos
                                    ejecutivos, seguido de las tutelas con el 34% y los procesos declarativos con una
                                    participación del 12%. En menor proporción se encuentran los procesos de pertenencias
                                    con el 2%, las acciones populares con el 1% y otros procesos con una participación del
                                    6%.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="../materialkit/images/blog/cortesuprema.jpeg" alt="" />
                    <h2>La Corte Constitucional aprobó el fast track para la implementación del acuerdo de paz</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> Victor Mantilla</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Enero 2 2017</li>
                    <div class="blog-content">
                        <p>Ahora, con el fast track, el Congreso tendrá la posibilidad de hacer menos debates para aprobar las leyes que darán paso al acuerdo de paz que se firmó con las Farc, como la ley de amnistía e indulto y la Jurisdicción Especial para la Paz. De hecho, el presidente del Senado, Mauricio Lizcano, aseguró que el de amnistía será el primer proyecto que se presentará a debate.

                            Esa norma recoge el perdón jurídico para todos aquellos miembros de las Farc, excepto para aquellos que hayan cometido delitos graves recogidos en el Estatuto de Roma como los de lesa humanidad, abusos sexuales o reclutamiento de menores, entre otros.

                        </p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-three">Leer más</a>
                </div>
                <div class="modal fade" id="blog-three" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="../materialkit/images/blog/cortesuprema.jpeg" alt="" />
                                <h2>La Corte Constitucional aprobó el fast track para la implementación del acuerdo de paz</h2>
                                <p>Luego de la refrendación de los acuerdos de paz que se dio en Senado y en la Cámara de Representantes con 75 y 130 votos respectivamente, ninguno en contra y con el Centro Democrático apartado de la votación, el paso  siguiente es la implementación del Acuerdo de paz. En La Habana gobierno y Farc acordaron que esta implementación, que no es otra cosa que incorporar el acuerdo en la legislación nacional e incluirlo en el bloque constitucional –lo relacionado con derechos humanos-, sería mediante un mecanismo rápido, expedito y que evitara los ocho debates que requieren las leyes ordinarías que implican cambios constitucionales. Se le llamó el ‘Fast track’, es decir, una vía rápida para tramitar las leyes necesarias para volver realidad el acuerdo, que empezarían por la de la anmistía para los combatientes sindicados de delitos políticos y en especial el de rebelión</p>
                            <p>Pero la posibilidad de implementar el acuerdo mediante esta ‘vía rápida’, está en riesgo. La Corte Constitucional estudia una demanda contra el Acto Legislativo para la paz que interpuso el ex constituyente Jesús Pérez Gonzáles quien sostiene que el Congreso no tiene competencia para modificar la Constitución Nacional.

                                Las Farc están más que a la expectativa. El negociador Jesús Santrich, advirtió que sin ‘Fast Track’ volverían al monte. Cumplida la refrendación, gobierno y Farc no se han puesto de acuerdo en una fecha del denominado día ‘D’, es decir, el momento en que empieza a correr un cronograma de 150 días que culmina con el desarme total de las Farc. Dirigentes como Piedad Córdoba insisten en que el dia ´D’ empieza en el momento en que se radique la ley de anmistía.

                                La Corte Constitucional tiene la puntada final o la estocada para el Acuerdo de paz y se sabe que la ponencia de la Presidenta de la corporación, María Victoria Calle va en dirección de aprobar el Fast track pero refrendación popular. Se trata de una ponencia que puede ser modificada y discutida por la sala plena de la Corte Constitucional.

                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="../materialkit/images/blog/3.jpg" alt="" />
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-four">Read More</a></div>
                <div class="modal fade" id="blog-four" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="../materialkit/images/blog/3.jpg" alt="" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="../materialkit/images/blog/2.jpg" alt="" />
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-six">Read More</a>
                </div>
                <div class="modal fade" id="blog-six" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="../materialkit/images/blog/2.jpg" alt="" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="single-blog">
                    <img src="../materialkit/images/blog/1.jpg" alt="" />
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="post-meta">
                        <li><i class="fa fa-pencil-square-o"></i><strong> Posted By:</strong> John</li>
                        <li><i class="fa fa-clock-o"></i><strong> Posted On:</strong> Apr 15 2014</li>
                    </ul>
                    <div class="blog-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-seven">Read More</a>
                </div>
                <div class="modal fade" id="blog-seven" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <img src="../materialkit/images/blog/1.jpg" alt="" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!--/final del #blog-->

<section id="contact">
    <div class="container">
        <div class="row text-center clearfix">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="contact-heading">
                    <h2 class="title-one">Contact With Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contact-details">
            <div class="pattern"></div>
            <div class="row text-center clearfix">
                <div class="col-sm-6">
                    <div class="contact-address"><address><p><span>Ciudadela Real de Minas</span></p><strong> Torre 1 Apto 302<b>  Chico Real 2</b><br> Bucaramanga</strong><br><small>( Contactanos a travez de nuestras redes sociales )</small></address>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div id="contact-form-section">
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control name-field" required="required" placeholder="Su Nombre"></div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control name-field" required="required" placeholder="Su Email"></div>

                                <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!--/#contact-->

    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#navigation">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="#our-team">
                            Nuestro Equipo
                        </a>
                    </li>
                    <li>
                        <a href="#blog">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#Contact">
                            Contactanos
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                Made with <i class="fa fa-heart heart"></i> by <a href="http://www.erossolution.com" target="_blank">Victor Mantilla</a>  &copy; 2017
            </div>
        </div>
    </footer>
 <!--/#footer-->

<script type="text/javascript" src="../materialkit/js/jquery.js"></script>
<script type="text/javascript" src="../materialkit/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../materialkit/js/smoothscroll.js"></script>
<script type="text/javascript" src="../materialkit/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="../materialkit/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="../materialkit/js/jquery.parallax.js"></script>
<script type="text/javascript" src="../materialkit/js/main.js"></script>
</body>
</html>
