<?php
/**
 * Contact page for Mahati Interior Design Website
 */

// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
?>

<!-- Contact Hero Section -->
<section class="contact-hero section">
    <img src="<?php echo ASSETS_PATH; ?>images/portfolio-3.jpg" alt="Contact Us" class="hero-bg-image">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <h1>Let's Design a Home You'll Love</h1>
            <p>Book a Free Design Consultation - Tell us about your space, timeline, and budget. We'll create a personalized plan and handle everything end-to-end.</p>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-main section">
    <div class="container">
        <div class="contact-wrapper">
            <!-- Contact Info Sidebar -->
            <div class="contact-sidebar" data-aos="fade-right">
                <div class="sidebar-content">
                    <h2>Book a Free Design Consultation</h2>
                    <p>Bengaluru, India (Serving Karnataka, Tamil Nadu & Andhra Pradesh)</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <strong>Address:</strong> No 68, 4th cross, 9th main road<br>Muneshwar layout, Vaderahalli<br>Vidyaranyapura, Bangalore<br>Karnataka - 560097
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <strong>Phone:</strong> +91 98455 49933
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <strong>Email:</strong> Mahatiinterior@gmail.com
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="contact-text">
                                <strong>Website:</strong> mahatiinteriors.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form-section" data-aos="fade-left">
                <div class="form-container">
                    <h2>Start Your Project</h2>
                    <p>Fill out the form below and we'll get back to you within 24 hours</p>
                    
                    <form class="contact-form" id="contactForm" method="POST" action="<?php echo SITE_URL; ?>/mahati/includes/form-handler.php">
                        <input type="hidden" name="form_type" value="contact">
                        <input type="hidden" name="<?php echo CSRF_TOKEN_NAME; ?>" value="<?php echo generate_csrf_token(); ?>">
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required>
                                <span class="form-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required>
                                <span class="form-error"></span>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                                <span class="form-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                                <span class="form-error"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="projectType">Project Type *</label>
                            <select id="projectType" name="projectType" required>
                                <option value="">Select Project Type</option>
                                <option value="living">Living & TV Units</option>
                                <option value="bedroom">Bedrooms & Wardrobes</option>
                                <option value="kitchen">Modular Kitchens</option>
                                <option value="office">Study & Home-Office</option>
                                <option value="commercial">Office / Commercial</option>
                                <option value="consultation">Design Consultation</option>
                                <option value="other">Other</option>
                            </select>
                            <span class="form-error"></span>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="budget">Budget Range</label>
                                <select id="budget" name="budget">
                                    <option value="">Select Budget Range</option>
                                    <option value="25k-50k">₹25,000 - ₹50,000</option>
                                    <option value="50k-100k">₹50,000 - ₹1,00,000</option>
                                    <option value="100k-250k">₹1,00,000 - ₹2,50,000</option>
                                    <option value="250k+">₹2,50,000+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="timeline">Project Timeline</label>
                                <select id="timeline" name="timeline">
                                    <option value="">Select Timeline</option>
                                    <option value="asap">ASAP</option>
                                    <option value="1-3months">1-3 Months</option>
                                    <option value="3-6months">3-6 Months</option>
                                    <option value="6months+">6+ Months</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Project Details *</label>
                            <textarea id="message" name="message" rows="5" placeholder="Tell us about your project, space requirements, style preferences, and any specific needs..." required></textarea>
                            <span class="form-error"></span>
                            <div class="character-count">0 characters (minimum 10)</div>
                        </div>
                        
                        
                        <button type="submit" class="submit-btn">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-loading">
                                <i class="fas fa-spinner fa-spin"></i> Sending...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Find Our Studio</h2>
            <p>Visit us for a personalized consultation and see our design samples</p>
        </div>
    </div>
    <div class="map-container" data-aos="fade-up">
        <div class="map-placeholder">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0!2d77.6!3d12.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU0JzAwLjAiTiA3N8KwMzYnMDAuMCJF!5e0!3m2!1sen!2sin!4v1234567890!5m2!1sen!2sin" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- Connect With Us Section -->
<section class="connect-section section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Connect with us</h2>
            <p>Have questions or ready to start your project? We're here to help!</p>
        </div>
        <div class="connect-buttons" data-aos="fade-up" data-aos-delay="200">
            <a href="tel:+918045678900" class="connect-btn phone-btn">
                <i class="fas fa-phone"></i>
                <span>CALL NOW</span>
            </a>
            <a href="https://wa.me/918045678900" target="_blank" class="connect-btn whatsapp-btn">
                <i class="fab fa-whatsapp"></i>
                <span>WHATSAPP</span>
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions about our turnkey interior solutions and design process</p>
        </div>
        
        <div class="faq-container">
            <div class="questions-image" data-aos="fade-left">
                <img src="<?php echo ASSETS_PATH; ?>images/gallary.jpg" alt="Interior Design Consultation">
            </div>
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h4>How long does a typical interior design project take?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Project timelines vary based on scope and complexity. A single room typically takes 4-6 weeks, while a complete home renovation can take 3-6 months. We provide detailed timelines during the consultation phase.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-question">
                    <h4>Do you provide 3D visualizations of the design?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, we provide detailed 3D visualizations for all our projects. This helps you see exactly how your space will look before implementation begins, ensuring you're completely satisfied with the design.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <div class="faq-question">
                    <h4>What is included in your design consultation?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Our consultation includes space assessment, style discussion, budget planning, timeline overview, and initial design concepts. We also provide a detailed proposal outlining the project scope and investment required.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <div class="faq-question">
                    <h4>Do you handle project management and execution?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Absolutely! We provide end-to-end project management, coordinating with contractors, vendors, and suppliers. Our team ensures quality control and timely completion of all work.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up" data-aos-delay="800">
                <div class="faq-question">
                    <h4>Do you work within specific budgets?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes! We work with various budget ranges and will create a design plan that maximizes your investment. During consultation, we'll discuss your budget and provide options that work within your range.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Modal -->
<div id="successModal" class="modal">
    <div class="modal-content">
        <div class="success-icon">
            <i class="fas fa-check"></i>
        </div>
        <h3>Message Sent Successfully!</h3>
        <p>Thank you for contacting us. We'll get back to you within 24 hours to discuss your project.</p>
        <button class="modal-btn">Close</button>
    </div>
</div>

<script src="<?php echo ASSETS_PATH; ?>/js/contact.js" defer></script>
