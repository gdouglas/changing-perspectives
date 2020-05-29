<nav id="top-nav">
    <button id="nav-menu" class="btn" type="button">Menu</button>
    <ul role="navigation" aria-label="Site Navigation">
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'home') ? '"current link"' : "link" ?>><a class="gold" href="/fra/debut-home/" rel="noopener noreferrer">Debut</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'context') ? '"current link"' : "link" ?>><a class="gold" href="/fra/contexte-context/" rel="noopener noreferrer">Contexte</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'expedition') ? '"current link"' : "link" ?>><a class="gold" href="/fra/expedition/" rel="noopener noreferrer">Vancouver Expedition</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'legacies') ? '"current link"' : "link" ?>><a class="gold" href="/fra/heritage-legacies/" rel="noopener noreferrer">Vancouver Legacies</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'technologies') ? '"current link"' : "link" ?>><a class="gold" href="/fra/technologies/" rel="noopener noreferrer">Technologie de navigation et de navire</a></li>
    </ul>
</nav>
