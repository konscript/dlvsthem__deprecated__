<?php
/**
 * Homepage Features Panel
 */
 
	/**
 	* The Variables
 	*
 	* Setup default variables, overriding them if the "Theme Options" have been saved.
 	*/
	
<<<<<<< HEAD
	$settings = array(
					'features_area_entries' => 3,
=======


	$settings = array(
					'features_area_entries' => $settings['features_area_entries'],
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
					'features_area_title' => '',
					'features_area_message' => '',
					'features_area_link_text' => __( 'View all our features', 'woothemes' ),
					'features_area_link_URL' => '',
					'features_area_order' => 'DESC'
					);
					
	$settings = woo_get_dynamic_values( $settings );
	$orderby = 'date';
	if ( $settings['features_area_order'] == 'rand' )
		$orderby = 'rand';
	
?>
			<?php
    		$number_of_features = $settings['features_area_entries'];
    		$features_args = array(
					'post_type' => 'features',  
					'posts_per_page' => $number_of_features, 
					'order' => $settings['features_area_order'], 
					'orderby' => $orderby
				);
				
			/* The Query. */			   
			query_posts( $features_args );
			
			/* The Loop. */	
			if ( have_posts() ) { $count = 0; ?>
<<<<<<< HEAD
			<section id="features" class="home-section fix">
=======
			<section id="features" class="home-section fix count<?php echo $settings['features_area_entries']; ?>">
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
    		
    			<?php if ($settings['features_area_title']): ?>
    			<header class="block">
    				<h1><?php echo stripslashes( $settings['features_area_title'] ); ?></h1>
    				<p><?php echo stripslashes( $settings['features_area_message'] ); ?></p>
    				<a class="more" href="<?php if ( $settings['features_area_link_URL'] != '' ) echo $settings['features_area_link_URL']; else echo get_post_type_archive_link('features'); ?>" title="<?php echo stripslashes( $settings['features_area_link_text'] ); ?>"><?php echo stripslashes( $settings['features_area_link_text'] ); ?></a>
    			</header>
    			<?php endif; ?>
    			
    			<ul>
				<?php
				while ( have_posts() ) { the_post(); $count++;
    				?>
<<<<<<< HEAD
    				<li class="fix <?php if ( $count % 3 == 0 ) { echo 'last'; } ?>">
=======
    				<li class="fix <?php if ( $count == $settings['features_area_entries']) { echo 'last'; } ?>">
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
    					
    					<?php $feature_readmore = get_post_meta( $post->ID, 'feature_readmore', true ); ?>
	    				<h2><a href="<?php if ( $feature_readmore != '' ) { echo $feature_readmore; } else { the_permalink(); } ?>"><?php the_title(); ?></a></h2>
	    				<?php $feature_excerpt = get_post_meta( $post->ID, 'feature_excerpt', true ); ?>
	    				<p>
	    					<img src="<?php echo get_post_meta( $post->ID, 'feature_icon', true ); ?>" alt="" />
	    					<?php 
	    					if ( $feature_excerpt != '' ) { 
	    						echo stripslashes( $feature_excerpt ); 
	    					} else { 
	    						the_excerpt(); 
	    					} ?>
	    				</p>
	    				</li>
<<<<<<< HEAD
	    				<?php if ( $count % 3 == 0 ) { echo '<li class="fix clear"></li>'; } ?>
=======
	    				<?php if ( $count == $settings['features_area_entries']) { echo '<li class="fix clear"></li>'; } ?>
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
    				<?php
    			} // End While Loop ?>
    			</ul>
    		
    		</section>
    		<?php } // End If Statement ?>
    		
    		<?php wp_reset_query(); ?>