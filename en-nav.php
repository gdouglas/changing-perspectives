<nav>
    <ul>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'home') ? '"current link"' : "link" ?>><a class="gold" href="/en/home/" rel="noopener noreferrer">Home</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'context') ? '"current link"' : "link" ?>><a class="gold" href="/en/context/" rel="noopener noreferrer">Context</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'expedition') ? '"current link"' : "link" ?>><a class="gold" href="/en/expedition/" rel="noopener noreferrer">Vancouver Expedition</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'legacies') ? '"current link"' : "link" ?>><a class="gold" href="/en/legacies/" rel="noopener noreferrer">Vancouver Legacies</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'technologies') ? '"current link"' : "link" ?>><a class="gold" href="/en/technologies/" rel="noopener noreferrer">Navigation and Ship Technology</a></li>
    </ul>
</nav>
