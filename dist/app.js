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
    const width = slides[0].offsetWidth;
    document.getElementById('prev').addEventListener('click', (e) => {
        slider.scrollTo({
            top: 0,
            left: slider.scrollLeft - width,
            behavior: 'smooth'
        });
    });
    document.getElementById('next').addEventListener('click', (e) => {
        slider.scrollTo({
            top: 0,
            left: slider.scrollLeft + width,
            behavior: 'smooth'
        });
        // animateScrollTo(slider500);
    });

}
(function() {
    var normalizeNonFiniteValue = function (value) {
        value = +value;
        return (isNaN(value) || value == Infinity || value == -Infinity) ? 0 : value;
    }
    
    var isBodyPotentiallyScrollable = function (body) {
        body = body ? body : document.getElementsByTagName("BODY")[0];
    
        var bodyComputedStyle = window.getComputedStyle(body);
        var parentComputedStyle =  window.getComputedStyle(body.parent);
        var bodyComputedOverflowX = bodyComputedStyle.overflowX;
        var bodyComputedOverflowY = bodyComputedStyle.overflowY;
        var parentComputedOverflowX = parentComputedStyle.overflowX;
        var parentComputedOverflowY = parentComputedStyle.overflowY;
    
        return (
            (
                bodyComputedStyle.display == "table-column" || 
                bodyComputedStyle.display == "table-column-group"
            ) && (
                parentComputedOverflowX != "visible" && 
                parentComputedOverflowX != "clip" && 
                parentComputedOverflowY != "visible" && 
                parentComputedOverflowY != "clip"
            ) && (
                bodyComputedOverflowX != "visible" && 
                bodyComputedOverflowX != "clip" && 
                bodyComputedOverflowY != "visible" && 
                bodyComputedOverflowY != "clip"
            )
        );
    }
    
    if (!Element.prototype.scroll) {
        Element.prototype.scroll = function () {
            var argsLength = arguments.length;
            var doc = this.ownerDocument;
            var win = doc.defaultView;
            var quirksMode = (doc.compatMode == "BackCompat");
            var body = document.getElementsByTagName("BODY")[0];
            var options = {};
            var x, y;
    
            if (doc != window.document) return;
            if (!win) return;
    
            if (argsLength === 0) {
                return;
            } else if (argsLength === 1) {
                var arg = arguments[0];
                if (typeof arg != "object") throw "Failed to execute 'scrollBy' on 'Element': parameter 1 ('options') is not an object.";
        
                if ('left' in arg) {
                    options.left = normalizeNonFiniteValue(arg.left);
                }
        
                if ('top' in arg) {
                    options.top = normalizeNonFiniteValue(arg.top);
                }
    
                x = (('left' in options) ? options.left : this.scrollLeft);
                y = (('top' in options) ? options.top : this.scrollTop);
            } else {
                options.left = x = normalizeNonFiniteValue(arguments[0]);
                options.top = y = normalizeNonFiniteValue(arguments[1]);
            }
    
            if (this == document.documentElement) {
                if (quirksMode) return;
    
                win.scroll(('scrollX' in win) ? win.scrollX : (('pageXOffset' in win) ? win.pageXOffset : this.scrollLeft), y);
                return;
            }
    
            if (this == body && quirksMode && !isBodyPotentiallyScrollable(body)) {
                win.scroll(options.left, options.top);
                return;
            }
            
            this.scrollLeft = x;
            this.scrollTop = y;
        };
    }
    
    if (!Element.prototype.scrollTo) {
        Element.prototype.scrollTo = Element.prototype.scroll;
    }
    
    if (!Element.prototype.scrollBy) {
        Element.prototype.scrollBy = function () {
            var argsLength = arguments.length;
            var options = {};
    
            if (argsLength === 0) {
                return;
            } else if (argsLength === 1) {
                var arg = arguments[0];
                if (typeof arg != "object") throw "Failed to execute 'scrollBy' on 'Element': parameter 1 ('options') is not an object.";
    
                if ('left' in arg) {
                    options.left = normalizeNonFiniteValue(arg.left);
                }
    
                if ('top' in arg) {
                    options.top = normalizeNonFiniteValue(arg.top);
                }
            } else {
                options.left = normalizeNonFiniteValue(arguments[0]);
                options.top = normalizeNonFiniteValue(arguments[1]);
            }
    
            options.left = (('left' in options) ? options.left + this.scrollLeft : this.scrollLeft);
            options.top = (('top' in options) ? options.top + this.scrollTop : this.scrollTop);
            this.scroll(options);
        };
    }
})();
