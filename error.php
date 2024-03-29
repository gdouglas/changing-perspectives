<?php
/**
 * The server in use is not providing a reliable redirect process. 
 * The htaccess file is the limit of my access and is redirecting all 404 and 500 errors to this page.
 * $_SERVER['REDIRECT_STATUS'] has the value and I'll use that to update the http_response_code BUT it should be removed
 * We do not have the capacity to correct the issue with the server host.
 * 
 **/

// Get a languge code "en" or "fr"
require_once 'language-detect.php';

// Error messages in English and French
$errorMessages = array(
    404 => array(
        'en' => "Oops! The page you requested could not be found.",
        'fr' => "Oops ! La page que vous avez demandée est introuvable."
    ),
    500 => array(
        'en' => "Oops! Something went wrong on our server. Please try again later.",
        'fr' => "Oops ! Quelque chose s'est mal passé sur notre serveur. Veuillez réessayer ultérieurement."
    ),
    403 => array(
        'en' => "Access to the requested resource is forbidden.",
        'fr' => "Accès à la ressource demandée interdit."
    ),
    400 => array(
        'en' => "The server cannot process the request due to a bad syntax.",
        'fr' => "Le serveur ne peut pas traiter la requête en raison d'une mauvaise syntaxe."
    ),
    503 => array(
        'en' => "Sorry, the service is temporarily unavailable. Please try again later.",
        'fr' => "Désolé, le service est temporairement indisponible. Veuillez réessayer ultérieurement."
    ),
    200 => array(
        'en' => "Oops! Something went wrong on our server. Please try again later.",
        'fr' => "Oops ! Quelque chose s'est mal passé sur notre serveur. Veuillez réessayer ultérieurement."
    ),
    201 => array(
        'en' => "Created",
        'fr' => "Créé"
    ),
    // Add more entries for other possible return values here
);



// Get the HTTP error code
$errorCode = http_response_code();
// 200 code is being returned in error on the server. if response code is incrorrect for an error page replace it with the redirect_status
if ($errorCode === 200) {
    $errorCode = $_SERVER['REDIRECT_STATUS'];
}

// Get the appropriate error message based on the language and error code. This file is only loaded when an error is redirected.
$errorMessage = $errorMessages[$errorCode][$language];
?>
<!DOCTYPE html>
<html>

<head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/head.php'; ?>
    <title>Oops!
        <?php echo ' - ' . $errorCode; ?>
    </title>
</head>

<body>

    <body class="error-page">
        <a class="skip-main" href="#main">Skip to main content</a>
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/' . $language . '-header.php'; ?>
        </header>
        <main id="main" role="main" tabindex="-1">

            <?php
            // Display the error message
            echo "<h1>$errorCode</h1>";
            echo "<h1>$errorMessage</h1>";
            ?>
        </main>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/' . $language . '-footer.php'; ?>
    </body>

</html>