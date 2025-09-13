<?php
/**
 * Services page for Mahati Interior Design Website
 */

// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
?>

<!-- Services Hero Section -->
<section class="services-hero section">
    <img src="<?php echo ASSETS_PATH; ?>images/gallary.jpg" alt="Our Services" class="hero-bg-image">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <h1>Turnkey Interior Solutions</h1>
            <p>Design & Consultation – requirement study, concepts, 3D views, material specs</p>
        </div>
    </div>
</section>

<!-- Main Services Section -->
<section class="main-services section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our Services</h2>
            <p>Comprehensive interior design solutions tailored to your needs</p>
        </div>
        
        <div class="services-grid">
            

            <!-- Our Values Card -->
            <div class="services-card-clean" data-aos="fade-up" data-aos-delay="400">
                <div class="services-number">01</div>
                <div class="services-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Our Values</h3>
                <p>Quality interior design solutions with lifetime warranty. Specialized after-sales service with highest quality standards. Customer satisfaction at every stage.</p>
                <a href="<?php echo page_url('contact'); ?>" class="services-btn-clean">Read More</a>
            </div>

            <!-- Residential Design Card -->
            <div class="services-card-clean" data-aos="fade-up" data-aos-delay="600">
                <div class="services-number">02</div>
                <div class="services-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3>Residential Design</h3>
                <p>Living & dining spaces, Modular kitchens & utility, Bedrooms & wardrobes, Study/home-office & kids' rooms</p>
                <a href="<?php echo page_url('contact'); ?>" class="services-btn-clean">Read More</a>
            </div>

            <!-- Office / Commercial Card -->
            <div class="services-card-clean" data-aos="fade-up" data-aos-delay="800">
                <div class="services-number">03</div>
                <div class="services-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Office / Commercial</h3>
                <p>Reception & cabins, Workstations & storage, Conference/meeting rooms, Breakout zones & pantries</p>
                <a href="<?php echo page_url('contact'); ?>" class="services-btn-clean">Read More</a>
            </div>

            <!-- Design Consultation Card -->
            <div class="services-card-clean" data-aos="fade-up" data-aos-delay="1000">
                <div class="services-number">04</div>
                <div class="services-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <h3>Design Consultation</h3>
                <p>Space planning, color consultation, furniture layout, material selection and complete design guidance</p>
                <a href="<?php echo page_url('contact'); ?>" class="services-btn-clean">Read More</a>
            </div>

        </div>
    </div>
</section>

<!-- Homes for Every Budget Section -->
<section class="budget-homes section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Homes for every budget</h2>
            <p>Our interior designers work with you keeping in mind your requirements and budget</p>
            <div class="budget-cta-header">
                <a href="<?php echo page_url('contact'); ?>" class="cta-button">GET FREE QUOTE</a>
            </div>
        </div>
        
        <div class="budget-carousel-container" data-aos="fade-up" data-aos-delay="200">
            <div class="budget-carousel">
                <div class="budget-carousel-track">
                    <!-- 2BHK Package -->
                    <div class="budget-card">
                        <div class="budget-image">
                            <img src="<?php echo ASSETS_PATH; ?>images/modern-living-room-interior.jpg" alt="2BHK Interior">
                            <div class="budget-badge">Starting at 3.5L*</div>
                        </div>
                        <div class="budget-content">
                            <h3>Contemporary 2BHK Apartment Design with Modern Kitchen</h3>
                            <div class="budget-details">
                                <div class="budget-scope">
                                    <strong>Scope:</strong> Full Home, Kitchen, Modular Wardrobe
                                </div>
                                <div class="budget-bhk">
                                    <strong>BHK:</strong> 2 BHK
                                </div>
                                <!-- <div class="budget-pricing">
                                    <strong>Pricing:</strong> 20 - 30 Lakhs
                                </div> -->
                            </div>
                            <button class="budget-cta-btn">Get This Design</button>
                        </div>
                    </div>
                    
                    <!-- 3BHK Package -->
                    <div class="budget-card">
                        <div class="budget-image">
                            <img src="<?php echo ASSETS_PATH; ?>images/luxury-bedroom-design.jpg" alt="3BHK Interior">
                            <div class="budget-badge">Starting at 4.2L*</div>
                        </div>
                        <div class="budget-content">
                            <h3>3BHK Independent House Design in Hyderabad with Parallel Kitchen</h3>
                            <div class="budget-details">
                                <div class="budget-scope">
                                    <strong>Scope:</strong> Full Home, Kitchen, Modular Wardrobe
                                </div>
                                <div class="budget-bhk">
                                    <strong>BHK:</strong> 3 BHK
                                </div>
                                <!-- <div class="budget-pricing">
                                    <strong>Pricing:</strong> 20 - 30 Lakhs
                                </div> -->
                            </div>
                            <button class="budget-cta-btn">Get This Design</button>
                        </div>
                    </div>
                    
                    <!-- 4BHK Package -->
                    <div class="budget-card">
                        <div class="budget-image">
                            <img src="<?php echo ASSETS_PATH; ?>images/dining-room-classic-layout.jpg" alt="4BHK Interior">
                            <div class="budget-badge">Starting at 4.8L*</div>
                        </div>
                        <div class="budget-content">
                            <h3>Contemporary 4BHK Apartment Design with Built-In TV Unit</h3>
                            <div class="budget-details">
                                <div class="budget-scope">
                                    <strong>Scope:</strong> Full Home, Kitchen, Kids Bedroom
                                </div>
                                <div class="budget-bhk">
                                    <strong>BHK:</strong> 4 BHK
                                </div>
                                <!-- <div class="budget-pricing">
                                    <strong>Pricing:</strong> 20 - 30 Lakhs
                                </div> -->
                            </div>
                            <button class="budget-cta-btn">Get This Design</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carousel Navigation -->
            <div class="carousel-nav">
                <button class="carousel-btn prev-btn" onclick="moveBudgetCarousel(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-btn next-btn" onclick="moveBudgetCarousel(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Estimate Section -->
