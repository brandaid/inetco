<?php /* Template Name: Facility Page */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
			<?php
				$image_id = get_field('fa_image');
				$image_size = 'blue-image';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
			?>
			<section class="box-hero" style="background: url('<?php echo $image_url; ?>') center 0 / cover no-repeat;">
				<h1><?php the_field('fa_title'); ?></h1>
			</section>
			<section class="box-slider">
				<div class="top-title-without-img">
					<?php the_field('info'); ?>
			    	<a href="#" class="btn-orange" data-target="modal-fa" data-toggle="modal-fa"><?php the_field('fa_text_button'); ?></a>
			    	<div class="big-title">
			    		<h2 class="fittext1"><?php the_field('fa_text_on_back'); ?></h2>
			    	</div>
			    </div>
			</section>
			<section class="box-slider-facility">
				<h2 class="title-orange">Photo Gallery</h2>
				<div class="container container-850">
					<div class="owl-carousel owl-facility">
						<?php $images = get_field('gallery');
							if( $images ): ?>
							    <?php foreach( $images as $image ): ?>
							    <div class="item">
							        <img src="<?php echo $image['sizes']['big-image']; ?>" alt="<?php echo $image['alt']; ?>" />
							    </div>
							    <?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>

			<div id="modal-fa" class="modal modal-facility">
			    <div class="modal-window">
			    	<span class="close" data-dismiss="modal">&times;</span>
			    	<?php the_field('tour'); ?>
			    </div>
			</div>
<?php get_footer(); ?>