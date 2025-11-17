<?php
/**
 * Home page for Mahati Interior Design Website
 */

// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
?>

<!-- Hero Section with Slider -->
<section class="hero section" id="home">
    <div class="hero-slider">
        <div class="slide active" style="background-image: url('<?php echo ASSETS_PATH; ?>images/carusel/carusel.jpg')">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h1 data-aos="fade-up" data-aos-duration="1000">MAHATI INTERIOR</h1>
                <p data-aos="fade-up" data-aos-delay="200">Celebrate living with modern design. End-to-end interiors for
                    homes, villas, apartments & offices. 300+ projects delivered across Karnataka, Tamil Nadu & Andhra
                    Pradesh.</p>
                <div class="slide-features" data-aos="fade-up" data-aos-delay="300">
                    <span class="feature">✓ On-time delivery</span>
                    <span class="feature">✓ Lifetime warranty</span>
                    <span class="feature">✓ Premium materials</span>
                </div>
                <a href="<?php echo page_url('portfolio'); ?>" class="cta-button" data-aos="fade-up"
                    data-aos-delay="400">Explore Designs</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('<?php echo ASSETS_PATH; ?>images/carusel/carusel_1.jpg')">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h1 data-aos="fade-up" data-aos-duration="1000">Elegant Interiors</h1>
                <p data-aos="fade-up" data-aos-delay="200">Sophisticated designs that reflect your personal taste. We
                    specialize in creating timeless elegance through carefully curated furniture, lighting, and color
                    palettes that stand the test of time.</p>
                <div class="slide-features" data-aos="fade-up" data-aos-delay="300">
                    <span class="feature">✓ Timeless Elegance</span>
                    <span class="feature">✓ Luxury Finishes</span>
                    <span class="feature">✓ Custom Furniture</span>
                </div>
                <a href="<?php echo page_url('portfolio'); ?>" class="cta-button" data-aos="fade-up"
                    data-aos-delay="400">View Portfolio</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('<?php echo ASSETS_PATH; ?>images/carusel/carusel_2.jpg')">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h1 data-aos="fade-up" data-aos-duration="1000">Luxury Homes</h1>
                <p data-aos="fade-up" data-aos-delay="200">Premium interior solutions for discerning clients. Experience
                    unparalleled luxury with our bespoke design services that combine opulent materials with innovative
                    concepts.</p>
                <div class="slide-features" data-aos="fade-up" data-aos-delay="300">
                    <span class="feature">✓ Bespoke Design</span>
                    <span class="feature">✓ Premium Materials</span>
                    <span class="feature">✓ Luxury Finishes</span>
                </div>
                <a href="<?php echo page_url('contact'); ?>" class="cta-button" data-aos="fade-up"
                    data-aos-delay="400">Get Quote</a>
            </div>
        </div>
        <div class="slide" style="background-image: url('<?php echo ASSETS_PATH; ?>images/carusel/carusel_3.jpg')">
            <div class="slide-overlay"></div>
            <div class="slide-content">
                <h1 data-aos="fade-up" data-aos-duration="1000">Dream Spaces</h1>
                <p data-aos="fade-up" data-aos-delay="200">Transform your vision into stunning reality. Our creative
                    team brings imagination to life through innovative design solutions that exceed expectations and
                    create lasting impressions.</p>
                <div class="slide-features" data-aos="fade-up" data-aos-delay="300">
                    <span class="feature">✓ Creative Vision</span>
                    <span class="feature">✓ Innovative Solutions</span>
                    <span class="feature">✓ Expert Execution</span>
                </div>
                <a href="<?php echo page_url('contact'); ?>" class="cta-button" data-aos="fade-up"
                    data-aos-delay="400">Start Project</a>
            </div>
        </div>
    </div>

    <!-- Navigation dots -->
    <div class="slider-nav">
        <span class="nav-dot active" data-slide="0"></span>
        <span class="nav-dot" data-slide="1"></span>
        <span class="nav-dot" data-slide="2"></span>
        <span class="nav-dot" data-slide="3"></span>
    </div>

    <!-- Navigation arrows -->
    <div class="slider-arrows">
        <button class="prev-arrow"><i class="fas fa-chevron-left"></i></button>
        <button class="next-arrow"><i class="fas fa-chevron-right"></i></button>
    </div>
