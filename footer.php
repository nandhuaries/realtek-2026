<footer class="footer-area">
    <div class="footer-shape">
        <img src="assets/img/shape/01.png" alt="">
    </div>
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-5">
                    <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">
                            <img src="assets/esol/images/logo/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="about.html"><i class="fas fa-caret-right"></i> About Us</a></li>
                            <li><a href="blog.html"><i class="fas fa-caret-right"></i> Update News</a></li>
                            <li><a href="contact.html"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                            <li><a href="testimonial.html"><i class="fas fa-caret-right"></i> Testimonials</a></li>
                            <li><a href="terms.html"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                            <li><a href="privacy.html"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Our Social</h4>
                        <ul class="footer-list social">
                            <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fab fa-x-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i> Youtube</a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Get In Touch</h4>
                        <ul class="footer-contact">
                            <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                            <li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</li>
                            <li><a href="mailto:info@example.com"><i class="far fa-envelope"></i>info@example.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p class="copyright-text">
                        &copy; Copyright <span id="date"></span> <a href="#"> Eventu </a> All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->


<!-- scroll-top -->
<a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
<!-- scroll-top end -->


<!-- js -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/countdown.min.js"></script>
<script src="assets/js/main.js"></script>

<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    // Particles Animation
    function createParticles() {
        const container = document.getElementById('particlesContainer');
        const particleCount = 30;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';

            // Random size
            const sizes = ['small', 'medium', 'large'];
            particle.classList.add(sizes[Math.floor(Math.random() * sizes.length)]);

            // Random color
            const colors = ['primary', 'secondary'];
            particle.classList.add(colors[Math.floor(Math.random() * colors.length)]);

            // Random position
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';

            // Random animation duration and delay
            particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
            particle.style.animationDelay = Math.random() * 5 + 's';

            container.appendChild(particle);
        }
    }

    // Initialize particles
    createParticles();

    // Owl Carousel with custom controls
    $(document).ready(function() {
        const owl = $('.sponsor-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 800,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });

        // Custom navigation
        $('.custom-nav-prev').click(function() {
            owl.trigger('prev.owl.carousel');
        });

        $('.custom-nav-next').click(function() {
            owl.trigger('next.owl.carousel');
        });

        // Custom dots
        function createCustomDots() {
            const dotsContainer = $('#customDots');
            const itemsCount = $('.sponsor-logo-item').length;
            const responsive = owl.owlCarousel('options').responsive;
            const currentWidth = $(window).width();

            let visibleItems = 1;
            Object.keys(responsive).forEach(breakpoint => {
                if (currentWidth >= parseInt(breakpoint)) {
                    visibleItems = responsive[breakpoint].items;
                }
            });

            const dotsCount = Math.ceil(itemsCount / visibleItems);
            dotsContainer.empty();

            for (let i = 0; i < dotsCount; i++) {
                const dot = $('<span class="custom-dot"></span>');
                if (i === 0) dot.addClass('active-dot');
                dot.click(function() {
                    owl.trigger('to.owl.carousel', [i * visibleItems, 800]);
                });
                dotsContainer.append(dot);
            }
        }

        createCustomDots();

        // Update active dot on carousel change
        owl.on('changed.owl.carousel', function(e) {
            const currentIndex = e.item.index;
            const responsive = owl.owlCarousel('options').responsive;
            const currentWidth = $(window).width();

            let visibleItems = 1;
            Object.keys(responsive).forEach(breakpoint => {
                if (currentWidth >= parseInt(breakpoint)) {
                    visibleItems = responsive[breakpoint].items;
                }
            });

            const dotIndex = Math.floor(currentIndex / visibleItems);
            $('.custom-dot').removeClass('active-dot');
            $('.custom-dot').eq(dotIndex).addClass('active-dot');
        });

        // Recreate dots on window resize
        $(window).resize(function() {
            createCustomDots();
        });
    });
</script>
<!-- end owl carousel -->


<!-- prev sponsor slider -->
<script>
    $(document).ready(function() {
        $('.partner-logo-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            navText: ['<i class="far fa-arrow-left"></i>', '<i class="far fa-arrow-right"></i>'],
            navClass: ['logo-carousel-prev', 'logo-carousel-next'],
            navContainerClass: 'logo-carousel-nav',
            dotsClass: 'logo-carousel-dots',
            dotClass: 'logo-carousel-dot',
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                },
                1200: {
                    items: 6
                }
            }
        });
    });
