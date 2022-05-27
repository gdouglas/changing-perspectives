<nav id="top-nav">
    <button id="nav-menu" class="btn" type="button">Menu</button>
    <ul>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'debut-home') ? '"current link"' : 'link'; ?>><a class="gold" href="/" rel="noopener noreferrer">Home</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'relations') ? '"current link"' : 'link'; ?>><a class="gold" href="/en/relations/" rel="noopener noreferrer">Relations</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'encounters') ? '"current link"' : 'link'; ?>><a class="gold" href="/en/encounters/" rel="noopener noreferrer">Encounters</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'legacies') ? '"current link"' : 'link'; ?>><a class="gold" href="/en/legacies/" rel="noopener noreferrer">Legacies</a></li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'navigation') ? '"current link"' : 'link'; ?>><a class="gold" href="/en/navigation/" rel="noopener noreferrer">Navigation</a></li>
    </ul>
</nav>
