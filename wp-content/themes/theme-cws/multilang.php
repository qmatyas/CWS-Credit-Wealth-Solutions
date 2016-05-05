<?php

function urlMultilang(){
	$get_language;

	$url = get_permalink($post);
	preg_match('^/fr/^', $url, $matchesfr);
	$match_fr = $matchesfr[0];

	preg_match('^/en/^', $url, $matchesen);
	$match_en = $matchesen[0];

	if(isset($match_fr) == '/fr/'){
		$get_language = 'fr/';
		return $get_language;
	} elseif (isset($match_en) == '/en/'){
		$get_language = 'en/';
		return $get_language;
	} else $get_language = ''; return $get_language;
}
