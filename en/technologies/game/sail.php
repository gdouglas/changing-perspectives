<?php print '
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
?>