<?php if(!$_GET["ajax"]){
	get_header();

	$args = array(
	  'post_type'=>'vaccination',
	  'title_li'=> '&nbsp;',
	  'echo' => false,  
	);
	$sidebar_menu = wp_list_pages( $args );

	// If the site uses xmedicus, book button should link directly to
	if(get_field('xmedicus_id')){
		$sidebar_button = '<a class="button-book" style="margin-bottom:5px" href="' . get_bloginfo('wpurl') . '/booking/clinic/' . get_field('xmedicus_id') . '"><div class="button-book-title"> ' . dlvs_translate("Book vaccination") . '</div></a>';
	}else{
		$sidebar_button = '<a class="button-book" style="margin-bottom:5px" href="' . get_bloginfo('wpurl') . '/booking/"><div class="button-book-title"> ' . dlvs_translate("Book vaccination") . '</div></a>';
	}

} ?>

<div id="content">
	<div class="page col-full">
		<?php if(!$_GET["ajax"]){ sidebar($sidebar_button.$sidebar_menu, false, false); } ?>
		<section id="main" class="<?php if(!$_GET["ajax"]){ echo "col-left"; } else { echo "fullwidth"; } ?>">

			<?php 
				//echo '<a class="button-book" href="' . get_bloginfo('wpurl') . '/booking/"><div class="button-book-title">Book your vaccination</div></a>';
			?>

			<?php if (have_posts()): while (have_posts()): the_post(); ?>
			    <div class="post">
			        <header><h1><?php the_title(); ?></h1></header>
	            	<?php echo dlvs_translate('Price'); ?>: <?php the_field("price"); ?>
	            	<br/></br/>

			        <div class="post-content">
						<?php	the_content();	 ?>  
	            	</div>
	            	<br />
					<div class="accordion">						 							
						<?php echo slidedown(dlvs_translate('Vaccination content'), get_field("vaccine_contents")); ?>							
						<?php echo slidedown(dlvs_translate("Who should be vaccinated?"), get_field("who_should_be_vaccinated")); ?>
						<?php echo slidedown(dlvs_translate("Vaccine dose"), get_field("vaccination_dosis")); ?>
						<?php echo slidedown(dlvs_translate("Who should not be vaccinated?"), get_field("who_should_not_be_vaccinated")); ?>
						<?php echo slidedown(dlvs_translate("Pregnancy and breastfeeding"), get_field("pregnancy_and_lactation")); ?>
						<?php echo slidedown(dlvs_translate("Duration of immunity"), get_field("duration_of_immunity")); ?>
						<?php echo slidedown(dlvs_translate("Side effects"), get_field("side_effects")); ?>
						<?php echo slidedown(dlvs_translate("Price"), get_field("price")); ?>						                 
					</div>														
			    </div><!--#end post-->
	        <?php endwhile; endif; ?>
		</section>
	</div>
</div>

<?php 
if(!$_GET["ajax"]){
	get_footer(); 
}	
?>
