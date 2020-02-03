//should be added to a build process

function nextQuestion(){
    //called on button click

    // remove active class
    // add active class to next
    // enable previous button if needed
    // if last question change button to set sail
    // keep disabled until question is answered
    //
    let currentQuestion = document.querySelector('.question.active');
    checkAnswer(currentQuestion);
    currentQuestion.classList.remove('active');
    if (currentQuestion.nextElementSibling) {
        currentQuestion.nextElementSibling.classList.add("active");
    } else {
        alert("all done!");
    }
    // console.log(currentQuestion.nextElementSibling);
}

function checkAnswer(question) {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', './game/tech-game.php?dog=shit');

    // request state change event
    xhr.onreadystatechange = function() {

    // request completed?
    if (xhr.readyState !== 4) return;

    if (xhr.status === 200) {
        // request successful - show response
        console.log("success", xhr.responseText);
    }
    else {
        // request error
        console.log('HTTP error', xhr.status, xhr.statusText);
    }
    };

    // start request
    xhr.send();
}