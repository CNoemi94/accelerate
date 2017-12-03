<?php
/**
 * The template for displaying the About Topics archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>


	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<div class="hero-image">

			</div>
			<div class="welcome-message">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div>
			<article class="about-topics-list">

				<?php
				 		$i = 0;
						while ( have_posts() ) : the_post();
	          $image = get_field('featured_image');
						$size = "full";

						if(($i % 2) == 0) :
	       ?>
		       <article class="about-left">
						 <div class="left-content">
			          <h2><?php the_title(); ?></h2>
			          <p> <?php the_content(); ?></p>
							</div>
							<div class="right-img">
					       <?php echo wp_get_attachment_image($image, $size); ?>
					    </div>
						</article>
					<?php $i = $i + 1;?>
					<?php else: ?>
						<article class="about-right">
							<div class="right-content">
								 <h2><?php the_title(); ?></h2>
								 <p> <?php the_content(); ?></p>
							</div>
							<div class="left-img">
								<?php echo wp_get_attachment_image($image, $size); ?>
							</div>
						</article>
					<?php $i = $i + 1;?>
					<?php endif; endwhile; // end of the loop. ?>

				</article>
			<div class="contact-us-footer">

			</div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
