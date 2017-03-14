<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
			<?php
				$image_id = get_field('top_image');
				$image_size = 'blue-image';
				$image_array = wp_get_attachment_image_src($image_id, $image_size);
				$image_url = $image_array[0];
			?>
			<section class="box-hero" style="background: url('<?php echo $image_url; ?>') center 0 / cover no-repeat;">
				<h1><?php the_field('title'); ?></h1>
				<h2><?php the_field('subtitle'); ?></h2>
			</section>
			<section class="box-slider">
				<div class="owl-carousel owl-home">
					<?php if( have_rows('slider') ):
					    while ( have_rows('slider') ) : the_row();
					?>
				    <div class="item">
				    	<h2><?php the_sub_field('title'); ?></h2>
				    	<p><?php the_sub_field('description'); ?></p>
				    	<div class="box-image">
			    			<?php
			    				$attachment_id = get_sub_field('image');
			    		    	$size = "slider";
			    				$image = wp_get_attachment_image_src( $attachment_id, $size );
			    			?>
			    			<img src= "<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
				    	</div>
				    	<div class="box-word">
				    		<h4 class="fittext2"><?php the_sub_field('text_on_back'); ?></h4>
				    	</div>
				    </div>
				    <?php endwhile; endif; ?>
				</div>
			</section>
			<section class="box-staff">
				<h2 class="title-orange">Our TEAM</h2>
				<?php $loop = new WP_Query( array( 'post_type' => 'team', 'order' => 'DESC', 'posts_per_page' => 70 ) ); ?>
		  		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'staff', true);
				?>

				<a href="/meet-the-team/" class="staff" style="background: url('<?php echo $thumb_url[0]; ?>') center 0 / cover no-repeat;">
					<div class="center">
						<div class="center-info">
							<h2><?php the_title(); ?></h2>
							<p><?php the_field('employee_title'); ?></p>
						</div>
					</div>
				</a>

				<?php endwhile; wp_reset_query(); ?>

				<div class="staff">
					<div class="center">
						<div class="center-info">
							<a href="/meet-the-team/" class="btn">Join Our Team</a>
						</div>
					</div>
				</div>
			</section>	

<?php get_footer(); ?>