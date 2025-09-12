/**
 * Contact Page JavaScript - Mahati Interior Design
 * Handles form validation, FAQ interactions, and modal functionality
 * Author: Mahati Design Team
 * Last Updated: 2025
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all contact page functionality
    initContactForm();
    initFAQ();
    initModal();
});

/**
 * Initialize contact form functionality
 */
function initContactForm() {
    const form = document.getElementById('contactForm');
    const submitBtn = form.querySelector('.submit-btn');
    
    if (!form) return;
    
    // Form validation on submit
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (validateForm()) {
            submitForm();
        }
    });
    
    // Real-time validation on input
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            clearFieldError(this);
        });
    });
}

/**
 * Validate entire form
 */
function validateForm() {
    const form = document.getElementById('contactForm');
    const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!validateField(input)) {
            isValid = false;
        }
    });
    
    // Validate terms checkbox
    const termsCheckbox = form.querySelector('input[name="terms"]');
    if (termsCheckbox && !termsCheckbox.checked) {
        showFieldError(termsCheckbox, 'You must agree to the terms and conditions');
        isValid = false;
    }
    
    return isValid;
}

/**
 * Validate individual field
 */
function validateField(field) {
    const value = field.value.trim();
    const fieldName = field.name;
    let isValid = true;
    let errorMessage = '';
    
    // Required field validation
    if (field.hasAttribute('required') && !value) {
        errorMessage = `${getFieldLabel(field)} is required`;
        isValid = false;
    }
    
    // Email validation
    else if (fieldName === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            errorMessage = 'Please enter a valid email address';
            isValid = false;
        }
    }
    
    // Phone validation
    else if (fieldName === 'phone' && value) {
        const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
        if (!phoneRegex.test(value.replace(/[\s\-\(\)]/g, ''))) {
            errorMessage = 'Please enter a valid phone number';
            isValid = false;
        }
    }
    
    // Name validation
    else if ((fieldName === 'firstName' || fieldName === 'lastName') && value) {
        if (value.length < 2) {
            errorMessage = `${getFieldLabel(field)} must be at least 2 characters`;
            isValid = false;
        }
    }
    
    // Message validation
    else if (fieldName === 'message' && value) {
        if (value.length < 10) {
            errorMessage = 'Message must be at least 10 characters';
            isValid = false;
        }
    }
    
    if (!isValid) {
        showFieldError(field, errorMessage);
    } else {
        clearFieldError(field);
    }
    
    return isValid;
}

/**
 * Show field error
 */
function showFieldError(field, message) {
    const formGroup = field.closest('.form-group') || field.closest('.checkbox-group');
    const errorSpan = formGroup.querySelector('.form-error');
    
    if (errorSpan) {
        errorSpan.textContent = message;
        errorSpan.style.opacity = '1';
    }
    
    formGroup.classList.add('error');
    formGroup.classList.remove('success');
}

/**
 * Clear field error
 */
function clearFieldError(field) {
    const formGroup = field.closest('.form-group') || field.closest('.checkbox-group');
    const errorSpan = formGroup.querySelector('.form-error');
    
    if (errorSpan) {
        errorSpan.textContent = '';
        errorSpan.style.opacity = '0';
    }
    
    formGroup.classList.remove('error');
    
    if (field.value.trim()) {
        formGroup.classList.add('success');
    } else {
        formGroup.classList.remove('success');
    }
}

/**
 * Get field label text
 */
function getFieldLabel(field) {
    const label = field.closest('.form-group').querySelector('label');
    return label ? label.textContent.replace('*', '').trim() : field.name;
}

/**
 * Submit form
 */
function submitForm() {
    const form = document.getElementById('contactForm');
    const submitBtn = form.querySelector('.submit-btn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoading = submitBtn.querySelector('.btn-loading');
    
    // Show loading state
    submitBtn.classList.add('loading');
    submitBtn.disabled = true;
    
    // Create FormData object
    const formData = new FormData(form);
    
    // Submit form via AJAX
    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        // Hide loading state
        submitBtn.classList.remove('loading');
        submitBtn.disabled = false;
        
        if (data.success) {
            // Show success modal
            showSuccessModal();
            // Reset form
            form.reset();
            // Clear all field states
            const formGroups = form.querySelectorAll('.form-group');
            formGroups.forEach(group => {
                group.classList.remove('error', 'success');
            });
        } else {
            // Show error messages
            if (data.errors) {
                Object.keys(data.errors).forEach(fieldName => {
                    const field = form.querySelector(`[name="${fieldName}"]`);
                    if (field) {
                        showFieldError(field, data.errors[fieldName]);
                    }
                });
            } else {
                alert('An error occurred. Please try again.');
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
        // Hide loading state
        submitBtn.classList.remove('loading');
        submitBtn.disabled = false;
        alert('An error occurred. Please try again.');
    });
}

/**
 * Initialize FAQ functionality
 */
function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            
            // Close all FAQ items
            faqItems.forEach(faqItem => {
                faqItem.classList.remove('active');
            });
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
}

/**
 * Initialize modal functionality
 */
function initModal() {
    const modal = document.getElementById('successModal');
    const closeBtn = modal.querySelector('.modal-btn');
    
    if (!modal) return;
    
    // Close modal when clicking close button
    closeBtn.addEventListener('click', function() {
        hideModal();
    });
    
    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            hideModal();
        }
    });
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.style.display === 'block') {
            hideModal();
        }
    });
}

/**
 * Show success modal
 */
function showSuccessModal() {
    const modal = document.getElementById('successModal');
    if (modal) {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        
        // Add animation
        setTimeout(() => {
            modal.querySelector('.modal-content').style.transform = 'translate(-50%, -50%) scale(1)';
        }, 10);
    }
}

/**
 * Hide modal
 */
function hideModal() {
    const modal = document.getElementById('successModal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

/**
 * Smooth scroll to section
 */
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}

/**
 * Initialize form animations
 */
function initFormAnimations() {
    const formGroups = document.querySelectorAll('.form-group');
    
    formGroups.forEach((group, index) => {
        group.style.opacity = '0';
        group.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            group.style.transition = 'all 0.6s ease';
            group.style.opacity = '1';
            group.style.transform = 'translateY(0)';
        }, index * 100);
    });
}

// Initialize animations when page loads
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(initFormAnimations, 500);
});
