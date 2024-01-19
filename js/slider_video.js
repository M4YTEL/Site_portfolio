
let currentIndex = 0;
const videoContainers = document.querySelectorAll('.video-container');
const sliderContent = document.querySelector('.slider-content');

function moveSlider(direction) {
    currentIndex += direction;
    if (currentIndex < 0) currentIndex = videoContainers.length - 1;
    if (currentIndex >= videoContainers.length) currentIndex = 0;

    const offset = currentIndex * videoContainers[0].offsetWidth;
    sliderContent.style.transform = `translateX(-${offset}px)`;
}

moveSlider(0);
