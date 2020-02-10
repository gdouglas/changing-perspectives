<?php print '
<h1>Sailing to Hawaii</h1>
<div id="game" class="flex">
    <div class="status">
        <div id="status"><span>0% complete</span></div>
    </div>
    <div class="map relative">
        <svg height="100%" width="100%" viewBox="0 0 100 100"  preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="0" y1="0" x2="80" y2="60" stroke="#765373" stroke-width="1"/>
        </svg>
        <img src="/images/pacific-map.jpg">
    </div>
    <div class="counters">
        <div id="counter">Day 0</div>
        <div id="supplies">Supplies: 100</div>
        <ol class="challenges">
            <li>Challenge 1</li>
            <li>Challenge 2</li>
            <li>Challenge 3</li>
            <li>Challenge 4</li>
            <li>Challenge 5</li>
            <li>Challenge 6</li>
            <li>Challenge 7</li>
            <li>Challenge 8</li>
        </ol>
        <ol>
            <li>Gold 100</li>
            <li>Silver 150</li>
            <li>Bronze 200</li>
        </ol>
    </div>   
</div>



<hr>
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
?>