</section>

<!-- Expertise Section -->
<section class="expertise section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>What We Do</h2>
            <p class="section-subtitle">
                Modular kitchens, wardrobes, TV units, bedrooms, living rooms, study/office spaces, false ceilings,
                lighting, wall finishes, flooring & more — all customized to your space and budget.
            </p>
        </div>
        <div class="expertise-grid">
            <div class="expertise-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/bedroom/bedroom_4.jpg" alt="Best Interior" />
                    <div class="card-overlay">
                        <h3>Best Interior</h3>
                        <p class="card-category">Residential • Commercial</p>
                    </div>
                </div>
            </div>
            <div class="expertise-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/corporate/corporate_1.jpeg" alt="Best Design" />
                    <div class="card-overlay">
                        <h3>Best Design</h3>
                        <p class="card-category">Modern • Luxury</p>
                    </div>
                </div>
            </div>
            <div class="expertise-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_34.jpg" alt="Unique Concept" />
                    <div class="card-overlay">
                        <h3>Unique Concept</h3>
                        <p class="card-category">Custom • Creative</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section" id="services">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Our Services</h2>
            <p>We offer comprehensive interior design solutions for residential and commercial spaces</p>
        </div>

        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3>Residential Design</h3>
                <p>Transform your home into a beautiful, functional space that reflects your personal style and meets
                    your family's needs.</p>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Commercial Design</h3>
                <p>Create inspiring work environments that boost productivity and leave lasting impressions on clients
                    and employees.</p>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="icon">
                    <i class="fas fa-drafting-compass"></i>
                </div>
                <h3>Space Planning</h3>
                <p>Optimize your space layout for maximum functionality and flow while maintaining aesthetic appeal.</p>
            </div>
        </div>
    </div>
</section>

<!-- Image Carousel Section -->
<section class="carousel-section section" data-aos="fade-up">
    <div class="container">
        <div class="section-title">
            <h2>Our Featured Projects</h2>
            <p>Explore our stunning interior design transformations</p>
        </div>

        <div class="carousel-container">
            <div class="carousel-wrapper" id="carouselWrapper">
                <!-- Slide 1 -->
                <div class="carousel-slide">
                    <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_40.jpg"
                        alt="Modern Living Room Design">
                    <div class="carousel-overlay">
                        <div class="carousel-content">
                            <h3>Modern Living Room</h3>
                            <p>Contemporary design with clean lines and sophisticated color palette</p>
                            <a href="<?php echo page_url('portfolio'); ?>" class="btn">View Project</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <img src="<?php echo ASSETS_PATH; ?>images/bedroom/bedroom_3.jpg" alt="Luxury Bedroom Suite">
                    <div class="carousel-overlay">
                        <div class="carousel-content">
                            <h3>Luxury Master Suite</h3>
                            <p>Elegant bedroom design with premium finishes and custom furniture</p>
                            <a href="<?php echo page_url('portfolio'); ?>" class="btn">View Project</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <img src="<?php echo ASSETS_PATH; ?>images/corporate/corporate_9.jpg" alt="Corporate Office Design">
                    <div class="carousel-overlay">
                        <div class="carousel-content">
                            <h3>Corporate Office</h3>
                            <p>Professional workspace design that inspires productivity and creativity</p>
                            <a href="<?php echo page_url('portfolio'); ?>" class="btn">View Project</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-slide">
                    <img src="<?php echo ASSETS_PATH; ?>images/kitchen/kitchen_14.jpg"
                        alt="Contemporary Kitchen Design">
                    <div class="carousel-overlay">
                        <div class="carousel-content">
                            <h3>Contemporary Kitchen</h3>
                            <p>Functional and stylish kitchen with island design and premium appliances</p>
                            <a href="<?php echo page_url('portfolio'); ?>" class="btn">View Project</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-slide">
                    <img src="<?php echo ASSETS_PATH; ?>images/kitchen/kitchen_6.jpg"
                        alt="Dining Room Elegance Interior">
                    <div class="carousel-overlay">
                        <div class="carousel-content">
                            <h3>Fine Dining Restaurant</h3>
                            <p>Sophisticated restaurant interior with warm ambiance and elegant details</p>
                            <a href="<?php echo page_url('portfolio'); ?>" class="btn">View Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button class="carousel-nav carousel-prev" id="prevBtn">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="carousel-nav carousel-next" id="nextBtn">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Play/Pause Button -->
            <button class="carousel-play-pause" id="playPauseBtn">
                <i class="fas fa-pause"></i>
            </button>
        </div>

        <!-- Dots Indicator -->
        <div class="carousel-dots" id="carouselDots">
            <span class="carousel-dot active" data-slide="0"></span>
            <span class="carousel-dot" data-slide="1"></span>
            <span class="carousel-dot" data-slide="2"></span>
            <span class="carousel-dot" data-slide="3"></span>
            <span class="carousel-dot" data-slide="4"></span>
        </div>
    </div>
