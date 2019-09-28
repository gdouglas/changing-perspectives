<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <title>Changing Perspectives | Context</title>
</head>

<body class="splash">
    <a class="skip-main" href="#main">Skip to main content</a>
    <header class="">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/fra-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1>Context</h1>
        <div class="pull-quote text-center">
            <p>The world during the times of George Vancouver</p>
        </div>
        <div class="slider-container relative">
            <ul class="slider">
                <li class="slide active">
                    <a href="./#navigation">
                        <figure>
                            <div style="padding:56.25% 0 0 0;position:relative;"><iframe id="vimeo1" src="https://player.vimeo.com/video/356042135?color=ee314a&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
                            <script src="https://player.vimeo.com/api/player.js"></script>                        
                            <figcaption>
                                <h3 class="gold">Navigation</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="slide"><a href="./#navire-ship">
                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/356042272?color=ee314a&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        <figcaption>
                            <h3 class="gold">Ships</h3>
                        </figcaption>
                    </a>
                </li>
                <!-- TODO put info inside of slides -->
                <li class="slide">
                    <a href="./#sextant">
                        <figure>
                            <img src="/images/sextant.jpg">
                            <figcaption>
                                <h3 class="gold">Sextant</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="slide">
                    <a href="./#telescope">
                        <figure>
                            <img src="/images/telescope.jpg">
                            <figcaption>
                                <h3 class="gold">Telescope</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="slide">
                    <a href="./#chronometer">
                        <figure>
                            <img src="/images/chronometer.jpg">
                            <figcaption>
                                <h3 class="gold">Arnold Chronometer</h3>
                            </figcaption>
                        </figure>
                    </a>
                </li>
            </ul>
            <div class="slider-controls">
                <button id="prev" type="button" class="btn" disabled>Previous</button>
                <button id="next" type="button" class="btn">Next</button>
            </div>
        </div>
        </div>
        <section id="navigation" class="slide-content">
        </section>
        <section id="navire-ship" class="slide-content">
        </section>
        <section id="sextant" class="slide-content">
            <p>Brass <strong>sextant</strong> with five eyepieces, made by Jesse Ramsden, was used by Joseph Baker, Vancouver’s First Lieutenant and is on loan courtesy of Richard Baker. The sextant is a doubly reflecting navigation instrument with a graduated arc of 60° and a sighting mechanism, used for measuring the angular distances between objects and especially for taking altitudes in navigation.</p>
        </section>
        <section id="telescope" class="slide-content">
            <p>Two stage, leather-covered <strong>telescope</strong> made by G. or P. Dolland, inscribed "Capt. John. Baker Royal Navy" on loan courtesy of Richard Baker.  Joseph Baker, Vancouver’s First Lieutenant . A telescope is an optical instrument which magnifies distant objects by arranging lenses or curved mirrors to collect and focus light.</p>
        </section>
        <section id="chronometer" class="slide-content">
            <div>
                <p>John Arnold (maker) <strong>"Arnold 176" chronometer</strong> used by George Vancouver for 1790 expedition into Pacific Northwest. Completed in 1791 for the Board of Longitude, now in gimbal suspension with 3 tier mahogany case, purchased from Christie’s Auction House.</p>
                <p>A marine Chronometer is a timepiece that is precise and accurate enough to be used as a portable time standard, meaning it can be used to determine longitude by accurately measuring the time of a known fixed location. When first developed in the 18th century, it was a major technical achievement, as accurate knowledge of the time during sea voyage is necessary for navigation without the use of electronic or communication devices.</p>
            </div>
        </section>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/fra-footer.php" ?>
</body>

</html>