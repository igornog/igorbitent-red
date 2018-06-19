<?php
/**
 * The template for displaying all pages.
 *
 *  Template Name: Find Us
 * 
 * @package RED_Starter_Theme
 */

	get_header(); ?>

		<div id="primary-findus" class="content-area content-area-fu">
			<main id="main" class="site-main site-main-fu" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; ?>

			</main>
		</div>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>