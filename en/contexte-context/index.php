<!DOCTYPE html>
<html class="no-js" lang="en">
<script src="https://player.vimeo.com/api/player.js"></script>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <title>Changing Perspectives | The story before Vancouver</title>
</head>

<body>
    <a class="skip-main" href="#main">Skip to main content</a>
    <header class="">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1>The story before Vancouver</h1>
        <div class="pull-quote text-center">
            <h2 class="subtitle">Why did the Europeans come to the Pacific North West Coast?</h2>
        </div>
        <div class="cards">
            <label class="label">
                <input type="radio" name="cards" value="vimeo1"/>
                <div class="card">
                    <div class="front">
                        <h3>What was life like for people living on the Pacific Northwest (PNW) coast prior to European contact?</h3>
                    </div>
                    <div class="back">
                        <iframe id="vimeo1" class="no-js-hide vimeo" title="European Navigation Video" src="https://player.vimeo.com/video/356042135?color=ee314a&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
            </label>
            <noscript>
                <h3>What was life like for people living on the Pacific Northwest (PNW) coast prior to European contact?</h3>
                <video preload="none" src="/videos/placeholder-example.mp4">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="en" label="English">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="fra" label="French">
                </video>
                <a class="download_video" href="/videos/placeholder-example.mp4" download="/videos/placeholder-example.mp4">Download Video</a>
            </noscript>

            <label class="label">
                <input type="radio" name="cards" value="vimeo2"/>
                <div class="card">
                    <div class="front">
                        <h3>What were the world events that led up to Vancouver’s arrival?</h3>
                    </div>
                    <div class="back">
                        <iframe id="vimeo2" class="no-js-hide vimeo" src="https://player.vimeo.com/video/356042272?color=ee314a&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
            </label>
            <noscript>
                <h3>What were the world events that led up to Vancouver’s arrival?</h3>
                <video preload="none" src="/videos/placeholder-example.mp4">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="en" label="English">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="fra" label="French">
                </video>
                <a class="download_video" href="/videos/placeholder-example.mp4" download="/videos/placeholder-example.mp4">Download Video</a>
            </noscript>

            <label class="label">
                <input type="radio" name="cards" value="game"/>
                <div class="card">
                    <div class="front">
                        <h3>How was the European search for the North West Passage and the fur trade changing the Pacific Northwest Coast?</h3>
                    </div>
                    <div class="back no-pad">
                        <div class="flex">
                            <img height="150px" src="/images/ships-battle.jpg" alt="Two galleons are sailing in dark water with a stormy sky. One ship is on fire">
                            <a href="/en/technologies/game/">Play Game</a>
                        </div>
                    </div>
                </div>
            </label>
            <noscript>
                <h3>How was the European search for the North West Passage and the fur trade changing the Pacific Northwest Coast?</h3>
                <a href="/en/technologies/game/">Play Game</a>
            </noscript>
        </div>
        <div class="close-all relative text-center">
            <input type="radio" id="close-cards" name="cards"/>
            <label class="btn" for="close-cards">Close Card</label>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>