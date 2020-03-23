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

document.addEventListener('click', function (event) {

	// If the clicked element doesn't have the right selector, bail
	if (!event.target.matches('iframe')) return;
    event.target.contentWindow.postMessage('{"method":"play"}', '*');
	// Log the clicked element in the console
	console.log(event.target);

}, false);


let vimeos = document.querySelectorAll('.vimeo');
let inputs = document.querySelectorAll("input[name=cards]");

[...inputs].forEach((radio) => {
    radio.addEventListener("change", function(){
        console.log(radio);
        [...vimeos].forEach((vid) => {
            console.log(vid)
        });
    });
});


[...vimeos].forEach((el) => {
    let input = document.querySelector("input[value="+el.id);
    
    console.log(el);
    
});
