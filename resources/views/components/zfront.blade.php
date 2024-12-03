<!DOCTYPE html>
<html lang="fr">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>Learn NewLife Webagence</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="front/assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="front/assets/images/fav.png">
    <!--================= Bootstrap v5 css =================-->
    <link rel="stylesheet" type="text/css" href="front/assets/css/bootstrap.min.css">
    <!--================= Back Menus css =================-->
    <link rel="stylesheet" type="text/css" href="front/assets/css/back-menus.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="front/assets/css/animate.css">
    <!--================= owl carousel css =================-->
    <link rel="stylesheet" type="text/css" href="front/assets/css/owl.carousel.css">
    <!--================= Elegant icon css  =================-->
    <link rel="stylesheet" type="text/css" href="front/assets/fonts/elegant-icon.css">
    <!--================= Magnific Popup css =================-->
    <link rel="stylesheet" type="text/css" href="front/assets/css/magnific-popup.css">
    <!--================= Back Animations css =================-->
    <link rel="stylesheet" type="text/css" href="front/assets/css/back-animations.css">
    <!--================= Style css =================-->
    <link rel="stylesheet" type="text/css" href="front/style.css">
    <!--================= Spacing css =================-->
    <link rel="stylesheet" type="text/css" href="front/assets/css/back-spacing.css">
    <!--================= Responsive css =================-->
    <link rel="stylesheet" type="text/css" href="front/assets/css/responsive.css">
</head>

<body>
    <!--================= Preloader Section Start Here =================-->
    <div id="back__preloader">
        <div id="back__circle_loader"></div>
        <div class="back__loader_logo"><img src="front/assets/images/preload.png" alt="Preload"></div>
    </div>
    <!--================= Preloader Section End Here =================-->

    <!--================= Header Section Start Here =================-->
    <header id="back-header" class="back-header back-header-three">
        <div class="menu-part">
            <div class="container">
                <!--================= Start Back Menu =================-->
                <div class="back-main-menu">
                    <nav>
                        <!--================= Menu Toggle btn =================-->
                        <div class="menu-toggle">
                            <div class="logo">
                                <a href="/" class="logo-text">
                                    <img src="front/assets/images/logo.png" alt="logo">
                                </a>
                            </div>
                            <button type="button" id="menu-btn">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--================= Menu Structure =================-->
                        <div class="back-inner-menus">
                            <ul id="backmenu" class="back-menus back-sub-shadow">
                                <li> <a href="/">Accueil</a></li>
                                <li> <a href="/a-propos">A propos</a></li>
                                <li> <a href="/nos-formations">Nos formations</a></li>
                                <li> <a href="/blog">Blog</a></li>
                                <li> <a href="/contact">Contact</a></li>
                            </ul>
                            <div class="searchbar-part">
                                @guest
                                    <div class="back-login">
                                        <a href="/login"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-unlock">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                            </svg>
                                            Connexion</a>
                                    </div>
                                    <a href="/register" class="back-btn">Inscription</a>
                                @endguest

                                @auth
                                    <div class="back-login">
                                        Bienvenu(e) <b>{{ Auth::user()->nom }}</b>.
                                    </div>
                                    <a href="{{ route('dashboard') }}" class="back-btn">Espace membre</a>
                                @endauth
                            </div>
                        </div>
                    </nav>
                </div>
                <!--================= End Back Menu =================-->
            </div>
        </div>
    </header>
    <!--================= Header Section End Here =================-->

    {{ $slot }}

    <!--================= Footer Section Start Here =================-->
    <footer id="back-footer" class="back-footer back-footer-dark back-footer-dark2">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 md-mb-30">
                        <div class="footer-widget footer-widget-1">
                            <div class="footer-logo white">
                                <a href="/" class="logo-text">
                                    <img src="front/assets/images/logo-light.png" alt="logo">
                                </a>
                            </div>
                            <h5 class="footer-subtitle">Nous offrons une gamme variée de cours et de programmes
                                spécialisés en marketing numérique, conçus pour répondre aux besoins des apprenants et
                                des professionnels.</h5>
                            <ul class="footer-address">
                                <li class="back-address"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                        height="30" viewBox="0 0 24 24" fill="none" stroke="#f84e77"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-map-pin">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg> Abidjan, Côte d'ivoire.</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#f84e77" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg><a href="tel:+2250748404245">+(225) 07 48 40 42 45 - 07 47 47 82 55 </a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#f84e77" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg><a href="mailto:support@newlife-webagence.com">support@newlife-webagence.com
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-30">
                        <div class="footer-widget footer-widget-2">
                            <h3 class="footer-title">Qui sommes-nous?</h3>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="/a-propos">A propos de nous</a></li>
                                    <li><a href="/nos-formations">Nos formations</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/login">Connexion</a></li>
                                    <li><a href="/register">Inscription</a></li>
                                    <li><a href="/contact">Nous contacter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="footer-widget footer-widget-3">
                            <h3 class="footer-title">S'abonnez à la newsletter</h3>
                            <div class="footer3__form">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email">
                                    <button class="footer3__form-1">
                                        <i class="arrow_right"></i>
                                    </button>
                                </form>
                            </div>
                            <h6 class="back-follow-us">Follow us</h6>
                            <ul class="social-links">
                                <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                                </li>
                                <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a>
                                </li>
                                <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="back-copy-left">@ 2025 All Copyright Reserved. Developed by <a
                        href="https://www.linkedin.com/in/jeanlucdoh/" target="_blank">Frédéric Jean-Luc DOH</a></div>
            </div>
        </div>
    </footer>
    <!--================= Footer Section End Here =================-->

    <!--================= Scroll to Top Start =================-->
    <div id="backscrollUp">
        <span aria-hidden="true" class="arrow_carrot-up"></span>
    </div>
    <!--================= Scroll to Top End =================-->

    <!--================= jquery latest version =================-->
    <script src="front/assets/js/jquery.min.js"></script>
    <!--================= modernizr js =================-->
    <script src="front/assets/js/modernizr-2.8.3.min.js"></script>
    <!--================= bootstrap js =================-->
    <script src="front/assets/js/bootstrap.min.js"></script>
    <!--================= owl.carousel js =================-->
    <script src="front/assets/js/owl.carousel.min.js"></script>
    <!--================= magnific popup =================-->
    <script src="front/assets/js/jquery.magnific-popup.min.js"></script>
    <!--================= counter up js =================-->
    <script src="front/assets/js/jquery.counterup.min.js"></script>
    <script src="front/assets/js/waypoints.min.js"></script>
    <!--================= wow js =================-->
    <script src="front/assets/js/wow.min.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="front/assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="front/assets/js/imagesloaded.pkgd.min.js"></script>
    <!--================= Back menus js =================-->
    <script src="front/assets/js/back-menus.js"></script>
    <!--================= plugins js =================-->
    <script src="front/assets/js/plugins.js"></script>
    <!--================= main js =================-->
    <script src="front/assets/js/main.js"></script>
</body>

</html>
