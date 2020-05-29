<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en" dir="ltr">
<script src="https://player.vimeo.com/api/player.js"></script>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <title>Changing Perspectives | Stories from Yuquot</title>
</head>

<body>
    <a class="skip-main" href="#main">Skip to main content</a>
    <header role="banner">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" role="main" tabindex="-1">
        <h1>Stories from Yuquot...</h1>
        <div class="cards">
            <label class="label">
                <input type="radio" name="cards" value="vimeo1" />
                <div class="card">
                    <div class="front">
                        <h3>What is life like now for the Mowachaht/<wbr>Muchalaht people after 200 years of colonization?</h3>
                    </div>
                    <div class="back">
                        <iframe id="vimeo1" class="no-js-hide vimeo" title="Placeholder video" src="https://player.vimeo.com/video/87110435?color=ee314a&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
            </label>
            <noscript>
                <h3>What is life like now for the Mowachaht/Muchalaht people after 200 years of colonization?</h3>
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
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>