window.onload = function () {
    document.querySelector("html").classList.remove("no-js");
    addNavListener();
    addCardListeners();
    getVideos();
    // addTranscripts();
};

// stop playing video
// var stopVideo = function (iframe) {
//     iframe.contentWindow.postMessage('{"method":"pause"}', "*");
// };

function addNavListener() {
    let navBtn = document.getElementById("nav-menu");
    let nav = document.getElementById("top-nav");
    let header = document.querySelector("header");
    navBtn.addEventListener("click", function () {
        header.classList.toggle("open");
    });
}

function addCardListeners() {
    let vimeos = document.querySelectorAll(".vimeo");
    let cards = document.querySelectorAll(".card");
    
    console.log(cards);
    [...cards].forEach((card) => {
        card.setAttribute('tabindex','0');
        card.addEventListener("keydown", (e) => {
            if (e.key == "Enter") {
                setActive(card);
            } else if (e.key == "Escape") {
                setActive();
            }
        })
        card.addEventListener("click", function (e) {
            setActive(card);
            [...vimeos].forEach((vid) => {
                // stopVideo(vid);
            });
        });
    });
}
//remove all other active class and add to element
function setActive(element) {
    let active = document.querySelectorAll(".active");
    [...active].forEach((el) => {
        el.classList.remove("active");
    });
    if (element) {
        let wrapper = document.querySelectorAll(".no-active");
        [...wrapper].forEach((el) => {
            el.classList.remove("no-active");
            el.classList.add("has-active");
        });
    } else {
        let wrapper = document.querySelectorAll(".has-active");
        [...wrapper].forEach((el) => {
            el.classList.remove("has-active");
            el.classList.add("no-active");
        });
    }
    element.classList.add("active");
}
function getVideos() {
    var players = document.querySelectorAll(".vimeo");
    if (players.length < 1) {
        return;
    }
    // let index = 0;
    // bufferVideos(players, index);
}
// function bufferVideos(players, index) {
//     console.log(players.length, index);
//     let playerElement = players[index];
//     let vim = new Vimeo.Player(playerElement);

//     console.log("player is ", playerElement);

//     playerElement.addEventListener("keydown", function (e) {
//         let key = e.key.toLowerCase();
//         console.log(key);
//         if (key === "escape" || key === "esc") {
//             console.log("pressed escape");
//             vim.pause();
//         }
//     });

//     // console.log(vim);
//     // // mute to enable autoplay
//     // let vidEnd = vim.getDuration();
//     // vim.setLoop(1);
//     // vim.setVolume(0).then(
//     //     vim.play()
//     // ).then(
//     //     function(value) {
//     //         console.log(value);
//     //         vim.pause()
//     //         .then(function(){
//     //             vim.setVolume(1);
//     //             vim.setCurrentTime(vidEnd);
//     //             index++;
//     //             if (index === players.length) {
//     //                 console.log("the end");
//     //                 return;
//     //             } else {
//     //                 console.log("keep going");
//     //                 bufferVideos(players, index);
//     //             }
//     //         });
//     //     }
//     // );
// }
function stopVimeo(vim) {
    // console.log("stop");
    // vim.pause();
    // vim.setCurrentTime(100);
}
let cards = document.querySelectorAll("input[name='cards']");
let players = document.querySelectorAll(".vimeo");
let vimeoPlayers = [];
for (let i = 0; i < players.length; i++) {
    let vim = new Vimeo.Player(players[i]);
    vimeoPlayers.push(vim);
}
if (cards.length > 0) {
    for (var i = 0; i < cards.length; i++) {
        cards[i].addEventListener("change", function(){
            vimeoPlayers.forEach(vim => vim.pause())
        })
    }
}
// function addTranscripts() {
//     let buttons = document.querySelectorAll(".card-button");
//     console.log(buttons);
//     for (let i = 0; i < buttons.length; i++) {
//         buttons[i].addEventListener("click", function (e) {
//             console.log(e.currentTarget.closest("iframe"));
//         });
//     }
// }
