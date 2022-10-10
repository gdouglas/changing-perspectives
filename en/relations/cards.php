<section
    class="cards-wrapper no-active"
    aria-label="Videos about European sailing technologies"
>
    <div class="offScreen">
        <p>Click or press enter to flip cards and watch a video.</p>
    </div>
    <div class="cards">
        <div id="card1" class="card">
            <div class="content">
                <div class="front">
                    <h2>
                        <span class="sr-only">Video: </span>What was life on the
                        Pacific Northwest Coast like before the Europeans came?
                    </h2>
                </div>
                <div class="back">
                    <a href="#card2" class="card-skip-link offScreen"
                        >Skip to the next card</a
                    >
                    <div class="responsive-wrapper">
                        <iframe
                            id="video2"
                            class="no-js-hide youtube"
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/VO4Zc_DA8tw?enablejsapi=1&modestbranding=1&rel=0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="autoplay;"
                            allowfullscreen
                        ></iframe>
                        <noscript>
                            <video preload="none" src="placeholder-example.mp4">
                                <track
                                    kind="captions"
                                    src="/videos/placeholder-example.vtt"
                                    srclang="en"
                                    label="English"
                                />
                                <track
                                    kind="captions"
                                    src="/videos/placeholder-example.vtt"
                                    srclang="fr"
                                    label="French"
                                />
                            </video>
                            <a
                                class="download_video"
                                href="/placeholder-example.mp4"
                                download="placeholder-example.mp4"
                                >Download Video</a
                            >
                        </noscript>
                    </div>
                    <button
                        id="video1-transcript-toggle"
                        class="transcript-toggle"
                        aria-expanded="false"
                    >
                        <span class="show-status">Show</span
                        ><span class="hide-status">Hide</span> Transcript
                    </button>
                    <label class="no-js">Transcript</label>
                    <input type="checkbox" class="no-js transcript-toggle" />
                    <div id="video1-transcript" class="transcript closed">
                        <?php include "transcripts/before.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="card2" class="card">
            <div class="content">
                <div class="front">
                    <h2>
                        <span class="sr-only">Video: </span>How were the
                        Europeans changing global trade?
                    </h2>
                </div>
                <div class="back">
                    <a href="#card3" class="card-skip-link offScreen"
                        >Skip to next card</a
                    >
                    <div class="responsive-wrapper">
                        <iframe
                            id="video1"
                            class="no-js-hide youtube"
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/pK9XhhitOjM?enablejsapi=1&modestbranding=1&rel=0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="autoplay;"
                            allowfullscreen
                        ></iframe>
                        <noscript>
                            <video preload="none" src="/videos/ship-tech.mp4">
                                <track
                                    kind="captions"
                                    src="/videos/placeholder-example.vtt"
                                    srclang="en"
                                    label="English"
                                />
                                <track
                                    kind="captions"
                                    src="/videos/placeholder-example.vtt"
                                    srclang="fr"
                                    label="French"
                                />
                            </video>
                            <a
                                class="download_video"
                                href="/videos/ship-tech.mp4"
                                download="/videos/ship-tech.mp4"
                                >Download Video</a
                            >
                        </noscript>
                    </div>
                    <button
                        id="video2-transcript-toggle"
                        class="transcript-toggle"
                        aria-expanded="false"
                    >
                        <span class="show-status">Show</span
                        ><span class="hide-status">Hide</span> Transcript
                    </button>
                    <label class="no-js">Transcript</label>
                    <input type="checkbox" class="no-js transcript-toggle" />
                    <div id="video2-transcript" class="transcript closed">
                        <?php include "transcripts/trade.php" ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="card3" class="card">
            <div class="content">
                <div class="front">
                    <h2>
                        <span class="sr-only">Video: </span>What attracted the
                        Europeans to the Pacific Northwest Coast?
                    </h2>
                </div>
                <div class="back">
                    <a href="#card1" class="card-skip-link offScreen"
                        >Skip to first card</a
                    >
                    <div class="responsive-wrapper">
                        <iframe
                            id="video1"
                            class="no-js-hide youtube"
                            width="560"
                            height="315"
                            src="https://www.youtube.com/embed/dIxvSXaI25g?enablejsapi=1&modestbranding=1&rel=0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="autoplay;"
                            allowfullscreen
                        ></iframe>
                        <noscript>
                            <video
                                preload="none"
                                src="/videos/on-board-ship.mp4"
                            >
                                <track
                                    kind="captions"
                                    src="/videos/placeholder-example.vtt"
                                    srclang="en"
                                    label="English"
                                />
                                <track
                                    kind="captions"
                                    src="/videos/placeholder-example.vtt"
                                    srclang="fr"
                                    label="French"
                                />
                            </video>
                            <a
                                class="download_video"
                                href="/videos/on-board.mp4"
                                download="/videos/on-board-ship.mp4"
                                >Download Video</a
                            >
                        </noscript>
                    </div>
                    <button
                        id="video3-transcript-toggle"
                        class="transcript-toggle"
                        aria-expanded="false"
                    >
                        <span class="show-status">Show</span
                        ><span class="hide-status">Hide</span> Transcript
                    </button>
                    <label class="no-js">Transcript</label>
                    <input type="checkbox" class="no-js transcript-toggle" />
                    <div id="video3-transcript" class="transcript closed">
                        <?php include "./transcripts/why.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="close-all relative text-center">
        <button
            id="close-cards-button"
            class="btn"
            onClick="setActive()"
            aria-expanded="true"
        >
            Close Card
        </button>
    </div>
</section>
