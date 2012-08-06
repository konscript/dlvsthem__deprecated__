<?php get_header(); ?>
<?php
// Sidebar menu
$args = array(
  'post_type'	=>'clinic',
  'title_li'	=> '&nbsp;',
  'echo'			=> false,  
);
$sidebar_menu = wp_list_pages( $args ); 

$clinic = basename(get_permalink());
$sidebar_button = '<a class="button-book" style="margin-bottom:5px" href="' . get_bloginfo('wpurl') . '/booking/clinic/' . $clinic . '"><div class="button-book-title">Bestil vaccination</div></a>';
?>

<div id="content">
	<div class="page col-full">
		<?php sidebar($sidebar_button.$sidebar_menu, false, false); ?>
		<section id="main" class="col-left">

			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<div class="post clinic">

					<header><h1><?php the_title(); ?></h1></header>
					
					<?php 
					$clinic = basename(get_permalink());
					//echo '<a class="button-book" href="' . get_bloginfo('wpurl') . '/booking/clinic/' . $clinic . '"><div class="button-book-title">Bestil vaccination</div></a>';
					?>
					
					<div class="post-content">									
						<?php							
						// some text about the clinic
						echo the_content();					
						?>     					
						<br />
						<div class="contact">	
							<p class="header"></p>
							<p class="address"><?php the_field('address'); ?><br /><?php the_field('city'); ?></p>					
							<p class="telephone">Telefon: <?php the_field('phone_number'); ?></p>
						</div>	
						
						<?php $weekdays = array("monday", "tuesday", "wednesday", "thursday", "friday", "saturday"); ?>						
						<div class="opening_hours">	
							<p class="header"><strong>Åbningstiderne for klinikken tilpasses efter behov.</strong></p>
							<table class="zebra">
								<?php	foreach($weekdays as $weekday): ?>
										
									<?php 
									$hours = get_field($weekday);
									if($hours != ""): ?>
										<tr><td><?php echo ucfirst($weekday); ?></td><td><?php echo $hours; ?></td></tr>									
									<?php	endif; ?>								
								<?php	endforeach; ?>
							</table>			
						</div>
						
						<div class="gmap"><?php the_field('map'); ?></div>
					</div>
				</div><!--#end post-->
			<?php endwhile; endif; ?>
			
		</section>
	</div>
</div>

<?php get_footer(); ?>
