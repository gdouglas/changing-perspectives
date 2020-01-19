// import smoothscroll from 'smoothscroll-polyfill';

// // kick off the polyfill!
// smoothscroll.polyfill();

window.onload = function () {
    addNavButton();
    if (document.querySelector(".slider")) {
        addSlider();
        addSliderControls();
        addSlideListeners();
    }
};
function addSlider() {
    const slider = document.querySelector('.slider');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('scroll', (e) => {
        console.log("scroll");

    });

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
        // disable clicks so we can set focus
        el.addEventListener('click', (e) => {
            e.preventDefault();
            //allow link tags to navigate
            if (e.target.tagName.toLowerCase() === "a") {
                window.location = e.target.href;
            }
            setActive(el);
        });
    });
    //listen for a scroll and set the slide closest to the middle to active
    slider.addEventListener('scroll', (e) => {
        const center = window.innerWidth / 2 + 10;
        slides.forEach(slide => {
            const start = offset(slide).left;
            const end = start + slide.offsetWidth;
            if (start < center && end > center) {
                setActive(slide);
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
function addSlideListeners() {
    let slides = document.getElementsByClassName("slide");
    Object.keys(slides).forEach(slide => 
        slides[slide].addEventListener('focusin', (event) => {
            console.log(slides);
            for (let i = 0; i < slides.length; i++) {
                if ( slides[i].classList.contains('active') ) {
                    console.log(i)
                }
            }
            setActive(event.target);
          })
    );
}
function slide(e, direction, slider, width) {
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
function setActive(el) {
    // if there is no element or the element is already active abort
    if (!el) {
        return;
    }
    if (el.classList.contains("active")) {
        return;
    }
    // let slideId = el.querySelector('a')
    // if (!slideId) {
    //     return;
    // }
    // slideId = slideId.hash.replace('#', '');
    // const slideContent = document.getElementById(slideId);
    document.querySelectorAll('.active').forEach((item) => {
        item.classList.remove("active");
    });
    // slideContent.classList.add("active");
    // el.classList.add("active");
    
    // set the slide in the middle of the screen to active
    let centerItem = getCenterItem();
    console.log(centerItem+ " add the active class here");


    const slides = document.getElementsByClassName("slide");

    for (let i = 0; i < slides.length; i++) {
        if (slides[i].classList.contains('active')) {
            if (i === slides.length - 1) {
                document.getElementById('next').disabled = true;
            } else {
                 document.getElementById('next').disabled = false;
            }

            if (i === 0) {
                document.getElementById('prev').disabled = true;
            } else {
                document.getElementById('prev').disabled = false;
            }
        }
    }
    // check for iframe video and play it
    if (el.querySelector('iframe')){
        el.querySelector('iframe').contentWindow.postMessage('{"method":"play"}', '*');
    }
}
function getCenterItem(){
    // get the middle of the screen
    let screenCenter = window.innerwidth/2;
    let documentCenter = document.documentElement.clientWidth;

    //loop through the slides and check which one is the closest to the middle
    // something like this from: https://gomakethings.com/how-to-test-if-an-element-is-in-the-viewport-with-vanilla-javascript/
    // var bounding = elem.getBoundingClientRect();
    // return (
    //     bounding.top >= 0 &&
    //     bounding.left >= 0 &&
    //     bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    //     bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
    // );
    //return the element in the middle

    //figure out how to debounce calling this function

    return "item that is the closest the middle";
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
var stopVideo = function ( iframe ) {
    iframe.contentWindow.postMessage('{"method":"pause"}', '*');
};