<?php
$imagePath = "/en/technologies/game/images/";
$game_started = &$_SESSION["sailing_status"]["start_time"];
$complete = &$_SESSION["sailing_status"]["complete"];
$speed = &$_SESSION["sailing_status"]["boat_speed"];
$supply_rate = &$_SESSION["sailing_status"]["supply_rate"];
$day = &$_SESSION["sailing_status"]["day"];
$day_rate = &$_SESSION["sailing_status"]["day_rate"];
$supplies = &$_SESSION["sailing_status"]["supplies"];
$answered = checkPost();
$game_end_message = "";
// $complete = 0;
$message = "";
// check if page is refreshed, reset post if so
if ($complete === 0) {
    // first answered question
    $_SESSION["formid"] = md5(rand(1,10000000));
    updateComplete("reset");
}

function updateComplete($increment){

    global $complete, $speed, $game_started, $message, $supplies, $answered;
    if (!$answered){
        return;
    }
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
    global $game_end_message, $complete, $supplies, $supply_rate, $day, $day_rate, $speed;

    $supplies -= $supply_rate;
    $complete += $speed;
    $day += $day_rate;

    // TODO create random events

    // TODO create victory event
    if ($complete >= 100) {
        // overwrite message with victory condition
        $game_end_message = '
            <p>Congratulations! You made it to Yuquot!</p>
            <p>Now you can watch immersive video of people fullfilling your orders!</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TkSgdGDpg7k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            ';
        $complete = 100;
    } elseif ($complete <= 1) {
        $complete = 1;
    }

    if ($supplies < 1) {
        $game_end_message = "
        <div class='game-end fail'>
            <p>You have run out of supplies! Your crew has mutinied and thrown you overboard.</p>
            <p>You maid it $complete% of the way to Hawaii</p>
        </div>
        ";
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
                "image" => "<img src=\"".$imagePath."wind-top-ship.png\" alt='alt text goes here'>",
                "option" => "Ready about! Port Tack, spanker to weather, ease heads'l sheets",
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
                "image" => "<img src=\"".$imagePath."wind-bottom-ship.png\" alt='alt text goes here'>",
                "option" => "Ready about! Starboard Tack, spanker to weather, ease heads'l sheets",
                "correct" => false
            ),
            "b" => array(
                "image" => "<img src=\"".$imagePath."wind-top-ship.png\" alt='alt text goes here'>",
                "option" => "Ready about! Starboard Tack, spanker to weather, ease heads'l sheets",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src=\"".$imagePath."people-pushing-gear.png\" alt='alt text goes here'>",
                "option" => "Haul away on the windlass",
                "correct" => true
            )
        )
    ),
    4 =>  array(
        "answered" => false,
        "image" => "<img src=\"".$imagePath."ship-mast.png\" alt='alt text goes here'>",
        "question" => "Hand aloft to loose out Fore and Main Tops'ls and T'gallants",
        "options" => array(
            "a" => array(
                "option" => "Hand aloft to loose out Fore and Main Tops'ls and T'gallants",
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
    6 =>  array(
        "answered" => false,
        "image" => "<img src=\"".$imagePath."galley-view.png\" alt='alt text goes here'>",
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
    global $answered;
    if (empty($response) || $answered === false){
        return;
    }
    global $challenges, $message;
    $question = array_keys($response);
    $answer = $response[$question[1]];
    $correct = $challenges[$question[1]]["options"][$answer]["correct"];
    global $challenge_results;
    // $message .= "You answered ". $challenges[q]["image"] with $challenges[a]["option"]
    if ($correct) {
        array_push($challenge_results, "correct");
        updateComplete("increase");
    } else {
        array_push($challenge_results, "incorrect");
        updateComplete("decrease");
    }
    // debug($question);
    // $message = "You answered \"" . $questions[$answeredQ]["question"] . "\" with " .$questions[$answeredQ]["options"][$a]["image"]."<br> The correct answer is ". $questions[$answeredQ]['image'];
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
    '<form method="POST" action="./#game" class="question">
        <h3>Choose the right answer for the image</h3>
        <div>
            <input type="hidden" name="formid" value="' . htmlspecialchars($_SESSION["formid"]) . '" />
            '.$q["image"].'
        </div>
        <div class="options">';
        for ($i = 1; $i < count($q); $i++){
            static $letter = "a";
            $option = $q["options"][$letter]["option"];
            $question .=
            '<input type="radio" name="'.$qKey.'" id="'.$qKey.$i.'" value="'.$letter.'" required>
            <div class="flex option">
            <label for="'.$qKey.$i.'">
            <span class="option-letter">'.$letter.')&nbsp;</span>
            <p class="flex-center text-left">'.$option.'</p>
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
for ($i=0; $i < COUNT($challenge_results); $i++) {
    $challengeList .= "<li class=\"challenge-results ". $challenge_results[$i] ."\"><img src=\"/images/icons/$challenge_results[$i].svg\"/></li>";
}
$game = '
<h1>Sailing to Hawaii</h1>
<div id="sail-game">
    <div class="status">
        <div class="status-wrapper">
            <span>Amount Complete</span>
            <div id="status"><span style="--complete: '.$complete.'%">'.$complete.'%</span></div>
        </div>
    </div>
    <div class="counters">
        <div class="flex"> 
            <div id="counter">
                <span class="day-count">'.$day.'</span> 
                <ol class="awards-counter text-left inline-block no-list no-pad">
                    <li>Gold: 100 days</li>
                    <li>Silver 150 days</li>
                    <li>Bronze 200 days</li>
                </ol>
            </div>
            <ol class="challenges">
            '.
                $challengeList
            .'
            <li class="challenge-results"><img src="/images/icons/question-circle.svg"></li>
        </ol>
            <div id="supplies">
                <strong>Supplies</strong>
                <img 
                    width="50px" 
                    height="50px" 
                    src="/images/icons/resources.svg" 
                    alt="a barrel and basket of items representing food"
                />
                <div class="supply-count">
                    '.$supplies.'
                </div>
            </div>
        </div>
    </div>
    <div class="map-question flex relative">
        '.$question.'
        <div class="map">
            <svg height="100%" width="100%" viewBox="0 0 100 100"  preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path 
                    fill="none"
                    stroke="black"
                    stroke-width="1"
                    stroke-linecap="round"
                    d="
                        m 65,17.5
                        a .5,.5 90 1,0 0,0.1
                        M 64,18
                        L 45,35.5
                        m 0,.4
                        a .5,.5 1 1,0 0,.1"
                />
            </svg>
            <img src="/images/pacific-map.jpg">
        </div>
        
    </div>';



$reset = '<hr>
<h3>Start Over?</h3>
<p>
    <form method="POST" action=".#game">
    <input type="hidden" name="restart" value="restart">
    <button class="btn">Restart</button>
    </form>
</p>';
if ($_POST["restart"] == "restart") {
    session_destroy();
}
if (strlen($game_end_message) > 0) {
    print $game_end_message;
    print $reset;
} else {
    print $game;
    print $reset;
}
