<?php
$sailingArray = array(
    "complete" => 0,
    "day" => 0,
    "day_rate" => 12,
    "supplies" => 500,
    "supply_rate" => 16,
    "challenge_results" => array(),
    "boat_speed" => 6
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

// todo set session expiry
startSession($sailingArray);

//User has pressed restart button, clear progress
if ($_POST["restart"] == "restart") {
    $_SESSION["correctCount"] = 0;
    $_SESSION["answered"] = array();
    $_SESSION["quiz_complete"] = false;
    $_SESSION["sailing_status"] = $sailingArray;
}
?>