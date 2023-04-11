<!DOCTYPE html>
<html class="no-js" lang="fr" xml:lang="fr" dir="ltr">

<head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/head.php'; ?>
    <title>Relations | Nouvelles perspectives</title>
    <meta name="description" content="Informations sur les relations entre les nations indigènes et coloniales dans le nord-ouest du Pacifique depuis l'époque de l'exploration de Vancouver.">
    <style>
        @media (min-width:768px) {
            #main:before {
                content: '';
                display: block;
                pointer-events: none;
                background-image: url(/images/bg/western-red-cedar.gif);
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 200vh;
                max-height: 100%;
                z-index: -1;
                opacity: 0.1;
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
        <h1>Relations</h1>
        <?php include 'cards.php' ?>
        <?php include 'gallery.php' ?>
    </main>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/fr-footer.php'; ?>
</body>

</html>
