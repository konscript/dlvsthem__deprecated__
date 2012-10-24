<?php
<<<<<<< HEAD
=======

>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
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
<<<<<<< HEAD
					'blog_area_entries' => 3,
					'blog_area_page' => ''
=======
					'blog_area_title' => '',
					'blog_area_entries' => 3,
					'blog_area_page' => '',
					'blog_area_message' => '',
					'blog_area_link_text' => __( 'View all our blog posts', 'woothemes' ),
					'blog_area_link_URL' => ''					
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
					);
					
	$settings = woo_get_dynamic_values( $settings );
		
<<<<<<< HEAD
?>			
		<div class="home-blog fix">
			
			<section id="" class=""> 
			
			<?php
				if ( $settings['blog_area_content'] == 'page' ) {
					$page_id = $settings['blog_area_page'];
					query_posts( array( 'post_type' => 'page', 'page_id' => $page_id, 'posts_per_page' => 1, ) );
				} else {
					$number_of_features = $settings['blog_area_entries'];
    				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
					/* The Query. */
					query_posts( array( 'post_type' => 'post', 'posts_per_page' => $number_of_features, 'paged' => $paged, 'order' => 'DESC', 'orderby' => 'date' ) );
				} // End If Statement
        		if ( have_posts() ) : $count = 0;
        	?>
        	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); $count++; ?>
			
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						if ( $settings['blog_area_content'] == 'page' ) {
							get_template_part( 'content', 'page' );
						} else {
							get_template_part( 'content', get_post_format() );
						}
					?>
			
				<?php endwhile; ?>
			
			<?php else : ?>
        	
        	    <article <?php post_class(); ?>>
        	        <p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
        	    </article><!-- /.post -->
        	
        	<?php endif; ?>
			
			<?php woo_pagenav();?>
        	        
			</section><!-- /#main -->
			<?php /* Remove categories filter for sidebar widget */ remove_filter( 'pre_get_posts', 'woo_exclude_categories_homepage' ); ?>
        	<?php get_sidebar(); ?>
        	
    	</div>
    
=======
?>						
		<section id="blog" class="home-section fix"> 

			<header class="block">
				<div id="map-wrapper">

					<h3><?php echo $settings['blog_area_title'] ?></h3>
				
					<div class="map-form-container">
						<form method="GET" class="map-form" action="<?php bloginfo('wpurl'); ?>">
						  <select name="Country" id="country-selector">
							<option value="" selected="selected"><?php echo dlvs_translate("Choose country"); ?></option>
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
						<span class="map-text"><?php echo dlvs_translate("or click on the map"); ?>:</span>
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

				</div>

				<p><?php echo stripslashes( $settings['blog_area_message'] ); ?></p>
				<a class="more" href="<?php if ( $settings['blog_area_link_URL'] != '' ) echo $settings['blog_area_link_URL']; else echo next_posts(); ?>" title="<?php echo stripslashes( $settings['blog_area_link_text'] ); ?>"><?php echo stripslashes( $settings['blog_area_link_text'] ); ?></a>
			
			</header>
			
			<ul class="entries">
				<!-- <li>
					<img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/whitelight/styles/red/ico-more.png" />
					<h3><a href="<?php bloginfo('wpurl'); ?>/faq">Ofte stillede spørgsmål</a></h3>
					<p>Vaccination kan være en jungle at finde rundt i - hvilke vacciner skal jeg have, hvornår og hvordan? Få hjælp her.</p>
				</li> -->
				<li>
					<img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/whitelight/styles/red/ico-more.png" />
					<?php if (dlvssite() == "sikkerrejse") { ?>
						<h3><a target="_blank" href="http://www.hpvvaccination.dk">HPV Vaccination</a></h3>
						<p>Hvert år er der omkring 100 danskere som smittes med malaria på rejser. Lær hvordan du undgår at blive smittet.</p>
					<?php } else { ?>
						<h3><a href="faq/">Frequently Asked Questions</a></h3>
						<p>Why are childhood vaccination so important? What are the most common side-effects? Get the answers.</p>					
					<?php } ?>
				</li>
				<li>
					<img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/whitelight/styles/red/ico-more.png" />
					<?php if (dlvssite() == "sikkerrejse") { ?>
						<h3><a href="<?php bloginfo('wpurl'); ?>/rejseraad/malaria">Malaria</a></h3>
						<p>Hvert år er der omkring 100 danskere som smittes med malaria på rejser. Lær hvordan du undgår at blive smittet.</p>
					<?php } else { ?>
						<h3><a href="<?php bloginfo('wpurl'); ?>/traveladvice/malaria/">Malaria prevention</a></h3>
						<p>Malaria is one of the major causes of morbidity and mortality worldwide. Learn how to avoid getting infected.</p>
					<?php } ?>				
				</li>
				<li>
					<img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/whitelight/styles/red/ico-more.png" />
					<?php if (dlvssite() == "sikkerrejse") { ?>
						<h3><a href="<?php bloginfo('wpurl'); ?>/booking">Bestil tid</a></h3>
						<p>Du kan bestille tid online til vaccination i en vores klinikker. Vælg selv tid og sted - nemmere bliver det ikke</p>
					<?php } else { ?>
						<h3><a href="<?php bloginfo('wpurl'); ?>/booking">Book your time</a></h3>
						<p>You can book a time slot online in one of our clinics. Choose time and place - it doesn't get easier.</p>					
					<?php } ?>
				</li>
			</ul>
		        	        
		</section><!-- /#main -->
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
    	<?php wp_reset_query(); ?>