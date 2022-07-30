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
    target.addEventListener("keyup", function(e) {
        if (keys.indexOf(e.key) > -1) {
            goal(e);
        }
    });
}

window.onload = function() {
    document.querySelector("html").classList.remove("no-js");
    addNavListener();
    addCardListeners();
    addTranscripts();
    addGalleryControls();
};
// let space open the card without scrolling
window.addEventListener("keydown", function(e) {
    if (this.document.activeElement.classList.contains("card") && e.key == " ") {
        e.preventDefault();
    }
});

function addNavListener() {
    let navBtn = document.getElementById("nav-menu");
    let header = document.querySelector("header");
    let navLinks = document.querySelectorAll("#top-nav li");
    navBtn.addEventListener("click", function() {
        header.classList.toggle("open");
    });
    navLinks.forEach(function(link) {
        link.addEventListener("click", function(e) {
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
        card.addEventListener("click", function(e) {
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
    if (el.querySelector('.vimeo')) {
        playVimeo(el);
    } else {
        playYoutube(el);
    }
}

/**
 *  Get the vimeo player closest to the event and start playing it
 *
 * @param {string} event
 */
function playVimeo(el) {
    // event.stopPropagation();
    // target vimeo player
    let selected = el.querySelector(".vimeo");
    //loop through players for a match then play
    for (let player in vimeoPlayers) {
        if (vimeoPlayers[player].element == selected) {
            vimeoPlayers[player].play();
        }
    }
}

function playYoutube(el) {
    if (!youTubePlayers) {
        console.log("no players loaded");
        return;
    }
    let selected = el.querySelector('.youtube');
    for (let player in youTubePlayers) {
        if (youTubePlayers[player].getIframe().id === selected) {
            console.log("player", youTubePlayers[player]);
            youTubePlayers[player].playVideo();
        }
    }
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

let vimeoPlayers = createVimeoPlayers(),
    youTubePlayers = [];

function createVimeoPlayers() {
    let players = document.querySelectorAll(".vimeo");
    let vimeoPlayers = [];
    for (let i = 0; i < players.length; i++) {
        let vim = new Vimeo.Player(players[i]);
        vimeoPlayers.push(vim);
    }
    return vimeoPlayers;
}

function onYouTubeIframeAPIReady() {
    console.log("add youtube");
    let players = document.querySelectorAll(".youtube");
    for (let i = 0; i < players.length; i++) {
        let yt = new YT.Player(players[i]);
        youTubePlayers.push(yt);
    }
}

function pauseVideos() {
    pauseAllVimeo();
    pauseAllYoutube();
}

function pauseAllVimeo() {
    if (!vimeoPlayers) {
        console.log("no players loaded");
        return;
    }
    vimeoPlayers.forEach((vim) => vim.pause());
}

function pauseAllYoutube() {
    if (!youTubePlayers) {
        console.log("no players loaded");
        return;
    }
    youTubePlayers.forEach((yt) => yt.pauseVideo());
}
vimeoPlayers.forEach((vim) => {
    vim.element.addEventListener("keyup", (e) => {
        switch (e.key) {
            case "Escape":
                setActive();
                break;
            default:
                break;
        }
    });
});

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

function addGalleryControls() {
    const gallery = document.getElementById("gallery");
    if (!gallery) {
        return;
    }
    //set Focus on Gallery items
    setGalleryThumbnailFocus(window.location.hash);
    let galleryThumbnails = document.querySelectorAll('#gallery li>a');
    for (let i = 0; i < galleryThumbnails.length; i++) {
        galleryThumbnails[i].addEventListener('click', function(e){
            e.preventDefault();
            let chosenImageHash = galleryThumbnails[i].hash;
            window.location.replace(chosenImageHash);
            setGalleryThumbnailFocus(chosenImageHash);
        })
    }
    window.addEventListener("keyup", function(e) {
        let gallery = document.getElementById('gallery');
        if (gallery.contains(e.target)) {
            //the gallery has focus so we can call navigation
        } else {
            return
        }
        switch (e.key) {
            case "Escape":
                closeGallery();
                break;
            case "ArrowRight":
                nextGalleryImage();
                break;
            case "ArrowLeft":
                previousGalleryImage();
                break;
            default:
                break;
        }
    });
}

function closeGallery() {
    window.location.replace(window.location.pathname + "#i");
}

function nextGalleryImage() {
    let nextImage = document.querySelector(
        '#gallery ul li a[href="' + window.location.hash + '"]'
    ).parentElement.nextElementSibling;
    if (!nextImage) {
        nextImage = document.querySelector("#gallery ul li");
    }
    let nextHash = nextImage.querySelector("a").hash;
    window.location.replace(window.location.pathname + nextHash);
    setGalleryThumbnailFocus(nextHash);
}

function previousGalleryImage() {
    let prevImage = document.querySelector(
        '#gallery ul li a[href="' + window.location.hash + '"]'
    ).parentElement.previousElementSibling;
    if (!prevImage) {
        prevImage = document.querySelector("#gallery ul li:last-of-type");
    }
    let prevHash = prevImage.querySelector("a").hash;
    window.location.replace(window.location.pathname + prevHash);
    setGalleryThumbnailFocus(prevHash);
}
function setGalleryThumbnailFocus(targetHash) {
    document.querySelector('a[href="'+targetHash+'"]').focus();
}