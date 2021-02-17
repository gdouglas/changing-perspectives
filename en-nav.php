<nav id="top-nav">
    <button id="nav-menu" class="btn" type="button">Menu</button>
    <ul>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'debut-home') ? '"current link"' : "link" ?>><a class="gold" href="/" rel="noopener noreferrer">Home</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'context') ? '"current link"' : "link" ?>><a class="gold" href="/en/contexte-context/" rel="noopener noreferrer">The Story Before Vancouver</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'expedition') ? '"current link"' : "link" ?>><a class="gold" href="/en/expedition/" rel="noopener noreferrer">Vancouver's Story</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'legacies') ? '"current link"' : "link" ?>><a class="gold" href="/en/heritage-legacies/" rel="noopener noreferrer">Stories from Yuquot</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'technologies') ? '"current link"' : "link" ?>><a class="gold" href="/en/technologies/" rel="noopener noreferrer">European Sailing Technology</a></li>
    </ul>
</nav>