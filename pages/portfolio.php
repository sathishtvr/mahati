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
    <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_16.jpg" alt="Our Portfolio" class="hero-bg-image">
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
        <div class="section-header" data-aos="fade-up">
            <h2 id="portfolio-title">All Projects</h2>
            <p id="portfolio-subtitle">Showcasing our finest interior design work across all categories</p>
        </div>
        <div class="gallery-grid">
            <!-- Living & TV Units - 3 Cards -->
            <div class="portfolio-item living" data-aos="fade-up">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_6.jpg" alt="Modern Living Room">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Modern Living Room</h3>
                            <p>Contemporary Design</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('living1')">
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
                    <h4>Modern Living Room</h4>
                    <span class="project-category">Living Room • Contemporary</span>
                </div>
            </div>

            <div class="portfolio-item living" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_35.jpg" alt="Classic TV Unit">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Classic TV Unit</h3>
                            <p>Elegant & Functional</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('living2')">
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
                    <h4>Classic TV Unit</h4>
                    <span class="project-category">Living Room • Classic</span>
                </div>
            </div>

            <div class="portfolio-item living" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/livingroom/livingroom_20.jpg" alt="Premium Living Space">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Premium Living Space</h3>
                            <p>Luxury Design</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('living3')">
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
                    <h4>Premium Living Space</h4>
                    <span class="project-category">Living Room • Luxury</span>
                </div>
            </div>

            <!-- Bedrooms & Wardrobes - 3 Cards -->
            <div class="portfolio-item bedroom" data-aos="fade-up">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/bedroom/bedroom_6.jpg" alt="Master Bedroom">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Master Bedroom</h3>
                            <p>Luxury & Comfort</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('bedroom1')">
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
                    <h4>Master Bedroom</h4>
                    <span class="project-category">Bedroom • Luxury</span>
                </div>
            </div>

            <div class="portfolio-item bedroom" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/wardrobe/wardrobe_2.jpg" alt="Cozy Wardrobe">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Cozy Wardrobe</h3>
                            <p>Warm & Inviting</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('bedroom2')">
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
                    <h4>Cozy Wardrobe</h4>
                    <span class="project-category">Bedroom • Modern</span>
                </div>
            </div>

            <div class="portfolio-item bedroom" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/wardrobe/wardrobe_39.jpg" alt="Walk-in Wardrobe">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Walk-in Wardrobe</h3>
                            <p>Custom Storage</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('bedroom3')">
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
                    <h4>Walk-in Wardrobe</h4>
                    <span class="project-category">Wardrobe • Custom</span>
                </div>
            </div>

            <!-- Modular Kitchens - 3 Cards -->
            <div class="portfolio-item kitchen" data-aos="fade-up">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/kitchen/kitchen_1.jpg" alt="Modern Kitchen">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Modern Kitchen</h3>
                            <p>Contemporary & Functional</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('kitchen1')">
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
                    <h4>Modern Kitchen</h4>
                    <span class="project-category">Kitchen • Contemporary</span>
                </div>
            </div>

            <div class="portfolio-item kitchen" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/kitchen/kitchen_15.jpg" alt="Classic Kitchen">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Classic Kitchen</h3>
                            <p>Timeless Elegance</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('kitchen2')">
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
                    <h4>Classic Kitchen</h4>
                    <span class="project-category">Kitchen • Classic</span>
                </div>
            </div>

            <div class="portfolio-item kitchen" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/kitchen/kitchen_7.jpg" alt="Premium Kitchen">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Premium Kitchen</h3>
                            <p>Luxury Finishes</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('kitchen3')">
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
                    <h4>Premium Kitchen</h4>
                    <span class="project-category">Kitchen • Luxury</span>
                </div>
            </div>

            <!-- Study & Home-Office - 3 Cards -->
            <div class="portfolio-item office" data-aos="fade-up">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/corporate/corporate_10.jpg" alt="Home Office">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Home Office</h3>
                            <p>Professional & Stylish</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('office1')">
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
                    <h4>Home Office</h4>
                    <span class="project-category">Office • Modern</span>
                </div>
            </div>

            <div class="portfolio-item office" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/wardrobe/wardrobe_31.jpg" alt="Study Room">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Study Room</h3>
                            <p>Focused Design</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('office2')">
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
                    <h4>Study Room</h4>
                    <span class="project-category">Study • Classic</span>
                </div>
            </div>

            <div class="portfolio-item office" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-image">
                    <img src="<?php echo ASSETS_PATH; ?>images/corporate/corporate_7.jpg" alt="Creative Workspace">
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h3>Creative Workspace</h3>
                            <p>Inspiring Design</p>
                            <div class="overlay-buttons">
                                <button class="view-btn" onclick="openModal('office3')">
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
                    <h4>Creative Workspace</h4>
                    <span class="project-category">Office • Creative</span>
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
                    <p>"Mahati transformed our home beyond our wildest dreams. Their attention to detail and creative
                        vision is unmatched."</p>
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
                    <p>"Professional, creative, and delivered exactly what we envisioned. Our office space has never
                        looked better."</p>
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
                    <p>"From concept to completion, the team was exceptional. They truly understand luxury design and
                        execution."</p>
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
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        const portfolioTitle = document.getElementById('portfolio-title');
        const portfolioSubtitle = document.getElementById('portfolio-subtitle');

        // Title and subtitle data for each filter
        const filterContent = {
            'all': {
                title: 'All Projects',
                subtitle: 'Showcasing our finest interior design work across all categories'
            },
            'living': {
                title: 'Living & TV Units',
                subtitle: 'Elegant living spaces designed for comfort and entertainment'
            },
            'bedroom': {
                title: 'Bedrooms & Wardrobes',
                subtitle: 'Serene bedroom designs with custom storage solutions'
            },
            'kitchen': {
                title: 'Modular Kitchens',
                subtitle: 'Functional and stylish kitchen designs for modern living'
            },
            'office': {
                title: 'Study & Home-Office',
                subtitle: 'Productive workspaces designed for focus and creativity'
            }
        };

        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                // Update title and subtitle
                if (filterContent[filter]) {
                    portfolioTitle.textContent = filterContent[filter].title;
                    portfolioSubtitle.textContent = filterContent[filter].subtitle;
                }

                // Filter portfolio items
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
            'living1': {
                title: 'Modern Living Room',
                category: 'Living Room • Contemporary',
                location: 'Mumbai, India',
                area: '600 sq ft',
                year: '2024',
                description: 'Contemporary living room with custom TV unit and entertainment center designed for modern living.',
                services: ['Living Room Design', 'Custom TV Unit', 'Lighting Design'],
                highlights: ['Custom entertainment unit', 'Ambient lighting system', 'Premium upholstery']
            },
            'living2': {
                title: 'Classic TV Unit',
                category: 'Living Room • Classic',
                location: 'Delhi, India',
                area: '550 sq ft',
                year: '2024',
                description: 'Elegant TV unit design with classic aesthetics and modern functionality.',
                services: ['TV Unit Design', 'Storage Solutions', 'Cable Management'],
                highlights: ['Classic wood finishes', 'Integrated storage', 'Hidden cable management']
            },
            'living3': {
                title: 'Premium Living Space',
                category: 'Living Room • Luxury',
                location: 'Pune, India',
                area: '700 sq ft',
                year: '2024',
                description: 'Premium entertainment unit with luxury finishes and smart features.',
                services: ['Entertainment Center', 'Smart Home Integration', 'Acoustic Design'],
                highlights: ['Premium materials', 'Smart home integration', 'Acoustic treatment']
            },
            'bedroom1': {
                title: 'Master Bedroom',
                category: 'Bedroom • Luxury',
                location: 'Hyderabad, India',
                area: '500 sq ft',
                year: '2024',
                description: 'Luxurious master bedroom with custom furniture and premium finishes.',
                services: ['Bedroom Design', 'Custom Furniture', 'Lighting Design'],
                highlights: ['Custom bed design', 'Premium fabrics', 'Mood lighting']
            },
            'bedroom2': {
                title: 'Cozy Bedroom',
                category: 'Bedroom • Modern',
                location: 'Chennai, India',
                area: '400 sq ft',
                year: '2024',
                description: 'Warm and inviting bedroom design with modern comfort.',
                services: ['Bedroom Design', 'Storage Solutions', 'Decor'],
                highlights: ['Warm color palette', 'Efficient storage', 'Cozy ambiance']
            },
            'bedroom3': {
                title: 'Walk-in Wardrobe',
                category: 'Wardrobe • Custom',
                location: 'Bangalore, India',
                area: '200 sq ft',
                year: '2024',
                description: 'Spacious walk-in wardrobe with custom storage solutions.',
                services: ['Wardrobe Design', 'Custom Storage', 'LED Lighting'],
                highlights: ['Custom shelving system', 'LED lighting', 'Premium finishes']
            },
            'kitchen1': {
                title: 'Modern Kitchen',
                category: 'Kitchen • Contemporary',
                location: 'Mumbai, India',
                area: '350 sq ft',
                year: '2024',
                description: 'Contemporary modular kitchen with sleek design and functionality.',
                services: ['Kitchen Design', 'Modular Units', 'Appliance Integration'],
                highlights: ['Modular cabinets', 'Quartz countertops', 'Built-in appliances']
            },
            'kitchen2': {
                title: 'Classic Kitchen',
                category: 'Kitchen • Classic',
                location: 'Delhi, India',
                area: '400 sq ft',
                year: '2024',
                description: 'Timeless kitchen design with classic elements and modern convenience.',
                services: ['Kitchen Design', 'Custom Cabinets', 'Storage Solutions'],
                highlights: ['Classic wood cabinets', 'Granite countertops', 'Efficient layout']
            },
            'kitchen3': {
                title: 'Premium Kitchen',
                category: 'Kitchen • Luxury',
                location: 'Pune, India',
                area: '500 sq ft',
                year: '2024',
                description: 'Premium kitchen with luxury finishes and high-end appliances.',
                services: ['Luxury Kitchen Design', 'Premium Appliances', 'Custom Solutions'],
                highlights: ['Premium materials', 'High-end appliances', 'Island counter']
            },
            'office1': {
                title: 'Home Office',
                category: 'Office • Modern',
                location: 'Hyderabad, India',
                area: '250 sq ft',
                year: '2024',
                description: 'Modern home office designed for productivity and style.',
                services: ['Office Design', 'Custom Desk', 'Storage Solutions'],
                highlights: ['Ergonomic furniture', 'Cable management', 'Ample storage']
            },
            'office2': {
                title: 'Study Room',
                category: 'Study • Classic',
                location: 'Chennai, India',
                area: '200 sq ft',
                year: '2024',
                description: 'Classic study room with focused design for concentration.',
                services: ['Study Design', 'Bookshelves', 'Lighting'],
                highlights: ['Custom bookshelves', 'Task lighting', 'Quiet ambiance']
            },
            'office3': {
                title: 'Creative Workspace',
                category: 'Office • Creative',
                location: 'Bangalore, India',
                area: '300 sq ft',
                year: '2024',
                description: 'Inspiring workspace designed for creativity and innovation.',
                services: ['Workspace Design', 'Creative Layout', 'Inspiration Board'],
                highlights: ['Creative layout', 'Inspiration wall', 'Flexible furniture']
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
        lightbox.addEventListener('click', function () {
            document.body.removeChild(lightbox);
        });
    }

    // Close modal when clicking outside
    window.onclick = function (event) {
        const modal = document.getElementById('projectModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>