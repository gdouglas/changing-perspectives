<section
    class="cards-wrapper no-active"
    aria-label="Videos about European sailing technologies"
>
    <div class="offScreen">
        <p>Cliquez ou appuyez sur Entrée pour retourner les cartes et regarder une vidéo.</p>
    </div>
    <div class="cards">
        <div id="card1" class="card">
            <div class="content">
                <div class="front">
                    <h2>
                        <span class="sr-only">Vidéo: </span>Quelle était la vie des gens de la côte nord-ouest du Pacifique avant l’arrivée des Européens?
                    </h2>
                </div>
                <div class="back">
                    <a href="#card2" class="card-skip-link offScreen"
                        >Passer à la carte suivante</a
                    >
                    <div class="responsive-wrapper">
                        <iframe
                            id="video2"
                            class="no-js-hide youtube"
                            width="560"
                            height="315"
                            src="https://www.youtube-nocookie.com/embed/VO4Zc_DA8tw?enablejsapi=1&modestbranding=1&rel=0&hl=fr-ca&cc_lang_pref=fr"
                            title="YouTube video player"
                            frameborder="0"
                            allow="autoplay;"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <button
                        id="video1-transcript-toggle"
                        class="transcript-toggle"
                        aria-expanded="false"
                    >
                        <span class="show-status">Afficher</span
                        ><span class="hide-status">Masquer</span> Transcription
                    </button>
                    <label class="no-js">Transcription</label>
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
                        <span class="sr-only">Vidéo: </span>Comment les Européens ont-ils modifié le commerce international?
                    </h2>
                </div>
                <div class="back">
                    <a href="#card3" class="card-skip-link offScreen"
                        >Passer à la carte suivante</a
                    >
                    <div class="responsive-wrapper">
                        <iframe
                            id="video1"
                            class="no-js-hide youtube"
                            width="560"
                            height="315"
                            src="https://www.youtube-nocookie.com/embed/pK9XhhitOjM?enablejsapi=1&modestbranding=1&rel=0&hl=fr-ca&cc_lang_pref=fr"
                            title="YouTube video player"
                            frameborder="0"
                            allow="autoplay;"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <button
                        id="video2-transcript-toggle"
                        class="transcript-toggle"
                        aria-expanded="false"
                    >
                        <span class="show-status">Afficher</span
                        ><span class="hide-status">Masquer</span> Transcription
                    </button>
                    <label class="no-js">Transcription</label>
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
                        <span class="sr-only">Vidéo: </span>Qu’est-ce qui a attiré les Européens sur la côte nord-ouest du Pacifique? 
                    </h2>
                </div>
                <div class="back">
                    <a href="#card1" class="card-skip-link offScreen"
                        >Passer à la première carte</a
                    >
                    <div class="responsive-wrapper">
                        <iframe
                            id="video1"
                            class="no-js-hide youtube"
                            width="560"
                            height="315"
                            src="https://www.youtube-nocookie.com/embed/dIxvSXaI25g?enablejsapi=1&modestbranding=1&rel=0&hl=fr-ca&cc_lang_pref=fr"
                            title="YouTube video player"
                            frameborder="0"
                            allow="autoplay;"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <button
                        id="video3-transcript-toggle"
                        class="transcript-toggle"
                        aria-expanded="false"
                    >
                        <span class="show-status">Afficher</span
                        ><span class="hide-status">Masquer</span> Transcription
                    </button>
                    <label class="no-js">Transcription</label>
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
        >Fermer la carte</button>
    </div>
</section>
