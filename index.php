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

    <!-- counter area -->
    <div class="counter-area pt-80 pb-80 mt-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="counter-info">
                        <div class="site-heading mb-3">
                            <!-- <span class="site-title-tagline text-white">Fun Fact</span> -->
                            <h2 class="site-title text-white">
                                RealTek Awards – Dubai 2026
                            </h2>
                        </div>
                        <p class="text-white">
                            Welcome to the 4th Edition of the RealTek Awards! Returning to Dubai, UAE, on 24 September 2026, this prestigious event celebrates the exceptional achievements driving progress in the real estate sector.
                        </p>
                        <p class="text-white">
                            Honoring innovation, resilience, and leadership, the RealTek Awards recognize individuals and organizations that have made outstanding contributions to shaping the industry over the past year.
                        </p>
                        <p class="text-white">
                            Join us for an unforgettable evening dedicated to celebrating excellence and innovation in real estate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->

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
                    <!-- <div class="sponsor-logo-item">
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
                    </div> -->
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
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/7.png" alt="Sponsor 7">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/8.png" alt="Sponsor 8">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/9.png" alt="Sponsor 9">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/10.png" alt="Sponsor 10">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/11.webp" alt="Sponsor 11">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/12.png" alt="Sponsor 12">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/13.png" alt="Sponsor 13">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/14.svg" alt="Sponsor 14">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/15.png" alt="Sponsor 15">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/16.png" alt="Sponsor 16">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/17.jpg" alt="Sponsor 17">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/18.png" alt="Sponsor 18">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/19.webp" alt="Sponsor 19">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/20.jpg" alt="Sponsor 20">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/21.png" alt="Sponsor 21">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/22.png" alt="Sponsor 22">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/23.png" alt="Sponsor 23">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/24.png" alt="Sponsor 24">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/25.png" alt="Sponsor 25">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/26.png" alt="Sponsor 26">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/27.png" alt="Sponsor 27">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/28.jpg" alt="Sponsor 28">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/29.png" alt="Sponsor 29">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/30.png" alt="Sponsor 30">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/31.png" alt="Sponsor 31">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/32.jpg" alt="Sponsor 32">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/33.png" alt="Sponsor 33">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/34.jpg" alt="Sponsor 34">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/35.png" alt="Sponsor 35">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/36.png" alt="Sponsor 36">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/37.jpg" alt="Sponsor 37">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/38.jpg" alt="Sponsor 38">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/39.jpg" alt="Sponsor 39">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/40.jpg" alt="Sponsor 40">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/41.png" alt="Sponsor 41">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/42.png" alt="Sponsor 42">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/43.png" alt="Sponsor 43">
                    </div>
                    <div class="sponsor-logo-item">
                        <img class="sponsor-logo-img" src="assets/esol/images/prev-sponsors/44.png" alt="Sponsor 44">
                    </div>

                </div>

                <!-- Custom Navigation -->
                <button class="custom-nav-btn custom-nav-prev">‹</button>
                <button class="custom-nav-btn custom-nav-next">›</button>
            </div>
        </section>
    </div>
    <!-- end previous Sponsors -->

    <section class="summit-section">
        <div class="summit-container">
            <div class="summit-header">
                <div class="summit-badge">Annual Conference & Awards</div>
                <h1 class="summit-title">
                    The <span class="summit-title-highlight">RealTek Summit</span>
                </h1>
            </div>

            <div class="summit-content-card">
                <p class="content-text">
                    The RealTek Summit is an annual conference and awards event for the real estate and construction industry, organized by Biz Events Management, most recently held in Dubai. The event gathers industry leaders, innovators, investors, and entrepreneurs to discuss trends, share insights on technology like AI and predictive analytics, and network. It includes a full-day conference program with panel discussions and sessions, followed by an awards ceremony to recognize excellence in the sector.
                </p>
                <div style="margin-top: 30px; text-align: center;">
                    <div class="organizer-tag">
                        Organized by <span class="organizer-name">Biz Events Management</span>
                    </div>
                    <div class="location-badge">
                        <span class="location-icon">📍</span>
                        Dubai
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- choose area -->
    <div class="choose-area py-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-img wow fadeInLeft" data-wow-delay=".25s">
                        <img src="assets/esol/images/common/book-space.png" alt="">
                        <a href="#" class="theme-btn">Register Now <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                        <div class="choose-content-wrap">
                            <h2 class="site-title mb-10">Book Your Space</h2>
                            <div class="choose-item">
                                <div class="choose-item-icon">
                                    <i class="fa-solid fa-calendar-check"></i>
                                </div>
                                <div class="choose-item-info">
                                    <h4>Book Your Stand</h4>
                                </div>
                            </div>

                            <div class="choose-item">
                                <div class="choose-item-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="choose-item-info">
                                    <h4>Participating Sectors</h4>
                                </div>
                            </div>

                            <div class="choose-item">
                                <div class="choose-item-icon">
                                    <i class="fa-solid fa-lightbulb"></i>
                                </div>
                                <div class="choose-item-info">
                                    <h4>Exhibitors</h4>
                                </div>
                            </div>
                        </div>
                        <div class="site-heading mb-0">
                            <span class="site-title-tagline pt-3">Why Exhibit</span>
                            <!-- <h2 class="site-title mb-10">Book Your Space</h2> -->
                            <p>
                                The RealTek 2026 is Dubai’s premier platform for all real estate matters, bringing together leading local and international industry players. More than just an exhibition, RealTek serves as a comprehensive marketplace where buyers can access exclusive property deals and investment opportunities under one roof.
                            </p>
                            <p>
                                As the hub of real estate activity, RealTek empowers participants to elevate their brand visibility and tap into global markets. Exhibiting at this prestigious international event offers a wealth of benefits, including:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 pt-5">
                    <p>
                        Seize the opportunity to showcase your brand, expand your network, and drive business growth at the RealTek Summit Dubai 2026 — the ultimate destination for real estate excellence.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- choose area end -->

    <!-- cta area -->
    <div class="cta-area pt-60 pb-60" style="background-image: url(assets/esol/images/common/why-atttend.png);background-attachment: fixed;">
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

    <!-- gallery-area -->
    <div class="gallery-area pt-120">
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
                                    <img src="assets/esol/images/common/realtek-gallery-1.png" alt="">
                                    <a class="popup-img gallery-link" href="assets/esol/images/common/realtek-gallery-1.png"><i
                                            class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="gallery-img">
                                    <img src="assets/esol/images/common/realtek-gallery-3.png" alt="">
                                    <a class="popup-img gallery-link" href="assets/esol/images/common/realtek-gallery-3.png"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                                <div class="gallery-img">
                                    <img src="assets/esol/images/common/realtek-gallery-4.png" alt="">
                                    <a class="popup-img gallery-link" href="assets/esol/images/common/realtek-gallery-4.png"><i
                                            class="fal fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="assets/esol/images/common/realtek-gallery-2.png" alt="">
                            <a class="popup-img gallery-link" href="assets/esol/images/common/realtek-gallery-2.png"><i
                                    class="fal fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 pt-3 text-center">
                    <a href="#" class="theme-btn">View More<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery-area end -->


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
            <div class="row justify-content-center">
                <!--  -->
                <div id="blogGrid" class="row gy-4"></div>
                <!--  -->
                <!-- <div class="col-md-6 col-lg-4">
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
                </div> -->
            </div>
        </div>
    </div>
    <!-- blog-area end -->


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