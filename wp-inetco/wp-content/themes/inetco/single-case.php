<?php get_header(); ?>
<?php the_post(); ?>
			<section class="box-top cas-studies">
				<?php the_field('top_section'); ?>
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="with-image">
					<div class="content-img">
						<?php the_post_thumbnail( 'medium-image', array( 'class' => 'box-top-image' ) ); ?>
					</div>
				</div>
				<?php } ?>
			</section>
			<h2 class="title-orange">BAckground</h2>
			<section class="box-text-left orange-table">
				<div class="col-text">
					<?php the_field('left_box'); ?>
				</div>
				<?php
					$image_id = get_field('right_box_image');
					$image_size = 'custom-template';
					$image_array = wp_get_attachment_image_src($image_id, $image_size);
					$image_url = $image_array[0];
				?>
				<div class="col-image" style="background: url('<?php echo $image_url; ?>') center 0 / cover no-repeat;">
					<h3><?php the_field('right_box_text'); ?></h3>
				</div>
			</section>

			<section class="box-white-two-columns">
				<img src="<?php bloginfo('template_directory'); ?>/images/ico-strategy.png" alt="" class="ico">
				<?php the_field('ws_top'); ?>	
				<div class="container">
					<div>
						<?php the_field('ws_left'); ?>
					</div>
					<div>
						<?php the_field('ws_right'); ?>
					</div>
				</div>
			</section>

			
			<section class="box-gray">
				<img src="<?php bloginfo('template_directory'); ?>/images/ico-results.png" alt="" class="ico">
				<?php the_field('gs_info'); ?>
			</section>

			<?php
				$image_id = get_field('bs_background_image');
				$image_size = 'top-blog';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
			?>
			<section class="box-blue" style="background: url('<?php echo $image_url; ?>') center 0 / cover no-repeat;">
				<p><?php the_field('bs_text'); ?></p>
				<h4><?php the_field('bs_company'); ?></h4>
				<small><?php the_field('bs_name'); ?></small>
				<span></span>
			</section>
<?php get_footer(); ?>