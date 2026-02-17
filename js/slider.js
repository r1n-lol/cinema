const leftBtn = document.getElementById('left-btn');
const rightBtn = document.getElementById('right-btn');
const slides = document.querySelectorAll('.slide');
let currentIndex = 0;

function updateSlider() {
    slides.forEach((slide, index) => {
        slide.classList.remove('active', 'previous', 'next');

        if (index === currentIndex) {
            slide.classList.add('active');
        } 
        else if (index === (currentIndex - 1 + slides.length) % slides.length) {
            slide.classList.add('previous');
        } 
        else if (index === (currentIndex + 1) % slides.length) {
            slide.classList.add('next');
        }
    });
}

leftBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlider();
});

rightBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
});

updateSlider();