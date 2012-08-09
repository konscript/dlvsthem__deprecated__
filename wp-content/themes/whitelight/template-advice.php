<?php /* Template Name: Advice */ ?>
<?php get_header(); ?>

<div id="content">
	<div class="page col-full">
		<?php sidebar(true, true, false); ?>
		<section id="main" class="col-left">	

	        <?php
	        	if ( have_posts() ) {
	        		while ( have_posts() ) { the_post();
	        ?>    
		
			<header><h1><?php the_title(); ?></h1></header>

            <section class="entry">
            	<?php the_content(); ?>

           	</section><!-- /.entry -->

	        <?php } } // End while and IF Statement ?>  

		</section>
	</div>
</div>

<?php get_footer(); ?>