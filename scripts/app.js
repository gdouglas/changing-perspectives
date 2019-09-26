// initial state
var disableNext = false;
var disablePrevious = false;

window.onload = function () {
    addSlider();
    addSliderControls();
    addNavButton();
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
    const width = slides[0].offsetWidth;
    slides.forEach((el) => {
        el.addEventListener('click', (e) => {
            e.preventDefault();
            setActive(el);
        });
    })
    slider.addEventListener('scroll', (e) => {
        const center = window.innerWidth/2;
        slides.forEach(slide => {
            const start = offset(slide).left;
            const end = start + slide.offsetWidth;
            if (start < center && end > center) {
                setActive(slide);
            }
        });
    })
    
    //scroll to initial slide
    slides[1].classList.add("active");
    slider.scrollTo({
        top: 0,
        left: slider.scrollLeft + width,
        behavior: 'smooth'
    });
    document.getElementById('prev').addEventListener('click', (e) => {
        slide("prev",slider,width);
    });
    document.getElementById('next').addEventListener('click', (e) => {
        slide("next", slider, width);
    });
}
function setActive(el) {
    if(!el){
        return;
    }
    const scrollPos = window.scrollY;
    window.location.hash = el.querySelector('a').hash;
    window.scroll(0,scrollPos);
    document.querySelector('.active').classList.remove("active");
    el.classList.add("active");

}
function slide(direction, slider, width) {
    const slides = document.getElementsByClassName("slide");
    let activeSlide = "";
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');

    // slider has a empty slide as first and last element to set up spacing nicely
    for (let i=0; i < slides.length; i++) {
        if(slides[i].classList.contains('active')) {
            activeSlide = slides[i];
            (i >= slides.length - 2) ? disableNext = true : disableNext = false;
            (i <= 1) ? disablePrevious = true : disablePrevious = false;
        }
    }
    nextBtn.disabled = disableNext;
    prevBtn.disabled = disablePrevious;
    if (direction === "next" && !disableNext) {
        setActive(activeSlide.nextElementSibling);
        slider.scrollTo({
            top: 0,
            left: slider.scrollLeft + width,
            behavior: 'smooth'
        }); 
    }
    if (direction === "prev" && !disablePrevious) {
        setActive(activeSlide.previousElementSibling);
        slider.scrollTo({
            top: 0,
            left: slider.scrollLeft - width,
            behavior: 'smooth'
        });        
    }
}
function addNavButton() {
    var navMenu = document.getElementById('nav-menu');
    var topNav = document.getElementById('top-nav');
    navMenu.addEventListener('click', ()=>{
        topNav.classList.toggle('open');
    })
}

//return element distance from top and left of client
function offset(el) {
    var rect = el.getBoundingClientRect(),
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
}