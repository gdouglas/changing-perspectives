<!DOCTYPE html>
<html class="no-js" lang="en">
<script src="https://player.vimeo.com/api/player.js"></script>

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
        <h1>European Sailing Technology</h1>
        <div class="pull-quote text-center">
            <h2 class="subtitle">What technologies did the Europeans need to get to the Pacific Northwest Coast?</h2>
        </div>
        <div class="cards">
            <label>
                <input type="checkbox" />
                <div class="card">
                    <div class="front">
                        <h3>How did European navigate the oceans?</h3>
                    </div>
                    <div class="back">
                        <div style="position:relative;">
                            <iframe id="vimeo1" title="European Navigation Video" src="https://player.vimeo.com/video/356042135?color=ee314a&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </label>

            <label>
                <input type="checkbox" />
                <div class="card">
                    <div class="front">
                        <h3>What were the ships like the Europeans sailed in?</h3>
                    </div>
                    <div class="back">
                        <div style="position:relative;">
                            <iframe src="https://player.vimeo.com/video/356042272?color=ee314a&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </label>

            <label>
                <input type="checkbox" />
                <div class="card">
                    <div class="front">
                        <h3>Can you help Captain Vancouver Sail his ship to Yuquot?</h3>
                    </div>
                    <div class="back">
                        <a href="./game">Play Game</a>
                    </div>
                </div>
            </label>
        </div>
        <section id="gallery" class="gallery">
            <h2>Artifacts of exploration</h2>
            <ul>
                <li>
                    <a href="#sextant" class="open">
                        <img src="/images/sextant.jpg" alt="brass sextant">
                    </a>
                </li>
                <li>
                    <a href="#telescope" class="open">
                        <img src="/images/telescope.jpg" alt="brass telescope">
                    </a>
                </li>
                <li>
                    <a href="#chronometer">
                        <img src="/images/chronometer.jpg" alt="brass chronometer">
                    </a>
                </li>
                </ul>
                <div id="sextant" class="description">
                    <a href="#gallery" class="close btn absolute top right">Close</a>
                    <h3 class="gold">Sextant</h3>
                    <figure>
                        <img src="/images/sextant.jpg" alt="brass sextant">
                        <figcaption>
                            <p>Brass <strong>sextant</strong> with five eyepieces, made by Jesse Ramsden, was used by Joseph Baker, Vancouver’s First Lieutenant and is on loan courtesy of Richard Baker. The sextant is a doubly reflecting navigation instrument with a graduated arc of 60° and a sighting mechanism, used for measuring the angular distances between objects and especially for taking altitudes in navigation.</p>
                        </figcaption>
                    </figure>
                </div>
                <div id="chronometer" class="description">
                    <a href="#gallery" class="close btn absolute top right">Close</a>
                    <h3 class="gold">Arnold Chronometer</h3>
                    <figure>
                        <img src="/images/chronometer.jpg" alt="brass chronometer">
                        <figcaption>
                            <p>John Arnold (maker) <strong>"Arnold 176" chronometer</strong> used by George Vancouver for 1790 expedition into Pacific Northwest. Completed in 1791 for the Board of Longitude, now in gimbal suspension with 3 tier mahogany case, purchased from Christie’s Auction House.</p>
                            <p>A marine Chronometer is a timepiece that is precise and accurate enough to be used as a portable time standard, meaning it can be used to determine longitude by accurately measuring the time of a known fixed location. When first developed in the 18th century, it was a major technical achievement, as accurate knowledge of the time during sea voyage is necessary for navigation without the use of electronic or communication devices.</p>
                        </figcaption>
                    </figure>
                </div>
                <div id="telescope" class="description">
                    <a href="#gallery" class="close btn absolute top right">Close</a>
                    <h3 class="gold">Telescope</h3>
                    <figure>
                        <img src="/images/telescope.jpg" alt="brass telescope">
                        <figcaption>
                            <p>Two stage, leather-covered <strong>telescope</strong> made by G. or P. Dolland, inscribed "Capt. John. Baker Royal Navy" on loan courtesy of Richard Baker. Joseph Baker, Vancouver’s First Lieutenant . A telescope is an optical instrument which magnifies distant objects by arranging lenses or curved mirrors to collect and focus light.</p>
                        </figcaption>
                    </figure>
                </div>
        </section>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>