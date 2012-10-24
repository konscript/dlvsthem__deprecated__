<?php
/**
 * Homepage Streamer Panel
 */
	
?>
	<section id="streamer" class="home-section fix">
		<h1><a href="<?php bloginfo('url'); ?>/app/" class="highlight"><?php echo dlvs_translate("New mobile app"); ?></a>
			<span><?php echo ", ".dlvs_translate("free of charge"); ?></span><br /> 
			<span><?php echo "- ".dlvs_translate("bring your doctor with you."); ?></span>
		</h1>
		<div class="phone">
			<div class="icons">
				<?php echo dlvs_translate("Get it in"); ?><br />
				<a href="http://itunes.apple.com/dk/app/l-gens-rejserad/id505336046?mt=8"><img src="<?php bloginfo('template_directory'); ?>/images/dlvs/app-iphone-small.png" alt="iPhone App Store" /></a>
				<a href="https://market.android.com/details?id=lbi.android.dlvs"><img src="<?php bloginfo('template_directory'); ?>/images/dlvs/app-android-small.png" alt="Android Market" /></a>
			</div>			
			<a href="<?php bloginfo('url'); ?>/app/" class="iphone-model">
				<?php if (dlvssite() == "sikkerrejse") { ?>
					<img src="<?php bloginfo('template_directory'); ?>/images/dlvs/frontpage-iphone.png" alt="iPhone app" />
				<?php } else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/images/dlvs/frontpage-iphone-uk.png" alt="iPhone app" />
				<?php } ?>
			</a>
		</div>
	</section>
	
	<?php wp_reset_query(); ?>