</section>

<!-- Portfolio Preview Section -->
<section class="section" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Recent Projects</h2>
            <p>Take a look at some of our latest interior design transformations</p>
        </div>
        <div class="portfolio-filters" data-aos="fade-up" data-aos-delay="100">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="living">Living & TV Units</button>
            <button class="filter-btn" data-filter="bedroom">Bedrooms & Wardrobes</button>
            <button class="filter-btn" data-filter="kitchen">Modular Kitchens</button>
            <button class="filter-btn" data-filter="office">Study & Home-Office</button>
        </div>

        <div class="portfolio-grid">
            <!-- Living & TV Units - 3 Cards -->
            <div class="portfolio-item living" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_6.jpg" alt="Modern Living Room">
                <div class="portfolio-overlay">
                    <h3>Modern Living Room</h3>
                    <p>Contemporary Design</p>
                </div>
            </div>

            <div class="portfolio-item living" data-aos="fade-up" data-aos-delay="150">
                <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_35.jpg" alt="Classic TV Unit">
                <div class="portfolio-overlay">
                    <h3>Classic TV Unit</h3>
                    <p>Elegant & Functional</p>
                </div>
            </div>

            <div class="portfolio-item living" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_20.jpg" alt="Premium Living Space">
                <div class="portfolio-overlay">
                    <h3>Premium Living Space</h3>
                    <p>Luxury Design</p>
                </div>
            </div>

            <!-- Bedrooms & Wardrobes - 3 Cards -->
            <div class="portfolio-item bedroom" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php echo ASSETS_PATH; ?>images/bedroom/bedroom_6.jpg" alt="Master Bedroom">
                <div class="portfolio-overlay">
                    <h3>Master Bedroom</h3>
                    <p>Luxury & Comfort</p>
                </div>
            </div>

            <div class="portfolio-item bedroom" data-aos="fade-up" data-aos-delay="150">
                <img src="<?php echo ASSETS_PATH; ?>images/wardrobe/wardrobe_2.jpg" alt="Cozy Bedroom">
                <div class="portfolio-overlay">
                    <h3>Cozy Wardrobe</h3>
                    <p>Warm & Inviting</p>
                </div>
            </div>

            <div class="portfolio-item bedroom" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo ASSETS_PATH; ?>images/wardrobe/wardrobe_39.jpg" alt="Walk-in Wardrobe">
                <div class="portfolio-overlay">
                    <h3>Walk-in Wardrobe</h3>
                    <p>Custom Storage</p>
                </div>
            </div>

            <!-- Modular Kitchens - 3 Cards -->
            <div class="portfolio-item kitchen" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php echo ASSETS_PATH; ?>images/kitchen/kitchen_1.jpg" alt="Modern Kitchen">
                <div class="portfolio-overlay">
                    <h3>Modern Kitchen</h3>
                    <p>Contemporary & Functional</p>
                </div>
            </div>

            <div class="portfolio-item kitchen" data-aos="fade-up" data-aos-delay="150">
                <img src="<?php echo ASSETS_PATH; ?>images/kitchen/kitchen_15.jpg" alt="Classic Kitchen">
                <div class="portfolio-overlay">
                    <h3>Classic Kitchen</h3>
                    <p>Timeless Elegance</p>
                </div>
            </div>

            <div class="portfolio-item kitchen" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo ASSETS_PATH; ?>images/kitchen/kitchen_7.jpg" alt="Premium Kitchen">
                <div class="portfolio-overlay">
                    <h3>Premium Kitchen</h3>
                    <p>Luxury Finishes</p>
                </div>
            </div>

            <!-- Study & Home-Office - 3 Cards -->
            <div class="portfolio-item office" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php echo ASSETS_PATH; ?>images/corporate/corporate_10.jpg" alt="Home Office">
                <div class="portfolio-overlay">
                    <h3>Home Office</h3>
                    <p>Professional & Stylish</p>
                </div>
            </div>

            <div class="portfolio-item office" data-aos="fade-up" data-aos-delay="150">
                <img src="<?php echo ASSETS_PATH; ?>images/wardrobe/wardrobe_31.jpg" alt="Study Room">
                <div class="portfolio-overlay">
                    <h3>Study Room</h3>
                    <p>Focused Design</p>
                </div>
            </div>

            <div class="portfolio-item office" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo ASSETS_PATH; ?>images/corporate/corporate_7.jpg" alt="Creative Workspace">
                <div class="portfolio-overlay">
                    <h3>Creative Workspace</h3>
                    <p>Inspiring Design</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="<?php echo page_url('portfolio'); ?>" class="cta-button">View All Projects</a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Why Mahati Interior?</h2>
            <p>Contemporary designs that are practical and durable with premium materials and turnkey execution</p>
        </div>

        <div class="services-grid">
            <div class="home-card-clean" data-aos="fade-up" data-aos-delay="100">
                <div class="home-number">01</div>
                <div class="home-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3>Over 300+ Projects</h3>
                <p>Successfully completed 300+ interior design projects across Karnataka, Tamil Nadu & Andhra Pradesh
                    with satisfied clients</p>
            </div>

            <div class="home-card-clean" data-aos="fade-up" data-aos-delay="200">
                <div class="home-number">02</div>
                <div class="home-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h3>High Quality Materials</h3>
                <p>Premium boards & finishes with stringent quality control. Marine Plywood, HIGL, Laminated, HDHMR,
                    Laminates, Lacquer glass</p>
            </div>

            <div class="home-card-clean" data-aos="fade-up" data-aos-delay="300">
                <div class="home-number">03</div>
                <div class="home-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>On Time Delivery</h3>
                <p>Committed to delivering projects on schedule with professional project management and regular
                    progress updates</p>
            </div>

            <div class="home-card-clean" data-aos="fade-up" data-aos-delay="400">
                <div class="home-number">04</div>
                <div class="home-icon">
                    <i class="fas fa-wallet"></i>
                </div>
                <h3>Affordable Solutions</h3>
                <p>Contemporary & affordable design solutions for every budget without compromising on quality and style
                </p>
            </div>
        </div>
    </div>
