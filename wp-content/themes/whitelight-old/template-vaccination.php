<?php /* Template Name: Vaccinations */ ?>
<?php get_header(); ?>

<div id="content">
	<div class="page col-full">
<<<<<<< HEAD
		<?php sidebar(true, true, false); ?>
		<section id="main" class="col-left">
			<a class="button-book" href="<?php echo get_bloginfo('wpurl'); ?>/booking/"><div class="button-book-title">Bestil vaccination</div></a>
			<header><h1><?php the_title(); ?></h1></header>
			<?php echo the_content(); ?>
		
=======
		<?php //sidebar(true, true, false); ?>
		<section id="main" class="fullwidth">
			<header><h1><?php the_title(); ?></h1></header>
			<?php while ( have_posts() ) { the_post(); $count++;
				the_content(); 
			}?>	
			<br />		
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
			<?php $args = array(
			'orderby'         => 'title',
			'order'           => 'ASC',
			'numberposts'     => -1,
			'post_type'       => 'vaccination'); ?>
		
			<?php $vaccinations = get_posts( $args ); ?> 
			<table class="zebra">
<<<<<<< HEAD
				<thead><tr><td>Vaccination</td><td>Pris</td><td>Antal</td><td>Beskyttelse</td></tr></thead>
=======
				<thead><tr><td><?php echo dlvs_translate('Vaccination'); ?></td><td><?php echo dlvs_translate('Price'); ?></td><td><?php echo dlvs_translate('Quantity'); ?></td><td><?php echo dlvs_translate('Protection'); ?></td></tr></thead>
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
				<tbody>
				<?php foreach($vaccinations as $vaccination){ ?>
					<tr>
						<td><a href="<?php echo get_permalink( $vaccination->ID ); ?>"><?php echo $vaccination->post_title; ?></a></td>
						<td><?php the_field("price", $vaccination->ID); ?></td>
						<td><?php the_field("quantity", $vaccination->ID); ?></td>
						<td><?php the_field("duration_of_immunity", $vaccination->ID); //echo $fields["vaccination-duration"][0]; ?></td>
					</tr>		 
				<?php } ?>
				</tbody>
			</table>
		</section>
	</div>
</div>

<?php get_footer(); ?>
