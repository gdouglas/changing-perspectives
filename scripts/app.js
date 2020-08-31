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

window.onload = function () {
    document.querySelector("html").classList.remove("no-js");
    addNavListener();
    addCardListeners();
    addTranscripts();
};
// let space open the card without scrolling
window.addEventListener("keydown", function(e){
    if (this.document.activeElement.classList.contains('card') && e.key == " ") {
        e.preventDefault();
    }
});

function addNavListener() {
    let navBtn = document.getElementById("nav-menu");
    let header = document.querySelector("header");
    navBtn.addEventListener("click", function () {
        header.classList.toggle("open");
    });
}

function addCardListeners() {
    let cards = document.querySelectorAll(".card");
    let skipLinks = document.querySelectorAll(".skip-card");
    let playButtons = document.querySelectorAll(".play-video");

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
    [...playButtons].forEach((button) => {
        a11yActivate(button, playVimeo);
    });
}

function closeTranscripts() {
    //close all transcripts before switching active
    document.querySelectorAll('.transcript').forEach((transcript)=>{
        transcript.classList.add('closed');
    });
    document.querySelectorAll('.transcript-toggle').forEach((transcriptToggle) => {
        transcriptToggle.setAttribute("aria-expanded", "false");
    });
}

/**
 *  Get the vimeo player closest to the event and start playing it
 *
 * @param {string} event
 */
function playVimeo(event) {
    event.stopPropagation();
    // target vimeo player
    let selected = event.target.parentElement.querySelector(".vimeo");

    //loop through players for a match then play
    for (let player in vimeoPlayers) {
        if (vimeoPlayers[player].element == selected) {
            vimeoPlayers[player].play();
        }
    }
}

function addCardKeyboardControls(card, cards) {
    card.addEventListener("keyup", (e) => {
        switch (e.key) {
            case "Enter":
                if (e.target.classList.contains('transcript-toggle')){
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
//remove all other active class and add to element
function setActive(element) {
    closeTranscripts();
    stopAllVimeo();
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
        element.setAttribute("aria-expanded", "true");
        closeButton.tabIndex = 0;
    } else {
        let wrapper = document.querySelectorAll(".has-active");
        [...wrapper].forEach((el) => {
            el.classList.remove("has-active");
            el.classList.add("no-active");
        });
        closeButton.tabIndex = -1;
    }
}

let vimeoPlayers = createVimeoPlayers();
function createVimeoPlayers() {
    let players = document.querySelectorAll(".vimeo");
    let vimeoPlayers = [];
    for (let i = 0; i < players.length; i++) {
        let vim = new Vimeo.Player(players[i]);
        vimeoPlayers.push(vim);
    }
    return vimeoPlayers;
}
function stopAllVimeo() {
    vimeoPlayers.forEach((vim) => vim.pause());
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
    e.target.nextElementSibling.classList.toggle("closed");
}
