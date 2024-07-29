<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME', 'Traid Trade Limited') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/logo.png') }}">

    <!--==============================
        Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <!--==============================
        All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>

<body>

    <div class="cursor"></div>
    <div class="cursor2"></div>

    <!--==============================
        Preloader
    ==============================-->
    {{-- <div id="preloader" class="preloader ">
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="T" class="characters">T</span>

                    <span preloader-text="R" class="characters">R</span>

                    <span preloader-text="A" class="characters">A</span>

                    <span preloader-text="I" class="characters">I</span>

                    <span preloader-text="D" class="characters">D</span>

                    <span preloader-text="" class="characters"></span>

                    <span preloader-text="T" class="characters">T</span>

                    <span preloader-text="R" class="characters">R</span>

                    <span preloader-text="A" class="characters">A</span>

                    <span preloader-text="D" class="characters">D</span>

                    <span preloader-text="E" class="characters">E</span>
                </div>
            </div>
        </div>
    </div> --}}

    <!--==============================
        Mobile Menu
    ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a class="icon-masking" href="index.html"><span data-mask-src="{{ asset('assets/img/logo.png') }}" class="mask-icon"></span>
                    <img style="height: 50px" src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
            </div>

            <div class="th-mobile-menu">
                <ul>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    @if (!Request::is('contact'))
                    <li>
                        <a href="#service-sec">Services</a>
                    </li>
                    @endif
                    <li>
                        <a href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    <header class="th-header header-layout2">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container px-lg-5">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a class="icon-masking" href="{{ url('/') }}"><span data-mask-src="{{ asset('assets/img/logo.png') }}" class="mask-icon"></span>
                                    <img style="height: 50px" src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    {{-- <li><a href="about.html">About Us</a></li> --}}

                                    @if (!Request::is('contact'))
                                    <li><a href="#service-sec">Services</a></li>
                                    @endif
                                    <li>
                                        <a href="contact">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-button">
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout3" data-bg-src="assets/img/bg/footer_bg_2.jpg">
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <div class="footer-logo">
                            <a class="icon-masking" href="{{ url('/') }}"><span data-mask-src="assets/img/logo.png" class="mask-icon"></span>
                                <img style="height: 50px" src="assets/img/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="newsletter-wrap">
                            <div class="newsletter-content">
                                <h3 class="newsletter-title">News Subscription</h3>
                                <p class="newsletter-text">Get Latest Deals from Waker’s Inbox & Subscribe Now</p>
                            </div>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email Address" required="">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <button type="submit" class="th-btn style3">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">About Company</h3>
                            <div class="th-widget-about">
                                <p class="about-text">Triad Trade Limited is established with a vision to revolutionize the global trade and digital
                                    services landscape. We have grown from a small startup into a multifaceted
                                    enterprise, bridging continents and industries. Our journey began with a focus on import/export
                                    operations, leveraging our extensive network and industry expertise to connect businesses
                                    worldwide. As the digital era unfolded, we expanded our services to include cutting-edge IT
                                    solutions and our Business products, staying ahead of the curve and meeting the evolving demands of
                                    our clients. Today, Triad Trade Limited stands as a testament to innovation, quality, and
                                    unwavering commitment to excellence.</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Socail Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a target="_blank" href="https://www.facebook.com">Facebook</a></li>
                                    <li><a target="_blank" href="https://www.twitter.com">Twitter</a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com">LinkedIn</a></li>
                                    <li><a target="_blank" href="https://www.instagram.com">Instagram</a></li>
                                    <li><a target="_blank" href="https://www.youtube.com">YouTube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="#service-sec">Our Service</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i>
                            <script>
                                document.write(new Date().getFullYear())

                            </script> <a href="{{ url('/') }}">{{ env('APP_NAME', 'Traid Trade Limited') }}</a>. All
                            Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Slider -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Tilt JS -->
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>

    <!-- gsap -->
    {{-- <script src="{{ asset('assets/js/gsap.min.js') }}"></script> --}}
    <!-- ScrollTrigger -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>

    <!-- Particles JS -->
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>

    <script src="{{ asset('assets/js/particles-config.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
