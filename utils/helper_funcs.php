<?php

function links_to_hyperlinks($search_string, $return) {
	$pattern = "/\b(\w*(\S)*(.com|.net|.org|.io|.gov|.edu|.uk|.fr|.be)(\S)*\w*)\b/";
	preg_match_all($pattern, $search_string, $matches);
		
	foreach ($matches[0] as $match) {
		if (strpos($match,"http") !== false) {
			$search_string = str_replace($match, "<a href='$match'>$match</a>", $search_string);
		}
	}

	if ($return == "string") {
		return $search_string;
	}
	else {
		return $matches[0];
	}
}

function process_text($search_string) {
	$search_string = links_to_hyperlinks($search_string, "string");
	return $search_string;
}

function getYTEmbed($unparsed_url) {

	parse_str( parse_url( $unparsed_url, PHP_URL_QUERY ), $result );
	
	$embed_link = "http://www.youtube.com/embed/" . $result['v'];
	$player_link = '<iframe class="scroll_vid" src="' . $embed_link . '" frameborder="0" allowfullscreen></iframe>';
	
	return $player_link;
}
