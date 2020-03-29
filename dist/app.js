window.onload = function () {
    document.querySelector("html").classList.remove("no-js");
    addNavListener();
    addCardListeners();
    getVideos();
};

// stop playing video
var stopVideo = function ( iframe ) {
    iframe.contentWindow.postMessage('{"method":"pause"}', '*');
};

function addNavListener() {
    let navBtn = document.getElementById('nav-menu');
    let nav = document.getElementById('top-nav');
    let header = document.querySelector('header');
    navBtn.addEventListener("click", function(){
        header.classList.toggle('open');
    });
}

function addCardListeners(){
    let vimeos = document.querySelectorAll('.vimeo');
    let inputs = document.querySelectorAll("input[name=cards]");

    [...inputs].forEach((radio) => {
        radio.addEventListener("change", function(){
            [...vimeos].forEach((vid) => {
                stopVideo(vid);
            });
        });
    });
}
function getVideos(){
    var players = document.querySelectorAll('.vimeo');
    if (players.length <1) {
        return;
    }
    let index = 0;
    bufferVideos(players, index);

    // for (let i = 0; i < players.length; i++) {
    //     let vim = new Vimeo.Player(players[i]);
    //     vim.setVolume(0);
    //     vim.play().then(
    //         function(value) {
    //             console.log(value);
    //             vim.pause();
    //         }
    //     );
    // }
}
function bufferVideos(players, index) {
    console.log(players.length, index);
    let vim = new Vimeo.Player(players[index]);
    console.log(vim);
    // mute to enable autoplay
    let vidEnd = vim.getDuration();
    vim.setLoop(1);
    vim.setVolume(0).then(
        vim.play()
    ).then(
        function(value) {
            console.log(value);
            vim.pause()
            .then(function(){
                vim.setVolume(1);
                vim.setCurrentTime(vidEnd);
                index++;
                if (index === players.length) {
                    console.log("the end");
                    return;
                } else {
                    console.log("keep going");
                    bufferVideos(players, index);
                }
            });
        }
    );

}
function stopVimeo(vim) {
    console.log("stop");
    vim.pause();
    // vim.setCurrentTime(100);
}
(function() {
	'use strict';

var DURATION = 150;

var ringElem = null;
var movingId = 0;
var prevFocused = null;
var keyDownTime = 0;

var win = window;
var doc = document;
var docElem = doc.documentElement;
var body = doc.body;


docElem.addEventListener('keydown', function(event) {
	var code = event.which;
	// Show animation only upon Tab or Arrow keys press.
	if (code === 9 || (code > 36 && code < 41)) {
		keyDownTime = Date.now();
	}
}, false);


docElem.addEventListener('focus', function(event) {
	var target = event.target;
	if (target.id === 'flying-focus') {
		return;
	}

	var isFirstFocus = false;
	if (!ringElem) {
		isFirstFocus = true;
		initialize();
	}

	var offset = offsetOf(target);
	ringElem.style.left = offset.left + 'px';
	ringElem.style.top = offset.top + 'px';
	ringElem.style.width = target.offsetWidth + 'px';
	ringElem.style.height = target.offsetHeight + 'px';

	if (isFirstFocus || !isJustPressed()) {
		return;
	}

	onEnd();
	target.classList.add('flying-focus_target');
	ringElem.classList.add('flying-focus_visible');
	prevFocused = target;
	movingId = setTimeout(onEnd, DURATION);
}, true);


docElem.addEventListener('blur', function() {
	onEnd();
}, true);


function initialize() {
	ringElem = doc.createElement('flying-focus'); // use uniq element name to decrease the chances of a conflict with website styles
	ringElem.id = 'flying-focus';
	ringElem.style.transitionDuration = ringElem.style.WebkitTransitionDuration = DURATION / 1000 + 's';
	body.appendChild(ringElem);
}


function onEnd() {
	if (!movingId) {
		return;
	}
	clearTimeout(movingId);
	movingId = 0;
	ringElem.classList.remove('flying-focus_visible');
	prevFocused.classList.remove('flying-focus_target');
	prevFocused = null;
}


function isJustPressed() {
	return Date.now() - keyDownTime < 42
}


function offsetOf(elem) {
	var rect = elem.getBoundingClientRect();
	var clientLeft = docElem.clientLeft || body.clientLeft;
	var clientTop  = docElem.clientTop  || body.clientTop;
	var scrollLeft = win.pageXOffset || docElem.scrollLeft || body.scrollLeft;
	var scrollTop  = win.pageYOffset || docElem.scrollTop  || body.scrollTop;
	var left = rect.left + scrollLeft - clientLeft;
	var top =  rect.top  + scrollTop  - clientTop;
	return {
		top: top || 0,
		left: left || 0
	};
}


	var style = doc.createElement('style');
	style.textContent = "#flying-focus {\
	position: absolute;\
	margin: 0;\
	background: transparent;\
	-webkit-transition-property: left, top, width, height;\
	transition-property: left, top, width, height;\
	-webkit-transition-timing-function: cubic-bezier(0,1,0,1);\
	transition-timing-function: cubic-bezier(0,1,0,1);\
	visibility: hidden;\
	pointer-events: none;\
	box-shadow: 0 0 2px 3px #78aeda, 0 0 2px #78aeda inset; border-radius: 2px;\
}\
#flying-focus.flying-focus_visible {\
	visibility: visible;\
	z-index: 9999;\
}\
.flying-focus_target {\
	outline: none !important; /* Doesn't work in Firefox :( */\
}\
/* http://stackoverflow.com/questions/71074/how-to-remove-firefoxs-dotted-outline-on-buttons-as-well-as-links/199319 */\
.flying-focus_target::-moz-focus-inner {\
	border: 0 !important;\
}\
/* Replace it with @supports rule when browsers catch up */\
@media screen and (-webkit-min-device-pixel-ratio: 0) {\
	#flying-focus {\
		box-shadow: none;\
		outline: 5px auto -webkit-focus-ring-color;\
		outline-offset: -3px;\
	}\
}\
";
	body.appendChild(style);
})();
//should be added to a build process

function nextQuestion() {
  //called on button click

  // remove active class
  // add active class to next
  // enable previous button if needed
  // if last question change button to set sail
  // keep disabled until question is answered
  //
  let currentQuestion = document.querySelector(".question.active");
  let checked = currentQuestion.querySelector("input:checked");
  if (checked) {
    checkAnswer(checked);
  } else {
    //nothing checked
    alert("Please choose an answer");
    return;
  }
  currentQuestion.classList.remove("active");
  if (currentQuestion.nextElementSibling) {
    currentQuestion.nextElementSibling.classList.add("active");
  } else {
    alert("all done!");
  }
  // console.log(currentQuestion.nextElementSibling);
}

function checkAnswer(question) {
  let xhr = new XMLHttpRequest();

  xhr.open("GET", `./game/tech-game.php?${question.name}=${question.value}`);

  // request state change event
  xhr.onreadystatechange = function() {
    // request completed?
    if (xhr.readyState !== 4) return;

    if (xhr.status === 200) {
      // request successful - show response
      console.log("success", xhr.responseText);
      if (xhr.responseText === "Correct") {
          alert ("correct!");
      } else {
          alert("incorrect");
      }
    } else {
      // request error
      console.error("HTTP error", xhr.status, xhr.statusText);
    }
  };

  // start request
  xhr.send("some shit");
}

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