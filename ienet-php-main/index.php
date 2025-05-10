<!DOCTYPE html>
<html lang="en">
<?php
session_start(); // Must be the first thing in your script
function initErrorHandling() {
    ini_set('display_errors', 1);              // Show errors
    ini_set('display_startup_errors', 1);      // Show startup errors
    error_reporting(E_ALL);                    // Report all PHP errors

    set_error_handler(function ($severity, $message, $file, $line) {
        throw new ErrorException($message, 0, $severity, $file, $line);
    });

    set_exception_handler(function ($exception) {
        echo "<strong>Exception:</strong> " . $exception->getMessage() . "<br>";
        echo "In file: " . $exception->getFile() . " on line " . $exception->getLine();
    });
}

// Call this at the very beginning of your script
initErrorHandling();
// Rest of your PHP code
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home One || WalaNet || HTML Template For Broadband TV & Internet</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.jpg" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.jpg" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.jpg" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="WalaNet is a multipurpose & unique HTML5 template. We especially designed for broadband internet services, satellite TV, Broadband, Online TV, Cable Television, Online Cinema and Movies, Voip, Wifi, Internet and TV store, Digital TV, Computer Networks, IPTV, Telecom company, CCTV and alternative Security, Networking Solution technology and all other internet businesses and websites." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/ienet-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/ienet.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.jpg);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <span class="topbar-one__info__icon"><i class="icon-mail"></i></span>
                            <a href="mailto:info@ienetmail.com">info@ienetmail.com</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <span class="topbar-one__info__icon"><i class="icon-maps-and-flags"></i></span>
                            1211 Madison Ave, New York, NY
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <div class="topbar-one__social">

                            <a href="https://facebook.com">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://twitter.com">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://instagram.com">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                            <a href="https://www.youtube.com/">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->

        <header class="main-header sticky-header sticky-header--one-page">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="index.php">
                            <img src="assets/images/logo-light.png" alt="WalaNet HTML" height="80">
                        </a>
                    </div><!-- /.main-header__logo -->
                    <a href="#" class="main-header__toggler"><span class="icon-menu"></span></a>
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="scrollToLink current"><a href="#home">Home</a></li>
                            <!-- <li class="scrollToLink"><a href="#about">About</a></li> -->
                            <li class="scrollToLink"><a href="#about">Service</a></li>
                            <li class="scrollToLink"><a href="#packages">Packages</a></li>
                            <!-- <li class="scrollToLink"><a href="#movie">Movie</a></li> -->
                            <!-- <li class="scrollToLink"><a href="#movie">Online Streaming</a></li> -->
                            <!-- <li class="scrollToLink"><a href="#shop">Shop</a></li> -->
                            <li class="scrollToLink"><a href="#movie" class="ienet-btn special"><span>Online Streaming<span class="ienet-btn__icon"><i class="fas fa-video"></i></span></span></a></li>
                            <li class="scrollToLink"><a href="products-left.php" class="ienet-btn special"><span>Shop<span class="ienet-btn__icon"><i class="fa fa-store"></i></span></span></a></li>
                            <!-- <li class="scrollToLink"><a href="#testimonial">Testimonial</a></li>
                            <li class="scrollToLink"><a href="#blog">Blog</a></li> -->
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a href="#" class="search-toggler main-header__search">
                            <i class="icon-search" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a><!-- /.search-toggler -->
                        <a href="cart.php" class="main-header__cart">
                            <i class="icon-cart" aria-hidden="true"></i> 
                            <span style="color:red" class="cartCounter"><?php 
                            if(isset($_SESSION['cart'])){
                                echo count($_SESSION['cart']);
                            }
                            
                            ?></span>
                            <span class="sr-only">Cart</span>
                        </a><!-- /.cart-toggler -->
                        <div class="main-header__call">
                            <div class="main-header__call__icon"><span class="icon-telephone"></span></div>
                            <div class="main-header__call__title">Call Emergency</div>
                            <a class="main-header__call__text" href="tel:88012365499">+88 0123 654 99</a>
                        </div>
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
        <!-- main-slider-start -->
        <section class="main-slider-one" id="home">
            <div class="main-slider-one__carousel ienet-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": false,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": true,
		"margin": 0
	    }'>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                        <div class="main-slider-one__content">
                            <h5 class="main-slider-one__sub-title"><span class="main-slider-one__sub-title__border"></span>Connecting the World</h5>
                            <!-- slider-sub-title -->
                            <h2 class="main-slider-one__title">Your Gateway to the<br> Digital Universe</h2><!-- slider-title -->
                            <p class="main-slider-one__text">
                                Donec pretium ornare neque, ac luctus orci ultrices at. Sed blandit eleifend mi, a consectetur tortor<br>
                                varius in. Sed tincidunt aliquet lorem, eget tincidunt est molestie non. 
                            </p><!-- slider-tex -->
                            <div class="main-slider-one__btn">
                                <a href="services.php" class="ienet-btn main-slider-one__btn__first"><span>our service<span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span></span></a><!-- slider-btn -->
                                <a href="packages.php" class="ienet-btn main-slider-one__btn__last"><span><span class="ienet-btn__icon ienet-btn__icon--left"><i class="fas fa-gem"></i></span>browse plan</span></a><!-- slider-btn -->
                            </div>
                        </div>
                        <div class="main-slider-one__image">
                            <div class="main-slider-one__image__one">
                                <img src="assets/images/backgrounds/slider-1-layer-2.jpg" alt="WalaNet">
                            </div>
                            <div class="main-slider-one__image__border">
                                <img src="assets/images/shapes/slider-1-border.png" alt="WalaNet">
                            </div>
                            <div class="main-slider-one__image__user">
                                <div class="main-slider-one__image__user__text">2.5M happy user</div>
                                <div class="main-slider-one__image__user__image">
                                    <img src="assets/images/resources/user-1.png" alt="WalaNet">
                                    <img src="assets/images/resources/user-2.png" alt="WalaNet">
                                    <img src="assets/images/resources/user-3.png" alt="WalaNet">
                                    <span class="main-slider-one__image__user__rm">+65</span>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-one__layer" style="background-image: url(assets/images/backgrounds/slider-1-layer-1.png);"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                        <div class="main-slider-one__content">
                            <h5 class="main-slider-one__sub-title"><span class="main-slider-one__sub-title__border"></span>Connecting the World</h5>
                            <!-- slider-sub-title -->
                            <h2 class="main-slider-one__title">Your Gateway to the<br> Digital Universe</h2><!-- slider-title -->
                            <p class="main-slider-one__text">
                                Donec pretium ornare neque, ac luctus orci ultrices at. Sed blandit eleifend mi, a consectetur tortor<br>
                                varius in. Sed tincidunt aliquet lorem, eget tincidunt est molestie non. 
                            </p><!-- slider-tex -->
                            <div class="main-slider-one__btn">
                                <a href="services.php" class="ienet-btn main-slider-one__btn__first"><span>our service<span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span></span></a><!-- slider-btn -->
                                <a href="packages.php" class="ienet-btn main-slider-one__btn__last"><span><span class="ienet-btn__icon ienet-btn__icon--left"><i class="fas fa-gem"></i></span>browse plan</span></a><!-- slider-btn -->
                            </div>
                        </div>
                        <div class="main-slider-one__image">
                            <div class="main-slider-one__image__one">
                                <img src="assets/images/backgrounds/slider-1-layer-2.jpg" alt="WalaNet">
                            </div>
                            <div class="main-slider-one__image__border">
                                <img src="assets/images/shapes/slider-1-border.png" alt="WalaNet">
                            </div>
                            <div class="main-slider-one__image__user">
                                <div class="main-slider-one__image__user__text">2.5M happy user</div>
                                <div class="main-slider-one__image__user__image">
                                    <img src="assets/images/resources/user-1.png" alt="WalaNet">
                                    <img src="assets/images/resources/user-2.png" alt="WalaNet">
                                    <img src="assets/images/resources/user-3.png" alt="WalaNet">
                                    <span class="main-slider-one__image__user__rm">+65</span>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-one__layer" style="background-image: url(assets/images/backgrounds/slider-1-layer-2.png);"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                        <div class="main-slider-one__content">
                            <h5 class="main-slider-one__sub-title"><span class="main-slider-one__sub-title__border"></span>Connecting the World</h5>
                            <!-- slider-sub-title -->
                            <h2 class="main-slider-one__title">Your Gateway to the<br> Digital Universe</h2><!-- slider-title -->
                            <p class="main-slider-one__text">
                                Donec pretium ornare neque, ac luctus orci ultrices at. Sed blandit eleifend mi, a consectetur tortor<br>
                                varius in. Sed tincidunt aliquet lorem, eget tincidunt est molestie non. 
                            </p><!-- slider-tex -->
                            <div class="main-slider-one__btn">
                                <a href="services.php" class="ienet-btn main-slider-one__btn__first"><span>our service<span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span></span></a><!-- slider-btn -->
                                <a href="packages.php" class="ienet-btn main-slider-one__btn__last"><span><span class="ienet-btn__icon ienet-btn__icon--left"><i class="fas fa-gem"></i></span>browse plan</span></a><!-- slider-btn -->
                            </div>
                        </div>
                        <div class="main-slider-one__image">
                            <div class="main-slider-one__image__one">
                                <img src="assets/images/backgrounds/slider-1-layer-2.jpg" alt="WalaNet">
                            </div>
                            <div class="main-slider-one__image__border">
                                <img src="assets/images/shapes/slider-1-border.png" alt="WalaNet">
                            </div>
                            <div class="main-slider-one__image__user">
                                <div class="main-slider-one__image__user__text">2.5M happy user</div>
                                <div class="main-slider-one__image__user__image">
                                    <img src="assets/images/resources/user-1.png" alt="WalaNet">
                                    <img src="assets/images/resources/user-2.png" alt="WalaNet">
                                    <img src="assets/images/resources/user-3.png" alt="WalaNet">
                                    <span class="main-slider-one__image__user__rm">+65</span>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-one__layer" style="background-image: url(assets/images/backgrounds/slider-1-layer-3.png);"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider-end -->

        <section class="about-one" style="background-image: url(assets/images/shapes/about-1-bg.png);" id="about">
            <div class="about-one__shape" style="background-image: url(assets/images/resources/about-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__image wow fadeInLeft" data-wow-delay="300ms">
                            <div class="about-one__image__one">
                                <img src="assets/images/resources/about-1-1.jpg" alt="WalaNet">
                            </div>
                            <div class="about-one__image__bg"></div>
                            <div class="about-one__image__border" style="background-image: url(assets/images/shapes/about-1-border.png);"></div>
                            <div class="about-one__image__two">
                                <div class="about-one__image__two__inner"><img src="assets/images/resources/about-1-2.jpg" alt="WalaNet"></div>
                            </div>
                        </div><!-- /.about-one__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="about-one__content">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>About Our Internet<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">We Provide <span>Unlimited</span> Network For You.</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="about-one__content__text">
                                Donec pretium ornare neque, ac luctus orci ultrices at. Sed blandit eleifend mi, a consectetur tortor varius in. Sed tincidunt
                                aliquet lorem, eget tincidunt est molestie non. Sed tincidunt aliquet lorem, eget tincidunt est molestie nonac luctus orci ultrices at.
                            </p>
                            <ul class="about-one__content__list">
                                <li><span class="fas fa-check"></span>Super-Fast Dongle</li>
                                <li><span class="fas fa-check"></span>High Speed Wi-Fi</li>
                                <li><span class="fas fa-check"></span>Prepaid SIM</li>
                                <li><span class="fas fa-check"></span>5G Updations</li>
                            </ul>
                            <a href="about.php" class="ienet-btn"><span>More About Us<span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span></span></a>
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        <section class="packages-one" id="packages">
            <div class="packages-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/price-bg-1.jpg);"></div>
            <!-- /.packages-one__bg -->
            <div class="container tabs-box">
                <ul class="packages-one__wrapper">
                    <li class="packages-one__item">
                        <div class="packages-one__item__icon"><i class="icon-home"></i></div>
                        <h3 class="packages-one__item__title">Home Internet</h3>
                        <ul class="packages-one__item__list">
                            <li><span class="fas fa-check"></span>Dedicated Network</li>
                            <li><span class="fas fa-check"></span>Business-friendly SLAs</li>
                            <li><span class="fas fa-check"></span>24×7 Support</li>
                            <li><span class="fas fa-check"></span>Flexible & Scalable Bandwidth</li>
                        </ul>
                    </li><!-- item -->
                    <li class="packages-one__item">
                        <div class="packages-one__item__icon"><i class="icon-corporation"></i></div>
                        <h3 class="packages-one__item__title">Corporate Internet</h3>
                        <ul class="packages-one__item__list">
                            <li><span class="fas fa-check"></span>Dedicated Network</li>
                            <li><span class="fas fa-check"></span>Business-friendly SLAs</li>
                            <li><span class="fas fa-check"></span>24×7 Support</li>
                            <li><span class="fas fa-check"></span>Flexible & Scalable Bandwidth</li>
                        </ul>
                    </li><!-- item -->
                    <li class="packages-one__item">
                        <div class="packages-one__item__icon"><i class="icon-data-analytics"></i></div>
                        <h3 class="packages-one__item__title">Data Connectivity</h3>
                        <ul class="packages-one__item__list">
                            <li><span class="fas fa-check"></span>Dedicated Network</li>
                            <li><span class="fas fa-check"></span>Business-friendly SLAs</li>
                            <li><span class="fas fa-check"></span>24×7 Support</li>
                            <li><span class="fas fa-check"></span>Flexible & Scalable Bandwidth</li>
                        </ul>
                    </li><!-- item -->
                </ul>
                <div class="row">
                    <div class="col-md-8">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>Our Best Plan<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Select Your <span>Best Plan</span></h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div>
                    <div class="col-md-4">
                        <a href="packages.php" class="ienet-btn"><span>View All Service<span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span></span></a>
                    </div>
                </div>
                <ul class="packages-one__list tab-buttons list-unstyled">
                    <li data-tab="#10mbps" class="tab-btn">10 MBPS</li>
                    <li data-tab="#15mbps" class="tab-btn">15 MBPS</li>
                    <li data-tab="#20mbps" class="tab-btn active-btn">20 MBPS</li>
                    <li data-tab="#30mbps" class="tab-btn">30 MBPS</li>
                    <li data-tab="#40mbps" class="tab-btn">40 MBPS</li>
                    <li data-tab="#100mbps" class="tab-btn">100 MBPS</li>
                </ul>
                <div class="tabs-content">
                    <div class="tab fadeInUp animated" id="10mbps">
                        <div class="row gutter-y-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$9 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Basic Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $9/Basic Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <!-- <span class="blog-card__whatsapp m-2 bg-success" style="cursor: pointer;"
                                        onclick="window.open('http:/\/\wa.me/+258843736665?text=Hi%20there%2C%20I%20want%20to%20place%20an%20order', '_blank')"><i class="fab fa-whatsapp"></i></span> -->

                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-1.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$12 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">corporate Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $12/corporate Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-2.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$15 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Dedicated Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $15/Dedicated Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-3.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="15mbps">
                        <div class="row gutter-y-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$12 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Basic Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $12/Basic Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-1.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$35 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">corporate Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $35/corporate Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-2.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$20 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Dedicated Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $20/Dedicated Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-3.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                        </div>
                    </div>
                    <div class="tab fadeInUp animated active-tab" id="20mbps">
                        <div class="row gutter-y-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$19 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Basic Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $19/Basic Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-1.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$39 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">corporate Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $39/corporate Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-2.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$59 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Dedicated Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $59/Dedicated Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-3.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="30mbps">
                        <div class="row gutter-y-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$29 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Basic Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $29/Basic Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-1.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$49 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">corporate Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $49/corporate Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-2.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$69 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Dedicated Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $69/Dedicated Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-3.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="40mbps">
                        <div class="row gutter-y-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$19 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Basic Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $19/Basic Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-1.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$39 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">corporate Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $39/corporate Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-2.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$59 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Dedicated Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $59/Dedicated Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-3.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="100mbps">
                        <div class="row gutter-y-30">
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$39 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Basic Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $39/Basic Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-1.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$59 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">corporate Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $59/corporate Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-2.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">$89 / <span>month</span></div>
                                    <h3 class="packages-one__card__title">Dedicated Package</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <a class="packages-one__card__rm" href="http:/\/\wa.me/+258843736665?text=Olá WalaNet, estou interessado no $89/Dedicated Package. Por favor, forneça mais detalhes" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <!-- <a class="packages-one__card__rm" href="contact.php"><i class="icon-right-chevron"></i></a> -->
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-3.jpg" alt="WalaNet">
                                    </div>
                                </div>
                            </div><!-- item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Start -->
        <section class="feature-one">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>Our facility<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">Our Special <span>Features</span></h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
                        <div class="feature-one__box">
                            <div class="feature-one__box__icon"><i class="icon-dashboard"></i></div>
                            <h5 class="feature-one__box__title">Ultra-Speed Connection</h5>
                            <p class="feature-one__box__text">
                                Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                            </p>
                        </div>
                        <div class="feature-one__box">
                            <div class="feature-one__box__icon"><i class="icon-tv"></i></div>
                            <h5 class="feature-one__box__title">250+ TV chanels</h5>
                            <p class="feature-one__box__text">
                                Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                            </p>
                        </div>
                        <div class="feature-one__box">
                            <div class="feature-one__box__icon"><i class="icon-planning"></i></div>
                            <h5 class="feature-one__box__title">Flexible Plans</h5>
                            <p class="feature-one__box__text">
                                Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__image">
                            <div class="feature-one__image__one">
                                <img src="assets/images/resources/feature-1-1.jpg" alt="WalaNet">
                            </div>
                            <div class="feature-one__image__border">
                                <img src="assets/images/shapes/feature-shape-1.png" alt="WalaNet">
                            </div>
                            <div class="feature-one__image__router">
                                <img src="assets/images/resources/feature-1-router.png" alt="WalaNet">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInRight" data-wow-delay="00ms">
                        <div class="feature-one__box">
                            <div class="feature-one__box__icon"><i class="icon-wifi-router"></i></div>
                            <h5 class="feature-one__box__title">100% free installation</h5>
                            <p class="feature-one__box__text">
                                Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                            </p>
                        </div>
                        <div class="feature-one__box">
                            <div class="feature-one__box__icon"><i class="icon-support"></i></div>
                            <h5 class="feature-one__box__title">fast support 24/7</h5>
                            <p class="feature-one__box__text">
                                Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                            </p>
                        </div>
                        <div class="feature-one__box">
                            <div class="feature-one__box__icon"><i class="icon-4k"></i></div>
                            <h5 class="feature-one__box__title">4K And 8K quality</h5>
                            <p class="feature-one__box__text">
                                Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature End -->

        <section class="mail-one">
            <div class="mail-one__bg" style="background-image: url(assets/images/backgrounds/mail-bg-1.jpg);"></div>
            <!-- /.movie-one__bg -->
            <div class="mail-one__shape-left" style="background-image: url(assets/images/resources/mail-shape-1.png);"></div>
            <div class="mail-one__shape-right" style="background-image: url(assets/images/resources/mail-shape-2.png);"></div>
            <div class="container">
                <div class="mail-one__content">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>check your area<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title bw-split-in-left">Check Availability In <span>Your City</span></h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <form action="" class="mail-one__newsletter mc-form">
                        <select name="location" id="locationCheck" class="select2-select form-control">
                            <?php
                            $areas = json_decode(file_get_contents('location.json'), true);
                            foreach ($areas as $area): ?>
                                <option value="<?= htmlspecialchars($area) ?>"><?= htmlspecialchars($area) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        <input type="text" name="EMAIL" id="emailCheck" placeholder="Enter Your Email OR WhatsApp">
                        <span class="mail-one__newsletter__icon"><i class="icon-location"></i></span>
                        <button type="button" id="checkAvailabilityForm" class="ienet-btn"><span>Check Availability</span></button>

                        <!-- ✅ Flash message will appear here -->
                        <div id="formMessage" style="margin-top: 10px;"></div>
                    </form>
                    <!-- /.footer-widget__newsletter mc-form -->
                </div>
            </div>
        </section>

        <section class="cta-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-one__image wow fadeInLeft" data-wow-delay="100ms">
                            <div class="cta-one__image__one">
                                <img src="assets/images/resources/cta-1-1.jpg" alt="WalaNet">
                            </div>
                            <div class="cta-one__image__shape">
                                <img src="assets/images/shapes/cta-shape-1.png" alt="WalaNet">
                            </div>
                            <div class="cta-one__image__two wow fadeInUp" data-wow-delay="300ms">
                                <img src="assets/images/resources/cta-1-1.png" alt="WalaNet">
                            </div>
                            <div class="cta-one__image__price wow fadeInUp" data-wow-delay="200ms">
                                Start Form $39 / <span>Month</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="cta-one__content">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>save your money<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">Save Money Your <span>Internet</span> Service With TV Service</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="cta-one__content__text">
                                Donec pretium ornare neque, ac luctus orci ultrices at. Sed blandit eleifend mi, a consectetur tortor varius in.
                                Sed tincidunt aliquet lorem, eget tincidunt est molestie non. Sed tincidunt aliquet lorem, eget tincidunt est molestie
                            </p>
                            <a href="about.php" class="ienet-btn"><span>Get In Touch<span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.cta-one -->

        <section class="movie-one" id="movie">
            <div class="movie-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/movie-bg-1.jpg);"></div>
            <!-- /.movie-one__bg -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>entertainment<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Popular <span>Featured</span> Show</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div>
                    <div class="col-md-4">
                        <div class="movie-one__nav">
                            <a href="#" class="movie-one__nav__prev"><i class="icon-left-chevron"></i></a>
                            <a href="#" class="movie-one__nav__next"><i class="icon-right-chevron"></i></a>
                        </div><!-- /.testimonials-one__custome-navs -->
                    </div>
                </div>
            </div>
            <div class="movie-one__carousel owl-carousel ienet-owl__carousel--custom-nav owl-theme ienet-owl__carousel" data-owl-nav-prev=".movie-one__nav__prev" data-owl-nav-next=".movie-one__nav__next" data-owl-options='{
		"loop": true,
		"autoplay": true,
		"margin": 30,
		"center": false,
		"nav": false,
		"dots": true,
		"smartSpeed": 500,
		"autoplayTimeout": 10000,
		"responsive": {
			"0": {
				"stagePadding": 50,
				"items": 1
			},
			"500": {
				"items": 2
			},
			"768": {
				"stagePadding": 100,
				"items": 2
			},
			"992": {
				"stagePadding": 52,
				"items": 3
			},
			"1200": {
				"stagePadding": 160,
				"items": 3
			},
			"1300": {
				"stagePadding": 100,
				"items": 4
			},
			"1400": {
				"stagePadding": 116,
				"items": 4
			},
			"1600": {
				"stagePadding": 216,
				"items": 4
			},
			"1800": {
				"stagePadding": 216,
				"items": 5
			}
		}
		}' id="movie-list">
                <!-- <div class="item">
                    <div class="movie-one__item">
                        <div class="movie-one__item__image">
                            <img src="assets/images/movie/movie-1-1.jpg" alt="WalaNet">
                        </div>
                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                            <i class="fa fa-play"></i>
                            <i class="ripple"></i>
                        </a>
                        <div class="movie-one__item__content">
                            <h3 class="movie-one__item__title"><a href="movie-details.php">Broken city state</a></h3>
                            <ul class="movie-one__item__list">
                                <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                                <li>1hr : 30mins</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="movie-one__item">
                        <div class="movie-one__item__image">
                            <img src="assets/images/movie/movie-1-2.jpg" alt="WalaNet">
                        </div>
                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                            <i class="fa fa-play"></i>
                            <i class="ripple"></i>
                        </a>
                        <div class="movie-one__item__content">
                            <h3 class="movie-one__item__title"><a href="movie-details.php">Prem Ratan Dhan</a></h3>
                            <ul class="movie-one__item__list">
                                <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                                <li>1hr : 30mins</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="movie-one__item">
                        <div class="movie-one__item__image">
                            <img src="assets/images/movie/movie-1-3.jpg" alt="WalaNet">
                        </div>
                        <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                            <i class="fa fa-play"></i>
                            <i class="ripple"></i>
                        </a>
                        <div class="movie-one__item__content">
                            <h3 class="movie-one__item__title"><a href="movie-details.php">The Jungle Book</a></h3>
                            <ul class="movie-one__item__list">
                                <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                                <li>1hr : 30mins</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>

        <section class="faq-one">
            <div class="faq-one__shape" style="background-image: url(assets/images/resources/faq-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-one__accordion ienet-accrodion" data-grp-name="ienet-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                        What is broadband internet?
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward,
                                            a new normal that has evolved from generation X is on the
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                        How does broadband internet work?
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward,
                                            a new normal that has evolved from generation X is on the
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                        What is the difference between upload and download speeds?
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward,
                                            a new normal that has evolved from generation X is on the
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                        What factors can affect broadband speed?
                                    </h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward,
                                            a new normal that has evolved from generation X is on the
                                        </p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="faq-one__content">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>frequently asked questions<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">Why Should <span>Work</span> With Us</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <!-- section-title -->
                            <div class="faq-one__content__box">
                                <div class="faq-one__content__box__icon"><i class="icon-wifi-router"></i></div>
                                <h5 class="faq-one__content__box__title">100% free installation</h5>
                                <p class="faq-one__content__box__text">
                                    Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                                </p>
                            </div>
                            <div class="faq-one__video" style="background-image: url(assets/images/resources/faq-1-video.jpg);">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                    <i class="fa fa-play"></i>
                                    <i class="ripple"></i>
                                </a>
                            </div>
                        </div><!-- /.faq-one__contact -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.faq-one-accordion -->


        <!-- testimonials remove from here no need  -->
        <!-- /.testimonials-one -->

        <!-- blog remove from here no need  -->
        <!-- /.blog-one -->


        <section class="shop-one" id="shop">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>latest Products<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">Our Latest <span>Products</span> News</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row">
                <div class="col-xl-12">
                <div style="text-align: right;">
                 <div class="btn text-center" onclick="location.assign('products-left.php')">
                       <p>See More >></p>
                  </div>
                </div>
                        <div class="row gutter-y-30 " id="product-list">
                            <!-- <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                    <div class="product__item__img">
                                        <img src="assets/images/products/product-1-1.png" alt="nisoz">
                                        <div class="product__item__btn">
                                            <a href="cart.php"><i class="far fa-heart"></i></a>
                                            <a href="product-details.php"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="product__item__title"><a href="product-details.php">Digital Brush</a></h4>
                                        <div class="product__item__price">$20.00</div>
                                        <a class="ienet-btn product__item__link add-to-cart-btn"><span>Add To Cart<span class="ienet-btn__icon"><i class="icon-cart"></i></span></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                    <div class="product__item__img">
                                        <img src="assets/images/products/product-1-2.png" alt="nisoz">
                                        <div class="product__item__btn">
                                            <a><i class="far fa-heart"></i></a>
                                            <a href="product-details.php"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="product__item__title"><a href="product-details.php">Tplink Router</a></h4>
                                        <div class="product__item__price">$25.00</div>
                                        <a class="ienet-btn product__item__link add-to-cart-btn"><span>Add To Cart<span class="ienet-btn__icon"><i class="icon-cart"></i></span></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="product__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                    <div class="product__item__img">
                                        <img src="assets/images/products/product-1-3.png" alt="nisoz">
                                        <div class="product__item__btn">
                                            <a href="cart.php"><i class="far fa-heart"></i></a>
                                            <a href="product-details.php"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="product__item__content">
                                        <div class="product__item__ratings">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="product__item__title"><a href="product-details.php">Digital Camera</a></h4>
                                        <div class="product__item__price">$33.00</div>
                                        <a href="cart.php" class="ienet-btn product__item__link add-to-cart-btn"><span>Add To Cart<span class="ienet-btn__icon"><i class="icon-cart"></i></span></span></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one -->
