<?php
/**
 * Template Name: Home
 */
?>

<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div class="image-home logo-home">
		<h1>Igorbitent</h1>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="hero-image">
		</section>

			<h1>inhabitent journal</h1>
			<section class="inhabitent-journal">
			
			<?php/* Start the Loop */ ?>


			<?php $args = array(
				'posts_per_page'   => 3,
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
			</section>

			<section class="latest-adventures">
				<h1>latest adventures</h1>
				<?php/* Start the Loop */ ?>


				<?php $args = array(
					'category_name' => 'Adventures',
					'posts_per_page'   => 4,
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
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