</section>

<!-- YouTube Videos Section -->
<section class="youtube-videos section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Watch Our Work</h2>
            <p>See our interior design process and completed projects in action</p>
        </div>

        <div class="videos-grid">
            <div class="video-card" data-aos="fade-up" data-aos-delay="100">
                <div class="video-wrapper">
                    <iframe src="<?php echo YOUTUBE_VIDEO_1; ?>" title="Mahati Interior - Project Showcase 1"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-info">
                    <h3>Modern Home Transformation</h3>
                    <p>Watch how we transformed this modern home with contemporary design elements and premium finishes.
                    </p>
                </div>
            </div>

            <div class="video-card" data-aos="fade-up" data-aos-delay="200">
                <div class="video-wrapper">
                    <iframe src="<?php echo YOUTUBE_VIDEO_2; ?>" title="Mahati Interior - Project Showcase 2"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-info">
                    <h3>Luxury Interior Design Process</h3>
                    <p>Get an inside look at our design process from concept to completion for luxury residential
                        projects.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platform Stats Section -->
<section class="platform-stats-section section">
    <div class="container">
        <div class="platform-content">
            <div class="platform-text">
                <h2>Transform Your Space with Professional Design</h2>
                <p>Join thousands of satisfied customers across Karnataka, Tamil Nadu, and Andhra Pradesh who have
                    transformed their homes with our professional interior design services.</p>
            </div>
            <div class="platform-image">
                <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_28.jpg" alt="Modern Interior">
            </div>
        </div>
        <div class="platform-stats">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <span class="stat-number">300+</span>
                <span class="stat-label">Projects</span>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <span class="stat-number">60K+</span>
                <span class="stat-label">Happy Clients</span>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <span class="stat-number">80+</span>
                <span class="stat-label">Designs</span>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                <span class="stat-number">12K+</span>
                <span class="stat-label">Reviews</span>
            </div>
        </div>
    </div>
