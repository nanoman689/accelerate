<?php
/**
 * The template for displaying case studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();

				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image1 = get_field('image1');
				$image2 = get_field('image2');
				$image3 = get_field('image3');
				?>

				<article class="case-study">

					<aside class="case-study-sidebar">
						<h2> <?php the_title(); ?> </h2>
						<h5> <?php echo $services; ?> </h5>
						<h5> <?php echo $client; ?> </h5>
						This is a project I made for this company for this. Here is the early stage startup that I helped design and do a front end and back end for.

					<?php the_content(); ?>

					<p> <strong><a href=" <?php echo $link; ?> ">Site Link</a></strong></p>

					</aside>

					<div class="case-study-images">
						<?php if($image1) { ?>
							<img src=" <?php echo $image1; ?> " />
						<?php } ?>
						
						<?php if($image2) { ?>
							<img src=" <?php echo $image2; ?> " />
						<?php } ?>
						
						<?php if($image3) { ?>
							<img src=" <?php echo $image3; ?> " />
						<?php } ?>
						

					</div>

				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
