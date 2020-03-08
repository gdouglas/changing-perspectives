<?php
$imagePath = "/en/technologies/game/images/";
$game_started = &$_SESSION["sailing_status"]["start_time"];
$complete = &$_SESSION["sailing_status"]["complete"];
$speed = &$_SESSION["sailing_status"]["boat_speed"];
$supply_rate = &$_SESSION["sailing_status"]["supply_rate"];
$day = &$_SESSION["sailing_status"]["day"];
$day_rate = &$_SESSION["sailing_status"]["day_rate"];
$supplies = &$_SESSION["sailing_status"]["supplies"];
// debug($_SESSION, "session");
// debug($speed, "speed");
// $complete = 0;
$message = "";

if ($complete === 0) {
    // first answered question
    updateComplete("reset");
}

function updateComplete($increment){
    global $complete, $speed, $game_started, $message, $supplies;
    $time = time();

    $time = $time - $game_started;

    switch ($increment) {
        case 'reset':
            $complete = 1;
            break;
        case 'increase':
            $speed += 2;

            if ($speed > 15) {
                $speed = 15;
                $message .= "<p>You have max speed!</p>";
            } else {
                $message .= "<p>Increase Speed!</p>";
            }

            $supply_rate -= 2;
            if ($supply_rate < 4) {
                $supply_rate = 4;
            }

            incrementValues();
            break;
        case 'decrease':
            $speed -= 2;

            if ($speed < -10) {
                $speed = -10;
            }
            $message .= "<p>Decrease Speed!</p>";

            $supply_rate += 2;
            if ($supply_rate > 14) {
                $supply_rate = 14;
            }

            incrementValues();
            break;

        default:
            incrementValues();
            break;
    }
}
function incrementValues() {
    global $message, $complete, $supplies, $supply_rate, $day, $day_rate, $speed;

    $supplies -= $supply_rate;
    $complete += $speed;
    $day += $day_rate;

    // TODO create random events

    // TODO create victory event
    if ($complete >= 100) {
        // overwrite message with victory condition
        $message = "<p>Congratulations! You made it to Yuquot!";
        $complete = 100;
    } elseif ($complete <= 1) {
        $complete = 1;
    }
}

