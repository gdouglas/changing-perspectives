<?php
//Check if you've answered enough quiz questions correctly
if ($_SESSION["quiz_complete"] == false) {
    print '<p id="game-intro">Want to sail a ship? Take this quiz then take the wheel!</p>';
}

// TODO get the questions asking randomly, omiting correct ones
// TODO go to next phase when answered goal number
$targetCorrect = 3;
$questionNum = 1;
$questions = [
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
//take the question number and answer, check for correct
function checkAnswer($q, $a) {
    global $questions;
    $a = substr($a,0,1);
    if ($questions[$q]["options"][$a]["correct"]) {
        return true;
    } else {
        return false;
    }
}
if (count($_POST) > 0) {
    $q = array_keys($_POST)[0];
    $a = $_POST[$q];
    $answeredQ = (int) filter_var($q, FILTER_SANITIZE_NUMBER_INT);
    if ( checkAnswer($answeredQ, $a) ){
        echo "Correct! ";
        $_SESSION["correctCount"] ++;
        if ($_SESSION["correctCount"] >= $targetCorrect) {
            $_SESSION["quiz_complete"] = true;
            $_SESSION["correctCount"] = $targetCorrect;
        }
        $questions[$answeredQ]["answered"] = true;
        $_SESSION["answered"][] = $answeredQ;
    } elseif ($_POST["restart"]) {
        // do nothing
    } else  {
        print "Incorrect! ";
    };

    print 
        "<div class='sign question-counter'>$_SESSION[correctCount]/$targetCorrect Correct</div>";
}
if ($_SESSION["correctCount"] < $targetCorrect) {
    getNextQuestion();
}
function getNextQuestion() {
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
        <label class="tile" for="' . $id . '">
            <div>' . strtoupper($key) . '</div>
            <img src="' . $option["image"] . '">
            <p>' . $option["option"] . '</p>
        </label>
        <input type="radio" name="question' . $questionNum . '" id="' . $id . '" value="' . $id . '" required>
    </div>';
}
$questionForm = '
<form method="POST" action=' . $_SERVER["PHP_SELF"] . '>
    <fieldset>
        <legend>
            <h2>Learn The Language of Sailing</h2>
        </legend>
        <div class="question">
            <h3>'.$questions[$questionNum]["question"] . '</h3>
             ' . $options . '

        </div>
        <button class="btn">Submit</button>
</form>
<form method="POST" action=' . $_SERVER["PHP_SELF"] . '>
    <input type="hidden" name="restart" value="restart">
    <button class="btn">Restart</button>
</form>
';

if ($_SESSION["correctCount"] >= $targetCorrect) {
    print 'You\'ve learned the lingo now let\'s <a href=".\game">Set Sail!</a>
    <p>
        <form method="POST" action=' . $_SERVER["PHP_SELF"] . '>
        <input type="hidden" name="restart" value="restart">
        <button class="btn">Restart</button>
        </form>
    </p>';
} else {
    print($questionForm);
}
