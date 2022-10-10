<?php

$language = "en";
include 'language-detect.php';
if ($lang === "en" || $lang == "fr") {
    $language = $lang;
    $home = "/en/home/";
} else {
    $home = "/fr/debut/";
}

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Location: $home");
die();
