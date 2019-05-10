<div>
    <h1>Changing Perspectives</h1>
</div>
<?php
    if (strpos($_SERVER['REQUEST_URI'], 'en/')){
        // echo "English";
        $language_link = '<a href="/fra'.substr($_SERVER['REQUEST_URI'], 3).'">Français</a>';
        $logo = '<img src="/images/vmc-logo-en.png" alt="Virtual Museum of Canada">';
    } else if (strpos($_SERVER['REQUEST_URI'], "fra/")){
        // echo "FR";
        $language_link = '<a href="/en'.substr($_SERVER['REQUEST_URI'], 3).'">English</a>';
        $logo = '<img src="/images/vmc-logo-fr.png" alt="Musée virtuel du Canada">';
    }
?>
<div class="right">
    <?php 
        echo $language_link;
        echo $logo;
    ?>
</div>