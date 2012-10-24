<?php /* Template Name: Vaccination recommendations */ ?>
<?php get_header(); ?>
<<<<<<< HEAD

<div id="content">
	<div class="page col-full">
		<?php sidebar(true, true, false); ?>
		<section id="main" class="col-left">

			<a class="button-book" href="<?php echo get_bloginfo('wpurl'); ?>/booking/"><div class="button-book-title">Bestil vaccination</div></a>
			<header><h1><?php the_title(); ?></h1></header>
			<?php echo the_content(); ?>

			<div id="map-wrapper">

				<h3 class="map-header">Hvilke vacciner anbefales?</h3>
=======
<?php 
$args = array(
	'post_type'	=>'region',
	'title_li'	=> '&nbsp;',
	'echo'		=> false,
);
//$sidebar_button = '<a class="button-book" href="'.get_bloginfo("wpurl").'/booking/"><div class="button-book-title">' . dlvs_translate("Book vaccination") . '</div></a>';
$sidebar_menu = wp_list_pages( $args ); ?>

<div id="content">
	<div class="page col-full">
		<?php 
		sidebar($sidebar_menu, true, false); ?>
		<section id="main" class="col-left">
			
			<header><h1><?php the_title(); ?></h1></header>
			<?php while ( have_posts() ) { the_post(); $count++;
				the_content(); 
			}?>	
			<div id="map-wrapper">
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
			
				<div class="map-form-container">
					<form method="GET" class="map-form" action="<?php bloginfo('wpurl'); ?>">
					  <select name="Country" id="country-selector">
<<<<<<< HEAD
						<option value="" selected="selected">Vælg land</option>
=======
						<option value="" selected="selected"><?php echo dlvs_translate("Choose country"); ?></option>
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
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
<<<<<<< HEAD
					<span class="map-text">eller klik på kortet:</span>
				</div>
				

=======
					<span class="map-text"><?php echo dlvs_translate("or click on the map"); ?>:</span>
				</div>
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f

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
		</section>
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


<?php get_footer(); ?>
