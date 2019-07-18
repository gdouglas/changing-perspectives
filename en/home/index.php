<?=
    $language = "";
    include 'language-detect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include $_SERVER['DOCUMENT_ROOT']."/head.php" ?>
</head>
<body class="splash">
    <a class="skip-main" href="#main">Skip to main content</a>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT']."/en-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1 class="site-title">Changing Perspectives</h1>
        <div class="pull-quote text-center">
            <p>Learn about the the explorations of George Vancouver Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni tempora nemo neque officia, ut, optio totam cumque distinctio ab assumenda maxime minus adipisci facilis sint, doloremque dolor id libero repellendus?</p>
            <nav class="tiles">
                <figure class="tile">
                    <img src="/images/context.jpg" alt="">
                    <figcaption>Global context during George Vancouvers expedition</figcaption>
                </figure>
                <figure class="tile">
                    <img src="/images/expedition.jpg" alt="">
                    <figcaption>Details about expedition</figcaption>
                </figure>
                <figure class="tile">
                    <img src="/images/technologies.jpg" alt="">
                    <figcaption>Technologies of the time</figcaption>
                </figure>
                <figure class="tile">
                    <img src="/images/legacies.jpg" alt="">
                    <figcaption>Enduring legacies of the expeditions of George Vancouver</figcaption>
                </figure>
            </nav>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT']."/en-footer.php" ?>
</body>
</html>