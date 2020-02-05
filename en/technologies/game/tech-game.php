<?php
$questionNum = 1;

if (count($_POST) > 0) {
    $q = array_keys($_POST)[0];
    $questionNum = substr($q, -1)+1;
    var_dump($questionNum);
    if ($questionNum > 3 ) {
        echo 'You\'ve learned the lingo now let\'s <a href=".\sail\">Set Sail!</a>';
        return;
    }
    $a = $_POST[1];
    echo "For $q you answered $a";
}
$answers = [
    "question1" => "a1",
    "question2" => "b2",
    "question3" => "c3",
    "question4" => "b4",
    "question5" => "a5",
    "question6" => "c6"
];

$questions = [
    1 =>  array(
        "image" => "http://placehold.jp/150x100.png",
        "question" => "What do you call a fish with legs?",
        "options" => array(
        "a" => array(
            "image" => "http://placehold.jp/150x100.png",
            "option" => "fishy"
        ),
        "b" => array(
            "image" => "http://placehold.jp/150x100.png",
            "option" => "not fishy"
        ),
        "c" => array(
            "image" => "http://placehold.jp/150x100.png",
            "option" => "Rodney"
        ))
    ),
    2 =>  array(
        "image" => "http://placehold.jp/150x100.png",
        "question" => "Open a jar of pickles",
        "options" => array(
        "a" => array(
            "image" => "http://placehold.jp/150x100.png",
            "option" => "Left loosey"
        ),
        "b" => array(
            "image" => "http://placehold.jp/150x100.png",
            "option" => "Righty tighty"
        ),
        "c" => array(
            "image" => "http://placehold.jp/150x100.png",
            "option" => "Smashy Bashy"
        ))
    ),
    3 =>  array(
        "image" => "http://placehold.jp/150x100.png",
        "question" => "Dogs need to be fed with:",
        "options" => array(
        "a" => array(
            "image" => "http://placehold.jp/150x100.png",
            "option" => "cheese"
        ),
        "b" => array(
            "image" => "http://placehold.jp/150x100.png",
            "option" => "grapes"
        ),
        "c" => array(
            "image" => "http://placehold.jp/150x100.png",
            "option" => "chocolate"
        ))
    ),
];

foreach ($questions[$questionNum]["options"] as $key => $option) {
    $id = $key.$questionNum;
    $options .= '<div class="tile">
        <label class="tile" for="'.$id.'">
            <div>'.strtoupper($key).'</div>
            <img src="'. $option["image"] .'">
            <p>'.$option["option"].'</p>
        </label>
        <input type="radio" name="question'.$questionNum.'" id="'.$id.'" value="'.$id.'">
    </div>';
}
$questionForm = '
<form method="POST" action='.$_SERVER["PHP_SELF"].'>
    <fieldset>
        <legend>
            <h2>Learn The Language of Sailing</h2>
        </legend>
        <div class="question">
            <h3>Question '.$questionNum.': '. $questions[$questionNum]["question"].'</h3>
             '. $options .'

        </div>
        <button class="btn">Submit</button>
</form>
';

print($questionForm);