<a class="skip-main" href="#main">Skip to main content</a>
<div>
    <a href="\" class="site-title">Changing Perspectives</a>
</div>
<?php
    $language_link = '<a href="/en'.substr($_SERVER['REQUEST_URI'], 4).'">English</a>';
    $logo = '<img src="/images/logos/vmc_fre_col.svg" class="vmc-logo" alt="Virtual Museum of Canada">';
?>
<div class="right">
    <?php
        echo $language_link;
        echo $logo;
    ?>
</div>