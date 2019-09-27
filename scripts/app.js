window.onload = function () {
    addNavButton();
    if (document.querySelector(".slider")) {
        addSlider();
        addSliderControls();
    }
};
function addSlider() {
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
        // TODO get scroll drag working
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1;
        slider.scrollLeft = scrollLeft - walk;
    });
}
function addSliderControls() {
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
        const center = window.innerWidth / 2 + 10;
        slides.forEach(slide => {
            const start = offset(slide).left;
            const end = start + slide.offsetWidth;
            if (start < center && end > center) {
                setActive(slide);
                // if (slides[slides.length - 1].classList.contains("active")){
                //     console.log(slides);
                // }
            }
        });
    })

    document.getElementById('prev').addEventListener('click', (e) => {
        slide(e, "prev", slider, width);
    });
    document.getElementById('next').addEventListener('click', (e) => {
        slide(e, "next", slider, width);
    });
}
function setActive(el) {
    if (!el) {
        return;
    }
    if (el.classList.contains("active")) {
        return;
    }
    let slideId = el.querySelector('a')
    if (!slideId) {
        return;
    }
    slideId = slideId.hash.replace('#', '');
    const slideContent = document.getElementById(slideId);
    document.querySelectorAll('.active').forEach((item) => {
        item.classList.remove("active");
    });
    slideContent.classList.add("active");
    el.classList.add("active");


    const slides = document.getElementsByClassName("slide");

    for (let i = 0; i < slides.length; i++) {
        if (slides[i].classList.contains('active')) {
            if (i === slides.length - 1) {
                document.getElementById('next').disabled = true;
            } else {
                // console.log('slide ', i)
                 document.getElementById('next').disabled = false;
            }

            if (i === 0) {
                document.getElementById('prev').disabled = true;
            } else {
                document.getElementById('prev').disabled = false;
            }
        }
    }
}
function slide(e, direction, slider, width) {
    // TODO stop all vimeo playing
    e.preventDefault();
    document.querySelectorAll("iframe").forEach((video) => {
        stopVideo(video);
    })
    let activeSlide = "";

    if (direction === "next") {
        setActive(activeSlide.nextElementSibling, window.scrollY);
        slider.scrollTo({
            left: slider.scrollLeft + width,
            behavior: 'smooth'
        });
    }
    if (direction === "prev") {
        setActive(activeSlide.previousElementSibling, window.scrollY);
        slider.scrollTo({
            left: slider.scrollLeft - width,
            behavior: 'smooth'
        });
    }
}
function addNavButton() {
    var navMenu = document.getElementById('nav-menu');
    var topNav = document.getElementById('top-nav');
    navMenu.addEventListener('click', () => {
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

// stop playing video
var stopVideo = function ( element ) {
    // TODO Get this to pause instead of just reloading
    // console.log("stop Vid", element);
    var iframeSrc = element.src;
    element.src = iframeSrc;
};