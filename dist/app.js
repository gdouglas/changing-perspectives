/**
 * Listen for click, space or enter keyup then call a function passing the event
 *
 * @param {string} target - Element receiving event
 * @param {function} goal
 */
function a11yActivate(target, goal) {
    let keys = [" "];
    if (target.tagName === "BUTTON") {
        keys = [" "];
    }
    target.addEventListener("click", goal);
    target.addEventListener("keyup", function (e) {
        if (keys.indexOf(e.key) > -1) {
            goal(e);
        }
    });
}

$(document).ready(function () {
    document.querySelector("html").classList.remove("no-js");
    addNavListener();
    addCardListeners();
    addTranscripts();
    loadTobii();
    initYoutube();
});
// let space open the card without scrolling
window.addEventListener("keydown", function (e) {
    if (this.document.activeElement.classList.contains("card") && e.key == " ") {
        e.preventDefault();
    }
});

function addNavListener() {
    let navBtn = document.getElementById("nav-menu");
    let header = document.querySelector("header");
    let navLinks = document.querySelectorAll("#top-nav li");
    navBtn.addEventListener("click", function () {
        header.classList.toggle("open");
    });
    navLinks.forEach(function (link) {
        link.addEventListener("click", function (e) {
            document
                .querySelector("#top-nav li.current")
                .classList.remove("current");
            link.classList.add("current");
        });
    });
}

function addCardListeners() {
    let cards = document.querySelectorAll(".card");
    let skipLinks = document.querySelectorAll(".skip-card");

    [...cards].forEach((card) => {
        card.setAttribute("tabindex", "0"); //make tabable to cards
        addCardKeyboardControls(card, cards);
        card.addEventListener("click", function (e) {
            setActive(card);
        });
    });
    [...skipLinks].forEach((link) => {
        a11yActivate(link, skipCard);
    });
}

function closeTranscripts() {
    //close all transcripts before switching active
    document.querySelectorAll(".transcript").forEach((transcript) => {
        transcript.classList.add("closed");
    });
    document
        .querySelectorAll(".transcript-toggle")
        .forEach((transcriptToggle) => {
            transcriptToggle.setAttribute("aria-expanded", "false");
        });
}

/**
 * Card is active, call play on video
 */
function playCardVideo(el) {
    playYoutube(el);
}

function playYoutube(el) {
    if (!youTubePlayers) {
        console.error("no players loaded");
        return;
    }
    let selected = $(el).find(".youtube")[0];
    selected.contentWindow.postMessage(
        '{"event":"command","func":"' + "playVideo" + '","args":""}',
        "*"
    );
}

function addCardKeyboardControls(card, cards) {
    card.addEventListener("keyup", (e) => {
        switch (e.key) {
            case "Enter":
                if (e.target.classList.contains("transcript-toggle")) {
                    break;
                }
            case " ":
                e.preventDefault();
                setActive(card);
                break;
            case "Escape":
                setActive();
                break;
            case "Home":
                e.preventDefault();
                setActive(cards[0]);
                break;
            case "End":
                e.preventDefault();
                setActive(cards[cards.length - 1]);
                break;
            case "ArrowRight":
                if (cards[cards.length - 1] !== card) {
                    let nextCard = card.nextElementSibling;
                    nextCard.focus();
                    setActive(nextCard);
                }
                break;
            case "ArrowLeft":
                if (cards[0] !== card) {
                    let previousCard = card.previousElementSibling;
                    previousCard.focus();
                    setActive(previousCard);
                }
                break;
            default:
                break;
        }
    });
}

/**
 * Sets the target of href in focus, sets card to active
 *
 * @param {event} e
 */
function skipCard(e) {
    e.preventDefault();
    e.stopPropagation();
    let hashRef = e.target.hash.substring(1);
    let nextCard = document.getElementById(hashRef);
    nextCard.focus();
    setActive(nextCard);
}
// remove all other active class and add to element
// TODO: make buttons work for only one card list
function setActive(element) {
    closeTranscripts();
    pauseVideos();
    let closeButton = document.getElementById("close-cards-button");
    let active = document.querySelectorAll(".active");
    [...active].forEach((el) => {
        el.classList.remove("active");
        el.setAttribute("aria-expanded", "false");
    });
    if (element) {
        let wrapper = document.querySelectorAll(".no-active");
        [...wrapper].forEach((el) => {
            el.classList.remove("no-active");
            el.classList.add("has-active");
        });
        element.classList.add("active");
        // console.log(element);
        element.addEventListener('transitionend', (e) => {
            //card is open, play video
            if (e.target.parentNode.classList.contains("active") && e.propertyName === "transform") {
                playCardVideo(element);
            }
        });
        element.setAttribute("aria-expanded", "true");
        if (closeButton) {
            closeButton.tabIndex = 0;
        }
    } else {
        let wrapper = document.querySelectorAll(".has-active");
        [...wrapper].forEach((el) => {
            el.classList.remove("has-active");
            el.classList.add("no-active");
        });
        if (closeButton) {
            closeButton.tabIndex = -1;
        }
    }
}

let youTubePlayers = [];
function initYoutube() {
    let players = document.querySelectorAll(".youtube");
    for (let i = 0; i < players.length; i++) {
        youTubePlayers.push(players[i]);
    }
}

function pauseVideos() {
    youTubePlayers.forEach(yt => {
        yt.contentWindow.postMessage(
            '{"event":"command","func":"' + "pauseVideo" + '","args":""}',
            "*");
    });
}

function addTranscripts() {
    let buttons = document.querySelectorAll(".transcript-toggle");
    for (let i = 0; i < buttons.length; i++) {
        a11yActivate(buttons[i], toggleTranscript);
    }
}

function toggleTranscript(e) {
    e.stopPropagation();
    e.preventDefault();

    let expanded = e.target.getAttribute("aria-expanded");
    if (expanded == "true") {
        expanded = "false";
    } else {
        expanded = "true";
    }
    e.target.setAttribute("aria-expanded", expanded);
    let transcriptElement = e.target.parentElement.querySelector(
        "div.transcript"
    );
    transcriptElement.classList.toggle("closed");
}
// Gallery, used by Tobii to get the caption
function getCaption(el) {
    return el.querySelector('figcaption').innerText;
}
function loadTobii() {
    if (document.querySelector('div.tobii')) {
        Tobii.destroy();
    }
    const tobii = new Tobii({
        captionsSelector: "self",
        captionAttribute: "data-caption",
        captionText: getCaption
    })
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
// Vid sizes
// 360
// 540
// 720
// 1080

// Breakpoints
// < 425  : image
// > 425  : 540
// > 700  : 720
// > 1024 : 1080


function checkMediaQuery() {
	const vid = document.getElementById('bg-vid');
	if (!vid) {
		return
	}
	let source = document.querySelector("#bg-vid > source");
	if (source !== null) {
		console.log("there is source", source);
		return
	} else {
		addSource(vid);
	}	
	vid.load();
}
function addSource(vid) {
	if (!vid) {
		return
	}
	const source = document.createElement('source');
	source.type = 'video/mp4';
	const video = document.createElement('video');
	if (window.innerWidth > 1020) {
		source.src="/videos/home/intro-loop_1080.mp4";
	}
	else if (window.innerWidth > 700) {
		source.src="/videos/home/intro-loop_720.mp4";
	}
	else if (window.innerWidth > 425) {
		source.src="/videos/home/intro-loop_540.mp4";
	}
	else  {
		//leave as poster
	}
	vid.appendChild(source);
}
// Add a listener for when the window resizes
// window.addEventListener('resize', checkMediaQuery);
checkMediaQuery();
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