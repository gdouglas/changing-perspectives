<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <title>Changing Perspectives | Legacies</title>
</head>

<body class="splash">
    <a class="skip-main" href="#main">Skip to main content</a>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1>Stories from Yuquot...</h1>
        <div class="pull-quote text-center">
            <h2 class="subtitle">What is life like now for the Mowachaht/Muchalaht people after 200 years of colonization?</h2>
        </div>
        <div class="slider-container relative">
            <ul class="slider">
                <li id="article-1" class="slide active" tabindex="0">
                    <h3 class="gold">Yuquot Story</h3>
                </li>
                <li id="article-2" class="slide" tabindex="0">
                    <h3 class="gold">Yuquot Story</h3>
                </li>
                <li id="article-3" class="slide" tabindex="0">
                    <h3 class="gold">Yuquot Story</h3>
                </li>
            </ul>
            <div class="slider-controls">
                <button id="prev" type="button" class="btn" disabled>Previous</button>
                <button id="next" type="button" class="btn">Next</button>
            </div>
            <ol class="slider-navigation">
                <li><a href="#article-1">
                        <img class="slide-icon" src="/images/icons/newspaper-regular.svg" alt="article icon">
                    </a>
                </li>
                <li>
                    <a href="#article-2">
                        <img class="slide-icon" src="/images/icons/newspaper-regular.svg" alt="article icon">
                    </a>
                </li>
                <li>
                    <a href="#article-3">
                        <img class="slide-icon" src="/images/icons/newspaper-regular.svg" alt="article icon">
                    </a>
                </li>
            </ol>
        </div>

    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>