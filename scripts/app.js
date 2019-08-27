window.onload = function () {
    addSlider();
    addSliderControls();
};

function addSlider(){
    const slider = document.querySelector('.slider');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1;
        slider.scrollLeft = scrollLeft - walk;
    });
}
function addSliderControls(){
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    slides[0].classList.add("active");
    const width = slides[0].offsetWidth;
    document.getElementById('prev').addEventListener('click', (e) => {
        const activeSlide = document.querySelector('.active');
        if (activeSlide.previousElementSibling) {
            activeSlide.classList.remove('active');
            activeSlide.previousElementSibling.classList.add('active');
        }
        slider.scrollTo({
            top: 0,
            left: slider.scrollLeft - width,
            behavior: 'smooth'
        });
    });
    document.getElementById('next').addEventListener('click', (e) => {
        const activeSlide = document.querySelector('.active');
        if (activeSlide.nextElementSibling) {
            activeSlide.classList.remove('active');
            activeSlide.nextElementSibling.classList.add('active');
        }
        slider.scrollTo({
            top: 0,
            left: slider.scrollLeft + width,
            behavior: 'smooth'
        });
        // animateScrollTo(slider500);
    });

}