<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en" dir="ltr">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <!-- Dependencies -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="../../dist/ableplayer/thirdparty/js.cookie.js"></script> -->

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="../../dist/ableplayer/build/ableplayer.min.css" type="text/css" /> -->

    <!-- JavaScript -->
    <!-- <script src="../../dist/ableplayer/build/ableplayer.min.js"></script>
    <script src="https://player.vimeo.com/api/player.js"></script> -->
    <title>Changing Perspectives | Vancouver's Story</title>
</head>

<body>
    <a class="skip-main" href="#main">Skip to main content</a>
    <header role="banner">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" role="main" tabindex="-1">
        <h3>What did Vancouver’s expedition actually achieve?</h3>
        <video id="video" width="500" height="300" controls>
            <source src="/videos/placeholder-example.mp4" type="video/mp4">
            <track kind="captions" src="/videos/transcript.vtt" srclang="en" label="English">
            <track kind="captions" src="/videos/placeholder-example.vtt" srclang="fra" label="French">
        </video>
        <!-- <video id="video" width="480" height="204">
            <source src="https://content.jwplatform.com/videos/q1fx20VZ-kNspJqnJ.mp4" type="video/mp4">
            <source src="https://content.jwplatform.com/videos/q1fx20VZ-27m5HpIu.webm" type="video/webm">
            <track src="/videos/transcript.vtt" kind="metadata" default>
            A browser with <a href="http://www.jwplayer.com/html5/">HTML5 text track support</a> is required.
        </video> -->

        <!-- <video data-able-player data-skin="2020" preload="none" data-vimeo-id="87110435" width="500px">
            <track kind="captions" src="/videos/placeholder-example.vtt" srclang="en" label="English">
            <track kind="captions" src="/videos/placeholder-example.vtt" srclang="fra" label="French">
        </video> -->
        <a class="download_video" href="/videos/placeholder-example.mp4" download="/videos/placeholder-example.mp4">Download Video</a>
        <!-- <iframe id="vimeo1" class="no-js-hide vimeo" title="Placeholder video" src="https://player.vimeo.com/video/87110435?color=ee314a&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe> -->
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>