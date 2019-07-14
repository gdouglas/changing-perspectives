<a class="skip-main" href="#main">Skip to main content</a>
<div>
    <a href="\" class="site-title">THUNDER IN OUR VOICES</a>
</div>
<?php
    $language_link = '<a href="/en'.substr($_SERVER['REQUEST_URI'], 4).'">English</a>';
    $logo = '<img src="/images/vmc-logo-en.png" alt="Virtual Museum of Canada">';
?>
<div class="right">
    <?php
        echo $language_link;
        echo $logo;
    ?>
</div>