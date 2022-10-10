<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en" dir="ltr">

<head>
    <title>Encounters | Changing Perspectives</title>
    <meta name="description" content="Content to come">
    </meta>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <style>
        @media (min-width:768px) {
            #main {
                overflow: visible;
            }
            #main:before {
                content: '';
                display: block;
                pointer-events: none;
                background-image: url(/images/bg/welcome-post.png);
                background-repeat: no-repeat;
                background-size: cover;
                position: absolute;
                top: 0;
                left: -25%;
                width: 100%;
                height: 100%;
                z-index: -1;
                background-position-x: -10%;
                background-position-y: 15%;
            }
        }
    </style>
</head>

<body>
    <a class="skip-main" href="#main">Skip to main content</a>
    <header role="banner">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" role="main" tabindex="-1">
        <section class="comic">
            <h1>Encounters</h1>
            <?php include "slider.php" ?>
        </section>
        <section class="cards-wrapper no-active" aria-label="Videos about European sailing technologies">
            <div class="offScreen">
                <p>
                    Click or press enter to flip cards and watch a video.
                </p>
            </div>
            <div class="cards">
                <div id="card1" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Video: </span>What did Vancouver's Expedition actually achieve?</h2>
                        </div>
                        <div class="back">
                            <a href="#card2" class="card-skip-link offScreen">Skip to next card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video1" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube.com/embed/dScAU6QWCsA?enablejsapi=1&modestbranding=1&rel=0" disablePictureInPicture title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
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
                            <div id="video1-transcript" class="transcript closed">
                                <p>
                                    (As the video begins, there is pensive music.)<br />
                                    On-screen text appears: What did Vancouver&rsquo;s Expedition Achieve? <br />
                                    (A journal entry appears in cursive.)<br />
                                    A narrator reads out a journal entry: &ldquo;Your Majesty&rsquo;s servants&#8230;humbly&#8230;submit&#8230;that your Majesty's minister at the court of Madrid should&#8230;[demand] an immediate&#8230;satisfaction for the outrages committed by Monsieur de Martinez&#8230;and that it would be proper, in order to support that demand&#8230;for the fitting out, a squadron of ships of the line.&rdquo; Cabinet minute Lord Grenville to King George III, April 30th, 1790. <br />
                                    Narrator: When news of a possible war with Spain reached Lieutenant Vancouver, he was second-in-command of the Discovery. This newly built ship was preparing for a voyage to the South Pacific to find potential whaling stations, as well as to continue the survey of the Pacific Northwest Coast. <br />
                                    (An animation of the HMS Discovery brig is rotated on screen, showing the many masts and sails on this navy vessel.)<br />
                                    Narrator: From age 13, Vancouver had served for eight years as a midshipman on Cook&rsquo;s second and third expeditions to the Pacific. Officers who had learned their survey and navigational skills from Cook were an elite group. Consequently, Vancouver was ordered to join the Discovery after he returned from serving in the Caribbean. <br />
                                    (A drawing of a young Vancouver, in a blue navy officer uniform holding a sextant and book of maps.)<br />
                                    Narrator: Due to the Spanish conflict, the Discovery was now to be accompanied by a naval force of two frigates sailing to Yuquot. Meanwhile, the Spanish had sent more ships and troops there to fortify their naval defenses against the British.<br />
                                    (An animated map shows British ships leaving Europe and Spanish ships travelling north from Mexico up to Yuquot.)<br />
                                    Narrator: In Europe, Spain and Britain prepared for war. By June, both rival fleets were off the coast of France. Spain hoped that France would help her fight Britain, but the French Revolution had been raging since 1789. Subsequently, France withdrew its support. Unwilling to fight Britain alone, in October 1790, Spain signed the first of three settlements with Britain known as the Nootka Sound Conventions. With war averted, plans for the expedition focused on completing a detailed survey of the coast from latitude 30 to 60 degrees. Vancouver was now placed in command. He was also ordered to implement the details of the Spanish peace agreement at Yuquot. The Discovery departed along with a second survey ship, the Chatham, on April 1st, 1791. <br />
                                    (An animated map shows the route the HMS Discovery and HMS Chatham took. They traveled from England, around Africa&rsquo;s Cape of Good Hope, along the Antarctic Ocean, and after reaching New Zealand, north to North America.)<br />
                                    Narrator: Many believed that a Northwest Passage south of the Arctic Circle existed along Cook&rsquo;s Inlet. Fur traders confirmed they had located the Juan de Fuca Strait, another possible route. <br />
                                    (An early cartographic map shows Cook&rsquo;s Inlet on the southern edge of Alaska, and the Juan de Fuca Strait further south by Yuquot.)<br />
                                    Narrator: Attempts to find the Passage along inland rivers from the east were also ongoing. In 1792, Alexander Mackenzie followed the Peace River and finally reached the Pacific Coast at Bella Coola in July 1793.<br />
                                    (A map of Canada shows the Peace River trip starting at Lake Athabasca on northern end of the Alberta-Saskatchewan border, travelling along the Peace River in northern Alberta and BC before turning southward to Bella Coola on the Pacific Coast.)<br />
                                    Narrator: However, it was not the navigable waterway they had hoped for. <br />
                                    Narrator: Vancouver began mapping the Northwest coast in April 1792 at Discovery bay in the Juan de Fuca Strait. That first summer, they surveyed Puget Sound and then the Salish Sea. <br />
                                    (Multiple paintings depicting the vessels and smaller survey boats on the Pacific Northwest Coast.)<br />
                                    Narrator: It quickly became evident that the confusing network of islands and waterways could only be surveyed from small boats &ndash; a much harder, more time-consuming task than expected. Later that summer, they met two Spanish ships undertaking their own survey and agreed to share their survey data. Disappointed to find that none of the inlets provided any hint of a passage to the Atlantic, it eventually became clear they were circling a large island. They arrived at Yuquot in September. <br />
                                    (More paintings of ships followed by a drawing of Chief Maquinna dancing for the Spanish and British and Chinese visitors.)<br />
                                    Narrator: There, Vancouver agreed to collaborate with the Spanish surveyors to draw the first map of what they called Quadra and Vancouver Island; Quadra, after Captain Juan Francisco Bodega y Quadra, the commander sent to meet Vancouver. <br />
                                    (An animated map of Vancouver Island and Quadra Island is drawn on screen. It is detailed and depicts many European place names.)<br />
                                    Narrator: Captain Bodega y Quadra was himself an accomplished navigator, responsible for a lot of the Spanish coastal surveys. The two mariners quickly became friends, but they were unable to agree on the details of the Nootka Convention. Evidently, the two governments had different understandings. Vancouver was ordered to take possession of the land John Meares claimed to own at Yuquot. The Spanish argued that Meares had not bought any land according to Chief Maquinna. They offered to hand over a small cove at Yuquot if, in exchange, Britain recognized Spain&rsquo;s territory extended beyond San Francisco to the Strait of Juan de Fuca. Vancouver refused. A final agreement was later signed in Europe in 1794. Yuquot was to be open to both nations, but wouldn&rsquo;t be settled by either. No Indigenous communities participated or consented to this agreement. The survey continued. Originally planned for two years, the expedition would take three, surveying in the spring and summer and then wintering in California and Hawai&rsquo;i. During his visits to Hawai&rsquo;i, Vancouver completed a detailed survey of the islands and also agreed with a council of island chiefs to make Hawai&rsquo;i a British protectorate. <br />
                                    (Animation of Vancouver&rsquo;s ships travelling to Hawaii. One of Vancouver&rsquo;s detailed cartographic maps of Hawai&rsquo;i is shown.)<br />
                                    Narrator: Vancouver resumed the survey at Restoration Bay in June 1793. They ended their second season at Cape Decision.<br />
                                    (An animated map traces Vancouver&rsquo;s voyage from Restoration Bay near Bella Coola north to Cape Decision in what is now Alaska.)<br />
                                    Narrator: In Spring 1794, the survey began at 60 degrees North, Cook&rsquo;s Inlet and finished at Port Conclusion August 19th. They made a final stop at Yuquot before their journey home began, calling at Monterey, California and Valparaiso, Chile on the way. They rounded Cape Horn in June, reached St. Helena by July, Ireland in September, and London by October 1795. After four and a half years at sea, covering 65,000 miles, it was the longest British expedition on record. Vancouver&rsquo;s legacy would be the extremely accurate maps he created; 1,700 miles of one of the world&rsquo;s most complex coastlines. By applying nearly 400 British names to the landscape, the maps gave the impression that the Pacific Northwest Coast was now British territory. While confirming there was no Northwest Passage south of the Arctic, Vancouver&rsquo;s map would also make the colonial occupation and exploitation of the region much easier in the decades to come. <br />
                                    (Zoom out from the map of the Pacific Northwest Coast created by Vancouver.)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card2" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Video: </span>What was it like to be a member of Vancouver's crew?</h2>
                        </div>
                        <div class="back">
                            <a href="#card1" class="card-skip-link offScreen">Skip to first card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video2" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube.com/embed/jo0CDeyM8dA?enablejsapi=1&modestbranding=1&rel=0" disablePictureInPicture title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
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
                                <p>
                                    (As the video begins, there is pensive music. On-screen text appears: Life on Board.)<br />
                                    (A journal entry appears in cursive on weathered paper.)<br />
                                    A narrator reads out a journal entry: &ldquo;On the 15th of December, 1790, I had the honour of receiving my commission as commander of His Majesty's sloop the Discovery, then lying at Deptford, where the next morning, I joined her, and began entering men&rdquo; Captain George Vancouver. <br />
                                    (A statue of Captain Vancouver is seen in front of the City of Vancouver&rsquo;s City Hall.)<br />
                                    Narrator: As Master and Commander of the expedition, Vancouver chose his crew, but was obliged to sign on a number of trainee officers, who had connections with politicians and senior ranks in the navy. As he did with Captain Cook, Sir Joseph Banks sponsored the expedition&rsquo;s scientific research on behalf of the Royal Society. <br />
                                    (A painting of Sir Joseph Banks is shown.)<br />
                                    Narrator: He required that Vancouver include the botanist and surgeon Archibald Menzies in the ship&rsquo;s company to collect and catalogue plants, as well as record his impressions of the Indigenous people they met.<br />
                                    (A painting of a middle-aged Menzies is shown, as well as some of his sketches of fauna and Indigenous communities.) <br />
                                    Narrator: The crew were mostly volunteers, but some may have been forced into service by press gangs that would search for men in the taverns and prisons. <br />
                                    (A historical painting of press gangs. There are men wielding swords and batons, threatening men in the street by a port.)<br />
                                    Narrator: Because volunteer crew were paid more, &ldquo;pressed&rdquo; men usually agreed to accept their fate and become volunteers as well. <br />
                                    (A series of paintings of seamen feeding pigs, cleaning out pigsty, and mopping the deck. An officer sits on a cannon directing orders to the volunteers.)<br />
                                    Narrator: The crew also had the prospect of winning a share of the prize money, 20,000 pounds for finding the Northwest Passage &ndash; over 4 million dollars in today&rsquo;s money.<br />
                                    (A painting of men sleeping in hammocks and eating in the mess.)<br />
                                    Narrator: Living conditions were very cramped on board both the Discovery and the Chatham. On the Discovery, eighty seamen, junior officers and marines ate and socialized on the mess deck. They also slung their hammocks here to sleep. <br />
                                    (Infographic showing the different crew roles and corresponding numbers.) <br />
                                    Narrator: The senior officers, Archibald Menzies, and Captain Vancouver had their own cabins. Fresh meat, milk, and eggs from the animals on board were mainly for the officers. The crew ate salted meat, biscuits, and cheese washed down with homemade beer, and a daily ration of rum in the afternoon. <br />
                                    (A sketch of the inside of the galley and another of twenty men round a table on the mess deck with beer mugs in their hands. Around them are two cannons, and many sacks of food hanging from the ceiling.)<br />
                                    Narrator: Scurvy, a disease caused by a lack of vitamin C in the diet, could disable enough crew in just a few months to make it impossible to sail the vessel. <br />
                                    (A sketch of a man displaying scurvy symptoms, including lost teeth and sunken eyes. More sketches of bruised legs, with bumps, and prominent blue veins.)<br />
                                    Narrator: What caused scurvy was unknown at the time; however, the preventative measures first introduced by Captain Cook and later followed by Vancouver were successful. The cures included drinking concentrated citrus juice, eating sauerkraut, and regularly smoking out the lower decks by burning a combination of vinegar and gunpowder.<br />
                                    (A drawing of the scurvy preventative food and the lower deck being smoked out by crew members.) <br />
                                    Narrator: At sea, Royal Navy sailing vessels followed a strict routine. The crew were divided into watches. Each watch would take their turn manning the helm, navigating, setting sails, and keeping a lookout. Other duties included swabbing and scrubbing the decks, gunnery practice, and ship repairs. <br />
                                    (Re-enactment video of seamen manning the sails, pulling ropes, and firing cannons. Sound of cannon firing.)<br />
                                    Narrator: In order to explore the narrow inlets and channels when mapping the Northwest Coast, Vancouver would establish an observatory on shore and then send the crew off to survey in small rowboats with provisions for ten or more days. The crew covered more than 10,000 miles this way over the three summers it took to complete the work.<br />
                                    (A painting of an observatory on shore, which consists of multiple small, white tents on a beach with a British flag. The ships can be seen further off shore. The small boats have British flags and about seven men in them rowing. An officer in uniform sits in the stern.)<br />
                                    Narrator: Was Vancouver a good master and commander? Order and discipline were very important in safely running a ship. It was more important that the captain be respected and obeyed than popular with his crew. Corporal punishment was common in the Royal Navy. <br />
                                    (A series of drawings showing a sailor being flogged with a cat-o&rsquo;-nine tails whip, and a sailor in shackles. Sound of a whip striking a sailor.)<br />
                                    Narrator: Vancouver also had a reputation for being short-tempered and irritable which could be due in part to his poor health. He suffered from diseases he contracted while serving in the Caribbean. At least sixty of the Discovery&rsquo;s crew of one hundred men were flogged with the cat-o&rsquo;-nine tails, some regularly. Unusual for a trainee officer, Thomas Pitt was flogged a number of times. The young midshipman was a cousin of Prime Minister William Pitt, and the son of Baron Camelford. <br />
                                    (A drawing of a young Thomas Pitt in a top hat, coat, and holding a monocle.)<br />
                                    Narrator: Nonetheless, because of his violent temper and intolerance for authority, Vancouver finally sent Pitt home early aboard the expedition&rsquo;s supply ship in 1793. What was most important is that Vancouver maintained command of the expedition, accomplished his mission, and returned to England safely. <br />
                                    (An animated map depicts Captain Vancouver&rsquo;s route back to England.)<br />
                                    Narrator: Vancouver&rsquo;s relationship with Archibald Menzies was also often strained. A furious argument erupted during the expedition&rsquo;s return journey to Britain. A number of botanical specimens were lost in a storm. Menzies held Vancouver responsible and consequently refused to surrender his scientific journals for the official expedition publication. Vancouver had Menzies arrested on a charge of mutiny. Although the charges were eventually dropped, Menzies&rsquo; benefactor, Sir Joseph Banks, arranged to have Menzies&rsquo; journals published separately.<br />
                                    (Images of Menzies original handwritten journal are shown along with his portrait. Animation of jail doors closing. Sound of doors clanking.)<br />
                                    Narrator: Vancouver&rsquo;s troubles did not end there. Waiting for his return home, Vancouver found a letter from former midshipman Pitt challenging him to a duel. Pitt had recently inherited the family fortune and title. Now as the 2nd Baron Camelford, he was determined to use his influence as the prime minister&rsquo;s cousin to have his revenge and ruin his former commander&rsquo;s reputation. Vancouver refused to fight. Mysteriously, the admiralty delayed paying the Captain his expenses, and over four years backpay. Months later, Vancouver and his brother Charles were attacked by Camelford on a London street. A cartoon, an account of the street fight, was published in the press depicting Vancouver as cowardly for refusing to duel. <br />
                                    (A close-up of the historic political cartoon is shown. Vancouver&rsquo;s brother tries to separate Captain Vancouver and Lord Camelford. On the left, the taller Lord Camelford raises a weapon and shouts for Captain Vancouver to fight. The shorter, stouter Captain Vancouver on the right staggers back.)<br />
                                    Narrator: Hounded by the press and seriously in debt, Vancouver became a laughing stock. While his debts were eventually settled, his reputation among his fellow naval officers never recovered, despite the expedition&rsquo;s achievements. Vancouver died in May 1798. He was forty years old. His journal was published four months later. <br />
                                    (The statue of Captain Vancouver is seen again in front of the City of Vancouver&rsquo;s City Hall.)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close-all relative text-center">
                <button id="close-cards-button" class="btn" onClick="setActive()" aria-expanded="true">Close Card</button>
            </div>
        </section>
        <?php include 'gallery.php'; ?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>
