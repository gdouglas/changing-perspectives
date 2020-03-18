window.onload = function () {
    document.querySelector("html").classList.remove("no-js");
};
    // //pause all Vimeo videos
    // document.querySelectorAll("iframe").forEach((video) => {
    //     stopVideo(video);
    // })
    // // check for iframe video and play it, only when scroll is done
    // if (el.querySelector('iframe') && el.classList.contains('active')){
    //     el.querySelector('iframe').contentWindow.postMessage('{"method":"play"}', '*');
    // }


// stop playing video
var stopVideo = function ( iframe ) {
    iframe.contentWindow.postMessage('{"method":"pause"}', '*');
};