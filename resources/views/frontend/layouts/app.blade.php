<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Personal Blog</title>

    <!-- Bootstrap -->
    <link href="/frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/frontend/bower_components/flexslider/flexslider.css" rel="stylesheet">
    <link href="/frontend/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet">
    <!--revolution css-->
    <link href="/frontend/revolution/css/navigation.css" rel="stylesheet">
    <link href="/frontend/revolution/css/layers.css" rel="stylesheet">
    <link href="/frontend/revolution/css/settings.css" rel="stylesheet">
    <!--custom css file-->
    <link href="/frontend/css/style.css" rel="stylesheet">

    @yield('css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Project name</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle  js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">Home <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Revolution slider 5</a></li>
                        <li><a href="masonry-grid.html">Masonry Grid</a></li>
                        <li><a href="full-width.html">Full Width</a></li>
                        <li><a href="full-sidebar.html">Full width + sidebar</a></li>
                    </ul>
                </li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="about.html">About me</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" >Features <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="img-post.html">Image Post</a></li>
                        <li><a href="video-post.html">Video Post</a></li>
                        <li><a href="music-post.html">Music post</a></li>
                        <li><a href="gallery-post.html">Gallery Post</a></li>
                        <li><a href="lightbox-gallery.html">Lightbox gallery</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="search-widget">
                        <input type="text" class="form-control" placeholder="Search...">
                        <button type="button"> <i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li><a href="#" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->


    </div><!--/.container-fluid -->
</nav><!--main navigation end-->
<div style="height: 50px"></div>

<!--top bar-->
<!--        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <ul class="list-inline">
                            <li><a href="#" class="social-icon-sm si-gray si-gray-round si-facebook"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-icon-sm si-gray si-gray-round si-twitter"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-icon-sm si-gray si-gray-round si-instagram"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="social-icon-sm si-gray si-gray-round si-g-plus"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="social-icon-sm si-gray si-gray-round si-linkedin"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="social-icon-sm si-gray si-gray-round si-pinterest"><i class="fa fa-pinterest"></i><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2">
                        <form class="search-widget">
                            <input type="text" class="form-control" placeholder="Search and hit enter">
                            <i class="fa fa-search"></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>-->
<!--top bar end-->
<div class="logo-bar">
    <div class="container text-center">
        <h1>  <a href="#">
                <img src="/images/logo.png" alt="">

            </a></h1>
    </div>
</div>
<!--off-canvas start-->
<div class="navmenu navmenu-default navmenu-fixed-right offcanvas">
    <div class="side-panel-inner">
        <form name="sentMessage" id="contactForm" method="post" novalidate>
            <div class="row">
                <div class="col-md-12">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">

                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">

                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 controls">

                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block"></p>
                </div>
            </div>

            <div id="success"></div>
            <div class="row">
                <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-skin btn-lg">Send Message</button>
                </div>
            </div>
        </form>


        <div class="space-30"></div>
        <h4>Follow us</h4>
        <div class="socials">
            <a href="#" class="social-icon si-dark si-gray-round si-colored-facebook">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="social-icon si-dark si-gray-round si-colored-twitter">
                <i class="fa fa-twitter"></i>
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="social-icon si-dark si-gray-round si-colored-instagram">
                <i class="fa fa-instagram"></i>
                <i class="fa fa-instagram"></i>
            </a>
            <a href="#" class="social-icon si-dark si-gray-round si-colored-linkedin">
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</div>
<!-- offcanvas side end -->
@yield('content')

<div class="container-fluid instagram-feed no-padding">
    <h3 class="center-title">Follow us on instagram</h3>
    <div class="row no-margin">
        <div class="col-md-2 col-sm-3 no-padding">
            <a href="#"><img src="/images/img-4.jpg" alt="" class="img-responsive"></a>
        </div>
        <div class="col-md-2 col-sm-3 no-padding">
            <a href="#"><img src="/images/img-5.jpg" alt="" class="img-responsive"></a>
        </div>
        <div class="col-md-2 col-sm-3 no-padding">
            <a href="#"><img src="/images/img-6.jpg" alt="" class="img-responsive"></a>
        </div>
        <div class="col-md-2 col-sm-3 no-padding">
            <a href="#"><img src="/images/img-7.jpg" alt="" class="img-responsive"></a>
        </div>
        <div class="col-md-2 col-sm-3 no-padding">
            <a href="#"><img src="/images/img-8.jpg" alt="" class="img-responsive"></a>
        </div>
        <div class="col-md-2 col-sm-3 no-padding">
            <a href="#"><img src="/images/img-9.jpg" alt="" class="img-responsive"></a>
        </div>
    </div>
</div><!--instagram-->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center margin-b-30">
                <span>&copy; Copyright 2015. Theme by Design_mylife</span>
            </div>
        </div>
    </div>
</footer><!--footer end-->
<!--js plugins-->
<script src="/frontend/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/frontend/js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/frontend/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
<script src="/frontend/bootstrap/js/bootstrap.min.js"></script>
<script src="/frontend/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/frontend/bower_components/flexslider/jquery.flexslider-min.js"></script>
<script src="/frontend/js/custom.js" type="text/javascript"></script>
<script src="/frontend/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
<!--cantact form script-->
<script src="/frontend/js/contact_me.js" type="text/javascript"></script>
<script src="/frontend/js/jqBootstrapValidation.js" type="text/javascript"></script>

@yield('js')
</body>
</html>