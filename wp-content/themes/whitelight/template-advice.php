<?php /* Template Name: Advice */ ?>
<?php get_header(); ?>
<?php
// Sidebar menu
if($post->post_parent) {
	$args = array(
		'title_li'=> '&nbsp;',
		'child_of'=> $post->post_parent,
		'echo' => false,
	);
} else {
	$args = array(
		'title_li'=> '&nbsp;',
		'child_of'=> $post->ID,
		'echo' => false,
	);	
}
$sidebar_menu = wp_list_pages( $args ); ?>

<div id="content">
	<div class="page col-full">
		<?php sidebar($sidebar_menu, true, false); ?>
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