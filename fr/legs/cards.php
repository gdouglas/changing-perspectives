<section class="cards-wrapper no-active" aria-label="Legacies of colonization">
    <div class="offScreen">
        <p>
            Cliquez ou appuyez sur Entrée pour retourner les cartes et regarder une vidéo.
        </p>
    </div>
    <div class="cards">
        <div id="card1" class="card">
            <div class="content">
                <div class="front">
                    <h2><span class="sr-only">Vidéo: </span>De quelle façon est-ce que les Heiltsuk marient l’archéologie au savoir traditionnel pour raconter une autre version de l’histoire du capitaine Vancouver?</h2>
                </div>
                <div class="back">
                    <a href="#card2" class="card-skip-link offScreen">Passer à la carte suivante</a>
                    <div class="responsive-wrapper">
                        <iframe id="video2" class="no-js-hide youtube" title="Heiltsuk marient l’archéologie" width="560" height="315" src="https://www.youtube-nocookie.com/embed/agXvi7_P_Kg?enablejsapi=1&modestbranding=1&rel=0&origin=https://changing-perspectives.grmdgs.com&hl=fr-ca&cc_lang_pref=fr" disablePictureInPicture title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                    </div>
                    <button id="video1-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Afficher</span><span class="hide-status">Masquer</span> Transcription</button>
                    <label class="no-js">Transcription</label>
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
                    <h2><span class="sr-only">Vidéo: </span>Quel a été l’impact de la colonisation sur les gens de Yuquot?</h2>
                </div>
                <div class="back">
                    <a href="#card1" class="card-skip-link offScreen">Passer à la première carte</a>
                    <div class="responsive-wrapper">
                    <iframe id="video2" class="no-js-hide youtube"  width="560" height="315" src="https://www.youtube-nocookie.com/embed/MeKmfSroonk?enablejsapi=1&modestbranding=1&rel=0&origin=https://changing-perspectives.grmdgs.com&hl=fr-ca&cc_lang_pref=fr" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                    </div>
                    <button id="video2-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Afficher</span><span class="hide-status">Masquer</span> Transcription</button>
                    <label class="no-js">Transcription</label>
                    <input type="checkbox" class="no-js transcript-toggle">
                    <div id="video2-transcript" class="transcript closed">
                        <?php include "./transcripts/yuquot-transcript.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="close-all relative text-center">
        <button id="close-cards-button" class="btn" onClick="setActive()" aria-expanded="true">Fermer la carte</button>
    </div>
</section>