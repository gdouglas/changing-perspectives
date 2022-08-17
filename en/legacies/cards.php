<section class="cards-wrapper no-active" aria-label="Legacies of colonization">
    <div class="offScreen">
        <p>
            Click or press enter to flip cards and watch a video.
        </p>
    </div>
    <div class="cards">
        <div id="card1" class="card">
            <div class="content">
                <div class="front">
                    <h3><span class="sr-only">Video: </span>How are the Heiltsuk people re-writing their history?</h3>
                </div>
                <div class="back">
                    <a href="#card2" class="card-skip-link offScreen">Skip to next card</a>
                    <div class="responsive-wrapper">
                        <iframe id="video1" class="no-js-hide vimeo" title="placeholder" src="https://player.vimeo.com/video/87110435?color=ee314a&title=0&byline=0&portrait=0&speed=1&playsinline=true" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        <noscript>
                            <video preload="none" src="placeholder-example.mp4">
                                <track kind="captions" src="/videos/placeholder-example.vtt" srclang="en" label="English">
                                <track kind="captions" src="/videos/placeholder-example.vtt" srclang="fr" label="French">
                            </video>
                            <a class="download_video" href="/placeholder-example.mp4" download="placeholder-example.mp4">Download Video</a>
                        </noscript>
                    </div>
                    <button id="video1-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                    <label class="no-js">Transcript</label>
                    <input type="checkbox" class="no-js transcript-toggle">
                    <div id="video2-transcript" class="transcript closed">
                        <?php include "./transcripts/heiltsuk-transcript.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="card2" class="card">
            <div class="content">
                <div class="front">
                    <h3><span class="sr-only">Video: </span>What has been the impact of colonization on the people of Yuquot?</h3>
                </div>
                <div class="back">
                    <a href="#card1" class="card-skip-link offScreen">Skip to first card</a>
                    <div class="responsive-wrapper">
                    <iframe id="video2" class="no-js-hide youtube"  width="560" height="315" src="https://www.youtube.com/embed/e_R1sWRdLT8?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                        <noscript>
                            <video preload="none" src="placeholder-example.mp4">
                                <track kind="captions" src="/videos/placeholder-example.vtt" srclang="en" label="English">
                                <track kind="captions" src="/videos/placeholder-example.vtt" srclang="fr" label="French">
                            </video>
                            <a class="download_video" href="/placeholder-example.mp4" download="placeholder-example.mp4">Download Video</a>
                        </noscript>
                    </div>
                    <button id="video2-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                    <label class="no-js">Transcript</label>
                    <input type="checkbox" class="no-js transcript-toggle">
                    <div id="video2-transcript" class="transcript closed">
                        <?php include "./transcripts/yuquot-transcript.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="close-all relative text-center">
        <button id="close-cards-button" class="btn" onClick="setActive()" aria-expanded="true">Close Card</button>
    </div>
</section>