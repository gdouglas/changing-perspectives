<section class="comic-wrapper">
    <div class="panels">
        <div>
            <figure id="one">
                <img
                    src="/images/encounters/encounters-title.png"
                    alt="title panel"
                />
                <figcaption class="comic-caption sr-only">
                    &ldquo;What were the Indigenous people&rsquo;s meetings with
                    the fur traders like?&rdquo;(The title is white on a black
                    background with a chalkboard-like font. All following images
                    are hand-drawn and in black and white.)
                </figcaption>
            </figure>
        </div>
        <div>
            <figure id="two">
                <img src="/images/encounters/encounters1.png" alt="panel 1" />
                <figcaption class="comic-caption sr-only">
                    &ldquo;For several decades the fur trade was the main
                    concern of European + US ships entering the region&mldr;This
                    trade decimated the sea otter population. Ship&rsquo;s crews
                    used force at times to ensure compliance, even taking
                    hostages.&rdquo; (Hand-drawn, black and white drawing of two
                    sea otters swimming.)
                </figcaption>
            </figure>
        </div>
        <figure id="three">
            <img src="/images/encounters/encounters2.png" alt="panel 2" />
            <figcaption class="comic-caption sr-only">
                &ldquo;The Russians began trading with the Aleut in 1741. They
                took families hostage &amp; forced hunters to gather sea otters.
                In 1763, Aleuts revolted + destroyed 4 of 5 Russian ships. In
                retaliation, many Aleut villagers were massacred.&rdquo; (A
                Russian in a fur hat holds a musket at an Aleut villager
                who&rsquo;s hands are up in surrender. In the background is a
                sail ship.)
            </figcaption>
        </figure>
        <figure id="four">
            <img src="/images/encounters/encounters3.png" alt="panel 3" />
            <figcaption class="comic-caption sr-only">
                &ldquo;As the Russians ravaged the Aleut &amp; sea otter
                populations, they began moving south into Tlingit territory. But
                the Tlingit were much better armed from trading with British
                &amp; American ships. The most sought-after trade items were
                guns &amp; ammo. Throughout the Coast, women conducted most of
                the trade negotiations.&rdquo; (Three Tlingit armed with muskets
                face-off a European on a sail ship. The European is in a jacket
                and also armed with a musket.)
            </figcaption>
        </figure>
        <figure id="five">
            <img src="/images/encounters/encounters4.png" alt="panel 4" />
            <figcaption class="comic-caption sr-only">
                &ldquo;As more ships descended on the region throughout the
                1780s &amp; &lsquo;90s, more ships were attacked. Over the next
                30 years dozens of ships would be captured.&rdquo; (Warriors in
                traditional armour with spears and clubs board the side of a
                ship armed with Europeans.)
            </figcaption>
        </figure>
        <figure id="six">
            <img src="/images/encounters/encounters5.png" alt="panel 5" />
            <figcaption class="comic-caption sr-only">
                In 1803, the US ship Boston was attacked by Mowachaht &amp;
                Muchalaht warriors, who killed 25 or 27 crew members. The 2
                survivors were forced to identify the severed heads of the crew.
                They were enslaved for 2 years&mldr;&rdquo; (On the side of a
                ship is a row of severed heads. Warriors face them holding
                spears and clubs while one American points at the heads.)
            </figcaption>
        </figure>
        <figure id="seven">
            <img src="/images/encounters/encounters6.png" alt="panel 6" />
            <figcaption class="comic-caption sr-only">
                &ldquo;In 1811, the Tonquin was attacked by Tla-o-qui-aht
                warriors led with Wickaninnish in Clayoquot Sound. A surviving
                crew member rigged explosives &amp; escaped. THe blast killed as
                many as 100 Tla-o-qui-aht. (Three Tla-o-qui-aht watch in
                surprise on shore as a ship blows up.)
            </figcaption>
        </figure>
    </div>
</section>

<script>
    $(document).ready(function () {
        $(".panels").slick({
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            infinite: false,
            initialSlide : 0,
        });
    });
    $(".panels").on("init", slickConfig);
    function slickConfig(e) {
        $("div[data-slick-index]").click(function (e) {
            e.preventDefault();
            let slideno = $(this).data("slickIndex");
            $(".panels").slick("slickGoTo", slideno);
        });
    }
</script>
