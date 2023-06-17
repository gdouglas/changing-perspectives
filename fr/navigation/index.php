<!DOCTYPE html>
<html class="no-js" lang="fr" xml:lang="fr" dir="ltr">

<head>
    <title>Navigation | Nouvelles perspectives</title>
    <meta name="description" content="Découvrez la technologie et les techniques utilisées par les Européens pour explorer le monde à la fin des années 1700.">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <style>
        @media (min-width:768px) {
            #main:before {
                content: '';
                display: block;
                pointer-events: none;
                background-image: url(/images/bg/anchor.png);
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
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/fr-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1>Navigation</h1>
        <section class="cards-wrapper no-active" aria-label="Videos about European sailing technologies">
            <div class="offScreen">
                <p>
                    Cliquez ou appuyez sur Entrée pour retourner les cartes et regarder une vidéo.
                </p>
            </div>
            <div class="cards">
                <div id="card1" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Vidéo: </span>Comment est-ce que le capitaine Vancouver s’orientait-il en mer?</h2>
                        </div>
                        <div class="back">
                            <a href="#card2" class="card-skip-link offScreen">Passer à la carte suivante</a>
                            <div class="responsive-wrapper">
                                <iframe id="video1" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/mEZ3ePRd8hs?enablejsapi=1&modestbranding=1&rel=0&hl=fr-ca&cc_lang_pref=fr" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video1-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Afficher</span><span class="hide-status">Masquer</span> Transcription</button>
                            <label class="no-js">Transcription</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video1-transcript" class="transcript closed">
                                <?php include "./transcripts/how.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card2" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Vidéo: </span>Dans quels types de vaisseaux naviguait le capitaine Vancouver?</h2>
                        </div>
                        <div class="back">
                            <a href="#card3" class="card-skip-link offScreen">Passer à la carte suivante</a>
                            <div class="responsive-wrapper">
                                <iframe id="video2" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/NchNzpj5YQo?enablejsapi=1&modestbranding=1&rel=0&hl=fr-ca&cc_lang_pref=fr" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video2-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Afficher</span><span class="hide-status">Masquer</span> Transcription</button>
                            <label class="no-js">Transcription</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video2-transcript" class="transcript closed">
                                <?php include "./transcripts/ship.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close-all relative text-center">
                <button id="close-cards-button-2" class="btn" onClick="setActive()" aria-expanded="true">Fermer la carte</button>
            </div>
        </section>
        <div class="pull-quote text-center">
            <h2 class="subtitle">Embarquez à bord d’un brick pour savoir comment parlaient les marins.</h2>
        </div>
        <section class="cards-wrapper no-active" aria-label="Videos describing some particularieties of language in sailing.">
            <div class="offScreen">
                <p>
                    Cliquez ou appuyez sur Entrée pour retourner les cartes et regarder une vidéo.
                </p>
            </div>
            <div class="cards">
                <div id="card1_1" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Vidéo: </span>Aux mâts matelots!</h2>
                        </div>
                        <div class="back">
                            <a href="#card2_2" class="card-skip-link offScreen">Passer à la carte suivante</a>
                            <div class="responsive-wrapper">
                                <iframe id="video4" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/KnNdpcpPm5M?enablejsapi=1&modestbranding=1&rel=0&hl=fr-ca&cc_lang_pref=fr" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video4-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Afficher</span><span class="hide-status">Masquer</span> la transcription</button>
                            <label class="no-js">Transcription</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video4-transcript" class="transcript closed">
                                <?php include "./transcripts/hands.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card2_2" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Vidéo: </span>Drisse hissée!</h2>
                        </div>
                        <div class="back">
                            <a href="#card3_3" class="card-skip-link offScreen">Passer à la carte suivante</a>
                            <div class="responsive-wrapper">
                                <iframe id="video5" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/Xeh-VUMTl9g?enablejsapi=1&modestbranding=1&rel=0&hl=fr-ca&cc_lang_pref=fr" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video5-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Afficher</span><span class="hide-status">Masquer</span> Transcription</button>
                            <label class="no-js">Transcription</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video5-transcript" class="transcript closed">
                                <?php include "./transcripts/halyard.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card3_3" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Vidéo: </span>Vergues brassées!</h2>
                        </div>
                        <div class="back">
                            <a href="#card1_1" class="card-skip-link offScreen">Passer à la première carte</a>
                            <div class="responsive-wrapper">
                                <iframe id="video6" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/lcxAUgMuqCg?enablejsapi=1&modestbranding=1&rel=0&hl=fr-ca&cc_lang_pref=fr" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video6-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Afficher</span><span class="hide-status">Masquer</span> Transcription</button>
                            <label class="no-js">Transcription</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video6-transcript" class="transcript closed">
                                <?php include "./transcripts/braces.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close-all relative text-center">
                <button id="close-cards-button-1" class="btn" onClick="setActive()" aria-expanded="true">Fermer la carte</button>
            </div>
        </section>
        <?php include "gallery.php" ?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/fr-footer.php" ?>
</body>

</html>