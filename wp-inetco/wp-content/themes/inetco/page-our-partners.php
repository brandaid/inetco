<?php /* Template Name: Our Partners Page */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
			<section class="top-title-without-img">
				<?php the_content(); ?>
			</section>
			<h2 class="title-orange">OUR PARTNERS</h2>
			<section>
				<ul class="brand-partners">

					<?php while(has_sub_field('partners')): ?>
					    <li>
					    	<div class="center-brand">
					    		<div class="vertical-brand">
					    			<?php
					    	    	    $attachment_id = get_sub_field('image');
					    	    	    $size = "medium";
					    	    	    $image = wp_get_attachment_image_src( $attachment_id, $size );
					    	    	?>
					    	    	<a href="<?php the_sub_field('link') ?>" target="blank"><img src= "<?php echo $image[0]; ?>" /></a>
					    		</div>
					    	</div>
					    </li>
					<?php endwhile; ?>

				</ul>
			</section>
<?php get_footer(); ?>