$challenge_results = &$_SESSION["sailing_status"]["challenge_results"];
$question = "";
$challenges = [
    1 =>  array(
        "answered" => false,
        "image" => "<img src=\"".$imagePath."wind-top-ship.png\" alt='alt text goes here'>",
        "question" => "Ready about! Port Tack, spanker to weather, ease heads'l sheets",
        "options" => array(
            "a" => array(
                "image" => "<img src=\"".$imagePath."wind-top-ship.png\" alt='alt text goes here'>",
                "option" => "Ready about! Port Tack, spanker to weather, ease heads'l sheets",
                "correct" => true
            ),
            "b" => array(
                "image" => "<img src=\"".$imagePath."wind-bottom-ship.png\" alt='alt text goes here'>",
                "option" => "Ready about! Starboard Tack, spanker to weather, ease heads'l sheets",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src=\"".$imagePath."people-pushing-gear.png\" alt='alt text goes here'>",
                "option" => "Haul away on the windlass",
                "correct" => false
            )
        )
    ),
    2 =>  array(
        "answered" => false,
        "image" => "<img src=\"".$imagePath."wind-bottom-ship.png\" alt='alt text goes here'>",
        "question" => "Ready about! Starboard Tack, spanker to weather, ease heads'l sheets",
        "options" => array(
            "a" => array(
                "image" => "<img src=\"".$imagePath."wind-bottom-ship.png\" alt='alt text goes here'>",
                "option" => "Ready about! Starboard Tack, spanker to weather, ease heads'l sheets",
                "correct" => true
            ),
            "b" => array(
                "image" => "<img src=\"".$imagePath."wind-bottom-ship.png\" alt='alt text goes here'>",
                "option" => "Ready about! Starboard Tack, spanker to weather, ease heads'l sheets",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src=\"".$imagePath."people-pushing-gear.png\" alt='alt text goes here'>",
                "option" => "Haul away on the windlass",
                "correct" => false
            )
        )
    ),
    3 =>  array(
        "answered" => false,
        "image" => "<img src=\"".$imagePath."people-pushing-gear.png\" alt='alt text goes here'>",
        "question" => "Haul away on the windlass",
        "options" => array(
            "a" => array(
                "option" => "Haul away on the windlass",
                "correct" => true
            ),
            "b" => array(
                "option" => "Ready about! Port Tack, spanker to weather, ease heads'l sheets",
                "correct" => false
            ),
            "c" => array(
                "option" => "Hands to set the jib. Haul your halyard, tend your sheets",
                "correct" => false
            )
        )
    ),
    4 =>  array(
        "answered" => false,
        "image" => "<img src=\"".$imagePath."ship-mast.png\" alt='alt text goes here'>",
        "question" => "Hand aloft to loose out Fore and Main Tops'ls and T'gallants",
        "options" => array(
            "a" => array(
                "option" => "Haul away on the windlass",
                "correct" => true
            ),
            "b" => array(
                "option" => "Hands to set the spanker",
                "correct" => false
            ),
            "c" => array(
                "option" => "Hands to set the jib. Haul your halyard, tend your sheets",
                "correct" => false
            )
        )
    ),
    5 =>  array(
        "answered" => false,
        "image" => "<img src=\"".$imagePath."bow-of-ship.png\" alt='alt text goes here'>",
        "question" => "Hands to set the jib. Haul your halyard, tend your sheets",
        "options" => array(
            "a" => array(
                "option" => "Hands to set the jib. Haul your halyard, tend your sheets",
                "correct" => true
            ),
            "b" => array(
                "option" => "Hand aloft to loose out Fore and Main Tops'ls and T'gallants",
                "correct" => false
            ),
            "c" => array(
                "option" => "Hands to set the jib. Haul your halyard, tend your sheets",
                "correct" => false
            )
        )
    ),
    3 =>  array(
        "answered" => false,
        "image" => "<img src=\"".$imagePath."people-pushing-gear.png\" alt='alt text goes here'>",
        "question" => "Hands to set the spanker",
        "options" => array(
            "a" => array(
                "option" => "Hands to set the jib. Haul your halyard, tend your sheets",
                "correct" => false
            ),
            "b" => array(
                "option" => "Hands to set the spanker",
                "correct" => true
            ),
            "c" => array(
                "option" => "Hands to set the jib. Haul your halyard, tend your sheets",
                "correct" => false
            )
        )
    ),
];
function answerQuestion(){
    // todo check if page has just been reloaded or a new question
    $response = $_POST;
    // debug($response);
    if (empty($response)){
        return;
    }
    global $challenges, $message;
    $question = array_keys($response);
    $answer = $response[$question[0]];
    $correct = $challenges[$question[0]]["options"][$answer]["correct"];
    global $challenge_results;
    if ($correct) {
        array_push($challenge_results, "correct");
        updateComplete("increase");
    } else {
        //todo start aray at 1
        array_push($challenge_results, "incorrect");
        // debug($challenge_results, "challenge_results");
        updateComplete("decrease");
    }
    print $message;
}
function getQuestion() {
    //get the question to ask from the challenges array
    global $challenges;
    $rand = mt_rand(1, count($challenges));
    $question = $challenges[$rand];
    $_SESSION['random'] = time();
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
            <input type="hidden" id="questionID" name="questionID" value="'.time().'">
            '.$q["image"].'
        </div>
        <div class="tiles">';
        for ($i = 1; $i < count($q); $i++){
            static $letter = "a";
            $option = $q["options"][$letter]["option"];
            $question .=
            '<div class="tile">
            <input type="radio" name="'.$qKey.'" id="'.$qKey.$i.'" value="'.$letter.'" required>
            <label for="'.$qKey.$i.'">
            <p>'.$letter.') '.$option.'</p>
            </label>
            </div>';
            $letter ++;
        };
    $question .= '</div><button class="btn">Submit</button></form>';
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
for ($i=0; $i < 10; $i++) {
    $n = $i + 1;
    $challengeList .= "<li class=\"". $challenge_results[$n] ."\">Challenge $n</li>";
}
$game = '
<h1>Sailing to Hawaii</h1>
<div id="sail-game" class="flex flex-wrap relative">
<div class="status">
    <span>Amount Complete</span>
    <div id="status"><span style="--complete: '.$complete.'%">'.$complete.'</span></div>
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