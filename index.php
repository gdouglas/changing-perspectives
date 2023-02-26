<?php

$language = "en";
include 'language-detect.php';
if ($_SESSION[$lang] === "fr") {
    $home = "/fr/accueil/";
} else {
    $home = "/en/home/";
}

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Location: $home");
die();
