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
                    <h2><span class="sr-only">Video: </span>How are the Heiltsuk combining archaeology and traditional knowledge to re-tell Captain Vancouver’s story?</h2>
                </div>
                <div class="back">
                    <a href="#card2" class="card-skip-link offScreen">Skip to next card</a>
                    <div class="responsive-wrapper">
                        <iframe id="video2" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/tDlnuCrhXs0?enablejsapi=1&modestbranding=1&rel=0&origin=https://changing-perspectives.grmdgs.com" disablePictureInPicture title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
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
                    <h2><span class="sr-only">Video: </span>What has been the impact of colonization on the people of Yuquot?</h2>
                </div>
                <div class="back">
                    <a href="#card1" class="card-skip-link offScreen">Skip to first card</a>
                    <div class="responsive-wrapper">
                    <iframe id="video2" class="no-js-hide youtube"  width="560" height="315" src="https://www.youtube-nocookie.com/embed/zDRfSM0CJnI?enablejsapi=1&modestbranding=1&rel=0&origin=https://changing-perspectives.grmdgs.com" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
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