<?php get_header(); ?>
<?php the_post(); ?>
			<section class="box-top">
				<?php the_content(); ?>
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="with-image">
					<div class="content-img">
					<?php the_post_thumbnail( 'medium-image', array( 'class' => 'box-top-image' ) ); ?>
					</div>
				</div>
				<?php } ?>
				<div class="big-title">
					<h2 class="fittext1"><?php the_field('ct_text_on_back') ?></h2>
				</div>
			</section>
			<div class="container">
				<?php if( get_field('box_1') ): ?>
				<div class="box-text-left">
					<div class="col-text">
						<?php the_field('box_1'); ?>
					</div>
					<div class="col-image">
					<?php if( get_field('image_of_box_1') ): ?>
						<?php
				    	    $attachment_id = get_field('image_of_box_1');
				    	    $size = "custom-template";
				    	    $image = wp_get_attachment_image_src( $attachment_id, $size );
				    	?>
				    	<img src= "<?php echo $image[0]; ?>" />
					<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>
				<?php if( get_field('box_2') ): ?>
				<div class="box-text-right">
					<div class="col-image">
						<?php if( get_field('image_of_box_2') ): ?>
						<?php
				    	    $attachment_id = get_field('image_of_box_2');
				    	    $size = "custom-template";
				    	    $image = wp_get_attachment_image_src( $attachment_id, $size );
				    	?>
				    	<img src= "<?php echo $image[0]; ?>" />
				    	<?php endif; ?>
					</div>
					<div class="col-text">
						<?php the_field('box_2'); ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
<?php get_footer(); ?>