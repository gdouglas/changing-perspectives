<section class="comic-wrapper">
    <div class="panels">
        <figure id="1">
            <img
                src="/images/colonization/colonization-title.png"
                alt="title-panel"
            />
            <figcaption class="comic-caption sr-only">
                &ldquo;How did Europeans colonize the Pacific Northwest?&rdquo;
                (The title is white on a black background with a chalkboard-like
                font. All following images are hand-drawn and in black and
                white.)
            </figcaption>
        </figure>
        <figure id="2">
            <img src="/images/colonization/colonization1.png" alt="panel 1" />
            <figcaption class="comic-caption sr-only">
                &ldquo;By the 1820s, the Hudson&rsquo;s Bay Company was the main
                colonial power in the region, even as the fur trade declined.
                The company had numerous forts and ships. In 1828, a Klallam
                village in Washington was destroyed by a company gunboat.&rdquo;
                (A drawing of men on a gunboat loading and firing cannons at a
                village on shore.)
            </figcaption>
        </figure>
        <figure id="3">
            <img src="/images/colonization/colonization2.png" alt="panel 2" />
            <figcaption class="comic-caption sr-only">
                &ldquo;In 1849, Vancouver Island was named an official colony,
                with the HBC acting as government.&rdquo; (A drawing of a fort
                with a British flag.)
            </figcaption>
        </figure>
        <figure id="4">
            <img src="/images/colonization/colonization3.png" alt="panel 3" />
            <figcaption class="comic-caption sr-only">
                &ldquo;At the same time, settlement and selling land became a
                main concern of the government…For 30 years, Royal Navy gunboats
                were used to improve British colonialism + to bring the coast
                tribes under control.&rdquo;(A drawing of three men pointing at
                a map titled &ldquo;Vancouver Island Colony&rdquo;. One man
                says, &ldquo;The Kwakiutl are still head-hunting?&rdquo; and
                another man responds, &ldquo;Yes, sir…&rdquo;.)
            </figcaption>
        </figure>
        <figure id="5">
            <img src="/images/colonization/colonization4.png" alt="panel 4" />
            <figcaption class="comic-caption sr-only">
                &ldquo;The gunboats served as military + police forces…They were
                well-armed with up to 50 cannons + rockets as well as Royal
                marines.&rdquo; (A drawing of cannons lined up along the side of
                a gunboat, and a marine in uniform looking out at shore with a
                musket in his hands.)
            </figcaption>
        </figure>
        <figure id="6">
            <img src="/images/colonization/colonization5.png" alt="panel 5" />
            <figcaption class="comic-caption sr-only">
                &ldquo;In 1862, a smallpox epidemic began in Victoria. Colonial
                authorities forced hundred of Natives out. Infected, they
                returned to their villages, spreading the disease. An estimated
                1 in 3 died in 2 years. The epidemic occurred as more European
                settlers arrived.&rdquo;(A drawing of a woman covered in
                smallpox lying dead on a beach. A crow pecks at her face. Behind
                is a longhouse and two others lying dead on the beach.)
            </figcaption>
        </figure>
        <figure id="7">
            <img src="/images/colonization/colonization6.png" alt="panel 6" />
            <figcaption class="comic-caption sr-only">
                &ldquo;In 1871, BC became a part of Canada. In 1874, the BC
                Lands Act was passed to open land to settlement. Canada issued
                the 1875 Duty-of-Disallowance, striking down the BC Lands Act +
                citing the failures of the province to make treaties legally
                surrendering Native land.&rdquo; (A hand holds a paper titled
                &lsquo;1875 Duty of Disallowance&rsquo;.)
            </figcaption>
        </figure>
        <figure id="8">
            <img src="/images/colonization/colonization7.png" alt="panel 7" />
            <figcaption class="comic-caption sr-only">
                &ldquo;In response, BC threatened to withdraw from Canada…In
                1876, Canada issued the Indian Act, extending government control
                over all Natives, inc. those in BC, &lsquo;legalizing&rsquo; the
                theft of Native land.&rdquo; (A hand holds a paper titled
                &lsquo;1876 Indian Act&rsquo;. Beside are other papers titled
                &lsquo;Band Councils&rsquo;, &lsquo;Reserves&rsquo;, and
                &lsquo;Status&rsquo;.)
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
