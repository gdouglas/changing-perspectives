<?php
session_start();

function detectUrlLanguagePreference()
{
    // Check if '/en' is present in the current URL
    if (strpos($_SERVER['REQUEST_URI'], '/en') === 0) {
        return 'en'; // English
    }

    // Check if '/fr' is present in the current URL
    if (strpos($_SERVER['REQUEST_URI'], '/fr') === 0) {
        return 'fr'; // French
    }
    // URL does not have a language value
    return getLanguageFromSession();
}

function getLanguageFromSession()
{
    if (isset($_SESSION['lang'])) {
        return $_SESSION['lang'];
    } else {
        return getBrowserLanguage();
    }
}

function getBrowserLanguage()
{
    // Check if the user has a language preference in their browser
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $acceptedLanguages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

        foreach ($acceptedLanguages as $language) {
            if (strpos($language, 'fr') !== false) {
                return 'fr'; // French
            } elseif (strpos($language, 'en') !== false) {
                return 'en'; // English
            }
        }
    }

    // Fallback to a default language
    return 'en';
}

function setLanguage()
{
    return detectUrlLanguagePreference();
}

// Check if the language preference is set in the URL
$language = setLanguage();

// Update the session variable with the detected language preference
$_SESSION['lang'] = $language;
