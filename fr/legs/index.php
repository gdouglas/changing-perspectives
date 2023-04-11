<!DOCTYPE html>
<html class="no-js" lang="fr" xml:lang="fr" dir="ltr">
    <head>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/head.php'; ?>
        <title>Legs | Nouvelles perspectives</title>
        <meta name="description" content="Legacies and impacts of Vancouver's exploration of the Pacific Northwest." />
        <style>
            @media (min-width: 768px) {
                #main:before {
                    content: "";
                    display: block;
                    pointer-events: none;
                    background-image: url(/images/bg/welcome-post.png);
                    background-repeat: no-repeat;
                    /* background-position: -5rem -8rem; */
                    right: -25%;
                    background-position-x: -10vw;
                    background-position-y: 15%;
                    background-size: cover;
                    position: absolute;
                    left: 1rem;
                    top: 0;
                    width: calc(100% - 1rem);
                    height: 100%;
                    z-index: -1;
                    transform: scaleX(-1);
                }
            }
        </style>
    </head>

    <body>
        <a class="skip-main" href="#main">Skip to main content</a>
        <header role="banner">
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/fr-header.php'; ?>
        </header>
        <main id="main" role="main" tabindex="-1">
            <h1>Legs</h1>
            <?php include "slider.php" ?>
            <?php include "cards.php" ?>
            <?php include "gallery.php" ?>
        </main>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/fr-footer.php'; ?>
    </body>
</html>
