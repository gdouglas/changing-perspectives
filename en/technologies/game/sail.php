<?php
$game_started = &$_SESSION["sailing_status"]["start_time"];
// debug($_SESSION,"session");
$complete = &$_SESSION["sailing_status"]["complete"];
$speed = 10;//&$_SESSION["sailing_status"]["boat_speed"];
$supply_rate = &$_SESSION["sailing_status"]["supply_rate"];

$message = "";

if ($complete === 0) {
    // first answered question
    updateComplete("reset");
}

function updateComplete($increment){
    global $complete, $speed, $game_started, $message;
    $time = time();

    $time = $time - $game_started;

    switch ($increment) {
        case 'reset':
            $complete = 1;
            break;
        case 'increase':
            $speed ++;
            $complete += $speed;
            if ($speed > 15) {
                $speed = 15;
                $message .= "<p>You have max speed!</p>";
            } else {
                $message .= "<p>Increase Speed!</p>";
            }
            checkComplete();
            break;
        case 'decrease':
            debug($complete, "decrease");
            $speed --;
            $complete += $speed;
            if ($speed < -5) {
                $speed = 15;
                $message .= "<p>You have max speed!</p>";
            } else {
                $message .= "<p>Increase Speed!</p>";
            }
            $message .= "<p>Decrease Speed!</p>";
            checkComplete();
            break;
        default:
        checkComplete();
            break;
    }
}
function checkComplete() {
    global $message, $complete;
    if ($complete >= 100) {
        // overwrite message with victory condition
        $message = "<p>Congratulations! You made it yo Yuquot!";
        $complete = 100;
    } elseif ($complete <= 1) {
        $complete = 1;
    }
}
// $_SESSION["sailing_status"]["challenge_results"] = [];
$day = $_SESSION["sailing_status"]["day"];
$supplies = $_SESSION["sailing_status"]["supplies"];
$challenge_results = &$_SESSION["sailing_status"]["challenge_results"];
$question = "";
$challenges = [
    1 =>  array(
        "answered" => false,
        "image" => "<img src='https://loremflickr.com/150/150/fish' alt='alt text goes here'>",
        "question" => "What do you call a fish with legs?",
        "options" => array(
            "a" => array(
                "image" => "<img src='https://loremflickr.com/150/100/shark/all' alt='alt text goes here'>",
                "option" => "fishy",
                "correct" => true
            ),
            "b" => array(
                "image" => "<img src='https://loremflickr.com/150/100/legs' alt='alt text goes here'>",
                "option" => "not fishy",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src='https://loremflickr.com/150/100/man,face/all' alt='alt text goes here'>",
                "option" => "Rodney",
                "correct" => false
            )
        )
    ),
    2 =>  array(
        "answered" => false,
        "image" => "<img src='https://loremflickr.com/150/150/jarofpickles' alt='alt text goes here'>",
        "question" => "Open a jar of pickles",
        "options" => array(
            "a" => array(
                "image" => "<img src='https://loremflickr.com/150/100/go,left/all' alt='alt text goes here'>",
                "option" => "Left loosey",
                "correct" => true
            ),
            "b" => array(
                "image" => "<img src='https://loremflickr.com/150/100/twist,right/all' alt='alt text goes here'>",
                "option" => "Righty tighty",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src='https://loremflickr.com/150/100/smash' alt='alt text goes here'>",
                "option" => "Smashy Bashy",
                "correct" => false
            )
        )
    ),
    3 =>  array(
        "answered" => false,
        "image" => "<img src='https://loremflickr.com/150/150/dog' alt='alt text goes here'>",
        "question" => "Dogs need to be fed with:",
        "options" => array(
            "a" => array(
                "image" => "<img src='https://loremflickr.com/150/100/cheese' alt='alt text goes here'>",
                "option" => "cheese",
                "correct" => true
            ),
            "b" => array(
                "image" => "<img src='https://loremflickr.com/150/100/grapes' alt='alt text goes here'>",
                "option" => "grapes",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src='https://loremflickr.com/150/100/chocolate' alt='alt text goes here'>",
                "option" => "chocolate",
                "correct" => false
            )
        )
    ),
];
function answerQuestion(){
    // todo check if page has just been reloaded or a new question
    $response = $_POST;
    global $challenges, $message;
    $question = array_keys($response);
    $answer = $response[$question[0]];
    $correct = $challenges[$question[0]]["options"][$answer]["correct"];
    global $complete, $challenge_results;
    if ($correct) {
        array_push($challenge_results, "correct");
        updateComplete("increase");
    } else {
        //todo start aray at 1
        array_push($challenge_results, "incorrect");
        debug($challenge_results, "challenge_results");
        updateComplete("decrease");
    }
    print $message;
}
function getQuestion() {
    //get the question to ask from the challenges array
    global $challenges;
    $rand = mt_rand(1, count($challenges));
    $question = $challenges[$rand];
    return array($question, $rand);
}
function createQuestion($questionArray) {
    global $question;
    $q = $questionArray[0];
    $qKey = $questionArray[1];
    //create a question based on the content of the array
    $question = 
    '<form method="POST" action=' . $_SERVER["PHP_SELF"] . ' class="question">
        <h3>Choose the right answer for the image</h3>
        <div>
            '.$q["image"].'
        </div>';
        for ($i = 1; $i < count($q); $i++){
            static $letter = "a";
            $option = $q["options"][$letter]["option"];
            $question .= 
            '<div class="tile">
            <input type="radio" name="'.$qKey.'" id="'.$qKey.$i.'" value="'.$letter.'" required>
            <label class="tile btn" for="'.$qKey.$i.'">                
            <p>'.$letter.') '.$option.'</p>
            </label>
            </div>';
            $letter ++;
        };
    $question .= '<button class="btn">Submit</button></form>';
    return $question;

}
function askQuestion() {
    $q = getQuestion();
    $question = createQuestion($q);
    return $question;
}

answerQuestion();
askQuestion();
$challengeList = "";
for ($i=1; $i < 11; $i++) { 
    $challengeList .= "<li class=\"". $challenge_results[$i] ."\">Challenge $i</li>";
}
$game = '
<h1>Sailing to Hawaii</h1>
<div id="sail-game" class="flex flex-wrap relative">
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
        <button class="no-js btn">Next</button>
    </div>
    <div class="counters">
        <div id="counter">Day '.$day.'</div>
        <div id="supplies">Supplies: '.$supplies.'</div>
        <ol class="challenges">
            '.
                $challengeList
            .'
        </ol>
        <ol>
            <li>Gold 100</li>
            <li>Silver 150</li>
            <li>Bronze 200</li>
        </ol>
    </div>
    '.$question.'  
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