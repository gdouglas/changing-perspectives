<?php
$imagePath = "/en/technologies/game/images/";
//Check if you've answered enough quiz questions correctly
if ($_SESSION["quiz_complete"] == false) {
    print '
    <div id="game-intro">
        <p>
            See if you can Sail your Brig from Hawaii to Yuquot.
        </p>
        Before you can take command you’ll to know the right orders to give your crew.</p>
        <h2>Learn The Language of Sailing</h2>
        <p>Match the right order to the image:</p>
        </div>';
    print '';
}
$targetCorrect = 6;
$questionNum = 1;
$questions = [
    1 =>  array(
        "answered" => false,
        "image" => "./images/bow-of-ship.png",
        "question" => "Ready about! Port Tack, spanker to weather, ease heads'l sheets",
        "options" => array(
            "a" => array(
                "image" => "<img src=\"" . $imagePath . "bow-of-ship.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            ),
            "b" => array(
                "image" => "<img src=\"" . $imagePath . "wind-top-ship.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src=\"" . $imagePath . "wind-bottom-ship.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => true
            )
        )
    ),
    2 =>  array(
        "answered" => false,
        "image" => "<img src=\"" . $imagePath . "wind-bottom-ship.png\" alt='alt text goes here'>",
        "question" => "Ready about! Starboard Tack, spanker to weather, ease heads'l sheets",
        "options" => array(
            "a" => array(
                "image" => "<img src=\"" . $imagePath . "bow-of-ship.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            ),
            "b" => array(
                "image" => "<img src=\"" . $imagePath . "wind-top-ship.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => true
            ),
            "c" => array(
                "image" => "<img src=\"" . $imagePath . "wind-bottom-ship.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            )
        )
    ),
    3 =>  array(
        "answered" => false,
        "image" => "<img src=\"" . $imagePath . "people-pushing-gear.png\" alt='alt text goes here'>",
        "question" => "Haul away on the windlass",
        "options" => array(
            "a" => array(
                "image" => "<img src=\"" . $imagePath . "people-pushing-gear.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => true
            ),
            "b" => array(
                "image" => "<img src=\"" . $imagePath . "ship-mast.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src=\"" . $imagePath . "galley-view.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            )
        )
    ),
    4 =>  array(
        "answered" => false,
        "image" => "<img src=\"" . $imagePath . "ship-mast.png\" alt='alt text goes here'>",
        "question" => "Hand aloft to loose out Fore and Main Tops'ls and T'gallants",
        "options" => array(
            "a" => array(
                "image" => "<img src=\"" . $imagePath . "people-pushing-gear.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            ),
            "b" => array(
                "image" => "<img src=\"" . $imagePath . "ship-mast.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => true
            ),
            "c" => array(
                "image" => "<img src=\"" . $imagePath . "galley-view.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            )
        )
    ),
    5 =>  array(
        "answered" => false,
        "image" => "<img src=\"" . $imagePath . "bow-of-ship.png\" alt='alt text goes here'>",
        "question" => "Hands to set the jib. Haul your halyard, tend your sheets",
        "options" => array(
            "a" => array(
                "image" => "<img src=\"" . $imagePath . "bow-of-ship.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => true
            ),
            "b" => array(
                "image" => "<img src=\"" . $imagePath . "wind-bottom-ship.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src=\"" . $imagePath . "galley-view.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            )
        )
    ),
    6 =>  array(
        "answered" => false,
        "image" => "<img src=\"" . $imagePath . "people-pushing-gear.png\" alt='alt text goes here'>",
        "question" => "Hands to set the spanker",
        "options" => array(
            "a" => array(
                "image" => "<img src=\"" . $imagePath . "people-pushing-gear.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            ),
            "b" => array(
                "image" => "<img src=\"" . $imagePath . "ship-mast.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => false
            ),
            "c" => array(
                "image" => "<img src=\"" . $imagePath . "bow-of-ship.png\" alt='alt text goes here'>",
                "option" => "",
                "correct" => true
            )
        )
    ),
];
//take the question number and answer, check for correct
function checkAnswer($q, $a)
{
    global $questions;
    $a = substr($a, 0, 1);
    if ($questions[$q]["options"][$a]["correct"]) {
        return true;
    } else {
        return false;
    }
}
//true if page isn't refreshed
$answered = checkPost();
if ((bool) $_POST["restart"] == false && $answered) {
    $q = array_keys($_POST)[1];
    $a = $_POST[$q];
    $answeredQ = (int) filter_var($q, FILTER_SANITIZE_NUMBER_INT);
    $message = "You answered " . $questions[$answeredQ]["question"] . " with " . $questions[$answeredQ]['image'];
    if (checkAnswer($answeredQ, $a)) {
        $message = "<div class='answer right'><div class='success'>You correctly answered! </div>" . $message . "</div>";
        $_SESSION["correctCount"]++;
        if ($_SESSION["correctCount"] >= $targetCorrect) {
            $_SESSION["quiz_complete"] = true;
            $_SESSION["correctCount"] = $targetCorrect;
        }
        $questions[$answeredQ]["answered"] = true;
        $_SESSION["answered"][] = $answeredQ;
    } else {
        $message = "<div class='answer wrong'><div class='success'>Sorry Wrong answer! </div>" . $message . "</div>";
    };
    print $message;
}
//display answer count
print
    "<div class='sign question-counter'>$_SESSION[correctCount]/$targetCorrect Correct</div>";
if ($_SESSION["correctCount"] < $targetCorrect) {
    getNextQuestion();
}
function getNextQuestion()
{
    global $questions;
    global $questionNum;
    //create an array of all possible questions
    //compare against answered
    $availableQuestions = array_keys($questions);
    $availableQuestions = array_diff($availableQuestions, $_SESSION["answered"]);
    $question = array_rand($availableQuestions);
    $questionNum = $availableQuestions[$question];
    // echo "got question $questions";
}
foreach ($questions[$questionNum]["options"] as $key => $option) {
    $id = $key . $questionNum;
    $options .= '<div class="tile">
        <input type="radio" name="question' . $questionNum . '" id="' . $id . '" value="' . $id . '" required>
        <label class="tile" for="' . $id . '">
            <div>' . strtoupper($key) . '</div>
            ' . $option["image"] . '
            <p>' . $option["option"] . '</p>
        </label>
    </div>';
}
$questionForm = '
<form method="POST" action="./game#game">
    <input type="hidden" name="formid" value="' . htmlspecialchars($_SESSION["formid"]) . '" />
    <div class="question">
        <h3>' . $questions[$questionNum]["question"] . '</h3>
            <div class="tiles">
            ' . $options . '
        </div>
    </div>
    <input type="hidden" name="restart" value=0>
    <button class="btn">Submit</button>
</form>
<section>
<ul class="gallery">
    <li>
        <figure id="sails" class="relative">
            <a href="#sails" class="open">
                <img src="' . $imagePath . 'sails.jpg" alt="alt text goes here">
            </a>
            <img src="' . $imagePath . 'sails.jpg" alt="alt text goes here">
            <figcaption>
                <a href="#gallery" class="close btn absolute top right">Close</a>
                <p>Use these descriptions to help you understand what these questions are asking.</p>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure id="port-starboard" class="relative">
            <a href="#port-starboard" class="open">
                <img src="' . $imagePath . 'port-starboard.jpg" alt="The right side of a ship is shown in green and the left side is shown as red. Orientation is created from facing the bow.">
            </a>
            <img src="' . $imagePath . 'port-starboard.jpg" alt="The right side of a ship is shown in green and the left side is shown as red. Orientation is created from facing the bow.">
            <figcaption>
                <a href="#gallery" class="close btn absolute top right">Close</a>
                <p>Use these descriptions to help you understand what these questions are asking.</p>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure id="tack" class="relative">
            <a href="#tack" class="open">
                <img src="' . $imagePath . 'port-starboard-tack.png" alt="A boat is shown waining into the wind, turn right or Port for port tack and left or starboard for starboard">
            </a>
            <img src="' . $imagePath . 'port-starboard.jpg" alt="The right side of a ship is shown in green and the left side is shown as red. Orientation is created from facing the bow.">
            <figcaption>
                <a href="#gallery" class="close btn absolute top right">Close</a>
                <p>Use these descriptions to help you understand what these questions are asking.</p>
            </figcaption>
        </figure>
    </li>
</ul>
</div>
</section>
<form method="POST" action="./game#game">
    <input type="hidden" name="restart" value=1>
    <button class="btn">Restart</button>
</form>
';

if ($_SESSION["correctCount"] >= $targetCorrect) {
    print '
        <div class="quiz-win">
        <strong>Congratulations! You have learned the language of sailing.</strong>
        <p>After you raise the anchor and set you sails, make sure your vessel stays on the right tack to get you to Yuquot before you run out of supplies.</p>
        <a class="btn" href="./game#game">Set Sail!</a>
    <p>
        <form method="POST" action="./game#game">
        <input type="hidden" name="restart" value="restart">
        <button class="btn">Restart</button>
        </form>
    </p>';
} else {
    print($questionForm);
}