</section>

<!-- Trusted Partners Section -->
<section class="trusted-partner section">
    <div class="container">
        <div class="title-content" data-aos="fade-up">
            <h2>TRUSTED PARTNERS</h2>
            <p class="main-description">
                We collaborate with leading brands and suppliers to bring you the finest materials and furnishings for
                your interior projects. Our partnerships ensure quality, reliability, and access to the latest design
                trends and innovations in the industry.
            </p>
        </div>

        <!-- Scrolling Logos Section -->
        <div class="scrolling-logos-container">
            <div class="logo-track">
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_01.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_02.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_03.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_04.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_05.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_06.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_01.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_02.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_03.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_04.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_05.png" alt="">
                </div>
                <div class="logo-item">
                    <img src="<?php echo ASSETS_PATH; ?>images/logos/partner_06.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="categories section">
    <div class="container">
        <h2 data-aos="fade-up">CATEGORIES</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Explore our diverse range of interior design
            categories to find the perfect style for your space</p>
        <div class="categories-grid">
            <div class="category-card" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_29.png" alt="Living Room">
                <div class="category-overlay">
                    <h3>LIVING ROOM</h3>
                </div>
            </div>
            <div class="category-card" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo ASSETS_PATH; ?>images/kitchen/kitchen_6.jpg" alt="Kitchen">
                <div class="category-overlay">
                    <h3>KITCHEN</h3>
                </div>
            </div>
            <div class="category-card" data-aos="fade-up" data-aos-delay="300">
                <img src="<?php echo ASSETS_PATH; ?>images/bedroom/bedroom_3.jpg" alt="Bedroom">
                <div class="category-overlay">
                    <h3>BEDROOM</h3>
                </div>
            </div>
            <div class="category-card" data-aos="fade-up" data-aos-delay="400">
                <img src="<?php echo ASSETS_PATH; ?>images/bedroom/bedroom_2.jpg" alt="Bathroom">
                <div class="category-overlay">
                    <h3>BATHROOM</h3>
                </div>
            </div>
            <div class="category-card" data-aos="fade-up" data-aos-delay="500">
                <img src="<?php echo ASSETS_PATH; ?>images/corporate/corporate_9.jpg" alt="Office">
                <div class="category-overlay">
                    <h3>Office</h3>
                </div>
            </div>
            <div class="category-card" data-aos="fade-up" data-aos-delay="600">
                <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_36.jpg" alt="Dining">
                <div class="category-overlay">
                    <h3>DINING ROOM</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Questions Section -->