<br>
     

        <footer class="main-footer background-black">
            <div class="main-footer__bg background-black" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);"></div>
            <div class="main-footer__shape-one" style="background-image: url(assets/images/resources/footer-shape-1.png);"></div>
            <div class="main-footer__shape-two" style="background-image: url(assets/images/resources/footer-shape-2.png);"></div>
            <!-- /.main-footer__bg -->
            <div class="main-footer__top">
                <div class="container">
                    <div class="main-footer__top__inner">
                        <ul class="list-unstyled main-footer__top__info">
                            <li class="main-footer__top__info__item">
                                <span class="main-footer__top__info__icon"><i class="icon-mail"></i></span>
                                <a href="mailto:info@WalaNetmail.com">info@WalaNetmail.com</a>
                            </li>
                            <li class="main-footer__top__info__item">
                                <span class="main-footer__top__info__icon"><i class="icon-maps-and-flags"></i></span>
                                1211 Madison Ave, New York, NY
                            </li>
                        </ul><!-- /.list-unstyled topbar-one__info -->
                        <div class="main-footer__top__right">
                            <div class="main-footer__top__social">

                                <a href="https://facebook.com">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://twitter.com">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://instagram.com">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                                <a href="https://www.youtube.com/">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                    <span class="sr-only">Youtube</span>
                                </a>
                            </div><!-- /.main-footer__top__social -->
                        </div><!-- /.main-footer__top__right -->
                    </div><!-- /.main-footer__top__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__top -->
            <div class="container">
                <div class="main-footer__middle">
                    <a href="index.php">
                        <img src="assets/images/logo-light.png" height="80" alt="WalaNet HTML Template">
                    </a>
                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__newsletter mc-form">
                        <span class="footer-widget__newsletter__icon"><i class="icon-mail"></i></span>
                        <input type="text" name="EMAIL" placeholder="Enter Email Address">
                        <button type="submit" class="ienet-btn"><span>Subscribe Now</span></button>
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </form><!-- /.footer-widget__newsletter mc-form -->
                    <div class="main-footer__middle__call">
                        <div class="main-footer__middle__call__icon"><span class="icon-telephone"></span></div>
                        <div class="main-footer__middle__call__title">Call Emergency</div>
                        <a class="main-footer__middle__call__text" href="tel:88012365499">+88 0123 654 99</a>
                    </div>
                </div><!-- /.main-footer__middle -->
            </div><!-- /.container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="footer-widget footer-widget--about">
                            <h2 class="footer-widget__title">About WalaNet</h2><!-- /.footer-widget__title -->
                            <p class="footer-widget__text">
                                There are two main types: solar photovoltaic (PV) systems for electricity generation and
                            </p>
                            <a href="about.php" class="ienet-btn"><span>Get In Touch<span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span></span></a>
                        </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="footer-widget footer-widget--links">
                            <h2 class="footer-widget__title">our services</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="service-d-broadband.php">Fiber & Broadband</a></li>
                                <li><a href="service-d-cyber-security.php">Cyber Security</a></li>
                                <li><a href="service-d-tv.php">Amazon Box TV</a></li>
                                <li><a href="service-d-iptv.php">Smart IPTV</a></li>
                                <li><a href="service-d-connectivity.php">Smart Connectivity</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="footer-widget footer-widget--links">
                            <h2 class="footer-widget__title">useful links</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="movie.php">Our Movie</a></li>
                                <li><a href="blog-grid-right.php">News & Blog</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="contact.php">Contacts</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="footer-widget footer-widget--gallery">
                            <h2 class="footer-widget__title">Our Gallery</h2><!-- /.footer-widget__title -->
                            <div class="footer-widget__gallery">
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-1.jpg" alt="WalaNet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-2.jpg" alt="WalaNet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-3.jpg" alt="WalaNet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-4.jpg" alt="WalaNet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-5.jpg" alt="WalaNet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-6.jpg" alt="WalaNet">
                                </a><!-- /.footer-widget__gallery__link -->
                            </div><!-- /.footer-widget__gallery -->
                        </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright">
                            &copy; Copyright <span class="dynamic-year"></span> by WalaNet HTML Template.
                        </p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@WalaNet.com">needhelp@WalaNet.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">

                <a href="https://facebook.com">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://instagram.com">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://www.youtube.com/">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="ienet-btn">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <!-- Sidebar One Start -->
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <div class="sidebar-one__close"><i class="icon-plus"></i></div><!-- /.siderbar-close -->
            <div class="sidebar-one__logo">
                <a href="index.php" aria-label="logo image"><img src="assets/images/logo-light.png" alt="WalaNet HTML" height="80"></a>
            </div><!-- /.sidebar-one__logo-box -->
            <p class="sidebar-one__text">
                Mauris ut enim sit amet lacus ornare ullamcor. Praesent placerat nequ
                puru rhoncu tincidunt odio ultrices. Sed feugiat feugiat felis.
            </p>
            <h4 class="sidebar-one__title">Contact Info:</h4>
            <ul class="sidebar-one__info">
                <li>
                    <span class="fas fa-map-marker-alt"></span>
                    27, Dhaka London City Dhaka, Bangladesh
                </li>
                <li>
                    <span class="fas fa-clock"></span>
                    Mon - Fri: 8.00 am. - 6.00 pm.
                </li>
                <li>
                    <span class="fas fa-envelope"></span>
                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                </li>
            </ul>
            <div class="sidebar-one__social">

                <a href="https://facebook.com">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://instagram.com">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://www.youtube.com/">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div><!-- /sidebar-one__socila -->
            <h4 class="sidebar-one__title">Newsletter:</h4>
            <form action="#" data-url="MAILCHIMP_FORM_URL" class="sidebar-one__newsletter mc-form">
                <input type="text" name="EMAIL" placeholder="Email address">
                <button type="submit" class="fas fa-paper-plane">
                    <span class="sr-only">submit</span><!-- /.sr-only -->
                </button>
            </form><!-- /.footer-widget__newsletter mc-form -->
        </div><!-- /.sidebar__content -->
    </aside>
    <!-- Sidebar One Start -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


    <a title="Chat on WhatsApp"
        href="https://wa.me/+258843736665?text=Olá WalaNet, tenho uma questão e gostaria de conversar."
        class="whatsapp-float-link"
        target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- gsap js -->
    <script src="assets/vendors/gsap/gsap.js"></script>
    <script src="assets/vendors/gsap/scrolltrigger.min.js"></script>
    <script src="assets/vendors/gsap/splittext.min.js"></script>
    <script src="assets/vendors/gsap/ienet-split.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- template js -->
    <script src="assets/js/ienet.js"></script>
    <script>
    $(document).ready(function() {
        $('.select2-select').select2({
            placeholder: "Select an area...",
            allowClear: true
        });
        const cartData = <?php echo json_encode($_SESSION['cart'] ?? []); ?>;
        // Save to localStorage
        localStorage.setItem('cart', JSON.stringify(cartData));

        $("#checkAvailabilityForm").on("click", function(e) {
            e.preventDefault();
            var parentBtn = $("#checkAvailabilityForm");
            parentBtn.find("span").html("Sending...");
            parentBtn.prop("disabled", true);
            parentBtn.toggleClass("btn btn-secondary");

            $.ajax({
                url: 'Controllers/sendMail.php',
                method: 'GET',
                data: {
                    location: $("#locationCheck").val(),
                    EMAIL: $("#emailCheck").val()
                },
                success: function(response) {
                    // console.log(response.status);
                    var data = response;

                    if (data.status == 200) {
                        // Display success message below the submit button
                        $("#formMessage").html('<div class="alert alert-success mt-2" role="alert">A sua mensagem foi enviada. Retornaremos após analisá-la.</div>');
                    } else {
                        // Display error message below the submit button
                        $("#formMessage").html('<div class="alert alert-danger mt-2" role="alert">' + (data.message || "Something went wrong.") + '</div>');
                    }

                    parentBtn.find("span").html("Check Availability");
                    parentBtn.prop("disabled", false);
                    parentBtn.toggleClass("btn btn-secondary");

                    // Optionally, hide the message after a few seconds
                    setTimeout(function() {
                        $("#formMessage").fadeOut();
                    }, 5000); // Message will fade out after 5 seconds
                },
                error: function(xhr) {
                    console.error('Error:', xhr);
                    // Display error message below the submit button if AJAX request fails
                    $("#formMessage").html('<div class="alert alert-danger mt-2" role="alert">AJAX request failed.</div>');
                }
            });
        });
    });

//   fetch Streaming
fetch('assets/js/streaming.json')
  .then(response => response.json())
  .then(data => {
    const container = document.getElementById('movie-list');
    data.forEach(item => {
      const html = `
        <div class="item">
          <div class="movie-one__item">
            <div class="movie-one__item__image">
              <img src="${item.image}" alt="${item.title}" style="width: 100%;
    height: 350px;
    object-fit: cover;
    display: block;" >
            </div>
            <a href="${item.video}" target="_blank" class="video-popup">
              <i class="fa fa-play"></i>
              <i class="ripple"></i>
            </a>
            <div class="movie-one__item__content">
              <h3 class="movie-one__item__title"><a href="movie-details.php">${item.title}</a></h3>
              <ul class="movie-one__item__list">
                <li><i class="fa fa-star"></i>${item.imdb}(Imdb)</li>
                <li>${item.time}</li>
              </ul>
            </div>
          </div>
        </div>
      `;
      container.innerHTML += html;
    });
  })
  .catch(error => console.error('Error loading JSON:', error));


</script>

<script type="module">
    import { bindAddToCart } from './assets/js/add-to-cart.js';

    bindAddToCart('.add-to-cart-btn', null , 3); // default selector and alert
</script>
</body>

</html>
