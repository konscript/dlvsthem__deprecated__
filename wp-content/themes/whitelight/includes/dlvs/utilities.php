<?php
// random utility functions that are shared across the application

// show/hide content when click on title
function slidedown($title, $content, $url = 0){
	// don't show if content is empty
	if($content == ""){
		return "";
	}

	$url = is_numeric($url) ? get_permalink( $url ) : $url;

	return '
			<h4><a href="'. $url .'">'.$title.'</a></h4>
			<div>'.$content.'</div>';
}

// returns the name of the current dlvs site
function dlvssite() {

	$site = "";
	if(strpos(get_bloginfo('url'), "flufighters") !== false){
		$site = "flufighters"; 
	} else if (strpos(get_bloginfo('url'), "dlvsdk") !== false || strpos(get_bloginfo('url'), "sikkerrejse") !== false) {
		$site = "sikkerrejse";
	} else if (strpos(get_bloginfo('url'), "dlvsuk") !== false || strpos(get_bloginfo('url'), "travelvaccination") !== false) {
		$site = "travelvaccination";
	}

	return $site;
}

function current_language() {
	if(dlvssite() == "flufighters" || dlvssite() == "travelvaccination" || dlvssite() == "dlvsuk"){
		return "en";
	}else{
		return "da";
	}
}
?>
