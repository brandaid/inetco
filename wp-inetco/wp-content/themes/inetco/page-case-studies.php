<?php /* Template Name: Case Studies Page */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
			<section class="top-title-without-img">
				<?php the_content(); ?>
			</section>
			<h2 class="title-orange">OUR case studies</h2>
			<section class="table-cases">
				
				<?php $loop = new WP_Query( array( 'post_type' => 'case', 'order' => 'DESC', 'posts_per_page' => 4 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'case-studies', true);
				?>
				<div class="box-case" style="background: url('<?php echo $thumb_url[0]; ?>') center 0 / cover no-repeat;">
					<div class="box">
						<div class="center-info">
							<h3><?php the_title(); ?></h3>
							<p><?php the_field('subtitle'); ?></p>
							<a href="<?php the_permalink(); ?>" class="btn">VIew case study</a>
						</div>
					</div>
				</div>

				<?php endwhile; wp_reset_query(); ?>
	
			</section>
			<section>
				<ul class="brand-partners">
					<?php while(has_sub_field('partners',21)): ?>
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
			<?php
				$image_id = get_field('image_on_slider');
				$image_size = 'blue-image';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
			?>
			<section class="box-blue-slider" style="background: url('<?php echo $image_url; ?>') center 0 / cover no-repeat;">
				<div class="owl-carousel owl-cases">
					<?php while(has_sub_field('case_studies_slider')): ?>
					    <div class="item">	
			        		<h3><?php the_sub_field('title'); ?></h3>
				    		<p><?php the_sub_field('description'); ?></p>
				    		<h4><?php the_sub_field('company'); ?></h4>
				    		<small><?php the_sub_field('name'); ?></small>
			    		</div>
					<?php endwhile; ?>
				</div>
				<span class="rayed"></span>
			</section>
<?php get_footer(); ?>