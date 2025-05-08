<?php
session_start(); // Must be the first thing in your script

// Rest of your PHP code
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart || Ienet || HTML Template For Broadband TV & Internet</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Ienet is a multipurpose & unique HTML5 template. We especially designed for broadband internet services, satellite TV, Broadband, Online TV, Cable Television, Online Cinema and Movies, Voip, Wifi, Internet and TV store, Digital TV, Computer Networks, IPTV, Telecom company, CCTV and alternative Security, Networking Solution technology and all other internet businesses and websites." />

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

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/ienet.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one topbar-one--inner">
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

        <header class="main-header main-header--inner sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="index.php">
                            <img src="assets/images/logo-dark.png" alt="Ienet HTML" height="80">
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
        <section class="page-header">
            <div class="page-header__bg"></div>
            <div class="page-header__layer"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Cart</h2><!-- /.page-title -->
                <ul class="ienet-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Cart</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <!-- Cart Start -->
        <section class="cart-page">
            <div class="container">
                <div class="table-responsive">
                    <table class="table cart-page__table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <?php
                            if (!empty($_SESSION['cart'])):
                                foreach ($_SESSION['cart'] as $item):
                                    $subtotal = $item['price'] * $item['quantity'];
                            ?>
                                    <tr>
                                        <td>
                                            <div class="cart-page__table__meta">
                                                <div class="cart-page__table__meta-img">
                                                    <!-- You may need to store image in session or fetch from JSON if needed -->
                                                    <img src="assets/images/products/cart-placeholder.jpg" alt="<?= htmlspecialchars($item['name']) ?>">
                                                </div>
                                                <h3 class="cart-page__table__meta-title">
                                                    <a href="#"><?= htmlspecialchars($item['name']) ?></a>
                                                </h3>
                                            </div>
                                        </td>
                                        <td>$<?= number_format($item['price'], 2) ?></td>
                                        <td>
                                            <div class="product-details__quantity">
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="<?= $item['quantity'] ?>">
                                                    <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$<?= number_format($subtotal, 2) ?></td>
                                        <td>
                                            <a href="remove-from-cart.php?id=<?= $item['id'] ?>" class="table cart-page__table__remove">x</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                            else:
                                ?>
                                <tr>
                                    <td colspan="5" style="text-align:center;">Your cart is empty.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>

                        </tbody>
                    </table>
                    <div class="cart-page__coupone">
                        <form action="#" class="cart-page__coupone__form">
                            <label for="coupon">Coupon:</label>
                            <input type="text" placeholder="Enter Coupon Code" id="coupon" class="cart-cupon__input">
                            <button type="submit" class="ienet-btn"><span>Apply Code</span></button>
                        </form>
                        <a href="cart.php" class="ienet-btn update"><span>Update Cart</span></a>
                    </div>
                </div>
                <?php
                // Calculate total
                $total = 0;

                if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        $subTotal = $item['price'] * $item['quantity'];
                        $total += $subTotal;
                    }
                }
                ?>

                <?php if (!empty($_SESSION['cart'])): ?>
                    <div class="cart-page__cart-total">
                        <h3 class="cart-page__cart-total__title">Cart Total</h3>
                        <ul class="cart-page__cart-total__list list-unstyled">
                            <li><span>Subtotal</span><span class="cart-page__cart-total__list__amount">$<?php echo number_format($total, 2); ?></span></li>
                            <li class="shipping">
                                <h4 class="cart-page__cart-total__text">Shipping Address</h4>
                                <address class="cart-page__cart-total__address">2801 Lafayette Blvd, Norfolk, Vermont 23509, United States</address>
                            </li>
                            <li><span>Total</span><span class="cart-page__cart-total__list__amount">$<?php echo number_format($total, 2); ?></span></li>
                        </ul>
                        
                        <div class="cart-page__cart-total__buttons">
                            <a href="https://wa.me/+923132004039?text=" class="ienet-btn"><span>Checkout</span></a>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- <div class="cart-page__cart-total">
                    <h3 class="cart-page__cart-total__title">Subtotal</h3>
                    <ul class="cart-page__cart-total__list list-unstyled">
                        <li><span>Subtotal</span><span class="cart-page__cart-total__list__amount">$999.00</span></li>
                        <li class="shipping">
                            <h4 class="cart-page__cart-total__text">Shipping Address</h4>
                            <address class="cart-page__cart-total__address">2801 Lafayette Blvd, Norfolk, Vermont 23509, united state</address>
                        </li>
                        <li><span>Total</span><span class="cart-page__cart-total__list__amount">$999.00</span></li>
                    </ul>
                    <div class="cart-page__cart-total__buttons">
                        <a href="checkout.php" class="ienet-btn"><span>checkout</span></a>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- Cart End -->

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
                                <a href="mailto:info@ienetmail.com">info@ienetmail.com</a>
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
                        <img src="assets/images/logo-light.png" height="80" alt="Ienet HTML Template">
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
                            <h2 class="footer-widget__title">About Ienet</h2><!-- /.footer-widget__title -->
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
                                    <img src="assets/images/gallery/fg-1.jpg" alt="ienet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-2.jpg" alt="ienet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-3.jpg" alt="ienet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-4.jpg" alt="ienet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-5.jpg" alt="ienet">
                                </a><!-- /.footer-widget__gallery__link -->
                                <a href="gallery.php" class="footer-widget__gallery__link">
                                    <img src="assets/images/gallery/fg-6.jpg" alt="ienet">
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
                            &copy; Copyright <span class="dynamic-year"></span> by Ienet HTML Template.
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
                    <a href="mailto:needhelp@ienet.com">needhelp@ienet.com</a>
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
                <a href="index.php" aria-label="logo image"><img src="assets/images/logo-light.png" alt="Ienet HTML" height="80"></a>
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
    <!-- template js -->
    <script src="assets/js/ienet.js"></script>
</body>

</html>