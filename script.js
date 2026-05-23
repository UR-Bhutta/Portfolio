const slider = document.querySelector('.slider');
const prevButtons = document.querySelectorAll('.prev-btn');
const nextButtons = document.querySelectorAll('.next-btn');

let index = 0;
const slideWidth = 1500;
const totalSlides = document.querySelectorAll('.slide').length;

nextButtons.forEach(button => {
    button.addEventListener('click', () => {
        if (index < totalSlides - 1) {
            index++;
        } else {
            index = 0; // Loop back to first slide
        }
        updateSlider();
    });
});

prevButtons.forEach(button => {
    button.addEventListener('click', () => {
        if (index > 0) {
            index--;
        } else {
            index = totalSlides - 1; // Loop back to last slide
        }
        updateSlider();
    });
});

function updateSlider() {
    slider.style.transform = `translateX(${-index * slideWidth}px)`;
}
