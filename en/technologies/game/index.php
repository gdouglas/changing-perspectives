<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <title>Changing Perspectives | Context</title>
    <noscript>
        <style>
        .question {
            display: block;
        }
        .needjs {
            display: none;
        }
        </style>
    </noscript>
</head>

<body class="splash">
    <a class="skip-main" href="#main">Skip to main content</a>
    <header class="">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <div class="breadcrumb"><a href="../">Navigation and Ship Technology</a>&nbsp;>&nbsp;Game Title goes here</div>
        <h1>Game Title Goes Here</h1>
        <div class="text-center">
            <div id="game">
                <p id="game-intro">Want to sail a ship? Take this quiz then take the wheel!</p>
                <a href="#game" class="btn btn-action">Ready to play?</a>
                <div id="play">
                    <form>
                        <fieldset>
                            <legend>
                                <h2>Learn The Language of Sailing</h2>
                            </legend>
                            <div class="question active">
                                <h3>Question 1: Lorem Ipsum Dolor Sit Amet</h3>
                                <div class="tile">
                                    <label class="tile" for="a1">
                                        <div>A</div>
                                        <img src="http://placehold.jp/150x100.png">
                                    </label>
                                    <input type="radio" name="question1" id="a1" value="a1">
                                </div>
                                <div class="tile">
                                    <label class="tile" for="b1">
                                        <div>B</div>
                                        <img src="http://placehold.jp/150x100.png">
                                    </label>
                                    <input type="radio" name="question1" id="b1" value="b1">
                                </div>
                                <div class="tile">
                                    <label class="tile" for="c1">
                                        <div>C</div>
                                        <img src="http://placehold.jp/150x100.png">
                                    </label>
                                    <input type="radio" name="question1" id="c1" value="c1">
                                </div>
                            </div>
                            <div class="question">
                                <h3>Question 2: Lorem Ipsum Dolor Sit Amet</h3>
                                <div class="tile">
                                    <label class="tile" for="a2">
                                        <div>A</div>
                                        <img src="http://placehold.jp/150x100.png">
                                    </label>
                                    <input type="radio" name="question1" id="a2" value="a2">
                                </div>
                                <div class="tile">
                                    <label class="tile" for="b2">
                                        <div>B</div>
                                        <img src="http://placehold.jp/150x100.png">
                                    </label>
                                    <input type="radio" name="question1" id="b2" value="b2">
                                </div>
                                <div class="tile">
                                    <label class="tile" for="c2">
                                        <div>C</div>
                                        <img src="http://placehold.jp/150x100.png">
                                    </label>
                                    <input type="radio" name="question1" id="c2" value="c2">
                                </div>
                            </div>
                            <div class="question">
                                <h3>Question 3: Lorem Ipsum Dolor Sit Amet</h3>
                                <div class="tile">
                                    <label class="tile" for="a3">
                                        <div>A</div>
                                        <img src="http://placehold.jp/150x100.png">
                                    </label>
                                    <input type="radio" name="question1" id="a3" value="a3">
                                </div>
                                <div class="tile">
                                    <label class="tile" for="b3">
                                        <div>B</div>
                                        <img src="http://placehold.jp/150x100.png">
                                    </label>
                                    <input type="radio" name="question1" id="b3" value="b3">
                                </div>
                                <div class="tile">
                                    <label class="tile" for="c3">
                                        <div>C</div>
                                        <img src="http://placehold.jp/150x100.png">
                                    </label>
                                    <input type="radio" name="question1" id="c3" value="c3">
                                </div>
                            </div>
                        </fieldset>
                        <button type="button" onclick="nextQuestion()" class="needjs btn">Next Question</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
    <script src="/scripts/game.js"></script>
</body>

</html>