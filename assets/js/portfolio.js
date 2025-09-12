/**
 * Portfolio Page JavaScript - Mahati Interior Design
 * Handles portfolio filtering, modal functionality, and image interactions
 * Author: Mahati Design Team
 * Last Updated: 2025
 */

document.addEventListener('DOMContentLoaded', function() {
    initPortfolioFilter();
    initModal();
    initImageExpansion();
});

/**
 * Initialize portfolio filtering functionality
 */
function initPortfolioFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            // Filter portfolio items with animation
            portfolioItems.forEach((item, index) => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
}

/**
 * Initialize modal functionality
 */
function initModal() {
    const modal = document.getElementById('projectModal');
    const closeBtn = modal.querySelector('.close');
    
    // Close modal when clicking close button
    closeBtn.addEventListener('click', closeModal);
    
    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.style.display === 'block') {
            closeModal();
        }
    });
}

/**
 * Open project modal with details
 */
function openModal(projectId) {
    const modal = document.getElementById('projectModal');
    const modalContent = document.getElementById('modalContent');
    
    // Project details data
    const projectData = {
        'project1': {
            title: 'Modern Luxury Villa',
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
            title: 'Tech Startup Office',
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
        },
        'project3': {
            title: 'Minimalist Kitchen',
            category: 'Residential • Modern',
            location: 'Delhi, India',
            area: '800 sq ft',
            year: '2024',
            description: 'A contemporary kitchen design that emphasizes functionality and clean aesthetics. The space features premium appliances and custom storage solutions.',
            services: ['Kitchen Design', 'Custom Cabinetry', 'Appliance Selection', 'Storage Solutions'],
            highlights: [
                'Island design with breakfast bar',
                'Premium German appliances',
                'Custom storage solutions',
                'Quartz countertops',
                'Under-cabinet LED lighting'
            ]
        },
        'project4': {
            title: 'Luxury Master Suite',
            category: 'Residential • Luxury',
            location: 'Chennai, India',
            area: '1,200 sq ft',
            year: '2024',
            description: 'An elegant master bedroom suite that serves as a private retreat. The design emphasizes comfort and luxury with premium materials and sophisticated color palette.',
            services: ['Bedroom Design', 'Walk-in Closet', 'En-suite Bathroom', 'Custom Storage'],
            highlights: [
                'King-size custom bed with upholstered headboard',
                'Walk-in wardrobe with LED lighting',
                'Private sitting area with city views',
                'Luxury en-suite with marble finishes',
                'Automated curtains and climate control'
            ]
        },
        'project5': {
            title: 'Upscale Restaurant',
            category: 'Commercial • Modern',
            location: 'Pune, India',
            area: '3,000 sq ft',
            year: '2024',
            description: 'A fine dining restaurant design that creates an intimate and sophisticated atmosphere. The space features custom lighting and premium finishes.',
            services: ['Restaurant Design', 'Custom Lighting', 'Furniture Selection', 'Acoustic Design'],
            highlights: [
                'Custom lighting design for ambiance',
                'Premium leather seating',
                'Open kitchen concept',
                'Wine display feature wall',
                'Acoustic treatment for comfort'
            ]
        },
        'project6': {
            title: 'Contemporary Bathroom',
            category: 'Residential • Modern',
            location: 'Hyderabad, India',
            area: '400 sq ft',
            year: '2024',
            description: 'A spa-like bathroom design that combines modern fixtures with natural materials. The space emphasizes relaxation and luxury.',
            services: ['Bathroom Design', 'Fixture Selection', 'Tile Design', 'Lighting Design'],
            highlights: [
                'Freestanding soaking tub',
                'Walk-in rain shower',
                'Natural stone finishes',
                'Heated floors',
                'Smart mirror with integrated lighting'
            ]
        }
    };
    
    const project = projectData[projectId];
    if (project) {
        modalContent.innerHTML = `
            <div class="modal-project">
                <h2>${project.title}</h2>
                <div class="project-meta">
                    <span class="meta-item"><i class="fas fa-tag"></i> ${project.category}</span>
                    <span class="meta-item"><i class="fas fa-map-marker-alt"></i> ${project.location}</span>
                    <span class="meta-item"><i class="fas fa-ruler-combined"></i> ${project.area}</span>
                    <span class="meta-item"><i class="fas fa-calendar"></i> ${project.year}</span>
                </div>
                
                <div class="project-description">
                    <p>${project.description}</p>
                </div>
                
                <div class="project-services">
                    <h4>Services Provided:</h4>
                    <div class="service-tags">
                        ${project.services.map(service => `<span class="service-tag">${service}</span>`).join('')}
                    </div>
                </div>
                
                <div class="project-highlights">
                    <h4>Project Highlights:</h4>
                    <ul>
                        ${project.highlights.map(highlight => `<li>${highlight}</li>`).join('')}
                    </ul>
                </div>
            </div>
        `;
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
}

/**
 * Close project modal
 */
function closeModal() {
    const modal = document.getElementById('projectModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

/**
 * Initialize image expansion functionality
 */
function initImageExpansion() {
    // This function is called from the expandImage button click
}

/**
 * Expand image in lightbox
 */
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
        opacity: 0;
        transition: opacity 0.3s ease;
    `;
    
    const lightboxImg = document.createElement('img');
    lightboxImg.src = img.src;
    lightboxImg.alt = img.alt;
    lightboxImg.style.cssText = `
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
        border-radius: 8px;
        box-shadow: 0 25px 50px rgba(0,0,0,0.5);
        transform: scale(0.8);
        transition: transform 0.3s ease;
    `;
    
    const closeButton = document.createElement('button');
    closeButton.innerHTML = '&times;';
    closeButton.style.cssText = `
        position: absolute;
        top: 20px;
        right: 30px;
        background: none;
        border: none;
        color: white;
        font-size: 40px;
        cursor: pointer;
        z-index: 10000;
    `;
    
    lightbox.appendChild(lightboxImg);
    lightbox.appendChild(closeButton);
    document.body.appendChild(lightbox);
    
    // Animate in
    setTimeout(() => {
        lightbox.style.opacity = '1';
        lightboxImg.style.transform = 'scale(1)';
    }, 10);
    
    // Close lightbox functions
    const closeLightbox = () => {
        lightbox.style.opacity = '0';
        lightboxImg.style.transform = 'scale(0.8)';
        setTimeout(() => {
            document.body.removeChild(lightbox);
        }, 300);
    };
    
    lightbox.addEventListener('click', closeLightbox);
    closeButton.addEventListener('click', closeLightbox);
    
    // Prevent image click from closing lightbox
    lightboxImg.addEventListener('click', (e) => {
        e.stopPropagation();
    });
    
    // Close with Escape key
    const handleKeydown = (e) => {
        if (e.key === 'Escape') {
            closeLightbox();
            document.removeEventListener('keydown', handleKeydown);
        }
    };
    document.addEventListener('keydown', handleKeydown);
}

/**
 * Change main featured image
 */
function changeMainImage(thumbnail) {
    const mainImage = document.querySelector('.featured-images .main-image img');
    if (mainImage && thumbnail) {
        // Add fade effect
        mainImage.style.opacity = '0';
        setTimeout(() => {
            mainImage.src = thumbnail.src;
            mainImage.alt = thumbnail.alt;
            mainImage.style.opacity = '1';
        }, 200);
        
        // Update active thumbnail
        document.querySelectorAll('.thumbnail-images img').forEach(img => {
            img.classList.remove('active');
        });
        thumbnail.classList.add('active');
    }
}
