<?php
session_start();

function detectUrlLanguagePreference() {
    // Check if '/en' is present in the current URL
    if (strpos($_SERVER['REQUEST_URI'], '/en') === 0) {
        return 'en'; // English
    }
    
    // Check if '/fr' is present in the current URL
    if (strpos($_SERVER['REQUEST_URI'], '/fr') === 0) {
        return 'fr'; // French
    }
    
    // Default to null if no language preference is found in the URL
    return null;
}

// Check if the language preference is set in the URL
$language = detectUrlLanguagePreference();

// If the language preference is not set in the URL, check the session variable
if ($language === null && isset($_SESSION['lang'])) {
    $language = $_SESSION['lang'];
} else {
    // Check if the user has a language preference in their browser
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $acceptedLanguages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        
        foreach ($acceptedLanguages as $language) {
            if (strpos($language, 'fr') !== false) {
                $language = 'fr'; // French
                break;
            } elseif (strpos($language, 'en') !== false) {
                $language = 'en'; // English
                break;
            }
        }
    }
    
    // If no language preference is found, default to English
    if ($language === null) {
        $language = 'en'; // English
    }
    
    // Update the session variable with the detected language preference
    $_SESSION['lang'] = $language;
}
