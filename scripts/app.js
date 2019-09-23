// import MicroModal from "micromodal";
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
    slides[1].classList.add("active");
    const scrollLeft = offset(slides[0]).left;
    
    slider.scrollTo({
        top: 0,
        left: slider.scrollLeft + width,
        behavior: 'smooth'
    });
    document.getElementById('prev').addEventListener('click', (e) => {
        slide("prev",slider,width);
        // const activeSlide = document.querySelector('.active');
        // if (activeSlide.previousElementSibling) {
        //     activeSlide.classList.remove('active');
        //     activeSlide.previousElementSibling.classList.add('active');
        // }
        
    });
    document.getElementById('next').addEventListener('click', (e) => {
        slide("next", slider, width);
        // const activeSlide = document.querySelector('.active');
        // if (activeSlide.nextElementSibling) {
        //     activeSlide.classList.remove('active');
        //     activeSlide.nextElementSibling.classList.add('active');
        // } else {
        //     return;
        // }
        // slider.scrollTo({
        //     top: 0,
        //     left: slider.scrollLeft + width,
        //     behavior: 'smooth'
        // });
    });

}
function slide(direction, slider, width) {
    console.log('slide', direction);
    const slides = document.getElementsByClassName("slide");
    const activeSlide = document.querySelector('.active');
    if (direction === "next") {
        console.log("next");
        slider.scrollTo({
            top: 0,
            left: slider.scrollLeft + width,
            behavior: 'smooth'
        }); 
    } else {
        console.log('previous');
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