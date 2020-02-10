<?php
//set session if null 
function startSession(){
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
    }
}
startSession();

//User has pressed restart button, clear progress
if ($_POST["restart"] == "restart") {
    $_SESSION["correctCount"] = 0;
    $_SESSION["answered"] = array();
    $_SESSION["quiz_complete"] = false;
}
?>