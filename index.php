<?php include 'header.php'; ?>

<main class="main">
    <!-- hero slider -->
    <div class="hero-section">
        <video autoplay muted loop playsinline class="background-video">
            <source src="assets/esol/video/video.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
        <div class="hero-scroll-box">
            <div class="hero-scroll">
                <div class="scroller"></div>
            </div>
        </div>
        <div class="bannerSectionWrapper">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="hero-content">
                            <div class="hero-date" data-animation="fadeInDown" data-delay=".25s">
                                <h1><?php echo $evt_day ?></h1>
                                <div class="date-content">
                                    <span><?php echo $evt_month_year ?></span>
                                    <p><?php echo $evt_loc ?></p>
                                </div>
                            </div>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                Realtek Conference and Expo
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                                There are many variations of passages available but the majority have
                                suffered alteration in some form by injected humour.
                            </p>
                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-4 mb-3">
                                        <a href="#" class="theme-btn w-100">
                                            Delegate Registration<i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <a href="#" class="theme-btn w-100">
                                            Become a Sponsor
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <a href="#" class="theme-btn w-100">
                                            Book an Exhibition Space
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <a href="#" class="theme-btn w-100">
                                            Nominate for Awards
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <a href="#" class="theme-btn w-100">
                                            Apply to Speak
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <a type="button" class="theme-btn w-100" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Register as Media
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- <a href="#" class="theme-btn theme-btn2">Learn More<i
                                        class="fas fa-arrow-right"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single" style="background: url(assets/img/hero/slider-1.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="hero-content">
                                <div class="hero-date" data-animation="fadeInDown" data-delay=".25s">
                                    <h1>25</h1>
                                    <div class="date-content">
                                        <span>May 2024</span>
                                        <p>25/B Milford Road, New York, USA</p>
                                    </div>
                                </div>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Digital World <span>Conference</span> Meetup
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    There are many variations of passages available but the majority have
                                    suffered alteration in some form by injected humour.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#" class="theme-btn">Buy Ticket<i
                                            class="fas fa-arrow-right"></i></a>
                                    <a href="#" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background: url(assets/img/hero/slider-2.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="hero-content">
                                <div class="hero-date" data-animation="fadeInDown" data-delay=".25s">
                                    <h1>25</h1>
                                    <div class="date-content">
                                        <span>May 2024</span>
                                        <p>25/B Milford Road, New York, USA</p>
                                    </div>
                                </div>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Digital World <span>Conference</span> Meetup
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    There are many variations of passages available but the majority have
                                    suffered alteration in some form by injected humour.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#" class="theme-btn">Buy Ticket<i
                                            class="fas fa-arrow-right"></i></a>
                                    <a href="#" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background: url(assets/img/hero/slider-3.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="hero-content">
                                <div class="hero-date" data-animation="fadeInDown" data-delay=".25s">
                                    <h1>25</h1>
                                    <div class="date-content">
                                        <span>May 2024</span>
                                        <p>25/B Milford Road, New York, USA</p>
                                    </div>
                                </div>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Digital World <span>Conference</span> Meetup
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    There are many variations of passages available but the majority have
                                    suffered alteration in some form by injected humour.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="#" class="theme-btn">Buy Ticket<i
                                            class="fas fa-arrow-right"></i></a>
                                    <a href="#" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- hero slider end -->


    <!-- event-countdown -->
    <div class="event-countdown ec-1">
        <div class="event-countdown-wrap">
            <div data-countdown="2026/09/24 09:30" class="event-countdown"></div>
        </div>
        <div class="event-countdown-text">
            <span>Countdown</span>
        </div>
    </div>
    <!-- event-countdown end -->


    <!-- about area -->
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInRight" data-wow-delay=".25s">
                        <div class="about-img">
                            <img class="img-1" src="assets/esol/images/common/realtek-abt-800.png" alt="">
                            <img class="img-2" src="assets/esol/images/common/realtek-abt-400-1.png" alt="">
                            <img class="img-3" src="assets/esol/images/common/realtek-abt-400.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInLeft" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <!-- <span class="site-title-tagline">About Us</span> -->
                            <h2 class="site-title">
                                Step into the future of <span>Real Estate</span> Expo and Summit
                            </h2>
                            <div class="site-shadow-text wow fadeInRight" data-wow-delay=".35s">About Us</div>
                        </div>
                        <p class="about-text">
                            <b> Organized by Biz Events, Realtek Summit 2026 returns to Dubai, UAE!</b><br>
                            Join global innovators, technology pioneers, and industry leaders as they converge to
                            explore the transformative trends shaping connectivity, semiconductors, and smart solutions.
                            Discover the next frontier of Realtek innovation—all from the vibrant heart of the Middle
                            East.

                        </p>
                        <a href="about" class="theme-btn mt-3">About Us<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->


    <!-- video area -->
    <div class="video-area">
        <div class="container-fluid px-0">
            <div class="video-content pb-50"
                style="background-image: url(assets/esol/images/common/why-atttend.png);background-attachment: fixed;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="video-info">
                                <div class="site-heading mb-0">
                                    <span class="site-title-tagline text-white">Why Attend RealTek 2026?</span>
                                    <h2 class="site-title text-white">
                                        We connect minds for real estate innovation.
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="video-wrapper">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video area end -->


    <!-- feature area -->
    <div class="feature-area fa-negative">
        <div class="container">
            <div class="feature-wrapper">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                            <span class="count">01</span>
                            <div class="feature-icon">
                                <i class="fa-solid fa-microchip"></i>
                            </div>
                            <h4 class="feature-title">Real Estate Tech Innovators</h4>
                            <p>
                                Gain a deep understanding of today’s market challenges and uncover high-potential
                                opportunities to sharpen your innovation strategy.
                                Connect with leading investors, executives, and entrepreneurs to forge strategic,
                                growth-driven partnerships.
                                Discover the latest advancements transforming Residential and Commercial Real Estate,
                                Property Management, Smart Buildings, and beyond.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                            <span class="count">02</span>
                            <div class="feature-icon">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <h4 class="feature-title">
                                Real Estate Developers & Investors
                            </h4>
                            <p>
                                Explore emerging investment strategies and strategic partnerships that drive sustainable
                                growth.
                                Stay ahead of the competition by identifying new market opportunities and evolving
                                industry trends.
                                Leverage cutting-edge technologies and tools to optimize operations and enhance asset
                                value.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                            <span class="count">03</span>
                            <div class="feature-icon">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                            <h4 class="feature-title">
                                Investors & Venture Capitalists
                            </h4>
                            <p>
                                Gain comprehensive visibility across the real estate technology landscape—from emerging
                                startups to established market leaders.
                                Build strategic connections with industry innovators to stay ahead of evolving market
                                trends.
                                Access valuable insights into acquisition strategies and investment priorities shaping
                                global real estate markets.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                            <span class="count">04</span>
                            <div class="feature-icon">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <h4 class="feature-title">
                                Networking
                            </h4>
                            <p>
                                Engage in one-on-one networking with the RealTek community to build meaningful,
                                high-impact connections.
                                Showcase your solutions through live demos and presentations to connect directly with
                                prospective partners.
                                Elevate your brand and collaborate with professionals shaping the future of real estate
                                innovation.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                            <span class="count">05</span>
                            <div class="feature-icon">
                                <i class="fa-solid fa-bullseye-arrow"></i>
                            </div>
                            <h4 class="feature-title">
                                Lead Generation
                            </h4>
                            <p>
                                Generate high-quality leads and cultivate connections that extend well beyond the event.
                                Identify client interests and nurture meaningful relationships with prospective
                                customers.
                                Expand your network and convert targeted opportunities into lasting business growth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->


    <!-- schedule area -->
    <div class="schedule-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <span class="site-title-tagline">Event Schedule</span>
                        <h2 class="site-title">Our Events <span>Schedule</span> Plan</h2>
                        <div class="site-shadow-text">Schedule</div>
                    </div>
                </div>
            </div>
            <div class="schedule-nav wow fadeInUp" data-wow-delay=".25s">
                <ul class="nav nav-pills" id="pills-tab-schedule" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-schedule-tab1" data-bs-toggle="pill"
                            data-bs-target="#pills-schedule1" type="button" role="tab" aria-controls="pills-schedule1"
                            aria-selected="true">
                            <span class="icon"><i class="fal fa-calendar-days"></i></span>
                            <span class="content">
                                <span class="day">Day 01</span>
                                <span class="date">May 25, 2024</span>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-schedule-tab2" data-bs-toggle="pill"
                            data-bs-target="#pills-schedule2" type="button" role="tab" aria-controls="pills-schedule2"
                            aria-selected="false">
                            <span class="icon"><i class="fal fa-calendar-days"></i></span>
                            <span class="content">
                                <span class="day">Day 02</span>
                                <span class="date">May 26, 2024</span>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-schedule-tab3" data-bs-toggle="pill"
                            data-bs-target="#pills-schedule3" type="button" role="tab" aria-controls="pills-schedule3"
                            aria-selected="false">
                            <span class="icon"><i class="fal fa-calendar-days"></i></span>
                            <span class="content">
                                <span class="day">Day 03</span>
                                <span class="date">May 27, 2024</span>
                            </span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="pills-tabContent-schedule">
                <!-- tab 1 -->
                <div class="tab-pane fade show active" id="pills-schedule1" role="tabpanel"
                    aria-labelledby="pills-schedule-tab1" tabindex="0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="schedule-item">
                                <span class="schedule-count">01</span>
                                <div class="schedule-content-wrap">
                                    <div class="schedule-img">
                                        <img src="assets/img/schedule/01.jpg" alt="">
                                    </div>
                                    <div class="schedule-content">
                                        <div class="schedule-info">
                                            <div class="schedule-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i> 10.00 AM - 12.00 PM</li>
                                                    <li><i class="far fa-location-dot"></i> 25/B Milford, New York</li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">Business World Event Introduction</a></h4>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form by injected humour, or randomised words
                                                which don't look even slightly believable.</p>
                                        </div>
                                        <div class="schedule-bottom">
                                            <div class="schedule-speaker">
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/01.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Frederick Taylor</h6>
                                                        <span>UX Designer</span>
                                                    </div>
                                                </div>
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/02.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Tony Mendoza</h6>
                                                        <span>Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="theme-btn">Buy Tickets<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="schedule-item">
                                <span class="schedule-count">02</span>
                                <div class="schedule-content-wrap">
                                    <div class="schedule-img">
                                        <img src="assets/img/schedule/02.jpg" alt="">
                                    </div>
                                    <div class="schedule-content">
                                        <div class="schedule-info">
                                            <div class="schedule-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i> 10.00 AM - 12.00 PM</li>
                                                    <li><i class="far fa-location-dot"></i> 25/B Milford, New York</li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">Introduction Digital Technology Conference.</a></h4>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form by injected humour, or randomised words
                                                which don't look even slightly believable.</p>
                                        </div>
                                        <div class="schedule-bottom">
                                            <div class="schedule-speaker">
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/03.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Bryan Credle</h6>
                                                        <span>Technology Officer</span>
                                                    </div>
                                                </div>
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/04.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Helene Falcon</h6>
                                                        <span>Operations Officer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="theme-btn">Buy Tickets<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="schedule-item last">
                                <span class="schedule-count">03</span>
                                <div class="schedule-content-wrap">
                                    <div class="schedule-img">
                                        <img src="assets/img/schedule/03.jpg" alt="">
                                    </div>
                                    <div class="schedule-content">
                                        <div class="schedule-info">
                                            <div class="schedule-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i> 10.00 AM - 12.00 PM</li>
                                                    <li><i class="far fa-location-dot"></i> 25/B Milford, New York</li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">International Technology Summit Conference.</a></h4>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form by injected humour, or randomised words
                                                which don't look even slightly believable.</p>
                                        </div>
                                        <div class="schedule-bottom">
                                            <div class="schedule-speaker">
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/02.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Karin Dnox</h6>
                                                        <span>Software Engineer</span>
                                                    </div>
                                                </div>
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/03.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>David Russell</h6>
                                                        <span>Product Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="theme-btn">Buy Tickets<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab 2 -->
                <div class="tab-pane fade" id="pills-schedule2" role="tabpanel" aria-labelledby="pills-schedule-tab2"
                    tabindex="0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="schedule-item">
                                <span class="schedule-count">01</span>
                                <div class="schedule-content-wrap">
                                    <div class="schedule-img">
                                        <img src="assets/img/schedule/01.jpg" alt="">
                                    </div>
                                    <div class="schedule-content">
                                        <div class="schedule-info">
                                            <div class="schedule-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i> 10.00 AM - 12.00 PM</li>
                                                    <li><i class="far fa-location-dot"></i> 25/B Milford, New York</li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">Business World Event Introduction</a></h4>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form by injected humour, or randomised words
                                                which don't look even slightly believable.</p>
                                        </div>
                                        <div class="schedule-bottom">
                                            <div class="schedule-speaker">
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/01.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Frederick Taylor</h6>
                                                        <span>UX Designer</span>
                                                    </div>
                                                </div>
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/02.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Tony Mendoza</h6>
                                                        <span>Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="theme-btn">Buy Tickets<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="schedule-item">
                                <span class="schedule-count">02</span>
                                <div class="schedule-content-wrap">
                                    <div class="schedule-img">
                                        <img src="assets/img/schedule/02.jpg" alt="">
                                    </div>
                                    <div class="schedule-content">
                                        <div class="schedule-info">
                                            <div class="schedule-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i> 10.00 AM - 12.00 PM</li>
                                                    <li><i class="far fa-location-dot"></i> 25/B Milford, New York</li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">Introduction Digital Technology Conference.</a></h4>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form by injected humour, or randomised words
                                                which don't look even slightly believable.</p>
                                        </div>
                                        <div class="schedule-bottom">
                                            <div class="schedule-speaker">
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/03.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Bryan Credle</h6>
                                                        <span>Technology Officer</span>
                                                    </div>
                                                </div>
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/04.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Helene Falcon</h6>
                                                        <span>Operations Officer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="theme-btn">Buy Tickets<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="schedule-item last">
                                <span class="schedule-count">03</span>
                                <div class="schedule-content-wrap">
                                    <div class="schedule-img">
                                        <img src="assets/img/schedule/03.jpg" alt="">
                                    </div>
                                    <div class="schedule-content">
                                        <div class="schedule-info">
                                            <div class="schedule-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i> 10.00 AM - 12.00 PM</li>
                                                    <li><i class="far fa-location-dot"></i> 25/B Milford, New York</li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">International Technology Summit Conference.</a></h4>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form by injected humour, or randomised words
                                                which don't look even slightly believable.</p>
                                        </div>
                                        <div class="schedule-bottom">
                                            <div class="schedule-speaker">
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/02.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Karin Dnox</h6>
                                                        <span>Software Engineer</span>
                                                    </div>
                                                </div>
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/03.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>David Russell</h6>
                                                        <span>Product Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="theme-btn">Buy Tickets<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab 3 -->
                <div class="tab-pane fade" id="pills-schedule3" role="tabpanel" aria-labelledby="pills-schedule-tab3"
                    tabindex="0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="schedule-item">
                                <span class="schedule-count">01</span>
                                <div class="schedule-content-wrap">
                                    <div class="schedule-img">
                                        <img src="assets/img/schedule/01.jpg" alt="">
                                    </div>
                                    <div class="schedule-content">
                                        <div class="schedule-info">
                                            <div class="schedule-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i> 10.00 AM - 12.00 PM</li>
                                                    <li><i class="far fa-location-dot"></i> 25/B Milford, New York</li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">Business World Event Introduction</a></h4>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form by injected humour, or randomised words
                                                which don't look even slightly believable.</p>
                                        </div>
                                        <div class="schedule-bottom">
                                            <div class="schedule-speaker">
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/01.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Frederick Taylor</h6>
                                                        <span>UX Designer</span>
                                                    </div>
                                                </div>
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/02.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Tony Mendoza</h6>
                                                        <span>Developer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="theme-btn">Buy Tickets<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="schedule-item">
                                <span class="schedule-count">02</span>
                                <div class="schedule-content-wrap">
                                    <div class="schedule-img">
                                        <img src="assets/img/schedule/02.jpg" alt="">
                                    </div>
                                    <div class="schedule-content">
                                        <div class="schedule-info">
                                            <div class="schedule-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i> 10.00 AM - 12.00 PM</li>
                                                    <li><i class="far fa-location-dot"></i> 25/B Milford, New York</li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">Introduction Digital Technology Conference.</a></h4>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form by injected humour, or randomised words
                                                which don't look even slightly believable.</p>
                                        </div>
                                        <div class="schedule-bottom">
                                            <div class="schedule-speaker">
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/03.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Bryan Credle</h6>
                                                        <span>Technology Officer</span>
                                                    </div>
                                                </div>
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/04.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Helene Falcon</h6>
                                                        <span>Operations Officer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="theme-btn">Buy Tickets<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="schedule-item last">
                                <span class="schedule-count">03</span>
                                <div class="schedule-content-wrap">
                                    <div class="schedule-img">
                                        <img src="assets/img/schedule/03.jpg" alt="">
                                    </div>
                                    <div class="schedule-content">
                                        <div class="schedule-info">
                                            <div class="schedule-meta">
                                                <ul>
                                                    <li><i class="far fa-clock"></i> 10.00 AM - 12.00 PM</li>
                                                    <li><i class="far fa-location-dot"></i> 25/B Milford, New York</li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">International Technology Summit Conference.</a></h4>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form by injected humour, or randomised words
                                                which don't look even slightly believable.</p>
                                        </div>
                                        <div class="schedule-bottom">
                                            <div class="schedule-speaker">
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/02.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>Karin Dnox</h6>
                                                        <span>Software Engineer</span>
                                                    </div>
                                                </div>
                                                <div class="speaker-item">
                                                    <div class="speaker-img">
                                                        <img src="assets/img/speaker/03.jpg" alt="">
                                                        <span class="speaker-img-icon"><i
                                                                class="far fa-microphone-lines"></i></span>
                                                    </div>
                                                    <div class="speaker-info">
                                                        <h6>David Russell</h6>
                                                        <span>Product Designer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="theme-btn">Buy Tickets<i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- schedule area end -->


    <!-- counter area -->
    <div class="counter-area pt-80 pb-80">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <div class="counter-info">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline text-white">Fun Fact</span>
                            <h2 class="site-title text-white">
                                We inspire people to be creative enough.
                            </h2>
                        </div>
                        <p class="text-white">There are many variations of passages the majority have suffered
                            alteration
                            in some form slightly believable. If you are going to use a passage of need to be sure.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6">
                            <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                <div class="icon">
                                    <img src="assets/img/icon/workshop.svg" alt="">
                                </div>
                                <div class="counter-content">
                                    <div class="counter-info">
                                        <span class="counter" data-count="+" data-to="150" data-speed="3000">150</span>
                                        <span class="counter-unit">+</span>
                                    </div>
                                    <h6 class="title">Unique Workshops</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="counter-box wow fadeInDown" data-wow-delay=".25s">
                                <div class="icon">
                                    <img src="assets/img/icon/participant.svg" alt="">
                                </div>
                                <div class="counter-content">
                                    <div class="counter-info">
                                        <span class="counter" data-count="+" data-to="260" data-speed="3000">260</span>
                                        <span class="counter-unit">K</span>
                                    </div>
                                    <h6 class="title">Event Participants</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                                <div class="icon">
                                    <img src="assets/img/icon/speaker-2.svg" alt="">
                                </div>
                                <div class="counter-content">
                                    <div class="counter-info">
                                        <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                                        <span class="counter-unit">+</span>
                                    </div>
                                    <h6 class="title">Skilled Speakers</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="counter-box wow fadeInDown" data-wow-delay=".25s">
                                <div class="icon">
                                    <img src="assets/img/icon/award.svg" alt="">
                                </div>
                                <div class="counter-content">
                                    <div class="counter-info">
                                        <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                                        <span class="counter-unit">+</span>
                                    </div>
                                    <h6 class="title">Win Awards</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->


    <!-- pricing area -->
    <div class="pricing-area bg pt-70 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <span class="site-title-tagline">Tickets Price</span>
                        <h2 class="site-title">Choose Your Right <span>Tickets <br> Pricing </span> Plan</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="pricing-shape">
                            <img src="assets/img/shape/03.png" alt="">
                        </div>
                        <div class="pricing-header">
                            <h5>Basic</h5>
                        </div>
                        <div class="pricing-amount">
                            <strong>$80.00</strong>
                        </div>
                        <div class="pricing-feature">
                            <ul>
                                <li><i class="fas fa-check-circle"></i>Full event access</li>
                                <li><i class="fas fa-check-circle"></i>Exclusive Q & A sessions</li>
                                <li><i class="fas fa-check-circle"></i>Reserved seating for your comfort</li>
                                <li><i class="fas fa-check-circle"></i>Ask question privately</li>
                                <li><i class="fas fa-check-circle"></i>Tea and Cofee Break</li>
                            </ul>
                        </div>
                        <div class="pricing-btn-wrap">
                            <a href="#" class="theme-btn">Purchase Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="pricing-shape">
                            <img src="assets/img/shape/03.png" alt="">
                        </div>
                        <div class="pricing-header">
                            <h5>Standard</h5>
                        </div>
                        <div class="pricing-amount">
                            <strong>$120.00</strong>
                        </div>
                        <div class="pricing-feature">
                            <ul>
                                <li><i class="fas fa-check-circle"></i>Full event access</li>
                                <li><i class="fas fa-check-circle"></i>Exclusive Q & A sessions</li>
                                <li><i class="fas fa-check-circle"></i>Reserved seating for your comfort</li>
                                <li><i class="fas fa-check-circle"></i>Ask question privately</li>
                                <li><i class="fas fa-check-circle"></i>Tea and Cofee Break</li>
                            </ul>
                        </div>
                        <div class="pricing-btn-wrap">
                            <a href="#" class="theme-btn">Purchase Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="pricing-shape">
                            <img src="assets/img/shape/03.png" alt="">
                        </div>
                        <div class="pricing-header">
                            <h5>Premium</h5>
                        </div>
                        <div class="pricing-amount">
                            <strong>$150.00</strong>
                        </div>
                        <div class="pricing-feature">
                            <ul>
                                <li><i class="fas fa-check-circle"></i>Full event access</li>
                                <li><i class="fas fa-check-circle"></i>Exclusive Q & A sessions</li>
                                <li><i class="fas fa-check-circle"></i>Reserved seating for your comfort</li>
                                <li><i class="fas fa-check-circle"></i>Ask question privately</li>
                                <li><i class="fas fa-check-circle"></i>Tea and Cofee Break</li>
                            </ul>
                        </div>
                        <div class="pricing-btn-wrap">
                            <a href="#" class="theme-btn">Purchase Now <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing area end -->


    <!-- speaker area -->
    <div class="team-area py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <span class="site-title-tagline">Speakers</span>
                        <h2 class="site-title">Meet Creative <span>Speakers</span></h2>
                        <div class="site-shadow-text">Speakers</div>
                    </div>
                </div>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay=".25s">
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/speaker/01.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="info">
                                <h4><a href="#">Ronel Smith</a></h4>
                                <span>UX Deginer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/speaker/02.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="info">
                                <h4><a href="#">Malissa Fie</a></h4>
                                <span>UX Deginer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/speaker/03.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="info">
                                <h4><a href="#">Bodney Rios</a></h4>
                                <span>UX Deginer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/speaker/04.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="info">
                                <h4><a href="#">Durton Mary</a></h4>
                                <span>UX Deginer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/speaker/05.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="info">
                                <h4><a href="#">Heidi Powers</a></h4>
                                <span>UX Deginer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/speaker/06.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="info">
                                <h4><a href="#">Miller Carla</a></h4>
                                <span>UX Deginer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- speaker area end -->


    <!-- cta area -->
    <div class="cta-area pt-60 pb-60" style="background-image: url(assets/img/cta/01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="cta-content wow fadeInUp" data-wow-delay=".25s">
                        <h1>Are you want to join our events ?</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable <br> content
                            of a page when looking at its layout.</p>
                        <a href="#" class="theme-btn">Register Now<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end -->


    <!-- choose area -->
    <div class="choose-area py-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-img wow fadeInLeft" data-wow-delay=".25s">
                        <img src="assets/img/choose/01.jpg" alt="">
                        <a href="#" class="theme-btn">Learn More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                        <div class="site-heading mb-0">
                            <span class="site-title-tagline">Why Join</span>
                            <h2 class="site-title mb-10">Why You Should Join Our Event ?</h2>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout.
                            </p>
                        </div>
                        <div class="choose-content-wrap">
                            <div class="choose-item">
                                <div class="choose-item-icon">
                                    <img src="assets/img/icon/event.svg" alt="">
                                </div>
                                <div class="choose-item-info">
                                    <h4>Interactive Sessions</h4>
                                    <p>There are many variations of the passages available suffered.</p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-item-icon">
                                    <img src="assets/img/icon/location.svg" alt="">
                                </div>
                                <div class="choose-item-info">
                                    <h4>Massive Locations</h4>
                                    <p>There are many variations of the passages available suffered.</p>
                                </div>
                            </div>
                            <div class="choose-item">
                                <div class="choose-item-icon">
                                    <img src="assets/img/icon/idea.svg" alt="">
                                </div>
                                <div class="choose-item-info">
                                    <h4>Implement Your Idea</h4>
                                    <p>There are many variations of the passages available suffered.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- choose area end -->


    <!-- testimonial-area -->
    <div class="testimonial-area bg py-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <span class="site-title-tagline">Testimonials</span>
                        <h2 class="site-title">What Our <span>Guest Say's</span> <br> About Us</h2>
                        <div class="site-shadow-text">Testimonials</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            There are many variations of passage available the majority have
                            suffered to alteration in some form making it look like readable by injected humour.
                        </p>
                        <div class="testimonial-quote-icon">
                            <img src="assets/img/icon/quote.svg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/01.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Anderson Dele</h4>
                            <p>Our Guest</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            There are many variations of passage available the majority have
                            suffered to alteration in some form making it look like readable by injected humour.
                        </p>
                        <div class="testimonial-quote-icon">
                            <img src="assets/img/icon/quote.svg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/02.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Gordon Novak</h4>
                            <p>Our Guest</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            There are many variations of passage available the majority have
                            suffered to alteration in some form making it look like readable by injected humour.
                        </p>
                        <div class="testimonial-quote-icon">
                            <img src="assets/img/icon/quote.svg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/03.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Lucille Rucker</h4>
                            <p>Our Guest</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-quote">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            There are many variations of passage available the majority have
                            suffered to alteration in some form making it look like readable by injected humour.
                        </p>
                        <div class="testimonial-quote-icon">
                            <img src="assets/img/icon/quote.svg" alt="">
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/04.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Elizabeth Galvan</h4>
                            <p>Our Guest</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area end -->


    <!-- gallery-area -->
    <div class="gallery-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <span class="site-title-tagline">Gallery</span>
                        <h2 class="site-title">Let's Check Our Photo <br> <span>Gallery</span></h2>
                        <div class="site-shadow-text wow fadeInRight" data-wow-delay=".35s">Our Gallery</div>
                    </div>
                </div>
            </div>
            <div class="row g-4 popup-gallery">
                <div class="col-md-7">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="gallery-img">
                                    <img src="assets/img/gallery/02.jpg" alt="">
                                    <a class="popup-img gallery-link" href="assets/img/gallery/02.jpg"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="gallery-img">
                                    <img src="assets/img/gallery/03.jpg" alt="">
                                    <a class="popup-img gallery-link" href="assets/img/gallery/03.jpg"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="gallery-img">
                                    <img src="assets/img/gallery/04.jpg" alt="">
                                    <a class="popup-img gallery-link" href="assets/img/gallery/04.jpg"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/01.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/01.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery-area end -->


    <!-- partner area -->
    <div class="partner-area partner-bg py-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <span class="site-title-tagline">Sponsors</span>
                        <h2 class="site-title">Let's Check Our <span>Sponsors</span></h2>
                    </div>
                </div>
            </div>

            <div class="partner-wrapper wow fadeInUp" data-wow-delay=".25s">
                <div class="row g-5 justify-content-center">
                    <div class="col-6 col-md-2">
                        <img src="assets/img/partner/01.png" alt="thumb">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="assets/img/partner/02.png" alt="thumb">
                    </div>
                </div>
            </div>
            <div class="text-center mt-40 wow fadeInUp" data-wow-delay=".25s">
                <a href="#" class="theme-btn"><span class="fal fa-users"></span> Become Sponsors</a>
            </div>
        </div>
    </div>
    <!-- partner area end -->


    <!-- previous Sponsors -->
    <div class="particles-wrapper">
        <!-- Particles Container -->
        <div class="particles-container" id="particlesContainer"></div>

        <!-- Main Content -->
        <section class="sponsors-section">
            <div class="sponsor-section-title-wrapper">
                <h2 class="sponsor-section-title">Our Previous Sponsors</h2>
                <p class="section-subtitle">Trusted by leading brands and companies worldwide</p>
            </div>

            <div class="sponsor-carousel-wrapper">
                <div class="owl-carousel owl-theme sponsor-carousel">
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/1.png" alt="Sponsor 1">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/2.png" alt="Sponsor 2">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/3.png" alt="Sponsor 3">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/4.png" alt="Sponsor 4">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/5.png" alt="Sponsor 5">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/6.png" alt="Sponsor 6">
                    </div>
                </div>

                <!-- Custom Navigation -->
                <button class="custom-nav-btn custom-nav-prev">‹</button>
                <button class="custom-nav-btn custom-nav-next">›</button>
            </div>
        </section>
    </div>
    <!-- end previous Sponsors -->

    <!-- past speaker -->
    <section class="speakers-section-wrapper">
        <!-- Background Decorations -->
        <div class="bg-decoration bg-decoration-1"></div>
        <div class="bg-decoration bg-decoration-2"></div>
        <div class="bg-decoration bg-decoration-3"></div>

        <div class="speakers-container">
            <!-- Section Header -->
            <div class="speakers-header">
                <span class="speakers-subtitle">Industry Leaders</span>
                <h2 class="speakers-main-title">Our Past Speakers</h2>
                <p class="speakers-description">
                    Learn from the best minds in real estate, technology, and innovation.
                    Our speakers bring decades of experience and cutting-edge insights.
                </p>
            </div>

            <!-- Speakers Carousel -->
            <div class="speakers-carousel-container">
                <div class="owl-carousel owl-theme speakers-carousel" id="speakersCarousel"></div>

                <!-- Custom Navigation -->
                <button class="speakers-nav-btn speakers-nav-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="speakers-nav-btn speakers-nav-next">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <!-- Custom Dots -->
                <div class="speakers-dots-wrapper" id="speakerDots"></div>
            </div>
        </div>
    </section>
    <!-- end past speaker -->

    <!-- venue area -->
    <div class="venue-area py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <span class="site-title-tagline">Venues</span>
                        <h2 class="site-title">Explore Our <span>Venues</span></h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay=".25s">
                <div class="col-md-6 col-lg-4">
                    <div class="venue-item">
                        <div class="venue-img">
                            <img src="assets/img/venue/01.jpg" alt="">
                        </div>
                        <div class="venue-content">
                            <span>Venue 01</span>
                            <h6>Marine City Michigan</h6>
                            <p>New York, USA</p>
                            <div class="venue-play">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                    <span>Virtual Tour</span>
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="venue-item">
                        <div class="venue-img">
                            <img src="assets/img/venue/02.jpg" alt="">
                        </div>
                        <div class="venue-content">
                            <span>Venue 02</span>
                            <h6>Kansas City Omaha</h6>
                            <p>New York, USA</p>
                            <div class="venue-play">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                    <span>Virtual Tour</span>
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="venue-item">
                        <div class="venue-img">
                            <img src="assets/img/venue/03.jpg" alt="">
                        </div>
                        <div class="venue-content">
                            <span>Venue 03</span>
                            <h6>New Hampshire City</h6>
                            <p>New York, USA</p>
                            <div class="venue-play">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                    <span>Virtual Tour</span>
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- venue area end -->


    <!-- register-area -->
    <div class="quote-area mt-80 pb-80">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7 ms-auto">
                    <div class="quote-content wow fadeInUp" data-wow-delay=".25s">
                        <div class="quote-head">
                            <h3>Register Now</h3>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of majority have suffered alteration page when looking at its layout.
                            </p>
                        </div>
                        <div class="quote-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="far fa-user-tie"></i></span>
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="far fa-phone"></i></span>
                                            <input type="text" class="form-control" placeholder="Your Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="far fa-box"></i></span>
                                            <select class="select form-select form-control">
                                                <option value="">Choose Plan</option>
                                                <option value="1">Plan One</option>
                                                <option value="2">Plan Two</option>
                                                <option value="3">Plan Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-group textarea">
                                            <span class="input-group-text"><i class="far fa-comment-lines"></i></span>
                                            <textarea class="form-control" cols="30" rows="4"
                                                placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="theme-btn">Register Now<i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- register-area end -->


    <!-- blog-area -->
    <div class="blog-area py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                        <span class="site-title-tagline">Our Blog</span>
                        <h2 class="site-title">Let's Check Our Latest <br> <span>News & Blog</span></h2>
                        <div class="site-shadow-text wow fadeInRight" data-wow-delay=".35s">Our Blog</div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                        <span class="blog-date">20 May</span>
                        <div class="blog-item-img">
                            <img src="assets/img/blog/01.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 1.50k Comments</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">There are many variations of passages orem available</a>
                            </h4>
                            <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInDown" data-wow-delay=".25s">
                        <span class="blog-date">25 May</span>
                        <div class="blog-item-img">
                            <img src="assets/img/blog/02.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 1.25k Comments</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">All the generators on tend to repeat chunks</a>
                            </h4>
                            <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                        <span class="blog-date">30 May</span>
                        <div class="blog-item-img">
                            <img src="assets/img/blog/03.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 1.78k Comments</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">It long established fact read will readable content</a>
                            </h4>
                            <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area end -->


    <!-- instagram -->
    <div class="instagram-area mb-120 wow fadeInUp" data-wow-delay=".25s">
        <div class="container">
            <a href="#" class="theme-btn mt-3"><span class="fab fa-instagram"></span> Follow Us</a>
            <div class="row g-4">
                <div class="col-6 col-lg-2">
                    <div class="instagram-img">
                        <img src="assets/img/instagram/01.jpg" alt="">
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="instagram-img">
                        <img src="assets/img/instagram/02.jpg" alt="">
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="instagram-img">
                        <img src="assets/img/instagram/03.jpg" alt="">
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="instagram-img">
                        <img src="assets/img/instagram/04.jpg" alt="">
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="instagram-img">
                        <img src="assets/img/instagram/05.jpg" alt="">
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div class="instagram-img">
                        <img src="assets/img/instagram/06.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram end -->

</main>
<?php include 'footer.php'; ?>

<!-- media reg -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Media Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <form method="post" action="/eventu/assets/php/contact.php" id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nameOfMedia"
                                        placeholder="Name Of Media" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="location" placeholder="Location"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="website" placeholder="Website"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="contactNumber"
                                        placeholder="Contact Number" required>
                                </div>
                            </div>


                        </div>

                        <button type="submit" class="theme-btn">Send
                            Message <i class="far fa-paper-plane"></i></button>
                        <div class="col-md-12 mt-3">
                            <div class="form-messege text-success"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end media reg -->