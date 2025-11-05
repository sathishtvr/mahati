<?php
/**
 * Portfolio page for Mahati Interior Design Website
 */

// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
?>

<!-- Portfolio Hero Section -->
<section class="portfolio-hero section">
    <img src="<?php echo ASSETS_PATH; ?>images/bedroom-cozy-decor.jpg" alt="Our Portfolio" class="hero-bg-image">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <h1>Our Portfolio</h1>
            <p>A peek into our 300+ completed projects across South India</p>
        </div>
    </div>
</section>

<!-- Portfolio Filter -->
<section class="portfolio-filter section">
    <div class="container">
        <div class="filter-buttons" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="living">Living & TV Units</button>
            <button class="filter-btn" data-filter="bedroom">Bedrooms & Wardrobes</button>
            <button class="filter-btn" data-filter="kitchen">Modular Kitchens</button>
            <button class="filter-btn" data-filter="office">Study & Home-Office</button>
        </div>
    </div>
</section>

<!-- Portfolio Gallery -->
<section class="portfolio-gallery section">
    <div class="container">
        <div class="gallery-grid">
            <!-- Project 1 -->
            <div class="portfolio-item residential luxury living" data-aos="fade-up">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/modern-living-room-interior.jpg" alt="Modern Living Room">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Elegant Living Space</h3>
                            <p>Luxury Residential</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('project1')">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="expand-btn" onclick="expandImage(this)">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-info">
                    <h4>Modern Luxury Villa</h4>
                    <span class="project-category">Residential • Luxury</span>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="portfolio-item commercial modern office" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/corporate.jpeg" alt="Office Space">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Corporate Office</h3>
                            <p>Commercial Design</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('project2')">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="expand-btn" onclick="expandImage(this)">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-info">
                    <h4>Tech Startup Office</h4>
                    <span class="project-category">Commercial • Modern</span>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="portfolio-item residential modern kitchen" data-aos="fade-up" data-aos-delay="400">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/kitchen-contemporary-design.jpg" alt="Modern Kitchen">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Contemporary Kitchen</h3>
                            <p>Modern Residential</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('project3')">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="expand-btn" onclick="expandImage(this)">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-info">
                    <h4>Minimalist Kitchen</h4>
                    <span class="project-category">Residential • Modern</span>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="portfolio-item luxury residential bedroom" data-aos="fade-up">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/luxury-bedroom-design.jpg" alt="Luxury Bedroom">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Master Bedroom</h3>
                            <p>Luxury Suite</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('project4')">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="expand-btn" onclick="expandImage(this)">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-info">
                    <h4>Luxury Master Suite</h4>
                    <span class="project-category">Residential • Luxury</span>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="portfolio-item commercial modern" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/dining-room-classic-layout.jpg" alt="Restaurant Interior">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Fine Dining Restaurant</h3>
                            <p>Commercial Space</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('project5')">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="expand-btn" onclick="expandImage(this)">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-info">
                    <h4>Upscale Restaurant</h4>
                    <span class="project-category">Commercial • Modern</span>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="portfolio-item residential modern" data-aos="fade-up" data-aos-delay="400">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/bathroom-elegant-style.jpg" alt="Modern Bathroom">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Spa-like Bathroom</h3>
                            <p>Modern Residential</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('project6')">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="expand-btn" onclick="expandImage(this)">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-info">
                    <h4>Contemporary Bathroom</h4>
                    <span class="project-category">Residential • Modern</span>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Client Testimonials -->
<section class="portfolio-testimonials section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>What Our Clients Say</h2>
            <p>Real feedback from satisfied clients about their design journey with us</p>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card" data-aos="fade-up">
                <div class="testimonial-content">
                    <p>"Mahati transformed our home beyond our wildest dreams. Their attention to detail and creative vision is unmatched."</p>
                </div>
                <div class="testimonial-author">
                    <img src="<?php echo ASSETS_PATH; ?>images/client1.jpg" alt="Sarah Johnson">
                    <div class="author-info">
                        <h5>Sarah Johnson</h5>
                        <span>Penthouse Owner</span>
                    </div>
                </div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-content">
                    <p>"Professional, creative, and delivered exactly what we envisioned. Our office space has never looked better."</p>
                </div>
                <div class="testimonial-author">
                    <img src="<?php echo ASSETS_PATH; ?>images/client2.jpg" alt="Michael Chen">
                    <div class="author-info">
                        <h5>Michael Chen</h5>
                        <span>CEO, Tech Startup</span>
                    </div>
                </div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="400">
                <div class="testimonial-content">
                    <p>"From concept to completion, the team was exceptional. They truly understand luxury design and execution."</p>
                </div>
                <div class="testimonial-author">
                    <img src="<?php echo ASSETS_PATH; ?>images/client3.jpg" alt="Emily Rodriguez">
                    <div class="author-info">
                        <h5>Emily Rodriguez</h5>
                        <span>Restaurant Owner</span>
                    </div>
                </div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="portfolio-cta section">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Ready to Create Your Dream Space?</h2>
            <p>Let's discuss your project and bring your vision to life with our expert design team</p>
            <div class="cta-buttons">
                <a href="<?php echo page_url('contact'); ?>" class="cta-button primary">Start Your Project</a>
                <a href="<?php echo page_url('services'); ?>" class="cta-button secondary">View Services</a>
            </div>
        </div>
    </div>
