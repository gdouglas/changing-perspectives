window.onload = function () {
    addNavButton();
    if (document.querySelector(".slider")) {
        addSlider();
        addSliderControls();
        addSlideListeners();
    }
};
window.addEventListener("hashchange", function(e){
    slideToItem(e.newURL);
}, true);

let sliderNav = document.querySelectorAll('.slider-navigation a');
sliderNav.forEach((link) => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        slideToItem(link.href);
    });
});

function addSlider() {
    const slider = document.querySelector('.slider');
    let isDown = false,
    startX,
    scrollLeft,
    activeItem = document.querySelector('.active');


    if (window.location.hash) {
        if (activeItem.id !== window.location.hash) {
            activeItem = document.querySelector(window.location.hash);
            activeItem.scrollIntoView();
            setActive(activeItem);
            console.log("go", document.querySelector('.active'), document.querySelector(window.location.hash));
            
        }
    }
    slider.addEventListener('scroll', (e) => {
        let centerItem = getCenterItem();
        setActive(centerItem);
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
            for (let i = 0; i < slides.length; i++) {
                if ( slides[i].classList.contains('active') ) {
                    console.log("focusin", i);
                }
            }
            setActive(event.target);
          })
    );
}
// scroll to the previous or next slide, call setActive on next element
function slide(e, direction, slider, width) {
    
    e.preventDefault();
    
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
    if (!el || !el.nodeType) {
        return;
    }
    if (el.classList.contains("active")) {
        return;
    }
    //remove all active slides
    document.querySelectorAll('.active').forEach((item) => {
        item.classList.remove("active");
    });


    // set the slide in the middle of the screen to active
    let centerItem = getCenterItem();
    centerItem.classList.add("active");
    document.querySelector(`a[href*="${centerItem.id}"]`).classList.add("active");

    const slides = document.getElementsByClassName("slide");

    //toggle the previous and next buttons
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
    //pause all Vimeo videos
    document.querySelectorAll("iframe").forEach((video) => {
        stopVideo(video);
    })
    // check for iframe video and play it, only when scroll is done
    if (el.querySelector('iframe') && el.classList.contains('active')){
        el.querySelector('iframe').contentWindow.postMessage('{"method":"play"}', '*');
    }
}
function getCenterItem(){
    // called on scroll or when navigation occurs
    // get the middle of the screen, then all the slides then the active slide
    // go through the slides and return the one that has the smallest distance to the center
    let screenCenter = window.innerWidth/2 - 50,
    slides = document.querySelectorAll('.slide'),
    activeSlide = document.querySelector('.slide.active');
    if (!activeSlide) {
        activeSlide = slides[0];
    }
    let activeSlidePos = activeSlide.getBoundingClientRect();

    slides.forEach(
        function(slide){
            let slidePos = slide.getBoundingClientRect(),
            distanceFromCenter = Math.abs(slidePos.left - screenCenter),
            activeDistanceFromCenter = Math.abs(activeSlidePos.left - screenCenter);

            if(distanceFromCenter < activeDistanceFromCenter) {
                //update the active slide and position
                activeSlide = slide;
                activeSlidePos = activeSlide.getBoundingClientRect();
                return;
            } else {
                return
            }
        }
    );

    return activeSlide;
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

//move to slider to the selected item
function slideToItem(url) {
    let hash = "#"+url.split("#")[1],
    slide = document.querySelector(hash);
    if(history.pushState) {
        history.pushState(null, null, hash);
        slide.scrollIntoView({behavior: "smooth", inline: "center"});
    }
    else {
        location.hash = hash;
    };

}