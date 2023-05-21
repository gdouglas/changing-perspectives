<?php

// include $_SERVER['DOCUMENT_ROOT'] . "/dev/tools.php";
// require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/protect.php';

?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" type="text/css" href="/dist/app.css">
<noscript>
    <link rel="stylesheet" type="text/css" href="/styles/no-script.css">
</noscript>
<link
    href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Lato:wght@300;400&family=Libre+Baskerville&display=swap"
    rel="stylesheet">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YE83GVZYKH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YE83GVZYKH');
</script>

<!-- Libraries -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<link href="/libs/tobii/tobii.min.css" rel="stylesheet">
<script asynyc src="/libs/tobii/tobii.min.js"></script>

<!-- Add the core slick.min.css -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">


<meta name="robots" content="index, follow" />

<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon_io/favicon-16x16.png">
<link rel="icon" type="image/svg+xml" href="/images/favicon_io/favicon.svg">
<?php
function get_translated_page() {
    $url = substr($_SERVER['REQUEST_URI'], 4, -1);
    switch ($url) {
        case "about-us";
            echo "qui-sommes-nous";
            break;
        case "encounters";
            echo "rencontres";
            break;
        case "feedback";
            echo "commentaires";
            break;
        case "home";
            echo "accueil";
            break;
        case "learner-resources";
            echo "ressources-educatives";
            break;
        case "legacies";
            echo "legs";
            break;
        case "navigation";
            echo "navigation";
            break;
        case "reading";
            echo "lectures-recommandees";
            break;
        case "relations"; 
            echo "relations";
            break;
        case "sitemap";
            echo "plan-du-site";
            break;
    // fr
        case "qui-sommes-nous";
            echo "about-us";
            break;
        case "rencontres";
            echo "encounters";
            break;
        case "commentaires";
            echo "feedback";
            break;
        case "accueil";
            echo "home";
            break;
        case "ressources-educatives";
            echo "learner-resources";
            break;
        case "legs";
            echo "legacies";
            break;
        case "navigation";
            echo "navigation";
            break;
        case "lectures-recommandees";
            echo "reading";
            break;
        case "relations";
            echo "relations"; 
            break;
        case "plan-du-site";
            echo "sitemap";
            break;
        default;
            echo "";
            break;
    }
}
//language links
/*
about-us, qui-sommes-nous
encounters, rencontres
feedback, commentaires
home, accueil
learner-resources, ressources-educatives
legacies, legs
navigation, navigation
reading, lectures-recommandees
relations, relations
sitemap, plan-du-site
*/
?>