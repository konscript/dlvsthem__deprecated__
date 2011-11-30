<?php
/*
 * post type: clinic
 * argument: destination
 * NB. Remember to rebuild permalinks after EVERY change
 ***/

// add destination to query vars
function add_query_vars($vars) {
    $vars[] = "destination";
    return $vars;
}
add_filter('query_vars', 'add_query_vars');

// flush_rewrite_rules( false );

// add new rewrite rules for clinic single and archive pages
function add_rewrite_rules($rules) {

	// eg. clinic/london/destination/thailand/
    $single_clinic = array('clinic\/([^/]+)\/destination\/([^/]+)\/?$' => 'index.php?clinic=$matches[1]&destination=$matches[2]');
    
	// eg. clinic/destination/thailand/    
    //$archive_clinic = array('clinic\/destination\/([^/]+)\/?$' => 'index.php?pagename=clinic&destination=$matches[1]');    
    
	// eg. booking-popup/destination/thailand/        
    $booking_popup = array('booking-popup\/destination\/([^/]+)\/?$' => 'index.php?pagename=booking-popup&destination=$matches[1]');        
    
    // add new rules to existing rules    
    $rules = $single_clinic + $booking_popup + $rules;

    return $rules;
    
    // single: ?clinic=london
    // archive page: ?post_type=clinic
    // page: ?pagename=clinic
}
add_filter('rewrite_rules_array', 'add_rewrite_rules');
?>
