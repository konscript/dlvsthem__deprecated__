<?php get_header(); ?>
<?php 
$args = array(
  'post_type'=>'region',
  'title_li'=> '&nbsp;',
  'echo'         => false,  
);
$menu = wp_list_pages( $args );
?>
<?php the_submenu($menu); ?>

	<div id="content">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
		    <div class="post country">
		        <h1><?php the_title(); ?></h1>	        		        
		        <div class="post-content">		   		        			
		        	<?php
		        		$destination = urlencode(the_title('', '', false));
		        	?>		                	
					<a href="/clinic/destination/<?php echo $destination; ?>" class="button">Book vaccination</a>
		        <div class="clear"></div> <!-- TODO: proper clearfix should be added -->

						<?php
							$already_outputted = array();
													
							// labels for groups
							$vaccinations_groups_labels = array(
								"All travellers", "Above 2 weeks", "Above 3 months", "Above 6 months"
							);
							
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
									<td>&nbsp;</td>
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
												<td><a href="<?php echo get_permalink( $vaccination->ID ); ?>"><?php echo $vaccination->post_title; ?></a></td>
												<?php 
												// output cell with vaccination indicator
												$checkmark = '<img src="'.get_bloginfo("template_url").'/img/checkmark.png"/>';
												for ( $counter = 1; $counter <= count($vaccinations_groups_labels); $counter++) {
													echo "<td>";
													echo ($counter == $group_id)? $checkmark : " - ";
													echo "</td>";										
												}
												?>
											</tr>
										<?php endif; ?>														
									<?php endforeach; ?>
								<?php endif; ?>			
							<?php endforeach; ?>	
							</tbody>
						</table>		
						
						<h3>FAQ</h3>
						<?php 
							$country_id = get_the_ID();
							$faqs = getFaqsByCountry($country_id); 
						?>			
						<div class="accordion">						
						<?php foreach($faqs as $id => $faq):
							echo slidedown($faq["post_title"], $faq["post_content"], $id);
						endforeach; ?>		
						</div>			

						<h3>Description</h3>							
					 	<?php echo the_content(); ?>											
					</div>					 						 
		    </div><!--#end post-->
        <?php endwhile; endif; ?>
	</div><!--#end content -->

<?php get_footer(); ?>
