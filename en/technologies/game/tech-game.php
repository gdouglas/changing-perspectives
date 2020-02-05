<?php
if ($_SESSION["correctCount"] == null){
    $_SESSION["correctCount"] = 0;
}
// print_r($_SESSION);
// TODO get the questions asking randomly, ommiting correct ones
// TODO go to next phase when answered goal number
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
    "answered" => false,
    3 =>  array(
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
function checkAnswer($q, $a) {
    global $answers;
    if ($answers[$q] == $a) {
        return true;
    } else {
        return false;
    }
}
$answers = [
    "question1" => "a1",
    "question2" => "a2",
    "question3" => "a3",
    "question4" => "a4",
    "question5" => "a5",
    "question6" => "a6"
];
$correctCount = 0;
$targetCorrect = 3;
if (count($_POST) > 0) {
    $q = array_keys($_POST)[0];
    $a = $_POST[$q];
    $answeredQ = (int) filter_var($q, FILTER_SANITIZE_NUMBER_INT);
    if ( checkAnswer($q, $a) ){
        echo "Correct! ";
        $_SESSION["correctCount"] ++;
        $questions[$answeredQ]["answered"] = true;
    } else {
        echo "Incorrect! ";
    };
    if ($correctCount == $targetCorrect) {
        echo 'You\'ve learned the lingo now let\'s <a href=".\sail\">Set Sail!</a>';
        return;
    }
    echo 
    "For <strong>$q</strong>, you answered <strong>$a</strong>
    <div class='sign question-counter'>$_SESSION[correctCount]/$targetCorrect Correct</div>";
    getNextQuestion($answeredQ);
    
}
function getNextQuestion() {
    global $questions;
    global $questionNum;
    $questionNum = count($questions) - 1;
    $questionNum = mt_rand(1, $questionNum);
    if ($questions[$questionNum]["answered"]) {
        echo "answered already!";
        getNextQuestion();
    }
    echo $questionNum;
}
echo $questionNum;
foreach ($questions[$questionNum]["options"] as $key => $option) {
    $id = $key . $questionNum;
    $options .= '<div class="tile">
        <label class="tile" for="' . $id . '">
            <div>' . strtoupper($key) . '</div>
            <img src="' . $option["image"] . '">
            <p>' . $option["option"] . '</p>
        </label>
        <input type="radio" name="question' . $questionNum . '" id="' . $id . '" value="' . $id . '">
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
';

print($questionForm);
