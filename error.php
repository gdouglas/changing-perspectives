<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Error Page</title>
</head>
<body>
    <?php
    // Determine the language based on user preferences or other criteria
    $preferredLanguage = 'en'; // Set default language to English

    // Check if the user's preferred language is French
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'fr') !== false) {
        $preferredLanguage = 'fr';
    }

    // Error messages in English and French
    $errorMessages = [
        'en' => [
            '404' => 'Page not found.',
            '500' => 'Internal Server Error.',
        ],
        'fr' => [
            '404' => 'Page non trouvée.',
            '500' => 'Erreur interne du serveur.',
        ],
    ];

    // Get the HTTP error code
    $errorCode = http_response_code();
    
    // Get the appropriate error message based on the language and error code
    $errorMessage = $errorMessages[$preferredLanguage][$errorCode];

    // Display the error message
    echo "<h1>$errorMessage</h1>";
    var_dump($errorCode);
    ?>
</body>
</html>