</section>

<!-- Project Modal -->
<div id="projectModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id="modalContent">
            <!-- Dynamic content will be loaded here -->
        </div>
    </div>
</div>

<!-- Portfolio JavaScript -->
<script src="<?php echo ASSETS_PATH; ?>js/portfolio.js"></script>

<script>
// Featured project image change functionality
function changeMainImage(thumbnail) {
    const mainImage = document.querySelector('.featured-images .main-image img');
    if (mainImage && thumbnail) {
        mainImage.src = thumbnail.src;
        mainImage.alt = thumbnail.alt;
    }
}

// Portfolio filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeIn 0.5s ease';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});

// Modal functionality
function openModal(projectId) {
    const modal = document.getElementById('projectModal');
    const modalContent = document.getElementById('modalContent');
    
    // Project details data
    const projectData = {
        'project1': {
            title: 'Modern Living Room Design',
            category: 'Residential • Luxury',
            location: 'Mumbai, India',
            area: '2,500 sq ft',
            year: '2024',
            description: 'A sophisticated living space that combines contemporary aesthetics with luxury comfort. This project showcases our expertise in creating open-concept designs that maximize natural light while maintaining intimate conversation areas.',
            services: ['Interior Design', 'Space Planning', 'Custom Furniture', 'Lighting Design'],
            highlights: [
                'Open-concept layout with defined zones',
                'Custom-designed entertainment unit',
                'Premium Italian marble flooring',
                'Smart lighting control system',
                'Curated art collection display'
            ]
        },
        'project2': {
            title: 'Luxury Master Bedroom Suite',
            category: 'Residential • Luxury',
            location: 'Delhi, India',
            area: '1,800 sq ft',
            year: '2024',
            description: 'An elegant master bedroom that serves as a private retreat. The design emphasizes comfort and luxury with premium materials and sophisticated color palette.',
            services: ['Bedroom Design', 'Walk-in Closet', 'En-suite Bathroom', 'Custom Storage'],
            highlights: [
                'King-size custom bed with upholstered headboard',
                'Walk-in wardrobe with LED lighting',
                'Private sitting area with city views',
                'Luxury en-suite with marble finishes',
                'Automated curtains and climate control'
            ]
        },
        'project3': {
            title: 'Corporate Office Design',
            category: 'Commercial • Modern',
            location: 'Bangalore, India',
            area: '5,000 sq ft',
            year: '2024',
            description: 'A modern corporate office that promotes productivity and collaboration. The design incorporates biophilic elements and flexible workspaces to create an inspiring work environment.',
            services: ['Office Design', 'Space Planning', 'Furniture Selection', 'Branding Integration'],
            highlights: [
                'Open collaborative workspaces',
                'Private meeting rooms with AV integration',
                'Biophilic design with living walls',
                'Ergonomic furniture throughout',
                'Brand-integrated design elements'
            ]
        }
    };
    
    const project = projectData[projectId];
    if (project) {
        modalContent.innerHTML = `
            <div class="modal-project">
                <h2>${project.title}</h2>
                <div class="project-meta" style="margin: 1rem 0; display: flex; gap: 2rem; flex-wrap: wrap;">
                    <span><i class="fas fa-tag"></i> ${project.category}</span>
                    <span><i class="fas fa-map-marker-alt"></i> ${project.location}</span>
                    <span><i class="fas fa-ruler-combined"></i> ${project.area}</span>
                    <span><i class="fas fa-calendar"></i> ${project.year}</span>
                </div>
                
                <div class="project-description" style="margin: 2rem 0;">
                    <p>${project.description}</p>
                </div>
                
                <div class="project-services" style="margin: 2rem 0;">
                    <h4>Services Provided:</h4>
                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 0.5rem;">
                        ${project.services.map(service => `<span style="background: #ff6b35; color: white; padding: 0.25rem 0.75rem; border-radius: 15px; font-size: 0.9rem;">${service}</span>`).join('')}
                    </div>
                </div>
                
                <div class="project-highlights" style="margin: 2rem 0;">
                    <h4>Project Highlights:</h4>
                    <ul style="margin-top: 0.5rem; padding-left: 1.5rem;">
                        ${project.highlights.map(highlight => `<li style="margin-bottom: 0.5rem;">${highlight}</li>`).join('')}
                    </ul>
                </div>
            </div>
        `;
        modal.style.display = 'block';
    }
}

function closeModal() {
    document.getElementById('projectModal').style.display = 'none';
}

function expandImage(button) {
    const portfolioItem = button.closest('.portfolio-item');
    const img = portfolioItem.querySelector('img');
    
    // Create lightbox
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        cursor: pointer;
    `;
    
    const lightboxImg = document.createElement('img');
    lightboxImg.src = img.src;
    lightboxImg.alt = img.alt;
    lightboxImg.style.cssText = `
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
        border-radius: 8px;
    `;
    
    lightbox.appendChild(lightboxImg);
    document.body.appendChild(lightbox);
    
    // Close lightbox on click
    lightbox.addEventListener('click', function() {
        document.body.removeChild(lightbox);
    });
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('projectModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>
