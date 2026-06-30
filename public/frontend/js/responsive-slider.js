document.addEventListener('DOMContentLoaded', function() {
    if (window.innerWidth <= 991) {
        const sliderSelectors = [
            '.category-explore-grid',
            '.top-companies-section > .container > .row',
            '.why-choose-section .feature-cards-row',
            '.immediate-openings-section > .container > .row',
            '.featured-jobs-section > .container > .row', // Direct child to avoid filter tabs
            '.ai-toolkit-section .feature-cards-row',
            '.career-resources-section .feature-cards-row'
        ];
        
        sliderSelectors.forEach(selector => {
            const container = document.querySelector(selector);
            if (container) {
                // Add the class defined in our mobile CSS
                container.classList.add('mobile-slider');
                
                // Create Controls Wrapper
                const controls = document.createElement('div');
                controls.className = 'mobile-slider-controls';
                
                // Create Left Button
                const leftBtn = document.createElement('button');
                leftBtn.className = 'mobile-slider-btn';
                leftBtn.innerHTML = '<i class="fa fa-arrow-left"></i>';
                leftBtn.setAttribute('aria-label', 'Scroll left');
                
                // Create Right Button
                const rightBtn = document.createElement('button');
                rightBtn.className = 'mobile-slider-btn';
                rightBtn.innerHTML = '<i class="fa fa-arrow-right"></i>';
                rightBtn.setAttribute('aria-label', 'Scroll right');
                
                controls.appendChild(leftBtn);
                controls.appendChild(rightBtn);
                
                // Insert controls right after the slider container
                container.parentNode.insertBefore(controls, container.nextSibling);
                
                // Add click events for smooth scrolling
                leftBtn.addEventListener('click', () => {
                    const scrollAmount = container.clientWidth * 0.8;
                    container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                });
                
                rightBtn.addEventListener('click', () => {
                    const scrollAmount = container.clientWidth * 0.8;
                    container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                });
            }
        });
    }
});
