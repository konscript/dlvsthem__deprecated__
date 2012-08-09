<?php

/**
 * Homepage Blog Panel
 */
 
	/**
 	* The Variables
 	*
 	* Setup default variables, overriding them if the "Theme Options" have been saved.
 	*/
	
	$settings = array(
					'blog_area_content' => 'blog',
					'blog_area_title' => '',
					'blog_area_entries' => 3,
					'blog_area_page' => ''
					);
					
	$settings = woo_get_dynamic_values( $settings );
		
?>			
		<div class="home-blog fix">
			
			<section id="" class=""> 

				<div id="map-wrapper">

					<h3><?php echo $settings['blog_area_title'] ?></h3>
				
					<div class="map-form-container">
						<form method="GET" class="map-form" action="<?php bloginfo('wpurl'); ?>">
						  <select name="Country" id="country-selector">
							<option value="" selected="selected">Vælg land</option>
							<?php $countries = getCountries(); ?>	
							<?php foreach($countries as $country): ?>
								<?php 
									$country_name = $country->post_title;
									$country_slug = get_permalink($country->ID);				
									$country_id = $country->ID;
								?>					
							<option value="<?= $country_slug; ?>"><?=$country_name; ?></option>					
							<?php endforeach; ?>
							</select>
						  <input type="Submit" value="Find">
						</form>
						<span class="map-text">eller klik på kortet:</span>
					</div>

					 <div id="map-continents">
					 <ul class="continents">
					  <li class="c1"><a href="<?php bloginfo('wpurl'); ?>/region/africa">Africa</a></li>
					  <li class="c2"><a href="<?php bloginfo('wpurl'); ?>/region/asia">Asien</a></li>
					  <li class="c3"><a href="<?php bloginfo('wpurl'); ?>/region/oceania">Oceanien</a></li>
					  <li class="c4"><a href="<?php bloginfo('wpurl'); ?>/region/europe">Europa</a></li>
					  <li class="c5"><a href="<?php bloginfo('wpurl'); ?>/region/north-america">Nord Amerika</a></li>
					  <li class="c6"><a href="<?php bloginfo('wpurl'); ?>/region/south-america">Syd Amerika</a></li>
					 </ul>
					</div>

				</div>		

				<script type="text/javascript">
				jQuery.noConflict();
				(function($){
					$(document).ready(function() {	
						$('#map-continents').cssMap({'size' : 540});
					});
				})(jQuery);
					
				</script>


				<?php wp_enqueue_script('jquery.cssmap.js', get_template_directory_uri() . '/includes/js/dlvs/jquery.cssmap.js' );?>
				<link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo get_template_directory_uri(); ?>/includes/css/map-continents/cssmap-continents.css" />
			
			<?php woo_pagenav();?>
        	        
			</section><!-- /#main -->
			<?php /* Remove categories filter for sidebar widget */ remove_filter( 'pre_get_posts', 'woo_exclude_categories_homepage' ); ?>
        	<?php get_sidebar(); ?>
        	
    	</div>
    
    	<?php wp_reset_query(); ?>