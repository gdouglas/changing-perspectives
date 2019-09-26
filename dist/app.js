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