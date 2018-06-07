<?php
/**
 * Template Name: Journal
 */
?>

<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php/* Start the Loop */ ?>


			<?php $args = array(
				'category_name' => 'Journal', 
			);
			$myposts = get_posts( $args );
			?>
			<?php if (count ($myposts) > 0) : ?>
				<?php foreach ( $myposts as $post ) : setup_postdata($post); ?>
					<?php get_template_part( 'template-parts/content' ); ?>
					<!--?php the_content(); ?-->
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php the_posts_navigation(); ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
