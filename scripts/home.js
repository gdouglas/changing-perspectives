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
		// console.log("there is source", source);
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