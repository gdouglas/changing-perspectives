<a class="skip-main" href="#main">Skip to main content</a>

<div>
    <a href="\" class="site-title">Changing Perspectives</a>
</div>
<?php
    $language_link = '<a href="/fra'.substr($_SERVER['REQUEST_URI'], 3).'">Français</a>';
    $logo = '<img src="/images/vmc-logo-en.png" alt="Virtual Museum of Canada">';
?>
<div class="right">
    <?php
        echo $language_link;
        echo $logo;
    ?>
</div>
<?php include "en-nav.php"; ?>