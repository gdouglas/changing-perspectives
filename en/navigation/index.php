<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en" dir="ltr">

<head>
    <title>Navigation | Changing Perspectives</title>
    <meta name="description" content=
        "Learn about the technology and techniques that Europeans used to explore the world in the late 1700's.">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <style>
        @media (min-width:768px) {
            #main:before {
                content: '';
                display: block;
                pointer-events: none;
                background-image: url(/images/bg/anchor.png);
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 200vh;
                max-height: 100%;
                z-index: -1;
                opacity: 0.1;
            }
        }
    </style>
</head>

<body>
    <a class="skip-main" href="#main">Skip to main content</a>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-header.php" ?>
    </header>
    <main id="main" tabindex="-1">
        <h1>Navigation</h1>
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
                            <h2><span class="sr-only">Video: </span>How did Captain Vancouver navigate the oceans?</h2>
                        </div>
                        <div class="back">
                            <a href="#card2" class="card-skip-link offScreen">Skip to the next card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video1" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/mEZ3ePRd8hs?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video1-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                            <label class="no-js">Transcript</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video1-transcript" class="transcript closed">
                                <p>(As the video begins, there is upbeat Celtic music with violin.)</p>
                                <p>A Narrator says: How did Captain Vancouver navigate the oceans? Well, he relied on a magnetic compass to know which direction the ship was sailing.</p>
                                <p>(Animation of a compass pointing north.)</p>
                                <p>Narrator: While the navigator knew the ship&rsquo;s general direction, the problem was figuring out how far the ship had travelled once he had lost sight of the land.</p>
                                <p>(Animation of a ship sailing far into the Atlantic Ocean, away from Great Britain.)</p>
                                <p>Narrator: North or south was easy to determine using latitude; a method developed by Arabian Navigators in the 9th century. They applied imaginary lines around the earth east to west, and numbered them from zero degrees at the equator to 90 degrees at each of the poles.</p>
                                <p>(Animation of the earth, with lines of latitude drawn horizontally around Earth every ten degrees north and south of the Equator. The Equator is labelled 0 degrees. The Artic is 90 degrees North, and Antarctica is 90 degrees South.)</p>
                                <p>Narrator: Explorers would then use math rules relating to triangles called trigonometry to measure the angle between the horizon and the North Star. The North Star- also called Polaris- is the perfect point to measure from because it barely changes its position &ndash; and is conveniently located right above the North Pole.</p>
                                <p>(The world is animated spinning. The North Star is drawn above the Arctic, and does not move.)</p>
                                <p>Narrator: With an instrument called a sextant, the sailing crew could measure the angle, and if it said, say, 50 degrees, that would mean their ship is located at 50 degrees south of the North Pole. 90 degrees minus 50 degrees equals 40 degrees. So the ship is located at latitude 40 degrees north of the equator. Pretty cool, right? Using this method, the crew could know exactly how far they&rsquo;ve travelled north or south, and keep perfectly positioned until they spotted land again.   (A sextant is shown. It is a triangular-shaped instrument, with mirrors and a telescope. A trigonometry calculation is drawn on the world. A line connects the ship to the North Star. Another line drawn away from the ship is labelled the &ldquo;horizon line&rdquo;. The angle between these two lines from the ship is 50 degrees. The line of latitude the ship is on is labelled 50 degrees North.)</p>
                                <p>Narrator: However, figuring out how far east or west the ship had travelled remained a big problem. To solve this, Captain Vancouver was able to use an innovative new method that had just been perfected by his predecessor, Captain Cook. The solution relied on the regular rotation of the earth in relation to the sun and a very accurate clock. Here&rsquo;s how it works. We know that the earth rotates from east to west 360 degrees every 24 hours. Just do the math, and 360 divides by 24 to make 15. So, in one hour the earth moves 15 degrees relative to the sun. Still with me? Just like latitude, degrees of longitude was established to mark new imaginary lines around the earth, but these lines run north to south. And because the British thought this idea up, they decided that the zero degrees longitude line - or the Prime Meridian - should run right through the Greenwich observatory, located in London England.</p>
                                <p>(Lines of longitude are drawn vertically on Earth, from the Arctic down to Antarctica. The Prime Meridian is marked as 0 degrees longitude.)</p>
                                <p>Narrator: If you have an accurate clock onboard your ship and set it to the time at Greenwich &ndash; Greenwich Mean Time - you can then compare Greenwich time against the ship&rsquo;s local time to determine how far you are east or west of Greenwich. Here&rsquo;s an example, First the navigator has to determine the local noon time where the ship is located. He does this with a sextant to measure when the sun is at its highest point in the sky. If at 12 noon local time our clock shows Greenwich Mean Time is 4 in the afternoon, then we can calculate that we are 4 hours behind Greenwich time. Knowing that one hour is 15 degrees - we must be 4 hours times 15 degrees behind Greenwich, So, 60 degrees west of England. Simple, right?</p>
                                <p>(A map of the world is shown. The time on the Prime Meridian is displayed by a clock as 16:00. The Prime Meridian is labelled GMT, standing for Greenwich Mean Time. The time at the line of longitude the ship is on is 12:00, labelled as GMT -4, or 60 degrees west.)</p>
                                <p>Narrator: While this method of determining longitude was fairly easy to understand, it still required a super reliable clock in order to do it. And a clock accurate enough for the job did not exist. In 1714 the British government offered a prize of 20,000 pounds to anyone who could pull this off. That&rsquo;s about $4 Million today! Well, in 1761 a clockmaker named John Harrison finally did it with his invention of the marine chronometer.</p>
                                <p>(A historic drawing of John Harrison sitting in a chair. He wears upper-class clothing, including a buttoned coat and a white wig. An animated H4 Marine Chronometer is shown. It looks like a pocket watch with a clock face.)</p>
                                <p>Narrator: Captain James Cook gave Harrison&rsquo;s chronometer its first long run test by using it on his second and third voyages exploring the Pacific Ocean over a number of years. Cook was delighted with it. Because explorers could now easily determine their exact location in terms of both latitude and longitude, it became possible for Cook and then later Captain Vancouver, to draw very accurate maps.</p>
                                <p>(World is shown. Lines of latitude are labelled as (y). Lines of longitude are labelled (x).)</p>
                                <p>Narrator: Previous attempts to create a map without knowing a ship's exact location was essentially guesswork. Look at this early Russian map of the Northwest coast, and now compare it to this one here created by Captain Vancouver.</p>
                                <p>(The Russian map shows a map of North America with little detail and inaccurate coastlines. Captain Vancouver&rsquo;s map is very detailed, including individual islands.)</p>
                                <p>Narrator: Landmarks and ocean depths along the coastline could be recorded in more detail than ever before by marking exact positions of longitude x and latitude y. And that&rsquo;s how Captain Vancouver navigated the oceans hundreds of years ago!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card2" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Video: </span>What were the vessels like that Captain Vancouver sailed in?</h2>
                        </div>
                        <div class="back">
                            <a href="#card3" class="card-skip-link offScreen">Skip to next card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video2" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/NchNzpj5YQo?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video2-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                            <label class="no-js">Transcript</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video2-transcript" class="transcript closed">
                                <p>(As the video begins, there is upbeat Celtic music with violin. The background noise is waves crashing)</p>
                                <p>A Narrator says: What were the vessels like that Captain Vancouver sailed in?</p>
                                <p>(A three-dimensional side view of an animated HMS Discovery is shown. It’s an 18th-century ship with 3 masts and many sails. The bottom half of the ship has a rounded brown hull. Lining the front and bottom of the hull is a grey-brown keel, and on the bottom-back is a grey-brown rectangle, known as the rudder. Above the hull is the flat deck, with a lighter-brown wood. Attached to the hull, just below the deck, are lighter-brown horizontal pieces of wood called “spars”. Many vertical ropes and rope ladders connect the spars to the masts and sails above. At the back of the ship, is a cabin room with the only windows on the ship. </p>
                                <p>The ship has three masts perpendicular to the deck with sails.</p>
                                <p>At the front of the ship, there is a long piece of wood that looks like a mast, but it comes out of the nose of the ship at a 45-degree angle to the deck. This is called a bowsprit, and it has triangular sails attached.</p>
                                <p>Hanging off the back of the ship is a large flag of the Red Ensign, a flag flown by the British Navy. The flag is red, with a small Union Jack in the top left corner.)</p>
                                <p> Narrator: A European ship in the 1700s was made from a variety of different wood. The frame of the vessel was made from White Oak, because of its strength and resistance to rotting.</p>
                                <p>(The image of the ship is made semi-transparent. The grey-brown keel, rudder, and frame of the ship are opaque, highlighting them as being made of white oak wood). </p>
                                <p>Narrator: The decks and hull planking were made from cedar or fir.</p>
                                <p>(The ship is again made semi-transparent. This time, the brown hull and lighter-brown deck are made opaque, highlighting them as being made of cedar or fir wood.)</p>
                                <p>Narrator: And Sitka Spruce was preferred for the masts and spars as they could more easily bend without breaking in heavy winds.</p>
                                <p>(The ship is again made semi-transparent. This time, the masts, spars, and the bowsprit at the front of the vessel.)</p>
                                <p>Narrator: A mast would be “stepped” into the keel and then secured in place by shrouds and stays made from tar covered hemp rope.</p>
                                <p>(The side planks of the hull disappear, providing a view of the frame of the vessel. The vertical masts continue straight through the deck until they reach the bottom of the hull. It is unclear where the shrouds are, but a coil of black tar-covered hemp rope is shown as an example of the material.)</p>
                                <p>Narrator: Vessels like this needed a lot of looking after, so crew included a number of carpenters.</p>
                                <p>(A black and white drawing of five male carpenters appears on screen.)</p>
                                <p>Narrator: Masts and spars would frequently need to be replaced. Leaks were a constant concern. In Vancouver’s time the vessel’s bottom was also sheathed in copper to protect it against Teredo worm which is a saltwater clam that burrows into the timber. The copper bottom also helped a ship to slip faster through the water.</p>
                                <p>(A copper shell is seen covering the bottom half of the hull. Teredo worm is a small white worm, and a photograph shows the holes they make in a piece of wood.)</p>
                                <p>Narrator: European vessels were powered by the wind using a combination of four-sided “square” sails and triangular “Lateen” sails made from canvas.</p>
                                <p>(The square sails are attached to the three vertical masts (3 on the front mast, 3 on the middle mast, and 2 on the back mast), and two on the bottom of the bowsprit. There are 10 square sails total. There are four triangular lateen sails total. Two are located in between the bowsprit and front mast, and the other two between the front and middle mast.)</p>
                                <p>Narrator: The design of these vessels evolved from Venetian, Roman and Viking boats that originally sailed along the European coastline. </p>
                                <p>(A timeline of ships appears on the screen. The timeline of ships includes a Knarr, which has one mast and sail. The next ships in the timeline are: Koh (1180 CE), Kog (1250 CE), Carrack (1450 CE), Nao (1490 CE), Venetian Carrack (1500 CE), English Galleon (1550 CE), and Spanish Galleon (1550 CE). Over time, the ships increasingly have more sails, masts, and deeper hulls. The Galleons are reminiscent of the brig.) </p>
                                <p>Narrator: By the 16th century, bigger vessels with enclosed decks were developed to cross the ocean. Square sails were more commonly used for long ocean crossings because they captured more wind. On the downside, a square-rigged ship ideally needed to have the wind coming from behind or beside it.</p>
                                <p>(A graphic shows how the wind direction pushes into the rectangular sails to move the ship forward. The rectangular sails can be changed to turn slightly to the left or right to better catch the wind. For example, if the wind was coming from the back right of the ship, the sails would be turned slightly to the left, so that more of the backside of the sails is exposed to the oncoming wind.)</p>
                                <p>Narrator: Because sailors had to go aloft to change the sails, which means climbing up the rigging, these vessels required large crews. There was also a strong possibility of losing a seaman from falling off the rigging and going overboard. Sadly, it was not always possible to go back and find them. </p>
                                <p>(There is an animation of seamen climbing up a rope ladder to the crow’s nests high up on the masts. One seaman falls off into the water.)</p>
                                <p>Narrator: Captain Vancouver had two vessels for his expedition, His Majesty’s Ship Discovery (HMS Discovery for short) and HMS Chatham.</p>
                                <p>(A similar animated HMS Chatham ship is seen beside the HMS Discovery. The HMS Chatham is half the size, shorter, and has two masts instead of three. The Chatham’s sails are also half the size of the HMS Discovery’s.)</p>
                                <p>Narrator: Both vessels were ideal for survey work; they had shallow drafts which meant they could get in close to shore.</p>
                                <p>(The draft is identified as the vertical distance between the bottom of the hull and the waterline). </p>
                                <p>Narrator: They also had rounded nearly flat bottoms which meant they would be less likely to roll over if they did become grounded. That’s very handy when you’re sailing in unknown waters. The Discovery was about 100 feet long and 28 feet across. It was very similar to Captain Cook’s ship, HMS Endeavour. The design was based on a Collier, a ship that transports coal. Consequently, the hull was very strong and there was a large amount of space below the deck.</p>
                                <p>(A drawing of the inside of the hull shows multiple levels and big open spaces.)</p>
                                <p>Narrator: The Chatham was half the size, 53 feet long and 22 feet across. As a general rule, the bigger the sail area and the longer the vessel the faster it will go. The Discovery had a top speed of 8 nautical miles in one hour. That’s about 15 kilometres per hour. The Chatham was a “brig’ which meant it was rigged mostly with square sails on two masts. The Discovery was a “fully rigged ship” which meant it was rigged mostly with square sails on three masts. The British navy classified these vessels as “sloops of war” which meant they had less than 20 large guns. The Discovery had 10 guns and the Chatham had 4. By comparison, a first-rate British Navy warship from this period would have over 100 large guns and was roughly twice the size of the Discovery. </p>
                                <p>Narrator: The Discovery had a crew of 100 men which included 9 ship officers, 38 able seamen to sail the ship, a military force of 16 marines, and skilled tradesmen such as carpenters, sailmakers, cooks, servants, gunners and a surgeon.</p>
                                <p>(An infographic also shows icons of 8 carpenters, 6 cooks, 6 servants, and 10 gunners. The back of the HMS Discovery is also shown, with the word “Discovery” on the back in gold lettering.)</p>
                                <p>Narrator: The Chatham had a crew of 45 in a similar combination of officers, seaman, marines and tradesmen. Life onboard both vessels would have been very cramped.</p>
                                <p>(An infographic next to the HMS Chatham shows icons of 4 officers, 18 seamen, 6 marines, 3 carpenters, 3 sailmakers, 3 cooks, 3 servants, 4 gunners and 1 surgeon. The back of the HMS Chatham also has gold lettering spelling “Chatham”.)</p>
                                <p>Narrator: Why are square sails uncommon today? By the 1800s, multiple mast “schooners” were becoming popular, particularly for trading and fishing vessels. They employed a fore-and-aft rig. This meant that rather than having the sails positioned across the ship using spars the sail ran along the length of the ship using booms.</p>
                                <p>(An animated schooner appears. It looks very modern compared to the HMS Discovery. The black hull is long and thin, and the deck lies close to the water. There are four masts all of the same height. Each mast has one tall, while, rectangular sail and a smaller triangular sail near the top. Attached between the bowsprit and the first mast are five triangle sails. There is another white sail between each set of masts. A boom is labelled as a long wooden bar perpendicular to the bottom of the mast. It anchors the bottom of the large rectangular sails.)</p>
                                <p>Narrator: Less crew was needed on a schooner because the sails could be changed on deck, no crew was needed to go aloft. The fore-and-aft sails also allowed the vessel to sail closer to the wind, which means it could sail with the wind nearer to the bow of the ship. This ultimately shortened the length of the journey.</p>
                                <p>(The fore-and-aft sails are the 5 triangular sails at the front of the ship. A graphic shows the wind coming in the direction opposite of which the ship is sailing. The wind first contacts the triangular sails.)</p>
                                <p>Narrator: Modern sailing yachts today still use a fore and aft sail rig. They also have metal masts and deeper keels which can support much larger sails.</p>
                                <p>(An animated modern sailing yacht appears on the screen. It has a long hull with a very short vertical height. The deck is even closer to the water than the schooner’s deck was. There is one central mast with two large right triangular sails coming off of it. There are some diagonal ropes connecting the mast and deck.)</p>
                                <p>The Narrator says jokingly: Unlike vessels in Captain Vancouver’s time, ships today usually have a lot fewer cannons.</p>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close-all relative text-center">
                <button id="close-cards-button-2" class="btn" onClick="setActive()" aria-expanded="true">Close Card</button>
            </div>
        </section>
        <div class="pull-quote text-center">
            <h2 class="subtitle">Board a sailing brig and learn how sailors speak.</h2>
        </div>
        <section class="cards-wrapper no-active" aria-label="Videos describing some particularieties of language in sailing.">
            <div class="offScreen">
                <p>
                    Click or press enter to flip cards and watch a video.
                </p>
            </div>
            <div class="cards">
                <div id="card1_1" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Video: </span>Hands aloft!</h2>
                        </div>
                        <div class="back">
                            <a href="#card2_2" class="card-skip-link offScreen">Skip to the next card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video4" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/KnNdpcpPm5M?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video4-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                            <label class="no-js">Transcript</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video4-transcript" class="transcript closed">
                                <p>(As the video begins, there is upbeat Celtic music with violin. Video of a 1700s brig sailing at sea on a sunny day).</p>
                                <p>Narrator: Setting foot on a sailing ship could leave you a little puzzled about what everyone is talking about. The orders a Captain gives the crew, even today, can almost sound like a different language. See If you can learn a few words and phrases. It will go a long way in helping you understand how sailing a ship works. Maybe one day you&rsquo;ll get to join the crew!</p>
                                <p>(Video of the captain navigating the ship and sailors pulling ropes hard attached to the masts.)</p>
                                <p>Let's start here, on this square-rigged brig very similar to the one used by Captain Vancouver hundreds of years ago.</p>
                                <p>(The brig is on the water. It has two masts, each with two square sails. At the front of the ship are two triangular sails. The back of the ship has a large sail.)</p>
                                <p>All boats have a bow, stern, port and starboard sides. The sails are attached to masts and yards and are identified by their position on the boat (fore and main), and their position on the mast (top sails and top gallant sails).</p>
                                <p>(The front of the ship is labelled &ldquo;bow&rdquo;. The back of the ship is labelled &ldquo;stern&rdquo;. The left side of the ship is labelled &ldquo;port&rdquo; and the right side is labelled &ldquo;starboard&rdquo;. Masts are the tall, vertical posts with which sails are attached. The yards are long, horizontal beams that support the top and bottom of the sails. The foresails are sails closest to the bow and the mainsails are in the centre of the ship. The topsails are high on the masts, the topgallant sails are the sails at the top of the masts.)</p>
                                <p>Narrator: A captain might call,</p>
                                <p>Captain: &quot;Hand aloft to loose out the fore and main tops'ls and t'gallants.&quot;</p>
                                <p>Narrator Hand refers to crew. Aloft, well, that means climb on up the rigging.</p>
                                <p>(Video of sailors climbing up the rope ladders, known as rigging, all the way to the top of the masts.)</p>
                                <p>Narrator: Tops'ls and T'gallants is a bit of nautical slang for Top Sails and Top Gallant Sails. So, &quot;Hand aloft to loose out the fore and main tops'ls and t'gallants,&quot; is the Captain&rsquo;s order for the crew to climb up the fore and main masts, and let down the top and topgallant sails.</p>
                                <p>Captain: &ldquo;Let fall!&rdquo;</p>
                                <p>(The sailors then walk out on horizontal ropes to roll down the topsails and topgallant sails, opening up the white sails.)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card2_2" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Video: </span>That&rsquo;s well halyard</h2>
                        </div>
                        <div class="back">
                            <a href="#card3_3" class="card-skip-link offScreen">Skip to next card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video5" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/Xeh-VUMTl9g?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video5-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                            <label class="no-js">Transcript</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video5-transcript" class="transcript closed">
                                <p>(As the video begins, there is upbeat Celtic music with violin. Video of a 1700s brig sailing at sea on a sunny day. The video focuses on the highest sails on the ship. The white sails are unrolling, opening up.) Narrator: Once the sails are 'loosed', most of the work sailing the ship happens down on the decking using ropes.</p>
                                <p>(Sailors are pulling at some of the many ropes on the deck and attached to masts on the ship.)</p>
                                <p>Narrator: Ropes used to maneuver the sails are called halyards and braces, depending on what they are attached to.</p>
                                <p>(Halyards and braces are long ropes extending from the deck up to the sails. Halyards are used to hoist sails and ladders. Braces are used to rotate sails to a different angle.)</p>
                                <p>Narrator: The captain may now call,</p>
                                <p>Captain: &quot;Hands to halyard. Haul away Halyard!&rdquo;</p>
                                <p>Narrator: And the crew would go about pulling those halyard ropes to hoist up the yard, which is the horizontal pole above the sail. Those sails need to be good and tight to get the most out of the wind.</p>
                                <p>(Five sailors on deck are seen pulling hard on a rope that lifts the yard, thereby raising up a sail high above the crew.)</p>
                                <p>Captain: &ldquo;That&rsquo;s well halyard!&rdquo;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card3_3" class="card">
                    <div class="content">
                        <div class="front">
                            <h2><span class="sr-only">Video: </span>That&rsquo;s well braces</h2>
                        </div>
                        <div class="back">
                            <a href="#card1_1" class="card-skip-link offScreen">Skip to first card</a>
                            <div class="responsive-wrapper">
                                <iframe id="video6" class="no-js-hide youtube" width="560" height="315" src="https://www.youtube-nocookie.com/embed/lcxAUgMuqCg?enablejsapi=1&modestbranding=1&rel=0" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                            </div>
                            <button id="video6-transcript-toggle" class="transcript-toggle" aria-expanded="false"><span class="show-status">Show</span><span class="hide-status">Hide</span> Transcript</button>
                            <label class="no-js">Transcript</label>
                            <input type="checkbox" class="no-js transcript-toggle">
                            <div id="video6-transcript" class="transcript closed">
                                <p>(As the video begins, there is upbeat Celtic music with violin. Video of a 1700s brig sailing at sea on a sunny day.)</p>
                                <p>Narrator: Now that the sails are up, the Captain can steer the ship using the rudder and the wind. Something he calls tacking. He uses the helm which moves the rudder at the stern. And that moves the boat left or right.</p>
                                <p>(An animation focuses on the stern (the back) of a brig. Under the water is a large rudder, that moves from side to side.)</p>
                                <p>Narrator: At the same time the captain orders the crew to move the sails to make sure they catch the wind. The Captain shouts:</p>
                                <p>Captain: <em>"Hands to main braces. Brace up sharp. Port Tack!"</em></p>
                                <p>Narrator: Braces are ropes attached to the yard. They are used for rotating the yard around the mast. "Brace up sharp, port tack" means to rotate hard towards the wind, which happens to be coming from the port side. </p>
                                <p>(Sailors on deck are unwinding and loosening vertical ropes. An animation shows that braces are long ropes extending from the deck up to the sails. They are attached to yards, which support the sails and help the sails move from side to side. The sails change direction to face the direction of the wind.)</p>
                                <p>Narrator: And from there, you can determine the full command given by the captain. If you were talking to your friend you might say, "Hey buddy, grab that rope attached to the spinny part of that horizontal pole there, about halfway up, and pull it hard until it's facing the left and catching that wind." But, that's a mouthful!</p>
                                <p>Captain: <em>“That’s well, braces!”</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close-all relative text-center">
                <button id="close-cards-button-1" class="btn" onClick="setActive()" aria-expanded="true">Close Card</button>
            </div>
        </section>
        <?php include "gallery.php" ?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/en-footer.php" ?>
</body>

</html>