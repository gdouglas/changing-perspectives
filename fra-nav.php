<nav id="top-nav">
    <button id="nav-menu" class="btn" type="button">Menu</button>
    <ul>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'debut-home') ? '"current link"' : "link" ?>><a class="gold" href="/" rel="noopener noreferrer">Debut</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'context') ? '"current link"' : "link" ?>><a class="gold" href="/fra/contexte-context/" rel="noopener noreferrer">L'histoire avant Vancouver</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'expedition') ? '"current link"' : "link" ?>><a class="gold" href="/fra/expedition/" rel="noopener noreferrer">L'histoire de Vancouver</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'legacies') ? '"current link"' : "link" ?>><a class="gold" href="/fra/heritage-legacies/" rel="noopener noreferrer">Histoires de Yuquot</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'technologies') ? '"current link"' : "link" ?>><a class="gold" href="/fra/technologies/" rel="noopener noreferrer">Technologie de voile européenne</a></li>
    </ul>
</nav>
