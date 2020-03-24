<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Bison</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="logo bison 2" href="/images/logo bison 2.png">
    <link rel="shortcut icon"href="/images/logo bison 2.png">
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

<body data-spy="scroll" data-target=".mainmenu-area">
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
                    <li class="active"><a href="#home_page">Home</a></li>
                    <li><a href="#about_page">Tentang</a></li>
                    <li><a href="#features_page">Fitur</a></li>
                    <li><a href="#alur_kerja">Alur Kerja</a></li>
                    <li><a href="#download_page">Download</a></li>
                    <li><a href="#questions_page">FAQ</a></li>
                    <li><a href="#contact_page">Contacts</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li>
                        <div class="hidden-md hidden-lg">
                            @if (Auth::check())
                                <a href="/sign_out">Sign Out</a>
                            @else
                                <a href="/sign_in">Sign In</a>
                            @endif
                        </div>
                    </li>
                </ul>
                <div class="right-button hidden-xs hidden-sm">
                    @if (Auth::check())
                        {{-- <span class="text-light">{{ Auth::user()->name }}</span> --}}
                        <a href="/sign_out">{{ Auth::user()->name }}</a>
                    @else
                        <a href="/sign_in">Sign In</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page">
        <section class="video-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="video-photo">
                            <img src="images/video_bison.png" alt="">
                            <a href="video/Opening Bison 2.mp4" class="popup video-button">
                                <img src="images/play-button.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-md-offset-1">
                        <div class="space-60 hidden visible-xs"></div>
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s">“How human can control their Robot to do their task easily.”</h1>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p>Bagaimana manusia mengontrol robot untuk mempermudah tugasnya.</p>
                        </div>
                        <div class="space-10"></div>
                        <div class="starter">
                            <a href="#download_page" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Get Started</a>
                        </div>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </section>
    </header>
    <!-- Home-Area-End -->
    <!-- About-Area -->
    <section class="section-padding" id="about_page">
    <div class="hidden-xs hidden-sm">
        <div class="space-190"></div>
    </div>
    <div class="hidden-md hidden-lg">
        <div class="space-100"></div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img width="60px" src="images/logo bison 2.png" alt="About Logo">
                        <div class="space-20"></div>
                        <h5 class="title hidden-xs hidden-sm">Tentang Bison & RPA</h5>
                        <h5 class="title hidden-md hidden-lg" style="font-size: 12px;">Tentang Bison & RPA</h5>
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 hidden-xs hidden-sm" style="border-left: 6px; height: 250px;">
                                <p style="font-size: 24px;"><b>Bison</b> (Bisnis Proses Automation) adalah salah satu software RPA tahap pengembangan berbasis Selenium yang telah di paketkan dalam bentuk flowchart workflow dengan fitur blok programming yang mudah dioperasikan.</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 hidden-xs hidden-sm" style="border-left: 3px solid gray; height: 200px;">
                                <p style="font-size: 24px;"><b>RPA</b> (Robotic Process Automation) adalah suatu bentuk teknologi automasi yang dikerjakan oleh robot (bot) yang mampu melakukan aktivitas manusia dengan kecepatan yang berlipat dan akurasi yang lebih akurat.</h3>
                            </div>

                            <div class="col-xs-12 col-sm-6 hidden-md hidden-lg">
                                <p style="font-size: 20px;"><b>Bison</b> (Bisnis Proses Automation) adalah salah satu software RPA tahap pengembangan berbasis Selenium yang telah di paketkan dalam bentuk flowchart workflow dengan fitur blok programming yang mudah dioperasikan.</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 hidden-md hidden-lg">
                                <p style="font-size: 20px;"><b>RPA</b> (Robotic Process Automation) adalah suatu bentuk teknologi automasi yang dikerjakan oleh robot (bot) yang mampu melakukan aktivitas manusia dengan kecepatan yang berlipat dan akurasi yang lebih akurat.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    <div class="space-80"></div>
    </section>
    <!-- About-Area-End -->
    <!-- Feature-Area -->
    <section class="feature-area section-padding-top" id="features_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h5 class="title">Fitur</h5>
                        <div class="space-10"></div>
                        <h3>Benefit menggunakan Bison</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4" style="font-size:20px">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-plus-circle"></i>
                        </div>
                        <h4>Accuracy</h4>
                        <p>Meminimalisir kesalahan akan meningkatkan akurasi aktifitas.</p>
                    </div>
                    <div class="space-50"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-briefcase"></i>
                        </div>
                        <h4>Reliability</h4>
                        <p>Dapat berkerja 1x24 jam tanpa henti.</p>
                    </div>
                    <div class="space-50"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-exit"></i>
                        </div>
                        <h4>Can Leave</h4>
                        <p>Aktifitas dapat ditinggalkan tanpa harus dipantau secara berkala.</p>
                    </div>
                    <div class="space-50"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                    <figure class="mobile-image">
                        <img src="images/bison_laptop.png" alt="Feature Photo">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4" style="font-size:20px">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-clock"></i>
                        </div>
                        <h4>Time</h4>
                        <p>Waktu yang terpakai lebih efisien dan efektif.</p>
                    </div>
                    <div class="space-50"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-code"></i>
                        </div>
                        <h4>Low Technical Barrier</h4>
                        <p>Tidak perlu memiliki kemampuan expert dalam koding.</p>
                    </div>
                    <div class="space-50"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <h4>Speed</h4>
                        <p>Lebih cepat berkali lipat dari yang dilakukan manusia.</p>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature-Area-End -->
    <!-- Alur-Kerja -->
    <section class="section-padding" id="alur_kerja">
    <div class="hidden-xs hidden-sm">
        <div class="space-130"></div>
    </div>
    <div class="hidden-md hidden-lg">
        <div class="space-30"></div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="page-title">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Alur Kerja</h5>
                    </div>
                </div>
                <div class="hidden-xs hidden-sm">
                    <img src="images/workflow.png" alt="">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 visible-xs visible-sm" style="font-size:20px">
                    <div class="space-60 hidden visible-xs"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-list"></i>
                        </div>
                        <h4>Plan</h4>
                        <p>Membuat rencana flow untuk aktifitas yang dikerjakan.</p>
                    </div>
                    <div class="space-20"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-construction"></i>
                        </div>
                        <h4>Build</h4>
                        <p>Pembuatan workflow dengan activity-activity yang terdapat di Bison.</p>
                    </div>
                    <div class="space-20"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <h4>Run</h4>
                        <p>Menjalankan proses workflow yang telah dibangun.</p>
                    </div>
                    <div class="space-20"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-printer"></i>
                        </div>
                        <h4>Measure</h4>
                        <p>Mendapatkan hasil output dari proses yang telah dibangun.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Alur-Kerja-End -->
    <!-- Download-Area -->
    <div id="download_page">
        <div class="download-area overlay">
        <div class="hidden-xs hidden-sm">
            <div class="space-260"></div>
        </div>
        <div class="hidden-md hidden-lg">
            <div class="space-210"></div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 hidden-sm">
                        <figure class="mobile-image">
                            <img src="images/laptop.png" alt="">
                        </figure>
                    </div>
                    <div class="col-xs-12 col-md-6 section-padding">
                        <div class="space-20"></div>
                        <h3 class="white-color">Download The App</h3>
                        <div class="space-20"></div>
                        <a href="#" class="bttn-white sq"><img src="images/download bison gradient.png" alt="Download Icon"> Download Now!</a>
                        <div class="space-100"></div>
                    </div>
                </div>
            </div>
            <div class="space-120"></div>
        </div>
    </div>
    <!-- Download-Area-End -->
    <!--Questions-Area -->
    <section id="questions_page" class="questions-area section-padding">
    <div class="hidden-xs hidden-sm">
            <div class="space-70"></div>
        </div>
        <div class="hidden-md hidden-lg">
            <div class="space-30"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">FAQ</h5>
                        <h3 class="dark-color">Frequently Asked Questions</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 hidden-xs hidden-sm">
                    <div class="toggole-boxs">
                        <h3>Apa yang harus di siapkan untuk dapat menjalankan Aplikasi Bison?</h3>
                            <div w>
                                <p>OS : Windows 7, 10</p>
                                <p>Browser : Chrome ver 8.0</p>
                                <p>RAM : 2GB ke atas</p>
                            </div>
                        <h3>Apakah semua Activity yang terdapat di dalam Aplikasi Bison bisa dijalankan secara langsung?</h3>
                        <div>
                            <p>Ada 2 activity yang membutuhkan campur tangan terlebih dahulu :</p>
                            <p>Text To Speech, membutuhkan instalasi dari :</p>
                            <ul>
                                <li><p>Python 3.7.4</p></li>
                                <li><p>Download Indonesia Language di Language Preferences</p></li>
                                <li><p>Registry Andika (Pembicara Speech untuk Bahasa Indonesia)</p></li>
                            </ul>
                            <p>Send to Email, membutuhkan autentikasi less secure di email yang digunakan sebagai pengirim :</p>
                            <ul>
                                <li><p>Less Secure di Gmail harus dalam keadaan ON (Aktif), agar email bisa digunakan secara bebas tanpa autentikasi apapun dan support SMTP.</p></li>
                            </ul>
                        </div>
                        <h3>Apakah Aplikasi Bison dapat terkoneksi dengan Microsoft Office?</h3>
                        <div>
                            <p>Aplikasi Bison saat ini bisa terkoneksi dengan Microsoft Excel. Ada beberapa activity-activity yang dapat digunakan terkait get dan write data Excel. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 hidden-xs hidden-sm">
                    <div class="toggole-boxs">
                        <h3>Bagaimana dengan lingkup automasi dari Bison?</h3>
                        <div>
                            <p>Bison untuk saat ini menggunakan Automation Tool Selenium, dimana Selenium ini digunakan untuk Web Automation. Jadi, untuk saat ini masih dalam lingkup Web saja.</p>
                        </div>
                        <h3>Apakah dibutuhkan skill koding untuk mengoperasikan Aplikasi Bison?</h3>
                        <div>
                            <p>Untuk pengoperasiannya seperti block programming. Pengguna cukup drag and drop aktivity ke projek dan tidak perlu skill expert dalam koding. Namun, minimalnya skill koding dasar dibutuhkan disini guna pengoperasian dalam pengkodisian atau konversi tipe data.</p>
                        </div>
                        <h3>Basic apa yang harus dipelajari untuk mengoperasikan Aplikasi Bison ini?</h3>
                        <div>
                            <p>Untuk basic skill yang paling diperlukan adalah Algoritma Pemrograman. Skill ini diperlukan untuk logika pembuatan project nantinya. Hal lain yang harus dipelajari adalah bahasa C# dasar, seperti hal nya mengubah tipe data dan pengolahan data seperti substring, split dan lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 hidden-md hidden-lg">
                    <div class="toggole-boxs">
                        <h3>Apa yang harus di siapkan untuk dapat menjalankan Aplikasi Bison?</h3>
                            <div w>
                                <p>OS : Windows 7, 10</p>
                                <p>Browser : Chrome ver 8.0</p>
                                <p>RAM : 2GB ke atas</p>
                            </div>
                        <h3>Apakah semua Activity yang terdapat di dalam Aplikasi Bison bisa dijalankan secara langsung?</h3>
                        <div>
                            <p>Ada 2 activity yang membutuhkan campur tangan terlebih dahulu :</p>
                            <p>Text To Speech, membutuhkan instalasi dari :</p>
                            <ul>
                                <li><p>Python 3.7.4</p></li>
                                <li><p>Download Indonesia Language di Language Preferences</p></li>
                                <li><p>Registry Andika (Pembicara Speech untuk Bahasa Indonesia)</p></li>
                            </ul>
                            <p>Send to Email, membutuhkan autentikasi less secure di email yang digunakan sebagai pengirim :</p>
                            <ul>
                                <li><p>Less Secure di Gmail harus dalam keadaan ON (Aktif), agar email bisa digunakan secara bebas tanpa autentikasi apapun dan support SMTP.</p></li>
                            </ul>
                        </div>
                        <h3>Apakah Aplikasi Bison dapat terkoneksi dengan Microsoft Office?</h3>
                        <div>
                            <p>Aplikasi Bison saat ini bisa terkoneksi dengan Microsoft Excel. Ada beberapa activity-activity yang dapat digunakan terkait get dan write data Excel. </p>
                        </div>
                        <h3>Bagaimana dengan lingkup automasi dari Bison?</h3>
                        <div>
                            <p>Bison untuk saat ini menggunakan Automation Tool Selenium, dimana Selenium ini digunakan untuk Web Automation. Jadi, untuk saat ini masih dalam lingkup Web saja.</p>
                        </div>
                        <h3>Apakah dibutuhkan skill koding untuk mengoperasikan Aplikasi Bison?</h3>
                        <div>
                            <p>Untuk pengoperasiannya seperti block programming. Pengguna cukup drag and drop aktivity ke projek dan tidak perlu skill expert dalam koding. Namun, minimalnya skill koding dasar dibutuhkan disini guna pengoperasian dalam pengkodisian atau konversi tipe data.</p>
                        </div>
                        <h3>Basic apa yang harus dipelajari untuk mengoperasikan Aplikasi Bison ini?</h3>
                        <div>
                            <p>Untuk basic skill yang paling diperlukan adalah Algoritma Pemrograman. Skill ini diperlukan untuk logika pembuatan project nantinya. Hal lain yang harus dipelajari adalah bahasa C# dasar, seperti hal nya mengubah tipe data dan pengolahan data seperti substring, split dan lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Questions-Area-End -->
    <!--Testimoni-Area-End -->
    <div id="testimoni_page"></div>
    
    <!--Testimoni-Area-End -->
    <!-- Footer-Area -->
    <div id="contact_page"></div>
    <div class="hidden-xs hidden-sm">
        <div class="space-130"></div>
    </div>
    <div class="hidden-md hidden-lg">
        <div class=""></div>
    </div>    
    <footer class="footer-area">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <div class="space-100"></div>
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
                            <p>Bandung <br /> Jawa Barat</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>+62 85xxxxxxxxx <br /> +62 89xxxxxxxxx</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p>emailngawur@gmail.com <br /> iniemail@gmail.com
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
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="lnr lnr-heart" aria-hidden="true"></i> by Niat Kami</div></span>
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
