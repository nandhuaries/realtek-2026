<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Realtek</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cstm-styles.css">
    <link rel="stylesheet" href="assets/css/cstm-responsive.css">

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- end owl carousel -->

    <!-- evt date -->
    <?php $evt_date = "24<sup>th</sup> September 2026" ?>
    <?php $evt_time = "09:00 AM - 04:00 PM" ?>
    <?php $evt_day = "24" ?>
    <?php $evt_month_year = "September 2026" ?>


    <!-- end evt date -->
    <!-- evt location -->
    <?php $evt_loc = "Dubai" ?>
    <!-- end evt location -->

</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <header class="header">
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="header-top-left">
                                <div class="header-top-contact">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="far fa-location-dot"></i>
                                                <?php echo $evt_loc ?>
                                            </a>
                                        </li>
                                        <li><a href="mailto:eventmanager@ariesgroupglobal.com"><i class="far fa-envelopes"></i>
                                                eventmanager@ariesgroupglobal.com
                                            </a>
                                        </li>
                                        <li><a href="tel:+971 50 298 9588"><i class="far fa-phone-volume"></i> +971 50 298 9588</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-top-right">
                                <div class="header-top-social">
                                    <span>Follow Us:</span>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a href="index.html" class="navbar-brand">
                        <img src="assets/esol/images/logo/logo.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Sponsors</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Speakers</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Previous Editions</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="index.html">Home Page 01</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Home Page 02</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Home Page 03</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Book Your Stand </a></li>
                            <li class="nav-item"><a class="nav-link" href="">Contact </a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
                        </ul>
                        <div class="nav-right">
                            <!-- <div class="search-btn">
                                <button type="button" class="nav-right-link search-box-outer"><i
                                        class="far fa-search"></i></button>
                            </div> -->
                            <div class="sidebar-btn">
                                <button type="button" class="nav-right-link"><i class="far fa-bars-sort"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->


    <!-- sidebar-popup -->
    <div class="sidebar-popup">
        <div class="sidebar-wrapper">
            <div class="sidebar-content">
                <button type="button" class="close-sidebar-popup"><i class="far fa-xmark"></i></button>
                <div class="sidebar-logo">
                    <img src="assets/esol/images/logo/logo.png" alt="">
                </div>
                <div class="sidebar-about">
                    <h4>Leading the Future of Real Estate</h4>
                    <p>
                        <b><?php echo $evt_date ?> | Dubai</b> <br>
                        Be part of the region’s premier Realtek summit 2026.
                        From global leaders to regional pioneers’ network, exhibit, and celebrate excellence.

                    </p>
                </div>
                <div class="sidebar-contact">
                    <h4>Connect with Us</h4>
                    <ul>
                        <li>
                            <h6>Email</h6>
                            <a href="mailto:eventmanager@ariesgroupglobal.com"><i class="far fa-envelope"></i>
                                eventmanager@ariesgroupglobal.com
                            </a>
                        </li>
                        <li>
                            <h6>Phone</h6>
                            <a href="tel:+971 54 232 0399"><i class="far fa-phone"></i>+971 54 232 0399</a>
                        </li>
                        <li>
                            <h6>Address</h6>
                            <a href="https://realteksummit.com/"><i class="fas fa-globe"></i>
                                realteksummit.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-social">
                    <h4>Follow Us</h4>
                    <!-- <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a> -->
                    <a href="https://ae.linkedin.com/company/realtek-summit" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar-popup end -->