<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Ashekur Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Appy | {{ $post->title }}</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="logo bison 2"href="images/logo bison 2.png">
    <link rel="shortcut icon"href="images/logo bison 2.png">
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/linearicons.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="single-post" data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li><a href="/index#home_page">Home</a></li>
                    <li><a href="/index#about_page">Tentang</a></li>
                    <li><a href="/index#features_page">Fitur</a></li>
                    <li><a href="/index#alur_kerja">Alur Kerja</a></li>
                    <li><a href="/index#download_page">Download</a></li>
                    <li><a href="/index#questions_page">FAQ</a></li>
                    <li><a href="/index#contact_page">Contacts</a></li>
                    <li class="active"><a href="#">Blog</a></li>
                    <li>
                        <div class="hidden-md hidden-lg">
                            <a href="/sign_in">Sign In</a>
                        </div>
                    </li>
                </ul>
                <div class="right-button hidden-xs hidden-sm">
                    <a href="/sign_in">Sign In</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->

    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="white-color">Single Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <article class="post-single">
                        <figure class="post-media">
                            <img src={{ asset("storage/")."/".$post->image }} alt="">
                        </figure>
                        <div class="post-body">
                            <ul class="breadcrumb">
                                <li><a href="#">People</a></li>
                                <li>{{ $post->created_at }}</li>
                            </ul>
                            <h2 class="dark-color">{{ $post->title }}</h2>
                            <div class="space-20"></div>
                            {!! $post->body !!}
                        </div>
                    </article>
                    <div class="space-100"></div>
                    <div id="comments" class="comments-area">
                        <h3 class="comment-heading">2 Comments</h3>
                        <ul class="comments-list">
                            <li>
                                <article class="comment">
                                    <figure class="comment-pic">
                                        <img alt="" src="images/comment-image.jpeg">
                                    </figure>
                                    <div class="comment-content">
                                        <div class="comment-header">
                                            <h4>Ashekur Rahman</h4>
                                            <p class="comment-date">Posted on September 3, 2012 at 10:18 am </p>
                                        </div>
                                        <p>Do sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni est, qui d tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        <ul class="breadcrumb">
                                            <li><a href="#">Reply</a></li>
                                            <li><a href="#">Share</a></li>
                                        </ul>
                                    </div>
                                </article>
                                <ul>
                                    <li>
                                        <article class="comment">
                                            <figure class="comment-pic">
                                                <img alt="" src="images/comment-image.jpeg">
                                            </figure>
                                            <div class="comment-content">
                                                <div class="comment-header">
                                                    <h4>Ashekur Rahman</h4>
                                                    <p class="comment-date">Posted on September 3, 2012 at 10:18 am </p>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos pariatur fuga ullam placeat corrupti inventore.</p>
                                                <ul class="breadcrumb">
                                                    <li><a href="#">Reply</a></li>
                                                    <li><a href="#">Share</a></li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <article class="comment">
                                    <figure class="comment-pic">
                                        <img alt="" src="images/comment-image.jpeg">
                                    </figure>
                                    <div class="comment-content">
                                        <div class="comment-header">
                                            <h4>Ashekur Rahman</h4>
                                            <p class="comment-date">Posted on September 3, 2012 at 10:18 am </p>
                                        </div>
                                        <p>Do sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni est, qui d tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        <ul class="breadcrumb">
                                            <li><a href="#">Reply</a></li>
                                            <li><a href="#">Share</a></li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                        <div class="comment-respond">
                            <h4>Post your comments</h4>
                            <form action="#" class="comment-form">
                                <div class="form-double">
                                    <div class="box">
                                        <input type="text" class="form-control" placeholder="your Name">
                                        <div class="space-30"></div>
                                    </div>
                                    <div class="box last">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                        <div class="space-30"></div>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Website URL">
                                <div class="space-30"></div>
                                <textarea name="comment" id="comment" rows="5" class="form-control" placeholder="Type Your Mesage..."></textarea>
                                <div class="space-30"></div>
                                <button type="submit" class="bttn-default">Post Comments</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Contact US</h5>
                            <h3 class="dark-color">Find Us By Bellow Details</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>8-54 Paya Lebar Square <br /> 60 Paya Lebar Roa SG, Singapore</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>+65 93901336 <br /> +65 93901337</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p>yourmail@gmail.com <br /> anothermai@hotmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="lnr lnr-heart" aria-hidden="true"></i> by Niat Kami</a></span>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/vendor/jquery-ui.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/contact-form.js"></script>
    <script src="/js/ajaxchimp.js"></script>
    <script src="/js/scrollUp.min.js"></script>
    <script src="/js/magnific-popup.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="/js/main.js"></script>
</body>

</html>
