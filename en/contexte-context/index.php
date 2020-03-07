<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <title>Changing Perspectives | Context</title>
</head>

<body class="splash">
    <a class="skip-main" href="#main">Skip to main content</a>
    <header class="">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1>The story before Vancouver...</h1>
        <div class="pull-quote text-center">
            <h2 class="subtitle">Why did the Europeans come to the Pacific North West Coast? </h2>
        </div>
        <div class="slider-container relative">
            <ul class="slider">
                <li id="article-1" class="slide active heading" tabindex="0">
                    <h3 class="gold">What was life like for Indigenous People on the Northwest coast before the arrival of the newcomers?</h3>
                </li>
                <li id="article-2" class="slide heading" tabindex="0">
                    <h3 class="gold">What were the world events that lead up to Vancouver’s arrival?</h3>
                </li>
                <li id="article-3" class="slide heading" tabindex="0">
                    <h3 class="gold">
                        How was the European search for the North West Passage and the fur trade changing the Pacific Northwest Coast?
                    </h3>
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