<section class="questions section">
    <div class="container">
        <div class="questions-content">
            <div class="questions-text" data-aos="fade-right">
                <h2>HAVE ANY<br>QUESTIONS?</h2>
                <p>We're here to help you with any questions about our interior design services. Get in touch with our
                    expert team.</p>
                <ul class="questions-list">
                    <li>Free consultation available</li>
                    <li>Expert design advice</li>
                    <li>Custom design solutions</li>
                    <li>Professional project management</li>
                </ul>
                <a href="<?php echo page_url('contact'); ?>" class="contact-button">Contact Us</a>
            </div>
            <div class="questions-image" data-aos="fade-left">
                <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_18.jpg"
                    alt="Interior Design Consultation">
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our Design Process</h2>
            <p>Mahati's systematic approach to creating your perfect space</p>
        </div>
        <div class="process-timeline">
            <div class="process-step" data-aos="fade-right">
                <div class="step-number">01</div>
                <div class="step-content">
                    <h4>Discovery & Consultation</h4>
                    <p>Mahati begins with an in-depth consultation to understand your lifestyle, preferences, and
                        project goals.</p>
                </div>
            </div>
            <div class="process-step" data-aos="fade-left">
                <div class="step-number">02</div>
                <div class="step-content">
                    <h4>Concept Development</h4>
                    <p>Our team creates initial design concepts, mood boards, and space planning solutions tailored to
                        your needs under Mahati's creative guidance.</p>
                </div>
            </div>
            <div class="process-step" data-aos="fade-right">
                <div class="step-number">03</div>
                <div class="step-content">
                    <h4>Design Refinement</h4>
                    <p>Mahati refines the design based on your feedback, creating detailed plans and 3D visualizations.
                    </p>
                </div>
            </div>
            <div class="process-step" data-aos="fade-left">
                <div class="step-number">04</div>
                <div class="step-content">
                    <h4>Implementation</h4>
                    <p>Our project management team oversees the entire implementation process under Mahati's
                        supervision, ensuring quality and timeline adherence.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Customer Review Section -->
<section class="reviews section">
    <div class="container">
        <h2 data-aos="fade-up">CUSTOMER REVIEW</h2>
        <div class="review-card" data-aos="fade-up" data-aos-delay="200">
            <div class="review-content">
                <div class="review-text">
                    <p>"The interior design team transformed our home beyond our expectations. Their attention to detail
                        and creative vision made our space both beautiful and functional."</p>
                    <div class="reviewer">
                        <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_32.jpg" alt="Sarah Johnson">
                        <div class="reviewer-info">
                            <h4>SARAH JOHNSON</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-images">
                    <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_22.jpg" alt="Before">
                    <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_32.jpg" alt="After">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter section">
    <div class="container">
        <h2 data-aos="fade-up">DON'T MISS A<br>THING</h2>
        <p data-aos="fade-up" data-aos-delay="100">Subscribe to our newsletter for the latest interior design trends,
            tips, and exclusive offers.</p>
        <form class="newsletter-form" method="POST" action="<?php echo SITE_URL; ?>/mahati/includes/form-handler.php"
            data-aos="fade-up" data-aos-delay="200">
            <input type="hidden" name="form_type" value="newsletter">
            <input type="hidden" name="<?php echo CSRF_TOKEN_NAME; ?>" value="<?php echo generate_csrf_token(); ?>">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: linear-gradient(135deg, #ff6b35, #f7931e); color: white;">
    <div class="container">
        <div style="text-align: center;" data-aos="fade-up">
            <h2 style="color: white; margin-bottom: 1rem;">Ready to Transform Your Space?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">Book a free design consultation and let's
                create a home you'll love</p>
            <a href="<?php echo page_url('contact'); ?>" class="btn"
                style="background: white; color: #ff6b35; font-weight: 600;">Book Free Consultation</a>
        </div>
    </div>
</section>