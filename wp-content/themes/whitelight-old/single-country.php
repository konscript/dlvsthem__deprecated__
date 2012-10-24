<?php get_header(); ?>
<?php 
<<<<<<< HEAD
// Sidebar menu
$args = array(
  'post_type'=>'region',
  'title_li'=> '&nbsp;',
  'echo'         => false,  
);
$sidebar_menu = wp_list_pages( $args );
$sidebar_country_meta_links = '<a href="'.get_field('latest_disease_surveillance').'" target="_blank">Sidste sygdomsovervågning</a>';
if (get_field('updated_malaria_map')) {
	$sidebar_country_meta_links .= '<br /><a href="'.get_field('updated_malaria_map').'" target="_blank">Opdateret Malaria kort</a>';
}
$sidebar_country_meta = '
	<h3 class="country-meta-header">Lande fakta</h3>
	<table class="country-meta">
		<tbody>
		<tr>
			<td><strong>Capital:</strong></td>
			<td>'.get_field('capital').'</td>
		</tr>
		<tr>
			<td><strong>Population:</strong></td>
=======

if (dlvssite() == "sikkerrejse") {
	$sidebar_back = '<a href="'. get_bloginfo("wpurl") . '/vaccinationsanbefaling/" style="margin-bottom:10px;float:left">Tilbage til landeoversigten</a><br />';
} else {
	$sidebar_back = '<a href="'. get_bloginfo("wpurl") . '/recommendation/" style="margin-bottom:10px;float:left">Go back to the map</a><br />';
}
$destination = urlencode(the_title('', '', false));
$sidebar_button = '<a class="button-book" href="'.get_bloginfo("wpurl").'/booking/destination/' . $destination . '"><div class="button-book-title">' . dlvs_translate("Book vaccination") . '</div></a>';

//$sidebar_country_meta = '<h3>Lande fakta</h3>';
if(get_field('flag')) {
	$sidebar_country_meta = '
	<div class="country-flag">
		<img src="'.get_field("flag").'" />
	</div>';
}
$sidebar_country_meta .= 
	'<table class="country-meta">
		<tbody>
		<tr>
			<td><strong>'.dlvs_translate('Capital').':</strong></td>
			<td>'.get_field('capital').'</td>
		</tr>
		<tr>
			<td><strong>'.dlvs_translate('Population').':</strong></td>
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
			<td>'.get_field('population').'</td>
		</tr>
		<tr>
			<td colspan="2">
				'.get_field('embassy_info').'
			</td>
		</tr>
		<tr>
			<td colspan="2">
				'.$sidebar_country_meta_links.'		
			</td>
<<<<<<< HEAD
		</tr>				
		</tbody>
	</table>';
=======
		</tr>';

	if (get_field('latest_disease_surveillance')) {
		$sidebar_country_meta .= '<tr><td colspan="2"><a href="'.get_field('latest_disease_surveillance').'" target="_blank">'.dlvs_translate('Latest Disease Surveillance').'</a></td></tr>';
	}

	if (get_field('updated_malaria_map')) {
		$sidebar_country_meta .= '<tr><td colspan="2"><a href="'.get_field('updated_malaria_map').'" target="_blank">'.dlvs_translate('Updated Malaria Map').'</a></td></tr>';
	}

$sidebar_country_meta .= '
		</tbody>
	</table>';

>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
?>

<div id="content">
	<div class="page col-full">
<<<<<<< HEAD
		<?php sidebar($sidebar_menu, false, $sidebar_country_meta); ?>
=======
		<?php sidebar($sidebar_back . $sidebar_button, false, $sidebar_country_meta); ?>
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
		<section id="main" class="col-left">

			<?php if (have_posts()): while (have_posts()): the_post(); ?>
			    <div class="post country col-full">
<<<<<<< HEAD
		        
					<?php if(get_field('flag')) { ?>
						<div class="country-flag">
							<img src="<?php echo get_field('flag'); ?>" />
						</div>
					<?php } ?>
					
=======
		 				
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
					<header><h1><?php the_title(); ?></h1></header>

					<?php 
						$destination = urlencode(the_title('', '', false));
<<<<<<< HEAD
						$book_button = '<a class="button-book" href="' . get_bloginfo('wpurl') . '/booking/destination/' . $destination . '"><div class="button-book-title">Bestil vaccination</div></a>';
						echo $book_button;
=======
						$book_button = '<a class="button-book" href="' . get_bloginfo('wpurl') . '/booking/destination/' . $destination . '"><div class="button-book-title">' . dlvs_translate("Book vaccination") . '</div></a>';
						//echo $book_button;
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
					?>
	
					<div class="post-content">	

					<?php							
						$already_outputted = array();
<<<<<<< HEAD
											
						// labels for groups
						$vaccinations_groups_labels = array(
							"Alle rejsende", "+2 uger", "+3 måneder", "+6 måneder"
						);
