// URL: www.freecontactform.com
// Version: FreeContactForm V2.3
// Copyright (c) 2019 freecontactform.com
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.
function has_id(id){try{var tmp=document.getElementById(id).value;}catch(e){return false;}
return true;}
function has_name(nm){try{var tmp=cfrm.nm.type;}catch(e){return false;}
return true;}
function $$(id){if(!has_id(id)&&!has_name(id)){alert("Field "+id+" does not exist!\n Form validation configuration error.");return false;}
if(has_id(id)){return document.getElementById(id).value;}else{return;}}
function $val(id){return document.getElementById(id);}
function trim(id){$val(id).value=$val(id).value.replace(/^\s+/,'').replace(/\s+$/,'');}
var required={field:[],add:function(name,type,mess){this.field[this.field.length]=[name,type,mess];},out:function(){return this.field;},clear:function(){this.field=[];}};var validate={check:function(cform){var error_message='Please fix the following errors:\n\n';var mess_part='';var to_focus='';var tmp=true;for(var i=0;i<required.field.length;i++){if(this.checkit(required.field[i][0],required.field[i][1],cform)){}else{error_message=error_message+required.field[i][2]+' must be supplied\n';if(has_id(required.field[i][0])&&to_focus.length===0){to_focus=required.field[i][0];}
tmp=false;}}
if(!tmp){alert(error_message);}
if(to_focus.length>0){document.getElementById(to_focus).focus();}
return tmp;},checkit:function(cvalue,ctype,cform){if(ctype=="NOT_EMPTY"){if(this.trim($$(cvalue)).length<1){return false;}else{return true;}}else if(ctype=="EMAIL"){exp=/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;if($$(cvalue).match(exp)==null){return false;}else{return true;}}},trim:function(s){if(s.length>0){return s.replace(/^\s+/,'').replace(/\s+$/,'');}else{return s;}}};
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
        // TODO debounce this, scroll event is messing up vimeo posting
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
    console.log("slide");
    
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
    console.log(el);
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
    // check for iframe video and play it
    if (el.querySelector('iframe')){
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