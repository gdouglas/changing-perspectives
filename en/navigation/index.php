<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en" dir="ltr">

<head>
    <title>Navigation | Changing Perspectives</title>
    <meta name="description" content=
        "Learn about the technology and techniques that Europeans used to explore the world in the late 1700's.">
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
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1>Navigation</h1>
        <section class="cards-wrapper no-active" aria-label="Videos about European sailing technologies">
            <div class="offScreen">
                <p>
                    Click or press enter to flip cards and watch a video.
                </p>
            </div>
            <div class="cards">
                <div id="card1" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Video: </span>How did Captain Vancouver navigate the oceans?</h2>
                        </div>
                        <div class="back">
                            <a href="#card2" class="card-skip-link offScreen">Skip to the next card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video1" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/mEZ3ePRd8hs?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video1-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                            <label class="no-js">Transcript</label>
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
                            <h2><span class="sr-only">Video: </span>What were the vessels like that Captain Vancouver sailed in?</h2>
                        </div>
                        <div class="back">
                            <a href="#card3" class="card-skip-link offScreen">Skip to next card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video2" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/NchNzpj5YQo?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video2-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                            <label class="no-js">Transcript</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video2-transcript" class="transcript closed">
                                <?php include "./transcripts/ship.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close-all relative text-center">
                <button id="close-cards-button-2" class="btn" onClick="setActive()" aria-expanded="true">Close Card</button>
            </div>
        </section>
        <div class="pull-quote text-center">
            <h2 class="subtitle">Board a sailing brig and learn how sailors speak.</h2>
        </div>
        <section class="cards-wrapper no-active" aria-label="Videos describing some particularieties of language in sailing.">
            <div class="offScreen">
                <p>
                    Click or press enter to flip cards and watch a video.
                </p>
            </div>
            <div class="cards">
                <div id="card1_1" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Video: </span>Hands aloft!</h2>
                        </div>
                        <div class="back">
                            <a href="#card2_2" class="card-skip-link offScreen">Skip to the next card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video4" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/KnNdpcpPm5M?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video4-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                            <label class="no-js">Transcript</label>
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
                            <h2><span class="sr-only">Video: </span>That&rsquo;s well halyard</h2>
                        </div>
                        <div class="back">
                            <a href="#card3_3" class="card-skip-link offScreen">Skip to next card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video5" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/Xeh-VUMTl9g?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video5-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                            <label class="no-js">Transcript</label>
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
                            <h2><span class="sr-only">Video: </span>That&rsquo;s well braces</h2>
                        </div>
                        <div class="back">
                            <a href="#card1_1" class="card-skip-link offScreen">Skip to first card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video6" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/lcxAUgMuqCg?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                                </div>
                                <button id="video6-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                                <label class="no-js">Transcript</label>
                                <input type="checkbox" class="no-js transcript-toggle">
                                <div id="video6-transcript" class="transcript closed">
                                    <?php include "./transcripts/braces.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close-all relative text-center">
                <button id="close-cards-button-1" class="btn" onClick="setActive()" aria-expanded="true">Close Card</button>
            </div>
        </section>
        <?php include "gallery.php" ?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>