=======
						
						if (dlvssite() === "sikkerrejse") {
							// labels for groups
							$vaccinations_groups_labels = array(
								"Alle rejsende", "+2 uger", "+3 måneder", "+6 måneder"
							);
						} else {
						// labels for groups
							$vaccinations_groups_labels = array(
								"All travelers", "+2 weeks", "+3 months", "+6 months"
							);
						}
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
						
						// vaccinations for groups
						$vaccinations_groups = array();
						$vaccinations_groups[1] = get_field('group_1');
						$vaccinations_groups[2] = get_field('group_2');
						$vaccinations_groups[3] = get_field('group_3');
						$vaccinations_groups[4] = get_field('group_4');						
					?>		
					<table id="vaccinations_groups">
						<thead>
							<tr>
<<<<<<< HEAD
								<td>Vaccination List</td>
=======
								<td>Vaccination</td>
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
								<?php foreach($vaccinations_groups_labels as $label): ?>
									<td><?=$label?></td>
								<?php endforeach; ?>							
							</tr>
						</thead>
						<tbody>							
						<?php foreach($vaccinations_groups as $group_id => $group): ?>
							<?php if(!empty($group)): ?>								
								<?php foreach($group as $vaccination): ?>									
									<?php
										// make sure every vaccine is only outputted once (somebody may have added a vaccine to multiple groups)									
										if(!in_array($vaccination->ID, $already_outputted)):
											$already_outputted[] = $vaccination->ID;										
											?>									
											<tr>	
												<td class="vaccination-name"><a href="<?php echo get_permalink( $vaccination->ID ); ?>"><?php echo $vaccination->post_title; ?></a></td>
												<?php 
												// output cell with vaccination indicator
												$checkmark = '<img src="'.get_bloginfo("template_url").'/img/checkmark.png"/>';
											
												$repeat_in_next_group = false;
												for ( $counter = 1; $counter <= count($vaccinations_groups_labels); $counter++) {
													echo "<td>";
													if($counter == $group_id || $repeat_in_next_group === true){
														$repeat_in_next_group = true;
														echo $checkmark;
													}else{
														echo "-";
													}
													echo "</td>";
												}
												?>
											</tr>
										<?php endif; ?>		
								<?php endforeach; ?>
							<?php endif; ?>			
						<?php endforeach; ?>	
						</tbody>
<<<<<<< HEAD
					</table>		
					
					<div class="disclaimer">
						The vaccination list on this page is for general guidance, and it may vary from your actual needs. Therefore, when you book time for vaccinations or malaria counseling, you will receive a risk assessment form in your e-mail with questions about:
						<ul>
							<li>Your itinerary (“where are you going?”)</li>
							<li>The timing of your journey (“when are you going? Do you have time to complete the recommended course?)</li>
							<li>The nature of your journey (“e.g. backpacking or 5 star hotel?”)</li>
							<li>Your previous medical history</li>
							<li>Consideration of any full or partially completed courses of previous vaccines</li>
						</ul>
						Bring the form to the Travel Nurse upon arrival at our clinic and she will make sure you are immunized and counseled before your travels.
					</div>
=======
					</table>
					<?php if(dlvssite() == "flufighters") { ?>
						<br />
						<div class="disclaimer">
							The vaccination list on this page is for general guidance, and it may vary from your actual needs. Therefore, when you book time for vaccinations or malaria counseling, you will receive a risk assessment form in your e-mail with questions about:
							<ul>
								<li>Your itinerary (“where are you going?”)</li>
								<li>The timing of your journey (“when are you going? Do you have time to complete the recommended course?)</li>
								<li>The nature of your journey (“e.g. backpacking or 5 star hotel?”)</li>
								<li>Your previous medical history</li>
								<li>Consideration of any full or partially completed courses of previous vaccines</li>
							</ul>
							Bring the form to the Travel Nurse upon arrival at our clinic and she will make sure you are immunized and counseled before your travels.
						</div>
					<?php } ?>
>>>>>>> 9c57f1a5ed53f1fdfeee88725baf3787f218061f
					
					<!-- <h3>FAQ</h3> -->
					<?php /*
						$country_id = get_the_ID();
						$faqs = getFaqsByCountry($country_id); 
					*/ ?>			
					<!-- <div class="accordion"> -->
					<?php /* foreach($faqs as $id => $faq):
						echo slidedown($faq["post_title"], $faq["post_content"], $id);
					endforeach; */ ?>		
					<!-- </div> -->

					<!-- <h3>Description</h3> -->
				 	<?php //echo the_content(); ?>
			    </div><!--#end post-->
	        <?php endwhile; endif; ?>
		</section>
	</div>
</div>

<?php get_footer(); ?>