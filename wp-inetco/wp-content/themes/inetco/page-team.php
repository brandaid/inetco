<?php /* Template Name: Team Page */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
			<section class="box-top cas-studies">
				<?php the_content(); ?>
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="with-image">
					<div class="content-img">
					<?php the_post_thumbnail( 'medium-image', array( 'class' => 'box-top-image' ) ); ?>
					</div>
				</div>
				<?php } ?>

			</section>
			<h2 class="title-orange">Our team</h2>
			<section class="box-team">
				<div class="container">

					<?php $loop = new WP_Query( array( 'post_type' => 'team', 'order' => 'DESC' ) ); ?>
					<script>
						var teamPosts = {};
					</script>
			  		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<script>
						teamPosts[<?php echo $post->ID ?>] = <?php echo json_encode($post) ?>;
						teamPosts[<?php echo $post->ID ?>].thumbnail = '<?php json_encode(the_post_thumbnail('staff-tn'));?>';
						teamPosts[<?php echo $post->ID ?>].title = '<?php json_encode(the_title());?>';
						teamPosts[<?php echo $post->ID ?>].employeeTitle = '<?php json_encode(the_field('employee_title'));?>';
					</script>

					<div class="team">
						<a href="#" target-post="<?php echo $post->ID ?>" data-target="modal" class="link-overlay" data-toggle="modal"></a>
						<div class="overlay">	
							<?php the_post_thumbnail('staff-tn'); ?>
						</div>
						<h3><?php the_title(); ?></h3>
						<h4><?php the_field('employee_title'); ?></h4>
						<?php the_excerpt(); ?>
						<span>+</span>
					</div>

					<?php endwhile; wp_reset_query(); ?>
					<div class="modal">
					    <div class="modal-window">
					    	<span class="close" data-dismiss="modal">&times;</span>
					    	<span post-field="thumbnail"></span>
					        <h3 post-field="title"></h3>
							<h4 post-field="employeeTitle"></h4>
							<p post-field="post_content"></p>
					    </div>
					</div>
					<script>
						console.log(teamPosts);
					</script>
					
				</div>
			</section>
<?php get_footer(); ?>