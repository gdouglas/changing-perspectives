<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <title>Changing Perspectives | Expedition</title>
</head>

<body class="splash">
    <a class="skip-main" href="#main">Skip to main content</a>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1>Vancouver's Story...</h1>
        <div class="pull-quote text-center">
            <h2 class="subtitle">Why did the British send Vancouver Yuquot?</h2>
        </div>
        <div class="slider-container relative">
            <ul class="slider">
                <li id="article-1" class="slide active heading" tabindex="0">
                    <h3 class="gold">What did Vancouver’s expedition actually achieve?</h3>
                </li>
                <li id="article-2" class="slide heading" tabindex="0">
                    <h3 class="gold">What was it like to be a member of Vancouver’s crew?</h3>
                </li>
                <li id="article-3" class="slide heading" tabindex="0">
                    <h3 class="gold">What were the initial meetings like between the First Nations people and these foreigners?</h3>
                </li>
            </ul>
            <div class="slider-controls">
                <button id="prev" type="button" class="btn" disabled>Previous</button>
                <button id="next" type="button" class="btn">Next</button>
            </div>
            <ol class="slider-navigation">
                <li><a href="#article-1">
                        <img class="slide-icon" src="/images/icons/question-circle.svg" alt="question icon">
                    </a>
                </li>
                <li>
                    <a href="#article-2">
                        <img class="slide-icon" src="/images/icons/question-circle.svg" alt="question icon">
                    </a>
                </li>
                <li>
                    <a href="#article-3">
                        <img class="slide-icon" src="/images/icons/question-circle.svg" alt="question icon">
                    </a>
                </li>
            </ol>
        </div>

    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>