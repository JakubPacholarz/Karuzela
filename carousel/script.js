document.addEventListener('DOMContentLoaded', function() {
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    const sliderElements = document.querySelector('.slider-elements');
    const sliderItems = document.querySelectorAll('.slider-item');
    const totalItems = sliderItems.length;
    const itemsVisible = 3; 

    let currentIndex = 0;
    let itemWidth;

    function updateItemWidth() {
        itemWidth = sliderItems[0].offsetWidth; 
    }

    function updateSliderPosition() {
        let offset = currentIndex * itemWidth;
        
        if (currentIndex >= totalItems) {
            currentIndex = 0; 
            offset = 0;
        }
        sliderElements.style.transform = `translateX(-${offset}px)`;
    }

    
    prev.addEventListener('click', function() {
        currentIndex -= 1;
        if (currentIndex < 0) {
            currentIndex = totalItems - 3;
        }
        updateSliderPosition();
    });

    next.addEventListener('click', function() {
        currentIndex += 1;
        if (currentIndex > totalItems-3) {
            currentIndex = 0;
        }
        updateSliderPosition();
    });

    
    let touchStartX = 0;
    let touchEndX = 0;

    sliderElements.addEventListener('touchstart', function(event) {
        touchStartX = event.changedTouches[0].screenX;
    });

    sliderElements.addEventListener('touchend', function(event) {
        touchEndX = event.changedTouches[0].screenX;
        handleGesture();
    });

    function handleGesture() {
        if (touchEndX < touchStartX) {
         
            currentIndex += 1;
        } else if (touchEndX > touchStartX) {

            currentIndex -= 1;
        }
        updateSliderPosition();
    }

    
    updateItemWidth();
    updateSliderPosition();

    
    window.addEventListener('resize', function() {
        updateItemWidth();
        updateSliderPosition();
    });
});
