window.onload = function () {
    document.querySelector("html").classList.remove("no-js");
    addNavListener();
    addCardListeners();
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
            console.log(radio);
            [...vimeos].forEach((vid) => {
                stopVideo(vid);
            });
        });
    });
}
