<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <title>Changing Perspectives | Vancouver's Story</title>
</head>

<body>
    <a class="skip-main" href="#main">Skip to main content</a>
    <header class="">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1>Vancouver's Story</h1>
        <div class="pull-quote text-center">
            <h2 class="subtitle">Why did the British send Vancouver to Yuquot</h2>
        </div>
        <div class="cards">
            <label class="label">
                <input type="radio" name="cards" value="vimeo1" />
                <div class="card">
                    <div class="front">
                        <h3>What did Vancouver’s expedition actually achieve?</h3>
                    </div>
                    <div class="back">
                        <iframe id="vimeo1" class="no-js-hide vimeo" title="Placeholder video" src="https://player.vimeo.com/video/87110435?color=ee314a&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
            </label>
            <noscript>
                <h3>What did Vancouver’s expedition actually achieve?</h3>
                <video preload="none" src="/videos/placeholder-example.mp4">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="en" label="English">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="fra" label="French">
                </video>
                <a class="download_video" href="/videos/placeholder-example.mp4" download="/videos/placeholder-example.mp4">Download Video</a>
            </noscript>

            <label class="label">
                <input type="radio" name="cards" value="vimeo2" />
                <div class="card">
                    <div class="front">
                        <h3>What was it like to be a member of Vancouver’s crew?</h3>
                    </div>
                    <div class="back">
                        <iframe id="vimeo1" class="no-js-hide vimeo" title="Placeholder video" src="https://player.vimeo.com/video/87110435?color=ee314a&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
            </label>
            <noscript>
                <h3>What was it like to be a member of Vancouver’s crew?</h3>
                <video preload="none" src="/videos/placeholder-example.mp4">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="en" label="English">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="fra" label="French">
                </video>
                <a class="download_video" href="/videos/placeholder-example.mp4" download="/videos/placeholder-example.mp4">Download Video</a>
            </noscript>

            <label class="label">
                <input type="radio" name="cards" value="game" />
                <div class="card">
                    <div class="front">
                        <h3>What were the initial meetings like between the First Nations people and these foreigners?</h3>
                    </div>
                    <div class="back">
                        <iframe id="vimeo1" class="no-js-hide vimeo" title="Placeholder video" src="https://player.vimeo.com/video/87110435?color=ee314a&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
            </label>
            <noscript>
                <h3>What were the initial meetings like between the First Nations people and these foreigners?</h3>
                <video preload="none" src="/videos/placeholder-example.mp4">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="en" label="English">
                    <track kind="captions" src="/videos/placeholder-example.vtt" srclang="fra" label="French">
                </video>
                <a class="download_video" href="/videos/placeholder-example.mp4" download="/videos/placeholder-example.mp4">Download Video</a>
            </noscript>
        </div>
        <div class="close-all relative text-center">
            <input type="radio" id="close-cards" name="cards" />
            <label class="btn" for="close-cards">Close Card</label>
        </div>
        <section id="gallery" class="gallery">
            <h2>Trade Artifacts</h2>
            <ul>
                <li>
                    <a href="#artifact1" class="open">
                        <img src="https://via.placeholder.com/150" alt="artifact 1 alt text">
                    </a>
                </li>
                <li>
                    <a href="#artifact2" class="open">
                        <img src="https://via.placeholder.com/150" alt="artifact 1 alt text">
                    </a>
                </li>
                <li>
                    <a href="#artifact3" class="open">
                        <img src="https://via.placeholder.com/150" alt="artifact 3 alt text">
                    </a>
                </li>
            </ul>
            <div id="artifact1" class="description">
                <a href="#gallery" class="close btn absolute top right">Close</a>
                <h3 class="gold">Artifact 1 title</h3>
                <figure>
                    <img src="https://via.placeholder.com/950x450" alt="artifact 1 alt text">
                    <figcaption>
                        <p>Artifact description to go here. Description is of a variable length</p>
                    </figcaption>
                </figure>
            </div>
            <div id="artifact2" class="description">
                <a href="#gallery" class="close btn absolute top right">Close</a>
                <h3 class="gold">Artifact 2 title</h3>
                <figure>
                    <img src="https://via.placeholder.com/2700x900" alt="artifact 2 alt text">
                    <figcaption>
                        <p>Artifact description to go here. Description is of a variable length</p>
                    </figcaption>
                </figure>
            </div>
            <div id="artifact3" class="description">
                <a href="#gallery" class="close btn absolute top right">Close</a>
                <h3 class="gold">Artifact 3 title</h3>
                <figure>
                    <img src="https://via.placeholder.com/350x1200" alt="artifact 3 alt text">
                    <figcaption>
                        <p>Artifact description to go here. Description is of a variable length</p>
                    </figcaption>
                </figure>
            </div>
        </section>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>