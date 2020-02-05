<?php session_start(); ?>    
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
                <?php include "./tech-game.php"?>
            </div>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
    <script src="/scripts/game.js"></script>
</body>

</html>