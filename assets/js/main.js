// Main JavaScript for Mahati Interior Design Website

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Header scroll effect
    const header = document.querySelector('.header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.15)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
            }
        });
    }

    // Form validation and submission
    const contactForm = document.querySelector('#contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const firstName = document.querySelector('#firstName');
            const lastName = document.querySelector('#lastName');
            const email = document.querySelector('#email');
            const projectType = document.querySelector('#projectType');
            const message = document.querySelector('#message');

            let isValid = true;
            let errorMessage = '';

            // Reset previous error styles
            document.querySelectorAll('.form-group input, .form-group select, .form-group textarea').forEach(field => {
                field.style.borderColor = '#ecf0f1';
            });

            // Validate required fields
            if (!firstName.value.trim()) {
                firstName.style.borderColor = '#e74c3c';
                errorMessage = 'Please enter your first name.';
                isValid = false;
            }

            if (!lastName.value.trim()) {
                lastName.style.borderColor = '#e74c3c';
                errorMessage = 'Please enter your last name.';
                isValid = false;
            }

            if (!email.value.trim()) {
                email.style.borderColor = '#e74c3c';
                errorMessage = 'Please enter your email address.';
                isValid = false;
            } else if (!isValidEmail(email.value)) {
                email.style.borderColor = '#e74c3c';
                errorMessage = 'Please enter a valid email address.';
                isValid = false;
            }

            if (!projectType.value) {
                projectType.style.borderColor = '#e74c3c';
                errorMessage = 'Please select a project type.';
                isValid = false;
            }

            if (!message.value.trim()) {
                message.style.borderColor = '#e74c3c';
                errorMessage = 'Please enter your message.';
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
                showAlert(errorMessage, 'error');
                return false;
            }
        });
    }

    // Newsletter form validation
    const newsletterForm = document.querySelector('#newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            const email = document.querySelector('#newsletter-email');
            
            if (!email.value.trim()) {
                e.preventDefault();
                email.style.borderColor = '#e74c3c';
                showAlert('Please enter your email address.', 'error');
                return false;
            }

            if (!isValidEmail(email.value)) {
                e.preventDefault();
                email.style.borderColor = '#e74c3c';
                showAlert('Please enter a valid email address.', 'error');
                return false;
            }
        });
    }

    // Initialize AOS animations if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    }

    // Auto-hide alerts after 5 seconds
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 300);
        });
    }, 5000);
});

// Utility functions
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function showAlert(message, type) {
    // Remove existing alerts
    const existingAlerts = document.querySelectorAll('.alert');
    existingAlerts.forEach(alert => alert.remove());

    // Create new alert
    const alert = document.createElement('div');
    alert.className = `alert alert-${type}`;
    alert.textContent = message;

    // Insert at the top of the main content
    const mainContent = document.querySelector('.main-content');
    if (mainContent) {
        mainContent.insertBefore(alert, mainContent.firstChild);
    }

    // Auto-hide after 5 seconds
    setTimeout(() => {
        alert.style.opacity = '0';
        setTimeout(() => alert.remove(), 300);
    }, 5000);
}