<section class="estimate-section section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Get an estimate for your Bangalore home</h2>
            <p>Calculate the approximate cost of doing up your interiors.</p>
        </div>
        
        <div class="estimate-cards" data-aos="fade-up" data-aos-delay="100">
            <!-- Full Home Card -->
            <div class="estimate-card">
                <div class="estimate-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/carousel-5.jpg" alt="Full Home Interior" loading="lazy">
                </div>
                <div class="estimate-card-content">
                    <h3>Full Home</h3>
                    <p>End-to-end interior design for your entire home with premium materials and expert craftsmanship.</p>
                    <a href="#" class="estimate-btn">CALCULATE <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            
            <!-- Kitchen Card -->
            <div class="estimate-card">
                <div class="estimate-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/kitchen-contemporary-design.jpg" alt="Kitchen Design" loading="lazy">
                </div>
                <div class="estimate-card-content">
                    <h3>Kitchen</h3>
                    <p>Modern modular kitchen design with smart storage solutions and premium finishes.</p>
                    <a href="#" class="estimate-btn">CALCULATE <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            
            <!-- Wardrobe Card -->
            <div class="estimate-card">
                <div class="estimate-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/dining-room-classic-layout.jpg" alt="Wardrobe Design" loading="lazy">
                </div>
                <div class="estimate-card-content">
                    <h3>Wardrobe</h3>
                    <p>Custom wardrobe designs tailored to your space and storage needs.</p>
                    <a href="#" class="estimate-btn">CALCULATE <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        
        
    </div>
</section>

<!-- Specialized Services -->
<section class="specialized-services section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>360 Service Design, Installation & Everything In Between</h2>
            <p>From Consultation to design, development to project implementation, we offer turnkey projects executed in the best possible way. Our service also includes all allied interior work like ceiling to electrical wiring and wall covering to flooring and painting.</p>
        </div>
        
        <div class="specialized-grid">
            <div class="specialized-item" data-aos="fade-right">
                <div class="specialized-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <div class="specialized-content">
                    <h4>Color Consultation</h4>
                    <p>Expert color selection to create the perfect mood and atmosphere for your space.</p>
                </div>
            </div>
            
            <div class="specialized-item" data-aos="fade-left">
                <div class="specialized-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="specialized-content">
                    <h4>Lighting Design</h4>
                    <p>Strategic lighting solutions to enhance ambiance and functionality.</p>
                </div>
            </div>
            
            <div class="specialized-item" data-aos="fade-right">
                <div class="specialized-icon">
                    <i class="fas fa-couch"></i>
                </div>
                <div class="specialized-content">
                    <h4>Furniture Selection</h4>
                    <p>Curated furniture pieces that perfectly complement your design vision.</p>
                </div>
            </div>
            
            <div class="specialized-item" data-aos="fade-left">
                <div class="specialized-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="specialized-content">
                    <h4>Sustainable Design</h4>
                    <p>Eco-friendly design solutions that are both beautiful and environmentally conscious.</p>
                </div>
            </div>
            
            <div class="specialized-item" data-aos="fade-right">
                <div class="specialized-icon">
                    <i class="fas fa-cube"></i>
                </div>
                <div class="specialized-content">
                    <h4>3D Visualization</h4>
                    <p>Realistic 3D renderings to help you visualize your space before implementation.</p>
                </div>
            </div>
            
            <div class="specialized-item" data-aos="fade-left">
                <div class="specialized-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="specialized-content">
                    <h4>Project Management</h4>
                    <p>End-to-end project coordination ensuring timely and quality delivery.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="workflow-section">
    <div class="workflow-steps" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <h3>Our Service Process</h3>
            <div class="timeline">
                <div class="timeline-step">
                    <div class="step-number">1</div>
                    <div class="step-text">Meet a designer</div>
                </div>
                <div class="timeline-arrow"><i class="fas fa-chevron-right"></i></div>
                <div class="timeline-step">
                    <div class="step-number">2</div>
                    <div class="step-text">(10% payment)</br>Book Mahati</div>
                </div>
                <div class="timeline-arrow"><i class="fas fa-chevron-right"></i></div>
                <div class="timeline-step">
                    <div class="step-number">3</div>
                    <div class="step-text">(60% payment)</br>Execution begins</div>
                </div>
                <div class="timeline-arrow"><i class="fas fa-chevron-right"></i></div>
                <div class="timeline-step">
                    <div class="step-number">4</div>
                    <div class="step-text">(100% payment)</br>Final Installations</div>
                </div>
                <div class="timeline-arrow"><i class="fas fa-chevron-right"></i></div>
                <div class="timeline-step">
                    <div class="step-number">5</div>
                    <div class="step-text">Move in and enjoy!</div>
                </div>
            </div>
            <div class="text-center">
                <a href="<?php echo page_url('contact'); ?>" class="consultation-btn">BOOK A CONSULTATION</a>
            </div>
        </div>
    </div>
</section>