<?php /* Template Name: Booking-Xmedicus */ ?>
<?php get_header(); ?>
<div id="content">
	<div class="page col-full">
		<section class="col-full template booking">
			<header><h1><?php the_title(); ?></h1></header>
			<?php while ( have_posts() ) { the_post(); $count++;
				the_content(); 
			}?>

			<?php
			// destination
			$clinic_param = urldecode($wp_query->query_vars['clinic_param']);		
			$destination_param = urldecode($wp_query->query_vars['destination_param']);

			?>

			<iframe src="http://tid.dlvs.dk:8080/booking?ou=<?= $clinic_param ?>.php" frameborder="0" width="100%" height="1000"></iframe>

		</section>	
	</div>
</div>

<?php get_footer(); ?>