// Portfolio image lazy loading
function lazyLoadImages() {
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading if images exist
if (document.querySelectorAll('img[data-src]').length > 0) {
    lazyLoadImages();
}

// Image Carousel Functionality
let currentSlide = 0;
let isAutoPlaying = true;
let autoPlayInterval;

function initCarousel() {
    const wrapper = document.getElementById('carouselWrapper');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const dots = document.querySelectorAll('.carousel-dot');
    
    if (!wrapper) return;
    
    const slides = wrapper.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;
    
    // Update carousel position
    function updateCarousel() {
        wrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
    }
    
    // Next slide
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateCarousel();
    }
    
    // Previous slide
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateCarousel();
    }
    
    // Go to specific slide
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateCarousel();
    }
    
    // Auto play functionality
    function startAutoPlay() {
        autoPlayInterval = setInterval(nextSlide, 5000);
        isAutoPlaying = true;
        playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
    }
    
    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
        isAutoPlaying = false;
        playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
    }
    
    // Event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoPlay();
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoPlay();
        });
    }
    
    if (playPauseBtn) {
        playPauseBtn.addEventListener('click', () => {
            if (isAutoPlaying) {
                stopAutoPlay();
            } else {
                startAutoPlay();
            }
        });
    }
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            stopAutoPlay();
        });
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            stopAutoPlay();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            stopAutoPlay();
        }
    });
    
    // Touch/swipe support
    let startX = 0;
    let endX = 0;
    
    wrapper.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });
    
    wrapper.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        const diff = startX - endX;
        
        if (Math.abs(diff) > 50) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
            stopAutoPlay();
        }
    });
    
    // Pause on hover
    wrapper.addEventListener('mouseenter', stopAutoPlay);
    wrapper.addEventListener('mouseleave', () => {
        if (isAutoPlaying) startAutoPlay();
    });
    
    // Start auto play
    startAutoPlay();
}

// Initialize carousel when DOM is loaded
if (document.getElementById('carouselWrapper')) {
    initCarousel();
}

// Hero Slider Functionality
let currentSlideIndex = 0;
let slideInterval;

function initHeroSlider() {
    const slides = document.querySelectorAll('.slide');
    const navDots = document.querySelectorAll('.nav-dot');
    const prevArrow = document.querySelector('.prev-arrow');
    const nextArrow = document.querySelector('.next-arrow');
    
    if (slides.length === 0) return;
    
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        navDots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
    }
    
    function nextSlide() {
        currentSlideIndex = (currentSlideIndex + 1) % slides.length;
        showSlide(currentSlideIndex);
    }
    
    function prevSlide() {
        currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
        showSlide(currentSlideIndex);
    }
    
    function goToSlide(index) {
        currentSlideIndex = index;
        showSlide(currentSlideIndex);
    }
    
    // Auto-play
    function startSlideshow() {
        slideInterval = setInterval(nextSlide, 5000);
    }
    
    function stopSlideshow() {
        clearInterval(slideInterval);
    }
    
    // Event listeners
    if (nextArrow) {
        nextArrow.addEventListener('click', () => {
            nextSlide();
            stopSlideshow();
            startSlideshow();
        });
    }
    
    if (prevArrow) {
        prevArrow.addEventListener('click', () => {
            prevSlide();
            stopSlideshow();
            startSlideshow();
        });
    }
    
    navDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            stopSlideshow();
            startSlideshow();
        });
    });
    
    // Pause on hover
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', stopSlideshow);
        heroSection.addEventListener('mouseleave', startSlideshow);
    }
    
    // Start slideshow
    startSlideshow();
}

// Initialize hero slider
if (document.querySelector('.hero-slider')) {
    initHeroSlider();
}

// FAQ Accordion functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-question i');
        
        if (question && answer && icon) {
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all FAQ items
                faqItems.forEach(faq => {
                    faq.classList.remove('active');
                    const faqAnswer = faq.querySelector('.faq-answer');
                    const faqIcon = faq.querySelector('.faq-question i');
                    if (faqAnswer) faqAnswer.style.maxHeight = null;
                    if (faqIcon) {
                        faqIcon.classList.remove('fa-minus');
                        faqIcon.classList.add('fa-plus');
                    }
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    item.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                }
            });
        }
    });
});

// Success Modal functionality
function closeSuccessModal() {
    const modal = document.getElementById('successModal');
    if (modal) {
        modal.style.display = 'none';
    }
}

// Contact form submission handler
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show success modal (in a real implementation, you'd send the form data to server first)
            const modal = document.getElementById('successModal');
            if (modal) {
                modal.style.display = 'flex';
            }
            
            // Reset form
            contactForm.reset();
        });
    }
});
