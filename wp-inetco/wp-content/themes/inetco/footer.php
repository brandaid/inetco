			<?php if( get_field('blue_box_in_this_page') ): ?>				

			<?php
				$image_id = get_field('bb_image','option');
				$image_size = 'blue-image';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
			?>
			<section class="box-it" style="background: url('<?php echo $image_url; ?>') center 0 / cover no-repeat;">
				<small><?php the_field('bb_subtitle','option'); ?></small>
				<h2><?php the_field('bb_title','option'); ?></h2>
				<p><?php the_field('bb_description','option'); ?></p>
				<a href="<?php the_field('bb_button_link','option'); ?>" class="btn open-contact-us"><?php the_field('bb_button_text','option'); ?></a>
				<span></span>
			</section>

			<?php endif; ?>

			<?php if( get_field('section_map_in_this_page') ): ?>
				
			<section class="map">
				<?php $location = get_field('map','option'); if( !empty($location) ): ?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>
			</section>
				
			<?php endif; ?>
		</main>
		<footer class="footer">
			<section class="footer-top">
				<div class="container">
					<div class="first">
						<h3><?php bloginfo('title' ); ?></h3>
						<p><?php the_field('address','option'); ?><br>
						<?php the_field('state','option'); ?></p>
						<h3><a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a></h3>
						<p class="phone"><a href="call:<?php the_field('phone','option'); ?>"><?php the_field('phone','option'); ?></a></p>
					</div>
					<div>
						<ul class="socials">
							<?php while(has_sub_field('social_media_links','option')): ?>
							    <li><a href="<?php the_sub_field('link','option') ?>" class="fa <?php the_sub_field('code','option') ?>" target="blank"></a></li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			</section>
			<section class="footer-bottom">
				<div class="container">
					<small>&copy; <?php echo date('Y'); ?> <?php bloginfo('title' ); ?> <br><span>|</span>  Website hand crafted by <a href="http://design.brandaiddesignco.com/" target="blank">Brand Aid</a></small>
				</div>
			</section>
		</footer>
	</div>
	<nav id="c-menu--push-right" class="c-menu c-menu--push-right box-contact">
		<button class="c-menu__close">✕</button>
	  	<h2><?php the_field('bc_text_1','option'); ?><span><?php the_field('bc_text_2','option'); ?></span></h2>
	  	<p><?php the_field('bc_description','option'); ?></p>
		<?php the_field('bc_form','option'); ?>
	</nav>
	<div id="c-mask" class="c-mask"></div>
	<!--JQUERY -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
	<!--CONTACT BOX -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/contact-box.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.slabtext.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nice-select.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/googlemaps.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfmAwGrIwa0ZoZRse40pLAUMawm6x4pRE"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<?php wp_footer(); ?>

	<script>
		// Function to slabtext the H1 headings
		function slabTextHeadlines() {
		    $("h2.fittext1, h4.fittext2, h2.fittext22").slabText({
		        // Don't slabtext the headers if the viewport is under 380px
		        "viewportBreakpoint":380
		    });
		};

		// Load fonts using google font loader
		var WebFontConfig = {
		    google: { families: [ 'Open+Sans:400,700:latin', 'Oswald:700:latin' ] },
		    // slabText the headers when the font has finished loading (or not)
		    fontactive: slabTextHeadlines,
		    fontinactive: slabTextHeadlines
		};
		(function() {
		    var wf = document.createElement('script');
		    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		    wf.type = 'text/javascript';
		    wf.async = 'true';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(wf, s);
		})();
	</script>
</body>
</html>