<?php /* Template Name: Clinics */ ?>
<?php get_header(); ?>
<?php
// Sidebar menu
$args = array(
  'post_type'=>'clinic',
  'title_li'=> '&nbsp;',
  'echo' => false,  
);
$sidebar_menu = wp_list_pages( $args ); ?>

<div id="content">
	<div class="page col-full">
		<?php sidebar($sidebar_menu, true, false); ?>
		<section id="main" class="col-left">
	
			<?php 
<<<<<<< HEAD
			$clinic = basename(get_permalink());
			echo '<a class="button-book" href="' . get_bloginfo('wpurl') . '/booking/clinic/' . $clinic . '"><div class="button-book-title">Bestil vaccination</div></a>';
			?>
			<header><h1><?php the_title(); ?></h1></header>
			<?php echo the_content(); ?>	

=======
				$clinic = basename(get_permalink());
			?>
			<header><h1><?php the_title(); ?></h1></header>
			<?php while ( have_posts() ) { the_post(); $count++;
				the_content(); 
			}?>	
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
		</section>
	</div>
</div>

<?php get_footer(); ?>
