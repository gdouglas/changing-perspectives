<?php
$sailingArray = array(
    "complete" => 0,
    "day" => 0,
    "supplies" => 100,
    "challenge_results" => array(),
    "start_time" => time()
);

//set session if null 
function startSession($sailingArray){
    if (session_status() == 1) {
        session_start();
        //set default values for quiz variables
        if (empty($_SESSION["correctCount"])) {
            $_SESSION["correctCount"] = 0;
        }
        if (empty($_SESSION["answered"])) {
            $_SESSION["answered"] = array();
        }
        if (empty($_SESSION["quiz_complete"])) {
            $_SESSION["quiz_complete"] = false;
        }
        if (empty($_SESSION["sailing_status"])) {
            $_SESSION["sailing_status"] = $sailingArray;
        }
    }
}

startSession($sailingArray);

//User has pressed restart button, clear progress
if ($_POST["restart"] == "restart") {
    $_SESSION["correctCount"] = 0;
    $_SESSION["answered"] = array();
    $_SESSION["quiz_complete"] = false;
    $_SESSION["sailing_status"] = $sailingArray;
}
?>