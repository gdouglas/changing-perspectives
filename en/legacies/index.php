<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en" dir="ltr">

<head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/head.php'; ?>
    <title>Legacies | Changing Perspectives</title>
    <meta name="description" content="Content to come">
    <style>
        @media (min-width:768px) {
            #main:before {
                content: '';
                display: block;
                pointer-events: none;
                background-image: url(/images/bg/welcome-post.png);
                background-repeat: no-repeat;
                background-position: -5rem -8rem;
                background-size: cover;
                position: absolute;
                left: 1rem;
                top: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                transform:scaleX(-1);
            }
        }
    </style>
</head>

<body>
    <a class="skip-main" href="#main">Skip to main content</a>
    <header role="banner">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/en-header.php'; ?>
    </header>
    <main id="main" role="main" tabindex="-1">
        <h1>Legacies</h1>
        <?php include "slider.php" ?>
        <?php include "cards.php" ?>
        <?php include "gallery.php" ?>
    </main>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/en-footer.php'; ?>
</body>

</html>