</script>
<!-- end prev sponsor slider -->


<!-- past speakers -->
<script>
    // Speakers Data
    const speakers = [{
            imgSrc: "assets/esol/images/past-speakers/DrAmy.jpg",
            name: "Dr. Amy Hochadel",
            designation: "Vice President, Urban Lab, Expo City Dubai",
            linkedin: "https://www.linkedin.com/in/dramyhochadel",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/DrMagdZoroob.jpg",
            name: "Dr. Magd Zoroob",
            designation: "Chief Technology Officer, FutureOS",
            linkedin: "https://www.linkedin.com/in/drmagdzoroob",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/TekhaSelims.jpg",
            name: "Tekha Selim",
            designation: "Executive Vice President & Head of MENA Region",
            linkedin: "https://www.linkedin.com/in/tekhaselim",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/matt-myres.jpg",
            name: "Matt Myers, MAI, FRICS",
            designation: "Program Lead for MA Real Estate Management and Finance, Heriot-Watt University",
            linkedin: "https://www.linkedin.com/in/mattmyers",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/Silvia.jpg",
            name: "Silvia Eldawi",
            designation: "Founder, Propologi",
            linkedin: "https://www.linkedin.com/in/silviaeldawi",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/BilalMoti.jpg",
            name: "Bilal Moti",
            designation: "Chairman, Windmills Real Estate Valuation Services",
            linkedin: "https://www.linkedin.com/in/bilalmoti",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/AnishaSagar.jpg",
            name: "Anisha Sagar",
            designation: "Director of Property Management, Allsopp & Allsopp Group",
            linkedin: "https://www.linkedin.com/in/anishasagar",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/StefanHickmott.jpg",
            name: "Stefan Hickmott",
            designation: "Founder & CEO, RealBex and Evarei Management",
            linkedin: "https://www.linkedin.com/in/stefanhickmott",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/PeterMay.jpg",
            name: "Peter May",
            designation: "COO, Silkhaus",
            linkedin: "https://www.linkedin.com/in/petermay",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/JeevanDMello.jpg",
            name: "Prof. Jeevan D'Mello",
            designation: "CEO, Zenesis Corporation",
            linkedin: "https://www.linkedin.com/in/jeevandmello",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/christopherCina.jpg",
            name: "Christopher Cina",
            designation: "Director of Sales, Betterhomes UAE",
            linkedin: "https://www.linkedin.com/in/christophercina",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/Hassan-Alladin.jpg",
            name: "Hassan Alladin",
            designation: "Associate Director, Strategy and Consulting, Cavendish Maxwell",
            linkedin: "https://www.linkedin.com/in/hassanalladin",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/AbdullaAlWahedi.jpg",
            name: "Dr. Abdulla Al Wahedi",
            designation: "CEO, Irtikaz Property Management",
            linkedin: "https://www.linkedin.com/in/abdullaalwahedi",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/AymanAlashkarMSc.jpg",
            name: "Ayman Alashkar MSc",
            designation: "CEO, Hamilton Bradshaw MENA",
            linkedin: "https://www.linkedin.com/in/aymanalashkar",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/ismailAlHammadi.jpg",
            name: "Ismail Al Hammadi",
            designation: "Founder & CEO, Al Ruwad Real Estate",
            linkedin: "https://www.linkedin.com/in/ismailalhammadi",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/MichaelHunter.jpg",
            name: "Michael Hunter",
            designation: "CEO and Co-founder, Holo",
            linkedin: "https://www.linkedin.com/in/michaelhunter",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/ArranSummerhill.jpg",
            name: "Arran Summerhill",
            designation: "COO and Co-Founder, Holo",
            linkedin: "https://www.linkedin.com/in/arransummerhill",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/AmitMadan.jpg",
            name: "Amit Madan",
            designation: "Associate Director – Facilities Management Consultancy, Land Sterling",
            linkedin: "https://www.linkedin.com/in/amitmadan",
        },
        {
            imgSrc: "assets/esol/images/past-speakers/yeldarTolesh.jpg",
            name: "Yeldar Tolesh",
            designation: "CEO & Founder, Sogdians Venture Studio",
            linkedin: "https://www.linkedin.com/in/yeldartolesh",
        },
    ];

    // Generate Speaker Cards
    function generateSpeakerCards() {
        const carousel = $('#speakersCarousel');
        speakers.forEach(speaker => {
            const card = `
                    <div class="speaker-card-wrapper">
                        <div class="speaker-card">
                            <div class="speaker-image-container">
                                <img class="speaker-image" src="${speaker.imgSrc}" alt="${speaker.name}">
                                <div class="speaker-social-overlay">
                                    <a href="${speaker.linkedin}" target="_blank" rel="noopener" class="speaker-linkedin-btn">
                                        <i class="fab fa-linkedin speaker-linkedin-icon"></i>
                                        <span>Connect on LinkedIn</span>
                                    </a>
                                </div>
                            </div>
                            <div class="speaker-info-container">
                                <h3 class="speaker-name">${speaker.name}</h3>
                                <p class="speaker-designation">${speaker.designation}</p>
                            </div>
                        </div>
                    </div>
                `;
            carousel.append(card);
        });
    }

    $(document).ready(function() {
        // Generate cards
        generateSpeakerCards();

        // Initialize Owl Carousel
        const owl = $('.speakers-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            //  autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });

        // Custom Navigation
        $('.speakers-nav-prev').click(function() {
            owl.trigger('prev.owl.carousel', [1000]);
        });

        $('.speakers-nav-next').click(function() {
            owl.trigger('next.owl.carousel', [1000]);
        });

        // Custom Dots
        function createSpeakerDots() {
            const dotsContainer = $('#speakerDots');
            const itemsCount = speakers.length;
            const responsive = owl.owlCarousel('options').responsive;
            const currentWidth = $(window).width();

            let visibleItems = 1;
            Object.keys(responsive).forEach(breakpoint => {
                if (currentWidth >= parseInt(breakpoint)) {
                    visibleItems = responsive[breakpoint].items;
                }
            });

            const dotsCount = Math.ceil(itemsCount / visibleItems);
            dotsContainer.empty();

            for (let i = 0; i < dotsCount; i++) {
                const dot = $('<span class="speaker-dot"></span>');
                if (i === 0) dot.addClass('active-speaker-dot');
                dot.click(function() {
                    owl.trigger('to.owl.carousel', [i * visibleItems, 1000]);
                });
                dotsContainer.append(dot);
            }
        }

        createSpeakerDots();

        // Update active dot
        owl.on('changed.owl.carousel', function(e) {
            const currentIndex = e.item.index;
            const responsive = owl.owlCarousel('options').responsive;
            const currentWidth = $(window).width();

            let visibleItems = 1;
            Object.keys(responsive).forEach(breakpoint => {
                if (currentWidth >= parseInt(breakpoint)) {
                    visibleItems = responsive[breakpoint].items;
                }
            });

            const dotIndex = Math.floor(currentIndex / visibleItems);
            $('.speaker-dot').removeClass('active-speaker-dot');
            $('.speaker-dot').eq(dotIndex).addClass('active-speaker-dot');
        });

        // Recreate dots on resize
        $(window).resize(function() {
            createSpeakerDots();
        });
    });
</script>
<!-- end past speakers -->


</body>

</html>