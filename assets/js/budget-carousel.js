/**
 * Budget Carousel JavaScript
 * Handles the card carousel functionality for the budget homes section
 */

let currentBudgetSlide = 0;
let budgetCarouselTrack = null;
let budgetCards = null;
let totalBudgetSlides = 0;

function moveBudgetCarousel(direction) {
    if (!budgetCarouselTrack || totalBudgetSlides === 0) return;
    
    currentBudgetSlide += direction;
    
    // Loop back to beginning/end
    if (currentBudgetSlide >= totalBudgetSlides) {
        currentBudgetSlide = 0;
    } else if (currentBudgetSlide < 0) {
        currentBudgetSlide = totalBudgetSlides - 1;
    }
    
    // Calculate transform based on card width and gap
    const cardWidth = 300; // Updated card width to match CSS
    const gap = 32; // 2rem gap
    const translateX = -(currentBudgetSlide * (cardWidth + gap));
    
    budgetCarouselTrack.style.transform = `translateX(${translateX}px)`;
}

// Initialize carousel when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Re-query elements after DOM is loaded
    budgetCarouselTrack = document.querySelector('.budget-carousel-track');
    budgetCards = document.querySelectorAll('.budget-card');
    totalBudgetSlides = budgetCards.length;
    
    console.log('Budget carousel initialized:', {
        track: budgetCarouselTrack,
        cards: budgetCards.length,
        totalSlides: totalBudgetSlides
    });
    
    // Center the carousel initially
    if (budgetCarouselTrack && totalBudgetSlides > 0) {
        const containerWidth = budgetCarouselTrack.parentElement.offsetWidth;
        const cardWidth = 350;
        const gap = 32;
        const totalWidth = totalBudgetSlides * (cardWidth + gap) - gap;
        
        // Center the carousel if there's space
        if (totalWidth < containerWidth) {
            const centerOffset = (containerWidth - totalWidth) / 2;
            budgetCarouselTrack.style.transform = `translateX(${centerOffset}px)`;
        }
    }
    
    // Add touch/swipe support for mobile
    if (budgetCarouselTrack) {
        let startX = 0;
        let isDragging = false;
        
        budgetCarouselTrack.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
        });

        budgetCarouselTrack.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            e.preventDefault();
        });

        budgetCarouselTrack.addEventListener('touchend', (e) => {
            if (!isDragging) return;
            
            const endX = e.changedTouches[0].clientX;
            const diffX = startX - endX;
            
            // Minimum swipe distance
            if (Math.abs(diffX) > 50) {
                if (diffX > 0) {
                    moveBudgetCarousel(1); // Swipe left - next
                } else {
                    moveBudgetCarousel(-1); // Swipe right - previous
                }
            }
            
            isDragging = false;
        });
    }
});

// Make function globally available
window.moveBudgetCarousel = moveBudgetCarousel;
