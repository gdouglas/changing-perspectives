<?php
$complete = $_SESSION["sailing_status"]["complete"];
$day = $_SESSION["sailing_status"]["day"];
$supplies = $_SESSION["sailing_status"]["supplies"];
// $challenge_results = $_SESSION["sailing_status"]["challenge_results"];
$question = "";
$_SESSION["sailing_status"]["complete"] = 0;
debug($_SESSION, "Session");
$challenges = [
    1 =>  array(
        "answered" => false,
        "image" => "http://placehold.jp/150x100.png",
        "question" => "What do you call a fish with legs?",
        "options" => array(
            "a" => array(
                "image" => "http://placehold.jp/150x100.png",
                "option" => "fishy",
                "correct" => true
            ),
            "b" => array(
                "image" => "http://placehold.jp/150x100.png",
                "option" => "not fishy",
                "correct" => false
            ),
            "c" => array(
                "image" => "http://placehold.jp/150x100.png",
                "option" => "Rodney",
                "correct" => false
            )
        )
    ),
    2 =>  array(
        "answered" => false,
        "image" => "http://placehold.jp/150x100.png",
        "question" => "Open a jar of pickles",
        "options" => array(
            "a" => array(
                "image" => "http://placehold.jp/150x100.png",
                "option" => "Left loosey",
                "correct" => true
            ),
            "b" => array(
                "image" => "http://placehold.jp/150x100.png",
                "option" => "Righty tighty",
                "correct" => false
            ),
            "c" => array(
                "image" => "http://placehold.jp/150x100.png",
                "option" => "Smashy Bashy",
                "correct" => false
            )
        )
    ),
    3 =>  array(
        "answered" => false,
        "image" => "http://placehold.jp/150x100.png",
        "question" => "Dogs need to be fed with:",
        "options" => array(
            "a" => array(
                "image" => "http://placehold.jp/150x100.png",
                "option" => "cheese",
                "correct" => true
            ),
            "b" => array(
                "image" => "http://placehold.jp/150x100.png",
                "option" => "grapes",
                "correct" => false
            ),
            "c" => array(
                "image" => "http://placehold.jp/150x100.png",
                "option" => "chocolate",
                "correct" => false
            )
        )
    ),
];
function answerQuestion(){
    // if ($_POST[])
    // randomly choose right or rong for testing
    debug($_POST, "answerQuestion POST");
    $value = (bool)random_int(0, 1);
    if ($value) {
        print "you got it right!";
    } else {
        print "you got it wrong";
    }
}
debug($_SESSION, "Session");
function getQuestion() {
    //get the question to ask from the challenges array
    return 1;
}
function createQuestion($q) {
    global $question;
    //create a question based on the content of the array
    $question = 
    '<form method="POST" action=' . $_SERVER["PHP_SELF"] . ' class="question">
        <h3>Choose the right answer for the image</h3>
        <div>
            <img src="http://placehold.jp/150x100.png" alt="Some really good alt text">
        </div>';
    
        for ($i = 1; $i < 4; $i++){
            $question .= 
            '<div class="tile">
                <input type="radio" name="item'.$q.'" id="item'.$q.$i.'" value="bar" required>
                <label class="tile" for="item'.$q.$i.'">                
                    <p>Answer '.$i.'</p>
                </label>
            </div>';
        };
    $question .= '<button class="btn">Submit</button></form>';
    return $question;

}
function askQuestion() {
    $q = getQuestion();
    $question = createQuestion($q);
    return $question;
}

$question = answerQuestion();
askQuestion();

$game = '
<h1>Sailing to Hawaii</h1>
<div id="sail-game" class="flex flex-wrap relative">
    '.$question.'
    <div class="status">
        <div id="status" style="--complete: '.$complete.'%"><span>'.$complete.'% complete</span></div>
    </div>
    <div class="map relative">
        <svg height="100%" width="100%" viewBox="0 0 100 100"  preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <line 
            x1="48" y1="40" x2="68" y2="18" 
            stroke="#765373"
            stroke-linecap="round"
            stroke-width="1"/>
        </svg>
        <img src="/images/pacific-map.jpg">
        <button class="nojs btn">Next</button>
    </div>
    <div class="counters">
        <div id="counter">Day '.$day.'</div>
        <div id="supplies">Supplies: '.$supplies.'</div>
        <ol class="challenges">
            <li>Challenge 1</li>
            <li>Challenge 2</li>
            <li>Challenge 3</li>
            <li>Challenge 4</li>
            <li>Challenge 5</li>
            <li>Challenge 6</li>
            <li>Challenge 7</li>
            <li>Challenge 8</li>
        </ol>
        <ol>
            <li>Gold 100</li>
            <li>Silver 150</li>
            <li>Bronze 200</li>
        </ol>
    </div>   
</div>';



$reset = '<hr>
<h3>Start Over?</h3>
<p>
    <form method="POST" action=' . $_SERVER["PHP_SELF"] . '>
    <input type="hidden" name="restart" value="restart">
    <button class="btn">Restart</button>
    </form>
</p>';
if ($_POST["restart"] == "restart") {
    session_destroy();
    $_SESSION["correctCount"] = 0;
    $_SESSION["quiz_complete"] = false;
}
print $game;
print $reset;
?>