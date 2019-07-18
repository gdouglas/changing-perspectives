<?php
    $language = "en";
    include 'language-detect.php';
    if ($lang === "en" || $lang == "fra") {
        $language = $lang;
    }
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Location: http://localhost:8000/$lang/home/");
    die();
?>