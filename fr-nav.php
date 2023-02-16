<nav id="top-nav">
    <button id="nav-menu" class="btn" type="button">Menu</button>
    <ul>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'accueil') ? '"current link"' : 'link'; ?>>
            <a class="gold" href="/fr/accueil/" rel="noopener noreferrer">Accueil</a>
        </li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'relations') ? '"current link"' : 'link'; ?>>
            <a class="gold" href="/fr/relations/" rel="noopener noreferrer">Relations</a>
        </li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'rencontres') ? '"current link"' : 'link'; ?>>
            <a class="gold" href="/fr/rencontres/" rel="noopener noreferrer">Rencontres</a>
        </li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'legs') ? '"current link"' : 'link'; ?>>
            <a class="gold" href="/fr/legs/" rel="noopener noreferrer">Legs</a>
        </li>
        <li class=<?php echo strpos($_SERVER['REQUEST_URI'], 'navigation') ? '"current link"' : 'link'; ?>>
            <a class="gold" href="/fr/navigation/" rel="noopener noreferrer">Navigation</a>
        </li>
    </ul>
</nav>
