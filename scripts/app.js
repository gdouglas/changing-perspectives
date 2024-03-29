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

$(function () {
    document.querySelector("html").classList.remove("no-js");
    addNavListener();
    addCardListeners();
    addTranscripts();
    loadTobii();
    initYoutube();
    initSlick();
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
            console.log("card click is on ",e.target)
            setActive(card);
        });
    });
    // negate click handler on transcripts
    document.querySelectorAll(".transcript").forEach((transcript) => {
        transcript.addEventListener("click", function (e) {
            if (!e) var e = window.event;
            e.cancelBubble = true;
            if (e.stopPropagation) e.stopPropagation(); 
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
        ".transcript"
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
        captionText: getCaption,
        swipeClose: false
    })
}


// Slider
function initSlick() {
    if ($('.comic-wrapper').length){
        setupSlick();
    } else {
        // console.log("no slick",$('#comic-wrapper'));
    }
}

function setupSlick() {
    $(".panels").on("init", setSlickConfig);
    $(".panels").slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        variableWidth: true,
        infinite: false,
        initialSlide : 0,
    });
}
function setSlickConfig(e) {
    $("div[data-slick-index]").click(function (e) {
        e.preventDefault();
        goToSlide($(this).data("slickIndex"));
    });
    $("div[data-slick-index]").focusin(function (e) {
        e.preventDefault();
        goToSlide($(this).data("slickIndex"));
    })
}

function goToSlide(slideNumber) {
    $(".panels").slick("slickGoTo", slideNumber);
}
