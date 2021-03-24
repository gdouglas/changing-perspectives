<?php

	// Languages we support
	$available_languages = array("fr", "en");
	$default_language = "en"; // a default language to fall back to in case there's no match

	function prefered_language($available_languages, $http_accept_language) {
		global $default_language;
		$available_languages = array_flip($available_languages);

		$langs = array();
		preg_match_all('~([\w-]+)(?:[^,\d]+([\d.]+))?~', strtolower($http_accept_language), $matches, PREG_SET_ORDER);
		foreach($matches as $match) {

			list($a, $b) = explode('-', $match[1]) + array('', '');
			$value = isset($match[2]) ? (float) $match[2] : 1.0;

			if(isset($available_languages[$match[1]])) {
				$langs[$match[1]] = $value;
				continue;
			}

			if(isset($available_languages[$a])) {
				$langs[$a] = $value - 0.1;
			}

		}
		if($langs) {
			arsort($langs);
			return key($langs); // We don't need the whole array of choices since we have a match
		} else {
			return $default_language;
		}
	}

	$lang = prefered_language($available_languages, strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]));
	if ($lang == "fr") {
		$lang = "fr";
	}
	// print "<h3>Site available in:</h3><pre>";
	// print_r($available_languages);
	// print "</pre>\n<h3>Browser supported languages:</h3><pre>";
	// print_r(explode(',',  strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])));
	// print "</pre>\n<h3>site will display in: <em>".$lang."</em></h3>";

?>