<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en" dir="ltr">

<head>
    <title>Encounters | Changing Perspectives</title>
    <meta name="description" content="Content to come">
    </meta>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <style>
        @media (min-width:768px) {
            #main {
                overflow: visible;
            }
            #main:before {
                content: '';
                display: block;
                pointer-events: none;
                background-image: url(/images/bg/welcome-post.png);
                background-repeat: no-repeat;
                background-size: cover;
                position: absolute;
                top: 0;
                left: -25%;
                width: 100%;
                height: 100%;
                z-index: -1;
                background-position-x: -10%;
                background-position-y: 15%;
            }
        }
    </style>
</head>

<body>
    <a class="skip-main" href="#main">Skip to main content</a>
    <header role="banner">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" role="main" tabindex="-1">
        <section class="comic">
            <h1>Encounters</h1>
            <?php include "slider.php" ?>
        </section>
            <?php include "cards/cards.php" ?>
        <?php include 'gallery.php'; ?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>
