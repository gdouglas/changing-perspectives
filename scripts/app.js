window.onload = function () {
    document.querySelector("html").classList.remove("no-js");
    addNavListener();
    addCardListeners();
    getVideos();
    addTranscripts();
};

// stop playing video
var stopVideo = function (iframe) {
    iframe.contentWindow.postMessage('{"method":"pause"}', "*");
};

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
    let inputs = document.querySelectorAll("input[name=cards]");

    [...inputs].forEach((radio) => {
        radio.addEventListener("change", function () {
            [...vimeos].forEach((vid) => {
                stopVideo(vid);
            });
        });
    });
}
function getVideos() {
    var players = document.querySelectorAll(".vimeo");
    if (players.length < 1) {
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
    let playerElement = players[index];
    let vim = new Vimeo.Player(playerElement);

    console.log("player is ", playerElement);

    playerElement.addEventListener("keydown", function (e) {
        let key = e.key.toLowerCase();
        console.log(key);
        if (key === "escape" || key === "esc") {
            console.log("pressed escape");
            vim.pause();
        }
    });

    // console.log(vim);
    // // mute to enable autoplay
    // let vidEnd = vim.getDuration();
    // vim.setLoop(1);
    // vim.setVolume(0).then(
    //     vim.play()
    // ).then(
    //     function(value) {
    //         console.log(value);
    //         vim.pause()
    //         .then(function(){
    //             vim.setVolume(1);
    //             vim.setCurrentTime(vidEnd);
    //             index++;
    //             if (index === players.length) {
    //                 console.log("the end");
    //                 return;
    //             } else {
    //                 console.log("keep going");
    //                 bufferVideos(players, index);
    //             }
    //         });
    //     }
    // );
}
function stopVimeo(vim) {
    console.log("stop");
    vim.pause();
    // vim.setCurrentTime(100);
}

function addTranscripts() {
    let buttons = document.querySelectorAll(".card-button");
    console.log(buttons);
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function (e) {
            console.log(e.currentTarget.closest("iframe"));
        });
    }
}
