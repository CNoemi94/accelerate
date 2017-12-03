<?php
/**
 * The template for displaying the About Page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


get_header(); ?>


	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<h2 id="splash-txt"><?php the_content(); ?></h2>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
	<div id="primary" class="about-content">
		<section class="about-topics">
			<div class="site-content about-topics">
				<div class="about-list">
					<h4>Our Services</h4>
					<p>We take pride in our clients and the content we create for them. Here’s a brief overview of our offered services.</p>
				</div>
					<div class="about-topic-items">
						<?php query_posts('post_type=about_topics'); ?>
						<?php
								$i = 0;
								while ( have_posts() ) : the_post();
								$image = get_field('featured_image');
								$size = "full";

								if(($i % 2) == 0) :
						 ?>
							 <article class="about-item">
								 <div class="left content">
										<h2><?php the_title(); ?></h2>
										<p> <?php the_content(); ?></p>
										</div>
										<div class="right img">
											 <?php echo wp_get_attachment_image($image, $size); ?>
										</div>
								</article>
							<?php $i = $i + 1;?>
							<?php else: ?>
								<article class="about-item">
									<div class="right content">
										 <h2><?php the_title(); ?></h2>
										 <p> <?php the_content(); ?></p>
									</div>
									<div class="left img">
										<?php echo wp_get_attachment_image($image, $size); ?>
									</div>
								</article>
							<?php $i = $i + 1;?>
							<?php endif; endwhile; // end of the loop. ?>
							<?php wp_reset_query(); ?>
						</div>

				</div>
			</section>
			<div class="site-content contact-us-footer">
				<div class="footer-content">
					<h3 class="about-question">Interested in working with us?</h3>
					<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
				</div>
			</div>

	</div><!-- #primary -->

<?php get_footer(); ?>
